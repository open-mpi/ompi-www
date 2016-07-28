<?
$subject_val = "[OMPI users] problem with MPI-IO at filesizes greater then the 32 Bit limit...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  3 05:05:00 2011" -->
<!-- isoreceived="20110903090500" -->
<!-- sent="Sat, 03 Sep 2011 11:05:04 +0200" -->
<!-- isosent="20110903090504" -->
<!-- name="alibeck" -->
<!-- email="alexander.beck-ratzka_at_[hidden]" -->
<!-- subject="[OMPI users] problem with MPI-IO at filesizes greater then the 32 Bit limit..." -->
<!-- id="4E61EDC0.7000109_at_aei.mpg.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] problem with MPI-IO at filesizes greater then the 32 Bit limit...<br>
<strong>From:</strong> alibeck (<em>alexander.beck-ratzka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-03 05:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17148.php">Randolph Pullen: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Previous message:</strong> <a href="17146.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] Mellanox/Voltaire FCA support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17154.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit..."</a>
<li><strong>Reply:</strong> <a href="17154.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I have a run on 256 PEs onot a lustre file system with the following code:
<br>
<p>[snip]
<br>
&nbsp;&nbsp;integer :: mype,npe,pe_min,pe_max,pe_prev,pe_next,mpi_my_real, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm=mpi_comm_world,status(mpi_status_size),error, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_realsize, thefile
<br>
&nbsp;&nbsp;integer (kind=MPI_OFFSET_KIND) disp
<br>
<p>&nbsp;&nbsp;logical :: pe0,prl
<br>
<p><p>! *************************************************************************
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(error)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank(comm,mype,error)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size(comm, npe,error)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_extent(mpi_real, mpi_realsize, error);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_size(MPI_REAL8, mpi_realsize, error)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;pe0=mype==0
<br>
<p>.
<br>
.
<br>
.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disp = mype*lu*mpi_realsize
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(comm,error)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_open(comm,'output-parallel/dump.dat',
<br>
MPI_MODE_RDONLY, mpi_info_null, thefile, error)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_write_at(thefile, disp, u(1,nx1,ny1,nz1), lu,
<br>
MPI_REAL8, mpi_status_ignore, error)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_close(thefile, error)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(comm,error)
<br>
<p><p>[snip]
<br>
<p>where lu is an integer which does not extend the limit. If I am
<br>
exceeding the 32 Bit limit, which means that the size of my output file
<br>
is larger then 2**31 but (what rouhgly 2.4 Gbytes), I am getting only a
<br>
file with a size of 327 MBytey instead of expected 181 GByte for a
<br>
checkpoint. This leads of course to a segfault when restarting. I am
<br>
afraid this has something to do with the 32 Bit limit of my filesize,
<br>
which might be calculated wrong in my offset (which is disp in my code)
<br>
in mpi_file_write_at.
<br>
<p>Any ideas on how I can enclose the reson of the errpr, or - even better
<br>
- on how to solve it?
<br>
<p>Best wishes
<br>
<p>Alexander
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17148.php">Randolph Pullen: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Previous message:</strong> <a href="17146.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] Mellanox/Voltaire FCA support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17154.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit..."</a>
<li><strong>Reply:</strong> <a href="17154.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit..."</a>
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
