Upcoming Events
===================

Upcoming Events is an events plugin for WordPress, built to be easy to use and manage. 

Features include:

* Add events, set start / end dates, time and location. 
* Show event date before content in front end. 
* Assign event into event types
* Widget to show upcoming events

## Installation

This section describes how to install the plugin and get it working.

## Map Domain to localhost / Windows OS

Open file hosts located at C:\Windows\System32\Drivers\etc with administrator privileges and add below line.

	127.0.0.1 local-www.eventlisting.com

Apache’s virtual host feature allows to point custom domains to project inside c:\xampp\htdocs\ folder.
Open C:\xampp\apache\conf\extra\httpd-vhosts.conf and add below lines.

  NameVirtualHost *
    <VirtualHost *>
        DocumentRoot "C:/xampp/htdocs"
        ServerName localhost
    </VirtualHost>
    
    <VirtualHost *>
        ServerName local-www.eventlisting.com
        ServerAlias local-www.eventlisting.com
        DocumentRoot "C:/xampp/htdocs/example"
    </VirtualHost>
    
If your localhost has setup to listen on any other port, add your port number in tags.
e.g. <VirtualHost *:80>

Now restart Apache, and once you try and access http://localhost, it should resolve as local-www.eventlisting.com

### Uploading in WordPress Dashboard

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `events.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

### Using FTP 
1. Download `events.zip`
2. Extract the `events` directory to your computer
3. Upload the `events` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin Dashboard
