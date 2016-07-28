<?
$subject_val = "Re: [OMPI devel] openib component lock";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 07:05:52 2008" -->
<!-- isoreceived="20080806110552" -->
<!-- sent="Wed, 6 Aug 2008 07:05:33 -0400" -->
<!-- isosent="20080806110533" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib component lock" -->
<!-- id="9CDCE05A-4FD8-424A-87A2-42F2C5A32DD9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48997D73.80705_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 07:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4555.php">Jeff Squyres: "[OMPI devel] Coverity"</a>
<li><strong>Previous message:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
<li><strong>In reply to:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2008, at 6:31 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; In working on <a href="https://svn.open-mpi.org/trac/ompi/ticket/1434">https://svn.open-mpi.org/trac/ompi/ticket/1434</a>, I see  
</span><br>
<span class="quotelev2">&gt;&gt; fairly inconsistent use of the mca_openib_btl_component.ib_lock,  
</span><br>
<span class="quotelev2">&gt;&gt; such as within btl_openib_proc.c.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In fixing #1434, do I need to be mindful doing all the locking  
</span><br>
<span class="quotelev2">&gt;&gt; properly, or is it already so broken that it doesn't really matter,  
</span><br>
<span class="quotelev2">&gt;&gt; and all I need to do is ensure that I don't put in any bozo  
</span><br>
<span class="quotelev2">&gt;&gt; deadlocks?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hmm good question... I never tested thread build of openib btl, so I  
</span><br>
<span class="quotelev1">&gt; don't know if it really works. But we try to keep it thread safe.
</span><br>
<span class="quotelev1">&gt; (All the thread stuff in openib btl require serious review..)
</span><br>
<p>That's what I was thinking (it all requires a big review).  Ok; I'll  
<br>
just stay away from the boneheaded deadlocks.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4555.php">Jeff Squyres: "[OMPI devel] Coverity"</a>
<li><strong>Previous message:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
<li><strong>In reply to:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
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
