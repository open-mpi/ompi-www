<?
$subject_val = "Re: [OMPI devel] C standard compatibility";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 11:57:37 2015" -->
<!-- isoreceived="20150730155737" -->
<!-- sent="Thu, 30 Jul 2015 09:57:34 -0600" -->
<!-- isosent="20150730155734" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C standard compatibility" -->
<!-- id="20150730155734.GB56782_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="595A4CC1-E764-4591-A64C-0CD3CB5FD3AB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] C standard compatibility<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-30 11:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17720.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new IU jenkins project"</a>
<li><strong>Previous message:</strong> <a href="17718.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] C standard compatibility"</a>
<li><strong>In reply to:</strong> <a href="17718.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] C standard compatibility"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 30, 2015 at 12:41:33PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; We only recently started allowing the use of C99 in the code base (i.e., we put AC_PROG_CC_C99 in configure.ac).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's no *requirement* to use C99 throughout the code, but we generally do the following kinds of things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * restrict (as you noted)
</span><br>
<span class="quotelev1">&gt; * variable declarations in the middle of blocks / loops (as you noted)
</span><br>
<span class="quotelev1">&gt; * struct member initialization
</span><br>
<p>Though there is no requirement we do strongly recommend the usage of
<br>
designated initializers for structure intialization. It may save us from
<br>
future headaches as structures evolve.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17719/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17720.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new IU jenkins project"</a>
<li><strong>Previous message:</strong> <a href="17718.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] C standard compatibility"</a>
<li><strong>In reply to:</strong> <a href="17718.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] C standard compatibility"</a>
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
