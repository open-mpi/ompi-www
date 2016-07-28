program helloworld
use mpi
!include 'mpif.h'      !if USE mpi does not work on your system or F77
   implicit none
   
!!!!!!!!!!!!!!!!
!brockp@umich.edu
!mpif90 -o fhello helloworld.f90
!
!Demonstrate:
!  MPI_Init()
!  MPI_Comm_size()
!  MPI_Comm_rank()
!  MPI_Send()
!  MPI_Recv()
!!!!!!!!!!!!!!!!
   
   integer rank                     ! rank of process
   integer numprocs                 ! size of COMM_WORLD
   integer tag                      ! tag
   integer ierr                     ! error code
   integer message                  ! Receved message
   integer status(MPI_STATUS_SIZE)  ! status of recv
   integer x

   ! call INIT, SIZE and RANK
   call MPI_INIT(ierr)
   call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
   call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)

   if(rank .ne. 0) then
     call MPI_RECV(message, &      ! buffer for message
                         1, &      ! MAX count to recv      
               MPI_INTEGER, &      ! type to recv
                         0, &      ! recv from 0 only
                       tag, &      ! tag of message
            MPI_COMM_WORLD, &      ! communicator to use
                    status, &      ! status object
                      ierr)
     write(*,*)"Hello from process ",rank

   else ! rank 0 ONLY executes this
     write(*,*)"MPI_COMM_WORLD is ",numprocs," big!"
     do x=1,numprocs-1
        call MPI_SEND(   x, &      ! send x to process x
                         1, &      ! count to send
               MPI_INTEGER, &      ! type to send
                         x, &      ! rank to send to
                       tag, &      ! tag for message
            MPI_COMM_WORLD, &      ! communicator to use
                       ierr)       ! return code (errors)
     enddo
   endif

   call MPI_FINALIZE(ierr)
end program helloworld

