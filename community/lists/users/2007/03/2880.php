<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 12:19:15 2007" -->
<!-- isoreceived="20070322161915" -->
<!-- sent="Thu, 22 Mar 2007 10:19:05 -0600" -->
<!-- isosent="20070322161905" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes  swapping out" -->
<!-- id="C2280899.2216%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C227F95A.126C%heywood_at_cshl.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 12:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2881.php">Marcus G. Daniels: "[OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>In reply to:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just for clarification: ompi_info only shows the *default* value of the MCA
<br>
parameter. In this case, mpi_yield_when_idle defaults to aggressive, but
<br>
that value is reset internally if the system sees an &quot;oversubscribed&quot;
<br>
condition.
<br>
<p>The issue here isn't how many cores are on the node, but rather how many
<br>
were specifically allocated to this job. If the allocation wasn't at least 2
<br>
(in your example), then we would automatically reset mpi_yield_when_idle to
<br>
be non-aggressive, regardless of how many cores are actually on the node.
<br>
<p>Ralph
<br>
<p><p>On 3/22/07 7:14 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I'm using SGE. I also just noticed that when 2 tasks/slots run on a
</span><br>
<span class="quotelev1">&gt; 4-core node, the 2 tasks are still cycling between run and sleep, with
</span><br>
<span class="quotelev1">&gt; higher system time than user time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ompi_info shows the MCA parameter mpi_yield_when_idle to be 0 (aggressive),
</span><br>
<span class="quotelev1">&gt; so that suggests the tasks aren't swapping out on bloccking calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still puzzled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Todd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/22/07 7:36 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you using a scheduler on your system?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More specifically, does Open MPI know that you have for process slots
</span><br>
<span class="quotelev2">&gt;&gt; on each node?  If you are using a hostfile and didn't specify
</span><br>
<span class="quotelev2">&gt;&gt; &quot;slots=4&quot; for each host, Open MPI will think that it's
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribing and will therefore call sched_yield() in the depths
</span><br>
<span class="quotelev2">&gt;&gt; of its progress engine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2007, at 5:08 PM, Heywood, Todd wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.s. I should have said this this is a pretty course-grained
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and netstat doesn't show much communication going on (except in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stages).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/21/07 4:21 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I noticed that my OpenMPI processes are using larger amounts of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system time
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than user time (via vmstat, top). I'm running on dual-core, dual-CPU
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Opterons, with 4 slots per node, where the program has the nodes to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; themselves. A closer look showed that they are constantly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; switching between
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run and sleep states with 4-8 page faults per second.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why would this be? It doesn't happen with 4 sequential jobs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node, where I get 99% user time, maybe 1% system time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The processes have plenty of memory. This behavior occurs whether
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor/memory affinity or not (there is no oversubscription).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Todd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2881.php">Marcus G. Daniels: "[OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>In reply to:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
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
