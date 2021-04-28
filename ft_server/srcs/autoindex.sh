#!/bin/bash

mdulcie="/etc/nginx/sites-available/mdulcie.conf"
on="autoindex on"
off="autoindex off"

if [ "$1" == "on" ]
then
        sed -i "s/$off/$on/g" "$mdulcie"
else if [ "$1" == "off" ]
then
        sed -i "s/$on/$off/g" "$mdulcie"
else
        echo "not on, not off";
fi
fi

if [ "$1" == "on" ] || [ "$1" == "off" ]
then
        service nginx restart
fi