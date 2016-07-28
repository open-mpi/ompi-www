
program Main

    use iso_c_binding

    use mpi

    implicit none

!    include "mpif.h"

    integer                                   :: ierror, ierror2
    integer                                   :: rank
    integer                                   :: request
    integer                                   :: i
    integer                                   :: status(MPI_STATUS_SIZE)
    real(c_double)                            :: t_0, t_start, t_total, t_reduce
    real, allocatable                         :: val(:)

    integer, parameter :: SYNCR = 1
    integer, parameter :: ASSYNCR = 2

    ! test config [

#ifdef DEF_TEST_KIND
    integer, parameter :: test_kind = DEF_TEST_KIND
#else
    integer, parameter :: test_kind = SYNCR
#endif
    integer, parameter :: total_iter = 1000

    integer, parameter :: nx = 700
    integer, parameter :: ny = 200
    integer, parameter :: nz = 60

    ! ]

    call mpi_init(ierror)
    if (ierror .ne. 0) then ! [
        write(*,*) "Error in line ", __LINE__
        call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
    end if ! ]

    call mpi_comm_rank(MPI_COMM_WORLD, rank, ierror)
    if (ierror .ne. 0) then ! [
        write(*,*) "Error in line ", __LINE__
        call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
    end if ! ]

    if (rank .eq. 0) then ! [
        write(*,*) "[CONFIG] test_kind             = ", test_kind
        write(*,*) "[CONFIG] total_iter            = ", total_iter
    end if ! ]

    allocate(val(nx*ny*nz), stat=ierror)
    if (ierror .ne. 0) then ! [
        write(*,*) "Error in line ", __LINE__, " rank = ", rank
        call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
    end if ! ]

    write(*,*) "[STARTED] rank = ", rank !, ". Compile time = ", __TIME__
    call mpi_barrier(MPI_COMM_WORLD, ierror)
    if (ierror .ne. 0) then ! [
        write(*,*) "Error in line ", __LINE__, " rank = ", rank
        call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
    end if ! ]

    val = (rank + 1) * 0.5

    t_start  = mpi_wtime()
    t_reduce = 0
    t_total = 0

!    **************  ALL_REDUCE SYNC ***************

    if (test_kind .eq. SYNCR) then ! [
        do i = 1, total_iter ! [
            t_0 = mpi_wtime()
            call mpi_allreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM, MPI_COMM_WORLD, ierror)
            if (ierror .ne. 0) then ! [
                write(*,*) "Error in line ", __LINE__, " rank = ", rank
                call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
            end if ! ]
            t_reduce = t_reduce + (mpi_wtime() - t_0)

            if (i .eq. 1) then ! [
                write(*,"(A,I,A,F10.6)") "[STARTED] rank = ", rank," val(1) = ", val(1)
            end if ! ]

            val = val * 0.5

        end do ! ]
    end if ! ]

!    **************  ALL_REDUCE ASSYNCR ***************

    if (test_kind .eq. ASSYNCR) then ! [
        request = MPI_REQUEST_NULL
        do i = 1, total_iter ! [
            t_0 = mpi_wtime()
            call mpi_iallreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM, MPI_COMM_WORLD, request, ierror)
            if (ierror .ne. 0) then ! [
                write(*,*) "Error in line ", __LINE__, " rank = ", rank
                call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
            end if ! ]
            t_reduce = t_reduce + (mpi_wtime() - t_0)

            t_0 = mpi_wtime()
            call mpi_wait(request, status, ierror)
            if (ierror .ne. 0) then ! [
                write(*,*) "Error in line ", __LINE__, " rank = ", rank
                call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
            end if ! ]
            t_reduce = t_reduce + (mpi_wtime() - t_0)

            if (i .eq. 1) then ! [
                write(*,"(A,I,A,F10.6)") "[STARTED] rank = ", rank," val(1) = ", val(1)
            end if ! ]

            val = val * 0.5
        end do ! ]
    end if ! ]

    call mpi_barrier(MPI_COMM_WORLD, ierror)
    if (ierror .ne. 0) then ! [
        write(*,*) "Error in line ", __LINE__, " rank = ", rank
        call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
    end if ! ]

    t_total = mpi_wtime() - t_start

    if (rank .eq. 0) then ! [
        write(*,*) "=================================="
        write(*,"(A,F10.6)") " [RESULT] Reduce time = ", t_reduce
        write(*,"(A,F10.6)") " [RESULT] Total  time = ", t_total
        write(*,*) "=================================="
    end if ! ]

    call mpi_finalize(ierror)
    if (ierror .ne. 0) then ! [
        write(*,*) "Error in line ", __LINE__, " rank = ", rank
        call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
    end if ! ]

end program Main
