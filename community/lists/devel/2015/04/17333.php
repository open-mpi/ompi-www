<?
$subject_val = "Re: [OMPI devel] powerpc64le support [1-line patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 19:37:56 2015" -->
<!-- isoreceived="20150422233756" -->
<!-- sent="Wed, 22 Apr 2015 16:37:37 -0700" -->
<!-- isosent="20150422233737" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] powerpc64le support [1-line patch]" -->
<!-- id="CAAvDA16YJ2ahCkkAYBoU642VfzhiDip32-oNCAU+pHUQ_LREwA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C711AECD-A2D5-44FD-A2C5-85EB1EAEAA22_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] powerpc64le support [1-line patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 19:37:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17334.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17332.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>In reply to:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17338.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Reply:</strong> <a href="17338.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 22, 2015 at 2:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt; In addition to the one-line patch below, I needed to run autogen.pl
</span><br>
<span class="quotelev1">&gt; with a new enough config/config.{guess,sub}.
</span><br>
<span class="quotelev2">&gt; &gt; Along the way I noticed
</span><br>
<span class="quotelev2">&gt; &gt;         opal/mca/common/libfabric/libfabric/config/config.guess
</span><br>
<span class="quotelev2">&gt; &gt;         opal/mca/common/libfabric/libfabric/config/config.sub
</span><br>
<span class="quotelev2">&gt; &gt;         opal/mca/hwloc/hwloc191/hwloc/config/config.guess
</span><br>
<span class="quotelev2">&gt; &gt;         opal/mca/hwloc/hwloc191/hwloc/config/config.sub
</span><br>
<span class="quotelev2">&gt; &gt; which appear to be too old to recognize powerpc64le and are *not*
</span><br>
<span class="quotelev1">&gt; updated when autogen.pl is run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's ok -- we don't run those scripts during OMPI's top-level configure
</span><br>
<span class="quotelev1">&gt; (that's why they're not re-generated during autogen.pl).
</span><br>
<p><p>OK, makes sense.
<br>
<p>I believe the script we use to make official tarballs removes/replaces
<br>
<span class="quotelev1">&gt; *all* config.sub|guess, just to be completely thorough.
</span><br>
<p>But it's overkill / just being defensive; it isn't technically necessary.
<br>
<p><p>So the script author(s) suffered from the same paranoia I was applying to
<br>
the situation.  :-)
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17333/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17334.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17332.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>In reply to:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17338.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Reply:</strong> <a href="17338.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
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
