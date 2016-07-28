/*
 * $HEADER$
 */
/****************************************************************************

 MESSAGE PASSING INTERFACE TEST CASE SUITE

 Copyright IBM Corp. 1995

 IBM Corp. hereby grants a non-exclusive license to use, copy, modify, and
 distribute this software for any purpose and without fee provided that the
 above copyright notice and the following paragraphs appear in all copies.

 IBM Corp. makes no representation that the test cases comprising this
 suite are correct or are an accurate representation of any standard.

 In no event shall IBM be liable to any party for direct, indirect, special
 incidental, or consequential damage arising out of the use of this software
 even if IBM Corp. has been advised of the possibility of such damage.

 IBM CORP. SPECIFICALLY DISCLAIMS ANY WARRANTIES INCLUDING, BUT NOT LIMITED
 TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 PURPOSE.  THE SOFTWARE PROVIDED HEREUNDER IS ON AN "AS IS" BASIS AND IBM
 CORP. HAS NO OBLIGATION TO PROVIDE MAINTENANCE, SUPPORT, UPDATES,
 ENHANCEMENTS, OR MODIFICATIONS.

****************************************************************************

 These test cases reflect an interpretation of the MPI Standard.  They are
 are, in most cases, unit tests of specific MPI behaviors.  If a user of any
 test case from this set believes that the MPI Standard requires behavior
 different than that implied by the test case we would appreciate feedback.

 Comments may be sent to:
    Richard Treumann
    treumann@kgn.ibm.com

****************************************************************************
*/
#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>

#include <mpi.h>

#include "ompitest_error.h"

#ifndef NREQS
#define NREQS 16
#endif


int main(int argc, char** argv)
{
    int i, me, rank, tasks;
    double t1, t2;
    MPI_Request req[NREQS];
    MPI_Comm comm;

    MPI_Init(&argc,&argv);
   
    ompitest_check_size(__FILE__, __LINE__, 2, 1);

    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    MPI_Comm_dup(MPI_COMM_WORLD, &comm);

    MPI_Barrier(MPI_COMM_WORLD);
    if (rank > 0) sleep(2);

    /* Do a bunch of barriers */
    for (i = 0; i < NREQS; ++i) {
        MPI_Ibarrier(comm, &req[i]);
    }
    MPI_Waitall(NREQS, req, MPI_STATUSES_IGNORE);
    if (rank > 0) sleep(2);
    MPI_Barrier(MPI_COMM_WORLD);

    MPI_Finalize();
    return 0;
}

