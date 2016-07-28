#!/bin/csh

mpicc -xopenmp -m64 -O5 main.c

mpirun -np 2 --mca btl self,sm  ./a.out
mpirun -np 2 --mca btl self,tcp ./a.out

