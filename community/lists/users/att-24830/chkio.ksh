#!/bin/ksh
#
cat <<EOF > test.f
      program test  
!
! This toy program tests MPIIO for reading a set of 2-D 'global'
! latitude/longitude fields.
!
      implicit none
!
      include 'mpif.h'
!
      integer im,  jm
!
!  ********************************************************************
!
      real, dimension(:,:), allocatable :: buffer 
!
      integer numrec,ierr
      integer lenij,iomode,ifh,i,j,n
      integer irank,nproc,ir,isize
      integer datatype
!
      real, dimension(:,:,:), allocatable :: globin
      real, dimension(:,:,:), allocatable :: globout
      integer, dimension(:), allocatable :: ijdispl
      integer, dimension(:), allocatable :: ijlena
      integer, dimension(:), allocatable :: ijsiz 
      integer, dimension(:), allocatable :: ijstrt
!
      integer status(MPI_STATUS_SIZE)
      integer(kind=MPI_OFFSET_KIND)  idisp,ioff
!
      character(150) filnam
      character(4) cproc
!
      call mpi_init(ierr)
      call mpi_comm_rank(mpi_comm_world,irank,ierr)
      call mpi_comm_size(mpi_comm_world,nproc,ierr)
!
!  'ir' is for default fortran indexing
!
      ir = irank + 1
!
!  ********************************************************************
!
! 'im' is the 'longitude' dimension
!
      call getenv('LON',cproc)
      read(cproc,'(i4)')im
!
! 'jm' is the 'latitude' dimension
!
      jm = im/2
!
! numrec is the number of 2-D lat/lon 'records'
!
      call getenv('NUMREC',cproc)
      read(cproc,'(i4)')numrec
!
!  build the test file as fortran direct access.  it contains numrec
!  2-D 'records' of dimension (im,jm)
!
      filnam = 'testdata'
      open(11,file=filnam,access='direct',recl=im*jm*numrec*4)
!
      allocate(globin(im,jm,numrec))
!
! Each 2-D fields is a constant equal to the 'record' index 'n'.
!
      if(ir.eq.1)then
        do 150 n = 1,numrec
          do 120 j = 1,jm
            do 110 i = 1,im
              globin(i,j,n) = n
  110       continue
  120     continue
  150   continue
!
        write(11,rec=1)globin
!
        close(11)
      endif
!
! Partition the 2-D domain into subdomains of dimension 'ijsiz(ir)'.
! In this case they are of constant size.  'ijstrt' is the array of
! offsets to the start of each subdomain.
!
      allocate(ijsiz(nproc))
      allocate(ijstrt(nproc))
!
      do 200 n = 1,nproc
        ijsiz(n) = im*jm/nproc
        ijstrt(n) = (n-1)*ijsiz(n)
  200 continue
!
!
! Build the MPIIO length and displacement arrays for defining the
! 'datatype' data type
!
      allocate(ijdispl(numrec))
      allocate(ijlena(numrec))
!
      do 300 n = 1,numrec
        ijlena(n) = ijsiz(ir)
        ijdispl(n) = ijstrt(ir) + (n-1)*im*jm
  300 continue
!
! Create 'datatype' and commit it
!
      call mpi_type_indexed(numrec,ijlena,ijdispl,mpi_real,datatype,ierr)
      call mpi_type_commit(datatype,ierr)
!
! open the 'testdata' file written previously
!
      iomode = mpi_mode_rdonly
      call mpi_file_open(mpi_comm_world,filnam,iomode,mpi_info_null,ifh,
     &                   ierr)
!
! determine where in the file to look for data (the file view)
!
      idisp = 0
      call mpi_file_set_view(ifh,idisp,mpi_real,datatype,'native',
     &                       mpi_info_null,ierr)
!
!  read data, note that it is read with the elementary data type
! 'mpi_real'.  It works, but wouldn't it be better to use 'datatype'?
! See below
!
      allocate(buffer(ijsiz(ir),numrec))
      ioff = 0
      lenij = ijsiz(ir)*numrec
      call mpi_file_read_at_all(ifh,ioff,buffer,lenij,mpi_real,status,
     &                          ierr)
!
! Validate the read by differencing with the original 'datain'.  First,
! gather the results
!
      isize = im*jm/nproc
      allocate(globout(im,jm,numrec))
      do 400 n = 1,numrec
        call mpi_gather(buffer(1,n),isize,mpi_real,globout(1,1,n),isize,
     &                  mpi_real,0,mpi_comm_world,ierr)
  400 continue
!
!  Now, print the differences record by record.  They should be zero
!
      if(ir.eq.1)then
        do 450 n = 1,numrec
          print *,' globout-globin, nrec=',n
          do 420 j = 1,jm
            print('(i3,1x,16f6.3)'),j,(globout(i,j,n)-globin(i,j,n),i=1,im)
  420     continue
  450   continue
      print*,' '
       print*,' This worked!  The above results are as expected '
      print*,' '
      endif

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
!
! Now, try to read with 'datatype'.  Where am I going wrong?  What don't I understand
! about the use of derived data types and MPIIO?

      ioff=0
      lenij=1
      call mpi_file_read_at_all(ifh,ioff,buffer,lenij,datatype,status,ierr)

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
!
      call mpi_file_close(ifh,ierr)
!
      call mpi_finalize(ierr)
      end
EOF

mpif90 -O1 -132 -assume byterecl test.f

export OMP_NUM_THREADS=1
ulimit -c 0
ulimit -s unlimited
#
# environmental variables to control size of testdata file

export NUMREC=4
export LON=16
#
 mpirun -V    
 mpirun -np 4 a.out 
#
/bin/rm testdata test.f a.out


