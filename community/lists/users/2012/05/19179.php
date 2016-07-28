<?
$subject_val = "Re: [OMPI users] MPI over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 17:17:04 2012" -->
<!-- isoreceived="20120503211704" -->
<!-- sent="Thu, 3 May 2012 14:16:58 -0700" -->
<!-- isosent="20120503211658" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over tcp" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E842E4DB7_at_HQMAIL02.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20120503185116.GI3458_at_rzlab.ucr.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI over tcp<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 17:16:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19178.php">Don Armstrong: "[OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19178.php">Don Armstrong: "[OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried your program on a single node and it worked fine.  Yes, TCP message passing in Open MPI has been working well for some time.
<br>
I have a few suggestions.
<br>
1. Can you run something like hostname successfully (mpirun -np 10 -hostfile yourhostfile hostname)
<br>
2. If that works, then you can also run with a debug switch to see what connections are being made by MPI.
<br>
<p>I would suggest reading through here for some ideas and for the debug switch.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Don Armstrong
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, May 03, 2012 2:51 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] MPI over tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm attempting to use MPI over tcp; the attached (rather trivial) code gets
</span><br>
<span class="quotelev1">&gt;stuck in MPI_Send. Looking at TCP dumps indicates that the TCP connection is
</span><br>
<span class="quotelev1">&gt;made successfully to the right port, but the actual data doesn't appear to be
</span><br>
<span class="quotelev1">&gt;sent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm beginning to suspect that there's some basic problem with my
</span><br>
<span class="quotelev1">&gt;configuration, or an underlying bug in TCP message passing in MPI. Any
</span><br>
<span class="quotelev1">&gt;suggestions to try (or a response indicating that MPI over TCP actually works,
</span><br>
<span class="quotelev1">&gt;and that it's some problem with my setup) appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The relevant portion of the hostfile looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;archimedes.int.donarmstrong.com slots=2
</span><br>
<span class="quotelev1">&gt;krel.int.donarmstrong.com slots=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and the output of the run and tcpdump is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Don Armstrong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;[T]he question of whether Machines Can Think, [...] is about as relevant as the
</span><br>
<span class="quotelev1">&gt;question of whether Submarines Can Swim.
</span><br>
<span class="quotelev1">&gt; -- Edsger W. Dijkstra &quot;The threats to computing science&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.donarmstrong.com">http://www.donarmstrong.com</a>              <a href="http://rzlab.ucr.edu">http://rzlab.ucr.edu</a>
</span><br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19178.php">Don Armstrong: "[OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19178.php">Don Armstrong: "[OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
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
