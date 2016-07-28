<?
$subject_val = "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 12:08:01 2010" -->
<!-- isoreceived="20100310170801" -->
<!-- sent="Wed, 10 Mar 2010 09:07:56 -0800" -->
<!-- isosent="20100310170756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: increase default AC/AM/LT requirements" -->
<!-- id="E877F391-FC38-4508-9D24-52EF9B7D3463_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EBDB81B2-D507-4504-9258-06816863E30E_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: increase default AC/AM/LT requirements<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 12:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7574.php">George Bosilca: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7572.php">hu yaohui: "[OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7576.php">Rainer Keller: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Reply:</strong> <a href="7576.php">Rainer Keller: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian and I chatted about this in person -- he doesn't have too strong of an opinion here.
<br>
<p>We checked versions shipped in RHEL:
<br>
<p>RHEL4: AC 2.59, AM 1.9.2, LT 1.5.6
<br>
RHEL5: AC 2.59, AM 1.9.2, LT 1.5.22
<br>
<p>Meaning: they're both really ancient.
<br>
<p>I personally don't mind forcing developers to have more modern versions because we're a fairly small group of people (vs. users).  Does anyone else have an opinion here?
<br>
<p><p>On Feb 25, 2010, at 1:55 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I think our last set of minimums was based on being able to use RHEL4 out of the box.  Updating to whatever ships with RHEL5 probably makes sense, but I think that still leaves you at a LT 1.5.x release.  Being higher than that requires new Autotools, which seems like asking for trouble.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2010, at 4:47 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WHAT: Bump minimum required versions of GNU autotools up to modern versions.  I suggest the following, but could be talked down a version or two:
</span><br>
<span class="quotelev2">&gt; &gt;      Autoconf: 2.65
</span><br>
<span class="quotelev2">&gt; &gt;      Automake: 1.11.1
</span><br>
<span class="quotelev2">&gt; &gt;      Libtool: 2.2.6b
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHY: Stop carrying patches and workarounds for old versions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHERE: autogen.sh, make_dist_tarball, various Makefile.am's, configure.ac, *.m4.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHEN: No real rush.  Somewhere in 1.5.x.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TIMEOUT: Friday March 5, 2010
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was debugging a complex Automake timestamp issue yesterday and discovered that it was caused by the fact that we are patching an old version of libtool.m4.  It took a little while to figure out both the problem and an acceptable workaround.  During this process, I noticed that autogen.sh still carries patches to fix bugs in some *really* old versions of Libtool (e.g., 1.5.22).  Hence, I am send this RFC to increase the minimum required versions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Keep in mind:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. This ONLY affects developers.  Those who build from tarballs don't even need to have the Autotools installed.
</span><br>
<span class="quotelev2">&gt; &gt; 2. Autotool patches should always be pushed upstream.  We should only maintain patches for things that have been pushed upstream but have not yet been released.
</span><br>
<span class="quotelev2">&gt; &gt; 3. We already have much more recent Autotools requirements for official distribution tarballs; see the chart here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Specifically: although official tarballs require recent Autotools, we allow developers to use much older versions.   Why are we still carrying around this old kruft?  Does some developer out there have a requirement to use older Autotools?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If not, this RFC proposes to only allow recent versions of the Autotools to build Open MPI.  I believe there's reasonable m4 these days that can make autogen/configure/whatever abort early if the versions are not new enough.  This would allow us, at a minimum, to drop some of the libtool patches we're carrying.  There may be some Makefile.am workarounds that are no longer necessary, too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There's no real rush on this; if this RFC passes, we can set a concrete, fixed date some point in the future where we switch over to requiring new versions.  This should give everyone plenty of time to update if you need to, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="7574.php">George Bosilca: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7572.php">hu yaohui: "[OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7576.php">Rainer Keller: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Reply:</strong> <a href="7576.php">Rainer Keller: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
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
