<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 23:10:29 2014" -->
<!-- isoreceived="20140109041029" -->
<!-- sent="Wed, 8 Jan 2014 20:10:25 -0800" -->
<!-- isosent="20140109041025" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="E20C2F57-8B96-453F-B367-26F9AD7504B6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16f_3TLAmGWJVdP-y5XYwcYVvJ26KWz4ryaOi17jhN2EA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 23:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13602.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13597.php">Paul Hargrove: "[OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13614.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13617.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, as I look at it, the logic escapes me anyway. Basically, you only have two options - use the vfs struct for Sun, and use fs struct for everything else. I'm not aware of any other choice, and indeed the list of all the systems for the latter actually is intended to amount to &quot;anything else&quot;.
<br>
<p>So I just changed it to an &quot;else&quot; statement in the trunk and scheduled it for 1.7.4 if it passes muster - see how this works for you.
<br>
<p>Ralph
<br>
<p><p>On Jan 8, 2014, at 4:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This partial make output shows a build failure of the current trunk tarball on FreeBSD-9/x86-64:
</span><br>
<span class="quotelev1">&gt;   CC       path.lo
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c: In function 'opal_path_df':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:556: error: 'buf' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:556: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:556: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; *** [path.lo] Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Builds of the trunk on NetBSD and OpenBSD fail in the same way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code in opal_path_df() seems not to define the variable &quot;buf&quot; unless certain defines are present, but then tries to USE the variable unconditionally.  That unconditional use of &quot;buf&quot; is the proximate cause of the failure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A very-likely-related observation:
</span><br>
<span class="quotelev1">&gt; The code in opal/util/path.c seems to expect __BSD to be defined under *some* circumstance, but it is not defined by any current {Free,Net,Open}BSD:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FreeBSD-9:
</span><br>
<span class="quotelev1">&gt; $ touch empty.c
</span><br>
<span class="quotelev1">&gt; $ gcc -dM -E empty.c | grep BSD
</span><br>
<span class="quotelev1">&gt; #define __FreeBSD_cc_version 900001
</span><br>
<span class="quotelev1">&gt; #define __VERSION__ &quot;4.2.1 20070831 patched [FreeBSD]&quot;
</span><br>
<span class="quotelev1">&gt; #define __FreeBSD__ 9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NetBSD-6:
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ touch empty.c
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ gcc -dM -E empty.c | grep BSD
</span><br>
<span class="quotelev1">&gt; #define __NetBSD__ 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenBSD-5:
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ touch empty.c
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ gcc -dM -E empty.c | grep BSD
</span><br>
<span class="quotelev1">&gt; #define __OpenBSD__ 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, there are TWO issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) opal_path_df() defines the variable &quot;buf&quot; only conditionally but then uses it UNconditionally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) logic which appears to be intended for at least FreeBSD is probably not reachable in any build.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13603/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13602.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13597.php">Paul Hargrove: "[OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13614.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13617.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
