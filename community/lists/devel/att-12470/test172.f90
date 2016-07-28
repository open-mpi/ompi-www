PROGRAM PK_MPI_Test_2

USE MPI
IMPLICIT NONE
!include "mpif.h"

INTEGER :: ierr

CALL MPI_INIT (ierr)
CALL MPI_FINALIZE(ierr)

END PROGRAM PK_MPI_Test_2

! ?????
! $ ./a.out 
! example mpiext init
! example mpiext fini

