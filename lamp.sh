#!/usr/bin/env bash
#####################################################################
# ./lamp.sh [ start | stop ]
#####################################################################

# start the docker-compose instance from file
set -e
input=$1
function __start(){
docker-compose up -d &&
docker-compose logs -f 
}
# stops the docker-compose instance from file
function __stop(){
docker-compose down
exit 0
}
# checks user input
if [ -z $input ]; then
    clear
    printf "\nCommand usage: $0 [ start | stop ]\n\n"
elif [[ "$input" =~ ^(start)$ ]]; then
    __start
elif [[ "$input" =~ ^(stop)$ ]]; then
    __stop
fi
