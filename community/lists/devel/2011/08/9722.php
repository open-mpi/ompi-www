<?
$subject_val = "[OMPI devel] descriptor limits -- FAQ item";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 18:24:44 2011" -->
<!-- isoreceived="20110829222444" -->
<!-- sent="Mon, 29 Aug 2011 15:22:32 -0700" -->
<!-- isosent="20110829222232" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] descriptor limits -- FAQ item" -->
<!-- id="4E5C1128.5000408_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] descriptor limits -- FAQ item<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 18:22:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9723.php">Eugene Loh: "[OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="9721.php">Brice Goglin: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9733.php">Ralph Castain: "Re: [OMPI devel] descriptor limits -- FAQ item"</a>
<li><strong>Reply:</strong> <a href="9733.php">Ralph Castain: "Re: [OMPI devel] descriptor limits -- FAQ item"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems to me the FAQ item 
<br>
<a href="http://www.open-mpi.org/faq/?category=large-clusters#fd-limits">http://www.open-mpi.org/faq/?category=large-clusters#fd-limits</a> needs 
<br>
updating.  I'm willing to give this a try, but need some help first.  
<br>
(I'm even more willing to let someone else do all this, but I'm not 
<br>
holding my breath.)
<br>
<p>For example, the text sounds dated -- e.g., with references to v1.2.  Is 
<br>
the &quot;road map&quot; discussion still current?
<br>
<p>Is the estimate of the needed number of descriptors our current best guess?
<br>
<p>The FAQ is missing discussion of how to increase the limit.  For 
<br>
something like &quot;limit/ulimit/unlimit&quot;, where should this be done?  In 
<br>
.login?  I assume it's not sufficient simply to set this in the shell 
<br>
where mpirun is executed, assuming processes will also be launched on 
<br>
remote nodes.  Yes?
<br>
<p>(And, clearly, the FAQ item is missing discussion of the MCA parameter 
<br>
opal_set_max_sys_limits.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9723.php">Eugene Loh: "[OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="9721.php">Brice Goglin: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9733.php">Ralph Castain: "Re: [OMPI devel] descriptor limits -- FAQ item"</a>
<li><strong>Reply:</strong> <a href="9733.php">Ralph Castain: "Re: [OMPI devel] descriptor limits -- FAQ item"</a>
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
