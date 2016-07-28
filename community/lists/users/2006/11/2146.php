<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  7 10:10:36 2006" -->
<!-- isoreceived="20061107151036" -->
<!-- sent="Tue, 7 Nov 2006 10:10:26 -0500" -->
<!-- isosent="20061107151026" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="f869b68c0611070710w66b75089va454a5d24ae671eb_at_mail.gmail.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-07 10:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2145.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2143.php">Chevchenkovic Chevchenkovic: "[OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chev
<br>
<p>Interesting question; I too would like to hear about it from the experts in
<br>
this forum. However, off the top of my head, I have the following advise for
<br>
you.
<br>
<p>Yes, you could share the memory between processes using the shm_xxx system
<br>
calls of unix. However, it would be a lot easier if you used a thread
<br>
programming paradigm like pthread. A lot of these overhead would be handled
<br>
for you by the library itself.
<br>
<p>In general, there is not a lot of performance gains by oversubscribing your
<br>
processors (i.e. number of processes &gt; number of CPUs), unless your
<br>
processes are I/O bound and are blocked for a significant amount of time. I
<br>
don't know what your application is, but in the HPC world, such problems are
<br>
rare.
<br>
<p>In general, processes on a shared memory node (i.e. an SMP machine) have a
<br>
significantly higher memory bandwidth and reduced latency, than those across
<br>
a node, even when the interconnect network is RDMA capable (such as
<br>
infiniband)
<br>
<p>Durga
<br>
<p>On 11/7/06, Chevchenkovic Chevchenkovic &lt;chevchenkovic_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;   I had the following setup:
</span><br>
<span class="quotelev1">&gt;  Rank 0 process on node 1 wants to send an array of particular
</span><br>
<span class="quotelev1">&gt; size to Rank 1 process on same node.
</span><br>
<span class="quotelev1">&gt; 1. What are the optimisations that can be done/invoked while running
</span><br>
<span class="quotelev1">&gt; mpirun  to perform this memory to memory transfer efficiently?
</span><br>
<span class="quotelev1">&gt; 2. Is there any performance gain  if 2 processes that are exchanging data
</span><br>
<span class="quotelev1">&gt; arrays are kept on the same node rather than on different nodes connected by
</span><br>
<span class="quotelev1">&gt; infiniband?
</span><br>
<span class="quotelev1">&gt;  Awaiting a reply,
</span><br>
<span class="quotelev1">&gt; -Chev
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2145.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2143.php">Chevchenkovic Chevchenkovic: "[OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
