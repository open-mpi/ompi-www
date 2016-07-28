<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 18:26:30 2009" -->
<!-- isoreceived="20090325222630" -->
<!-- sent="Wed, 25 Mar 2009 14:25:14 -0800" -->
<!-- isosent="20090325222514" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="49CAAF4A.6060305_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49CA7937.6080804_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Collective operations and synchronization<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 18:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8589.php">Shaun Jackman: "[OMPI users] MPI_Test without deallocation"</a>
<li><strong>Previous message:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev2">&gt;&gt; On Tue, 2009-03-24 at 07:03 -0800, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure I understand this suggestion, so I'll say it the way I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand it.  Would it be possible for each process to send an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;all done&quot; message to each of its neighbors?  Conversely, each 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process would poll its neighbors for messages, either processing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; graph operations or collecting &quot;all done&quot; messages depending on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether the message indicates a graph operation or signals &quot;all done&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Exactly, that way you have a defined number of messages which can be
</span><br>
<span class="quotelev2">&gt;&gt; calculated locally for each process and hence there is no need to use
</span><br>
<span class="quotelev2">&gt;&gt; Probe and you can get rid of the MPI_Barrier call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Eugene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By `poll its neighbours', do you mean posting an MPI_Irecv for each 
</span><br>
<span class="quotelev1">&gt; neighbour, and working until an `all done' message (sent using 
</span><br>
<span class="quotelev1">&gt; MPI_Send) has been received from each neighbour?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; As long as each process posts its MPI_Irecv before starting the 
</span><br>
<span class="quotelev1">&gt; MPI_Send, are we guaranteed that two processes won't deadlock by 
</span><br>
<span class="quotelev1">&gt; MPI_Send-ing to each other?
</span><br>
<p>Yes, I think so.
<br>
<p><span class="quotelev1">&gt; I avoided this method at first because I didn't understand that the 
</span><br>
<span class="quotelev1">&gt; MPI_Irecv would stick around regardless of   a message being ready to 
</span><br>
<span class="quotelev1">&gt; receive; I figured that it had no effect if no message was ready to 
</span><br>
<span class="quotelev1">&gt; receive.
</span><br>
<p>Not sure I understand.  Let's say you post an MPI_Irecv and you get 
<br>
something in a follow-up MPI_Test or MPI_Wait... but it's not the &quot;all 
<br>
done&quot; signal.  Rather, it's a graph operation.  So, you perform that 
<br>
graph operation and then post the next MPI_Irecv.  Something like
<br>
<p>MPI_Irecv()
<br>
while () {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( all_done ) break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv()
<br>
}
<br>
<p><span class="quotelev1">&gt; In this implementation, the graph is partitioned arbitrarily; the 
</span><br>
<span class="quotelev1">&gt; vertices are distributed based on a hash function of each vertex's 
</span><br>
<span class="quotelev1">&gt; unique ID, not based on the topology of the graph (which would be 
</span><br>
<span class="quotelev1">&gt; nice, but difficult). So, every process is a neighbour of every other 
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<p>Okay.
<br>
<p>I guess one other piece of advice is this.  Start with something that 
<br>
works; make sure it is easy to reason about its correctness.  Doesn't 
<br>
matter if there is excessive synchronization.  Then, start running.  If 
<br>
oversynchronization proves to be a bottleneck, then fix it.  But don't 
<br>
fix it until you have data that indicates that it's a problem.  I'm sure 
<br>
the folks on this list can come up with all sorts of great, minimally 
<br>
synchronizing algorithms, but maybe you can get by with schemes that are 
<br>
simpler, more robust, etc.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8589.php">Shaun Jackman: "[OMPI users] MPI_Test without deallocation"</a>
<li><strong>Previous message:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
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
