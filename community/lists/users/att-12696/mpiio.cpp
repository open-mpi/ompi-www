// system includes
#include <iostream>
#include <fstream>
#include <cstdio>
#include <string>
#include <cassert>
using namespace std;

// MPI includes
#include "mpi.h"
//#include "mpio.h"

int main(int argc, char *argv[]) {

  int gne=2;          // number of global elements
  const int qtot=12;  // number of data points per element

  MPI_Comm mpi_comm(MPI_COMM_WORLD);
  MPI_Init(&argc, &argv);

  if (argc>2) {
    cerr << "Usage:  mpiio [number-elements]" << endl;
    MPI_Finalize();
    exit(1);
  }
  if (argc==2) {
    gne = atoi(argv[1]);
  }

  int pid, numproc;
  MPI_Comm_rank(mpi_comm, &pid);
  MPI_Comm_size(mpi_comm, &numproc);

  if (numproc>gne) {
    if (pid==1) cerr << "Number of processors exceeds number of elements" 
                     << endl;
    MPI_Finalize();
    exit(2);
  }
  
  assert(numproc<=gne);

  int start = pid * gne / numproc;
  int stop = (pid+1)*gne / numproc;
  int ne = stop - start;
  int eid[ne];
  for (int e=0; e<ne; e++) eid[e] = start + e;
  int part[gne];
  for (int i=0; i<numproc; i++) {
    for (int e=i*gne/numproc; e<(i+1)*gne/numproc; e++) {
      part[e] = i;
    }
  }

  int gdisp[gne];
  gdisp[0] = 0;
  for(int e=1; e<gne; e++)
    gdisp[e] = gdisp[e-1] + qtot;
  const int glen = gdisp[gne-1] + qtot;
  int disp[ne];
  int len[ne];
  for (int e=0; e<ne; e++) {
    disp[e] = gdisp[eid[e]];
    len[e] = qtot;
  }

  int ndof = ne*qtot;
  
  double x[ndof];
  int j=0;
  for(int e=0; e<ne; e++) {
    for(int n=0; n<qtot; n++) {
      x[j]=disp[e]+n; 
      //if (pid==0) cout << "x["<<j<<"] = "<<x[j]<<endl;
      j++;
    }
  }

  // Now for the MPI-IO stuff

  char native[] = "native";
  int stat;

  MPI_File fh;
  MPI_Status status;
  MPI_Datatype filetype;
  MPI_Offset offset = 0;

  stat = MPI_Type_indexed( ne, len, disp, MPI_DOUBLE, &filetype);
  if (stat) cout << pid << ":1:stat = " << stat << endl;

  stat = MPI_Type_commit( &filetype );
  if (stat) cout << pid << ":2:stat = " << stat << endl;

  string name="mpi.out";

  stat = MPI_File_open( mpi_comm, const_cast<char *>(name.c_str()), 
                        MPI_MODE_WRONLY | MPI_MODE_CREATE, 
                        MPI_INFO_NULL, &fh );
  if (stat) cout << pid << ":3:stat = " << stat << endl;

  stat = MPI_File_set_view(fh, offset, MPI_DOUBLE, filetype, native, 
                           MPI_INFO_NULL);
  if (stat) cout << pid << ":4:stat = " << stat << endl;

  stat = MPI_File_write_all(fh, x, ndof, MPI_DOUBLE, &status);
  if (stat) cout << pid << ":5:stat = " << stat << endl;

  stat = MPI_File_close(&fh);
  if (stat) cout << pid << ":6:stat = " << stat << endl;

  stat = MPI_Type_free( &filetype );
  if (stat) cout << pid << ":7:stat = " << stat << endl;

  MPI_Finalize();

  return 0;
}

