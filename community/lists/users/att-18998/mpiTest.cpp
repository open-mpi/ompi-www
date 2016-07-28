#include <mpi.h>

#include <iostream>
#include <sstream>
#include <fstream>
#include <assert.h>

#define DUMMY_MSG_LENGTH (40)
// >28 almost never works, 
// <=28 mostly works, sometimes not either

#define LENGTH_TAG 1
#define WORK_TAG 2
#define RESULT_TAG 3
#define DIE_TAG 4

using namespace std;

// From: http://beige.ucs.indiana.edu/I590/node85.html
void mpiErrorLog(int rank, int error_code) {
  if (error_code != MPI_SUCCESS) {
    
    char error_string[BUFSIZ];
    int length_of_error_string;
    
    MPI_Error_string(error_code, error_string, &length_of_error_string);
    cerr << "MPI: rank=" << rank << ", errorStr=" << error_string << endl;
    //send_error = TRUE;
  }
}

int main(int argc, char* argv[]) {
  typedef unsigned long int unit_of_length_t;
  typedef unsigned char unit_of_work_t;
  typedef unsigned char unit_of_result_t;
  
  int numprocs, rank, namelen;
  char processor_name[MPI_MAX_PROCESSOR_NAME];
  
  MPI_Init(&argc, &argv);
  
  MPI_Comm_size(MPI_COMM_WORLD, &numprocs);
  cerr << "MPI: numprocs = " << numprocs << endl;
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  cerr << "MPI: rank = " << rank << endl;
  MPI_Get_processor_name(processor_name, &namelen);
  cerr << "MPI: processor_name = " << processor_name << endl;
  
  MPI_Status status;
  
  ////// Send work to the Slaves //////
  
  //MPI_Errhandler set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
  int errorCode;
  
  stringstream ss;
  string s0(DUMMY_MSG_LENGTH, 'W');
  cerr << "work msg = '" << s0 << "'" << endl; 
  ss << s0;
  string s = ss.str();
  
  if (rank!=0) {
    
    MPI_Status status;
    int errorCode;
    
    while (true) {
      
      ////// Receive work from the master //////
      unit_of_length_t workLength;
      cerr << "MPI: slave " << rank << " ready to receive workLength from master" 
      << endl;
      errorCode = MPI_Recv(&workLength, 1, MPI_UNSIGNED_LONG, 0, MPI_ANY_TAG,
                           MPI_COMM_WORLD, &status);
      mpiErrorLog(rank, errorCode);
      
      assert((status.MPI_TAG == LENGTH_TAG) || (status.MPI_TAG == DIE_TAG));
      if (status.MPI_TAG == DIE_TAG) {
        cerr << "MPI: slave " << rank << " received dieTag from master, "
        << "errorCode = " << errorCode << endl;
        MPI_Finalize();
        return 0; // ok
      }
      assert(status.MPI_TAG == LENGTH_TAG);
      cerr << "MPI: slave " << rank << " received workLength = " 
      << workLength << " from master, errorCode = " << errorCode << endl;
      
      unit_of_work_t * work = new unit_of_work_t[workLength+1];
      cerr << "work = " << (void*)work << endl;
      assert(work != 0);
      
      cerr << "MPI: slave " << rank << " ready to receive work from master" 
      << endl;
      MPI_Recv(&work, workLength+1, MPI_BYTE, 0, WORK_TAG,
               MPI_COMM_WORLD, &status); 
      cerr << "MPI: slave " << rank << " received work from master, "
      << "errorCode = " << errorCode << endl;
      mpiErrorLog(rank, errorCode);
      //**//assert(work[workLength] == '\0');
      //**//cerr << ">>>MPI: work = " << work << endl;
      //**//printf("MPI: work = %s", work);


      assert(status.MPI_TAG == WORK_TAG);
      
      
      stringstream ss1;
      string s0(DUMMY_MSG_LENGTH, 'R');
      cerr << "result msg = '" << s0 << "'" << endl; 
      ss1 << s0;
      
      ////// Send result to the master //////
      
      unit_of_length_t resultLength = ss1.str().length();
      
      unit_of_result_t * result = new unit_of_result_t[resultLength+1];
      result[resultLength] = '\0';
      cerr << "result = " << (void*)result << endl;
      assert(result != 0);
      
      memcpy(result, ss1.str().c_str(), resultLength);
      
      MPI_Request request1, request2;
      
      cerr << "MPI: slave " << rank << " ready to send resultLength" << endl;
      MPI_Isend(&resultLength, 1,
               MPI_UNSIGNED_LONG, 0, LENGTH_TAG, MPI_COMM_WORLD
               , &request1
               );
      cerr << "MPI: slave " << rank << " sent resultLength, errorCode = " 
      << errorCode << endl;
      mpiErrorLog(rank, errorCode);
      
      cerr << "MPI: slave " << rank << " ready to send result" << endl;
      
      MPI_Wait(&request1, &status);
      
      
      MPI_Isend(&result, resultLength+1, // +1 for '\0'
               MPI_BYTE, 0, RESULT_TAG, MPI_COMM_WORLD
               , &request2
               );
      cerr << "MPI: slave " << rank << " sent result, errorCode = " << errorCode
      << endl;
      mpiErrorLog(rank, errorCode);
      
      MPI_Wait(&request2, &status);
      
      //delete [] work;
      //delete [] result;
    }
    
    
    
  } else {
    assert(rank==0);
    
    unit_of_length_t workLength = s.length();
    for (int r=1; r<numprocs; r++) {
      //MPI_Request request1, request2;
      
      cerr << "MPI: master ready to send workLength=" << workLength 
      << " to slave " << r << endl;
      errorCode = MPI_Send(&workLength, 1,
                            MPI_UNSIGNED_LONG, r, LENGTH_TAG, MPI_COMM_WORLD
                            //, &request1
                            );
      cerr << "MPI: master sent workLength, errorCode = " << errorCode << endl;
      mpiErrorLog(rank, errorCode);
      
      cerr << "MPI: master ready to send work to slave " << r << endl;
      //MPI_Wait(&request1, &status);
      
      unit_of_work_t * work = new unit_of_work_t[workLength+1];
      memcpy(work, s.c_str(), workLength);
      work[workLength] = '\0';
      
      errorCode = MPI_Send(&work, workLength+1, // +1 for '\0'
                            MPI_BYTE, r, WORK_TAG, MPI_COMM_WORLD
                            //, &request2
                            );
      cerr << "MPI: master sent work to slave " << r 
      << ", errorCode = " << errorCode <<endl;
      mpiErrorLog(rank, errorCode);
      
      //MPI_Wait(&request2, &status);
    }    
    
    //vector<unit_of_result_t *> results;
    for (int r=1; r<numprocs; r++) {
      unit_of_length_t resultLength;
      cerr << "MPI: master ready to receive resultLength from slave " << r << endl;
      errorCode = MPI_Recv(&resultLength, 1, MPI_UNSIGNED_LONG, 
                           MPI_ANY_SOURCE, // we don't need rank-order
                           MPI_ANY_TAG, MPI_COMM_WORLD, &status);
      cerr << "MPI: master received resultLength=" << resultLength 
      << " from slave " << r << ", errorCode = " << errorCode << endl;
      mpiErrorLog(rank, errorCode);
      // but after received length, get next message from same slave, so:
      assert(status.MPI_TAG == LENGTH_TAG);
      int rReceiving = status.MPI_SOURCE;
      
      unit_of_result_t * result = new unit_of_result_t[resultLength+1];
      cerr << "MPI: master ready to receive result from slave " << r << endl;
      errorCode = MPI_Recv(&result, resultLength+1, MPI_BYTE,
                           rReceiving, // we need to pair length with contents from each r
                           MPI_ANY_TAG, MPI_COMM_WORLD, &status);
      //**//assert(result[resultLength] == '\0');
      cerr << "MPI: master received result from slave " << r
      << ", errorCode = " << errorCode << endl;
      mpiErrorLog(rank, errorCode);
      //**//cerr << ">>>MPI: result = " << result << endl;
      
      assert(status.MPI_TAG == RESULT_TAG);
      
      //results.push_back(result);      
    }
    
    // do something with results
    for (int r=1; r<numprocs; r++) {
      //delete [] results[r-1];
    }
  }
  
  ////// Send DIETAGs to the Slaves //////  
  unit_of_length_t workLength = 1L;
  for (int r=1; r<numprocs; r++) {
    cerr << "MPI: master ready to send dieTag to slave " << r << endl;
    MPI_Send(&workLength, 1,
             MPI_UNSIGNED_LONG, r, DIE_TAG, MPI_COMM_WORLD);
    cerr << "MPI: master sent dieTag to slave " << r << endl;
  }
  
  MPI_Finalize();
}

