      PROGRAM quad_test

!     Program to test real*16 (quadruple precision) MPI communications.

      implicit none

      include 'mpif.h'

#define REAL16

#ifdef REAL16
      integer, parameter :: r16 = selected_real_kind(16,3000)    ! 128-bit
      integer, parameter :: MP_FLOAT = MPI_REAL16
#else
      integer, parameter :: r16 = selected_real_kind(12,300)     ! 64-bit
      integer, parameter :: MP_FLOAT = MPI_REAL8
!!    integer, parameter :: MP_FLOAT = MPI_DOUBLE_PRECISION
#endif

      logical :: Master

      integer :: Lstr, MyMaster, MyRank, Nnodes, rank, request
      integer :: MyError, Rerror, Rstatus, Serror, Sstatus

      integer, allocatable :: Rrequest(:)

      real(r16) :: a16, asum

      real(r16), allocatable :: Arecv(:)

      character (len=MPI_MAX_ERROR_STRING) :: string
!
!  Initialize MPI.
!
      CALL mpi_init (MyError)
      IF (MyError.ne.MPI_SUCCESS) THEN
        CALL mpi_error_string (MyError, string, Lstr, Serror)
        PRINT *, 'Unable to initialize MPI.'
        PRINT *, string(1:Lstr)
        STOP
      END IF
!
!  Get rank of the local process in the group associated with the
!  communicator.
!
      CALL mpi_comm_rank (MPI_COMM_WORLD, MyRank, MyError)
      IF (MyError.ne.MPI_SUCCESS) THEN
        CALL mpi_error_string (MyError, string, Lstr, Serror)
        PRINT *, 'Unable to inquire rank of local node.'
        PRINT *, string(1:Lstr)
        STOP
      END IF
!
!  Get number of processes in the group associated with the
!  communicator.
!
      CALL mpi_comm_size (MPI_COMM_WORLD, Nnodes, MyError)
      IF (MyError.ne.MPI_SUCCESS) THEN
        CALL mpi_error_string (MyError, string, Lstr, Serror)
        PRINT *, 'Unable to inquire of processes in the group.'
        PRINT *, string(1:Lstr)
        STOP
      END IF
!
!  Identify master node.
!
      Master=.FALSE.
      MyMaster=0
      IF (MyRank.eq.MyMaster) THEN
        Master=.TRUE.
      END IF
      IF (.not.allocated(Arecv)) allocate ( Arecv(0:Nnodes-1) )
      IF (.not.allocated(Rrequest)) allocate ( Rrequest(0:Nnodes-1) )
!
!  Initialize variable
!
      IF (Master) THEN
        a16=1.0_r16
      ELSE
        a16=0.0_r16
      END IF
      asum=0.0_r16
      Arecv=0.0_r16
      Rrequest=0
!
!  Broadcast master value to all nodes.
!
      CALL mpi_bcast (a16, 1, MP_FLOAT, MyMaster, MPI_COMM_WORLD,       &
     &                MyError)
      IF (MyError.ne.MPI_SUCCESS) THEN
        CALL mpi_error_string (MyError, string, Lstr, Serror)
        PRINT *, 'Unable to broadcast variable.'
        PRINT *, string(1:Lstr)
        STOP
      END IF
!
!  Global sum using MPI_ALLREDUCE.
!
      CALL mpi_allreduce (a16,  asum, 1, MP_FLOAT, MPI_SUM,             &
     &                    MPI_COMM_WORLD, MyError)
      IF (MyError.ne.MPI_SUCCESS) THEN
        CALL mpi_error_string (MyError, string, Lstr, Serror)
        PRINT *, 'Unable to compute global sum using ALLREDUCE.'
        PRINT *, string(1:Lstr)
        STOP
      END IF
      IF (Master) THEN
        PRINT *, ' '
        PRINT *, 'Number of Nodes = ', Nnodes
        PRINT *, ' '
        PRINT *, 'ALLREDUCE sum   = ', asum
      END IF
!
!  Global sum using MPI_ALLGATHER.
!
      CALL mpi_allgather (a16, 1, MP_FLOAT,                             &
     &                    Arecv, 1, MP_FLOAT,                           &
     &                    MPI_COMM_WORLD, MyError)
      IF (MyError.ne.MPI_SUCCESS) THEN
        CALL mpi_error_string (MyError, string, Lstr, Serror)
        PRINT *, 'Unable to compute global sum using ALLGATHER.'
        PRINT *, string(1:Lstr)
        STOP
      END IF
      asum=0.0_r16
      DO rank=0,Nnodes-1
        asum=asum+Arecv(rank)
      END DO
      IF (Master) THEN
        PRINT *, 'ALLGATHER sum   = ', asum
      END IF
!
!  Global sum using IRECV/ISEND.
!
      IF (MyRank.eq.MyMaster) THEN
        DO rank=1,Nnodes-1
          CALL mpi_irecv (Arecv(rank), 1, MP_FLOAT, rank,               &
     &                    rank+100, MPI_COMM_WORLD, Rrequest(rank),     &
     &                    MyError)
        END DO
        asum=a16
        DO rank=1,Nnodes-1
          CALL mpi_wait (Rrequest(rank), Rstatus, MyError)
          IF (MyError.ne.MPI_SUCCESS) THEN
            CALL mpi_error_string (MyError, string, Lstr, Serror)
            PRINT *, 'MPI_IRECV', rank, Rerror, string(1:Lstr)
            STOP
          END IF
          asum=asum+Arecv(rank)
        END DO
      ELSE
        CALL mpi_isend (a16, 1, MP_FLOAT, MyMaster, MyRank+100,         &
     &                  MPI_COMM_WORLD, request, MyError)
        CALL mpi_wait (request, Sstatus, MyError)
        IF (MyError.ne.MPI_SUCCESS) THEN
          CALL mpi_error_string (MyError, string, Lstr, Serror)
          PRINT *, 'MPI_ISEND', MyRank, Serror, string(1:Lstr)
          STOP
        END IF
      END IF
      CALL mpi_bcast (asum, 1, MP_FLOAT, MyMaster, MPI_COMM_WORLD,      &
     &                MyError)
      IF (MyError.ne.MPI_SUCCESS) THEN
        CALL mpi_error_string (MyError, string, Lstr, Serror)
        PRINT *, 'MPI_BCAST', MyRank, MyError, string(1:Lstr)
        STOP
      END IF
      IF (Master) THEN
        PRINT *, 'ISEND/IRECV sum = ', asum
        PRINT *, ' '
      END IF
      CALL mpi_barrier  (MPI_COMM_WORLD, MyError)
      PRINT *, 'Node = ', MyRank, '  Value = ', a16
      CALL mpi_barrier  (MPI_COMM_WORLD, MyError)
      CALL flush (6)
!
!  Terminate MPI communications
!
      CALL mpi_finalize (MyError)
      IF (MyError.ne.MPI_SUCCESS) THEN
        CALL mpi_error_string (MyError, string, Lstr, Serror)
        PRINT *, 'Unable to finalize MPI.'
        PRINT *, string(1:Lstr)
        STOP
      END IF

      IF (allocated(Arecv)) deallocate ( Arecv )
      IF (allocated(Rrequest)) deallocate ( Rrequest )

      END PROGRAM quad_test
