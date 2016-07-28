      program accumulate_test
      IMPLICIT REAL*8 (A-H,O-Z)
      include 'mpif.h'
      INTEGER(KIND=MPI_OFFSET_KIND) MX_SIZE_M
C     dummy size parameter 
      PARAMETER (MX_SIZE_M = 1 000 000)
      INTEGER MPIerr, MYID, NPROC
      INTEGER ITARGET, MY_X_WIN, JCOUNT, JCOUNT_T
      INTEGER(KIND=MPI_ADDRESS_KIND) MEM_X, MEM_Y
      INTEGER(KIND=MPI_ADDRESS_KIND) IDISPL_WIN
      INTEGER(KIND=MPI_ADDRESS_KIND) PTR1, PTR2
      INTEGER(KIND=MPI_INTEGER_KIND) ISIZE_REAL8
      INTEGER*8 NELEMENT_X, NELEMENT_Y
      POINTER (PTR1, XMAT(MX_SIZE_M))
      POINTER (PTR2, YMAT(MX_SIZE_M))
C
      CALL MPI_INIT( MPIerr )
      CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID,  MPIerr)
      CALL MPI_COMM_SIZE( MPI_COMM_WORLD, NPROC, MPIerr)
C
      NELEMENT_X = 400 000 000
      NELEMENT_Y =      10 000
C
      CALL MPI_TYPE_EXTENT(MPI_REAL8, ISIZE_REAL8, MPIerr)
C
      MEM_X = NELEMENT_X * ISIZE_REAL8
      MEM_Y = NELEMENT_Y * ISIZE_REAL8
C 
C     allocate memory
C
      CALL MPI_ALLOC_MEM( MEM_X, MPI_INFO_NULL, PTR1, MPIerr)
      CALL MPI_ALLOC_MEM( MEM_Y, MPI_INFO_NULL, PTR2, MPIerr)
C
C     fill vectors with zero's and one
C
      CALL DZERO(XMAT,NELEMENT_X)
      CALL DONE(YMAT,NELEMENT_Y)
C
C     open memory window
C
      CALL MPI_WIN_CREATE( XMAT, MEM_X, ISIZE_REAL8, 
     &                     MPI_INFO_NULL, MPI_COMM_WORLD, 
     &                     MY_X_WIN, MPIerr )
C
C     lock window (MPI_LOCK_SHARED mode)
C
C     select target ==> if itarget == myid: no 1-sided communication
C
      ITARGET = MYID
C
      CALL MPI_WIN_LOCK( MPI_LOCK_SHARED, ITARGET, MPI_MODE_NOCHECK,
     &                   MY_X_WIN, MPIerr)
C
C     transfer data to target ITARGET
C
      JCOUNT_T = 10 000
      JCOUNT   = JCOUNT_T
C
      IDISPL_WIN = 300 000 000
C
      CALL MPI_ACCUMULATE( YMAT, JCOUNT, MPI_REAL8, ITARGET, IDISPL_WIN,
     &                   JCOUNT_T, MPI_REAL8, MPI_SUM, MY_X_WIN, MPIerr)
C
C     unlock
C
      CALL MPI_WIN_UNLOCK( ITARGET, MY_X_WIN, MPIerr)
C
C     free memory window
C
      CALL MPI_WIN_FREE( MY_X_WIN, MPIerr)
C
C     de-allocate
C
      CALL MPI_FREE_MEM( XMAT, MPIerr)
      CALL MPI_FREE_MEM( YMAT, MPIerr)
C
      CALL MPI_FINALIZE( MPIerr)

      end program
C...................................................................
C...................................................................
C  /* Deck dzero */
      SUBROUTINE DZERO(DX,LENGTH)
      implicit real*8 (A-H,O-Z)
C...................................................................
      INTEGER*8 LENGTH
      DIMENSION DX(LENGTH)
C
      IF (LENGTH.LE.0) RETURN
C
      DO 100 I = 1,LENGTH
  100    DX(I) = 0.0D00
C
      END
C  /* Deck done */
      SUBROUTINE DONE(DX,LENGTH)
      implicit real*8 (A-H,O-Z)
C...................................................................
      INTEGER*8 LENGTH
      DIMENSION DX(LENGTH)
C
      IF (LENGTH.LE.0) RETURN
C
      DO 100 I = 1,LENGTH
  100    DX(I) = 1.0D00
C
      END

