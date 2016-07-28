#include <shmem.h>
#include <stdio.h>
#define quantum 2

static long int total = 0;

int main ( int argc, char ** argv )
{
     int size, rank;
     int i, j, nloop;
     long int my_loc_val = 10000000;    
     
     start_pes(0);
     size=num_pes();
     rank=my_pe();
   
     nloop = my_loc_val/quantum;
     printf("My rank : %d, BEFORE--> My_local_val: %ld, Total: %ld\n", rank, my_loc_val, total);

     for(i=0; i<nloop; i++)
     {
	 my_loc_val = my_loc_val - quantum;
	 shmem_long_add(&total, quantum, 0);
	 shmem_quiet();
	 //shmem_barrier_all();
     }
     //shmem_barrier_all();   
   
     printf("My rank : %d, AFTER --> My_local_val: %ld, Total: %ld\n", rank, my_loc_val, total);
    
 return 0;
}
