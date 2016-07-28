<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 12 07:24:42 2006" -->
<!-- isoreceived="20060312122442" -->
<!-- sent="Sun, 12 Mar 2006 12:24:32 +0000" -->
<!-- isosent="20060312122432" -->
<!-- name="Julian Seward" -->
<!-- email="julian_at_[hidden]" -->
<!-- subject="[OMPI users] svn r9191 build failure on ppc32-linux" -->
<!-- id="200603121224.32896.julian_at_valgrind.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Julian Seward (<em>julian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-12 07:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0830.php">Yusuf Sun: "[OMPI users] New user question on nohup submission"</a>
<li><strong>Previous message:</strong> <a href="0828.php">Jayabrata Chakrabarty: "[OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0832.php">Brian Barrett: "Re: [OMPI users] svn r9191 build failure on ppc32-linux"</a>
<li><strong>Reply:</strong> <a href="0832.php">Brian Barrett: "Re: [OMPI users] svn r9191 build failure on ppc32-linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r9191 (approximately Fri 3 March 06) does not build on ppc32-linux
<br>
due to use of register names of the form &quot;r9&quot; etc in
<br>
opal/include/opal/sys/powerpc/atomic.h, in opal_atomic_cmpset_64().
<br>
You must use either names of the form &quot;%%r9&quot; or just plain &quot;9&quot;,
<br>
or give gcc the flag -mregnames (iirc).  The plain-digit convention
<br>
is what the rest of the assembly fragments in that file use.  
<br>
My inelegant fix is below.
<br>
<p>This is with SuSE 10.0 running on a Mac Mini.  (glibc 2.3.5, gcc 4.0.2)
<br>
<p>Config args were --with-memory-manager=none --disable-mpi-f77
<br>
<p>J
<br>
<p>Index: opal/include/opal/sys/powerpc/atomic.h
<br>
===================================================================
<br>
--- opal/include/opal/sys/powerpc/atomic.h      (revision 9191)
<br>
+++ opal/include/opal/sys/powerpc/atomic.h      (working copy)
<br>
@@ -259,17 +259,17 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* is very similar to the pure 64 bit version.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;__asm__ __volatile__ (
<br>
-                         &quot;ld r4,%2         \n\t&quot;
<br>
-                         &quot;ld r5,%3        \n\t&quot;
<br>
-                         &quot;1: ldarx   r9, 0, %1  \n\t&quot;
<br>
-                         &quot;   cmpd    0, r9, r4  \n\t&quot;
<br>
+                         &quot;ld %%r4,%2         \n\t&quot;
<br>
+                         &quot;ld %%r5,%3        \n\t&quot;
<br>
+                         &quot;1: ldarx   %%r9, 0, %1  \n\t&quot;
<br>
+                         &quot;   cmpd    0, %%r9, %%r4  \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;   bne-    2f         \n\t&quot;
<br>
-                         &quot;   stdcx.  r5, 0, %1  \n\t&quot;
<br>
+                         &quot;   stdcx.  %%r5, 0, %1  \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;   bne-    1b         \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;2:                    \n\t&quot;
<br>
-                         &quot;xor r5,r4,r9          \n\t&quot;
<br>
-                         &quot;subfic r9,r5,0        \n\t&quot;
<br>
-                         &quot;adde %0,r9,r5         \n\t&quot;
<br>
+                         &quot;xor %%r5,%%r4,%%r9          \n\t&quot;
<br>
+                         &quot;subfic %%r9,%%r5,0        \n\t&quot;
<br>
+                         &quot;adde %0,%%r9,%%r5         \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;=&amp;r&quot; (ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;r&quot;(addr),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;m&quot;(oldval), &quot;m&quot;(newval)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0830.php">Yusuf Sun: "[OMPI users] New user question on nohup submission"</a>
<li><strong>Previous message:</strong> <a href="0828.php">Jayabrata Chakrabarty: "[OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0832.php">Brian Barrett: "Re: [OMPI users] svn r9191 build failure on ppc32-linux"</a>
<li><strong>Reply:</strong> <a href="0832.php">Brian Barrett: "Re: [OMPI users] svn r9191 build failure on ppc32-linux"</a>
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
