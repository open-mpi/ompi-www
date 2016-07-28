<?
$subject_val = "Re: [OMPI users] Problems with computation-communication overlap	in	non-blocking mode";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 10:44:36 2014" -->
<!-- isoreceived="20140311144436" -->
<!-- sent="Tue, 11 Mar 2014 14:44:31 +0000" -->
<!-- isosent="20140311144431" -->
<!-- name="Velickovic Nikola" -->
<!-- email="nikola.velickovic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with computation-communication overlap	in	non-blocking mode" -->
<!-- id="0D649A5DA694234CA6A7E3DBDCCDB8D9557074E1_at_rexma.intranet.epfl.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EE455082-9669-4EC0-AD0F-7C1BC101B8E9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with computation-communication overlap	in	non-blocking mode<br>
<strong>From:</strong> Velickovic Nikola (<em>nikola.velickovic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 10:44:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems with computation-communication overlap in	non-blocking mode"</a>
<li><strong>In reply to:</strong> <a href="23796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems with computation-communication overlap in	non-blocking mode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex, Jeff
<br>
<p>thanks for your answers. 
<br>
I understand better now how OMPI works.
<br>
The results I see now make much more sense.
<br>
<p>Best,
<br>
Nikola
<br>
<p>________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
<br>
Sent: Tuesday, March 11, 2014 3:30 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Problems with computation-communication overlap       in      non-blocking mode
<br>
<p>Yes, you're seeing more-or-less the expected behavior.  It's a complicated issue.
<br>
<p>Short version: you might want to sprinkle MPI_Test's throughout your compute stage to get true overlap.
<br>
<p>More detail: MPI's typically use a &quot;rendezvous&quot; protocol for large messages, meaning that it sends a small fragment to the peer announcing the communicator,tag,peer of the source of the message.  When the receiver actually posts a matching receive, it sends back an ACK to the sender saying, &quot;Ok, I have the buffer available now -- send the rest of the message&quot;.
<br>
<p>So when you initiate a large send, the receiver still has to match that short initial frag, send back the ACK, and then the sender has to send the rest of the message.  I.e., the MPI layer has to be involved on both sides a few more times.  With a single-threaded MPI implementation like Open MPI, this means you need to dip into the MPI layer to keep the progress going.
<br>
<p>This is currently even true with RDMA/hardware offload technologies.  So even though the bulk of the message transfer is offloaded to the NIC hardware, OMPI won't even initiate that bulk transfer until the ACK has been received.
<br>
<p>In a perfect MPI implementation, you can do exactly what you said -- MPI_Isend a large message and eventually an MPI_Wait, and the MPI_Wait basically does very little except notice that the transfer is already done.
<br>
<p>However, this is engineering/reality -- there's always a tradeoff.
<br>
<p>You can, for example, increase OMPI's threshhold between &quot;small&quot; and &quot;large&quot; and consider everything to be a &quot;small&quot; message -- meaning that they would be sent eagerly, and not via a rendezvous protocol (and therefore you have a much better changes of MPI_Isend/MPI_Wait doing more of what you expect).  But this tends to consume more buffering at the receiver.
<br>
<p>Make sense?
<br>
<p><p><p>On Mar 7, 2014, at 9:49 AM, Velickovic Nikola &lt;nikola.velickovic_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a simple MPI program with two processes using non-blocking communication illustrated bellow:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; process 0:         process 1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Isend          MPI_Irecv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compute stage  compute stage
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Wait           MPI_Wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actual communication is performed by offloading it to another thread, or using DMA (KNEM module is used for this).
</span><br>
<span class="quotelev1">&gt; Ideally what should happen is that process 0 issues a non-blocking send, process 1 receives the data
</span><br>
<span class="quotelev1">&gt; and in the meantime (in parallel) the CPU cores where the processes run are doing the compute stage.
</span><br>
<span class="quotelev1">&gt; When compute stage is completed calling MPI_Wait wraps up the communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I profile my application it turns out that actual communication is initiated with MPI_Wait (significant amount of time is spent there) and hence disables overlapping
</span><br>
<span class="quotelev1">&gt; communication and computation since MPI_Wait is called after the compute stage.
</span><br>
<span class="quotelev1">&gt; Computation in my test case takes more time than communication so MPI_Wait should not be consuming significant amount of time since the communication should be over by then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This I confirmed also by using MPI_Test instead of MPI_Wait.
</span><br>
<span class="quotelev1">&gt; MPI_Test has the same effect as MPI_Wait (to the best of my knowledge) but is non-blocking.
</span><br>
<span class="quotelev1">&gt; When placing MPI_Test strategically in the compute stage it initiates the communication and a certain communication-computation overlap is achieved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please shed some light for me if I am doing something wrong with the library?
</span><br>
<span class="quotelev1">&gt; Is it the way it should behave (MPI_Wait initiates the actual transfer)?
</span><br>
<span class="quotelev1">&gt; How to achieve communication-computation overlap?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Nikola
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems with computation-communication overlap in	non-blocking mode"</a>
<li><strong>In reply to:</strong> <a href="23796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems with computation-communication overlap in	non-blocking mode"</a>
<!-- nextthread="start" -->
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
