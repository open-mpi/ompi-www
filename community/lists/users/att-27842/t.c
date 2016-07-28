#include <fcntl.h>
#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <sys/mman.h>
#include <sys/stat.h>
#include <sys/types.h>

#define SIZE 1
#define DATA 2
#define ACK 3

#define MMAP 1
#define MALLOC 2

void master(int nodes, int me, int argc, char **argv);
void slave(int nodes, int me, int argc, char **argv);

void terminate(void)
{
    MPI_Abort(MPI_COMM_WORLD,1);
}

main(int argc, char **argv)
{

    int me, nodes;
    char hn[1024];

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &me);
    MPI_Comm_size(MPI_COMM_WORLD, &nodes);

    gethostname(hn, 1023);
    fprintf(stderr, "Me %d: @ %s\n", me, hn);

    if (me == 0) {
	master(nodes, me, argc, argv);
    } else {
	slave(nodes, me, argc, argv);
    }

    MPI_Finalize();
}

void master(int nodes, int me, int argc, char **argv)
{
    int fd, ret, n, ack;
    struct stat st;
    char *buff;
    size_t l, sz, mmaplength = 1024*1024, malloclength = 1024*1024;
    MPI_Status status;
    int mode;

    mode = MMAP;
    if (argc > 1) {
    	if (strcmp(argv[1], "mmap") == 0) {
	    mode = MMAP;
	}
    	if (strcmp(argv[1], "malloc") == 0) {
	    mode = MALLOC;
	}
    }
    if (mode == MMAP) {
	fd = open("somelargefile", O_RDONLY);
	if (fd < 0) {
	    perror("Could nod open input file");
	    terminate();
	}
	ret = fstat(fd, &st);
	if (ret != 0) {
	    perror("Could not stat input file");
	    close(fd);
	    terminate();
	}
	sz = st.st_size;
	buff = mmap(NULL, mmaplength, PROT_READ, MAP_PRIVATE, fd, 0);
	if (buff == MAP_FAILED) {
	    perror("Failed to mmap input file");
	    terminate();
	}
    }
    if (mode == MALLOC) {
	buff = malloc(malloclength);
	memset(buff, 'N', malloclength);
    }

    for (n = 1; n < nodes; n++) {
	l = 34986;
	ack = 0;
	while (!ack) {
	    fprintf(stderr, "Start MPI_send of size (%ld) to %d\n", l, n);
	    ret = MPI_Send(&l, 1, MPI_LONG, n, SIZE, MPI_COMM_WORLD);
	    if (ret != MPI_SUCCESS) {
		fprintf(stderr, "MPI_Send of size (%ld) to %d failed with ret (%d)\n",
		    l, n, ret);
	    }
	    fprintf(stderr, "Start MPI_send of data (sz %ld) to %d\n", l, n);
	    ret = MPI_Send(buff, (int)l, MPI_BYTE, n, DATA, MPI_COMM_WORLD);
	    if (ret != MPI_SUCCESS) {
		fprintf(stderr, "MPI_Send of buff (sz %ld) to %d failed with ret (%d)\n",
		    l, n, ret);
	    }
	    fprintf(stderr, "Start MPI_recv of ack (sz %ld) to %d\n", l, n);
	    ret = MPI_Recv(&ack, 1, MPI_INT, n, ACK, MPI_COMM_WORLD, &status);
	    if (ret != MPI_SUCCESS) {
		fprintf(stderr, "MPI_Recv of ack from %d failed with ret (%d), status.error (%d)\n",
		    n, ret, status.MPI_ERROR);
	    }
	    if (!ack) {
		fprintf(stderr, "Master: slave %d got NULL in data, reducing size\n", n);
		l -= 32;
	    }
	}
    }

    if (mode == MMAP) {
	munmap(buff, mmaplength);
	close(fd);
    }
    if (mode == MALLOC) {
	free(buff);
    }

    fprintf(stderr, "Master returning\n");
    return;
}

void slave(int nodes, int me, int argc, char **argv)
{
    int ret, ack, i;
    size_t newdatasz, datasz = 0;
    char *data = NULL;
    MPI_Status status;

    ack = 0;
    while (!ack) {
	newdatasz = 0;
	fprintf(stderr, "Me %d: Start MPI_recv of size\n", me);
	ret = MPI_Recv(&newdatasz, 1, MPI_LONG, 0, SIZE, MPI_COMM_WORLD, &status);
	if (ret != MPI_SUCCESS) {
	    fprintf(stderr, "Me %d: Recv of newdatasz failed with ret (%d), status.error (%d)\n",
		me, ret, status.MPI_ERROR);
	}
	fprintf(stderr, "Me %d: got newdatasz (%ld)\n", me, newdatasz);
	if (newdatasz > datasz) {
	    data = realloc(data, newdatasz);
	}
	if (newdatasz == 0) {
	    fprintf(stderr, "Me %d: ERROR got newdatasz == 0!!\n", me);
	    terminate();
	}
	fprintf(stderr, "Me %d: Start MPI_recv of data (sz %ld)\n", me, newdatasz);
	ret = MPI_Recv(data, (int)newdatasz, MPI_CHAR, 0, DATA, MPI_COMM_WORLD, &status);
	if (ret != MPI_SUCCESS) {
	    fprintf(stderr, "Me %d: Recv of data (sz %ld) failed with ret (%d), status.error (%d)\n",
		me, newdatasz, ret, status.MPI_ERROR);
	}
	ack = 1;
	for (i = 0; i < newdatasz; i++) {
	    if (data[i] == '\0') {
		fprintf(stderr, "Me %d: Got NULL in data at pos %d\n", me, i);
		ack = 0;
		break;
	    }
	}
	fprintf(stderr, "Me %d: Start MPI_send of ack (%d) (sz %ld)\n", me, ack, newdatasz);
	ret = MPI_Send(&ack, 1, MPI_INT, 0, ACK, MPI_COMM_WORLD);
	if (ret != MPI_SUCCESS) {
	    fprintf(stderr, "Me %d: mpi_send ack returned error, %d\n",
		me, ret);
	}
	datasz = newdatasz;
    }

    fprintf(stderr, "Me %d: returning\n", me);
    return;
}

