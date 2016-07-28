<?
$subject_val = "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 14:19:38 2014" -->
<!-- isoreceived="20140211191938" -->
<!-- sent="Tue, 11 Feb 2014 19:19:37 +0000" -->
<!-- isosent="20140211191937" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED" -->
<!-- id="010D935B-E6D9-4484-B353-1F9B30BC9023_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7BBF0CF1-F524-4523-9807-E3B54EDB1AAD_at_cisco.com" -->
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
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 14:19:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Previous message:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>In reply to:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14108.php">Paul Hargrove: "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Reply:</strong> <a href="14108.php">Paul Hargrove: "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed on trunk by r30674.  It's been CMRed to v1.7.5 here: <a href="https://svn.open-mpi.org/trac/ompi/ticket/4254">https://svn.open-mpi.org/trac/ompi/ticket/4254</a>
<br>
<p>-Dave
<br>
<p>On Feb 11, 2014, at 11:00 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Excellent; thanks Paul.  We're having a look.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2014, at 6:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With Ralph's announcement that oshmem had been merged to v1.7 I started tests on lots of systems.
</span><br>
<span class="quotelev2">&gt;&gt; When I found the problem described below, I tried the 1.7.4 release, I found the problem exists there too!!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One system I tried is a fairly ancient x86-64/linux system w/ QLogic HCAs, and thus builds and tests mtl:psm.
</span><br>
<span class="quotelev2">&gt;&gt; As a guest on this system I had NOT been testing it with all the 1.7.4rc's, but had tested at least once w/o problems (<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13661.php">http://www.open-mpi.org/community/lists/devel/2014/01/13661.php</a>).  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, with both the 1.7.4 release and the current tarball (1.7.5a1r30634) I seem to be getting an ibv error that is probably due to the age of the OFED on this system:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD     otfmerge-mpi
</span><br>
<span class="quotelev2">&gt;&gt; /home/phhargrove/OMPI/openmpi-1.7-latest-linux-x86_64-psm/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_event_type_str'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to be originating in the usenic btl:
</span><br>
<span class="quotelev2">&gt;&gt; $ grep -rl ibv_event_type_str .
</span><br>
<span class="quotelev2">&gt;&gt; ./ompi/mca/btl/usnic/btl_usnic_module.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Previous message:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>In reply to:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14108.php">Paul Hargrove: "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Reply:</strong> <a href="14108.php">Paul Hargrove: "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
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
