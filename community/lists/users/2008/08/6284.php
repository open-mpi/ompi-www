<?
$subject_val = "[OMPI users] memory leak in alltoallw";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 19:21:39 2008" -->
<!-- isoreceived="20080806232139" -->
<!-- sent="Wed, 06 Aug 2008 16:21:32 -0700" -->
<!-- isosent="20080806232132" -->
<!-- name="Dave Grote" -->
<!-- email="dpgrote_at_[hidden]" -->
<!-- subject="[OMPI users] memory leak in alltoallw" -->
<!-- id="489A31FC.4040505_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI users] memory leak in alltoallw<br>
<strong>From:</strong> Dave Grote (<em>dpgrote_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 19:21:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6283.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Reply:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI users] memory leak in alltoallw"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;I've been enhancing my code and have started using the nice routine 
<br>
alltoallw. The code works fine except that there seems to be a memory 
<br>
leak in alltoallw. I've eliminated all other possible causes and have 
<br>
reduced the code down to a bare minimum. I've included fortran source 
<br>
code which produces the problem. This code just keeps calling alltoallw, 
<br>
but with all of the send and receive counts set to zero, so it shouldn't 
<br>
be doing anything. And yet I can watch the memory continue to grow. As a 
<br>
sanity check, I change the code to call alltoallv instead, and there is 
<br>
no memory leak. If it helps, I am using OpenMPI on an AMD system running 
<br>
Chaos linux. I tried the latest nightly build of version 1.3 from Aug 5. 
<br>
I run four processors on one quad core node so it should be using shared 
<br>
memory communication.
<br>
&nbsp;&nbsp;&nbsp;Thanks!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program testalltoallw
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(kind=8):: phi(-3:3200+3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(kind=8):: phi2(-3:3200+3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(4):: izproc,ii
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(4):: nzprocs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(4):: zrecvtypes(0:3),zsendtypes(0:3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(4):: zsendcounts(0:3),zrecvcounts(0:3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(4):: zdispls(0:3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(4):: mpierror
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phi = 0.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(mpierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,nzprocs,mpierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,izproc,mpierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zsendcounts=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zrecvcounts=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zdispls=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zdispls=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zsendtypes=MPI_DOUBLE_PRECISION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zrecvtypes=MPI_DOUBLE_PRECISION
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do ii=1,1000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mod(ii,1000000_4) == 0) print*,&quot;loop &quot;,ii,izproc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ALLTOALLW(phi,zsendcounts,zdispls,zsendtypes,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                     phi2,zrecvcounts,zdispls,zrecvtypes,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                     MPI_COMM_WORLD,mpierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6283.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Reply:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI users] memory leak in alltoallw"</a>
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
