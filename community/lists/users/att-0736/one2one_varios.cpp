#include <mpi.h>
#include <iostream>

#define WORKTAG 1
#define DIETAG 2


/* Local functions */


typedef int unit_of_work_t;
typedef int unit_result_t;

static void master(void);
static void slave(void);
static unit_of_work_t get_next_work_item(void);
static void process_results(unit_result_t result);
static unit_result_t do_work(unit_of_work_t work);


using namespace std;

int
main(int argc, char **argv)
{
  int myrank;

  /* Initialize MPI */

  MPI_Init(&argc, &argv);

  /* Find out my identity in the default communicator */

  MPI_Comm_rank(MPI_COMM_WORLD, &myrank);
  if (myrank == 0) {
		int count=0;
		for (int i =0; i < 10; i++){
		int work = 100;
	    cout << "MASTER WAITS FOR USER RESPONSE:" ;
			cin >> work;
    	cout << "MASTER WILL SEND["<< count++ << "]:" << work << endl;
			 MPI_Send(&work,             /* message buffer */
               1,                 /* one data item */
             MPI_INT,           /* data item is an integer */
             1, /* to who we just received from */
             WORKTAG,           /* user chosen message tag */
             MPI_COMM_WORLD);   /* default communicator */

			MPI_Status status;

		}

  } else {
			int count =0;
			int work;
			MPI_Status status;
			while (true){
		 			MPI_Recv(&work, 1, MPI_INT, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &status);
    			cout << "SLAVE[" << myrank << "] RECEPTION[" << count++ << "]:" << work << "MPI_STATUS.MPI_ERROR:" << status.MPI_ERROR<<endl;
				if (status.MPI_TAG == DIETAG) {
      		break;
    		}

			}
		
  }

  /* Shut down MPI */

  MPI_Finalize();
  return 0;
}





