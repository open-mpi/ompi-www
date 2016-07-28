<?
$subject_val = "[OMPI devel] OMPI_MCA_opal_set_max_sys_limits";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 01:16:18 2011" -->
<!-- isoreceived="20110830051618" -->
<!-- sent="Tue, 30 Aug 2011 01:18:02 -0400" -->
<!-- isosent="20110830051802" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI_MCA_opal_set_max_sys_limits" -->
<!-- id="4E5C728A.2030201_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI_MCA_opal_set_max_sys_limits<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-30 01:18:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9724.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9722.php">Eugene Loh: "[OMPI devel] descriptor limits -- FAQ item"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Maybe someone can help me from having to think too hard.
<br>
<p>Let's say I want to max my system limits.  I can say this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun --mca opal_set_max_sys_limits 1 ...
<br>
<p>Cool.
<br>
<p>Meanwhile, if I do this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% setenv OMPI_MCA_opal_set_max_sys_limits 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun ...
<br>
<p>remote processes don't see the setting.  (Local processes and ompi_info 
<br>
are fine.)
<br>
<p>Bug?  Naively, this looks &quot;wrong.&quot;  At least disturbing, in any case.
<br>
<p>This is with v1.5.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9724.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9722.php">Eugene Loh: "[OMPI devel] descriptor limits -- FAQ item"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
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
