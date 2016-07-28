<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 10:41:24 2010" -->
<!-- isoreceived="20100504144124" -->
<!-- sent="Tue, 4 May 2010 09:41:12 -0500" -->
<!-- isosent="20100504144112" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing" -->
<!-- id="A65841DD-5FA7-437C-967D-B390B42A5904_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="787B529D-40CB-4B36-B9FC-94D44C6A51BD_at_pittman.co.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 10:41:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4, 2010, at 9:32 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev2">&gt; &gt; One thing to be careful with a run-time check is that you might not want *all* processes on a box to try to alloc a sysv segment, fork a child, try to connect, ...etc.  With large count boxen, you might run out of sysv shmem segments if all procs try the test and/or run into OS serialization issues (someone here at the Forum cited a 96 core box).  So you might want to have local rank 0 (or the orted? ...but that wouldn't work for srun / direct launch, etc.) do a test and communicate the results to the rest of the local procs -- maybe in the modex?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think as as user I'd be quite surprised if my MPI job was spawning sub-processes during MPI_Init().
</span><br>
<p>Point noted.  But actually -- can you give specific reasons as to why a user should care?  Keep in mind that this would be a short-lived fork'ed process -- not &quot;spawn&quot; in the MPI sense of the word.
<br>
<p>(I'm not advocating or refuting the idea -- I just want to understand why a user should care if the run-time system runs a quick test during startup)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
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
