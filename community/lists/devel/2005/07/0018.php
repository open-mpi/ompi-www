<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 09:52:45 2005" -->
<!-- isoreceived="20050718145245" -->
<!-- sent="Mon, 18 Jul 2005 07:50:53 -0700" -->
<!-- isosent="20050718145053" -->
<!-- name="Matt Leininger" -->
<!-- email="mlleinin_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="1121698253.11021.405.camel_at_localhost" -->
<!-- inreplyto="8db9210fa7573fc9103e826042c66cba_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-07-18 09:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0019.php">Edgar Gabriel: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0017.php">Tim S. Woodall: "Re:  Presentation of organization goals"</a>
<li><strong>Maybe in reply to:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0021.php">Richard L. Graham: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0021.php">Richard L. Graham: "Re:  processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2005-07-18 at 08:28 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 18, 2005, at 2:50 AM, Matt Leininger wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Generally speaking, if you launch &lt;=N processes in a job on a node
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (where N == number of CPUs on that node), then we set processor
</span><br>
<span class="quotelev3">&gt; &gt;&gt; affinity.  We set each process's affinity to the CPU number according
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to the VPID ordering of the procs in that job on that node.  So if you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; launch VPIDs 5, 6, 7, 8 on a node, 5 would go to processor 0, 6 would
</span><br>
<span class="quotelev3">&gt; &gt;&gt; go to processor 1, etc. (it's an easy, locally-determined ordering).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    You'd need to be careful with dual-core cpus.  Say you launch a 4
</span><br>
<span class="quotelev2">&gt; &gt; task MPI job on a 4-socket dual core Opteron.  You'd want to schedule
</span><br>
<span class="quotelev2">&gt; &gt; the tasks on nodes 0, 2, 4, 6 - not 0, 1, 2, 3 to get maximum memory
</span><br>
<span class="quotelev2">&gt; &gt; bandwidth to each MPI task.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the potential for non-trivial logic like this, perhaps the extra 
</span><br>
<span class="quotelev1">&gt; work for a real framework would be justified, then.
</span><br>
<p>&nbsp;&nbsp;&nbsp;I agree.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Also, how would this work with hybrid MPI+threading (either pthreads
</span><br>
<span class="quotelev2">&gt; &gt; or OpenMP) applications?  Let's say you have an 8 or 16 cpu node and 
</span><br>
<span class="quotelev2">&gt; &gt; you
</span><br>
<span class="quotelev2">&gt; &gt; start up 2 MPI tasks with 4 compute threads in each task.  The optimum
</span><br>
<span class="quotelev2">&gt; &gt; layout may not be running the MPI tasks on cpu's 0 and 1.  Several
</span><br>
<span class="quotelev2">&gt; &gt; hybrid applications that ran on ASC White and now Purple will have 
</span><br>
<span class="quotelev2">&gt; &gt; these
</span><br>
<span class="quotelev2">&gt; &gt; requirements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hum.  Good question.  The MPI API doesn't really address this -- the 
</span><br>
<span class="quotelev1">&gt; MPI API is not aware of additional threads that are created until you 
</span><br>
<span class="quotelev1">&gt; call an MPI function (and even then, we're not currently checking which 
</span><br>
<span class="quotelev1">&gt; thread is calling -- that would just add latency).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do these applications do right now?  Do they set their own 
</span><br>
<span class="quotelev1">&gt; processor / memory affinity?  This might actually be outside the scope 
</span><br>
<span class="quotelev1">&gt; of MPI...?  (I'mm not trying to shrug off responsibility, but this 
</span><br>
<span class="quotelev1">&gt; might be a case where the MPI simply doesn't have enough information, 
</span><br>
<span class="quotelev1">&gt; and to get that information [e.g., via MPI attributes or MPI info 
</span><br>
<span class="quotelev1">&gt; arguments] would be more hassle than the user just setting the affinity 
</span><br>
<span class="quotelev1">&gt; themselves...?)
</span><br>
<p>&nbsp;&nbsp;We played around with setting processor affinity in our app a few
<br>
years ago.  It got a little ugly, but things have improved since then.
<br>
<p>&nbsp;&nbsp;I was thinking of having the app pass threading info to MPI (via info
<br>
or attributes).  This might be outside the scope of MPI now, but this
<br>
should be the responsibility of the parallel programming
<br>
language/method.  Making it the apps responsibility to set processor
<br>
affinity seems a bit too much of a low-level worry to put on application
<br>
developers.  
<br>
<p><p>&nbsp;&nbsp;&nbsp;Some discussions around what a memory/processor affinity framework
<br>
should look like and be doing is a good starting point.
<br>
<p>&nbsp;&nbsp;- Matt
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0019.php">Edgar Gabriel: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0017.php">Tim S. Woodall: "Re:  Presentation of organization goals"</a>
<li><strong>Maybe in reply to:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0021.php">Richard L. Graham: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0021.php">Richard L. Graham: "Re:  processor affinity"</a>
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
