# Dolumar
Play now at http://www.dolumar.com/

## Quick start
First fork the project (so that you can make changes), then click the button below:

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

This will setup a Heroku project with all required extensions installed.

## Setup
Dolumar has a few requirements, listed in composer.json. We have optimized Dolumar so that it can easily run on
a free heroku daemon, as long as you don't have too much players. It is, however, a php web application, so you 
can easily run it on any other server.

## Local setup
For a local (development) setup, make sure you have composer installed.
Simply run composer.json to install all dependencies.

## Set up SMTP server
You need to set SMTP credentials in order to get the email validation working. Following instructions will get it up and 
running with mandrill, but you can use any SMTP server. 

In heroku, set:
* EMAIL_SMTP_SERVER: smtp.mandrillapp.com
* EMAIL_SMTP_SECURE: tls
* EMAIL_SMTP_PORT: 587
* EMAIL_SMTP_USERNAME: abc
* EMAIL_SMTP_PASSWORD: abc

Optionally, you can also set:
* AIRBRAKE_TOKEN (airbrake api token, to gather errors)
* SERVERLIST_URL (api that keeps track of all your servers)
* CREDITS_GAME_TOKEN (your game token on the catlab credits framework)
* CREDITS_PRIVATE_KEY (your private key to access catlab credits framework)

## CatLab Credits
If you want to offer paid features on your server, you will need to setup an account on the CatLab credits framework. 
Contact us at support@catlab.be in order to get you up and running. Or you can write your own payment gateway :-)