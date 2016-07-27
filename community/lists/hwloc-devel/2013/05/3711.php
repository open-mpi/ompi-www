<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 12:38:20 2013" -->
<!-- isoreceived="20130507163820" -->
<!-- sent="Tue, 7 May 2013 18:38:08 +0200" -->
<!-- isosent="20130507163808" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="CALT_uBSq8XVOCOMYhJ7wGLbAmcZR3qmapXsMGTA2BfmqCBfy9A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4404C1CE_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 12:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3712.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3710.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3646.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for all the feedback !!!
<br>
<p>I went with
<br>
autoreconf --force --install
<br>
<p>which solved a problem.
<br>
<p>@Jeff: the versions of your quadtuple looks good to me! I'm using the same
<br>
with the exception of automake (1.12.2 which is even older than yours).
<br>
<p>I have now successfully created rpm for hwloc 1.7 for Fedora.
<br>
<p>Jirka
<br>
<p>On Wed, Apr 24, 2013 at 2:52 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I'm a little late to this thread, but I just changed the build machine to
</span><br>
<span class="quotelev1">&gt; build hwloc trunk tarballs with the same versions of Autotools as the v1.7
</span><br>
<span class="quotelev1">&gt; tarballs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AC 2.69
</span><br>
<span class="quotelev1">&gt; AM 1.13.1
</span><br>
<span class="quotelev1">&gt; LT 2.4.2
</span><br>
<span class="quotelev1">&gt; GM4 1.4.16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if that's good.  If not, I can install any quadtuple (use that
</span><br>
<span class="quotelev1">&gt; in a sentence today) of versions that we need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2013, at 3:48 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 24/04/2013 08:05, Paul Hargrove a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ok, thanks. So our configure indeed generates libtool script that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; depends on where the tarball was generated. That's a bit disturbing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It is not quite as you describe because I was talking about Fedora's
</span><br>
<span class="quotelev1">&gt; libtool.m4 doing the hardcoding.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The libtool.m4 logic that is distributed with hwloc *tries* to perform
</span><br>
<span class="quotelev1">&gt; a configure probe to determine the dynamic lib search path.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Unfortunately, that probe isn't smart enough to get the right answer on
</span><br>
<span class="quotelev1">&gt; all Linux distros.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So, the libtool.m4 from Fedora is the one I see hardcoding the correct
</span><br>
<span class="quotelev1">&gt; answer.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Again: libtool in the official tarball of hwloc-1.7 does NOT do
</span><br>
<span class="quotelev1">&gt; something as horrible as hardcode the wrong answer from the distro where
</span><br>
<span class="quotelev1">&gt; one built the tarball (but it probably would it you built the tarball on
</span><br>
<span class="quotelev1">&gt; Fedora).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, it's the same idea in the end. The libtool.m4 in the hwloc tarball
</span><br>
<span class="quotelev1">&gt; is placed there by autoreconf, so it comes from the Debian machine where I
</span><br>
<span class="quotelev1">&gt; generate the tarballs. I could generate official tarballs on Fedora to work
</span><br>
<span class="quotelev1">&gt; around the issue (some nightly builds are generated this way, but not the
</span><br>
<span class="quotelev1">&gt; official ones from the website (RHEL4 iirc).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It appears somebody has been bugging the libtool developers about this
</span><br>
<span class="quotelev1">&gt; since June 2010:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.gnu.org/archive/html/libtool-patches/2010-06/msg00141.html">http://lists.gnu.org/archive/html/libtool-patches/2010-06/msg00141.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That &quot;somebody&quot; is the person who opened this hwloc thread yesterday :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In my testing on Fedora 17, the patch below applied to hwloc-1.7
</span><br>
<span class="quotelev1">&gt; produces an accurate sys_lib_dlsearch_path_spec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's crazy that this hasn't been resolved earlier. Many projects may
</span><br>
<span class="quotelev1">&gt; have the same problem. Maybe many of them ignore it because they build
</span><br>
<span class="quotelev1">&gt; their tarballs on distros with a patched libtool.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, we can't easily patch hwloc's libtool.m4 since we'd have to do
</span><br>
<span class="quotelev1">&gt; that during autogen (after libtool.m4 gets copied), and the patch may fail
</span><br>
<span class="quotelev1">&gt; against some versions of libtool. We could patch during the release tarball
</span><br>
<span class="quotelev1">&gt; generation since we enforce the libtool version there, but I still don't
</span><br>
<span class="quotelev1">&gt; fully like the idea.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let's see if Jirka can work around the problem by autoreconfing during
</span><br>
<span class="quotelev1">&gt; the RPM build and ping the libtool maintainers to finally fix this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3711/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3712.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3710.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3646.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
