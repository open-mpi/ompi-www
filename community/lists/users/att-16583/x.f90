      program nogaps
!
      use mpi
      implicit none
!
!     
      real, dimension(:,:), allocatable :: gridin
      real, dimension(:,:), allocatable :: gridout
      integer, dimension(:,:), allocatable :: ijlena 
      integer, dimension(:,:), allocatable :: ijdisp
      integer, dimension(:), allocatable :: lena
      integer, dimension(:), allocatable :: disp
!     
      character(150) filnam
      integer istat,im,jm,i,j,ierr,irank,nproc,lenij,istrt,numrec,ifh,lenr,m
!     
      integer ij_vector_type
      integer status(MPI_STATUS_SIZE)
      integer(kind=MPI_OFFSET_KIND)  idisp,ioff
      logical shuffle
      character(1) cshuff
!     
      call MPI_Init(ierr)
      call MPI_Comm_rank(MPI_COMM_WORLD,irank,ierr)
      call MPI_Comm_size(MPI_COMM_WORLD,nproc,ierr)
!     
!     ********************************************************************
!     
      call getarg(1,cshuff)
      shuffle=cshuff.eq.'T'
      print*,' shuffle= ',shuffle
      
      im=8
      jm = im/2
!     
      allocate(ijdisp(im,jm))
      allocate(ijlena(im,jm))
      allocate(gridin(im,jm))
      allocate(gridout(im,jm))
      allocate(lena(im * jm))
      allocate(disp(im * jm))
!     
!     build   im x jm (8x4) grid
!     
      do j=1,jm
         do i=1,im
            gridin(i,j)= j
         enddo
      enddo
      
      print*,' input grid '
      
      do j=1,jm
         print('(i3,1x,8f6.1)'),j,(gridin(i,j),i=1,im)
      enddo
!     
      lenij= im*jm           
!     
!     create array of lengths for index list
      
      do j=1,jm
         do i=1,im
            ijlena(i,j)= 1
         enddo
      enddo
      
!     create list of displacements
      
!     shuffle=.false. : monotonic increasing (1,2,3,4) displacements in j direction
!     shuffle=.true.  : interleave row (1,4,2,3) displacements in j direction
!     
      if(shuffle) then
         
         do j=1,jm,4
            do i=1,im
               ijdisp(i,j)= (i-1)+(j-1)*im
               ijdisp(i,j+1)= (i-1)+(j+2)*im
               ijdisp(i,j+2)= (i-1)+j*im
               ijdisp(i,j+3)= (i-1)+(j+1)*im
            enddo
         enddo
         
      else
         
         do j=1,jm,4
            do i=1,im
               ijdisp(i,j)= (i-1)+(j-1)*im
               ijdisp(i,j+1)= (i-1)+j*im
               ijdisp(i,j+2)= (i-1)+(j+1)*im
               ijdisp(i,j+3)= (i-1)+(j+2)*im
            enddo
         enddo
         
      endif
      
      print*,' displacements, shuffle= ',shuffle
      do j=1,jm
         print('(i3,1x,8i4)'),j,(ijdisp(i,j),i=1,im)
      enddo

      m = 1
      do j = 1, jm
         do i = 1, im
            lena(m) = ijlena(i, j)
            disp(m) = ijdisp(i, j)
            m = m + 1
         enddo
      enddo
!     
!     create indexed datatype
      
      call mpi_type_indexed(lenij,lena,disp,mpi_real,ij_vector_type,ierr)
      call mpi_type_commit(ij_vector_type,ierr)
      
      filnam='gridfile'
      istrt=1
      numrec=1
!     
!     open file  
      
      call MPI_FILE_OPEN(mpi_comm_world,filnam, MPI_MODE_CREATE + MPI_MODE_RDWR, MPI_INFO_NULL, ifh, ierr)
!     
!     set view
      
      idisp=0
      call MPI_FILE_SET_VIEW(ifh, idisp, mpi_real, ij_vector_type, 'native', MPI_INFO_NULL, ierr)
!     
!     write 'grid' array to file
      
      ioff=0
      call MPI_FILE_WRITE_AT_ALL(ifh,ioff,gridin,lenij,mpi_real,status,ierr)
!     
      call mpi_file_close(ifh,ierr)
!     
      lenr= 4*lenij
      
!     read array back with fortran direct access  to verify
!     
      open(unit=81,file=filnam,access='direct',form='unformatted',recl= lenr)
      read(81,rec=1) gridout
      
      print*,' output grid '
      do j=1,jm
         print('(i3,1x,8f6.1)'),j,(gridout(i,j),i=1,im)
      enddo
!     
      call MPI_Finalize(ierr)
      end
      

