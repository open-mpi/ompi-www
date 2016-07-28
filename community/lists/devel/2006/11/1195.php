<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 27 19:18:15 2006" -->
<!-- isoreceived="20061128001815" -->
<!-- sent="Mon, 27 Nov 2006 16:17:48 -0800" -->
<!-- isosent="20061128001748" -->
<!-- name="Matt Leininger" -->
<!-- email="mlleinin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OpenMPI and OOM handler" -->
<!-- id="1164673068.6626.80.camel_at_localhost" -->
<!-- inreplyto="E1GoqMA-00007E-00_at_archimedes.llnl.gov" -->
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
<strong>From:</strong> Matt Leininger (<em>mlleinin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-27 19:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1196.php">Matt Leininger: "[OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1194.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<li><strong>Maybe in reply to:</strong> <a href="1194.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2006-11-27 at 15:57 -0800, Mark A. Grondona wrote:
<br>
<span class="quotelev2">&gt; &gt; On Mon, 2006-11-27 at 16:29 -0700, Brian W Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Nov 27, 2006, at 4:19 PM, Matt Leininger wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  I've been running more tests of OpenMPI v1.2b.  I've run into several
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; cases where the app+MPI use too much memory and the OOM handler kills
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; off tasks.  Sometimes the ompi mpirun shuts down gracefully, but other
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; times the OOM handler may kill off 1 to 4 MPI tasks per node (when I'm
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; using 8 MPI tasks per node).  The remaining MPI tasks keep
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; running/polling and have to be killed off by hand.  Has anyone seen  
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; this
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; behavior before?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Are the orteds also getting killed? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   Not sure.  I'll check the next time I see this.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't seen any evidence that orteds are being killed by the Out of Memory
</span><br>
<span class="quotelev1">&gt; killer. Only MPI application processes seem to be the chosen victim(s).
</span><br>
<p>&nbsp;&nbsp;I can confirm this.  I'm running a 2 node 16 MPI task job.  On one
<br>
node all 8 mpi tasks where killed and the other node only had 1 mpi task
<br>
killed.  The orted's are still running on each node, but it's not
<br>
cleaning up.
<br>
<p>&nbsp;&nbsp;- Matt
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm not really familiar with the OOM killer -- does it cause the  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parent of the killed process to get a SIGCHLD?  If not, that could be  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a fairly serious problem for us, as we rely on SIGCHLDs being  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; received by the orteds when things die...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   Mark Grondona could answer this.  His reply to devel-core bounced so
</span><br>
<span class="quotelev2">&gt; &gt; I'm including devel_at_[hidden] on this thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, being killed by the OOM killer should be the same as being sent
</span><br>
<span class="quotelev1">&gt; SIGKILL as far as userspace is concerned. SIGCHLD to the parent will still
</span><br>
<span class="quotelev1">&gt; be sent (and wait(2) will return, etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1196.php">Matt Leininger: "[OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1194.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<li><strong>Maybe in reply to:</strong> <a href="1194.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
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
