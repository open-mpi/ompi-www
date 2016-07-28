<?
$subject_val = "[OMPI devel] ILP32 warnings report";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 02:38:36 2014" -->
<!-- isoreceived="20140117073836" -->
<!-- sent="Thu, 16 Jan 2014 23:38:35 -0800" -->
<!-- isosent="20140117073835" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] ILP32 warnings report" -->
<!-- id="CAAvDA14=9+=-99uNS252pFCgd+1A8aLHH3+4J56mTE7at2oQPg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] ILP32 warnings report<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 02:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13785.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
<li><strong>Previous message:</strong> <a href="13783.php">Paul Hargrove: "[OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building trunk (1.9a1r30302) and 1.7 (1.7.4rc2r30303) with --enable-debug
<br>
on a linux/x86 (32-bit) platform  revealed many &quot;cast to pointer from
<br>
integer of different size&quot; warnings that could/should be avoided with an
<br>
intermediate cast to intptr_t or uintptr_t.
<br>
<p>On trunk the only ones are in the openib and vader btls:
<br>
<p>SRCDIR/ompi/mca/btl/openib/btl_openib.c:274: warning: cast from pointer to
<br>
integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/btl_openib_endpoint.h:368: warning: cast to
<br>
pointer from integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/connect/btl_openib_connect_base.c:456: warning:
<br>
cast to pointer from integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:910:
<br>
warning: cast to pointer from integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:1387:
<br>
warning: cast to pointer from integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:1455: warning:
<br>
cast to pointer from integer of different size
<br>
SRCDIR/ompi/mca/btl/vader/btl_vader_fifo.h:78: warning: cast to pointer
<br>
from integer of different size
<br>
<p>On v1.7 branch the openib ones are all present:
<br>
<p>SRCDIR/ompi/mca/btl/openib/btl_openib.c:272: warning: cast from pointer to
<br>
integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/btl_openib_endpoint.h:368: warning: cast to
<br>
pointer from integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/connect/btl_openib_connect_base.c:456: warning:
<br>
cast to pointer from integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:910:
<br>
warning: cast to pointer from integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:1387:
<br>
warning: cast to pointer from integer of different size
<br>
SRCDIR/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:1455: warning:
<br>
cast to pointer from integer of different size
<br>
<p>And there are a few more on v1.7 branch that are not seen in trunk:
<br>
<p>SRCDIR/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:591: warning:
<br>
cast to pointer from integer of different size
<br>
SRCDIR/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:606: warning:
<br>
cast to pointer from integer of different size
<br>
SRCDIR/ompi/mca/io/ompio/io_ompio.c:249: warning: cast from pointer to
<br>
integer of different size
<br>
SRCDIR/ompi/mca/mtl/mx/mtl_mx_component.c:138: warning: return makes
<br>
integer from pointer without a cast
<br>
<p><p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13785.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
<li><strong>Previous message:</strong> <a href="13783.php">Paul Hargrove: "[OMPI devel] Warnings from pgcc-13.10"</a>
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
