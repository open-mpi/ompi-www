#include <mpi.h>
#include <iostream>
#include <list>
#include <vector>
#include <string.h>
#include <assert.h>

#include <stdlib.h> //for atoi (in case someone doesn't have boost)

const int buflen=50000*24;

int numprocs, rank, namelen;
char processor_name[MPI_MAX_PROCESSOR_NAME];

using namespace std;

class Message {
public:
  MPI_Request req;
  MPI_Status status;
  char buffer[buflen];
  int count;
  void reset(char val){
    memset(buffer,val,sizeof(char)*buflen);
  }
  Message():
    count(0)
  {
    reset(rank);
  }
  Message(int _count) :
    count(_count)
  {
    reset(count+rank+1);
  }

  bool preVerify(){
    char content=rank;
    for(int b=0;b<buflen;b++){
      if(buffer[b]!=content){
	cout << "Pre-panic! "<<rank<<" has wrong pre-data (expected "<<(int)content<<", not "<<(int)buffer[b]<<") in message "<<count<<" at "<<b<<endl;
	for(int bi=max(0,b-5);bi<min(buflen,b+5);bi++)
	  cout << rank << ">"<< bi << " = "<< (int)buffer[bi]<<endl;
	assert(buffer[b]==content);
	return false;
      }
    }
    return true;
  }

  bool verify(int r){
    char content=count+r+1;
    for(int b=0;b<buflen;b++){
      if(buffer[b]!=content){
	cout << "Oh noes! "<<rank<<" has wrong data (expected "<<(int)content<<", not "<<(int)buffer[b]<<") in message "<<count<<" to/from "<<r<<" at "<<b<<endl;
	for(int bi=max(0,b-5);bi<min(buflen,b+5);bi++)
	  cout << rank << ">"<< bi << " = "<< (int)buffer[bi]<<endl;
	assert(buffer[b]==content);
	return false;
      }
    }
    return true;
  }

};

int main(int argc, char *argv[]) {
  using namespace std;
  long reps=1000;
  if(argc>1){ //optionally specify number of repeats on the command line
    reps=atoi(argv[1]);
  }

  MPI_Init(&argc, &argv);
  MPI_Comm_size(MPI_COMM_WORLD, &numprocs);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  MPI_Get_processor_name(processor_name, &namelen);

  int senders=numprocs/2;
  int receivers=numprocs-senders;

  assert(senders>0);
  assert(receivers>0);

  cout << "Process "<<rank<<" ("<< getpid()<<") on "<<processor_name<<" out of "<<numprocs<<"\n";
  if(rank<senders){
    cout << "Process "<<rank<<" sending "<<reps<<" messages to each of "<<receivers<<" nodes"<<endl;
    vector<list<Message> > sendQs(receivers);
    vector<int> counts(receivers,0);

    for(int i=0;i<reps;i++){
      for(int receiver=0;receiver<receivers;receiver++){
	list<Message> &sendQ=sendQs[receiver];
	int target=receiver+senders;
	
	sendQ.push_back(Message(counts[receiver]++));
	Message &msg=sendQ.back();
	char content=msg.count+rank+1;
		  
	//confirm that everything we're sending hasn't been corrupted
	assert(msg.buffer);
	//	cerr << rank<< ">Starting send "<<msg.count<<" from "<<((void*)msg.buffer)<<" to "<<receiver<<endl;
	msg.verify(rank);
	MPI_Issend(msg.buffer,buflen,MPI_CHAR,target,0,MPI_COMM_WORLD,&msg.req);
	//	cerr << rank << ">:Started send "<<msg.count<<" to "<<receiver<<endl;

	//if any messages have finished sending, go ahead and dequeue them
	int f=0;
	for(list<Message>::iterator ite=sendQ.begin();ite!=sendQ.end();){
	  MPI_Test(&ite->req,&f,&ite->status);
	  if(f){
	    //	    cerr << "Send "<<ite->count<<" to "<<receiver<<" finished. reseting and deleting"<<endl;
	    //	    ite->reset(0);
	    list<Message>::iterator j=ite;
	    ++ite;
	    sendQ.erase(j);
	  }else
	    break; //packets should be received in order by receiver, so can stop if we hit one that hasn't been received yet
	}
      }
    }

    //wait for remaining sends to finish...
    int nodesLeft=0,messageCount=0;
    for(int receiver=0;receiver<receivers;receiver++)
      if(!sendQs[receiver].empty()){
	nodesLeft++;
	messageCount+=sendQs[receiver].size();
      }

    cout << "Initial send complete. Waiting for "<<nodesLeft<<" nodes to finish "<<messageCount<<" messages."<<endl;

    while(nodesLeft){
      for(int receiver=0;receiver<receivers;receiver++){
	list<Message> &sendQ=sendQs[receiver];
	if(!sendQ.empty()){
	  int finished=0;
	  int ret=MPI_Test(&sendQ.front().req,&finished,&sendQ.front().status);
	  if(finished)
	    sendQ.pop_front();

	  if(sendQ.empty()){//with this message received we've exhausted this queue
	    nodesLeft--;
	    //	    cout << "Receiver "<<receiver<<" is done. "<<(nodesLeft)<<" left!"<<endl;
	  }
	}
      }
    }

    cout << "Process "<<rank<<" cleanup done."<<endl;
  }else{
    cout << "Process "<<rank<<" receiving. Expecting "<<reps<<" messages from each of "<<senders<<" nodes."<<endl;

    vector<Message> msgSenders(senders);
    for(int si=0;si<senders;si++){ //start all of them receiving
      msgSenders[si].preVerify();
      MPI_Irecv(msgSenders[si].buffer,buflen,MPI_CHAR,si,0,MPI_COMM_WORLD,&msgSenders[si].req);
    }

    int sendersLeft=senders;
    while(sendersLeft){
      for(int si=0;si<senders;si++){ //for each sender
	Message &msg=msgSenders[si];
	if(msg.count>=reps)
	  continue; //done with this one
	//see if any messages have been received
	int f=0;
	if(1){ //use tests
	  MPI_Test(&msg.req,&f,&msg.status);
	}else{
	  cout << "Waiting on message "<<msg.count<<" from "<<si<<endl;
	  MPI_Wait(&msg.req,&msg.status);
	  f=1;
	}
	if(f){ //got data back.
	  if(msg.status.MPI_SOURCE!=si){//it had better have come from who we were expecting
	    cout << "Expected message from "<<si<<" but MPI reports it came from "<<msg.status.MPI_SOURCE<<endl;
	  }
	  assert(msg.status.MPI_SOURCE==si);
	  char content=si+msg.count+1; //should contain lots of this
	  //	  cout << "Got message "<<msg.count<<" from "<<si<<endl;
	  msg.verify(si);

	  //if we're still expecting more, start receiving again
	  msg.count++;
	  if(msg.count<reps){
	    msg.reset(rank);
	    MPI_Irecv(msg.buffer,buflen,MPI_CHAR,si,0,MPI_COMM_WORLD,&msg.req);
	  }else{
	    sendersLeft--;
	    //	    cout << "Sender "<<si<<" done. "<<sendersLeft<<" left."<<endl;
	  }
	}
	
      }
    }

    cout << "All messages accounted for!\n";
  }

  MPI_Barrier(MPI_COMM_WORLD);

  if(rank==0)
    cout << "All procs done."<<endl;

  MPI_Finalize();
  return 0;
}

