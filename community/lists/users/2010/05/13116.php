<?
$subject_val = "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 03:13:35 2010" -->
<!-- isoreceived="20100521071335" -->
<!-- sent="Fri, 21 May 2010 09:13:30 +0200" -->
<!-- isosent="20100521071330" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General question on the implementation of a&amp;quot;scheduler&amp;quot; on client side..." -->
<!-- id="AANLkTimTTDTnDzimTEmQXds3bkUQ2FU-3-M8zblcZkyE_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F39AB4C5-04CB-451A-9745-DDF307AE7205_at_cisco.com" -->
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
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 03:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13117.php">Pankatz, Klaus: "[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Previous message:</strong> <a href="13115.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>In reply to:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13128.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>Reply:</strong> <a href="13128.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>thanks for your detailed answer.
<br>
<p>2010/5/20 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; You're basically talking about implementing some kind of
</span><br>
<span class="quotelev1">&gt; application-specific protocol.  A few tips that may help in your design:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Look into MPI_Isend / MPI_Irecv for non-blocking sends and receives.
</span><br>
<span class="quotelev1">&gt;  These may be particularly useful in the server side, so that it can do
</span><br>
<span class="quotelev1">&gt; other stuff while sends and receives are progressing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>-&gt; You are definitively right, I have to switch to non blocking sends and
<br>
receives.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. You probably already noticed that collective operations (broadcasts and
</span><br>
<span class="quotelev1">&gt; the link) need to be invoked by all members of the communicator.  So if you
</span><br>
<span class="quotelev1">&gt; want to do a broadcast, everyone needs to know.  That being said, you can
</span><br>
<span class="quotelev1">&gt; send a short message to everyone alerting them that a longer broadcast is
</span><br>
<span class="quotelev1">&gt; coming -- then they can execute MPI_BCAST, etc.  That works best if your
</span><br>
<span class="quotelev1">&gt; broadcasts are large messages (i.e., you benefit from scalable
</span><br>
<span class="quotelev1">&gt; implementations of broadcast) -- otherwise you're individually sending short
</span><br>
<span class="quotelev1">&gt; messages followed by a short broadcast.  There might not be much of a &quot;win&quot;
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>-&gt; That is what I was thinking about to implement. As you mentioned, and
<br>
specifically for my case where I mainly send short messages, there might not
<br>
be much win. By the way, are their some benchmarks testing sequential
<br>
MPI_ISend versus MPI_BCAST for instance ? The aim is to determine up which
<br>
buffer size a MPI_BCast is worth to be used for my case. You can answer that
<br>
the test is easy to do and that I can test it by myself :)
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. FWIW, the MPI Forum has introduced the concept of non-blocking
</span><br>
<span class="quotelev1">&gt; collective operations for the upcoming MPI-3 spec.  These may help; google
</span><br>
<span class="quotelev1">&gt; for libnbc for a (non-optimized) implementation that may be of help to you.
</span><br>
<span class="quotelev1">&gt;  MPI implementations (like Open MPI) will feature non-blocking collectives
</span><br>
<span class="quotelev1">&gt; someday in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
-&gt; Interesting to know and to keep in mind. Sometimes the future is really
<br>
near.
<br>
<p>Thanks again for your answer and info.
<br>
<p>Olivier
<br>
<p><p><p><span class="quotelev1">&gt; On May 20, 2010, at 5:30 AM, Olivier Riff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a general question about the best way to implement an openmpi
</span><br>
<span class="quotelev1">&gt; application, i.e the design of the application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A machine (I call it the &quot;server&quot;) should send to a cluster containing a
</span><br>
<span class="quotelev1">&gt; lot of processors (the &quot;clients&quot;) regularly task to do (byte buffers from
</span><br>
<span class="quotelev1">&gt; very various size).
</span><br>
<span class="quotelev2">&gt; &gt; The server should send to each client a different buffer, then wait for
</span><br>
<span class="quotelev1">&gt; each client answers (buffer sent by each client after some processing), and
</span><br>
<span class="quotelev1">&gt; retrieve the result data.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First I made something looking like this.
</span><br>
<span class="quotelev2">&gt; &gt; On the server side: Send sequentially to each client buffers using
</span><br>
<span class="quotelev1">&gt; MPI_Send.
</span><br>
<span class="quotelev2">&gt; &gt; On each client side: loop which waits a buffer using MPI_Recv, then
</span><br>
<span class="quotelev1">&gt; process the buffer and sends the result using MPI_Send
</span><br>
<span class="quotelev2">&gt; &gt; This is really not efficient because a lot of time is lost due to the
</span><br>
<span class="quotelev1">&gt; fact that the server sends and receives sequentially the buffers.
</span><br>
<span class="quotelev2">&gt; &gt; It only has the advantage to have on the client size a pretty easy
</span><br>
<span class="quotelev1">&gt; scheduler:
</span><br>
<span class="quotelev2">&gt; &gt; Wait for buffer (MPI_Recv) -&gt; Analyse it -&gt; Send result (MPI_Send)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My wish is to mix MPI_Send/MPI_Recv and other mpi functions like
</span><br>
<span class="quotelev1">&gt; MPI_BCast/MPI_Scatter/MPI_Gather... (like I imagine every mpi application
</span><br>
<span class="quotelev1">&gt; does).
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that I cannot find a easy solution in order that each
</span><br>
<span class="quotelev1">&gt; client knows which kind of mpi function is currently called by the server.
</span><br>
<span class="quotelev1">&gt; If the server calls MPI_BCast the client should do the same. Sending at each
</span><br>
<span class="quotelev1">&gt; time a first message to indicate the function the server will call next does
</span><br>
<span class="quotelev1">&gt; not look very nice. Though I do not see an easy/best way to implement an
</span><br>
<span class="quotelev1">&gt; &quot;adaptative&quot; scheduler on the client side.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any tip, advice, help would be appreciate.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Olivier
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13116/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13117.php">Pankatz, Klaus: "[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Previous message:</strong> <a href="13115.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>In reply to:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13128.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>Reply:</strong> <a href="13128.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
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
