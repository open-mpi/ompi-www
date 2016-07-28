<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 00:15:31 2014" -->
<!-- isoreceived="20140109051531" -->
<!-- sent="Wed, 8 Jan 2014 21:15:29 -0800" -->
<!-- isosent="20140109051529" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="CAAvDA14tBWOV2ZiLmJn-zRGRscz09ppfABScJTh26RRE0DQKRQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA148Vi0yLF-M-MWsOMKAQr-L8yLzasSzsisCVCENpmjQ_Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 00:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13613.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Previous message:</strong> <a href="13611.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13614.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No joy running autogen.pl on my FreeBSD system.
<br>
So, I'll try to remember to run on Thu night's trunk tarball.
<br>
<p>-Paul
<br>
<p><p>On Wed, Jan 8, 2014 at 9:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *IF* I have new enough autotools to autogen on my FreeBSD platform, I'll
</span><br>
<span class="quotelev1">&gt; take a shot tonight from the svn trunk.  Otherwise I'll need a tarball to
</span><br>
<span class="quotelev1">&gt; point my testing script at.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 8, 2014 at 8:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, as I look at it, the logic escapes me anyway. Basically, you
</span><br>
<span class="quotelev2">&gt;&gt; only have two options - use the vfs struct for Sun, and use fs struct for
</span><br>
<span class="quotelev2">&gt;&gt; everything else. I'm not aware of any other choice, and indeed the list of
</span><br>
<span class="quotelev2">&gt;&gt; all the systems for the latter actually is intended to amount to &quot;anything
</span><br>
<span class="quotelev2">&gt;&gt; else&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I just changed it to an &quot;else&quot; statement in the trunk and scheduled it
</span><br>
<span class="quotelev2">&gt;&gt; for 1.7.4 if it passes muster - see how this works for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 8, 2014, at 4:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This partial make output shows a build failure of the current trunk
</span><br>
<span class="quotelev2">&gt;&gt; tarball on FreeBSD-9/x86-64:
</span><br>
<span class="quotelev2">&gt;&gt;   CC       path.lo
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'opal_path_df':
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:556:
</span><br>
<span class="quotelev2">&gt;&gt; error: 'buf' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:556:
</span><br>
<span class="quotelev2">&gt;&gt; error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:556:
</span><br>
<span class="quotelev2">&gt;&gt; error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; *** [path.lo] Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Builds of the trunk on NetBSD and OpenBSD fail in the same way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code in opal_path_df() seems not to define the variable &quot;buf&quot; unless
</span><br>
<span class="quotelev2">&gt;&gt; certain defines are present, but then tries to USE the variable
</span><br>
<span class="quotelev2">&gt;&gt; unconditionally.  That unconditional use of &quot;buf&quot; is the proximate cause of
</span><br>
<span class="quotelev2">&gt;&gt; the failure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A very-likely-related observation:
</span><br>
<span class="quotelev2">&gt;&gt; The code in opal/util/path.c seems to expect __BSD to be defined under
</span><br>
<span class="quotelev2">&gt;&gt; *some* circumstance, but it is not defined by any current
</span><br>
<span class="quotelev2">&gt;&gt; {Free,Net,Open}BSD:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FreeBSD-9:
</span><br>
<span class="quotelev2">&gt;&gt; $ touch empty.c
</span><br>
<span class="quotelev2">&gt;&gt; $ gcc -dM -E empty.c | grep BSD
</span><br>
<span class="quotelev2">&gt;&gt; #define __FreeBSD_cc_version 900001
</span><br>
<span class="quotelev2">&gt;&gt; #define __VERSION__ &quot;4.2.1 20070831 patched [FreeBSD]&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define __FreeBSD__ 9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NetBSD-6:
</span><br>
<span class="quotelev2">&gt;&gt; -bash-4.2$ touch empty.c
</span><br>
<span class="quotelev2">&gt;&gt; -bash-4.2$ gcc -dM -E empty.c | grep BSD
</span><br>
<span class="quotelev2">&gt;&gt; #define __NetBSD__ 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenBSD-5:
</span><br>
<span class="quotelev2">&gt;&gt; -bash-4.2$ touch empty.c
</span><br>
<span class="quotelev2">&gt;&gt; -bash-4.2$ gcc -dM -E empty.c | grep BSD
</span><br>
<span class="quotelev2">&gt;&gt; #define __OpenBSD__ 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, there are TWO issues:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) opal_path_df() defines the variable &quot;buf&quot; only conditionally but then
</span><br>
<span class="quotelev2">&gt;&gt; uses it UNconditionally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) logic which appears to be intended for at least FreeBSD is probably
</span><br>
<span class="quotelev2">&gt;&gt; not reachable in any build.
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
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13613.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Previous message:</strong> <a href="13611.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13614.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
