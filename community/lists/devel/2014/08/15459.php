<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 12:32:22 2014" -->
<!-- isoreceived="20140801163222" -->
<!-- sent="Fri, 1 Aug 2014 09:32:14 -0700" -->
<!-- isosent="20140801163214" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util" -->
<!-- id="B17A67AA-093B-4036-A630-3DCF7D52273C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVA7Kc03+650Jgv9ZYeHom2FF9QVDWVzneDO2an0fUZYg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 12:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15460.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32401 - trunk/opal/util"</a>
<li><strong>Previous message:</strong> <a href="15458.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>In reply to:</strong> <a href="15458.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15461.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Reply:</strong> <a href="15461.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the problem - the issue is that assert on the convertor. MPI apps are setting that convertor, but not non-MPI apps, and so the field is NULL. Can we remove that assert?
<br>
<p><p>On Aug 1, 2014, at 9:30 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I missed the fact that the app doesn't force it. But if this is indeed the case then it is extremely weird that you are seing someone else releasing your proc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding the destruction of the proc, the OPAL layer only does in a single place, when the local proc is set (opal_proc_local_set). Moreover, it does call OBJ_RETAIN when it does this, so the proc should not vanish without you having control over it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked at the code and noticed that it only crash in apps, the place where the ORTE proc is not provided to the OPAL layer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 1, 2014 at 12:12 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2014, at 8:27 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This commit brings two things. One if the renaming suggested by Gilles. The second one is forcing the ORTE process down on the OPAL. This doesn't fit the current design of the BTL move. The current design assumes that the local OPAL process is part of the local OMPI process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your statement isn't accurate - this commit sets the opal_proc_t for all *non-MPI* processes. As the comment in ess_base_std_app.c notes, and the commit message states, ORTE sets and controls the opal_proc_local structure for all ORTE tools and non-MPI procs as (shockingly) they don't call MPI_Init, and hence don't go thru ompi_proc_init, and were therefore leaving the opal_proc_local structure set to the default &quot;nothing&quot; state. This caused all the OPAL layer functions that access it to think nothing had been setup yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My destruct issue is caused by the OPAL layer destructing the object, which seems odd to me but &lt;shrug&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: If it doesn't break lose everywhere is because the OMPI layer reset it's own process after the RTE (which explain why Ralph notice that his proc has been OBJ_DESTRUCT).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Aug 1, 2014 at 10:44 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-08-01 10:44:11 EDT (Fri, 01 Aug 2014)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 32398
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32398">https://svn.open-mpi.org/trac/ompi/changeset/32398</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Some more cleanups. Remove direct references to ORTE by changing OMPI_CAST_ORTE_NAME -&gt; OMPI_CAST_RTE_NAME. Ensure that ORTE tools (mpirun, orted, tools) set the OPAL proc structure fields so OPAL knows what is going on and uses the correct print functions (still need to fix the problem for non-MPI apps). Properly return uint32_t from the opal utilities instead of int32_t as that is what the ORTE process name fields contain.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks to Gilles for pointing out some of the discrepancies.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_smcm.c |     2
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/coll/hierarch/coll_hierarch.c        |     2
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/coll/sm/coll_sm_module.c             |     6 ++--
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/dpm/orte/dpm_orte.c                  |    10 ++++----
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/bfo/pml_bfo_failover.c           |     6 ++--
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/rte/orte/rte_orte.h                  |     2
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/proc/proc.c                              |    14 ++++++------
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/runtime/ompi_mpi_abort.c                 |     4 +-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/runtime/ompi_mpi_init.c                  |     4 +-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/opal/util/proc.c                              |     9 +++----
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/opal/util/proc.h                              |     4 +-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/ess/base/ess_base_std_orted.c        |     9 ++++++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/ess/base/ess_base_std_tool.c         |     9 ++++++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/ess/hnp/ess_hnp_module.c             |     8 +++++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/runtime/orte_init.c                      |    42 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/util/proc_info.c                         |     6 +++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/util/proc_info.h                         |     4 ++
</span><br>
<span class="quotelev2">&gt;&gt;    17 files changed, 108 insertions(+), 33 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Diff not shown due to size (21547 bytes).
</span><br>
<span class="quotelev2">&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         svn diff -r 32397:32398 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15456.php">http://www.open-mpi.org/community/lists/devel/2014/08/15456.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15457.php">http://www.open-mpi.org/community/lists/devel/2014/08/15457.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15458.php">http://www.open-mpi.org/community/lists/devel/2014/08/15458.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15459/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15460.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32401 - trunk/opal/util"</a>
<li><strong>Previous message:</strong> <a href="15458.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>In reply to:</strong> <a href="15458.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15461.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Reply:</strong> <a href="15461.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
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
