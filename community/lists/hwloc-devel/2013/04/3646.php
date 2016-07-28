<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 08:52:45 2013" -->
<!-- isoreceived="20130424125245" -->
<!-- sent="Wed, 24 Apr 2013 12:52:40 +0000" -->
<!-- isosent="20130424125240" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4404C1CE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51778E34.5050804_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 08:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3647.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5558)"</a>
<li><strong>Previous message:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3711.php">Jiri Hladky: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3711.php">Jiri Hladky: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a little late to this thread, but I just changed the build machine to build hwloc trunk tarballs with the same versions of Autotools as the v1.7 tarballs:
<br>
<p>AC 2.69
<br>
AM 1.13.1
<br>
LT 2.4.2
<br>
GM4 1.4.16
<br>
<p>Let me know if that's good.  If not, I can install any quadtuple (use that in a sentence today) of versions that we need.
<br>
<p><p><p>On Apr 24, 2013, at 3:48 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 24/04/2013 08:05, Paul Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ok, thanks. So our configure indeed generates libtool script that
</span><br>
<span class="quotelev2">&gt;&gt; depends on where the tarball was generated. That's a bit disturbing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is not quite as you describe because I was talking about Fedora's libtool.m4 doing the hardcoding.
</span><br>
<span class="quotelev2">&gt;&gt; The libtool.m4 logic that is distributed with hwloc *tries* to perform a configure probe to determine the dynamic lib search path.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, that probe isn't smart enough to get the right answer on all Linux distros.
</span><br>
<span class="quotelev2">&gt;&gt; So, the libtool.m4 from Fedora is the one I see hardcoding the correct answer.
</span><br>
<span class="quotelev2">&gt;&gt; Again: libtool in the official tarball of hwloc-1.7 does NOT do something as horrible as hardcode the wrong answer from the distro where one built the tarball (but it probably would it you built the tarball on Fedora).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, it's the same idea in the end. The libtool.m4 in the hwloc tarball is placed there by autoreconf, so it comes from the Debian machine where I generate the tarballs. I could generate official tarballs on Fedora to work around the issue (some nightly builds are generated this way, but not the official ones from the website (RHEL4 iirc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It appears somebody has been bugging the libtool developers about this since June 2010:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://lists.gnu.org/archive/html/libtool-patches/2010-06/msg00141.html">http://lists.gnu.org/archive/html/libtool-patches/2010-06/msg00141.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That &quot;somebody&quot; is the person who opened this hwloc thread yesterday :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my testing on Fedora 17, the patch below applied to hwloc-1.7 produces an accurate sys_lib_dlsearch_path_spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's crazy that this hasn't been resolved earlier. Many projects may have the same problem. Maybe many of them ignore it because they build their tarballs on distros with a patched libtool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, we can't easily patch hwloc's libtool.m4 since we'd have to do that during autogen (after libtool.m4 gets copied), and the patch may fail against some versions of libtool. We could patch during the release tarball generation since we enforce the libtool version there, but I still don't fully like the idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's see if Jirka can work around the problem by autoreconfing during the RPM build and ping the libtool maintainers to finally fix this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3647.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5558)"</a>
<li><strong>Previous message:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3711.php">Jiri Hladky: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3711.php">Jiri Hladky: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
