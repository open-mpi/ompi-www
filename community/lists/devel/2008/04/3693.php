<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 19:02:01 2008" -->
<!-- isoreceived="20080409230201" -->
<!-- sent="Wed, 9 Apr 2008 19:01:46 -0400" -->
<!-- isosent="20080409230146" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115" -->
<!-- id="2309A662-1EE3-4BF0-9A84-42D7CB8EDA00_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200804092210.m39MArlI012187_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 19:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Previous message:</strong> <a href="3692.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Reply:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>It seems that the 'unity' component of the routed framework is broken  
<br>
as a result of this commit. :(
<br>
<p>Any chance you can take a look at this?
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Apr 9, 2008, at 6:10 PM, rhc_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2008-04-09 18:10:53 EDT (Wed, 09 Apr 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 18115
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18115">https://svn.open-mpi.org/trac/ompi/changeset/18115</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fully implement the inbound binomial allgather for daemon-based  
</span><br>
<span class="quotelev1">&gt; collectives. Supports both modex and barrier operations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comm_spawn still uses the rank=0 method - shifting that algo to the  
</span><br>
<span class="quotelev1">&gt; daemons is under study.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_barrier.c
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/exp/
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1.c                             |     1
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/hnp/ess_hnp_module.c                      |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/base/Makefile.am                      |     1
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/base/base.h                           |     3
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_allgather.c         |    
</span><br>
<span class="quotelev1">&gt; 253 -----------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/basic/grpcomm_basic_component.c       |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c          |    
</span><br>
<span class="quotelev1">&gt; 832 ++++++++++++++++++++++++++++++++++-----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/cnos/grpcomm_cnos_module.c            |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/grpcomm.h                             |     
</span><br>
<span class="quotelev1">&gt; 27 +
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/grpcomm_types.h                       |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_close.c                   |     1
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c             |    
</span><br>
<span class="quotelev1">&gt; 131 ++++-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_open.c                    |     
</span><br>
<span class="quotelev1">&gt; 24 +
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_private.h                      |    16
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c            |     7
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/base/rmaps_base_map_job.c               |     1
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/base/rmaps_base_open.c                  |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c           |    
</span><br>
<span class="quotelev1">&gt; 186 +-------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/base/rmaps_private.h                    |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c             |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/rmaps_types.h                           |     
</span><br>
<span class="quotelev1">&gt; 28 +
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/round_robin/rmaps_rr.c                  |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/seq/rmaps_seq.c                         |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/rml_types.h                               |    36
</span><br>
<span class="quotelev1">&gt;   trunk/orte/orted/orted_comm.c                                |     
</span><br>
<span class="quotelev1">&gt; 43 +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c      |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c   |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/data_type_support/orte_dt_print_fns.c     |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_globals.c                            |     3
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_globals.h                            |     1
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_globals_class_instances.h            |     2
</span><br>
<span class="quotelev1">&gt;   32 files changed, 1019 insertions(+), 631 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (106446 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 18114:18115 --no-diff-deleted
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Previous message:</strong> <a href="3692.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
<li><strong>Reply:</strong> <a href="3694.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18115"</a>
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
