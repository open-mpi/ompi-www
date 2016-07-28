<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 14:47:16 2015" -->
<!-- isoreceived="20150130194716" -->
<!-- sent="Fri, 30 Jan 2015 11:46:44 -0800" -->
<!-- isosent="20150130194644" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="CAAvDA17my7reMkU7Y6n3EA=PT8075qGt3wacgTJi-VBK_r90RQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="191DCF9C-7C0A-48D0-9F5C-65A73B1FA502_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-30 14:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16852.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Great meeting!"</a>
<li><strong>In reply to:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for the lengthy explanation.
<br>
I now understand the situation *much* better.
<br>
Some portion of your response could become an FAQ for v1.9.
<br>
<p>Regarding:
<br>
<p><span class="quotelev1">&gt; Would you mind testing the OMPI PR branch on this old system?  I can make
</span><br>
<span class="quotelev1">&gt; you a tarball if it would help.
</span><br>
<p><p>If I had new enough autotools to autogen on this old system then I wouldn't
<br>
have asked about libltdl from libtool-1.4.  So, please *do* generate a
<br>
tarball and I will test (on *all* of my systems).
<br>
<p>-Paul
<br>
<p><p>On Fri, Jan 30, 2015 at 3:49 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Jan 29, 2015, at 9:11 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I understand one is (or will be soon) expected to have
</span><br>
<span class="quotelev1">&gt; libtool-dev(el) installed on the build system, even if one is not a OMPI
</span><br>
<span class="quotelev1">&gt; developer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.  We don't want to raise the bar that high for simple user
</span><br>
<span class="quotelev1">&gt; installations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are installing an OMPI tarball from source (that is not a git
</span><br>
<span class="quotelev1">&gt; clone):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. If you have libltdl devel support installed (i.e., ltdl.h), then OMPI
</span><br>
<span class="quotelev1">&gt; will build as it always has: with plugin support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If you do not have libltdl devel support installed, then OMPI will
</span><br>
<span class="quotelev1">&gt; effectively behave as if --disable-dlopen was specified.  I.e., there will
</span><br>
<span class="quotelev1">&gt; be no plugin support and all OMPI plugins will be slurped up into their
</span><br>
<span class="quotelev1">&gt; upper-level libraries (e.g., BTLs are slurped up into libmpi.so or
</span><br>
<span class="quotelev1">&gt; libmpi.a).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, from OMPI tarballs, *OMPI will always build and function correctly*
</span><br>
<span class="quotelev1">&gt; -- regardless of whether you have libltdl / libltdl-devel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing that many user installations will now build without plugin
</span><br>
<span class="quotelev1">&gt; support (because libltdl-devel is typically not installed in Linux distros
</span><br>
<span class="quotelev1">&gt; / OS X by default).  However, after talking this through in Dallas this
</span><br>
<span class="quotelev1">&gt; week, I'm not thinking that this is a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; How does this plan to cease embedding libltdl align with the fact that
</span><br>
<span class="quotelev1">&gt; autogen.pl currently applies patches to the parts of the generated
</span><br>
<span class="quotelev1">&gt; configure from the *packager's* system?  Isn't there now going to be a
</span><br>
<span class="quotelev1">&gt; disconnect between the versions of libtool-related portions of the
</span><br>
<span class="quotelev1">&gt; configure script shipped in a tarball and the version (if any) of libltdl
</span><br>
<span class="quotelev1">&gt; on the system building from that tarball?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that's two questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Will OMPI continue to patch configure/etc. w.r.t. libltdl functionality?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No; there's no need, because we were effectively patching against the
</span><br>
<span class="quotelev1">&gt; embedded libltdl.  Since we're not embedding, there's nothing to patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We will lose the &quot;bug fix&quot; that we were patching, however (there is a
</span><br>
<span class="quotelev1">&gt; giant comment in this file that explains what it is for):
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/blob/master/config/libltdl-preopen-error.diff">https://github.com/open-mpi/ompi/blob/master/config/libltdl-preopen-error.diff</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That may be a bit annoying.  ...but then again, if most users are going to
</span><br>
<span class="quotelev1">&gt; end up not building plugin support, the need for that patch effectively
</span><br>
<span class="quotelev1">&gt; goes away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. What happens if OMPI tries to build against an old libltdl?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We *should* be ok.  libltdl has been stable for a long time.  libltdl
</span><br>
<span class="quotelev1">&gt; added the lt_dladvise functionality at one point, but we added configure
</span><br>
<span class="quotelev1">&gt; tests to check for that a long time ago (i.e., the C code can handle
</span><br>
<span class="quotelev1">&gt; whether or not your libltdl has support for lt_dladvise).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This PR actually adds the results of those lt_dladvise configury tests to
</span><br>
<span class="quotelev1">&gt; ompi_info output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, I can still build v1.8 on an old Red Hat 8 system where the system
</span><br>
<span class="quotelev1">&gt; libtool/libltdl is 1.4.2, perhaps only because Open MPI embeds a recent
</span><br>
<span class="quotelev1">&gt; version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could be.  Would you mind testing the OMPI PR branch on this old system?
</span><br>
<span class="quotelev1">&gt; I can make you a tarball if it would help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; What minimum version of libltdl is required after the proposed change?
</span><br>
<span class="quotelev2">&gt; &gt; Will I need to install a libtool-2.x on that old system to be able to
</span><br>
<span class="quotelev1">&gt; build OpenMPI with dlopen support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what the minimum Libtool/libltdl required version is; I
</span><br>
<span class="quotelev1">&gt; didn't try to back track to find it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that if we can still build on a sufficiently-old system (e.g., Red
</span><br>
<span class="quotelev1">&gt; Hat 8 with your LT 1.4.2), that is probably good enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, remember: libltdl has *never been required* for Open MPI.  Although
</span><br>
<span class="quotelev1">&gt; building with libltdl has always been the default, you could always have
</span><br>
<span class="quotelev1">&gt; disabled it.  This PR effectively now changes the default to
</span><br>
<span class="quotelev1">&gt; build-it-if-we-got-it-and-skip-it-if-we-don't for users, and developers
</span><br>
<span class="quotelev1">&gt; must specify --disable-dlopen if they don't have libltdl-devel (per the
</span><br>
<span class="quotelev1">&gt; assumption that most developers will want to build with dlopen support).
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16851.php">http://www.open-mpi.org/community/lists/devel/2015/01/16851.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16852.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Great meeting!"</a>
<li><strong>In reply to:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
