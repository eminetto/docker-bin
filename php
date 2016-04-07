#!/bin/bash

[ -z $1 ] && {
@=$(cat /dev/stdin)
}

DIR=$(pwd)
docker run --rm --sig-proxy=true -v ${DIR}:${DIR} -w ${DIR} --pid=host php:7.0.4-cli php "$@"
