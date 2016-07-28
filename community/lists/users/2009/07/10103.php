<?
$subject_val = "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 14:18:38 2009" -->
<!-- isoreceived="20090727181838" -->
<!-- sent="Mon, 27 Jul 2009 11:17:19 -0700" -->
<!-- isosent="20090727181719" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier" -->
<!-- id="4A6DEF2F.5020404_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="OF3A7D9D5B.143C507C-ON852575FC.00740DB5-852575FC.0075C8CC_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 14:17:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10104.php">Jeff Squyres: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Previous message:</strong> <a href="10102.php">jody: "Re: [OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10075.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10121.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="10121.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dick,
<br>
<p>Okay, it's good to know that even if using MPI_Barrier in this fashion 
<br>
did appear to be working, it's not guaranteed to work. Is there an MPI 
<br>
collective function that has the desired effect? that after all 
<br>
processes call this function, any previously posted MPI_Send are 
<br>
guaranteed to have arrived and that MPI_Test will find the message. 
<br>
Without such a function, it seems it would be impossible to know if 
<br>
there are any outstanding messages waiting to be received, if it 
<br>
wasn't known in advance by the receiver to expect the message. 
<br>
Assuming that each process keeps a counter of the number of messages 
<br>
that it has sent and the number that it has received, it should be 
<br>
possible to sum the two counters across all processes and determine if 
<br>
any are outstanding. It could be accomplished with a single 
<br>
MPI_Reduce(sent - received).
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>Richard Treumann wrote:
<br>
<span class="quotelev1">&gt; No - it is not guaranteed. (it is highly probable though)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The return from the MPI_Send only guarantees that the data is safely 
</span><br>
<span class="quotelev1">&gt; held somewhere other than the send buffer so you are free to modify the 
</span><br>
<span class="quotelev1">&gt; send buffer. The MPI standard does not say where the data is to be held. 
</span><br>
<span class="quotelev1">&gt; It only says that once the MPI_Test is successful, the data will have 
</span><br>
<span class="quotelev1">&gt; been delivered to the receive buffer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider this possible scenario:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Send is for a small message
</span><br>
<span class="quotelev1">&gt; The data is sent toward the destination
</span><br>
<span class="quotelev1">&gt; To allow the MPI_Send to complete promptly ,lib MPI makes a temporary 
</span><br>
<span class="quotelev1">&gt; copy of the message
</span><br>
<span class="quotelev1">&gt; The MPI_Send returns once the copy is made
</span><br>
<span class="quotelev1">&gt; the message gets lost in the network
</span><br>
<span class="quotelev1">&gt; the MPI_Barrier does its communication without packet loss and completes
</span><br>
<span class="quotelev1">&gt; the call to MPI_Test returns false
</span><br>
<span class="quotelev1">&gt; the send side gets no ack for the lost message and eventually 
</span><br>
<span class="quotelev1">&gt; retransmits it from the saved temp
</span><br>
<span class="quotelev1">&gt; This time it gets through
</span><br>
<span class="quotelev1">&gt; A later MPI_Test succeeds
</span><br>
<span class="quotelev1">&gt; An ack eventually gets back to the sender and it throws away the temp 
</span><br>
<span class="quotelev1">&gt; copy of the message it was keeping in case a retransmit was needed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not saying any particular MPI library would work this way but it is 
</span><br>
<span class="quotelev1">&gt; one kind of thing that a libmpi might do to give better performance 
</span><br>
<span class="quotelev1">&gt; while maintaining the strict rules of MPI semantic. Since the 
</span><br>
<span class="quotelev1">&gt; MPI_Barrier does not make any guarantee about the destination status of 
</span><br>
<span class="quotelev1">&gt; sends done before it, this kind of optimization is legitimate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you must know that the message is received once the barrier returns, 
</span><br>
<span class="quotelev1">&gt; you need to MPI_Wait the message before you call barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; Hi,
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Two processes run the following program:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; request = MPI_Irecv
</span><br>
<span class="quotelev2">&gt;  &gt; MPI_Send (to the other process)
</span><br>
<span class="quotelev2">&gt;  &gt; MPI_Barrier
</span><br>
<span class="quotelev2">&gt;  &gt; flag = MPI_Test(request)
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Without the barrier, there's a race and MPI_Test may or may not return
</span><br>
<span class="quotelev2">&gt;  &gt; true, indicating whether the message has been received. With the
</span><br>
<span class="quotelev2">&gt;  &gt; barrier, is it guaranteed that the message will have been received,
</span><br>
<span class="quotelev2">&gt;  &gt; and MPI_Test will return true?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Cheers,
</span><br>
<span class="quotelev2">&gt;  &gt; Shaun
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10104.php">Jeff Squyres: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Previous message:</strong> <a href="10102.php">jody: "Re: [OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10075.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10121.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="10121.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
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
