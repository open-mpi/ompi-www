<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 06:35:16 2006" -->
<!-- isoreceived="20061026103516" -->
<!-- sent="Thu, 26 Oct 2006 12:34:52 +0200" -->
<!-- isosent="20061026103452" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] socket usage" -->
<!-- id="20061026103452.GD923_at_ringo.informatik.tu-chemnitz.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45408306.7000204_at_dolphinics.com" -->
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
<strong>From:</strong> Torsten Hoefler (<em>torsten.hoefler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-26 06:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1151.php">Donald Kerr: "[OMPI devel] MCA_BTL_DES_FLAGS_PRIORITY  usage"</a>
<li><strong>Previous message:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
<li><strong>In reply to:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joachim,
<br>
<span class="quotelev3">&gt; &gt;&gt; Is there a formula to calculate the number of socket connections per 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node (S) that an OpenMPI application needs for running (via sockets) on 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; N nodes with P processes each? I guess something like
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; S = P * (N-1)*P
</span><br>
<span class="quotelev2">&gt; &gt; I would say that S=(N-1)*P (why do you assume that S=O(P^2)?) is an
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For N nodes running P processes each, each single process sees (N-1)*P 
</span><br>
<span class="quotelev1">&gt; remote processes. I'd say this results in (N-1)*P^2 connections *per node*.
</span><br>
you're right, I didn't read the *per node* :). 
<br>
<p><span class="quotelev2">&gt; &gt; upper bound for the MPI layer (each rank connects to all other ranks
</span><br>
<span class="quotelev2">&gt; &gt; besides the ones on its node (connect via sm) and there is no connection
</span><br>
<span class="quotelev2">&gt; &gt; 'aggregation' on a single node yet).  However, the connection
</span><br>
<span class="quotelev2">&gt; &gt; establishment is lazy (each connection is established with the first
</span><br>
<span class="quotelev2">&gt; &gt; send - see btl_tcp_endpoint.c:495). So you'll have the fully-connected
</span><br>
<span class="quotelev2">&gt; &gt; case after an MPI_Alltoall with a sufficient size or a similar send/recv
</span><br>
<span class="quotelev2">&gt; &gt; pattern :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; O.k. But what happens if a connection can not be established due to 
</span><br>
<span class="quotelev1">&gt; resource limits? Are existing connections closed? O
</span><br>
No, connections are never closed afaik (there is also the problem to
<br>
determine which connection should be closed :). If the connection can
<br>
not be established (e.g. socket() or connect() returns values &lt; 0), the
<br>
peer is marked as not reachable and the send fails (ompi exits with an
<br>
error).
<br>
<p><span class="quotelev2">&gt; &gt; You could try to use the hierarch collective component to minimize the
</span><br>
<span class="quotelev2">&gt; &gt; number of active connections (open sockets) per node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, this also can help to increase throughput for small data size.
</span><br>
sure, and it could avoid potential flow-control problems for large data.
<br>
<p>Best Regards,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
&quot;It is easier to write an incorrect program than understand a correct
one.&quot;     Alan J. Perlis.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1151.php">Donald Kerr: "[OMPI devel] MCA_BTL_DES_FLAGS_PRIORITY  usage"</a>
<li><strong>Previous message:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
<li><strong>In reply to:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
<!-- nextthread="start" -->
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
