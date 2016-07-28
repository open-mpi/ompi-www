subroutine dump_ensight_3D_geometry
  use dump_ensight
  implicit none
  integer :: ierr,ibuffer,iunit,i
  character(len=80) :: buffer
  character(len=str_medium) :: file
  real(SP), dimension(:), pointer :: xbuf,ybuf,zbuf
  real(SP) :: max_x,max_y,max_z
  real(SP) :: min_x,min_y,min_z
  logical  :: file_is_there
  integer  :: size
  integer(kind=MPI_OFFSET_KIND) :: disp
  integer, dimension(MPI_STATUS_SIZE) :: status
  
  ! Get single precision mesh
  allocate(xbuf(nnodes_),ybuf(nnodes_),zbuf(nnodes_))
  if (icyl.eq.0) then
     do i=1,nnodes_
        xbuf(i)=x(unstr2str(i,1))
        ybuf(i)=y(unstr2str(i,2))
        zbuf(i)=z(unstr2str(i,3))
     end do
  else
     do i=1,nnodes_
        xbuf(i)=x(unstr2str(i,1))
        ybuf(i)=y(unstr2str(i,2))*cos(z(unstr2str(i,3)))
        zbuf(i)=y(unstr2str(i,2))*sin(z(unstr2str(i,3)))
     end do
  end if
  min_x=minval(xbuf)
  min_y=minval(ybuf)
  min_z=minval(zbuf)
  max_x=maxval(xbuf)
  max_y=maxval(ybuf)
  max_z=maxval(zbuf)
  
  ! Generate the geometry file in parallel
  file="ensight-3D/geometry"
  inquire(file=file,exist=file_is_there)
  if (file_is_there .and. irank.eq.iroot) call MPI_FILE_DELETE(file,MPI_INFO_NULL,ierr)
  call MPI_FILE_OPEN(comm,file,IOR(MPI_MODE_WRONLY,MPI_MODE_CREATE),MPI_INFO_NULL,iunit,ierr)
  
  ! Write header (only root)
  if (irank.eq.iroot) then
     ! Global header
     buffer = 'C Binary'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     buffer = 'Ensight Gold Geometry File'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     buffer = 'Unstructured Geometry from ARTS'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     buffer = 'node id given'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     buffer = 'element id given'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     ! Extents
     buffer = 'extents'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     size = 1
     call MPI_FILE_WRITE(iunit,min_x,size,MPI_REAL_SP,status,ierr)
     call MPI_FILE_WRITE(iunit,max_x,size,MPI_REAL_SP,status,ierr)
     call MPI_FILE_WRITE(iunit,min_y,size,MPI_REAL_SP,status,ierr)
     call MPI_FILE_WRITE(iunit,max_y,size,MPI_REAL_SP,status,ierr)
     call MPI_FILE_WRITE(iunit,min_z,size,MPI_REAL_SP,status,ierr)
     call MPI_FILE_WRITE(iunit,max_z,size,MPI_REAL_SP,status,ierr)
     ! Part header
     buffer = 'part'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     ibuffer = 1
     size = 1
     call MPI_FILE_WRITE(iunit,ibuffer,size,MPI_INTEGER,status,ierr)
     buffer = 'ARTS 3D geometry'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     ! Nodes list
     buffer = 'coordinates'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     size = 1
     call MPI_FILE_WRITE(iunit,nnodes,size,MPI_INTEGER,status,ierr)
  end if
  
  ! Write the node positions
  disp = 752
  call MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_node,"native",MPI_INFO_NULL,ierr)
  call MPI_FILE_WRITE_ALL(iunit,nodes_,nnodes_,MPI_INTEGER,status,ierr)
  disp = disp+4*nnodes
  call MPI_FILE_SET_VIEW(iunit,disp,MPI_REAL_SP,fileview_node,"native",MPI_INFO_NULL,ierr)
  call MPI_FILE_WRITE_ALL(iunit,xbuf,nnodes_,MPI_REAL_SP,status,ierr)
  disp = disp+4*nnodes
  call MPI_FILE_SET_VIEW(iunit,disp,MPI_REAL_SP,fileview_node,"native",MPI_INFO_NULL,ierr)
  call MPI_FILE_WRITE_ALL(iunit,ybuf,nnodes_,MPI_REAL_SP,status,ierr)
  disp = disp+4*nnodes
  call MPI_FILE_SET_VIEW(iunit,disp,MPI_REAL_SP,fileview_node,"native",MPI_INFO_NULL,ierr)
  call MPI_FILE_WRITE_ALL(iunit,zbuf,nnodes_,MPI_REAL_SP,status,ierr)
  
  ! Write the hexa connectivity
  disp = disp+4*nnodes
  call MPI_FILE_SET_VIEW(iunit,disp,MPI_CHARACTER,MPI_CHARACTER,"native",MPI_INFO_NULL,ierr)
  if (irank.eq.iroot) then
     buffer = 'hexa8'
     size = 80
     call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
     size = 1
     call MPI_FILE_WRITE(iunit,ncells_hexa,size,MPI_INTEGER,status,ierr)
     !do i=1,ncells_hexa
     !   call MPI_FILE_WRITE(iunit,i,size,MPI_INTEGER,status,ierr)
     !end do
  end if
  disp = disp+84
  call MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_hexa_conn,"native",MPI_INFO_NULL,ierr)
  call MPI_FILE_WRITE_ALL(iunit,hexa_,ncells_hexa_,MPI_INTEGER,status,ierr)
  disp = disp+4*ncells_hexa
  call MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_hexa_conn,"native",MPI_INFO_NULL,ierr)
  size = 8*ncells_hexa_
  call MPI_FILE_WRITE_ALL(iunit,conn_hexa,size,MPI_INTEGER,status,ierr)
  
  ! Write the file - wedge
  if (ncells_wedge.gt.0) then
     disp = disp+8*4*ncells_hexa
     call MPI_FILE_SET_VIEW(iunit,disp,MPI_CHARACTER,MPI_CHARACTER,"native",MPI_INFO_NULL,ierr)
     if (irank.eq.iroot) then
        buffer = 'penta6'
        size = 80
        call MPI_FILE_WRITE(iunit,buffer,size,MPI_CHARACTER,status,ierr)
        size = 1
        call MPI_FILE_WRITE(iunit,ncells_wedge,size,MPI_INTEGER,status,ierr)
        !do i=1,ncells_wedge
        !   call MPI_FILE_WRITE(iunit,i,size,MPI_INTEGER,status,ierr)
        !end do
     end if
     disp = disp+84
     call MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_wedge_conn,"native",MPI_INFO_NULL,ierr)
     call MPI_FILE_WRITE_ALL(iunit,wedge_,ncells_wedge_,MPI_INTEGER,status,ierr)
     disp = disp+4*ncells_wedge
     call MPI_FILE_SET_VIEW(iunit,disp,MPI_INTEGER,fileview_wedge_conn,"native",MPI_INFO_NULL,ierr)
     size = 6*ncells_wedge_
     call MPI_FILE_WRITE_ALL(iunit,conn_wedge,size,MPI_INTEGER,status,ierr)
  end if
  
  ! Close the file
  call MPI_FILE_CLOSE(iunit,ierr)

  ! Deallocate arrays
  deallocate(xbuf,ybuf,zbuf)
  
  return
end subroutine dump_ensight_3D_geometry
