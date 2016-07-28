<?
$subject_val = "Re: [OMPI users] Strange TCP latency results on Amazon EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 10:04:47 2012" -->
<!-- isoreceived="20120112150447" -->
<!-- sent="Thu, 12 Jan 2012 16:04:42 +0100" -->
<!-- isosent="20120112150442" -->
<!-- name="Roberto Rey" -->
<!-- email="eros.83_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange TCP latency results on Amazon EC2" -->
<!-- id="CAFM0RYLeiiwowxZsFnZ5OkpJfqmCH6yw1mHCZZJQmXMFscvSVg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFM0RYJHR5Su9W_VpMwFUackSLo=07kep9+nARXUfTCOtgramg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange TCP latency results on Amazon EC2<br>
<strong>From:</strong> Roberto Rey (<em>eros.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 10:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18149.php">Jeff Squyres: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="18147.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18119.php">Roberto Rey: "[OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18149.php">Jeff Squyres: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18149.php">Jeff Squyres: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Today I was trying with another TCP benchmark included in the hpcbench
<br>
suite, and with a ping-pong test I'm also getting 100us of latency. Then, I
<br>
tried with netperf and the same result....
<br>
<p>So, in summary, I'm measuring TCP latency with messages size between 1-32
<br>
bytes:
<br>
<p>Netperf over TCP                     -&gt; 100us
<br>
Netpipe over TCP (NPtcp)        -&gt; 100us
<br>
HPCbench over TCP                -&gt; 100us
<br>
Netpipe over OpenMPI (NPmpi) -&gt; 60us
<br>
HPCBench over OpenMPI         -&gt; 60us
<br>
<p>Any clues?
<br>
<p>Thanks a lot!
<br>
<p>2012/1/10 Roberto Rey &lt;eros.83_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running some tests on EC2 cluster instances with 10 Gigabit Ethernet
</span><br>
<span class="quotelev1">&gt; hardware and I'm getting strange latency results with Netpipe and OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run Netpipe over OpenMPI (NPmpi) I get a network latency around 60
</span><br>
<span class="quotelev1">&gt; microseconds for small messages (less than 2kbytes). However, when I run
</span><br>
<span class="quotelev1">&gt; Netpipe over TCP (NPtcp) I always get around 100 microseconds. For bigger
</span><br>
<span class="quotelev1">&gt; messages everything seems to be OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using the BTL TCP in OpenMPI, so I can't understand why OpenMPI
</span><br>
<span class="quotelev1">&gt; outperforms raw TCP performance for small messages (40us of difference). I
</span><br>
<span class="quotelev1">&gt; also have run the PingPong test from the Intel Media Benchmarks and the
</span><br>
<span class="quotelev1">&gt; latency results for OpenMPI are very similar (60us) to those obtained with
</span><br>
<span class="quotelev1">&gt; NPmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can OpenMPI outperform Netpipe over TCP? Why? Is OpenMPI  doing any
</span><br>
<span class="quotelev1">&gt; optimization in BTL TCP?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The results for OpenMPI aren't so good but we must take into account the
</span><br>
<span class="quotelev1">&gt; network virtualization overhead under Xen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Roberto Rey Exp&#243;sito
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18149.php">Jeff Squyres: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="18147.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18119.php">Roberto Rey: "[OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18149.php">Jeff Squyres: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18149.php">Jeff Squyres: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
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
