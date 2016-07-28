
#include <assert.h>
#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>

int main(int argc, char **argv) {
  char *file, *rbuf;
  int i, res, rank, size, count;
  size_t len;

  MPI_Comm comm = MPI_COMM_WORLD;
  MPI_Datatype data, view;
  MPI_File fh;
  MPI_Offset fs;
  MPI_Status sts;

  int lens[6], offs[6];
  MPI_Aint addr, disp[6];

  file = argv[1];

  res = MPI_Init(&argc, &argv);
  assert(res == MPI_SUCCESS);
  res = MPI_Comm_size(comm, &size);
  assert(res == MPI_SUCCESS);
  res = MPI_Comm_rank(comm, &rank);
  assert(res == MPI_SUCCESS);

  res = MPI_File_open(comm, file, MPI_MODE_RDONLY, MPI_INFO_NULL, &fh);
  assert(res == MPI_SUCCESS);
  res = MPI_File_get_size(fh, &fs);
  assert(res == MPI_SUCCESS);

  count = fs / 10 / size;
  len = count * 10;
  rbuf = malloc(len+1);
  assert(rbuf != NULL);
  memset(rbuf, 0, len+1);

  for (i = 0; i < count; i++) {
    lens[i] = 10;
    offs[i] = rank * 10 + size * i * 10;
    res = MPI_Get_address(rbuf + i * 10, &addr);
    assert(res == MPI_SUCCESS);
    disp[i] = addr;
  }

  res = MPI_Type_create_hindexed(count, lens, disp, MPI_CHAR, &data);
  assert(res == MPI_SUCCESS);
  res = MPI_Type_commit(&data);
  assert(res == MPI_SUCCESS);

  res = MPI_Type_indexed(count, lens, offs, MPI_CHAR, &view);
  assert(res == MPI_SUCCESS);
  res = MPI_Type_commit(&view);
  assert(res == MPI_SUCCESS);

  res = MPI_File_set_view(fh, 0, MPI_CHAR, view, "native", MPI_INFO_NULL);
  assert(res == MPI_SUCCESS);
  res = MPI_File_read(fh, MPI_BOTTOM, 1, data, &sts);
  assert(res == MPI_SUCCESS);
  res = MPI_Get_count(&sts, data, &count);
  assert(res == MPI_SUCCESS);
  assert(count == 1);

  printf("rank%d ... %s\n", rank, rbuf);

  res = MPI_Type_free(&view);
  assert(res == MPI_SUCCESS);

  res = MPI_Type_free(&data);
  assert(res == MPI_SUCCESS);

  free(rbuf);

  res = MPI_File_close(&fh);
  assert(res == MPI_SUCCESS);

  res = MPI_Finalize();
  assert(res == MPI_SUCCESS);

  return 0; }

