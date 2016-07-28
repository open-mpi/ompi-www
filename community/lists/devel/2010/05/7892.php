<?
$subject_val = "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 08:11:06 2010" -->
<!-- isoreceived="20100505121106" -->
<!-- sent="Wed, 5 May 2010 07:10:57 -0500" -->
<!-- isosent="20100505121057" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing" -->
<!-- id="48829BE3-66EB-403A-A96F-267D376DB779_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FF10129E-553D-4714-9C2E-CCC73D27EDD0_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 08:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7893.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7891.php">Ralph Castain: "[OMPI devel] Open MPI 1.4.2 released"</a>
<li><strong>In reply to:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7893.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7893.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7895.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4, 2010, at 9:53 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Point noted.  But actually -- can you give specific reasons as to why a user should care?  Keep in mind that this would be a short-lived fork'ed process -- not &quot;spawn&quot; in the MPI sense of the word.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might be running the job under Valgrind or another debugger, bclr has some issues with fork as I remember and traditionally there have been IB mapping issues here as well.  I'm sure you could make a case against any of those points if you wanted to but I think the argument stands, doing this kind of run-time check shouldn't be needed.
</span><br>
<p>Mmm; good points (especially Valgrind).  BLCR and OpenFabrics verbs shouldn't be much of an issue here, but I can see that there might be unexpectedness if you're running under Valgrind or some other debugger.
<br>
<p><span class="quotelev1">&gt; It might be possible to construct the code however so that if it failed to initialise it just wasn't used rather than aborted the job which would have much the same effect as a run-time test but without having to fork new processes and create short-lived shared memory regions.
</span><br>
<p>That's how most of the network transports are in OMPI today -- if they fail to init, they are just skipped.
<br>
<p>The problem here is that you really need 2 processes to do this test.  I suppose it could be done with local ranks 0 and 1 instead of forking a new process -- they would just need to communicate via RML to sync up, I suppose.
<br>
<p><span class="quotelev1">&gt; I should of course said fork where I mentioned spawn above to avoid any confusion, spawn has a specific meaning in the context of MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still think a better understanding of the issue is required before any decision here is made though, I'm surprised by Samuels description of the problem because it's not how I remember it and from what Chris says it doesn't reflect what is in linux Git code either.  I'd like to see why there is an apparent difference in behaviour before a decision is made to only support one.
</span><br>
<p>There's no intent to only support sysv or mmap.  Samuel's work was to extend OMPI to support sysv in the case where it would be advantageous (e.g., guaranteed cleanup of the shmem segment).  The mmap stuff is definitely not going to be removed.
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
<li><strong>Next message:</strong> <a href="7893.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7891.php">Ralph Castain: "[OMPI devel] Open MPI 1.4.2 released"</a>
<li><strong>In reply to:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7893.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7893.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7895.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
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
