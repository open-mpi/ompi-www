<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 10:08:16 2005" -->
<!-- isoreceived="20050718150816" -->
<!-- sent="Mon, 18 Jul 2005 17:08:06 +0200" -->
<!-- isosent="20050718150806" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="42DBC5D6.30700_at_hlrs.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="93d89e9e39bf362bd57c6ff530f6d5c2_at_lanl.gov" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-18 10:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0020.php">Torsten Hoefler: "Re:  collectives discussion @LANL"</a>
<li><strong>Previous message:</strong> <a href="0018.php">Matt Leininger: "Re:  processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0023.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0023.php">Jeff Squyres: "Re:  processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have currently Barbara Chapman from the University of Houston as a 
<br>
guest scientist here at Stuttgart. Most of you might now, that Barbara 
<br>
is working on compiler design and OpenMP issues. This afternoon she 
<br>
dropped in my office and asked me, whether the Open MPI group has 
<br>
thought/discussed processor affinity issues up to now (which we just did 
<br>
:-) ).
<br>
<p>Anyway, I just wanted to point out, that various people from the OpenMP 
<br>
community have been working/are still working on this issue, and that it 
<br>
might be interesting to exchange information and maybe coordinate the 
<br>
approaches. I cc'ed Barbara therefore also on this email...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Rich L. Graham wrote:
<br>
<span class="quotelev1">&gt; On Jul 18, 2005, at 6:28 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;On Jul 18, 2005, at 2:50 AM, Matt Leininger wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Generally speaking, if you launch &lt;=N processes in a job on a node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;(where N == number of CPUs on that node), then we set processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;affinity.  We set each process's affinity to the CPU number according
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;to the VPID ordering of the procs in that job on that node.  So if 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;launch VPIDs 5, 6, 7, 8 on a node, 5 would go to processor 0, 6 would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;go to processor 1, etc. (it's an easy, locally-determined ordering).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   You'd need to be careful with dual-core cpus.  Say you launch a 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;task MPI job on a 4-socket dual core Opteron.  You'd want to schedule
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the tasks on nodes 0, 2, 4, 6 - not 0, 1, 2, 3 to get maximum memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;bandwidth to each MPI task.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;With the potential for non-trivial logic like this, perhaps the extra
</span><br>
<span class="quotelev2">&gt;&gt;work for a real framework would be justified, then.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Also, how would this work with hybrid MPI+threading (either 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;pthreads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;or OpenMP) applications?  Let's say you have an 8 or 16 cpu node and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;start up 2 MPI tasks with 4 compute threads in each task.  The optimum
</span><br>
<span class="quotelev3">&gt;&gt;&gt;layout may not be running the MPI tasks on cpu's 0 and 1.  Several
</span><br>
<span class="quotelev3">&gt;&gt;&gt;hybrid applications that ran on ASC White and now Purple will have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;these
</span><br>
<span class="quotelev3">&gt;&gt;&gt;requirements.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hum.  Good question.  The MPI API doesn't really address this -- the
</span><br>
<span class="quotelev2">&gt;&gt;MPI API is not aware of additional threads that are created until you
</span><br>
<span class="quotelev2">&gt;&gt;call an MPI function (and even then, we're not currently checking which
</span><br>
<span class="quotelev2">&gt;&gt;thread is calling -- that would just add latency).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;What do these applications do right now?  Do they set their own
</span><br>
<span class="quotelev2">&gt;&gt;processor / memory affinity?  This might actually be outside the scope
</span><br>
<span class="quotelev2">&gt;&gt;of MPI...?  (I'mm not trying to shrug off responsibility, but this
</span><br>
<span class="quotelev2">&gt;&gt;might be a case where the MPI simply doesn't have enough information,
</span><br>
<span class="quotelev2">&gt;&gt;and to get that information [e.g., via MPI attributes or MPI info
</span><br>
<span class="quotelev2">&gt;&gt;arguments] would be more hassle than the user just setting the affinity
</span><br>
<span class="quotelev2">&gt;&gt;themselves...?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you set things up such that you can specify input parameters on where
</span><br>
<span class="quotelev1">&gt; to put each process, you have the flexibility you want.  The locality 
</span><br>
<span class="quotelev1">&gt; API's
</span><br>
<span class="quotelev1">&gt; I have seen all mimiced the IRIX API, which had these capabilities.  If 
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; want some ideas, look at LA-MPI, it does this - the implementation is
</span><br>
<span class="quotelev1">&gt; pretty strange (just he coding), but it is there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;{+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;{+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt;{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
-- 
======================================================================
Dr.-Ing. Edgar Gabriel
Clusters and Distributed Units
High Performance Computing Center Stuttgart (HLRS)
University of Stuttgart
Tel: +49 711 685 8039                <a href="http://www.hlrs.de/people/gabriel">http://www.hlrs.de/people/gabriel</a>
Fax: +49 711 678 7626                e-mail:gabriel_at_[hidden]
======================================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0020.php">Torsten Hoefler: "Re:  collectives discussion @LANL"</a>
<li><strong>Previous message:</strong> <a href="0018.php">Matt Leininger: "Re:  processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0023.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0023.php">Jeff Squyres: "Re:  processor affinity"</a>
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
