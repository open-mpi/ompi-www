// RUN: %clang_cc1 -fsyntax-only -verify %s

//===--- mpi.h mock -------------------------------------------------------===//

typedef struct ompi_communicator_t *MPI_Comm;
typedef struct ompi_datatype_t *MPI_Datatype;

int MPI_Wrong1(void *buf, int count, MPI_Datatype datatype, int dest,
    int tag, MPI_Comm comm)
    __attribute__(( mpi_typed_arg )); // expected-error {{attribute requires exactly 2 arguments}}

int MPI_Wrong2(void *buf, int count, MPI_Datatype datatype)
    __attribute__(( mpi_typed_arg(0,7) )); // expected-error {{attribute parameter 1 is out of bounds}}

int MPI_Wrong3(void *buf, int count, MPI_Datatype datatype)
    __attribute__(( mpi_typed_arg(5,7) )); // expected-error {{attribute parameter 1 is out of bounds}}

int MPI_Wrong4(void *buf, int count, MPI_Datatype datatype)
    __attribute__(( mpi_typed_arg(3,0) )); // expected-error {{attribute parameter 2 is out of bounds}}

int MPI_Wrong5(void *buf, int count, MPI_Datatype datatype)
    __attribute__(( mpi_typed_arg(3,5) )); // expected-error {{attribute parameter 2 is out of bounds}}

extern int x;

int MPI_Wrong6(void *buf, int count, MPI_Datatype datatype)
    __attribute__(( mpi_typed_arg((x+1),7) )); // expected-error {{attribute requires parameter 1 to be an integer constant}}

int MPI_Wrong7(void *buf, int count, MPI_Datatype datatype)
    __attribute__(( mpi_typed_arg(3,x) )); // expected-error {{attribute requires parameter 2 to be an integer constant}}

int MPI_Wrong8() __attribute__(( mpi_typed_arg(1,3) )); // expected-error {{attribute only applies to functions and methods}}

int MPI_Send(void *buf, int count, MPI_Datatype datatype, int dest,
    int tag, MPI_Comm comm)
    __attribute__(( mpi_typed_arg(1,3) ));

#define OMPI_PREDEFINED_GLOBAL(type, global) ((type) &(global))

#define MPI_COMM_WORLD OMPI_PREDEFINED_GLOBAL(MPI_Comm, ompi_mpi_comm_world)
extern struct ompi_predefined_communicator_t ompi_mpi_comm_world;

#define MPI_INT OMPI_PREDEFINED_GLOBAL(MPI_Datatype, ompi_mpi_int)
#define MPI_LONG_LONG_INT OMPI_PREDEFINED_GLOBAL(MPI_Datatype, ompi_mpi_long_long_int)
extern struct ompi_predefined_datatype_t ompi_mpi_wrong1 __attribute__(( mpi_datatype )); // expected-error {{attribute takes one argument}}
extern struct ompi_predefined_datatype_t ompi_mpi_wrong2 __attribute__(( mpi_datatype(1,2) )); // expected-error {{attribute takes one argument}}

extern struct ompi_predefined_datatype_t ompi_mpi_wrong1 __attribute__(( mpi_datatype(ompi_mpi_wrong1_dummy) ));

extern int ompi_mpi_int_dummy;
extern struct ompi_predefined_datatype_t ompi_mpi_int __attribute__(( mpi_datatype(ompi_mpi_int_dummy) ));

extern long long int ompi_mpi_long_long_int_dummy;
extern struct ompi_predefined_datatype_t ompi_mpi_long_long_int __attribute__(( mpi_datatype(ompi_mpi_long_long_int_dummy) ));

//===--- Tests ------------------------------------------------------------===//

void test1(int *int_buf, long *long_buf)
{
  MPI_Send(int_buf,  1, MPI_INT, 1, 1, MPI_COMM_WORLD); // no-warning
  MPI_Send(long_buf, 1, MPI_INT, 1, 1, MPI_COMM_WORLD); // expected-warning {{actual buffer element type 'long' doesn't match specified MPI_Datatype}}
}

int my_int_dummy;
MPI_Datatype my_int_type __attribute__(( mpi_datatype(my_int_dummy) ));

MPI_Datatype my_unknown_type;

void test2(long *long_buf)
{
  MPI_Send(long_buf, 1, my_int_type, 1, 1, MPI_COMM_WORLD); // expected-warning {{actual buffer element type 'long' doesn't match specified MPI_Datatype}}
  MPI_Send(long_buf, 1, my_unknown_type, 1, 1, MPI_COMM_WORLD); // no-warning
}

void test3(int *buf, MPI_Datatype type)
{
  MPI_Send(buf, 1, type, 1, 1, MPI_COMM_WORLD); // no-warning
}

