        program Test_MPI
            implicit none
            include 'mpif.h'

            INTEGER size, rank, ierr
            REAL a(5), b(5, 5)    ! local slice of array
            REAL c(5)            ! result
            REAL sum(5)
            INTEGER m,n, i, j

            m = 5
            n = 5
            do i = 1, m
                a(i) = 2
            end do
            do i = 1, m
                do j = 1, n
                    b(i,j) = 3
                end do
            end do

            ! Setup MPI
            call MPI_INIT(ierr)
            write(*,*) ierr
            call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
            write(*,*) ierr
            call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
            write(*,*) ierr
            write(*,*) "size=", size, ", rank=", rank

            write(*,*) "start --"
            write(*,*) "a=", a
            write(*,*) "b=", b
            write(*,*) "c=", c
            write(*,*) "sum=", sum
            call PAR_BLAS2(m, n, a, b, c, MPI_COMM_WORLD)
            write(*,*) "end --", a, b, c, sum
            write(*,*) "a=", a
            write(*,*) "b=", b
            write(*,*) "c=", c
            write(*,*) "sum=", sum
            CALL MPI_Finalize()
        end

        SUBROUTINE PAR_BLAS2(m, n, a, b, c, comm)
            INTEGER m, n
            REAL a(m), b(m,n)    ! local slice of array
            REAL c(n)            ! result
            INTEGER comm
            REAL sum(n)
            INTEGER i, j, ierr

            ! local sum
            DO j= 1, n
              sum(j) = 0.0
              DO i = 1, m
                sum(j) = sum(j) + a(i)*b(i,j)
              END DO
            END DO
            write(*,*) "sum=", sum

            ! global sum
            CALL MPI_ALLREDUCE(sum, c, n, MPI_REAL, MPI_SUM, comm, ierr)

            ! return result at all nodes
        RETURN
        end
