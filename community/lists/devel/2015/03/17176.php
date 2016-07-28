<?
$subject_val = "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 10:23:21 2015" -->
<!-- isoreceived="20150330142321" -->
<!-- sent="Mon, 30 Mar 2015 08:23:20 -0600" -->
<!-- isosent="20150330142320" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228" -->
<!-- id="20150330142320.GM25043_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="551592CC.8010004_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-30 10:23:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17177.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Update master tarballs to latest GNU Autotools"</a>
<li><strong>Previous message:</strong> <a href="17175.php">Federico Reghenzani: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17170.php">Orion Poplawski: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I will take a look today and see if I can determine why vader is
<br>
hanging in 32-bit builds.
<br>
<p>-Nathan
<br>
<p>On Fri, Mar 27, 2015 at 11:26:36AM -0600, Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; On 03/25/2015 01:46 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can you please retest both make check and vader with the following patch
</span><br>
<span class="quotelev2">&gt; &gt; applied? It fixes the constraint modifiers for opal_atomic_add_32 and
</span><br>
<span class="quotelev2">&gt; &gt; opal_atomic_sub_32 and adds a native opal_atomic_swap_32.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does not appear to affect the vader issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17170.php">http://www.open-mpi.org/community/lists/devel/2015/03/17170.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17176/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17177.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Update master tarballs to latest GNU Autotools"</a>
<li><strong>Previous message:</strong> <a href="17175.php">Federico Reghenzani: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17170.php">Orion Poplawski: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
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
