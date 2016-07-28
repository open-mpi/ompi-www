<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 16:22:11 2007" -->
<!-- isoreceived="20070321202211" -->
<!-- sent="Wed, 21 Mar 2007 16:21:55 -0400" -->
<!-- isosent="20070321202155" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="[OMPI users] MPI processes  swapping out" -->
<!-- id="C2270C23.123D%heywood_at_cshl.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BA29EA15-8D34-403C-B12F-86E278961330_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-03-21 16:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2864.php">tim gunter: "[OMPI users] deadlock on barrier"</a>
<li><strong>Previous message:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>In reply to:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed that my OpenMPI processes are using larger amounts of system time
<br>
than user time (via vmstat, top). I'm running on dual-core, dual-CPU
<br>
Opterons, with 4 slots per node, where the program has the nodes to
<br>
themselves. A closer look showed that they are constantly switching between
<br>
run and sleep states with 4-8 page faults per second.
<br>
<p>Why would this be? It doesn't happen with 4 sequential jobs running on a
<br>
node, where I get 99% user time, maybe 1% system time.
<br>
<p>The processes have plenty of memory. This behavior occurs whether I use
<br>
processor/memory affinity or not (there is no oversubscription).
<br>
<p>Thanks,
<br>
<p>Todd
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2864.php">tim gunter: "[OMPI users] deadlock on barrier"</a>
<li><strong>Previous message:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>In reply to:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
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
