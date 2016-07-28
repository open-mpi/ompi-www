//=======================================================================
//
// SAMPLE SOURCE CODE - SUBJECT TO THE TERMS OF SAMPLE CODE LICENSE AGREEMENT
// http://software.intel.com/en-us/articles/intel-sample-source-code-license-agreement/
//
// Copyright 2009 Intel Corporation
//
// THIS FILE IS PROVIDED "AS IS" WITH NO WARRANTIES, EXPRESS OR IMPLIED, INCLUDING BUT
// NOT LIMITED TO ANY IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
// PURPOSE, NON-INFRINGEMENT OF INTELLECTUAL PROPERTY RIGHTS.
//
// ========================================================================

#include "mpi.h"
#include <stdio.h>
#include <string.h>
#include <stdlib.h>

/*
 * mpi3shm_1Dring.c can be used for the basic functionality testing of MPI-3 shared memory
 * in multi-node enviroment (such as Xeon and Xeon Phi based clusters).
 *
 * Each rank exhanges hello world info (rank, total number of ranks and node name) 
 * with its 2 neighbours (partners) in 1D ring topology under periodic boundary conditions.
 *
 * mpi3shm_1Dring.c serves as a prototype for MPI-3 shm addition to MPPtest halo code. 
 *
 * functions:
 *   get_n_partners   -- gets number of intra- and inter- node partners
 *   translate_ranks  -- defines global rank  -> shm commmunicator rank mapping
 *   get_partners_ptrs -- returns pointers to mem windows
 *   main
 *
 *   Example of compilation and usage:
 *   mpiicc -o mpi3shm_1Dring mpi3shm_1Dring.c
 *   mpiicc -mmic -o mpi3shm_1Dring.mic mpi3shm_1Dring.c
 *   export I_MPI_MIC=enable
 *   export I_MPI_MIC_POSTFIX=.mic
 *   mpirun -l -bootstrap ssh -n 112 -machinefile hostfile  ./mpi3shm_1Dring
 *   where hostfile:
 *   esg065:24
 *   esg065-mic0:32
 *   esg066:24
 *   esg066-mic0:32
*/

  int const n_partners = 2; /* size of partners array in 1D-ring topology*/

  /* count number of intra and inter node partners */
  void get_n_partners (int rank, int partners[], int partners_map[],
                       int *n_node_partners, int *n_inter_partners)
  { 
   int j;
   for (j=0; j<n_partners; j++)
     /* If partner has a valid mapping in shm communicator then it is on the same node */
     partners_map[j] == MPI_UNDEFINED ? (*n_inter_partners)++ : (*n_node_partners)++; 
  }


  /* defines global rank  -> shmcomm rank mapping;
     output: partners_map is array of ranks in shmcomm  */
  void translate_ranks(MPI_Comm shmcomm, int partners[], int partners_map[])
  {
    MPI_Group world_group, shared_group;
    
    /* create MPI groups for global communicator and shm communicator */
    MPI_Comm_group (MPI_COMM_WORLD, &world_group); 
    MPI_Comm_group (shmcomm, &shared_group);

    MPI_Group_translate_ranks (world_group, n_partners, partners, shared_group, partners_map); 
  }



  /* returns pointers to mem windows partners_ptrs */
  void get_partners_ptrs(MPI_Win win, int partners[], int partners_map[], int **partners_ptrs )
  {
   int j, dsp_unit;
   MPI_Aint sz;

    for (j=0; j<n_partners; j++) 
    {
      partners_ptrs[j] = NULL;
      if (partners_map[j] != MPI_UNDEFINED)
       /* MPI_Win_shared_query queries the process-local address for memory segments created with MPI_Win_allocate_shared.
         This function can return different process-local addresses for the same physical memory on different processes.  */
          MPI_Win_shared_query (win, partners_map[j], &sz, &dsp_unit, &partners_ptrs[j]); /* returns partners_ptrs */
    }
  }



  /*        MAIN    */
  int
  main (int argc, char *argv[])
  {
    MPI_Comm comm = MPI_COMM_WORLD;
    /* to be used for hello world exchanges */
    int rank, numtasks;

    /* related to MPI-3 shm*/
    MPI_Comm shmcomm; /* shm communicator  */ 
    MPI_Win win;      /* shm window object */ 
    int shm_size;     /* shmcomm size */
    int *mem;         /* shm memory to be allocated on each node */

    /* current rank exchanges hello world info with partners */
    int partners[n_partners];
    int *partners_map;   /* mapping in shm communicator */
    int **partners_ptrs; /* ptrs to shared mem window for each partner*/
    int j, icolor,partner, alloc_len;
    int n_node_partners=0, n_inter_partners=0;

     /* non-blocking inter-node */
    MPI_Request *reqs, *rq;
    int ibuf0[n_partners];       /* int recv buffers */
    int req_num = 2;      /* each inter-node exchange needs a pair of MPI_Irecv and MPI_Isend */
    req_num *= 1;         /* multiply by number of exchanges */


    MPI_Init (&argc, &argv); 
    MPI_Comm_size (comm, &numtasks);
    MPI_Comm_rank (comm, &rank);
    

    /* The 1D ring is defined in partners array. It can be easily expanded to the higher order stencils.
       The current rank has 2 neighbours: previous and next, i.e., prev-rank-next */
    partners[0] = rank-1; /* prev */
    partners[1] = rank+1; /* next */
    /* We will use periodic boundary conditions here */
    if (rank == 0)  partners[0] = numtasks - 1;
    if (rank == (numtasks - 1))  partners[1] = 0;

    /* MPI-3 SHM collective creates shm communicator.  On NUMA systems it will always return 
       the shm communicator that is the same as MPI_COMM_WORLD */

     /* MPI_Comm_split_type (comm, MPI_COMM_TYPE_SHARED, 0, MPI_INFO_NULL, &shmcomm); */

    /* Replace the above with explicit splitting of 'comm' to mimic a multi-node system. 
       icolor=0 creates single shared memory space, same as above  */

    /* This icolor creates 2 equal sized shared memory spaces */
       icolor = (rank*2+1)/numtasks; 
       MPI_Comm_split (comm, icolor, 0 , &shmcomm); 

    MPI_Barrier (comm);  
           

   /*  mapping: global rank  -> shmcomm rank is in partners_map */
    partners_map = (int*)malloc(n_partners*sizeof(int)); /* allocate partners_map */
    translate_ranks(shmcomm, partners, partners_map);

   /* number of inter and intra node partners */
    get_n_partners (rank, partners, partners_map,  &n_node_partners, &n_inter_partners); 

     printf( "parts %d, %d,  %d\n", rank,n_node_partners,n_inter_partners);
    
    alloc_len = sizeof(int); 
    if (n_node_partners > 0)
    {
     /* allocate shared memory windows on each node for intra-node partners  */
     MPI_Win_allocate_shared (alloc_len, 1, MPI_INFO_NULL, shmcomm, /* inputs to MPI-3 SHM collective */
                              &mem, &win);  /* outputs: mem - initial address of window; win - window object */

     /* pointers to mem windows */
     partners_ptrs = (int **)malloc(n_partners*sizeof(int*));  
     get_partners_ptrs (win, partners, partners_map,  partners_ptrs );

    }

    /* allocate MPI Request resources for inter-node comm. */
    if(n_inter_partners > 0)
    {
        reqs = (MPI_Request*)malloc(req_num*n_inter_partners*sizeof(MPI_Request));
        rq = reqs;
    }

    /* start halo exchange */

    /* Entering MPI-3 RMA access epoch required for MPI-3 shm */


     MPI_Win_fence(0, win);

      /* update MPI-3 shared memory by writing hello_world info into mem */
    mem[0] = (rank+1)*100; 

    MPI_Win_fence (0, win); 


    for (j=0; j<n_partners; j++) 
    {
      if(partners_map[j] != MPI_UNDEFINED) /* partner j is on the same node  */ 
      {
        ibuf0[j] = partners_ptrs[j][0]; /* load from MPI-3/SHM ops! */
        if(j == 0)
        printf ("messages from on-node leftside partner to rank= %d, : value= %d\n", rank,ibuf0[j]); 
        else
        printf ("messages from on-node rightside partner to rank= %d, : value= %d\n", rank,ibuf0[j]); 
      }
      else /* inter-node non-blocking MPI-1 */
      {
        MPI_Irecv (&ibuf0[j], 1, MPI_INT, partners[j], 1 , comm, rq++);
        MPI_Isend (&mem[0], 1, MPI_INT, partners[j], 1 , comm, rq++);
       printf( "MPI %d,  %d,  %d, %d\n",j,rank,mem[0],partners[j]);
      }
    } 

   /* sync inter-node exchanges and print out receive buffer ibuf*/
   if(n_inter_partners > 0)
   {
     MPI_Waitall (req_num*n_inter_partners, reqs, MPI_STATUS_IGNORE); 
       printf( "Wait  %d,  %d, %d\n",rank,ibuf0[0],ibuf0[1]);
     {
       for (j =0; j< n_partners;j++)
       if (partners_map[j] == MPI_UNDEFINED )
        if(j == 0)
       printf("message from off-node leftside partner to rank = %d, : value= %d\n", rank,ibuf0[j]);
        else
       printf("message from off_node rightside partner to rank = %d, : value= %d\n", rank,ibuf0[j]);
     }
   }    
        printf (" on rank= %d, : leftside=  %d, midpt= %d, rightside= %d\n", rank, ibuf0[0],mem[0],ibuf0[1]);

   /* free resources */
   MPI_Win_free (&win);
   free (partners_ptrs); 
   
   if (n_inter_partners) free (reqs);
   
   free (partners_map);  
   
   MPI_Finalize ();

   return (0);
 }


