#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <string.h>

int
main(int ac, char *av[])
{
	int  rank, size;
	char name[MPI_MAX_PROCESSOR_NAME];
	int  nameLen;
	int  n = 1, i;
	int  slave = 0;
	int  *errs;
	char *args[] = { "-W", NULL};
	MPI_Comm intercomm, icomm;
	int  err;
	char *line;
	char  *buff;
	int   buffSize;
	int   one_int;
	char  who[1024];

	memset(name, sizeof(name), 0);

	for(i=1; i<ac; i++){
		if (av[i] == NULL)
			continue;

		if (strcmp(av[i],"-W") == 0){
			slave = 1;
		}
		else if (strcmp(av[i],"-n") == 0){
			n = atoi(av[i+1]);
			av[i+1] = NULL;
		}
	}

	if (n <= 0){
		fprintf(stderr, "n=%d has an illegal value.\n", n);
		return -1;
	}

	sprintf(who, "%s[%d]", slave? " slave": "master", getpid());
	if (!slave)
		printf("Generating %d slave processes\n", n);


	errs = (int *)alloca(sizeof(int)*n);

	fprintf(stderr, "%s before MPI_Init()\n", who);
	MPI_Init(&ac, &av);
	fprintf(stderr, "%s after MPI_Init()\n", who);

	MPI_Comm_rank(MPI_COMM_WORLD, &rank);
	MPI_Comm_size(MPI_COMM_WORLD, &size);
	MPI_Get_processor_name(name, &nameLen);
	sprintf(&who[strlen(who)], " (%s) %d/%d", name, rank, size);
	fprintf(stderr, "%s\n", who);


	if (!slave){
		err = MPI_Comm_spawn(av[0], args, n, MPI_INFO_NULL, 0, MPI_COMM_SELF, &intercomm, errs);
		if (err){
			fprintf(stderr, "MPI_Comm_spawn generated error %d.\n", err);
		}
	}
	else {
		fprintf(stderr, "%s before MPI_Comm_get_parent()\n", who);
		MPI_Comm_get_parent(&intercomm);
	}

	fprintf(stderr, "%s before MPI_Bcast()\n", who);
	MPI_Bcast(&one_int, 1, MPI_INT, 0, intercomm);
	fprintf(stderr, "%s after MPI_Bcast()\n", who);

	fprintf(stderr, "%s before MPI_Barrier()\n", who);
	MPI_Barrier(intercomm);
	fprintf(stderr, "%s after MPI_Barrier()\n", who);

	fprintf(stderr, "%s before MPI_Finalize()\n", who);
	MPI_Finalize();

	return 0;
}

