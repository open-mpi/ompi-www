<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 18:05:25 2006" -->
<!-- isoreceived="20061023220525" -->
<!-- sent="Mon, 23 Oct 2006 19:05:17 -0300" -->
<!-- isosent="20061023220517" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="e7ba66e40610231505q53e64dedqfe7f58f6d4397f30_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="01a201c6f6dd$e872c9c0$ca79e30a_at_ladd02" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 18:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2040.php">Joe Landman: "[OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<li><strong>Previous message:</strong> <a href="2038.php">Tony Ladd: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2038.php">Tony Ladd: "[OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2258.php">Galen Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2258.php">Galen Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/23/06, Tony Ladd &lt;ladd_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; A couple of comments regarding issues raised by this thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) In my opinion Netpipe is not such a great network benchmarking tool for
</span><br>
<span class="quotelev1">&gt; HPC applications. It measures timings based on the completion of the send
</span><br>
<span class="quotelev1">&gt; call on the transmitter not the completion of the receive. Thus, if there is
</span><br>
<span class="quotelev1">&gt; a delay in copying the send buffer across the net, it will report a
</span><br>
<span class="quotelev1">&gt; misleading timing compared with the wall-clock time. This is particularly
</span><br>
<span class="quotelev1">&gt; problematic with multiple pairs of edge exchanges, which can oversubscribe
</span><br>
<span class="quotelev1">&gt; most GigE switches. Here the netpipe timings can be off by orders of
</span><br>
<span class="quotelev1">&gt; magnitude compared with the wall clock. The good thing about writing your
</span><br>
<span class="quotelev1">&gt; own code is that you know what it has done (of course no one else knows,
</span><br>
<span class="quotelev1">&gt; which can be a problem). But it seems many people are unaware of the timing
</span><br>
<span class="quotelev1">&gt; issue in Netpipe.
</span><br>
<p>Yes! I've noticed that. I am now using Intel MPI Benchmarck. PingPong
<br>
/PingPing and SendRecv test cases seems to be more realistic. Does any
<br>
one have any comments about this test suite?
<br>
<p><p><span class="quotelev1">&gt; 2) Its worth distinguishing between ethernet and TCP/IP. With MPIGAMMA, the
</span><br>
<span class="quotelev1">&gt; Intel Pro 1000 NIC has a latency of 12 microsecs including the switch and a
</span><br>
<span class="quotelev1">&gt; duplex bandwidth of 220 MBytes/sec. With the Extreme Networks X450a-48t
</span><br>
<span class="quotelev1">&gt; switch we can sustain 220MBytes/sec over 48 ports at once. This is not IB
</span><br>
<span class="quotelev1">&gt; performance but it seems sufficient to scale a number of applications to the
</span><br>
<span class="quotelev1">&gt; 100 cpu level, and perhaps beyond.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>GAMMA seems to be a great work, looking at some of its reports in web
<br>
site. Hoever, I have not tried it yet, and I am not sure if I will,
<br>
mainly because only supports MPICH-1. Has anyone any rough idea how
<br>
much work it could be to make it availabe for OpenMPI. Seems to be a
<br>
very interesting student project...
<br>
<p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2040.php">Joe Landman: "[OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<li><strong>Previous message:</strong> <a href="2038.php">Tony Ladd: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2038.php">Tony Ladd: "[OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2258.php">Galen Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2258.php">Galen Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
