<?
$subject_val = "Re: [hwloc-devel] signed / unsigned";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 07:51:38 2009" -->
<!-- isoreceived="20091217125138" -->
<!-- sent="Thu, 17 Dec 2009 07:51:34 -0500" -->
<!-- isosent="20091217125134" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] signed / unsigned" -->
<!-- id="CA49BE6D-DD46-4868-BE41-52CEB802B2CA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091217114727.GA5076_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] signed / unsigned<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 07:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0544.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1506"</a>
<li><strong>In reply to:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0544.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0544.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17, 2009, at 6:47 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I see you added some casts, too. ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, but carefully :p
</span><br>
<p>Fair 'nuff.  :-)
<br>
<p><span class="quotelev2">&gt; &gt; Re make check - I know it exists, but it was difficult to integrate the
</span><br>
<span class="quotelev2">&gt; &gt; embedded test in with the existing &quot;check&quot; target because the embedded test
</span><br>
<span class="quotelev2">&gt; &gt; effectively needs a full hwloc tarball to compile against.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, but you could also just run make check in the standalone version
</span><br>
<span class="quotelev1">&gt; already.
</span><br>
<p>Yes, and you still can (and it works).  But it doesn't call the embedded test because of the reasons I mentioned.  Note, too, that the &quot;make check&quot; in the top-level directory does not test embedded functionality; that's why I created a specific test for it.  If someone can think of how to blend all that stuff together, I'm all ears!  :-)
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
<li><strong>Next message:</strong> <a href="0544.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1506"</a>
<li><strong>In reply to:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0544.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0544.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
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
