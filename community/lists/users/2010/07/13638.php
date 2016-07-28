<?
$subject_val = "Re: [OMPI users] OpenMPI how large its buffer size ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 15:39:02 2010" -->
<!-- isoreceived="20100714193902" -->
<!-- sent="Wed, 14 Jul 2010 15:39:24 -0400" -->
<!-- isosent="20100714193924" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI how large its buffer size ?" -->
<!-- id="EC52DC26-1674-43CB-8ED9-7CE216E307D3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTil1C0FKLAT_NK_dt1ixKwL8pccu24l-3UoXVuCv_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-14 15:39:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13639.php">Jeff Squyres: "Re: [OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<li><strong>Previous message:</strong> <a href="13637.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13585.php">jody: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13669.php">Anton Shterenlikht: "[OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on all that has been said.
<br>
<p>As Eugene stated: this is not an internal Open MPI bug.  Your application is calling some form of an MPI receive with a buffer that is too small.  The MPI specification defines this as a truncation error; hence, Open MPI gives you an ERR_TRUNCATE.  You can fix the error by calling that MPI receive with a bigger buffer.
<br>
<p>I believe that the issue is getting further complicated because you are not calling MPI directly -- you are calling boost, and so the actual MPI calls that are being made are being obscured.  You might need to dive into the boost.mpi documentation a bit more to understand exactly how you are posting a receive that is too small for an incoming message.  
<br>
<p>I'm guessing that you're either accidentally posting a receive that is too small, or your worker nodes are sending multiple different kinds of messages to the master on the same tag, and the messages after the first one are larger than 72 bytes (i.e., it's a timing issue that some peer process' 2nd message is reaching the master at a &quot;bad&quot; time -- if this is the case, I'd suggest using different tags to separate the different kinds of messages that are being sent).
<br>
<p>-----
<br>
<p>The details of how Open MPI moves messages across the network is somewhat irrelevant to this issue.  But if you care how that actually works, check out these FAQ items (they're specific to the OpenFabrics transport, but the same general method is used in many of Open MPI's transports):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3">http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>On Jul 12, 2010, at 6:31 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; mpi_irecv(workerNodeID, messageTag, bufferVector[row][column])
</span><br>
<span class="quotelev1">&gt; OpenMPI contains no function of this form.
</span><br>
<span class="quotelev1">&gt; There is MPI_Irecv, but it takes a different number of arguments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or is this a boost method?
</span><br>
<span class="quotelev1">&gt; If yes, i guess you have to make sure that the
</span><br>
<span class="quotelev1">&gt; bufferVector[row][column] is large enough...
</span><br>
<span class="quotelev1">&gt; Perhaps there is a boost forum you can check out if the problem persists
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Jul 11, 2010 at 10:13 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; thanks for your reply.
</span><br>
<span class="quotelev2">&gt; &gt; The message size is 72 bytes.
</span><br>
<span class="quotelev2">&gt; &gt; The master sends out the message package to each 51 nodes.
</span><br>
<span class="quotelev2">&gt; &gt; Then, after doing their local work, the worker node send back the same-size
</span><br>
<span class="quotelev2">&gt; &gt; message to the master.
</span><br>
<span class="quotelev2">&gt; &gt; Master use vector.push_back(new messageType) to receive each message from
</span><br>
<span class="quotelev2">&gt; &gt; workers.
</span><br>
<span class="quotelev2">&gt; &gt; Master use the
</span><br>
<span class="quotelev2">&gt; &gt; mpi_irecv(workerNodeID, messageTag, bufferVector[row][column])
</span><br>
<span class="quotelev2">&gt; &gt; to receive the worker message.
</span><br>
<span class="quotelev2">&gt; &gt; the row is the rankID of each worker, the column is index for  message from
</span><br>
<span class="quotelev2">&gt; &gt; worker.
</span><br>
<span class="quotelev2">&gt; &gt; Each worker may send multiple messages to master.
</span><br>
<span class="quotelev2">&gt; &gt; when the worker node size is large, i got MPI_ERR_TRUNCATE error.
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; JACK
</span><br>
<span class="quotelev2">&gt; &gt; July 10  2010
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Date: Sat, 10 Jul 2010 23:12:49 -0700
</span><br>
<span class="quotelev2">&gt; &gt; From: eugene.loh_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] OpenMPI how large its buffer size ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The master node can receive message ( the same size)  from 50 worker nodes.
</span><br>
<span class="quotelev2">&gt; &gt; But, it cannot receive message from 51 nodes. It caused &quot;truncate error&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How big was the buffer that the program specified in the receive call?  How
</span><br>
<span class="quotelev2">&gt; &gt; big was the message that was sent?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ERR_TRUNCATE means that you posted a receive with an application buffer
</span><br>
<span class="quotelev2">&gt; &gt; that turned out to be too small to hold the message that was received.  It's
</span><br>
<span class="quotelev2">&gt; &gt; a user application error that has nothing to do with MPI's internal
</span><br>
<span class="quotelev2">&gt; &gt; buffers.  MPI's internal buffers don't need to be big enough to hold that
</span><br>
<span class="quotelev2">&gt; &gt; message.  MPI could require the sender and receiver to coordinate so that
</span><br>
<span class="quotelev2">&gt; &gt; only part of the message is moved at a time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I used the same buffer to get the message in 50 node case.
</span><br>
<span class="quotelev2">&gt; &gt; About &quot;&quot;rendezvous&quot; protocol&quot;, what is the meaning of &quot;the sender sends a
</span><br>
<span class="quotelev2">&gt; &gt; short portion &quot;?
</span><br>
<span class="quotelev2">&gt; &gt; What is the &quot;short portion&quot;, is it a small mart of the message of the sender
</span><br>
<span class="quotelev2">&gt; &gt; ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's at least the message header (communicator, tag, etc.) so that the
</span><br>
<span class="quotelev2">&gt; &gt; receiver can figure out if this is the expected message or not.  In
</span><br>
<span class="quotelev2">&gt; &gt; practice, there is probably also some data in there as well.  The amount of
</span><br>
<span class="quotelev2">&gt; &gt; that portion depends on the MPI implementation and, in practice, the
</span><br>
<span class="quotelev2">&gt; &gt; interconnect the message traveled over, MPI-implementation-dependent
</span><br>
<span class="quotelev2">&gt; &gt; environment variables set by the user, etc.  E.g., with OMPI over shared
</span><br>
<span class="quotelev2">&gt; &gt; memory by default it's about 4Kbytes (if I remember correctly).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This &quot;rendezvous&quot; protocol&quot; can work automatically in background without
</span><br>
<span class="quotelev2">&gt; &gt; programmer
</span><br>
<span class="quotelev2">&gt; &gt; indicates in his program ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right.  MPI actually allows you to force such synchronization with
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Ssend, but typically MPI implementations use it automatically for
</span><br>
<span class="quotelev2">&gt; &gt; &quot;plain&quot; long sends as well even if the user didn't not use MPI_Ssend.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The &quot;acknowledgement &quot; can be generated by the receiver only when the
</span><br>
<span class="quotelev2">&gt; &gt; corresponding mpi_irecv is posted by the receiver ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ________________________________
</span><br>
<span class="quotelev2">&gt; &gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with
</span><br>
<span class="quotelev2">&gt; &gt; Hotmail. Get busy.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="13639.php">Jeff Squyres: "Re: [OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<li><strong>Previous message:</strong> <a href="13637.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13585.php">jody: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13669.php">Anton Shterenlikht: "[OMPI users] do all processors have to execute MPI_Bcast?"</a>
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
