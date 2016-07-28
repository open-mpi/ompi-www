<?
$subject_val = "[OMPI devel] [2.0.0rc2] xlc build failure (inline asm)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 19:55:28 2016" -->
<!-- isoreceived="20160502235528" -->
<!-- sent="Mon, 2 May 2016 16:55:22 -0700" -->
<!-- isosent="20160502235522" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] xlc build failure (inline asm)" -->
<!-- id="CAAvDA14QcF1aKnAgd=kYLh4XT_tCFVZ2TLZjZ2uWbjU8L57xoQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 19:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18887.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<li><strong>Previous message:</strong> <a href="18885.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Illegal instruction on Pentium III"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18906.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Reply:</strong> <a href="18906.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It appears that xlc's support for gcc-style inline asm does not allow an
<br>
empty clobbers list.
<br>
The failure I see is
<br>
<p>libtool: compile:  xlc -DHAVE_CONFIG_H -I.
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/asm
<br>
-I../../opal/include -I../../ompi/include -I../../oshmem/include
<br>
-I../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../../ompi/mpiext/cuda/c
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2
<br>
-I../..
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/orte/include
<br>
-I../../orte/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/ompi/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/oshmem/include
<br>
-D_REENTRANT
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-q64 -g -c
<br>
/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/asm/asm.c
<br>
-Wp,-qmakedep=gcc,-MF.deps/asm.TPlo  -qpic -DPIC -o .libs/asm.o
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h&quot;,
<br>
line 150.27: 1506-276 (S) Syntax error: possible missing string literal?
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h&quot;,
<br>
line 239.27: 1506-276 (S) Syntax error: possible missing string literal?
<br>
make[2]: *** [asm.lo] Error 1
<br>
<p><p>The code corresponding to the first error message is
<br>
<p>&nbsp;&nbsp;&nbsp;143  static inline int32_t opal_atomic_ll_32 (volatile int32_t *addr)
<br>
&nbsp;&nbsp;&nbsp;144  {
<br>
&nbsp;&nbsp;&nbsp;145     int32_t ret;
<br>
&nbsp;&nbsp;&nbsp;146
<br>
&nbsp;&nbsp;&nbsp;147     __asm__ __volatile__ (&quot;lwarx   %0, 0, %1  \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;148                           : &quot;=&amp;r&quot; (ret)
<br>
&nbsp;&nbsp;&nbsp;149                           : &quot;r&quot; (addr)
<br>
&nbsp;&nbsp;&nbsp;150                           :);
<br>
&nbsp;&nbsp;&nbsp;151     return ret;
<br>
&nbsp;&nbsp;&nbsp;152  }
<br>
<p>And the second error is the identical line as it appears in
<br>
opal_atomic_ll_64().
<br>
<p>The following patch to remove the &quot;trailing&quot; colons was sufficient to fix
<br>
this problem.
<br>
<p>--- openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h~    2016-05-02
<br>
23:37:13.597782000 +0000
<br>
+++ openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h     2016-05-02
<br>
23:36:11.615404378 +0000
<br>
@@ -147,7 +147,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;__asm__ __volatile__ (&quot;lwarx   %0, 0, %1  \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;=&amp;r&quot; (ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;r&quot; (addr)
<br>
-                         :);
<br>
+                          );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
&nbsp;}
<br>
<p>@@ -236,7 +236,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;__asm__ __volatile__ (&quot;ldarx   %0, 0, %1  \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;=&amp;r&quot; (ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;r&quot; (addr)
<br>
-                         :);
<br>
+                          );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
&nbsp;}
<br>
<p><p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18886/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18887.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<li><strong>Previous message:</strong> <a href="18885.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Illegal instruction on Pentium III"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18906.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Reply:</strong> <a href="18906.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
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
