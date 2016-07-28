<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 20:53:57 2007" -->
<!-- isoreceived="20070724005357" -->
<!-- sent="Mon, 23 Jul 2007 20:53:43 -0400" -->
<!-- isosent="20070724005343" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance tuning: focus on latency" -->
<!-- id="1D5F93ED-C1DD-4556-ABAB-F77479BD3028_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f8841bfe0707230343r1824ff89ue81ba6b5d5afb27d_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-23 20:53:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI users] type_match_size_f always fails?"</a>
<li><strong>Previous message:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>In reply to:</strong> <a href="3731.php">Biagio Cosenza: "[OMPI users] Performance tuning: focus on latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3757.php">Biagio Cosenza: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Reply:</strong> <a href="3757.php">Biagio Cosenza: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Reply:</strong> <a href="3760.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2007, at 6:43 AM, Biagio Cosenza wrote:
<br>
<p><span class="quotelev1">&gt; I'm working on a parallel real time renderer: an embarassing  
</span><br>
<span class="quotelev1">&gt; parallel problem where latency is the threshold to high perfomance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two observations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I did a simple &quot;ping-pong&quot; test (the master does a Bcast + an  
</span><br>
<span class="quotelev1">&gt; IRecv for each node + a Waitall) similar to effective renderer  
</span><br>
<span class="quotelev1">&gt; workload. Using a cluster of 37 nodes on Gigabit Ethernet, seems  
</span><br>
<span class="quotelev1">&gt; that the latency is usually low (about 1-5 ms), but sometimes there  
</span><br>
<span class="quotelev1">&gt; are some peaks of about 200 ms. I thought that the cause is a  
</span><br>
<span class="quotelev1">&gt; packet retransmission in one of the 37 connections, that blow the  
</span><br>
<span class="quotelev1">&gt; overall performance of the test (of course, the final WaitAll is a  
</span><br>
<span class="quotelev1">&gt; synch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) A research team argues in a paper  that MPI suffers on  
</span><br>
<span class="quotelev1">&gt; dynamically manage latency. They also arguing an interesting  
</span><br>
<span class="quotelev1">&gt; problem about enable/disable Nagle algorithm. (I paste the  
</span><br>
<span class="quotelev1">&gt; interesting paragraph below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have two questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Why my test have these peaks? How can I afford them (I think to  
</span><br>
<span class="quotelev1">&gt; btl tcp params)?
</span><br>
<p>They are probably beyond Open MPI's control -- OMPI mainly does read 
<br>
() and write() down TCP sockets and relies on the kernel to do all  
<br>
the low-level TCP protocol / wire transmission stuff.
<br>
<p>You might want to try increasing your TCP buffer sizes, but I think  
<br>
that the Linux kernel has some built in limits.  Other experts might  
<br>
want to chime in here...
<br>
<p><span class="quotelev1">&gt; 2) When does OpenMPI disable Nagle algorithm? Suppose I DON'T need  
</span><br>
<span class="quotelev1">&gt; that Nagle has to be ON (focusing only on latency), how can I  
</span><br>
<span class="quotelev1">&gt; increase performance?
</span><br>
<p>It looks like we enable Nagle right when TCP BTL connections are  
<br>
made.  Surprisingly, it looks like we don't have a run-time option to  
<br>
turn it off for power-users like you who want to really tweak around.
<br>
<p>If you want to play with it, please edit ompi/mca/btl/tcp/ 
<br>
btl_tcp_endpoint.c.  You'll see the references to TCP_NODELAY in  
<br>
conjunction with setsockopt().  Set the optval to 0 instead of 1.  A  
<br>
simple &quot;make install&quot; in that directory will recompile the TCP  
<br>
component and re-install it (assuming you have done a default build  
<br>
with OMPI components built as standalone plugins).  Let us know what  
<br>
you find.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI users] type_match_size_f always fails?"</a>
<li><strong>Previous message:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>In reply to:</strong> <a href="3731.php">Biagio Cosenza: "[OMPI users] Performance tuning: focus on latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3757.php">Biagio Cosenza: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Reply:</strong> <a href="3757.php">Biagio Cosenza: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Reply:</strong> <a href="3760.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
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
