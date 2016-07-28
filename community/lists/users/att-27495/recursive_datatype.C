#include <utility>
#include <vector>

#include "mpi.h"

#define TEST_UB 0
#define TEST_LB 1

  struct MyPoint {
    double val[2];
    MyPoint(double x, double y) {
      val[0] = x;
      val[1] = y;
    }
  };


int main(int argc, char** argv)
  {
    MPI_Init(&argc, &argv);

    int size, myrank;
    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Comm_rank(MPI_COMM_WORLD, &myrank);

    std::vector<std::pair<double, MyPoint> > vals
      (size, std::make_pair(-1.0, MyPoint(-2.0, -3.0)));

    std::pair<double, MyPoint> inval = 
      std::make_pair(myrank+0.75, MyPoint(myrank, myrank+0.25));

    MPI_Datatype pt_type, my_pair_type;

// WORKS:
#if !TEST_LB && !TEST_UB
    int pt_blocklengths[2] = {1, 1};
    MPI_Datatype pt_types[2] = {MPI_DOUBLE, MPI_DOUBLE};
    MPI_Aint pt_displs[2] = {0, 8};

    MPI_Type_struct (2, pt_blocklengths, pt_displs, pt_types, &pt_type);
#endif

// WORKS:
#if !TEST_LB && TEST_UB
    int pt_blocklengths[] = {1, 1, 1};
    MPI_Datatype pt_types[] = {MPI_DOUBLE, MPI_DOUBLE, MPI_UB};
    MPI_Aint pt_displs[] = {0, 8, 16};

    MPI_Type_struct (3, pt_blocklengths, pt_displs, pt_types, &pt_type);
#endif

// FAILS:
#if TEST_LB && !TEST_UB
    int pt_blocklengths[] = {1, 1, 1};
    MPI_Datatype pt_types[] = {MPI_LB, MPI_DOUBLE, MPI_DOUBLE};
    MPI_Aint pt_displs[] = {0, 0, 8};

    MPI_Type_struct (3, pt_blocklengths, pt_displs, pt_types, &pt_type);
#endif

// FAILS:
#if TEST_LB && TEST_UB
    int pt_blocklengths[4] = {1, 1, 1, 1};
    MPI_Datatype pt_types[4] = {MPI_LB, MPI_DOUBLE, MPI_DOUBLE, MPI_UB};
    MPI_Aint pt_displs[4] = {0, 0, 8, 16};

    MPI_Type_struct (4, pt_blocklengths, pt_displs, pt_types, &pt_type);
#endif

    MPI_Type_commit (&pt_type);

    MPI_Aint pt_bound;
    MPI_Type_lb(pt_type, &pt_bound);
    // PRINTS 0:
    std::cout << "Point LB = " << pt_bound << std::endl;
    MPI_Type_ub(pt_type, &pt_bound);
    // PRINTS 16:
    std::cout << "Point UB = " << pt_bound << std::endl;


    MPI_Datatype types[] = { MPI_DOUBLE, pt_type };
    int blocklengths[] = {1,1};
    MPI_Aint displs[] = {0,8};

    MPI_Type_struct (2, blocklengths, displs, types, &my_pair_type);

    MPI_Type_commit (&my_pair_type);

    MPI_Aint paired_bound;
    MPI_Type_lb(my_pair_type, &paired_bound);
    // FAIL CASE PRINTS 8:
    // SUCCESS CASE PRINTS 0:
    std::cout << "Paired LB = " << paired_bound << std::endl;

    MPI_Type_ub(my_pair_type, &paired_bound);
    // FAIL CASE PRINTS 24:
    // SUCCESS CASE PRINTS 24:
    std::cout << "Paired UB = " << paired_bound << std::endl;
  }

