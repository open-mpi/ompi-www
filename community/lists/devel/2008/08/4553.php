<?
$subject_val = "Re: [OMPI devel] openib component lock";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 06:31:21 2008" -->
<!-- isoreceived="20080806103121" -->
<!-- sent="Wed, 06 Aug 2008 13:31:15 +0300" -->
<!-- isosent="20080806103115" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib component lock" -->
<!-- id="48997D73.80705_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5B481D44-6B0E-456F-9481-D80A240EEC2F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib component lock<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 06:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4554.php">Jeff Squyres: "Re: [OMPI devel] openib component lock"</a>
<li><strong>Previous message:</strong> <a href="4552.php">Jeff Squyres: "[OMPI devel] openib component lock"</a>
<li><strong>In reply to:</strong> <a href="4552.php">Jeff Squyres: "[OMPI devel] openib component lock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4554.php">Jeff Squyres: "Re: [OMPI devel] openib component lock"</a>
<li><strong>Reply:</strong> <a href="4554.php">Jeff Squyres: "Re: [OMPI devel] openib component lock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; In working on <a href="https://svn.open-mpi.org/trac/ompi/ticket/1434">https://svn.open-mpi.org/trac/ompi/ticket/1434</a>, I see 
</span><br>
<span class="quotelev1">&gt; fairly inconsistent use of the mca_openib_btl_component.ib_lock, such 
</span><br>
<span class="quotelev1">&gt; as within btl_openib_proc.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fixing #1434, do I need to be mindful doing all the locking 
</span><br>
<span class="quotelev1">&gt; properly, or is it already so broken that it doesn't really matter, 
</span><br>
<span class="quotelev1">&gt; and all I need to do is ensure that I don't put in any bozo deadlocks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hmm good question... I never tested thread build of openib btl, so I 
<br>
don't know if it really works. But we try to keep it thread safe.
<br>
(All the thread stuff in openib btl require serious review..)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4554.php">Jeff Squyres: "Re: [OMPI devel] openib component lock"</a>
<li><strong>Previous message:</strong> <a href="4552.php">Jeff Squyres: "[OMPI devel] openib component lock"</a>
<li><strong>In reply to:</strong> <a href="4552.php">Jeff Squyres: "[OMPI devel] openib component lock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4554.php">Jeff Squyres: "Re: [OMPI devel] openib component lock"</a>
<li><strong>Reply:</strong> <a href="4554.php">Jeff Squyres: "Re: [OMPI devel] openib component lock"</a>
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
