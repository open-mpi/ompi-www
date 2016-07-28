<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 10:26:48 2005" -->
<!-- isoreceived="20050718152648" -->
<!-- sent="Mon, 18 Jul 2005 09:26:43 -0600" -->
<!-- isosent="20050718152643" -->
<!-- name="Richard L. Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="c302d4676af98057d1218a553235393d_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1121698253.11021.405.camel_at_localhost" -->
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
<strong>From:</strong> Richard L. Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-18 10:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0022.php">Jeff Squyres: "July meeting"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Torsten Hoefler: "Re:  collectives discussion @LANL"</a>
<li><strong>In reply to:</strong> <a href="0018.php">Matt Leininger: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Edgar Gabriel: "Re:  processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To add to this, I would suggest not coupling processor affinity and
<br>
memory locality at the component level.  At some level you do need
<br>
to tie these together, but there are other components that also need
<br>
to be considered, such as NIC locality, and probably other things
<br>
too ...
<br>
<p>Rich
<br>
<p>On Jul 18, 2005, at 8:50 AM, Matt Leininger wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2005-07-18 at 08:28 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 18, 2005, at 2:50 AM, Matt Leininger wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Generally speaking, if you launch &lt;=N processes in a job on a node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (where N == number of CPUs on that node), then we set processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; affinity.  We set each process's affinity to the CPU number 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; according
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the VPID ordering of the procs in that job on that node.  So if 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launch VPIDs 5, 6, 7, 8 on a node, 5 would go to processor 0, 6 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; go to processor 1, etc. (it's an easy, locally-determined ordering).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    You'd need to be careful with dual-core cpus.  Say you launch a 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; task MPI job on a 4-socket dual core Opteron.  You'd want to schedule
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the tasks on nodes 0, 2, 4, 6 - not 0, 1, 2, 3 to get maximum memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bandwidth to each MPI task.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the potential for non-trivial logic like this, perhaps the extra
</span><br>
<span class="quotelev2">&gt;&gt; work for a real framework would be justified, then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I agree.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Also, how would this work with hybrid MPI+threading (either 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthreads
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or OpenMP) applications?  Let's say you have an 8 or 16 cpu node and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start up 2 MPI tasks with 4 compute threads in each task.  The 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; layout may not be running the MPI tasks on cpu's 0 and 1.  Several
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hybrid applications that ran on ASC White and now Purple will have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requirements.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hum.  Good question.  The MPI API doesn't really address this -- the
</span><br>
<span class="quotelev2">&gt;&gt; MPI API is not aware of additional threads that are created until you
</span><br>
<span class="quotelev2">&gt;&gt; call an MPI function (and even then, we're not currently checking 
</span><br>
<span class="quotelev2">&gt;&gt; which
</span><br>
<span class="quotelev2">&gt;&gt; thread is calling -- that would just add latency).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do these applications do right now?  Do they set their own
</span><br>
<span class="quotelev2">&gt;&gt; processor / memory affinity?  This might actually be outside the scope
</span><br>
<span class="quotelev2">&gt;&gt; of MPI...?  (I'mm not trying to shrug off responsibility, but this
</span><br>
<span class="quotelev2">&gt;&gt; might be a case where the MPI simply doesn't have enough information,
</span><br>
<span class="quotelev2">&gt;&gt; and to get that information [e.g., via MPI attributes or MPI info
</span><br>
<span class="quotelev2">&gt;&gt; arguments] would be more hassle than the user just setting the 
</span><br>
<span class="quotelev2">&gt;&gt; affinity
</span><br>
<span class="quotelev2">&gt;&gt; themselves...?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   We played around with setting processor affinity in our app a few
</span><br>
<span class="quotelev1">&gt; years ago.  It got a little ugly, but things have improved since then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I was thinking of having the app pass threading info to MPI (via info
</span><br>
<span class="quotelev1">&gt; or attributes).  This might be outside the scope of MPI now, but this
</span><br>
<span class="quotelev1">&gt; should be the responsibility of the parallel programming
</span><br>
<span class="quotelev1">&gt; language/method.  Making it the apps responsibility to set processor
</span><br>
<span class="quotelev1">&gt; affinity seems a bit too much of a low-level worry to put on 
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev1">&gt; developers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Some discussions around what a memory/processor affinity framework
</span><br>
<span class="quotelev1">&gt; should look like and be doing is a good starting point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0022.php">Jeff Squyres: "July meeting"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Torsten Hoefler: "Re:  collectives discussion @LANL"</a>
<li><strong>In reply to:</strong> <a href="0018.php">Matt Leininger: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Edgar Gabriel: "Re:  processor affinity"</a>
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
