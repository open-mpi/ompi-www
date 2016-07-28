<?
$subject_val = "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 22:24:30 2011" -->
<!-- isoreceived="20110623022430" -->
<!-- sent="Wed, 22 Jun 2011 22:24:19 -0400" -->
<!-- isosent="20110623022419" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: === CREATE FAILURE (trunk) ===" -->
<!-- id="A397E93F-ADF9-4396-9139-27A15EB40817_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="201106230142.p5N1gg88029891_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-22 22:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9395.php">Xin He: "[OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9393.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24805"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
VT guys - please fix. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: MPI Team &lt;mpiteam_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: June 22, 2011 9:42:42 PM EDT
</span><br>
<span class="quotelev1">&gt; To: testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: === CREATE FAILURE (trunk) ===
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Wed Jun 22 21:00:02 EDT 2011
</span><br>
<span class="quotelev1">&gt; End time:   Wed Jun 22 21:42:42 EDT 2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; make[7]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/opari/doc'
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/opari'
</span><br>
<span class="quotelev1">&gt; (cd vtcpcavail &amp;&amp; make  top_distdir=../../../../../../openmpi-1.7a1r24808 distdir=../../../../../../openmpi-1.7a1r24808/ompi/contrib/vt/vt/tools/vtcpcavail \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtcpcavail'
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtcpcavail'
</span><br>
<span class="quotelev1">&gt; (cd vtdyn &amp;&amp; make  top_distdir=../../../../../../openmpi-1.7a1r24808 distdir=../../../../../../openmpi-1.7a1r24808/ompi/contrib/vt/vt/tools/vtdyn \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtdyn'
</span><br>
<span class="quotelev1">&gt; (cd dynattlib &amp;&amp; make  top_distdir=../../../../../../../openmpi-1.7a1r24808 distdir=../../../../../../../openmpi-1.7a1r24808/ompi/contrib/vt/vt/tools/vtdyn/dynattlib \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[7]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtdyn/dynattlib'
</span><br>
<span class="quotelev1">&gt; make[7]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtdyn/dynattlib'
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtdyn'
</span><br>
<span class="quotelev1">&gt; (cd vtfilter &amp;&amp; make  top_distdir=../../../../../../openmpi-1.7a1r24808 distdir=../../../../../../openmpi-1.7a1r24808/ompi/contrib/vt/vt/tools/vtfilter \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt; (cd mpi &amp;&amp; make  top_distdir=../../../../../../../openmpi-1.7a1r24808 distdir=../../../../../../../openmpi-1.7a1r24808/ompi/contrib/vt/vt/tools/vtfilter/mpi \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[7]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtfilter/mpi'
</span><br>
<span class="quotelev1">&gt; make[7]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtfilter/mpi'
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt; (cd vtjava &amp;&amp; make  top_distdir=../../../../../../openmpi-1.7a1r24808 distdir=../../../../../../openmpi-1.7a1r24808/ompi/contrib/vt/vt/tools/vtjava \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtjava'
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtjava'
</span><br>
<span class="quotelev1">&gt; (cd vtlibwrapgen &amp;&amp; make  top_distdir=../../../../../../openmpi-1.7a1r24808 distdir=../../../../../../openmpi-1.7a1r24808/ompi/contrib/vt/vt/tools/vtlibwrapgen \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtlibwrapgen'
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtlibwrapgen'
</span><br>
<span class="quotelev1">&gt; (cd vtrun &amp;&amp; make  top_distdir=../../../../../../openmpi-1.7a1r24808 distdir=../../../../../../openmpi-1.7a1r24808/ompi/contrib/vt/vt/tools/vtrun \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtrun'
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtrun'
</span><br>
<span class="quotelev1">&gt; (cd vtsetup &amp;&amp; make  top_distdir=../../../../../../openmpi-1.7a1r24808 distdir=../../../../../../openmpi-1.7a1r24808/ompi/contrib/vt/vt/tools/vtsetup \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtsetup'
</span><br>
<span class="quotelev1">&gt; make[6]: *** No rule to make target `src/vtsetup-*.src.tar.gz', needed by `distdir'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools/vtsetup'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r24808/ompi/openmpi-1.7a1r24808/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9394/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9395.php">Xin He: "[OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9393.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24805"</a>
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
