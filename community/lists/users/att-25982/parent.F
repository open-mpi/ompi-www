	program parent
        
        implicit none

        include "mpif.h"

	integer  ii,kk
        integer  mpi_size,mpi_rank
        integer  ierror,group_world
        integer  subgroup(0:10)
        integer  subgroup_comm(0:10)
        integer  subgroup_intercomm(0:10)

        call MPI_INIT(ierror)

        call MPI_COMM_SIZE(mpi_comm_world,mpi_size,ierror)

        call MPI_COMM_RANK(mpi_comm_world,mpi_rank,ierror)

c	get world group handler
	call mpi_comm_group(mpi_comm_world,group_world,ierror)

c	create a single member subgroup (containing itself) for each rank
	do ii=0,mpi_size-1
	   call MPI_GROUP_INCL(group_world,1,ii,subgroup(ii),ierror)
	enddo

c	creates the comm handlers for each subgroup 
	do ii=0,mpi_size-1
	   call MPI_COMM_CREATE(mpi_comm_world,subgroup(ii),kk,ierror)
	   if (ii.eq.mpi_rank) subgroup_comm(ii) = kk
	enddo

c	now do some spawning: each rank spwans 5 'child' processes 4 times
c	root is always '0' in the spawn call since each subgroup has a single member

	do ii=1,4
           
           call MPI_Comm_spawn('child',' ',5,MPI_INFO_NULL,0,
     +          subgroup_comm(mpi_rank),subgroup_intercomm(mpi_rank),
     +          MPI_ERRCODES_IGNORE,ierror)
     
           call MPI_Comm_disconnect(subgroup_intercomm(mpi_rank),ierror)
     	              
        enddo

        call MPI_FINALIZE(ierror)

        end
