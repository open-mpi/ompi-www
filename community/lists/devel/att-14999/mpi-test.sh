#!/bin/bash

INPUT_FILE=${1:-/dev/zero}

echo "Using MPI launcher: `which mpirun`"
echo
echo "Run-time library path:"
echo
echo ${LD_LIBRARY_PATH} | tr ':' '\n' | sed -e 's/^/  /'
echo

for I in `seq 1 21`; do
    # listen on localhost:1234 and send whatever is received to disk using
    # default block sizes.
    nc -ld 1234 | dd of=output &
    sleep 1;

    # wrap a process that produces data on standard output with a large block
    # size and route its output to localhost:1234.
    mpirun -np 1 dd bs=1000000 count=1 if=${INPUT_FILE} >/dev/tcp/localhost/1234;
    sleep 1;

    # if we don't have exactly one block's worth of data, we've seen the
    # problem.
    if ! ls -l output | grep 1000000 >/dev/null; then
        echo
        echo "Problem seen on iteration #$I."
        echo
        break;
    fi;

    # display our progress.
    echo $I;
done

