#import <Foundation/Foundation.h>
#import <CoreLocation/CoreLocation.h>
#include <mpi.h>

int main (int argc, const char * argv[]) {

   int node;
   int total;
   int error;
   int i,j;
   float f;

   NSAutoreleasePool *pool = [[NSAutoreleasePool alloc] init];
   CLLocationManager *locationManager = [[CLLocationManager alloc] init];

   MPI_Init(NULL,NULL);
   MPI_Comm_rank(MPI_COMM_WORLD, &node);
   MPI_Comm_size(MPI_COMM_WORLD, &total);
     
   NSLog(@"Hello world from rank %d out of %d", node, total);

   for(j=0; j <= 100000; j++)
       for(i=0;i <= 100000; i++)
           f=i*2.718281828*i+i+i*3.141592654;

   MPI_Finalize();

   [pool drain];

   return 0;
}

