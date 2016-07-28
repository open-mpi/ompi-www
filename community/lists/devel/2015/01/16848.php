<?
$subject_val = "[OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 20:27:34 2015" -->
<!-- isoreceived="20150130012734" -->
<!-- sent="Fri, 30 Jan 2015 01:27:32 +0000" -->
<!-- isosent="20150130012732" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="B9252DD5-526A-4CA1-B131-8E0D88E2F5D0_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-29 20:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16881.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove the embedded libtdl from the OPAL source tree
<br>
<p>WHY: Fixes #311
<br>
<p>WHERE: Various configury and .c files in the code base (see <a href="https://github.com/open-mpi/ompi/pull/366">https://github.com/open-mpi/ompi/pull/366</a>)
<br>
<p>TIMEOUT: Let's discuss next Tuesday during the Dallas meeting roundup/sumary
<br>
<p>MORE DETAIL:
<br>
<p>We've known for a while that upgrading to Libtool 2.4.4 (i.e., the latest Libtool) broke something in the OMPI build.
<br>
<p>Per #311 (<a href="https://github.com/open-mpi/ompi/issues/311">https://github.com/open-mpi/ompi/issues/311</a>), I made a small reproducer and filed a bug with upstream Libtool.  Turns out that this bad behavior is a bug in Libtool and/or autoreconf (it isn't immediately obvious which) when you embed libltdl in a larger project.
<br>
<p>Upstream Libtool/Autoconf is not anxious to fix this bug.  :-\
<br>
<p>We talked about this issue this week here in Dallas and came to the conclusion that we might as well just take out the embedded libltdl and use the system-provided one when available, and fall back to --disable-dlopen behavior when a system-provided libltdl is not available.
<br>
<p>I've filed PR #366 that does this.
<br>
<p><a href="https://github.com/open-mpi/ompi/pull/366">https://github.com/open-mpi/ompi/pull/366</a> contains a writeup describing what happens when you don't have libltld support, etc.
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
<li><strong>Next message:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16881.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
