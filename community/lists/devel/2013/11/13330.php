<?
$subject_val = "[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 09:59:25 2013" -->
<!-- isoreceived="20131125145925" -->
<!-- sent="Mon, 25 Nov 2013 15:59:19 +0100" -->
<!-- isosent="20131125145919" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again" -->
<!-- id="1385391563-29584-1-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH 0/4] Trying to get the C/R code to compile again<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 09:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13329.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<li><strong>Reply:</strong> <a href="13334.php">Adrian Reber: "[OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After my first patch has been included I am sending now the rest of the
<br>
series. The first patch (void value not ignored) is pretty simple by
<br>
just ignoring the return value whenever the compiler complained about
<br>
it. The second and third patch (send_*_nb/recv_*_nb) removes all blocking 
<br>
send/send_buffer and recv/recv_buffer functions and replaces it with the
<br>
nb counterparts. This includes changes which pretty sure are not working.
<br>
The last patch (last) includes the remaining changes which did not belong
<br>
in on of the other changes.
<br>
<p>With this patchset applied it is possible to compile again using
<br>
&quot;--with-ft=cr&quot;. This patchset only fixes existing compilation problems;
<br>
the code is not yet expected to work.
<br>
<p>I used &quot;make check&quot; to verify that it does not break existing code.
<br>
<p>Adrian Reber (4):
<br>
&nbsp;&nbsp;Trying to get the C/R code to compile again. (void value not ignored)
<br>
&nbsp;&nbsp;Trying to get the C/R code to compile again. (send_*_nb)
<br>
&nbsp;&nbsp;Trying to get the C/R code to compile again. (recv_*_nb)
<br>
&nbsp;&nbsp;Trying to get the C/R code to compile again. (last)
<br>
<p>&nbsp;ompi/mca/bml/r2/bml_r2_ft.c                     |  10 +-
<br>
&nbsp;ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            |  61 ++-------
<br>
&nbsp;opal/mca/base/mca_base_components_open.c        |   4 +-
<br>
&nbsp;opal/mca/crs/self/crs_self_component.c          |  16 +--
<br>
&nbsp;opal/tools/opal-restart/opal-restart.c          |   2 +-
<br>
&nbsp;orte/mca/errmgr/base/errmgr_base_fns.c          |   6 +-
<br>
&nbsp;orte/mca/errmgr/base/errmgr_base_tool.c         |  22 +--
<br>
&nbsp;orte/mca/ess/env/ess_env_module.c               |   2 +-
<br>
&nbsp;orte/mca/plm/base/plm_base_launch_support.c     |   1 +
<br>
&nbsp;orte/mca/rml/ftrm/rml_ftrm.h                    |  52 +------
<br>
&nbsp;orte/mca/rml/ftrm/rml_ftrm_component.c          |   4 -
<br>
&nbsp;orte/mca/rml/ftrm/rml_ftrm_module.c             | 171 +++---------------------
<br>
&nbsp;orte/mca/rml/oob/rml_oob_component.c            |   9 +-
<br>
&nbsp;orte/mca/snapc/base/snapc_base_frame.c          |   4 +-
<br>
&nbsp;orte/mca/snapc/full/snapc_full_app.c            |  46 +++----
<br>
&nbsp;orte/mca/snapc/full/snapc_full_component.c      |   7 +-
<br>
&nbsp;orte/mca/snapc/full/snapc_full_global.c         |  85 ++++--------
<br>
&nbsp;orte/mca/snapc/full/snapc_full_local.c          |  72 +++-------
<br>
&nbsp;orte/mca/sstore/central/sstore_central_app.c    |  15 +--
<br>
&nbsp;orte/mca/sstore/central/sstore_central_global.c |  32 +----
<br>
&nbsp;orte/mca/sstore/central/sstore_central_local.c  |  36 ++---
<br>
&nbsp;orte/mca/sstore/stage/sstore_stage_app.c        |  14 +-
<br>
&nbsp;orte/mca/sstore/stage/sstore_stage_component.c  |   5 +
<br>
&nbsp;orte/mca/sstore/stage/sstore_stage_global.c     |  32 +----
<br>
&nbsp;orte/mca/sstore/stage/sstore_stage_local.c      |  39 ++----
<br>
&nbsp;orte/tools/orte-checkpoint/orte-checkpoint.c    |  32 +----
<br>
&nbsp;orte/tools/orte-migrate/orte-migrate.c          |  32 +----
<br>
&nbsp;27 files changed, 195 insertions(+), 616 deletions(-)
<br>
<p><pre>
-- 
1.8.3.1
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13329.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<li><strong>Reply:</strong> <a href="13334.php">Adrian Reber: "[OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
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
