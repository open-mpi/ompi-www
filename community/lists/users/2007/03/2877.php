<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 09:14:35 2007" -->
<!-- isoreceived="20070322131435" -->
<!-- sent="Thu, 22 Mar 2007 09:14:02 -0400" -->
<!-- isosent="20070322131402" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes  swapping out" -->
<!-- id="C227F95A.126C%heywood_at_cshl.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BE77B86E-55CC-491B-AFCA-F5219759C987_at_cisco.com" -->
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
<strong>Date:</strong> 2007-03-22 09:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2878.php">Josh Hursey: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2876.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2880.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2880.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I'm using SGE. I also just noticed that when 2 tasks/slots run on a
<br>
4-core node, the 2 tasks are still cycling between run and sleep, with
<br>
higher system time than user time.
<br>
<p>Ompi_info shows the MCA parameter mpi_yield_when_idle to be 0 (aggressive),
<br>
so that suggests the tasks aren't swapping out on bloccking calls.
<br>
<p>Still puzzled.
<br>
<p>Thanks,
<br>
Todd
<br>
<p><p>On 3/22/07 7:36 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Are you using a scheduler on your system?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically, does Open MPI know that you have for process slots
</span><br>
<span class="quotelev1">&gt; on each node?  If you are using a hostfile and didn't specify
</span><br>
<span class="quotelev1">&gt; &quot;slots=4&quot; for each host, Open MPI will think that it's
</span><br>
<span class="quotelev1">&gt; oversubscribing and will therefore call sched_yield() in the depths
</span><br>
<span class="quotelev1">&gt; of its progress engine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2007, at 5:08 PM, Heywood, Todd wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.s. I should have said this this is a pretty course-grained
</span><br>
<span class="quotelev2">&gt;&gt; application,
</span><br>
<span class="quotelev2">&gt;&gt; and netstat doesn't show much communication going on (except in
</span><br>
<span class="quotelev2">&gt;&gt; stages).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/21/07 4:21 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I noticed that my OpenMPI processes are using larger amounts of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than user time (via vmstat, top). I'm running on dual-core, dual-CPU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Opterons, with 4 slots per node, where the program has the nodes to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; themselves. A closer look showed that they are constantly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switching between
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run and sleep states with 4-8 page faults per second.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why would this be? It doesn't happen with 4 sequential jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node, where I get 99% user time, maybe 1% system time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The processes have plenty of memory. This behavior occurs whether
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor/memory affinity or not (there is no oversubscription).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Todd
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2878.php">Josh Hursey: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2876.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2880.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2880.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
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
