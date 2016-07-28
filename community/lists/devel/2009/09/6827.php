<?
$subject_val = "Re: [OMPI devel] version number issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 12 08:50:24 2009" -->
<!-- isoreceived="20090912125024" -->
<!-- sent="Sat, 12 Sep 2009 08:50:19 -0400" -->
<!-- isosent="20090912125019" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] version number issues" -->
<!-- id="4A6E5921-C448-40C2-84A6-5D2394D7D85D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1252306841.2636.303.camel_at_frecb000730.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] version number issues<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-12 08:50:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6828.php">Jeff Squyres: "[OMPI devel] Announcing Portable Hardware Locality (&quot;hwloc&quot;) -- an Open MPI sub-project"</a>
<li><strong>Previous message:</strong> <a href="6826.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6787.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 7, 2009, at 3:00 AM, Nadia Derbey wrote:
<br>
<p><span class="quotelev2">&gt; &gt; The only question is -- should we abort in this case, or just put in
</span><br>
<span class="quotelev2">&gt; &gt; &quot;unknown -- could not find hg&quot; (or whatever) as the version?  I  
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev2">&gt; &gt; lean towards the latter;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1 : I think asking people to have hg in their build environment is  
</span><br>
<span class="quotelev1">&gt; too
</span><br>
<span class="quotelev1">&gt; constraining.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Note that it will only take this path if $top_srcdir/.hg is found.  So  
<br>
mercurial was used *somewhere* already.  But I committed to the trunk  
<br>
the &quot;unknown - could not find hg&quot; kind of behavior already.
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
<li><strong>Next message:</strong> <a href="6828.php">Jeff Squyres: "[OMPI devel] Announcing Portable Hardware Locality (&quot;hwloc&quot;) -- an Open MPI sub-project"</a>
<li><strong>Previous message:</strong> <a href="6826.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6787.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
