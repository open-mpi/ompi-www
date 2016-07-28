<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 14:35:03 2009" -->
<!-- isoreceived="20090325183503" -->
<!-- sent="Wed, 25 Mar 2009 11:34:31 -0700" -->
<!-- isosent="20090325183431" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="49CA7937.6080804_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1237980732.2953.2.camel_at_alpha" -->
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
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 14:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8588.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8586.php">Jeff Squyres: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>In reply to:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8588.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8588.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Tue, 2009-03-24 at 07:03 -0800, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I understand this suggestion, so I'll say it the way I 
</span><br>
<span class="quotelev2">&gt;&gt; understand it.  Would it be possible for each process to send an &quot;all 
</span><br>
<span class="quotelev2">&gt;&gt; done&quot; message to each of its neighbors?  Conversely, each process would 
</span><br>
<span class="quotelev2">&gt;&gt; poll its neighbors for messages, either processing graph operations or 
</span><br>
<span class="quotelev2">&gt;&gt; collecting &quot;all done&quot; messages depending on whether the message 
</span><br>
<span class="quotelev2">&gt;&gt; indicates a graph operation or signals &quot;all done&quot;.
</span><br>
<p>Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; Exactly, that way you have a defined number of messages which can be
</span><br>
<span class="quotelev1">&gt; calculated locally for each process and hence there is no need to use
</span><br>
<span class="quotelev1">&gt; Probe and you can get rid of the MPI_Barrier call.
</span><br>
<p>Hi Eugene,
<br>
<p>By `poll its neighbours', do you mean posting an MPI_Irecv for each 
<br>
neighbour, and working until an `all done' message (sent using 
<br>
MPI_Send) has been received from each neighbour?
<br>
<p>As long as each process posts its MPI_Irecv before starting the 
<br>
MPI_Send, are we guaranteed that two processes won't deadlock by 
<br>
MPI_Send-ing to each other? I avoided this method at first because I 
<br>
didn't understand that the MPI_Irecv would stick around regardless of 
<br>
&nbsp;&nbsp;a message being ready to receive; I figured that it had no effect if 
<br>
no message was ready to receive.
<br>
<p>In this implementation, the graph is partitioned arbitrarily; the 
<br>
vertices are distributed based on a hash function of each vertex's 
<br>
unique ID, not based on the topology of the graph (which would be 
<br>
nice, but difficult). So, every process is a neighbour of every other 
<br>
process.
<br>
<p>Thanks for your help. Cheers,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8588.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8586.php">Jeff Squyres: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>In reply to:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8588.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8588.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
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
