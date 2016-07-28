#include <mpi.h>
#include <stdio.h>
#include <unistd.h>
#include <sys/wait.h>
#include <string.h>
#include <errno.h>

#define CAREFUL 0

#if CAREFUL

int main(int argc, char** argv) {
  int pid = fork();
  if (pid < 0) {
    printf("fork failed: %s\n",strerror(errno));
    return 1;
  }
  if (pid) { // Parent
    int status;
    pid = wait(&status);
    if (pid < 0) {
      printf("wait failed: %s\n",strerror(errno));
      return 1;
    }
    printf("child status = %d\n",status);
  } else { // Child
    int r = MPI_Init(&argc,&argv);
    if (r != MPI_SUCCESS) {
      printf("MPI_Init failed: r = %d\n",r);
      return 1;
    }
    printf("We're an MPI program!\n");
    r = MPI_Finalize();
    if (r != MPI_SUCCESS) {
      printf("MPI_Finalized failed: r = %d\n",r);
      return 1;
    }
  }
  // Everything worked
  return 0;
}

#else

int main(int argc, char** argv) {
  int pid = fork();
  if (pid) { // Parent
    int status;
    wait(&status);
    printf("child status = %d\n",status);
  } else { // Child
    MPI_Init(&argc,&argv);
    printf("We're an MPI program!\n");
    MPI_Finalize();
  }
  return 0;
}

#endif
