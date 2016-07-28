<?
$subject_val = "Re: [OMPI users] eager limits?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 15:51:15 2008" -->
<!-- isoreceived="20080303205115" -->
<!-- sent="Mon, 3 Mar 2008 14:51:04 -0600 (CST)" -->
<!-- isosent="20080303205104" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] eager limits?" -->
<!-- id="Pine.LNX.4.64.0803031439560.13397_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0B6F2CD-7965-4E4F-967D-0140D10A8D6F_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] eager limits?<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 15:51:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
<li><strong>Previous message:</strong> <a href="5121.php">Brock Palen: "[OMPI users] eager limits?"</a>
<li><strong>In reply to:</strong> <a href="5121.php">Brock Palen: "[OMPI users] eager limits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5158.php">Brock Palen: "Re: [OMPI users] eager limits?"</a>
<li><strong>Reply:</strong> <a href="5158.php">Brock Palen: "Re: [OMPI users] eager limits?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 3 Mar 2008, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I was writing a simple code to demonstrate deadlock.  I create an
</span><br>
<span class="quotelev1">&gt; array of some number of doubles, when sizeof(double)*SIZE is &gt;
</span><br>
<span class="quotelev1">&gt; btl_sm_eager_limit (on a smp machine) I expect the code to deadlock
</span><br>
<span class="quotelev1">&gt; but not until the buffer size is greater than the eager limit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now in 1.2.3 sm_eager_limit is 4096 (bytes?)  So i expect a buffer of
</span><br>
<span class="quotelev1">&gt; doubles created with malloc to have up to 512 before the code
</span><br>
<span class="quotelev1">&gt; deadlocks.  (remember this is for demonstrations only) The code
</span><br>
<span class="quotelev1">&gt; deadlocks at 504 doubles, does the eager limit not include the
</span><br>
<span class="quotelev1">&gt; envelope overhead?  Is it really 64 Kbytes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus does every message take up 64K no matter the size of buffer* ?
</span><br>
<p>I think you missed an order of magnitude somewhere :).  504 doubles would 
<br>
take 4032 bytes, so that would leave 64 bytes for header.
<br>
<p>The eager limit is the total packet size, so headers are also included in 
<br>
that space (explaining why you wouldn't be able to pack a full 512 
<br>
doubles) into a single eager message.
<br>
<p>There are two headers sent in the SM case - one for the PML (16 bytes) and 
<br>
one for the SM BTL (16 bytes for 32 bit builds, 24 bytes for 64 bit 
<br>
builds).  So the grand total of header space for an SM message is 32 or 40 
<br>
bytes, depending on build size.  I'm not sure where the other 24 bytes 
<br>
would be going in your case.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
<li><strong>Previous message:</strong> <a href="5121.php">Brock Palen: "[OMPI users] eager limits?"</a>
<li><strong>In reply to:</strong> <a href="5121.php">Brock Palen: "[OMPI users] eager limits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5158.php">Brock Palen: "Re: [OMPI users] eager limits?"</a>
<li><strong>Reply:</strong> <a href="5158.php">Brock Palen: "Re: [OMPI users] eager limits?"</a>
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
