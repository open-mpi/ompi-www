<?
$subject_val = "[OMPI devel] r31916  question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 17:40:26 2014" -->
<!-- isoreceived="20140618214026" -->
<!-- sent="Wed, 18 Jun 2014 21:40:25 +0000" -->
<!-- isosent="20140618214025" -->
<!-- name="Pritchard, Howard P" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="[OMPI devel] r31916  question" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05A9E2E6_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] r31916  question<br>
<strong>From:</strong> Pritchard, Howard P (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-18 17:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15007.php">Jeff Squyres (jsquyres): "[OMPI devel] Getting to the Cisco office next week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Reply:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Folks,
<br>
<p>I'm looking at commit 31916 and notice a lot of fields were remote from orte_node_t.
<br>
This is now preventing ras_alps_module.c from compiling owing to use of a &quot;launch_id&quot;
<br>
field.
<br>
<p>In lieu of the direct use of launch_id, should I replace the code around 587 of this file with
<br>
use of orte_get_attribute with ORTE_NODE_LAUNCH_ID for the attribute to be retrieved?
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p>-------------------------------------------------
<br>
Howard Pritchard
<br>
HPC-5
<br>
Los Alamos National Laboratory
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15008/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15007.php">Jeff Squyres (jsquyres): "[OMPI devel] Getting to the Cisco office next week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Reply:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
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
