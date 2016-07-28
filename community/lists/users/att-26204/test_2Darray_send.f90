MODULE MOD_PRECISION
  integer, parameter :: dp = selected_real_kind(15, 307)
ENDMODULE MOD_PRECISION


PROGRAM test_2Darray_send
USE MOD_PRECISION
USE MPI
IMPLICIT NONE
INTEGER :: iCPU,icount,iTag,ip,sendcount,sendrecv,i,iStart,iEnd
INTEGER :: NPT
INTEGER :: status(MPI_STATUS_SIZE) 
TYPE tMPI
      INTEGER  :: myrank, nCPU, iErr, status
END TYPE tMPI

TYPE(tMPI)         :: MPIdata
INTEGER            :: MPI_TYPE_VECTOR_1D

REAL(DP),ALLOCATABLE,DIMENSION(:,:) :: AA

  CALL MPI_INIT(MPIdata%iErr)
  CALL MPI_COMM_RANK(MPI_COMM_WORLD, MPIdata%myrank, MPIdata%iErr)
  CALL MPI_COMM_SIZE(MPI_COMM_WORLD, MPIdata%nCPU,   MPIdata%iErr)
  
  NPT=10
  ALLOCATE(AA(NPT,5))
  AA=0.d0
  
  CALL MPI_TYPE_VECTOR(5, 1, 1, MPI_DOUBLE_PRECISION, MPI_TYPE_VECTOR_1D,MPIdata%iErr)
  CALL MPI_TYPE_COMMIT(MPI_TYPE_VECTOR_1D,MPIdata%iErr)
  
  
  IF(MPIdata%myrank==0)THEN
     DO I=1,NPT
        AA(I,1)=REAL(I,DP)
        AA(I,2)=10.d0*REAL(I,DP)
        AA(I,3)=100.d0*REAL(I,DP)
     ENDDO
     !
     CALL MPI_SEND(AA(1:6,:),6,MPI_TYPE_VECTOR_1D,1,5,MPI_COMM_WORLD,MPIdata%iErr)
     !
  ENDIF
  
  CALL MPI_BARRIER(MPI_COMM_WORLD,MPIdata%iErr)
  
  IF(MPIdata%myrank==1)THEN
     !
     CALL MPI_RECV(AA(1:6,:),6,MPI_TYPE_VECTOR_1D,0,5,MPI_COMM_WORLD,status,MPIdata%iErr)
     WRITE(*,*) AA(1:6,3)
     !
  ENDIF


  CALL MPI_Finalize(MPIdata%iErr)
ENDPROGRAM