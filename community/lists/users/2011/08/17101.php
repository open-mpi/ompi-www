<?
$subject_val = "Re: [OMPI users] problems with parallel IO  solved!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 10:07:43 2011" -->
<!-- isoreceived="20110825140743" -->
<!-- sent="Thu, 25 Aug 2011 16:07:38 +0200" -->
<!-- isosent="20110825140738" -->
<!-- name="Alexander Beck-Ratzka" -->
<!-- email="alexander.beck-ratzka_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with parallel IO  solved!" -->
<!-- id="201108251607.38284.alexander.beck-ratzka_at_aei.mpg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4774_1314275226_4E563F99_4774_3041_1_201108251425.27610.alexander.beck-ratzka_at_aei.mpg.de" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] problems with parallel IO  solved!<br>
<strong>From:</strong> Alexander Beck-Ratzka (<em>alexander.beck-ratzka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 10:07:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17102.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17100.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel IO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>the problem could be solved be using the same compiler settings for writung 
<br>
out and reading in. Writing out was done with -trace (Intel compiler), and the 
<br>
read in withou any supplemental options.
<br>
<p>Best wishes
<br>
<p>Alexander
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have problems to retrieve my data thatI have written out with MPI
</span><br>
<span class="quotelev1">&gt; parallel IO. Ins tests everything works fine, but within an huger
</span><br>
<span class="quotelev1">&gt; environment, the data read in differ from those written out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here the setup of my experiment:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##### the writer #####
</span><br>
<span class="quotelev1">&gt; program parallel_io
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer,parameter :: nx=1,ny=300,nz=256,nv=12
</span><br>
<span class="quotelev1">&gt;   integer ierr, i, myrank, comm_size, BUFSIZE, thefile, intsize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   parameter (BUFSIZE=1075200)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   real,dimension(nv+2,nx,ny,nz) :: v1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer (kind=MPI_OFFSET_KIND) disp
</span><br>
<span class="quotelev1">&gt;   integer ix, iy, iz, nn, counter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   character(6) cname
</span><br>
<span class="quotelev1">&gt;   call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_comm_size(mpi_comm_world, comm_size, ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_comm_rank(mpi_comm_world, myrank,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   counter=0
</span><br>
<span class="quotelev1">&gt;   do ix = 1,nz
</span><br>
<span class="quotelev1">&gt;      do iy=1,ny
</span><br>
<span class="quotelev1">&gt;         do iz=1,nx
</span><br>
<span class="quotelev1">&gt;            do nn=1,nv+2
</span><br>
<span class="quotelev1">&gt;               v1(nn,ix,iy,iz) = counter*(myrank+20)/200.
</span><br>
<span class="quotelev1">&gt;               counter=counter+1
</span><br>
<span class="quotelev1">&gt;            end do
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<span class="quotelev1">&gt;      end do
</span><br>
<span class="quotelev1">&gt;   end do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_barrier(mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_type_extent(mpi_real, intsize, ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_file_open(mpi_comm_world, 'testfile', MPI_MODE_WRONLY +
</span><br>
<span class="quotelev1">&gt; MPI_MODE_CREATE, mpi_info_null, thefile, ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_type_size(MPI_INTEGER, intsize, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   disp = myrank * BUFSIZE * intsize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   !  call mpi_file_set_view(thefile, disp, MPI_INTEGER, MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt; 'native', mpi_info_null, ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_file_write_at(thefile, disp, v1(1,1,1,1), BUFSIZE, MPI_REAL,
</span><br>
<span class="quotelev1">&gt; mpi_status_ignore, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_file_close(thefile, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   !  print the data read in...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   open (12, file='out000.dat-parallel-write-0')
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if (myrank.eq.0) then
</span><br>
<span class="quotelev1">&gt;      write (12,'(i4,e18.8)') ((((myrank,
</span><br>
<span class="quotelev1">&gt; v1(nn,ix,iy,iz),nn=1,nv+2),ix=1,nx),iy=1,ny), iz=1,nz)
</span><br>
<span class="quotelev1">&gt;   endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   close (12)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program parallel_io
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###############################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the reader...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ####################reader#######################
</span><br>
<span class="quotelev1">&gt;  program parallel_read_io
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt;   integer,parameter :: nx=1,ny=300,nz=256,nv=12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer ierr, i, myrank, comm_size, BUFSIZE, thefile, realsize
</span><br>
<span class="quotelev1">&gt;   parameter (BUFSIZE=1075200)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   real,dimension(nv+2,nx,ny,nz) :: v1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer (kind=MPI_OFFSET_KIND) disp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer ix, iy, iz, nn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_comm_size(mpi_comm_world, comm_size, ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_comm_rank(mpi_comm_world, myrank,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   !  do i=0,BUFSIZE
</span><br>
<span class="quotelev1">&gt;   !     buf(i) = myrank*BUFSIZE + i
</span><br>
<span class="quotelev1">&gt;   !  end do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_type_extent(mpi_integer, realsize, ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_file_open(mpi_comm_world, 'testfile', MPI_MODE_RDONLY,
</span><br>
<span class="quotelev1">&gt; mpi_info_null, thefile, ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_type_size(MPI_REAL, realsize, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   disp = myrank * BUFSIZE * realsize
</span><br>
<span class="quotelev1">&gt;   print*, 'myrank: ', myrank, '  disp: ', disp, '  realsize: ', realsize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   !  call mpi_file_set_view(thefile, disp, MPI_INTEGER, MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt; 'native', mpi_info_null, ierr)
</span><br>
<span class="quotelev1">&gt;   !  call mpi_file_read(thefile, buf, BUFSIZE, MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt; mpi_status_ignore, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_file_read_at(thefile, disp, v1(1,1,1,1), BUFSIZE, MPI_REAL,
</span><br>
<span class="quotelev1">&gt; mpi_status_ignore, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_file_close(thefile, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_barrier(mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   !  print the data read in...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   open (12, file='out000.dat-parallel-read-0')
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if (myrank.eq.0) then
</span><br>
<span class="quotelev1">&gt;      write (12,'(i4,e18.8)') ((((myrank,
</span><br>
<span class="quotelev1">&gt; v1(nn,ix,iy,iz),nn=1,nv+2),ix=1,nx),iy=1,ny), iz=1,nz)
</span><br>
<span class="quotelev1">&gt;   endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   close (12)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program parallel_read_io
</span><br>
<span class="quotelev1">&gt; ###############################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here everything is working fine. However integrating this into a huger
</span><br>
<span class="quotelev1">&gt; program, I get totally different data written out and read in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The setup up is the same as in the experiment, but I need some more
</span><br>
<span class="quotelev1">&gt; memory...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What might be the reason for such problems, and if I have an MPI error, how
</span><br>
<span class="quotelev1">&gt; can I estimate this within a fortan program. I have only found examples for
</span><br>
<span class="quotelev1">&gt; the error handling of MPI errors in C or C++. I would need an example for
</span><br>
<span class="quotelev1">&gt; C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So any hints or ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alexander
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17102.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17100.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel IO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
