<?
$subject_val = "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 11:54:20 2010" -->
<!-- isoreceived="20100520155420" -->
<!-- sent="Thu, 20 May 2010 11:54:14 -0400" -->
<!-- isosent="20100520155414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General question on the implementation of a&amp;quot;scheduler&amp;quot; on client side..." -->
<!-- id="F39AB4C5-04CB-451A-9745-DDF307AE7205_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinzwDcYjrp-jVqTg0HUCCGKnee5It3zTBhObifp_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 11:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13111.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13109.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>In reply to:</strong> <a href="13097.php">Olivier Riff: "[OMPI users] General question on the implementation of a &quot;scheduler&quot; on client side..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>Reply:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're basically talking about implementing some kind of application-specific protocol.  A few tips that may help in your design:
<br>
<p>1. Look into MPI_Isend / MPI_Irecv for non-blocking sends and receives.  These may be particularly useful in the server side, so that it can do other stuff while sends and receives are progressing.
<br>
<p>2. You probably already noticed that collective operations (broadcasts and the link) need to be invoked by all members of the communicator.  So if you want to do a broadcast, everyone needs to know.  That being said, you can send a short message to everyone alerting them that a longer broadcast is coming -- then they can execute MPI_BCAST, etc.  That works best if your broadcasts are large messages (i.e., you benefit from scalable implementations of broadcast) -- otherwise you're individually sending short messages followed by a short broadcast.  There might not be much of a &quot;win&quot; there.
<br>
<p>3. FWIW, the MPI Forum has introduced the concept of non-blocking collective operations for the upcoming MPI-3 spec.  These may help; google for libnbc for a (non-optimized) implementation that may be of help to you.  MPI implementations (like Open MPI) will feature non-blocking collectives someday in the future.
<br>
<p><p>On May 20, 2010, at 5:30 AM, Olivier Riff wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a general question about the best way to implement an openmpi application, i.e the design of the application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A machine (I call it the &quot;server&quot;) should send to a cluster containing a lot of processors (the &quot;clients&quot;) regularly task to do (byte buffers from very various size).
</span><br>
<span class="quotelev1">&gt; The server should send to each client a different buffer, then wait for each client answers (buffer sent by each client after some processing), and retrieve the result data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First I made something looking like this.
</span><br>
<span class="quotelev1">&gt; On the server side: Send sequentially to each client buffers using MPI_Send.
</span><br>
<span class="quotelev1">&gt; On each client side: loop which waits a buffer using MPI_Recv, then process the buffer and sends the result using MPI_Send
</span><br>
<span class="quotelev1">&gt; This is really not efficient because a lot of time is lost due to the fact that the server sends and receives sequentially the buffers.
</span><br>
<span class="quotelev1">&gt; It only has the advantage to have on the client size a pretty easy scheduler: 
</span><br>
<span class="quotelev1">&gt; Wait for buffer (MPI_Recv) -&gt; Analyse it -&gt; Send result (MPI_Send)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My wish is to mix MPI_Send/MPI_Recv and other mpi functions like MPI_BCast/MPI_Scatter/MPI_Gather... (like I imagine every mpi application does).
</span><br>
<span class="quotelev1">&gt; The problem is that I cannot find a easy solution in order that each client knows which kind of mpi function is currently called by the server. If the server calls MPI_BCast the client should do the same. Sending at each time a first message to indicate the function the server will call next does not look very nice. Though I do not see an easy/best way to implement an &quot;adaptative&quot; scheduler on the client side.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any tip, advice, help would be appreciate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Olivier
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
<li><strong>Next message:</strong> <a href="13111.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13109.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>In reply to:</strong> <a href="13097.php">Olivier Riff: "[OMPI users] General question on the implementation of a &quot;scheduler&quot; on client side..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>Reply:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
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
