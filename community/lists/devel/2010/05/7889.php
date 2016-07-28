<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 10:53:51 2010" -->
<!-- isoreceived="20100504145351" -->
<!-- sent="Tue, 4 May 2010 15:53:44 +0100" -->
<!-- isosent="20100504145344" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing" -->
<!-- id="FF10129E-553D-4714-9C2E-CCC73D27EDD0_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A65841DD-5FA7-437C-967D-B390B42A5904_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 10:53:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7890.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7892.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7892.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7894.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for	OpenMPI:Request	forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4 May 2010, at 15:41, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 4, 2010, at 9:32 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One thing to be careful with a run-time check is that you might not want *all* processes on a box to try to alloc a sysv segment, fork a child, try to connect, ...etc.  With large count boxen, you might run out of sysv shmem segments if all procs try the test and/or run into OS serialization issues (someone here at the Forum cited a 96 core box).  So you might want to have local rank 0 (or the orted? ...but that wouldn't work for srun / direct launch, etc.) do a test and communicate the results to the rest of the local procs -- maybe in the modex?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think as as user I'd be quite surprised if my MPI job was spawning sub-processes during MPI_Init().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Point noted.  But actually -- can you give specific reasons as to why a user should care?  Keep in mind that this would be a short-lived fork'ed process -- not &quot;spawn&quot; in the MPI sense of the word.
</span><br>
<p>You might be running the job under Valgrind or another debugger, bclr has some issues with fork as I remember and traditionally there have been IB mapping issues here as well.  I'm sure you could make a case against any of those points if you wanted to but I think the argument stands, doing this kind of run-time check shouldn't be needed.
<br>
<p>It might be possible to construct the code however so that if it failed to initialise it just wasn't used rather than aborted the job which would have much the same effect as a run-time test but without having to fork new processes and create short-lived shared memory regions.
<br>
<p>I should of course said fork where I mentioned spawn above to avoid any confusion, spawn has a specific meaning in the context of MPI.
<br>
<p>I still think a better understanding of the issue is required before any decision here is made though, I'm surprised by Samuels description of the problem because it's not how I remember it and from what Chris says it doesn't reflect what is in linux Git code either.  I'd like to see why there is an apparent difference in behaviour before a decision is made to only support one.
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
<li><strong>Next message:</strong> <a href="7890.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7892.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7892.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7894.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for	OpenMPI:Request	forCommunity Input and Testing"</a>
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
