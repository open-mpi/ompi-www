<?
$subject_val = "Re: [OMPI users] efficient strategy with temporary message copy";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 11:31:47 2014" -->
<!-- isoreceived="20140317153147" -->
<!-- sent="Mon, 17 Mar 2014 15:31:46 +0000" -->
<!-- isosent="20140317153146" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient strategy with temporary message copy" -->
<!-- id="596772B8-7EC4-41CF-B443-CCED69DE324F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPW4YGKX7joVYhtprfgYqDbhJo8nA-RUm6reagjvL_VPf6jusQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] efficient strategy with temporary message copy<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 11:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23871.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and	Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23868.php">christophe petit: "[OMPI users] efficient strategy with temporary message copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23876.php">christophe petit: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Reply:</strong> <a href="23876.php">christophe petit: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2014, at 10:24 PM, christophe petit &lt;christophe.petit09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am studying the optimization strategy when the number of communication functions in a codeis high.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My courses on MPI say two things for optimization which are contradictory :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1*) You have to use temporary message copy to allow non-blocking sending and uncouple the sending and receiving
</span><br>
<p>There's a lot of schools of thought here, and the real answer is going to depend on your application.
<br>
<p>If the message is &quot;short&quot; (and the exact definition of &quot;short&quot; depends on your platform -- it varies depending on your CPU, your memory, your CPU/memory interconnect, ...etc.), then copying to a pre-allocated bounce buffer is typically a good idea.  That lets you keep using your &quot;real&quot; buffer and not have to wait until communication is done.
<br>
<p>For &quot;long&quot; messages, the equation is a bit different.  If &quot;long&quot; isn't &quot;enormous&quot;, you might be able to have N buffers available, and simply work on 1 of them at a time in your main application and use the others for ongoing non-blocking communication.  This is sometimes called &quot;shadow&quot; copies, or &quot;ghost&quot; copies.
<br>
<p>Such shadow copies are most useful when you receive something each iteration, for example.  For example, something like this:
<br>
<p>&nbsp;&nbsp;buffer[0] = malloc(...);
<br>
&nbsp;&nbsp;buffer[1] = malloc(...);
<br>
&nbsp;&nbsp;current = 0;
<br>
&nbsp;&nbsp;while (still_doing_iterations) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(buffer[current], ..., &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/// work on buffer[current - 1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(req, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;current = 1 - current;
<br>
&nbsp;&nbsp;}
<br>
<p>You get the idea.
<br>
<p><span class="quotelev1">&gt; 2*) Avoid using temporary message copy because the copy will add extra cost on execution time. 
</span><br>
<p>It will, if the memcpy cost is significant (especially compared to the network time to send it).  If the memcpy is small/insignificant, then don't worry about it.
<br>
<p>You'll need to determine where this crossover point is, however.
<br>
<p>Also keep in mind that MPI and/or the underlying network stack will likely be doing these kinds of things under the covers for you.  Indeed, if you send short messages -- even via MPI_SEND -- it may return &quot;immediately&quot;, indicating that MPI says it's safe for you to use the send buffer.  But that doesn't mean that the message has even actually left the current server and gone out onto the network yet (i.e., some other layer below you may have just done a memcpy because it was a short message, and the processing/sending of that message is still ongoing).
<br>
<p><span class="quotelev1">&gt; And then, we are adviced to do : 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - replace MPI_SEND by MPI_SSEND (synchroneous blocking sending) : it is said that execution is divided by a factor 2
</span><br>
<p>This very, very much depends on your application.
<br>
<p>MPI_SSEND won't return until the receiver has started to receive the message.
<br>
<p>For some communication patterns, putting in this additional level of synchronization is helpful -- it keeps all MPI processes in tighter synchronization and you might experience less jitter, etc.  And therefore overall execution time is faster.
<br>
<p>But for others, it adds unnecessary delay.
<br>
<p>I'd say it's an over-generalization that simply replacing MPI_SEND with MPI_SSEND always reduces execution time by 2.
<br>
<p><span class="quotelev1">&gt; - use MPI_ISSEND and MPI_IRECV with MPI_WAIT function to synchronize (synchroneous non-blocking sending) : it is said that execution is divided by a factor 3
</span><br>
<p>Again, it depends on the app.  Generally, non-blocking communication is better -- *if your app can effectively overlap communication and computation*.
<br>
<p>If your app doesn't take advantage of this overlap, then you won't see such performance benefits.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Isend(buffer, ..., req);
<br>
&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req, ...);
<br>
<p>Technically, the above uses ISEND and WAIT... but it's actually probably going to be *slower* than using MPI_SEND because you've made multiple function calls with no additional work between the two -- so the app didn't effectively overlap the communication with any local computation.  Hence: no performance benefit.
<br>
<p><span class="quotelev1">&gt; So what's the best optimization ? Do we have to use temporary message copy or not and if yes, what's the case for ?
</span><br>
<p>As you can probably see from my text above, the answer is: it depends.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23871.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and	Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23868.php">christophe petit: "[OMPI users] efficient strategy with temporary message copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23876.php">christophe petit: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Reply:</strong> <a href="23876.php">christophe petit: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
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
