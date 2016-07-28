<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 10:51:56 2009" -->
<!-- isoreceived="20090826145156" -->
<!-- sent="Wed, 26 Aug 2009 10:51:51 -0400" -->
<!-- isosent="20090826145151" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="2C3B3673-3880-40E5-95C9-99F25F6D17F6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ABA24ADD-638B-4CA1-B59C-952F4525FAFE_at_cisco.com" -->
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
<strong>Date:</strong> 2009-08-26 10:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10489.php">twurgl_at_[hidden]: "[OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Previous message:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10503.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10503.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10526.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 26, 2009, at 10:38 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Yes, this could cause blocking.  Specifically, the receiver may not
</span><br>
<span class="quotelev1">&gt; advance any other senders until the matching Irecv is posted and is
</span><br>
<span class="quotelev1">&gt; able to make progress.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I should clarify something else here -- for long messages where the  
<br>
pipeline protocol is used, OB1 may need to be invoked repeatedly to  
<br>
keep making progress on all the successive fragments.  I.e., if a send  
<br>
is long enough to entail many fragments, then OB1 may (read: likely  
<br>
will) not progress *all* of them simultaneously.  Hence, if you're  
<br>
calling MPI_Test(), for example, to kick the progress engine, you may  
<br>
have to call it a few times to get *all* the fragments processed.
<br>
<p>How many fragments are processed in each call to progress can depend  
<br>
on the speed of your hardware and network, etc.
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
<li><strong>Next message:</strong> <a href="10489.php">twurgl_at_[hidden]: "[OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Previous message:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10503.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10503.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10526.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
