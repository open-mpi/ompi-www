#include <stdlib.h>
#include <stdio.h>
#include <mpi.h>
#include <math.h>

/* #define USE_MPE */
#ifdef USE_MPE
#include "/home/ckutzne/mpe_for_lam711/include/mpe.h"
#define GMX_MPE_LOG(event) MPE_Log_event(event, 0, "")
#else
#define GMX_MPE_LOG(event)
#endif

/* Max number of floats to send to each process */
/* 1 2 3 4  5  6  7   8   9  10   11   12   13   14    15    16    17     18     19     20 */
/* 1 2 4 8 16 32 64 128 256 512 1024 2048 4096 8192 16384 32768 65536 131072 262144 524288 */
#define TOTAL 524288
#define CATEGORIES 20
#define BASE 2
#define OFFSET 0

/* Global variables */
int nprocs, procid;
float rdata[32*TOTAL], sdata[32*TOTAL]; /* test 32 CPUs max. */
int ev_mpi_getinfo_start, ev_mpi_getinfo_finish;

void initialize_data(float *d, float *r, int elements, int procs, int procid)
/* initialize data with test numbers */
{
  int i;
  
  for (i=0; i<elements; i++)
  {
    d[i] = i + procid/10.;  /* data to send */
    r[i] = 0.0;             /* for the results */
  }
}

void print_data(float *d, int elements, int procs, int procid, char *s)
/* prints the test data for each proc in an ordered fashion */
{
  int i,j;
  
  if (procid == 0)
    printf("\n%s\n",s);
  for (j=0; j<procs; j++)
  {
    if (procid == j)
    {
      printf("proc %d (%d floats): ",procid,elements);
  
      for (i=0; i<elements; i++)
        printf("%4.1f ",d[i]);
      printf("\n");
    }
    MPI_Barrier(MPI_COMM_WORLD);
  }
}


/* An own version of all-to-all communication that 
 * avoids network congestion */
void GMX_Alltoall(float *sendbuf, int sendcount, MPI_Datatype sendtype,
                  float *recvbuf, int recvcount, MPI_Datatype recvtype,
		  MPI_Comm comm)
{
   MPI_Status status;
   int ncpu, cpuid, source, dest;
   int i;
      
   /* find out how many procs we have in our comm */
   MPI_Comm_size(comm,&ncpu);
   /* I am node number ... */
   MPI_Comm_rank(comm,&cpuid);
         
   for (i=0; i<ncpu; i++)
   {
     /* send to dest = (cpuid + i) */
     dest = (cpuid + i) % ncpu;     
     /* receive from source = (cpuid - i) */
     source   = (ncpu + cpuid - i) % ncpu;
          
     MPI_Sendrecv(sendbuf+dest  *sendcount, sendcount, sendtype, dest  , 0,
                  recvbuf+source*recvcount, recvcount, recvtype, source, 0,
		  comm, &status);
/*     if (sendcount > 1024*(8/nprocs)) */
/*     if ((i<ncpu-1) && (sendcount*sizeof(sendtype) > 256)) */
     if (i<ncpu-1)
        MPI_Barrier(comm);
   }
}

