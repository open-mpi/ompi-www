<?
$subject_val = "[OMPI devel] Hang in comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 10:36:28 2014" -->
<!-- isoreceived="20140318143628" -->
<!-- sent="Tue, 18 Mar 2014 07:35:01 -0700" -->
<!-- isosent="20140318143501" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Hang in comm_spawn" -->
<!-- id="E19FEA42-6609-4EC4-838F-BD2C5A39B797_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Hang in comm_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 10:35:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="14360.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
<li><strong>Reply:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm seeing comm_spawn hang here:
<br>
<p>[bend001][[52890,1],0][coll_ml_module.c:3030:mca_coll_ml_comm_query] COLL-ML ml_coll_schedule_setup exit with error
<br>
[bend001][[52890,1],1][coll_ml_module.c:3030:mca_coll_ml_comm_query] COLL-ML ml_coll_schedule_setup exit with error
<br>
<p>Setting -mca coll ^ml allows things to run to completion just fine, so it appears that coll/ml is having a problem with comm_spawn.
<br>
<p>Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14361/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="14360.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
<li><strong>Reply:</strong> <a href="14362.php">Nathan Hjelm: "Re: [OMPI devel] Hang in comm_spawn"</a>
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
