<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 11:27:24 2014" -->
<!-- isoreceived="20140801152724" -->
<!-- sent="Fri, 1 Aug 2014 11:27:21 -0400" -->
<!-- isosent="20140801152721" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util" -->
<!-- id="CAMJJpkXgMiEB9wR9Sc-JUaqE_7mL6VYv0p+GwXJb1H5JFG2EFQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140801144412.3B39D15F8A1_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 11:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15457.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Previous message:</strong> <a href="15455.php">Pritchard Jr., Howard: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15457.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Reply:</strong> <a href="15457.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit brings two things. One if the renaming suggested by Gilles. The
<br>
second one is forcing the ORTE process down on the OPAL. This doesn't fit
<br>
the current design of the BTL move. The current design assumes that the
<br>
local OPAL process is part of the local OMPI process.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: If it doesn't break lose everywhere is because the OMPI layer reset
<br>
it's own process after the RTE (which explain why Ralph notice that his
<br>
proc has been OBJ_DESTRUCT).
<br>
<p><p><p>On Fri, Aug 1, 2014 at 10:44 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2014-08-01 10:44:11 EDT (Fri, 01 Aug 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32398
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32398">https://svn.open-mpi.org/trac/ompi/changeset/32398</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Some more cleanups. Remove direct references to ORTE by changing
</span><br>
<span class="quotelev1">&gt; OMPI_CAST_ORTE_NAME -&gt; OMPI_CAST_RTE_NAME. Ensure that ORTE tools (mpirun,
</span><br>
<span class="quotelev1">&gt; orted, tools) set the OPAL proc structure fields so OPAL knows what is
</span><br>
<span class="quotelev1">&gt; going on and uses the correct print functions (still need to fix the
</span><br>
<span class="quotelev1">&gt; problem for non-MPI apps). Properly return uint32_t from the opal utilities
</span><br>
<span class="quotelev1">&gt; instead of int32_t as that is what the ORTE process name fields contain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks to Gilles for pointing out some of the discrepancies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_smcm.c |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hierarch/coll_hierarch.c        |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/sm/coll_sm_module.c             |     6 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/dpm/orte/dpm_orte.c                  |    10 ++++----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/bfo/pml_bfo_failover.c           |     6 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/rte/orte/rte_orte.h                  |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/proc/proc.c                              |    14 ++++++------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/runtime/ompi_mpi_abort.c                 |     4 +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/runtime/ompi_mpi_init.c                  |     4 +-
</span><br>
<span class="quotelev1">&gt;    trunk/opal/util/proc.c                              |     9 +++----
</span><br>
<span class="quotelev1">&gt;    trunk/opal/util/proc.h                              |     4 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/base/ess_base_std_orted.c        |     9 ++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/base/ess_base_std_tool.c         |     9 ++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/hnp/ess_hnp_module.c             |     8 +++++++
</span><br>
<span class="quotelev1">&gt;    trunk/orte/runtime/orte_init.c                      |    42
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/proc_info.c                         |     6 +++++
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/proc_info.h                         |     4 ++
</span><br>
<span class="quotelev1">&gt;    17 files changed, 108 insertions(+), 33 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (21547 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         svn diff -r 32397:32398 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15457.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Previous message:</strong> <a href="15455.php">Pritchard Jr., Howard: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15457.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Reply:</strong> <a href="15457.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
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
