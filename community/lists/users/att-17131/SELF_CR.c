#include <mpi.h>
#include <signal.h>
#include <string.h>

#include <stdio.h>
#include <stdlib.h>

#define LIMIT 50

/************************
 * Function Declarations
 ************************/
void signal_handler(int sig);

/* Default OPAL crs self callback functions */
int opal_crs_self_user_checkpoint(char **restart_cmd);
int opal_crs_self_user_continue(void);
int opal_crs_self_user_restart(void);

/* OPAL crs self callback functions */
int my_personal_checkpoint(char **restart_cmd);
int my_personal_continue(void);
int my_personal_restart(void);

/*******************
 * Global Variables and arrays
 *******************/
int myrank, numprocs;
double *a, *b, *c, *d;
int am_done = 1;
const int N=1000000;		// Defines size of arrays


int inr_loop_counter  = 0;
int out_loop_counter  = 0;
int current_step = 0;

char ckpt_file[128];

char restart_path[128] = "my-restart-path../SELF_CR";

int main(int argc, char** argv){
    	MPI_Init(&argc, &argv);
	int input_time;

	if( argc != 2 ) {
		input_time = 200;
        }
	else{ 
		input_time = atoi(argv[1]);
	}


	/* So we can exit cleanly */
	signal(SIGINT,  signal_handler);
	signal(SIGTERM, signal_handler);
// 	printf("Received Signal \n");

	MPI_Comm_size(MPI_COMM_WORLD, &numprocs);
	MPI_Comm_rank(MPI_COMM_WORLD, &myrank);
	MPI_Status status[4];
	MPI_Request request[4];
	

	a = (double *) malloc( N*sizeof(double) );
	b = (double *) malloc( N*sizeof(double) );
	c = (double *) malloc( N*sizeof(double) );
	d = (double *) malloc( N*sizeof(double) );
	
	int i=0;
	for(i=0; i<N ; ++i)
	{
		a[i] = 1.;
		b[i] = 2.;
		c[i] = 3.;
		d[i] = 4.;
	}

	// Neighbor's rank calculation
	int my_neigh_right, my_neigh_left;

	my_neigh_right = myrank+1;
	my_neigh_left = myrank-1;
	
	if(myrank==numprocs-1)			// for extreme last process
		my_neigh_right = 0;
	if(myrank==0)				// for first process
		my_neigh_left = numprocs-1;
	
	if(myrank==0)
		printf("Loop starting...\n");
	
// 	==========================================================
// 	======================KERNEL LOOP=========================   /  
	for( ; out_loop_counter < input_time ; ++out_loop_counter){
		if(myrank==0 && out_loop_counter%50==0){
			printf("Outer loop counter : %d\n", out_loop_counter);
		}

		for(inr_loop_counter = 0; inr_loop_counter < N ; ++inr_loop_counter)
		{
			a[inr_loop_counter] = b[inr_loop_counter]+c[inr_loop_counter]*d[inr_loop_counter];  // Some dummy calculation
			
		}
		
		// communication between neighboring processes
		
		MPI_Irecv(&b[0],10000, MPI_DOUBLE, my_neigh_left, 0, MPI_COMM_WORLD, &request[0]);
		MPI_Isend(&a[0],10000, MPI_DOUBLE, my_neigh_right, 0, MPI_COMM_WORLD, &request[1]);

		MPI_Isend(&c[0],10000, MPI_DOUBLE, my_neigh_left, 1, MPI_COMM_WORLD, &request[2]);
		MPI_Irecv(&d[0],10000, MPI_DOUBLE, my_neigh_right, 1, MPI_COMM_WORLD, &request[3]);
		MPI_Waitall(4, request, status);
		MPI_Barrier(MPI_COMM_WORLD);
		
	}
	

	free(a);free(b);free(c);free(d);
	MPI_Finalize();
	
	return 0;
}


void signal_handler(int sig) {
	printf("Received Signal %d\n", sig);
	am_done = 0;
}

/* OPAL crs self callbacks for checkpoint */
int opal_crs_self_user_checkpoint(char **restart_cmd) {
	printf("opal_crs_self_user_checkpoint callback...\n");
	my_personal_checkpoint(restart_cmd);
	return 0;
}

int opal_crs_self_user_continue(void) {
	printf("opal_crs_self_user_continue callback...\n");
	my_personal_continue();
	return 0;
}

int opal_crs_self_user_restart(void) {
	printf("opal_crs_self_user_restart callback...\n");
	my_personal_restart();
	return 0;
}

/* OPAL crs self callback for checkpoint */
int my_personal_checkpoint(char **restart_cmd) {
	FILE *fp;

	*restart_cmd = NULL;

	printf("my_personal_checkpoint callback...\n");
	
	strcpy(ckpt_file,"CP_file_");
	char temp_char[64];
	sprintf(temp_char, "%d", myrank);
	strcat(temp_char, ".ckpt");
	strcpy(ckpt_file, strcat(ckpt_file, temp_char));

	
	
	/*
	* Open our checkpoint file
	*/

	if( NULL == (fp = fopen(ckpt_file, "w")) ) {
	    fprintf(stderr, "Error: Unable to open file (%s)\n", ckpt_file);
	    return 0;
	}
	
	/*
	* Save the process state
	*/
	int i=0;
	for(i = 0; i< N ; ++i){
		fprintf(fp, "%lf\n", a[i]);
	}
	i =0;
	for(i = 0; i< N ; ++i){
		fprintf(fp, "%lf\n", b[i]);
	}
	i =0;
	/*
	* Close the checkpoint file
	*/
	fclose(fp);

	/*
	* Figure out the restart command
	*/
	asprintf(restart_cmd, "%s", strdup(restart_path));
	printf("my_personal_checkpoint callback finished...: %d\n",myrank);
	return 0;
}

int my_personal_continue() {
	printf("my_personal_continue callback...\n");
	/* Don't need to do anything here since we are in the
	*  state that we want to be in already.
	*/
	return 0;
}

int my_personal_restart() {

	printf("my_personal_restart callback...\n");
	
	return 0;
}