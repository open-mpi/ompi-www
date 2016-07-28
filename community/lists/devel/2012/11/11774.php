<?
$subject_val = "Re: [OMPI devel] Is trunk broken ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 12 17:27:51 2012" -->
<!-- isoreceived="20121112222751" -->
<!-- sent="Mon, 12 Nov 2012 17:27:31 -0500" -->
<!-- isosent="20121112222731" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is trunk broken ?" -->
<!-- id="83015435-EFBE-4B72-9F7F-3AF9F8631F80_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1D35EC92-D82E-48D8-AEE4-C9A8FB29D72A_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Is trunk broken ?<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-12 17:27:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11775.php">Hjelm, Nathan T: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="11773.php">Shamis, Pavel: "[OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="11773.php">Shamis, Pavel: "[OMPI devel] Is trunk broken ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11775.php">Hjelm, Nathan T: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="11775.php">Hjelm, Nathan T: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Debug build works.
<br>
--with-platform=optimized is broken
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Nov 12, 2012, at 3:44 PM, Shamis, Pavel wrote:
I get the following error on the trunk:
base/memchecker_base_close.c: In function 'opal_memchecker_base_close':
base/memchecker_base_close.c:28: error: implicit declaration of function 'opal_output_close'
I may add #include &quot;opal/util/output.h&quot; to the file, but then it fails in other components.
I suspect that the output.h was removed somewhere from the top level.
Pavel (Pasha) Shamis
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11775.php">Hjelm, Nathan T: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="11773.php">Shamis, Pavel: "[OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="11773.php">Shamis, Pavel: "[OMPI devel] Is trunk broken ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11775.php">Hjelm, Nathan T: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="11775.php">Hjelm, Nathan T: "Re: [OMPI devel] Is trunk broken ?"</a>
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
