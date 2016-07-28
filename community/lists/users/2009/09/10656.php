<?
$subject_val = "[OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 + gcc4.4?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 14:17:10 2009" -->
<!-- isoreceived="20090915181710" -->
<!-- sent="Tue, 15 Sep 2009 14:17:05 -0400" -->
<!-- isosent="20090915181705" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="[OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 + gcc4.4?" -->
<!-- id="4AAFDA21.9090207_at_scinet.utoronto.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 + gcc4.4?<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 14:17:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10657.php">Jonathan Dursi: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10655.php">Jeff Squyres: "Re: [OMPI users] error durgin execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10657.php">Jonathan Dursi: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10657.php">Jonathan Dursi: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10709.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10875.php">Eugene Loh: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have here installed a couple of installations of OpenMPI 1.3.2, and 
<br>
we are having real problems with single-node jobs randomly hanging when 
<br>
using the shared memory BTL, particularly (but perhaps not only) when 
<br>
using the version compiled with gcc 4.4.0.
<br>
<p>The very trivial attached program, which just does a series of SENDRECVs 
<br>
&nbsp;&nbsp;rightwards through MPI_COMM_WORLD, hangs extremely reliably when run 
<br>
like so on an 8 core box:
<br>
<p>mpirun -np 6 -mca btl self,sm ./diffusion-mpi
<br>
<p>(the test example was based on a simple fortran example of MPIing the 1d 
<br>
diffusion equation).   The hanging seems to always occur within the 
<br>
first 500 or so iterations - but sometimes between the 10th and 20th and 
<br>
sometimes not until the late 400s.   The hanging occurs both on a new 
<br>
dual socket quad core nehalem box, and an older harpertown machine.
<br>
<p>Running without sm, however, seems to work fine:
<br>
<p>mpirun -np 6 -mca btl self,tcp ./diffusion-mpi
<br>
<p>never gives any problems.
<br>
<p>Any suggestions?  I notice a mention of `improved flow control in sm' in 
<br>
the ChangeLog to 1.3.3; is that a significant bugfix?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<pre>
-- 
Jonathan Dursi     &lt;ljdursi_at_[hidden]&gt;

</pre>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program diffuse
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer nsteps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameter (nsteps = 150000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer step
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real a,b
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer mpistatus(MPI_STATUS_SIZE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer nprocs,rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer leftneighbour, rightneighbour
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer tag
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,nprocs,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leftneighbour = rank-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (leftneighbour .eq. -1) then 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leftneighbour = nprocs-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rightneighbour = rank+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rightneighbour .eq. nprocs) then 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rightneighbour = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag = 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do step=1, nsteps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SENDRECV(a,1,MPI_REAL,rightneighbour,               &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                       tag,                                       &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                       b, 1, MPI_REAL, leftneighbour,             &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                       tag,                                       &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                       MPI_COMM_WORLD, mpistatus, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((rank .eq. 0) .and. (mod(step,10) .eq. 1)) then 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'Step = ', step
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10657.php">Jonathan Dursi: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10655.php">Jeff Squyres: "Re: [OMPI users] error durgin execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10657.php">Jonathan Dursi: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10657.php">Jonathan Dursi: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10709.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10875.php">Eugene Loh: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
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
