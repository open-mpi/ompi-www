!
!   Copyright Notice:  Permission is granted, free of charge, to any person obtaining a copy of
!   *****************  this source code (the "Software"), to deal in the Software without restriction,
!                      including without limitation the rights
!                      to use, copy, modify, merge, publish, distribute copies of the Software,
!                      and to permit persons to whom the Software is furnished to do so.
!                                              Michael Rachner, German Aerospace Center (DLR), 2014-11-05
!
!
!%% include "mpi.f90" ! <--must be activated only if the MPI module has been provided as mpi.f90 file
!                                                                                    (e.g. in MS-MPI)
    module MYMPI
      use MPI
      integer ::  myrankWORLD, numprocsWORLD
    end module MYMPI
!
!
    program sharedmemtest
!
!   This little Fortran95-code was written by  M.Rachner, DLR, last update: 2014-11-05
!   as a downsized test program for checking the MPI-3 shared memory feature of any given MPI-distribution,
!   by allocating and checking  nwin  data windows (each consisting of a 1d-Integer*4-array
!   of  idim_1  array elements) shared by the MPI processes. Finally we free all shared windows allocated.
!   For that purpose this code applies the MPI-3 routines MPI_WIN_ALLOCATE_SHARED, MPI_WIN_SHARED_QUERY,
!                                                                                  MPI_WIN_FREE
!                                                              and -by the way- MPI_GET_LIBRARY_VERSION,
!                                                                               MPI_SIZEOF (<-- activate respective codelines!)
!   You may change the present hard-coded values for  nwin  and for idim_1  to more extreme values
!   in order to test the limits of your MPI-distribution.
!
!    Keep in mind, that this simple program requires that all MPI processes
!    actually run on the same(!) node (i.e. on the same shared memory).
!
!
!   My experience so far (2014-11-05) with this test program:
!
!   --With a patched MVAPICH2-2.1a (with Intel-14.0.4) it works only, if the total number of
!     allocated shared mem. is below ~100 MB:
!       mpif90 -O0 -debug -traceback -check -fpe0 sharedmemtest.f90
!       mpiexec -np 4 -bind-to core -prepend-rank -env MV2_USE_SHM_WIN_PT2PT 1 ./a.out
!     This bug can be e.g. demonstrated for case idim_1=5000000 in the Ftn code.
!     Then the code will abort due to the bug at the 6-th alloc. shared window.
!
!   --With INTEL-MPI 5.0.0 (with Intel-14.0.2) it works only, if the total number of
!     allocated shared mem. is below ~120 MB:
!       mpiifort -O0 -debug -traceback -check -fpe0 sharedmemtest.f90
!       mpirun -np 4 -binding "cell=core" -prepend-rank -ordered-output ./a.out
!     Comment by James Tullos (Intel) in  INTEL Clusters and HPC Technology forum (2014-08-19):
!       "This is a known bug at this time, and we are working to correct it."
!
!   --With MPICH-3.0.4 (with Intel-14.0.1) it works:
!       mpif90 sharedmemtest.f90
!       mpiexec -np 4 -bind-to core -prepend-rank ./a.out
!
!   --With      OPENMPI-1.8.2 (both with Intel-15.0.0 and with gfortran-4.9.1) it works,
!     also with OPENMPI-1.8.3 (both with Intel-14.0.2 and with gfortran-4.9.1) it works:
!       mpif90 sharedmemtest.f90
!       mpiexec -np 4 -bind-to core -tag-output ./a.out
!
!   --With MS-MPI Beta 5.0.12435.3 version (with Intel-Composer XE 2011 SP1) it works:
!       "%MSMPI_DIR%"\Bin\mpiexec.exe -np 4 -l sharedmemtest.exe
!
!*************************************************
!
!
      use MYMPI
      implicit none
!
      character (len=MPI_MAX_LIBRARY_VERSION_STRING) ::  versionstring_mpilib
      character (len=27)                             ::  versionstring_mpi  ! 27=4+11+1+11
      character (len=11)                             ::  caux
      integer                                        ::  iresultlen, idim_1, iwin, nwin, ierr_mpi
      integer, allocatable, dimension(:)             ::  MPIwin
