# HugoCMS Editor
a standalone online editor to write Hugo compatible content using Markdown.
  
[Read more](https://hugoeditor.com/en/)
  
## Requirements

- current browser
- php from version 7.4
  
## Short instructions

1. Install apache2-utils
    on Debian with apt install apache2-utils

2. Install Hugo
   e.g. apt install hugo
    or with tarball

3. Run hugo new site <directory>
   to set write permissions sudo -u <user> hugo new site <directory>
   it should be noted that Hugo writes to the 'public/' subdirectory by default.

4. Clone the repo into the 'static/edit/' directory, for example

5. Create a password with htpasswd and configure Nginx or Apache2 to protect the directory

6. Copy the license files sent by mail into the directory.

7. Create the Hugo configuration file (config.json).

8. Call up the editor via your own domain with '/edit' appended
  
[Read more](https://hugoeditor.com/en/install-use/)
 
## License
 
This project is subject to German copyright law.  
Use requires permission.  
  
(c) [Inter-Data](https://inter-data.de/)
