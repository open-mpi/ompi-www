/*
 * Author: 
 * -------
 *	Ananda B Mudar
 * 	Senior Technical Architect
 *	Wipro Technologies
 *	ananda dot mudar at wipro dot com
 *
 * Objective of the program: 
 * -------------------------
 *	Checkpointing the program that has two successive
 * MPI_Bcast() calls will result in the following errors, some times:
 *
 * [Host1:7398] *** An error occurred in MPI_Bcast
 * [Host1:7398] *** on communicator MPI_COMM_WORLD
 * [Host1:7398] *** MPI_ERR_TRUNCATE: message truncated
 * [Host1:7398] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
 *
 * Background:
 * -----------
 * I wrote a similar program in python using mpi4py module and tried to
 * checkpoint the program using ompi-checkpoint. Calling ompi-checkpoint
 * on this program, failed in multiple ways:
 * (a) The program never resumes after the checkpoint image is taken
 * (b) The program used to fail in bcast() with cPickle errors
 *
 * This program calls MPI_Bcast() of an integer and a double value inside a
 * while loop for 10 seconds. If you run this program under checkpoint control,
 * and call checkpoint command, it will fail with the error message shown above.
 * 
 * If we replace these MPI_Bcast() calls to bcast() similar datatypes ie;
 * instead of integer and double, bcast() integer two times or bcast() char
 * two times, the program runs successfully after taking checkpoints!!
 *
 * Pre-Requisites:
 * ---------------
 *	BLCR 0.8.2
 * 	OpenMPI library configured with checkpoint functionality
 *		- Reproducible with any version of OpenMPI 1.4.2, 1.5, trunk
 *	gcc (This is not mandatory but we have used this)
 *
 * Steps to reproduce:
 * -------------------
 * 1. Run this program with mpirun -am ft-enable-cr with atleast two processes
 * 2. While the program is running, run ompi-checkpoint on the pid of mpirun
 * 3. Sometimes, the program moves forward successfully but sometimes, you will
 *    get the error mentioned above.
 *
 */
#include "mpi.h"
#include <stdio.h>
#include <string.h>

int main(int argc, char *argv[])
{
	int myid, numprocs, namelen, number = 0, number1 = 0, sleep_time;
	double sleep_time1; /* Change it to type same as sleep_time for the
			       program to run successfully with checkpoints */
	char string1[20];
	char processor_name[MPI_MAX_PROCESSOR_NAME];
	char buffer[100];
	double start_time = 0.0;

	MPI_Init(&argc, &argv);
	MPI_Comm_size(MPI_COMM_WORLD, &numprocs);
	MPI_Comm_rank(MPI_COMM_WORLD, &myid);
	MPI_Get_processor_name(processor_name, &namelen);

	fprintf(stdout, "Process %d of %d on %s & number = %d\n",
			myid, numprocs, processor_name, number);
	if (myid == 0) {
		number++;
	}

	/*
	 * bcast() is implemented as collective bcast() calls in mpi4py
	 * To mimic this behavior, MPI_Bcast() is called first for an
	 * integer and then for a chunk of memory.
	 */
	MPI_Bcast(&number, 1, MPI_INT, 0, MPI_COMM_WORLD);
	fprintf(stdout, "Process %d & new_number = %d\n", myid, number);

	if (myid == 0) {
		start_time = MPI_Wtime();
	}

	/*
	 * Infinite while loop; hence MPI_Finalize() is not called.
	 */
	while (1) {
		/*
		 * Wait for atleast 10 seconds before printing the next
		 * set of messages.
		 */
		if (myid == 0) {
			if (MPI_Wtime() - start_time <= 10) {
				sleep_time = 1;
				sleep_time1 = 1.2345;
			} else {
				sleep_time = 0;
				sleep_time1 = 0.1234;
				start_time = MPI_Wtime();
			}
		}
		/*
		 * bcast() is implemented as collective bcast() calls in mpi4py
		 * To mimic this behavior, MPI_Bcast() is called first for an
		 * integer and then for a chunk of memory.
		 */
		MPI_Bcast(&sleep_time, 1, MPI_INT, 0, MPI_COMM_WORLD);
		MPI_Bcast(&sleep_time1, 1, MPI_DOUBLE, 0, MPI_COMM_WORLD);

		/*
		 * If 10 seconds have elapsed, print the messages
		 */
		if (sleep_time == 0) {
			fprintf(stdout, "Process %d of %d on %s, number =%d\n",
				myid, numprocs, processor_name, number);
			if (myid == 0) {
				number++;
			}
			MPI_Bcast(&number, 1, MPI_INT, 0, MPI_COMM_WORLD);
			fprintf(stdout,
				"Process %d, new_number = %d\n", 
				myid, number);
		}
	}
}
