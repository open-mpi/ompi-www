<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 19:15:57 2008" -->
<!-- isoreceived="20080409231557" -->
<!-- sent="Wed, 09 Apr 2008 17:15:25 -0600" -->
<!-- isosent="20080409231525" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115" -->
<!-- id="C422AA2D.4CCA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2309A662-1EE3-4BF0-9A84-42D7CB8EDA00_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 19:15:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Previous message:</strong> <a href="3693.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>In reply to:</strong> <a href="3693.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Reply:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Groan...yes, will look at it this evening and get it fixed as quickly as I
<br>
can.
<br>
<p>Sorry...like I said, unity is getting harder and harder to keep alive. :-/
<br>
<p>Ralph
<br>
<p><p>On 4/9/08 5:01 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that the 'unity' component of the routed framework is broken
</span><br>
<span class="quotelev1">&gt; as a result of this commit. :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any chance you can take a look at this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 9, 2008, at 6:10 PM, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-04-09 18:10:53 EDT (Wed, 09 Apr 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 18115
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18115">https://svn.open-mpi.org/trac/ompi/changeset/18115</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fully implement the inbound binomial allgather for daemon-based
</span><br>
<span class="quotelev2">&gt;&gt; collectives. Supports both modex and barrier operations.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Comm_spawn still uses the rank=0 method - shifting that algo to the
</span><br>
<span class="quotelev2">&gt;&gt; daemons is under study.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Removed:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_barrier.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/exp/
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1.c                             |     1
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/ess/hnp/ess_hnp_module.c                      |     2
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/base/Makefile.am                      |     1
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/base/base.h                           |     3
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_allgather.c         |
</span><br>
<span class="quotelev2">&gt;&gt; 253 -----------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/basic/grpcomm_basic_component.c       |     4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c          |
</span><br>
<span class="quotelev2">&gt;&gt; 832 ++++++++++++++++++++++++++++++++++-----
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/cnos/grpcomm_cnos_module.c            |     8
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/grpcomm.h                             |
</span><br>
<span class="quotelev2">&gt;&gt; 27 +
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/grpcomm_types.h                       |     8
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/odls/base/odls_base_close.c                   |     1
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c             |
</span><br>
<span class="quotelev2">&gt;&gt; 131 ++++-
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/odls/base/odls_base_open.c                    |
</span><br>
<span class="quotelev2">&gt;&gt; 24 +
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/odls/base/odls_private.h                      |    16
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c            |     7
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/rmaps/base/rmaps_base_map_job.c               |     1
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/rmaps/base/rmaps_base_open.c                  |     4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c           |
</span><br>
<span class="quotelev2">&gt;&gt; 186 +-------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/rmaps/base/rmaps_private.h                    |     2
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c             |     2
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/rmaps/rmaps_types.h                           |
</span><br>
<span class="quotelev2">&gt;&gt; 28 +
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/rmaps/round_robin/rmaps_rr.c                  |     8
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/rmaps/seq/rmaps_seq.c                         |     2
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/rml/rml_types.h                               |    36
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/orted/orted_comm.c                                |
</span><br>
<span class="quotelev2">&gt;&gt; 43 +-
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c      |     2
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c   |     4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/runtime/data_type_support/orte_dt_print_fns.c     |     4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c |     4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/runtime/orte_globals.c                            |     3
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/runtime/orte_globals.h                            |     1
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/runtime/orte_globals_class_instances.h            |     2
</span><br>
<span class="quotelev2">&gt;&gt;   32 files changed, 1019 insertions(+), 631 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Diff not shown due to size (106446 bytes).
</span><br>
<span class="quotelev2">&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; svn diff -r 18114:18115 --no-diff-deleted
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Previous message:</strong> <a href="3693.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>In reply to:</strong> <a href="3693.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Reply:</strong> <a href="3695.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
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
