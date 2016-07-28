<?
$subject_val = "Re: [OMPI users] Execution in multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 14:59:01 2008" -->
<!-- isoreceived="20080929185901" -->
<!-- sent="Mon, 29 Sep 2008 21:01:52 +0200" -->
<!-- isosent="20080929190152" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Execution in multicore machines" -->
<!-- id="48E12620.80908_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080929184651.GB7854_at_brakk.ethz.ch" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 15:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6773.php">Fabian Hänsel: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6773.php">Fabian Hänsel: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jed Brown escribi&#243;:
<br>
<span class="quotelev1">&gt; On Mon 2008-09-29 20:30, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 1) If I use one node (8 cores) the &quot;user&quot; % is around 100% per core. The  
</span><br>
<span class="quotelev2">&gt;&gt; execution time is around 430 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) If I use 2 nodes (4 cores in each node) the &quot;user&quot; % is around 95%  
</span><br>
<span class="quotelev2">&gt;&gt; per core and the &quot;sys&quot; % is 5%. The execution time is around 220 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) If I use 4 nodes (*2* cores in each node) the &quot;user&quot; % is around %85  
</span><br>
<span class="quotelev2">&gt;&gt; per core and the &quot;sys&quot; % is 15%. The execution time is around 200 
</span><br>
<span class="quotelev2">&gt;&gt; seconds.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Do you mean 2 cores per node (1 core per socket).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Exactly, sorry.
<br>
<span class="quotelev2">&gt;&gt; Well... the questions are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A) The execution time in case &quot;1&quot; should be smaller (only sm  
</span><br>
<span class="quotelev2">&gt;&gt; communication, no?) than case &quot;2&quot; and &quot;3&quot;, no? Cache problems?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Is this benchmark memory bandwidth limited?  Your results are fairly
</span><br>
<span class="quotelev1">&gt; typical for sparse matrix kernels.  One core can more or less saturate
</span><br>
<span class="quotelev1">&gt; the bus on its own, two cores can overlap memory access so it doesn't
</span><br>
<span class="quotelev1">&gt; hurt too much, more than two and they are all waiting on memory.  The
</span><br>
<span class="quotelev1">&gt; extra cores are cheaper than more sockets but they don't do much/any
</span><br>
<span class="quotelev1">&gt; good for many workloads.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; B) Why the &quot;sys&quot; time while using communication inter nodes? NIC driver?  
</span><br>
<span class="quotelev2">&gt;&gt; Why this time increase when I balance the load across the nodes?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Messages over Ethernet cost more than messages in shared memory.  When
</span><br>
<span class="quotelev1">&gt; you only use 1 core per socket, the application is faster because the
</span><br>
<span class="quotelev1">&gt; single thread has the full memory bandwidth to itself, however MPI needs
</span><br>
<span class="quotelev1">&gt; to move more data over the wire so that phase costs more.  If your
</span><br>
<span class="quotelev1">&gt; network was faster (e.g. InfiniBand) you could expect the communication
</span><br>
<span class="quotelev1">&gt; to stay quite cheap even with only one process per node.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The nodes have 2 sockets with 4 cores in each.
<br>
<p>In other words... in this case (&quot;2&quot; and &quot;3&quot;), the concurrency for the 
<br>
bus/memory by more than 2 tasks is worser than the Giga Ethernet?
<br>
<p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6773.php">Fabian Hänsel: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6773.php">Fabian Hänsel: "Re: [OMPI users] Execution in multicore machines"</a>
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
