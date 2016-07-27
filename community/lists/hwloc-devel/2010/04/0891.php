<?
$subject_val = "Re: [hwloc-devel] Embedding: is it worth it?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 17:36:53 2010" -->
<!-- isoreceived="20100406213653" -->
<!-- sent="Tue, 6 Apr 2010 23:36:47 +0200" -->
<!-- isosent="20100406213647" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Embedding: is it worth it?" -->
<!-- id="20100406213647.GX4015_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1B903E62-30D2-4353-9D3E-B8EB038FABE2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Embedding: is it worth it?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 17:36:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0892.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Previous message:</strong> <a href="0890.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1940"</a>
<li><strong>In reply to:</strong> <a href="0887.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0892.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0892.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Tue 06 Apr 2010 09:05:24 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 4, 2010, at 12:15 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Why
</span><br>
<span class="quotelev2">&gt; &gt; is it so?  Can't the main ./configure call the hwloc m4 stuff or not
</span><br>
<span class="quotelev2">&gt; &gt; depending on whether the internal or the external version is used?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No -- we wouldn't want to call the m4 stuff in the external case,
</span><br>
<p>That is what I said above (if not, please tell me, that's probably just
<br>
an English language issue): if the user requests the external version to
<br>
be used, do not call the m4 stuff; if he doesn't, call the m4 stuff.
<br>
<p><span class="quotelev1">&gt; because what if it came to different answers vs. how the external one is configured?
</span><br>
<p>That should appear in the hwloc/config.h file, be it internally
<br>
generated, or the installed external one.
<br>
<p><span class="quotelev1">&gt; (e.g., if OMPI is built using icc and the external copy was built with gcc)
</span><br>
<p>ABIs are supposed to be system-wide (plus multilib cases), not
<br>
compiler-wide. If it's not the case we have a bug that really needs
<br>
to be fixed, since we don't want to impose the use of a particular
<br>
compiler.
<br>
<p><span class="quotelev1">&gt; In the external case, OMPI should just use the external's hwloc.h and whatever decisions were already made there (sizes, types, etc.).
</span><br>
<p>In the internal case too, the only difference is the -I parameter to
<br>
reach the hwloc.h.
<br>
<p>So I still don't see why going back to ./configure instead of using m4.
<br>
That being said, we do not have embedding needs, so we do not really
<br>
have an opinion one way or the other :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0892.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Previous message:</strong> <a href="0890.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1940"</a>
<li><strong>In reply to:</strong> <a href="0887.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0892.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0892.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
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
