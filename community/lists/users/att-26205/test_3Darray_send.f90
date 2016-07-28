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
INTEGER            :: MPI_TYPE_VECTOR_1D,MPI_TYPE_VECTOR_2D

REAL(DP),ALLOCATABLE,DIMENSION(:,:,:) :: AA

  CALL MPI_INIT(MPIdata%iErr)
  CALL MPI_COMM_RANK(MPI_COMM_WORLD, MPIdata%myrank, MPIdata%iErr)
  CALL MPI_COMM_SIZE(MPI_COMM_WORLD, MPIdata%nCPU,   MPIdata%iErr)
  
  NPT=10
  ALLOCATE(AA(NPT,2,2))
  AA=0.d0
  
  CALL MPI_TYPE_VECTOR(2, 1, 1, MPI_DOUBLE_PRECISION, MPI_TYPE_VECTOR_1D,MPIdata%iErr)
  CALL MPI_TYPE_COMMIT(MPI_TYPE_VECTOR_1D,MPIdata%iErr)
  
  CALL MPI_TYPE_VECTOR(2, 1, 1, MPI_TYPE_VECTOR_1D, MPI_TYPE_VECTOR_2D,MPIdata%iErr)
  CALL MPI_TYPE_COMMIT(MPI_TYPE_VECTOR_2D,MPIdata%iErr)
  
  IF(MPIdata%myrank==0)THEN
     DO I=1,NPT
        AA(I,1,1)=REAL(I,DP)
        AA(I,1,2)=10.d0*REAL(I,DP)
        
        AA(I,2,1)=REAL(I,DP)*2.d0
        AA(I,2,2)=10.d0*REAL(I,DP)*2.d0
     ENDDO
       WRITE(*,*) '-------------'
       WRITE(*,*) MPIdata%myrank
       WRITE(*,*) AA(1:3,2,2)
       WRITE(*,*) '-------------'
       
       WRITE(*,*) SIZE(aa(1,:,:))
     !
     CALL MPI_SEND(AA(1:3,:,:),3*4,MPI_TYPE_VECTOR_2D,1,5,MPI_COMM_WORLD,MPIdata%iErr)
     !
  ENDIF
  
  CALL MPI_BARRIER(MPI_COMM_WORLD,MPIdata%iErr)
  
  IF(MPIdata%myrank==1)THEN
     !
     CALL MPI_RECV(AA(1:3,:,:),3*4,MPI_TYPE_VECTOR_1D,0,5,MPI_COMM_WORLD,status,MPIdata%iErr)
     WRITE(*,*) AA(1:3,2,2)
     !
  ENDIF


  CALL MPI_Finalize(MPIdata%iErr)
ENDPROGRAM