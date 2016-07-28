
#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

#define NSIDE 5
#define NBLOCK 3
#define NPROC 2
 
int main(int argc, char *argv[]) 
{ 
  int i, j; 

  int rank, size;
  int bpos, err;

  MPI_Datatype darray;
  MPI_Status status;
  MPI_File mpi_fh;

  /* Define array distribution
      A 2x2 block size works with ROMIO, a 3x3 block size breaks it. */
  int distrib[2] = { MPI_DISTRIBUTE_CYCLIC, MPI_DISTRIBUTE_CYCLIC };
  int bsize[2] = { NBLOCK, NBLOCK };
  int gsize[2] = { NSIDE, NSIDE };
  int psize[2] = { NPROC, NPROC };

  double data[NSIDE*NSIDE];
  double *ldata, *pdata;

  int tsize, packsize, nelem;

  FILE * dfile;
 
  MPI_Init(&argc, &argv);

  MPI_Comm_size(MPI_COMM_WORLD, &size);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);

  /* Set up type */
  MPI_Type_create_darray(size, rank, 2, gsize, distrib,
			 bsize, psize, MPI_ORDER_FORTRAN, MPI_DOUBLE, &darray);
  MPI_Type_commit(&darray);
  MPI_Type_size(darray, &tsize);
  nelem = tsize / sizeof(double);

  for(i = 0; i < (NSIDE*NSIDE); i++) data[i] = i;

  if (rank == 0) {
    dfile = fopen("tmpfile.dat", "w+");
    fwrite(data, sizeof(double), (NSIDE*NSIDE), dfile);
    fclose(dfile);
  }
  MPI_Barrier(MPI_COMM_WORLD);

  /* Allocate buffer */
  ldata = (double *)malloc(tsize);
  pdata = (double *)malloc(tsize);

  /* Use Pack to pull out array */
  bpos = 0;
  err = MPI_Pack(data, 1, darray, pdata, tsize, &bpos, MPI_COMM_WORLD);

  MPI_Barrier(MPI_COMM_WORLD);

  /* Read in array from file.  */
  MPI_File_open(MPI_COMM_WORLD, "tmpfile.dat", MPI_MODE_RDONLY, MPI_INFO_NULL, &mpi_fh);
  MPI_File_set_view(mpi_fh, 0, MPI_DOUBLE, darray, "native", MPI_INFO_NULL);
  MPI_File_read_all(mpi_fh, ldata, nelem, MPI_DOUBLE, &status);
  MPI_File_close(&mpi_fh);

  for(i = 0; i < size; i++) {
    MPI_Barrier(MPI_COMM_WORLD);
    if(rank == i) {
      printf("=== Rank %i === (%i elements) \nPacked: ", rank, nelem);
      for(j = 0; j < nelem; j++) {
        printf("%4.1f ", pdata[j]);
        fflush(stdout);
      }
      printf("\nRead:   ");
      for(j = 0; j < nelem; j++) {
        printf("%4.1f ", ldata[j]);
        fflush(stdout);
      }
      printf("\n\n");
      fflush(stdout);
    }
  }

  MPI_Finalize();

  exit(0);

} 
