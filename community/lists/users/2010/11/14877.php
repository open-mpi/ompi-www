<?
$subject_val = "Re: [OMPI users] tool for measuring the ping with accuracy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 13:29:34 2010" -->
<!-- isoreceived="20101123182934" -->
<!-- sent="Tue, 23 Nov 2010 10:27:37 -0800" -->
<!-- isosent="20101123182737" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tool for measuring the ping with accuracy" -->
<!-- id="4CEC0799.60508_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE9AB5E.4080103_at_markomanolis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tool for measuring the ping with accuracy<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 13:27:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14878.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="14876.php">Hicham Mouline: "[OMPI users] MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="14854.php">George Markomanolis: "[OMPI users] tool for measuring the ping with accuracy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Markomanolis wrote:
<br>
<p><span class="quotelev1">&gt; Dear Eugene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for the answer you were right for the eager mode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have one more question. I am looking for an official tool to measure 
</span><br>
<span class="quotelev1">&gt; the ping time, just sending a message of 1 byte or more and measure 
</span><br>
<span class="quotelev1">&gt; the duration of the MPI_Send command on the rank 0 and the duration of 
</span><br>
<span class="quotelev1">&gt; the MPI_Recv on rank 1. I would like to know any formal tool because I 
</span><br>
<span class="quotelev1">&gt; am using also SkaMPI and the results really depend on the call of the 
</span><br>
<span class="quotelev1">&gt; synchronization before the measurement starts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So for example with synchronizing the processors, sending 1 byte, I have:
</span><br>
<span class="quotelev1">&gt; rank 0, MPI_Send: ~7 ms
</span><br>
<span class="quotelev1">&gt; rank 1, MPI_Recv: ~52 ms
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where 52 ms is almost the half of the ping-pong and this is ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without synchronizing I have:
</span><br>
<span class="quotelev1">&gt; rank 0, MPI_Send: ~7 ms
</span><br>
<span class="quotelev1">&gt; rank 1, MPI_Recv: ~7 ms
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I developed a simple application where the rank 0 sends 1000 
</span><br>
<span class="quotelev1">&gt; messages of 1 byte to rank 1 and I have almost the second timings with 
</span><br>
<span class="quotelev1">&gt; the 7 ms. If in the same application I add the MPI_Recv and MPI_Send 
</span><br>
<span class="quotelev1">&gt; respectively in order to have a ping-pong application then the 
</span><br>
<span class="quotelev1">&gt; ping-pong duration is 100ms (like SkaMPI). Can someone explain me why 
</span><br>
<span class="quotelev1">&gt; is this happening? The ping-pong takes 100 ms and the ping without 
</span><br>
<span class="quotelev1">&gt; synchronization takes 7 ms.
</span><br>
<p>I'm not convinced I'm following you at all.  Maybe the following helps, 
<br>
though maybe it's just obvious and misses the point you're trying to make.
<br>
<p>In a ping-pong test, you have something like this:
<br>
<p>tsend = MPI_Wtime()
<br>
MPI_Send
<br>
tsend = MPI_Wtime() - tsend
<br>
trecv = MPI_Wtime()
<br>
MPI_Recv
<br>
trecv = MPI_Wtime() - trecv
<br>
<p>The send time times how long it takes to get the message out of the 
<br>
user's send buffer.  This time is very short.  In contrast, the 
<br>
&quot;receive&quot; time mostly measures how long it takes for the ping message to 
<br>
reach the peer and the pong message to return.  The actual time to do 
<br>
the receive processing is very short and accounts for a tiny fraction of 
<br>
trecv.
<br>
<p>If a sender sends many short messages to a receiver and the two 
<br>
processes don't synchronize much, you can overlap many messages and hide 
<br>
the long transit time.
<br>
<p>Here's a simple model:
<br>
<p>sender injects message into interconnect, MPI_Send completes  (this time 
<br>
is short)
<br>
message travels the interconnect to the receiver (this time is long)
<br>
receiver unpacks the message and MPI_Recv completes (this time is short)
<br>
<p>A ping-pong test counts the long inter-process transit time.  Sending 
<br>
many short messages before synchronizing hides the long transit time.
<br>
<p>Sorry if this discussion misses the point you're trying to make.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14878.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="14876.php">Hicham Mouline: "[OMPI users] MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="14854.php">George Markomanolis: "[OMPI users] tool for measuring the ping with accuracy"</a>
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
