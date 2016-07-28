Program: make-it-hang.cpp
	mpic++ make-it-hang.cpp -g -o Program

vanilla1-30: Program
	mpirun -np 30 ./Program 1 |& tee mpirun-np-30-Program-1.txt

vanilla4096-30: Program
	mpirun -np 30 ./Program 4096 |& tee mpirun-np-30-Program-4096.txt

vanilla4096-2: Program
	mpirun -np 2 ./Program 4096 |& tee mpirun-np-2-Program-4096.txt

no-sm4096-30: Program
	mpirun --mca btl ^sm -np 30 ./Program 4096 |& tee mpirun-mca-btl-^sm-np-30-Program-4096.txt

simple: Simple
	mpirun -np 2 ./Simple |& tee mpirun-np-2-Simple.txt

Simple: test4096.cpp
	mpic++ test4096.cpp -O3 -o Simple

