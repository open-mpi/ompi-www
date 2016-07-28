<?
$subject_val = "Re: [OMPI users] MPI over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 08:26:27 2012" -->
<!-- isoreceived="20120504122627" -->
<!-- sent="Fri, 4 May 2012 05:26:18 -0700" -->
<!-- isosent="20120504122618" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over tcp" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E842E4ECD_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120503214259.GJ3458_at_rzlab.ucr.edu" -->
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
<strong>Date:</strong> 2012-05-04 08:26:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19190.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19194.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19194.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19198.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Don Armstrong
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, May 03, 2012 5:43 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] MPI over tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Thu, 03 May 2012, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I tried your program on a single node and it worked fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It works fine on a single node, but deadlocks when it communicates in
</span><br>
<span class="quotelev1">&gt;between nodes. Single node communication doesn't use tcp by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, TCP message passing in Open MPI has been working well for some
</span><br>
<span class="quotelev2">&gt;&gt; time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ok. Which version(s) of openmpi are you using successfully? [I'm assuming
</span><br>
<span class="quotelev1">&gt;that this is in an environment which doesn't use IB.]
</span><br>
<p>I was using a trunk version from a month or so ago.  However, TCP has not changed too much over the years, so I would expect all versions to work just fine.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Can you run something like hostname successfully (mpirun -np 10
</span><br>
<span class="quotelev2">&gt;&gt; -hostfile yourhostfile hostname)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, but this only shows that processes start and output is returned, which
</span><br>
<span class="quotelev1">&gt;doesn't utilize the in-band message passing at all.
</span><br>
<p>Yes, I agree. But it at least shows that TCP connections can work between the machines.  We typically first make sure that something like hostname works.
<br>
Then we try something like the connectivity_c.c program in the examples directory to test out MPI communication.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. If that works, then you can also run with a debug switch to see
</span><br>
<span class="quotelev2">&gt;&gt; what connections are being made by MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You can see the connections being made in the attached log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[archimedes:29820] btl: tcp: attempting to connect() to [[60576,1],2] address
</span><br>
<span class="quotelev1">&gt;138.23.141.162 on port 2001
</span><br>
<p>Yes, I missed that.  So, can we simplify the problem.  Can you run with np=2 and one process on each node?
<br>
Also, maybe you can send the ifconfig output from each node.  We sometimes see this type of hanging when
<br>
a node has two different interfaces on the same subnet.  
<br>
<p>Assuming there are multiple interfaces, can you experiment with the runtime flags outlined here?
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>Maybe by restricting to specific interfaces you can figure out which network is the problem.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would suggest reading through here for some ideas and for the debug
</span><br>
<span class="quotelev2">&gt;&gt; switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks. I checked the FAQ, and didn't see anything that shed any light,
</span><br>
<span class="quotelev1">&gt;unfortunately.
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
<span class="quotelev1">&gt;Fate and Temperament are two words for one and the same concept.
</span><br>
<span class="quotelev1">&gt; -- Novalis [Hermann Hesse _Demian_]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.donarmstrong.com">http://www.donarmstrong.com</a>              <a href="http://rzlab.ucr.edu">http://rzlab.ucr.edu</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
-----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19190.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19194.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19194.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19198.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
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
