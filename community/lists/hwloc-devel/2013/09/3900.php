<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 10:41:51 2013" -->
<!-- isoreceived="20130927144151" -->
<!-- sent="Fri, 27 Sep 2013 14:41:49 +0000" -->
<!-- isosent="20130927144149" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8E420A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52458B9C.9050108_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] git / nightly builds<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 10:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3901.php">Jeff Squyres (jsquyres): "[hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>Previous message:</strong> <a href="3899.php">Samuel Thibault: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3898.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3899.php">Samuel Thibault: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2013, at 9:43 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't think so. I am planning to only update the regression testing
</span><br>
<span class="quotelev1">&gt; for v1.7 as well.
</span><br>
<p>K.
<br>
<p><span class="quotelev1">&gt; BUT what if the stable OMPI 1.6 needs a hwloc fix? Should we keep the
</span><br>
<span class="quotelev1">&gt; hwloc v1.5 branch open?
</span><br>
<p>Errrr... let's cross that bridge when/if we need to.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; 2. With SVN, adding the r number in the tarball version was sufficient to observe ordering of the tarballs.  For example:
</span><br>
<span class="quotelev2">&gt;&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt; I think that this is ok (other projects use this &quot;git describe&quot; kind of behavior for their nightly snapshots), but this is a change from what we used to do, so I wanted to call it out specifically.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you guys ok with this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That'll work for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What about when we are actually doing a release where we don't want a
</span><br>
<span class="quotelev1">&gt; git-describe suffix ? Does the above apply to contrib/make_dist_tarball
</span><br>
<span class="quotelev1">&gt; in general? Or only to when it runs at night (in make dist only?) ?
</span><br>
<p>There are actually 2 scripts:
<br>
<p>contrib/dist/make_dist_tarball
<br>
contrib/nightly/make_snapshot_tarball (currently called create_tarball.sh)
<br>
<p>The former works largely as it did before: it'll make hwloc-&lt;VERSION file data&gt;.tar.*.
<br>
<p>The latter is being heavily updated to basically use &quot;git describe&quot;.
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
<li><strong>Next message:</strong> <a href="3901.php">Jeff Squyres (jsquyres): "[hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>Previous message:</strong> <a href="3899.php">Samuel Thibault: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3898.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3899.php">Samuel Thibault: "Re: [hwloc-devel] git / nightly builds"</a>
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