void GMX_Alltoall_m(float *sendbuf, int sendcount, MPI_Datatype sendtype,
                   float *recvbuf, int recvcount, MPI_Datatype recvtype,
		   MPI_Comm comm)
{
   const int procs_pn = 2;
   
   MPI_Request sendrequests[procs_pn], recvrequests[procs_pn];
   MPI_Status  sendstatuses[procs_pn], recvstatuses[procs_pn];
   int ncpus , cpuid , destcpu , sourcecpu ;
   int nnodes, nodeid, destnode, sourcenode;
   int i,j;
   
   /* find out how many procs we have in our comm */
   MPI_Comm_size(comm,&ncpus);
   /* I am node number ... */
   MPI_Comm_rank(comm,&cpuid);
   /* number of nodes */
   nnodes = ncpus / procs_pn;
   /* my nodeid */
   nodeid = cpuid / procs_pn;

   /* loop over nodes */
   for (i=0; i<nnodes; i++)
   {
     destnode   = (         nodeid + i) % nnodes;  /* send to destination node */
     sourcenode = (nnodes + nodeid - i) % nnodes;  /* receive from source node */
     for (j=0; j<procs_pn; j++)
     {
       sourcecpu = sourcenode*procs_pn + j; /* source of data */
       destcpu   = destnode  *procs_pn + j; /* destination of data */	 
       MPI_Irecv(recvbuf + sourcecpu*recvcount, recvcount, recvtype, sourcecpu, 0, comm, &recvrequests[j]);
       MPI_Isend(sendbuf + destcpu  *sendcount, sendcount, sendtype, destcpu  , 0, comm, &sendrequests[j]);
     }
     MPI_Waitall(procs_pn,sendrequests,sendstatuses);
     MPI_Waitall(procs_pn,recvrequests,recvstatuses);
     if (i<nnodes-1) 
       MPI_Barrier(comm);	
   }
}


double do_test(int n, int iterations, int ev_start, int ev_finish, int comm_type)
{
  int i,procs_pn,nprocs,nnodes,myrank;
  double t_start, t_finish;
  char *t_string="   ";
  static int bFirst = 1;

  /* processors per node */
  procs_pn = 2;
  /* number of processors */
  MPI_Comm_size(MPI_COMM_WORLD,&nprocs);
  /* my rank */
  MPI_Comm_rank(MPI_COMM_WORLD,&myrank);
  /* number of nodes */
  nnodes = nprocs / procs_pn;

  if (bFirst == 1)
  {
    bFirst = 0;
    initialize_data(sdata, rdata, nprocs*TOTAL, nprocs, myrank);
  }
   
/*  print_data(sdata, nprocs*TOTAL, nprocs, myrank,"Data initialized as"); */
	      
  if (procid == 0)
  {
    if (comm_type==0)
      t_string="MPI";
    else
      t_string="GMX";
      
    printf("%s: sending %7d floats (%8d bytes) to %d processes (%7d times) took ... ",
           t_string,n,n*sizeof(float),nprocs,iterations);
    fflush(NULL);
  }
  MPI_Barrier(MPI_COMM_WORLD);
  GMX_MPE_LOG(ev_start);
  t_start = MPI_Wtime();

  for (i=0; i<iterations; i++)
  { 
    if (comm_type==0)     
      MPI_Alltoall(sdata,n,MPI_FLOAT,rdata,n,MPI_FLOAT,MPI_COMM_WORLD);
    else
      GMX_Alltoall_m(sdata,n,MPI_FLOAT,rdata,n,MPI_FLOAT,MPI_COMM_WORLD);
  }
  MPI_Barrier(MPI_COMM_WORLD);
  GMX_MPE_LOG(ev_finish);
  t_finish = MPI_Wtime();
  
  if (procid == 0)
    printf("%10.5f seconds in total\n",t_finish-t_start);
 
/*  print_data(rdata, nprocs*TOTAL, nprocs, procid,"Data after alltoall:"); */
  
  return t_finish-t_start;
}


