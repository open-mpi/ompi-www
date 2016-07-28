#include <mpi.h>
#include <vector>
#include <cstdlib>
#include <conio.h>
#include <iostream>
#define MASTER (processorID == 0)
#define NODE1 (processorID ==1)
#define NODE2 (processorID ==2)
#define NODE3 (processorID ==3)
#define NODE4 (processorID ==4)
#define NODE5 (processorID ==5)
#define NODE6 (processorID ==6)
#define NODE7 (processorID ==7)
#define NODE8 (processorID ==8)


#define NODE (processorID != 0)
#define WORLD MPI_COMM_WORLD
#define SNODE_MASTER 0
#define SNODE_1 1
#define SNODE_2 2
#define SNODE_3 3
#define SNODE_4 4
#define SNODE_5 5
#define SNODE_6 6
#define SNODE_7 7
#define SNODE_8 8
#define DONE 9                  /* message tag */


using namespace std;

typedef std::vector<double> DoubleArray;
typedef std::vector<DoubleArray> Double2DArray;
typedef std::vector<Double2DArray> Double3DArray;
typedef std::vector<Double3DArray> Double4DArray;


int processorID;
int numberOfProcessors;

class MPIVDOFArray {
public:

	Double4DArray data;
	int Nx, Ny, Nz;
	int *cDOF;


	MPIVDOFArray(int Nx2, int Ny2, int Nz2, int *&DOFArr, int nNodes) 
	{
		Nx=Nx2;
		Ny=Ny2; Nz=Nz2; cDOF=DOFArr;
		int i, j, z;
		MPI_Request	send_request,recv_request;
		MPI_Status status;


		if (MASTER) {
			Double4DArray data(Nx, Double3DArray(Ny, Double2DArray(Nz, DoubleArray(0))));
			for (i = 0; i < Nx; i++)
				for (j = 0; j < Ny; j++)
					for (z = 0; z < Nz; z++) {
						data[i][j][z].resize(*GetDOF(i, j, z));
						for (int x = 0; x<*GetDOF(i, j, z); x++)
							data[i][j][z][x] = rand() % 4;
					}

					int c = Nx % (nNodes-1);
					int x = 0, destination = 1;

					//Code to slice the array and send it to the appropriate nodes
					for (i = 0; i < Nx; i++) {
						if (x < Nx / (nNodes-1)) {
							//MPI_Send(&data[i], data.size(), MPI_DOUBLE, destination, destination, WORLD);
							cout<<"C: "<<c<<" i: "<<i<<" x: "<<x<<" Destination:"<<destination<<"\n";
							MPI_Isend(&data[i], data.size(), MPI_DOUBLE, destination, destination, WORLD, &send_request);
						} else if (x = Nx / (nNodes-1)) {
							if (c > 0) {
								//MPI_Send(&data[i], data.size(), MPI_DOUBLE, destination, destination, WORLD);
								cout<<"C: "<<c<<" i: "<<i<<" x: "<<x<<" Destination:"<<destination<<"\n";
								MPI_Isend(&data[i], data.size(), MPI_DOUBLE, destination, destination, WORLD, &send_request);
								c--;
								x = -1;
								destination++;
							} else {
								x = -1;
								destination++;
								cout<<"C: "<<c<<" i: "<<i<<" x: "<<x<<" Destination:"<<destination<<"\n";
								//MPI_Send(&data[i], data.size(), MPI_DOUBLE, destination, destination, WORLD);
								MPI_Isend(&data[i], data.size(), MPI_DOUBLE, destination, destination, WORLD, &send_request);
							}
						}
						x++;

					}

					//MPI_Wait(&send_request,&status);
		} else if (NODE) {

			int c = Nx % (nNodes-1);
			int x = 0, destination = 1;
			Double3DArray temp;
			data.resize(0);
			Double4DArray::iterator it;

			for (i = 0; i < Nx; i++) {
				if (x < Nx / (nNodes-1)) {
					cout<<"Receiving   C: "<<c<<" i: "<<i<<" x: "<<x<<" Destination:"<<destination<<"\n";
					//MPI_Recv(&temp, data.size(), MPI_DOUBLE, 0, destination, WORLD, &status);
					MPI_Irecv(&temp, data.size(), MPI_DOUBLE, 0, destination, WORLD, &recv_request);
					it = data.end();
					data.insert(it, temp);
				} else if (x = Nx / (nNodes-1)) {
					if (c > 0) {
						cout<<"Receiving   C: "<<c<<" i: "<<i<<" x: "<<x<<" Destination:"<<destination<<"\n";
						//MPI_Recv(&temp, data.size(), MPI_DOUBLE, 0, destination, WORLD, &status);
						MPI_Irecv(&temp, data.size(), MPI_DOUBLE, 0, destination, WORLD, &recv_request);
						c--;
						x = -1;
						destination++;
						it = data.end();
						data.insert(it, temp);
					} else {
						x = -1;
						destination++;
						cout<<"Receiving   C: "<<c<<" i: "<<i<<" x: "<<x<<" Destination:"<<destination<<"\n";
						//MPI_Recv(&temp, data.size(), MPI_DOUBLE, 0, destination, WORLD, &status);
						MPI_Irecv(&temp, data.size(), MPI_DOUBLE, 0, destination, WORLD, &recv_request);
						it = data.end();
						data.insert(it, temp);
					}
				}
				x++;

			}

			//MPI_Wait(&recv_request,&status);
		}


		MPI_Finalize();


	}