!
!   --initialize MPI:
      call MPI_INIT( ierr_mpi )
      call MPI_COMM_RANK( MPI_COMM_WORLD, myrankWORLD  , ierr_mpi )
      call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocsWORLD, ierr_mpi )
          print *,'=== ftn95-program sharedmemtest has been entered by process no.: ',myrankWORLD
      call MPI_BARRIER( MPI_COMM_WORLD, ierr_mpi )
!
      if(myrankWORLD == 0) then  ! print version-info
          write(versionstring_mpi,'(i11)') MPI_VERSION
          versionstring_mpi=adjustl(versionstring_mpi)
          write(caux,'(i11)') MPI_SUBVERSION
          caux=adjustl(caux)
          versionstring_mpi= 'MPI-' // trim(versionstring_mpi) // '.' // caux
        write(6,*)    'MPI-version no. of your MPI library used:  ',trim(versionstring_mpi)
          call MPI_GET_LIBRARY_VERSION( versionstring_mpilib, iresultlen, ierr_mpi )
        write(6,*)    'Version         of your MPI library used:'
        write(6,'(a)') versionstring_mpilib(1:iresultlen)
      endif
!
!   --nwin is the number of shared memory allocations to be done successively:
      nwin = 100  ! 41   ! <-- 41 is e.g. a "real-world" value occuring in a CFD-code
!     My experience so far (2014-11-05):
!     for OPENMPI-1.8.3    the max. allowed value for nwin is  for np=2: nwin~31330, np=4: nwin~15450, np=8: nwin~7762
!     for MPICH-3.0.4      the max. allowed value for nwin is  2045
!     for patched MVAPICH2-2.1.a  the max. allowed value for nwin is  for np<16: nwin=2043, np=16: nwin~1950
!     for IMPI-5.0.0       the max. allowed value for nwin is  for np=2: nwin=13994, np=4: nwin~7765, np=8: nwin~3905, np=16:~1952
!     for MSMPI-5.0 beta   the max. allowed value for nwin is  4093
!
      if(myrankWORLD == 0) print *,'=========== number of allocations to be done: nwin=',nwin
!
      allocate( MPIwin(nwin) )
      MPIwin(1:nwin) = -7777  ! dummy initialization, should never be used
!
      do iwin=1,nwin
!     --number of desired array elements in the integer-array  int4_pointer_arr_1(:)  to be allocated shared:
        idim_1 = 5000000  ! 50000  ! 100
!     --shared memory allocation of the iwin-th shared window  and then checking it for correct allocation:
        if(myrankWORLD == 0) print *,'=========== allocation of shared window no. iwin=',iwin,' starting now with idim_1=',idim_1
        call sharedmem_alloc( idim_1, iwin,nwin, MPIwin )  ! idim_1, iwin,nwin are input, MPIwin() is result of sbr sharedmem_alloc
      enddo
!
!   --Now we free all (=nwin) shared windows on all processes  before we call MPI_FINALIZE:
      do iwin=1,nwin
        call MPI_WIN_FREE( MPIwin(iwin), ierr_mpi )  ; print *,'---shared window no. iwin=',iwin,' is freed now.'
      enddo
!     no process must enter sbr MPI_FINALZE until all procs have freed their shared windows:
      call MPI_BARRIER( MPI_COMM_WORLD, ierr_mpi )
!
!********************************
!   --this is only for testing additionally, whether MPI_SIZEOF works  (it did not yet work with OPENMPI-1.8.3):
      if(myrankWORLD == 0) then
!!!        call MPI_SIZEOF(iwin, iresultlen, ierr_mpi)
!!!        print *,'%%%% Result from calling MPI_SIZEOF: length of variable  iwin  is:',iresultlen,' Bytes'
      endif
!********************************
!
      call MPI_FINALIZE( ierr_mpi )
      print *,'===============end of program sharedmemtest reached ============'
   end program sharedmemtest
!
!
!
!
      subroutine sharedmem_alloc( idim_1, iwin,nwin, MPIwin )   ! idim_1, iwin,nwin are input, MPIwin(nwin) is result of this sbr
!
      use MYMPI
      use, intrinsic ::  ISO_C_BINDING, only:  C_PTR, C_F_POINTER   ! <-- is std Ftn2003 intrinsic module
!
      implicit none
!
      integer, intent(IN)                   ::  idim_1, iwin, nwin
      integer, intent(OUT), dimension(nwin) ::  MPIwin
!
      integer, parameter              ::  REAL8 = selected_real_kind(15,307)