int main(int argc, char *argv[])
{

  int i,j,commtype;
  double t_res; /* timer resolution [seconds] */
  const int tests=25; /* number of tests to average over */
  double dummy, dum1;
  double sdev[CATEGORIES]; /* standard deviation for each category */
  double t_comm[CATEGORIES][tests]; /* individual time for each test */
  double t_aver[CATEGORIES];        /* average over number of tests */
  double t_min[CATEGORIES], t_max[CATEGORIES]; /* shortest and longest time a test takes */

  /* output results in a file: */
  FILE *f_ptr;
  char filename[11];

  /* MPE events */
  int ev_start[CATEGORIES], ev_finish[CATEGORIES]; 
  
  int howmanyfloats[CATEGORIES];

#ifdef USE_MPE			   
  char *color[20] = { "orange1 ", "orange2 ", "orange3 ", "orange4 ", \
  		      "red1    ", "red2    ", "red3    ", "red4    ", \
		      "magenta1", "magenta2", "magenta3", "magenta4", \
                      "blue1   ", "blue2"   , "blue3"   , "blue4"   , \
		      "green1  ", "green2"  , "green3"  , "green4"  , \
		    };
  char desc[] = "123456789012";				   
#endif

  /* initialize parallel universe */
  MPI_Init(&argc,&argv);
  MPI_Comm_size(MPI_COMM_WORLD, &nprocs);
  MPI_Comm_rank(MPI_COMM_WORLD, &procid);
#ifdef USE_MPE
  MPE_Init_log();
  /* Describe MPE states */
  for (i=0; i<CATEGORIES; i++)
  {
    ev_start[i]  = MPE_Log_get_event_number();
    ev_finish[i] = MPE_Log_get_event_number();
    sprintf(desc, "Cat %8d", i);
    MPE_Describe_state(ev_start[i], ev_finish[i], desc, color[i]);
  }
  ev_mpi_getinfo_start = MPE_Log_get_event_number();
  ev_mpi_getinfo_finish= MPE_Log_get_event_number();
  MPE_Describe_state(ev_mpi_getinfo_start, ev_mpi_getinfo_finish, "get comm info", "grey50");
#endif

  t_res = MPI_Wtick();

/* loop over both communication schemes */
for (commtype = 0; commtype <=1; commtype ++) 
{
  if (procid == 0)
    printf("\nAlltoall Test on %d CPUs. %d repetitions.\n",nprocs,tests);

  /* Do the tests! */
  for (i=OFFSET; i<CATEGORIES; i++)
  {
    howmanyfloats[i] = pow(BASE,i);
    t_aver[i] = 0.0;
    
    for (j=0; j<tests; j++)
    {
      t_comm[i][j] = do_test(howmanyfloats[i],1,ev_start[i],ev_finish[i],commtype);
      t_aver[i] += t_comm[i][j];
      if (j==0)
      {
        t_min[i] = t_comm[i][j];
	t_max[i] = t_comm[i][j];
      }
      else
      {
        /* minimum time of a single test */
        if (t_comm[i][j] < t_min[i])
          t_min[i] = t_comm[i][j];
        /* maximum time of a single test */
        if (t_comm[i][j] > t_max[i])
          t_max[i] = t_comm[i][j];
      }
    }
    t_aver[i] /= tests;
  }
  
  if (procid == 0)
  {
    printf("Summary (%d-run average, timer resolution %f):\n",tests,t_res);
    
    if (commtype==0)
      sprintf(filename,"MPI_%2d_%2.2d",tests,nprocs);
    else 
      sprintf(filename,"GMX_%2d_%2.2d",tests,nprocs);
      
    f_ptr=(FILE *)fopen(filename,"w");
    
    for (i=OFFSET; i<CATEGORIES; i++)
    {
      /* calc stdandard deviation for each category: */
      dummy=0.0;
      for (j=0; j<tests; j++)
      {
        dum1   = t_comm[i][j] - t_aver[i];
        dummy += dum1*dum1;
      }
      dummy /= tests-1;
      sdev[i] = sqrt(dummy);
      
      printf("%10d floats took %f (%f) seconds. Min: %f  max: %f\n",howmanyfloats[i],t_aver[i],sdev[i],t_min[i],t_max[i]);

      fprintf(f_ptr,"%4d  %10d  %f  %f    %f  %f\n",
                     nprocs,howmanyfloats[i],t_aver[i],sdev[i],t_min[i],t_max[i]);
    }
  }
} /* end of loop over communication schemes */
  
  MPI_Finalize();
  
  return 0;
} 
