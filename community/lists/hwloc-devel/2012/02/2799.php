<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 08:27:05 2012" -->
<!-- isoreceived="20120203132705" -->
<!-- sent="Fri, 03 Feb 2012 14:27:00 +0100" -->
<!-- isosent="20120203132700" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F2BE0A4.9080900_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120202105424.GN4314_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 08:27:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2800.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2798.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4247)"</a>
<li><strong>In reply to:</strong> <a href="2788.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2801.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2801.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 02/02/2012 11:54, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Paul H. Hargrove, le Thu 02 Feb 2012 01:43:45 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/1/2012 4:14 PM, Christopher Samuel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 02/02/12 10:38, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  I am not sure if one should fix this by:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  a) Document the need for CFLAGS=-qhalt=e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  b) Force &quot;-qhalt=e&quot; at configure time when CC=xlc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  c) Find some other way to fix the configure probe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;  &gt;  My vote is for &quot;(b)&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mine too, either that or:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; d) Exit saying the user has to set it, or use a different compiler.
</span><br>
<span class="quotelev2">&gt;&gt; I think I'd like to change my vote to (d) IFF we can determine the flag is
</span><br>
<span class="quotelev2">&gt;&gt; needed but not set.
</span><br>
<span class="quotelev2">&gt;&gt; Something like (untested):
</span><br>
<span class="quotelev1">&gt; I would actually say both: pass -qhalt=e to xlc
</span><br>
<p>Is &quot;vendor=ibm&quot; equivalent to &quot;compiler=xlc&quot;?
<br>
The current vendor detection code looks for __xlC__ __IBMC__ and
<br>
__IBMCPP__ before falling back to __AIX without __GNUC__. Can we pass
<br>
-qhalt=e in all these cases? Or should we grep for xlc in the version
<br>
output like [1] ?
<br>
<p>Brice
<br>
<p><p>[1] <a href="http://web.archiveorange.com/archive/v/5XO9yHnzrWVNchqS9lgc">http://web.archiveorange.com/archive/v/5XO9yHnzrWVNchqS9lgc</a>
<br>
<p><p>$ git diff
<br>
diff --git a/config/hwloc.m4 b/config/hwloc.m4
<br>
index fa91721..db92796 100644
<br>
--- a/config/hwloc.m4
<br>
+++ b/config/hwloc.m4
<br>
@@ -268,7 +268,9 @@ EOF])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_HWLOC_C_COMPILER_VENDOR([hwloc_c_vendor])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_HWLOC_CHECK_ATTRIBUTES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_HWLOC_CHECK_VISIBILITY
<br>
-    HWLOC_CFLAGS=&quot;$HWLOC_FLAGS $HWLOC_VISIBILITY_CFLAGS&quot;
<br>
+    HWLOC_CFLAGS=&quot;$HWLOC_FLAGS $HWLOC_VENDOR_CFLAGS $HWLOC_VISIBILITY_CFLAGS&quot;
<br>
+    AS_IF([test &quot;$HWLOC_VENDOR_CFLAGS&quot; != &quot;&quot;],
<br>
+          [AC_MSG_WARN([&quot;$HWLOC_VENDOR_CFLAGS&quot; has been added to the hwloc CFLAGS])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$HWLOC_VISIBILITY_CFLAGS&quot; != &quot;&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_WARN([&quot;$HWLOC_VISIBILITY_CFLAGS&quot; has been added to the hwloc CFLAGS])])
<br>
&nbsp;
<br>
diff --git a/config/hwloc_check_vendor.m4 b/config/hwloc_check_vendor.m4
<br>
index 1a9b944..9053734 100644
<br>
--- a/config/hwloc_check_vendor.m4
<br>
+++ b/config/hwloc_check_vendor.m4
<br>
@@ -146,7 +146,8 @@ AC_DEFUN([_HWLOC_CHECK_COMPILER_VENDOR], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# IBM XL C/C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$hwloc_check_compiler_vendor_result&quot; = &quot;unknown&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[HWLOC_IF_IFELSE([defined(__xlC__) || defined(__IBMC__) || defined(__IBMCPP__)],
<br>
-               [hwloc_check_compiler_vendor_result=&quot;ibm&quot;],
<br>
+               [hwloc_check_compiler_vendor_result=&quot;ibm&quot;
<br>
+               HWLOC_VENDOR_CFLAGS=&quot;-qhalt=e&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[HWLOC_IF_IFELSE([defined(_AIX) &amp;&amp; !defined(__GNUC__)],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[hwloc_check_compiler_vendor_result=&quot;ibm&quot;])])])
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2800.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2798.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4247)"</a>
<li><strong>In reply to:</strong> <a href="2788.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2801.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2801.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
