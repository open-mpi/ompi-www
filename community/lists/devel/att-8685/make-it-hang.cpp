/* 
 * Author: Sébastien Boisvert
 * Université Laval
 *
 * sample code to make openmpi-1.4.3 hang
 *
 * excluding the shared memory solves the problem.
 *
 * see Makefile
 *
 *
 */

#include<mpi.h>
#include<stdlib.h>
#include<time.h>
#include<stdio.h>
#include<stdint.h>
#include<iostream>
using namespace std;

class Rank{
	int m_rank;
	int m_size;
	time_t m_startingPoint;
	int m_messageSize;
	void run();
	void receiveMessages();
	void sendMessages();
	int getRank();
	int getSize();
	bool isAlive();
public:
	Rank(int argc,char**argv);

};

int Rank::getSize(){
	return m_size;
}

bool Rank::isAlive(){
	int duration=30;
	return time(NULL)-m_startingPoint<duration;
}

void Rank::receiveMessages(){
	int flag;
	MPI_Status status;
	MPI_Iprobe(MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,&flag,&status);
	while(flag){
		int length;
		MPI_Get_count(&status,MPI_BYTE,&length);
		uint8_t incoming[4096];
		MPI_Status status2;
		MPI_Recv(incoming,length,MPI_BYTE,status.MPI_SOURCE,status.MPI_TAG,MPI_COMM_WORLD,&status2);
		MPI_Iprobe(MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,&flag,&status);
	}
}

void Rank::sendMessages(){
	int destination=rand()%getSize();
	uint8_t data[4096];
	MPI_Send(data,m_messageSize,MPI_BYTE,destination,0,MPI_COMM_WORLD);
}

Rank::Rank(int argc,char**argv){
	m_startingPoint=time(NULL);
	srand((unsigned)time(NULL));
	MPI_Init(&argc,&argv);
	m_messageSize=atoi(argv[1]);
	MPI_Comm_rank(MPI_COMM_WORLD,&m_rank);
	MPI_Comm_size(MPI_COMM_WORLD,&m_size);
	MPI_Barrier(MPI_COMM_WORLD);
	run();
	MPI_Barrier(MPI_COMM_WORLD);
	MPI_Finalize();
}

void Rank::run(){
	cout<<"Rank "<<getRank()<<" is running, message size is "<<m_messageSize<<endl;
	time_t last=time(NULL);
	while(isAlive()){
		receiveMessages(); 
		sendMessages();
		time_t theTime=time(NULL);
		if(theTime!=last){
			cout<<"Rank "<<getRank()<<": "<<theTime<<" seconds since Unix epoch"<<endl;
			last=theTime;
		}
	}
	cout<<"Rank "<<getRank()<<" has finished, Thank you for your assistance."<<endl;
}

int Rank::getRank(){
	return m_rank;
}

int main(int argc,char**argv){
	Rank(argc,argv);
	return EXIT_SUCCESS;
}


