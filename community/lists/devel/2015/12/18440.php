<?
$subject_val = "[OMPI devel] [1.10.2rc1] alloc link failure on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 09:46:05 2015" -->
<!-- isoreceived="20151221144605" -->
<!-- sent="Sat, 19 Dec 2015 16:44:40 -0800" -->
<!-- isosent="20151220004440" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.10.2rc1] alloc link failure on Solaris" -->
<!-- id="CAAvDA17OwvbjLSc4z=29p+mya69UCrpj9Pz=8hUt7n7esxr1RA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.10.2rc1] alloc link failure on Solaris<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-19 19:44:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18441.php">Paul Hargrove: "Re: [OMPI devel] [Open MPI Announce] Open MPI v2.0.0rc1 is available"</a>
<li><strong>Previous message:</strong> <a href="18439.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18449.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<li><strong>Reply:</strong> <a href="18449.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On my Solaris 11.2 system, alloca() is a macro defined in alloca.h.
<br>
So, the following is needed to avoid link failures:
<br>
<p>--- ompi/mca/pml/cm/pml_cm.h~   Sat Dec 19 16:25:54 2015
<br>
+++ ompi/mca/pml/cm/pml_cm.h    Sat Dec 19 16:26:30 2015
<br>
@@ -32,6 +32,9 @@
<br>
&nbsp;#include &quot;pml_cm_sendreq.h&quot;
<br>
&nbsp;#include &quot;ompi/message/message.h&quot;
<br>
<p>+#ifdef HAVE_ALLOCA_H
<br>
+#include &lt;alloca.h&gt;
<br>
+#endif
<br>
<p>&nbsp;BEGIN_C_DECLS
<br>
<p><p>Based solely on source inspection, I believe master and v2.x have the same
<br>
issue.
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18441.php">Paul Hargrove: "Re: [OMPI devel] [Open MPI Announce] Open MPI v2.0.0rc1 is available"</a>
<li><strong>Previous message:</strong> <a href="18439.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18449.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<li><strong>Reply:</strong> <a href="18449.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
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
