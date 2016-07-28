! Paul Kapinos 22.09.2009 - 
! RZ RWTH Aachen, www.rz.rwth-aachen.de
!
! MPI-Hello-World
!
PROGRAM PK_MPI_Test
USE MPI
IMPLICIT NONE
!
INTEGER :: my_MPI_Rank, laenge, ierr
CHARACTER*(MPI_MAX_PROCESSOR_NAME) my_Host
!
!WRITE (*,*) "Jetz penn ich mal 30"
!CALL Sleep(30)

CALL MPI_INIT (ierr)
!
!WRITE (*,*) "Nach MPI_INIT"
!CALL Sleep(30)
CALL MPI_COMM_RANK( MPI_COMM_WORLD, my_MPI_Rank, ierr )
!WRITE (*,*) "Nach MPI_COMM_RANK"
CALL MPI_GET_PROCESSOR_NAME(my_Host, laenge, ierr)
WRITE (*,*) "Prozessor ", my_MPI_Rank, "on Host: ", my_Host(1:laenge)

! sleeping or spinnig - the same behaviour
!CALL Sleep(3)
DO WHILE (.TRUE.)
ENDDO

!CALL Sleep(3)

CALL MPI_FINALIZE(ierr)
!
WRITE (*,*) "Daswars"
!
END PROGRAM PK_MPI_Test

