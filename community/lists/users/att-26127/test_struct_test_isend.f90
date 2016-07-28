MODULE MOD_PRECISION
  integer, parameter :: dp = selected_real_kind(p=16)
ENDMODULE MOD_PRECISION

PROGRAM PROVA_STRUCT
  USE MOD_PRECISION
  use mpi
  IMPLICIT NONE
  !
  TYPE tMPI
     INTEGER  :: myrank, nCPU, iErr, status
  END TYPE tMPI
  !
  type particle
     sequence
     integer          :: ip
     real(dp)         :: rp(2)
     real(dp)         :: QQ(4)
  end type particle
  !
  TYPE(tMPI)         :: MPIdata
  INTEGER            :: COMM_CART
  INTEGER            :: MPI_PARTICLE_TYPE_OLD
  INTEGER            :: MPI_PARTICLE_TYPE

  INTEGER              :: nstruct

  INTEGER,ALLOCATABLE  :: TYPES(:)
  INTEGER,ALLOCATABLE  :: LENGTHS(:)
  INTEGER              :: REQUEST(2)
  INTEGER(MPI_ADDRESS_KIND),ALLOCATABLE,DIMENSION(:)   ::DISPLACEMENTS

  type(particle) :: dummy(2)  ! Used for calculation of displacement

  CALL MPI_INIT(MPIdata%iErr)
  CALL MPI_COMM_RANK(MPI_COMM_WORLD, MPIdata%myrank, MPIdata%iErr)
  CALL MPI_COMM_SIZE(MPI_COMM_WORLD, MPIdata%nCPU,   MPIdata%iErr)
  !
  !
  nstruct=3
  ALLOCATE(TYPES(nstruct))
  ALLOCATE(LENGTHS(nstruct))
  ALLOCATE(DISPLACEMENTS(0:nstruct+1))
  !
  TYPES(1)=MPI_INTEGER
  TYPES(2)=MPI_DOUBLE_PRECISION
  TYPES(3)=MPI_DOUBLE_PRECISION
  !
  LENGTHS(1)=1
  LENGTHS(2)=2
  LENGTHS(3)=4
  !
  !
  CALL MPI_GET_ADDRESS(dummy(1),DISPLACEMENTS(0),MPIdata%iErr)
  CALL MPI_GET_ADDRESS(dummy(1)%ip,DISPLACEMENTS(1),MPIdata%iErr)
  CALL MPI_GET_ADDRESS(dummy(1)%RP(1),DISPLACEMENTS(2),MPIdata%iErr)
  CALL MPI_GET_ADDRESS(dummy(1)%QQ(1),DISPLACEMENTS(3),MPIdata%iErr)
  CALL MPI_GET_ADDRESS(dummy(2),DISPLACEMENTS(4),MPIdata%iErr)
  !
  DISPLACEMENTS(1:nstruct+1)= DISPLACEMENTS(1:nstruct+1)-DISPLACEMENTS(0)
  !
  CALL MPI_TYPE_CREATE_STRUCT(nstruct,lengths,displacements(1:nstruct+1),types,MPI_PARTICLE_TYPE_OLD,MPIdata%iErr)
  CALL MPI_TYPE_COMMIT(MPI_PARTICLE_TYPE_OLD,MPIdata%iErr)
  !
  !
  CALL MPI_TYPE_CREATE_RESIZED(MPI_PARTICLE_TYPE_OLD, DISPLACEMENTS(1), DISPLACEMENTS(4), MPI_PARTICLE_TYPE, MPIdata%iErr)
  CALL MPI_TYPE_COMMIT(MPI_PARTICLE_TYPE,MPIdata%iErr)
  !
  IF(MPIdata%myrank==0)THEN
     WRITE(*,*) DISPLACEMENTS
  ENDIF
  !
  IF(MPIdata%myrank==0)THEN
     CALL MPI_ISEND(DUMMY(1),1,MPI_PARTICLE_TYPE,1,0,MPI_COMM_WORLD,REQUEST(1),MPIdata%iErr)
  ENDIF
  !
  IF(MPIdata%myrank==1)THEN
     CALL MPI_IRECV(DUMMY(1),1,MPI_PARTICLE_TYPE,0,0,MPI_COMM_WORLD,REQUEST(1),MPIdata%iErr)
  ENDIF

  CALL MPI_WAIT(REQUEST(1), MPI_STATUS_IGNORE, MPIdata%iErr)
  !
  CALL MPI_Finalize(MPIdata%iErr)
  !
END PROGRAM PROVA_STRUCT
