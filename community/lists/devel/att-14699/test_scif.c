/*
 * This test is an oversimplified version of collective/bcast_struct
 * that comes with the ibm test suite.
 * it must be ran on two tasks on a single host where the MIC software stack
 * is present (e.g. libscif.so is present, the mic driver is loaded and
 * /dev/mic/* are accessible and the scif btl is available.
 *
 * mpirun -np 2 -host localhost --mca scif,vader,self ./test_scif
 * will produce incorrect results with trunk and v1.8
 *
 * mpirun -np 2 --mca btl ^scif -host localhost ./test_scif
 * will work with trunk and v1.8
 *
 * mpirun -np 2 --mca btl scif,self -host localhost ./test_scif
 * will produce correct results with v1.8 r31309 (but eventually crash in MPI_Finalize)
 * and produce incorrect result with v1.8 r31671 and trunk r31667
 *
 * Copyright (c) 2011      Oracle and/or its affiliates.  All rights reserved.
 * Copyright (c) 2014      Research Organization for Information Science
 *                         and Technology (RIST). All rights reserved.
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
#include <stdlib.h>
#include <poll.h>
#include "mpi.h"

#define ompitest_error(file,line,...) {fprintf(stderr, "FUCK at %s:%d root=%d size=%d (i,j)=(%d,%d)\n", file, line,root, i0, i, j); MPI_Abort(MPI_COMM_WORLD, 1);}

const int SIZE = 1000;

int main(int argc, char **argv)
{
   int myself;
 
   double a[2], t_stop;
   int ii, size;
   int len[2];
   MPI_Aint disp[2];
   MPI_Datatype type[2], newtype, t1, t2;
   struct foo_t {
       int i[3];
       double d[3];
   } foo, *bar;
   int i0, i, j, root, nseconds = 600, done_flag;
   int _dbg=0;

   MPI_Init(&argc,&argv);
   MPI_Comm_rank(MPI_COMM_WORLD,&myself);
   MPI_Comm_size(MPI_COMM_WORLD,&size);
   // _dbg = (0 == myself);
   while (_dbg) poll(NULL,0,1);

   if ( argc > 1 ) nseconds = atoi(argv[1]);
   t_stop = MPI_Wtime() + nseconds;

   /*-------------------------------------------------------------*/
   /* Build a datatype that is guaranteed to have holes; send/recv
      large numbers of them */

   MPI_Type_vector(2, 1, 2, MPI_INT, &t1);
   MPI_Type_commit(&t1);
   MPI_Type_vector(2, 1, 2, MPI_DOUBLE, &t2);
   MPI_Type_commit(&t2);

   len[0] = len[1] = 1;
   MPI_Address(&foo.i[0], &disp[0]);
   MPI_Address(&foo.d[0], &disp[1]);
   printf ("%d: %x %x\n", myself, disp[0], disp[1]);
   disp[0] -= (MPI_Aint) &foo;
   disp[1] -= (MPI_Aint) &foo;
   printf ("%d: %ld %ld\n", myself, disp[0], disp[1]);
   type[0] = t1;
   type[1] = t2;
   MPI_Type_struct(2, len, disp, type, &newtype);
   MPI_Type_commit(&newtype);

   if (0 == myself) {
       foo.i[0] = 123;
       foo.i[1] = 456;
       foo.i[2] = 789;
       foo.d[0] = 123.456;
       foo.d[1] = 456.789;
       foo.d[2] = 789.123;
       MPI_Send(&foo, 1, newtype, 1, 1234, MPI_COMM_WORLD);
   } else if (1 == myself) {
       foo.i[0] = foo.i[1] = foo.i[2] = 0;
       foo.d[0] = foo.d[1] = foo.d[2] = 0.0;
       MPI_Recv(&foo, 1, newtype, 0, 1234, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
       if (foo.i[0] != 123 ||
           foo.i[1] != 0 ||
           foo.i[2] != 789 ||
           foo.d[0] != 123.456 ||
           foo.d[1] != 0.0 ||
           foo.d[2] != 789.123) {
           ompitest_error(__FILE__, __LINE__, 
                          "Simple receive failed: got (%d, %d, %d, %g, %g, %g), expected (%d, %d, %d, %g, %g, %g)\n",
                          foo.i[0],
                          foo.i[1],
                          foo.i[2],
                          foo.d[0],
                          foo.d[1],
                          foo.d[2],
                          123, 0, 789, 123.456, 0.0, 789.123);
       }
   }
   MPI_Barrier(MPI_COMM_WORLD);

   bar = malloc(sizeof(foo) * SIZE);

   // for (i0 = SIZE; i0 <= SIZE; i0 *= 10) {
   i0 = SIZE; {
       i = i0;
       // for (root = 0; root < size; ++root) {
       for (root = 0; root < 1; ++root) {

           /* Initialize buffers */
           for (j = 0; j < i; ++j) {
               if (root == myself) {
                   bar[j].i[0] = 123;
                   bar[j].i[1] = 456;
                   bar[j].i[2] = 789;
                   bar[j].d[0] = 123.456;
                   bar[j].d[1] = 456.789;
                   bar[j].d[2] = 789.123;
               } else {
                   bar[j].i[0] = bar[j].i[1] = bar[j].i[2] = 0;
                   bar[j].d[0] = bar[j].d[1] = bar[j].d[2] = 0.0;
               }
           }
           
    if (root == myself) {
        MPI_Send(bar, i, newtype, 1-root, 666, MPI_COMM_WORLD);
    } else {
        MPI_Recv(bar, i, newtype, root, 666, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
    }

           /* Make sure we got the right values */
           if (root != myself) {
               for (j = 0; j < i; ++j) {
                   if (bar[j].i[0] != 123 ||
                       bar[j].i[1] != 0 ||
                       bar[j].i[2] != 789 ||
                       bar[j].d[0] != 123.456 ||
                       bar[j].d[1] != 0.0 ||
                       bar[j].d[2] != 789.123) {
                       fprintf(stderr, "ERROR at %s:%d! root=%d, me=%d, count=%d, position=%d, got (%d,%d,%d,%g,%g,%g) expected (%d,%d,%d,%g,%g,%g)\n", 
                                      __FILE__, __LINE__,
                                      root, myself, i, j,
                                      bar[j].i[0],
                                      bar[j].i[1],
                                      bar[j].i[2],
                                      bar[j].d[0],
                                      bar[j].d[1],
                                      bar[j].d[2],
                                      123, 0, 789, 123.456, 0.0, 789.123);
                     MPI_Abort(MPI_COMM_WORLD, 1);
                   }
               }
           }

       }
   }

done:
   free(bar);
   MPI_Type_free(&t1);
   MPI_Type_free(&t2);
   MPI_Type_free(&newtype);

   MPI_Barrier(MPI_COMM_WORLD);
   printf("end barrier\n");
   _dbg = 0;
   while (_dbg) poll(NULL,0,1);
   MPI_Finalize();
   printf("after finalize\n");
   return 0;
}

