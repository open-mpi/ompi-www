#include<mpi.h>
#include<iostream>
#include<stdlib.h>
#include<fstream>
#include<string>
#include<sstream>

#define LOG(m) \
	log << (m) << std::endl; \
	log.flush()

#define LOG2(m1, m2) \
	log << (m1) << (m2) << std::endl; \
	log.flush()

int main(int argc, char** argv) {
	MPI::Init(argc,argv);
	int num_procs=MPI::COMM_WORLD.Get_size();
	if (num_procs<2) return 1;
	int rank=MPI::COMM_WORLD.Get_rank();

	double* local=(double*) MPI::Alloc_mem(sizeof(double), MPI::INFO_NULL);
	MPI::Win win=win.Create(local, sizeof(double), sizeof(double), MPI::INFO_NULL, MPI::COMM_WORLD);

	std::ostringstream t;
	t << rank;
	std::string s="out."+t.str();
	std::ofstream log(s.c_str(), std::ios::out);
	if (!log.is_open()) return 1;

	sleep(rank);

	LOG("start writing local");
	win.Lock(MPI::LOCK_EXCLUSIVE, rank, 0);
	*local=13.37*rank;
	win.Unlock(rank);
	LOG("end writing local");

	double d1=0.0;
	double d2=0.0;
	for(unsigned int i=0;i<num_procs;++i) {
		if (i==rank) continue;
		LOG2("start getting", i);
		win.Lock(MPI::LOCK_SHARED, i, 0);
		win.Get(&d1, 1, MPI::DOUBLE, i, 0, 1, MPI::DOUBLE);
		win.Unlock(i);
		LOG2("end getting", i);
		d2+=d1;
	}

	sleep(num_procs-rank);

	LOG("start getting local");
	win.Lock(MPI::LOCK_EXCLUSIVE, rank, 0);
	d2+=*local;
	win.Unlock(rank);
	LOG("end getting local");

	LOG("start barrier");
	MPI::COMM_WORLD.Barrier();
	LOG("end barrier");
	
	LOG("start win.Free()");
	win.Free();
	LOG("end win.Free()");
	LOG("start Finalize()");
	MPI::Finalize();
	LOG("end Finalize()");
	return 0;
}

