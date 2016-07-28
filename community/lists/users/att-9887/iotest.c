#include <assert.h>
#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

#define USE_FILE_TYPE 1
/* #undef USE_FILE_TYPE */

static void
_create_test_data(void)
{
  int i, j;
  FILE *f;

  int buf[1024];

  f = fopen("test_data", "w");

  for (i = 0; i < 300; i++) {
    for (j = 0; j < 1024; j++)
      buf[j] = i*1024 + j;
    fwrite(buf, sizeof(int), 1024, f);
  }

  fclose(f);
}

static void
_mpi_io_error_message(int error_code)
{
  char buffer[MPI_MAX_ERROR_STRING];
  int  buffer_len;

  MPI_Error_string(error_code, buffer, &buffer_len);

  fprintf(stderr, "MPI IO error: %s\n", buffer);
}

static void
_test_for_corruption(int  buf[],
                     int  base_offset,
                     int  rank_offset,
                     int  ni)
{
  int i;
  int n_ints = ni / sizeof(int);
  int int_shift = (base_offset + rank_offset) / sizeof(int);

  for (i = 0; i < n_ints; i++) {
    if (buf[i] != int_shift + i) {
      int rank;
      MPI_Comm_rank(MPI_COMM_WORLD, &rank);
      printf("i = %d, buf = %d, ref = %d\n",
             i, buf[i], int_shift + i);
      fprintf(stderr,
              "rank %d, base offset %d, rank offset %d, size %d: corruption\n",
             rank, base_offset, rank_offset, ni);
      MPI_Abort(MPI_COMM_WORLD, 1);
    }
  }
}

static void
_read_global_block(MPI_File   fh,
                   int        offset,
                   int        ni)
{
  MPI_Datatype file_type;
  MPI_Aint disps[1];
  MPI_Status status;
  int *buf;
  int lengths[1];
  char datarep[] = "native";
  int retval = 0;

  lengths[0] = ni;
  disps[0] = 0;

  buf = malloc(ni);
  assert(buf != NULL);

  MPI_Type_hindexed(1, lengths, disps, MPI_BYTE, &file_type);
  MPI_Type_commit(&file_type);
  MPI_File_set_view(fh, offset, MPI_BYTE, file_type, datarep, MPI_INFO_NULL);

  retval = MPI_File_read_all(fh, buf, ni, MPI_BYTE, &status);

  MPI_Type_free(&file_type);

  if (retval != MPI_SUCCESS)
    _mpi_io_error_message(retval);

  _test_for_corruption(buf, offset, 0, ni);

  free(buf);
}

static void
_read_block_ip(MPI_File   fh,
               int        offset,
               int        displ,
               int        ni)
{
  int errcode;
  int *buf;
  int lengths[1];
  MPI_Aint disps[1];
  MPI_Status status;
  MPI_Datatype file_type;

  char datarep[] = "native";
  int retval = 0;

  buf = malloc(ni);
  assert(buf != NULL);

  lengths[0] = ni;
  disps[0] = displ;

#ifdef USE_FILE_TYPE
  MPI_Type_hindexed(1, lengths, disps, MPI_BYTE, &file_type);
  MPI_Type_commit(&file_type);

  MPI_File_set_view(fh, offset, MPI_BYTE, file_type, datarep, MPI_INFO_NULL);
#else
  MPI_File_set_view(fh, offset+displ, MPI_BYTE, MPI_BYTE, datarep, MPI_INFO_NULL);
#endif

  retval = MPI_File_read_all(fh, buf, (int)(lengths[0]), MPI_BYTE, &status);

  if (retval != MPI_SUCCESS)
    _mpi_io_error_message(retval);

#if USE_FILE_TYPE
  MPI_Type_free(&file_type);
#endif

  _test_for_corruption(buf, offset, displ, ni);

  free(buf);
}

int main(int argc, char **argv)
{
  int rank;
  int retval;
  MPI_File fh;

  MPI_Init(&argc, &argv);

  MPI_Comm_rank(MPI_COMM_WORLD, &rank);

  if (rank == 0) {
    _create_test_data();
  }

  retval = MPI_File_open(MPI_COMM_WORLD,
                         "test_data",
                         MPI_MODE_RDONLY,
                         MPI_INFO_NULL,
                         &fh);

#if 0
  _read_global_block(fh, 0, 152);
  _read_global_block(fh, 192, 96);

  _read_global_block(fh, 320, 96);
  _read_global_block(fh, 448, 96);
  _read_global_block(fh, 576, 96);
  _read_global_block(fh, 704, 96);
  _read_global_block(fh, 832, 96);
  _read_global_block(fh, 960, 96);
  _read_global_block(fh, 1088, 96);
  _read_global_block(fh, 1184, 48);
  _read_global_block(fh, 1280, 96);
  _read_global_block(fh, 1408, 96);
  _read_global_block(fh, 1536, 96);
#endif

  if (rank == 0)
    _read_block_ip(fh, 1664, 0, 137136);
  else
    _read_block_ip(fh, 1664, 137136, 137136);

#if 0
  _read_global_block(fh, 275968, 96);

  if (rank == 0)
    _read_block_ip(fh, 276096, 0, 32172);
  else
    _read_block_ip(fh, 276096, 32172, 32172);

  _read_global_block(fh, 340480, 96);

  if (rank == 0)
    _read_block_ip(fh, 340608, 0, 68568);
  else
    _read_block_ip(fh, 340608, 68568, 68568);

  _read_global_block(fh, 477760, 96);

  if (rank == 0)
    _read_block_ip(fh, 477888, 0, 68568);
  else
    _read_block_ip(fh, 477888, 68568, 68572);

  _read_global_block(fh, 615040, 96);

  if (rank == 0)
    _read_block_ip(fh, 615168, 0, 0);
  else
    _read_block_ip(fh, 615168, 0, 208604);

  _read_global_block(fh, 823808, 96);
#endif

  retval = MPI_File_close(&fh);

  MPI_Finalize();
}