!
      type    (C_PTR)                 ::  memory_pointer
      integer (kind=MPI_ADDRESS_KIND) ::  memory_size, ibytes_per_element
      real    (REAL8), save           ::  sum_bytes_allocated = 0.0_REAL8  ! counts bytes allocated in shared windows so far
!
      logical                         ::  lnodemaster
      integer                         ::  idisplace_unit, myrank, mynode, ierr_mpi
      integer, save                   ::  irank_nodemaster= 0  ! nodemaster has rank 0 in communicator comm_NODEPROCS(mynode)
      integer, dimension(1)           ::  idim_arr_1
      integer, dimension(:), allocatable, save ::  comm_NODEPROCS  ! array consisting of the node communicators
      integer, dimension(:), pointer  ::  int4_pointer_arr_1 =>null()  ! <-- the array to be allocated shared
!
!
!     for simplicity of this example program we presume all processes running on only 1 node:
      if( .not. allocated(comm_NODEPROCS) ) allocate( comm_NODEPROCS(1) )
      mynode=1  ;  comm_NODEPROCS(mynode) = MPI_COMM_WORLD
      myrank = myrankWORLD
      lnodemaster=.false.  ;  if(myrank == 0) lnodemaster=.true.
!
!-----shared memory allocation starting here:
        ibytes_per_element = 4_MPI_ADDRESS_KIND  ! [Bytes]
        idisplace_unit = 1
!
        if(lnodemaster) then
!         we let the nodemaster, i.e. the process with rank 0 in communicator  comm_NODEPROCS(mynode)
!         of node no.  mynode  allocate the shared memory
          memory_size = int(idim_1, MPI_ADDRESS_KIND)  * ibytes_per_element
        else
          memory_size = 0_MPI_ADDRESS_KIND
        endif
!
      call MPI_WIN_ALLOCATE_SHARED( memory_size, idisplace_unit, MPI_INFO_NULL, comm_NODEPROCS(mynode) &  ! <--input
                                   ,memory_pointer, MPIwin(iwin), ierr_mpi )                              ! <--result
          if(ierr_mpi /= MPI_SUCCESS) stop '=== STOP: Error when calling sbr MPI_WIN_ALLOCATE_SHARED'
!
          memory_size= -7777  ;  idisplace_unit= -6666  ! <-- we reinitialize to detect wrong values from MPI_WIN_SHARED_QUERY
      call MPI_WIN_SHARED_QUERY( MPIwin(iwin), irank_nodemaster                        &  ! <--input
                                ,memory_size, idisplace_unit, memory_pointer, ierr_mpi )  ! <--result
          if(ierr_mpi /= MPI_SUCCESS) stop '=== STOP: Error when calling sbr MPI_WIN_SHARED_QUERY'
!
          idim_arr_1(1) = idim_1   ! <-- necessary
      call C_F_POINTER( memory_pointer, int4_pointer_arr_1, idim_arr_1 )  ! is a std Ftn2003 routine
!
      call MPI_BARRIER( comm_NODEPROCS(mynode), ierr_mpi )
!-----shared allocation finished here.
!
!-----checking for correct shared allocation:
!     We let 1 process write a control number on all elements of the allocated array  int4_pointer_arr_1(:)
!     and then we let all processes use this array by summing up the contents of all array elements:
      if(lnodemaster) then
        print *,'========on nodemaster for iwin=',iwin,': before writing on shared mem'
        int4_pointer_arr_1(:)= 1   ! [1...idim_1]
        print *,'========on nodemaster for iwin=',iwin,': sum(int4_pointer_arr_1)=',sum(int4_pointer_arr_1)
      endif
      call MPI_BARRIER( comm_NODEPROCS(mynode), ierr_mpi )  ! nobody is allowed to continue until master has written on sharedmem
!
      if(lnodemaster) then
        sum_bytes_allocated = sum_bytes_allocated + real(memory_size, REAL8)
        print *,'========on nodemaster: iwin=',iwin,':',' total storage [MByte] alloc. in shared windows so far:' &
               ,sum_bytes_allocated *1.e-06_REAL8
      endif
      print *,'%%check shrd alloc of iwin=',iwin,':  sum(int4_pointer_arr_1)=',sum(int4_pointer_arr_1)
!
      return
      end subroutine sharedmem_alloc
