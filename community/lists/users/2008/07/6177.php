<?
$subject_val = "Re: [OMPI users] TCP Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 04:52:07 2008" -->
<!-- isoreceived="20080729085207" -->
<!-- sent="Tue, 29 Jul 2008 10:52:01 +0200" -->
<!-- isosent="20080729085201" -->
<!-- name="Andy Georgi" -->
<!-- email="Andy.Georgi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Latency" -->
<!-- id="20080729105201.vvafm5slc00ssgg8_at_mail.zih.tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10B7D575-428D-4982-912E-7B90C5FB291E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP Latency<br>
<strong>From:</strong> Andy Georgi (<em>Andy.Georgi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 04:52:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6176.php">Martin Horvat: "[OMPI users] TEST UPPER MATRIX -- NOT PASSED"</a>
<li><strong>In reply to:</strong> <a href="6159.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6181.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6184.php">Kozin, I \(Igor\): "Re: [OMPI users] TCP Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Zitat von Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Jul 28, 2008, at 2:53 PM, Andy Georgi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; we use Chelsio S320E-CXA adapters   
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.chelsio.com/assetlibrary/products/S320E%20Product%20Brief%20080424.pdf">http://www.chelsio.com/assetlibrary/products/S320E%20Product%20Brief%20080424.pdf</a>)
</span><br>
<span class="quotelev2">&gt;&gt; in one of our clusters. After tuning the kernel i measured the ping
</span><br>
<span class="quotelev2">&gt;&gt; pong latency via NetPIPE and got ~12us which is pretty good for TCP i
</span><br>
<span class="quotelev2">&gt;&gt; think. So i wrote a simple ping-pong-kernel and was really terrified
</span><br>
<span class="quotelev2">&gt;&gt; about the ~45us i got with OpenMPI 1.2.6. Are there any hints how we
</span><br>
<span class="quotelev2">&gt;&gt; can reduce the MPI latency? To increase the bandwidth we already set
</span><br>
<span class="quotelev2">&gt;&gt; the buffer sizes but we couldn't find a parameter which can be
</span><br>
<span class="quotelev2">&gt;&gt; relevant for the latency. Every hint is  welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The upcoming Open MPI v1.3 series will support iWARP, which gives much
</span><br>
<span class="quotelev1">&gt; better latency than that.  I don't know all the Chelsio models offhand;
</span><br>
<span class="quotelev1">&gt; are those iWARP-capable cards?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks for the fast answer. So is this latency normal for TCP
<br>
communications over MPI!? Could RDMA maybe reduce the latency? It
<br>
should work with those cards but there are still problems with OFED.
<br>
iWARP is also one of the features they offer but if it works...
<br>
<p><pre>
-- 
Dresden University of Technology
Center for Information Services
and High Performance Computing (ZIH)
D-01062 Dresden
Germany
e-mail: Andy.Georgi_at_[hidden]
WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6176.php">Martin Horvat: "[OMPI users] TEST UPPER MATRIX -- NOT PASSED"</a>
<li><strong>In reply to:</strong> <a href="6159.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6181.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6184.php">Kozin, I \(Igor\): "Re: [OMPI users] TCP Latency"</a>
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
