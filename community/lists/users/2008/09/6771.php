<?
$subject_val = "Re: [OMPI users] Execution in multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 14:46:59 2008" -->
<!-- isoreceived="20080929184659" -->
<!-- sent="Mon, 29 Sep 2008 20:46:51 +0200" -->
<!-- isosent="20080929184651" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Execution in multicore machines" -->
<!-- id="20080929184651.GB7854_at_brakk.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48E11ED5.2060808_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Execution in multicore machines<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 14:46:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6772.php">Leonardo Fialho: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6772.php">Leonardo Fialho: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6772.php">Leonardo Fialho: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon 2008-09-29 20:30, Leonardo Fialho wrote:
<br>
<span class="quotelev1">&gt; 1) If I use one node (8 cores) the &quot;user&quot; % is around 100% per core. The  
</span><br>
<span class="quotelev1">&gt; execution time is around 430 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) If I use 2 nodes (4 cores in each node) the &quot;user&quot; % is around 95%  
</span><br>
<span class="quotelev1">&gt; per core and the &quot;sys&quot; % is 5%. The execution time is around 220 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) If I use 4 nodes (1 cores in each node) the &quot;user&quot; % is around %85  
</span><br>
<span class="quotelev1">&gt; per core and the &quot;sys&quot; % is 15%. The execution time is around 200 
</span><br>
<span class="quotelev1">&gt; seconds.
</span><br>
<p>Do you mean 2 cores per node (1 core per socket).
<br>
<p><span class="quotelev1">&gt; Well... the questions are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) The execution time in case &quot;1&quot; should be smaller (only sm  
</span><br>
<span class="quotelev1">&gt; communication, no?) than case &quot;2&quot; and &quot;3&quot;, no? Cache problems?
</span><br>
<p>Is this benchmark memory bandwidth limited?  Your results are fairly
<br>
typical for sparse matrix kernels.  One core can more or less saturate
<br>
the bus on its own, two cores can overlap memory access so it doesn't
<br>
hurt too much, more than two and they are all waiting on memory.  The
<br>
extra cores are cheaper than more sockets but they don't do much/any
<br>
good for many workloads.
<br>
<p><span class="quotelev1">&gt; B) Why the &quot;sys&quot; time while using communication inter nodes? NIC driver?  
</span><br>
<span class="quotelev1">&gt; Why this time increase when I balance the load across the nodes?
</span><br>
<p>Messages over Ethernet cost more than messages in shared memory.  When
<br>
you only use 1 core per socket, the application is faster because the
<br>
single thread has the full memory bandwidth to itself, however MPI needs
<br>
to move more data over the wire so that phase costs more.  If your
<br>
network was faster (e.g. InfiniBand) you could expect the communication
<br>
to stay quite cheap even with only one process per node.
<br>
<p>Jed
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6771/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6772.php">Leonardo Fialho: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6772.php">Leonardo Fialho: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6772.php">Leonardo Fialho: "Re: [OMPI users] Execution in multicore machines"</a>
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
