<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 18:49:01 2007" -->
<!-- isoreceived="20070611224901" -->
<!-- sent="Tue, 12 Jun 2007 00:50:32 +0200" -->
<!-- isosent="20070611225032" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP connection errors" -->
<!-- id="20070611225032.GY13561_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="645d17210706111455n42c1ea09w1855e6ae78b5fa5b_at_mail.gmail.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 18:50:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3465.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3463.php">Jonathan Underwood: "[OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3463.php">Jonathan Underwood: "[OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3465.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3465.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3466.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jun 11, 2007 at 10:55:17PM +0100, Jonathan Underwood wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<p>Hi!
<br>
<p><span class="quotelev1">&gt; I am seeing problems with a small linux cluster when running OpenMPI
</span><br>
<span class="quotelev1">&gt; jobs. The error message I get is:
</span><br>
<p>Which OMPI version?
<br>
<p><span class="quotelev1">&gt; $ perl -e 'die$!=110'
</span><br>
<span class="quotelev1">&gt; Connection timed out at -e line 1.
</span><br>
<p>Looks pretty much like a routing issue. Can you sniff on eth1 on the
<br>
frontend node?
<br>
<p><span class="quotelev1">&gt; This error message occurs the first time one of the compute nodes,
</span><br>
<span class="quotelev1">&gt; which are on a private network, attempts to send data to the frontend
</span><br>
<p><span class="quotelev1">&gt; In actual fact, it seems that the error occurs the first time a
</span><br>
<span class="quotelev1">&gt; process on the frontend tries to send data to another process on the
</span><br>
<span class="quotelev1">&gt; frontend.
</span><br>
<p>What's the exact problem? compute-node -&gt; frontend? I don't think you
<br>
have two processes on the frontend node, and even if you do, they should
<br>
use shared memory.
<br>
<p><span class="quotelev1">&gt; Any advice would be very welcome
</span><br>
<p>Use tcpdump and/or recompile with debug enabled. In addition, set
<br>
WANT_PEER_DUMP in ompi/mca/btl/tcp/btl_tcp_endpoint.c to 1 (line 120)
<br>
and recompile, thus giving you more debug output.
<br>
<p>Depending on your OMPI version, you can also add
<br>
<p>mpi_preconnect_all=1
<br>
<p>to your ~/.openmpi/mca-params.conf, by this establishing all connections
<br>
during MPI_Init().
<br>
<p>If nothing helps, exclude the frontend from computation.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3465.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3463.php">Jonathan Underwood: "[OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3463.php">Jonathan Underwood: "[OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3465.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3465.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3466.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
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
