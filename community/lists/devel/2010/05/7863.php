<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  2 06:49:11 2010" -->
<!-- isoreceived="20100502104911" -->
<!-- sent="Sun, 2 May 2010 11:49:02 +0100" -->
<!-- isosent="20100502104902" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing" -->
<!-- id="7050C0ED-F7FC-42D6-AC8D-0FA5D682CD89_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="29334.128.165.0.81.1272769426.squirrel_at_webmail.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-02 06:49:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7864.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7865.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7865.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2 May 2010, at 04:03, Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt; As far as I can tell, calling shmctl IPC_RMID is immediately destroying
</span><br>
<span class="quotelev1">&gt; the shared memory segment even though there is at least one process
</span><br>
<span class="quotelev1">&gt; attached to it.  This is interesting and confusing because Solaris 10's
</span><br>
<span class="quotelev1">&gt; behavior description of shmctl IPC_RMID is similar to that of Linux'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I call shmctl IPC_RMID immediately after one process has attached to the
</span><br>
<span class="quotelev1">&gt; segment because, at least on Linux, this only marks the segment for
</span><br>
<span class="quotelev1">&gt; destruction.  The segment is only actually destroyed after all attached
</span><br>
<span class="quotelev1">&gt; processes have terminated.  I'm relying on this behavior for resource
</span><br>
<span class="quotelev1">&gt; cleanup upon application termination (normal/abnormal).
</span><br>
<p>I think you should look into this a little deeper, it certainly used to be the case on Linux that setting IPC_RMID would also prevent any further processes from attaching to the segment.
<br>
<p>You're right that minimising the window that the region exists for without that bit set is good, both in terms of wall-clock-time and lines of code, what we used to do here was to have all processes on a node perform a out-of-band intra-node barrier before creating the segment and another in-band barrier immediately after creating it.  Without this if one process on a node has problems and aborts during startup before it gets to the shared memory code then you are almost guaranteed to leave a un-attached segment behind.
<br>
<p>As to performance there should be no difference in use between sys-V shared memory and file-backed shared memory, the instructions issued and the MMU flags for the page should both be the same so the performance should be identical.
<br>
<p>The one area you do need to keep an eye on for performance is on numa machines where it's important which process on a node touches each page first, you can end up using different areas (pages, not regions) for communicating in different directions between the same pair of processes.  I don't believe this is any different to mmap backed shared memory though.
<br>
<p><span class="quotelev1">&gt; Because of this, sysv support may be limited to Linux systems - that is,
</span><br>
<span class="quotelev1">&gt; until we can get a better sense of which systems provide the shmctl
</span><br>
<span class="quotelev1">&gt; IPC_RMID behavior that I am relying on.
</span><br>
<p>Ashley,
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
<li><strong>Next message:</strong> <a href="7864.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7865.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7865.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing"</a>
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
