MODULE MOD_PRECISION
integer, parameter :: dp = selected_real_kind(p=14)
ENDMODULE

PROGRAM PROVA_STRUCT
USE MOD_PRECISION
IMPLICIT NONE
INCLUDE 'mpif.h'
!
TYPE tMPI
    INTEGER  :: myrank, nCPU, iErr, status
    INTEGER  :: iStart, iEnd, jStart, jEnd 
    INTEGER  :: imax, jmax
    INTEGER  :: npt
    INTEGER  :: nmcx,nmcy
    REAL(DP) :: x1L,x2L,y1L,y2L
    INTEGER, ALLOCATABLE :: mycoords(:), info(:)
END TYPE tMPI
!
type particle
 sequence
 integer          :: ip
 integer          :: fake
 real(dp)         :: rp(2)
 real(dp)         :: QQ(2)
end type particle
!
TYPE(tMPI)           :: MPI
INTEGER              :: COMM_CART
INTEGER              :: MPI_PARTICLE_TYPE
INTEGER,ALLOCATABLE  :: DIMS(:)
LOGICAL,ALLOCATABLE  :: PERIODS(:)
INTEGER              :: RCPU,LCPU,BCPU,TCPU,RTCPU,RBCPU,LTCPU,LBCPU

INTEGER              :: source,err
INTEGER              :: ndims
INTEGER              :: nstruct
INTEGER              :: x_thread,y_thread

INTEGER,ALLOCATABLE  :: TYPES(:)
INTEGER,ALLOCATABLE  :: LENGTHS(:)
INTEGER,ALLOCATABLE  :: DISPLACEMENTS(:)

INTEGER        :: npt,ip
type(particle) :: dummy                   ! Used for calculation of displacement
TYPE(particle) :: P_SEND,P_RECV



   CALL MPI_INIT(MPI%iErr)
   CALL MPI_COMM_RANK(MPI_COMM_WORLD, MPI%myrank, MPI%iErr)
   CALL MPI_COMM_SIZE(MPI_COMM_WORLD, MPI%nCPU,   MPI%iErr)
   !
   ndims=2
   !
   x_thread = MPI%nCPU/ndims
   y_thread = x_thread
   !
   ALLOCATE ( dims(ndims), periods(ndims), MPI%mycoords(ndims) )
   dims = [x_thread, y_thread]
   periods = .FALSE.
   CALL MPI_CART_CREATE (MPI_COMM_WORLD,ndims,dims,periods,.TRUE.,COMM_CART,MPI%iErr)
   CALL MPI_COMM_RANK(COMM_CART,MPI%myrank,MPI%iErr)

   !Find neighbors
  CALL MPI_CART_SHIFT(COMM_CART,0,1,source,RCPU,MPI%iErr)  ! x-dir, right
  CALL MPI_CART_SHIFT(COMM_CART,0,-1,source,LCPU,MPI%iErr) ! x-dir, left
  CALL MPI_CART_SHIFT(COMM_CART,1,1,source,TCPU,MPI%iErr)  ! y-dir, top
  CALL MPI_CART_SHIFT(COMM_CART,1,-1,source,BCPU,MPI%iErr) ! y-dir, bottom
   
   
   nstruct=3
   ALLOCATE(TYPES(nstruct))
   ALLOCATE(LENGTHS(nstruct))
   ALLOCATE(DISPLACEMENTS(nstruct))
   !
   TYPES(1)=MPI_INTEGER
   TYPES(2)=MPI_DOUBLE_PRECISION
   TYPES(3)=MPI_DOUBLE_PRECISION
   !
   LENGTHS(1)=2
   LENGTHS(2)=2
   LENGTHS(3)=4
   ! 
   DISPLACEMENTS(1)=0
   DISPLACEMENTS(2)=sizeof(dummy%ip)+sizeof(dummy%fake)
   DISPLACEMENTS(3)=sizeof(dummy%ip)+sizeof(dummy%fake)+sizeof(dummy%rp)
      
   CALL MPI_TYPE_CREATE_STRUCT(nstruct,lengths,displacements,types,mpi_particle_type,MPI%iErr)
   CALL MPI_TYPE_COMMIT(mpi_particle_type,MPI%iErr)
   
   P_SEND%rp=1.
   P_SEND%QQ=11.

   
   CALL MPI_BARRIER(MPI_COMM_WORLD,MPI%iErr)
   CALL MPI_Sendrecv(P_SEND,1,MPI_PARTICLE_TYPE,BCPU,201,&
                     P_RECV,1,MPI_PARTICLE_TYPE,TCPU,201,MPI_COMM_WORLD,MPI_STATUS_IGNORE,MPI%iErr)
   
   CALL MPI_FINALIZE(MPI%iErr)

ENDPROGRAM