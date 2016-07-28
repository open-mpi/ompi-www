<?
$subject_val = "[OMPI devel] RFC: increase default AC/AM/LT requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 16:47:38 2010" -->
<!-- isoreceived="20100225214738" -->
<!-- sent="Thu, 25 Feb 2010 16:47:29 -0500" -->
<!-- isosent="20100225214729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: increase default AC/AM/LT requirements" -->
<!-- id="54AD1BD7-4409-4ADC-ACA6-9BB7B8514689_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: increase default AC/AM/LT requirements<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 16:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Previous message:</strong> <a href="7495.php">Ashley Pittman: "Re: [OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Reply:</strong> <a href="7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Bump minimum required versions of GNU autotools up to modern versions.  I suggest the following, but could be talked down a version or two:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Autoconf: 2.65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automake: 1.11.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libtool: 2.2.6b
<br>
<p>WHY: Stop carrying patches and workarounds for old versions.
<br>
<p>WHERE: autogen.sh, make_dist_tarball, various Makefile.am's, configure.ac, *.m4.
<br>
<p>WHEN: No real rush.  Somewhere in 1.5.x.
<br>
<p>TIMEOUT: Friday March 5, 2010
<br>
<p>----------------------------------------------------------------
<br>
<p>I was debugging a complex Automake timestamp issue yesterday and discovered that it was caused by the fact that we are patching an old version of libtool.m4.  It took a little while to figure out both the problem and an acceptable workaround.  During this process, I noticed that autogen.sh still carries patches to fix bugs in some *really* old versions of Libtool (e.g., 1.5.22).  Hence, I am send this RFC to increase the minimum required versions.
<br>
<p>Keep in mind:
<br>
<p>1. This ONLY affects developers.  Those who build from tarballs don't even need to have the Autotools installed.
<br>
2. Autotool patches should always be pushed upstream.  We should only maintain patches for things that have been pushed upstream but have not yet been released.
<br>
3. We already have much more recent Autotools requirements for official distribution tarballs; see the chart here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
<br>
<p>Specifically: although official tarballs require recent Autotools, we allow developers to use much older versions.   Why are we still carrying around this old kruft?  Does some developer out there have a requirement to use older Autotools?
<br>
<p>If not, this RFC proposes to only allow recent versions of the Autotools to build Open MPI.  I believe there's reasonable m4 these days that can make autogen/configure/whatever abort early if the versions are not new enough.  This would allow us, at a minimum, to drop some of the libtool patches we're carrying.  There may be some Makefile.am workarounds that are no longer necessary, too.
<br>
<p>There's no real rush on this; if this RFC passes, we can set a concrete, fixed date some point in the future where we switch over to requiring new versions.  This should give everyone plenty of time to update if you need to, etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Previous message:</strong> <a href="7495.php">Ashley Pittman: "Re: [OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Reply:</strong> <a href="7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
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
