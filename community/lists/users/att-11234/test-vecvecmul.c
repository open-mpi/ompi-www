#include <stdio.h>
#include <stdlib.h>
#include <gmp.h>
#include <pthread.h>
#include "mpi.h"

#define BLOCK_LOW(id,p,n)   ((id)*(n)/(p))
#define BLOCK_HIGH(id,p,n)  (BLOCK_LOW((id)+1,p,n)-1)
#define BLOCK_SIZE(id,p,n)  (BLOCK_HIGH(id,p,n)-BLOCK_LOW(id,p,n)+1)

#define LIMBS 8
#define VLEN 100000
#define NCORES 8

#define MPN_ZERO(DST, NLIMBS) \
  do {									\
    mp_size_t __i;							\
    for (__i = 0; __i < (NLIMBS); __i++)				\
      (DST)[__i] = 0;							\
  } while (0)

#define MPN_COPY_INCR(DST, SRC, NLIMBS) \
  do {									\
    mp_size_t __i;							\
    for (__i = 0; __i < (NLIMBS); __i++)				\
      (DST)[__i] = (SRC)[__i];						\
  } while (0)

#define MPN_COPY MPN_COPY_INCR

pthread_t threads[NCORES];
pthread_attr_t attr;
pthread_mutex_t mutexvv, mutexsum;
pthread_cond_t count_threshold_cv;
int counter = 0;

mp_limb_t temp_prod[NCORES][2*LIMBS], temp_sum[NCORES][2*LIMBS+1];
mp_limb_t (*v1)[LIMBS], (*v2)[LIMBS], (*v3)[LIMBS];
mp_limb_t cnum[LIMBS], tquo[LIMBS+2];
mp_limb_t *fin_sum, *result, *q;

MPI_Op mpn_sum;
MPI_Datatype mpntype0, mpntype1;
MPI_Status Sstatus, Rstatus;
MPI_Request Srqst, Rrqst;

int id, p;
int VOffset, VChunk, VStart[NCORES], VEnd[NCORES];

typedef mp_limb_t vector[LIMBS];

void wait (int N)
{
	pthread_mutex_lock (&mutexsum);
	if (counter < N-1)
	{
		++counter;
		pthread_cond_wait (&count_threshold_cv, &mutexsum);
	}
	else
	{
		counter = 0;
		pthread_cond_broadcast (&count_threshold_cv);
	}
	pthread_mutex_unlock (&mutexsum);
}
	
void vectvectmul (vector *vect1, vector *vect2, int Tid)
{
	int i;

	MPN_ZERO (temp_sum[Tid], 2*LIMBS+1);

	for (i=VStart[Tid]; i<=VEnd[Tid]; ++i)
	{
		mpn_mul_n (temp_prod[Tid], vect1[i], vect2[i], LIMBS);
		mpn_add (temp_sum[Tid], temp_sum[Tid], 2*LIMBS+1, temp_prod[Tid], 2*LIMBS);
	}

	return;
}
 
void addmpn (mp_limb_t *invec, mp_limb_t *inoutvec, int *len, MPI_Datatype *dtype)
{
        mpn_add_n (inoutvec, inoutvec, invec, 2*LIMBS+1);
	return;
}

void *VectMul (void *th)
{
	long Tid = (long) th;

	// interleaving communication with computation

	if (Tid == NCORES-1) // this thread handles communication
	{
		if (id == 0)
		{
			MPI_Isend (v3[BLOCK_LOW(id,p,VLEN)], BLOCK_SIZE(id,p,VLEN), mpntype1, id^1, 0, MPI_COMM_WORLD, &Srqst);
			MPI_Irecv (v3[BLOCK_LOW(id^1,p,VLEN)], BLOCK_SIZE(id^1,p,VLEN), mpntype1, id^1, 1, MPI_COMM_WORLD, &Rrqst);
		}
		else if (id == 1)
		{
			MPI_Isend (v3[BLOCK_LOW(id,p,VLEN)], BLOCK_SIZE(id,p,VLEN), mpntype1, id^1, 1, MPI_COMM_WORLD, &Srqst);
			MPI_Irecv (v3[BLOCK_LOW(id^1,p,VLEN)], BLOCK_SIZE(id^1,p,VLEN), mpntype1, id^1, 0, MPI_COMM_WORLD, &Rrqst);
		}
	}
	else if (Tid < NCORES-1) // these threads handle computation
	{
		vectvectmul (v1, v2, Tid); // product of two vectors

		// reduction within a node using threads
		pthread_mutex_lock (&mutexvv);
		mpn_add_n (fin_sum, fin_sum, temp_sum[Tid], 2*LIMBS+1);
		pthread_mutex_unlock (&mutexvv);

		// each thread waits for every other thread to finish reduction
		wait (NCORES-1);

		// reduction across nodes using MPI
		if (Tid == 0)
		{
			MPI_Allreduce (fin_sum, result, 1, mpntype0, mpn_sum, MPI_COMM_WORLD);
			mpn_tdiv_qr (tquo, cnum, 0, result, 2*LIMBS+1, q, LIMBS);
		}
		wait (NCORES-1);
	}

	if (Tid == NCORES-1)  // waiting for the communications to terminate
	{
		MPI_Wait (&Srqst, &Sstatus);
		MPI_Wait (&Rrqst, &Rstatus);
	}
}
	
