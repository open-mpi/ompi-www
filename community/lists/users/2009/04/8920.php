<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 15:29:48 2009" -->
<!-- isoreceived="20090414192948" -->
<!-- sent="Tue, 14 Apr 2009 12:29:15 -0700" -->
<!-- isosent="20090414192915" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49E4E40B.4080105_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49E4D202.9000309_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 15:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8921.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read()"</a>
<li><strong>Previous message:</strong> <a href="8919.php">Ralph Castain: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>In reply to:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; ompi_info -a | grep eager
</span><br>
<span class="quotelev1">&gt; depends on the BTL.  E.g., sm=4K but tcp is 64K.  self is 128K.
</span><br>
<p>Thanks, Eugene.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; On the other hand, I assume the memory imbalance we're talking about 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is rather severe.  Much more than 2500 bytes to be noticeable, I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would think.  Is that really the situation you're imagining?
</span><br>
<span class="quotelev2">&gt;&gt; The memory imbalance is drastic. I'm expecting 2 GB of memory use per 
</span><br>
<span class="quotelev2">&gt;&gt; process. The heaving processes (13/16) use the expected amount of 
</span><br>
<span class="quotelev2">&gt;&gt; memory; the remainder (3/16) misbehaving processes use more than twice 
</span><br>
<span class="quotelev2">&gt;&gt; as much memory. The specifics vary from run to run of course. So, yes, 
</span><br>
<span class="quotelev2">&gt;&gt; there is gigs of unexpected memory use to track down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Umm, how big of a message imbalance do you think you might have?  (The 
</span><br>
<span class="quotelev1">&gt; inflection in my voice doesn't come out well in e-mail.)  Anyhow, that 
</span><br>
<span class="quotelev1">&gt; sounds like, um, &quot;lots&quot; of 2500-byte messages.
</span><br>
<p>The message imbalance could be very large. Each process is running 
<br>
pretty close to its memory capacity. If a backlog of messages causes a 
<br>
buffer to grow to the point where the process starts swapping, it will 
<br>
very quickly fall very far behind. There are some billion 25-byte 
<br>
operations being sent in total or tens of millions MPI_Send messages 
<br>
(at 100 operations per MPI_Send).
<br>
<p>Cheers,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8921.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read()"</a>
<li><strong>Previous message:</strong> <a href="8919.php">Ralph Castain: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>In reply to:</strong> <a href="8914.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
