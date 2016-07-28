<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 21:22:45 2011" -->
<!-- isoreceived="20111021012245" -->
<!-- sent="Thu, 20 Oct 2011 19:22:37 -0600" -->
<!-- isosent="20111021012237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="765EE5B1-6209-4F10-B588-438255AFF6AB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201110210114.p9L1EDJI024876_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-20 21:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9873.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25350"</a>
<li><strong>Previous message:</strong> <a href="9871.php">Eugene Loh: "[OMPI devel] MPI 2.2 datatypes"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11350.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
regenerating now...
<br>
<p>On Oct 20, 2011, at 7:14 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Thu Oct 20 21:00:02 EDT 2011
</span><br>
<span class="quotelev1">&gt; End time:   Thu Oct 20 21:14:13 EDT 2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/vprotocol'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/vprotocol'
</span><br>
<span class="quotelev1">&gt; (cd mca/common/mx &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/common/mx \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/common/mx'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/common/mx'
</span><br>
<span class="quotelev1">&gt; (cd mca/common/cuda &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/common/cuda \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/common/cuda'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/common/cuda'
</span><br>
<span class="quotelev1">&gt; (cd mca/common/sm &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/common/sm \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/common/sm'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/common/sm'
</span><br>
<span class="quotelev1">&gt; (cd mca/common/portals &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/common/portals \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/common/portals'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/common/portals'
</span><br>
<span class="quotelev1">&gt; (cd mca/allocator/bucket &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/allocator/bucket \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/allocator/bucket'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/allocator/bucket'
</span><br>
<span class="quotelev1">&gt; (cd mca/allocator/basic &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/allocator/basic \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/allocator/basic'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/allocator/basic'
</span><br>
<span class="quotelev1">&gt; (cd mca/bml/r2 &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/bml/r2 \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/bml/r2'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/bml/r2'
</span><br>
<span class="quotelev1">&gt; (cd mca/btl/self &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/btl/self \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/btl/self'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/btl/self'
</span><br>
<span class="quotelev1">&gt; (cd mca/btl/mx &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/btl/mx \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/btl/mx'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/btl/mx'
</span><br>
<span class="quotelev1">&gt; (cd mca/btl/ofud &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/btl/ofud \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/btl/ofud'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/btl/ofud'
</span><br>
<span class="quotelev1">&gt; (cd mca/btl/vader &amp;&amp; make  top_distdir=../../../../openmpi-1.7a1r25345 distdir=../../../../openmpi-1.7a1r25345/ompi/mca/btl/vader \
</span><br>
<span class="quotelev1">&gt;     am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/btl/vader'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `.windows', needed by `distdir'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi/mca/btl/vader'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r25345/ompi/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [distdir] Error 1
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9873.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25350"</a>
<li><strong>Previous message:</strong> <a href="9871.php">Eugene Loh: "[OMPI devel] MPI 2.2 datatypes"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11350.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
