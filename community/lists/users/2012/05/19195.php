<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 10:42:21 2012" -->
<!-- isoreceived="20120504144221" -->
<!-- sent="Fri, 04 May 2012 16:44:16 +0200" -->
<!-- isosent="20120504144416" -->
<!-- name="Eduardo Morras" -->
<!-- email="nec556_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="4EFDA80602038BE4_at_" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1336137620.8607.2457.camel_at_hokuto" -->
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
<strong>Date:</strong> 2012-05-04 10:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19196.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19194.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19193.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19196.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19196.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 15:20 04/05/2012, you wrote:
<br>
<span class="quotelev1">&gt;Ups, I edited the code to make it easier to understand but I forgot 
</span><br>
<span class="quotelev1">&gt;to change two p2, sorry ^^' .
</span><br>
<span class="quotelev1">&gt;I hope this one is completely right:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1: for(int p1=0; p1&lt;np; ++p1) {
</span><br>
<span class="quotelev1">&gt;2: for(int p2=0; p2&lt;np; ++p2) {
</span><br>
<span class="quotelev1">&gt;3: if(me==p1) {
</span><br>
<span class="quotelev1">&gt;4: if(sendSize(p2)) 
</span><br>
<span class="quotelev1">&gt;MPI_Ssend(sendBuffer[p2],sendSize(p2),MPI_FLOAT,p2,0,myw); 
</span><br>
<span class="quotelev1">&gt;//processor p1 sends data to processor p2
</span><br>
<span class="quotelev1">&gt;5: if(recvSize(p2)) 
</span><br>
<span class="quotelev1">&gt;MPI_Recv(recvBuffer[p2],recvSize(p2),MPI_FLOAT,p2,0,myw,&amp;status); 
</span><br>
<span class="quotelev1">&gt;//processor p1 receives data to processor p2
</span><br>
<span class="quotelev1">&gt;6: } else if(me==p2) {
</span><br>
<span class="quotelev1">&gt;7: if(recvSize(p1)) 
</span><br>
<span class="quotelev1">&gt;MPI_Recv(recvBuffer[p1],recvSize(p1),MPI_FLOAT,p1,0,myw,&amp;status); 
</span><br>
<span class="quotelev1">&gt;//processor p2 receives data to processor p1
</span><br>
<span class="quotelev1">&gt;8: if(sendSize(p1)) 
</span><br>
<span class="quotelev1">&gt;MPI_Ssend(sendBuffer[p1],sendSize(p1),MPI_FLOAT,p1,0,myw); 
</span><br>
<span class="quotelev1">&gt;//processor p2 sends data to processor p1
</span><br>
<span class="quotelev1">&gt;9: }
</span><br>
<span class="quotelev1">&gt;10: MPI_Barrier(myw);
</span><br>
<span class="quotelev1">&gt;11: }
</span><br>
<span class="quotelev1">&gt;12: }
</span><br>
<p><p>Now p1 will send messages to p2 and receive messages from p2
<br>
<p>Now p2 will send messages to p1 and receive messages from p1
<br>
<p>The logic of send/recv looks ok. Now, in 5 and 7, recvSize(p2) and 
<br>
recvSize(p1) function what value returns? The size of the buffer 
<br>
received from the MPI_Recv done in previous for loop?
<br>
<p><span class="quotelev1">&gt;This is the real code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;for(int p1=0; p1&lt;mpiS; ++p1) {
</span><br>
<span class="quotelev1">&gt;for(int p2=0; p2&lt;mpiS; ++p2) {
</span><br>
<span class="quotelev1">&gt;if(mpiR==p1) {
</span><br>
<span class="quotelev1">&gt;sento=p2;
</span><br>
<span class="quotelev1">&gt;if(s.getMem(sento)){
</span><br>
<span class="quotelev1">&gt;if(ite&gt;25) cout&lt;&lt;&quot;p1(&quot;&lt;&lt;p1&lt;&lt;&quot;) enviar &quot;&lt;&lt;sento&lt;&lt;&quot; 
</span><br>
<span class="quotelev1">&gt;&quot;&lt;&lt;s.getMem(sento)&lt;&lt;&quot; FLOATS &quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;ok=MPI_Ssend(s.extractBuffer(sento),s.getMem(sento),MPI_FLOAT,sento,0,myw);
</span><br>
<p>Don't know what are you doing here, second parameter, s.getMem(sento) 
<br>
should be the size of the buffer.
<br>
<p>MPI_Ssend is defined for c++ :
<br>
<p>&nbsp;&nbsp;&nbsp;void Comm::Ssend(const void* buf, int count, const Datatype&amp; 
<br>
datatype, int dest, int tag) const
<br>
<p>and you are using the C call. Are you mixing c and c++ code? Be 
<br>
careful with that.
<br>
<p>The rest of your code has the same problems, check them. Perhaps you 
<br>
need a tutorial, check 
<br>
<a href="http://www.mpitutorial.com/beginner-mpi-tutorial/">http://www.mpitutorial.com/beginner-mpi-tutorial/</a> , it's for mpich 
<br>
but is mpi-flavourless, so it works with openmpi too.
<br>
<p><p><span class="quotelev1">&gt;Thanks Eduardo
</span><br>
<p>HTH and happy coding 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19196.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19194.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19193.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19196.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19196.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
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
