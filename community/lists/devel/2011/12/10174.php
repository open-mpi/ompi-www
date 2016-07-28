<?
$subject_val = "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 18:30:44 2011" -->
<!-- isoreceived="20111220233044" -->
<!-- sent="Tue, 20 Dec 2011 18:30:38 -0500" -->
<!-- isosent="20111220233038" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen" -->
<!-- id="A6D5AA48-935E-419E-B6A7-86E9B9800AA7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EF1189B.3080802_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 18:30:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10175.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Previous message:</strong> <a href="10173.php">Jeff Squyres: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>In reply to:</strong> <a href="10171.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Reply:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Reply:</strong> <a href="10177.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, we've known about this one and mostly ignored it.
<br>
<p>It occurs when autogen.sh is in a non-root directory and tries to run that script in a place where it doesn't exist (it does exist in the root directory).  We hadn't previously bothered to fix it because a) it's in autogen and users won't see it, b) we've revamped autogen on the trunk such that this doesn't happen anyway, and c) it's a non-fatal error (and reflects correct behavior anyway -- we don't need that script run anywhere except the root).
<br>
<p>I'll add it to the list, but I don't know if it'll actually get fixed.
<br>
<p><p>On Dec 20, 2011, at 6:22 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; While trying to resolve the gmake-vs-bmake problem I ran autogen.sh and saw:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.5.5rc1/openmpi-1.5.5rc1/autogen.sh: line 701: config/modify-configure-for-sun-fortran.pl: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect this just requires an addition to EXTRA_DIST in config/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="10175.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Previous message:</strong> <a href="10173.php">Jeff Squyres: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>In reply to:</strong> <a href="10171.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Reply:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Reply:</strong> <a href="10177.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
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
