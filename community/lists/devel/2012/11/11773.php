<?
$subject_val = "[OMPI devel] Is trunk broken ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 12 16:44:59 2012" -->
<!-- isoreceived="20121112214459" -->
<!-- sent="Mon, 12 Nov 2012 16:44:54 -0500" -->
<!-- isosent="20121112214454" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="[OMPI devel] Is trunk broken ?" -->
<!-- id="1D35EC92-D82E-48D8-AEE4-C9A8FB29D72A_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Is trunk broken ?<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-12 16:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11774.php">Shamis, Pavel: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="11772.php">Shamis, Pavel: "Re: [OMPI devel] Trunk warnings in collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11774.php">Shamis, Pavel: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="11774.php">Shamis, Pavel: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get the following error on the trunk:
<br>
<p>base/memchecker_base_close.c: In function 'opal_memchecker_base_close':
<br>
base/memchecker_base_close.c:28: error: implicit declaration of function 'opal_output_close'
<br>
<p>I may add #include &quot;opal/util/output.h&quot; to the file, but then it fails in other components.
<br>
I suspect that the output.h was removed somewhere from the top level.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11774.php">Shamis, Pavel: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="11772.php">Shamis, Pavel: "Re: [OMPI devel] Trunk warnings in collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11774.php">Shamis, Pavel: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="11774.php">Shamis, Pavel: "Re: [OMPI devel] Is trunk broken ?"</a>
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
