<?
$subject_val = "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 20 10:17:15 2011" -->
<!-- isoreceived="20111120151715" -->
<!-- sent="Sun, 20 Nov 2011 15:17:09 +0000 (GMT)" -->
<!-- isosent="20111120151709" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe" -->
<!-- id="1321802229.93658.YahooMailNeo_at_web24713.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1321799954.254.YahooMailNeo_at_web121707.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe<br>
<strong>From:</strong> Lukas Razik (<em>linux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-20 10:17:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17797.php">John R. Cary: "[OMPI users] openmpi and mingw32?"</a>
<li><strong>Previous message:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt; wrote
<br>
<span class="quotelev1">&gt;What if two processes Pi and Pj send message to each other at the same time ? Will both block in your suggested code ? 
</span><br>
<p><p>The suggested code can't block if there are no bugs...
<br>
If it will block when you add send operations will depend on which/when send operations you use.
<br>
<p>If you send with Isend then the processes won't block but be careful:
<br>
Don't use the send buffer again as long as you don't know if the belonging message has been sent out by Isend.
<br>
You can check if Isend() could really send out your message by
<br>
- the blocking operation MPI_Wait() or
<br>
- by the non-blocking MPI_Test():
<br>
<p><a href="http://mpi.deino.net/mpi_functions/MPI_Test.html">http://mpi.deino.net/mpi_functions/MPI_Test.html</a>
<br>
<p>Only when one of these calls returns that the request which belongs to your Isend(buffer,...,request) has been finished you can use the buffer again!
<br>
<p><p><span class="quotelev1">&gt;if not then I can go for that.&#160; BTW, I have tried that before.
</span><br>
<p><p>Regards and good luck!
<br>
Lukas
<br>
<p><p><p><span class="quotelev1">&gt;________________________________
</span><br>
<span class="quotelev1">&gt; From: Lukas Razik &lt;linux_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt;Sent: Sunday, November 20, 2011 3:22 PM
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;Hello Mudassar!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Dear people, 
</span><br>
<span class="quotelev2">&gt;&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I have a scenario as shown below, please tell me if it is possible or not
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;while(!IsDone)
</span><br>
<span class="quotelev2">&gt;&gt;{
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;// some code here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Irecv( .......... );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;// some code here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Iprobe( ........., &amp;is_there_a_message);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;if(is_there_a_message)
</span><br>
<span class="quotelev2">&gt;&gt;&#160;&#160;&#160; MPI_Wait( ....... );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;// move forward ... some other code here....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;}
</span><br>
<span class="quotelev2">&gt;&gt;--------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;My scenario is an 
</span><br>
<span class="quotelev1">&gt;asynchronous communication where some other process may or may not send a
</span><br>
<span class="quotelev1">&gt;message to this
</span><br>
<span class="quotelev2">&gt;&gt; process, will MPI_Iprobe find out
</span><br>
whether it is necessary to call MPI_Wait()&#160; or not ?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry, but this conveys no sense to me...
</span><br>
<span class="quotelev1">&gt;1.You don't need to call MPI_Irecv() before MPI_Iprobe() to get the information if there's a new message... :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. If MPI_Iprobe() returns that there's a message then you don't need to call MPI_Wait() anymore.
</span><br>
<span class="quotelev1">&gt;Just receive it by MPI_Recv()... :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; because if we do not do this the process may start waiting for a message that may not come and will block. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Wouldn't this fit?
</span><br>
<span class="quotelev1">&gt;---
</span><br>
<span class="quotelev1">&gt;while(!isDone) {
</span><br>
<span class="quotelev1">&gt;&#160; &#160; // some code here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160; MPI_Iprobe(...,there_is_a_message,...); // never blocks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160; if( there_is_a_message ) {
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160; // doesn't block because there's a message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; MPI_Recv(message,...);
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160; // here you can use your message:
</span><br>
<span class="quotelev1">&gt;&#160;&#160;
</span><br>
&#160; &#160;&#160; process(message);
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160; else
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160; process(other_work); // we have no new message so we do another work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here the process will receive the message if there's one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It won't block if there's no message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If I haven't understood your problem in the right way - please write more systematically
</span><br>
<span class="quotelev1">&gt;- how receiver should react if there's a message (e.g. receive it or what else?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- how receiver should react if there's no message (e.g. block or continue with another work?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Best regards,
</span><br>
<span class="quotelev1">&gt;Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17797.php">John R. Cary: "[OMPI users] openmpi and mingw32?"</a>
<li><strong>Previous message:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
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
