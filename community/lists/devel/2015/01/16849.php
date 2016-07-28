<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 22:11:24 2015" -->
<!-- isoreceived="20150130031124" -->
<!-- sent="Thu, 29 Jan 2015 19:11:21 -0800" -->
<!-- isosent="20150130031121" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="CAAvDA15EnZWP_KDTZiC0e53ZpsSvssdwn=O6vaFHiLOp8gn15Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B9252DD5-526A-4CA1-B131-8E0D88E2F5D0_at_cisco.com" -->
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
<strong>Date:</strong> 2015-01-29 22:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16850.php">Gilles Gouaillardet: "Re: [OMPI devel] Great meeting!"</a>
<li><strong>Previous message:</strong> <a href="16848.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16848.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>If I understand one is (or will be soon) expected to have libtool-dev(el)
<br>
installed on the build system, even if one is not a OMPI developer.
<br>
<p>How does this plan to cease embedding libltdl align with the fact that
<br>
autogen.pl currently applies patches to the parts of the generated
<br>
configure from the *packager's* system?  Isn't there now going to be a
<br>
disconnect between the versions of libtool-related portions of the
<br>
configure script shipped in a tarball and the version (if any) of libltdl
<br>
on the system building from that tarball?
<br>
<p>If I've missed something obvious, please enlighten me.
<br>
<p>Also, I can still build v1.8 on an old Red Hat 8 system where the system
<br>
libtool/libltdl is 1.4.2, perhaps only because Open MPI embeds a recent
<br>
version.
<br>
What minimum version of libltdl is required after the proposed change?
<br>
Will I need to install a libtool-2.x on that old system to be able to build
<br>
OpenMPI with dlopen support?
<br>
<p>-Paul
<br>
<p>On Thu, Jan 29, 2015 at 5:27 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; WHAT: Remove the embedded libtdl from the OPAL source tree
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Fixes #311
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: Various configury and .c files in the code base (see
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/366">https://github.com/open-mpi/ompi/pull/366</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Let's discuss next Tuesday during the Dallas meeting
</span><br>
<span class="quotelev1">&gt; roundup/sumary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've known for a while that upgrading to Libtool 2.4.4 (i.e., the latest
</span><br>
<span class="quotelev1">&gt; Libtool) broke something in the OMPI build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per #311 (<a href="https://github.com/open-mpi/ompi/issues/311">https://github.com/open-mpi/ompi/issues/311</a>), I made a small
</span><br>
<span class="quotelev1">&gt; reproducer and filed a bug with upstream Libtool.  Turns out that this bad
</span><br>
<span class="quotelev1">&gt; behavior is a bug in Libtool and/or autoreconf (it isn't immediately
</span><br>
<span class="quotelev1">&gt; obvious which) when you embed libltdl in a larger project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Upstream Libtool/Autoconf is not anxious to fix this bug.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We talked about this issue this week here in Dallas and came to the
</span><br>
<span class="quotelev1">&gt; conclusion that we might as well just take out the embedded libltdl and use
</span><br>
<span class="quotelev1">&gt; the system-provided one when available, and fall back to --disable-dlopen
</span><br>
<span class="quotelev1">&gt; behavior when a system-provided libltdl is not available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've filed PR #366 that does this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/366">https://github.com/open-mpi/ompi/pull/366</a> contains a writeup describing
</span><br>
<span class="quotelev1">&gt; what happens when you don't have libltld support, etc.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16848.php">http://www.open-mpi.org/community/lists/devel/2015/01/16848.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16850.php">Gilles Gouaillardet: "Re: [OMPI devel] Great meeting!"</a>
<li><strong>Previous message:</strong> <a href="16848.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16848.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
