<?
$subject_val = "Re: [hwloc-devel] Build system issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 17:58:48 2009" -->
<!-- isoreceived="20090908215848" -->
<!-- sent="Tue, 8 Sep 2009 17:58:42 -0400" -->
<!-- isosent="20090908215842" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Build system issues" -->
<!-- id="35AC5B95-C263-4330-B11F-640A32AB7372_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090908214137.GV5269_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Build system issues<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 17:58:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0004.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<li><strong>Previous message:</strong> <a href="0002.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<li><strong>In reply to:</strong> <a href="0002.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0004.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<li><strong>Reply:</strong> <a href="0004.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2009, at 5:41 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Well, we could as well just implement --version :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Good enough.  How's this? (see patch)
<br>
<p>(we haven't worked out the logistics of development yet -- e.g., just  
<br>
committing, or sending patches, etc. -- such things to be determined  
<br>
shortly...)
<br>
<p>Index: utils/topodistrib.c
<br>
===================================================================
<br>
--- utils/topodistrib.c	(revision 893)
<br>
+++ utils/topodistrib.c	(working copy)
<br>
@@ -1,5 +1,6 @@
<br>
&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;* Copyright &#169; 2009 CNRS, INRIA, Universit&#233; Bordeaux 1
<br>
+ * Copyright &#169; 2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;&nbsp;* See COPYING in top-level directory.
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
<p>@@ -18,6 +19,7 @@
<br>
&nbsp;&nbsp;#ifdef HAVE_XML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(where, &quot;   --xml &lt;path&gt;\t\tread topology from XML file  
<br>
&lt;path&gt;\n&quot;);
<br>
&nbsp;&nbsp;#endif
<br>
+  fprintf(where, &quot;   --version\t\treport version and exit\n&quot;);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;int main(int argc, char *argv[])
<br>
@@ -26,6 +28,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char * synthetic = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char * xmlpath = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int verbose = 0;
<br>
+  char **orig_argv = argv;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* skip argv[0], handle options */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;argv++;
<br>
@@ -57,6 +60,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argc--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto next;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+      else if (!strcmp (argv[0], &quot;--version&quot;)) {
<br>
+          printf(&quot;%s %s\n&quot;, orig_argv[0], VERSION);
<br>
+          exit(EXIT_SUCCESS);
<br>
+      }
<br>
&nbsp;&nbsp;#ifdef HAVE_XML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!strcmp (argv[0], &quot;--xml&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (argc &lt;= 2) {
<br>
Index: utils/topobind.c
<br>
===================================================================
<br>
--- utils/topobind.c	(revision 893)
<br>
+++ utils/topobind.c	(working copy)
<br>
@@ -1,5 +1,6 @@
<br>
&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;* Copyright &#169; 2009 CNRS, INRIA, Universit&#233; Bordeaux 1
<br>
+ * Copyright &#169; 2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;&nbsp;* See COPYING in top-level directory.
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
<p>@@ -20,6 +21,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(where, &quot;   --single\tbind on a single CPU to prevent  
<br>
migration\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(where, &quot;   --strict\trequire strict binding\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(where, &quot;   -v\t\tverbose messages\n&quot;);
<br>
+  fprintf(where, &quot;   --version\treport version and exit\n&quot;);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;int main(int argc, char *argv[])
<br>
@@ -32,6 +34,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int verbose = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int flags = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int ret;
<br>
+  char **orig_argv = argv;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;topo_cpuset_zero(&amp;cpu_set);
<br>
<p>@@ -67,6 +70,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flags |= TOPO_CPUBIND_STRICT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto next;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+      else if (!strcmp (argv[0], &quot;--version&quot;)) {
<br>
+          printf(&quot;%s %s\n&quot;, orig_argv[0], VERSION);
<br>
+          exit(EXIT_SUCCESS);
<br>
+      }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usage(stderr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return EXIT_FAILURE;
<br>
Index: utils/lstopo.c
<br>
===================================================================
<br>
--- utils/lstopo.c	(revision 893)
<br>
+++ utils/lstopo.c	(working copy)
<br>
@@ -1,5 +1,6 @@
<br>
&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;* Copyright &#169; 2009 CNRS, INRIA, Universit&#233; Bordeaux 1
<br>
+ * Copyright &#169; 2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;&nbsp;* See COPYING in top-level directory.
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
<p>@@ -75,6 +76,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf (where, &quot;   --fontsize 10         set size of text font\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf (where, &quot;   --gridsize 10         set size of margin  
<br>
between elements\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf (where, &quot;   --horiz               horizontal graphic  
<br>
layout instead of nearly 4/3 ratio\n&quot;);
<br>
+  fprintf (where, &quot;   --version             report version and exit 
<br>
\n&quot;);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;int
<br>
@@ -155,6 +157,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fsysroot = argv[2]; opt = 1;
<br>
&nbsp;&nbsp;#endif
<br>
+      } else if (!strcmp (argv[1], &quot;--version&quot;)) {
<br>
+          printf(&quot;%s %s\n&quot;, argv[0], VERSION);
<br>
+          exit(EXIT_SUCCESS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (filename) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stderr, &quot;Unrecognized options: %s\n&quot;, argv[1]);
<br>
Index: utils/Makefile.am
<br>
===================================================================
<br>
--- utils/Makefile.am	(revision 893)
<br>
+++ utils/Makefile.am	(working copy)
<br>
@@ -29,7 +29,7 @@
<br>
&nbsp;&nbsp;if TOPO_HAVE_UTILS_MAN
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ifneq ($(HELP2MAN),)
<br>
-TOPO_HELP2MAN=$(HELP2MAN) -m &quot;Topology commands&quot; -S &quot;INRIA&quot; -N -- 
<br>
version-string @VERSION@
<br>
+TOPO_HELP2MAN=$(HELP2MAN) -m &quot;Topology commands&quot; -S &quot;INRIA&quot; -N
<br>
<p>&nbsp;&nbsp;lstopo.1: lstopo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(TOPO_HELP2MAN) -n &quot;Show the topology of the system&quot; ./$^ -o $@
<br>
Index: utils/topomask.c
<br>
===================================================================
<br>
--- utils/topomask.c	(revision 893)
<br>
+++ utils/topomask.c	(working copy)
<br>
@@ -1,5 +1,6 @@
<br>
&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;* Copyright &#169; 2009 CNRS, INRIA, Universit&#233; Bordeaux 1
<br>
+ * Copyright &#169; 2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;&nbsp;* See COPYING in top-level directory.
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
<p>@@ -33,6 +34,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(where, &quot;  -v\tverbose\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(where, &quot;  --proclist\treport the list of processors in the  
<br>
CPU set\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(where, &quot;  --nodelist\treport the list of memory nodes near  
<br>
the CPU set\n&quot;);
<br>
+  fprintf(where, &quot;  --version\treport version and exit\n&quot;);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;int main(int argc, char *argv[])
<br>
@@ -43,6 +45,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int verbose = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int nodelist = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int proclist = 0;
<br>
+  char **orig_argv = argv;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;topo_cpuset_zero(&amp;set);
<br>
<p>@@ -68,6 +71,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nodelist = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto next;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+      if (!strcmp(argv[1], &quot;--version&quot;)) {
<br>
+        printf(&quot;%s %s\n&quot;, orig_argv[0], VERSION);
<br>
+        exit(EXIT_SUCCESS);
<br>
+      }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usage(stderr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return EXIT_FAILURE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0004.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<li><strong>Previous message:</strong> <a href="0002.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<li><strong>In reply to:</strong> <a href="0002.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0004.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<li><strong>Reply:</strong> <a href="0004.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
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
