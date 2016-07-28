<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 13:30:25 2007" -->
<!-- isoreceived="20070322173025" -->
<!-- sent="Thu, 22 Mar 2007 13:30:19 -0400" -->
<!-- isosent="20070322173019" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes  swapping out" -->
<!-- id="C228356B.127C%heywood_at_cshl.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2280899.2216%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Heywood, Todd (<em>heywood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 13:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2884.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2882.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2880.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2884.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2884.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2904.php">Rolf Vandevaart: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Well, according to the FAQ, aggressive mode can be &quot;forced&quot; so I did try
<br>
setting OMPI_MCA_mpi_yield_when_idle=0 before running. I also tried turning
<br>
processor/memory affinity on. Efffects were minor. The MPI tasks still cycle
<br>
bewteen run and sleep states, driving up system time well over user time.
<br>
<p>Mpstat shows SGE is indeed giving 4 or 2 slots per node as approporiate
<br>
(depending on memory) and the MPI tasks are using 4 or 2 cores, but to be
<br>
sure, I also tried running directly with a hostfile with slots=4 or slots=2.
<br>
The same behavior occurs.
<br>
<p>This behavior is a function of the size of the job. I.e. As I scale from 200
<br>
to 800 tasks the run/sleep cycling increases, so that system time grows from
<br>
maybe half the user time to maybe 5 times user time.
<br>
<p>This is for TCP/gigE.
<br>
<p>Todd
<br>
<p><p>On 3/22/07 12:19 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just for clarification: ompi_info only shows the *default* value of the MCA
</span><br>
<span class="quotelev1">&gt; parameter. In this case, mpi_yield_when_idle defaults to aggressive, but
</span><br>
<span class="quotelev1">&gt; that value is reset internally if the system sees an &quot;oversubscribed&quot;
</span><br>
<span class="quotelev1">&gt; condition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue here isn't how many cores are on the node, but rather how many
</span><br>
<span class="quotelev1">&gt; were specifically allocated to this job. If the allocation wasn't at least 2
</span><br>
<span class="quotelev1">&gt; (in your example), then we would automatically reset mpi_yield_when_idle to
</span><br>
<span class="quotelev1">&gt; be non-aggressive, regardless of how many cores are actually on the node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/22/07 7:14 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I'm using SGE. I also just noticed that when 2 tasks/slots run on a
</span><br>
<span class="quotelev2">&gt;&gt; 4-core node, the 2 tasks are still cycling between run and sleep, with
</span><br>
<span class="quotelev2">&gt;&gt; higher system time than user time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ompi_info shows the MCA parameter mpi_yield_when_idle to be 0 (aggressive),
</span><br>
<span class="quotelev2">&gt;&gt; so that suggests the tasks aren't swapping out on bloccking calls.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Still puzzled.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Todd
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/22/07 7:36 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you using a scheduler on your system?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More specifically, does Open MPI know that you have for process slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on each node?  If you are using a hostfile and didn't specify
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;slots=4&quot; for each host, Open MPI will think that it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversubscribing and will therefore call sched_yield() in the depths
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of its progress engine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 21, 2007, at 5:08 PM, Heywood, Todd wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.s. I should have said this this is a pretty course-grained
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and netstat doesn't show much communication going on (except in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stages).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3/21/07 4:21 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I noticed that my OpenMPI processes are using larger amounts of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; system time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; than user time (via vmstat, top). I'm running on dual-core, dual-CPU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Opterons, with 4 slots per node, where the program has the nodes to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; themselves. A closer look showed that they are constantly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; switching between
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run and sleep states with 4-8 page faults per second.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Why would this be? It doesn't happen with 4 sequential jobs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; running on a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node, where I get 99% user time, maybe 1% system time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The processes have plenty of memory. This behavior occurs whether
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor/memory affinity or not (there is no oversubscription).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Todd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="2884.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2882.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2880.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2884.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2884.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2904.php">Rolf Vandevaart: "Re: [OMPI users] MPI processes  swapping out"</a>
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
