/* -*- c -*- */

/*
 $ ~/opt/openmpi-1.2rc1/bin/mpicc -std=gnu99 -W -Wall -Wno-unused-parameter -O2 -c -o mpi_threaded.o mpi_threaded.c
 $ ~/opt/openmpi-1.2rc1/bin/mpicc -std=gnu99 mpi_threaded.o -o mpi_threaded
 $ cat host8_11
compute-0-8.local slots=2  max-slots=4
compute-0-9.local slots=2  max-slots=4
compute-0-10.local slots=2  max-slots=4
compute-0-11.local slots=2  max-slots=4
 $ ~/opt/openmpi-1.2rc1/bin/mpirun -np 4 --hostfile host8_11 ./mpi_threaded
thread level: MPI_THREAD_MULTIPLE
thread level: MPI_THREAD_MULTIPLE
thread level: MPI_THREAD_MULTIPLE
thread level: MPI_THREAD_MULTIPLE
 # hangs none deterministic, must kill mpirun with kill -KILL
 $ ~/opt/openmpi-1.2rc1/bin/mpirun -np 2 ./mpi_threaded
--------------------------------------------------------------------------
[0,1,0]: Myrinet/GM on host master.halc.informatik.uni-halle.de was unable to find any NICs.
Another transport will be used instead, although this may result in
lower performance.
--------------------------------------------------------------------------
--------------------------------------------------------------------------
[0,1,1]: Myrinet/GM on host master.halc.informatik.uni-halle.de was unable to find any NICs.
Another transport will be used instead, although this may result in
lower performance.
--------------------------------------------------------------------------
thread level: MPI_THREAD_MULTIPLE
thread level: MPI_THREAD_MULTIPLE
 $
 */

#define _GNU_SOURCE
#include <unistd.h>
#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <stdint.h>
#include <stdbool.h>
#include <math.h>
#include <getopt.h>

#include <mpi.h>

#include <pthread.h>

#define ENUM_TO_STRING(e) [e] = #e

static const char *const thread_names[] = {
    ENUM_TO_STRING(MPI_THREAD_SINGLE),
    ENUM_TO_STRING(MPI_THREAD_FUNNELED),
    ENUM_TO_STRING(MPI_THREAD_SERIALIZED),
    ENUM_TO_STRING(MPI_THREAD_MULTIPLE)
};

int
main(int ac, char *av[])
{
    int thread_level;

    MPI_Init_thread(&ac, &av, MPI_THREAD_MULTIPLE, &thread_level);
    printf("thread level: %s\n", thread_names[thread_level]);
    MPI_Finalize();

    return 0;
}

