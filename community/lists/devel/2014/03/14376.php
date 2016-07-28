<?
$subject_val = "[OMPI devel] 1.7.5rc5 build failure [with patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 00:40:40 2014" -->
<!-- isoreceived="20140320044040" -->
<!-- sent="Wed, 19 Mar 2014 21:40:37 -0700" -->
<!-- isosent="20140320044037" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.5rc5 build failure [with patch]" -->
<!-- id="CAAvDA169yjfxzjWvKu7mMVt+DSQGeiO8CA+oKxJMwBnM=knrvQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.5rc5 build failure [with patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 00:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14377.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<li><strong>Previous message:</strong> <a href="14375.php">Ralph Castain: "Re: [OMPI devel] v1.7.5rc4 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14380.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
<li><strong>Reply:</strong> <a href="14380.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to be the bearer of bad news...
<br>
<p>I configured on an SGI Altix UV with only &quot;--enable-debug --enable-static
<br>
--prefix=...&quot;
<br>
<p>The configure script found the sn/xpmem.h header and threfore enabled
<br>
btl:vader:
<br>
<p>--- MCA component btl:vader (m4 configuration macro)
<br>
checking for MCA component btl:vader compile mode... static
<br>
checking --with-xpmem value... simple ok (unspecified)
<br>
checking --with-xpmem-libdir value... simple ok (unspecified)
<br>
checking xpmem.h usability... no
<br>
checking xpmem.h presence... no
<br>
checking for xpmem.h... no
<br>
checking sn/xpmem.h usability... yes
<br>
checking sn/xpmem.h presence... yes
<br>
checking for sn/xpmem.h... yes
<br>
looking for library without search path
<br>
checking for xpmem_make in -lxpmem... yes
<br>
checking if MCA component btl:vader can compile... yes
<br>
<p>However, not only was btl:vader failing at runtime on the Altix when I last
<br>
checked, but the version of the code in 1.7.5rc5 won't build:
<br>
<p>Making all in mca/btl/vader
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-1.7.5rc5-linux-x86_64-uv/BLD/ompi/mca/btl/vader'
<br>
&nbsp;&nbsp;CC       btl_vader_module.lo
<br>
In file included from
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.7.5rc5-linux-x86_64-uv/openmpi-1.7.5rc5/ompi/mca/btl/vader/btl_vader.h:76,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.7.5rc5-linux-x86_64-uv/openmpi-1.7.5rc5/ompi/mca/btl/vader/btl_vader_module.c:26:
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.7.5rc5-linux-x86_64-uv/openmpi-1.7.5rc5/ompi/mca/btl/vader/btl_vader_endpoint.h:28:19:
<br>
error: xpmem.h: No such file or directory
<br>
<p>I think the safest/fastest fix is the following 1-line change to prevent
<br>
locating sn/xpmem.h, which is Altix-specific:
<br>
<p>--- ompi/mca/btl/vader/configure.m4     (revision 31166)
<br>
+++ ompi/mca/btl/vader/configure.m4     (working copy)
<br>
@@ -23,7 +23,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_ARG_WITH([xpmem],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_HELP_STRING([--with-xpmem(=DIR)],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Build with XPMEM kernel module support, searching for
<br>
headers in DIR])])
<br>
-    OMPI_CHECK_WITHDIR([xpmem], [$with_xpmem], [include/xpmem.h
<br>
include/sn/xpmem.h])
<br>
+    OMPI_CHECK_WITHDIR([xpmem], [$with_xpmem], [include/xpmem.h])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_ARG_WITH([xpmem-libdir],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_HELP_STRING([--with-xpmem-libdir=DIR],
<br>
<p>This patch is intended for 1.7 only - lets leave the trunk as-is.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14377.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<li><strong>Previous message:</strong> <a href="14375.php">Ralph Castain: "Re: [OMPI devel] v1.7.5rc4 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14380.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
<li><strong>Reply:</strong> <a href="14380.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
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
