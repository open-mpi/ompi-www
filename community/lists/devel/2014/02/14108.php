<?
$subject_val = "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 22:21:51 2014" -->
<!-- isoreceived="20140212032151" -->
<!-- sent="Tue, 11 Feb 2014 19:21:37 -0800" -->
<!-- isosent="20140212032137" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED" -->
<!-- id="CAAvDA14mnd0J9AMae17aakinuV4crHbMrQM_U=bTKwRxh7Obfg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="010D935B-E6D9-4484-B353-1F9B30BC9023_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 22:21:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14109.php">Mike Dubman: "[OMPI devel] fail in vt"</a>
<li><strong>Previous message:</strong> <a href="14107.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<li><strong>In reply to:</strong> <a href="14103.php">Dave Goodell (dgoodell): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>Tonight's trunk tarball built successfully on the effected system.
<br>
<p>Thanks,
<br>
-Paul
<br>
<p><p>On Tue, Feb 11, 2014 at 11:19 AM, Dave Goodell (dgoodell) &lt;
<br>
dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Should be fixed on trunk by r30674.  It's been CMRed to v1.7.5 here:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4254">https://svn.open-mpi.org/trac/ompi/ticket/4254</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2014, at 11:00 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Excellent; thanks Paul.  We're having a look.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 8, 2014, at 6:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; With Ralph's announcement that oshmem had been merged to v1.7 I started
</span><br>
<span class="quotelev1">&gt; tests on lots of systems.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When I found the problem described below, I tried the 1.7.4 release, I
</span><br>
<span class="quotelev1">&gt; found the problem exists there too!!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; One system I tried is a fairly ancient x86-64/linux system w/ QLogic
</span><br>
<span class="quotelev1">&gt; HCAs, and thus builds and tests mtl:psm.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As a guest on this system I had NOT been testing it with all the
</span><br>
<span class="quotelev1">&gt; 1.7.4rc's, but had tested at least once w/o problems (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13661.php">http://www.open-mpi.org/community/lists/devel/2014/01/13661.php</a>).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, with both the 1.7.4 release and the current tarball
</span><br>
<span class="quotelev1">&gt; (1.7.5a1r30634) I seem to be getting an ibv error that is probably due to
</span><br>
<span class="quotelev1">&gt; the age of the OFED on this system:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  CCLD     otfmerge-mpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; /home/phhargrove/OMPI/openmpi-1.7-latest-linux-x86_64-psm/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.so:
</span><br>
<span class="quotelev1">&gt; undefined reference to `ibv_event_type_str'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem seems to be originating in the usenic btl:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ grep -rl ibv_event_type_str .
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./ompi/mca/btl/usnic/btl_usnic_module.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14108/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14109.php">Mike Dubman: "[OMPI devel] fail in vt"</a>
<li><strong>Previous message:</strong> <a href="14107.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<li><strong>In reply to:</strong> <a href="14103.php">Dave Goodell (dgoodell): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
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
