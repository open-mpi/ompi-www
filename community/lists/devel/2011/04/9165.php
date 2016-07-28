<?
$subject_val = "[OMPI devel] problem with absent L3 on AMD CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 10 03:47:45 2011" -->
<!-- isoreceived="20110410074745" -->
<!-- sent="Sun, 10 Apr 2011 10:47:37 +0300" -->
<!-- isosent="20110410074737" -->
<!-- name="Andriy Gapon" -->
<!-- email="avg_at_[hidden]" -->
<!-- subject="[OMPI devel] problem with absent L3 on AMD CPU" -->
<!-- id="4DA16099.2030006_at_icyb.net.ua" -->
<!-- charset="X-VIET-VPS" -->
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
<strong>Subject:</strong> [OMPI devel] problem with absent L3 on AMD CPU<br>
<strong>From:</strong> Andriy Gapon (<em>avg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-10 03:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9166.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9164.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that lstopo can get mightly confused with AMD Athlon II processor
<br>
(family 10h) that doesn't have L3 cache.
<br>
<p>I believe that the following patch should fix that:
<br>
--- src/topology-x86.c.orig	2011-04-10 10:38:39.370239628 +0300
<br>
+++ src/topology-x86.c	2011-04-10 10:38:44.573256245 +0300
<br>
@@ -59,10 +59,6 @@
<br>
&nbsp;&nbsp;&nbsp;unsigned cachenum;
<br>
&nbsp;&nbsp;&nbsp;unsigned size = 0;
<br>
<p>-  cachenum = infos-&gt;numcaches++;
<br>
-  infos-&gt;cache = realloc(infos-&gt;cache, infos-&gt;numcaches*sizeof(*infos-&gt;cache));
<br>
-  cache = &amp;infos-&gt;cache[cachenum];
<br>
-
<br>
&nbsp;&nbsp;&nbsp;if (level == 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = ((cpuid &gt;&gt; 24)) &lt;&lt; 10;
<br>
&nbsp;&nbsp;&nbsp;else if (level == 2)
<br>
@@ -72,6 +68,10 @@
<br>
&nbsp;&nbsp;&nbsp;if (!size)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
<p>+  cachenum = infos-&gt;numcaches++;
<br>
+  infos-&gt;cache = realloc(infos-&gt;cache, infos-&gt;numcaches*sizeof(*infos-&gt;cache));
<br>
+  cache = &amp;infos-&gt;cache[cachenum];
<br>
+
<br>
&nbsp;&nbsp;&nbsp;cache-&gt;type = 1;
<br>
&nbsp;&nbsp;&nbsp;cache-&gt;level = level;
<br>
&nbsp;&nbsp;&nbsp;if (level &lt;= 2)
<br>
<p><p>Otherwise, numcaches gets incremented and the cache array grows a new entry, but
<br>
that new entry is not initialized.  Maybe this is an OS or envrionment specific
<br>
problem, but at least here on FreeBSD the new memory is not zero-ed out and
<br>
POSIX doesn't require realloc to do that.
<br>
<p>This report is for the version 1.1.2.
<br>
Apologies for the noise if this problem is already fixed in newer code.
<br>
<p>Thanks!
<br>
<pre>
-- 
Andriy Gapon
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9166.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9164.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
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
