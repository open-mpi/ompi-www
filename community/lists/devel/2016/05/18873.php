<?
$subject_val = "[OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca undefined)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 16:46:09 2016" -->
<!-- isoreceived="20160502204609" -->
<!-- sent="Mon, 2 May 2016 13:45:54 -0700" -->
<!-- isosent="20160502204554" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca undefined)" -->
<!-- id="CAAvDA15F66FkGC0fhq=0CrumoUJeG0Nq2w6oakyK+NEgdkZ8uQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca undefined)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 16:45:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18874.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<li><strong>Previous message:</strong> <a href="18872.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] netbsd-7 build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca	undefined)"</a>
<li><strong>Reply:</strong> <a href="18903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca	undefined)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It appears that 2.0.0rc2 contains the same sort of alloca()-related error I
<br>
reported against 1.10.2rc1 in
<br>
<a href="https://www.open-mpi.org/community/lists/devel/2015/12/18440.php">https://www.open-mpi.org/community/lists/devel/2015/12/18440.php</a>
<br>
<p>This time the problem is in osc_rdma_peer.c, which *does* attempt the
<br>
appropriate conditional include of alloca.h, but incorrectly does so before
<br>
(indirect) inclusion of ompi_config.h (to define HAVE_ALLOCA_H).
<br>
<p>The simple patch below reorders the includes to resolve the problem.
<br>
<p>-Paul
<br>
<p>--- ompi/mca/osc/rdma/osc_rdma_peer.c~  Mon May  2 13:37:30 2016
<br>
+++ ompi/mca/osc/rdma/osc_rdma_peer.c   Mon May  2 13:37:41 2016
<br>
@@ -11,14 +11,14 @@
<br>
&nbsp;&nbsp;* $HEADER$
<br>
&nbsp;&nbsp;*/
<br>
<p>-#ifdef HAVE_ALLOCA_H
<br>
-#include &lt;alloca.h&gt;
<br>
-#endif
<br>
-
<br>
&nbsp;#include &quot;osc_rdma_comm.h&quot;
<br>
<p>&nbsp;#include &quot;ompi/mca/bml/base/base.h&quot;
<br>
<p>+#ifdef HAVE_ALLOCA_H
<br>
+#include &lt;alloca.h&gt;
<br>
+#endif
<br>
+
<br>
&nbsp;#define NODE_ID_TO_RANK(module, node_id) ((node_id) * ((ompi_comm_size
<br>
((module)-&gt;comm) + (module)-&gt;node_count - 1) / (module)-&gt;node_count))
<br>
<p>&nbsp;/**
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18874.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<li><strong>Previous message:</strong> <a href="18872.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] netbsd-7 build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca	undefined)"</a>
<li><strong>Reply:</strong> <a href="18903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca	undefined)"</a>
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
