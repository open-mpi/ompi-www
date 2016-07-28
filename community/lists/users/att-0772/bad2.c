
#include <stdio.h>
#include <stdlib.h>
#include <assert.h>
#include "mpi.h"

/* Generate a _contiguous type */
static MPI_Datatype tycon_Contiguous ( int count, MPI_Datatype t )
{
   MPI_Datatype t2;  
   int          r = MPI_Type_contiguous( count, t, &t2 );
   assert(r == MPI_SUCCESS);
   return t2;
}

/* Generate a simple 2-element _struct type w/ given tys and
   displacements */
static MPI_Datatype tycon_Struct2 ( MPI_Datatype t1, int disp1, 
                                    MPI_Datatype t2, int disp2 )
{
   int          blocklens[2];
   MPI_Aint     disps[2];
   MPI_Datatype tys[2];
   MPI_Datatype tres;
   int          r;
   blocklens[0] = blocklens[1] = 1;
   disps[0] = disp1;
   disps[1] = disp2;
   tys[0] = t1;
   tys[1] = t2;
   r = MPI_Type_struct( 2, blocklens, disps, tys, &tres );
   assert(r == MPI_SUCCESS);
   return tres;
}

/* Generate a simple struct type, then try to unravel it with
   MPI_Type_get_{envelope,contents}. */

int main ( int argc, char** argv )
{
    int rank, size, r;
    MPI_Datatype t1, t2;

    MPI_Init( &argc, &argv );
    MPI_Comm_size( MPI_COMM_WORLD, &size );
    MPI_Comm_rank( MPI_COMM_WORLD, &rank );

    if (rank == 0) {

    t1 = tycon_Contiguous(4, MPI_DOUBLE);
    /* t1 = {(double,0),(double,8),(double,16),(double,24)} */

    t2 = tycon_Struct2(t1, 0, MPI_CHAR, 48);
    /* t2 = {(double,0),(double,8),(double,16),(double,24), (char,48)} */

    /* Disassemble the struct type (t2). */
    int n_ints, n_addrs, n_dtys, combiner;
    r = MPI_Type_get_envelope( t2, &n_ints, &n_addrs, &n_dtys, &combiner );
    assert(r == MPI_SUCCESS);

    assert(n_ints == 3 && n_addrs == 2 && n_dtys == 2);
    assert(combiner == MPI_COMBINER_STRUCT);

    int*          ints  = malloc(n_ints * sizeof(int));
    MPI_Aint*     addrs = malloc(n_addrs * sizeof(MPI_Aint));
    MPI_Datatype* dtys  = malloc(n_dtys * sizeof(MPI_Datatype));
    r = MPI_Type_get_contents( t2, n_ints, n_addrs, n_dtys,
                                   ints, addrs, dtys );
    assert(r == MPI_SUCCESS);

    /* Peer at the first element of the struct, which is (a copy of)
       t1. */
    assert(dtys[1] == MPI_CHAR);
    printf("before second MPI_Type_get_envelope\n");
    /* XXXXXXX this is the call that dies */
    r = MPI_Type_get_envelope( dtys[0], 
                               &n_ints, &n_addrs, &n_dtys, &combiner );
    /* XXXXXXX we never get here */
    printf("after second MPI_Type_get_envelope\n");
    assert(r == MPI_SUCCESS);     

    } /* rank==0 */

    MPI_Finalize();
    return 0;
}

