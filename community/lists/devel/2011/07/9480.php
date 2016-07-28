<?
$subject_val = "Re: [OMPI devel] Question about hanging mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 20:35:57 2011" -->
<!-- isoreceived="20110708003557" -->
<!-- sent="Thu, 7 Jul 2011 20:35:48 -0400" -->
<!-- isosent="20110708003548" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about hanging mpirun" -->
<!-- id="49B385A7-6FF2-4AB6-B888-2EBAF87EDFED_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0D953389-1AB0-42A8-8290-247080D07390_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about hanging mpirun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 20:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9481.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails"</a>
<li><strong>Previous message:</strong> <a href="9479.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="9474.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 5, 2011, at 2:21 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Ok I think I figured out what the deadlock in my application was... and please confirm if this makes sense:
</span><br>
<span class="quotelev2">&gt;&gt; 1. There was an 'if' condition that was met, causing 2 (out of 3) of my processes to call MPI_finalize(). 
</span><br>
<span class="quotelev2">&gt;&gt; 2. The remaining process was still trying to run and at some point was requesting calls like MPI_receive(), MPI_send() and MPI_wait() while the other two processes were at MPI_finalize() (althought they would never exit).The application would hang at that point, but the program was too big for me to figure out where exactly the lonely running process would hang. 
</span><br>
<span class="quotelev2">&gt;&gt; 3. I am no expert on openmpi, so I would appreciate it if someone can confirm if this was an expected behavior. I addressed the condition and now all processes run their course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is correct behavior for MPI - i.e., if one process is rattling off MPI requests while the others have already entered finalize, then the job will hang since the requests cannot possibly be met and that proc never calls finalize to release completion of the job.
</span><br>
<p>One clarification on this point...
<br>
<p>If process A calls MPI_Send to process B and that send completes before B actually receives the message (e.g., if the message was small and there were no other messages pending between A and B), and then A calls MPI_Finalize, then B can still legally call MPI_Recv to receive the outstanding message.  That scenario should work fine.
<br>
<p>What doesn't work is if you initiate new communication to a process that has called MPI_Finalize -- e.g., if you MPI_Send to a finalized process, or you try to MPI_Recv a message that wasn't send before the peer finalized.
<br>
<p>Make sense?
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
<li><strong>Next message:</strong> <a href="9481.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails"</a>
<li><strong>Previous message:</strong> <a href="9479.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="9474.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
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
