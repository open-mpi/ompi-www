#!/bin/env python
"""
Author:
Ananda B Mudar, PMP
Senior Technical Architect
Wipro Technologies
ananda dot mudar at wipro dot com

Program to manifest the possible bug either in mpi4py or in OpenMPI CR

This program doesn't do anything other than printing number every 10 seconds
and exchanging data between rank 0 and other processes. It also does barrier
synchronization in between.

Pre-Requisites:
	Python version 2.6.1	
	Latest version of mpi4py ie; mpi4py 1.2.1
	Stable version of OpenMPI ie; OpenMPI v1.4.2
	Stable version of BLCR ie; BLCR 0.8.2

Steps to reproduce the problem:
1. Enable Checkpoint/Restart functionality and start the program. I have 8 core
system and I run it with -np 8.
mpirun -am ft-enable-cr -np 8 python mpi4py-ompi-bug.py

2. While the program is running, issue ompi-checkpoint command from another window
ompi-checkpoint <pid of mpirun>

3. After successful checkpoint, the program should resume but it does not. Sometimes
the program will fail in cPickle routines while doing bcast()

4. If you terminate mpirun and restart it using the checkpoint image that was successfully
created, restart also will hang.
ompi-restart <name of checkpoint image file>

NOTE:
Since it fails only when I run it under checkpoint, I am not sure if it is a defect
in mpi4py.
"""

from mpi4py import MPI
import time

Iterative_message1 = "Hello, World!! I am process %d of %d on %s & Number = %d"
Iterative_message2 = "Rank = %d & New number = %d"
myrank = MPI.COMM_WORLD.Get_rank()
nprocs = MPI.COMM_WORLD.Get_size()
procnm = MPI.Get_processor_name()
number = 0
if myrank == 0:
	start_time = time.time()
print Iterative_message1 % (myrank, nprocs, procnm, number)
MPI.COMM_WORLD.barrier()
if myrank == 0:
	number += 1
number = MPI.COMM_WORLD.bcast(number, root = 0)
print Iterative_message2 % (myrank, number)
while True:
	if myrank == 0:
		if time.time() - start_time <= 10:
			sleep_time = True
		else:
			sleep_time = False
			start_time = time.time()
	else:
		sleep_time = None

	sleep_time = MPI.COMM_WORLD.bcast(sleep_time, root = 0)
	if not sleep_time:
		print Iterative_message1 % (myrank, nprocs, procnm, number)
		MPI.COMM_WORLD.barrier()
		if myrank == 0:
			number += 1
		number = MPI.COMM_WORLD.bcast(number, root = 0)
		print Iterative_message2 % (myrank, number)
