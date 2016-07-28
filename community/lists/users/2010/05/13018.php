<?
$subject_val = "Re: [OMPI users] Questions about MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 14:05:04 2010" -->
<!-- isoreceived="20100511180504" -->
<!-- sent="Tue, 11 May 2010 14:04:58 -0400" -->
<!-- isosent="20100511180458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about MPI_Isend" -->
<!-- id="76CDAC7D-B7F0-4CFE-ABFB-13A36A35AFB7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFC4180822.F17E38FB-ON85257720.004A74FD-85257720.004AE48E_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions about MPI_Isend<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 14:04:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13019.php">Oskar Enoksson: "[OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<li><strong>Previous message:</strong> <a href="13017.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13014.php">Richard Treumann: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13022.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dick is, of course, correct.  This topic has come up several times on this list: Open MPI currently does not do this kind of check.  It is therefore possible for a sender to exhaust memory on a receiver if, for example, it continually sends short/eager messages that the receiver consumes off the socket, but does not MPI match (i.e., they're unexpected messages).
<br>
<p>However, the kernel crash you're describing is not likely associated with this issue.
<br>
<p>1. If you have a busy sender that sends oodles of short messages across TCP sockets to a receiver that is not even going into the MPI layer to progress anything from that socket, the kernel/TCP wire protocol will block the sender when the receiver's kernel buffer fills up.  Hence, Open MPI will stop sending and buffer up all the pending messages on the send side.  Linux defaults to 64k kernel buffers (IIRC).
<br>
<p>2. If you have a busy sender that sends oodles of short messages across TCP sockets to a receiver that *is* going into MPI to make progress, but is not matching any of these short messages (i.e., the receiver is reading messages off the socket but not successfully MPI matching them), then the socket will never block because the kernel socket buffering is not filling up.  Open MPI will continually buffer the messages on the receiver until a matching MPI receive is issued.  If the effort of buffering all of these incoming messages consumes all of the receiver's memory, malloc() will fail in Open MPI and the MPI process will likely die.  It would be hard to imagine that this crashes your kernel.
<br>
<p>I simplified the discussion a bit (i.e., didn't describe *all* possible cases), but it's good enough for this discussion.
<br>
<p><p><p>On May 11, 2010, at 9:38 AM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; The MPI standard requires that when there is a free running task posting isends to a task that is not keeping up on receives, the sending task will switch to synchronous isend BEFORE the receive side runs out of memory and fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There should be no need for the sender to us MPI_Issend because the MPI library should do it for you (under the covers)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dick Treumann - MPI Team 
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;graycol.gif&gt;Gijsbert Wiesenekker ---05/11/2010 03:19:49 AM---An OpenMPI program of mine that uses MPI_Isend and MPI_Irecv crashes after some non-reproducible tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; From:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Gijsbert Wiesenekker &lt;gijsbert.wiesenekker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; To:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Date:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; 05/11/2010 03:19 AM
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; [OMPI users] Questions about MPI_Isend
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An OpenMPI program of mine that uses MPI_Isend and MPI_Irecv crashes after some non-reproducible time my Fedora Linux kernel (invalid opcode), which makes it hard to debug (there is no trace, even with the debug kernel, and if I run it under valgrind it does not crash).
</span><br>
<span class="quotelev1">&gt; My guess is that the kernel crash is caused by OpenMPI running out if memory because too many MPI_Irecv messages have been sent but not been processed yet.
</span><br>
<span class="quotelev1">&gt; My questions are:
</span><br>
<span class="quotelev1">&gt; What does the OpenMPI specification say about the behaviour of MPI_Isend when many messages have been sent but have not been processed yet? Will it fail? Will it block until more memory becomes available (I hope not, because this would cause my program to deadlock)?
</span><br>
<span class="quotelev1">&gt; Ideally I would like to check how many MPI_Isend messages have not been processed yet, so that I can stop sending messages if there are 'too many' waiting. Is there a way to do this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13019.php">Oskar Enoksson: "[OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<li><strong>Previous message:</strong> <a href="13017.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13014.php">Richard Treumann: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13022.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
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
