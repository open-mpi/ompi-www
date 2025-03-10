MODULE MOD_PRECISION
  integer, parameter :: dp = selected_real_kind(15, 307)
ENDMODULE MOD_PRECISION


PROGRAM TEST
USE MOD_PRECISION
USE MPI
IMPLICIT NONE
  !
  INTEGER :: iCPU,icount,iTag,ip,sendcount,sendrecv,i,iStart,iEnd
  !
  TYPE tMPI
     INTEGER  :: myrank, nCPU, iErr, status
  END TYPE tMPI
  !
  INTEGER, ALLOCATABLE,DIMENSION(:) :: Ndata2send
  INTEGER, ALLOCATABLE,DIMENSION(:) :: Ndata2recv
  
  REAL(DP), ALLOCATABLE,DIMENSION(:) :: DATASEND
  REAL(DP), ALLOCATABLE,DIMENSION(:) :: DATARECV
  !
  INTEGER :: send_request     (                3)
  INTEGER :: recv_request     (                3)
  INTEGER :: send_status_list (MPI_STATUS_SIZE,3) 
  INTEGER :: recv_status_list (MPI_STATUS_SIZE,3)  
  !
  TYPE(tMPI) :: MPIdata

  CALL MPI_INIT(MPIdata%iErr)
  CALL MPI_COMM_RANK(MPI_COMM_WORLD, MPIdata%myrank, MPIdata%iErr)
  CALL MPI_COMM_SIZE(MPI_COMM_WORLD, MPIdata%nCPU,   MPIdata%iErr)
  !
  ALLOCATE(Ndata2send(0:MPIdata%nCPU-1))
  ALLOCATE(Ndata2recv(0:MPIdata%nCPU-1))
  !
  Ndata2send=0
  Ndata2recv=0
  !
  IF(MPIdata%myrank==0)THEN
     Ndata2send(0)=0
     Ndata2send(1)=100
     Ndata2send(2)=100
     Ndata2send(3)=160
  ENDIF
    IF(MPIdata%myrank==1)THEN
     Ndata2send(0)=130
     Ndata2send(1)=0
     Ndata2send(2)=160
     Ndata2send(3)=160
  ENDIF
    IF(MPIdata%myrank==2)THEN
     Ndata2send(0)=130
     Ndata2send(1)=160
     Ndata2send(2)=0
     Ndata2send(3)=160
  ENDIF
    IF(MPIdata%myrank==3)THEN
     Ndata2send(0)=160
     Ndata2send(1)=160
     Ndata2send(2)=160
     Ndata2send(3)=0
  ENDIF
  !
  CALL MPI_BARRIER(MPI_COMM_WORLD, MPIdata%iErr)
  
  
  icount=1
  DO iCPU=0,MPIdata%nCPU-1
     IF(iCPU.NE.MPIdata%myrank)THEN
        iTag=iCPU
        CALL MPI_ISEND(Ndata2send(iCPU),1,MPI_INTEGER,iCPU,iTag,MPI_COMM_WORLD,send_request(icount),MPIdata%iErr)
        icount=icount+1
     ENDIF
  ENDDO
  !
  icount=1
  DO iCPU=0,MPIdata%nCPU-1
     IF(iCPU.NE.MPIdata%myrank)THEN
        iTag=MPIdata%myrank
        CALL MPI_IRECV(Ndata2recv(iCPU),1,MPI_INTEGER,iCPU,iTag,MPI_COMM_WORLD,recv_request(icount),MPIdata%iErr)
        icount=icount+1
     ENDIF
  ENDDO
  !
  CALL MPI_WAITALL(MPIdata%nCPU-1,send_request,send_status_list,MPIdata%iErr)
  CALL MPI_WAITALL(MPIdata%nCPU-1,recv_request,recv_status_list,MPIdata%iErr)
  !
  !+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  !+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  !+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  !
  sendcount=1
  DO iCPU=0,MPIdata%nCPU-1 
     IF(MPIdata%myrank.NE.iCPU)THEN
        !  
        ALLOCATE(DATASEND(Ndata2send(iCPU)))
        !
        DO ip=1,Ndata2send(iCPU)
              DATASEND(ip) = REAL(ip+MPIdata%myrank,dp)
        ENDDO
        !
        iTag=iCPU
        CALL MPI_ISEND(DATASEND(:),Ndata2send(iCPU),MPI_DOUBLE_PRECISION,iCPU,iTag,MPI_COMM_WORLD,send_request(sendcount),MPIdata%iErr)
        sendcount=sendcount+1 
        DEALLOCATE(DATASEND)
        !
     ENDIF
  ENDDO
  !
  !
  !
  ALLOCATE(DATARECV(SUM(Ndata2recv(:))))
  !
  sendrecv=1
  iStart=1
  iEnd=0
  DO iCPU=0,MPIdata%nCPU-1
     !
     iEnd=iEnd+Ndata2recv(iCPU)
     !
     IF(MPIdata%myrank.NE.iCPU)THEN
        iTag=MPIdata%myrank
        CALL MPI_IRECV(DATARECV(iStart:iEnd),Ndata2recv(iCPU),MPI_DOUBLE_PRECISION,iCPU,iTag,MPI_COMM_WORLD,recv_request(sendrecv),MPIdata%iErr)
        sendrecv=sendrecv+1
        !
        iStart=iStart+Ndata2recv(iCPU)
        !
     ENDIF
     !
     !
  ENDDO
  
    
  CALL MPI_WAITALL(MPIdata%nCPU-1,send_request,send_status_list,MPIdata%iErr)
  CALL MPI_WAITALL(MPIdata%nCPU-1,recv_request,recv_status_list,MPIdata%iErr)
  
  IF(MPIdata%myrank==2)THEN
     DO ip=1,SUM(Ndata2recv(:))
        WRITE(*,*) DATARECV(ip)
     ENDDO
  ENDIF
  
  
  DEALLOCATE(DATARECV)
  CALL MPI_Finalize(MPIdata%iErr)
ENDPROGRAM