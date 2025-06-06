# Save in /etc/nginx/sites-available/training.greenfinanceai.com
# ──────────────────────────────────────────────────────────────────────────────
# 1) HTTP → HTTPS redirect
# ──────────────────────────────────────────────────────────────────────────────
server {
    if ($host = training.greenfinanceai.com) {
        return 301 https://$host$request_uri;
    } # managed by Certbot


    # This block only issues a 301 redirect; accepts nothing else on port 80.
    listen 80;
    server_name training.greenfinanceai.com;
    return 301 https://$host$request_uri;


}

# ──────────────────────────────────────────────────────────────────────────────
# 2) Main HTTPS server for training.greenfinanceai.com
# ──────────────────────────────────────────────────────────────────────────────
server {
    listen 443 ssl;
    server_name training.greenfinanceai.com;

    # 2A) SSL certificates (Certbot‐managed files)
    ssl_certificate /etc/letsencrypt/live/training.greenfinanceai.com/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/training.greenfinanceai.com/privkey.pem; # managed by Certbot
    include             /etc/letsencrypt/options-ssl-nginx.conf;
    ssl_dhparam         /etc/letsencrypt/ssl-dhparams.pem;

    # 2B) PHP Landing Page (your “/home/alice/Training-Platform/”)
    root /home/alice/Training-Platform/;
    index index.php index.html;

    # Serve files if they exist; else 404
    location / {
        try_files $uri $uri/ =404;
    }

    # Process .php scripts via PHP‐FPM
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    # 2C) RStudio Server proxy at /rstudio/
    location /rstudio/ {
        proxy_pass       http://127.0.0.1:8787/;
        proxy_set_header Host            $host;
        proxy_set_header X-Real-IP       $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header Upgrade         $http_upgrade;
        proxy_set_header Connection      "upgrade";
        proxy_read_timeout       20d;
        proxy_buffering          off;
    }

    # 2D) JupyterHub proxy at /jupyter/
    location /jupyter/ {
        proxy_pass       http://127.0.0.1:8000/jupyter/;
        proxy_set_header Host            $host;
        proxy_set_header X-Real-IP       $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header Upgrade         $http_upgrade;
        proxy_set_header Connection      "upgrade";
        proxy_read_timeout       20d;
        proxy_buffering          off;
    }

    # 2E) Static assets for JupyterHub under /jupyter/hub/static/
    location /jupyter/hub/static/ {
        proxy_pass       http://127.0.0.1:8000/jupyter/hub/static/;
        proxy_set_header Host            $host;
        proxy_set_header X-Real-IP       $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    }

}
