<?
$subject_val = "Re: [OMPI users] OpenMPI how large its buffer size ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 06:31:14 2010" -->
<!-- isoreceived="20100712103114" -->
<!-- sent="Mon, 12 Jul 2010 12:31:08 +0200" -->
<!-- isosent="20100712103108" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI how large its buffer size ?" -->
<!-- id="AANLkTil1C0FKLAT_NK_dt1ixKwL8pccu24l-3UoXVuCv_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w31E88FF4557FCF3CED7C60CBB70_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI how large its buffer size ?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 06:31:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13586.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13584.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13638.php">Jeff Squyres: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13638.php">Jeff Squyres: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<span class="quotelev1">&gt; mpi_irecv(workerNodeID, messageTag, bufferVector[row][column])
</span><br>
OpenMPI contains no function of this form.
<br>
There is MPI_Irecv, but it takes a different number of arguments.
<br>
<p>Or is this a boost method?
<br>
If yes, i guess you have to make sure that the
<br>
bufferVector[row][column] is large enough...
<br>
Perhaps there is a boost forum you can check out if the problem persists
<br>
<p>Jody
<br>
<p><p>On Sun, Jul 11, 2010 at 10:13 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; thanks for your reply.
</span><br>
<span class="quotelev1">&gt; The message size is 72 bytes.
</span><br>
<span class="quotelev1">&gt; The master sends out the message package to each 51 nodes.
</span><br>
<span class="quotelev1">&gt; Then, after doing their local work, the worker node send back the same-size
</span><br>
<span class="quotelev1">&gt; message to the master.
</span><br>
<span class="quotelev1">&gt; Master use vector.push_back(new messageType) to receive each message from
</span><br>
<span class="quotelev1">&gt; workers.
</span><br>
<span class="quotelev1">&gt; Master use the
</span><br>
<span class="quotelev1">&gt; mpi_irecv(workerNodeID, messageTag, bufferVector[row][column])
</span><br>
<span class="quotelev1">&gt; to receive the worker message.
</span><br>
<span class="quotelev1">&gt; the row is the rankID of each worker, the column is index for &#160;message from
</span><br>
<span class="quotelev1">&gt; worker.
</span><br>
<span class="quotelev1">&gt; Each worker may send multiple messages to master.
</span><br>
<span class="quotelev1">&gt; when the worker node size is large, i got MPI_ERR_TRUNCATE error.
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; JACK
</span><br>
<span class="quotelev1">&gt; July 10 &#160;2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; Date: Sat, 10 Jul 2010 23:12:49 -0700
</span><br>
<span class="quotelev1">&gt; From: eugene.loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI how large its buffer size ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The master node can receive message ( the same size) &#160;from 50 worker nodes.
</span><br>
<span class="quotelev1">&gt; But, it cannot receive message from 51 nodes. It caused &quot;truncate error&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How big was the buffer that the program specified in the receive call?&#160; How
</span><br>
<span class="quotelev1">&gt; big was the message that was sent?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ERR_TRUNCATE means that you posted a receive with an application buffer
</span><br>
<span class="quotelev1">&gt; that turned out to be too small to hold the message that was received.&#160; It's
</span><br>
<span class="quotelev1">&gt; a user application error that has nothing to do with MPI's internal
</span><br>
<span class="quotelev1">&gt; buffers.&#160; MPI's internal buffers don't need to be big enough to hold that
</span><br>
<span class="quotelev1">&gt; message.&#160; MPI could require the sender and receiver to coordinate so that
</span><br>
<span class="quotelev1">&gt; only part of the message is moved at a time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the same buffer to get the message in 50 node case.
</span><br>
<span class="quotelev1">&gt; About &quot;&quot;rendezvous&quot; protocol&quot;, what is the meaning of &quot;the sender sends a
</span><br>
<span class="quotelev1">&gt; short portion &quot;?
</span><br>
<span class="quotelev1">&gt; What is the &quot;short portion&quot;, is it a small mart of the message of the sender
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's at least the message header (communicator, tag, etc.) so that the
</span><br>
<span class="quotelev1">&gt; receiver can figure out if this is the expected message or not.&#160; In
</span><br>
<span class="quotelev1">&gt; practice, there is probably also some data in there as well.&#160; The amount of
</span><br>
<span class="quotelev1">&gt; that portion depends on the MPI implementation and, in practice, the
</span><br>
<span class="quotelev1">&gt; interconnect the message traveled over, MPI-implementation-dependent
</span><br>
<span class="quotelev1">&gt; environment variables set by the user, etc.&#160; E.g., with OMPI over shared
</span><br>
<span class="quotelev1">&gt; memory by default it's about 4Kbytes (if I remember correctly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This &quot;rendezvous&quot; protocol&quot; can work automatically in background without
</span><br>
<span class="quotelev1">&gt; programmer
</span><br>
<span class="quotelev1">&gt; indicates in his program ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.&#160; MPI actually allows you to force such synchronization with
</span><br>
<span class="quotelev1">&gt; MPI_Ssend, but typically MPI implementations use it automatically for
</span><br>
<span class="quotelev1">&gt; &quot;plain&quot; long sends as well even if the user didn't not use MPI_Ssend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;acknowledgement &quot; can be generated by the receiver only when the
</span><br>
<span class="quotelev1">&gt; corresponding mpi_irecv is posted by the receiver ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13586.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13584.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13638.php">Jeff Squyres: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13638.php">Jeff Squyres: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
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
