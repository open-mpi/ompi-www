<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 18:35:57 2013" -->
<!-- isoreceived="20130423223557" -->
<!-- sent="Tue, 23 Apr 2013 15:35:51 -0700" -->
<!-- isosent="20130423223551" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="CAAvDA15sruCN-4p7+_h3QfFOi8go28NyF=skB+mrg2HJCRKrwQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5177059C.4010609_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] RPATH issues when building in Fedora 18<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 18:35:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3640.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3640.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 23, 2013 at 3:05 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Jeff, can you fix the trunk nightly script to use libtool 2.4.2 instead
</span><br>
<span class="quotelev1">&gt; of 2.4 ? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul, the v1.7 branch nightly and the official v1.7 release tarball use
</span><br>
<span class="quotelev1">&gt; 2.4.2 and I think we have the same problem there too. Rerunning autoreconf
</span><br>
<span class="quotelev1">&gt; with centos63 or fedora17 libtool 2.2.6 seems to fix the problem. What I
</span><br>
<span class="quotelev1">&gt; don't understand is where configure gets this list of directory from.
</span><br>
<span class="quotelev1">&gt; Sleeping may help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Brice,
<br>
<p>Yup, I can confirm that building from the official 1.7 tarball:
<br>
1) libtool 2.4.2 *is* used
<br>
2) The /lib64 and /usr/lib64 components are *still* missing
<br>
from sys_lib_dlsearch_path_spec
<br>
<p>So, as you say the update to 2.4.2 does NOT fix the problem originally
<br>
reported.
<br>
<p>I took a look at libtool.m4 and find that the sys_lib_dlsearch_path_spec
<br>
value is HARDCODED as part of  big &quot;case $host_os in&quot;.  That is why the
<br>
autoreconf resolves the problem - the distro maintainers have customized
<br>
libtool.m4 appropriately.
<br>
<p>Other than instructing folks to autoreconf, I don't see a &quot;clean&quot; fix for
<br>
this issue.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3641/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3640.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3640.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
