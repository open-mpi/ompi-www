<?
$subject_val = "[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 15:54:22 2013" -->
<!-- isoreceived="20131219205422" -->
<!-- sent="Thu, 19 Dec 2013 21:54:19 +0100" -->
<!-- isosent="20131219205419" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again" -->
<!-- id="1387486461-8239-1-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 15:54:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13497.php">Adrian Reber: "[OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13495.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13497.php">Adrian Reber: "[OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13497.php">Adrian Reber: "[OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13498.php">Adrian Reber: "[OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13531.php">Adrian Reber: "Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
<br>
<p>This is the second try to replace the usage of blocking send and
<br>
recv in the C/R code with the non-blocking versions. The new code
<br>
compiles (in contrast to the old code) but does not work yet.
<br>
This is the first step to get the C/R code working again. Right
<br>
now it only compiles.
<br>
<p>Changes from V1:
<br>
* #ifdef out the broken code (so it is preserved for later re-design)
<br>
* marked the broken C/R code with ENABLE_FT_FIXED
<br>
<p>Changes from V2:
<br>
* only #ifdef out parts where the behaviour actually changes
<br>
<p>Adrian Reber (2):
<br>
&nbsp;&nbsp;Trying to get the C/R code to compile again. (recv_*_nb)
<br>
&nbsp;&nbsp;Trying to get the C/R code to compile again. (send_*_nb)
<br>
<p>&nbsp;ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            |  64 +++++------
<br>
&nbsp;orte/mca/errmgr/base/errmgr_base_tool.c         |  20 +---
<br>
&nbsp;orte/mca/rml/ftrm/rml_ftrm.h                    |  46 +-------
<br>
&nbsp;orte/mca/rml/ftrm/rml_ftrm_component.c          |   4 -
<br>
&nbsp;orte/mca/rml/ftrm/rml_ftrm_module.c             | 139 +++---------------------
<br>
&nbsp;orte/mca/snapc/full/snapc_full_app.c            |  32 +++++-
<br>
&nbsp;orte/mca/snapc/full/snapc_full_global.c         |  52 ++++-----
<br>
&nbsp;orte/mca/snapc/full/snapc_full_local.c          |  40 ++-----
<br>
&nbsp;orte/mca/sstore/central/sstore_central_app.c    |  14 ++-
<br>
&nbsp;orte/mca/sstore/central/sstore_central_global.c |  21 +---
<br>
&nbsp;orte/mca/sstore/central/sstore_central_local.c  |  29 ++---
<br>
&nbsp;orte/mca/sstore/stage/sstore_stage_app.c        |  13 ++-
<br>
&nbsp;orte/mca/sstore/stage/sstore_stage_global.c     |  21 +---
<br>
&nbsp;orte/mca/sstore/stage/sstore_stage_local.c      |  33 +++---
<br>
&nbsp;orte/tools/orte-checkpoint/orte-checkpoint.c    |  20 +---
<br>
&nbsp;orte/tools/orte-migrate/orte-migrate.c          |  20 +---
<br>
&nbsp;16 files changed, 186 insertions(+), 382 deletions(-)
<br>
<p><pre>
-- 
1.8.4.2
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13497.php">Adrian Reber: "[OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13495.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13497.php">Adrian Reber: "[OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13497.php">Adrian Reber: "[OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13498.php">Adrian Reber: "[OMPI devel] [PATCH v3 2/2] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13531.php">Adrian Reber: "Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
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
