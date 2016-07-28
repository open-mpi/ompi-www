<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 16:25:29 2009" -->
<!-- isoreceived="20090305212529" -->
<!-- sent="Thu, 5 Mar 2009 14:25:18 -0700" -->
<!-- isosent="20090305212518" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740" -->
<!-- id="9DD3B4C0-0004-4A81-8D82-211CCF07792D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200903052114.n25LEI2x023346_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 16:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5589.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<li><strong>Previous message:</strong> <a href="5587.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5590.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
<li><strong>Reply:</strong> <a href="5590.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is what we expressly said NOT to do in Louisville
<br>
<p>Please remit this
<br>
<p>Ralph
<br>
<p><p>On Mar 5, 2009, at 2:14 PM, rusraink_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2009-03-05 16:14:18 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 20740
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20740">https://svn.open-mpi.org/trac/ompi/changeset/20740</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; - Second patch, as discussed in Louisville.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Replace short macros in orte/util/name_fns.h
</span><br>
<span class="quotelev1">&gt;   to the actual fct. call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Compiles on linux/x86-64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/bml/r2/bml_r2.c                             |     4
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/base/btl_base_error.c                   |     2
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/base/btl_base_error.h                   |     8
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/gm/btl_gm_component.c                   |     2
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/gm/btl_gm_proc.c                        |     6
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/mx/btl_mx_proc.c                        |     4
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/ofud/btl_ofud_proc.c                    |     4
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_proc.c                |     2
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/pcie/btl_pcie_proc.c                    |     2
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c                  |     2
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/udapl/btl_udapl_proc.c                  |     4
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c                 |   196  
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++--------------------
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/orte/dpm_orte.c                         |    46  
</span><br>
<span class="quotelev1">&gt; ++++----
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mpool/base/mpool_base_lookup.c              |     2
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mpool/base/mpool_base_tree.c                |     4
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mpool/rdma/mpool_rdma_module.c              |     2
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/base/pml_base_select.c                  |     8
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pubsub/orte/pubsub_orte.c                   |    12  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/tools/ompi-server/ompi-server.c                 |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/base/errmgr_base_fns.c               |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/default/errmgr_default.c             |    16  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/alps/ess_alps_module.c                  |    36  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/ess_base_std_app.c                 |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/ess_base_std_orted.c               |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/bproc/ess_bproc_module.c                |    28  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/env/ess_env_module.c                    |    38  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/hnp/ess_hnp_module.c                    |    42  
</span><br>
<span class="quotelev1">&gt; ++++----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/lsf/ess_lsf_module.c                    |    34  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/singleton/ess_singleton_module.c        |    34  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/slave/ess_slave_module.c                |     6
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/slurm/ess_slurm_module.c                |    40  
</span><br>
<span class="quotelev1">&gt; ++++----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/slurmd/ess_slurmd_module.c              |    42  
</span><br>
<span class="quotelev1">&gt; ++++----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/filem/base/filem_base_receive.c             |    14  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/filem/rsh/filem_rsh_module.c                |    52  
</span><br>
<span class="quotelev1">&gt; +++++-----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c            |    46  
</span><br>
<span class="quotelev1">&gt; ++++----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_allgather.c       |    22  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c            |    32  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_modex.c           |    78  
</span><br>
<span class="quotelev1">&gt; +++++++-------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c        |    76  
</span><br>
<span class="quotelev1">&gt; +++++++-------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c          |    36  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/base/base.h                             |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/base/iof_base_open.c                    |    10  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/base/iof_base_output.c                  |    20  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/hnp/iof_hnp.c                           |    18  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/hnp/iof_hnp_component.c                 |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/hnp/iof_hnp_read.c                      |    20  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/hnp/iof_hnp_receive.c                   |    20  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/orted/iof_orted.c                       |    18  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/orted/iof_orted_read.c                  |    10  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/orted/iof_orted_receive.c               |    14  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/tool/iof_tool.c                         |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/tool/iof_tool_receive.c                 |    12  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/notifier/syslog/notifier_syslog_module.c    |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c           |   148  
</span><br>
<span class="quotelev1">&gt; +++++++++++++++---------------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_state.c                 |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/bproc/odls_bproc.c                     |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/default/odls_default_module.c          |    10  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/process/odls_process_module.c          |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/tcp/oob_tcp.c                           |    46  
</span><br>
<span class="quotelev1">&gt; ++++----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/tcp/oob_tcp_msg.c                       |    26  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/tcp/oob_tcp_peer.c                      |   102  
</span><br>
<span class="quotelev1">&gt; ++++++++++----------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/tcp/oob_tcp_ping.c                      |    24  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/tcp/oob_tcp_send.c                      |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/alps/plm_alps_module.c                  |     6
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_heartbeat.c               |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c          |   104  
</span><br>
<span class="quotelev1">&gt; ++++++++++----------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_orted_cmds.c              |    26  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_proxy.c                   |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_receive.c                 |    24  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_rsh_support.c             |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/ccp/plm_ccp_module.c                    |    30  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/lsf/plm_lsf_module.c                    |    16  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/process/plm_process_module.c            |    34  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/rsh/plm_rsh_component.c                 |     6
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/rsh/plm_rsh_module.c                    |    64  
</span><br>
<span class="quotelev1">&gt; ++++++------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/slurm/plm_slurm_component.c             |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/slurm/plm_slurm_module.c                |    32  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/slurmd/plm_slurmd_component.c           |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/slurmd/plm_slurmd_module.c              |    32  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/submit/pls_submit_module.c              |    14  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/tm/plm_tm_module.c                      |    32  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/tmd/plm_tmd_module.c                    |    44  
</span><br>
<span class="quotelev1">&gt; ++++----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ras/base/ras_base_allocate.c                |    14  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ras/base/ras_base_node.c                    |     6
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ras/gridengine/ras_gridengine_component.c   |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ras/loadleveler/ras_loadleveler_component.c |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ras/slurm/ras_slurm_component.c             |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ras/slurm/ras_slurm_module.c                |    16  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ras/tm/ras_tm_module.c                      |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c         |    22  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/seq/rmaps_seq.c                       |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/base/rml_base_contact.c                 |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/base/rml_base_receive.c                 |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/ftrm/rml_ftrm_module.c                  |    16  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/oob/rml_oob_component.c                 |    54  
</span><br>
<span class="quotelev1">&gt; +++++-----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/oob/rml_oob_recv.c                      |     6
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/oob/rml_oob_send.c                      |    38  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/base/routed_base_receive.c           |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/binomial/routed_binomial.c           |    70  
</span><br>
<span class="quotelev1">&gt; +++++++-------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/direct/routed_direct.c               |    18  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/linear/routed_linear.c               |    60  
</span><br>
<span class="quotelev1">&gt; ++++++------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/radix/routed_radix.c                 |    68  
</span><br>
<span class="quotelev1">&gt; ++++++------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/slave/routed_slave.c                 |    32  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/snapc/base/snapc_base_fns.c                 |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/snapc/full/snapc_full_app.c                 |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/snapc/full/snapc_full_global.c              |    20  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/snapc/full/snapc_full_local.c               |    20  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/orted/orted_comm.c                              |    78  
</span><br>
<span class="quotelev1">&gt; +++++++-------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/orted/orted_main.c                              |    12  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/data_type_support/orte_dt_print_fns.c   |    24  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_data_server.c                      |    26  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_globals.h                          |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_wait.c                             |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/oob_stress.c                        |    10  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/orte_abort.c                        |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/orte_nodename.c                     |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/orte_ring.c                         |    18  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/orte_spawn.c                        |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/orte_tool.c                         |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/sigusr_trap.c                       |     6
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/spawn_child.c                       |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/spin.c                              |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orte-checkpoint/orte-checkpoint.c         |     6
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orte-ps/orte-ps.c                         |     8
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orte-top/orte-top.c                       |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/debuggers.c                       |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/comm/comm.c                                |    26  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/hostfile/hostfile.c                        |    10  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/name_fns.h                                 |    10  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/nidmap.c                                   |    32  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/regex.c                                    |     6
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/show_help.c                                |     4
</span><br>
<span class="quotelev1">&gt;   132 files changed, 1402 insertions(+), 1412 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (483267 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 20739:20740 --no-diff-deleted
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
<li><strong>Next message:</strong> <a href="5589.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<li><strong>Previous message:</strong> <a href="5587.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5590.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
<li><strong>Reply:</strong> <a href="5590.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
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
