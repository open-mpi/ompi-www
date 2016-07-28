<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 16:07:10 2009" -->
<!-- isoreceived="20090305210710" -->
<!-- sent="Thu, 5 Mar 2009 16:06:53 -0500" -->
<!-- isosent="20090305210653" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739" -->
<!-- id="82895739-44D3-4D4E-B98E-679AE1673E8C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200903052036.n25Kapv6021132_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 16:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5588.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
<li><strong>Previous message:</strong> <a href="5586.php">Eugene Loh: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5589.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<li><strong>Reply:</strong> <a href="5589.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer --
<br>
<p>Can you please explain this change?  It seems like a very large code  
<br>
change for such a trivial name change.  Why was it necessary to change  
<br>
orte_process_info to orte_proc_info and change all these files?
<br>
<p>It feels like we're getting into &quot;I like this name better than that  
<br>
name&quot; kinds of changes...  :-(
<br>
<p><p>On Mar 5, 2009, at 3:36 PM, &lt;rusraink_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 20739
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20739">https://svn.open-mpi.org/trac/ompi/changeset/20739</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt;  - First of two or three patches, in orte/util/proc_info.h:
</span><br>
<span class="quotelev1">&gt;    Adapt orte_process_info to orte_proc_info, and
</span><br>
<span class="quotelev1">&gt;    change orte_proc_info() to orte_proc_info_init().
</span><br>
<span class="quotelev1">&gt;  - Compiled on linux-x86-64
</span><br>
<span class="quotelev1">&gt;  - Discussed with Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/attribute/ 
</span><br>
<span class="quotelev1">&gt; attribute_predefined.c                                     |     4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/errhandler/ 
</span><br>
<span class="quotelev1">&gt; errhandler_predefined.c                                   |     4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/base/ 
</span><br>
<span class="quotelev1">&gt; btl_base_error.c                                        |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/base/ 
</span><br>
<span class="quotelev1">&gt; btl_base_error.h                                        |    14 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/elan/ 
</span><br>
<span class="quotelev1">&gt; btl_elan.c                                              |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; btl_openib.c                                          |     4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_async.c                                    |     4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c                                |    56 +++++++ 
</span><br>
<span class="quotelev1">&gt; ++++-----------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.c                                 |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_mca.c                                      |     6 +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_xrc.c                                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_base.c                     |     6 +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_ibcm.c                     |    10 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_rdmacm.c                   |    10 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c                     |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sm/ 
</span><br>
<span class="quotelev1">&gt; btl_sm.c                                                  |    10 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sm/ 
</span><br>
<span class="quotelev1">&gt; btl_sm_component.c                                        |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/udapl/ 
</span><br>
<span class="quotelev1">&gt; btl_udapl.c                                            |     6 +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/udapl/ 
</span><br>
<span class="quotelev1">&gt; btl_udapl_component.c                                  |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/udapl/ 
</span><br>
<span class="quotelev1">&gt; btl_udapl_proc.c                                       |     4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/sm/ 
</span><br>
<span class="quotelev1">&gt; coll_sm_module.c                                         |     4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/sm2/ 
</span><br>
<span class="quotelev1">&gt; coll_sm2_module.c                                       |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/sync/ 
</span><br>
<span class="quotelev1">&gt; coll_sync_module.c                                     |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/crcp/bkmrk/ 
</span><br>
<span class="quotelev1">&gt; crcp_bkmrk_pml.c                                      |     4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/dpm/orte/ 
</span><br>
<span class="quotelev1">&gt; dpm_orte.c                                              |     6 +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/mpool/base/ 
</span><br>
<span class="quotelev1">&gt; mpool_base_lookup.c                                   |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/mpool/base/ 
</span><br>
<span class="quotelev1">&gt; mpool_base_tree.c                                     |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/mpool/sm/ 
</span><br>
<span class="quotelev1">&gt; mpool_sm_component.c                                    |     4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/mpool/sm/ 
</span><br>
<span class="quotelev1">&gt; mpool_sm_module.c                                       |     4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/v/mca/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/proc/ 
</span><br>
<span class="quotelev1">&gt; proc.c                                                          |     
</span><br>
<span class="quotelev1">&gt; 22 ++++----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_abort.c                                             |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init.c                                              |     6  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/tools/ompi_info/ 
</span><br>
<span class="quotelev1">&gt; components.cc                                        |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/errmgr/default/ 
</span><br>
<span class="quotelev1">&gt; errmgr_default_component.c                        |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/alps/ 
</span><br>
<span class="quotelev1">&gt; ess_alps_module.c                                       |    12 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/base/ 
</span><br>
<span class="quotelev1">&gt; ess_base_get.c                                          |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/base/ 
</span><br>
<span class="quotelev1">&gt; ess_base_std_app.c                                      |    14 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/base/ 
</span><br>
<span class="quotelev1">&gt; ess_base_std_orted.c                                    |    10 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/base/ 
</span><br>
<span class="quotelev1">&gt; ess_base_std_tool.c                                     |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/bproc/ 
</span><br>
<span class="quotelev1">&gt; ess_bproc_module.c                                     |    16 +++---
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/cnos/ 
</span><br>
<span class="quotelev1">&gt; ess_cnos_module.c                                       |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/env/ 
</span><br>
<span class="quotelev1">&gt; ess_env_component.c                                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/env/ 
</span><br>
<span class="quotelev1">&gt; ess_env_module.c                                         |    24 ++++ 
</span><br>
<span class="quotelev1">&gt; +-----
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/hnp/ 
</span><br>
<span class="quotelev1">&gt; ess_hnp_component.c                                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/hnp/ 
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c                                         |    22 +++ 
</span><br>
<span class="quotelev1">&gt; +----
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/lsf/ 
</span><br>
<span class="quotelev1">&gt; ess_lsf_component.c                                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/lsf/ 
</span><br>
<span class="quotelev1">&gt; ess_lsf_module.c                                         |    10 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/portals_utcp/ 
</span><br>
<span class="quotelev1">&gt; ess_portals_utcp_module.c                       |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/singleton/ 
</span><br>
<span class="quotelev1">&gt; ess_singleton_component.c                          |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/singleton/ 
</span><br>
<span class="quotelev1">&gt; ess_singleton_module.c                             |    14 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/slave/ 
</span><br>
<span class="quotelev1">&gt; ess_slave_module.c                                     |    18 +++---
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/slurm/ 
</span><br>
<span class="quotelev1">&gt; ess_slurm_component.c                                  |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/slurm/ 
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c                                     |    20 +++ 
</span><br>
<span class="quotelev1">&gt; +----
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/slurmd/ 
</span><br>
<span class="quotelev1">&gt; ess_slurmd_component.c                                |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/slurmd/ 
</span><br>
<span class="quotelev1">&gt; ess_slurmd_module.c                                   |    12 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ess/tool/ 
</span><br>
<span class="quotelev1">&gt; ess_tool_component.c                                    |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/filem/base/ 
</span><br>
<span class="quotelev1">&gt; filem_base_fns.c                                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/filem/base/ 
</span><br>
<span class="quotelev1">&gt; filem_base_receive.c                                  |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/filem/rsh/ 
</span><br>
<span class="quotelev1">&gt; filem_rsh_module.c                                     |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/grpcomm/bad/ 
</span><br>
<span class="quotelev1">&gt; grpcomm_bad_module.c                                 |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/grpcomm/base/ 
</span><br>
<span class="quotelev1">&gt; grpcomm_base_modex.c                                |     6 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/grpcomm/basic/ 
</span><br>
<span class="quotelev1">&gt; grpcomm_basic_module.c                             |    18 +++---
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/grpcomm/hier/ 
</span><br>
<span class="quotelev1">&gt; grpcomm_hier_module.c                               |     6 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/iof/base/ 
</span><br>
<span class="quotelev1">&gt; iof_base_close.c                                        |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/iof/base/ 
</span><br>
<span class="quotelev1">&gt; iof_base_open.c                                         |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/iof/hnp/ 
</span><br>
<span class="quotelev1">&gt; iof_hnp_component.c                                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/iof/orted/ 
</span><br>
<span class="quotelev1">&gt; iof_orted_component.c                                  |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/iof/tool/ 
</span><br>
<span class="quotelev1">&gt; iof_tool_component.c                                    |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/notifier/syslog/ 
</span><br>
<span class="quotelev1">&gt; notifier_syslog_module.c                         |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/odls/base/ 
</span><br>
<span class="quotelev1">&gt; odls_base_default_fns.c                                |    30 +++++ 
</span><br>
<span class="quotelev1">&gt; +------
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/odls/base/ 
</span><br>
<span class="quotelev1">&gt; odls_base_state.c                                      |     6 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/odls/bproc/ 
</span><br>
<span class="quotelev1">&gt; odls_bproc.c                                          |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/oob/tcp/ 
</span><br>
<span class="quotelev1">&gt; oob_tcp.c                                                |    24 ++++ 
</span><br>
<span class="quotelev1">&gt; +-----
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/oob/tcp/ 
</span><br>
<span class="quotelev1">&gt; oob_tcp_msg.c                                            |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/base/ 
</span><br>
<span class="quotelev1">&gt; plm_base_close.c                                        |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/base/ 
</span><br>
<span class="quotelev1">&gt; plm_base_jobid.c                                        |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/base/ 
</span><br>
<span class="quotelev1">&gt; plm_base_launch_support.c                               |    14 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/base/ 
</span><br>
<span class="quotelev1">&gt; plm_base_orted_cmds.c                                   |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/base/ 
</span><br>
<span class="quotelev1">&gt; plm_base_receive.c                                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/base/ 
</span><br>
<span class="quotelev1">&gt; plm_base_rsh_support.c                                  |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/base/ 
</span><br>
<span class="quotelev1">&gt; plm_base_select.c                                       |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/bproc/ 
</span><br>
<span class="quotelev1">&gt; plm_bproc.c                                            |    16 +++---
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/bproc/ 
</span><br>
<span class="quotelev1">&gt; smr_bproc_component.c                                  |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/ccp/ 
</span><br>
<span class="quotelev1">&gt; plm_ccp_component.c                                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/rsh/ 
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c                                         |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/submit/ 
</span><br>
<span class="quotelev1">&gt; pls_submit_module.c                                   |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ras/alps/ 
</span><br>
<span class="quotelev1">&gt; ras_alps_component.c                                    |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ras/base/ 
</span><br>
<span class="quotelev1">&gt; ras_base_allocate.c                                     |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ras/ccp/ 
</span><br>
<span class="quotelev1">&gt; ras_ccp_component.c                                      |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/rml/base/ 
</span><br>
<span class="quotelev1">&gt; rml_base_contact.c                                      |     6 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/routed/base/ 
</span><br>
<span class="quotelev1">&gt; routed_base_receive.c                                |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/routed/base/ 
</span><br>
<span class="quotelev1">&gt; routed_base_register_sync.c                          |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/routed/binomial/ 
</span><br>
<span class="quotelev1">&gt; routed_binomial.c                                |    62 ++++++++++++ 
</span><br>
<span class="quotelev1">&gt; +-------------
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/routed/linear/ 
</span><br>
<span class="quotelev1">&gt; routed_linear.c                                    |    70 ++++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++--------------
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/routed/radix/ 
</span><br>
<span class="quotelev1">&gt; routed_radix.c                                      |    64 +++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++-------------
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/routed/slave/ 
</span><br>
<span class="quotelev1">&gt; routed_slave.c                                      |    12 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/snapc/full/ 
</span><br>
<span class="quotelev1">&gt; snapc_full_global.c                                   |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/orted/ 
</span><br>
<span class="quotelev1">&gt; orted_comm.c                                                   |     
</span><br>
<span class="quotelev1">&gt; 24 +++++-----
</span><br>
<span class="quotelev1">&gt;    trunk/orte/orted/ 
</span><br>
<span class="quotelev1">&gt; orted_main.c                                                   |     
</span><br>
<span class="quotelev1">&gt; 30 ++++++------
</span><br>
<span class="quotelev1">&gt;    trunk/orte/runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_cr.c                                                    |    16  
</span><br>
<span class="quotelev1">&gt; +++---
</span><br>
<span class="quotelev1">&gt;    trunk/orte/runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_globals.c                                               |     6  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_globals.h                                               |     6  
</span><br>
<span class="quotelev1">&gt; +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_init.c                                                  |    10  
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_mca_params.c                                            |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/test/system/ 
</span><br>
<span class="quotelev1">&gt; oob_stress.c                                             |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/test/system/ 
</span><br>
<span class="quotelev1">&gt; orte_abort.c                                             |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/test/system/ 
</span><br>
<span class="quotelev1">&gt; orte_nodename.c                                          |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/test/system/ 
</span><br>
<span class="quotelev1">&gt; orte_ring.c                                              |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/test/system/ 
</span><br>
<span class="quotelev1">&gt; orte_spawn.c                                             |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/tools/orte-clean/orte- 
</span><br>
<span class="quotelev1">&gt; clean.c                                        |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/tools/orterun/ 
</span><br>
<span class="quotelev1">&gt; orterun.c                                              |    14 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/dash_host/ 
</span><br>
<span class="quotelev1">&gt; dash_host.c                                           |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/ 
</span><br>
<span class="quotelev1">&gt; hnp_contact.c                                                    
</span><br>
<span class="quotelev1">&gt; |     4
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/hostfile/ 
</span><br>
<span class="quotelev1">&gt; hostfile.c                                             |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/ 
</span><br>
<span class="quotelev1">&gt; nidmap.c                                                         
</span><br>
<span class="quotelev1">&gt; |     8 +-
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/ 
</span><br>
<span class="quotelev1">&gt; proc_info.c                                                     |     
</span><br>
<span class="quotelev1">&gt; 94 ++++++++++++++++++++--------------------
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/ 
</span><br>
<span class="quotelev1">&gt; proc_info.h                                                     |     
</span><br>
<span class="quotelev1">&gt; 12 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/ 
</span><br>
<span class="quotelev1">&gt; session_dir.c                                                   |     
</span><br>
<span class="quotelev1">&gt; 80 +++++++++++++++++-----------------
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/ 
</span><br>
<span class="quotelev1">&gt; session_dir.h                                                    
</span><br>
<span class="quotelev1">&gt; |     2
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/ 
</span><br>
<span class="quotelev1">&gt; show_help.c                                                      
</span><br>
<span class="quotelev1">&gt; |     4
</span><br>
<span class="quotelev1">&gt;    trunk/test/util/ 
</span><br>
<span class="quotelev1">&gt; orte_session_dir.c                                              |     
</span><br>
<span class="quotelev1">&gt; 66 ++++++++++++++--------------
</span><br>
<span class="quotelev1">&gt;    123 files changed, 642 insertions(+), 642 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/attribute/attribute_predefined.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/attribute/attribute_predefined.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/attribute/attribute_predefined.c 2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -175,8 +175,8 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* check the app_num - if it was set, then define it -  
</span><br>
<span class="quotelev1">&gt; otherwise, don't */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.app_num &gt;= 0) {
</span><br>
<span class="quotelev1">&gt; -        ret = set_f(MPI_APPNUM, orte_process_info.app_num);
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.app_num &gt;= 0) {
</span><br>
<span class="quotelev1">&gt; +        ret = set_f(MPI_APPNUM, orte_proc_info.app_num);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/errhandler/errhandler_predefined.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/errhandler/errhandler_predefined.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/errhandler/errhandler_predefined.c       2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -177,8 +177,8 @@
</span><br>
<span class="quotelev1">&gt;      arg = va_arg(arglist, char*);
</span><br>
<span class="quotelev1">&gt;      va_end(arglist);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    asprintf(&amp;prefix, &quot;[%s:%d]&quot;, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; -             (int) orte_process_info.pid);
</span><br>
<span class="quotelev1">&gt; +    asprintf(&amp;prefix, &quot;[%s:%d]&quot;, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt; +             (int) orte_proc_info.pid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (NULL != error_code) {
</span><br>
<span class="quotelev1">&gt;          err_msg = ompi_mpi_errnum_get_string(*error_code);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/base/btl_base_error.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/base/btl_base_error.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/base/btl_base_error.c    2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -66,7 +66,7 @@
</span><br>
<span class="quotelev1">&gt;          asprintf(&amp;procid, &quot;%s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-base.txt&quot;, &quot;btl:no-nics&quot;,
</span><br>
<span class="quotelev1">&gt; -                       true, procid, transport,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       true, procid, transport,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         nic_name);
</span><br>
<span class="quotelev1">&gt;          free(procid);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/base/btl_base_error.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/base/btl_base_error.h    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/base/btl_base_error.h    2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -37,8 +37,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #define BTL_OUTPUT(args)                                     \
</span><br>
<span class="quotelev1">&gt;  do {                                                         \
</span><br>
<span class="quotelev1">&gt; -    mca_btl_base_out(&quot;[%s]%s[%s:%d:%s] &quot;,         \
</span><br>
<span class="quotelev1">&gt; -            orte_process_info.nodename,                       \
</span><br>
<span class="quotelev1">&gt; +    mca_btl_base_out(&quot;[%s]%s[%s:%d:%s] &quot;,                    \
</span><br>
<span class="quotelev1">&gt; +            orte_proc_info.nodename,                         \
</span><br>
<span class="quotelev1">&gt;              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),       \
</span><br>
<span class="quotelev1">&gt;              __FILE__, __LINE__, __func__);                   \
</span><br>
<span class="quotelev1">&gt;      mca_btl_base_out args;                                   \
</span><br>
<span class="quotelev1">&gt; @@ -48,8 +48,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #define BTL_ERROR(args)                                      \
</span><br>
<span class="quotelev1">&gt;  do {                                                         \
</span><br>
<span class="quotelev1">&gt; -    mca_btl_base_err(&quot;[%s]%s[%s:%d:%s] &quot;,         \
</span><br>
<span class="quotelev1">&gt; -            orte_process_info.nodename,                       \
</span><br>
<span class="quotelev1">&gt; +    mca_btl_base_err(&quot;[%s]%s[%s:%d:%s] &quot;,                    \
</span><br>
<span class="quotelev1">&gt; +            orte_proc_info.nodename,                         \
</span><br>
<span class="quotelev1">&gt;              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),       \
</span><br>
<span class="quotelev1">&gt;              __FILE__, __LINE__, __func__);                   \
</span><br>
<span class="quotelev1">&gt;      mca_btl_base_err args;                                   \
</span><br>
<span class="quotelev1">&gt; @@ -58,10 +58,10 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #define BTL_PEER_ERROR(proc, args)                               \
</span><br>
<span class="quotelev1">&gt;  do {                                                             \
</span><br>
<span class="quotelev1">&gt; -    mca_btl_base_err(&quot;%s[%s:%d:%s] from %s &quot;,         \
</span><br>
<span class="quotelev1">&gt; +    mca_btl_base_err(&quot;%s[%s:%d:%s] from %s &quot;,                    \
</span><br>
<span class="quotelev1">&gt;                       ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),  \
</span><br>
<span class="quotelev1">&gt;                       __FILE__, __LINE__, __func__,               \
</span><br>
<span class="quotelev1">&gt; -                     orte_process_info.nodename);                 \
</span><br>
<span class="quotelev1">&gt; +                     orte_proc_info.nodename);                   \
</span><br>
<span class="quotelev1">&gt;      if(proc &amp;&amp; proc-&gt;proc_hostname) {                            \
</span><br>
<span class="quotelev1">&gt;          mca_btl_base_err(&quot;to: %s &quot;, proc-&gt;proc_hostname);        \
</span><br>
<span class="quotelev1">&gt;      }                                                            \
</span><br>
<span class="quotelev1">&gt; @@ -75,7 +75,7 @@
</span><br>
<span class="quotelev1">&gt;  do {                                                         \
</span><br>
<span class="quotelev1">&gt;     if(mca_btl_base_verbose &gt; 0) {                            \
</span><br>
<span class="quotelev1">&gt;          mca_btl_base_err(&quot;[%s]%s[%s:%d:%s] &quot;,                \
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.nodename,                   \
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.nodename,                     \
</span><br>
<span class="quotelev1">&gt;                  ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),  \
</span><br>
<span class="quotelev1">&gt;                  __FILE__, __LINE__, __func__);               \
</span><br>
<span class="quotelev1">&gt;          mca_btl_base_err args;                               \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/elan/btl_elan.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/elan/btl_elan.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/elan/btl_elan.c  2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -72,7 +72,7 @@
</span><br>
<span class="quotelev1">&gt;      FILE* file;
</span><br>
<span class="quotelev1">&gt;      ELAN_BASE* base;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    filename = opal_os_path( false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.proc_session_dir, &quot;ELAN_ID&quot;, NULL );
</span><br>
<span class="quotelev1">&gt; +    filename = opal_os_path( false,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.proc_session_dir, &quot;ELAN_ID&quot;, NULL );
</span><br>
<span class="quotelev1">&gt;      file = fopen( filename, &quot;w&quot; );
</span><br>
<span class="quotelev1">&gt;      fprintf( file, &quot;%s %d\n&quot;, ompi_proc_local_proc-&gt;proc_hostname,  
</span><br>
<span class="quotelev1">&gt; elan_btl-&gt;elan_position );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.c      2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -123,13 +123,13 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;init-fail-no-mem&quot;,
</span><br>
<span class="quotelev1">&gt; -                       true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         file, line, func, dev, str_limit);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (NULL != str_limit) free(str_limit);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;init-fail-create- 
</span><br>
<span class="quotelev1">&gt; q&quot;,
</span><br>
<span class="quotelev1">&gt; -                       true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         file, line, func, strerror(errno), errno,  
</span><br>
<span class="quotelev1">&gt; dev);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_async.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_async.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_async.c        2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -293,7 +293,7 @@
</span><br>
<span class="quotelev1">&gt;              case IBV_EVENT_SRQ_ERR:
</span><br>
<span class="quotelev1">&gt;              case IBV_EVENT_PORT_ERR:
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of error  
</span><br>
<span class="quotelev1">&gt; event&quot;,
</span><br>
<span class="quotelev1">&gt; -                    true,orte_process_info.nodename,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.pid,
</span><br>
<span class="quotelev1">&gt; +                    true,orte_proc_info.nodename, orte_proc_info.pid,
</span><br>
<span class="quotelev1">&gt;                      event.event_type,  
</span><br>
<span class="quotelev1">&gt; openib_event_to_str(event.event_type),
</span><br>
<span class="quotelev1">&gt;                      xrc_event ? &quot;true&quot; : &quot;false&quot;);
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt; @@ -311,7 +311,7 @@
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt;              default:
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of  
</span><br>
<span class="quotelev1">&gt; unknown event&quot;,
</span><br>
<span class="quotelev1">&gt; -                        true,orte_process_info.nodename,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.pid,
</span><br>
<span class="quotelev1">&gt; +                        true,orte_proc_info.nodename,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.pid,
</span><br>
<span class="quotelev1">&gt;                          event.event_type, xrc_event ? &quot;true&quot; :  
</span><br>
<span class="quotelev1">&gt; &quot;false&quot;);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          ibv_ack_async_event(&amp;event);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c    2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -591,7 +591,7 @@
</span><br>
<span class="quotelev1">&gt;              IB_DEFAULT_GID_PREFIX == subnet_id &amp;&amp;
</span><br>
<span class="quotelev1">&gt;              mca_btl_openib_component.warn_default_gid_prefix) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;default subnet  
</span><br>
<span class="quotelev1">&gt; prefix&quot;,
</span><br>
<span class="quotelev1">&gt; -                true, orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                true, orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      lmc = (1 &lt;&lt; ib_port_attr-&gt;lmc);
</span><br>
<span class="quotelev1">&gt; @@ -949,7 +949,7 @@
</span><br>
<span class="quotelev1">&gt;                  &quot;XRC on device without XRC support&quot;, true,
</span><br>
<span class="quotelev1">&gt;                  mca_btl_openib_component.num_xrc_qps,
</span><br>
<span class="quotelev1">&gt;                  ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -1237,7 +1237,7 @@
</span><br>
<span class="quotelev1">&gt;      if (0 == opal_argv_count(queues)) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;no qps in receive_queues&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev1">&gt;          ret = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -1256,7 +1256,7 @@
</span><br>
<span class="quotelev1">&gt;              num_xrc_qps++;
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;No XRC  
</span><br>
<span class="quotelev1">&gt; support&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                           orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                           orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                             mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev1">&gt;              ret = OMPI_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev1">&gt;              goto error;
</span><br>
<span class="quotelev1">&gt; @@ -1264,7 +1264,7 @@
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                             &quot;invalid qp type in receive_queues&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                           orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                           orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                             mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt;                             queues[qp]);
</span><br>
<span class="quotelev1">&gt;              ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt; @@ -1276,7 +1276,7 @@
</span><br>
<span class="quotelev1">&gt;         and SRQ */
</span><br>
<span class="quotelev1">&gt;      if (num_xrc_qps &gt; 0 &amp;&amp; (num_pp_qps &gt; 0 || num_srq_qps &gt; 0)) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;XRC with PP or  
</span><br>
<span class="quotelev1">&gt; SRQ&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev1">&gt;          ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -1285,7 +1285,7 @@
</span><br>
<span class="quotelev1">&gt;      /* Current XRC implementation can't used with btls_per_lid &gt; 1 */
</span><br>
<span class="quotelev1">&gt;      if (num_xrc_qps &gt; 0 &amp;&amp; mca_btl_openib_component.btls_per_lid &gt;  
</span><br>
<span class="quotelev1">&gt; 1) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;XRC with BTLs  
</span><br>
<span class="quotelev1">&gt; per LID&quot;,
</span><br>
<span class="quotelev1">&gt; -                       true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         mca_btl_openib_component.receive_queues,  
</span><br>
<span class="quotelev1">&gt; num_xrc_qps);
</span><br>
<span class="quotelev1">&gt;          ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -1312,7 +1312,7 @@
</span><br>
<span class="quotelev1">&gt;              if (count &lt; 3 || count &gt; 6) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;invalid pp qp specification&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                               orte_process_info.nodename,  
</span><br>
<span class="quotelev1">&gt; queues[qp]);
</span><br>
<span class="quotelev1">&gt; +                               orte_proc_info.nodename, queues[qp]);
</span><br>
<span class="quotelev1">&gt;                  ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;                  goto error;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; @@ -1343,7 +1343,7 @@
</span><br>
<span class="quotelev1">&gt;              if (count &lt; 3 || count &gt; 5) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;invalid srq specification&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                               orte_process_info.nodename,  
</span><br>
<span class="quotelev1">&gt; queues[qp]);
</span><br>
<span class="quotelev1">&gt; +                               orte_proc_info.nodename, queues[qp]);
</span><br>
<span class="quotelev1">&gt;                  ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;                  goto error;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; @@ -1367,7 +1367,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (rd_num &lt;= rd_low) {
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;rd_num must  
</span><br>
<span class="quotelev1">&gt; be &gt; rd_low&quot;,
</span><br>
<span class="quotelev1">&gt; -                    true, orte_process_info.nodename, queues[qp]);
</span><br>
<span class="quotelev1">&gt; +                    true, orte_proc_info.nodename, queues[qp]);
</span><br>
<span class="quotelev1">&gt;              ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;              goto error;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; @@ -1388,21 +1388,21 @@
</span><br>
<span class="quotelev1">&gt;      if (max_qp_size &lt; max_size_needed) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;biggest qp size is too small&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename, max_qp_size,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename, max_qp_size,
</span><br>
<span class="quotelev1">&gt;                         max_size_needed);
</span><br>
<span class="quotelev1">&gt;          ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      } else if (max_qp_size &gt; max_size_needed) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;biggest qp size is too big&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename, max_qp_size,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename, max_qp_size,
</span><br>
<span class="quotelev1">&gt;                         max_size_needed);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (mca_btl_openib_component.ib_free_list_max &gt; 0 &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          min_freelist_size &gt;  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.ib_free_list_max) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;freelist too  
</span><br>
<span class="quotelev1">&gt; small&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         mca_btl_openib_component.ib_free_list_max,
</span><br>
<span class="quotelev1">&gt;                         min_freelist_size);
</span><br>
<span class="quotelev1">&gt;          ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt; @@ -1487,7 +1487,7 @@
</span><br>
<span class="quotelev1">&gt;          if (mca_btl_openib_component.warn_no_device_params_found) {
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                             &quot;no device params found&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                           orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                           orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                             ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                             device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev1">&gt;                             device-&gt;ib_dev_attr.vendor_part_id);
</span><br>
<span class="quotelev1">&gt; @@ -1593,7 +1593,7 @@
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;          if (NULL == cq) {
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;init-fail- 
</span><br>
<span class="quotelev1">&gt; create-q&quot;,
</span><br>
<span class="quotelev1">&gt; -                           true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                           true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                             __FILE__, __LINE__, &quot;ibv_create_cq&quot;,
</span><br>
<span class="quotelev1">&gt;                             strerror(errno), errno,
</span><br>
<span class="quotelev1">&gt;                             ibv_get_device_name(device-&gt;ib_dev));
</span><br>
<span class="quotelev1">&gt; @@ -1649,7 +1649,7 @@
</span><br>
<span class="quotelev1">&gt;                               
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.receive_queues)) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;conflicting receive_queues&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                               orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                               orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                 ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                                 device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev1">&gt;                                 device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev1">&gt; @@ -1699,7 +1699,7 @@
</span><br>
<span class="quotelev1">&gt;                  &quot;XRC on device without XRC support&quot;, true,
</span><br>
<span class="quotelev1">&gt;                  mca_btl_openib_component.num_xrc_qps,
</span><br>
<span class="quotelev1">&gt;                  ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          ret = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -1823,7 +1823,7 @@
</span><br>
<span class="quotelev1">&gt;      if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;error in device init&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         ibv_get_device_name(device-&gt;ib_dev));
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -2086,7 +2086,7 @@
</span><br>
<span class="quotelev1">&gt;          ((OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_MUNMAP_SUPPORT) &amp;  
</span><br>
<span class="quotelev1">&gt; value)) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;ptmalloc2 with no threads&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          goto no_btls;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; @@ -2204,7 +2204,7 @@
</span><br>
<span class="quotelev1">&gt;              if (mca_btl_openib_component.want_fork_support &gt; 0) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;ibv_fork_init fail&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                               orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                               orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;                  goto no_btls;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; @@ -2313,7 +2313,7 @@
</span><br>
<span class="quotelev1">&gt;      free(dev_sorted);
</span><br>
<span class="quotelev1">&gt;      if (!found) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;no devices right  
</span><br>
<span class="quotelev1">&gt; type&quot;,
</span><br>
<span class="quotelev1">&gt; -                       true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         ((BTL_OPENIB_DT_IB ==  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.device_type) ?
</span><br>
<span class="quotelev1">&gt;                          &quot;InfiniBand&quot; :
</span><br>
<span class="quotelev1">&gt;                          (BTL_OPENIB_DT_IWARP ==  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.device_type) ?
</span><br>
<span class="quotelev1">&gt; @@ -2330,7 +2330,7 @@
</span><br>
<span class="quotelev1">&gt;          mca_btl_openib_component.warn_nonexistent_if) {
</span><br>
<span class="quotelev1">&gt;          char *str =  
</span><br>
<span class="quotelev1">&gt; opal_argv_join(mca_btl_openib_component.if_list, ',');
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;nonexistent port&quot;,
</span><br>
<span class="quotelev1">&gt; -                       true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         ((NULL !=  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.if_include) ?
</span><br>
<span class="quotelev1">&gt;                          &quot;in&quot; : &quot;ex&quot;), str);
</span><br>
<span class="quotelev1">&gt;          free(str);
</span><br>
<span class="quotelev1">&gt; @@ -2338,7 +2338,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if(0 == mca_btl_openib_component.ib_num_btls) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                &quot;no active ports found&quot;, true,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                &quot;no active ports found&quot;, true,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          goto no_btls;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -2385,7 +2385,7 @@
</span><br>
<span class="quotelev1">&gt;              if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;error in device init&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                               orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                               orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                 ibv_get_device_name(device-&gt;ib_dev));
</span><br>
<span class="quotelev1">&gt;                  goto no_btls;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; @@ -2924,24 +2924,24 @@
</span><br>
<span class="quotelev1">&gt;                             BTL_OPENIB_QP_TYPE_PP(qp) ?
</span><br>
<span class="quotelev1">&gt;                             &quot;pp rnr retry exceeded&quot; :
</span><br>
<span class="quotelev1">&gt;                             &quot;srq rnr retry exceeded&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                           orte_process_info.nodename, device_name,
</span><br>
<span class="quotelev1">&gt; +                           orte_proc_info.nodename, device_name,
</span><br>
<span class="quotelev1">&gt;                             peer_hostname);
</span><br>
<span class="quotelev1">&gt;              orte_notifier.help(ORTE_NOTIFIER_INFRA,  
</span><br>
<span class="quotelev1">&gt; ORTE_ERR_COMM_FAILURE,
</span><br>
<span class="quotelev1">&gt;                                     &quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                     BTL_OPENIB_QP_TYPE_PP(qp) ?
</span><br>
<span class="quotelev1">&gt;                                     &quot;pp rnr retry exceeded&quot; :
</span><br>
<span class="quotelev1">&gt;                                     &quot;srq rnr retry exceeded&quot;,
</span><br>
<span class="quotelev1">&gt; -                                   orte_process_info.nodename,  
</span><br>
<span class="quotelev1">&gt; device_name,
</span><br>
<span class="quotelev1">&gt; +                                   orte_proc_info.nodename,  
</span><br>
<span class="quotelev1">&gt; device_name,
</span><br>
<span class="quotelev1">&gt;                                     peer_hostname);
</span><br>
<span class="quotelev1">&gt;          } else if (IBV_WC_RETRY_EXC_ERR == wc-&gt;status) {
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                             &quot;pp retry exceeded&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                           orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                           orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                             device_name, peer_hostname);
</span><br>
<span class="quotelev1">&gt;              orte_notifier.help(ORTE_NOTIFIER_INFRA,  
</span><br>
<span class="quotelev1">&gt; ORTE_ERR_COMM_FAILURE,
</span><br>
<span class="quotelev1">&gt;                                     &quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                     &quot;pp retry exceeded&quot;,
</span><br>
<span class="quotelev1">&gt; -                                   orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                                   orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                     device_name, peer_hostname);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_endpoint.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_endpoint.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_endpoint.c     2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -1087,7 +1087,7 @@
</span><br>
<span class="quotelev1">&gt;      if (NULL == btl || NULL == btl-&gt;error_cb) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;cannot raise btl error&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         __FILE__, __LINE__);
</span><br>
<span class="quotelev1">&gt;          exit(1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_mca.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_mca.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -178,7 +178,7 @@
</span><br>
<span class="quotelev1">&gt;          if (0 != ival) {
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                             &quot;ibv_fork requested but not supported&quot;,  
</span><br>
<span class="quotelev1">&gt; true,
</span><br>
<span class="quotelev1">&gt; -                           orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                           orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;              return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -208,7 +208,7 @@
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;ibv_fork requested but not supported&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      free(str);
</span><br>
<span class="quotelev1">&gt; @@ -458,7 +458,7 @@
</span><br>
<span class="quotelev1">&gt;                    64, &amp;ival, REGINT_GE_ZERO));
</span><br>
<span class="quotelev1">&gt;      if(ival &lt;= 1 || (ival &amp; (ival - 1))) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;wrong buffer  
</span><br>
<span class="quotelev1">&gt; alignment&quot;,
</span><br>
<span class="quotelev1">&gt; -                true, ival, orte_process_info.nodename, 64);
</span><br>
<span class="quotelev1">&gt; +                true, ival, orte_proc_info.nodename, 64);
</span><br>
<span class="quotelev1">&gt;          mca_btl_openib_component.buffer_alignment = 64;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          mca_btl_openib_component.buffer_alignment = (uint32_t) ival;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_xrc.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_xrc.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_xrc.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -42,7 +42,7 @@
</span><br>
<span class="quotelev1">&gt;      dev_name = ibv_get_device_name(device-&gt;ib_dev);
</span><br>
<span class="quotelev1">&gt;      len = asprintf(&amp;xrc_file_name,
</span><br>
<span class="quotelev1">&gt;              &quot;%s&quot;OPAL_PATH_SEP&quot;openib_xrc_domain_%s&quot;,
</span><br>
<span class="quotelev1">&gt; -            orte_process_info.job_session_dir, dev_name);
</span><br>
<span class="quotelev1">&gt; +            orte_proc_info.job_session_dir, dev_name);
</span><br>
<span class="quotelev1">&gt;      if (0 &gt; len) {
</span><br>
<span class="quotelev1">&gt;          BTL_ERROR((&quot;Failed to allocate memomry for XRC file name\n&quot;,
</span><br>
<span class="quotelev1">&gt;                  strerror(errno)));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c  
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_base.c  
</span><br>
<span class="quotelev1">&gt; 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -121,7 +121,7 @@
</span><br>
<span class="quotelev1">&gt;              if (NULL == all[i]) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;cpc name not found&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                               &quot;include&quot;, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                               &quot;include&quot;, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                 &quot;include&quot;, cpc_include, temp[j],
</span><br>
<span class="quotelev1">&gt;                                 all_cpc_names);
</span><br>
<span class="quotelev1">&gt;                  opal_argv_free(temp);
</span><br>
<span class="quotelev1">&gt; @@ -147,7 +147,7 @@
</span><br>
<span class="quotelev1">&gt;              if (NULL == all[i]) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;cpc name not found&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                               &quot;exclude&quot;, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                               &quot;exclude&quot;, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                 &quot;exclude&quot;, cpc_exclude, temp[j],
</span><br>
<span class="quotelev1">&gt;                                 all_cpc_names);
</span><br>
<span class="quotelev1">&gt;                  opal_argv_free(temp);
</span><br>
<span class="quotelev1">&gt; @@ -292,7 +292,7 @@
</span><br>
<span class="quotelev1">&gt;      if (0 == cpc_index) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;no cpcs for port&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                         msg);
</span><br>
<span class="quotelev1">&gt;          free(cpcs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c  
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c  
</span><br>
<span class="quotelev1">&gt; 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -923,7 +923,7 @@
</span><br>
<span class="quotelev1">&gt;      if (init_attr.cap.max_inline_data &lt; req_inline) {
</span><br>
<span class="quotelev1">&gt;          endpoint-&gt;qps[qp].ib_inline_max =  
</span><br>
<span class="quotelev1">&gt; init_attr.cap.max_inline_data;
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                       &quot;inline truncated&quot;,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       &quot;inline truncated&quot;, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         ibv_get_device_name(openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                         req_inline, init_attr.cap.max_inline_data);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt; @@ -2314,7 +2314,7 @@
</span><br>
<span class="quotelev1">&gt;      if (IBV_WC_RESP_TIMEOUT_ERR != event-&gt;param.send_status) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-ibcm.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;unhandled error&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       &quot;request&quot;, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       &quot;request&quot;, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         event-&gt;param.send_status);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          ibcm_request_t *req;
</span><br>
<span class="quotelev1">&gt; @@ -2325,7 +2325,7 @@
</span><br>
<span class="quotelev1">&gt;          if (NULL == req) {
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-mpi-btl-openib-cpc-ibcm.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                             &quot;timeout not found&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                           &quot;request&quot;, orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                           &quot;request&quot;, orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              endpoint = req-&gt;endpoint;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; @@ -2346,7 +2346,7 @@
</span><br>
<span class="quotelev1">&gt;      if (IBV_WC_RESP_TIMEOUT_ERR != event-&gt;param.send_status) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-ibcm.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;unhandled error&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       &quot;reply&quot;, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       &quot;reply&quot;, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         event-&gt;param.send_status);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          ibcm_reply_t *rep;
</span><br>
<span class="quotelev1">&gt; @@ -2357,7 +2357,7 @@
</span><br>
<span class="quotelev1">&gt;          if (NULL == rep) {
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-mpi-btl-openib-cpc-ibcm.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                             &quot;timeout not found&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                           &quot;reply&quot;, orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                           &quot;reply&quot;, orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              endpoint = rep-&gt;endpoint;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c   
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c   
</span><br>
<span class="quotelev1">&gt; 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -465,7 +465,7 @@
</span><br>
<span class="quotelev1">&gt;      if (init_attr.cap.max_inline_data &lt; req_inline) {
</span><br>
<span class="quotelev1">&gt;          endpoint-&gt;qps[qp].ib_inline_max =  
</span><br>
<span class="quotelev1">&gt; init_attr.cap.max_inline_data;
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                       &quot;inline truncated&quot;, true,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       &quot;inline truncated&quot;, true,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         ibv_get_device_name(openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                         req_inline, init_attr.cap.max_inline_data);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_rdmacm.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_rdmacm.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_rdmacm.c       2009-03-05 15:36:44 EST (Thu, 05  
</span><br>
<span class="quotelev1">&gt; Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -426,7 +426,7 @@
</span><br>
<span class="quotelev1">&gt;          endpoint-&gt;qps[qpnum].ib_inline_max =  
</span><br>
<span class="quotelev1">&gt; attr.cap.max_inline_data;
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;inline truncated&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         ibv_get_device_name(contents-&gt;openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                         req_inline, attr.cap.max_inline_data);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt; @@ -722,14 +722,14 @@
</span><br>
<span class="quotelev1">&gt;          msg = stringify(c-&gt;peer_ip_addr);
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-rdmacm.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;could not find matching endpoint&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         c-&gt;device_name,
</span><br>
<span class="quotelev1">&gt;                         c-&gt;peer_tcp_port);
</span><br>
<span class="quotelev1">&gt;          free(msg);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-rdmacm.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;could not find matching endpoint&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         &quot;&lt;unknown&gt;&quot;, &quot;&lt;unknown&gt;&quot;, -1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      free(context);
</span><br>
<span class="quotelev1">&gt; @@ -1421,7 +1421,7 @@
</span><br>
<span class="quotelev1">&gt;      if (RDMA_CM_EVENT_DEVICE_REMOVAL == event-&gt;event) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-rdmacm.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;rdma cm device removal&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         ibv_get_device_name(event-&gt;id-&gt;verbs- 
</span><br>
<span class="quotelev2">&gt; &gt;device));
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          const char *device = &quot;Unknown&quot;;
</span><br>
<span class="quotelev1">&gt; @@ -1432,7 +1432,7 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-rdmacm.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                         &quot;rdma cm event error&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         device,
</span><br>
<span class="quotelev1">&gt;                         rdma_event_str(event-&gt;event),
</span><br>
<span class="quotelev1">&gt;                         context-&gt;endpoint-&gt;endpoint_proc-&gt;proc_ompi- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_hostname);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c  
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c  
</span><br>
<span class="quotelev1">&gt; 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -411,7 +411,7 @@
</span><br>
<span class="quotelev1">&gt;      if (qp_init_attr.cap.max_inline_data &lt; req_inline) {
</span><br>
<span class="quotelev1">&gt;          endpoint-&gt;qps[0].ib_inline_max =  
</span><br>
<span class="quotelev1">&gt; qp_init_attr.cap.max_inline_data;
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-btl-openib-cpc-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                       &quot;inline truncated&quot;,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       &quot;inline truncated&quot;, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         ibv_get_device_name(openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev),
</span><br>
<span class="quotelev1">&gt;                         req_inline, qp_init_attr.cap.max_inline_data);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/sm/btl_sm.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/sm/btl_sm.c      2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -233,8 +233,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* set file name */
</span><br>
<span class="quotelev1">&gt;      if(asprintf(&amp;sm_ctl_file,  
</span><br>
<span class="quotelev1">&gt; &quot;%s&quot;OPAL_PATH_SEP&quot;shared_mem_btl_module.%s&quot;,
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.nodename) &lt; 0)
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.nodename) &lt; 0)
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Pass in a data segment alignment of 0 to get no data
</span><br>
<span class="quotelev1">&gt; @@ -371,7 +371,7 @@
</span><br>
<span class="quotelev1">&gt;      OBJ_CONSTRUCT(&amp;ep-&gt;pending_sends, opal_list_t);
</span><br>
<span class="quotelev1">&gt;  #if OMPI_ENABLE_PROGRESS_THREADS == 1
</span><br>
<span class="quotelev1">&gt;      sprintf(path, &quot;%s&quot;OPAL_PATH_SEP&quot;sm_fifo.%lu&quot;,
</span><br>
<span class="quotelev1">&gt; -            orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +            orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt;              (unsigned long)proc-&gt;proc_name.vpid);
</span><br>
<span class="quotelev1">&gt;      ep-&gt;fifo_fd = open(path, O_WRONLY);
</span><br>
<span class="quotelev1">&gt;      if(ep-&gt;fifo_fd &lt; 0) {
</span><br>
<span class="quotelev1">&gt; @@ -848,7 +848,7 @@
</span><br>
<span class="quotelev1">&gt;              opal_crs_base_metadata_write_token(NULL,  
</span><br>
<span class="quotelev1">&gt; CRS_METADATA_TOUCH, mca_btl_sm_component.mmap_file-&gt;map_path);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              /* Record the job session directory */
</span><br>
<span class="quotelev1">&gt; -            opal_crs_base_metadata_write_token(NULL,  
</span><br>
<span class="quotelev1">&gt; CRS_METADATA_MKDIR, orte_process_info.job_session_dir);
</span><br>
<span class="quotelev1">&gt; +            opal_crs_base_metadata_write_token(NULL,  
</span><br>
<span class="quotelev1">&gt; CRS_METADATA_MKDIR, orte_proc_info.job_session_dir);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      else if(OPAL_CRS_CONTINUE == state) {
</span><br>
<span class="quotelev1">&gt; @@ -868,7 +868,7 @@
</span><br>
<span class="quotelev1">&gt;              OPAL_CRS_RESTART_PRE == state) {
</span><br>
<span class="quotelev1">&gt;          if( NULL != mca_btl_sm_component.mmap_file ) {
</span><br>
<span class="quotelev1">&gt;              /* Add session directory */
</span><br>
<span class="quotelev1">&gt; -             
</span><br>
<span class="quotelev1">&gt; opal_crs_base_cleanup_append(orte_process_info.job_session_dir, true);
</span><br>
<span class="quotelev1">&gt; +             
</span><br>
<span class="quotelev1">&gt; opal_crs_base_cleanup_append(orte_proc_info.job_session_dir, true);
</span><br>
<span class="quotelev1">&gt;              /* Add shared memory file */
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt; opal_crs_base_cleanup_append(mca_btl_sm_component.mmap_file- 
</span><br>
<span class="quotelev2">&gt; &gt;map_path, false);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/sm/btl_sm_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/sm/btl_sm_component.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/sm/btl_sm_component.c    2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -272,7 +272,7 @@
</span><br>
<span class="quotelev1">&gt;  #if OMPI_ENABLE_PROGRESS_THREADS == 1
</span><br>
<span class="quotelev1">&gt;      /* create a named pipe to receive events  */
</span><br>
<span class="quotelev1">&gt;      sprintf( mca_btl_sm_component.sm_fifo_path,
</span><br>
<span class="quotelev1">&gt; -             &quot;%s&quot;OPAL_PATH_SEP&quot;sm_fifo.%lu&quot;,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +             &quot;%s&quot;OPAL_PATH_SEP&quot;sm_fifo.%lu&quot;,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt;               (unsigned long)ORTE_PROC_MY_NAME-&gt;vpid );
</span><br>
<span class="quotelev1">&gt;      if(mkfifo(mca_btl_sm_component.sm_fifo_path, 0660) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          opal_output(0, &quot;mca_btl_sm_component_init: mkfifo failed  
</span><br>
<span class="quotelev1">&gt; with errno=%d\n&quot;,errno);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/udapl/btl_udapl.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/udapl/btl_udapl.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/udapl/btl_udapl.c        2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -803,7 +803,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  BTL_UDAPL_VERBOSE_HELP(VERBOSE_SHOW_HELP,
</span><br>
<span class="quotelev1">&gt;                      (&quot;help-mpi-btl-udapl.txt&quot;, &quot;interface not found&quot;,
</span><br>
<span class="quotelev1">&gt; -                        true, orte_process_info.nodename,  
</span><br>
<span class="quotelev1">&gt; btl_addr_string));
</span><br>
<span class="quotelev1">&gt; +                        true, orte_proc_info.nodename,  
</span><br>
<span class="quotelev1">&gt; btl_addr_string));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; @@ -817,7 +817,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  BTL_UDAPL_VERBOSE_HELP(VERBOSE_SHOW_HELP,
</span><br>
<span class="quotelev1">&gt;                      (&quot;help-mpi-btl-udapl.txt&quot;, &quot;netmask not found&quot;,
</span><br>
<span class="quotelev1">&gt; -                        true, orte_process_info.nodename,  
</span><br>
<span class="quotelev1">&gt; btl_addr_string));
</span><br>
<span class="quotelev1">&gt; +                        true, orte_proc_info.nodename,  
</span><br>
<span class="quotelev1">&gt; btl_addr_string));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; @@ -831,7 +831,7 @@
</span><br>
<span class="quotelev1">&gt;              /* current uDAPL BTL does not support IPv6 */
</span><br>
<span class="quotelev1">&gt;              BTL_UDAPL_VERBOSE_HELP(VERBOSE_SHOW_HELP,
</span><br>
<span class="quotelev1">&gt;                  (&quot;help-mpi-btl-udapl.txt&quot;, &quot;IPv4 only&quot;,
</span><br>
<span class="quotelev1">&gt; -                    true, orte_process_info.nodename));
</span><br>
<span class="quotelev1">&gt; +                    true, orte_proc_info.nodename));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/udapl/btl_udapl_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/udapl/btl_udapl_component.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/udapl/btl_udapl_component.c      2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -418,7 +418,7 @@
</span><br>
<span class="quotelev1">&gt;          char *str = opal_argv_join(mca_btl_udapl_component.if_list,  
</span><br>
<span class="quotelev1">&gt; ',');
</span><br>
<span class="quotelev1">&gt;          BTL_UDAPL_VERBOSE_HELP(VERBOSE_SHOW_HELP,
</span><br>
<span class="quotelev1">&gt;              (&quot;help-mpi-btl-udapl.txt&quot;, &quot;nonexistent entry&quot;,
</span><br>
<span class="quotelev1">&gt; -            true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +            true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;              ((NULL != mca_btl_udapl_component.if_include) ?
</span><br>
<span class="quotelev1">&gt;              &quot;in&quot; : &quot;ex&quot;), str));
</span><br>
<span class="quotelev1">&gt;          free(str);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/udapl/btl_udapl_proc.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/udapl/btl_udapl_proc.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/udapl/btl_udapl_proc.c   2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -253,14 +253,14 @@
</span><br>
<span class="quotelev1">&gt;          /* current uDAPL BTL only supports IPv4 */
</span><br>
<span class="quotelev1">&gt;          BTL_UDAPL_VERBOSE_HELP(VERBOSE_SHOW_HELP,
</span><br>
<span class="quotelev1">&gt;              (&quot;help-mpi-btl-udapl.txt&quot;, &quot;IPv4 only&quot;,
</span><br>
<span class="quotelev1">&gt; -            true, orte_process_info.nodename));
</span><br>
<span class="quotelev1">&gt; +            true, orte_proc_info.nodename));
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (MCA_BTL_UDAPL_INVALID_PEER_ADDR_IDX == *peer_addr_idx) {
</span><br>
<span class="quotelev1">&gt;          BTL_UDAPL_VERBOSE_HELP(VERBOSE_SHOW_HELP,
</span><br>
<span class="quotelev1">&gt;              (&quot;help-mpi-btl-udapl.txt&quot;, &quot;no network match&quot;,
</span><br>
<span class="quotelev1">&gt; -            true, btl_addr_string, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +            true, btl_addr_string, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;              peer_proc-&gt;proc_ompi-&gt;proc_hostname));
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/sm/coll_sm_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/sm/coll_sm_module.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/sm/coll_sm_module.c     2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -518,8 +518,8 @@
</span><br>
<span class="quotelev1">&gt;      if (NULL == mca_coll_sm_component.sm_bootstrap_filename) {
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    orte_proc_info();
</span><br>
<span class="quotelev1">&gt; -    fullpath = opal_os_path( false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info_init();
</span><br>
<span class="quotelev1">&gt; +    fullpath = opal_os_path( false, orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt;                                
</span><br>
<span class="quotelev1">&gt; mca_coll_sm_component.sm_bootstrap_filename, NULL );
</span><br>
<span class="quotelev1">&gt;      if (NULL == fullpath) {
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/sm2/coll_sm2_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/sm2/coll_sm2_module.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/sm2/coll_sm2_module.c   2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -233,7 +233,7 @@
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt;          unique_comm_id=(int)getpid();
</span><br>
<span class="quotelev1">&gt;          len=asprintf(&amp;f_name,
</span><br>
<span class="quotelev1">&gt; -                &quot;%s&quot;OPAL_PATH_SEP&quot;sm_coll_v2_%0d_ 
</span><br>
<span class="quotelev1">&gt; %0d&quot;,orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +                &quot;%s&quot;OPAL_PATH_SEP&quot;sm_coll_v2_%0d_ 
</span><br>
<span class="quotelev1">&gt; %0d&quot;,orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt;                  ompi_comm_get_cid(comm),unique_comm_id);
</span><br>
<span class="quotelev1">&gt;          if( 0 &gt; len ) {
</span><br>
<span class="quotelev1">&gt;              return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; @@ -318,7 +318,7 @@
</span><br>
<span class="quotelev1">&gt;           *   communicators, that could have the same communicator id
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt;          len=asprintf(&amp;f_name,
</span><br>
<span class="quotelev1">&gt; -                &quot;%s&quot;OPAL_PATH_SEP&quot;sm_coll_v2_%0d_ 
</span><br>
<span class="quotelev1">&gt; %0d&quot;,orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +                &quot;%s&quot;OPAL_PATH_SEP&quot;sm_coll_v2_%0d_ 
</span><br>
<span class="quotelev1">&gt; %0d&quot;,orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt;                  ompi_comm_get_cid(comm),unique_comm_id);
</span><br>
<span class="quotelev1">&gt;          if( 0 &gt; len ) {
</span><br>
<span class="quotelev1">&gt;              return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; @@ -987,8 +987,8 @@
</span><br>
<span class="quotelev1">&gt;      /* set file name */
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;      len=asprintf(&amp;(sm_module-&gt;coll_sm2_file_name),
</span><br>
<span class="quotelev1">&gt; -            &quot;%s&quot;OPAL_PATH_SEP&quot;sm_coll_v2%s_%0d 
</span><br>
<span class="quotelev1">&gt; \0&quot;,orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; -            orte_process_info.nodename,ompi_comm_get_cid(comm));
</span><br>
<span class="quotelev1">&gt; +            &quot;%s&quot;OPAL_PATH_SEP&quot;sm_coll_v2%s_%0d 
</span><br>
<span class="quotelev1">&gt; \0&quot;,orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +            orte_proc_info.nodename,ompi_comm_get_cid(comm));
</span><br>
<span class="quotelev1">&gt;      if( 0 &gt; len ) {
</span><br>
<span class="quotelev1">&gt;          goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/sync/coll_sync_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/sync/coll_sync_module.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/sync/coll_sync_module.c 2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -177,7 +177,7 @@
</span><br>
<span class="quotelev1">&gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-coll-sync.txt&quot;, &quot;missing collective&quot;,  
</span><br>
<span class="quotelev1">&gt; true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                         mca_coll_sync_component.priority, msg);
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -6470,10 +6470,10 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static void  
</span><br>
<span class="quotelev1">&gt; traffic_message_dump_peer(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,  
</span><br>
<span class="quotelev1">&gt; char * msg, bool root_only)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    if( root_only &amp;&amp; orte_process_info.my_name.vpid != 0 ) {
</span><br>
<span class="quotelev1">&gt; +    if( root_only &amp;&amp; orte_proc_info.my_name.vpid != 0 ) {
</span><br>
<span class="quotelev1">&gt;          return;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt; -        sleep(orte_process_info.my_name.vpid * 2);
</span><br>
<span class="quotelev1">&gt; +        sleep(orte_proc_info.my_name.vpid * 2);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      opal_output(0, &quot;------------- %s  
</span><br>
<span class="quotelev1">&gt; ---------------------------------&quot;, msg);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c  2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -770,7 +770,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_LOCK(&amp;ompi_dpm_port_mutex);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL == orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL == orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt;          rc = ORTE_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          goto cleanup;
</span><br>
<span class="quotelev1">&gt; @@ -790,7 +790,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    len = strlen(orte_process_info.my_hnp_uri) + strlen(rml_uri) +  
</span><br>
<span class="quotelev1">&gt; strlen(tag);
</span><br>
<span class="quotelev1">&gt; +    len = strlen(orte_proc_info.my_hnp_uri) + strlen(rml_uri) +  
</span><br>
<span class="quotelev1">&gt; strlen(tag);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if the overall port name is too long, we abort */
</span><br>
<span class="quotelev1">&gt;      if (len &gt; (MPI_MAX_PORT_NAME-1)) {
</span><br>
<span class="quotelev1">&gt; @@ -799,7 +799,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* assemble the port name */
</span><br>
<span class="quotelev1">&gt; -    snprintf(port_name, MPI_MAX_PORT_NAME, &quot;%s+%s:%s&quot;,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri, rml_uri, tag);
</span><br>
<span class="quotelev1">&gt; +    snprintf(port_name, MPI_MAX_PORT_NAME, &quot;%s+%s:%s&quot;,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.my_hnp_uri, rml_uri, tag);
</span><br>
<span class="quotelev1">&gt;      rc = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cleanup:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mpool/base/mpool_base_lookup.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mpool/base/mpool_base_lookup.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mpool/base/mpool_base_lookup.c       2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -137,7 +137,7 @@
</span><br>
<span class="quotelev1">&gt;              } else {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpool-base.txt&quot;, &quot;leave pinned  
</span><br>
<span class="quotelev1">&gt; failed&quot;,
</span><br>
<span class="quotelev1">&gt;                                 true,  
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; -                               orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                               orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;                  return NULL;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mpool/base/mpool_base_tree.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mpool/base/mpool_base_tree.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mpool/base/mpool_base_tree.c 2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -173,14 +173,14 @@
</span><br>
<span class="quotelev1">&gt;          ompi_debug_show_mpi_alloc_mem_leaks &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpool-base.txt&quot;, &quot;all mem leaks&quot;,
</span><br>
<span class="quotelev1">&gt;                         true, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.pid, leak_msg);
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.pid, leak_msg);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          int i = num_leaks - ompi_debug_show_mpi_alloc_mem_leaks;
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpool-base.txt&quot;, &quot;some mem leaks&quot;,
</span><br>
<span class="quotelev1">&gt;                         true, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.pid, leak_msg, i,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.pid, leak_msg, i,
</span><br>
<span class="quotelev1">&gt;                         (i &gt; 1) ? &quot;s were&quot; : &quot; was&quot;,
</span><br>
<span class="quotelev1">&gt;                         (i &gt; 1) ? &quot;are&quot; : &quot;is&quot;);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mpool/sm/mpool_sm_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mpool/sm/mpool_sm_component.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mpool/sm/mpool_sm_component.c        2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -207,8 +207,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create initial shared memory mapping */
</span><br>
<span class="quotelev1">&gt;      len = asprintf( &amp;file_name, &quot;%s&quot;OPAL_PATH_SEP&quot;shared_mem_pool. 
</span><br>
<span class="quotelev1">&gt; %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                    orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; -                    orte_process_info.nodename );
</span><br>
<span class="quotelev1">&gt; +                    orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +                    orte_proc_info.nodename );
</span><br>
<span class="quotelev1">&gt;      if ( 0 &gt; len ) {
</span><br>
<span class="quotelev1">&gt;          free(mpool_module);
</span><br>
<span class="quotelev1">&gt;          return NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mpool/sm/mpool_sm_module.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mpool/sm/mpool_sm_module.c   2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -131,8 +131,8 @@
</span><br>
<span class="quotelev1">&gt;      if(OPAL_CRS_CHECKPOINT == state) {
</span><br>
<span class="quotelev1">&gt;          /* Record the shared memory filename */
</span><br>
<span class="quotelev1">&gt;          asprintf( &amp;file_name, &quot;%s&quot;OPAL_PATH_SEP&quot;shared_mem_pool.%s&quot;,
</span><br>
<span class="quotelev1">&gt; -                  orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; -                  orte_process_info.nodename );
</span><br>
<span class="quotelev1">&gt; +                  orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +                  orte_proc_info.nodename );
</span><br>
<span class="quotelev1">&gt;          opal_crs_base_metadata_write_token(NULL,  
</span><br>
<span class="quotelev1">&gt; CRS_METADATA_TOUCH, file_name);
</span><br>
<span class="quotelev1">&gt;          free(file_name);
</span><br>
<span class="quotelev1">&gt;          file_name = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/v/mca/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/v/mca/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/v/mca/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c     2009-03-05 15:36:44 EST (Thu,  
</span><br>
<span class="quotelev1">&gt; 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -141,7 +141,7 @@
</span><br>
<span class="quotelev1">&gt;      OBJ_CONSTRUCT(&amp;sb.sb_sendreq, opal_list_t);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    asprintf(&amp;path, &quot;%s&quot;OPAL_PATH_SEP&quot;%s&quot;,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt; +    asprintf(&amp;path, &quot;%s&quot;OPAL_PATH_SEP&quot;%s&quot;,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt;                  mmapfile);
</span><br>
<span class="quotelev1">&gt;      if(OPAL_SUCCESS != sb_mmap_file_open(path))
</span><br>
<span class="quotelev1">&gt;          return OPAL_ERR_FILE_OPEN_FAILURE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/proc/proc.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/proc/proc.c      2009-03-05 15:36:44 EST (Thu, 05 Mar  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -63,7 +63,7 @@
</span><br>
<span class="quotelev1">&gt;       * the arch of the remote nodes, we will have to set the  
</span><br>
<span class="quotelev1">&gt; convertors to the correct
</span><br>
<span class="quotelev1">&gt;       * architecture.
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    proc-&gt;proc_arch = orte_process_info.arch;
</span><br>
<span class="quotelev1">&gt; +    proc-&gt;proc_arch = orte_proc_info.arch;
</span><br>
<span class="quotelev1">&gt;      proc-&gt;proc_convertor = ompi_mpi_local_convertor;
</span><br>
<span class="quotelev1">&gt;      OBJ_RETAIN( ompi_mpi_local_convertor );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -99,7 +99,7 @@
</span><br>
<span class="quotelev1">&gt;      OBJ_CONSTRUCT(&amp;ompi_proc_lock, opal_mutex_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create proc structures and find self */
</span><br>
<span class="quotelev1">&gt; -    for( i = 0; i &lt; orte_process_info.num_procs; i++ ) {
</span><br>
<span class="quotelev1">&gt; +    for( i = 0; i &lt; orte_proc_info.num_procs; i++ ) {
</span><br>
<span class="quotelev1">&gt;          ompi_proc_t *proc = OBJ_NEW(ompi_proc_t);
</span><br>
<span class="quotelev1">&gt;          opal_list_append(&amp;ompi_proc_list, (opal_list_item_t*)proc);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -108,8 +108,8 @@
</span><br>
<span class="quotelev1">&gt;          if (i == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt;              ompi_proc_local_proc = proc;
</span><br>
<span class="quotelev1">&gt;              proc-&gt;proc_flags = OPAL_PROC_ALL_LOCAL;
</span><br>
<span class="quotelev1">&gt; -            proc-&gt;proc_hostname = orte_process_info.nodename;
</span><br>
<span class="quotelev1">&gt; -            proc-&gt;proc_arch = orte_process_info.arch;
</span><br>
<span class="quotelev1">&gt; +            proc-&gt;proc_hostname = orte_proc_info.nodename;
</span><br>
<span class="quotelev1">&gt; +            proc-&gt;proc_arch = orte_proc_info.arch;
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              /* get the locality information */
</span><br>
<span class="quotelev1">&gt;              proc-&gt;proc_flags = orte_ess.proc_get_locality(&amp;proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_name);
</span><br>
<span class="quotelev1">&gt; @@ -146,14 +146,14 @@
</span><br>
<span class="quotelev1">&gt;          if (proc-&gt;proc_name.vpid != ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt;              proc-&gt;proc_arch = orte_ess.proc_get_arch(&amp;proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_name);
</span><br>
<span class="quotelev1">&gt;              /* if arch is different than mine, create a new  
</span><br>
<span class="quotelev1">&gt; convertor for this proc */
</span><br>
<span class="quotelev1">&gt; -            if (proc-&gt;proc_arch != orte_process_info.arch) {
</span><br>
<span class="quotelev1">&gt; +            if (proc-&gt;proc_arch != orte_proc_info.arch) {
</span><br>
<span class="quotelev1">&gt;  #if OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt;                  OBJ_RELEASE(proc-&gt;proc_convertor);
</span><br>
<span class="quotelev1">&gt;                  proc-&gt;proc_convertor = ompi_convertor_create(proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_arch, 0);
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-runtime&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;heterogeneous-support-unavailable&quot;,
</span><br>
<span class="quotelev1">&gt; -                               true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                               true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                 proc-&gt;proc_hostname == NULL ?  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;hostname unavailable&gt;&quot; :
</span><br>
<span class="quotelev1">&gt;                                 proc-&gt;proc_hostname);
</span><br>
<span class="quotelev1">&gt;                  OPAL_THREAD_UNLOCK(&amp;ompi_proc_lock);
</span><br>
<span class="quotelev1">&gt; @@ -353,21 +353,21 @@
</span><br>
<span class="quotelev1">&gt;          if (i == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt;              ompi_proc_local_proc = proc;
</span><br>
<span class="quotelev1">&gt;              proc-&gt;proc_flags = OPAL_PROC_ALL_LOCAL;
</span><br>
<span class="quotelev1">&gt; -            proc-&gt;proc_hostname = orte_process_info.nodename;
</span><br>
<span class="quotelev1">&gt; -            proc-&gt;proc_arch = orte_process_info.arch;
</span><br>
<span class="quotelev1">&gt; +            proc-&gt;proc_hostname = orte_proc_info.nodename;
</span><br>
<span class="quotelev1">&gt; +            proc-&gt;proc_arch = orte_proc_info.arch;
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              proc-&gt;proc_flags = orte_ess.proc_get_locality(&amp;proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_name);
</span><br>
<span class="quotelev1">&gt;              proc-&gt;proc_hostname = orte_ess.proc_get_hostname(&amp;proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_name);
</span><br>
<span class="quotelev1">&gt;              proc-&gt;proc_arch = orte_ess.proc_get_arch(&amp;proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_name);
</span><br>
<span class="quotelev1">&gt;              /* if arch is different than mine, create a new  
</span><br>
<span class="quotelev1">&gt; convertor for this proc */
</span><br>
<span class="quotelev1">&gt; -            if (proc-&gt;proc_arch != orte_process_info.arch) {
</span><br>
<span class="quotelev1">&gt; +            if (proc-&gt;proc_arch != orte_proc_info.arch) {
</span><br>
<span class="quotelev1">&gt;  #if OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt;                  OBJ_RELEASE(proc-&gt;proc_convertor);
</span><br>
<span class="quotelev1">&gt;                  proc-&gt;proc_convertor = ompi_convertor_create(proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_arch, 0);
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-runtime&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;heterogeneous-support-unavailable&quot;,
</span><br>
<span class="quotelev1">&gt; -                               true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                               true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                 proc-&gt;proc_hostname == NULL ?  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;hostname unavailable&gt;&quot; :
</span><br>
<span class="quotelev1">&gt;                                 proc-&gt;proc_hostname);
</span><br>
<span class="quotelev1">&gt;                  OPAL_THREAD_UNLOCK(&amp;ompi_proc_lock);
</span><br>
<span class="quotelev1">&gt; @@ -539,7 +539,7 @@
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-runtime&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;heterogeneous-support-unavailable&quot;,
</span><br>
<span class="quotelev1">&gt; -                               true, orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                               true, orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                 new_hostname == NULL ? &quot;&lt;hostname  
</span><br>
<span class="quotelev1">&gt; unavailable&gt;&quot; :
</span><br>
<span class="quotelev1">&gt;                                 new_hostname);
</span><br>
<span class="quotelev1">&gt;                  free(plist);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/runtime/ompi_mpi_abort.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/runtime/ompi_mpi_abort.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/runtime/ompi_mpi_abort.c 2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -68,7 +68,7 @@
</span><br>
<span class="quotelev1">&gt;         gethostname. */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (orte_initialized) {
</span><br>
<span class="quotelev1">&gt; -        host = orte_process_info.nodename;
</span><br>
<span class="quotelev1">&gt; +        host = orte_proc_info.nodename;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          gethostname(hostname, sizeof(hostname));
</span><br>
<span class="quotelev1">&gt;          host = hostname;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/runtime/ompi_mpi_init.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/runtime/ompi_mpi_init.c  2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -135,7 +135,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      if (ompi_mpi_initialized &amp;&amp; !ompi_mpi_finalized &amp;&amp; ! 
</span><br>
<span class="quotelev1">&gt; fork_warning_issued) {
</span><br>
<span class="quotelev1">&gt;          orte_show_help(&quot;help-mpi-runtime.txt&quot;, &quot;mpi_init:warn- 
</span><br>
<span class="quotelev1">&gt; fork&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.nodename, getpid(),
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.nodename, getpid(),
</span><br>
<span class="quotelev1">&gt;                         ompi_mpi_comm_world.comm.c_my_rank);
</span><br>
<span class="quotelev1">&gt;          fork_warning_issued = true;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -341,7 +341,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Setup ORTE - note that we are not a tool  */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.mpi_proc = true;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.mpi_proc = true;
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (ret = orte_init(ORTE_NON_TOOL))) {
</span><br>
<span class="quotelev1">&gt;          error = &quot;ompi_mpi_init: orte_init failed&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -698,7 +698,7 @@
</span><br>
<span class="quotelev1">&gt;      if (ompi_mpi_show_mca_params) {
</span><br>
<span class="quotelev1">&gt;         ompi_show_all_mca_params(ompi_mpi_comm_world.comm.c_my_rank,
</span><br>
<span class="quotelev1">&gt;                                  nprocs,
</span><br>
<span class="quotelev1">&gt; -                                orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                                orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Do we need to wait for a debugger? */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/tools/ompi_info/components.cc
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/tools/ompi_info/components.cc    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/tools/ompi_info/components.cc    2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -275,9 +275,9 @@
</span><br>
<span class="quotelev1">&gt;    component_map[&quot;installdirs&quot;] = &amp;opal_installdirs_components;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    // ORTE frameworks
</span><br>
<span class="quotelev1">&gt; -  // Set orte_process_info.hnp to true to force all frameworks to
</span><br>
<span class="quotelev1">&gt; +  // Set orte_proc_info.hnp to true to force all frameworks to
</span><br>
<span class="quotelev1">&gt;    // open components
</span><br>
<span class="quotelev1">&gt; -  orte_process_info.hnp = true;
</span><br>
<span class="quotelev1">&gt; +  orte_proc_info.hnp = true;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (ORTE_SUCCESS != orte_errmgr_base_open()) {
</span><br>
<span class="quotelev1">&gt;        goto error;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/errmgr/default/errmgr_default_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/errmgr/default/errmgr_default_component.c     
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/errmgr/default/errmgr_default_component.c     
</span><br>
<span class="quotelev1">&gt; 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -94,7 +94,7 @@
</span><br>
<span class="quotelev1">&gt;  int orte_errmgr_default_component_query(mca_base_module_t **module,  
</span><br>
<span class="quotelev1">&gt; int *priority)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      /* If we are not an HNP, then don't pick us! */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          /* don't take me! */
</span><br>
<span class="quotelev1">&gt;          *module = NULL;
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/alps/ess_alps_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/alps/ess_alps_module.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/alps/ess_alps_module.c   2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -85,13 +85,13 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, complete my setup using the
</span><br>
<span class="quotelev1">&gt;       * default procedure
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              error = &quot;orte_ess_base_orted_setup&quot;;
</span><br>
<span class="quotelev1">&gt;              goto error;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -112,7 +112,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup the nidmap arrays */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_process_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_proc_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_util_nidmap_init&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -133,11 +133,11 @@
</span><br>
<span class="quotelev1">&gt;      int ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, finalize using the default procedure */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -357,7 +357,7 @@
</span><br>
<span class="quotelev1">&gt;      OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev1">&gt;                           &quot;ess:alps set name to %s&quot;,  
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.num_procs = (orte_std_cntr_t) cnos_get_size();
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.num_procs = (orte_std_cntr_t) cnos_get_size();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/base/ess_base_get.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/base/ess_base_get.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/base/ess_base_get.c      2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -45,7 +45,7 @@
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.num_procs = (orte_std_cntr_t)num_procs;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.num_procs = (orte_std_cntr_t)num_procs;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/base/ess_base_std_app.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/base/ess_base_std_app.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -123,12 +123,12 @@
</span><br>
<span class="quotelev1">&gt;      OPAL_OUTPUT_VERBOSE((2, orte_debug_output,
</span><br>
<span class="quotelev1">&gt;                           &quot;%s setting up session dir with\n\ttmpdir:  
</span><br>
<span class="quotelev1">&gt; %s\n\thost %s&quot;,
</span><br>
<span class="quotelev1">&gt;                           ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; -                         (NULL == orte_process_info.tmpdir_base) ?  
</span><br>
<span class="quotelev1">&gt; &quot;UNDEF&quot; : orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                         orte_process_info.nodename));
</span><br>
<span class="quotelev1">&gt; +                         (NULL == orte_proc_info.tmpdir_base) ?  
</span><br>
<span class="quotelev1">&gt; &quot;UNDEF&quot; : orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                         orte_proc_info.nodename));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (ret = orte_session_dir(true,
</span><br>
<span class="quotelev1">&gt; -                                                 
</span><br>
<span class="quotelev1">&gt; orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                                                 
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename, NULL,
</span><br>
<span class="quotelev1">&gt; +                                                 
</span><br>
<span class="quotelev1">&gt; orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                                                 
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename, NULL,
</span><br>
<span class="quotelev1">&gt;                                                   
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_NAME))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_session_dir&quot;;
</span><br>
<span class="quotelev1">&gt; @@ -138,7 +138,7 @@
</span><br>
<span class="quotelev1">&gt;      /* Once the session directory location has been established, set
</span><br>
<span class="quotelev1">&gt;          the opal_output env file location to be in the
</span><br>
<span class="quotelev1">&gt;          proc-specific session directory. */
</span><br>
<span class="quotelev1">&gt; -     
</span><br>
<span class="quotelev1">&gt; opal_output_set_output_file_info(orte_process_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt; +    opal_output_set_output_file_info(orte_proc_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt;                                       &quot;output-&quot;, NULL, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -164,7 +164,7 @@
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_snapc_base_open&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_snapc_base_select(orte_process_info.hnp, ! 
</span><br>
<span class="quotelev1">&gt; orte_process_info.daemon))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_snapc_base_select(orte_proc_info.hnp, !orte_proc_info.daemon))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -278,7 +278,7 @@
</span><br>
<span class="quotelev1">&gt;       * write an &quot;abort&quot; file into our session directory
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (report) {
</span><br>
<span class="quotelev1">&gt; -        abort_file = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.proc_session_dir, &quot;abort&quot;, NULL);
</span><br>
<span class="quotelev1">&gt; +        abort_file = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.proc_session_dir, &quot;abort&quot;, NULL);
</span><br>
<span class="quotelev1">&gt;          if (NULL == abort_file) {
</span><br>
<span class="quotelev1">&gt;              /* got a problem */
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/base/ess_base_std_orted.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/base/ess_base_std_orted.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/base/ess_base_std_orted.c        2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -187,12 +187,12 @@
</span><br>
<span class="quotelev1">&gt;      OPAL_OUTPUT_VERBOSE((2, orte_debug_output,
</span><br>
<span class="quotelev1">&gt;                           &quot;%s setting up session dir with\n\ttmpdir:  
</span><br>
<span class="quotelev1">&gt; %s\n\thost %s&quot;,
</span><br>
<span class="quotelev1">&gt;                           ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; -                         (NULL == orte_process_info.tmpdir_base) ?  
</span><br>
<span class="quotelev1">&gt; &quot;UNDEF&quot; : orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                         orte_process_info.nodename));
</span><br>
<span class="quotelev1">&gt; +                         (NULL == orte_proc_info.tmpdir_base) ?  
</span><br>
<span class="quotelev1">&gt; &quot;UNDEF&quot; : orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                         orte_proc_info.nodename));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (ret = orte_session_dir(true,
</span><br>
<span class="quotelev1">&gt; -                                                 
</span><br>
<span class="quotelev1">&gt; orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                                                 
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename, NULL,
</span><br>
<span class="quotelev1">&gt; +                                                 
</span><br>
<span class="quotelev1">&gt; orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                                                 
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename, NULL,
</span><br>
<span class="quotelev1">&gt;                                                   
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_NAME))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_session_dir&quot;;
</span><br>
<span class="quotelev1">&gt; @@ -243,7 +243,7 @@
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_snapc_base_select(orte_process_info.hnp, ! 
</span><br>
<span class="quotelev1">&gt; orte_process_info.daemon))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_snapc_base_select(orte_proc_info.hnp, !orte_proc_info.daemon))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/base/ess_base_std_tool.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/base/ess_base_std_tool.c 2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -98,9 +98,9 @@
</span><br>
<span class="quotelev1">&gt;       * this node might be located
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (ret = orte_session_dir_get_name(NULL,
</span><br>
<span class="quotelev1">&gt; -                                   &amp;orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                                    
</span><br>
<span class="quotelev1">&gt; &amp;orte_process_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt; -                                   orte_process_info.nodename,  
</span><br>
<span class="quotelev1">&gt; NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt; +                                   &amp;orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                                   &amp;orte_proc_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt; +                                   orte_proc_info.nodename, NULL,  
</span><br>
<span class="quotelev1">&gt; NULL))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;define session dir names&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -136,7 +136,7 @@
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_snapc_base_open&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_snapc_base_select(orte_process_info.hnp, ! 
</span><br>
<span class="quotelev1">&gt; orte_process_info.daemon))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_snapc_base_select(orte_proc_info.hnp, !orte_proc_info.daemon))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/bproc/ess_bproc_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/bproc/ess_bproc_module.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/bproc/ess_bproc_module.c 2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -79,14 +79,14 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, complete my setup using the
</span><br>
<span class="quotelev1">&gt;       * default procedure
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              error = &quot;orte_ess_base_orted_setup&quot;;
</span><br>
<span class="quotelev1">&gt;              goto error;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -109,7 +109,7 @@
</span><br>
<span class="quotelev1">&gt;          opal_pointer_array_init(&amp;nidmap, 8, INT32_MAX, 8);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* if one was provided, build my nidmap */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_ess_base_build_nidmap(orte_process_info.sync_buf,
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_ess_base_build_nidmap(orte_proc_info.sync_buf,
</span><br>
<span class="quotelev1">&gt;                                                                 
</span><br>
<span class="quotelev1">&gt; &amp;nidmap, &amp;pmap, &amp;nprocs))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              error = &quot;orte_ess_base_build_nidmap&quot;;
</span><br>
<span class="quotelev1">&gt; @@ -134,11 +134,11 @@
</span><br>
<span class="quotelev1">&gt;      int32_t i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, finalize using the default procedure */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -371,10 +371,10 @@
</span><br>
<span class="quotelev1">&gt;      ORTE_PROC_MY_NAME-&gt;vpid = vpid_start + (bproc_rank * stride);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if(NULL != orte_process_info.nodename) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +    if(NULL != orte_proc_info.nodename) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    asprintf(&amp;orte_process_info.nodename, &quot;%d&quot;, bproc_currnode());
</span><br>
<span class="quotelev1">&gt; +    asprintf(&amp;orte_proc_info.nodename, &quot;%d&quot;, bproc_currnode());
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/cnos/ess_cnos_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/cnos/ess_cnos_module.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/cnos/ess_cnos_module.c   2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -85,7 +85,7 @@
</span><br>
<span class="quotelev1">&gt;      ORTE_PROC_MY_NAME-&gt;vpid = (orte_vpid_t) cnos_get_rank();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Get the number of procs in the job from cnos */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.num_procs = (orte_std_cntr_t) cnos_get_size();
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.num_procs = (orte_std_cntr_t) cnos_get_size();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Get the nid map */
</span><br>
<span class="quotelev1">&gt;      nprocs = cnos_get_nidpid_map(&amp;map);
</span><br>
<span class="quotelev1">&gt; @@ -146,7 +146,7 @@
</span><br>
<span class="quotelev1">&gt;  static uint32_t proc_get_arch(orte_process_name_t *proc)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      /* always homogeneous, so other side is always same as us */
</span><br>
<span class="quotelev1">&gt; -    return orte_process_info.arch;
</span><br>
<span class="quotelev1">&gt; +    return orte_proc_info.arch;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static int update_arch(orte_process_name_t *proc, uint32_t arch)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/env/ess_env_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/env/ess_env_component.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/env/ess_env_component.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -81,7 +81,7 @@
</span><br>
<span class="quotelev1">&gt;       * it would be impossible for the correct env vars
</span><br>
<span class="quotelev1">&gt;       * to have been set!
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt;          *priority = 20;
</span><br>
<span class="quotelev1">&gt;          *module = (mca_base_module_t *)&amp;orte_ess_env_module;
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/env/ess_env_module.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/env/ess_env_module.c     2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -136,14 +136,14 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, complete my setup using the
</span><br>
<span class="quotelev1">&gt;       * default procedure
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              error = &quot;orte_ess_base_orted_setup&quot;;
</span><br>
<span class="quotelev1">&gt;              goto error;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -165,7 +165,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if one was provided, build my nidmap */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_process_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_proc_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_util_nidmap_init&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -186,11 +186,11 @@
</span><br>
<span class="quotelev1">&gt;      int ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, finalize using the default procedure */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -505,12 +505,12 @@
</span><br>
<span class="quotelev1">&gt;           * Restart the routed framework
</span><br>
<span class="quotelev1">&gt;           * JJH: Lie to the finalize function so it does not try to  
</span><br>
<span class="quotelev1">&gt; contact the daemon.
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.tool = true;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.tool = true;
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_routed.finalize()) ) {
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;              goto cleanup;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.tool = false;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.tool = false;
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_routed.initialize()) ) {
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;              goto cleanup;
</span><br>
<span class="quotelev1">&gt; @@ -556,14 +556,14 @@
</span><br>
<span class="quotelev1">&gt;           * Session directory re-init
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_session_dir(true,
</span><br>
<span class="quotelev1">&gt; -                                                     
</span><br>
<span class="quotelev1">&gt; orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                                                     
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                                                     
</span><br>
<span class="quotelev1">&gt; orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                                                     
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                                      NULL, /* Batch  
</span><br>
<span class="quotelev1">&gt; ID -- Not used */
</span><br>
<span class="quotelev1">&gt;                                                       
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_NAME))) {
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -         
</span><br>
<span class="quotelev1">&gt; opal_output_set_output_file_info(orte_process_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt; +         
</span><br>
<span class="quotelev1">&gt; opal_output_set_output_file_info(orte_proc_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt;                                           &quot;output-&quot;, NULL, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /*
</span><br>
<span class="quotelev1">&gt; @@ -590,13 +590,13 @@
</span><br>
<span class="quotelev1">&gt;           * - Note: BLCR does this because it tries to preseve the PID
</span><br>
<span class="quotelev1">&gt;           *         of the program across checkpointes
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if( ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; ess_env_ft_event_update_process_info(orte_process_info.my_name,  
</span><br>
<span class="quotelev1">&gt; getpid())) ) {
</span><br>
<span class="quotelev1">&gt; +        if( ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; ess_env_ft_event_update_process_info(orte_proc_info.my_name,  
</span><br>
<span class="quotelev1">&gt; getpid())) ) {
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;              goto cleanup;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* if one was provided, build my nidmap */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_process_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_proc_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;              goto cleanup;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/hnp/ess_hnp_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/hnp/ess_hnp_component.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/hnp/ess_hnp_component.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -73,7 +73,7 @@
</span><br>
<span class="quotelev1">&gt;      /* we are the hnp module - we need to be selected
</span><br>
<span class="quotelev1">&gt;       * IFF we are designated as the hnp
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          *priority = 100;
</span><br>
<span class="quotelev1">&gt;          *module = (mca_base_module_t *)&amp;orte_ess_hnp_module;
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/hnp/ess_hnp_module.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/hnp/ess_hnp_module.c     2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -287,12 +287,12 @@
</span><br>
<span class="quotelev1">&gt;      OPAL_OUTPUT_VERBOSE((2, orte_debug_output,
</span><br>
<span class="quotelev1">&gt;                           &quot;%s setting up session dir with\n\ttmpdir:  
</span><br>
<span class="quotelev1">&gt; %s\n\thost %s&quot;,
</span><br>
<span class="quotelev1">&gt;                           ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; -                         (NULL == orte_process_info.tmpdir_base) ?  
</span><br>
<span class="quotelev1">&gt; &quot;UNDEF&quot; : orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                         orte_process_info.nodename));
</span><br>
<span class="quotelev1">&gt; +                         (NULL == orte_proc_info.tmpdir_base) ?  
</span><br>
<span class="quotelev1">&gt; &quot;UNDEF&quot; : orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                         orte_proc_info.nodename));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (ret = orte_session_dir(true,
</span><br>
<span class="quotelev1">&gt; -                                orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                                orte_process_info.nodename, NULL,
</span><br>
<span class="quotelev1">&gt; +                                orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                                orte_proc_info.nodename, NULL,
</span><br>
<span class="quotelev1">&gt;                                  ORTE_PROC_MY_NAME))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_session_dir&quot;;
</span><br>
<span class="quotelev1">&gt; @@ -302,11 +302,11 @@
</span><br>
<span class="quotelev1">&gt;      /* Once the session directory location has been established, set
</span><br>
<span class="quotelev1">&gt;         the opal_output hnp file location to be in the
</span><br>
<span class="quotelev1">&gt;         proc-specific session directory. */
</span><br>
<span class="quotelev1">&gt; -     
</span><br>
<span class="quotelev1">&gt; opal_output_set_output_file_info(orte_process_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt; +    opal_output_set_output_file_info(orte_proc_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt;                                       &quot;output-&quot;, NULL, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* save my contact info in a file for others to find */
</span><br>
<span class="quotelev1">&gt; -    jobfam_dir = opal_dirname(orte_process_info.job_session_dir);
</span><br>
<span class="quotelev1">&gt; +    jobfam_dir = opal_dirname(orte_proc_info.job_session_dir);
</span><br>
<span class="quotelev1">&gt;      contact_path = opal_os_path(false, jobfam_dir, &quot;contact.txt&quot;,  
</span><br>
<span class="quotelev1">&gt; NULL);
</span><br>
<span class="quotelev1">&gt;      free(jobfam_dir);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -356,15 +356,15 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create and store a node object where we are */
</span><br>
<span class="quotelev1">&gt;      node = OBJ_NEW(orte_node_t);
</span><br>
<span class="quotelev1">&gt; -    node-&gt;name = strdup(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; -    node-&gt;arch = orte_process_info.arch;
</span><br>
<span class="quotelev1">&gt; +    node-&gt;name = strdup(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt; +    node-&gt;arch = orte_proc_info.arch;
</span><br>
<span class="quotelev1">&gt;      node-&gt;index = opal_pointer_array_add(orte_node_pool, node);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create and store a proc object for us */
</span><br>
<span class="quotelev1">&gt;      proc = OBJ_NEW(orte_proc_t);
</span><br>
<span class="quotelev1">&gt;      proc-&gt;name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;      proc-&gt;name.vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; -    proc-&gt;pid = orte_process_info.pid;
</span><br>
<span class="quotelev1">&gt; +    proc-&gt;pid = orte_proc_info.pid;
</span><br>
<span class="quotelev1">&gt;      proc-&gt;rml_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt;      proc-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev1">&gt;      OBJ_RETAIN(node);  /* keep accounting straight */
</span><br>
<span class="quotelev1">&gt; @@ -431,7 +431,7 @@
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_snapc_base_select(orte_process_info.hnp, ! 
</span><br>
<span class="quotelev1">&gt; orte_process_info.daemon))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_snapc_base_select(orte_proc_info.hnp, !orte_proc_info.daemon))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -489,7 +489,7 @@
</span><br>
<span class="quotelev1">&gt;      int i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* remove my contact info file */
</span><br>
<span class="quotelev1">&gt; -    contact_path = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt; +    contact_path = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt;                                  &quot;contact.txt&quot;, NULL);
</span><br>
<span class="quotelev1">&gt;      unlink(contact_path);
</span><br>
<span class="quotelev1">&gt;      free(contact_path);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/lsf/ess_lsf_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/lsf/ess_lsf_component.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/lsf/ess_lsf_component.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -72,7 +72,7 @@
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (NULL != getenv(&quot;LSB_JOBID&quot;) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        NULL != orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +        NULL != orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt;          *priority = 40;
</span><br>
<span class="quotelev1">&gt;          *module = (mca_base_module_t *)&amp;orte_ess_lsf_module;
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/lsf/ess_lsf_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/lsf/ess_lsf_module.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/lsf/ess_lsf_module.c     2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -96,13 +96,13 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, complete my setup using the
</span><br>
<span class="quotelev1">&gt;       * default procedure
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              error = &quot;orte_ess_base_orted_setup&quot;;
</span><br>
<span class="quotelev1">&gt;              goto error;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -124,7 +124,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup the nidmap arrays */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_process_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_proc_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_util_nidmap_init&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -145,11 +145,11 @@
</span><br>
<span class="quotelev1">&gt;      int ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, finalize using the default procedure */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/portals_utcp/ess_portals_utcp_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/portals_utcp/ess_portals_utcp_module.c    
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/portals_utcp/ess_portals_utcp_module.c    
</span><br>
<span class="quotelev1">&gt; 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -101,7 +101,7 @@
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      /* split the nidmap string */
</span><br>
<span class="quotelev1">&gt;      nidmap = opal_argv_split(nidmap_string, ':');
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.num_procs = (orte_std_cntr_t)  
</span><br>
<span class="quotelev1">&gt; opal_argv_count(nidmap);
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.num_procs = (orte_std_cntr_t)  
</span><br>
<span class="quotelev1">&gt; opal_argv_count(nidmap);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* MPI_Init needs the grpcomm framework, so we have to init it */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (rc = orte_grpcomm_base_open())) {
</span><br>
<span class="quotelev1">&gt; @@ -156,7 +156,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static uint32_t proc_get_arch(orte_process_name_t *proc)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    return orte_process_info.arch;
</span><br>
<span class="quotelev1">&gt; +    return orte_proc_info.arch;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static int update_arch(orte_process_name_t *proc, uint32_t arch)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/singleton/ess_singleton_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/singleton/ess_singleton_component.c       
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/singleton/ess_singleton_component.c       
</span><br>
<span class="quotelev1">&gt; 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -73,9 +73,9 @@
</span><br>
<span class="quotelev1">&gt;      /* if we are an HNP, daemon, or tool, then we
</span><br>
<span class="quotelev1">&gt;       * are definitely not a singleton!
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp ||
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.daemon ||
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp ||
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.daemon ||
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          *module = NULL;
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -85,7 +85,7 @@
</span><br>
<span class="quotelev1">&gt;       * given an HNP URI, then we are definitely
</span><br>
<span class="quotelev1">&gt;       * not a singleton
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt;          *module = NULL;
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/singleton/ess_singleton_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/singleton/ess_singleton_module.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/singleton/ess_singleton_module.c 2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -144,7 +144,7 @@
</span><br>
<span class="quotelev1">&gt;          return rc;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.num_procs = 1;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.num_procs = 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* NOTE: do not wireup our io - let the fork'd orted serve
</span><br>
<span class="quotelev1">&gt;       * as our io handler. This prevents issues with the event
</span><br>
<span class="quotelev1">&gt; @@ -275,8 +275,8 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Fork off the child */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.hnp_pid = fork();
</span><br>
<span class="quotelev1">&gt; -    if(orte_process_info.hnp_pid &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.hnp_pid = fork();
</span><br>
<span class="quotelev1">&gt; +    if(orte_proc_info.hnp_pid &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ORTE_ERR_SYS_LIMITS_CHILDREN);
</span><br>
<span class="quotelev1">&gt;          close(p[0]);
</span><br>
<span class="quotelev1">&gt;          close(p[1]);
</span><br>
<span class="quotelev1">&gt; @@ -286,7 +286,7 @@
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_SYS_LIMITS_CHILDREN;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp_pid == 0) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp_pid == 0) {
</span><br>
<span class="quotelev1">&gt;          close(p[0]);
</span><br>
<span class="quotelev1">&gt;          close(death_pipe[1]);
</span><br>
<span class="quotelev1">&gt;          /* I am the child - exec me */
</span><br>
<span class="quotelev1">&gt; @@ -368,13 +368,13 @@
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          /* save the daemon uri - we will process it later */
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_daemon_uri = strdup(orted_uri);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_daemon_uri = strdup(orted_uri);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* likewise, since this is also the HNP, set that uri too */
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_hnp_uri = strdup(orted_uri);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_hnp_uri = strdup(orted_uri);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* indicate we are a singleton so orte_init knows what to do  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.singleton = true;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.singleton = true;
</span><br>
<span class="quotelev1">&gt;          /* all done - report success */
</span><br>
<span class="quotelev1">&gt;          free(orted_uri);
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/slave/ess_slave_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/slave/ess_slave_module.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/slave/ess_slave_module.c 2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -209,7 +209,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if it is me, the answer is my nodename */
</span><br>
<span class="quotelev1">&gt;      if (proc-&gt;jobid == ORTE_PROC_MY_NAME-&gt;jobid &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          proc-&gt;vpid == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt; -        return orte_process_info.nodename;
</span><br>
<span class="quotelev1">&gt; +        return orte_proc_info.nodename;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* otherwise, no idea */
</span><br>
<span class="quotelev1">&gt; @@ -221,7 +221,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if it is me, the answer is my arch */
</span><br>
<span class="quotelev1">&gt;      if (proc-&gt;jobid == ORTE_PROC_MY_NAME-&gt;jobid &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          proc-&gt;vpid == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt; -        return orte_process_info.arch;
</span><br>
<span class="quotelev1">&gt; +        return orte_proc_info.arch;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* otherwise, no idea */
</span><br>
<span class="quotelev1">&gt; @@ -401,12 +401,12 @@
</span><br>
<span class="quotelev1">&gt;           * Restart the routed framework
</span><br>
<span class="quotelev1">&gt;           * JJH: Lie to the finalize function so it does not try to  
</span><br>
<span class="quotelev1">&gt; contact the daemon.
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.tool = true;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.tool = true;
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_routed.finalize()) ) {
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;              goto cleanup;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.tool = false;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.tool = false;
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_routed.initialize()) ) {
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;              goto cleanup;
</span><br>
<span class="quotelev1">&gt; @@ -452,14 +452,14 @@
</span><br>
<span class="quotelev1">&gt;           * Session directory re-init
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_session_dir(true,
</span><br>
<span class="quotelev1">&gt; -                                                     
</span><br>
<span class="quotelev1">&gt; orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                                                     
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                                                     
</span><br>
<span class="quotelev1">&gt; orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                                                     
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                                      NULL, /* Batch  
</span><br>
<span class="quotelev1">&gt; ID -- Not used */
</span><br>
<span class="quotelev1">&gt;                                                       
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_NAME))) {
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -         
</span><br>
<span class="quotelev1">&gt; opal_output_set_output_file_info(orte_process_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt; +         
</span><br>
<span class="quotelev1">&gt; opal_output_set_output_file_info(orte_proc_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt;                                           &quot;output-&quot;, NULL, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /*
</span><br>
<span class="quotelev1">&gt; @@ -486,13 +486,13 @@
</span><br>
<span class="quotelev1">&gt;           * - Note: BLCR does this because it tries to preseve the PID
</span><br>
<span class="quotelev1">&gt;           *         of the program across checkpointes
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if( ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; ess_slave_ft_event_update_process_info(orte_process_info.my_name,  
</span><br>
<span class="quotelev1">&gt; getpid())) ) {
</span><br>
<span class="quotelev1">&gt; +        if( ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; ess_slave_ft_event_update_process_info(orte_proc_info.my_name,  
</span><br>
<span class="quotelev1">&gt; getpid())) ) {
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;              goto cleanup;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* if one was provided, build my nidmap */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_process_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_proc_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              exit_status = ret;
</span><br>
<span class="quotelev1">&gt;              goto cleanup;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/slurm/ess_slurm_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/slurm/ess_slurm_component.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/slurm/ess_slurm_component.c      2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (NULL != getenv(&quot;SLURM_JOBID&quot;) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        NULL != orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +        NULL != orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt;          *priority = 30;
</span><br>
<span class="quotelev1">&gt;          *module = (mca_base_module_t *)&amp;orte_ess_slurm_module;
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/slurm/ess_slurm_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/slurm/ess_slurm_module.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/slurm/ess_slurm_module.c 2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -108,7 +108,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, complete my setup using the
</span><br>
<span class="quotelev1">&gt;       * default procedure
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              error = &quot;orte_ess_base_orted_setup&quot;;
</span><br>
<span class="quotelev1">&gt; @@ -140,7 +140,7 @@
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_setup())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -162,7 +162,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup the nidmap arrays */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_process_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_util_nidmap_init(orte_proc_info.sync_buf))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          error = &quot;orte_util_nidmap_init&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt; @@ -183,11 +183,11 @@
</span><br>
<span class="quotelev1">&gt;      int ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am a daemon, finalize using the default procedure */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_orted_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    } else if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    } else if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, if I am a tool proc, use that procedure */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ess_base_tool_finalize())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -420,15 +420,15 @@
</span><br>
<span class="quotelev1">&gt;                           &quot;ess:slurm set name to %s&quot;,  
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* fix up the system info nodename to match exactly what slurm  
</span><br>
<span class="quotelev1">&gt; returned */
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.nodename) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.nodename) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.nodename = get_slurm_nodename(slurm_nodeid);
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.nodename = get_slurm_nodename(slurm_nodeid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev1">&gt;                           &quot;ess:slurm set nodename to %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                         orte_process_info.nodename));
</span><br>
<span class="quotelev1">&gt; +                         orte_proc_info.nodename));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* get the non-name common environmental variables */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (rc = orte_ess_env_get())) {
</span><br>
<span class="quotelev1">&gt; @@ -554,7 +554,7 @@
</span><br>
<span class="quotelev1">&gt;          /* construct the URI */
</span><br>
<span class="quotelev1">&gt;          proc.vpid = node-&gt;daemon;
</span><br>
<span class="quotelev1">&gt;  orte_util_convert_process_name_to_string(&amp;proc_name, &amp;proc);
</span><br>
<span class="quotelev1">&gt; -        asprintf(&amp;uri, &quot;%s;tcp://%s:%d&quot;, proc_name, addr,  
</span><br>
<span class="quotelev1">&gt; (int)orte_process_info.my_port);
</span><br>
<span class="quotelev1">&gt; +        asprintf(&amp;uri, &quot;%s;tcp://%s:%d&quot;, proc_name, addr,  
</span><br>
<span class="quotelev1">&gt; (int)orte_proc_info.my_port);
</span><br>
<span class="quotelev1">&gt;  opal_output(0, &quot;contact info %s&quot;, uri);
</span><br>
<span class="quotelev1">&gt;          opal_dss.pack(&amp;buf, &amp;uri, 1, OPAL_STRING);
</span><br>
<span class="quotelev1">&gt;          free(proc_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/slurmd/ess_slurmd_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/slurmd/ess_slurmd_component.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/slurmd/ess_slurmd_component.c    2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -74,10 +74,10 @@
</span><br>
<span class="quotelev1">&gt;       * by mpirun but are in a slurm world
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.mpi_proc &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.mpi_proc &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          NULL != getenv(&quot;SLURM_JOBID&quot;) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          NULL != getenv(&quot;SLURM_STEPID&quot;) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        NULL == orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +        NULL == orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt;          *priority = 30;
</span><br>
<span class="quotelev1">&gt;          *module = (mca_base_module_t *)&amp;orte_ess_slurmd_module;
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/slurmd/ess_slurmd_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/slurmd/ess_slurmd_module.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/slurmd/ess_slurmd_module.c       2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -168,7 +168,7 @@
</span><br>
<span class="quotelev1">&gt;          error = &quot;could not get SLURM_STEP_NUM_TASKS&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.num_procs = strtol(envar, NULL, 10);
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.num_procs = strtol(envar, NULL, 10);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* get my local nodeid */
</span><br>
<span class="quotelev1">&gt;      if (NULL == (envar = getenv(&quot;SLURM_NODEID&quot;))) {
</span><br>
<span class="quotelev1">&gt; @@ -207,7 +207,7 @@
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      num_nodes = opal_argv_count(nodes);
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.num_nodes = num_nodes;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.num_nodes = num_nodes;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* compute the ppn */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (ret = orte_regex_extract_ppn(num_nodes,  
</span><br>
<span class="quotelev1">&gt; tasks_per_node, &amp;ppn))) {
</span><br>
<span class="quotelev1">&gt; @@ -245,7 +245,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* set the size of the nidmap storage so we minimize realloc's */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; opal_pointer_array_set_size(&amp;orte_nidmap,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_nodes))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; opal_pointer_array_set_size(&amp;orte_nidmap,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.num_nodes))) {
</span><br>
<span class="quotelev1">&gt;          error = &quot;could not set pointer array size for nidmap&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -264,7 +264,7 @@
</span><br>
<span class="quotelev1">&gt;      jmap-&gt;job = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;      opal_pointer_array_add(&amp;orte_jobmap, jmap);
</span><br>
<span class="quotelev1">&gt;      /* update the num procs */
</span><br>
<span class="quotelev1">&gt; -    jmap-&gt;num_procs = orte_process_info.num_procs;
</span><br>
<span class="quotelev1">&gt; +    jmap-&gt;num_procs = orte_proc_info.num_procs;
</span><br>
<span class="quotelev1">&gt;      /* set the size of the pidmap storage so we minimize realloc's */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (ret = opal_pointer_array_set_size(&amp;jmap- 
</span><br>
<span class="quotelev2">&gt; &gt;pmap, jmap-&gt;num_procs))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; @@ -301,8 +301,8 @@
</span><br>
<span class="quotelev1">&gt;      } else if (cyclic) {
</span><br>
<span class="quotelev1">&gt;          /* cycle across the nodes */
</span><br>
<span class="quotelev1">&gt;          vpid = 0;
</span><br>
<span class="quotelev1">&gt; -        while (vpid &lt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev1">&gt; -            for (i=0; i &lt; num_nodes &amp;&amp; vpid &lt;  
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs; i++) {
</span><br>
<span class="quotelev1">&gt; +        while (vpid &lt; orte_proc_info.num_procs) {
</span><br>
<span class="quotelev1">&gt; +            for (i=0; i &lt; num_nodes &amp;&amp; vpid &lt;  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.num_procs; i++) {
</span><br>
<span class="quotelev1">&gt;                  if (0 &lt; ppn[i]) {
</span><br>
<span class="quotelev1">&gt;                      node = (orte_nid_t*)orte_nidmap.addr[i];
</span><br>
<span class="quotelev1">&gt;                      pmap = OBJ_NEW(orte_pmap_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/tool/ess_tool_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/tool/ess_tool_component.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/tool/ess_tool_component.c        2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -74,7 +74,7 @@
</span><br>
<span class="quotelev1">&gt;       * precedence. This would happen, for example,
</span><br>
<span class="quotelev1">&gt;       * if the tool is a distributed set of processes
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;         *priority = 10;
</span><br>
<span class="quotelev1">&gt;          *module = (mca_base_module_t *)&amp;orte_ess_tool_module;
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/filem/base/filem_base_fns.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/filem/base/filem_base_fns.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/filem/base/filem_base_fns.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -225,7 +225,7 @@
</span><br>
<span class="quotelev1">&gt;      /* set default answer */
</span><br>
<span class="quotelev1">&gt;      *machine_name = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          /* if I am the HNP, then all the data structures are local  
</span><br>
<span class="quotelev1">&gt; to me - no
</span><br>
<span class="quotelev1">&gt;           * need to send messages around to get the info
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/filem/base/filem_base_receive.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/filem/base/filem_base_receive.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/filem/base/filem_base_receive.c      2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -68,7 +68,7 @@
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Only active in HNP and daemons */
</span><br>
<span class="quotelev1">&gt; -    if( !orte_process_info.hnp &amp;&amp; !orte_process_info.daemon ) {
</span><br>
<span class="quotelev1">&gt; +    if( !orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon ) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      if ( recv_issued ) {
</span><br>
<span class="quotelev1">&gt; @@ -98,7 +98,7 @@
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Only active in HNP and daemons */
</span><br>
<span class="quotelev1">&gt; -    if( !orte_process_info.hnp &amp;&amp; !orte_process_info.daemon ) {
</span><br>
<span class="quotelev1">&gt; +    if( !orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon ) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      if ( recv_issued ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/filem/rsh/filem_rsh_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/filem/rsh/filem_rsh_module.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/filem/rsh/filem_rsh_module.c 2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -622,7 +622,7 @@
</span><br>
<span class="quotelev1">&gt;                                           f_set-&gt;remote_target));
</span><br>
<span class="quotelev1">&gt;                      orte_show_help(&quot;help-orte-filem-rsh.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                     &quot;orte-filem-rsh:get-file-not- 
</span><br>
<span class="quotelev1">&gt; exist&quot;,
</span><br>
<span class="quotelev1">&gt; -                                   true, f_set-&gt;local_target,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                                   true, f_set-&gt;local_target,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;                      request-&gt;is_done[cur_index]     = true;
</span><br>
<span class="quotelev1">&gt;                      request-&gt;is_active[cur_index]   = true;
</span><br>
<span class="quotelev1">&gt;                      request-&gt;exit_status[cur_index] = -1;
</span><br>
<span class="quotelev1">&gt; @@ -645,7 +645,7 @@
</span><br>
<span class="quotelev1">&gt;                                           f_set-&gt;local_target));
</span><br>
<span class="quotelev1">&gt;                      orte_show_help(&quot;help-orte-filem-rsh.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                     &quot;orte-filem-rsh:get-file-exists&quot;,
</span><br>
<span class="quotelev1">&gt; -                                   true, f_set-&gt;local_target,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                                   true, f_set-&gt;local_target,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;                      request-&gt;is_done[cur_index]     = true;
</span><br>
<span class="quotelev1">&gt;                      request-&gt;is_active[cur_index]   = true;
</span><br>
<span class="quotelev1">&gt;                      request-&gt;exit_status[cur_index] = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c     2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -88,7 +88,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if we are a daemon or the hnp, we need to post a
</span><br>
<span class="quotelev1">&gt;       * recv to catch any collective operations
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon || orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon || orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt;                                                             
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON_COLLECTIVE,
</span><br>
<span class="quotelev1">&gt;                                                             
</span><br>
<span class="quotelev1">&gt; ORTE_RML_NON_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; @@ -111,7 +111,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if we are a daemon or the hnp, we need to cancel the
</span><br>
<span class="quotelev1">&gt;       * recv we posted
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon || orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon || orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          orte_rml.recv_cancel(ORTE_NAME_WILDCARD,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON_COLLECTIVE);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -203,7 +203,7 @@
</span><br>
<span class="quotelev1">&gt;       * fire right away, but that's okay
</span><br>
<span class="quotelev1">&gt;       * The macro makes a copy of the buffer, so it's okay to  
</span><br>
<span class="quotelev1">&gt; release it here
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;buf,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON, orte_daemon_cmd_processor);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, send it to the HNP for relay */
</span><br>
<span class="quotelev1">&gt; @@ -542,7 +542,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (jobdat-&gt;num_collected == jobdat-&gt;num_participating) {
</span><br>
<span class="quotelev1">&gt;          /* if I am the HNP, go process the results */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;              goto hnp_process;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/grpcomm/base/grpcomm_base_modex.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/grpcomm/base/grpcomm_base_modex.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/grpcomm/base/grpcomm_base_modex.c    2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -79,7 +79,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* pack our hostname */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = opal_dss.pack(&amp;buf,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_process_info.nodename, 1, OPAL_STRING))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = opal_dss.pack(&amp;buf,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_proc_info.nodename, 1, OPAL_STRING))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          goto cleanup;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -91,7 +91,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* pack our arch */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = opal_dss.pack(&amp;buf,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_process_info.arch, 1, OPAL_UINT32))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = opal_dss.pack(&amp;buf,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_proc_info.arch, 1, OPAL_UINT32))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          goto cleanup;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -350,7 +350,7 @@
</span><br>
<span class="quotelev1">&gt;          goto cleanup;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = opal_dss.pack(&amp;buf,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_process_info.arch, 1, OPAL_UINT32))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = opal_dss.pack(&amp;buf,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_proc_info.arch, 1, OPAL_UINT32))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          goto cleanup;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c 2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -104,17 +104,17 @@
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (opal_profile &amp;&amp; orte_process_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt; +    if (opal_profile &amp;&amp; orte_proc_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt;          /* if I am an MPI application proc, then create a buffer
</span><br>
<span class="quotelev1">&gt;           * to pack all my attributes in */
</span><br>
<span class="quotelev1">&gt;          profile_buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt;          /* seed it with the node name */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc = opal_dss.pack(profile_buf,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_process_info.nodename, 1, OPAL_STRING))) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc = opal_dss.pack(profile_buf,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_proc_info.nodename, 1, OPAL_STRING))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp &amp;&amp; recv_on) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp &amp;&amp; recv_on) {
</span><br>
<span class="quotelev1">&gt;          /* open the profile file for writing */
</span><br>
<span class="quotelev1">&gt;          if (NULL == opal_profile_file) {
</span><br>
<span class="quotelev1">&gt;              /* no file specified - we will just ignore any incoming  
</span><br>
<span class="quotelev1">&gt; data */
</span><br>
<span class="quotelev1">&gt; @@ -140,7 +140,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if we are a daemon or the hnp, we need to post a
</span><br>
<span class="quotelev1">&gt;       * recv to catch any collective operations
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon || orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon || orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt;                                                             
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON_COLLECTIVE,
</span><br>
<span class="quotelev1">&gt;                                                             
</span><br>
<span class="quotelev1">&gt; ORTE_RML_NON_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; @@ -163,7 +163,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      orte_grpcomm_base_modex_finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (opal_profile &amp;&amp; orte_process_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt; +    if (opal_profile &amp;&amp; orte_proc_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt;          /* if I am an MPI proc, send my buffer to the collector */
</span><br>
<span class="quotelev1">&gt;          boptr = &amp;bo;
</span><br>
<span class="quotelev1">&gt;          opal_dss.unload(profile_buf, (void**)&amp;boptr-&gt;bytes, &amp;boptr- 
</span><br>
<span class="quotelev2">&gt; &gt;size);
</span><br>
<span class="quotelev1">&gt; @@ -177,7 +177,7 @@
</span><br>
<span class="quotelev1">&gt;          OBJ_DESTRUCT(&amp;profile);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp &amp;&amp; recv_on) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp &amp;&amp; recv_on) {
</span><br>
<span class="quotelev1">&gt;          /* if we are profiling and I am the HNP, then stop the
</span><br>
<span class="quotelev1">&gt;           * profiling receive
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; @@ -191,7 +191,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if we are a daemon or the hnp, we need to cancel the
</span><br>
<span class="quotelev1">&gt;       * recv we posted
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon || orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon || orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          orte_rml.recv_cancel(ORTE_NAME_WILDCARD,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON_COLLECTIVE);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -283,7 +283,7 @@
</span><br>
<span class="quotelev1">&gt;       * fire right away, but that's okay
</span><br>
<span class="quotelev1">&gt;       * The macro makes a copy of the buffer, so it's okay to  
</span><br>
<span class="quotelev1">&gt; release it here
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;buf,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON, orte_daemon_cmd_processor);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, send it to the HNP for relay */
</span><br>
<span class="quotelev1">&gt; @@ -930,7 +930,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (jobdat-&gt;num_collected == jobdat-&gt;num_participating) {
</span><br>
<span class="quotelev1">&gt;          /* if I am the HNP, go process the results */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;              goto hnp_process;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c   2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -209,7 +209,7 @@
</span><br>
<span class="quotelev1">&gt;       * fire right away, but that's okay
</span><br>
<span class="quotelev1">&gt;       * The macro makes a copy of the buffer, so it's okay to  
</span><br>
<span class="quotelev1">&gt; release it here
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;buf,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON, orte_daemon_cmd_processor);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          /* otherwise, send it to the HNP for relay */
</span><br>
<span class="quotelev1">&gt; @@ -317,13 +317,13 @@
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt;          if (0 == my_local_rank) {
</span><br>
<span class="quotelev1">&gt;              /* we need one entry/node in this job */
</span><br>
<span class="quotelev1">&gt; -            my_coll_peers =  
</span><br>
<span class="quotelev1">&gt; (orte_vpid_t*)malloc(orte_process_info.num_nodes *  
</span><br>
<span class="quotelev1">&gt; sizeof(orte_vpid_t));
</span><br>
<span class="quotelev1">&gt; +            my_coll_peers =  
</span><br>
<span class="quotelev1">&gt; (orte_vpid_t*)malloc(orte_proc_info.num_nodes * sizeof(orte_vpid_t));
</span><br>
<span class="quotelev1">&gt;              cpeers = 0;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* cycle through the procs to create a list of those that  
</span><br>
<span class="quotelev1">&gt; are local to me */
</span><br>
<span class="quotelev1">&gt;          proc.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt; -        for (v=0; v &lt; orte_process_info.num_procs; v++) {
</span><br>
<span class="quotelev1">&gt; +        for (v=0; v &lt; orte_proc_info.num_procs; v++) {
</span><br>
<span class="quotelev1">&gt;              proc.vpid = v;
</span><br>
<span class="quotelev1">&gt;              /* is this proc local_rank=0 on its node? */
</span><br>
<span class="quotelev1">&gt;              if (0 == my_local_rank &amp;&amp; 0 ==  
</span><br>
<span class="quotelev1">&gt; orte_ess.get_local_rank(&amp;proc)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/iof/base/iof_base_close.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/iof/base/iof_base_close.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/iof/base/iof_base_close.c    2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -47,7 +47,7 @@
</span><br>
<span class="quotelev1">&gt;      OBJ_DESTRUCT(&amp;orte_iof_base.iof_components_opened);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_LOCK(&amp;orte_iof_base.iof_write_output_lock);
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          /* check if anything is still trying to be written out */
</span><br>
<span class="quotelev1">&gt;          wev = orte_iof_base.iof_write_stdout-&gt;wev;
</span><br>
<span class="quotelev1">&gt;          if (!opal_list_is_empty(&amp;wev-&gt;outputs)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/iof/base/iof_base_open.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/iof/base/iof_base_open.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/iof/base/iof_base_open.c     2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -192,7 +192,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* daemons do not need to do this as they do not write out  
</span><br>
<span class="quotelev1">&gt; stdout/err */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          /* setup the stdout event */
</span><br>
<span class="quotelev1">&gt;          ORTE_IOF_SINK_DEFINE(&amp;orte_iof_base.iof_write_stdout,  
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_NAME,
</span><br>
<span class="quotelev1">&gt;                               1, ORTE_IOF_STDOUT,  
</span><br>
<span class="quotelev1">&gt; orte_iof_base_write_handler, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/iof/hnp/iof_hnp_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/iof/hnp/iof_hnp_component.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/iof/hnp/iof_hnp_component.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -131,7 +131,7 @@
</span><br>
<span class="quotelev1">&gt;      *priority = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if we are not the HNP, then don't use this module */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/iof/orted/iof_orted_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/iof/orted/iof_orted_component.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/iof/orted/iof_orted_component.c      2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -115,7 +115,7 @@
</span><br>
<span class="quotelev1">&gt;      *priority = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if we are not a daemon, then don't use this module */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/iof/tool/iof_tool_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/iof/tool/iof_tool_component.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/iof/tool/iof_tool_component.c        2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -106,7 +106,7 @@
</span><br>
<span class="quotelev1">&gt;      *priority = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if we are not a tool, then don't use this module */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/notifier/syslog/notifier_syslog_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/notifier/syslog/notifier_syslog_module.c      
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/notifier/syslog/notifier_syslog_module.c      
</span><br>
<span class="quotelev1">&gt; 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -119,7 +119,7 @@
</span><br>
<span class="quotelev1">&gt;                     peer_name ? peer_name : &quot;UNKNOWN&quot;,
</span><br>
<span class="quotelev1">&gt;                     peer_host ? peer_host : &quot;UNKNOWN&quot;,
</span><br>
<span class="quotelev1">&gt;                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; -                   orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                   orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;      space -= len;
</span><br>
<span class="quotelev1">&gt;      pos += len;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/odls/base/odls_base_default_fns.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/odls/base/odls_base_default_fns.c    2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -662,7 +662,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if we are the HNP, then we would rather not send this to  
</span><br>
<span class="quotelev1">&gt; ourselves -
</span><br>
<span class="quotelev1">&gt;       * instead, we queue it up for local processing
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;alert,
</span><br>
<span class="quotelev1">&gt;                             ORTE_RML_TAG_APP_LAUNCH_CALLBACK,
</span><br>
<span class="quotelev1">&gt;                             orte_plm_base_app_report_launch);
</span><br>
<span class="quotelev1">&gt; @@ -759,14 +759,14 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* pass my contact info to the local proc so we can talk */
</span><br>
<span class="quotelev1">&gt;      param =  
</span><br>
<span class="quotelev1">&gt; mca_base_param_environ_variable(&quot;orte&quot;,&quot;local_daemon&quot;,&quot;uri&quot;);
</span><br>
<span class="quotelev1">&gt; -    opal_setenv(param, orte_process_info.my_daemon_uri, true,  
</span><br>
<span class="quotelev1">&gt; environ_copy);
</span><br>
<span class="quotelev1">&gt; +    opal_setenv(param, orte_proc_info.my_daemon_uri, true,  
</span><br>
<span class="quotelev1">&gt; environ_copy);
</span><br>
<span class="quotelev1">&gt;      free(param);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* pass the hnp's contact info to the local proc in case it
</span><br>
<span class="quotelev1">&gt;       * needs it
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      param = mca_base_param_environ_variable(&quot;orte&quot;,&quot;hnp&quot;,&quot;uri&quot;);
</span><br>
<span class="quotelev1">&gt; -    opal_setenv(param, orte_process_info.my_hnp_uri, true,  
</span><br>
<span class="quotelev1">&gt; environ_copy);
</span><br>
<span class="quotelev1">&gt; +    opal_setenv(param, orte_proc_info.my_hnp_uri, true,  
</span><br>
<span class="quotelev1">&gt; environ_copy);
</span><br>
<span class="quotelev1">&gt;      free(param);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup yield schedule - do not override any user-supplied  
</span><br>
<span class="quotelev1">&gt; directive! */
</span><br>
<span class="quotelev1">&gt; @@ -1419,7 +1419,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if we are the HNP, then we would rather not send this to  
</span><br>
<span class="quotelev1">&gt; ourselves -
</span><br>
<span class="quotelev1">&gt;       * instead, we queue it up for local processing
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;alert,
</span><br>
<span class="quotelev1">&gt;                             ORTE_RML_TAG_APP_LAUNCH_CALLBACK,
</span><br>
<span class="quotelev1">&gt;                             orte_plm_base_app_report_launch);
</span><br>
<span class="quotelev1">&gt; @@ -1817,7 +1817,7 @@
</span><br>
<span class="quotelev1">&gt;          /* if we are the HNP, then we would rather not send this to  
</span><br>
<span class="quotelev1">&gt; ourselves -
</span><br>
<span class="quotelev1">&gt;           * instead, we queue it up for local processing
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;              ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;buffer,
</span><br>
<span class="quotelev1">&gt;                                 ORTE_RML_TAG_INIT_ROUTES,
</span><br>
<span class="quotelev1">&gt;                                 orte_routed_base_process_msg);
</span><br>
<span class="quotelev1">&gt; @@ -1923,7 +1923,7 @@
</span><br>
<span class="quotelev1">&gt;          /* if we are the HNP, then we would rather not send this to  
</span><br>
<span class="quotelev1">&gt; ourselves -
</span><br>
<span class="quotelev1">&gt;           * instead, we queue it up for local processing
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;              ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;alert,
</span><br>
<span class="quotelev1">&gt;                                 ORTE_RML_TAG_PLM,
</span><br>
<span class="quotelev1">&gt;                                 orte_plm_base_receive_process_msg);
</span><br>
<span class="quotelev1">&gt; @@ -1992,7 +1992,7 @@
</span><br>
<span class="quotelev1">&gt;              /* if we are the HNP, then we would rather not send  
</span><br>
<span class="quotelev1">&gt; this to ourselves -
</span><br>
<span class="quotelev1">&gt;               * instead, we queue it up for local processing
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +            if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;                  ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;alert,
</span><br>
<span class="quotelev1">&gt;                                     ORTE_RML_TAG_PLM,
</span><br>
<span class="quotelev1">&gt;                                      
</span><br>
<span class="quotelev1">&gt; orte_plm_base_receive_process_msg);
</span><br>
<span class="quotelev1">&gt; @@ -2142,8 +2142,8 @@
</span><br>
<span class="quotelev1">&gt;              free(job);
</span><br>
<span class="quotelev1">&gt;              goto MOVEON;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -        abort_file = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                                  orte_process_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt; +        abort_file = opal_os_path(false, orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                                  orte_proc_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt;                                    job, vpid, &quot;abort&quot;, NULL );
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((5, orte_odls_globals.output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s odls:waitpid_fired checking abort  
</span><br>
<span class="quotelev1">&gt; file %s&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -2431,7 +2431,7 @@
</span><br>
<span class="quotelev1">&gt;          if (0 != (err = kill_local(child-&gt;pid, SIGTERM))) {
</span><br>
<span class="quotelev1">&gt;              orte_show_help(&quot;help-odls-default.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                             &quot;odls-default:could-not-send-kill&quot;,
</span><br>
<span class="quotelev1">&gt; -                           true, orte_process_info.nodename, child- 
</span><br>
<span class="quotelev2">&gt; &gt;pid, err);
</span><br>
<span class="quotelev1">&gt; +                           true, orte_proc_info.nodename, child- 
</span><br>
<span class="quotelev2">&gt; &gt;pid, err);
</span><br>
<span class="quotelev1">&gt;              /* check the proc state - ensure it is in one of the  
</span><br>
<span class="quotelev1">&gt; termination
</span><br>
<span class="quotelev1">&gt;               * states so that we properly wakeup
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; @@ -2457,7 +2457,7 @@
</span><br>
<span class="quotelev1">&gt;              if (!child_died(child-&gt;pid,  
</span><br>
<span class="quotelev1">&gt; orte_odls_globals.timeout_before_sigkill, &amp;exit_status)) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-odls-default.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;odls-default:could-not-kill&quot;,
</span><br>
<span class="quotelev1">&gt; -                               true, orte_process_info.nodename,  
</span><br>
<span class="quotelev1">&gt; child-&gt;pid);
</span><br>
<span class="quotelev1">&gt; +                               true, orte_proc_info.nodename, child- 
</span><br>
<span class="quotelev2">&gt; &gt;pid);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((5, orte_odls_globals.output,
</span><br>
<span class="quotelev1">&gt; @@ -2486,7 +2486,7 @@
</span><br>
<span class="quotelev1">&gt;          /* if we are the HNP, then we would rather not send this to  
</span><br>
<span class="quotelev1">&gt; ourselves -
</span><br>
<span class="quotelev1">&gt;           * instead, we queue it up for local processing
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;              ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;alert,
</span><br>
<span class="quotelev1">&gt;                                 ORTE_RML_TAG_PLM,
</span><br>
<span class="quotelev1">&gt;                                 orte_plm_base_receive_process_msg);
</span><br>
<span class="quotelev1">&gt; @@ -2538,10 +2538,10 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              OBJ_CONSTRUCT(&amp;stats, opal_pstats_t);
</span><br>
<span class="quotelev1">&gt;              /* record node up to first '.' */
</span><br>
<span class="quotelev1">&gt; -            for (j=0; j &lt; (int)strlen(orte_process_info.nodename) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +            for (j=0; j &lt; (int)strlen(orte_proc_info.nodename) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;                   j &lt; OPAL_PSTAT_MAX_STRING_LEN-1 &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                 orte_process_info.nodename[j] != '.'; j++) {
</span><br>
<span class="quotelev1">&gt; -                stats.node[j] = orte_process_info.nodename[j];
</span><br>
<span class="quotelev1">&gt; +                 orte_proc_info.nodename[j] != '.'; j++) {
</span><br>
<span class="quotelev1">&gt; +                stats.node[j] = orte_proc_info.nodename[j];
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              /* record rank */
</span><br>
<span class="quotelev1">&gt;              stats.rank = child-&gt;name-&gt;vpid;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/odls/base/odls_base_state.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/odls/base/odls_base_state.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/odls/base/odls_base_state.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -70,7 +70,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Define the process set */
</span><br>
<span class="quotelev1">&gt;      p_set = OBJ_NEW(orte_filem_base_process_set_t);
</span><br>
<span class="quotelev1">&gt; -    if( orte_process_info.hnp ) {
</span><br>
<span class="quotelev1">&gt; +    if( orte_proc_info.hnp ) {
</span><br>
<span class="quotelev1">&gt;          /* if I am the HNP, then use me as the source */
</span><br>
<span class="quotelev1">&gt;          p_set-&gt;source.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;          p_set-&gt;source.vpid  = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; @@ -152,7 +152,7 @@
</span><br>
<span class="quotelev1">&gt;      f_set = OBJ_NEW(orte_filem_base_file_set_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Local Placement */
</span><br>
<span class="quotelev1">&gt; -    asprintf(&amp;local_bin, &quot;%s/%s&quot;,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.job_session_dir, opal_basename(context-&gt;app));
</span><br>
<span class="quotelev1">&gt; +    asprintf(&amp;local_bin, &quot;%s/%s&quot;, orte_proc_info.job_session_dir,  
</span><br>
<span class="quotelev1">&gt; opal_basename(context-&gt;app));
</span><br>
<span class="quotelev1">&gt;      if(orte_odls_base_is_preload_local_dup(local_bin,  
</span><br>
<span class="quotelev1">&gt; filem_request) ) {
</span><br>
<span class="quotelev1">&gt;          goto cleanup;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -222,7 +222,7 @@
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              /* If this is the HNP, then source = sink, so use the  
</span><br>
<span class="quotelev1">&gt; same path for each local and remote */
</span><br>
<span class="quotelev1">&gt; -            if( orte_process_info.hnp ) {
</span><br>
<span class="quotelev1">&gt; +            if( orte_proc_info.hnp ) {
</span><br>
<span class="quotelev1">&gt;                  free(remote_targets[i]);
</span><br>
<span class="quotelev1">&gt;                  remote_targets[i] = strdup(local_ref);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/odls/bproc/odls_bproc.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/odls/bproc/odls_bproc.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/odls/bproc/odls_bproc.c      2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -136,7 +136,7 @@
</span><br>
<span class="quotelev1">&gt;                                     false, false, NULL, &amp;user);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (0 &gt; asprintf(&amp;frontend,  
</span><br>
<span class="quotelev1">&gt; OPAL_PATH_SEP&quot;%s&quot;OPAL_PATH_SEP&quot;openmpi-bproc-%s&quot;,
</span><br>
<span class="quotelev1">&gt; -                     orte_process_info.tmpdir_base, user)) {
</span><br>
<span class="quotelev1">&gt; +                     orte_proc_info.tmpdir_base, user)) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ORTE_ERROR);
</span><br>
<span class="quotelev1">&gt;          path = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -524,7 +524,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      orte_iof.iof_flush();
</span><br>
<span class="quotelev1">&gt;      odls_bproc_remove_dir();
</span><br>
<span class="quotelev1">&gt; -    orte_session_dir_finalize(orte_process_info.my_name);
</span><br>
<span class="quotelev1">&gt; +    orte_session_dir_finalize(orte_proc_info.my_name);
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/oob/tcp/oob_tcp.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp.c    2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -546,14 +546,14 @@
</span><br>
<span class="quotelev1">&gt;         port in the range.  Otherwise, tcp_port_min will be 0, which
</span><br>
<span class="quotelev1">&gt;         means &quot;pick any port&quot; */
</span><br>
<span class="quotelev1">&gt;      if (AF_INET == af_family) {
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              /* if static ports were provided, the daemon takes the
</span><br>
<span class="quotelev1">&gt;               * first entry in the list - otherwise, we &quot;pick any  
</span><br>
<span class="quotelev1">&gt; port&quot;
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt;              if (NULL != mca_oob_tcp_component.tcp4_static_ports) {
</span><br>
<span class="quotelev1">&gt;                  port =  
</span><br>
<span class="quotelev1">&gt; strtol(mca_oob_tcp_component.tcp4_static_ports[0], NULL, 10);
</span><br>
<span class="quotelev1">&gt;                  /* save the port for later use */
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.my_port = port;
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.my_port = port;
</span><br>
<span class="quotelev1">&gt;                  /* convert it to network-byte-order */
</span><br>
<span class="quotelev1">&gt;                  port = htons(port);
</span><br>
<span class="quotelev1">&gt;                  /* flag that we are using static ports */
</span><br>
<span class="quotelev1">&gt; @@ -562,7 +562,7 @@
</span><br>
<span class="quotelev1">&gt;                  port = 0;
</span><br>
<span class="quotelev1">&gt;                  orte_static_ports = false;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; -        } else if (orte_process_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt; +        } else if (orte_proc_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt;              /* if static ports were provided, an mpi proc takes its
</span><br>
<span class="quotelev1">&gt;               * node_local_rank entry in the list IF it has that info
</span><br>
<span class="quotelev1">&gt;               * AND enough ports were provided - otherwise, we &quot;pick  
</span><br>
<span class="quotelev1">&gt; any port&quot;
</span><br>
<span class="quotelev1">&gt; @@ -575,7 +575,7 @@
</span><br>
<span class="quotelev1">&gt;                      /* any daemon takes the first entry, so we  
</span><br>
<span class="quotelev1">&gt; start with the second */
</span><br>
<span class="quotelev1">&gt;                      port =  
</span><br>
<span class="quotelev1">&gt; strtol(mca_oob_tcp_component.tcp4_static_ports[nrank+1], NULL, 10);
</span><br>
<span class="quotelev1">&gt;                      /* save the port for later use */
</span><br>
<span class="quotelev1">&gt; -                    orte_process_info.my_port = port;
</span><br>
<span class="quotelev1">&gt; +                    orte_proc_info.my_port = port;
</span><br>
<span class="quotelev1">&gt;                      /* convert it to network-byte-order */
</span><br>
<span class="quotelev1">&gt;                      port = htons(port);
</span><br>
<span class="quotelev1">&gt;                      /* flag that we are using static ports */
</span><br>
<span class="quotelev1">&gt; @@ -599,14 +599,14 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;      if (AF_INET6 == af_family) {
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              /* if static ports were provided, the daemon takes the
</span><br>
<span class="quotelev1">&gt;               * first entry in the list - otherwise, we &quot;pick any  
</span><br>
<span class="quotelev1">&gt; port&quot;
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt;              if (NULL != mca_oob_tcp_component.tcp6_static_ports) {
</span><br>
<span class="quotelev1">&gt;                  port =  
</span><br>
<span class="quotelev1">&gt; strtol(mca_oob_tcp_component.tcp6_static_ports[0], NULL, 10);
</span><br>
<span class="quotelev1">&gt;                  /* save the port for later use */
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.my_port = port;
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.my_port = port;
</span><br>
<span class="quotelev1">&gt;                  /* convert it to network-byte-order */
</span><br>
<span class="quotelev1">&gt;                  port = htons(port);
</span><br>
<span class="quotelev1">&gt;                  /* flag that we are using static ports */
</span><br>
<span class="quotelev1">&gt; @@ -615,7 +615,7 @@
</span><br>
<span class="quotelev1">&gt;                  port = 0;
</span><br>
<span class="quotelev1">&gt;                  orte_static_ports = false;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; -        } else if (orte_process_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt; +        } else if (orte_proc_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt;              /* if static ports were provided, an mpi proc takes its
</span><br>
<span class="quotelev1">&gt;               * node_local_rank entry in the list IF it has that info
</span><br>
<span class="quotelev1">&gt;               * AND enough ports were provided - otherwise, we &quot;pick  
</span><br>
<span class="quotelev1">&gt; any port&quot;
</span><br>
<span class="quotelev1">&gt; @@ -628,7 +628,7 @@
</span><br>
<span class="quotelev1">&gt;                      /* any daemon takes the first entry, so we  
</span><br>
<span class="quotelev1">&gt; start with the second */
</span><br>
<span class="quotelev1">&gt;                      port =  
</span><br>
<span class="quotelev1">&gt; strtol(mca_oob_tcp_component.tcp6_static_ports[nrank+1], NULL, 10);
</span><br>
<span class="quotelev1">&gt;                      /* save the port for later use */
</span><br>
<span class="quotelev1">&gt; -                    orte_process_info.my_port = port;
</span><br>
<span class="quotelev1">&gt; +                    orte_proc_info.my_port = port;
</span><br>
<span class="quotelev1">&gt;                      /* convert it to network-byte-order */
</span><br>
<span class="quotelev1">&gt;                      port = htons(port);
</span><br>
<span class="quotelev1">&gt;                      /* flag that we are using static ports */
</span><br>
<span class="quotelev1">&gt; @@ -701,7 +701,7 @@
</span><br>
<span class="quotelev1">&gt;          /* if we dynamically assigned the port, save it here,
</span><br>
<span class="quotelev1">&gt;           * remembering to convert it back from network byte order  
</span><br>
<span class="quotelev1">&gt; first
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_port = ntohs(*target_port);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_port = ntohs(*target_port);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup listen backlog to maximum allowed by kernel */
</span><br>
<span class="quotelev1">&gt; @@ -1368,7 +1368,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      orte_jobid_t jobid;
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt; -    int randval = orte_process_info.num_procs;
</span><br>
<span class="quotelev1">&gt; +    int randval = orte_proc_info.num_procs;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (0 == randval) randval = 10;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -1387,10 +1387,10 @@
</span><br>
<span class="quotelev1">&gt;      jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Fix up the listen type.  This is the first call into the OOB  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; -       which the orte_process_info.hnp field is reliably set.  The
</span><br>
<span class="quotelev1">&gt; +       which the orte_proc_info.hnp field is reliably set.  The
</span><br>
<span class="quotelev1">&gt;         listen_mode should only be listen_thread for the HNP -- all
</span><br>
<span class="quotelev1">&gt;         others should use the traditional event library. */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          mca_oob_tcp_component.tcp_listen_type = OOB_TCP_EVENT;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp_msg.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/oob/tcp/oob_tcp_msg.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp_msg.c        2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -478,7 +478,7 @@
</span><br>
<span class="quotelev1">&gt;       * another job family - procs dont' need to do this because
</span><br>
<span class="quotelev1">&gt;       * they always route through their daemons anyway
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.mpi_proc) {
</span><br>
<span class="quotelev1">&gt;          if ((ORTE_JOB_FAMILY(msg-&gt;msg_hdr.msg_origin.jobid) !=
</span><br>
<span class="quotelev1">&gt;               ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid)) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;              (0 != ORTE_JOB_FAMILY(msg-&gt;msg_hdr.msg_origin.jobid))) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_close.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_close.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_close.c    2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -39,7 +39,7 @@
</span><br>
<span class="quotelev1">&gt;      orte_plm.finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if we are the HNP, then stop our receive */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (rc = orte_plm_base_comm_stop())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_jobid.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_jobid.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_jobid.c    2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -41,9 +41,9 @@
</span><br>
<span class="quotelev1">&gt;      uint32_t bias;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* hash the nodename */
</span><br>
<span class="quotelev1">&gt; -    OPAL_HASH_STR(orte_process_info.nodename, hash32);
</span><br>
<span class="quotelev1">&gt; +    OPAL_HASH_STR(orte_proc_info.nodename, hash32);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    bias = (uint32_t)orte_process_info.pid;
</span><br>
<span class="quotelev1">&gt; +    bias = (uint32_t)orte_proc_info.pid;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt;                           &quot;plm:base:set_hnp_name: initial bias %ld  
</span><br>
<span class="quotelev1">&gt; nodename hash %lu&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c   2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -151,7 +151,7 @@
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.num_procs != jdatorted-&gt;num_procs) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.num_procs != jdatorted-&gt;num_procs) {
</span><br>
<span class="quotelev1">&gt;          /* more daemons are being launched - update the routing  
</span><br>
<span class="quotelev1">&gt; tree to
</span><br>
<span class="quotelev1">&gt;           * ensure that the HNP knows how to route messages via
</span><br>
<span class="quotelev1">&gt;           * the daemon routing tree - this needs to be done
</span><br>
<span class="quotelev1">&gt; @@ -159,7 +159,7 @@
</span><br>
<span class="quotelev1">&gt;           * hasn't unpacked its launch message prior to being
</span><br>
<span class="quotelev1">&gt;           * asked to communicate.
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.num_procs = jdatorted-&gt;num_procs;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.num_procs = jdatorted-&gt;num_procs;
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_routed.update_routing_tree())) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -1012,11 +1012,11 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* pass the total number of daemons that will be in the system */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          jdata = orte_get_job_data_object(ORTE_PROC_MY_NAME-&gt;jobid);
</span><br>
<span class="quotelev1">&gt;          num_procs = jdata-&gt;num_procs;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt; -        num_procs = orte_process_info.num_procs;
</span><br>
<span class="quotelev1">&gt; +        num_procs = orte_proc_info.num_procs;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      opal_argv_append(argc, argv, &quot;-mca&quot;);
</span><br>
<span class="quotelev1">&gt;      opal_argv_append(argc, argv, &quot;orte_ess_num_procs&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -1025,10 +1025,10 @@
</span><br>
<span class="quotelev1">&gt;      free(param);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* pass the uri of the hnp */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          rml_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt; -        rml_uri = orte_process_info.my_hnp_uri;
</span><br>
<span class="quotelev1">&gt; +        rml_uri = orte_proc_info.my_hnp_uri;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, rml_uri);
</span><br>
<span class="quotelev1">&gt;      opal_argv_append(argc, argv, &quot;--hnp-uri&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -1039,7 +1039,7 @@
</span><br>
<span class="quotelev1">&gt;       * being sure to &quot;purge&quot; any that would cause problems
</span><br>
<span class="quotelev1">&gt;       * on backend nodes
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          cnt = opal_argv_count(orted_cmd_line);
</span><br>
<span class="quotelev1">&gt;          for (i=0; i &lt; cnt; i+=3) {
</span><br>
<span class="quotelev1">&gt;              /* if the specified option is more than one word, we  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_orted_cmds.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_orted_cmds.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_orted_cmds.c       2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -278,7 +278,7 @@
</span><br>
<span class="quotelev1">&gt;           * fire right away, but that's okay
</span><br>
<span class="quotelev1">&gt;           * The macro makes a copy of the buffer, so it's okay to  
</span><br>
<span class="quotelev1">&gt; release it here
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;              ORTE_MESSAGE_EVENT(ORTE_PROC_MY_NAME, &amp;cmd,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON, orte_daemon_cmd_processor);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_receive.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_receive.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_receive.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -312,7 +312,7 @@
</span><br>
<span class="quotelev1">&gt;      OBJ_DESTRUCT(&amp;answer);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* see if an error occurred - if so, wakeup the HNP so we can  
</span><br>
<span class="quotelev1">&gt; exit */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp &amp;&amp; ORTE_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp &amp;&amp; ORTE_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;          orte_trigger_event(&amp;orte_exit);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_rsh_support.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_rsh_support.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_rsh_support.c      2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -186,7 +186,7 @@
</span><br>
<span class="quotelev1">&gt;      OBJ_DESTRUCT(&amp;hosts);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* is this a local operation? */
</span><br>
<span class="quotelev1">&gt; -    if (0 == strcmp(orte_process_info.nodename, nodename)) {
</span><br>
<span class="quotelev1">&gt; +    if (0 == strcmp(orte_proc_info.nodename, nodename)) {
</span><br>
<span class="quotelev1">&gt;          local_op = true;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -456,7 +456,7 @@
</span><br>
<span class="quotelev1">&gt;       * required to pass existence tests
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      param = mca_base_param_environ_variable(&quot;orte&quot;,&quot;hnp&quot;,&quot;uri&quot;);
</span><br>
<span class="quotelev1">&gt; -    asprintf(&amp;path, &quot;\&quot;%s\&quot;&quot;, orte_process_info.my_hnp_uri);
</span><br>
<span class="quotelev1">&gt; +    asprintf(&amp;path, &quot;\&quot;%s\&quot;&quot;, orte_proc_info.my_hnp_uri);
</span><br>
<span class="quotelev1">&gt;      opal_setenv(param, path, true, &amp;argv);
</span><br>
<span class="quotelev1">&gt;      free(param);
</span><br>
<span class="quotelev1">&gt;      free(path);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_select.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_select.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_select.c   2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -53,7 +53,7 @@
</span><br>
<span class="quotelev1">&gt;           * If we didn't find one, and we are a daemon, then default  
</span><br>
<span class="quotelev1">&gt; to retaining the proxy.
</span><br>
<span class="quotelev1">&gt;           * Otherwise, if we didn't find one to select, that is  
</span><br>
<span class="quotelev1">&gt; unacceptable.
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              /* don't record a selected component or flag selected
</span><br>
<span class="quotelev1">&gt;               * so we finalize correctly - just leave the plm alone
</span><br>
<span class="quotelev1">&gt;               * as it defaults to pointing at the proxy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/bproc/plm_bproc.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/bproc/plm_bproc.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/bproc/plm_bproc.c        2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -356,12 +356,12 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* ns replica contact info */
</span><br>
<span class="quotelev1">&gt; -    if(NULL == orte_process_info.ns_replica) {
</span><br>
<span class="quotelev1">&gt; -        orte_dss.copy((void**)&amp;orte_process_info.ns_replica,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_name, ORTE_NAME);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.ns_replica_uri = orte_rml.get_uri();
</span><br>
<span class="quotelev1">&gt; +    if(NULL == orte_proc_info.ns_replica) {
</span><br>
<span class="quotelev1">&gt; +        orte_dss.copy((void**)&amp;orte_proc_info.ns_replica,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.my_name, ORTE_NAME);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.ns_replica_uri = orte_rml.get_uri();
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      var = mca_base_param_environ_variable(&quot;ns&quot;,&quot;replica&quot;,&quot;uri&quot;);
</span><br>
<span class="quotelev1">&gt; -    opal_setenv(var,orte_process_info.ns_replica_uri, true, env);
</span><br>
<span class="quotelev1">&gt; +    opal_setenv(var,orte_proc_info.ns_replica_uri, true, env);
</span><br>
<span class="quotelev1">&gt;      free(var);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* make sure the username used to create the bproc directory is  
</span><br>
<span class="quotelev1">&gt; the same on
</span><br>
<span class="quotelev1">&gt; @@ -371,12 +371,12 @@
</span><br>
<span class="quotelev1">&gt;      free(var);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* gpr replica contact info */
</span><br>
<span class="quotelev1">&gt; -    if(NULL == orte_process_info.gpr_replica) {
</span><br>
<span class="quotelev1">&gt; -        orte_dss.copy((void**)&amp;orte_process_info.gpr_replica,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_name, ORTE_NAME);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.gpr_replica_uri = orte_rml.get_uri();
</span><br>
<span class="quotelev1">&gt; +    if(NULL == orte_proc_info.gpr_replica) {
</span><br>
<span class="quotelev1">&gt; +        orte_dss.copy((void**)&amp;orte_proc_info.gpr_replica,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.my_name, ORTE_NAME);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.gpr_replica_uri = orte_rml.get_uri();
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      var = mca_base_param_environ_variable(&quot;gpr&quot;,&quot;replica&quot;,&quot;uri&quot;);
</span><br>
<span class="quotelev1">&gt; -    opal_setenv(var,orte_process_info.gpr_replica_uri, true, env);
</span><br>
<span class="quotelev1">&gt; +    opal_setenv(var,orte_proc_info.gpr_replica_uri, true, env);
</span><br>
<span class="quotelev1">&gt;      free(var);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* universe directory - needs to match orted */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/bproc/smr_bproc_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/bproc/smr_bproc_component.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/bproc/smr_bproc_component.c      2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -106,7 +106,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static orte_smr_base_module_t* orte_smr_bproc_init(int *priority)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.seed) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.seed) {
</span><br>
<span class="quotelev1">&gt;          return NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/ccp/plm_ccp_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/ccp/plm_ccp_component.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/ccp/plm_ccp_component.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -144,7 +144,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if we are NOT an HNP, then don't select us */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          pCluster-&gt;Release();
</span><br>
<span class="quotelev1">&gt;          *module = NULL;
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/rsh/plm_rsh_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/rsh/plm_rsh_module.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/rsh/plm_rsh_module.c     2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -302,7 +302,7 @@
</span><br>
<span class="quotelev1">&gt;          /* if we are not the HNP, send a message to the HNP  
</span><br>
<span class="quotelev1">&gt; alerting it
</span><br>
<span class="quotelev1">&gt;           * to the failure
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +        if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;              opal_buffer_t buf;
</span><br>
<span class="quotelev1">&gt;              orte_vpid_t *vpid=(orte_vpid_t*)cbdata;
</span><br>
<span class="quotelev1">&gt;              OPAL_OUTPUT_VERBOSE((1, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt; @@ -672,7 +672,7 @@
</span><br>
<span class="quotelev1">&gt;       * by enclosing them in quotes. Check for any multi-word
</span><br>
<span class="quotelev1">&gt;       * mca params passed to mpirun and include them
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          int cnt, i;
</span><br>
<span class="quotelev1">&gt;          cnt = opal_argv_count(orted_cmd_line);
</span><br>
<span class="quotelev1">&gt;          for (i=0; i &lt; cnt; i+=3) {
</span><br>
<span class="quotelev1">&gt; @@ -852,7 +852,7 @@
</span><br>
<span class="quotelev1">&gt;          OBJ_RELEASE(item);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      /* reconstruct the child list */
</span><br>
<span class="quotelev1">&gt; -    find_children(0, 0, ORTE_PROC_MY_NAME-&gt;vpid,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs);
</span><br>
<span class="quotelev1">&gt; +    find_children(0, 0, ORTE_PROC_MY_NAME-&gt;vpid,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.num_procs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I have no children, just return */
</span><br>
<span class="quotelev1">&gt;      if (opal_list_is_empty(&amp;mca_plm_rsh_component.children)) {
</span><br>
<span class="quotelev1">&gt; @@ -865,7 +865,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup the launch */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = setup_launch(&amp;argc, &amp;argv,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename, &amp;node_name_index1,
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = setup_launch(&amp;argc, &amp;argv,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename, &amp;node_name_index1,
</span><br>
<span class="quotelev1">&gt;                                             &amp;proc_vpid_index,  
</span><br>
<span class="quotelev1">&gt; prefix))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          goto cleanup;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/submit/pls_submit_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/submit/pls_submit_module.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/submit/pls_submit_module.c       2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -647,7 +647,7 @@
</span><br>
<span class="quotelev1">&gt;               * match, check using ifislocal().
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt;              if (!mca_plm_submit_component.force_submit &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                (0 == strcmp(nodes[nnode]-&gt;name,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename) ||
</span><br>
<span class="quotelev1">&gt; +                (0 == strcmp(nodes[nnode]-&gt;name,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename) ||
</span><br>
<span class="quotelev1">&gt;                   opal_ifislocal(nodes[nnode]-&gt;name))) {
</span><br>
<span class="quotelev1">&gt;                  if (mca_plm_submit_component.debug) {
</span><br>
<span class="quotelev1">&gt;                      opal_output(0, &quot;plm:submit: %s is a LOCAL node 
</span><br>
<span class="quotelev1">&gt; \n&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ras/alps/ras_alps_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ras/alps/ras_alps_component.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ras/alps/ras_alps_component.c        2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -86,7 +86,7 @@
</span><br>
<span class="quotelev1">&gt;  static int orte_ras_alps_component_query(mca_base_module_t  
</span><br>
<span class="quotelev1">&gt; **module, int *priority)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      /* if we are not an HNP, then we must not be selected */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          *module = NULL;
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ras/base/ras_base_allocate.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ras/base/ras_base_allocate.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ras/base/ras_base_allocate.c 2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -288,10 +288,10 @@
</span><br>
<span class="quotelev1">&gt;          OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    /* use the same name we got in orte_process_info so we avoid  
</span><br>
<span class="quotelev1">&gt; confusion in
</span><br>
<span class="quotelev1">&gt; +    /* use the same name we got in orte_proc_info so we avoid  
</span><br>
<span class="quotelev1">&gt; confusion in
</span><br>
<span class="quotelev1">&gt;       * the session directories
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    node-&gt;name = strdup(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +    node-&gt;name = strdup(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;      node-&gt;state = ORTE_NODE_STATE_UP;
</span><br>
<span class="quotelev1">&gt;      node-&gt;slots_inuse = 0;
</span><br>
<span class="quotelev1">&gt;      node-&gt;slots_max = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ras/ccp/ras_ccp_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ras/ccp/ras_ccp_component.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ras/ccp/ras_ccp_component.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -105,7 +105,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if we are NOT an HNP, then don't select us */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          pCluster-&gt;Release();
</span><br>
<span class="quotelev1">&gt;          *module = NULL;
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rml/base/rml_base_contact.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rml/base/rml_base_contact.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rml/base/rml_base_contact.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -131,9 +131,9 @@
</span><br>
<span class="quotelev1">&gt;       * in our process_info struct so we can correctly route any  
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_PROC_MY_NAME-&gt;jobid == name.jobid &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.num_procs &lt; num_procs) {
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.num_procs = num_procs;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.num_procs &lt; num_procs) {
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.num_procs = num_procs;
</span><br>
<span class="quotelev1">&gt;          /* if we changed it, then we better update the routed
</span><br>
<span class="quotelev1">&gt;           * tree so daemon collectives work correctly
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/base/routed_base_receive.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/base/routed_base_receive.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/base/routed_base_receive.c    2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -57,7 +57,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (recv_issued || !orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (recv_issued || !orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -83,7 +83,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (!recv_issued || !orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!recv_issued || !orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/base/routed_base_register_sync.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/base/routed_base_register_sync.c       
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/base/routed_base_register_sync.c       
</span><br>
<span class="quotelev1">&gt; 2009-03-05 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -37,7 +37,7 @@
</span><br>
<span class="quotelev1">&gt;                          orte_rml_tag_t tag, void *cbdata)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      /* just copy the payload to the sync_buf */
</span><br>
<span class="quotelev1">&gt; -    opal_dss.copy_payload(orte_process_info.sync_buf, buffer);
</span><br>
<span class="quotelev1">&gt; +    opal_dss.copy_payload(orte_proc_info.sync_buf, buffer);
</span><br>
<span class="quotelev1">&gt;      /* flag as complete */
</span><br>
<span class="quotelev1">&gt;      sync_recvd = true;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/binomial/routed_binomial.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/binomial/routed_binomial.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/binomial/routed_binomial.c    2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -112,9 +112,9 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, indicate that I am
</span><br>
<span class="quotelev1">&gt;          * truly finalizing prior to departure
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_routed_base_register_sync(false))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -122,7 +122,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am the HNP, I need to stop the comm recv */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          orte_routed_base_comm_stop();
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -156,8 +156,8 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, I don't have any routes
</span><br>
<span class="quotelev1">&gt;       * so there is nothing for me to do
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp; !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -177,7 +177,7 @@
</span><br>
<span class="quotelev1">&gt;           * in my routing table and thus have nothing to do
</span><br>
<span class="quotelev1">&gt;           * here, just return
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -224,8 +224,8 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, we don't update the route  
</span><br>
<span class="quotelev1">&gt; since
</span><br>
<span class="quotelev1">&gt;       * we automatically route everything through the local daemon
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp; !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -252,7 +252,7 @@
</span><br>
<span class="quotelev1">&gt;           * anything to this job family via my HNP - so nothing to do
</span><br>
<span class="quotelev1">&gt;           * here, just return
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -318,8 +318,8 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, always route via my local  
</span><br>
<span class="quotelev1">&gt; daemon */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp; !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          ret = ORTE_PROC_MY_DAEMON;
</span><br>
<span class="quotelev1">&gt;          goto found;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -337,7 +337,7 @@
</span><br>
<span class="quotelev1">&gt;      /* IF THIS IS FOR A DIFFERENT JOB FAMILY... */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_JOB_FAMILY(target-&gt;jobid) !=  
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid)) {
</span><br>
<span class="quotelev1">&gt;          /* if I am a daemon, route this via the HNP */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              ret = ORTE_PROC_MY_HNP;
</span><br>
<span class="quotelev1">&gt;              goto found;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; @@ -498,7 +498,7 @@
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am a tool, then I stand alone - there is nothing to do */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -506,31 +506,31 @@
</span><br>
<span class="quotelev1">&gt;       * from the data sent to me for launch and update the routing  
</span><br>
<span class="quotelev1">&gt; tables to
</span><br>
<span class="quotelev1">&gt;       * point at the daemon for each proc
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s routed_binomial: init routes for  
</span><br>
<span class="quotelev1">&gt; daemon job %s\n\thnp_uri %s&quot;,
</span><br>
<span class="quotelev1">&gt;                               ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt;                               ORTE_JOBID_PRINT(job),
</span><br>
<span class="quotelev1">&gt; -                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri));
</span><br>
<span class="quotelev1">&gt; +                             (NULL == orte_proc_info.my_hnp_uri) ?  
</span><br>
<span class="quotelev1">&gt; &quot;NULL&quot; : orte_proc_info.my_hnp_uri));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (NULL == ndat) {
</span><br>
<span class="quotelev1">&gt;              /* indicates this is being called during orte_init.
</span><br>
<span class="quotelev1">&gt;               * Get the HNP's name for possible later use
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (NULL == orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +            if (NULL == orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt;                  /* fatal error */
</span><br>
<span class="quotelev1">&gt;                  ORTE_ERROR_LOG(ORTE_ERR_FATAL);
</span><br>
<span class="quotelev1">&gt;                  return ORTE_ERR_FATAL;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              /* set the contact info into the hash table */
</span><br>
<span class="quotelev1">&gt; -            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_process_info.my_hnp_uri))) {
</span><br>
<span class="quotelev1">&gt; +            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_proc_info.my_hnp_uri))) {
</span><br>
<span class="quotelev1">&gt;                  ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                  return(rc);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              /* extract the hnp name and store it */
</span><br>
<span class="quotelev1">&gt; -            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt;                                                                  
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_HNP, NULL))) {
</span><br>
<span class="quotelev1">&gt;                  ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                  return rc;
</span><br>
<span class="quotelev1">&gt; @@ -561,7 +561,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s routed_binomial: init routes for  
</span><br>
<span class="quotelev1">&gt; HNP job %s&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -669,10 +669,10 @@
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s routed_binomial: init routes for  
</span><br>
<span class="quotelev1">&gt; proc job %s\n\thnp_uri %s\n\tdaemon uri %s&quot;,
</span><br>
<span class="quotelev1">&gt;                               ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),  
</span><br>
<span class="quotelev1">&gt; ORTE_JOBID_PRINT(job),
</span><br>
<span class="quotelev1">&gt; -                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri) ? &quot;NULL&quot; : orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; -                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_daemon_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_daemon_uri));
</span><br>
<span class="quotelev1">&gt; +                             (NULL == orte_proc_info.my_hnp_uri) ?  
</span><br>
<span class="quotelev1">&gt; &quot;NULL&quot; : orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.my_daemon_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.my_daemon_uri));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        if (NULL == orte_process_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt; +        if (NULL == orte_proc_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt;              /* in this module, we absolutely MUST have this  
</span><br>
<span class="quotelev1">&gt; information - if
</span><br>
<span class="quotelev1">&gt;               * we didn't get it, then error out
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; @@ -691,7 +691,7 @@
</span><br>
<span class="quotelev1">&gt;           * to it. This is required to ensure that we -do- send  
</span><br>
<span class="quotelev1">&gt; messages to the correct
</span><br>
<span class="quotelev1">&gt;           * HNP name
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt;                                                              
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_HNP, NULL))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -701,12 +701,12 @@
</span><br>
<span class="quotelev1">&gt;           * the connection, but just tells the RML how to reach the  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt;           * if/when we attempt to send to it
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_process_info.my_daemon_uri))) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_proc_info.my_daemon_uri))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return(rc);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          /* extract the daemon's name so we can update the routing  
</span><br>
<span class="quotelev1">&gt; table */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_daemon_uri,
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_daemon_uri,
</span><br>
<span class="quotelev1">&gt;                                                              
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_DAEMON, NULL))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -854,7 +854,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am anything other than a daemon or the HNP, this
</span><br>
<span class="quotelev1">&gt;       * is a meaningless command as I am not allowed to route
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.daemon &amp;&amp; !orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.daemon &amp;&amp; !orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -868,7 +868,7 @@
</span><br>
<span class="quotelev1">&gt;       * lie underneath their branch
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      my_parent.vpid = binomial_tree(0, 0, ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev1">&gt; -                                   orte_process_info.num_procs,
</span><br>
<span class="quotelev1">&gt; +                                   orte_proc_info.num_procs,
</span><br>
<span class="quotelev1">&gt;                                     &amp;num_children, &amp;my_children,  
</span><br>
<span class="quotelev1">&gt; NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (0 &lt; opal_output_get_verbosity(orte_routed_base_output)) {
</span><br>
<span class="quotelev1">&gt; @@ -878,7 +878,7 @@
</span><br>
<span class="quotelev1">&gt;               item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt;              child = (orte_routed_tree_t*)item;
</span><br>
<span class="quotelev1">&gt;              opal_output(0, &quot;%s: \tchild %d&quot;,  
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), child-&gt;vpid);
</span><br>
<span class="quotelev1">&gt; -            for (j=0; j &lt; (int)orte_process_info.num_procs; j++) {
</span><br>
<span class="quotelev1">&gt; +            for (j=0; j &lt; (int)orte_proc_info.num_procs; j++) {
</span><br>
<span class="quotelev1">&gt;                  if (opal_bitmap_is_set_bit(&amp;child-&gt;relatives, j)) {
</span><br>
<span class="quotelev1">&gt;                      opal_output(0, &quot;%s: \t\trelation %d&quot;,  
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), j);
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; @@ -897,7 +897,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am anything other than a daemon or the HNP, this
</span><br>
<span class="quotelev1">&gt;       * is a meaningless command as I am not allowed to route
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.daemon &amp;&amp; !orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.daemon &amp;&amp; !orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_VPID_INVALID;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -928,7 +928,7 @@
</span><br>
<span class="quotelev1">&gt;       * is a meaningless command as I cannot get
</span><br>
<span class="quotelev1">&gt;       * the requested info
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/linear/routed_linear.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/linear/routed_linear.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/linear/routed_linear.c        2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -103,9 +103,9 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, indicate that I am
</span><br>
<span class="quotelev1">&gt;          * truly finalizing prior to departure
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_routed_base_register_sync(false))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -113,7 +113,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am the HNP, I need to stop the comm recv */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          orte_routed_base_comm_stop();
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -140,8 +140,8 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, I don't have any routes
</span><br>
<span class="quotelev1">&gt;       * so there is nothing for me to do
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp; !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -161,7 +161,7 @@
</span><br>
<span class="quotelev1">&gt;           * in my routing table and thus have nothing to do
</span><br>
<span class="quotelev1">&gt;           * here, just return
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -208,8 +208,8 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, we don't update the route  
</span><br>
<span class="quotelev1">&gt; since
</span><br>
<span class="quotelev1">&gt;       * we automatically route everything through the local daemon
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp; !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -236,7 +236,7 @@
</span><br>
<span class="quotelev1">&gt;           * anything to this job family via my HNP - so nothing to do
</span><br>
<span class="quotelev1">&gt;           * here, just return
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -296,8 +296,8 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, always route via my local  
</span><br>
<span class="quotelev1">&gt; daemon */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp; !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          ret = ORTE_PROC_MY_DAEMON;
</span><br>
<span class="quotelev1">&gt;          goto found;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -315,7 +315,7 @@
</span><br>
<span class="quotelev1">&gt;      /* IF THIS IS FOR A DIFFERENT JOB FAMILY... */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_JOB_FAMILY(target-&gt;jobid) !=  
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid)) {
</span><br>
<span class="quotelev1">&gt;          /* if I am a daemon, route this via the HNP */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              ret = ORTE_PROC_MY_HNP;
</span><br>
<span class="quotelev1">&gt;              goto found;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; @@ -368,7 +368,7 @@
</span><br>
<span class="quotelev1">&gt;              daemon.vpid = ORTE_PROC_MY_NAME-&gt;vpid - 1;
</span><br>
<span class="quotelev1">&gt;              ret = &amp;daemon;
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt; -            if (ORTE_PROC_MY_NAME-&gt;vpid &lt;  
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs-1) {
</span><br>
<span class="quotelev1">&gt; +            if (ORTE_PROC_MY_NAME-&gt;vpid &lt;  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.num_procs-1) {
</span><br>
<span class="quotelev1">&gt;                  daemon.vpid = ORTE_PROC_MY_NAME-&gt;vpid + 1;
</span><br>
<span class="quotelev1">&gt;              } else {
</span><br>
<span class="quotelev1">&gt;                  /* we are at end of chain - wrap around */
</span><br>
<span class="quotelev1">&gt; @@ -493,7 +493,7 @@
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am a tool, then I stand alone - there is nothing to do */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -501,31 +501,31 @@
</span><br>
<span class="quotelev1">&gt;       * from the data sent to me for launch and update the routing  
</span><br>
<span class="quotelev1">&gt; tables to
</span><br>
<span class="quotelev1">&gt;       * point at the daemon for each proc
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s routed_linear: init routes for  
</span><br>
<span class="quotelev1">&gt; daemon job %s\n\thnp_uri %s&quot;,
</span><br>
<span class="quotelev1">&gt;                               ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt;                               ORTE_JOBID_PRINT(job),
</span><br>
<span class="quotelev1">&gt; -                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri));
</span><br>
<span class="quotelev1">&gt; +                             (NULL == orte_proc_info.my_hnp_uri) ?  
</span><br>
<span class="quotelev1">&gt; &quot;NULL&quot; : orte_proc_info.my_hnp_uri));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (NULL == ndat) {
</span><br>
<span class="quotelev1">&gt;              /* indicates this is being called during orte_init.
</span><br>
<span class="quotelev1">&gt;               * Get the HNP's name for possible later use
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (NULL == orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +            if (NULL == orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt;                  /* fatal error */
</span><br>
<span class="quotelev1">&gt;                  ORTE_ERROR_LOG(ORTE_ERR_FATAL);
</span><br>
<span class="quotelev1">&gt;                  return ORTE_ERR_FATAL;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              /* set the contact info into the hash table */
</span><br>
<span class="quotelev1">&gt; -            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_process_info.my_hnp_uri))) {
</span><br>
<span class="quotelev1">&gt; +            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_proc_info.my_hnp_uri))) {
</span><br>
<span class="quotelev1">&gt;                  ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                  return(rc);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              /* extract the hnp name and store it */
</span><br>
<span class="quotelev1">&gt; -            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt;                                                                  
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_HNP, NULL))) {
</span><br>
<span class="quotelev1">&gt;                  ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                  return rc;
</span><br>
<span class="quotelev1">&gt; @@ -556,7 +556,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s routed_linear: init routes for HNP  
</span><br>
<span class="quotelev1">&gt; job %s&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -664,10 +664,10 @@
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s routed_linear: init routes for  
</span><br>
<span class="quotelev1">&gt; proc job %s\n\thnp_uri %s\n\tdaemon uri %s&quot;,
</span><br>
<span class="quotelev1">&gt;                               ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),  
</span><br>
<span class="quotelev1">&gt; ORTE_JOBID_PRINT(job),
</span><br>
<span class="quotelev1">&gt; -                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri) ? &quot;NULL&quot; : orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; -                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_daemon_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_daemon_uri));
</span><br>
<span class="quotelev1">&gt; +                             (NULL == orte_proc_info.my_hnp_uri) ?  
</span><br>
<span class="quotelev1">&gt; &quot;NULL&quot; : orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.my_daemon_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.my_daemon_uri));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        if (NULL == orte_process_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt; +        if (NULL == orte_proc_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt;              /* in this module, we absolutely MUST have this  
</span><br>
<span class="quotelev1">&gt; information - if
</span><br>
<span class="quotelev1">&gt;               * we didn't get it, then error out
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; @@ -686,7 +686,7 @@
</span><br>
<span class="quotelev1">&gt;           * to it. This is required to ensure that we -do- send  
</span><br>
<span class="quotelev1">&gt; messages to the correct
</span><br>
<span class="quotelev1">&gt;           * HNP name
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt;                                                              
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_HNP, NULL))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -696,12 +696,12 @@
</span><br>
<span class="quotelev1">&gt;           * the connection, but just tells the RML how to reach the  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt;           * if/when we attempt to send to it
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_process_info.my_daemon_uri))) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_proc_info.my_daemon_uri))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return(rc);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          /* extract the daemon's name so we can update the routing  
</span><br>
<span class="quotelev1">&gt; table */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_daemon_uri,
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_daemon_uri,
</span><br>
<span class="quotelev1">&gt;                                                              
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_DAEMON, NULL))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -784,7 +784,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am anything other than a daemon or the HNP, this
</span><br>
<span class="quotelev1">&gt;       * is a meaningless command as I am not allowed to route
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.daemon &amp;&amp; !orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.daemon &amp;&amp; !orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -800,28 +800,28 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am anything other than a daemon or the HNP, this
</span><br>
<span class="quotelev1">&gt;       * is a meaningless command as I am not allowed to route
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.daemon &amp;&amp; !orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.daemon &amp;&amp; !orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_VPID_INVALID;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* the linear routing tree consists of a chain of daemons
</span><br>
<span class="quotelev1">&gt; -     * extending from the HNP to orte_process_info.num_procs-1.
</span><br>
<span class="quotelev1">&gt; +     * extending from the HNP to orte_proc_info.num_procs-1.
</span><br>
<span class="quotelev1">&gt;       * Accordingly, my child is just the my_vpid+1 daemon
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (NULL != children &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        ORTE_PROC_MY_NAME-&gt;vpid &lt; orte_process_info.num_procs-1) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_PROC_MY_NAME-&gt;vpid &lt; orte_proc_info.num_procs-1) {
</span><br>
<span class="quotelev1">&gt;          /* my child is just the vpid+1 daemon */
</span><br>
<span class="quotelev1">&gt;          nm = OBJ_NEW(orte_routed_tree_t);
</span><br>
<span class="quotelev1">&gt; -        opal_bitmap_init(&amp;nm-&gt;relatives,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs);
</span><br>
<span class="quotelev1">&gt; +        opal_bitmap_init(&amp;nm-&gt;relatives, orte_proc_info.num_procs);
</span><br>
<span class="quotelev1">&gt;          nm-&gt;vpid = ORTE_PROC_MY_NAME-&gt;vpid + 1;
</span><br>
<span class="quotelev1">&gt;          /* my relatives are everyone above that point */
</span><br>
<span class="quotelev1">&gt; -        for (v=nm-&gt;vpid+1; v &lt; orte_process_info.num_procs; v++) {
</span><br>
<span class="quotelev1">&gt; +        for (v=nm-&gt;vpid+1; v &lt; orte_proc_info.num_procs; v++) {
</span><br>
<span class="quotelev1">&gt;              opal_bitmap_set_bit(&amp;nm-&gt;relatives, v);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          opal_list_append(children, &amp;nm-&gt;super);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          /* the parent of the HNP is invalid */
</span><br>
<span class="quotelev1">&gt;          return ORTE_VPID_INVALID;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -839,7 +839,7 @@
</span><br>
<span class="quotelev1">&gt;       * is a meaningless command as I cannot get
</span><br>
<span class="quotelev1">&gt;       * the requested info
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/radix/routed_radix.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/radix/routed_radix.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/radix/routed_radix.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -113,9 +113,9 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, indicate that I am
</span><br>
<span class="quotelev1">&gt;          * truly finalizing prior to departure
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_routed_base_register_sync(false))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -123,7 +123,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am the HNP, I need to stop the comm recv */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          orte_routed_base_comm_stop();
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -157,8 +157,8 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, I don't have any routes
</span><br>
<span class="quotelev1">&gt;       * so there is nothing for me to do
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp; !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -178,7 +178,7 @@
</span><br>
<span class="quotelev1">&gt;           * in my routing table and thus have nothing to do
</span><br>
<span class="quotelev1">&gt;           * here, just return
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -225,8 +225,8 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, we don't update the route  
</span><br>
<span class="quotelev1">&gt; since
</span><br>
<span class="quotelev1">&gt;       * we automatically route everything through the local daemon
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp; !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -253,7 +253,7 @@
</span><br>
<span class="quotelev1">&gt;           * anything to this job family via my HNP - so nothing to do
</span><br>
<span class="quotelev1">&gt;           * here, just return
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -321,8 +321,8 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am an application process, always route via my local  
</span><br>
<span class="quotelev1">&gt; daemon */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp &amp;&amp; !orte_process_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        !orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp &amp;&amp; !orte_proc_info.daemon &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        !orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          ret = ORTE_PROC_MY_DAEMON;
</span><br>
<span class="quotelev1">&gt;          goto found;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -340,7 +340,7 @@
</span><br>
<span class="quotelev1">&gt;      /* IF THIS IS FOR A DIFFERENT JOB FAMILY... */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_JOB_FAMILY(target-&gt;jobid) !=  
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid)) {
</span><br>
<span class="quotelev1">&gt;          /* if I am a daemon, route this via the HNP */
</span><br>
<span class="quotelev1">&gt; -        if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;              ret = ORTE_PROC_MY_HNP;
</span><br>
<span class="quotelev1">&gt;              goto found;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; @@ -525,7 +525,7 @@
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am a tool, then I stand alone - there is nothing to do */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.tool) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.tool) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -533,31 +533,31 @@
</span><br>
<span class="quotelev1">&gt;       * from the data sent to me for launch and update the routing  
</span><br>
<span class="quotelev1">&gt; tables to
</span><br>
<span class="quotelev1">&gt;       * point at the daemon for each proc
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s routed_radix: init routes for  
</span><br>
<span class="quotelev1">&gt; daemon job %s\n\thnp_uri %s&quot;,
</span><br>
<span class="quotelev1">&gt;                               ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt;                               ORTE_JOBID_PRINT(job),
</span><br>
<span class="quotelev1">&gt; -                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri));
</span><br>
<span class="quotelev1">&gt; +                             (NULL == orte_proc_info.my_hnp_uri) ?  
</span><br>
<span class="quotelev1">&gt; &quot;NULL&quot; : orte_proc_info.my_hnp_uri));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (NULL == ndat) {
</span><br>
<span class="quotelev1">&gt;              /* indicates this is being called during orte_init.
</span><br>
<span class="quotelev1">&gt;               * Get the HNP's name for possible later use
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (NULL == orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +            if (NULL == orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt;                  /* fatal error */
</span><br>
<span class="quotelev1">&gt;                  ORTE_ERROR_LOG(ORTE_ERR_FATAL);
</span><br>
<span class="quotelev1">&gt;                  return ORTE_ERR_FATAL;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              /* set the contact info into the hash table */
</span><br>
<span class="quotelev1">&gt; -            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_process_info.my_hnp_uri))) {
</span><br>
<span class="quotelev1">&gt; +            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_proc_info.my_hnp_uri))) {
</span><br>
<span class="quotelev1">&gt;                  ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                  return(rc);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              /* extract the hnp name and store it */
</span><br>
<span class="quotelev1">&gt; -            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt;                                                                  
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_HNP, NULL))) {
</span><br>
<span class="quotelev1">&gt;                  ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                  return rc;
</span><br>
<span class="quotelev1">&gt; @@ -588,7 +588,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s routed_radix: init routes for HNP  
</span><br>
<span class="quotelev1">&gt; job %s&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -696,10 +696,10 @@
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;%s routed_radix: init routes for proc  
</span><br>
<span class="quotelev1">&gt; job %s\n\thnp_uri %s\n\tdaemon uri %s&quot;,
</span><br>
<span class="quotelev1">&gt;                               ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),  
</span><br>
<span class="quotelev1">&gt; ORTE_JOBID_PRINT(job),
</span><br>
<span class="quotelev1">&gt; -                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_hnp_uri) ? &quot;NULL&quot; : orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; -                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_daemon_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_daemon_uri));
</span><br>
<span class="quotelev1">&gt; +                             (NULL == orte_proc_info.my_hnp_uri) ?  
</span><br>
<span class="quotelev1">&gt; &quot;NULL&quot; : orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +                             (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.my_daemon_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.my_daemon_uri));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        if (NULL == orte_process_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt; +        if (NULL == orte_proc_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt;              /* in this module, we absolutely MUST have this  
</span><br>
<span class="quotelev1">&gt; information - if
</span><br>
<span class="quotelev1">&gt;               * we didn't get it, then error out
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; @@ -718,7 +718,7 @@
</span><br>
<span class="quotelev1">&gt;           * to it. This is required to ensure that we -do- send  
</span><br>
<span class="quotelev1">&gt; messages to the correct
</span><br>
<span class="quotelev1">&gt;           * HNP name
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt;                                                              
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_HNP, NULL))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -728,12 +728,12 @@
</span><br>
<span class="quotelev1">&gt;           * the connection, but just tells the RML how to reach the  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt;           * if/when we attempt to send to it
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_process_info.my_daemon_uri))) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_proc_info.my_daemon_uri))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return(rc);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          /* extract the daemon's name so we can update the routing  
</span><br>
<span class="quotelev1">&gt; table */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_daemon_uri,
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_daemon_uri,
</span><br>
<span class="quotelev1">&gt;                                                              
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_DAEMON, NULL))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt; @@ -828,7 +828,7 @@
</span><br>
<span class="quotelev1">&gt;      /* our children start at our rank + num_in_level */
</span><br>
<span class="quotelev1">&gt;      peer = rank + NInLevel;
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; mca_routed_radix_component.radix; i++) {
</span><br>
<span class="quotelev1">&gt; -        if (peer &lt; (int)orte_process_info.num_procs) {
</span><br>
<span class="quotelev1">&gt; +        if (peer &lt; (int)orte_proc_info.num_procs) {
</span><br>
<span class="quotelev1">&gt;              child = OBJ_NEW(orte_routed_tree_t);
</span><br>
<span class="quotelev1">&gt;              child-&gt;vpid = peer;
</span><br>
<span class="quotelev1">&gt;              if (NULL != children) {
</span><br>
<span class="quotelev1">&gt; @@ -836,7 +836,7 @@
</span><br>
<span class="quotelev1">&gt;                  opal_list_append(children, &amp;child-&gt;super);
</span><br>
<span class="quotelev1">&gt;                  (*num_children)++;
</span><br>
<span class="quotelev1">&gt;                  /* setup the relatives bitmap */
</span><br>
<span class="quotelev1">&gt; -                opal_bitmap_init(&amp;child-&gt;relatives,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs);
</span><br>
<span class="quotelev1">&gt; +                opal_bitmap_init(&amp;child-&gt;relatives,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.num_procs);
</span><br>
<span class="quotelev1">&gt;                  /* point to the relatives */
</span><br>
<span class="quotelev1">&gt;                  relations = &amp;child-&gt;relatives;
</span><br>
<span class="quotelev1">&gt;              } else {
</span><br>
<span class="quotelev1">&gt; @@ -865,7 +865,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am anything other than a daemon or the HNP, this
</span><br>
<span class="quotelev1">&gt;       * is a meaningless command as I am not allowed to route
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.daemon &amp;&amp; !orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.daemon &amp;&amp; !orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -909,7 +909,7 @@
</span><br>
<span class="quotelev1">&gt;               item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt;              child = (orte_routed_tree_t*)item;
</span><br>
<span class="quotelev1">&gt;              opal_output(0, &quot;%s: \tchild %d&quot;,  
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), child-&gt;vpid);
</span><br>
<span class="quotelev1">&gt; -            for (j=0; j &lt; (int)orte_process_info.num_procs; j++) {
</span><br>
<span class="quotelev1">&gt; +            for (j=0; j &lt; (int)orte_proc_info.num_procs; j++) {
</span><br>
<span class="quotelev1">&gt;                  if (opal_bitmap_is_set_bit(&amp;child-&gt;relatives, j)) {
</span><br>
<span class="quotelev1">&gt;                      opal_output(0, &quot;%s: \t\trelation %d&quot;,  
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), j);
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; @@ -928,7 +928,7 @@
</span><br>
<span class="quotelev1">&gt;      /* if I am anything other than a daemon or the HNP, this
</span><br>
<span class="quotelev1">&gt;       * is a meaningless command as I am not allowed to route
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.daemon &amp;&amp; !orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.daemon &amp;&amp; !orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_VPID_INVALID;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -958,7 +958,7 @@
</span><br>
<span class="quotelev1">&gt;       * is a meaningless command as I cannot get
</span><br>
<span class="quotelev1">&gt;       * the requested info
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/slave/routed_slave.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/slave/routed_slave.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/slave/routed_slave.c  2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -176,10 +176,10 @@
</span><br>
<span class="quotelev1">&gt;      OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt;                           &quot;%s routed_slave: init routes for proc job  
</span><br>
<span class="quotelev1">&gt; %s\n\thnp_uri %s\n\tdaemon uri %s&quot;,
</span><br>
<span class="quotelev1">&gt;                           ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),  
</span><br>
<span class="quotelev1">&gt; ORTE_JOBID_PRINT(job),
</span><br>
<span class="quotelev1">&gt; -                         (NULL == orte_process_info.my_hnp_uri) ?  
</span><br>
<span class="quotelev1">&gt; &quot;NULL&quot; : orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; -                         (NULL ==  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_daemon_uri) ? &quot;NULL&quot; :  
</span><br>
<span class="quotelev1">&gt; orte_process_info.my_daemon_uri));
</span><br>
<span class="quotelev1">&gt; +                         (NULL == orte_proc_info.my_hnp_uri) ?  
</span><br>
<span class="quotelev1">&gt; &quot;NULL&quot; : orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +                         (NULL == orte_proc_info.my_daemon_uri) ?  
</span><br>
<span class="quotelev1">&gt; &quot;NULL&quot; : orte_proc_info.my_daemon_uri));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL == orte_process_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL == orte_proc_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt;          /* in this module, we absolutely MUST have this information  
</span><br>
<span class="quotelev1">&gt; - if
</span><br>
<span class="quotelev1">&gt;           * we didn't get it, then error out
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; @@ -198,7 +198,7 @@
</span><br>
<span class="quotelev1">&gt;       * to it. This is required to ensure that we -do- send messages  
</span><br>
<span class="quotelev1">&gt; to the correct
</span><br>
<span class="quotelev1">&gt;       * HNP name
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_hnp_uri,
</span><br>
<span class="quotelev1">&gt;                                                          
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_HNP, NULL))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          return rc;
</span><br>
<span class="quotelev1">&gt; @@ -208,12 +208,12 @@
</span><br>
<span class="quotelev1">&gt;       * the connection, but just tells the RML how to reach the daemon
</span><br>
<span class="quotelev1">&gt;       * if/when we attempt to send to it
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_process_info.my_daemon_uri))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(orte_proc_info.my_daemon_uri))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          return(rc);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      /* extract the daemon's name so we can update the routing table  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_process_info.my_daemon_uri,
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(orte_proc_info.my_daemon_uri,
</span><br>
<span class="quotelev1">&gt;                                                          
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_DAEMON, NULL))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          return rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/snapc/full/snapc_full_global.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/snapc/full/snapc_full_global.c       2009-03-05  
</span><br>
<span class="quotelev1">&gt; 15:36:44 EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -298,7 +298,7 @@
</span><br>
<span class="quotelev1">&gt;      int exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (snapc_recv_issued &amp;&amp; orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (snapc_recv_issued &amp;&amp; orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -329,7 +329,7 @@
</span><br>
<span class="quotelev1">&gt;      int exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (!snapc_recv_issued &amp;&amp; orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!snapc_recv_issued &amp;&amp; orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -354,7 +354,7 @@
</span><br>
<span class="quotelev1">&gt;      int exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (snapc_cmdline_recv_issued &amp;&amp; orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (snapc_cmdline_recv_issued &amp;&amp; orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -385,7 +385,7 @@
</span><br>
<span class="quotelev1">&gt;      int exit_status = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (!snapc_cmdline_recv_issued &amp;&amp; orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!snapc_cmdline_recv_issued &amp;&amp; orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/orted/orted_comm.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/orted/orted_comm.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/orted/orted_comm.c       2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -194,7 +194,7 @@
</span><br>
<span class="quotelev1">&gt;      orte_daemon_cmd_flag_t command;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* check to see if we are in a progress recursion */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.daemon &amp;&amp; 1 &lt; (ret =  
</span><br>
<span class="quotelev1">&gt; opal_progress_recursion_depth())) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.daemon &amp;&amp; 1 &lt; (ret =  
</span><br>
<span class="quotelev1">&gt; opal_progress_recursion_depth())) {
</span><br>
<span class="quotelev1">&gt;          /* if we are in a recursion, we want to repost the message  
</span><br>
<span class="quotelev1">&gt; event
</span><br>
<span class="quotelev1">&gt;           * so the progress engine can work its way back up to the top
</span><br>
<span class="quotelev1">&gt;           * of the stack. Given that this could happen multiple times,
</span><br>
<span class="quotelev1">&gt; @@ -234,7 +234,7 @@
</span><br>
<span class="quotelev1">&gt;      wait_time = 1;
</span><br>
<span class="quotelev1">&gt;      num_recursions = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_timing &amp;&amp; orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_timing &amp;&amp; orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          /* if we are doing timing, and we are the HNP, then the  
</span><br>
<span class="quotelev1">&gt; message doesn't come
</span><br>
<span class="quotelev1">&gt;           * through the RML recv, so we have to pickup the recv time  
</span><br>
<span class="quotelev1">&gt; here
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; @@ -526,7 +526,7 @@
</span><br>
<span class="quotelev1">&gt;                          goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt;                      /* initialize the routes to my peers - this  
</span><br>
<span class="quotelev1">&gt; will update the number
</span><br>
<span class="quotelev1">&gt; -                     * of daemons in the system (i.e.,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs) as
</span><br>
<span class="quotelev1">&gt; +                     * of daemons in the system (i.e.,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.num_procs) as
</span><br>
<span class="quotelev1">&gt;                       * this might have changed
</span><br>
<span class="quotelev1">&gt;                       */
</span><br>
<span class="quotelev1">&gt;                      if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_routed.init_routes(ORTE_PROC_MY_NAME-&gt;jobid, relay_msg))) {
</span><br>
<span class="quotelev1">&gt; @@ -605,7 +605,7 @@
</span><br>
<span class="quotelev1">&gt;              /* if we are the HNP, kill our local procs and
</span><br>
<span class="quotelev1">&gt;               * flag we are exited - but don't yet exit
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +            if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;                  orte_job_t *daemons;
</span><br>
<span class="quotelev1">&gt;                  orte_proc_t **procs;
</span><br>
<span class="quotelev1">&gt;                  /* if we are the HNP, ensure our local procs are  
</span><br>
<span class="quotelev1">&gt; terminated */
</span><br>
<span class="quotelev1">&gt; @@ -663,7 +663,7 @@
</span><br>
<span class="quotelev1">&gt;              /* if we are the HNP, kill our local procs and
</span><br>
<span class="quotelev1">&gt;               * flag we are exited - but don't yet exit
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +            if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;                  orte_job_t *daemons;
</span><br>
<span class="quotelev1">&gt;                  orte_proc_t **procs;
</span><br>
<span class="quotelev1">&gt;                  /* if we are the HNP, ensure our local procs are  
</span><br>
<span class="quotelev1">&gt; terminated */
</span><br>
<span class="quotelev1">&gt; @@ -709,7 +709,7 @@
</span><br>
<span class="quotelev1">&gt;              answer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt;              job = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev1">&gt;              /* can only process this if we are the HNP */
</span><br>
<span class="quotelev1">&gt; -            if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +            if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;                  /* unpack the job data */
</span><br>
<span class="quotelev1">&gt;                  n = 1;
</span><br>
<span class="quotelev1">&gt;                  if (ORTE_SUCCESS != (ret = opal_dss.unpack(buffer,  
</span><br>
<span class="quotelev1">&gt; &amp;jdata, &amp;n, ORTE_JOB))) {
</span><br>
<span class="quotelev1">&gt; @@ -778,7 +778,7 @@
</span><br>
<span class="quotelev1">&gt;              /* if we are not the HNP, we can do nothing - report
</span><br>
<span class="quotelev1">&gt;               * back 0 procs so the tool won't hang
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +            if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;                  orte_std_cntr_t zero=0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  answer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; @@ -861,7 +861,7 @@
</span><br>
<span class="quotelev1">&gt;              /* if we are not the HNP, we can do nothing - report
</span><br>
<span class="quotelev1">&gt;               * back 0 nodes so the tool won't hang
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +            if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;                  orte_std_cntr_t zero=0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  answer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; @@ -942,7 +942,7 @@
</span><br>
<span class="quotelev1">&gt;              /* if we are not the HNP, we can do nothing - report
</span><br>
<span class="quotelev1">&gt;               * back 0 procs so the tool won't hang
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +            if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;                  orte_std_cntr_t zero=0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  answer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; @@ -1077,7 +1077,7 @@
</span><br>
<span class="quotelev1">&gt;                   * the requestor. We need to convert that to our  
</span><br>
<span class="quotelev1">&gt; own job family
</span><br>
<span class="quotelev1">&gt;                   */
</span><br>
<span class="quotelev1">&gt;                  proc.jobid =  
</span><br>
<span class="quotelev1">&gt; ORTE_CONSTRUCT_LOCAL_JOBID(ORTE_PROC_MY_NAME-&gt;jobid, proc.jobid);
</span><br>
<span class="quotelev1">&gt; -                if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +                if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;                      return_addr = sender;
</span><br>
<span class="quotelev1">&gt;                      /* if the request is for a wildcard vpid, then  
</span><br>
<span class="quotelev1">&gt; it goes to every
</span><br>
<span class="quotelev1">&gt;                       * daemon. For scalability, we should probably  
</span><br>
<span class="quotelev1">&gt; xcast this some
</span><br>
<span class="quotelev1">&gt; @@ -1086,7 +1086,7 @@
</span><br>
<span class="quotelev1">&gt;                      if (ORTE_VPID_WILDCARD == proc.vpid) {
</span><br>
<span class="quotelev1">&gt;                          /* loop across all daemons */
</span><br>
<span class="quotelev1">&gt;                          proc2.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt; -                        for (proc2.vpid=1; proc2.vpid &lt;  
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs; proc2.vpid++) {
</span><br>
<span class="quotelev1">&gt; +                        for (proc2.vpid=1; proc2.vpid &lt;  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.num_procs; proc2.vpid++) {
</span><br>
<span class="quotelev1">&gt;                              /* setup the cmd */
</span><br>
<span class="quotelev1">&gt;                              relay_msg = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt;                              command = ORTE_DAEMON_TOP_CMD;
</span><br>
<span class="quotelev1">&gt; @@ -1200,7 +1200,7 @@
</span><br>
<span class="quotelev1">&gt;              /* send the answer back to requester - callback
</span><br>
<span class="quotelev1">&gt;               * function will release buffer
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +            if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;                  /* if I am the HNP, I need to also provide the  
</span><br>
<span class="quotelev1">&gt; number of
</span><br>
<span class="quotelev1">&gt;                   * replies the caller should recv and the sample time
</span><br>
<span class="quotelev1">&gt;                   */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/orted/orted_main.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/orted/orted_main.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/orted/orted_main.c       2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -313,12 +313,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (orted_globals.hnp) {
</span><br>
<span class="quotelev1">&gt;          /* we are to be the hnp, so set that flag */
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.hnp = true;
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.daemon = false;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.hnp = true;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.daemon = false;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          /* set ourselves to be just a daemon */
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.hnp = false;
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.daemon = true;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.hnp = false;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.daemon = true;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if OPAL_ENABLE_FT == 1
</span><br>
<span class="quotelev1">&gt; @@ -393,13 +393,13 @@
</span><br>
<span class="quotelev1">&gt;      /* insert our contact info into our process_info struct so we
</span><br>
<span class="quotelev1">&gt;       * have it for later use and set the local daemon field to our  
</span><br>
<span class="quotelev1">&gt; name
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.my_daemon_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.my_daemon_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt;      ORTE_PROC_MY_DAEMON-&gt;jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;      ORTE_PROC_MY_DAEMON-&gt;vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am also the hnp, then update that contact info field  
</span><br>
<span class="quotelev1">&gt; too */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_hnp_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_hnp_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt;          ORTE_PROC_MY_HNP-&gt;jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;          ORTE_PROC_MY_HNP-&gt;vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -460,10 +460,10 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* define a log file name in the session directory */
</span><br>
<span class="quotelev1">&gt;          sprintf(log_file, &quot;output-orted-%s-%s.log&quot;,
</span><br>
<span class="quotelev1">&gt; -                jobidstring, orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                jobidstring, orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          log_path = opal_os_path(false,
</span><br>
<span class="quotelev1">&gt; -                                orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                                orte_process_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt; +                                orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                                orte_proc_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt;                                  log_file,
</span><br>
<span class="quotelev1">&gt;                                  NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -487,8 +487,8 @@
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev1">&gt;          fprintf(stderr, &quot;Daemon %s checking in as pid %ld on host %s 
</span><br>
<span class="quotelev1">&gt; \n&quot;,
</span><br>
<span class="quotelev1">&gt; -                ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),  
</span><br>
<span class="quotelev1">&gt; (long)orte_process_info.pid,
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),  
</span><br>
<span class="quotelev1">&gt; (long)orte_proc_info.pid,
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* We actually do *not* want the orted to voluntarily yield() the
</span><br>
<span class="quotelev1">&gt; @@ -571,7 +571,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* create a string that contains our uri + the singleton's  
</span><br>
<span class="quotelev1">&gt; name */
</span><br>
<span class="quotelev1">&gt;          orte_util_convert_process_name_to_string(&amp;nptr, &amp;proc-&gt;name);
</span><br>
<span class="quotelev1">&gt; -        asprintf(&amp;tmp, &quot;%s[%s]&quot;, orte_process_info.my_daemon_uri,  
</span><br>
<span class="quotelev1">&gt; nptr);
</span><br>
<span class="quotelev1">&gt; +        asprintf(&amp;tmp, &quot;%s[%s]&quot;, orte_proc_info.my_daemon_uri, nptr);
</span><br>
<span class="quotelev1">&gt;          free(nptr);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* pass that info to the singleton */
</span><br>
<span class="quotelev1">&gt; @@ -596,7 +596,7 @@
</span><br>
<span class="quotelev1">&gt;       * is if we are launched by a singleton to provide support
</span><br>
<span class="quotelev1">&gt;       * for it
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          /* send the information to the orted report-back point -  
</span><br>
<span class="quotelev1">&gt; this function
</span><br>
<span class="quotelev1">&gt;           * will process the data, but also counts the number of
</span><br>
<span class="quotelev1">&gt;           * orteds that reported back so the launch procedure can  
</span><br>
<span class="quotelev1">&gt; continue.
</span><br>
<span class="quotelev1">&gt; @@ -615,7 +615,7 @@
</span><br>
<span class="quotelev1">&gt;              goto DONE;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          /* send our architecture */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret = opal_dss.pack(buffer,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_process_info.arch, 1, OPAL_INT32))) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (ret = opal_dss.pack(buffer,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_proc_info.arch, 1, OPAL_INT32))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;              goto DONE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/runtime/orte_cr.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/runtime/orte_cr.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/runtime/orte_cr.c        2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -311,20 +311,20 @@
</span><br>
<span class="quotelev1">&gt;          exit_status = ret;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if( NULL != orte_process_info.my_hnp_uri ) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.my_hnp_uri);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_hnp_uri = NULL;
</span><br>
<span class="quotelev1">&gt; +    if( NULL != orte_proc_info.my_hnp_uri ) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.my_hnp_uri);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_hnp_uri = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if( NULL != orte_process_info.my_daemon_uri ) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.my_daemon_uri);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_daemon_uri = NULL;
</span><br>
<span class="quotelev1">&gt; +    if( NULL != orte_proc_info.my_daemon_uri ) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.my_daemon_uri);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_daemon_uri = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if( ORTE_SUCCESS != (ret = orte_proc_info()) ) {
</span><br>
<span class="quotelev1">&gt; +    if( ORTE_SUCCESS != (ret = orte_proc_info_init()) ) {
</span><br>
<span class="quotelev1">&gt;          exit_status = ret;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.my_name = *ORTE_NAME_INVALID;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.my_name = *ORTE_NAME_INVALID;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * Notify the ESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/runtime/orte_globals.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/runtime/orte_globals.c   2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -145,7 +145,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* open up the verbose output for ORTE debugging */
</span><br>
<span class="quotelev1">&gt;      if (orte_debug_flag || 0 &lt; orte_debug_verbosity ||
</span><br>
<span class="quotelev1">&gt; -        (orte_debug_daemons_flag &amp;&amp; (orte_process_info.daemon ||  
</span><br>
<span class="quotelev1">&gt; orte_process_info.hnp))) {
</span><br>
<span class="quotelev1">&gt; +        (orte_debug_daemons_flag &amp;&amp; (orte_proc_info.daemon ||  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.hnp))) {
</span><br>
<span class="quotelev1">&gt;          if (0 &lt; orte_debug_verbosity) {
</span><br>
<span class="quotelev1">&gt;              opal_output_set_verbosity(orte_debug_output,  
</span><br>
<span class="quotelev1">&gt; orte_debug_verbosity);
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt; @@ -414,7 +414,7 @@
</span><br>
<span class="quotelev1">&gt;      orte_std_cntr_t i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if I am not an HNP, I cannot provide this object */
</span><br>
<span class="quotelev1">&gt; -    if (!orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (!orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          return NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -725,7 +725,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      ptr-&gt;name = NULL;
</span><br>
<span class="quotelev1">&gt;      ptr-&gt;daemon = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev1">&gt; -    ptr-&gt;arch = orte_process_info.arch;
</span><br>
<span class="quotelev1">&gt; +    ptr-&gt;arch = orte_proc_info.arch;
</span><br>
<span class="quotelev1">&gt;      OBJ_CONSTRUCT(&amp;ptr-&gt;attrs, opal_list_t);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/runtime/orte_globals.h   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/runtime/orte_globals.h   2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -58,13 +58,13 @@
</span><br>
<span class="quotelev1">&gt;  #define ORTE_NAME_INVALID       (&amp;orte_name_invalid)
</span><br>
<span class="quotelev1">&gt;  ORTE_DECLSPEC extern orte_process_name_t orte_name_invalid;  /**  
</span><br>
<span class="quotelev1">&gt; instantiated in orte/runtime/orte_init.c */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define ORTE_PROC_MY_NAME       (&amp;orte_process_info.my_name)
</span><br>
<span class="quotelev1">&gt; +#define ORTE_PROC_MY_NAME       (&amp;orte_proc_info.my_name)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* define a special name that belongs to orterun */
</span><br>
<span class="quotelev1">&gt; -#define ORTE_PROC_MY_HNP        (&amp;orte_process_info.my_hnp)
</span><br>
<span class="quotelev1">&gt; +#define ORTE_PROC_MY_HNP        (&amp;orte_proc_info.my_hnp)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* define the name of my daemon */
</span><br>
<span class="quotelev1">&gt; -#define ORTE_PROC_MY_DAEMON     (&amp;orte_process_info.my_daemon)
</span><br>
<span class="quotelev1">&gt; +#define ORTE_PROC_MY_DAEMON     (&amp;orte_proc_info.my_daemon)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* See comment in orte/tools/orterun/debuggers.c about this MCA
</span><br>
<span class="quotelev1">&gt;     param */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/runtime/orte_init.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/runtime/orte_init.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/runtime/orte_init.c      2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -81,7 +81,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* ensure we know the tool setting for when we finalize */
</span><br>
<span class="quotelev1">&gt;      if ((flags &amp; ORTE_TOOL) || (flags &amp; ORTE_TOOL_WITH_NAME)) {
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.tool = true;
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.tool = true;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup the locks */
</span><br>
<span class="quotelev1">&gt; @@ -90,8 +90,8 @@
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.daemon = false;
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.daemon = false;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Register all MCA Params */
</span><br>
<span class="quotelev1">&gt; @@ -111,8 +111,8 @@
</span><br>
<span class="quotelev1">&gt;      opal_error_register(&quot;ORTE&quot;, ORTE_ERR_BASE, ORTE_ERR_MAX,  
</span><br>
<span class="quotelev1">&gt; orte_err2str);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Ensure the rest of the process info structure is initialized  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_proc_info())) {
</span><br>
<span class="quotelev1">&gt; -        error = &quot;orte_proc_info&quot;;
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret = orte_proc_info_init())) {
</span><br>
<span class="quotelev1">&gt; +        error = &quot;orte_proc_info_init&quot;;
</span><br>
<span class="quotelev1">&gt;          goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/runtime/orte_mca_params.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/runtime/orte_mca_params.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/runtime/orte_mca_params.c        2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -47,7 +47,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_base_param_reg_string_name(&quot;orte&quot;, &quot;tmpdir_base&quot;,
</span><br>
<span class="quotelev1">&gt;                                     &quot;Base of the session directory  
</span><br>
<span class="quotelev1">&gt; tree&quot;,
</span><br>
<span class="quotelev1">&gt; -                                   false, false, NULL,   
</span><br>
<span class="quotelev1">&gt; &amp;(orte_process_info.tmpdir_base));
</span><br>
<span class="quotelev1">&gt; +                                   false, false, NULL,   
</span><br>
<span class="quotelev1">&gt; &amp;(orte_proc_info.tmpdir_base));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_base_param_reg_string_name(&quot;orte&quot;, &quot;no_session_dirs&quot;,
</span><br>
<span class="quotelev1">&gt;                                     &quot;Prohibited locations for  
</span><br>
<span class="quotelev1">&gt; session directories (multiple locations separated by ',',  
</span><br>
<span class="quotelev1">&gt; default=NULL)&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -156,7 +156,7 @@
</span><br>
<span class="quotelev1">&gt;          orte_timing = true;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          char *tmp;
</span><br>
<span class="quotelev1">&gt;          mca_base_param_reg_string_name(&quot;orte&quot;, &quot;timing_file&quot;,
</span><br>
<span class="quotelev1">&gt;                                         &quot;Name of the file where  
</span><br>
<span class="quotelev1">&gt; timing data is to be written (relative or absolute path)&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/test/system/oob_stress.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/test/system/oob_stress.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/test/system/oob_stress.c 2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -73,7 +73,7 @@
</span><br>
<span class="quotelev1">&gt;      peer.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      for (j=1; j &lt; count+1; j++) {
</span><br>
<span class="quotelev1">&gt; -        peer.vpid = (ORTE_PROC_MY_NAME-&gt;vpid + j) %  
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs;
</span><br>
<span class="quotelev1">&gt; +        peer.vpid = (ORTE_PROC_MY_NAME-&gt;vpid + j) %  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.num_procs;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* rank0 starts ring */
</span><br>
<span class="quotelev1">&gt;          if (ORTE_PROC_MY_NAME-&gt;vpid == 0) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/test/system/orte_abort.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/test/system/orte_abort.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/test/system/orte_abort.c 2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -39,7 +39,7 @@
</span><br>
<span class="quotelev1">&gt;          pi = i / 3.14159256;
</span><br>
<span class="quotelev1">&gt;          if (i &gt; 10000) i = 0;
</span><br>
<span class="quotelev1">&gt;          if ((ORTE_PROC_MY_NAME-&gt;vpid == 3 ||
</span><br>
<span class="quotelev1">&gt; -             (orte_process_info.num_procs &lt;= 3 &amp;&amp; ORTE_PROC_MY_NAME- 
</span><br>
<span class="quotelev2">&gt; &gt;vpid == 0))
</span><br>
<span class="quotelev1">&gt; +             (orte_proc_info.num_procs &lt;= 3 &amp;&amp; ORTE_PROC_MY_NAME- 
</span><br>
<span class="quotelev2">&gt; &gt;vpid == 0))
</span><br>
<span class="quotelev1">&gt;              &amp;&amp; i == 9995) {
</span><br>
<span class="quotelev1">&gt;              orte_errmgr.abort(1, NULL);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/test/system/orte_nodename.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/test/system/orte_nodename.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/test/system/orte_nodename.c      2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -28,8 +28,8 @@
</span><br>
<span class="quotelev1">&gt;      pid = getpid();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      printf(&quot;orte_nodename: Node %s %ld Name %s Pid %ld Local Rank:  
</span><br>
<span class="quotelev1">&gt; %ld Num_local_procs %ld\n&quot;,
</span><br>
<span class="quotelev1">&gt; -           hostname, (long)orte_process_info.nodeid,  
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), (long)pid,
</span><br>
<span class="quotelev1">&gt; -           (long)orte_process_info.local_rank,  
</span><br>
<span class="quotelev1">&gt; (long)orte_process_info.num_local_procs);
</span><br>
<span class="quotelev1">&gt; +           hostname, (long)orte_proc_info.nodeid,  
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), (long)pid,
</span><br>
<span class="quotelev1">&gt; +           (long)orte_proc_info.local_rank,  
</span><br>
<span class="quotelev1">&gt; (long)orte_proc_info.num_local_procs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      orte_finalize();
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/test/system/orte_ring.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/test/system/orte_ring.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/test/system/orte_ring.c  2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -31,7 +31,7 @@
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      orte_init(ORTE_NON_TOOL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    num_peers = orte_process_info.num_procs;
</span><br>
<span class="quotelev1">&gt; +    num_peers = orte_proc_info.num_procs;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * Construct Peer name in a ring
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/test/system/orte_spawn.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/test/system/orte_spawn.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/test/system/orte_spawn.c 2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -59,7 +59,7 @@
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;      /* launch the job */
</span><br>
<span class="quotelev1">&gt;      fprintf(stderr, &quot;Parent: My local rank is %ld with %ld  
</span><br>
<span class="quotelev1">&gt; num_local_procs - spawning children!\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                    (long)orte_process_info.local_rank,  
</span><br>
<span class="quotelev1">&gt; (long)orte_process_info.num_local_procs);
</span><br>
<span class="quotelev1">&gt; +                    (long)orte_proc_info.local_rank,  
</span><br>
<span class="quotelev1">&gt; (long)orte_proc_info.num_local_procs);
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (rc = orte_plm.spawn(jdata))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          orte_finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orte-clean/orte-clean.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orte-clean/orte-clean.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orte-clean/orte-clean.c    2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -171,9 +171,9 @@
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (orte_clean_globals.verbose) {
</span><br>
<span class="quotelev1">&gt;          fprintf(stderr, &quot;orte-clean: cleaning session dir tree %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    opal_os_dirpath_destroy(orte_process_info.top_session_dir,  
</span><br>
<span class="quotelev1">&gt; true, NULL);
</span><br>
<span class="quotelev1">&gt; +    opal_os_dirpath_destroy(orte_proc_info.top_session_dir, true,  
</span><br>
<span class="quotelev1">&gt; NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* now kill any lingering procs, if we can */
</span><br>
<span class="quotelev1">&gt;  #if !defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt; @@ -406,8 +406,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;                  /* if we are a singleton, check the hnp_pid as well  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; -                if (orte_process_info.singleton) {
</span><br>
<span class="quotelev1">&gt; -                    if (procpid != orte_process_info.hnp_pid) {
</span><br>
<span class="quotelev1">&gt; +                if (orte_proc_info.singleton) {
</span><br>
<span class="quotelev1">&gt; +                    if (procpid != orte_proc_info.hnp_pid) {
</span><br>
<span class="quotelev1">&gt;                          (void)kill(procpid, SIGKILL);
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt;                  } else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orterun/orterun.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orterun/orterun.c  2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -338,7 +338,7 @@
</span><br>
<span class="quotelev1">&gt;        &quot;Enable debugging of OpenRTE&quot; },
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      { NULL, NULL, NULL, '\0', &quot;tmpdir&quot;, &quot;tmpdir&quot;, 1,
</span><br>
<span class="quotelev1">&gt; -      &amp;orte_process_info.tmpdir_base, OPAL_CMD_LINE_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt; +      &amp;orte_proc_info.tmpdir_base, OPAL_CMD_LINE_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt;        &quot;Set the root for the session directory tree for orterun  
</span><br>
<span class="quotelev1">&gt; ONLY&quot; },
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      { &quot;orte&quot;, &quot;do_not&quot;, &quot;launch&quot;, '\0', &quot;do-not-launch&quot;, &quot;do-not- 
</span><br>
<span class="quotelev1">&gt; launch&quot;, 0,
</span><br>
<span class="quotelev1">&gt; @@ -444,7 +444,7 @@
</span><br>
<span class="quotelev1">&gt;      OBJ_CONSTRUCT(&amp;orteds_exit, orte_trigger_event_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* flag that I am the HNP */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.hnp = true;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.hnp = true;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Setup MCA params */
</span><br>
<span class="quotelev1">&gt;      orte_register_params();
</span><br>
<span class="quotelev1">&gt; @@ -607,10 +607,10 @@
</span><br>
<span class="quotelev1">&gt;      signals_set = true;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* we are an hnp, so update the contact info field for later  
</span><br>
<span class="quotelev1">&gt; use */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.my_hnp_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.my_hnp_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* we are also officially a daemon, so better update that field  
</span><br>
<span class="quotelev1">&gt; too */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.my_daemon_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.my_daemon_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* If we have a prefix, then modify the PATH and
</span><br>
<span class="quotelev1">&gt;          LD_LIBRARY_PATH environment variables in our copy. This
</span><br>
<span class="quotelev1">&gt; @@ -1496,11 +1496,11 @@
</span><br>
<span class="quotelev1">&gt;              pid = strtoul(ptr, NULL, 10);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              /* to search the local mpirun's, we have to partially  
</span><br>
<span class="quotelev1">&gt; initialize the
</span><br>
<span class="quotelev1">&gt; -             * orte_process_info structure. This won't fully be  
</span><br>
<span class="quotelev1">&gt; setup until orte_init,
</span><br>
<span class="quotelev1">&gt; +             * orte_proc_info structure. This won't fully be setup  
</span><br>
<span class="quotelev1">&gt; until orte_init,
</span><br>
<span class="quotelev1">&gt;               * but we finagle a little bit of it here
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_session_dir_get_name(NULL, &amp;orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                                                                 
</span><br>
<span class="quotelev1">&gt; &amp;orte_process_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt; +            if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_session_dir_get_name(NULL, &amp;orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                                                                 
</span><br>
<span class="quotelev1">&gt; &amp;orte_proc_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt;                                                                   
</span><br>
<span class="quotelev1">&gt; NULL, NULL, NULL))) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-orterun.txt&quot;, &quot;orterun:ompi- 
</span><br>
<span class="quotelev1">&gt; server-could-not-get-hnp-list&quot;, true,
</span><br>
<span class="quotelev1">&gt;                                 orterun_basename, orterun_basename);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/dash_host/dash_host.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/dash_host/dash_host.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/dash_host/dash_host.c       2009-03-05 15:36:44  
</span><br>
<span class="quotelev1">&gt; EST (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -89,7 +89,7 @@
</span><br>
<span class="quotelev1">&gt;               item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt;              node = (orte_node_t*) item;
</span><br>
<span class="quotelev1">&gt;              if (0 == strcmp(node-&gt;name, mapped_nodes[i]) ||
</span><br>
<span class="quotelev1">&gt; -               (0 == strcmp(node-&gt;name, orte_process_info.nodename)  
</span><br>
<span class="quotelev1">&gt; &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +               (0 == strcmp(node-&gt;name, orte_proc_info.nodename) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;                 (0 == strcmp(mapped_nodes[i], &quot;localhost&quot;) ||  
</span><br>
<span class="quotelev1">&gt; opal_ifislocal(mapped_nodes[i])))) {
</span><br>
<span class="quotelev1">&gt;                  ++node-&gt;slots;
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt; @@ -110,11 +110,11 @@
</span><br>
<span class="quotelev1">&gt;                   * later confusion
</span><br>
<span class="quotelev1">&gt;                   */
</span><br>
<span class="quotelev1">&gt;                  if (orte_show_resolved_nodenames &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                    0 != strcmp(mapped_nodes[i],  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename)) {
</span><br>
<span class="quotelev1">&gt; +                    0 != strcmp(mapped_nodes[i],  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename)) {
</span><br>
<span class="quotelev1">&gt;                      /* add to list of aliases for this node - only  
</span><br>
<span class="quotelev1">&gt; add if unique */
</span><br>
<span class="quotelev1">&gt;                      opal_argv_append_unique_nosize(&amp;node-&gt;alias,  
</span><br>
<span class="quotelev1">&gt; mapped_nodes[i]);
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; -                node-&gt;name = strdup(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                node-&gt;name = strdup(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;              } else {
</span><br>
<span class="quotelev1">&gt;                  /* not local - use the given name */
</span><br>
<span class="quotelev1">&gt;                  node-&gt;name = strdup(mapped_nodes[i]);
</span><br>
<span class="quotelev1">&gt; @@ -323,7 +323,7 @@
</span><br>
<span class="quotelev1">&gt;                  /* search -host list to see if this one is found */
</span><br>
<span class="quotelev1">&gt;                  found = false;
</span><br>
<span class="quotelev1">&gt;                  if ((0 == strcmp(node-&gt;name, mapped_nodes[i]) ||
</span><br>
<span class="quotelev1">&gt; -                    (0 == strcmp(node-&gt;name,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                    (0 == strcmp(node-&gt;name,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;                      (0 == strcmp(mapped_nodes[i], &quot;localhost&quot;) ||  
</span><br>
<span class="quotelev1">&gt; opal_ifislocal(mapped_nodes[i]))))) {
</span><br>
<span class="quotelev1">&gt;                      /* remove item from list */
</span><br>
<span class="quotelev1">&gt;                      opal_list_remove_item(nodes, item);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/hnp_contact.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/hnp_contact.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/hnp_contact.c       2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -89,7 +89,7 @@
</span><br>
<span class="quotelev1">&gt;      fprintf(fp, &quot;%s\n&quot;, my_uri);
</span><br>
<span class="quotelev1">&gt;      free(my_uri);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    fprintf(fp, &quot;%lu\n&quot;, (unsigned long)orte_process_info.pid);
</span><br>
<span class="quotelev1">&gt; +    fprintf(fp, &quot;%lu\n&quot;, (unsigned long)orte_proc_info.pid);
</span><br>
<span class="quotelev1">&gt;      fclose(fp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; @@ -185,7 +185,7 @@
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * Check to make sure we have access to the top-level directory
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    headdir = opal_os_path(false, orte_process_info.tmpdir_base,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.top_session_dir, NULL);
</span><br>
<span class="quotelev1">&gt; +    headdir = opal_os_path(false, orte_proc_info.tmpdir_base,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.top_session_dir, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if( ORTE_SUCCESS != (ret = opal_os_dirpath_access(headdir,  
</span><br>
<span class="quotelev1">&gt; 0) )) {
</span><br>
<span class="quotelev1">&gt;          /* it is okay not to find this as there may not be any
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/hostfile/hostfile.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/hostfile/hostfile.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/hostfile/hostfile.c 2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -184,11 +184,11 @@
</span><br>
<span class="quotelev1">&gt;              if (strcmp(node_name, &quot;localhost&quot;) == 0 ||  
</span><br>
<span class="quotelev1">&gt; opal_ifislocal(node_name)) {
</span><br>
<span class="quotelev1">&gt;                  /* Nodename has been allocated, that is for sure */
</span><br>
<span class="quotelev1">&gt;                  if (orte_show_resolved_nodenames &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                    0 != strcmp(node_name,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.nodename)) {
</span><br>
<span class="quotelev1">&gt; +                    0 != strcmp(node_name,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.nodename)) {
</span><br>
<span class="quotelev1">&gt;                      node_alias = strdup(node_name);
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;                  free (node_name);
</span><br>
<span class="quotelev1">&gt; -                node_name = strdup(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +                node_name = strdup(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              /* Do we need to make a new node object?  First check  
</span><br>
<span class="quotelev1">&gt; to see
</span><br>
<span class="quotelev1">&gt; @@ -211,11 +211,11 @@
</span><br>
<span class="quotelev1">&gt;          if (strcmp(node_name, &quot;localhost&quot;) == 0 ||  
</span><br>
<span class="quotelev1">&gt; opal_ifislocal(node_name)) {
</span><br>
<span class="quotelev1">&gt;              /* Nodename has been allocated, that is for sure */
</span><br>
<span class="quotelev1">&gt;              if (orte_show_resolved_nodenames &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                0 != strcmp(node_name, orte_process_info.nodename)) {
</span><br>
<span class="quotelev1">&gt; +                0 != strcmp(node_name, orte_proc_info.nodename)) {
</span><br>
<span class="quotelev1">&gt;                  node_alias = strdup(node_name);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              free (node_name);
</span><br>
<span class="quotelev1">&gt; -            node_name = strdup(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +            node_name = strdup(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((2, orte_debug_output,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/nidmap.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/nidmap.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/nidmap.c    2009-03-05 15:36:44 EST (Thu, 05 Mar  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -138,9 +138,9 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create a nidmap entry for this node */
</span><br>
<span class="quotelev1">&gt;      node = OBJ_NEW(orte_nid_t);
</span><br>
<span class="quotelev1">&gt; -    node-&gt;name = strdup(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +    node-&gt;name = strdup(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;      node-&gt;daemon = ORTE_PROC_MY_DAEMON-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; -    node-&gt;arch = orte_process_info.arch;
</span><br>
<span class="quotelev1">&gt; +    node-&gt;arch = orte_proc_info.arch;
</span><br>
<span class="quotelev1">&gt;      pmap = OBJ_NEW(orte_pmap_t);
</span><br>
<span class="quotelev1">&gt;      pmap-&gt;local_rank = 0;
</span><br>
<span class="quotelev1">&gt;      pmap-&gt;node_rank = 0;
</span><br>
<span class="quotelev1">&gt; @@ -689,8 +689,8 @@
</span><br>
<span class="quotelev1">&gt;      free(vpids);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* if we are a daemon or the HNP, update our num_procs */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp || orte_process_info.daemon) {
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.num_procs = num_daemons;
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp || orte_proc_info.daemon) {
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.num_procs = num_daemons;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* unpack a flag to see if we are in a homogeneous
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/proc_info.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/proc_info.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/proc_info.c 2009-03-05 15:36:44 EST (Thu, 05 Mar  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -37,7 +37,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -ORTE_DECLSPEC orte_proc_info_t orte_process_info = {
</span><br>
<span class="quotelev1">&gt; +ORTE_DECLSPEC orte_proc_info_t orte_proc_info = {
</span><br>
<span class="quotelev1">&gt;      /*  .my_name =              */   {ORTE_JOBID_INVALID,  
</span><br>
<span class="quotelev1">&gt; ORTE_VPID_INVALID},
</span><br>
<span class="quotelev1">&gt;      /*  .my_daemon =            */   {ORTE_JOBID_INVALID,  
</span><br>
<span class="quotelev1">&gt; ORTE_VPID_INVALID},
</span><br>
<span class="quotelev1">&gt;      /*  .my_daemon_uri =        */   NULL,
</span><br>
<span class="quotelev1">&gt; @@ -68,7 +68,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static bool init=false;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int orte_proc_info(void)
</span><br>
<span class="quotelev1">&gt; +int orte_proc_info_init(void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      int tmp;
</span><br>
<span class="quotelev1">&gt; @@ -95,7 +95,7 @@
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              ptr = &amp;uri[0];
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_hnp_uri = strdup(ptr);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_hnp_uri = strdup(ptr);
</span><br>
<span class="quotelev1">&gt;          free(uri);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -115,25 +115,25 @@
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              ptr = &amp;uri[0];
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_daemon_uri = strdup(ptr);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_daemon_uri = strdup(ptr);
</span><br>
<span class="quotelev1">&gt;          free(uri);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_base_param_reg_int_name(&quot;orte&quot;, &quot;app_num&quot;,
</span><br>
<span class="quotelev1">&gt;                                  &quot;Index of the app_context that  
</span><br>
<span class="quotelev1">&gt; defines this proc&quot;,
</span><br>
<span class="quotelev1">&gt;                                  true, false, -1, &amp;tmp);
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.app_num = tmp;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.app_num = tmp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* get the process id */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.pid = getpid();
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.pid = getpid();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* get the nodename */
</span><br>
<span class="quotelev1">&gt;      gethostname(hostname, ORTE_MAX_HOSTNAME_SIZE);
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.nodename = strdup(hostname);
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.nodename = strdup(hostname);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* get the arch */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS !=  
</span><br>
<span class="quotelev1">&gt; opal_arch_compute_local_id(&amp;orte_process_info.arch)) {
</span><br>
<span class="quotelev1">&gt; -        opal_output(0, &quot;Process on node %s could not obtain local  
</span><br>
<span class="quotelev1">&gt; architecture - aborting&quot;, orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS !=  
</span><br>
<span class="quotelev1">&gt; opal_arch_compute_local_id(&amp;orte_proc_info.arch)) {
</span><br>
<span class="quotelev1">&gt; +        opal_output(0, &quot;Process on node %s could not obtain local  
</span><br>
<span class="quotelev1">&gt; architecture - aborting&quot;, orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -141,11 +141,11 @@
</span><br>
<span class="quotelev1">&gt;      mca_base_param_reg_int_name(&quot;orte&quot;, &quot;num_nodes&quot;,
</span><br>
<span class="quotelev1">&gt;                                  &quot;Number of nodes in the job&quot;,
</span><br>
<span class="quotelev1">&gt;                                  true, false,
</span><br>
<span class="quotelev1">&gt; -                                orte_process_info.num_nodes, &amp;tmp);
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.num_nodes = tmp;
</span><br>
<span class="quotelev1">&gt; +                                orte_proc_info.num_nodes, &amp;tmp);
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.num_nodes = tmp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup the sync buffer */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.sync_buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.sync_buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -157,62 +157,62 @@
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.tmpdir_base) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.tmpdir_base);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.tmpdir_base = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.tmpdir_base) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.tmpdir_base);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.tmpdir_base = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.top_session_dir) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.top_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.top_session_dir) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.top_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.job_session_dir) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.job_session_dir);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.job_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.job_session_dir) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.job_session_dir);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.job_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.proc_session_dir) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.proc_session_dir);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.proc_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.proc_session_dir) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.proc_session_dir);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.proc_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.nodename) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.nodename = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.nodename) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.nodename = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.sock_stdin) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.sock_stdin);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.sock_stdin = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.sock_stdin) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.sock_stdin);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.sock_stdin = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.sock_stdout) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.sock_stdout);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.sock_stdout = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.sock_stdout) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.sock_stdout);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.sock_stdout = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.sock_stderr) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.sock_stderr);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.sock_stderr = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.sock_stderr) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.sock_stderr);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.sock_stderr = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.my_hnp_uri);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_hnp_uri = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.my_hnp_uri) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.my_hnp_uri);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_hnp_uri = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt; -        free(orte_process_info.my_daemon_uri);
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.my_daemon_uri = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.my_daemon_uri) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_proc_info.my_daemon_uri);
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.my_daemon_uri = NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.hnp = false;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.singleton = false;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.daemon = false;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.hnp = false;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.singleton = false;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.daemon = false;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    OBJ_RELEASE(orte_process_info.sync_buf);
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.sync_buf = NULL;
</span><br>
<span class="quotelev1">&gt; +    OBJ_RELEASE(orte_proc_info.sync_buf);
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.sync_buf = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      init = false;
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/proc_info.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/proc_info.h (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/proc_info.h 2009-03-05 15:36:44 EST (Thu, 05 Mar  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -42,7 +42,7 @@
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * Process information structure
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; - * The orte_proc_info() function fills the pid field and obtains the
</span><br>
<span class="quotelev1">&gt; + * The orte_proc_info_init() function fills the pid field and  
</span><br>
<span class="quotelev1">&gt; obtains the
</span><br>
<span class="quotelev1">&gt;   * process name, storing that information in the global structure.  
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt;   * structure also holds path names to the universe, job, and process
</span><br>
<span class="quotelev1">&gt;   * session directories, and to the stdin, stdout, and stderr temp
</span><br>
<span class="quotelev1">&gt; @@ -90,21 +90,21 @@
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Global process info descriptor.  Initialized to almost no
</span><br>
<span class="quotelev1">&gt;   * meaningful information - data is provided by calling \c
</span><br>
<span class="quotelev1">&gt; - * orte_rte_init() (which calls \c orte_proc_info() to fill in the
</span><br>
<span class="quotelev1">&gt; + * orte_rte_init() (which calls \c orte_proc_info_init() to fill in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;   * structure).
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; - * The exception to this rule is the \c orte_process_info.seed field,
</span><br>
<span class="quotelev1">&gt; + * The exception to this rule is the \c orte_proc_info.seed field,
</span><br>
<span class="quotelev1">&gt;   * which will be initialized to \c false, but should be set to \c  
</span><br>
<span class="quotelev1">&gt; true
</span><br>
<span class="quotelev1">&gt;   * before calling \c orte_rte_info() if the caller is a seed daemon.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; -ORTE_DECLSPEC extern orte_proc_info_t orte_process_info;
</span><br>
<span class="quotelev1">&gt; +ORTE_DECLSPEC extern orte_proc_info_t orte_proc_info;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * \internal
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Global structure to store a wide range of information about the
</span><br>
<span class="quotelev1">&gt; - * process.  orte_proc_info populates a global variable with
</span><br>
<span class="quotelev1">&gt; + * process.  orte_proc_info_init populates a global variable with
</span><br>
<span class="quotelev1">&gt;   * information about the process being executing. This function  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt;   * be called only once, from orte_rte_init().
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; @@ -114,7 +114,7 @@
</span><br>
<span class="quotelev1">&gt;   * @retval OMPI_ERROR Failed to initialize one or more fields.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -ORTE_DECLSPEC int orte_proc_info(void);
</span><br>
<span class="quotelev1">&gt; +ORTE_DECLSPEC int orte_proc_info_init(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ORTE_DECLSPEC int orte_proc_info_finalize(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/session_dir.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/session_dir.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/session_dir.c       2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -135,7 +135,7 @@
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Ensure that system info is set */
</span><br>
<span class="quotelev1">&gt; -    orte_proc_info();
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info_init();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /* get the name of the user */
</span><br>
<span class="quotelev1">&gt;  #ifndef __WINDOWS__
</span><br>
<span class="quotelev1">&gt; @@ -167,8 +167,8 @@
</span><br>
<span class="quotelev1">&gt;          hostname = strdup(hostid);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      else {            /* check if it is set elsewhere */
</span><br>
<span class="quotelev1">&gt; -        if( NULL != orte_process_info.nodename)
</span><br>
<span class="quotelev1">&gt; -            hostname = strdup(orte_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; +        if( NULL != orte_proc_info.nodename)
</span><br>
<span class="quotelev1">&gt; +            hostname = strdup(orte_proc_info.nodename);
</span><br>
<span class="quotelev1">&gt;          else {
</span><br>
<span class="quotelev1">&gt;              /* Couldn't find it, so fail */
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ORTE_ERR_BAD_PARAM);
</span><br>
<span class="quotelev1">&gt; @@ -190,8 +190,8 @@
</span><br>
<span class="quotelev1">&gt;       * Will look something like:
</span><br>
<span class="quotelev1">&gt;       *    openmpi-sessions-USERNAME_at_HOSTNAME_BATCHID
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (NULL != orte_process_info.top_session_dir) {
</span><br>
<span class="quotelev1">&gt; -        frontend = strdup(orte_process_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt; +    if (NULL != orte_proc_info.top_session_dir) {
</span><br>
<span class="quotelev1">&gt; +        frontend = strdup(orte_proc_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      else { /* If not set then construct it */
</span><br>
<span class="quotelev1">&gt;          if (0 &gt; asprintf(&amp;frontend, &quot;openmpi-sessions-%s@%s_%s&quot;,  
</span><br>
<span class="quotelev1">&gt; user, hostname, batchname)) {
</span><br>
<span class="quotelev1">&gt; @@ -282,8 +282,8 @@
</span><br>
<span class="quotelev1">&gt;          prefix_provided = true;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      /* Try to find a proper alternative prefix */
</span><br>
<span class="quotelev1">&gt; -    else if (NULL != orte_process_info.tmpdir_base) { /* stored  
</span><br>
<span class="quotelev1">&gt; value */
</span><br>
<span class="quotelev1">&gt; -        prefix = strdup(orte_process_info.tmpdir_base);
</span><br>
<span class="quotelev1">&gt; +    else if (NULL != orte_proc_info.tmpdir_base) { /* stored value */
</span><br>
<span class="quotelev1">&gt; +        prefix = strdup(orte_proc_info.tmpdir_base);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      else if( NULL != getenv(&quot;OMPI_PREFIX_ENV&quot;) ) { /* OMPI  
</span><br>
<span class="quotelev1">&gt; Environment var */
</span><br>
<span class="quotelev1">&gt;          prefix = strdup(getenv(&quot;OMPI_PREFIX_ENV&quot;));
</span><br>
<span class="quotelev1">&gt; @@ -459,24 +459,24 @@
</span><br>
<span class="quotelev1">&gt;       * global structure fields
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (create) {
</span><br>
<span class="quotelev1">&gt; -       if (NULL != orte_process_info.tmpdir_base) {
</span><br>
<span class="quotelev1">&gt; -           free(orte_process_info.tmpdir_base);
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.tmpdir_base = NULL;
</span><br>
<span class="quotelev1">&gt; -       }
</span><br>
<span class="quotelev1">&gt; -       if (NULL != orte_process_info.top_session_dir) {
</span><br>
<span class="quotelev1">&gt; -           free(orte_process_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.top_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +       if (NULL != orte_proc_info.tmpdir_base) {
</span><br>
<span class="quotelev1">&gt; +           free(orte_proc_info.tmpdir_base);
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.tmpdir_base = NULL;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +       if (NULL != orte_proc_info.top_session_dir) {
</span><br>
<span class="quotelev1">&gt; +           free(orte_proc_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.top_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * Update some of the global structures if they are empty
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (NULL == orte_process_info.tmpdir_base)
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.tmpdir_base = strdup(prefix);
</span><br>
<span class="quotelev1">&gt; +    if (NULL == orte_proc_info.tmpdir_base)
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.tmpdir_base = strdup(prefix);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (NULL == orte_process_info.top_session_dir)
</span><br>
<span class="quotelev1">&gt; -        orte_process_info.top_session_dir = strdup(frontend);
</span><br>
<span class="quotelev1">&gt; +    if (NULL == orte_proc_info.top_session_dir)
</span><br>
<span class="quotelev1">&gt; +        orte_proc_info.top_session_dir = strdup(frontend);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt; @@ -484,13 +484,13 @@
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_VPID_INVALID != proc-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt;         if (create) { /* overwrite if creating */
</span><br>
<span class="quotelev1">&gt; -           if (NULL != orte_process_info.proc_session_dir) {
</span><br>
<span class="quotelev1">&gt; -                free(orte_process_info.proc_session_dir);
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.proc_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +           if (NULL != orte_proc_info.proc_session_dir) {
</span><br>
<span class="quotelev1">&gt; +                free(orte_proc_info.proc_session_dir);
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.proc_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -       if (NULL == orte_process_info.proc_session_dir) {
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.proc_session_dir = strdup(fulldirpath);
</span><br>
<span class="quotelev1">&gt; +       if (NULL == orte_proc_info.proc_session_dir) {
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.proc_session_dir = strdup(fulldirpath);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* Strip off last part of directory structure */
</span><br>
<span class="quotelev1">&gt; @@ -505,25 +505,25 @@
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_JOBID_INVALID != proc-&gt;jobid) {
</span><br>
<span class="quotelev1">&gt;         if (create) { /* overwrite if creating */
</span><br>
<span class="quotelev1">&gt; -           if (NULL != orte_process_info.job_session_dir) {
</span><br>
<span class="quotelev1">&gt; -                free(orte_process_info.job_session_dir);
</span><br>
<span class="quotelev1">&gt; -                orte_process_info.job_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +           if (NULL != orte_proc_info.job_session_dir) {
</span><br>
<span class="quotelev1">&gt; +                free(orte_proc_info.job_session_dir);
</span><br>
<span class="quotelev1">&gt; +                orte_proc_info.job_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -       if (NULL == orte_process_info.job_session_dir) {
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.job_session_dir = strdup(fulldirpath);
</span><br>
<span class="quotelev1">&gt; +       if (NULL == orte_proc_info.job_session_dir) {
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.job_session_dir = strdup(fulldirpath);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (orte_debug_flag) {
</span><br>
<span class="quotelev1">&gt;         opal_output(0, &quot;procdir: %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                     
</span><br>
<span class="quotelev1">&gt; OMPI_PRINTF_FIX_STRING(orte_process_info.proc_session_dir));
</span><br>
<span class="quotelev1">&gt; +                     
</span><br>
<span class="quotelev1">&gt; OMPI_PRINTF_FIX_STRING(orte_proc_info.proc_session_dir));
</span><br>
<span class="quotelev1">&gt;         opal_output(0, &quot;jobdir: %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                     
</span><br>
<span class="quotelev1">&gt; OMPI_PRINTF_FIX_STRING(orte_process_info.job_session_dir));
</span><br>
<span class="quotelev1">&gt; +                     
</span><br>
<span class="quotelev1">&gt; OMPI_PRINTF_FIX_STRING(orte_proc_info.job_session_dir));
</span><br>
<span class="quotelev1">&gt;         opal_output(0, &quot;top: %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                     
</span><br>
<span class="quotelev1">&gt; OMPI_PRINTF_FIX_STRING(orte_process_info.top_session_dir));
</span><br>
<span class="quotelev1">&gt; +                     
</span><br>
<span class="quotelev1">&gt; OMPI_PRINTF_FIX_STRING(orte_proc_info.top_session_dir));
</span><br>
<span class="quotelev1">&gt;         opal_output(0, &quot;tmp: %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                     
</span><br>
<span class="quotelev1">&gt; OMPI_PRINTF_FIX_STRING(orte_process_info.tmpdir_base));
</span><br>
<span class="quotelev1">&gt; +                     
</span><br>
<span class="quotelev1">&gt; OMPI_PRINTF_FIX_STRING(orte_proc_info.tmpdir_base));
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   cleanup:
</span><br>
<span class="quotelev1">&gt; @@ -547,8 +547,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* need to setup the top_session_dir with the prefix */
</span><br>
<span class="quotelev1">&gt;      tmp = opal_os_path(false,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.top_session_dir, NULL);
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.top_session_dir, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* we can only blow away session directories for our job family  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;      if (0 &gt; asprintf(&amp;jobfam, &quot;%d&quot;,  
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid))) {
</span><br>
<span class="quotelev1">&gt; @@ -630,8 +630,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* need to setup the top_session_dir with the prefix */
</span><br>
<span class="quotelev1">&gt;      tmp = opal_os_path(false,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; -                       orte_process_info.top_session_dir, NULL);
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.tmpdir_base,
</span><br>
<span class="quotelev1">&gt; +                       orte_proc_info.top_session_dir, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* define the proc and job session directories for this process  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_util_convert_jobid_to_string(&amp;job, proc-&gt;jobid))) {
</span><br>
<span class="quotelev1">&gt; @@ -645,7 +645,7 @@
</span><br>
<span class="quotelev1">&gt;          free(job);
</span><br>
<span class="quotelev1">&gt;          return rc;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    job_session_dir = opal_os_path( false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt; +    job_session_dir = opal_os_path( false,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt;                                      job, NULL );
</span><br>
<span class="quotelev1">&gt;      if( NULL == job_session_dir ) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt; @@ -668,7 +668,7 @@
</span><br>
<span class="quotelev1">&gt;                              false, orte_dir_check_file);
</span><br>
<span class="quotelev1">&gt;      opal_os_dirpath_destroy(job_session_dir,
</span><br>
<span class="quotelev1">&gt;                              false, orte_dir_check_file);
</span><br>
<span class="quotelev1">&gt; -    opal_os_dirpath_destroy(orte_process_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt; +    opal_os_dirpath_destroy(orte_proc_info.top_session_dir,
</span><br>
<span class="quotelev1">&gt;                              false, orte_dir_check_file);
</span><br>
<span class="quotelev1">&gt;      opal_os_dirpath_destroy(tmp,
</span><br>
<span class="quotelev1">&gt;                              false, orte_dir_check_file);
</span><br>
<span class="quotelev1">&gt; @@ -697,11 +697,11 @@
</span><br>
<span class="quotelev1">&gt;          goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if  
</span><br>
<span class="quotelev1">&gt; (opal_os_dirpath_is_empty(orte_process_info.top_session_dir)) {
</span><br>
<span class="quotelev1">&gt; +    if (opal_os_dirpath_is_empty(orte_proc_info.top_session_dir)) {
</span><br>
<span class="quotelev1">&gt;         if (orte_debug_flag) {
</span><br>
<span class="quotelev1">&gt;             opal_output(0, &quot;sess_dir_finalize: found top session dir  
</span><br>
<span class="quotelev1">&gt; empty - deleting&quot;);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -       rmdir(orte_process_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt; +       rmdir(orte_proc_info.top_session_dir);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;         if (orte_debug_flag) {
</span><br>
<span class="quotelev1">&gt;             opal_output(0, &quot;sess_dir_finalize: top session dir not  
</span><br>
<span class="quotelev1">&gt; empty - leaving&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/session_dir.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/session_dir.h       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/session_dir.h       2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -108,7 +108,7 @@
</span><br>
<span class="quotelev1">&gt;   *                being built. Used to build the name of the
</span><br>
<span class="quotelev1">&gt;   *                &quot;openmpi-sessions-[user]@[host]:[batch]&quot; branch of
</span><br>
<span class="quotelev1">&gt;   *                the directory tree. NULL indicates that the  
</span><br>
<span class="quotelev1">&gt; nodename
</span><br>
<span class="quotelev1">&gt; - *                found in orte_process_info is to be used.
</span><br>
<span class="quotelev1">&gt; + *                found in orte_proc_info is to be used.
</span><br>
<span class="quotelev1">&gt;   * @param batchid Batch job name, used in batch scheduling
</span><br>
<span class="quotelev1">&gt;   *                systems. NULL indicates that the default of &quot;0&quot; is
</span><br>
<span class="quotelev1">&gt;   *                to be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/show_help.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/show_help.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/show_help.c 2009-03-05 15:36:44 EST (Thu, 05 Mar  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -379,7 +379,7 @@
</span><br>
<span class="quotelev1">&gt;      ready = false;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Shutdown show_help, showing final messages */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp) {
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp) {
</span><br>
<span class="quotelev1">&gt;          show_accumulated_duplicates(0, 0, NULL);
</span><br>
<span class="quotelev1">&gt;          OBJ_DESTRUCT(&amp;abd_tuples);
</span><br>
<span class="quotelev1">&gt;          if (show_help_timer_set) {
</span><br>
<span class="quotelev1">&gt; @@ -428,7 +428,7 @@
</span><br>
<span class="quotelev1">&gt;       * or we don't yet know our HNP, then all we can do
</span><br>
<span class="quotelev1">&gt;       * is process this locally
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (orte_process_info.hnp ||
</span><br>
<span class="quotelev1">&gt; +    if (orte_proc_info.hnp ||
</span><br>
<span class="quotelev1">&gt;          NULL == orte_rml.send_buffer ||
</span><br>
<span class="quotelev1">&gt;          ORTE_PROC_MY_HNP-&gt;vpid == ORTE_VPID_INVALID) {
</span><br>
<span class="quotelev1">&gt;          rc = show_help(filename, topic, output, ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/test/util/orte_session_dir.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/test/util/orte_session_dir.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/test/util/orte_session_dir.c  2009-03-05 15:36:44 EST  
</span><br>
<span class="quotelev1">&gt; (Thu, 05 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -55,11 +55,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    orte_proc_info(); /* initialize proc info structure */
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.my_name =  
</span><br>
<span class="quotelev1">&gt; (orte_process_name_t*)malloc(sizeof(orte_process_name_t));
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.my_name-&gt;cellid = 0;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.my_name-&gt;jobid = 0;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.my_name-&gt;vpid = 0;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info_init(); /* initialize proc info structure */
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.my_name =  
</span><br>
<span class="quotelev1">&gt; (orte_process_name_t*)malloc(sizeof(orte_process_name_t));
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.my_name-&gt;cellid = 0;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.my_name-&gt;jobid = 0;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.my_name-&gt;vpid = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      test_init(&quot;orte_session_dir_t&quot;);
</span><br>
<span class="quotelev1">&gt;      test_out = fopen( &quot;test_session_dir_out&quot;, &quot;w+&quot; );
</span><br>
<span class="quotelev1">&gt; @@ -170,8 +170,8 @@
</span><br>
<span class="quotelev1">&gt;          return(false);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    orte_session_dir_finalize(orte_process_info.my_name);
</span><br>
<span class="quotelev1">&gt; -    free(orte_process_info.universe_session_dir);
</span><br>
<span class="quotelev1">&gt; +    orte_session_dir_finalize(orte_proc_info.my_name);
</span><br>
<span class="quotelev1">&gt; +    free(orte_proc_info.universe_session_dir);
</span><br>
<span class="quotelev1">&gt;      free(prefix);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return true;
</span><br>
<span class="quotelev1">&gt; @@ -191,7 +191,7 @@
</span><br>
<span class="quotelev1">&gt;          return(false);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    orte_session_dir_finalize(orte_process_info.my_name);
</span><br>
<span class="quotelev1">&gt; +    orte_session_dir_finalize(orte_proc_info.my_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      unsetenv(&quot;OMPI_PREFIX_ENV&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -212,7 +212,7 @@
</span><br>
<span class="quotelev1">&gt;          return(false);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    orte_session_dir_finalize(orte_process_info.my_name);
</span><br>
<span class="quotelev1">&gt; +    orte_session_dir_finalize(orte_proc_info.my_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      unsetenv(&quot;TMPDIR&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -233,7 +233,7 @@
</span><br>
<span class="quotelev1">&gt;          return(false);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    orte_session_dir_finalize(orte_process_info.my_name);
</span><br>
<span class="quotelev1">&gt; +    orte_session_dir_finalize(orte_proc_info.my_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      unsetenv(&quot;TMP&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -254,7 +254,7 @@
</span><br>
<span class="quotelev1">&gt;          return(false);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    orte_session_dir_finalize(orte_process_info.my_name);
</span><br>
<span class="quotelev1">&gt; +    orte_session_dir_finalize(orte_proc_info.my_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      unsetenv(&quot;HOME&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -275,7 +275,7 @@
</span><br>
<span class="quotelev1">&gt;          return(false);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    orte_session_dir_finalize(orte_process_info.my_name);
</span><br>
<span class="quotelev1">&gt; +    orte_session_dir_finalize(orte_proc_info.my_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return(true);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -294,33 +294,33 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      fprintf(test_out, &quot;removing directories: %s\n\t%s\n\t%s\n&quot;,
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.universe_session_dir);
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.universe_session_dir);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create some files */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    filenm[0] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.proc_session_dir, &quot;dum1&quot;, NULL);
</span><br>
<span class="quotelev1">&gt; +    filenm[0] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.proc_session_dir, &quot;dum1&quot;, NULL);
</span><br>
<span class="quotelev1">&gt;      fp = fopen(filenm[0], &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;      fprintf(fp, &quot;ss&quot;);
</span><br>
<span class="quotelev1">&gt;      fclose(fp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    filenm[1] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.job_session_dir, &quot;dum2&quot;, NULL);
</span><br>
<span class="quotelev1">&gt; +    filenm[1] = opal_os_path(false, orte_proc_info.job_session_dir,  
</span><br>
<span class="quotelev1">&gt; &quot;dum2&quot;, NULL);
</span><br>
<span class="quotelev1">&gt;      fp = fopen(filenm[1], &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;      fprintf(fp, &quot;ss&quot;);
</span><br>
<span class="quotelev1">&gt;      fclose(fp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    filenm[2] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.universe_session_dir, &quot;dum3&quot;, NULL);
</span><br>
<span class="quotelev1">&gt; +    filenm[2] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.universe_session_dir, &quot;dum3&quot;, NULL);
</span><br>
<span class="quotelev1">&gt;      fp = fopen(filenm[2], &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;      fprintf(fp, &quot;ss&quot;);
</span><br>
<span class="quotelev1">&gt;      fclose(fp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_ERROR ==  
</span><br>
<span class="quotelev1">&gt; orte_session_dir_finalize(orte_process_info.my_name)) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_ERROR ==  
</span><br>
<span class="quotelev1">&gt; orte_session_dir_finalize(orte_proc_info.my_name)) {
</span><br>
<span class="quotelev1">&gt;         return(false);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      for (i=0; i &lt; 3; i++) unlink(filenm[i]);
</span><br>
<span class="quotelev1">&gt; -    orte_session_dir_finalize(orte_process_info.my_name);
</span><br>
<span class="quotelev1">&gt; +    orte_session_dir_finalize(orte_proc_info.my_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return true;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -339,44 +339,44 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      fprintf(test_out, &quot;removing directories: %s\n\t%s\n\t%s\n&quot;,
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; -           orte_process_info.universe_session_dir);
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.proc_session_dir,
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.job_session_dir,
</span><br>
<span class="quotelev1">&gt; +           orte_proc_info.universe_session_dir);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* create some files */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    filenm[0] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.proc_session_dir, &quot;dum1&quot;, NULL);
</span><br>
<span class="quotelev1">&gt; +    filenm[0] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.proc_session_dir, &quot;dum1&quot;, NULL);
</span><br>
<span class="quotelev1">&gt;      fp = fopen(filenm[0], &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;      fprintf(fp, &quot;ss&quot;);
</span><br>
<span class="quotelev1">&gt;      fclose(fp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    filenm[1] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.job_session_dir, &quot;dum2&quot;, NULL);
</span><br>
<span class="quotelev1">&gt; +    filenm[1] = opal_os_path(false, orte_proc_info.job_session_dir,  
</span><br>
<span class="quotelev1">&gt; &quot;dum2&quot;, NULL);
</span><br>
<span class="quotelev1">&gt;      fp = fopen(filenm[1], &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;      fprintf(fp, &quot;ss&quot;);
</span><br>
<span class="quotelev1">&gt;      fclose(fp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    filenm[2] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_process_info.universe_session_dir, &quot;dum3&quot;, NULL);
</span><br>
<span class="quotelev1">&gt; +    filenm[2] = opal_os_path(false,  
</span><br>
<span class="quotelev1">&gt; orte_proc_info.universe_session_dir, &quot;dum3&quot;, NULL);
</span><br>
<span class="quotelev1">&gt;      fp = fopen(filenm[2], &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;      fprintf(fp, &quot;ss&quot;);
</span><br>
<span class="quotelev1">&gt;      fclose(fp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_ERROR ==  
</span><br>
<span class="quotelev1">&gt; orte_session_dir_finalize(orte_process_info.my_name)) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_ERROR ==  
</span><br>
<span class="quotelev1">&gt; orte_session_dir_finalize(orte_proc_info.my_name)) {
</span><br>
<span class="quotelev1">&gt;            return(false);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      for (i=0; i &lt; 3; i++) unlink(filenm[i]);
</span><br>
<span class="quotelev1">&gt; -    orte_session_dir_finalize(orte_process_info.my_name);
</span><br>
<span class="quotelev1">&gt; +    orte_session_dir_finalize(orte_proc_info.my_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return true;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  void clear_proc_info(void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.tmpdir_base = NULL;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.top_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.universe_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.job_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; -    orte_process_info.proc_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.tmpdir_base = NULL;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.top_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.universe_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.job_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt; +    orte_proc_info.proc_session_dir = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5588.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
<li><strong>Previous message:</strong> <a href="5586.php">Eugene Loh: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5589.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<li><strong>Reply:</strong> <a href="5589.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
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
