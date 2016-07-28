<?
$subject_val = "Re: [OMPI users] MPIIO max record size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 15:30:37 2013" -->
<!-- isoreceived="20130719193037" -->
<!-- sent="Fri, 19 Jul 2013 14:30:32 -0500" -->
<!-- isosent="20130719193032" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO max record size" -->
<!-- id="20130719193032.GC17233_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="519CF108.4060404_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIIO max record size<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 15:30:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22343.php">Erik Nelson: "[OMPI users] check point restart"</a>
<li><strong>Previous message:</strong> <a href="22341.php">Rob Latham: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/05/21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 22, 2013 at 12:23:36PM -0400, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; On 05/22/2013 11:33 AM, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Thanks for the confirmation of the MPIIO problem.  Interestingly, we
</span><br>
<span class="quotelev2">&gt; &gt;have the same problem when using MPIIO in INTEL MPI.  So something
</span><br>
<span class="quotelev2">&gt; &gt;fundamental seems to be wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think but I am not sure that it is because the MPI I/O (ROMIO)
</span><br>
<span class="quotelev1">&gt; code is the same for all distributions...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It has been written by Rob Latham.
</span><br>
<p>Hello!  Rajeev wrote it when he was in grad school, then he passed the
<br>
torch to Rob Ross when he was a post-doc at Argonne, and now I've been
<br>
the caretaker for the last mumble-mumble years.  (now if i could only
<br>
find some other sucker....)
<br>
<p>Tom, Eric:  I have recently fixed this bug for some cases.   I don't
<br>
know when OpenMPI will re-sync with ROMIO (it's getting harder and
<br>
harder to keep ROMIO as &quot;the standalone MPI-IO implementation&quot;) but it
<br>
should be straightforward to pick up that change 
<br>
<p>(it's this one:
<br>
<a href="http://git.mpich.org/mpich.git/blobdiff/2de997d9b3e94bad01d5f46d76f163d71e2bd7bd..7d44307f269cae96118beb19760221aff99bd74a:/src/mpi/romio/adio/common/ad_read.c">http://git.mpich.org/mpich.git/blobdiff/2de997d9b3e94bad01d5f46d76f163d71e2bd7bd..7d44307f269cae96118beb19760221aff99bd74a:/src/mpi/romio/adio/common/ad_read.c</a>)
<br>
<p><p>The functional descriptions for ROMIO are indeed &quot;integer count of
<br>
some datatype&quot;, but one can still use that to say &quot;write a billion
<br>
doubles&quot;.
<br>
<p>ROMIO handles this internally with as many calls to the write(2)
<br>
system call as it takes to complete.
<br>
<p>If you try to get fancy and make a struct of three thousand
<br>
megabyte-sized MPI_CONTIG types, MPICH will blow up.  I haven't tested
<br>
against OpenMPI. 
<br>
<p>But basic types should be ok, now.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22343.php">Erik Nelson: "[OMPI users] check point restart"</a>
<li><strong>Previous message:</strong> <a href="22341.php">Rob Latham: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/05/21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
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
