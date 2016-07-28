! Paul Kapinos 22.09.2009 - 
! RZ RWTH Aachen, www.rz.rwth-aachen.de
!
! MPI-Hello-World
!
PROGRAM PK_MPI_Test

! USE MPI
IMPLICIT NONE
include "mpif.h"
#if defined(SHMEM)
INCLUDE "mpp/shmem.fh"
#endif

!
INTEGER :: my_MPI_Rank, laenge, ierr
CHARACTER*(MPI_MAX_PROCESSOR_NAME) my_Host

CALL MPI_INIT (ierr)
CALL MPI_COMM_RANK( MPI_COMM_WORLD, my_MPI_Rank, ierr )
CALL MPI_GET_PROCESSOR_NAME(my_Host, laenge, ierr)
WRITE (*,*) "Prozessor ", my_MPI_Rank, "on Host: ", my_Host(1:laenge)

CALL Sleep(1)

CALL MPI_FINALIZE(ierr)

CONTAINS

SUBROUTINE foo1
#if defined(SHMEM)
INCLUDE "mpp/shmem.fh"
#endif
END SUBROUTINE foo1

SUBROUTINE foo2
#if defined(SHMEM)
INCLUDE "mpp/shmem.fh"
#endif
END SUBROUTINE foo2

SUBROUTINE foo3
#if defined(SHMEM)
INCLUDE "mpp/shmem.fh"
#endif
END SUBROUTINE foo3

SUBROUTINE foo4
#if defined(SHMEM)
INCLUDE "mpp/shmem.fh"
#endif
END SUBROUTINE foo4

SUBROUTINE foo5
#if defined(SHMEM)
INCLUDE "mpp/shmem.fh"
#endif
END SUBROUTINE foo5


END PROGRAM PK_MPI_Test
