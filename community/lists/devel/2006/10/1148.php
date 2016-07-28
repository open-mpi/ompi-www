<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 04:13:12 2006" -->
<!-- isoreceived="20061026081312" -->
<!-- sent="Thu, 26 Oct 2006 10:12:54 +0200" -->
<!-- isosent="20061026081254" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] socket usage" -->
<!-- id="20061026081253.GA19210_at_ringo.informatik.tu-chemnitz.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="453F162B.5010306_at_dolphinics.com" -->
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
<strong>Date:</strong> 2006-10-26 04:12:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
<li><strong>Previous message:</strong> <a href="1147.php">Adrian Knoth: "[OMPI devel] IPv6 code uploaded to svn"</a>
<li><strong>In reply to:</strong> <a href="1139.php">Joachim Worringen: "[OMPI devel] socket usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
<li><strong>Reply:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joachim,
<br>
<span class="quotelev1">&gt; Is there a formula to calculate the number of socket connections per 
</span><br>
<span class="quotelev1">&gt; node (S) that an OpenMPI application needs for running (via sockets) on 
</span><br>
<span class="quotelev1">&gt; N nodes with P processes each? I guess something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; S = P * (N-1)*P
</span><br>
I would say that S=(N-1)*P (why do you assume that S=O(P^2)?) is an
<br>
upper bound for the MPI layer (each rank connects to all other ranks
<br>
besides the ones on its node (connect via sm) and there is no connection
<br>
'aggregation' on a single node yet).  However, the connection
<br>
establishment is lazy (each connection is established with the first
<br>
send - see btl_tcp_endpoint.c:495). So you'll have the fully-connected
<br>
case after an MPI_Alltoall with a sufficient size or a similar send/recv
<br>
pattern :).
<br>
<p>You could try to use the hierarch collective component to minimize the
<br>
number of active connections (open sockets) per node.
<br>
<p><span class="quotelev1">&gt; but what about the daemons etc.? Let's assume only a single interface is 
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
Ralph answered on this. They use own sockets, so these could be simply
<br>
added to S.
<br>
<p>Regards,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: ----- pgp: <a href="http://www.unixer.de/htor-key.asc">http://www.unixer.de/htor-key.asc</a> -----
&quot;A designer knows he has arrived at perfection not when there is no            
 longer anything to add, but when there is no longer anything to take           
 away.&quot; - Antoine de Saint-Exupery                                              
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
<li><strong>Previous message:</strong> <a href="1147.php">Adrian Knoth: "[OMPI devel] IPv6 code uploaded to svn"</a>
<li><strong>In reply to:</strong> <a href="1139.php">Joachim Worringen: "[OMPI devel] socket usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
<li><strong>Reply:</strong> <a href="1149.php">Joachim Worringen: "Re: [OMPI devel] socket usage"</a>
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
