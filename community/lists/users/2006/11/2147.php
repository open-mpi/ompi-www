<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  7 12:03:00 2006" -->
<!-- isoreceived="20061107170300" -->
<!-- sent="Tue, 7 Nov 2006 17:02:54 +0000" -->
<!-- isosent="20061107170254" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="f058a9c30611070902g1a7e1d5excdf2db7986357652_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1c16cdf90611070132x2e8a5196oc73140c4b11e140e_at_mail.gmail.com" -->
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
<strong>From:</strong> Miguel Figueiredo Mascarenhas Sousa Filipe (<em>miguel.filipe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-07 12:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2148.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2146.php">Durga Choudhury: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2143.php">Chevchenkovic Chevchenkovic: "[OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2148.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2148.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 11/7/06, Chevchenkovic Chevchenkovic &lt;chevchenkovic_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;   I had the following setup:
</span><br>
<span class="quotelev1">&gt;  Rank 0 process on node 1 wants to send an array of particular size to Rank
</span><br>
<span class="quotelev1">&gt; 1 process on same node.
</span><br>
<span class="quotelev1">&gt; 1. What are the optimisations that can be done/invoked while running mpirun
</span><br>
<span class="quotelev1">&gt; to perform this memory to memory transfer efficiently?
</span><br>
<span class="quotelev1">&gt; 2. Is there any performance gain  if 2 processes that are exchanging data
</span><br>
<span class="quotelev1">&gt; arrays are kept on the same node rather than on different nodes connected by
</span><br>
<span class="quotelev1">&gt; infiniband?
</span><br>
<p>if your aplication is on one given node, sharing data is better than
<br>
copying data.
<br>
You can do this with unix shared memory api, or with posix threads api.
<br>
If aplications share the same address space, and if copy is necessary,
<br>
memcpy() is probably the faster way (and ensuring that data is aligned
<br>
in memory).
<br>
However, this by definition does not work on multi-computer
<br>
aplications/systems..
<br>
<p>If you can have:
<br>
<p>1 aplication per node, several threads per node.
<br>
consider using MPI only between aplications, and setup your MPI
<br>
framework to launch one aplication per node.
<br>
<p>program your aplication to use #threads per rank (node), and use posix
<br>
threading model for parallel execution in each node (for instance,
<br>
where #threads == NCPUS) , and use MPI for comunicating between nodes.
<br>
<p>the MPI model assumes you don't have a &quot;shared memory&quot; system..
<br>
therefore it is &quot;message passing&quot; oriented, and not designed to
<br>
perform optimally on shared memory systems (like SMPs, or numa-CCs).
<br>
<p><p>best regards,
<br>
<p><pre>
-- 
Miguel Sousa Filipe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2148.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2146.php">Durga Choudhury: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2143.php">Chevchenkovic Chevchenkovic: "[OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2148.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2148.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
