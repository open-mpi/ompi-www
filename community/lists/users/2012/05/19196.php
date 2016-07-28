<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 11:44:38 2012" -->
<!-- isoreceived="20120504154438" -->
<!-- sent="Fri, 04 May 2012 17:41:39 +0200" -->
<!-- isosent="20120504154139" -->
<!-- name="Jorge Chiva Segura" -->
<!-- email="jordic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="1336146099.8607.2514.camel_at_hokuto" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4EFDA80602038BE4_at_" -->
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
<strong>From:</strong> Jorge Chiva Segura (<em>jordic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 11:41:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19197.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19195.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19195.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19229.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19229.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2012-05-04 at 16:44 +0200, Eduardo Morras wrote:
<br>
<span class="quotelev1">&gt; At 15:20 04/05/2012, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Ups, I edited the code to make it easier to understand but I forgot 
</span><br>
<span class="quotelev2">&gt; &gt;to change two p2, sorry ^^' .
</span><br>
<span class="quotelev2">&gt; &gt;I hope this one is completely right:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;1: for(int p1=0; p1&lt;np; ++p1) {
</span><br>
<span class="quotelev2">&gt; &gt;2: for(int p2=0; p2&lt;np; ++p2) {
</span><br>
<span class="quotelev2">&gt; &gt;3: if(me==p1) {
</span><br>
<span class="quotelev2">&gt; &gt;4: if(sendSize(p2)) 
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Ssend(sendBuffer[p2],sendSize(p2),MPI_FLOAT,p2,0,myw); 
</span><br>
<span class="quotelev2">&gt; &gt;//processor p1 sends data to processor p2
</span><br>
<span class="quotelev2">&gt; &gt;5: if(recvSize(p2)) 
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Recv(recvBuffer[p2],recvSize(p2),MPI_FLOAT,p2,0,myw,&amp;status); 
</span><br>
<span class="quotelev2">&gt; &gt;//processor p1 receives data to processor p2
</span><br>
<span class="quotelev2">&gt; &gt;6: } else if(me==p2) {
</span><br>
<span class="quotelev2">&gt; &gt;7: if(recvSize(p1)) 
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Recv(recvBuffer[p1],recvSize(p1),MPI_FLOAT,p1,0,myw,&amp;status); 
</span><br>
<span class="quotelev2">&gt; &gt;//processor p2 receives data to processor p1
</span><br>
<span class="quotelev2">&gt; &gt;8: if(sendSize(p1)) 
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Ssend(sendBuffer[p1],sendSize(p1),MPI_FLOAT,p1,0,myw); 
</span><br>
<span class="quotelev2">&gt; &gt;//processor p2 sends data to processor p1
</span><br>
<span class="quotelev2">&gt; &gt;9: }
</span><br>
<span class="quotelev2">&gt; &gt;10: MPI_Barrier(myw);
</span><br>
<span class="quotelev2">&gt; &gt;11: }
</span><br>
<span class="quotelev2">&gt; &gt;12: }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now p1 will send messages to p2 and receive messages from p2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now p2 will send messages to p1 and receive messages from p1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The logic of send/recv looks ok. Now, in 5 and 7, recvSize(p2) and 
</span><br>
<span class="quotelev1">&gt; recvSize(p1) function what value returns? 
</span><br>
All the sendSizes and RecvSizes are constant between iterations and are
<br>
calculated as a setup before all the calculations start.
<br>
<p>The function recvSize(p) returns the size of the message that I should
<br>
receive from processor p, so in the case of line 5 recvSize(p2) returns
<br>
the size of the message that I (me,p1) should receive from processor p2
<br>
and at line 7 recvSize(p1) returns the size of the message that I
<br>
(me,p2) should receive from processor p1. Something similar happens with
<br>
sendSize(p). In an hypothetic smaller case involving 3 processors the
<br>
values could be:
<br>
<span class="quotelev1">&gt;From processor 0:
</span><br>
sendSize(0) ==&gt; 0
<br>
sendSize(1) ==&gt; 11
<br>
sendSize(2) ==&gt; 22
<br>
recvSize(0) ==&gt; 0
<br>
recvSize(1) ==&gt; 33
<br>
recvSize(2) ==&gt; 44
<br>
<span class="quotelev1">&gt;From processor 1:
</span><br>
sendSize(0) ==&gt; 33
<br>
sendSize(1) ==&gt; 0
<br>
sendSize(2) ==&gt; 55
<br>
recvSize(0) ==&gt; 11
<br>
recvSize(1) ==&gt; 0
<br>
recvSize(2) ==&gt; 66
<br>
<span class="quotelev1">&gt;From processor 2:
</span><br>
sendSize(0) ==&gt; 44
<br>
sendSize(1) ==&gt; 66
<br>
sendSize(2) ==&gt; 0
<br>
recvSize(0) ==&gt; 22
<br>
recvSize(1) ==&gt; 55
<br>
recvSize(2) ==&gt; 0
<br>
<p>The main thing here is that from processor p1 the sendSize(p2) should
<br>
match the recvSize(p1) from processor p2.
<br>
<span class="quotelev1">&gt; The size of the buffer 
</span><br>
<span class="quotelev1">&gt; received from the MPI_Recv done in previous for loop?
</span><br>
There is no relation between the loops. In each loop only two processors (p1 and p2) 
<br>
communicate some data between them (first p1 sends data to p2 and after p2 sends data to p1) and the
<br>
rest of the processors will be waiting in the Barrier.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;This is the real code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;for(int p1=0; p1&lt;mpiS; ++p1) {
</span><br>
<span class="quotelev2">&gt; &gt;for(int p2=0; p2&lt;mpiS; ++p2) {
</span><br>
<span class="quotelev2">&gt; &gt;if(mpiR==p1) {
</span><br>
<span class="quotelev2">&gt; &gt;sento=p2;
</span><br>
<span class="quotelev2">&gt; &gt;if(s.getMem(sento)){
</span><br>
<span class="quotelev2">&gt; &gt;if(ite&gt;25) cout&lt;&lt;&quot;p1(&quot;&lt;&lt;p1&lt;&lt;&quot;) enviar &quot;&lt;&lt;sento&lt;&lt;&quot; 
</span><br>
<span class="quotelev2">&gt; &gt;&quot;&lt;&lt;s.getMem(sento)&lt;&lt;&quot; FLOATS &quot;&lt;&lt;endl;
</span><br>
<span class="quotelev2">&gt; &gt;ok=MPI_Ssend(s.extractBuffer(sento),s.getMem(sento),MPI_FLOAT,sento,0,myw);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't know what are you doing here, second parameter, s.getMem(sento) 
</span><br>
<span class="quotelev1">&gt; should be the size of the buffer.
</span><br>
And it is the size of the buffer.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Ssend is defined for c++ :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    void Comm::Ssend(const void* buf, int count, const Datatype&amp; 
</span><br>
<span class="quotelev1">&gt; datatype, int dest, int tag) const
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and you are using the C call. Are you mixing c and c++ code? Be 
</span><br>
<span class="quotelev1">&gt; careful with that.
</span><br>
<p><span class="quotelev1">&gt; The rest of your code has the same problems, check them. Perhaps you 
</span><br>
<span class="quotelev1">&gt; need a tutorial, check 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpitutorial.com/beginner-mpi-tutorial/">http://www.mpitutorial.com/beginner-mpi-tutorial/</a> , it's for mpich 
</span><br>
<span class="quotelev1">&gt; but is mpi-flavourless, so it works with openmpi too.
</span><br>
Thanks for the tutorial, I will check it and it is good that it is for
<br>
mpich because now I'm testing the program with it and other versions of
<br>
mpi, but I'm not really sure that this is a beginner problem. 
<br>
<p>I found a way to get my program running without hangs:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/05/19188.php">http://www.open-mpi.org/community/lists/users/2012/05/19188.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/05/19185.php">http://www.open-mpi.org/community/lists/users/2012/05/19185.php</a>
<br>
<p>Do you know what could cause the program to hang with the default value
<br>
(310) and to work fine with 305? I also tested it with 311 but it hanged
<br>
so it seems that it is not enough to activate the SEND flag.
<br>
<p><span class="quotelev2">&gt; &gt;Thanks Eduardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH and happy coding 
</span><br>
<p>Thanks for your help
<br>
<p><p><p><pre>
-- 
Aquest missatge ha estat analitzat per MailScanner
a la cerca de virus i d'altres continguts perillosos,
i es considera que est&#224; net.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19197.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19195.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19195.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19229.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19229.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
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
