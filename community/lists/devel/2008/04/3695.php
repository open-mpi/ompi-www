<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 22:51:30 2008" -->
<!-- isoreceived="20080410025130" -->
<!-- sent="Wed, 09 Apr 2008 20:51:00 -0600" -->
<!-- isosent="20080410025100" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115" -->
<!-- id="C422DCB4.4CD3%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C422AA2D.4CCA%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-04-09 22:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3696.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Previous message:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>In reply to:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3696.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Reply:</strong> <a href="3696.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, the irony here is truly humorous. This took several hours to chase
<br>
down.
<br>
<p>As you may recall, we had an earlier problem with the unity routed module
<br>
where I gave you a couple of options for repairing it. Well, it turned out
<br>
that the latest changes obviated the need for that hack...and so the hack
<br>
caused the system to fail.
<br>
<p>So, having now removed the prior hack required to keep the module alive, you
<br>
should find it happy again!
<br>
<p>BTW: it isn't that the unity module is such a pain in itself. The problem
<br>
lies in our efforts to shift data movement to the daemon level for
<br>
scalability, versus the inherent &quot;everything happens directly between the
<br>
apps&quot; approach of the unity module. As we move more and more things to the
<br>
daemon level, we are achieving the scalability we want - it just makes it
<br>
harder to find a way to blend the conflicting approach in unity so it can
<br>
keep running.
<br>
<p>I believe we have now reached a point, though, where it may now be easier to
<br>
keep that module alive. Everything we need to shift to the daemons has now
<br>
been shifted, so I don't believe unity is going to present as much of a
<br>
problem going forward.
<br>
<p>I still think it would be good for you to get C/R to work with non-unity
<br>
routed modules for scalability reasons - unity is still inherently
<br>
non-scalable. But hopefully it won't be as much of a roller-coaster for you
<br>
as we go forward.
<br>
<p>Thanks for the patience
<br>
Ralph
<br>
<p><p>On 4/9/08 5:15 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Groan...yes, will look at it this evening and get it fixed as quickly as I
</span><br>
<span class="quotelev1">&gt; can.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry...like I said, unity is getting harder and harder to keep alive. :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/9/08 5:01 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the 'unity' component of the routed framework is broken
</span><br>
<span class="quotelev2">&gt;&gt; as a result of this commit. :(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any chance you can take a look at this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 9, 2008, at 6:10 PM, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2008-04-09 18:10:53 EDT (Wed, 09 Apr 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 18115
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18115">https://svn.open-mpi.org/trac/ompi/changeset/18115</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fully implement the inbound binomial allgather for daemon-based
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collectives. Supports both modex and barrier operations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comm_spawn still uses the rank=0 method - shifting that algo to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemons is under study.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Removed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_barrier.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/exp/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1.c                             |     1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/ess/hnp/ess_hnp_module.c                      |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/base/Makefile.am                      |     1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/base/base.h                           |     3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_allgather.c         |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 253 -----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/basic/grpcomm_basic_component.c       |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c          |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 832 ++++++++++++++++++++++++++++++++++-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/cnos/grpcomm_cnos_module.c            |     8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/grpcomm.h                             |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 27 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/grpcomm/grpcomm_types.h                       |     8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/odls/base/odls_base_close.c                   |     1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c             |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 131 ++++-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/odls/base/odls_base_open.c                    |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/odls/base/odls_private.h                      |    16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c            |     7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rmaps/base/rmaps_base_map_job.c               |     1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rmaps/base/rmaps_base_open.c                  |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c           |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 186 +-------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rmaps/base/rmaps_private.h                    |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c             |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rmaps/rmaps_types.h                           |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 28 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rmaps/round_robin/rmaps_rr.c                  |     8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rmaps/seq/rmaps_seq.c                         |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rml/rml_types.h                               |    36
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/orted/orted_comm.c                                |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 43 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c      |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c   |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/runtime/data_type_support/orte_dt_print_fns.c     |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/runtime/orte_globals.c                            |     3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/runtime/orte_globals.h                            |     1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/runtime/orte_globals_class_instances.h            |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   32 files changed, 1019 insertions(+), 631 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diff not shown due to size (106446 bytes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn diff -r 18114:18115 --no-diff-deleted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3696.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Previous message:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>In reply to:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3696.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Reply:</strong> <a href="3696.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
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
