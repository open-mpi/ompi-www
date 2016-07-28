<?
$subject_val = "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 20 09:23:03 2011" -->
<!-- isoreceived="20111120142303" -->
<!-- sent="Sun, 20 Nov 2011 14:22:56 +0000 (GMT)" -->
<!-- isosent="20111120142256" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe" -->
<!-- id="1321798976.14760.YahooMailNeo_at_web24705.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1321792747.6279.YahooMailNeo_at_web121703.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2011-11-20 09:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="17793.php">Mudassar Majeed: "[OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="17793.php">Mudassar Majeed: "[OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mudassar!
<br>
<p><p><p><span class="quotelev1">&gt;Dear people, 
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I have a scenario as shown below, please tell me if it is possible or not
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;while(!IsDone)
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// some code here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Irecv( .......... );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// some code here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Iprobe( ........., &amp;is_there_a_message);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;if(is_there_a_message)
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160; MPI_Wait( ....... );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// move forward ... some other code here....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My scenario is an 
</span><br>
asynchronous communication where some other process may or may not send a
<br>
&nbsp;message to this
<br>
<span class="quotelev1">&gt; process, will MPI_Iprobe find out whether it is necessary to call MPI_Wait()&#160; or not ?
</span><br>
<p><p>Sorry, but this conveys no sense to me...
<br>
1.You don't need to call MPI_Irecv() before MPI_Iprobe() to get the information if there's a new message... :)
<br>
<p>2. If MPI_Iprobe() returns that there's a message then you don't need to call MPI_Wait() anymore.
<br>
Just receive it by MPI_Recv()... :)
<br>
<p><p><p><span class="quotelev1">&gt; because if we do not do this the process may start waiting for a message that may not come and will block. 
</span><br>
<p><p>Wouldn't this fit?
<br>
<pre>
---
while(!isDone) {
&#160; &#160; // some code here
&#160; &#160; MPI_Iprobe(...,there_is_a_message,...); // never blocks
&#160; &#160; if( there_is_a_message ) {
&#160;&#160;&#160;&#160;&#160;&#160;&#160; // doesn't block because there's a message:
&#160; &#160; &#160; &#160; MPI_Recv(message,...);
&#160;&#160;&#160;&#160;&#160;&#160;&#160; // here you can use your message:
&#160;&#160; &#160; &#160;&#160; process(message);
&#160;&#160;&#160; }
&#160;&#160;&#160; else
&#160;&#160;&#160;&#160;&#160;&#160;&#160; process(other_work); // we have no new message so we do another work
}
---
Here the process will receive the message if there's one.
It won't block if there's no message.
If I haven't understood your problem in the right way - please write more systematically
- how receiver should react if there's a message (e.g. receive it or what else?)
- how receiver should react if there's no message (e.g. block or continue with another work?)
Best regards,
Lukas
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="17793.php">Mudassar Majeed: "[OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="17793.php">Mudassar Majeed: "[OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="17795.php">Mudassar Majeed: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
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
