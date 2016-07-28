<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1750, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 25 12:29:56 2010" -->
<!-- isoreceived="20101125172956" -->
<!-- sent="Thu, 25 Nov 2010 18:29:02 +0100" -->
<!-- isosent="20101125172902" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1750, Issue 1" -->
<!-- id="4CEE9CDE.5070904_at_markomanolis.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.11.1290618003.18960.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1750, Issue 1<br>
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-25 12:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14888.php">Tushar Andriyas: "[OMPI users] PROBLEM WITH MPIRUN"</a>
<li><strong>Previous message:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Tue, 23 Nov 2010 10:27:37 -0800
</span><br>
<span class="quotelev1">&gt; From: Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] tool for measuring the ping with accuracy
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4CEC0799.60508_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Markomanolis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Dear Eugene,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot for the answer you were right for the eager mode.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have one more question. I am looking for an official tool to measure 
</span><br>
<span class="quotelev2">&gt;&gt; the ping time, just sending a message of 1 byte or more and measure 
</span><br>
<span class="quotelev2">&gt;&gt; the duration of the MPI_Send command on the rank 0 and the duration of 
</span><br>
<span class="quotelev2">&gt;&gt; the MPI_Recv on rank 1. I would like to know any formal tool because I 
</span><br>
<span class="quotelev2">&gt;&gt; am using also SkaMPI and the results really depend on the call of the 
</span><br>
<span class="quotelev2">&gt;&gt; synchronization before the measurement starts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So for example with synchronizing the processors, sending 1 byte, I have:
</span><br>
<span class="quotelev2">&gt;&gt; rank 0, MPI_Send: ~7 ms
</span><br>
<span class="quotelev2">&gt;&gt; rank 1, MPI_Recv: ~52 ms
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where 52 ms is almost the half of the ping-pong and this is ok.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without synchronizing I have:
</span><br>
<span class="quotelev2">&gt;&gt; rank 0, MPI_Send: ~7 ms
</span><br>
<span class="quotelev2">&gt;&gt; rank 1, MPI_Recv: ~7 ms
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However I developed a simple application where the rank 0 sends 1000 
</span><br>
<span class="quotelev2">&gt;&gt; messages of 1 byte to rank 1 and I have almost the second timings with 
</span><br>
<span class="quotelev2">&gt;&gt; the 7 ms. If in the same application I add the MPI_Recv and MPI_Send 
</span><br>
<span class="quotelev2">&gt;&gt; respectively in order to have a ping-pong application then the 
</span><br>
<span class="quotelev2">&gt;&gt; ping-pong duration is 100ms (like SkaMPI). Can someone explain me why 
</span><br>
<span class="quotelev2">&gt;&gt; is this happening? The ping-pong takes 100 ms and the ping without 
</span><br>
<span class="quotelev2">&gt;&gt; synchronization takes 7 ms.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not convinced I'm following you at all.  Maybe the following helps, 
</span><br>
<span class="quotelev1">&gt; though maybe it's just obvious and misses the point you're trying to make.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a ping-pong test, you have something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tsend = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; MPI_Send
</span><br>
<span class="quotelev1">&gt; tsend = MPI_Wtime() - tsend
</span><br>
<span class="quotelev1">&gt; trecv = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; MPI_Recv
</span><br>
<span class="quotelev1">&gt; trecv = MPI_Wtime() - trecv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The send time times how long it takes to get the message out of the 
</span><br>
<span class="quotelev1">&gt; user's send buffer.  This time is very short.  In contrast, the 
</span><br>
<span class="quotelev1">&gt; &quot;receive&quot; time mostly measures how long it takes for the ping message to 
</span><br>
<span class="quotelev1">&gt; reach the peer and the pong message to return.  The actual time to do 
</span><br>
<span class="quotelev1">&gt; the receive processing is very short and accounts for a tiny fraction of 
</span><br>
<span class="quotelev1">&gt; trecv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If a sender sends many short messages to a receiver and the two 
</span><br>
<span class="quotelev1">&gt; processes don't synchronize much, you can overlap many messages and hide 
</span><br>
<span class="quotelev1">&gt; the long transit time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a simple model:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sender injects message into interconnect, MPI_Send completes  (this time 
</span><br>
<span class="quotelev1">&gt; is short)
</span><br>
<span class="quotelev1">&gt; message travels the interconnect to the receiver (this time is long)
</span><br>
<span class="quotelev1">&gt; receiver unpacks the message and MPI_Recv completes (this time is short)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A ping-pong test counts the long inter-process transit time.  Sending 
</span><br>
<span class="quotelev1">&gt; many short messages before synchronizing hides the long transit time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry if this discussion misses the point you're trying to make.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Dear Eugene,
<br>
<p>Thanks a lot, this was what I wanted to know. Now I understood it.
<br>
<p>Best regards,
<br>
George Markomanolis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14888.php">Tushar Andriyas: "[OMPI users] PROBLEM WITH MPIRUN"</a>
<li><strong>Previous message:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
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
