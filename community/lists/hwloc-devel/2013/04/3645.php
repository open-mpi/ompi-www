<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 03:48:12 2013" -->
<!-- isoreceived="20130424074812" -->
<!-- sent="Wed, 24 Apr 2013 09:48:04 +0200" -->
<!-- isosent="20130424074804" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="51778E34.5050804_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA145oyJ-WU+g-doCQjwo0Ukw4Pj+=dsuMmsbamZWMg2POA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] RPATH issues when building in Fedora 18<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 03:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3646.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3644.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3646.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3646.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/04/2013 08:05, Paul Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ok, thanks. So our configure indeed generates libtool script that
</span><br>
<span class="quotelev1">&gt;     depends on where the tarball was generated. That's a bit disturbing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is not quite as you describe because I was talking about Fedora's
</span><br>
<span class="quotelev1">&gt; libtool.m4 doing the hardcoding.
</span><br>
<span class="quotelev1">&gt; The libtool.m4 logic that is distributed with hwloc *tries* to perform
</span><br>
<span class="quotelev1">&gt; a configure probe to determine the dynamic lib search path.
</span><br>
<span class="quotelev1">&gt; Unfortunately, that probe isn't smart enough to get the right answer
</span><br>
<span class="quotelev1">&gt; on all Linux distros.
</span><br>
<span class="quotelev1">&gt; So, the libtool.m4 from Fedora is the one I see hardcoding the correct
</span><br>
<span class="quotelev1">&gt; answer.
</span><br>
<span class="quotelev1">&gt; Again: libtool in the official tarball of hwloc-1.7 does NOT do
</span><br>
<span class="quotelev1">&gt; something as horrible as hardcode the wrong answer from the distro
</span><br>
<span class="quotelev1">&gt; where one built the tarball (but it probably would it you built the
</span><br>
<span class="quotelev1">&gt; tarball on Fedora).
</span><br>
<p>Well, it's the same idea in the end. The libtool.m4 in the hwloc tarball
<br>
is placed there by autoreconf, so it comes from the Debian machine where
<br>
I generate the tarballs. I could generate official tarballs on Fedora to
<br>
work around the issue (some nightly builds are generated this way, but
<br>
not the official ones from the website (RHEL4 iirc).
<br>
<p><span class="quotelev1">&gt; It appears somebody has been bugging the libtool developers about this
</span><br>
<span class="quotelev1">&gt; since June 2010:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   <a href="http://lists.gnu.org/archive/html/libtool-patches/2010-06/msg00141.html">http://lists.gnu.org/archive/html/libtool-patches/2010-06/msg00141.html</a>
</span><br>
<p>That &quot;somebody&quot; is the person who opened this hwloc thread yesterday :)
<br>
<p><span class="quotelev1">&gt; In my testing on Fedora 17, the patch below applied to hwloc-1.7
</span><br>
<span class="quotelev1">&gt; produces an accurate sys_lib_dlsearch_path_spec
</span><br>
<p>It's crazy that this hasn't been resolved earlier. Many projects may
<br>
have the same problem. Maybe many of them ignore it because they build
<br>
their tarballs on distros with a patched libtool.
<br>
<p>Anyway, we can't easily patch hwloc's libtool.m4 since we'd have to do
<br>
that during autogen (after libtool.m4 gets copied), and the patch may
<br>
fail against some versions of libtool. We could patch during the release
<br>
tarball generation since we enforce the libtool version there, but I
<br>
still don't fully like the idea.
<br>
<p><p>Let's see if Jirka can work around the problem by autoreconfing during
<br>
the RPM build and ping the libtool maintainers to finally fix this.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3646.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3644.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3646.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3646.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
