<?
$subject_val = "[OMPI devel] Change in default MCA parameter value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 11:49:10 2014" -->
<!-- isoreceived="20140303164910" -->
<!-- sent="Mon, 3 Mar 2014 08:48:56 -0800" -->
<!-- isosent="20140303164856" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Change in default MCA parameter value" -->
<!-- id="D4A6AFD8-A2A2-4E9B-81BF-BDE25678DCD7_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Change in default MCA parameter value<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 11:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Previous message:</strong> <a href="14276.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heads up...
<br>
<p>&nbsp;(In [30909]) Now that we are binding by default, the issue of #slots and what to do when oversubscribed has become a bit more complicated. This isn't a problem in managed environments as we are always provided an accurate assignment for the #slots, or when -host is used to define the allocation since we automatically assume one slot for every time a node is named.
<br>
<p>The problem arises when a hostfile is used, and the user provides host names without specifying the slots= paramater. In these cases, we assign slots=1, but automatically allow oversubscription since that number isn't confirmed. We then provide a separate parameter by which the user can direct that we assign the number of slots based on the sensed hardware - e.g., by telling us to set the #slots equal to the #cores on each node. However, this has been set to &quot;off&quot; by default.
<br>
<p>In order to make this a little less complex for the user, set the default such that we automatically set #slots equal to #cores (or #hwt's if use_hwthreads_as_cpus has been set) only for those cases where the user provides names in a hostfile but does not provide slot information.
<br>
<p>&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14277/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Previous message:</strong> <a href="14276.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
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
