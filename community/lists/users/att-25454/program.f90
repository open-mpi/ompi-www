module mod_precision
  integer, parameter :: dp = selected_real_kind(p=14)
end module mod_precision

program prova_struct
  use mod_precision
include "mpif.h"


  type tParticle
     sequence
     integer  :: ip
     integer  :: fake
     real(dp) :: rp(2)
     real(dp) :: QQ(2)
  end type tParticle

  integer :: types(2) ! You already know the length of your data type, 
                      ! so do not waste allocatable affix...
  integer :: lengths(2) ! Same argument
  ! This was actually the culprit... The address _HAS_ to be a long...
  integer(MPI_ADDRESS_KIND) :: displacements(2)

  integer :: MPI_Particle_Type
  integer :: Node, Nodes
  type(tParticle) :: p
  integer :: MPIerror, MPIstatus(MPI_STATUS_SIZE)


  CALL MPI_Init(MPIerror)
  CALL MPI_Comm_Rank(MPI_COMM_WORLD, Node, MPIerror)
  CALL MPI_Comm_Size(MPI_COMM_WORLD, Nodes,MPIerror)
  if ( Nodes /= 2 ) stop ''

  ! Set the types
  types(1) = MPI_INTEGER
  types(2) = MPI_DOUBLE_PRECISION
  ! set the lengths
  lengths(1) = 2
  lengths(2) = 4

  displacements(1) = 0
  displacements(2) = sizeof(p%ip) * 2
  CALL MPI_Type_Create_Struct(2,lengths,displacements,types,mpi_particle_type,MPIerror)
  CALL Mpi_Type_Commit(mpi_particle_type,MPIerror)

  if ( Node == 0 ) then
     ! A 1. in fortran is a REAL
     ! Every constant HAS to be assigned precision
     p%ip = 1 ! if %ip was a long, you should be using 1_8
     p%rp(:) = 1._dp
     p%qq(:) = 11._dp
     call MPI_Send(p,1,MPI_PARTICLE_TYPE,1,101, &
          MPI_Comm_World,MPIerror)
  else
     p%ip = 0 ! Assert that we receive something! ;)
     call MPI_Recv(p,1,MPI_PARTICLE_TYPE,0,101, &
          MPI_Comm_World,MPIstatus,MPIerror)
     print *,p%ip,p%rp,p%qq
  end if

  call MPI_Barrier(MPI_Comm_World,MPIerror)

  call MPI_Finalize(MPIerror)

end program prova_struct
