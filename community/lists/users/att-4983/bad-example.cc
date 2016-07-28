#include <mpi.h>
#include <iostream>
#include <list>
#include <vector>

#include <stdlib.h> //for atoi (in case someone doesn't have boost)

const int buflen=5000;

int main(int argc, char *argv[]) {
  using namespace std;
  int reps=1000;
  if(argc>1){ //optionally specify number of repeats on the command line
    reps=atoi(argv[1]);
  }

  int numprocs, rank, namelen;
  char processor_name[MPI_MAX_PROCESSOR_NAME];

  MPI_Init(&argc, &argv);
  MPI_Comm_size(MPI_COMM_WORLD, &numprocs);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  MPI_Get_processor_name(processor_name, &namelen);

  cerr << "Process "<<rank<<" ("<< getpid()<<") on "<<processor_name<<" out of "<<numprocs<<"\n";
  if(rank>0){
    cerr << "Process "<<rank<<" sleeping..."<<endl;
    sleep(rank);
    cerr << "Process "<<rank<<" sending..."<<endl;
    list<MPI_Request> sendQ;
    char somememory;
    
    for(int i=0;i<reps;i++){
      MPI_Status s;
      int f=0;
      for(list<MPI_Request>::iterator ite=sendQ.begin();ite!=sendQ.end();){
	MPI_Test(&*ite,&f,&s);
	if(f){
	  list<MPI_Request>::iterator j=ite;
	  ++ite;
	  sendQ.erase(j);
	}else{
	  break; //these should be received in order, so if we have a pending one, stop there.
	}
      }

      sendQ.push_back(MPI_Request());
      MPI_Issend(&somememory,0,MPI_CHAR,0,0,MPI_COMM_WORLD,&sendQ.back());
    }
    cerr << "Process "<<rank<<" waiting on remaining "<< sendQ.size() << " sends..."<<endl;
    while(sendQ.size()){
      for(list<MPI_Request>::iterator i=sendQ.begin();i!=sendQ.end();){
	MPI_Status status;
	int finished=0;
	int ret=MPI_Test(&*i,&finished,&status);
	if(finished){
	  list<MPI_Request>::iterator j=i;
	  i++;
	  sendQ.erase(j);
	}else{
	  i++;
	}
      }
    }
    cerr << "Process "<<rank<<" cleanup done."<<endl;
  }else{
    cerr << "Master proc sleeping...\n"<<endl;
    sleep(numprocs+2);
    cerr << "Mast proc wakin'"<<endl;
    int expected=(numprocs-1)*reps;
    int tick=expected/100; //every 1% make a tick
    int nextTick=tick;
    char somememory;
    for(int count=0;count<expected;count++){
      MPI_Status status;
      int nextSender=numprocs-(count/reps)-1; //receive messages from last sender first
      MPI_Recv(&somememory,0,MPI_CHAR,nextSender,0,MPI_COMM_WORLD,&status);
      //as an alternate, this causes fewer unexpected messages, but can still use up an absurd amount of ram!
      //MPI_Recv(&somememory,0,MPI_CHAR,MPI_ANY_SOURCE,0,MPI_COMM_WORLD,&status);
      int recv_count=0;
      MPI_Get_count(&status,MPI_CHAR,&recv_count);
      if(count==nextTick){
	cerr << "*";
	nextTick+=tick;
      }
    }
    cerr << endl;
    cerr << "All messages accounted for!\n";
  }

  MPI_Barrier(MPI_COMM_WORLD);

  if(rank==0)
    cerr << "All procs done."<<endl;

  MPI_Finalize();
}

