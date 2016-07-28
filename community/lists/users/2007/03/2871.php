<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 07:36:21 2007" -->
<!-- isoreceived="20070322113621" -->
<!-- sent="Thu, 22 Mar 2007 07:36:07 -0400" -->
<!-- isosent="20070322113607" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes  swapping out" -->
<!-- id="BE77B86E-55CC-491B-AFCA-F5219759C987_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2271709.1245%heywood_at_cshl.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 07:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2872.php">Jeff Squyres: "Re: [OMPI users] threading"</a>
<li><strong>Previous message:</strong> <a href="2870.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>In reply to:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you using a scheduler on your system?
<br>
<p>More specifically, does Open MPI know that you have for process slots  
<br>
on each node?  If you are using a hostfile and didn't specify  
<br>
&quot;slots=4&quot; for each host, Open MPI will think that it's  
<br>
oversubscribing and will therefore call sched_yield() in the depths  
<br>
of its progress engine.
<br>
<p><p>On Mar 21, 2007, at 5:08 PM, Heywood, Todd wrote:
<br>
<p><span class="quotelev1">&gt; P.s. I should have said this this is a pretty course-grained  
</span><br>
<span class="quotelev1">&gt; application,
</span><br>
<span class="quotelev1">&gt; and netstat doesn't show much communication going on (except in  
</span><br>
<span class="quotelev1">&gt; stages).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/21/07 4:21 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I noticed that my OpenMPI processes are using larger amounts of  
</span><br>
<span class="quotelev2">&gt;&gt; system time
</span><br>
<span class="quotelev2">&gt;&gt; than user time (via vmstat, top). I'm running on dual-core, dual-CPU
</span><br>
<span class="quotelev2">&gt;&gt; Opterons, with 4 slots per node, where the program has the nodes to
</span><br>
<span class="quotelev2">&gt;&gt; themselves. A closer look showed that they are constantly  
</span><br>
<span class="quotelev2">&gt;&gt; switching between
</span><br>
<span class="quotelev2">&gt;&gt; run and sleep states with 4-8 page faults per second.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why would this be? It doesn't happen with 4 sequential jobs  
</span><br>
<span class="quotelev2">&gt;&gt; running on a
</span><br>
<span class="quotelev2">&gt;&gt; node, where I get 99% user time, maybe 1% system time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The processes have plenty of memory. This behavior occurs whether  
</span><br>
<span class="quotelev2">&gt;&gt; I use
</span><br>
<span class="quotelev2">&gt;&gt; processor/memory affinity or not (there is no oversubscription).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Todd
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2872.php">Jeff Squyres: "Re: [OMPI users] threading"</a>
<li><strong>Previous message:</strong> <a href="2870.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>In reply to:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
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
