<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 09:22:54 2012" -->
<!-- isoreceived="20120504132254" -->
<!-- sent="Fri, 04 May 2012 15:20:20 +0200" -->
<!-- isosent="20120504132020" -->
<!-- name="Jorge Chiva Segura" -->
<!-- email="jordic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="1336137620.8607.2457.camel_at_hokuto" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4F9EA04A00136FF5_at_" -->
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
<strong>Date:</strong> 2012-05-04 09:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19194.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19195.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19195.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ups, I edited the code to make it easier to understand but I forgot to
<br>
change two p2, sorry ^^' .
<br>
I hope this one is completely right:
<br>
<p>1: for(int p1=0; p1&lt;np; ++p1) { 
<br>
2: for(int p2=0; p2&lt;np; ++p2) { 
<br>
3: if(me==p1) { 
<br>
4: if(sendSize(p2))
<br>
MPI_Ssend(sendBuffer[p2],sendSize(p2),MPI_FLOAT,p2,0,myw);  //processor
<br>
p1 sends data to processor p2
<br>
5: if(recvSize(p2))
<br>
MPI_Recv(recvBuffer[p2],recvSize(p2),MPI_FLOAT,p2,0,myw,&amp;status);  //processor p1 receives data to processor p2
<br>
6: } else if(me==p2) { 
<br>
7: if(recvSize(p1))
<br>
MPI_Recv(recvBuffer[p1],recvSize(p1),MPI_FLOAT,p1,0,myw,&amp;status); //processor p2 receives data to processor p1
<br>
8: if(sendSize(p1))
<br>
MPI_Ssend(sendBuffer[p1],sendSize(p1),MPI_FLOAT,p1,0,myw); //processor
<br>
p2 sends data to processor p1
<br>
9: } 
<br>
10: MPI_Barrier(myw); 
<br>
11: } 
<br>
12: } 
<br>
<p>This is the real code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int p1=0; p1&lt;mpiS; ++p1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int p2=0; p2&lt;mpiS; ++p2) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(mpiR==p1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sento=p2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(s.getMem(sento)){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ite&gt;25) cout&lt;&lt;&quot;p1(&quot;&lt;&lt;p1&lt;&lt;&quot;) enviar &quot;&lt;&lt;sento&lt;&lt;&quot;
<br>
&quot;&lt;&lt;s.getMem(sento)&lt;&lt;&quot; FLOATS &quot;&lt;&lt;endl;
<br>
<p>ok=MPI_Ssend(s.extractBuffer(sento),s.getMem(sento),MPI_FLOAT,sento,0,myw); 				
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ok!=MPI_SUCCESS)  cout&lt;&lt;&quot;p1(&quot;&lt;&lt;p1&lt;&lt;&quot;) enviar &quot;&lt;&lt;sento&lt;&lt;&quot;
<br>
&quot;&lt;&lt;s.getMem(sento)&lt;&lt;&quot; PROBLEMS &quot;&lt;&lt;ok&lt;&lt;endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(r.getMem(sento)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ite&gt;25) cout&lt;&lt;&quot;p1(&quot;&lt;&lt;p1&lt;&lt;&quot;) recibir &quot;&lt;&lt;sento&lt;&lt;&quot;
<br>
&quot;&lt;&lt;r.getMem(sento)&lt;&lt;&quot; FLOATS &quot;&lt;&lt;endl;
<br>
<p>ok=MPI_Recv(r.extractBuffer(sento),r.getMem(sento),MPI_FLOAT,sento,0,myw,&amp;status); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ok!=MPI_SUCCESS) cout&lt;&lt;&quot;p1(&quot;&lt;&lt;p1&lt;&lt;&quot;) recibir &quot;&lt;&lt;sento&lt;&lt;&quot;
<br>
&quot;&lt;&lt;r.getMem(sento)&lt;&lt;&quot; PROBLEMS &quot;&lt;&lt;ok&lt;&lt;endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(mpiR==p2) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sento=p1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(r.getMem(sento)) {			
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ite&gt;25) cout&lt;&lt;&quot;p2(&quot;&lt;&lt;p2&lt;&lt;&quot;) recibir &quot;&lt;&lt;sento&lt;&lt;&quot;
<br>
&quot;&lt;&lt;r.getMem(sento)&lt;&lt;&quot; FLOATS &quot;&lt;&lt;endl;
<br>
<p>ok=MPI_Recv(r.extractBuffer(sento),r.getMem(sento),MPI_FLOAT,sento,0,myw,&amp;status); 				
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ok!=MPI_SUCCESS) cout&lt;&lt;&quot;p2(&quot;&lt;&lt;p2&lt;&lt;&quot;) recibir &quot;&lt;&lt;sento&lt;&lt;&quot;
<br>
&quot;&lt;&lt;r.getMem(sento)&lt;&lt;&quot; PROBLEMS &quot;&lt;&lt;ok&lt;&lt;endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(s.getMem(sento)){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ite&gt;25) cout&lt;&lt;&quot;p2(&quot;&lt;&lt;p2&lt;&lt;&quot;) enviar &quot;&lt;&lt;sento&lt;&lt;&quot;
<br>
&quot;&lt;&lt;s.getMem(sento)&lt;&lt;&quot; FLOATS &quot;&lt;&lt;endl;
<br>
<p>ok=MPI_Ssend(s.extractBuffer(sento),s.getMem(sento),MPI_FLOAT,sento,0,myw); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ok!=MPI_SUCCESS)  cout&lt;&lt;&quot;p2(&quot;&lt;&lt;p2&lt;&lt;&quot;) enviar &quot;&lt;&lt;sento&lt;&lt;&quot;
<br>
&quot;&lt;&lt;s.getMem(sento)&lt;&lt;&quot; PROBLEMS &quot;&lt;&lt;ok&lt;&lt;endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(myw);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Thanks Eduardo
<br>
<p>On Fri, 2012-05-04 at 14:58 +0200, Eduardo Morras wrote:
<br>
<p><span class="quotelev1">&gt; At 11:52 04/05/2012, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I have a program that executes a communication loop similar to this one:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;1:    for(int p1=0; p1&lt;np; ++p1) {
</span><br>
<span class="quotelev2">&gt; &gt;2:        for(int p2=0; p2&lt;np; ++p2) {
</span><br>
<span class="quotelev2">&gt; &gt;3:            if(me==p1) {
</span><br>
<span class="quotelev2">&gt; &gt;4:                if(sendSize(p2)) 
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Ssend(sendBuffer[p2],sendSize(p2),MPI_FLOAT,p2,0,myw);
</span><br>
<span class="quotelev2">&gt; &gt;5:                if(recvSize(p2)) 
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Recv(recvBuffer[p2],recvSize(p2),MPI_FLOAT,p2,0,myw,&amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;6:            } else if(yo==p2) {
</span><br>
<span class="quotelev2">&gt; &gt;7:                if(recvSize(p1)) 
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Recv(recvBuffer[p1],recvSize(p1),MPI_FLOAT,p2,0,myw,&amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;8:                if(sendSize(p1)) 
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Ssend(sendBuffer[p1],sendSize(p1),MPI_FLOAT,p2,0,myw);
</span><br>
<span class="quotelev2">&gt; &gt;9:            }
</span><br>
<span class="quotelev2">&gt; &gt;10:          MPI_Barrier(myw);
</span><br>
<span class="quotelev2">&gt; &gt;11:     }
</span><br>
<span class="quotelev2">&gt; &gt;12:   }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The program is an iterative process that makes some calculations, 
</span><br>
<span class="quotelev2">&gt; &gt;communicates and then continues with the next iteration. The problem 
</span><br>
<span class="quotelev2">&gt; &gt;is that after making 30 successful iterations the program hangs. 
</span><br>
<span class="quotelev2">&gt; &gt;With padb I have seen that one of the processors waits at line 5 for 
</span><br>
<span class="quotelev2">&gt; &gt;the reception of data that was already sent and the rest of the 
</span><br>
<span class="quotelev2">&gt; &gt;processors are waiting at the barrier in line 10. The size of the 
</span><br>
<span class="quotelev2">&gt; &gt;messages and buffers is the same for all the iterations.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;My real program makes use of asynchronous communications for obvious 
</span><br>
<span class="quotelev2">&gt; &gt;performance reasons and it worked without problems when the case to 
</span><br>
<span class="quotelev2">&gt; &gt;solve was smaller (lower number of processors and memory), but I 
</span><br>
<span class="quotelev2">&gt; &gt;found that for this case the program hanged and that is why a 
</span><br>
<span class="quotelev2">&gt; &gt;changed the communication routine using synchronous communications 
</span><br>
<span class="quotelev2">&gt; &gt;to see where is the problem. Now I know where the program hangs, but 
</span><br>
<span class="quotelev2">&gt; &gt;I don't understand what I am doing wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All messages has p2 as destination. So, p1 is waiting for a message 
</span><br>
<span class="quotelev1">&gt; that hasn't been sended for him. He shouldn't be waiting any 
</span><br>
<span class="quotelev1">&gt; messages. Don't know the logic of your program, so can't tell more 
</span><br>
<span class="quotelev1">&gt; suggestions or clues.
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><p><pre>
-- 
Aquest missatge ha estat analitzat per MailScanner
a la cerca de virus i d'altres continguts perillosos,
i es considera que est&#224; net.
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19194.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19195.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19195.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
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
