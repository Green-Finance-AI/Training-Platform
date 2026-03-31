@echo off
start wsl -e bash -c "cd ~ && systemctl status nginx; exec bash"
start wsl -e bash -c "cd ~ && systemctl status rstudio-server; exec bash"
start wsl -e bash -c "cd ~ && systemctl status jupyterhub; exec bash"
/pause