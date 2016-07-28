<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 05:42:46 2006" -->
<!-- isoreceived="20061026094246" -->
<!-- sent="Thu, 26 Oct 2006 11:42:30 +0200" -->
<!-- isosent="20061026094230" -->
<!-- name="Joachim Worringen" -->
<!-- email="joachim_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] socket usage" -->
<!-- id="45408306.7000204_at_dolphinics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20061026081253.GA19210_at_ringo.informatik.tu-chemnitz.de" -->
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
<strong>From:</strong> Joachim Worringen (<em>joachim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-26 05:42:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1150.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<li><strong>Previous message:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<li><strong>In reply to:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1150.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<li><strong>Reply:</strong> <a href="1150.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Torsten Hoefler wrote:
<br>
<span class="quotelev1">&gt; Hi Joachim,
</span><br>
<span class="quotelev2">&gt;&gt; Is there a formula to calculate the number of socket connections per 
</span><br>
<span class="quotelev2">&gt;&gt; node (S) that an OpenMPI application needs for running (via sockets) on 
</span><br>
<span class="quotelev2">&gt;&gt; N nodes with P processes each? I guess something like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; S = P * (N-1)*P
</span><br>
<span class="quotelev1">&gt; I would say that S=(N-1)*P (why do you assume that S=O(P^2)?) is an
</span><br>
<p>For N nodes running P processes each, each single process sees (N-1)*P 
<br>
remote processes. I'd say this results in (N-1)*P^2 connections *per node*.
<br>
<p><span class="quotelev1">&gt; upper bound for the MPI layer (each rank connects to all other ranks
</span><br>
<span class="quotelev1">&gt; besides the ones on its node (connect via sm) and there is no connection
</span><br>
<span class="quotelev1">&gt; 'aggregation' on a single node yet).  However, the connection
</span><br>
<span class="quotelev1">&gt; establishment is lazy (each connection is established with the first
</span><br>
<span class="quotelev1">&gt; send - see btl_tcp_endpoint.c:495). So you'll have the fully-connected
</span><br>
<span class="quotelev1">&gt; case after an MPI_Alltoall with a sufficient size or a similar send/recv
</span><br>
<span class="quotelev1">&gt; pattern :).
</span><br>
<p>O.k. But what happens if a connection can not be established due to 
<br>
resource limits? Are existing connections closed? O
<br>
<p><span class="quotelev1">&gt; You could try to use the hierarch collective component to minimize the
</span><br>
<span class="quotelev1">&gt; number of active connections (open sockets) per node.
</span><br>
<p>Yes, this also can help to increase throughput for small data size.
<br>
<p>&nbsp;&nbsp;regards, Joachim
<br>
<p><pre>
-- 
Joachim Worringen, Software Architect, Dolphin Interconnect Solutions
phone ++49/(0)228/324 08 17 - <a href="http://www.dolphinics.com">http://www.dolphinics.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1150.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<li><strong>Previous message:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<li><strong>In reply to:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1150.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<li><strong>Reply:</strong> <a href="1150.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
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
