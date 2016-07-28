<?
$subject_val = "Re: [OMPI users] Strange TCP latency results on Amazon EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 10:10:59 2012" -->
<!-- isoreceived="20120112151059" -->
<!-- sent="Thu, 12 Jan 2012 07:10:50 -0800" -->
<!-- isosent="20120112151050" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange TCP latency results on Amazon EC2" -->
<!-- id="2BD9BEA1-67A9-4EFA-8236-0070FE07D92A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFM0RYLeiiwowxZsFnZ5OkpJfqmCH6yw1mHCZZJQmXMFscvSVg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 10:10:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18150.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>In reply to:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18150.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18150.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18162.php">Bogdan Costescu: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roberto.
<br>
<p>We've had strange reports of performance from EC2 before; it's actually been on my to-do list to go check this out in detail.  I made contact with the EC2 folks at Supercomputing late last year.  They've hooked me up with some credits on EC2 to go check out what's happening, but the pent-up email deluge from the Christmas vacation and my travel to the MPI Forum this week prevented me from testing yet.
<br>
<p>I hope to be able to get time to test Open MPI on EC2 next week and see what's going on.
<br>
<p>It's very strange to me that Open MPI is getting *better* than raw TCP performance.  I don't have an immediate explanation for that -- if you're using the TCP BTL, then OMPI should be using TCP sockets, just like netpipe and the others.
<br>
<p>You *might* want to check hyperthreading and process binding settings in all your tests.
<br>
<p><p>On Jan 12, 2012, at 7:04 AM, Roberto Rey wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today I was trying with another TCP benchmark included in the hpcbench suite, and with a ping-pong test I'm also getting 100us of latency. Then, I tried with netperf and the same result....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, in summary, I'm measuring TCP latency with messages size between 1-32 bytes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Netperf over TCP                     -&gt; 100us
</span><br>
<span class="quotelev1">&gt; Netpipe over TCP (NPtcp)        -&gt; 100us
</span><br>
<span class="quotelev1">&gt; HPCbench over TCP                -&gt; 100us
</span><br>
<span class="quotelev1">&gt; Netpipe over OpenMPI (NPmpi) -&gt; 60us
</span><br>
<span class="quotelev1">&gt; HPCBench over OpenMPI         -&gt; 60us
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any clues?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/1/10 Roberto Rey &lt;eros.83_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running some tests on EC2 cluster instances with 10 Gigabit Ethernet hardware and I'm getting strange latency results with Netpipe and OpenMPI. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run Netpipe over OpenMPI (NPmpi) I get a network latency around 60 microseconds for small messages (less than 2kbytes). However, when I run Netpipe over TCP (NPtcp) I always get around 100 microseconds. For bigger messages everything seems to be OK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using the BTL TCP in OpenMPI, so I can't understand why OpenMPI outperforms raw TCP performance for small messages (40us of difference). I also have run the PingPong test from the Intel Media Benchmarks and the latency results for OpenMPI are very similar (60us) to those obtained with NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can OpenMPI outperform Netpipe over TCP? Why? Is OpenMPI  doing any optimization in BTL TCP?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The results for OpenMPI aren't so good but we must take into account the network virtualization overhead under Xen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your reply
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Roberto Rey Exp&#243;sito
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18150.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>In reply to:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18150.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18150.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18162.php">Bogdan Costescu: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
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
