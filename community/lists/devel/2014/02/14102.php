<?
$subject_val = "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 12:00:36 2014" -->
<!-- isoreceived="20140211170036" -->
<!-- sent="Tue, 11 Feb 2014 17:00:34 +0000" -->
<!-- isosent="20140211170034" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED" -->
<!-- id="7BBF0CF1-F524-4523-9807-E3B54EDB1AAD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15jhn+MxK4gM0+Rpzw+uFP3K-hnNd0acd60JwH0ZyMErA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 12:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14103.php">Dave Goodell (dgoodell): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Previous message:</strong> <a href="14101.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14056.php">Paul Hargrove: "[OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14103.php">Dave Goodell (dgoodell): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Reply:</strong> <a href="14103.php">Dave Goodell (dgoodell): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent; thanks Paul.  We're having a look.
<br>
<p>On Feb 8, 2014, at 6:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With Ralph's announcement that oshmem had been merged to v1.7 I started tests on lots of systems.
</span><br>
<span class="quotelev1">&gt; When I found the problem described below, I tried the 1.7.4 release, I found the problem exists there too!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One system I tried is a fairly ancient x86-64/linux system w/ QLogic HCAs, and thus builds and tests mtl:psm.
</span><br>
<span class="quotelev1">&gt; As a guest on this system I had NOT been testing it with all the 1.7.4rc's, but had tested at least once w/o problems (<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13661.php">http://www.open-mpi.org/community/lists/devel/2014/01/13661.php</a>).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, with both the 1.7.4 release and the current tarball (1.7.5a1r30634) I seem to be getting an ibv error that is probably due to the age of the OFED on this system:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CCLD     otfmerge-mpi
</span><br>
<span class="quotelev1">&gt; /home/phhargrove/OMPI/openmpi-1.7-latest-linux-x86_64-psm/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_event_type_str'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem seems to be originating in the usenic btl:
</span><br>
<span class="quotelev1">&gt; $ grep -rl ibv_event_type_str .
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/btl/usnic/btl_usnic_module.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="14103.php">Dave Goodell (dgoodell): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Previous message:</strong> <a href="14101.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14056.php">Paul Hargrove: "[OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14103.php">Dave Goodell (dgoodell): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Reply:</strong> <a href="14103.php">Dave Goodell (dgoodell): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
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
