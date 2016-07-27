<?
$subject_val = "[hwloc-devel] hwloc-1.8 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  5 18:34:25 2013" -->
<!-- isoreceived="20131205233425" -->
<!-- sent="Thu, 5 Dec 2013 17:34:24 -0600" -->
<!-- isosent="20131205233424" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.8 patch" -->
<!-- id="A80BBB58-A8C7-465F-988F-403AA74C74A7_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.8 patch<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-05 18:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3988.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.8 patch"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/11/3986.php">Brice Goglin: "Re: [hwloc-devel] deepakcs@linux.vnet.ibm.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3988.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.8 patch"</a>
<li><strong>Reply:</strong> <a href="3988.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.8 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Would you consider the following patch for hwloc-1.8 that we embed in the mpich version of hwloc?  The commit log has the description.  Please ignore the extra white-space piece of the commit.
<br>
<p>----8&lt;----
<br>
% git show 59cbc846 tests/embedded/configure.ac
<br>
commit 59cbc846d56eb259f6014b23114eed67b90abe95
<br>
Author: Rob Latham &lt;robl_at_[hidden]&gt;
<br>
Date:   Thu Jun 27 19:07:36 2013 +0000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;automake subdir-object mode needs check for -c -o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Older automake versions (at least 1.13.1) will complain if we asked for subdir
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mode and we did not verify that both -c and -o flags work  (AM_PROG_CC_C_O)
<br>
<p>diff --git a/src/pm/hydra/tools/topo/hwloc/hwloc/tests/embedded/configure.ac b/src/pm/hydra/tools/topo/hwloc/hwloc/tests/embedded/configure.ac
<br>
index d697e58d..c0d6ba17 100644
<br>
--- a/src/pm/hydra/tools/topo/hwloc/hwloc/tests/embedded/configure.ac
<br>
+++ b/src/pm/hydra/tools/topo/hwloc/hwloc/tests/embedded/configure.ac
<br>
@@ -9,9 +9,11 @@ AC_CANONICAL_TARGET
<br>
&nbsp;AM_INIT_AUTOMAKE([1.10 dist-bzip2 foreign subdir-objects tar-ustar -Wall -Werror])
<br>
&nbsp;m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
<br>
&nbsp;
<br>
+
<br>
&nbsp;AC_LANG([C])
<br>
&nbsp;
<br>
&nbsp;AC_PROG_CC
<br>
+AM_PROG_CC_C_O
<br>
&nbsp;
<br>
&nbsp;cat &lt;&lt;EOF
<br>
----8&lt;---- 
<br>
<p>&nbsp;&nbsp;&#151; Pavan
<br>
<p><pre>
--
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a></pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3988.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.8 patch"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/11/3986.php">Brice Goglin: "Re: [hwloc-devel] deepakcs@linux.vnet.ibm.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3988.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.8 patch"</a>
<li><strong>Reply:</strong> <a href="3988.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.8 patch"</a>
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
