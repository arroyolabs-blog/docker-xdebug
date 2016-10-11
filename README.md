# docker-xdebug
Example of how to integrate Docker with xdebug on clean Erdiko example

## Quick Start

With current settings you will need to create an alias with static IP
on Linux:

`sudo ip addr add 10.254.254.254/24 brd + dev eth0 label eth0:1`

if you're running OS X:

`sudo ifconfig en0 alias 10.254.254.254 255.255.255.0`


Go to `xdebug_56/docker` and run `docker-compose up`, and voila, a pristine
Erdiko project up and running.

To browse it go to http://localhost:8088/

> for xdebug Client setup & alternate configuration please refer to: 
>
> http://blog.arroyolabs.com/2016/10/docker-xdebug/
