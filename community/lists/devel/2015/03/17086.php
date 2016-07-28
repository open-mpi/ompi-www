<?
$subject_val = "Re: [OMPI devel] nightly tarballs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 07:21:31 2015" -->
<!-- isoreceived="20150303122131" -->
<!-- sent="Tue, 3 Mar 2015 12:21:29 +0000" -->
<!-- isosent="20150303122129" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] nightly tarballs" -->
<!-- id="9F2DEFEA-EADF-4C9F-8941-2EDA73959013_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8064C1E5-3F4E-484E-9D00-E8CC5DAB6C9D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] nightly tarballs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-03 07:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17087.php">Howard Pritchard: "[OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Previous message:</strong> <a href="17085.php">Philipp Thomas: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17084.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] nightly tarballs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles --
<br>
<p>The problem is this PR: <a href="https://github.com/open-mpi/ompi/pull/438">https://github.com/open-mpi/ompi/pull/438</a>
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 3, 2015, at 3:40 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The automatic nightly tarball for a given branch is only generated on nights where there were commits on that branch since the last tarball was made.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Results of the nightly tarball generation are sent to testing_at_open-mpi.org.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like last night's build failed for some reason -- here's the last few lines of &quot;make distcheck&quot; from last night's mail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build/opal/mca/common/sm'
</span><br>
<span class="quotelev1">&gt; Making distclean in mca/common/verbs
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build/opal/mca/common/verbs'
</span><br>
<span class="quotelev1">&gt; make[3]: *** No rule to make target `distclean'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build/opal/mca/common/verbs'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [distclean-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distclean-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 3, 2015, at 1:45 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the latest tarballs for both master and v1.8 were generated on Feb 28 2015.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; among other things, that means the latest coverity report is from Feb 28.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; is there something wrong ?
</span><br>
<span class="quotelev2">&gt;&gt; (and is someone taking care of it ?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17083.php">http://www.open-mpi.org/community/lists/devel/2015/03/17083.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17084.php">http://www.open-mpi.org/community/lists/devel/2015/03/17084.php</a>
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
<li><strong>Next message:</strong> <a href="17087.php">Howard Pritchard: "[OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Previous message:</strong> <a href="17085.php">Philipp Thomas: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17084.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] nightly tarballs"</a>
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
