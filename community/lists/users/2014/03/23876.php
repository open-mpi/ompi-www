<?
$subject_val = "Re: [OMPI users] efficient strategy with temporary message copy";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 14:18:24 2014" -->
<!-- isoreceived="20140317181824" -->
<!-- sent="Mon, 17 Mar 2014 19:18:23 +0100" -->
<!-- isosent="20140317181823" -->
<!-- name="christophe petit" -->
<!-- email="christophe.petit09_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient strategy with temporary message copy" -->
<!-- id="CAPW4YGKVV329WRZWd1aoh62fpb47w9vq_9pTi9AFOs4Pz3M8aA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="596772B8-7EC4-41CF-B443-CCED69DE324F_at_cisco.com" -->
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
<strong>From:</strong> christophe petit (<em>christophe.petit09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 14:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23877.php">Oscar Vega-Gisbert: "Re: [OMPI users] OpenMpi-java Examples"</a>
<li><strong>Previous message:</strong> <a href="23875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23879.php">Saliya Ekanayake: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Reply:</strong> <a href="23879.php">Saliya Ekanayake: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff, I understand better the different cases and how to choose as a
<br>
function of the situation
<br>
<p><p>2014-03-17 16:31 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Mar 16, 2014, at 10:24 PM, christophe petit &lt;
</span><br>
<span class="quotelev1">&gt; christophe.petit09_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am studying the optimization strategy when the number of communication
</span><br>
<span class="quotelev1">&gt; functions in a codeis high.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My courses on MPI say two things for optimization which are
</span><br>
<span class="quotelev1">&gt; contradictory :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1*) You have to use temporary message copy to allow non-blocking sending
</span><br>
<span class="quotelev1">&gt; and uncouple the sending and receiving
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a lot of schools of thought here, and the real answer is going to
</span><br>
<span class="quotelev1">&gt; depend on your application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the message is &quot;short&quot; (and the exact definition of &quot;short&quot; depends on
</span><br>
<span class="quotelev1">&gt; your platform -- it varies depending on your CPU, your memory, your
</span><br>
<span class="quotelev1">&gt; CPU/memory interconnect, ...etc.), then copying to a pre-allocated bounce
</span><br>
<span class="quotelev1">&gt; buffer is typically a good idea.  That lets you keep using your &quot;real&quot;
</span><br>
<span class="quotelev1">&gt; buffer and not have to wait until communication is done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For &quot;long&quot; messages, the equation is a bit different.  If &quot;long&quot; isn't
</span><br>
<span class="quotelev1">&gt; &quot;enormous&quot;, you might be able to have N buffers available, and simply work
</span><br>
<span class="quotelev1">&gt; on 1 of them at a time in your main application and use the others for
</span><br>
<span class="quotelev1">&gt; ongoing non-blocking communication.  This is sometimes called &quot;shadow&quot;
</span><br>
<span class="quotelev1">&gt; copies, or &quot;ghost&quot; copies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Such shadow copies are most useful when you receive something each
</span><br>
<span class="quotelev1">&gt; iteration, for example.  For example, something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   buffer[0] = malloc(...);
</span><br>
<span class="quotelev1">&gt;   buffer[1] = malloc(...);
</span><br>
<span class="quotelev1">&gt;   current = 0;
</span><br>
<span class="quotelev1">&gt;   while (still_doing_iterations) {
</span><br>
<span class="quotelev1">&gt;       MPI_Irecv(buffer[current], ..., &amp;req);
</span><br>
<span class="quotelev1">&gt;       /// work on buffer[current - 1]
</span><br>
<span class="quotelev1">&gt;       MPI_Wait(req, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;       current = 1 - current;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You get the idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2*) Avoid using temporary message copy because the copy will add extra
</span><br>
<span class="quotelev1">&gt; cost on execution time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will, if the memcpy cost is significant (especially compared to the
</span><br>
<span class="quotelev1">&gt; network time to send it).  If the memcpy is small/insignificant, then don't
</span><br>
<span class="quotelev1">&gt; worry about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll need to determine where this crossover point is, however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also keep in mind that MPI and/or the underlying network stack will likely
</span><br>
<span class="quotelev1">&gt; be doing these kinds of things under the covers for you.  Indeed, if you
</span><br>
<span class="quotelev1">&gt; send short messages -- even via MPI_SEND -- it may return &quot;immediately&quot;,
</span><br>
<span class="quotelev1">&gt; indicating that MPI says it's safe for you to use the send buffer.  But
</span><br>
<span class="quotelev1">&gt; that doesn't mean that the message has even actually left the current
</span><br>
<span class="quotelev1">&gt; server and gone out onto the network yet (i.e., some other layer below you
</span><br>
<span class="quotelev1">&gt; may have just done a memcpy because it was a short message, and the
</span><br>
<span class="quotelev1">&gt; processing/sending of that message is still ongoing).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; And then, we are adviced to do :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - replace MPI_SEND by MPI_SSEND (synchroneous blocking sending) : it is
</span><br>
<span class="quotelev1">&gt; said that execution is divided by a factor 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This very, very much depends on your application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_SSEND won't return until the receiver has started to receive the
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some communication patterns, putting in this additional level of
</span><br>
<span class="quotelev1">&gt; synchronization is helpful -- it keeps all MPI processes in tighter
</span><br>
<span class="quotelev1">&gt; synchronization and you might experience less jitter, etc.  And therefore
</span><br>
<span class="quotelev1">&gt; overall execution time is faster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But for others, it adds unnecessary delay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd say it's an over-generalization that simply replacing MPI_SEND with
</span><br>
<span class="quotelev1">&gt; MPI_SSEND always reduces execution time by 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; - use MPI_ISSEND and MPI_IRECV with MPI_WAIT function to synchronize
</span><br>
<span class="quotelev1">&gt; (synchroneous non-blocking sending) : it is said that execution is divided
</span><br>
<span class="quotelev1">&gt; by a factor 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, it depends on the app.  Generally, non-blocking communication is
</span><br>
<span class="quotelev1">&gt; better -- *if your app can effectively overlap communication and
</span><br>
<span class="quotelev1">&gt; computation*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your app doesn't take advantage of this overlap, then you won't see
</span><br>
<span class="quotelev1">&gt; such performance benefits.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Isend(buffer, ..., req);
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;req, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technically, the above uses ISEND and WAIT... but it's actually probably
</span><br>
<span class="quotelev1">&gt; going to be *slower* than using MPI_SEND because you've made multiple
</span><br>
<span class="quotelev1">&gt; function calls with no additional work between the two -- so the app didn't
</span><br>
<span class="quotelev1">&gt; effectively overlap the communication with any local computation.  Hence:
</span><br>
<span class="quotelev1">&gt; no performance benefit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So what's the best optimization ? Do we have to use temporary message
</span><br>
<span class="quotelev1">&gt; copy or not and if yes, what's the case for ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can probably see from my text above, the answer is: it depends.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23877.php">Oscar Vega-Gisbert: "Re: [OMPI users] OpenMpi-java Examples"</a>
<li><strong>Previous message:</strong> <a href="23875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23879.php">Saliya Ekanayake: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Reply:</strong> <a href="23879.php">Saliya Ekanayake: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
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
