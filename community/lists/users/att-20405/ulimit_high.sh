#!/bin/sh
ARGS=$@
ULIMIT_S=300000
#ULIMIT_S=1073741824

echo "running \"$ARGS\" with stack ulimit of $ULIMIT_S"
ulimit -s $ULIMIT_S
#ulimit -a
$ARGS
