<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 19:05:42 2007" -->
<!-- isoreceived="20070611230542" -->
<!-- sent="Tue, 12 Jun 2007 00:05:37 +0100" -->
<!-- isosent="20070611230537" -->
<!-- name="Jonathan Underwood" -->
<!-- email="jonathan.underwood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP connection errors" -->
<!-- id="645d17210706111605j29db23y73dc239a64c4ad4b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070611225032.GY13561_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Jonathan Underwood (<em>jonathan.underwood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 19:05:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3466.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3466.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Adrian,
<br>
<p>On 11/06/07, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Which OMPI version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>1.2.2
<br>
<p><span class="quotelev2">&gt; &gt; $ perl -e 'die$!=110'
</span><br>
<span class="quotelev2">&gt; &gt; Connection timed out at -e line 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks pretty much like a routing issue. Can you sniff on eth1 on the
</span><br>
<span class="quotelev1">&gt; frontend node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't have root access, so am afraid not.
<br>
<p><span class="quotelev2">&gt; &gt; This error message occurs the first time one of the compute nodes,
</span><br>
<span class="quotelev2">&gt; &gt; which are on a private network, attempts to send data to the frontend
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In actual fact, it seems that the error occurs the first time a
</span><br>
<span class="quotelev2">&gt; &gt; process on the frontend tries to send data to another process on the
</span><br>
<span class="quotelev2">&gt; &gt; frontend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's the exact problem? compute-node -&gt; frontend? I don't think you
</span><br>
<span class="quotelev1">&gt; have two processes on the frontend node, and even if you do, they should
</span><br>
<span class="quotelev1">&gt; use shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any advice would be very welcome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use tcpdump and/or recompile with debug enabled. In addition, set
</span><br>
<span class="quotelev1">&gt; WANT_PEER_DUMP in ompi/mca/btl/tcp/btl_tcp_endpoint.c to 1 (line 120)
</span><br>
<span class="quotelev1">&gt; and recompile, thus giving you more debug output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on your OMPI version, you can also add
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_preconnect_all=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to your ~/.openmpi/mca-params.conf, by this establishing all connections
</span><br>
<span class="quotelev1">&gt; during MPI_Init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, will try these things.
<br>
<p><span class="quotelev1">&gt; If nothing helps, exclude the frontend from computation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK.
<br>
<p>Thanks for the suggestions!
<br>
<p>Joanthan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3466.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3466.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
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