	//void communicate() {
	//    int i, j;
	//    MPI_Status status;
	//    if (NODE1) {

	//        for (i = 0; i < SplitY; i++)
	//            for (j = 0, j < SplitZ; j++) {
	//                MPI_Send(data[SplitX - 1][i][j], *GetDOF(SplitX - 1, i, j), MPI_FLOAT, 2, 1, WORLD);
	//            }
	//        for (i = 0; i < SplitX; i++)
	//            for (j = 0, j < SplitZ; j++) {
	//                MPI_Send(data[i][SplitY - 1][j], *GetDOF(i, SplitY - 1, j), MPI_FLOAT, 3, 1, WORLD);
	//            }
	//        for (i = 0; i < SplitX; i++)
	//            for (j = 0, j < SplitY; j++) {
	//                MPI_Send(data[i][j][SplitZ - 1], *GetDOF(i, j, SplitZ - 1), MPI_FLOAT, 5, 1, WORLD);
	//            }

	//    } else if (NODE2) {

	//        for (i = 0; i < SplitY; i++)
	//            for (j = 0, j < SplitZ; j++) {
	//                MPI_Send(data[1][i][j], *GetDOF(SplitX, i, j), MPI_FLOAT, 1, 2, WORLD);
	//            }
	//        for (i = 0; i < SplitX; i++)
	//            for (j = 0, j < SplitZ; j++) {
	//                MPI_Send(data[i][SplitY - 1][j], *GetDOF(i, SplitY - 1, j), MPI_FLOAT, 4, 2, WORLD);
	//            }
	//        for (i = SplitX - 1; i < Nx; i++) {
	//            for (j = 0, j < SplitY; j++) {
	//                MPI_Send(data[i - SplitX + 1][j][SplitZ - 1], *GetDOF(i, j, SplitZ - 1), MPI_FLOAT, 5, 1, WORLD);
	//            }

	//            vector<int> temp;
	//            vector<int>::iterator it;

	//            for (i = 0; i < SplitY + 1; i++) {
	//                for (j = 0; j < SplitZ + 1; j++) {
	//                    it = data.begin();
	//                    MPI_Recv(temp, *GetDOF(SplitX - 1, i, j), MPI_FLOAT, 2, 1, WORLD, status);
	//                    data[0][j][z] = temp;
	//                }
	//            }
	//        }
	//    } else if (NODE3) {
	//        vector<int> temp;
	//        vector<int>::iterator it;

	//        for (i = 0; i < SplitX + 1; i++) {
	//            for (j = 0; j < SplitZ + 1; j++) {
	//                it = data.begin();
	//                MPI_Recv(temp, *GetDOF(i, SplitY - 1, j), MPI_FLOAT, 3, 1, WORLD, status);
	//                data[i][0][z] = temp;
	//            }
	//        }



	//        /*data.resize(SplitX+1);
	//        for (i = 0; i < SplitX+1; i++) {
	//            data.resize(Ny - SplitY+1);
	//            for (j = SplitY-1; j < Ny; j++) {
	//                data.resize(SplitZ+1);
	//                for (z = 0; z < SplitZ+1; z++) {
	//                    data[i][j-SplitY+1][z].resize(*GetDOF(i, j, z));
	//                }
	//            }
	//        }*/
	//    } else if (NODE4) {
	//        data.resize(Nx - SplitX + 1);
	//        for (i = SplitX - 1; i < Nx; i++) {
	//            data.resize(Ny - SplitY + 1);
	//            for (j = SplitY - 1; j < Ny; j++) {
	//                data.resize(SplitZ + 1);
	//                for (z = 0; z < SplitZ + 1; z++) {
	//                    data[i - SplitX + 1][j - SplitX + 1][z].resize(*GetDOF(i, j, z));
	//                }
	//            }
	//        }
	//    } else if (NODE5) {
	//        vector<int> temp;
	//        vector<int>::iterator it;