int main(int argc, char *argv[])
{
	unsigned char str[154];
	unsigned int arr[] = {9,2,5,8,4,2,4,1,6,9,1,8,9,9,6,1,5,7,0,7,7,4,3,7,6,3,9,5,4,2,3,0,4,4,1,5,3,3,7,2,3,3,7,0,9,4,5,2,8,4,6,\
                              2,1,3,4,1,4,2,6,0,8,5,1,7,3,1,4,4,7,0,5,3,4,4,8,9,1,1,9,8,3,5,1,8,3,4,4,8,3,2,8,1,2,8,7,4,1,8,1,8,0,4,\
                              8,4,2,4,4,5,4,9,1,8,3,4,9,5,6,3,3,1,4,6,4,1,0,2,0,2,5,1,4,8,5,9,9,6,9,4,0,3,6,5,5,9,5,4,2,2,3,7,8,5,9,7};

	long i;

	double t1, t2, Itime;
	int provided;

	/* Allocation */

	v1 = (vector *) malloc (VLEN * sizeof (vector));
	v2 = (vector *) malloc (VLEN * sizeof (vector));
	v3 = (vector *) malloc (VLEN * sizeof (vector));

	fin_sum = (mp_limb_t *) malloc ((2*LIMBS+1) * sizeof (mp_limb_t));
	result = (mp_limb_t *) malloc ((2*LIMBS+1) * sizeof (mp_limb_t));
	q = (mp_limb_t *) malloc (LIMBS * sizeof (mp_limb_t));

	MPI_Init_thread (&argc, &argv, MPI_THREAD_MULTIPLE, &provided);
	MPI_Comm_rank (MPI_COMM_WORLD, &id);
	MPI_Comm_size (MPI_COMM_WORLD, &p);

	MPI_Type_contiguous (2*LIMBS+1, MPI_UNSIGNED_LONG_LONG, &mpntype0);
	MPI_Type_commit (&mpntype0);

	MPI_Type_contiguous (LIMBS, MPI_UNSIGNED_LONG_LONG, &mpntype1);
	MPI_Type_commit (&mpntype1);

	MPI_Op_create ((MPI_User_function *)addmpn, 1, &mpn_sum);

	for (i=0; i<154; ++i)	str[i] = (unsigned char)arr[i];
	mpn_set_str (q, str, 154, 10);
	//if (!id) gmp_printf ("Modulus: %Nd\n", q, LIMBS);

	MPI_Barrier (MPI_COMM_WORLD);

	/* Setting limits for 2 MPI nodes */

	VOffset = BLOCK_LOW(id,p,VLEN);
	VChunk  = BLOCK_SIZE(id,p,VLEN);

	/* Setting limits for NCORES-1 threads */

	for (i=0; i<NCORES-1; ++i)
	{
		VStart[i] = VOffset + BLOCK_LOW(i,NCORES-1,VChunk);
		VEnd[i]   = VOffset + BLOCK_HIGH(i,NCORES-1,VChunk);
	}

	for (i=0; i<VLEN; ++i)	mpn_random (v1[i], LIMBS);
	for (i=0; i<VLEN; ++i)	mpn_random (v2[i], LIMBS);
	for (i=BLOCK_LOW(id,p,VLEN); i<=BLOCK_HIGH(id,p,VLEN); ++i)	mpn_random (v3[i], LIMBS);
		
	MPI_Barrier (MPI_COMM_WORLD);

	t1 = MPI_Wtime ();

	for (i=0; i<NCORES; ++i)
		pthread_create(&threads[i], &attr, VectMul, (void *) i);

	for (i=0; i<NCORES; ++i)
		pthread_join (threads[i], NULL);

	t2 = MPI_Wtime ();
	Itime = t2 - t1;
	if (!id) printf ("Total time taken: %lf\n",Itime);
	
	if (!id) gmp_printf ("Result: %Nd\n", cnum, LIMBS);

	MPI_Op_free(&mpn_sum);
	MPI_Request_free (&Rrqst);
	MPI_Request_free (&Srqst);
	MPI_Finalize ();

	return 0;	
}

 
	


