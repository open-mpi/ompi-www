<?
$subject_val = "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 12:50:20 2010" -->
<!-- isoreceived="20100310175020" -->
<!-- sent="Wed, 10 Mar 2010 12:50:04 -0500" -->
<!-- isosent="20100310175004" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: increase default AC/AM/LT requirements" -->
<!-- id="201003101250.04884.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E877F391-FC38-4508-9D24-52EF9B7D3463_at_cisco.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 12:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7577.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7575.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>In reply to:</strong> <a href="7573.php">Jeff Squyres: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Jeff,
<br>
as said I'd be in favor of updating.
<br>
This would get rid of some of the tests in autogen, speeding up things.
<br>
<p>Regards,
<br>
Rainer
<br>
<p>On Wednesday 10 March 2010 12:07:56 pm Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Brian and I chatted about this in person -- he doesn't have too strong of
</span><br>
<span class="quotelev1">&gt;  an opinion here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We checked versions shipped in RHEL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RHEL4: AC 2.59, AM 1.9.2, LT 1.5.6
</span><br>
<span class="quotelev1">&gt; RHEL5: AC 2.59, AM 1.9.2, LT 1.5.22
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: they're both really ancient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I personally don't mind forcing developers to have more modern versions
</span><br>
<span class="quotelev1">&gt;  because we're a fairly small group of people (vs. users).  Does anyone
</span><br>
<span class="quotelev1">&gt;  else have an opinion here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2010, at 1:55 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I think our last set of minimums was based on being able to use RHEL4 out
</span><br>
<span class="quotelev2">&gt; &gt; of the box.  Updating to whatever ships with RHEL5 probably makes sense,
</span><br>
<span class="quotelev2">&gt; &gt; but I think that still leaves you at a LT 1.5.x release.  Being higher
</span><br>
<span class="quotelev2">&gt; &gt; than that requires new Autotools, which seems like asking for trouble.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 25, 2010, at 4:47 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHAT: Bump minimum required versions of GNU autotools up to modern
</span><br>
<span class="quotelev3">&gt; &gt; &gt; versions.  I suggest the following, but could be talked down a version
</span><br>
<span class="quotelev3">&gt; &gt; &gt; or two: Autoconf: 2.65
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      Automake: 1.11.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      Libtool: 2.2.6b
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHY: Stop carrying patches and workarounds for old versions.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHERE: autogen.sh, make_dist_tarball, various Makefile.am's,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure.ac, *.m4.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHEN: No real rush.  Somewhere in 1.5.x.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; TIMEOUT: Friday March 5, 2010
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I was debugging a complex Automake timestamp issue yesterday and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; discovered that it was caused by the fact that we are patching an old
</span><br>
<span class="quotelev3">&gt; &gt; &gt; version of libtool.m4.  It took a little while to figure out both the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problem and an acceptable workaround.  During this process, I noticed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that autogen.sh still carries patches to fix bugs in some *really* old
</span><br>
<span class="quotelev3">&gt; &gt; &gt; versions of Libtool (e.g., 1.5.22).  Hence, I am send this RFC to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; increase the minimum required versions.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Keep in mind:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1. This ONLY affects developers.  Those who build from tarballs don't
</span><br>
<span class="quotelev3">&gt; &gt; &gt; even need to have the Autotools installed. 2. Autotool patches should
</span><br>
<span class="quotelev3">&gt; &gt; &gt; always be pushed upstream.  We should only maintain patches for things
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that have been pushed upstream but have not yet been released. 3. We
</span><br>
<span class="quotelev3">&gt; &gt; &gt; already have much more recent Autotools requirements for official
</span><br>
<span class="quotelev3">&gt; &gt; &gt; distribution tarballs; see the chart here:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Specifically: although official tarballs require recent Autotools, we
</span><br>
<span class="quotelev3">&gt; &gt; &gt; allow developers to use much older versions.   Why are we still
</span><br>
<span class="quotelev3">&gt; &gt; &gt; carrying around this old kruft?  Does some developer out there have a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; requirement to use older Autotools?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If not, this RFC proposes to only allow recent versions of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Autotools to build Open MPI.  I believe there's reasonable m4 these
</span><br>
<span class="quotelev3">&gt; &gt; &gt; days that can make autogen/configure/whatever abort early if the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; versions are not new enough.  This would allow us, at a minimum, to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; drop some of the libtool patches we're carrying.  There may be some
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Makefile.am workarounds that are no longer necessary, too.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There's no real rush on this; if this RFC passes, we can set a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; concrete, fixed date some point in the future where we switch over to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; requiring new versions.  This should give everyone plenty of time to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; update if you need to, etc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;   Brian W. Barrett
</span><br>
<span class="quotelev2">&gt; &gt;   Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt; &gt;   Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7577.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7575.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>In reply to:</strong> <a href="7573.php">Jeff Squyres: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
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
