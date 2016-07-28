<?
$subject_val = "[OMPI devel] [1.8.4rc2] build broken by default on SGI UV";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 21:53:02 2014" -->
<!-- isoreceived="20141212025302" -->
<!-- sent="Thu, 11 Dec 2014 18:53:00 -0800" -->
<!-- isosent="20141212025300" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.4rc2] build broken by default on SGI UV" -->
<!-- id="CAAvDA16RDTxbGqeWtjSRwmLxeZG+0Vnum7twqfuDSbz59ZVRbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.4rc2] build broken by default on SGI UV<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 21:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16521.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc2] orted SEGVs on Solaris-11/x86-64"</a>
<li><strong>Previous message:</strong> <a href="16519.php">Gilles Gouaillardet: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16544.php">Nathan Hjelm: "Re: [OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
<li><strong>Reply:</strong> <a href="16544.php">Nathan Hjelm: "Re: [OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I've reported this earlier in the 1.8 series.
<br>
If I compile on an SGI UV (e.g. blacklight at PSC) configure picks up the
<br>
presence of xpmem headers and enables the vader BTL.
<br>
However, the port of vader to SGI's &quot;flavor&quot; of xpmem is incomplete and the
<br>
following build failure results:
<br>
<p>make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/BLD/ompi/mca/btl/vader'
<br>
&nbsp;&nbsp;CC       btl_vader_module.lo
<br>
In file included from
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader.h:60,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:29:
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_endpoint.h:76:
<br>
error: expected specifier-qualifier-list before 'xpmem_apid_t'
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:
<br>
In function 'init_vader_endpoint':
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:197:
<br>
error: 'struct &lt;anonymous&gt;' has no member named 'apid'
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:
<br>
In function 'mca_btl_vader_endpoint_destructor':
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:682:
<br>
error: 'struct &lt;anonymous&gt;' has no member named 'apid'
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:683:
<br>
error: 'struct &lt;anonymous&gt;' has no member named 'apid'
<br>
make[2]: *** [btl_vader_module.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/BLD/ompi/mca/btl/vader'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/BLD/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>This can trivially be fixed in configure if one doesn't recognize the SGI
<br>
variant of xpmem.
<br>
I think (untested) that the following is sufficient:
<br>
<p>--- ./ompi/mca/btl/vader/configure.m4~  2014-12-11 18:51:11.499654000 -0800
<br>
+++ ./ompi/mca/btl/vader/configure.m4   2014-12-11 18:51:52.289654000 -0800
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
<p><p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16520/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16521.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc2] orted SEGVs on Solaris-11/x86-64"</a>
<li><strong>Previous message:</strong> <a href="16519.php">Gilles Gouaillardet: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16544.php">Nathan Hjelm: "Re: [OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
<li><strong>Reply:</strong> <a href="16544.php">Nathan Hjelm: "Re: [OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
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
