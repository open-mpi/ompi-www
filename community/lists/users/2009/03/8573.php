<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 07:32:27 2009" -->
<!-- isoreceived="20090325113227" -->
<!-- sent="Wed, 25 Mar 2009 11:32:12 +0000" -->
<!-- isosent="20090325113212" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="1237980732.2953.2.camel_at_alpha" -->
<!-- inreplyto="49C8F650.2020707_at_sun.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 07:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8574.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8572.php">Daniel Sp&#229;ngberg: "[OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>In reply to:</strong> <a href="8564.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-03-24 at 07:03 -0800, Eugene Loh wrote:
<br>
<span class="quotelev2">&gt; &gt; Perhaps there is a better way of accomplishing the same thing however, 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Barrier syncronises all processes so is potentially a lot more 
</span><br>
<span class="quotelev2">&gt; &gt; heavyweight than it needs to be, in this example you only need to 
</span><br>
<span class="quotelev2">&gt; &gt; syncronise with your neighbours so it might be quicker to use a 
</span><br>
<span class="quotelev2">&gt; &gt; send/receive for each of your neighbours containing a true/false value 
</span><br>
<span class="quotelev2">&gt; &gt; rather than to rely on the existence of a message or not.  i.e. the 
</span><br>
<span class="quotelev2">&gt; &gt; barrier is needed because you don't know how many messages there are, 
</span><br>
<span class="quotelev2">&gt; &gt; it may well be quicker to have a fixed number of point to point 
</span><br>
<span class="quotelev2">&gt; &gt; messages rather than a extra global synchronisation.  The added 
</span><br>
<span class="quotelev2">&gt; &gt; advantage of doing it this way would be you could remove the Probe as 
</span><br>
<span class="quotelev2">&gt; &gt; well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand this suggestion, so I'll say it the way I 
</span><br>
<span class="quotelev1">&gt; understand it.  Would it be possible for each process to send an &quot;all 
</span><br>
<span class="quotelev1">&gt; done&quot; message to each of its neighbors?  Conversely, each process would 
</span><br>
<span class="quotelev1">&gt; poll its neighbors for messages, either processing graph operations or 
</span><br>
<span class="quotelev1">&gt; collecting &quot;all done&quot; messages depending on whether the message 
</span><br>
<span class="quotelev1">&gt; indicates a graph operation or signals &quot;all done&quot;.
</span><br>
<p>Exactly, that way you have a defined number of messages which can be
<br>
calculated locally for each process and hence there is no need to use
<br>
Probe and you can get rid of the MPI_Barrier call.
<br>
<p>Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8574.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8572.php">Daniel Sp&#229;ngberg: "[OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>In reply to:</strong> <a href="8564.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
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
