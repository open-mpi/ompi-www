<?
$subject_val = "Re: [OMPI users] BTL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 07:38:26 2010" -->
<!-- isoreceived="20100922113826" -->
<!-- sent="Wed, 22 Sep 2010 07:38:21 -0400" -->
<!-- isosent="20100922113821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BTL layer" -->
<!-- id="04899048-1A0D-4CBD-8391-F29C36175862_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimHNeh=vVoKmjCFynzohb2yLG8N4kgKVbpKazr+_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] BTL layer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 07:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Previous message:</strong> <a href="14267.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14266.php">Gabriele Fatigati: "[OMPI users] BTL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
<li><strong>Reply:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2010, at 3:46 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; i'm tuning collectives of OpenMPI 1.4.2 with OTPO. I have a little question about BTL. This layer is involves just in point-to-point communication or also in collectives routines?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because i've noted that changing some blt parameters like btl_sm_eager_limit and doing one collective routine, performances can have very different behaviour.
</span><br>
<p>The BTLs are dumb byte transport layers -- they have no idea of any MPI semantics.  
<br>
<p>But that being said, they act as the lowest layers for the MPI point-to-point functions (MPI_SEND and the like).  They may *also* act as the lowest layers for all of the collective functions.  Some collective algorithms call MPI_SEND to do their individual sends, for example.  Others may invoke BTL send/receive functions directly.  Others don't use the BTLs at all.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Previous message:</strong> <a href="14267.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14266.php">Gabriele Fatigati: "[OMPI users] BTL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
<li><strong>Reply:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
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
