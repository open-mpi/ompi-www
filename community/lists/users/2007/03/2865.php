<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 17:08:32 2007" -->
<!-- isoreceived="20070321210832" -->
<!-- sent="Wed, 21 Mar 2007 17:08:25 -0400" -->
<!-- isosent="20070321210825" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes  swapping out" -->
<!-- id="C2271709.1245%heywood_at_cshl.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2270C23.123D%heywood_at_cshl.edu" -->
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
<strong>Date:</strong> 2007-03-21 17:08:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
<li><strong>Previous message:</strong> <a href="2864.php">tim gunter: "[OMPI users] deadlock on barrier"</a>
<li><strong>In reply to:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
P.s. I should have said this this is a pretty course-grained application,
<br>
and netstat doesn't show much communication going on (except in stages).
<br>
<p><p>On 3/21/07 4:21 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I noticed that my OpenMPI processes are using larger amounts of system time
</span><br>
<span class="quotelev1">&gt; than user time (via vmstat, top). I'm running on dual-core, dual-CPU
</span><br>
<span class="quotelev1">&gt; Opterons, with 4 slots per node, where the program has the nodes to
</span><br>
<span class="quotelev1">&gt; themselves. A closer look showed that they are constantly switching between
</span><br>
<span class="quotelev1">&gt; run and sleep states with 4-8 page faults per second.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why would this be? It doesn't happen with 4 sequential jobs running on a
</span><br>
<span class="quotelev1">&gt; node, where I get 99% user time, maybe 1% system time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The processes have plenty of memory. This behavior occurs whether I use
</span><br>
<span class="quotelev1">&gt; processor/memory affinity or not (there is no oversubscription).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Todd
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
<li><strong>Next message:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
<li><strong>Previous message:</strong> <a href="2864.php">tim gunter: "[OMPI users] deadlock on barrier"</a>
<li><strong>In reply to:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
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
