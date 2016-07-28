        program Test_MPI
            use ifwin
            implicit none
            include 'mpif.h'

c           INTEGER rcvbuf(5), sndbuf(5)
            DOUBLE PRECISION rcvbuf(5), sndbuf(5)
            INTEGER nproc, rank, ierr, n, i, ret

            n = 5
            do i = 1, n
                sndbuf(i) = 2.0
                rcvbuf(i) = 0.0
            end do

            call MPI_INIT(ierr)
            write(*,*) ierr

            call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
            write(*,*) ierr

            call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
            write(*,*) ierr

            write(*,*) "size=", nproc, ", rank=", rank

c           write(*,*) "start --, rcvbuf=", rcvbuf
            write(*,*) "start --"
            ret = MessageBox(NULL, "before", "1", MB_OK)
            CALL MPI_ALLREDUCE(rcvbuf, sndbuf, n,
     &              MPI_INTEGER, MPI_SUM, MPI_COMM_WORLD, ierr)
            ret = MessageBox(NULL, "after", "1", MB_OK)

            write(*,*) "end --"
c           write(*,*) "end --, rcvbuf=", rcvbuf

            CALL MPI_Finalize()
        end
