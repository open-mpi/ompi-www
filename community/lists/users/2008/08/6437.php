<?
$subject_val = "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 11:11:07 2008" -->
<!-- isoreceived="20080827151107" -->
<!-- sent="Wed, 27 Aug 2008 10:22:20 -0400" -->
<!-- isosent="20080827142220" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv" -->
<!-- id="OF6C2A7C6C.B6F11155-ON852574B2.004C1A5F-852574B2.004EF32E_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B966E0CF-09D7-4469-9BA9-1CBE1D8B1964_at_gmail.com" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-27 10:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6436.php">Andrew J Caird: "Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
<li><strong>In reply to:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Robert -
<br>
<p>A return from a blocking send means the application send buffer is
<br>
available for reuse.  If it is a BSEND, the application buffer could be
<br>
available because the message data has been copied to the attached buffer
<br>
or because the data has been delivered to the destination.  The application
<br>
on the side that used BSEND only cares that the application send buffer is
<br>
available and a receive on the destination side can get the data from
<br>
somewhere.
<br>
<p>A return from a blocking receive means the data is available in the
<br>
application receive buffer.  If there were a BRECV in the standard, what
<br>
would it mean? It cannot return until the data is in the application
<br>
receive buffer so at the same time the BRECV call is able to tell libmpi to
<br>
&quot;use a scratch buffer&quot;, libmpi is also being told the address of the
<br>
application buffer and would have no use for a scratch buffer. Before the
<br>
BRECV call, libmpi could not know if the message will be matched by BRECV
<br>
or some other kind of receive.
<br>
<p>There is a hidden optimization in most MPI implementations that will allow
<br>
small sends to ship their data to the destination eagerly. When the data
<br>
shows up at the destination and there is no matching receive, the data is
<br>
buffered in space hidden within the MPI implementation.  When a receive
<br>
call is made, libmpi will first check to see if the data is already
<br>
available in this hidden scratch buffer. In this optimization, when there
<br>
is a matching receive waiting for the data at the moment it arrives, the
<br>
hidden buffering is bypassed.
<br>
<p>There is nothing in the MPI API to let an application say a receive or send
<br>
should  use this hidden buffering. That is up to libmpi..
<br>
<p>There is a ready send defined  by the MPI standard which allows the send
<br>
side to dictate that the message go immediately and libmpi need not attempt
<br>
to buffer it.  If the application can be certain the matching receive is
<br>
posted before the RSEND call is made, there is a possibility of some
<br>
performance gains but pre-posting receives with absolute reliability is not
<br>
as easy as you might expect.
<br>
<p>The danger with RSEND is that if the receive is not available the data must
<br>
be discarded.  Since the MPI standard does not allow data to be lost, the
<br>
next thing the MPI library will do after discarding the data is abort the
<br>
job.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 08/27/2008 08:41:59 AM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robert Kubrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 08/27/2008 08:51 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpich-discuss
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting, MPI_Brecv is not in the standard (MPI_Bsend is). I don't
</span><br>
<span class="quotelev1">&gt; understand why a recv could not implemented with an external buffer.
</span><br>
<span class="quotelev1">&gt; Anyway, my bad, I was assuming MPI_Brecv was on. Thanks George for
</span><br>
<span class="quotelev1">&gt; pointing this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 27, 2008, at 7:14 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is the definition of a buffered receive ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 26, 2008, at 10:17 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From a performance point of view, which one is better:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Battach(10*sizeof(MSG))
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Brecv()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_recv_init()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_recv_init()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_recv_init()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ... /* 10 recv handlers */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Start(all recv)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Waitany()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I understand MPI_Brecv will require an extra message copy, from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the attached buffer to the MPI_Brecv() buffer. I'd like to know if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; there other differences between the two methods.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rob
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6436.php">Andrew J Caird: "Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
<li><strong>In reply to:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
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
