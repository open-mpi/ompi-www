<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 08:56:15 2012" -->
<!-- isoreceived="20120504125615" -->
<!-- sent="Fri, 04 May 2012 14:58:12 +0200" -->
<!-- isosent="20120504125812" -->
<!-- name="Eduardo Morras" -->
<!-- email="nec556_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="4F9EA04A00136FF5_at_" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1336125161.8607.2420.camel_at_hokuto" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Recv hangs<br>
<strong>From:</strong> Eduardo Morras (<em>nec556_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 08:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19193.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19191.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19182.php">Jorge Chiva Segura: "[OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19193.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19193.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 11:52 04/05/2012, you wrote:
<br>
<span class="quotelev1">&gt;Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a program that executes a communication loop similar to this one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1:    for(int p1=0; p1&lt;np; ++p1) {
</span><br>
<span class="quotelev1">&gt;2:        for(int p2=0; p2&lt;np; ++p2) {
</span><br>
<span class="quotelev1">&gt;3:            if(me==p1) {
</span><br>
<span class="quotelev1">&gt;4:                if(sendSize(p2)) 
</span><br>
<span class="quotelev1">&gt;MPI_Ssend(sendBuffer[p2],sendSize(p2),MPI_FLOAT,p2,0,myw);
</span><br>
<span class="quotelev1">&gt;5:                if(recvSize(p2)) 
</span><br>
<span class="quotelev1">&gt;MPI_Recv(recvBuffer[p2],recvSize(p2),MPI_FLOAT,p2,0,myw,&amp;status);
</span><br>
<span class="quotelev1">&gt;6:            } else if(yo==p2) {
</span><br>
<span class="quotelev1">&gt;7:                if(recvSize(p1)) 
</span><br>
<span class="quotelev1">&gt;MPI_Recv(recvBuffer[p1],recvSize(p1),MPI_FLOAT,p2,0,myw,&amp;status);
</span><br>
<span class="quotelev1">&gt;8:                if(sendSize(p1)) 
</span><br>
<span class="quotelev1">&gt;MPI_Ssend(sendBuffer[p1],sendSize(p1),MPI_FLOAT,p2,0,myw);
</span><br>
<span class="quotelev1">&gt;9:            }
</span><br>
<span class="quotelev1">&gt;10:          MPI_Barrier(myw);
</span><br>
<span class="quotelev1">&gt;11:     }
</span><br>
<span class="quotelev1">&gt;12:   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The program is an iterative process that makes some calculations, 
</span><br>
<span class="quotelev1">&gt;communicates and then continues with the next iteration. The problem 
</span><br>
<span class="quotelev1">&gt;is that after making 30 successful iterations the program hangs. 
</span><br>
<span class="quotelev1">&gt;With padb I have seen that one of the processors waits at line 5 for 
</span><br>
<span class="quotelev1">&gt;the reception of data that was already sent and the rest of the 
</span><br>
<span class="quotelev1">&gt;processors are waiting at the barrier in line 10. The size of the 
</span><br>
<span class="quotelev1">&gt;messages and buffers is the same for all the iterations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My real program makes use of asynchronous communications for obvious 
</span><br>
<span class="quotelev1">&gt;performance reasons and it worked without problems when the case to 
</span><br>
<span class="quotelev1">&gt;solve was smaller (lower number of processors and memory), but I 
</span><br>
<span class="quotelev1">&gt;found that for this case the program hanged and that is why a 
</span><br>
<span class="quotelev1">&gt;changed the communication routine using synchronous communications 
</span><br>
<span class="quotelev1">&gt;to see where is the problem. Now I know where the program hangs, but 
</span><br>
<span class="quotelev1">&gt;I don't understand what I am doing wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any suggestions?
</span><br>
<p>All messages has p2 as destination. So, p1 is waiting for a message 
<br>
that hasn't been sended for him. He shouldn't be waiting any 
<br>
messages. Don't know the logic of your program, so can't tell more 
<br>
suggestions or clues.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19193.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19191.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19182.php">Jorge Chiva Segura: "[OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19193.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19193.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
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
