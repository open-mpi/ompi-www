#include <iostream>
#include <fstream>
#include <sstream>
#include <cassert>
#include <queue>
#include <list>
#include <cstdlib>
#include <mpi.h>

std::ofstream output_file;

enum {REQUEST_TAG=4321, ANSWER_TAG, FINISHED_TAG};

typedef int Answer_type;


int main(int argc, char *argv[])
{
	MPI_Init (&argc, &argv);	// starts MPI
	int number_of_PEs, my_PE_ID;
	MPI_Comm_size(MPI_COMM_WORLD, &number_of_PEs);
	assert(number_of_PEs == 2);
	MPI_Comm_rank(MPI_COMM_WORLD, &my_PE_ID);

	std::srand(123456);

	int number_of_requests_to_send = 100000;
	int number_of_requests_to_recv = number_of_requests_to_send;
	int number_of_answers_to_recv  = number_of_requests_to_send;

	std::stringstream filename;
	filename<<"output"<<my_PE_ID<<".txt";
	output_file.open(filename.str().c_str());

	int buffer[100];
	MPI_Request dummy_request;

	//Send the first request
	MPI_Isend(buffer, 1, MPI_INT, 1-my_PE_ID, REQUEST_TAG, MPI_COMM_WORLD, &dummy_request);
	number_of_requests_to_send--;

	int working_PEs = number_of_PEs;
	bool lack_of_work_sent = false;
	bool there_was_change = true;
	while(working_PEs > 0)
	{
		if(there_was_change)
		{
			there_was_change = false;
			std::cout<<my_PE_ID<<": req_to_recv = "<<number_of_requests_to_recv
							<<", req_to_send = "<<number_of_requests_to_send
							<<", answers_to_recv = "<<number_of_answers_to_recv
							<<std::endl;
			output_file<<my_PE_ID<<": req_to_recv = "<<number_of_requests_to_recv
							<<", req_to_send = "<<number_of_requests_to_send
							<<", answers_to_recv = "<<number_of_answers_to_recv
							<<std::endl;
		}

		MPI_Status status;
		int flag = 1;
		int number_of_answer;
//		MPI_Probe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &status);
		MPI_Iprobe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &flag, &status);
		if(flag)
		{
			there_was_change = true;
			switch(status.MPI_TAG){
				case(REQUEST_TAG):
					MPI_Recv(buffer, 1, MPI_INT, status.MPI_SOURCE, REQUEST_TAG, MPI_COMM_WORLD, &status);
					MPI_Isend(buffer, (1<<(std::rand()%5))*sizeof(int), MPI_BYTE, 1-my_PE_ID, ANSWER_TAG, MPI_COMM_WORLD, &dummy_request);
					number_of_requests_to_recv--;
				break;
				case(ANSWER_TAG):
					number_of_answers_to_recv--;
					MPI_Get_count( &status, MPI_BYTE, &number_of_answer);

					MPI_Recv(buffer, number_of_answer, MPI_BYTE, status.MPI_SOURCE, ANSWER_TAG, MPI_COMM_WORLD, &status);

					for(int i = (number_of_answer+3)/4; (i>0)&&(number_of_requests_to_send>0); i--)
					{
						MPI_Isend(buffer, 1, MPI_INT, 1-my_PE_ID, REQUEST_TAG, MPI_COMM_WORLD, &dummy_request);
						number_of_requests_to_send--;
					}
				break;
				case(FINISHED_TAG):
					MPI_Recv(buffer, 1, MPI_INT, status.MPI_SOURCE, FINISHED_TAG, MPI_COMM_WORLD, &status);
					working_PEs--;
				break;
			}
		}
		if((number_of_answers_to_recv == 0) && (!lack_of_work_sent))
		{
			there_was_change = true;
			MPI_Isend(buffer, 1, MPI_INT, 1-my_PE_ID, FINISHED_TAG, MPI_COMM_WORLD, &dummy_request);
			working_PEs--;
			lack_of_work_sent = true;
		}
	}
	MPI_Barrier(MPI_COMM_WORLD);
	std::cout<<my_PE_ID<<": Finished normaly"<<std::endl;
	MPI_Finalize();

	return 0;
}

