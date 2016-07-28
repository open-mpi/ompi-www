<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 10:32:33 2010" -->
<!-- isoreceived="20100504143233" -->
<!-- sent="Tue, 4 May 2010 15:32:25 +0100" -->
<!-- isosent="20100504143225" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing" -->
<!-- id="787B529D-40CB-4B36-B9FC-94D44C6A51BD_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B66593B-FACA-4AD5-B6A7-DE55BFFA1D57_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 10:32:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4 May 2010, at 15:27, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; One thing to be careful with a run-time check is that you might not want *all* processes on a box to try to alloc a sysv segment, fork a child, try to connect, ...etc.  With large count boxen, you might run out of sysv shmem segments if all procs try the test and/or run into OS serialization issues (someone here at the Forum cited a 96 core box).  So you might want to have local rank 0 (or the orted? ...but that wouldn't work for srun / direct launch, etc.) do a test and communicate the results to the rest of the local procs -- maybe in the modex?
</span><br>
<p>I think as as user I'd be quite surprised if my MPI job was spawning sub-processes during MPI_Init().
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
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
