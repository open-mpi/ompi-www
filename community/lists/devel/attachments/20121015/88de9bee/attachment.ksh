#include <iostream>
#include <vector>
#include <stdio.h>
#include <stdlib.h>
#include "mpi.h"

using namespace std;

#define MASTER 0
int RtoL = 10;
int LtoR = 20;

int main ( int argc, char **argv ) 
{
    int nprocs, taskid;
    FILE *f = NULL;
    int left, right, i_start, i_end;
    float sum = 0;
    MPI_Status status;
    float *y, *yold;
    float *v, *vold;

    //  const int NUM_MASSES = 1000;
    //  const float duration = 10.0;
    //  const float Ktension = 0.1;
    //  const float Kdamping = 0.9;

#if 0
    if ( argc != 5 ) {
        cout << "usage: " << argv[0] << " NUM_MASSES durationInSecs Ktension Kdamping\n";
        return 2;
    }
#endif

    int NUM_MASSES  = atoi ( argv[1] );
    float duration = atof ( argv[2] );
    float Ktension = atof ( argv[3] );
    float Kdamping = atof ( argv[4] );
    const int PICKUP_POS = NUM_MASSES / 7;
    const int OVERSAMPLING = 16;

    MPI_Init(&argc,&argv);
    MPI_Comm_size(MPI_COMM_WORLD,&nprocs);
    MPI_Comm_rank(MPI_COMM_WORLD,&taskid);

    if (taskid  == 0) {
        f = fopen ( "rstring.raw", "wb" );
        if (!f) {
            cout << "can't open output file\n";
            return 1;
        }
    }

    y = new float[NUM_MASSES];
    yold = new float[NUM_MASSES];
    v = new float[NUM_MASSES];

    for (int i = 0; i < NUM_MASSES; i++ ) {
        v[i]  = 0.0;
        yold[i] = y[i] = 0.0;
        if (i == NUM_MASSES/2 )
            yold[i] = 1.0; 
    }

    /*
     * Identifying left and right tasks
     * For task 0   - there is no left task
     * For task n-1 - there is no right task
     */
    if (taskid == 0) {
        left = MPI_PROC_NULL;
        right = 1;
    } else if (taskid == nprocs - 1) {
        left = taskid - 1;
        right = MPI_PROC_NULL;
    } else {
        left = taskid - 1;
        right = taskid + 1;
    }

    i_start = taskid * (NUM_MASSES/nprocs);
    i_end = i_start + (NUM_MASSES/nprocs);
    /*
     * check if there are any left over masses, and assign
     * it to the last process
     */
    if (NUM_MASSES % nprocs) {
        if (taskid == nprocs - 1) {
            i_end = i_end + (NUM_MASSES % nprocs);
        }
    }

    int numIters = duration * 44100 * OVERSAMPLING;;
    if (argc == 6) {
        numIters = atoi(argv[5]);
    }

    for ( int t = 0; t < numIters; t++ ) {
        float sum = 0;
        float gsum = 0;

        for ( int i = i_start; i < i_end; i++ ) {
            if ( i == 0 || i == NUM_MASSES-1 ) {
            } else {
                float accel = Ktension * (yold[i+1] + yold[i-1] - 2*yold[i]);
                v[i] += accel;
                v[i] *= Kdamping;
                y[i] = (float)yold[i] + (float)v[i];
                sum += (float)y[i];
            }
        }

        //printf("taskid = %d iter = %d sum = %f\n", taskid, t, sum);
        //cout<< "taskid = "<<taskid<<" iter = "<<t<<" sum = " << sum << endl;
        MPI_Reduce(&sum, &gsum, 1, MPI_FLOAT, MPI_SUM, MASTER, MPI_COMM_WORLD);

        if (taskid != nprocs - 1) {
            /* Send to the right and receive form the left */
            MPI_Send(&yold[i_end-1],1, MPI_FLOAT, right, LtoR, MPI_COMM_WORLD);
            MPI_Recv(&yold[i_end],  1, MPI_FLOAT, right, RtoL, MPI_COMM_WORLD, &status);

            MPI_Send(&y[i_end-1],1, MPI_FLOAT, right, LtoR, MPI_COMM_WORLD);
            MPI_Recv(&y[i_end],  1, MPI_FLOAT, right, RtoL, MPI_COMM_WORLD, &status);
        }
        if (taskid != 0) {
            /* Send to the left and receive form the right */
            MPI_Send(&yold[i_start],   1, MPI_FLOAT, left, RtoL, MPI_COMM_WORLD);
            MPI_Recv(&yold[i_start-1], 1, MPI_FLOAT, left, LtoR, MPI_COMM_WORLD, &status);

            MPI_Send(&y[i_start],   1, MPI_FLOAT, left, RtoL, MPI_COMM_WORLD);
            MPI_Recv(&y[i_start-1], 1, MPI_FLOAT, left, LtoR, MPI_COMM_WORLD, &status);
        }

        int tmp_var = 0;
        //cout<<"After Reduce task = "<<taskid<<"y = ";
        for (tmp_var = 0; tmp_var < NUM_MASSES; tmp_var++) {
            //printf("%f ", y[tmp_var]);
            //cout<<y[tmp_var]<<" ";
        }
        //cout<<endl;

        float *tmp = y;
        y = yold;
        yold = tmp;

        if (taskid == 0) {
            cout<< "sum = " << gsum << endl;
            //cout<<"Average Comm Time = "<<(total_comm_time/(float)nprocs)<<endl;
            if ( t % OVERSAMPLING == 0 ) {
                fwrite ( &gsum, sizeof(float), 1, f );
            }
        }
    }
    if (taskid  == 0) {
        fclose ( f );
    }
    MPI_Finalize();
}
