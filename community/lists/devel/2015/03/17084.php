<?
$subject_val = "Re: [OMPI devel] nightly tarballs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 06:40:14 2015" -->
<!-- isoreceived="20150303114014" -->
<!-- sent="Tue, 3 Mar 2015 11:40:07 +0000" -->
<!-- isosent="20150303114007" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] nightly tarballs" -->
<!-- id="8064C1E5-3F4E-484E-9D00-E8CC5DAB6C9D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54F582B4.2040708_at_iferc.org" -->
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
<strong>Date:</strong> 2015-03-03 06:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17085.php">Philipp Thomas: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17083.php">Gilles Gouaillardet: "[OMPI devel] nightly tarballs"</a>
<li><strong>In reply to:</strong> <a href="17083.php">Gilles Gouaillardet: "[OMPI devel] nightly tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] nightly tarballs"</a>
<li><strong>Reply:</strong> <a href="17086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] nightly tarballs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The automatic nightly tarball for a given branch is only generated on nights where there were commits on that branch since the last tarball was made.
<br>
<p>Results of the nightly tarball generation are sent to testing_at_open-mpi.org.
<br>
<p>It looks like last night's build failed for some reason -- here's the last few lines of &quot;make distcheck&quot; from last night's mail:
<br>
<p>-----
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build/opal/mca/common/sm'
<br>
Making distclean in mca/common/verbs
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build/opal/mca/common/verbs'
<br>
make[3]: *** No rule to make target `distclean'.  Stop.
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build/opal/mca/common/verbs'
<br>
make[2]: *** [distclean-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build/opal'
<br>
make[1]: *** [distclean-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-03-02-211001/ompi/openmpi-dev-1196-g3756115/_build'
<br>
make: *** [distcheck] Error 1
<br>
-----
<br>
<p><p><span class="quotelev1">&gt; On Mar 3, 2015, at 1:45 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the latest tarballs for both master and v1.8 were generated on Feb 28 2015.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; among other things, that means the latest coverity report is from Feb 28.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there something wrong ?
</span><br>
<span class="quotelev1">&gt; (and is someone taking care of it ?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17083.php">http://www.open-mpi.org/community/lists/devel/2015/03/17083.php</a>
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
<li><strong>Next message:</strong> <a href="17085.php">Philipp Thomas: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17083.php">Gilles Gouaillardet: "[OMPI devel] nightly tarballs"</a>
<li><strong>In reply to:</strong> <a href="17083.php">Gilles Gouaillardet: "[OMPI devel] nightly tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] nightly tarballs"</a>
<li><strong>Reply:</strong> <a href="17086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] nightly tarballs"</a>
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
