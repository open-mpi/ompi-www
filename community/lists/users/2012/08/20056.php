<?
$subject_val = "[OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 29 11:25:02 2012" -->
<!-- isoreceived="20120829152502" -->
<!-- sent="Wed, 29 Aug 2012 11:24:50 -0400" -->
<!-- isosent="20120829152450" -->
<!-- name="Paul Edmon" -->
<!-- email="pedmon_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012" -->
<!-- id="503E3442.8030907_at_cfa.harvard.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012<br>
<strong>From:</strong> Paul Edmon (<em>pedmon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-29 11:24:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20057.php">Yong Qin: "[OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build OpenMPI 1.6.1 with Intel Cluster Studio 2012 for use 
<br>
on our cluster however I'm running into a bit of a problem.  The OpenMPI 
<br>
itself builds fine as does the code I'm testing with. However when I try 
<br>
to run on more than about 16 processors the run seg faults and when I 
<br>
turn on traceback it seems to point to this call:
<br>
<p>CALL MPI_INIT_THREAD(MPI_THREAD_FUNNELED, provided, ierr)
<br>
<p>This is a pretty standard call. Even stranger when I use a different 
<br>
version of the Intel Compiler 12.0.3 20110309 it doesn't have any problems.
<br>
<p>The version of the Intel compiler in Intel Cluster Studio 2012 is 12.1.0 
<br>
20110811.
<br>
<p>Does any one have any thoughts about this error?  I've tried turning off 
<br>
any optimization to no avail.  I even tried turned on debug mode for 
<br>
OpenMPI but I can't get any thing more specific as to why it is 
<br>
failing.  I even tried compiling Intel MPI Benchmark, which failed in a 
<br>
similar way, which indicates that its a problem specifically with the 
<br>
interaction of MPI and the intel compiler and not the code I was working 
<br>
with.
<br>
<p>Thanks.
<br>
<p>-Paul Edmon-
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20057.php">Yong Qin: "[OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
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
