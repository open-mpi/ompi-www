<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 08:52:24 2012" -->
<!-- isoreceived="20120621125224" -->
<!-- sent="Thu, 21 Jun 2012 08:52:19 -0400" -->
<!-- isosent="20120621125219" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="937BEB1B-808D-44DB-BA75-F215077FF3D5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FE31654.50400_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 08:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11139.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11139.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 21, 2012, at 8:40 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; So you specify --with-ofed and you get mca_btl_openib generated?  ICK!!!  I think that will just make things more confusing.  I am against this unless you change the btl name.
</span><br>
<p>We already have this situation.  There are 4 components that use OpenFabrics:
<br>
<p>- oob ud
<br>
- btl ofud
<br>
- btl openib
<br>
- hwloc hwloc142
<br>
<p>I'm saying that we call a spade a spade -- the common element between all of these components is that they utilize OpenFabrics support.
<br>
<p>The name OpenIB is soooo out of date that we really should get rid of it where we can.  I'm volunteering to remove it in OMPI's configury.  Renaming the openib component is a good goal too, but I don't have the cycles for that.
<br>
<p>Also, per the bottom part of my original email, I'm changing my recommendation to be --with-openfabrics (vs. --with-ofed).
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
<li><strong>Next message:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11139.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11139.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
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