	//        for (i = 0; i < SplitX + 1; i++) {
	//            for (j = 0; j < SplitY + 1; j++) {
	//                it = data.begin();
	//                MPI_Recv(temp, *GetDOF(i, j, SplitZ - 1), MPI_FLOAT, 5, 1, WORLD, status);
	//                data[i][j][0] = temp;
	//            }
	//        }


	//        /*data.resize(SplitX+1);
	//        for (i = 0; i < SplitX+1; i++) {
	//            data.resize(SplitY+1);
	//            for (j = 0; j < SplitY+1; j++) {
	//                data.resize(Nz - SplitZ+1);
	//                for (z = SplitZ-1; z < Nz; z++) {
	//                    data[i][j][z-SplitZ+1].resize(*GetDOF(i, j, z));
	//                }
	//            }
	//        }*/
	//    } else if (NODE6) {
	//        data.resize(Nx - SplitX + 1);
	//        for (i = SplitX - 1; i < Nx; i++) {
	//            data.resize(SplitY + 1);
	//            for (j = 0; j < SplitY + 1; j++) {
	//                data.resize(Nz - SplitZ + 1);
	//                for (z = SplitZ - 1; z < Nz; z++) {
	//                    data[i - SplitX + 1][j][z - SplitZ + 1].resize(*GetDOF(i, j, z));
	//                }
	//            }
	//        }
	//    } else if (NODE7) {
	//        data.resize(SplitX + !);
	//        for (i = 0; i < SplitX + 1; i++) {
	//            data.resize(Ny - SplitY + 1);
	//            for (j = SplitY - 1; j < Ny; j++) {
	//                data.resize(Nz - SplitZ + 1);
	//                for (z = SplitZ - 1; z < Nz; z++) {
	//                    data[i][j - SplitY + 1][z - SplitZ + 1].resize(*GetDOF(i, j, z));
	//                }
	//            }
	//        }
	//    } else if (NODE8) {
	//        data.resize(Nx - SplitX + 1);
	//        for (i = SplitX - 1; i < Nx; i++) {
	//            data.resize(Ny - SplitY + 1);
	//            for (j = SplitY - 1; j < Ny; j++) {
	//                data.resize(Nz - SplitZ + 1);
	//                for (z = SplitZ - 1; z < Nz; z++) {

	//                    data[i - SplitX - 1][j - SplitY - 1][z - SplitZ - 1].resize(*GetDOF(i, j, z));
	//                }
	//            }
	//        }
	//    }

	//}

	int *LinearIndex(int i, int j, int z) {
		int blah1 = (i + Nx * j + Ny * Nx * z);
		int *blah = &blah1;

		return blah;
	}

	int *GetDOF(int i, int j, int z) {

		int ind = cDOF[*LinearIndex(i, j, z)] - cDOF[*LinearIndex(i, j, z)];
		int *blah = &ind;

		return blah;
	}

	void print() {
		for (int i = 0; i < Nx; i++)
			for (int j = 0; j < Ny; j++)
				for (int z = 0; z < Nx; z++)

					for (int k = 0; k < (int)data[i][j][z].size(); k++)
						cout << data[i][j][z][k] << " ";

	}

};

void setDOFArr(int *DOFArr, int Nx, int Ny, int Nz) {

	for (int i = 0; i < Nx * Ny * Nz; i++)
		DOFArr[i] = rand() % 3 + 1;
}

int main(int argc, char *argv[]) {

	MPI_Init(&argc, &argv);
	//numberOfProcessors++;
	MPI_Comm_size(WORLD, &numberOfProcessors);
	MPI_Comm_rank(WORLD, &processorID);
	cout<<"ProcessorID: "<<processorID<<"\n";
	int Nx, Ny, Nz, SplitX, SplitY, SplitZ;
	Nx = Nz = Ny = 5;
	SplitX = SplitY = SplitZ = 8 / 2;

	int *DOF = new int[Nx * Ny * Nz];
	//setDOFArr(DOF, Nx, Ny, Nz);
	for (int i = 0; i < Nx * Ny * Nz; i++)
		DOF[i] = rand() % 3 + 1;

	MPIVDOFArray a(Nx, Ny, Nz, DOF, numberOfProcessors);

	delete [] DOF;
	DOF = NULL;

	if(processorID==0)
	{
		fprintf(stdout, "P0\n ");
		fflush(stdout);
	}
	else if(processorID==1)
	{
		fprintf(stdout, "P1\n ");
		fflush(stdout);
	}
	else if (processorID==2)
	{
		fprintf(stdout, "p2\n ");
		fflush(stdout);
	}

	cout<<"Process: "<<processorID;
	a.print();

	MPI_Finalize();
}