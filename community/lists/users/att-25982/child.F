	program child
        
        implicit none
                
        include  "mpif.h"

        integer   ierror,mpi_size,mpi_rank
        integer   mpi_init_error,mpi_comm_parent


        call MPI_INIT(mpi_init_error)

        call MPI_COMM_SIZE(MPI_COMM_WORLD,mpi_size,ierror)

        call MPI_COMM_RANK(MPI_COMM_WORLD,mpi_rank,ierror)

	call MPI_COMM_GET_PARENT(mpi_comm_parent,ierror)
        
        print *,'hello world from ',mpi_rank,mpi_size
                   
	call MPI_COMM_DISCONNECT(mpi_comm_parent,ierror)

        call MPI_FINALIZE(ierror)

        
        end
