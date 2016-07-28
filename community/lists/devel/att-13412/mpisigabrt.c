#include <stdlib.h>
#include <execinfo.h>
#include <mpi.h>

int main(int argc, char *argv[])
{
  void *p;

  {
    /* This code is not interest of us. Just avoiding hang in backtrace(3)
       which is called in realloc(3) failure message.
       https://sourceware.org/bugzilla/show_bug.cgi?id=956
       https://sourceware.org/bugzilla/show_bug.cgi?id=16159
     */
    void *b;
    backtrace(&b, 0);
  }

  MPI_Init(NULL, NULL);

  p = malloc(100);
  *((size_t *)p - 1) = 0x10;  /* simulate buffer overrun */
  p = realloc(p, 100);

  MPI_Finalize();

  return 0;
}
