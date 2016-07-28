<?
$subject_val = "Re: [OMPI devel] Library dependencies";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 08:44:58 2009" -->
<!-- isoreceived="20090817124458" -->
<!-- sent="Mon, 17 Aug 2009 08:44:58 -0400" -->
<!-- isosent="20090817124458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Library dependencies" -->
<!-- id="6D672D1D-784B-4F4E-8703-CDA7FAF04F89_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C6AE02F0.3AD42%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Library dependencies<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 08:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6636.php">Graham, Richard L.: "[OMPI devel] Library dependencies"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 16, 2009, at 6:39 PM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; A question about library dependencies in the ompi build system.  I  
</span><br>
<span class="quotelev1">&gt; am creating a new ompi component that has uses routines out of ompi/ 
</span><br>
<span class="quotelev1">&gt; common/a and ompi/common/b .  How do I get routines from ompi/common/ 
</span><br>
<span class="quotelev1">&gt; a to pick up the symbols in ompi/common/b ?  The symbol I am after  
</span><br>
<span class="quotelev1">&gt; is clearly in libmca_common_netpatterns.0.dylib with global  
</span><br>
<span class="quotelev1">&gt; visibility (T), but is not being picked up at run-time.  Any hints  
</span><br>
<span class="quotelev1">&gt; would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>As long as you have a linear set of dependencies (i.e., a depends on b  
<br>
but b does NOT depends on a), then you can just link libb.la to  
<br>
liba.la in a's Makefile.am.
<br>
<p>Look in ompi/mca/btl/sm/Makefile.am for how we link a common library  
<br>
against the sm btl for an example.
<br>
<p>Does that help?
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
<li><strong>Next message:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6636.php">Graham, Richard L.: "[OMPI devel] Library dependencies"</a>
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
