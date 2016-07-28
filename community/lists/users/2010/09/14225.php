<?
$subject_val = "Re: [OMPI users] computing the latency with OpenMpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 10:45:09 2010" -->
<!-- isoreceived="20100913144509" -->
<!-- sent="Mon, 13 Sep 2010 07:43:14 -0700" -->
<!-- isosent="20100913144314" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] computing the latency with OpenMpi" -->
<!-- id="4C8E3882.1000008_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C8DE50A.3010103_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] computing the latency with OpenMpi<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 10:43:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14226.php">Eugene Loh: "Re: [OMPI users] latency #2"</a>
<li><strong>Previous message:</strong> <a href="14224.php">Ashley Pittman: "Re: [OMPI users] latency #2"</a>
<li><strong>In reply to:</strong> <a href="14222.php">Georges Markomanolis: "[OMPI users] computing the latency with OpenMpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Georges Markomanolis wrote:
<br>
<p><span class="quotelev1">&gt; I have some questions about the duration of the communication with 
</span><br>
<span class="quotelev1">&gt; MPI_Send and MPI_Recv. I am using either SkaMPI either my 
</span><br>
<span class="quotelev1">&gt; implementation to measure the pingpong (MPI_Send and MPI_Recv) time 
</span><br>
<span class="quotelev1">&gt; between two nodes for 1 byte and more. The timing of the pingpong is 
</span><br>
<span class="quotelev1">&gt; 106.8 microseconds. Although if I measure only the ping of the message 
</span><br>
<span class="quotelev1">&gt; (only the MPI_Send) the time is ~20 microseconds. Could anyone explain 
</span><br>
<span class="quotelev1">&gt; me why it is not the half? I would like to understand what is the 
</span><br>
<span class="quotelev1">&gt; difference inside to OpenMpi about MPI_Send and MPI_Recv.
</span><br>
<p>The time for the MPI_Send is the time to move the data out of the user's 
<br>
send buffer.  It is quite possible that the data has not yet gotten to 
<br>
the destination.  If the message is short, it could be buffered 
<br>
somewhere by the MPI implementation.
<br>
<p>The time for MPI_Recv probably includes some amount of waiting time.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More analytical the timings for pingpong between two nodes with a 
</span><br>
<span class="quotelev1">&gt; simple pingpong application, timings only for rank 0 (almost the same 
</span><br>
<span class="quotelev1">&gt; for rank 1):
</span><br>
<span class="quotelev1">&gt; 1 byte, time for MPI_Send, 9 microsec, time for MPI_Recv, 86.4 microsec
</span><br>
<span class="quotelev1">&gt; 1600 bytes, time for MPI_Send, 14.7 microsec, time for MPI_Recv, 
</span><br>
<span class="quotelev1">&gt; 197.07 microsec
</span><br>
<span class="quotelev1">&gt; 3200 bytes, time for MPI_Send, 19.73 microsec, time for MPI_Recv, 
</span><br>
<span class="quotelev1">&gt; 227.6 microsec
</span><br>
<span class="quotelev1">&gt; 518400 bytes, time for MPI_Send, 3536.5 microsec, time for MPI_Recv, 
</span><br>
<span class="quotelev1">&gt; 5739.6 microsec
</span><br>
<span class="quotelev1">&gt; 1049760 bytes, time for MPI_Send, 8020.33 microsec, time for MPI_Recv, 
</span><br>
<span class="quotelev1">&gt; 10287 microsec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the duration of the MPI_Send is till the buffer goes to the queue 
</span><br>
<span class="quotelev1">&gt; of the destination without the message to be saved in the memory or 
</span><br>
<span class="quotelev1">&gt; something like this, right?
</span><br>
<p>It is possible that the data has not gone to the destination, but only 
<br>
some intermediate buffer, but yes it is possible that the message has 
<br>
not made it all the way to the receive buffer by the time the MPI_Send 
<br>
has finished.
<br>
<p><span class="quotelev1">&gt; So if I want to know the real time of sending one message to another 
</span><br>
<span class="quotelev1">&gt; node (taking the half of pingpoing seems that is not right)
</span><br>
<p>It is not clear to me what &quot;the real time&quot; is.  I don't think there is 
<br>
any well-defined answer.  It depends on what you're really looking for, 
<br>
and that is unclear to me.  You could send many sends to many receivers 
<br>
and see how fast a process can emit sends.  You can use a profiler to 
<br>
send how the MPI implementation spends its time;  I've had some success 
<br>
with using Oracle Studio Performance Analyzer on OMPI.  You could use 
<br>
the PERUSE instrumentation inside of OMPI to get timestamps on 
<br>
particular internal events.  You could try designing other experiments.  
<br>
But which one is &quot;right&quot; could be debated.
<br>
<p>Why does it matter?  What are you really looking for?
<br>
<p><span class="quotelev1">&gt; should I use a program with other commands like  MPI_Fence, MPI_Put etc?
</span><br>
<p>Those are a different set of calls (one-sided operations) that could be 
<br>
more or less efficient than Send/Recv.  It varies.
<br>
<p><span class="quotelev1">&gt; Or is there any flag when I execute the application where MPI_Send 
</span><br>
<span class="quotelev1">&gt; behaves like I would expect? According to MPI standards what is 
</span><br>
<span class="quotelev1">&gt; MPI_Send measuring? If there is any article which explain all these 
</span><br>
<span class="quotelev1">&gt; please inform me. 
</span><br>
<p>MPI_Send completes when the data has left the send buffer and that 
<br>
buffer can be reused by the application.  There are many implementation 
<br>
choices.  Specifically, it is possible that the MPI_Send will complete 
<br>
even before the MPI_Recv has started.  But it is also possible that the 
<br>
MPI_Send will not complete until after the MPI_Recv has completed.  It 
<br>
depends on the implementation, which may choose a strategy based on the 
<br>
message size, the interconnect, and other factors.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14226.php">Eugene Loh: "Re: [OMPI users] latency #2"</a>
<li><strong>Previous message:</strong> <a href="14224.php">Ashley Pittman: "Re: [OMPI users] latency #2"</a>
<li><strong>In reply to:</strong> <a href="14222.php">Georges Markomanolis: "[OMPI users] computing the latency with OpenMpi"</a>
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
