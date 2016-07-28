PROGRAM test_extent

   IMPLICIT NONE

   INCLUDE 'mpif.h'

   INTEGER, PARAMETER :: num_dims = 2
   INTEGER :: ierr, num_procs, i, j, n, myrank, subarray_type, subsize, arrsize, fid
   INTEGER, DIMENSION(num_dims) :: arrdim, subdim, subind
   INTEGER(KIND=MPI_ADDRESS_KIND) :: lower_bound, extent
   REAL(KIND=8), DIMENSION(10,10) :: x, y
   REAL(KIND=8), DIMENSION( 5,10) :: xsub, ysub

   CALL MPI_INIT( ierr )
   CALL MPI_COMM_RANK( mpi_comm_world, myrank, ierr )
   CALL MPI_COMM_SIZE( mpi_comm_world, num_procs, ierr )

   arrdim = (/ 10, 10 /)    ! Full array dimensions
   subdim = (/  5, 10 /)  ! Sub-array dimensions
   subind = (/ myrank*5, 0 /) ! Sub-array stating index in full array (base 0)
   arrsize = PRODUCT(arrdim) ! number of elements in full array
   subsize = PRODUCT(subdim) ! number of elements in sub-array

   CALL MPI_TYPE_CREATE_SUBARRAY( num_dims, arrdim, subdim, subind, &
   &                              MPI_ORDER_FORTRAN, MPI_REAL8, subarray_type, ierr )
   CALL MPI_TYPE_COMMIT ( subarray_type, ierr )
   CALL MPI_TYPE_GET_EXTENT( subarray_type, lower_bound, extent, ierr )

   ! Write temporary file for testing MPI-IO
   IF (myrank == 0) THEN
      DO j = 1, 10
         DO i = 1, 10
            x(i,j) = REAL(i,KIND=8)
            y(i,j) = REAL(j,KIND=8)
         END DO
      END DO
      OPEN(UNIT=1,FILE='io_test.dat',FORM='UNFORMATTED',ACCESS='STREAM',ACTION='WRITE',STATUS='REPLACE')
      WRITE(1) x, y
      CLOSE(1)
   END IF

   ! Open test file and read using MPI-IO with the sub-array datatype
   CALL MPI_FILE_OPEN( mpi_comm_world, 'io_test.dat', MPI_MODE_RDONLY, MPI_INFO_NULL, fid, ierr )
   CALL MPI_FILE_SET_VIEW( fid, 0_MPI_OFFSET_KIND, MPI_REAL8, subarray_type, 'NATIVE', MPI_INFO_NULL, ierr )
   CALL MPI_FILE_READ_ALL( fid, xsub, subsize, MPI_REAL8, MPI_STATUS_IGNORE, ierr )
   CALL MPI_FILE_READ_ALL( fid, ysub, subsize, MPI_REAL8, MPI_STATUS_IGNORE, ierr )
   CALL MPI_FILE_CLOSE( fid, ierr )

   ! Write output to screen
   IF (myrank == 0) WRITE(*,'(A,I0,1X,I0)') 'FULL ARRAY SIZE: ', arrdim
   DO n = 0, num_procs-1
      IF (myrank == n) THEN
         WRITE(*,'(/A,I0)') 'RANK = ', myrank
         WRITE(*,'(3X,A,I2,", ",I2)') 'SUBARRAY DIMENSIONS : ', subdim
         WRITE(*,'(3X,A,I2,", ",I2)') 'SUBARRAY INDICES    : ', subind
         WRITE(*,'(2(3X,A,I0))') 'LOWER BOUND : ', lower_bound
         WRITE(*,'(3X,A,I0)') 'EXTENT      : ', extent
         WRITE(*,'(3X,A, 5F5.1)') 'X-VALUES : ', xsub(:,1)
         WRITE(*,'(3X,A,10F5.1)') 'Y-VALUES : ', ysub(1,:)
      END IF
      CALL MPI_BARRIER( mpi_comm_world, ierr )
   END DO

   CALL MPI_FINALIZE( ierr )
   STOP

END PROGRAM test_extent