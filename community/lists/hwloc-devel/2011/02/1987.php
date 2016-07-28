<?
$subject_val = "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 18:20:27 2011" -->
<!-- isoreceived="20110222232027" -->
<!-- sent="Tue, 22 Feb 2011 18:20:22 -0500" -->
<!-- isosent="20110222232022" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1" -->
<!-- id="7243DC1D-B6B5-44A6-9B5C-FB55523AB036_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110222230231.GV5240_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 18:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1988.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1995.php">Brice Goglin: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1995.php">Brice Goglin: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 22, 2011, at 6:02 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Note the &quot;/* TODO: how to report? */&quot; comment in the code: we definitely
</span><br>
<span class="quotelev1">&gt; _want_ to get users to see the warning and report it.  
</span><br>
<p>Ah, ok.  Could we make that message a little more clear, then?  Maybe something like this:
<br>
<p>Index: src/topology.c
<br>
===================================================================
<br>
--- src/topology.c	(revision 3200)
<br>
+++ src/topology.c	(working copy)
<br>
@@ -48,7 +48,24 @@
<br>
&nbsp;&nbsp;&nbsp;return HWLOC_API_VERSION;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+static void hwloc_report_error(const char *msg, int line)
<br>
+{
<br>
+    static int reported = 0;
<br>
&nbsp;
<br>
+    if (!reported) {
<br>
+        fprintf(stderr, &quot;****************************************************************************\n&quot;);
<br>
+        fprintf(stderr, &quot;* Hwloc has encountered what looks like an error from the operating system.\n&quot;);
<br>
+        fprintf(stderr, &quot;*\n&quot;);
<br>
+        fprintf(stderr, &quot;* %s\n&quot;, msg);
<br>
+        fprintf(stderr, &quot;* Error occurred in topology.c line %d\n&quot;, line);
<br>
+        fprintf(stderr, &quot;*\n&quot;);
<br>
+        fprintf(stderr, &quot;* Please report this error message to the hwloc user's mailing list,\n&quot;);
<br>
+        fprintf(stderr, &quot;* along with the output from the hwloc-gather-topology script.\n&quot;);
<br>
+        fprintf(stderr, &quot;****************************************************************************\n&quot;);
<br>
+        reported = 1;
<br>
+    }
<br>
+}
<br>
+
<br>
&nbsp;static void
<br>
&nbsp;hwloc_topology_clear (struct hwloc_topology *topology);
<br>
&nbsp;
<br>
@@ -704,7 +721,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case HWLOC_OBJ_INCLUDED:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (container) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* TODO: how to report?  */
<br>
-	  fprintf(stderr, &quot;object included in several different objects!\n&quot;);
<br>
+          hwloc_report_error(&quot;object included in several different objects!&quot;, __LINE__);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* We can't handle that.  */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -713,7 +730,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case HWLOC_OBJ_INTERSECTS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* TODO: how to report?  */
<br>
-	fprintf(stderr, &quot;object intersection without inclusion!\n&quot;);
<br>
+          hwloc_report_error(&quot;object intersection without inclusion!&quot;, __LINE__);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* We can't handle that.  */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case HWLOC_OBJ_CONTAINS:
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="1988.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1986.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1995.php">Brice Goglin: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1995.php">Brice Goglin: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
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
