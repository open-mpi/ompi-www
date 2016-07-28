<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 10:38:47 2009" -->
<!-- isoreceived="20090826143847" -->
<!-- sent="Wed, 26 Aug 2009 10:38:43 -0400" -->
<!-- isosent="20090826143843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="ABA24ADD-638B-4CA1-B59C-952F4525FAFE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A946AFD.9020309_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_pml_ob1_send blocks<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-26 10:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 25, 2009, at 6:51 PM, Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; The receiver posts a single MPI_Irecv in advance, and as soon as it's
</span><br>
<span class="quotelev1">&gt; received a message it posts a new MPI_Irecv. However, there are
</span><br>
<span class="quotelev1">&gt; multiple processes sending to the receiver, and only one MPI_Irecv  
</span><br>
<span class="quotelev1">&gt; posted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes, this could cause blocking.  Specifically, the receiver may not  
<br>
advance any other senders until the matching Irecv is posted and is  
<br>
able to make progress.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
