<?
$subject_val = "Re: [OMPI users] AlltoallV (with some zero send count values)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 11:47:52 2012" -->
<!-- isoreceived="20120309164752" -->
<!-- sent="Fri, 9 Mar 2012 11:47:47 -0500" -->
<!-- isosent="20120309164747" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlltoallV (with some zero send count values)" -->
<!-- id="D8B74402-97FA-4F40-9FAC-DCEE92CA8322_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8A0CB688-690A-493F-A8E6-EBB5518D3E39_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] AlltoallV (with some zero send count values)<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 11:47:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18728.php">Jeffrey Squyres: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18726.php">Jeffrey Squyres: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>In reply to:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18763.php">Shamis, Pavel: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 6, 2012, at 4:43 PM, Timothy Stitt wrote:
<br>
<p><span class="quotelev1">&gt; Can anyone tell me whether it is legal to pass zero values for some of the send count elements in an MPI_AlltoallV() call? I want to perform an all-to-all operation but for performance reasons do not want to send data to various ranks who don't need to receive any useful values. If it is legal, can I assume the implementation is smart enough to not send messages when the send count is 0?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI: my tests show that AlltoallV operations with various send count values set to 0...hangs.
</span><br>
<p>Ouch.  Could you send a small reproducer?
<br>
<p>Per your other question:
<br>
<p><span class="quotelev1">&gt; How well-implemented are the one-sided communication routines? Are they something that could be trusted in a production code? 
</span><br>
<p>Meh.  They work, but I don't know if they've been strenuously tested.  At least one or two users have reported problems with them in some scenarios (for not-well-defined &quot;some scenarios&quot;).  Personally, I'd wait for the re-write that is coming for the new MPI-3 collectives.  The definitions for RMA in MPI-3 are *much* better than they were in MPI-2, and I know Brian is working hard on the new OMPI MPI-3 RMA implementation.
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
<li><strong>Next message:</strong> <a href="18728.php">Jeffrey Squyres: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18726.php">Jeffrey Squyres: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>In reply to:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18763.php">Shamis, Pavel: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
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
