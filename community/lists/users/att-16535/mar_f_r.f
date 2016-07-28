        program Test_MPI
c           use mpi
            implicit none
            include "mpif.h"

            REAL rcvbuf(5), sndbuf(5)
            INTEGER nproc, rank, ierr, n, i, ret

            n = 5
            do i = 1, n
                sndbuf(i) = 2.0
                rcvbuf(i) = 0.0
            end do

            call MPI_INIT(ierr)
            call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
            call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
            write(*,*) "size=", nproc, ", rank=", rank
            write(*,*) "start --, rcvbuf=", rcvbuf
            CALL MPI_ALLREDUCE(sndbuf, rcvbuf, n,
     & MPI_REAL, MPI_SUM, MPI_COMM_WORLD, ierr)
            write(*,*) "end --, rcvbuf=", rcvbuf

            CALL MPI_Finalize(ierr)
        end 
