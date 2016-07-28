<?
$subject_val = "Re: [OMPI users] Strange TCP latency results on Amazon EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 10:55:03 2012" -->
<!-- isoreceived="20120112155503" -->
<!-- sent="Thu, 12 Jan 2012 16:54:58 +0100" -->
<!-- isosent="20120112155458" -->
<!-- name="Roberto Rey" -->
<!-- email="eros.83_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange TCP latency results on Amazon EC2" -->
<!-- id="CAFM0RYL1omcimjaiT9mVcNDtYwwsAN6acSRXUuPs9FvCnM8TTQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANQYCiajcZMrkrGFzxTs-kjLcQ_YJWMVQL=RbPxxavBfVuak8g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-01-12 10:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18153.php">devendra rai: "[OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>Previous message:</strong> <a href="18151.php">teng ma: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>In reply to:</strong> <a href="18151.php">teng ma: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18162.php">Bogdan Costescu: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With ifconfig I can only see one Ethernet card (eth0) as well as the
<br>
loopback interface
<br>
<p>2012/1/12 teng ma &lt;tma_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Is it possible your EC2 cluster has another &quot;unknown&quot; crappy Ethernet
</span><br>
<span class="quotelev1">&gt; card(e.g. 1Gb
</span><br>
<span class="quotelev1">&gt; Ethernet card) . For small messages, they go through different paths in
</span><br>
<span class="quotelev1">&gt; NPtcp or MPI over NPmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Teng Ma
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 12, 2012 at 10:28 AM, Roberto Rey &lt;eros.83_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using TCP BTL because I don't have any other option in Amazon with 10
</span><br>
<span class="quotelev2">&gt;&gt; Gbit Ethernet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also tried with MPICH2 1.4 and I got 60 microseconds...so I am very
</span><br>
<span class="quotelev2">&gt;&gt; confused about it...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding hyperthreading and process binding settings...I am using only
</span><br>
<span class="quotelev2">&gt;&gt; one MPI process in each node (2 nodes for a clasical ping-pong latency
</span><br>
<span class="quotelev2">&gt;&gt; benchmark). I don't know how it could affect on this test...but I could try
</span><br>
<span class="quotelev2">&gt;&gt; anything that anyone suggest to me
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/1/12 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Roberto.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've had strange reports of performance from EC2 before; it's actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been on my to-do list to go check this out in detail.  I made contact with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the EC2 folks at Supercomputing late last year.  They've hooked me up with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some credits on EC2 to go check out what's happening, but the pent-up email
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deluge from the Christmas vacation and my travel to the MPI Forum this week
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prevented me from testing yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope to be able to get time to test Open MPI on EC2 next week and see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what's going on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's very strange to me that Open MPI is getting *better* than raw TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance.  I don't have an immediate explanation for that -- if you're
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the TCP BTL, then OMPI should be using TCP sockets, just like netpipe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the others.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You *might* want to check hyperthreading and process binding settings in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all your tests.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 12, 2012, at 7:04 AM, Roberto Rey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi again,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Today I was trying with another TCP benchmark included in the hpcbench
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suite, and with a ping-pong test I'm also getting 100us of latency. Then, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tried with netperf and the same result....
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; So, in summary, I'm measuring TCP latency with messages size between
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1-32 bytes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Netperf over TCP                     -&gt; 100us
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Netpipe over TCP (NPtcp)        -&gt; 100us
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; HPCbench over TCP                -&gt; 100us
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Netpipe over OpenMPI (NPmpi) -&gt; 60us
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; HPCBench over OpenMPI         -&gt; 60us
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Any clues?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks a lot!
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 2012/1/10 Roberto Rey &lt;eros.83_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'm running some tests on EC2 cluster instances with 10 Gigabit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethernet hardware and I'm getting strange latency results with Netpipe and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; If I run Netpipe over OpenMPI (NPmpi) I get a network latency around
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 60 microseconds for small messages (less than 2kbytes). However, when I run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Netpipe over TCP (NPtcp) I always get around 100 microseconds. For bigger
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages everything seems to be OK.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'm using the BTL TCP in OpenMPI, so I can't understand why OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; outperforms raw TCP performance for small messages (40us of difference). I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also have run the PingPong test from the Intel Media Benchmarks and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency results for OpenMPI are very similar (60us) to those obtained with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NPmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Can OpenMPI outperform Netpipe over TCP? Why? Is OpenMPI  doing any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimization in BTL TCP?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The results for OpenMPI aren't so good but we must take into account
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the network virtualization overhead under Xen
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks for your reply
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Roberto Rey Exp&#243;sito
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Roberto Rey Exp&#243;sito
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; | Teng Ma          Univ. of Tennessee |
</span><br>
<span class="quotelev1">&gt; | tma_at_[hidden]        Knoxville, TN |
</span><br>
<span class="quotelev1">&gt; | <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>       |
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
<p><p><p><pre>
-- 
Roberto Rey Exp&#243;sito
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18153.php">devendra rai: "[OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>Previous message:</strong> <a href="18151.php">teng ma: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>In reply to:</strong> <a href="18151.php">teng ma: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18162.php">Bogdan Costescu: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
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
