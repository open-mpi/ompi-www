<?
$subject_val = "Re: [OMPI devel] trunk borked -- my fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 20:44:48 2009" -->
<!-- isoreceived="20090805004448" -->
<!-- sent="Tue, 4 Aug 2009 20:44:43 -0400" -->
<!-- isosent="20090805004443" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk borked -- my fault" -->
<!-- id="C720D5C1-3C6E-4BB9-9A4A-59FB1A5CAC3F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43F494F9-95DE-49BC-A802-5CFC69715E6C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk borked -- my fault<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 20:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6590.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6588.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6588.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 4, 2009, at 5:50 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Ah -- I see an AC 2.63b release note:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** AC_REQUIRE now detects the case of an outer macro which first  
</span><br>
<span class="quotelev1">&gt; expands
</span><br>
<span class="quotelev1">&gt;     then later indirectly requires the same inner macro.  Previously,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes, this is exactly what was happening.
<br>
<p>The AC_REQUIRE's that I added force the tests to be above the  
<br>
respective stdout section headers, which is a little bit of a bummer.   
<br>
I'll fix that.
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
<li><strong>Next message:</strong> <a href="6590.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6588.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6588.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
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
