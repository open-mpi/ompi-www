<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 07:45:51 2007" -->
<!-- isoreceived="20070725114551" -->
<!-- sent="Wed, 25 Jul 2007 13:45:41 +0200" -->
<!-- isosent="20070725114541" -->
<!-- name="Biagio Cosenza" -->
<!-- email="biacos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance tuning: focus on latency" -->
<!-- id="f8841bfe0707250445i4f9964fcuf947072e396436ae_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1D5F93ED-C1DD-4556-ABAB-F77479BD3028_at_cisco.com" -->
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
<strong>From:</strong> Biagio Cosenza (<em>biacos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 07:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3758.php">Jeff Squyres: "Re: [OMPI users] openmpi support ignored"</a>
<li><strong>Previous message:</strong> <a href="3756.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>In reply to:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3759.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Reply:</strong> <a href="3759.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, I did what you suggested
<br>
<p>However no noticeable changes seem to happen. Same peaks and same latency
<br>
times.
<br>
<p>Are you sure that for disabling the Nagle's algorithm is needed just
<br>
changing optval to 0?
<br>
I saw that, in btl_tcp_endpoint.c, the optval assignement is inside a
<br>
#if defined(TCP_NODELAY) block.
<br>
<p>Where does this macro can be defined?
<br>
Any other idea for manage latency peaks?
<br>
<p>Biagio
<br>
<p><p>On 7/24/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2007, at 6:43 AM, Biagio Cosenza wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm working on a parallel real time renderer: an embarassing
</span><br>
<span class="quotelev2">&gt; &gt; parallel problem where latency is the threshold to high perfomance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Two observations:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) I did a simple &quot;ping-pong&quot; test (the master does a Bcast + an
</span><br>
<span class="quotelev2">&gt; &gt; IRecv for each node + a Waitall) similar to effective renderer
</span><br>
<span class="quotelev2">&gt; &gt; workload. Using a cluster of 37 nodes on Gigabit Ethernet, seems
</span><br>
<span class="quotelev2">&gt; &gt; that the latency is usually low (about 1-5 ms), but sometimes there
</span><br>
<span class="quotelev2">&gt; &gt; are some peaks of about 200 ms. I thought that the cause is a
</span><br>
<span class="quotelev2">&gt; &gt; packet retransmission in one of the 37 connections, that blow the
</span><br>
<span class="quotelev2">&gt; &gt; overall performance of the test (of course, the final WaitAll is a
</span><br>
<span class="quotelev2">&gt; &gt; synch).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) A research team argues in a paper  that MPI suffers on
</span><br>
<span class="quotelev2">&gt; &gt; dynamically manage latency. They also arguing an interesting
</span><br>
<span class="quotelev2">&gt; &gt; problem about enable/disable Nagle algorithm. (I paste the
</span><br>
<span class="quotelev2">&gt; &gt; interesting paragraph below)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I have two questions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) Why my test have these peaks? How can I afford them (I think to
</span><br>
<span class="quotelev2">&gt; &gt; btl tcp params)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They are probably beyond Open MPI's control -- OMPI mainly does read
</span><br>
<span class="quotelev1">&gt; () and write() down TCP sockets and relies on the kernel to do all
</span><br>
<span class="quotelev1">&gt; the low-level TCP protocol / wire transmission stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to try increasing your TCP buffer sizes, but I think
</span><br>
<span class="quotelev1">&gt; that the Linux kernel has some built in limits.  Other experts might
</span><br>
<span class="quotelev1">&gt; want to chime in here...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) When does OpenMPI disable Nagle algorithm? Suppose I DON'T need
</span><br>
<span class="quotelev2">&gt; &gt; that Nagle has to be ON (focusing only on latency), how can I
</span><br>
<span class="quotelev2">&gt; &gt; increase performance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like we enable Nagle right when TCP BTL connections are
</span><br>
<span class="quotelev1">&gt; made.  Surprisingly, it looks like we don't have a run-time option to
</span><br>
<span class="quotelev1">&gt; turn it off for power-users like you who want to really tweak around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to play with it, please edit ompi/mca/btl/tcp/
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint.c.  You'll see the references to TCP_NODELAY in
</span><br>
<span class="quotelev1">&gt; conjunction with setsockopt().  Set the optval to 0 instead of 1.  A
</span><br>
<span class="quotelev1">&gt; simple &quot;make install&quot; in that directory will recompile the TCP
</span><br>
<span class="quotelev1">&gt; component and re-install it (assuming you have done a default build
</span><br>
<span class="quotelev1">&gt; with OMPI components built as standalone plugins).  Let us know what
</span><br>
<span class="quotelev1">&gt; you find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3757/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3758.php">Jeff Squyres: "Re: [OMPI users] openmpi support ignored"</a>
<li><strong>Previous message:</strong> <a href="3756.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>In reply to:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3759.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Reply:</strong> <a href="3759.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
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
