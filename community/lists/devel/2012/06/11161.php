<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 10:12:36 2012" -->
<!-- isoreceived="20120625141236" -->
<!-- sent="Mon, 25 Jun 2012 10:12:12 -0400" -->
<!-- isosent="20120625141212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="2F102BCF-8297-4475-9047-F9B2BF7C3036_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FE832F8.6040400_at_oracle.com" -->
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
<strong>Date:</strong> 2012-06-25 10:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11162.php">Eugene Loh: "[OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>Previous message:</strong> <a href="11160.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11159.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11163.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11163.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2012, at 5:44 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm, I guess I could see the thinking of tying ofud and openib btls configuring together.  However it seems inconsistent to me that one btl doesn't allow you to control configuring it in or not directly.  What if I really do not want to build ofud but do want to build openib?
</span><br>
<p>What if you don't want to build the TCP BTL?  Or the sm BTL?  Or you want to build the MX BTL but not the MX MTL?
<br>
<p>The fine-grained control we have for such things is --enable-mca-no-build.
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
<li><strong>Next message:</strong> <a href="11162.php">Eugene Loh: "[OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>Previous message:</strong> <a href="11160.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11159.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11163.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11163.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
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
