<?
$subject_val = "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 11:57:22 2008" -->
<!-- isoreceived="20080827155722" -->
<!-- sent="Wed, 27 Aug 2008 11:55:58 -0400" -->
<!-- isosent="20080827155558" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv" -->
<!-- id="A52B3DC5-459D-409A-BAB8-36FB7EB7710F_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF6C2A7C6C.B6F11155-ON852574B2.004C1A5F-852574B2.004EF32E_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-27 11:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6439.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6439.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6439.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6442.php">Jeff Squyres: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2008, at 10:22 AM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; Robert -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A return from a blocking send means the application send buffer is  
</span><br>
<span class="quotelev1">&gt; available for reuse. If it is a BSEND, the application buffer could  
</span><br>
<span class="quotelev1">&gt; be available because the message data has been copied to the  
</span><br>
<span class="quotelev1">&gt; attached buffer or because the data has been delivered to the  
</span><br>
<span class="quotelev1">&gt; destination. The application on the side that used BSEND only cares  
</span><br>
<span class="quotelev1">&gt; that the application send buffer is available and a receive on the  
</span><br>
<span class="quotelev1">&gt; destination side can get the data from somewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A return from a blocking receive means the data is available in the  
</span><br>
<span class="quotelev1">&gt; application receive buffer. If there were a BRECV in the standard,  
</span><br>
<span class="quotelev1">&gt; what would it mean? It cannot return until the data is in the  
</span><br>
<span class="quotelev1">&gt; application receive buffer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I see, not it's clear.
<br>
<p>However from an application point of view I see an odd result here.  
<br>
On the sender side I can use a buffered send to &quot;queue&quot; messages for  
<br>
delivery and decide how many messages my buffer should contain before  
<br>
the MPI_Bsend blocks if it's running out of space.
<br>
<p>On the receiving side I have no control over the number of messages  
<br>
that MPI can buffer. This is basically left to the implementation  
<br>
details as you very well described. Shouldn't the user be allowed to  
<br>
specify a memory space to buffer messages on the receiving side, just  
<br>
like on the send?
<br>
<p><span class="quotelev1">&gt; so at the same time the BRECV call is able to tell libmpi to &quot;use a  
</span><br>
<span class="quotelev1">&gt; scratch buffer&quot;, libmpi is also being told the address of the  
</span><br>
<span class="quotelev1">&gt; application buffer and would have no use for a scratch buffer.  
</span><br>
<span class="quotelev1">&gt; Before the BRECV call, libmpi could not know if the message will be  
</span><br>
<span class="quotelev1">&gt; matched by BRECV or some other kind of receive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a hidden optimization in most MPI implementations that  
</span><br>
<span class="quotelev1">&gt; will allow small sends to ship their data to the destination  
</span><br>
<span class="quotelev1">&gt; eagerly. When the data shows up at the destination and there is no  
</span><br>
<span class="quotelev1">&gt; matching receive, the data is buffered in space hidden within the  
</span><br>
<span class="quotelev1">&gt; MPI implementation. When a receive call is made, libmpi will first  
</span><br>
<span class="quotelev1">&gt; check to see if the data is already available in this hidden  
</span><br>
<span class="quotelev1">&gt; scratch buffer. In this optimization, when there is a matching  
</span><br>
<span class="quotelev1">&gt; receive waiting for the data at the moment it arrives, the hidden  
</span><br>
<span class="quotelev1">&gt; buffering is bypassed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is nothing in the MPI API to let an application say a receive  
</span><br>
<span class="quotelev1">&gt; or send should use this hidden buffering. That is up to libmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a ready send defined by the MPI standard which allows the  
</span><br>
<span class="quotelev1">&gt; send side to dictate that the message go immediately and libmpi  
</span><br>
<span class="quotelev1">&gt; need not attempt to buffer it. If the application can be certain  
</span><br>
<span class="quotelev1">&gt; the matching receive is posted before the RSEND call is made, there  
</span><br>
<span class="quotelev1">&gt; is a possibility of some performance gains but pre-posting receives  
</span><br>
<span class="quotelev1">&gt; with absolute reliability is not as easy as you might expect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The danger with RSEND is that if the receive is not available the  
</span><br>
<span class="quotelev1">&gt; data must be discarded. Since the MPI standard does not allow data  
</span><br>
<span class="quotelev1">&gt; to be lost, the next thing the MPI library will do after discarding  
</span><br>
<span class="quotelev1">&gt; the data is abort the job.
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
<span class="quotelev1">&gt; users-bounces_at_[hidden] wrote on 08/27/2008 08:41:59 AM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [image removed]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Robert Kubrick
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 08/27/2008 08:51 AM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent by:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cc:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpich-discuss
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Interesting, MPI_Brecv is not in the standard (MPI_Bsend is). I  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev2">&gt; &gt; understand why a recv could not implemented with an external buffer.
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, my bad, I was assuming MPI_Brecv was on. Thanks George for
</span><br>
<span class="quotelev2">&gt; &gt; pointing this out.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 27, 2008, at 7:14 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What is the definition of a buffered receive ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   george.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 26, 2008, at 10:17 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From a performance point of view, which one is better:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Battach(10*sizeof(MSG))
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Brecv()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; or
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_recv_init()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_recv_init()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_recv_init()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ... /* 10 recv handlers */
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Start(all recv)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Waitany()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I understand MPI_Brecv will require an extra message copy, from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the attached buffer to the MPI_Brecv() buffer. I'd like to  
</span><br>
<span class="quotelev1">&gt; know if
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; there other differences between the two methods.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Rob
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6439.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6439.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6439.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6442.php">Jeff Squyres: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
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
