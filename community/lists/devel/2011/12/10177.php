<?
$subject_val = "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 18:43:02 2011" -->
<!-- isoreceived="20111220234302" -->
<!-- sent="Tue, 20 Dec 2011 16:42:54 -0700" -->
<!-- isosent="20111220234254" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen" -->
<!-- id="AC731623-19BA-4468-81B2-E334123CB7F4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A6D5AA48-935E-419E-B6A7-86E9B9800AA7_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 18:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10178.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Previous message:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>In reply to:</strong> <a href="10174.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a trivial patch that seems to fix it:
<br>
<p>Index: autogen.sh
<br>
===================================================================
<br>
--- autogen.sh	(revision 25674)
<br>
+++ autogen.sh	(working copy)
<br>
@@ -698,7 +698,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f configure.patched
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;  ++ Modifying configure for Sun Studio Fortran compilers&quot;
<br>
-    config/modify-configure-for-sun-fortran.pl
<br>
+    if test -f &quot;config/modify-configure-for-sun-fortran.pl&quot;; then
<br>
+        config/modify-configure-for-sun-fortran.pl
<br>
+    fi
<br>
&nbsp;}
<br>
<p>Unless someone sees an issue, I can add it.
<br>
<p><p>On Dec 20, 2011, at 4:30 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, we've known about this one and mostly ignored it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It occurs when autogen.sh is in a non-root directory and tries to run that script in a place where it doesn't exist (it does exist in the root directory).  We hadn't previously bothered to fix it because a) it's in autogen and users won't see it, b) we've revamped autogen on the trunk such that this doesn't happen anyway, and c) it's a non-fatal error (and reflects correct behavior anyway -- we don't need that script run anywhere except the root).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll add it to the list, but I don't know if it'll actually get fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2011, at 6:22 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While trying to resolve the gmake-vs-bmake problem I ran autogen.sh and saw:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.5.5rc1/openmpi-1.5.5rc1/autogen.sh: line 701: config/modify-configure-for-sun-fortran.pl: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suspect this just requires an addition to EXTRA_DIST in config/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10178.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Previous message:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>In reply to:</strong> <a href="10174.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
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
