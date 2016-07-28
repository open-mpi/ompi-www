<?
$subject_val = "[hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 18:27:33 2009" -->
<!-- isoreceived="20091001222733" -->
<!-- sent="Fri, 2 Oct 2009 08:27:28 +1000" -->
<!-- isosent="20091001222728" -->
<!-- name="Tony Breeds" -->
<!-- email="tony_at_[hidden]" -->
<!-- subject="[hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp" -->
<!-- id="20091001222728.GM2373_at_ozlabs.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp<br>
<strong>From:</strong> Tony Breeds (<em>tony_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 18:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0127.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Previous message:</strong> <a href="0125.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0127.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Reply:</strong> <a href="0127.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Reply:</strong> <a href="0128.php">Brice Goglin: "Re: [hwloc-devel] libhwloc.so: undefined reference to	`hwloc_hwloc_strncasecmp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I wanted to have a look at but hit a small snag the final link ended with:
<br>
libtool: link: gcc -std=gnu99 -g -O2 -o .libs/lstopo lstopo-lstopo.o lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o  -L/home/OpenHPC/hwloc/src/hwloc/trunk/src -lm ../src/.libs/libhwloc.so -Wl,-rpath -Wl,/home/OpenHPC/hwloc/build/lib
<br>
../src/.libs/libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp'
<br>
collect2: ld returned 1 exit status
<br>
<p><p>I'm using a fresh svn checkout, svn info shows:
<br>
<pre>
---
Path: .
URL: <a href="http://svn.open-mpi.org/svn/hwloc">http://svn.open-mpi.org/svn/hwloc</a>
Repository Root: <a href="http://svn.open-mpi.org/svn/hwloc">http://svn.open-mpi.org/svn/hwloc</a>
Repository UUID: 4b44e086-7f34-40ce-a3bd-00e031736276
Revision: 1090
Node Kind: directory
Schedule: normal
Last Changed Author: sthibaul
Last Changed Rev: 1090
Last Changed Date: 2009-10-02 04:32:28 +1000 (Fri, 02 Oct 2009)
---
and after runnign autogen.sh I build with:
./configure --prefix /home/OpenHPC/hwloc/build ; make ; make install
I suspect that somehow there is one to many &quot;hwloc_&quot; prefixes on that function call?
A svn an and svn log thinks that this revision is the cause:
[tony_at_thor trunk]$ svn log -r 1090 -v
------------------------------------------------------------------------
r1090 | sthibaul | 2009-10-02 04:32:28 +1000 (Fri, 02 Oct 2009) | 1 line
Changed paths:
   M /trunk/README
   M /trunk/configure.ac
   M /trunk/doc/Makefile.am
   M /trunk/include/hwloc/cpuset-bits.h
   M /trunk/include/hwloc/cpuset.h
   M /trunk/include/hwloc/glibc-sched.h
   M /trunk/include/hwloc/helper.h
   M /trunk/include/hwloc/linux-libnuma.h
   M /trunk/include/hwloc.h
   M /trunk/include/private/private.h
   M /trunk/src/bind.c
   M /trunk/src/topology-hpux.c
   M /trunk/src/topology-synthetic.c
   M /trunk/src/topology.c
   M /trunk/utils/hwloc-mask.h
hp-ux compiler fixes
------------------------------------------------------------------------
This quick hack fixes it for me, but I don't know if it will work with hp-ux
compilers.
Index: trunk/src/topology-synthetic.c
===================================================================
--- trunk/src/topology-synthetic.c	(revision 1090)
+++ trunk/src/topology-synthetic.c	(working copy)
@@ -37,19 +37,19 @@
       break;
 
     if (*pos &lt; '0' || *pos &gt; '9') {
-      if (!hwloc_hwloc_strncasecmp(pos, &quot;machines&quot;, 2))
+      if (!hwloc_strncasecmp(pos, &quot;machines&quot;, 2))
 	type = HWLOC_OBJ_MACHINE;
-      else if (!hwloc_hwloc_strncasecmp(pos, &quot;nodes&quot;, 1))
+      else if (!hwloc_strncasecmp(pos, &quot;nodes&quot;, 1))
 	type = HWLOC_OBJ_NODE;
-      else if (!hwloc_hwloc_strncasecmp(pos, &quot;sockets&quot;, 1))
+      else if (!hwloc_strncasecmp(pos, &quot;sockets&quot;, 1))
 	type = HWLOC_OBJ_SOCKET;
-      else if (!hwloc_hwloc_strncasecmp(pos, &quot;cores&quot;, 2))
+      else if (!hwloc_strncasecmp(pos, &quot;cores&quot;, 2))
 	type = HWLOC_OBJ_CORE;
-      else if (!hwloc_hwloc_strncasecmp(pos, &quot;caches&quot;, 2))
+      else if (!hwloc_strncasecmp(pos, &quot;caches&quot;, 2))
 	type = HWLOC_OBJ_CACHE;
-      else if (!hwloc_hwloc_strncasecmp(pos, &quot;procs&quot;, 1))
+      else if (!hwloc_strncasecmp(pos, &quot;procs&quot;, 1))
 	type = HWLOC_OBJ_PROC;
-      else if (!hwloc_hwloc_strncasecmp(pos, &quot;misc&quot;, 2))
+      else if (!hwloc_strncasecmp(pos, &quot;misc&quot;, 2))
 	type = HWLOC_OBJ_MISC;
 
       next_pos = strchr(pos, ':');
Yours Tony
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0127.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Previous message:</strong> <a href="0125.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0127.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Reply:</strong> <a href="0127.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Reply:</strong> <a href="0128.php">Brice Goglin: "Re: [hwloc-devel] libhwloc.so: undefined reference to	`hwloc_hwloc_strncasecmp"</a>
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
