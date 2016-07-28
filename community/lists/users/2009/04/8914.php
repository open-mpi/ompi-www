<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 14:12:44 2009" -->
<!-- isoreceived="20090414181244" -->
<!-- sent="Tue, 14 Apr 2009 11:12:18 -0700" -->
<!-- isosent="20090414181218" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49E4D202.9000309_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E4CFAD.4060307_at_bcgsc.ca" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 14:12:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At 2500 bytes, all messages will presumably be sent &quot;eagerly&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; without waiting for the receiver to indicate that it's ready to 
</span><br>
<span class="quotelev2">&gt;&gt; receive that particular message.  This would suggest congestion, if 
</span><br>
<span class="quotelev2">&gt;&gt; any, is on the receiver side.  Some kind of congestion could, I 
</span><br>
<span class="quotelev2">&gt;&gt; suppose, still occur and back up on the sender side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone chime in as to what the message size limit is for an 
</span><br>
<span class="quotelev1">&gt; `eager' transmission?
</span><br>
<p>ompi_info -a | grep eager
<br>
depends on the BTL.  E.g., sm=4K but tcp is 64K.  self is 128K.
<br>
<p><span class="quotelev2">&gt;&gt; On the other hand, I assume the memory imbalance we're talking about 
</span><br>
<span class="quotelev2">&gt;&gt; is rather severe.  Much more than 2500 bytes to be noticeable, I 
</span><br>
<span class="quotelev2">&gt;&gt; would think.  Is that really the situation you're imagining?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The memory imbalance is drastic. I'm expecting 2 GB of memory use per 
</span><br>
<span class="quotelev1">&gt; process. The heaving processes (13/16) use the expected amount of 
</span><br>
<span class="quotelev1">&gt; memory; the remainder (3/16) misbehaving processes use more than twice 
</span><br>
<span class="quotelev1">&gt; as much memory. The specifics vary from run to run of course. So, yes, 
</span><br>
<span class="quotelev1">&gt; there is gigs of unexpected memory use to track down.
</span><br>
<p>Umm, how big of a message imbalance do you think you might have?  (The 
<br>
inflection in my voice doesn't come out well in e-mail.)  Anyhow, that 
<br>
sounds like, um, &quot;lots&quot; of 2500-byte messages.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
