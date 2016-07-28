<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 04:12:42 2013" -->
<!-- isoreceived="20130430081242" -->
<!-- sent="Tue, 30 Apr 2013 01:12:37 -0700" -->
<!-- isosent="20130430081237" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issues" -->
<!-- id="CAAvDA15p41D6M+3mZ788=VVOdONRRFeQuZpRYHO0cF81fetCUg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="517E775F.7040707_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7 issues<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 04:12:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3659.php">Brice Goglin: "[hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3657.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3660.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3660.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 29, 2013 at 6:36 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt; &gt;  but I am getting many other warnings and another
</span><br>
<span class="quotelev2">&gt; &gt; error on FreeBSD 9.1:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/sys/sysctl.h:799: error: expected declaration specifiers or
</span><br>
<span class="quotelev1">&gt; '...' before 'u_int'
</span><br>
<span class="quotelev2">&gt; &gt; topology-freebsd.c: In function 'hwloc_freebsd_node_meminfo_info':
</span><br>
<span class="quotelev2">&gt; &gt; topology-freebsd.c:173: warning: passing argument 2 of 'sysctl' makes
</span><br>
<span class="quotelev1">&gt; pointer from integer without a cast
</span><br>
<span class="quotelev2">&gt; &gt; topology-freebsd.c:173: warning: passing argument 5 of 'sysctl' makes
</span><br>
<span class="quotelev1">&gt; integer from pointer without a cast
</span><br>
<span class="quotelev2">&gt; &gt; topology-freebsd.c:173: error: too many arguments to function 'sysctl'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if this CFLAGS=-D_POSIX_SOURCE is supported by FreeBSD headers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could not fix this. Google says that FreeBSD does not define u_int
</span><br>
<span class="quotelev1">&gt; when _POSIX_SOURCE, so the sysctl() prototype cannot be correct. I tend
</span><br>
<span class="quotelev1">&gt; to think you should remove _POSIX_SOURCE on this FreeBSD release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>sysctl() is not defined by any POSIX standard, right?
<br>
On FreeBSD, defining _POSIX_SOURCE is intended to suppress definitions of
<br>
all non-POSIX functions, types, constants, etc.
<br>
This is different than Linux, but that doesn't make it wrong.
<br>
See, for instance:
<br>
<a href="http://lists.freebsd.org/pipermail/freebsd-standards/2004-March/000474.html">http://lists.freebsd.org/pipermail/freebsd-standards/2004-March/000474.html</a>
<br>
<p>So, what else is one to expect when defining _POSIX_SOURCE and including
<br>
then including the non-POSIX header sys/sysctl.h?
<br>
I agree that one cannot expect to build hwloc on FreeBSD w/ strict POSIX
<br>
source enforced.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3659.php">Brice Goglin: "[hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3657.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3660.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3660.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
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
