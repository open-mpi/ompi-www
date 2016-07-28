<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 26 19:19:54 2011" -->
<!-- isoreceived="20110826231954" -->
<!-- sent="Fri, 26 Aug 2011 17:19:43 -0600" -->
<!-- isosent="20110826231943" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093" -->
<!-- id="6AE0C861-DE9A-40C7-ADC9-AE0424A6EFB7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F2E0F11D-8384-4C1C-93CC-BAF942396962_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-26 19:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9701.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Previous message:</strong> <a href="9699.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>In reply to:</strong> <a href="9699.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9702.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Reply:</strong> <a href="9702.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hate to say this, but the trunk is broken - won't build on Mac with that disabled. I'll try to dig into it later :-(
<br>
<p><p>On Aug 26, 2011, at 4:18 PM, Wesley Bland wrote:
<br>
<p><span class="quotelev1">&gt; The epoch and resilient rote code is now macro'd away. To enable use
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-resilient-orte
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which defines:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev1">&gt; ORTE_RESIL_ORTE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wesley
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2011, at 6:16 PM, wbland_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: wbland
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25093
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25093">https://svn.open-mpi.org/trac/ompi/changeset/25093</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; By popular demand the epoch code is now disabled by default. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To enable the epochs and the resilient orte code, use the configure flag:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-resilient-orte
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will define both:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c  |    12 ++++                                    
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/coll/sm2/coll_sm2_module.c                    |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c                   |    49 ++++++++----------                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/dpm/orte/dpm_orte.c                           |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/bfo/pml_bfo_failover.c                    |    10 +--                                     
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/bfo/pml_bfo_hdr.h                         |     6 --                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/proc/proc.c                                       |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/config/opal_configure_options.m4                  |     8 +++                                     
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/include/orte/types.h                              |    24 +++++++++                               
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/db/daemon/db_daemon.c                         |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/app/errmgr_app.c                       |    19 ++++++-                                 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/base/errmgr_base_fns.c                 |    12 ++--                                    
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/base/errmgr_base_tool.c                |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/hnp/errmgr_hnp.c                       |    99 +++++++++++++++++++++++++++------------ 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c                 |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c                 |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/errmgr/orted/errmgr_orted.c                   |    71 +++++++++++++++++++++-------            
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/alps/ess_alps_module.c                    |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/base/base.h                               |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/base/ess_base_select.c                    |    14 ++---                                   
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/env/ess_env_module.c                      |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/ess.h                                     |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/generic/ess_generic_module.c              |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/hnp/ess_hnp_module.c                      |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/lsf/ess_lsf_module.c                      |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/singleton/ess_singleton_module.c          |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/slave/ess_slave_module.c                  |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/slurm/ess_slurm_module.c                  |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/slurmd/ess_slurmd_module.c                |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/ess/tm/ess_tm_module.c                        |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/filem/rsh/filem_rsh_module.c                  |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c              |    21 ++-----                                 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c            |     8 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/base/base.h                               |     8 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/base/iof_base_open.c                      |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/hnp/iof_hnp.c                             |     7 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/hnp/iof_hnp_receive.c                     |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/orted/iof_orted.c                         |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/odls/base/odls_base_default_fns.c             |     7 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/odls/base/odls_base_open.c                    |     5 -                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/odls/base/odls_base_state.c                   |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/oob/tcp/oob_tcp_msg.c                         |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/oob/tcp/oob_tcp_peer.c                        |     5 ++                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_jobid.c                     |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_launch_support.c            |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_orted_cmds.c                |     8 +--                                     
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_receive.c                   |     7 ++                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_rsh_support.c               |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c           |    23 +++++----                               
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c             |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/seq/rmaps_seq.c                         |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmcast/base/rmcast_base_open.c                |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmcast/tcp/rmcast_tcp.c                       |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmcast/udp/rmcast_udp.c                       |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rml/base/rml_base_components.c                |     5 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rml/rml_types.h                               |     6 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/base/routed_base_components.c          |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/base/routed_base_register_sync.c       |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/binomial/routed_binomial.c             |    54 ++++++++++++---------                   
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/cm/routed_cm.c                         |    19 +++----                                 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/direct/routed_direct.c                 |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/linear/routed_linear.c                 |    17 +++---                                  
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/radix/routed_radix.c                   |    22 ++++----                                
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/slave/routed_slave.c                   |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/sensor/file/sensor_file.c                     |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/base/snapc_base_fns.c                   |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/full/snapc_full_global.c                |    12 ++--                                    
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/full/snapc_full_local.c                 |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/snapc/full/snapc_full_module.c                |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/sstore/base/sstore_base_fns.c                 |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/sstore/central/sstore_central_global.c        |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/sstore/central/sstore_central_local.c         |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/sstore/stage/sstore_stage_global.c            |     7 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/sstore/stage/sstore_stage_local.c             |    12 ++--                                    
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/orted/orted_comm.c                                |    20 ++++----                                
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/orted/orted_main.c                                |     7 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_compare_fns.c   |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c      |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c   |     6 ++                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_print_fns.c     |    19 +++++++                                 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_size_fns.c      |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_support.h       |    11 ++++                                    
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c |    10 +++                                     
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_data_server.c                        |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_globals.c                            |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_init.c                               |     9 +++                                     
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/runtime/orte_wait.h                               |     6 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/test/system/oob_stress.c                          |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/test/system/orte_ring.c                           |     6 -                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/test/system/orte_spawn.c                          |     4                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/tools/orte-ps/orte-ps.c                           |    10 +++                                     
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/tools/orte-top/orte-top.c                         |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/comm/comm.c                                  |     7 ++                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/comm/comm.h                                  |     5 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/hnp_contact.c                                |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/name_fns.c                                   |    47 ++++++++++++++----                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/name_fns.h                                   |    30 ++++++++++++                            
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/nidmap.c                                     |    13 ++++                                    
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/nidmap.h                                     |    11 ++++                                    
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/proc_info.c                                  |    14 ++++-                                   
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/test/util/orte_session_dir.c                           |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  101 files changed, 652 insertions(+), 362 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -693,8 +693,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;    bool found = false;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    BTL_VERBOSE((&quot;Searching for ep and proc with follow parameters:&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -                &quot;jobid %d, vpid %d, epoch %d, sid %&quot; PRIx64 &quot;, lid %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                process_name-&gt;jobid, process_name-&gt;vpid, process_name-&gt;epoch, subnet_id, lid));
</span><br>
<span class="quotelev2">&gt;&gt; +                &quot;jobid %d, vpid %d, &quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +                &quot;epoch %d, &quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +                &quot;sid %&quot; PRIx64 &quot;, lid %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                process_name-&gt;jobid, process_name-&gt;vpid, 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +                process_name-&gt;epoch, 
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +                subnet_id, lid));
</span><br>
<span class="quotelev2">&gt;&gt;    /* find ibproc */
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_THREAD_LOCK(&amp;mca_btl_openib_component.ib_lock);
</span><br>
<span class="quotelev2">&gt;&gt;    for (ib_proc = (mca_btl_openib_proc_t*)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/sm2/coll_sm2_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/sm2/coll_sm2_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/sm2/coll_sm2_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1208,7 +1208,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;            peer = OBJ_NEW(orte_namelist_t);
</span><br>
<span class="quotelev2">&gt;&gt;            peer-&gt;name.jobid = comm-&gt;c_local_group-&gt;grp_proc_pointers[i]-&gt;proc_name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            peer-&gt;name.vpid =  comm-&gt;c_local_group-&gt;grp_proc_pointers[i]-&gt;proc_name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            peer-&gt;name.epoch = comm-&gt;c_local_group-&gt;grp_proc_pointers[i]-&gt;proc_name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(peer-&gt;name.epoch,comm-&gt;c_local_group-&gt;grp_proc_pointers[i]-&gt;proc_name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;            opal_list_append(&amp;peers, &amp;peer-&gt;item);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        /* prepare send data */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -702,7 +702,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; void ompi_crcp_bkmrk_pml_peer_ref_construct(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref) {
</span><br>
<span class="quotelev2">&gt;&gt;    peer_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    peer_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    peer_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(peer_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;peer_ref-&gt;send_list,       opal_list_t);
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;peer_ref-&gt;isend_list,      opal_list_t);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -730,7 +730,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    peer_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    peer_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    peer_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(peer_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    while( NULL != (item = opal_list_remove_first(&amp;peer_ref-&gt;send_list)) ) {
</span><br>
<span class="quotelev2">&gt;&gt;        HOKE_TRAFFIC_MSG_REF_RETURN(item);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -840,7 +840,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    msg_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;matched        = INVALID_INT;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;done           = INVALID_INT;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -868,7 +868,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    msg_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;matched        = INVALID_INT;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;done           = INVALID_INT;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -902,7 +902,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    msg_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;done           = INVALID_INT;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;active         = INVALID_INT;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -934,7 +934,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    msg_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;done           = INVALID_INT;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ref-&gt;active         = INVALID_INT;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -954,7 +954,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ack_ref-&gt;peer.jobid  = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ack_ref-&gt;peer.vpid   = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    msg_ack_ref-&gt;peer.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(msg_ack_ref-&gt;peer.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; void ompi_crcp_bkmrk_pml_drain_message_ack_ref_destruct( ompi_crcp_bkmrk_pml_drain_message_ack_ref_t *msg_ack_ref) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -962,7 +962,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ack_ref-&gt;peer.jobid  = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    msg_ack_ref-&gt;peer.vpid   = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    msg_ack_ref-&gt;peer.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(msg_ack_ref-&gt;peer.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1015,7 +1015,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -#define CREATE_NEW_MSG(msg_ref, v_type, v_count, v_ddt_size, v_tag, v_rank, v_comm, p_jobid, p_vpid, p_epoch) \
</span><br>
<span class="quotelev2">&gt;&gt; +#define CREATE_NEW_MSG(msg_ref, v_type, v_count, v_ddt_size, v_tag, v_rank, v_comm, p_jobid, p_vpid) \
</span><br>
<span class="quotelev2">&gt;&gt; {                                                               \
</span><br>
<span class="quotelev2">&gt;&gt;   HOKE_TRAFFIC_MSG_REF_ALLOC(msg_ref, ret);                     \
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1034,7 +1034,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 \
</span><br>
<span class="quotelev2">&gt;&gt;   msg_ref-&gt;proc_name.jobid  = p_jobid;                          \
</span><br>
<span class="quotelev2">&gt;&gt;   msg_ref-&gt;proc_name.vpid   = p_vpid;                           \
</span><br>
<span class="quotelev2">&gt;&gt; -   msg_ref-&gt;proc_name.epoch  = p_epoch;                          \
</span><br>
<span class="quotelev2">&gt;&gt; +   ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,orte_ess.proc_get_epoch(&amp;(msg_ref-&gt;proc_name))); \
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 \
</span><br>
<span class="quotelev2">&gt;&gt;   msg_ref-&gt;matched = 0;                                         \
</span><br>
<span class="quotelev2">&gt;&gt;   msg_ref-&gt;done    = 0;                                         \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1043,7 +1043,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   msg_ref-&gt;active_drain = 0;                                    \
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -#define CREATE_NEW_DRAIN_MSG(msg_ref, v_type, v_count, v_ddt_size, v_tag, v_rank, v_comm, p_jobid, p_vpid, p_epoch) \
</span><br>
<span class="quotelev2">&gt;&gt; +#define CREATE_NEW_DRAIN_MSG(msg_ref, v_type, v_count, v_ddt_size, v_tag, v_rank, v_comm, p_jobid, p_vpid) \
</span><br>
<span class="quotelev2">&gt;&gt; {                                                               \
</span><br>
<span class="quotelev2">&gt;&gt;   HOKE_DRAIN_MSG_REF_ALLOC(msg_ref, ret);                       \
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1063,7 +1063,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 \
</span><br>
<span class="quotelev2">&gt;&gt;   msg_ref-&gt;proc_name.jobid  = p_jobid;                          \
</span><br>
<span class="quotelev2">&gt;&gt;   msg_ref-&gt;proc_name.vpid   = p_vpid;                           \
</span><br>
<span class="quotelev2">&gt;&gt; -   msg_ref-&gt;proc_name.epoch  = p_epoch;                          \
</span><br>
<span class="quotelev2">&gt;&gt; +   ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,orte_ess.proc_get_epoch(&amp;(msg_ref-&gt;proc_name))); \
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1466,7 +1466,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        new_peer_ref-&gt;proc_name.jobid  = procs[i]-&gt;proc_name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        new_peer_ref-&gt;proc_name.vpid   = procs[i]-&gt;proc_name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        new_peer_ref-&gt;proc_name.epoch  = procs[i]-&gt;proc_name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(new_peer_ref-&gt;proc_name.epoch,procs[i]-&gt;proc_name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        opal_list_append(&amp;ompi_crcp_bkmrk_pml_peer_refs, &amp;(new_peer_ref-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -3237,13 +3237,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;            CREATE_NEW_MSG((*msg_ref), msg_type,
</span><br>
<span class="quotelev2">&gt;&gt;                           count, ddt_size, tag, dest, comm,
</span><br>
<span class="quotelev2">&gt;&gt;                           peer_ref-&gt;proc_name.jobid,
</span><br>
<span class="quotelev2">&gt;&gt; -                           peer_ref-&gt;proc_name.vpid,
</span><br>
<span class="quotelev2">&gt;&gt; -                           peer_ref-&gt;proc_name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +                           peer_ref-&gt;proc_name.vpid);
</span><br>
<span class="quotelev2">&gt;&gt;        } else {
</span><br>
<span class="quotelev2">&gt;&gt;            CREATE_NEW_MSG((*msg_ref), msg_type,
</span><br>
<span class="quotelev2">&gt;&gt;                           count, ddt_size, tag, dest, comm,
</span><br>
<span class="quotelev2">&gt;&gt; -                           ORTE_JOBID_INVALID, ORTE_VPID_INVALID,
</span><br>
<span class="quotelev2">&gt;&gt; -                           ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt; +                           ORTE_JOBID_INVALID, ORTE_VPID_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        if( msg_type == COORD_MSG_TYPE_P_SEND ||
</span><br>
<span class="quotelev2">&gt;&gt; @@ -3377,7 +3375,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL == from_peer_ref &amp;&amp; NULL != to_peer_ref ) {
</span><br>
<span class="quotelev2">&gt;&gt;        (*new_msg_ref)-&gt;proc_name.jobid = to_peer_ref-&gt;proc_name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        (*new_msg_ref)-&gt;proc_name.vpid  = to_peer_ref-&gt;proc_name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        (*new_msg_ref)-&gt;proc_name.epoch = to_peer_ref-&gt;proc_name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET((*new_msg_ref)-&gt;proc_name.epoch,to_peer_ref-&gt;proc_name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return exit_status;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -3808,8 +3806,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        CREATE_NEW_DRAIN_MSG((*msg_ref), msg_type,
</span><br>
<span class="quotelev2">&gt;&gt;                             count, NULL, tag, dest, comm,
</span><br>
<span class="quotelev2">&gt;&gt;                             peer_ref-&gt;proc_name.jobid,
</span><br>
<span class="quotelev2">&gt;&gt; -                             peer_ref-&gt;proc_name.vpid,
</span><br>
<span class="quotelev2">&gt;&gt; -                             peer_ref-&gt;proc_name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +                             peer_ref-&gt;proc_name.vpid);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        (*msg_ref)-&gt;done           = 0;
</span><br>
<span class="quotelev2">&gt;&gt;        (*msg_ref)-&gt;active         = 0;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -5284,8 +5281,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev2">&gt;&gt; -    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(peer_name.epoch,orte_ess.proc_get_epoch(&amp;peer_name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL == (peer_ref = find_peer(peer_name))) {
</span><br>
<span class="quotelev2">&gt;&gt;        opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -5346,8 +5342,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev2">&gt;&gt; -    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(peer_name.epoch,orte_ess.proc_get_epoch(&amp;peer_name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if ( 0 &gt; (ret = orte_rml.recv_buffer_nb(&amp;peer_name,
</span><br>
<span class="quotelev2">&gt;&gt;                                            OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -5529,7 +5524,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;    HOKE_DRAIN_ACK_MSG_REF_ALLOC(d_msg_ack, ret);
</span><br>
<span class="quotelev2">&gt;&gt;    d_msg_ack-&gt;peer.jobid  = peer_ref-&gt;proc_name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    d_msg_ack-&gt;peer.vpid   = peer_ref-&gt;proc_name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    d_msg_ack-&gt;peer.epoch  = peer_ref-&gt;proc_name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(d_msg_ack-&gt;peer.epoch,peer_ref-&gt;proc_name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    d_msg_ack-&gt;complete    = false;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_append(&amp;drained_msg_ack_list, &amp;(d_msg_ack-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((10, mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -6169,8 +6165,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                       count, datatype_size, tag, rank,
</span><br>
<span class="quotelev2">&gt;&gt;                       ompi_comm_lookup(comm_id),
</span><br>
<span class="quotelev2">&gt;&gt;                       peer_ref-&gt;proc_name.jobid,
</span><br>
<span class="quotelev2">&gt;&gt; -                       peer_ref-&gt;proc_name.vpid,
</span><br>
<span class="quotelev2">&gt;&gt; -                       peer_ref-&gt;proc_name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +                       peer_ref-&gt;proc_name.vpid);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        traffic_message_create_drain_message(true, num_left_unresolved,
</span><br>
<span class="quotelev2">&gt;&gt;                                             peer_ref,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1130,7 +1130,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    /* flag the identity of the remote proc */
</span><br>
<span class="quotelev2">&gt;&gt;    carport.jobid = mev-&gt;sender.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    carport.vpid = mev-&gt;sender.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    carport.epoch = mev-&gt;sender.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(carport.epoch,mev-&gt;sender.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* release the event */
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_RELEASE(mev);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/bfo/pml_bfo_failover.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/bfo/pml_bfo_failover.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/bfo/pml_bfo_failover.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1,8 +1,5 @@
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2010      Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2004-2011 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt;&gt; - *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt;&gt; - *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -398,13 +395,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;        (hdr-&gt;hdr_match.hdr_seq != (uint16_t)recvreq-&gt;req_msgseq)) {
</span><br>
<span class="quotelev2">&gt;&gt;        orte_proc.jobid = hdr-&gt;hdr_restart.hdr_jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        orte_proc.vpid = hdr-&gt;hdr_restart.hdr_vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        orte_proc.epoch = hdr-&gt;hdr_restart.hdr_epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;        ompi_proc = ompi_proc_find(&amp;orte_proc);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_output_verbose(20, mca_pml_bfo_output,
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;RNDVRESTARTNOTIFY: received: does not match request, sending NACK back &quot;
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;PML:req=%d,hdr=%d CTX:req=%d,hdr=%d SRC:req=%d,hdr=%d &quot;
</span><br>
<span class="quotelev2">&gt;&gt;                            &quot;RQS:req=%d,hdr=%d src_req=%p, dst_req=%p, peer=%d, hdr-&gt;hdr_jobid=%d, &quot;
</span><br>
<span class="quotelev2">&gt;&gt; -                            &quot;hdr-&gt;hdr_vpid=%d, hdr-&gt;hdr_epoch=%d, ompi_proc-&gt;proc_hostname=%s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                            &quot;hdr-&gt;hdr_vpid=%d, ompi_proc-&gt;proc_hostname=%s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                            (uint16_t)recvreq-&gt;req_msgseq, hdr-&gt;hdr_match.hdr_seq,
</span><br>
<span class="quotelev2">&gt;&gt;                            recvreq-&gt;req_recv.req_base.req_comm-&gt;c_contextid, hdr-&gt;hdr_match.hdr_ctx,
</span><br>
<span class="quotelev2">&gt;&gt;                            recvreq-&gt;req_recv.req_base.req_ompi.req_status.MPI_SOURCE,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -413,7 +410,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                            recvreq-&gt;remote_req_send.pval, (void *)recvreq,
</span><br>
<span class="quotelev2">&gt;&gt;                            recvreq-&gt;req_recv.req_base.req_ompi.req_status.MPI_SOURCE,
</span><br>
<span class="quotelev2">&gt;&gt;                            hdr-&gt;hdr_restart.hdr_jobid, hdr-&gt;hdr_restart.hdr_vpid, 
</span><br>
<span class="quotelev2">&gt;&gt; -                            hdr-&gt;hdr_restart.hdr_epoch, ompi_proc-&gt;proc_hostname);
</span><br>
<span class="quotelev2">&gt;&gt; +                            ompi_proc-&gt;proc_hostname);
</span><br>
<span class="quotelev2">&gt;&gt;        mca_pml_bfo_recv_request_rndvrestartnack(des, ompi_proc, false);
</span><br>
<span class="quotelev2">&gt;&gt;        return;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -715,7 +712,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;    restart-&gt;hdr_dst_rank = sendreq-&gt;req_send.req_base.req_peer; /* Needed for NACKs */
</span><br>
<span class="quotelev2">&gt;&gt;    restart-&gt;hdr_jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    restart-&gt;hdr_vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    restart-&gt;hdr_epoch = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    bfo_hdr_hton(restart, MCA_PML_BFO_HDR_TYPE_RNDVRESTARTNOTIFY, proc);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/bfo/pml_bfo_hdr.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/bfo/pml_bfo_hdr.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/bfo/pml_bfo_hdr.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2,9 +2,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt;&gt; *                         University Research and Technology
</span><br>
<span class="quotelev2">&gt;&gt; *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2004-2011 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt;&gt; - *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt;&gt; - *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev2">&gt;&gt; *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; @@ -415,7 +412,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;    int32_t  hdr_dst_rank;                    /**&lt; needed to send NACK */
</span><br>
<span class="quotelev2">&gt;&gt;    uint32_t hdr_jobid;                       /**&lt; needed to send NACK */
</span><br>
<span class="quotelev2">&gt;&gt;    uint32_t hdr_vpid;                        /**&lt; needed to send NACK */
</span><br>
<span class="quotelev2">&gt;&gt; -    uint32_t hdr_epoch;                       /**&lt; needed to send NACK */
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct mca_pml_bfo_restart_hdr_t mca_pml_bfo_restart_hdr_t;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -428,7 +424,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;    (h).hdr_dst_rank = ntohl((h).hdr_dst_rank); \
</span><br>
<span class="quotelev2">&gt;&gt;    (h).hdr_jobid = ntohl((h).hdr_jobid); \
</span><br>
<span class="quotelev2">&gt;&gt;    (h).hdr_vpid = ntohl((h).hdr_vpid); \
</span><br>
<span class="quotelev2">&gt;&gt; -    (h).hdr_epoch = ntohl((h).hdr_epoch); \
</span><br>
<span class="quotelev2">&gt;&gt;    } while (0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define MCA_PML_BFO_RESTART_HDR_HTON(h) \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -437,7 +432,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;    (h).hdr_dst_rank = htonl((h).hdr_dst_rank); \
</span><br>
<span class="quotelev2">&gt;&gt;    (h).hdr_jobid = htonl((h).hdr_jobid); \
</span><br>
<span class="quotelev2">&gt;&gt;    (h).hdr_vpid = htonl((h).hdr_vpid); \
</span><br>
<span class="quotelev2">&gt;&gt; -    (h).hdr_epoch = htonl((h).hdr_epoch); \
</span><br>
<span class="quotelev2">&gt;&gt;    } while (0) 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #endif /* PML_BFO */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/proc/proc.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/proc/proc.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/proc/proc.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -108,7 +108,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;proc_name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;proc_name.vpid = i;
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;proc_name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;        if (i == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt;&gt;            ompi_proc_local_proc = proc;
</span><br>
<span class="quotelev2">&gt;&gt;            proc-&gt;proc_flags = OPAL_PROC_ALL_LOCAL;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -362,8 +363,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* Does not change: proc-&gt;proc_name.vpid */
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;proc_name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;proc_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;proc_name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;proc_name);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc-&gt;proc_name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;proc_name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* Make sure to clear the local flag before we set it below */
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;proc_flags = 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/config/opal_configure_options.m4
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/config/opal_configure_options.m4	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/config/opal_configure_options.m4	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -416,6 +416,14 @@
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(WANT_FT_CR,  test &quot;$opal_want_ft_cr&quot; = &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; +# Compile in resilient runtime code
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +AC_ARG_ENABLE(resilient-orte,
</span><br>
<span class="quotelev2">&gt;&gt; +    [AC_HELP_STRING([--enable-resilient-orte], [Enable the resilient runtime code.])])
</span><br>
<span class="quotelev2">&gt;&gt; +AM_CONDITIONAL(ORTE_RESIL_ORTE, [test &quot;$enable_resilient_orte&quot; = &quot;yes&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; +AM_CONDITIONAL(ORTE_ENABLE_EPOCH, [test &quot;$enable_resilient_orte&quot; = &quot;yes&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; # Do we want to install binaries?
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; AC_ARG_ENABLE([binaries],
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/include/orte/types.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/include/orte/types.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/include/orte/types.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -81,24 +81,43 @@
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_VPID_T         OPAL_UINT32
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_VPID_MAX       UINT32_MAX-2
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_VPID_MIN       0
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; typedef uint32_t orte_epoch_t;
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_EPOCH_T        OPAL_UINT32
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_EPOCH_MAX      UINT32_MAX-2
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_EPOCH_MIN      0
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_PROCESS_NAME_HTON(n)       \
</span><br>
<span class="quotelev2">&gt;&gt; do {                                    \
</span><br>
<span class="quotelev2">&gt;&gt;    n.jobid = htonl(n.jobid);           \
</span><br>
<span class="quotelev2">&gt;&gt;    n.vpid = htonl(n.vpid);             \
</span><br>
<span class="quotelev2">&gt;&gt;    n.epoch = htonl(n.epoch);           \
</span><br>
<span class="quotelev2">&gt;&gt; } while (0)
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_PROCESS_NAME_HTON(n)       \
</span><br>
<span class="quotelev2">&gt;&gt; +do {                                    \
</span><br>
<span class="quotelev2">&gt;&gt; +    n.jobid = htonl(n.jobid);           \
</span><br>
<span class="quotelev2">&gt;&gt; +    n.vpid = htonl(n.vpid);             \
</span><br>
<span class="quotelev2">&gt;&gt; +} while (0)
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_PROCESS_NAME_NTOH(n)       \
</span><br>
<span class="quotelev2">&gt;&gt; do {                                    \
</span><br>
<span class="quotelev2">&gt;&gt;    n.jobid = ntohl(n.jobid);           \
</span><br>
<span class="quotelev2">&gt;&gt;    n.vpid = ntohl(n.vpid);             \
</span><br>
<span class="quotelev2">&gt;&gt;    n.epoch = ntohl(n.epoch);           \
</span><br>
<span class="quotelev2">&gt;&gt; } while (0)
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_PROCESS_NAME_NTOH(n)       \
</span><br>
<span class="quotelev2">&gt;&gt; +do {                                    \
</span><br>
<span class="quotelev2">&gt;&gt; +    n.jobid = ntohl(n.jobid);           \
</span><br>
<span class="quotelev2">&gt;&gt; +    n.vpid = ntohl(n.vpid);             \
</span><br>
<span class="quotelev2">&gt;&gt; +} while (0)
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_NAME_ARGS(n) \
</span><br>
<span class="quotelev2">&gt;&gt;    (unsigned long) ((NULL == n) ? (unsigned long)ORTE_JOBID_INVALID : (unsigned long)(n)-&gt;jobid), \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -127,6 +146,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; struct orte_process_name_t {
</span><br>
<span class="quotelev2">&gt;&gt;    orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev2">&gt;&gt;    orte_vpid_t vpid;       /**&lt; Process id - equivalent to rank */
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    orte_epoch_t epoch;     /**&lt; Epoch - used to measure the generation of a recovered process.
</span><br>
<span class="quotelev2">&gt;&gt;                             *   The epoch will start at ORTE_EPOCH_MIN and
</span><br>
<span class="quotelev2">&gt;&gt;                             *   increment every time the process is detected as
</span><br>
<span class="quotelev2">&gt;&gt; @@ -135,6 +155,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                             *   processes that did not directly detect the
</span><br>
<span class="quotelev2">&gt;&gt;                             *   failure to increment their epochs.
</span><br>
<span class="quotelev2">&gt;&gt;                             */
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct orte_process_name_t orte_process_name_t;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -157,7 +178,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; #define    ORTE_NAME                (OPAL_DSS_ID_DYNAMIC + 2)  /**&lt; an orte_process_name_t */
</span><br>
<span class="quotelev2">&gt;&gt; #define    ORTE_VPID                (OPAL_DSS_ID_DYNAMIC + 3)  /**&lt; a vpid */
</span><br>
<span class="quotelev2">&gt;&gt; #define    ORTE_JOBID               (OPAL_DSS_ID_DYNAMIC + 4)  /**&lt; a jobid */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; #define    ORTE_EPOCH               (OPAL_DSS_ID_DYNAMIC + 5)  /**&lt; an epoch */
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt;    /* State-related types */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/db/daemon/db_daemon.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/db/daemon/db_daemon.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/db/daemon/db_daemon.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -386,7 +386,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            dat = OBJ_NEW(orte_db_data_t);
</span><br>
<span class="quotelev2">&gt;&gt;            dat-&gt;name.jobid = sender-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            dat-&gt;name.vpid = sender-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            dat-&gt;name.epoch= sender-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(dat-&gt;name.epoch,sender-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;            dat-&gt;key = key;
</span><br>
<span class="quotelev2">&gt;&gt;            count=1;
</span><br>
<span class="quotelev2">&gt;&gt;            opal_dss.unpack(buf, &amp;dat-&gt;size, &amp;count, OPAL_INT32);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/app/errmgr_app.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/app/errmgr_app.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/app/errmgr_app.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -82,8 +82,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;    NULL,
</span><br>
<span class="quotelev2">&gt;&gt;    NULL,
</span><br>
<span class="quotelev2">&gt;&gt;    NULL,
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_errmgr_base_register_migration_warning,
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_errmgr_base_set_fault_callback
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_errmgr_base_register_migration_warning
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; +    ,orte_errmgr_base_set_fault_callback
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /************************
</span><br>
<span class="quotelev2">&gt;&gt; @@ -93,18 +95,23 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int ret = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;    ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt;&gt;                                  ORTE_RML_TAG_EPOCH_CHANGE, 
</span><br>
<span class="quotelev2">&gt;&gt;                                  ORTE_RML_PERSISTENT, 
</span><br>
<span class="quotelev2">&gt;&gt;                                  epoch_change_recv, 
</span><br>
<span class="quotelev2">&gt;&gt;                                  NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; static int finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;    orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt;&gt;                         ORTE_RML_TAG_EPOCH_CHANGE);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -151,6 +158,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; void epoch_change_recv(int status, 
</span><br>
<span class="quotelev2">&gt;&gt;                       orte_process_name_t *sender, 
</span><br>
<span class="quotelev2">&gt;&gt;                       opal_buffer_t *buffer, 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -209,15 +217,20 @@
</span><br>
<span class="quotelev2">&gt;&gt;                    ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        (*fault_cbfunc)(procs);
</span><br>
<span class="quotelev2">&gt;&gt; +    } else if (NULL == fault_cbfunc) {
</span><br>
<span class="quotelev2">&gt;&gt; +        OPAL_OUTPUT_VERBOSE((1, orte_errmgr_base.output,
</span><br>
<span class="quotelev2">&gt;&gt; +                    &quot;%s errmgr:app Calling fault callback failed (NULL pointer)!&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                    ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL_OUTPUT_VERBOSE((1, orte_errmgr_base.output,
</span><br>
<span class="quotelev2">&gt;&gt; -                    &quot;%s errmgr:app Calling fault callback failed!&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                    &quot;%s errmgr:app Calling fault callback failed (num_dead &lt;= 0)!&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                    ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    free(proc);
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_RELEASE(procs);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; static int orte_errmgr_app_abort_peers(orte_process_name_t *procs, orte_std_cntr_t num_procs)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/base/errmgr_base_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/base/errmgr_base_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/base/errmgr_base_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -97,13 +97,13 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;proc_name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;proc_name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    item-&gt;proc_name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(item-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; void orte_errmgr_predicted_proc_destruct( orte_errmgr_predicted_proc_t *item)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;proc_name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    item-&gt;proc_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(item-&gt;proc_name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;proc_name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -139,13 +139,13 @@
</span><br>
<span class="quotelev2">&gt;&gt; void orte_errmgr_predicted_map_construct(orte_errmgr_predicted_map_t *item)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;proc_name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    item-&gt;proc_name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(item-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;proc_name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;node_name = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;map_proc_name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    item-&gt;map_proc_name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(item-&gt;map_proc_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;map_proc_name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;map_node_name = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -156,7 +156,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; void orte_errmgr_predicted_map_destruct( orte_errmgr_predicted_map_t *item)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;proc_name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    item-&gt;proc_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(item-&gt;proc_name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;proc_name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL != item-&gt;node_name ) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -165,7 +165,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;map_proc_name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    item-&gt;map_proc_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(item-&gt;map_proc_name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt;    item-&gt;map_proc_name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL != item-&gt;map_node_name ) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/base/errmgr_base_tool.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/base/errmgr_base_tool.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/base/errmgr_base_tool.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -267,7 +267,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    errmgr_cmdline_sender.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    errmgr_cmdline_sender.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    errmgr_cmdline_sender.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(errmgr_cmdline_sender.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt;&gt;                                                       ORTE_RML_TAG_MIGRATE,
</span><br>
<span class="quotelev2">&gt;&gt;                                                       0,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -379,14 +379,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if( OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ORTE_NAME_INVALID, &amp;errmgr_cmdline_sender) ) {
</span><br>
<span class="quotelev2">&gt;&gt;        swap_dest.jobid = errmgr_cmdline_sender.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        swap_dest.vpid  = errmgr_cmdline_sender.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        swap_dest.epoch = errmgr_cmdline_sender.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(swap_dest.epoch,errmgr_cmdline_sender.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        errmgr_cmdline_sender = *sender;
</span><br>
<span class="quotelev2">&gt;&gt;        orte_errmgr_base_migrate_update(ORTE_ERRMGR_MIGRATE_STATE_ERR_INPROGRESS);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        errmgr_cmdline_sender.jobid = swap_dest.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        errmgr_cmdline_sender.vpid  = swap_dest.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        errmgr_cmdline_sender.epoch = swap_dest.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(errmgr_cmdline_sender.epoch,swap_dest.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/hnp/errmgr_hnp.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/hnp/errmgr_hnp.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/hnp/errmgr_hnp.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -53,6 +53,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_locks.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_quit.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/errmgr/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -83,9 +84,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_errmgr_hnp_global_suggest_map_targets,
</span><br>
<span class="quotelev2">&gt;&gt;    /* FT Event hook  */
</span><br>
<span class="quotelev2">&gt;&gt;    orte_errmgr_hnp_global_ft_event,
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_errmgr_base_register_migration_warning,
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_errmgr_base_register_migration_warning
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;    /* Set the callback */
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_errmgr_base_set_fault_callback
</span><br>
<span class="quotelev2">&gt;&gt; +    ,orte_errmgr_base_set_fault_callback
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -97,14 +100,16 @@
</span><br>
<span class="quotelev2">&gt;&gt; static void update_local_procs_in_job(orte_job_t *jdata, orte_job_state_t jobstate,
</span><br>
<span class="quotelev2">&gt;&gt;                                      orte_proc_state_t state, orte_exit_code_t exit_code);
</span><br>
<span class="quotelev2">&gt;&gt; static void check_job_complete(orte_job_t *jdata);
</span><br>
<span class="quotelev2">&gt;&gt; -static void killprocs(orte_jobid_t job, orte_vpid_t vpid, orte_epoch_t epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +static void killprocs(orte_jobid_t job, orte_vpid_t vpid);
</span><br>
<span class="quotelev2">&gt;&gt; static int hnp_relocate(orte_job_t *jdata, orte_process_name_t *proc,
</span><br>
<span class="quotelev2">&gt;&gt;                        orte_proc_state_t state, orte_exit_code_t exit_code);
</span><br>
<span class="quotelev2">&gt;&gt; static orte_odls_child_t* proc_is_local(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; static int send_to_local_applications(opal_pointer_array_t *dead_names);
</span><br>
<span class="quotelev2">&gt;&gt; static void failure_notification(int status, orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt;&gt;                                 opal_buffer_t *buffer, orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt;&gt;                                 void* cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /************************
</span><br>
<span class="quotelev2">&gt;&gt; * API Definitions
</span><br>
<span class="quotelev2">&gt;&gt; @@ -380,16 +385,21 @@
</span><br>
<span class="quotelev2">&gt;&gt; **********************/
</span><br>
<span class="quotelev2">&gt;&gt; int orte_errmgr_hnp_base_global_init(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -    int ret;
</span><br>
<span class="quotelev2">&gt;&gt; +    int ret = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;    ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_FAILURE_NOTICE,
</span><br>
<span class="quotelev2">&gt;&gt;                                  ORTE_RML_PERSISTENT, failure_notification, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int orte_errmgr_hnp_base_global_finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_FAILURE_NOTICE);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -406,6 +416,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_odls_child_t *child;
</span><br>
<span class="quotelev2">&gt;&gt;    int rc;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_app_context_t *app;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_proc_t *pdat;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((1, orte_errmgr_base.output,
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;%s errmgr:hnp: job %s reported state %s&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -538,7 +549,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                      ORTE_PROC_STATE_SENSOR_BOUND_EXCEEDED,
</span><br>
<span class="quotelev2">&gt;&gt;                                      exit_code);
</span><br>
<span class="quotelev2">&gt;&gt;            /* order all local procs for this job to be killed */
</span><br>
<span class="quotelev2">&gt;&gt; -            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt; +            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;            check_job_complete(jdata);  /* set the local proc states */
</span><br>
<span class="quotelev2">&gt;&gt;            /* the job object for this job will have been NULL'd
</span><br>
<span class="quotelev2">&gt;&gt;             * in the array if the job was solely local. If it isn't
</span><br>
<span class="quotelev2">&gt;&gt; @@ -550,7 +561,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_JOB_STATE_COMM_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt;            /* order all local procs for this job to be killed */
</span><br>
<span class="quotelev2">&gt;&gt; -            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt; +            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;            check_job_complete(jdata);  /* set the local proc states */
</span><br>
<span class="quotelev2">&gt;&gt;            /* the job object for this job will have been NULL'd
</span><br>
<span class="quotelev2">&gt;&gt;             * in the array if the job was solely local. If it isn't
</span><br>
<span class="quotelev2">&gt;&gt; @@ -562,7 +573,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_JOB_STATE_HEARTBEAT_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt;            /* order all local procs for this job to be killed */
</span><br>
<span class="quotelev2">&gt;&gt; -            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt; +            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;            check_job_complete(jdata);  /* set the local proc states */
</span><br>
<span class="quotelev2">&gt;&gt;            /* the job object for this job will have been NULL'd
</span><br>
<span class="quotelev2">&gt;&gt;             * in the array if the job was solely local. If it isn't
</span><br>
<span class="quotelev2">&gt;&gt; @@ -632,10 +643,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -        if (ORTE_PROC_STATE_ABORTED_BY_SIG == state) {
</span><br>
<span class="quotelev2">&gt;&gt; -            exit_code = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;        orte_errmgr_hnp_update_proc(jdata, proc, state, pid, exit_code);
</span><br>
<span class="quotelev2">&gt;&gt;        check_job_complete(jdata);  /* need to set the job state */
</span><br>
<span class="quotelev2">&gt;&gt;        /* the job object for this job will have been NULL'd
</span><br>
<span class="quotelev2">&gt;&gt; @@ -679,7 +686,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_PROC_STATE_SENSOR_BOUND_EXCEEDED:
</span><br>
<span class="quotelev2">&gt;&gt;            if (jdata-&gt;enable_recovery) {
</span><br>
<span class="quotelev2">&gt;&gt; -                killprocs(proc-&gt;jobid, proc-&gt;vpid, proc-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +                killprocs(proc-&gt;jobid, proc-&gt;vpid);
</span><br>
<span class="quotelev2">&gt;&gt;                /* is this a local proc */
</span><br>
<span class="quotelev2">&gt;&gt;                if (NULL != (child = proc_is_local(proc))) {
</span><br>
<span class="quotelev2">&gt;&gt;                    /* local proc - see if it has reached its restart limit */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -778,18 +785,37 @@
</span><br>
<span class="quotelev2">&gt;&gt;                        opal_output(0, &quot;%s UNABLE TO RELOCATE PROCS FROM FAILED DAEMON %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), ORTE_NAME_PRINT(proc));
</span><br>
<span class="quotelev2">&gt;&gt;                        /* kill all local procs */
</span><br>
<span class="quotelev2">&gt;&gt; -                        killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt; +                        killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;                        /* kill all jobs */
</span><br>
<span class="quotelev2">&gt;&gt;                        hnp_abort(ORTE_JOBID_WILDCARD, exit_code);
</span><br>
<span class="quotelev2">&gt;&gt;                        /* check if all is complete so we can terminate */
</span><br>
<span class="quotelev2">&gt;&gt;                        check_job_complete(jdata);
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt;                } else {
</span><br>
<span class="quotelev2">&gt;&gt; +#if !ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (NULL == (pdat = (orte_proc_t*)opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;vpid))) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt;&gt; +                        orte_show_help(&quot;help-orte-errmgr-hnp.txt&quot;, &quot;errmgr-hnp:daemon-died&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; +                                       ORTE_VPID_PRINT(proc-&gt;vpid), &quot;Unknown&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                        orte_show_help(&quot;help-orte-errmgr-hnp.txt&quot;, &quot;errmgr-hnp:daemon-died&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; +                                       ORTE_VPID_PRINT(proc-&gt;vpid), 
</span><br>
<span class="quotelev2">&gt;&gt; +                                       (NULL == pdat-&gt;node) ? &quot;Unknown&quot; : 
</span><br>
<span class="quotelev2">&gt;&gt; +                                       ((NULL == pdat-&gt;node-&gt;name) ? &quot;Unknown&quot; : pdat-&gt;node-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt; +                    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;                    if (ORTE_SUCCESS != orte_errmgr_hnp_record_dead_process(proc)) {
</span><br>
<span class="quotelev2">&gt;&gt;                        /* The process is already dead so don't keep trying to do
</span><br>
<span class="quotelev2">&gt;&gt;                         * this stuff. */
</span><br>
<span class="quotelev2">&gt;&gt;                        return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#if !ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; +                    /* kill all local procs */
</span><br>
<span class="quotelev2">&gt;&gt; +                    killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt; +                    /* kill all jobs */
</span><br>
<span class="quotelev2">&gt;&gt; +                    hnp_abort(ORTE_JOBID_WILDCARD, exit_code);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;                    /* We'll check if the job was complete when we get the
</span><br>
<span class="quotelev2">&gt;&gt;                     * message back from the HNP notifying us of the dead
</span><br>
<span class="quotelev2">&gt;&gt;                     * process */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -805,7 +831,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            } else {
</span><br>
<span class="quotelev2">&gt;&gt;                orte_errmgr_hnp_record_dead_process(proc);
</span><br>
<span class="quotelev2">&gt;&gt;                /* kill all local procs */
</span><br>
<span class="quotelev2">&gt;&gt; -                killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt; +                killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;                /* kill all jobs */
</span><br>
<span class="quotelev2">&gt;&gt;                hnp_abort(ORTE_JOBID_WILDCARD, exit_code);
</span><br>
<span class="quotelev2">&gt;&gt;                return ORTE_ERR_UNRECOVERABLE;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -824,6 +850,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; static void failure_notification(int status, orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt;&gt;                                 opal_buffer_t *buffer, orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt;&gt;                                 void* cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -984,6 +1011,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_RELEASE(dead_names);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /*****************
</span><br>
<span class="quotelev2">&gt;&gt; * Local Functions
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1354,7 +1382,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;                ORTE_UPDATE_EXIT_STATUS(proc-&gt;exit_code);
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt; -#if 0
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_PROC_STATE_ABORTED_BY_SIG:
</span><br>
<span class="quotelev2">&gt;&gt;            OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,
</span><br>
<span class="quotelev2">&gt;&gt;                                 &quot;%s errmgr:hnp:check_job_completed proc %s aborted by signal&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1370,7 +1397,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;                ORTE_UPDATE_EXIT_STATUS(proc-&gt;exit_code);
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_PROC_STATE_TERM_WO_SYNC:
</span><br>
<span class="quotelev2">&gt;&gt;            OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,
</span><br>
<span class="quotelev2">&gt;&gt;                                 &quot;%s errmgr:hnp:check_job_completed proc %s terminated without sync&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1393,7 +1419,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_PROC_STATE_COMM_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt; -#if 1
</span><br>
<span class="quotelev2">&gt;&gt;            if (!jdata-&gt;abort) {
</span><br>
<span class="quotelev2">&gt;&gt;                jdata-&gt;state = ORTE_JOB_STATE_COMM_FAILED;
</span><br>
<span class="quotelev2">&gt;&gt;                /* point to the lowest rank to cause the problem */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1403,7 +1428,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;                jdata-&gt;abort = true;
</span><br>
<span class="quotelev2">&gt;&gt;                ORTE_UPDATE_EXIT_STATUS(proc-&gt;exit_code);
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_PROC_STATE_SENSOR_BOUND_EXCEEDED:
</span><br>
<span class="quotelev2">&gt;&gt;            if (!jdata-&gt;abort) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1530,9 +1554,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt; CHECK_DAEMONS:
</span><br>
<span class="quotelev2">&gt;&gt;    if (jdata == NULL || jdata-&gt;jobid == ORTE_PROC_MY_NAME-&gt;jobid) {
</span><br>
<span class="quotelev2">&gt;&gt; -#if 0
</span><br>
<span class="quotelev2">&gt;&gt; -        if ((jdata-&gt;num_procs - 1) &lt;= jdata-&gt;num_terminated) { /* Subtract one for the HNP */
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt;        if (0 == orte_routed.num_routes()) {
</span><br>
<span class="quotelev2">&gt;&gt;            /* orteds are done! */
</span><br>
<span class="quotelev2">&gt;&gt;            OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1696,7 +1717,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -static void killprocs(orte_jobid_t job, orte_vpid_t vpid, orte_epoch_t epoch)
</span><br>
<span class="quotelev2">&gt;&gt; +static void killprocs(orte_jobid_t job, orte_vpid_t vpid)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    opal_pointer_array_t cmd;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_proc_t proc;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1707,7 +1728,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;        orte_sensor.stop(job);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    if (ORTE_JOBID_WILDCARD == job &amp;&amp; ORTE_VPID_WILDCARD == vpid &amp;&amp; ORTE_EPOCH_WILDCARD == epoch) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (ORTE_JOBID_WILDCARD == job 
</span><br>
<span class="quotelev2">&gt;&gt; +        &amp;&amp; ORTE_VPID_WILDCARD == vpid 
</span><br>
<span class="quotelev2">&gt;&gt; +        &amp;&amp; ORTE_EPOCH_CMP(ORTE_EPOCH_WILDCARD,epoch)) {
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_SUCCESS != (rc = orte_odls.kill_local_procs(NULL))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1718,7 +1741,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;proc, orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;    proc.name.jobid = job;
</span><br>
<span class="quotelev2">&gt;&gt;    proc.name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    proc.name.epoch = epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(proc.name.epoch,epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    opal_pointer_array_add(&amp;cmd, &amp;proc);
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = orte_odls.kill_local_procs(&amp;cmd))) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1913,13 +1936,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL != (pdat = (orte_proc_t*)opal_pointer_array_get_item(jdat-&gt;procs, proc-&gt;vpid)) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; -        ORTE_PROC_STATE_TERMINATED &lt; pdat-&gt;state) {
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_PROC_STATE_TERMINATED &gt; pdat-&gt;state) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;        /* Make sure that the epochs match. */
</span><br>
<span class="quotelev2">&gt;&gt;        if (proc-&gt;epoch != pdat-&gt;name.epoch) {
</span><br>
<span class="quotelev2">&gt;&gt;            opal_output(1, &quot;The epoch does not match the current epoch. Throwing the request out.&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;            return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        dead_names = OBJ_NEW(opal_pointer_array_t);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1935,6 +1960,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;        if (!mca_errmgr_hnp_component.term_in_progress) {
</span><br>
<span class="quotelev2">&gt;&gt;            /*
</span><br>
<span class="quotelev2">&gt;&gt;             * Send a message to the other daemons so they know that a daemon has
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1949,7 +1975,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev2">&gt;&gt;            } else {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -                /* Iterate of the list of dead procs and send them along with
</span><br>
<span class="quotelev2">&gt;&gt; +                /* Iterate over the list of dead procs and send them along with
</span><br>
<span class="quotelev2">&gt;&gt;                 * the rest. The HNP needs this info so it can tell the other
</span><br>
<span class="quotelev2">&gt;&gt;                 * ORTEDs and they can inform the appropriate applications.
</span><br>
<span class="quotelev2">&gt;&gt;                 */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1973,6 +1999,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;        } else {
</span><br>
<span class="quotelev2">&gt;&gt;            orte_errmgr_hnp_global_mark_processes_as_dead(dead_names);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +        orte_errmgr_hnp_global_mark_processes_as_dead(dead_names);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2011,6 +2040,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                        ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt;                        ORTE_NAME_PRINT(&amp;pdat-&gt;name)));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;            /* Make sure the epochs match, if not it probably means that we
</span><br>
<span class="quotelev2">&gt;&gt;             * already reported this failure. */
</span><br>
<span class="quotelev2">&gt;&gt;            if (name_item-&gt;epoch != pdat-&gt;name.epoch) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2018,6 +2048,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            orte_util_set_epoch(name_item, name_item-&gt;epoch + 1);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            /* Remove it from the job array */
</span><br>
<span class="quotelev2">&gt;&gt;            opal_pointer_array_set_item(jdat-&gt;procs, name_item-&gt;vpid, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2034,6 +2065,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            OBJ_RELEASE(pdat);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;            /* Create a new proc object that will keep track of the epoch
</span><br>
<span class="quotelev2">&gt;&gt;             * information */
</span><br>
<span class="quotelev2">&gt;&gt;            pdat = OBJ_NEW(orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2041,14 +2073,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;            pdat-&gt;name.vpid = name_item-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt;            pdat-&gt;name.epoch = name_item-&gt;epoch + 1;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -            /* Set the state as terminated so we'll know the process isn't
</span><br>
<span class="quotelev2">&gt;&gt; -             * actually there. */
</span><br>
<span class="quotelev2">&gt;&gt; -            pdat-&gt;state = ORTE_PROC_STATE_TERMINATED;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;            opal_pointer_array_set_item(jdat-&gt;procs, name_item-&gt;vpid, pdat);
</span><br>
<span class="quotelev2">&gt;&gt;            jdat-&gt;num_procs++;
</span><br>
<span class="quotelev2">&gt;&gt;            jdat-&gt;num_terminated++;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +            /* Set the state as terminated so we'll know the process isn't
</span><br>
<span class="quotelev2">&gt;&gt; +             * actually there. */
</span><br>
<span class="quotelev2">&gt;&gt; +            pdat-&gt;state = ORTE_PROC_STATE_TERMINATED;
</span><br>
<span class="quotelev2">&gt;&gt;        } else {
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;            opal_output(0, &quot;Proc data not found for %s&quot;, ORTE_NAME_PRINT(name_item));
</span><br>
<span class="quotelev2">&gt;&gt;            /* Create a new proc object that will keep track of the epoch
</span><br>
<span class="quotelev2">&gt;&gt;             * information */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2064,11 +2097,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;            opal_pointer_array_set_item(jdat-&gt;procs, name_item-&gt;vpid, pdat);
</span><br>
<span class="quotelev2">&gt;&gt;            jdat-&gt;num_procs++;
</span><br>
<span class="quotelev2">&gt;&gt;            jdat-&gt;num_terminated++;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        check_job_complete(jdat);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;    if (!orte_orteds_term_ordered) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* Need to update the orted routing module. */
</span><br>
<span class="quotelev2">&gt;&gt;        orte_routed.update_routing_tree(ORTE_PROC_MY_NAME-&gt;jobid);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2077,10 +2112,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;            (*fault_cbfunc)(dead_procs);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; int send_to_local_applications(opal_pointer_array_t *dead_names) {
</span><br>
<span class="quotelev2">&gt;&gt;    opal_buffer_t *buf;
</span><br>
<span class="quotelev2">&gt;&gt;    int ret = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2121,3 +2158,5 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -522,7 +522,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    wp_item = OBJ_NEW(errmgr_autor_wp_item_t);
</span><br>
<span class="quotelev2">&gt;&gt;    wp_item-&gt;name.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    wp_item-&gt;name.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    wp_item-&gt;name.epoch = proc-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(wp_item-&gt;name.epoch,proc-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    wp_item-&gt;state = state;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_append(procs_pending_recovery, &amp;(wp_item-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt; @@ -626,7 +626,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    wp-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    wp-&gt;name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    wp-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(wp-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    wp-&gt;state = 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -635,7 +635,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    wp-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    wp-&gt;name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    wp-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(wp-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    wp-&gt;state = 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -750,7 +750,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                close_iof_stdin = true;
</span><br>
<span class="quotelev2">&gt;&gt;                iof_name.jobid = proc-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                iof_name.vpid = proc-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                iof_name.epoch = proc-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(iof_name.epoch,proc-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -807,7 +807,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                    close_iof_stdin = true;
</span><br>
<span class="quotelev2">&gt;&gt;                    iof_name.jobid = proc-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                    iof_name.vpid = proc-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                    iof_name.epoch = proc-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +                    ORTE_EPOCH_SET(iof_name.epoch,proc-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -855,7 +855,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                    close_iof_stdin = true;
</span><br>
<span class="quotelev2">&gt;&gt;                    iof_name.jobid = proc-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                    iof_name.vpid = proc-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                    iof_name.epoch = proc-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +                    ORTE_EPOCH_SET(iof_name.epoch,proc-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/orted/errmgr_orted.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/orted/errmgr_orted.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/orted/errmgr_orted.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34,6 +34,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/nidmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/odls/odls.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/odls/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -41,7 +42,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/plm/plm_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/routed/routed.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/sensor/sensor.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/ess/ess.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_quit.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/errmgr/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -59,13 +62,15 @@
</span><br>
<span class="quotelev2">&gt;&gt; static void update_local_children(orte_odls_job_t *jobdat,
</span><br>
<span class="quotelev2">&gt;&gt;                                  orte_job_state_t jobstate,
</span><br>
<span class="quotelev2">&gt;&gt;                                  orte_proc_state_t state);
</span><br>
<span class="quotelev2">&gt;&gt; -static void killprocs(orte_jobid_t job, orte_vpid_t vpid, orte_epoch_t epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +static void killprocs(orte_jobid_t job, orte_vpid_t vpid);
</span><br>
<span class="quotelev2">&gt;&gt; static int record_dead_process(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; -static int send_to_local_applications(opal_pointer_array_t *dead_names);
</span><br>
<span class="quotelev2">&gt;&gt; static int mark_processes_as_dead(opal_pointer_array_t *dead_procs);
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; +static int send_to_local_applications(opal_pointer_array_t *dead_names);
</span><br>
<span class="quotelev2">&gt;&gt; static void failure_notification(int status, orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt;&gt;                                 opal_buffer_t *buffer, orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt;&gt;                                 void* cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Module functions: Global
</span><br>
<span class="quotelev2">&gt;&gt; @@ -104,8 +109,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;    predicted_fault,
</span><br>
<span class="quotelev2">&gt;&gt;    suggest_map_targets,
</span><br>
<span class="quotelev2">&gt;&gt;    ft_event,
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_errmgr_base_register_migration_warning,
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_errmgr_base_set_fault_callback  /* Set callback function */
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_errmgr_base_register_migration_warning
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; +    ,orte_errmgr_base_set_fault_callback  /* Set callback function */
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /************************
</span><br>
<span class="quotelev2">&gt;&gt; @@ -113,16 +120,22 @@
</span><br>
<span class="quotelev2">&gt;&gt; ************************/
</span><br>
<span class="quotelev2">&gt;&gt; static int init(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -    int ret;
</span><br>
<span class="quotelev2">&gt;&gt; +    int ret = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;    ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_FAILURE_NOTICE,
</span><br>
<span class="quotelev2">&gt;&gt;                                  ORTE_RML_PERSISTENT, failure_notification, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; static int finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_FAILURE_NOTICE);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -228,10 +241,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;            /* update all procs in job */
</span><br>
<span class="quotelev2">&gt;&gt;            update_local_children(jobdat, jobstate, ORTE_PROC_STATE_SENSOR_BOUND_EXCEEDED);
</span><br>
<span class="quotelev2">&gt;&gt;            /* order all local procs for this job to be killed */
</span><br>
<span class="quotelev2">&gt;&gt; -            killprocs(jobdat-&gt;jobid, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt; +            killprocs(jobdat-&gt;jobid, ORTE_VPID_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_JOB_STATE_COMM_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt;            /* kill all local procs */
</span><br>
<span class="quotelev2">&gt;&gt; -            killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt; +            killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;            /* tell the caller we can't recover */
</span><br>
<span class="quotelev2">&gt;&gt;            return ORTE_ERR_UNRECOVERABLE;
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -276,7 +289,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* see if this was a lifeline */
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_SUCCESS != orte_routed.route_lost(proc)) {
</span><br>
<span class="quotelev2">&gt;&gt;            /* kill our children */
</span><br>
<span class="quotelev2">&gt;&gt; -            killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt; +            killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;            /* terminate - our routed children will see
</span><br>
<span class="quotelev2">&gt;&gt;             * us leave and automatically die
</span><br>
<span class="quotelev2">&gt;&gt;             */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -290,10 +303,18 @@
</span><br>
<span class="quotelev2">&gt;&gt;            if (0 == orte_routed.num_routes() &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;                    0 == opal_list_get_size(&amp;orte_local_children)) {
</span><br>
<span class="quotelev2">&gt;&gt;                orte_quit();
</span><br>
<span class="quotelev2">&gt;&gt; +            } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,
</span><br>
<span class="quotelev2">&gt;&gt; +                            &quot;%s errmgr:orted not exiting, num_routes() == %d, num children == %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt; +                            orte_routed.num_routes(),
</span><br>
<span class="quotelev2">&gt;&gt; +                            opal_list_get_size(&amp;orte_local_children)));
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt;        record_dead_process(proc);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* if not, then indicate we can continue */
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -344,7 +365,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                    /* Decrement the number of local procs */
</span><br>
<span class="quotelev2">&gt;&gt;                    jobdat-&gt;num_local_procs--;
</span><br>
<span class="quotelev2">&gt;&gt;                    /* kill this proc */
</span><br>
<span class="quotelev2">&gt;&gt; -                    killprocs(proc-&gt;jobid, proc-&gt;vpid, proc-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +                    killprocs(proc-&gt;jobid, proc-&gt;vpid);
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;                app = (orte_app_context_t*)opal_pointer_array_get_item(&amp;jobdat-&gt;apps, child-&gt;app_idx);
</span><br>
<span class="quotelev2">&gt;&gt;                if( jobdat-&gt;enable_recovery &amp;&amp; child-&gt;restarts &lt; app-&gt;max_restarts ) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -526,10 +547,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;                        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;                        goto FINAL_CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;                    if (ORTE_SUCCESS != (rc = opal_dss.pack(alert, &amp;child-&gt;name-&gt;epoch, 1, ORTE_EPOCH))) {
</span><br>
<span class="quotelev2">&gt;&gt;                        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;                        goto FINAL_CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            /* pack an invalid marker */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -660,7 +683,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            continue;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -        if (name_item-&gt;epoch &lt; orte_util_lookup_epoch(name_item)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (0 &lt; ORTE_EPOCH_CMP(name_item-&gt;epoch,orte_ess.proc_get_epoch(name_item))) {
</span><br>
<span class="quotelev2">&gt;&gt;            continue;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -669,9 +692,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt;                             ORTE_NAME_PRINT(name_item)));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;        /* Increment the epoch */
</span><br>
<span class="quotelev2">&gt;&gt;        orte_util_set_proc_state(name_item, ORTE_PROC_STATE_TERMINATED);
</span><br>
<span class="quotelev2">&gt;&gt;        orte_util_set_epoch(name_item, name_item-&gt;epoch + 1);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL_THREAD_LOCK(&amp;orte_odls_globals.mutex);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -706,6 +731,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; static void failure_notification(int status, orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt;&gt;                                 opal_buffer_t *buffer, orte_rml_tag_t tag,
</span><br>
<span class="quotelev2">&gt;&gt;                                 void* cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -714,7 +740,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_std_cntr_t n;
</span><br>
<span class="quotelev2">&gt;&gt;    int ret = ORTE_SUCCESS, num_failed;
</span><br>
<span class="quotelev2">&gt;&gt;    int32_t i;
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_process_name_t *name_item, proc;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_process_name_t *name_item;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    dead_names = OBJ_NEW(opal_pointer_array_t);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -746,7 +772,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* There shouldn't be an issue of receiving this message multiple 
</span><br>
<span class="quotelev2">&gt;&gt;         * times but it doesn't hurt to double check.
</span><br>
<span class="quotelev2">&gt;&gt;         */
</span><br>
<span class="quotelev2">&gt;&gt; -        if (proc.epoch &lt; orte_util_lookup_epoch(name_item)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (0 &lt; ORTE_EPOCH_CMP(name_item-&gt;epoch,orte_ess.proc_get_epoch(name_item))) {
</span><br>
<span class="quotelev2">&gt;&gt;            opal_output(1, &quot;Received from proc %s local epoch %d&quot;, ORTE_NAME_PRINT(name_item), orte_util_lookup_epoch(name_item));
</span><br>
<span class="quotelev2">&gt;&gt;            continue;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -767,6 +793,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        free(name_item);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /*****************
</span><br>
<span class="quotelev2">&gt;&gt; * Local Functions
</span><br>
<span class="quotelev2">&gt;&gt; @@ -948,11 +975,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;                ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;                return rc;
</span><br>
<span class="quotelev2">&gt;&gt;            }            
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;            /* Pack the child's epoch. */
</span><br>
<span class="quotelev2">&gt;&gt;            if (ORTE_SUCCESS != (rc = opal_dss.pack(buf, &amp;(child-&gt;name-&gt;epoch), 1, ORTE_EPOCH))) {
</span><br>
<span class="quotelev2">&gt;&gt;                ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;                return rc;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;            /* pack the contact info */
</span><br>
<span class="quotelev2">&gt;&gt;            if (ORTE_SUCCESS != (rc = opal_dss.pack(buf, &amp;child-&gt;rml_uri, 1, OPAL_STRING))) {
</span><br>
<span class="quotelev2">&gt;&gt;                ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1015,7 +1044,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -static void killprocs(orte_jobid_t job, orte_vpid_t vpid, orte_epoch_t epoch)
</span><br>
<span class="quotelev2">&gt;&gt; +static void killprocs(orte_jobid_t job, orte_vpid_t vpid)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    opal_pointer_array_t cmd;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_proc_t proc;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1026,7 +1055,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;        orte_sensor.stop(job);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    if (ORTE_JOBID_WILDCARD == job &amp;&amp; ORTE_VPID_WILDCARD == vpid &amp;&amp; ORTE_EPOCH_WILDCARD == epoch) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (ORTE_JOBID_WILDCARD == job 
</span><br>
<span class="quotelev2">&gt;&gt; +        &amp;&amp; ORTE_VPID_WILDCARD == vpid 
</span><br>
<span class="quotelev2">&gt;&gt; +        &amp;&amp; 0 == ORTE_EPOCH_CMP(ORTE_EPOCH_WILDCARD,epoch)) {
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_SUCCESS != (rc = orte_odls.kill_local_procs(NULL))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1037,7 +1068,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;proc, orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;    proc.name.jobid = job;
</span><br>
<span class="quotelev2">&gt;&gt;    proc.name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    proc.name.epoch = epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(proc.name.epoch,epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    opal_pointer_array_add(&amp;cmd, &amp;proc);
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = orte_odls.kill_local_procs(&amp;cmd))) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1082,20 +1113,21 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return rc;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; int send_to_local_applications(opal_pointer_array_t *dead_names) {
</span><br>
<span class="quotelev2">&gt;&gt;    opal_buffer_t *buf;
</span><br>
<span class="quotelev2">&gt;&gt;    int ret;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_process_name_t *name_item;
</span><br>
<span class="quotelev2">&gt;&gt;    int size, i;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    OPAL_OUTPUT_VERBOSE((10, orte_errmgr_base.output,
</span><br>
<span class="quotelev2">&gt;&gt; -                &quot;%s Sending failure to local applications.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt; -    
</span><br>
<span class="quotelev2">&gt;&gt;    buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    size = opal_pointer_array_get_size(dead_names);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    OPAL_OUTPUT_VERBOSE((10, orte_errmgr_base.output,
</span><br>
<span class="quotelev2">&gt;&gt; +                &quot;%s Sending %d failure(s) to local applications.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), size));
</span><br>
<span class="quotelev2">&gt;&gt; +    
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (ret = opal_dss.pack(buf, &amp;size, 1, ORTE_VPID))) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_RELEASE(buf);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1122,4 +1154,5 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/alps/ess_alps_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/alps/ess_alps_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/alps/ess_alps_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -363,8 +363,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;vpid = (orte_vpid_t) cnos_get_rank() + starting_vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_PRINT(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_PRINT(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;ess:alps set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/base/base.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/base/base.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/base/base.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -57,7 +57,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern opal_list_t orte_ess_base_components_available;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC orte_epoch_t orte_ess_base_proc_get_epoch(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC int orte_ess_base_proc_get_epoch(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/base/ess_base_select.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/base/ess_base_select.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/base/ess_base_select.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -36,21 +36,19 @@
</span><br>
<span class="quotelev2">&gt;&gt; * Generic function to retrieve the epoch of a specific process 
</span><br>
<span class="quotelev2">&gt;&gt; * from the job data.
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; +#if !ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +int orte_ess_base_proc_get_epoch(orte_process_name_t *proc) {
</span><br>
<span class="quotelev2">&gt;&gt; +    return 0;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; orte_epoch_t orte_ess_base_proc_get_epoch(orte_process_name_t *proc) {
</span><br>
<span class="quotelev2">&gt;&gt;    orte_epoch_t epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -#if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt;    epoch = orte_util_lookup_epoch(proc);
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    OPAL_OUTPUT_VERBOSE((2, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt;&gt; -                         &quot;%s ess:generic: proc %s has epoch %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt; -                         ORTE_NAME_PRINT(proc),
</span><br>
<span class="quotelev2">&gt;&gt; -                         epoch));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return epoch;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int 
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_base_select(void)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/env/ess_env_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/env/ess_env_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -392,8 +392,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;ess:env set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/ess.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/ess.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/ess.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -111,7 +111,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; * will get the most up to date version stored within the orte_proc_t struct.
</span><br>
<span class="quotelev2">&gt;&gt; * Obviously the epoch of the proc that is passed in will be ignored.
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; typedef orte_epoch_t (*orte_ess_base_module_proc_get_epoch_fn_t)(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +typedef int (*orte_ess_base_module_proc_get_epoch_fn_t)(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /**
</span><br>
<span class="quotelev2">&gt;&gt; * Update the pidmap
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/generic/ess_generic_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/generic/ess_generic_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/generic/ess_generic_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -155,7 +155,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        goto error;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;vpid = strtol(envar, NULL, 10);
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;%s completed name definition&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -273,7 +273,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                if (vpid == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt;&gt;                    ORTE_PROC_MY_DAEMON-&gt;jobid = 0;
</span><br>
<span class="quotelev2">&gt;&gt;                    ORTE_PROC_MY_DAEMON-&gt;vpid = i;
</span><br>
<span class="quotelev2">&gt;&gt; -                    ORTE_PROC_MY_DAEMON-&gt;epoch = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +                    ORTE_EPOCH_SET(ORTE_PROC_MY_DAEMON-&gt;epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;                OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                                     &quot;%s node %d name %s rank %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -304,7 +304,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                    if (vpid == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt;&gt;                        ORTE_PROC_MY_DAEMON-&gt;jobid = 0;
</span><br>
<span class="quotelev2">&gt;&gt;                        ORTE_PROC_MY_DAEMON-&gt;vpid = i;
</span><br>
<span class="quotelev2">&gt;&gt; -                        ORTE_PROC_MY_DAEMON-&gt;epoch = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +                        ORTE_EPOCH_SET(ORTE_PROC_MY_DAEMON-&gt;epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                                         &quot;%s node %d name %s rank %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/hnp/ess_hnp_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/hnp/ess_hnp_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -494,7 +494,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    proc = OBJ_NEW(orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;    proc-&gt;name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    proc-&gt;name.vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    proc-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    proc-&gt;pid = orte_process_info.pid;
</span><br>
<span class="quotelev2">&gt;&gt;    proc-&gt;rml_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/lsf/ess_lsf_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/lsf/ess_lsf_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/lsf/ess_lsf_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -357,8 +357,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* fix up the base name and make it the &quot;real&quot; name */
</span><br>
<span class="quotelev2">&gt;&gt;    lsf_nodeid = atoi(getenv(&quot;LSF_PM_TASKID&quot;));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/singleton/ess_singleton_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/singleton/ess_singleton_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/singleton/ess_singleton_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -188,7 +188,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* set the name */
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_PROC_MY_NAME-&gt;jobid = 0xffff0000 &amp; ((uint32_t)jobfam &lt;&lt; 16);
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_PROC_MY_NAME-&gt;vpid = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;        /*
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/slave/ess_slave_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/slave/ess_slave_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/slave/ess_slave_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -280,8 +280,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;ess:slave set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/slurm/ess_slurm_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/slurm/ess_slurm_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/slurm/ess_slurm_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -368,8 +368,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    /* fix up the vpid and make it the &quot;real&quot; vpid */
</span><br>
<span class="quotelev2">&gt;&gt;    slurm_nodeid = atoi(getenv(&quot;SLURM_NODEID&quot;));
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;vpid = vpid + slurm_nodeid;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;ess:slurm set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/slurmd/ess_slurmd_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/slurmd/ess_slurmd_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/slurmd/ess_slurmd_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -195,7 +195,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;vpid = strtol(envar, NULL, 10);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    /* get our local rank */
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == (envar = getenv(&quot;SLURM_LOCALID&quot;))) {
</span><br>
<span class="quotelev2">&gt;&gt;        error = &quot;could not get SLURM_LOCALID&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -260,7 +260,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    nodeid = strtol(envar, NULL, 10);
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_DAEMON-&gt;jobid = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_DAEMON-&gt;vpid = nodeid;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_DAEMON-&gt;epoch = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_DAEMON-&gt;epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* get the number of ppn */
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == (tasks_per_node = getenv(&quot;SLURM_STEP_TASKS_PER_NODE&quot;))) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/ess/tm/ess_tm_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/ess/tm/ess_tm_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/ess/tm/ess_tm_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -364,7 +364,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;ess:tm set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/filem/rsh/filem_rsh_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/filem/rsh/filem_rsh_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/filem/rsh/filem_rsh_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1097,11 +1097,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL != proc_set ) {
</span><br>
<span class="quotelev2">&gt;&gt;        wp_item-&gt;proc_set.source.jobid = proc_set-&gt;source.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        wp_item-&gt;proc_set.source.vpid  = proc_set-&gt;source.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        wp_item-&gt;proc_set.source.epoch = proc_set-&gt;source.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(wp_item-&gt;proc_set.source.epoch,proc_set-&gt;source.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        wp_item-&gt;proc_set.sink.jobid = proc_set-&gt;sink.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        wp_item-&gt;proc_set.sink.vpid  = proc_set-&gt;sink.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        wp_item-&gt;proc_set.sink.epoch = proc_set-&gt;sink.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(wp_item-&gt;proc_set.sink.epoch,proc_set-&gt;sink.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    /* Copy the File Set */
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL != file_set ) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1396,7 +1396,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            wp_item = OBJ_NEW(orte_filem_rsh_work_pool_item_t);
</span><br>
<span class="quotelev2">&gt;&gt;            wp_item-&gt;proc_set.source.jobid = sender-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            wp_item-&gt;proc_set.source.vpid  = sender-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            wp_item-&gt;proc_set.source.epoch = sender-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(wp_item-&gt;proc_set.source.epoch,sender-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            opal_list_append(&amp;work_pool_waiting, &amp;(wp_item-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -168,8 +168,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if (vpids[0] == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* I send first */
</span><br>
<span class="quotelev2">&gt;&gt;        peer.vpid = vpids[1];
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* setup a temp buffer so I can inform the other side as to the
</span><br>
<span class="quotelev2">&gt;&gt;         * number of entries in my buffer
</span><br>
<span class="quotelev2">&gt;&gt; @@ -226,8 +225,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        opal_dss.pack(&amp;buf, &amp;num_entries, 1, OPAL_INT32);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_dss.copy_payload(&amp;buf, sendbuf);
</span><br>
<span class="quotelev2">&gt;&gt;        peer.vpid = vpids[0];
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL_OUTPUT_VERBOSE((5, orte_grpcomm_base.output,
</span><br>
<span class="quotelev2">&gt;&gt;                             &quot;%s grpcomm:coll:two-proc sending to %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -320,8 +318,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* first send my current contents */
</span><br>
<span class="quotelev2">&gt;&gt;        nv = (rank - distance + np) % np;
</span><br>
<span class="quotelev2">&gt;&gt;        peer.vpid = vpids[nv];
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_CONSTRUCT(&amp;buf, opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_dss.pack(&amp;buf, &amp;total_entries, 1, OPAL_INT32);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -340,8 +337,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        num_recvd = 0;
</span><br>
<span class="quotelev2">&gt;&gt;        nv = (rank + distance) % np;
</span><br>
<span class="quotelev2">&gt;&gt;        peer.vpid = vpids[nv];
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_CONSTRUCT(&amp;bucket, opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_SUCCESS != (rc = orte_rml.recv_buffer_nb(&amp;peer,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -439,8 +435,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* first send my current contents */
</span><br>
<span class="quotelev2">&gt;&gt;        nv = rank ^ distance;
</span><br>
<span class="quotelev2">&gt;&gt;        peer.vpid = vpids[nv];
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_CONSTRUCT(&amp;buf, opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_dss.pack(&amp;buf, &amp;total_entries, 1, OPAL_INT32);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -646,8 +641,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        proc.jobid = jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        proc.vpid = 0;
</span><br>
<span class="quotelev2">&gt;&gt;        while (proc.vpid &lt; jobdat-&gt;num_procs &amp;&amp; 0 &lt; opal_list_get_size(&amp;daemon_tree)) {
</span><br>
<span class="quotelev2">&gt;&gt; -            proc.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -            proc.epoch = orte_ess.proc_get_epoch(&amp;proc);
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(proc.epoch,orte_ess.proc_get_epoch(&amp;proc));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            /* get the daemon that hosts this proc */
</span><br>
<span class="quotelev2">&gt;&gt;            daemonvpid = orte_ess.proc_get_daemon(&amp;proc);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -713,8 +707,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* send it */
</span><br>
<span class="quotelev2">&gt;&gt;        my_parent.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        my_parent.vpid = orte_routed.get_routing_tree(NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -        my_parent.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        my_parent.epoch = orte_ess.proc_get_epoch(&amp;my_parent);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(my_parent.epoch,orte_ess.proc_get_epoch(&amp;my_parent));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL_OUTPUT_VERBOSE((5, orte_grpcomm_base.output,
</span><br>
<span class="quotelev2">&gt;&gt;                             &quot;%s grpcomm:base:daemon_coll: daemon collective not the HNP - sending to parent %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -95,7 +95,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    my_local_rank_zero_proc.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    my_local_rank_zero_proc.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    my_local_rank_zero_proc.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(my_local_rank_zero_proc.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = orte_grpcomm_base_modex_init())) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -270,7 +270,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        proc.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        for (v=0; v &lt; orte_process_info.num_procs; v++) {
</span><br>
<span class="quotelev2">&gt;&gt;            proc.vpid = v;
</span><br>
<span class="quotelev2">&gt;&gt; -            proc.epoch = orte_util_lookup_epoch(&amp;proc);
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(proc.epoch,orte_util_lookup_epoch(&amp;proc));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            /* is this proc local_rank=0 on its node? */
</span><br>
<span class="quotelev2">&gt;&gt;            if (0 == my_local_rank &amp;&amp; 0 == orte_ess.get_local_rank(&amp;proc)) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -285,7 +285,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            nm = OBJ_NEW(orte_namelist_t);
</span><br>
<span class="quotelev2">&gt;&gt;            nm-&gt;name.jobid = proc.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            nm-&gt;name.vpid = proc.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            nm-&gt;name.epoch = proc.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(nm-&gt;name.epoch,proc.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            opal_list_append(&amp;my_local_peers, &amp;nm-&gt;item);
</span><br>
<span class="quotelev2">&gt;&gt;            /* if I am not local_rank=0, is this one? */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -293,7 +293,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                0 == orte_ess.get_local_rank(&amp;proc)) {
</span><br>
<span class="quotelev2">&gt;&gt;                my_local_rank_zero_proc.jobid = proc.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                my_local_rank_zero_proc.vpid = proc.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                my_local_rank_zero_proc.epoch = proc.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(my_local_rank_zero_proc.epoch,proc.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/iof/base/base.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/iof/base/base.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/iof/base/base.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -135,7 +135,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        ep = OBJ_NEW(orte_iof_sink_t);                              \
</span><br>
<span class="quotelev2">&gt;&gt;        ep-&gt;name.jobid = (nm)-&gt;jobid;                               \
</span><br>
<span class="quotelev2">&gt;&gt;        ep-&gt;name.vpid = (nm)-&gt;vpid;                                 \
</span><br>
<span class="quotelev2">&gt;&gt; -        ep-&gt;name.epoch = (nm)-&gt;epoch;                               \
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(ep-&gt;name.epoch,(nm)-&gt;epoch);                 \
</span><br>
<span class="quotelev2">&gt;&gt;        ep-&gt;tag = (tg);                                             \
</span><br>
<span class="quotelev2">&gt;&gt;        if (0 &lt;= (fid)) {                                           \
</span><br>
<span class="quotelev2">&gt;&gt;            ep-&gt;wev-&gt;fd = (fid);                                    \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -169,7 +169,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        rev = OBJ_NEW(orte_iof_read_event_t);                       \
</span><br>
<span class="quotelev2">&gt;&gt;        rev-&gt;name.jobid = (nm)-&gt;jobid;                              \
</span><br>
<span class="quotelev2">&gt;&gt;        rev-&gt;name.vpid = (nm)-&gt;vpid;                                \
</span><br>
<span class="quotelev2">&gt;&gt; -        rev-&gt;name.epoch = (nm)-&gt;epoch;                              \
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(rev-&gt;name.epoch,(nm)-&gt;epoch);                \
</span><br>
<span class="quotelev2">&gt;&gt;        rev-&gt;tag = (tg);                                            \
</span><br>
<span class="quotelev2">&gt;&gt;        rev-&gt;fd = (fid);                                            \
</span><br>
<span class="quotelev2">&gt;&gt;        *(rv) = rev;                                                \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -194,7 +194,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        ep = OBJ_NEW(orte_iof_sink_t);                              \
</span><br>
<span class="quotelev2">&gt;&gt;        ep-&gt;name.jobid = (nm)-&gt;jobid;                               \
</span><br>
<span class="quotelev2">&gt;&gt;        ep-&gt;name.vpid = (nm)-&gt;vpid;                                 \
</span><br>
<span class="quotelev2">&gt;&gt; -        ep-&gt;name.epoch = (nm)-&gt;epoch;                               \
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(ep-&gt;name.epoch,(nm)-&gt;epoch);                 \
</span><br>
<span class="quotelev2">&gt;&gt;        ep-&gt;tag = (tg);                                             \
</span><br>
<span class="quotelev2">&gt;&gt;        if (0 &lt;= (fid)) {                                           \
</span><br>
<span class="quotelev2">&gt;&gt;            ep-&gt;wev-&gt;fd = (fid);                                    \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -215,7 +215,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        rev = OBJ_NEW(orte_iof_read_event_t);                       \
</span><br>
<span class="quotelev2">&gt;&gt;        rev-&gt;name.jobid = (nm)-&gt;jobid;                              \
</span><br>
<span class="quotelev2">&gt;&gt;        rev-&gt;name.vpid = (nm)-&gt;vpid;                                \
</span><br>
<span class="quotelev2">&gt;&gt; -        rev-&gt;name.epoch= (nm)-&gt;epoch;                               \
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(rev-&gt;name.epoch,(nm)-&gt;epoch);                \
</span><br>
<span class="quotelev2">&gt;&gt;        rev-&gt;tag = (tg);                                            \
</span><br>
<span class="quotelev2">&gt;&gt;        *(rv) = rev;                                                \
</span><br>
<span class="quotelev2">&gt;&gt;        opal_event_set(opal_event_base,                             \
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/iof/base/iof_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/iof/base/iof_base_open.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/iof/base/iof_base_open.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -91,7 +91,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;daemon.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;daemon.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ptr-&gt;daemon.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ptr-&gt;daemon.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;wev = OBJ_NEW(orte_iof_write_event_t);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; static void orte_iof_base_sink_destruct(orte_iof_sink_t* ptr)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/iof/hnp/iof_hnp.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/iof/hnp/iof_hnp.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/iof/hnp/iof_hnp.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -186,7 +186,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        proct = OBJ_NEW(orte_iof_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;        proct-&gt;name.jobid = dst_name-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        proct-&gt;name.vpid = dst_name-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        proct-&gt;name.epoch = dst_name-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proct-&gt;name.epoch,dst_name-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_list_append(&amp;mca_iof_hnp_component.procs, &amp;proct-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt;        /* see if we are to output to a file */
</span><br>
<span class="quotelev2">&gt;&gt;        if (NULL != orte_output_filename) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -281,8 +281,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                 &amp;mca_iof_hnp_component.sinks);
</span><br>
<span class="quotelev2">&gt;&gt;            sink-&gt;daemon.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            sink-&gt;daemon.vpid = proc-&gt;node-&gt;daemon-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            sink-&gt;daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -            sink-&gt;daemon.epoch = orte_ess.proc_get_epoch(&amp;sink-&gt;daemon);
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(sink-&gt;daemon.epoch,orte_ess.proc_get_epoch(&amp;sink-&gt;daemon));
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -389,7 +388,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                         &amp;mca_iof_hnp_component.sinks);
</span><br>
<span class="quotelev2">&gt;&gt;    sink-&gt;daemon.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    sink-&gt;daemon.vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    sink-&gt;daemon.epoch = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(sink-&gt;daemon.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/iof/hnp/iof_hnp_receive.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/iof/hnp/iof_hnp_receive.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/iof/hnp/iof_hnp_receive.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -109,21 +109,21 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                 NULL, &amp;mca_iof_hnp_component.sinks);
</span><br>
<span class="quotelev2">&gt;&gt;            sink-&gt;daemon.jobid = mev-&gt;sender.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            sink-&gt;daemon.vpid = mev-&gt;sender.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            sink-&gt;daemon.epoch = mev-&gt;sender.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(sink-&gt;daemon.epoch,mev-&gt;sender.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_IOF_STDERR &amp; stream) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_IOF_SINK_DEFINE(&amp;sink, &amp;origin, -1, ORTE_IOF_STDERR,
</span><br>
<span class="quotelev2">&gt;&gt;                                 NULL, &amp;mca_iof_hnp_component.sinks);
</span><br>
<span class="quotelev2">&gt;&gt;            sink-&gt;daemon.jobid = mev-&gt;sender.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            sink-&gt;daemon.vpid = mev-&gt;sender.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            sink-&gt;daemon.epoch = mev-&gt;sender.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(sink-&gt;daemon.epoch,mev-&gt;sender.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_IOF_STDDIAG &amp; stream) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_IOF_SINK_DEFINE(&amp;sink, &amp;origin, -1, ORTE_IOF_STDDIAG,
</span><br>
<span class="quotelev2">&gt;&gt;                                 NULL, &amp;mca_iof_hnp_component.sinks);
</span><br>
<span class="quotelev2">&gt;&gt;            sink-&gt;daemon.jobid = mev-&gt;sender.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            sink-&gt;daemon.vpid = mev-&gt;sender.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            sink-&gt;daemon.epoch = mev-&gt;sender.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(sink-&gt;daemon.epoch,mev-&gt;sender.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        goto CLEAN_RETURN;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/iof/orted/iof_orted.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/iof/orted/iof_orted.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/iof/orted/iof_orted.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -163,7 +163,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    proct = OBJ_NEW(orte_iof_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;    proct-&gt;name.jobid = dst_name-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    proct-&gt;name.vpid = dst_name-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    proct-&gt;name.epoch = dst_name-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(proct-&gt;name.epoch,dst_name-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_append(&amp;mca_iof_orted_component.procs, &amp;proct-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt;    /* see if we are to output to a file */
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL != orte_output_filename) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/odls/base/odls_base_default_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/odls/base/odls_base_default_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -734,8 +734,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    proc.jobid = jobdat-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    for (j=0; j &lt; jobdat-&gt;num_procs; j++) {
</span><br>
<span class="quotelev2">&gt;&gt;        proc.vpid = j;
</span><br>
<span class="quotelev2">&gt;&gt; -        proc.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        proc.epoch = orte_ess.proc_get_epoch(&amp;proc);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc.epoch,orte_ess.proc_get_epoch(&amp;proc));
</span><br>
<span class="quotelev2">&gt;&gt;        /* get the vpid of the daemon that is to host this proc */
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_VPID_INVALID == (host_daemon = orte_ess.proc_get_daemon(&amp;proc))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1044,6 +1043,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    free(param);
</span><br>
<span class="quotelev2">&gt;&gt;    free(value);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    /* setup the epoch */
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = orte_util_convert_epoch_to_string(&amp;value, child-&gt;name-&gt;epoch))) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1057,6 +1057,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    opal_setenv(param, value, true, env);
</span><br>
<span class="quotelev2">&gt;&gt;    free(param);
</span><br>
<span class="quotelev2">&gt;&gt;    free(value);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* setup the vpid */
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = orte_util_convert_vpid_to_string(&amp;value, child-&gt;name-&gt;vpid))) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2721,7 +2722,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_CONSTRUCT(&amp;proctmp, orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;        proctmp.name.jobid = ORTE_JOBID_WILDCARD;
</span><br>
<span class="quotelev2">&gt;&gt;        proctmp.name.vpid = ORTE_VPID_WILDCARD;
</span><br>
<span class="quotelev2">&gt;&gt; -        proctmp.name.epoch = ORTE_EPOCH_WILDCARD;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proctmp.name.epoch,ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_pointer_array_add(&amp;procarray, &amp;proctmp);
</span><br>
<span class="quotelev2">&gt;&gt;        procptr = &amp;procarray;
</span><br>
<span class="quotelev2">&gt;&gt;        do_cleanup = true;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/odls/base/odls_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/odls/base/odls_base_open.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/odls/base/odls_base_open.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -187,7 +187,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            if (-1 == rank) {
</span><br>
<span class="quotelev2">&gt;&gt;                /* wildcard */
</span><br>
<span class="quotelev2">&gt;&gt;                nm-&gt;name.vpid = ORTE_VPID_WILDCARD;
</span><br>
<span class="quotelev2">&gt;&gt; -                nm-&gt;name.epoch = ORTE_EPOCH_WILDCARD;
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(nm-&gt;name.epoch,ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;            } else if (rank &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt;                /* error out on bozo case */
</span><br>
<span class="quotelev2">&gt;&gt;                orte_show_help(&quot;help-odls-base.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -200,8 +200,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                 * will be in the job - we'll check later
</span><br>
<span class="quotelev2">&gt;&gt;                 */
</span><br>
<span class="quotelev2">&gt;&gt;                nm-&gt;name.vpid = rank;
</span><br>
<span class="quotelev2">&gt;&gt; -                nm-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -                nm-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;nm-&gt;name);
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(nm-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;nm-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            opal_list_append(&amp;orte_odls_globals.xterm_ranks, &amp;nm-&gt;item);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/odls/base/odls_base_state.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/odls/base/odls_base_state.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/odls/base/odls_base_state.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -77,17 +77,17 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* if I am the HNP, then use me as the source */
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.vpid  = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        p_set-&gt;source.epoch = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    else {
</span><br>
<span class="quotelev2">&gt;&gt;        /* otherwise, set the HNP as the source */
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.jobid = ORTE_PROC_MY_HNP-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.vpid  = ORTE_PROC_MY_HNP-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        p_set-&gt;source.epoch = ORTE_PROC_MY_HNP-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,ORTE_PROC_MY_HNP-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    p_set-&gt;sink.jobid   = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    p_set-&gt;sink.vpid    = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    p_set-&gt;sink.epoch   = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(p_set-&gt;sink.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_append(&amp;(filem_request-&gt;process_sets), &amp;(p_set-&gt;super) );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp_msg.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/oob/tcp/oob_tcp_msg.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp_msg.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -137,6 +137,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; bool mca_oob_tcp_msg_send_handler(mca_oob_tcp_msg_t* msg, struct mca_oob_tcp_peer_t * peer)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int rc;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    while(1) {
</span><br>
<span class="quotelev2">&gt;&gt;        rc = writev(peer-&gt;peer_sd, msg-&gt;msg_rwptr, msg-&gt;msg_rwnum);
</span><br>
<span class="quotelev2">&gt;&gt;        if(rc &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -338,6 +339,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_process_name_t src = msg-&gt;msg_hdr.msg_src;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_THREAD_LOCK(&amp;mca_oob_tcp_component.tcp_lock);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    if (orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;peer-&gt;peer_name, &amp;src) != OPAL_EQUAL) {
</span><br>
<span class="quotelev2">&gt;&gt;        opal_hash_table_remove_value_uint64(&amp;mca_oob_tcp_component.tcp_peers, 
</span><br>
<span class="quotelev2">&gt;&gt;                                            orte_util_hash_name(&amp;peer-&gt;peer_name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp_peer.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/oob/tcp/oob_tcp_peer.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp_peer.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -903,6 +903,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; static void mca_oob_tcp_peer_recv_handler(int sd, short flags, void* user)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    mca_oob_tcp_peer_t* peer = (mca_oob_tcp_peer_t *)user;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (orte_abnormal_term_ordered) {
</span><br>
<span class="quotelev2">&gt;&gt; +        return;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_THREAD_LOCK(&amp;peer-&gt;peer_lock);
</span><br>
<span class="quotelev2">&gt;&gt;    switch(peer-&gt;peer_state) {
</span><br>
<span class="quotelev2">&gt;&gt;        case MCA_OOB_TCP_CONNECT_ACK: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_jobid.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_jobid.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_jobid.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -62,12 +62,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;    /* set the name */
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;jobid = 0xffff0000 &amp; ((uint32_t)jobfam &lt;&lt; 16);
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_NAME-&gt;vpid = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_NAME-&gt;epoch= ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* copy it to the HNP field */
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_HNP-&gt;jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_HNP-&gt;vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_HNP-&gt;epoch = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_HNP-&gt;epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* done */
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -377,8 +377,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    /* push stdin - the IOF will know what to do with the specified target */
</span><br>
<span class="quotelev2">&gt;&gt;    name.jobid = job;
</span><br>
<span class="quotelev2">&gt;&gt;    name.vpid = jdata-&gt;stdin_target;
</span><br>
<span class="quotelev2">&gt;&gt; -    name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    name.epoch = orte_ess.proc_get_epoch(&amp;name);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(name.epoch,orte_ess.proc_get_epoch(&amp;name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = orte_iof.push(&amp;name, ORTE_IOF_STDIN, 0))) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_orted_cmds.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_orted_cmds.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_orted_cmds.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -163,8 +163,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                continue;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            peer.vpid = v;
</span><br>
<span class="quotelev2">&gt;&gt; -            peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -            peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            /* don't worry about errors on the send here - just
</span><br>
<span class="quotelev2">&gt;&gt;             * issue it and keep going
</span><br>
<span class="quotelev2">&gt;&gt; @@ -242,7 +241,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;proc, orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;    proc.name.jobid = jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    proc.name.vpid = ORTE_VPID_WILDCARD;
</span><br>
<span class="quotelev2">&gt;&gt; -    proc.name.epoch  = ORTE_EPOCH_WILDCARD;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(proc.name.epoch,ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;    opal_pointer_array_add(&amp;procs, &amp;proc);
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = orte_plm_base_orted_kill_local_procs(&amp;procs))) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -340,8 +339,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                continue;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            peer.vpid = v;
</span><br>
<span class="quotelev2">&gt;&gt; -            peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -            peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
</span><br>
<span class="quotelev2">&gt;&gt;            /* check to see if this daemon is known to be &quot;dead&quot; */
</span><br>
<span class="quotelev2">&gt;&gt;            if (proc-&gt;state &gt; ORTE_PROC_STATE_UNTERMINATED) {
</span><br>
<span class="quotelev2">&gt;&gt;                /* don't try to send this */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_receive.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_receive.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_receive.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -146,7 +146,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_job_t *jdata, *parent;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_buffer_t answer;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_vpid_t vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    orte_epoch_t epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;    orte_proc_t *proc;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_proc_state_t state;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_exit_code_t exit_code;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -394,8 +396,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                        break;
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt;                    name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                    name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -                    name.epoch = orte_ess.proc_get_epoch(&amp;name);
</span><br>
<span class="quotelev2">&gt;&gt; +                    ORTE_EPOCH_SET(name.epoch,orte_ess.proc_get_epoch(&amp;name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    /* unpack the pid */
</span><br>
<span class="quotelev2">&gt;&gt;                    count = 1;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -488,9 +489,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;                name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;                count=1;
</span><br>
<span class="quotelev2">&gt;&gt;                opal_dss.unpack(msgpkt-&gt;buffer, &amp;epoch, &amp;count, ORTE_EPOCH);
</span><br>
<span class="quotelev2">&gt;&gt;                name.epoch = epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev2">&gt;&gt;                                     &quot;%s plm:base:receive Described rank %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_rsh_support.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_rsh_support.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_rsh_support.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1527,7 +1527,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    char *param, *path, *tmp, *cmd, *basename, *dest_dir;
</span><br>
<span class="quotelev2">&gt;&gt;    int i;
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    orte_epoch_t epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;    orte_process_name_t proc;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* if a prefix is set, pass it to the bootproxy in a special way */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1638,6 +1640,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    opal_setenv(&quot;OMPI_COMM_WORLD_RANK&quot;, cmd, true, argv);
</span><br>
<span class="quotelev2">&gt;&gt;    free(cmd);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    /* set the epoch */
</span><br>
<span class="quotelev2">&gt;&gt;    proc.jobid = jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    proc.vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1648,6 +1651,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    opal_setenv(param, cmd, true, argv);
</span><br>
<span class="quotelev2">&gt;&gt;    free(param);
</span><br>
<span class="quotelev2">&gt;&gt;    free(cmd);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* set the number of procs */
</span><br>
<span class="quotelev2">&gt;&gt;    asprintf(&amp;cmd, &quot;%d&quot;, (int)num_procs);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -33,12 +33,14 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/ess/ess.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/sysinfo/sysinfo_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/hostfile/hostfile.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/dash_host/dash_host.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rmaps/base/rmaps_private.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rmaps/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -454,7 +456,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;         */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* We do set the epoch here since they all start with the same value. */
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;app_idx = app_idx;
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL_OUTPUT_VERBOSE((5, orte_rmaps_base.rmaps_output,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -559,11 +561,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;                        }
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt;                    proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                    proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -                    proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt;&gt; +                    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt; +                    ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt; +                    
</span><br>
<span class="quotelev2">&gt;&gt;                    /* If there is an invalid epoch here, it's because it doesn't exist yet. */
</span><br>
<span class="quotelev2">&gt;&gt; -                    if (ORTE_NODE_RANK_INVALID == proc-&gt;name.epoch) {
</span><br>
<span class="quotelev2">&gt;&gt; -                        proc-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (0 == ORTE_EPOCH_CMP(ORTE_EPOCH_INVALID,proc-&gt;name.epoch)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;                if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;name.vpid)) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -601,8 +604,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                        }
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt;                    proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                    proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -                    proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt;&gt; +                    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt; +                    ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;                if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;name.vpid)) {
</span><br>
<span class="quotelev2">&gt;&gt;                    if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs, proc-&gt;name.vpid, proc))) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -835,7 +838,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                return ORTE_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            proc-&gt;name.vpid = daemons-&gt;num_procs;  /* take the next available vpid */
</span><br>
<span class="quotelev2">&gt;&gt; -            proc-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;            proc-&gt;node = node;
</span><br>
<span class="quotelev2">&gt;&gt;            proc-&gt;nodename = node-&gt;name;
</span><br>
<span class="quotelev2">&gt;&gt;            OPAL_OUTPUT_VERBOSE((5, orte_rmaps_base.rmaps_output,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1014,8 +1017,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;            return ORTE_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;name.vpid = jdata-&gt;num_procs;  /* take the next available vpid */
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;node = node;
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;nodename = node-&gt;name;
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL_OUTPUT_VERBOSE((5, orte_rmaps_base.rmaps_output,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -502,8 +502,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            proc-&gt;name.vpid = rank;
</span><br>
<span class="quotelev2">&gt;&gt;            /* Either init or update the epoch. */
</span><br>
<span class="quotelev2">&gt;&gt; -            proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -            proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            proc-&gt;slot_list = strdup(rfmap-&gt;slot_list);
</span><br>
<span class="quotelev2">&gt;&gt;            /* insert the proc into the proper place */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rmaps/seq/rmaps_seq.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rmaps/seq/rmaps_seq.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rmaps/seq/rmaps_seq.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -235,8 +235,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            /* assign the vpid */
</span><br>
<span class="quotelev2">&gt;&gt;            proc-&gt;name.vpid = vpid++;
</span><br>
<span class="quotelev2">&gt;&gt; -            proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -            proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            /* add to the jdata proc array */
</span><br>
<span class="quotelev2">&gt;&gt;            if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs, proc-&gt;name.vpid, proc))) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rmcast/base/rmcast_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rmcast/base/rmcast_base_open.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rmcast/base/rmcast_base_open.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -341,7 +341,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;name.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ptr-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ptr-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;channel = ORTE_RMCAST_INVALID_CHANNEL;
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;ptr-&gt;ctl, orte_thread_ctl_t);
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;seq_num = ORTE_RMCAST_SEQ_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -430,7 +430,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;name.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ptr-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ptr-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;ptr-&gt;last_msg, opal_list_t);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; static void recvlog_destruct(rmcast_recv_log_t *ptr)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -439,7 +439,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;name.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ptr-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ptr-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt;    while (NULL != (item = opal_list_remove_first(&amp;ptr-&gt;last_msg))) {
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_RELEASE(item);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rmcast/tcp/rmcast_tcp.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rmcast/tcp/rmcast_tcp.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rmcast/tcp/rmcast_tcp.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -681,7 +681,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* caller requested id of sender */
</span><br>
<span class="quotelev2">&gt;&gt;        name-&gt;jobid = recvptr-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        name-&gt;vpid = recvptr-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        name-&gt;epoch= recvptr-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(name-&gt;epoch,recvptr-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    *seq_num = recvptr-&gt;seq_num;
</span><br>
<span class="quotelev2">&gt;&gt;    *msg = recvptr-&gt;iovec_array;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -776,7 +776,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* caller requested id of sender */
</span><br>
<span class="quotelev2">&gt;&gt;        name-&gt;jobid = recvptr-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        name-&gt;vpid = recvptr-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        name-&gt;epoch= recvptr-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(name-&gt;epoch,recvptr-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    *seq_num = recvptr-&gt;seq_num;
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (ret = opal_dss.copy_payload(buf, recvptr-&gt;buf))) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rmcast/udp/rmcast_udp.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rmcast/udp/rmcast_udp.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rmcast/udp/rmcast_udp.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -460,7 +460,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* caller requested id of sender */
</span><br>
<span class="quotelev2">&gt;&gt;        name-&gt;jobid = recvptr-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        name-&gt;vpid = recvptr-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        name-&gt;epoch= recvptr-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(name-&gt;epoch,recvptr-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    *seq_num = recvptr-&gt;seq_num;
</span><br>
<span class="quotelev2">&gt;&gt;    *msg = recvptr-&gt;iovec_array;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -553,7 +553,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* caller requested id of sender */
</span><br>
<span class="quotelev2">&gt;&gt;        name-&gt;jobid = recvptr-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        name-&gt;vpid = recvptr-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        name-&gt;epoch= recvptr-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(name-&gt;epoch,recvptr-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    *seq_num = recvptr-&gt;seq_num;
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (ret = opal_dss.copy_payload(buf, recvptr-&gt;buf))) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rml/base/rml_base_components.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rml/base/rml_base_components.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rml/base/rml_base_components.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -20,6 +20,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -67,14 +68,14 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    pkt-&gt;sender.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    pkt-&gt;sender.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    pkt-&gt;sender.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(pkt-&gt;sender.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    pkt-&gt;buffer = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; static void msg_pkt_destructor(orte_msg_packet_t *pkt)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    pkt-&gt;sender.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    pkt-&gt;sender.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    pkt-&gt;sender.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(pkt-&gt;sender.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL != pkt-&gt;buffer) {
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_RELEASE(pkt-&gt;buffer);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rml/rml_types.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rml/rml_types.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rml/rml_types.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -62,7 +62,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        pkt = OBJ_NEW(orte_msg_packet_t);                           \
</span><br>
<span class="quotelev2">&gt;&gt;        pkt-&gt;sender.jobid = (sndr)-&gt;jobid;                          \
</span><br>
<span class="quotelev2">&gt;&gt;        pkt-&gt;sender.vpid = (sndr)-&gt;vpid;                            \
</span><br>
<span class="quotelev2">&gt;&gt; -        pkt-&gt;sender.epoch = (sndr)-&gt;epoch;                          \
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(pkt-&gt;sender.epoch,(sndr)-&gt;epoch);            \
</span><br>
<span class="quotelev2">&gt;&gt;        if ((crt)) {                                                \
</span><br>
<span class="quotelev2">&gt;&gt;            pkt-&gt;buffer = OBJ_NEW(opal_buffer_t);                   \
</span><br>
<span class="quotelev2">&gt;&gt;            opal_dss.copy_payload(pkt-&gt;buffer, *(buf));             \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -85,7 +85,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        pkt = OBJ_NEW(orte_msg_packet_t);                           \
</span><br>
<span class="quotelev2">&gt;&gt;        pkt-&gt;sender.jobid = (sndr)-&gt;jobid;                          \
</span><br>
<span class="quotelev2">&gt;&gt;        pkt-&gt;sender.vpid = (sndr)-&gt;vpid;                            \
</span><br>
<span class="quotelev2">&gt;&gt; -        pkt-&gt;sender.epoch = (sndr)-&gt;epoch;                          \
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(pkt-&gt;sender.epoch,(sndr)-&gt;epoch);            \
</span><br>
<span class="quotelev2">&gt;&gt;        if ((crt)) {                                                \
</span><br>
<span class="quotelev2">&gt;&gt;            pkt-&gt;buffer = OBJ_NEW(opal_buffer_t);                   \
</span><br>
<span class="quotelev2">&gt;&gt;            opal_dss.copy_payload(pkt-&gt;buffer, *(buf));             \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -191,8 +191,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_RML_TAG_SUBSCRIBE              46
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; /* For Epoch Updates */
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_RML_TAG_EPOCH_CHANGE           47
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* Notify of failed processes */
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_RML_TAG_FAILURE_NOTICE         48
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/routed/base/routed_base_components.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/routed/base/routed_base_components.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/routed/base/routed_base_components.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -65,7 +65,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;route.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;route.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ptr-&gt;route.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ptr-&gt;route.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;hnp_uri = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; static void jfamdest(orte_routed_jobfam_t *ptr)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -117,7 +117,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    jfam = OBJ_NEW(orte_routed_jobfam_t);
</span><br>
<span class="quotelev2">&gt;&gt;    jfam-&gt;route.jobid = ORTE_PROC_MY_HNP-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    jfam-&gt;route.vpid = ORTE_PROC_MY_HNP-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    jfam-&gt;route.epoch = ORTE_PROC_MY_HNP-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(jfam-&gt;route.epoch,ORTE_PROC_MY_HNP-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    jfam-&gt;job_family = ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid);
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL != orte_process_info.my_hnp_uri) {
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;hnp_uri = strdup(orte_process_info.my_hnp_uri);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -252,7 +252,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;job_family = jobfamily;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.jobid = name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.vpid = name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        jfam-&gt;route.epoch = name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;hnp_uri = strdup(uri);
</span><br>
<span class="quotelev2">&gt;&gt;    done:
</span><br>
<span class="quotelev2">&gt;&gt;        free(uri);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/routed/base/routed_base_register_sync.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/routed/base/routed_base_register_sync.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/routed/base/routed_base_register_sync.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -127,7 +127,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_std_cntr_t cnt;
</span><br>
<span class="quotelev2">&gt;&gt;    char *rml_uri;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_vpid_t vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    orte_epoch_t epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;    int rc;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_JOB_FAMILY(job) == ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid)) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -146,11 +148,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;    cnt = 1;
</span><br>
<span class="quotelev2">&gt;&gt;    while (ORTE_SUCCESS == (rc = opal_dss.unpack(buffer, &amp;vpid, &amp;cnt, ORTE_VPID))) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;        cnt = 1;
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;epoch, &amp;cnt, ORTE_EPOCH))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;            continue;
</span><br>
<span class="quotelev2">&gt;&gt;        }        
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;rml_uri, &amp;cnt, OPAL_STRING))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/routed/binomial/routed_binomial.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/routed/binomial/routed_binomial.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/routed/binomial/routed_binomial.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -33,6 +33,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_wait.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/runtime.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -147,7 +148,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (proc-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(proc-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -216,7 +217,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -274,8 +275,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                     ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev2">&gt;&gt;                jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -                jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(jfam-&gt;route.epoch,orte_ess.proc_get_epoch(&amp;jfam-&gt;route));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -290,8 +290,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;job_family = jfamily;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,orte_ess.proc_get_epoch(&amp;jfam-&gt;route));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -317,11 +316,21 @@
</span><br>
<span class="quotelev2">&gt;&gt;    /* initialize */
</span><br>
<span class="quotelev2">&gt;&gt;    daemon.jobid = ORTE_PROC_MY_DAEMON-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    daemon.vpid = ORTE_PROC_MY_DAEMON-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    daemon.epoch = ORTE_PROC_MY_DAEMON-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(daemon.epoch,ORTE_PROC_MY_DAEMON-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; +        target-&gt;vpid == ORTE_VPID_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +        ret = ORTE_NAME_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; +        goto found;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (0 &gt; ORTE_EPOCH_CMP(target-&gt;epoch, orte_ess.proc_get_epoch(target))) {
</span><br>
<span class="quotelev2">&gt;&gt;        ret = ORTE_NAME_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;        goto found;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -443,7 +452,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            /* If the daemon to which we should be routing is dead, then update
</span><br>
<span class="quotelev2">&gt;&gt;             * the routing tree and start over. */
</span><br>
<span class="quotelev2">&gt;&gt; -            if (!orte_util_proc_is_running(&amp;daemon)) {
</span><br>
<span class="quotelev2">&gt;&gt; +            if (!PROC_IS_RUNNING(&amp;daemon)) {
</span><br>
<span class="quotelev2">&gt;&gt;                update_routing_tree(daemon.jobid);
</span><br>
<span class="quotelev2">&gt;&gt;                goto startover;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -461,8 +470,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    ret = &amp;daemon;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; found:
</span><br>
<span class="quotelev2">&gt;&gt; -    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;%s routed_binomial_get(%s) --&gt; %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -879,7 +887,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    local_lifeline.epoch = proc-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,proc-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    lifeline = &amp;local_lifeline;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -924,11 +932,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;                 * that process so we can check it's state.
</span><br>
<span class="quotelev2">&gt;&gt;                 */
</span><br>
<span class="quotelev2">&gt;&gt;                proc_name.vpid = peer;
</span><br>
<span class="quotelev2">&gt;&gt; -                proc_name.epoch = orte_util_lookup_epoch(&amp;proc_name);
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(proc_name.epoch,orte_util_lookup_epoch(&amp;proc_name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -                if (!orte_util_proc_is_running(&amp;proc_name) 
</span><br>
<span class="quotelev2">&gt;&gt; -                    &amp;&amp; ORTE_EPOCH_MIN &lt; proc_name.epoch
</span><br>
<span class="quotelev2">&gt;&gt; -                    &amp;&amp; ORTE_EPOCH_INVALID != proc_name.epoch) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if (!PROC_IS_RUNNING(&amp;proc_name)
</span><br>
<span class="quotelev2">&gt;&gt; +                    &amp;&amp; 0 &lt; ORTE_EPOCH_CMP(ORTE_EPOCH_MIN,proc_name.epoch)
</span><br>
<span class="quotelev2">&gt;&gt; +                    &amp;&amp; 0 != ORTE_EPOCH_CMP(ORTE_EPOCH_INVALID,proc_name.epoch)) {
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                                         &quot;%s routed:binomial child %s is dead&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt; @@ -967,7 +975,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* find the children of this rank */
</span><br>
<span class="quotelev2">&gt;&gt; -    OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt; +    OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;%s routed:binomial find children of rank %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), rank));
</span><br>
<span class="quotelev2">&gt;&gt;    bitmap = opal_cube_dim(num_procs);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -977,24 +985,25 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    for (i = hibit + 1, mask = 1 &lt;&lt; i; i &lt;= bitmap; ++i, mask &lt;&lt;= 1) {
</span><br>
<span class="quotelev2">&gt;&gt;        peer = rank | mask;
</span><br>
<span class="quotelev2">&gt;&gt; -        OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt; +        OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                             &quot;%s routed:binomial find children checking peer %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), peer));
</span><br>
<span class="quotelev2">&gt;&gt;        if (peer &lt; num_procs) {
</span><br>
<span class="quotelev2">&gt;&gt; -            OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt; +            OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                                 &quot;%s routed:binomial find children computing tree&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                 ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt;            /* execute compute on this child */
</span><br>
<span class="quotelev2">&gt;&gt;            if (0 &lt;= (found = binomial_tree(peer, rank, me, num_procs, nchildren, childrn, relatives, mine, jobid))) {
</span><br>
<span class="quotelev2">&gt;&gt;                proc_name.vpid = found;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -                if (!orte_util_proc_is_running(&amp;proc_name) &amp;&amp; ORTE_EPOCH_MIN &lt; orte_util_lookup_epoch(&amp;proc_name)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt; +                if (!PROC_IS_RUNNING(&amp;proc_name) 
</span><br>
<span class="quotelev2">&gt;&gt; +                    &amp;&amp; 0 &lt; ORTE_EPOCH_CMP(ORTE_EPOCH_MIN,orte_util_lookup_epoch(&amp;proc_name))) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                                         &quot;%s routed:binomial find children proc out of date - returning parent %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), parent));
</span><br>
<span class="quotelev2">&gt;&gt;                    return parent;
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt; -                OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt; +                OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt;                                     &quot;%s routed:binomial find children returning found value %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), found));
</span><br>
<span class="quotelev2">&gt;&gt;                return found;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1029,8 +1038,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_PARENT-&gt;vpid = binomial_tree(0, 0, ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev2">&gt;&gt;                                   orte_process_info.max_procs,
</span><br>
<span class="quotelev2">&gt;&gt;                                   &amp;num_children, &amp;my_children, NULL, true, jobid);
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_PARENT-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_PARENT-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_PARENT-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (0 &lt; opal_output_get_verbosity(orte_routed_base_output)) {
</span><br>
<span class="quotelev2">&gt;&gt;        opal_output(0, &quot;%s: parent %d num_children %d&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), ORTE_PROC_MY_PARENT-&gt;vpid, num_children);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/routed/cm/routed_cm.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/routed/cm/routed_cm.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/routed/cm/routed_cm.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -35,6 +35,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_wait.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/runtime.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -139,7 +140,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (proc-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(proc-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -200,7 +201,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -257,8 +258,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                     ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev2">&gt;&gt;                jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -                jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(jfam-&gt;route.epoch,orte_ess.proc_get_epoch(&amp;jfam-&gt;route));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -273,8 +273,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;job_family = jfamily;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,orte_ess.proc_get_epoch(&amp;jfam-&gt;route));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -299,7 +298,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        ret = ORTE_NAME_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;        goto found;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -367,8 +366,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* Initialize daemon's epoch, based on its current vpid/jobid */
</span><br>
<span class="quotelev2">&gt;&gt; -    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* if the daemon is me, then send direct to the target! */
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_PROC_MY_NAME-&gt;vpid == daemon.vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -814,8 +812,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    local_lifeline.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    local_lifeline.epoch = orte_ess.proc_get_epoch(&amp;local_lifeline);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,orte_ess.proc_get_epoch(&amp;local_lifeline));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    lifeline = &amp;local_lifeline;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/routed/direct/routed_direct.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/routed/direct/routed_direct.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/routed/direct/routed_direct.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,6 +24,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -135,7 +136,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        ret = ORTE_NAME_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;        /* all routes are direct */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/routed/linear/routed_linear.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/routed/linear/routed_linear.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/routed/linear/routed_linear.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_wait.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/runtime.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -132,7 +133,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (proc-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(proc-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -201,7 +202,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -259,7 +260,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                     ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev2">&gt;&gt;                jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                jfam-&gt;route.epoch = route-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(jfam-&gt;route.epoch,route-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;                return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -273,7 +274,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;job_family = jfamily;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        jfam-&gt;route.epoch = route-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,route-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -373,8 +374,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* Initialize daemon's epoch, based on its current vpid/jobid */
</span><br>
<span class="quotelev2">&gt;&gt; -    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* if the daemon is me, then send direct to the target! */
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_PROC_MY_NAME-&gt;vpid == daemon.vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -395,8 +395,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                /* we are at end of chain - wrap around */
</span><br>
<span class="quotelev2">&gt;&gt;                daemon.vpid = 0;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; -            daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -            daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
</span><br>
<span class="quotelev2">&gt;&gt;            ret = &amp;daemon;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -741,7 +740,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    local_lifeline.epoch = proc-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,proc-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    lifeline = &amp;local_lifeline;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/routed/radix/routed_radix.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/routed/radix/routed_radix.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/routed/radix/routed_radix.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_wait.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/runtime.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -145,7 +146,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (proc-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(proc-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -214,7 +215,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -272,7 +273,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                     ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev2">&gt;&gt;                jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                jfam-&gt;route.epoch = route-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(jfam-&gt;route.epoch,route-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;                return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -286,7 +287,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;job_family = jfamily;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        jfam-&gt;route.epoch = route-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,route-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -310,7 +311,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        ret = ORTE_NAME_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;        goto found;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -413,8 +414,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            if (opal_bitmap_is_set_bit(&amp;child-&gt;relatives, daemon.vpid)) {
</span><br>
<span class="quotelev2">&gt;&gt;                /* yep - we need to step through this child */
</span><br>
<span class="quotelev2">&gt;&gt;                daemon.vpid = child-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -                daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
</span><br>
<span class="quotelev2">&gt;&gt;                ret = &amp;daemon;
</span><br>
<span class="quotelev2">&gt;&gt;                goto found;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -425,8 +425,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     * any of our children, so we have to step up through our parent
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    daemon.vpid = ORTE_PROC_MY_PARENT-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    ret = &amp;daemon;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -788,7 +787,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    local_lifeline.epoch = proc-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,proc-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    lifeline = &amp;local_lifeline;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -881,8 +880,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_PROC_MY_PARENT-&gt;vpid = (Ii-Sum) % NInPrevLevel;
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_PROC_MY_PARENT-&gt;vpid += (Sum - NInPrevLevel);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_PARENT-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_PARENT-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_PARENT-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* compute my direct children and the bitmap that shows which vpids
</span><br>
<span class="quotelev2">&gt;&gt;     * lie underneath their branch
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/routed/slave/routed_slave.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/routed/slave/routed_slave.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/routed/slave/routed_slave.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -26,6 +26,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_wait.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/runtime.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -134,7 +135,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt;        target-&gt;vpid == ORTE_VPID_INVALID ||
</span><br>
<span class="quotelev2">&gt;&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
</span><br>
<span class="quotelev2">&gt;&gt;        ret = ORTE_NAME_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;        /* a slave must always route via its parent daemon */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -275,8 +276,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    local_lifeline.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    local_lifeline.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    local_lifeline.epoch = orte_ess.proc_get_epoch(&amp;local_lifeline);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,orte_ess.proc_get_epoch(&amp;local_lifeline));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    lifeline = &amp;local_lifeline;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/sensor/file/sensor_file.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/sensor/file/sensor_file.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/sensor/file/sensor_file.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -70,7 +70,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_item_t super;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_jobid_t jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_vpid_t vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    orte_epoch_t epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;    char *file;
</span><br>
<span class="quotelev2">&gt;&gt;    int tick;
</span><br>
<span class="quotelev2">&gt;&gt;    bool check_size;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/snapc/base/snapc_base_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/snapc/base/snapc_base_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/snapc/base/snapc_base_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -81,7 +81,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.jobid  = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.vpid   = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    snapshot-&gt;process_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;state = ORTE_SNAPC_CKPT_STATE_NONE;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -92,7 +92,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.jobid  = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.vpid   = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    snapshot-&gt;process_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;state = ORTE_SNAPC_CKPT_STATE_NONE;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/snapc/full/snapc_full_global.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/snapc/full/snapc_full_global.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -427,7 +427,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            new_proc = OBJ_NEW(orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;            new_proc-&gt;name.jobid = proc-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            new_proc-&gt;name.vpid  = proc-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            new_proc-&gt;name.epoch = proc-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(new_proc-&gt;name.epoch,proc-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;            new_proc-&gt;node = OBJ_NEW(orte_node_t);
</span><br>
<span class="quotelev2">&gt;&gt;            new_proc-&gt;node-&gt;name = proc-&gt;node-&gt;name;
</span><br>
<span class="quotelev2">&gt;&gt;            opal_list_append(migrating_procs, &amp;new_proc-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -618,7 +618,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        orted_snapshot-&gt;process_name.jobid  = cur_node-&gt;daemon-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        orted_snapshot-&gt;process_name.vpid   = cur_node-&gt;daemon-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        orted_snapshot-&gt;process_name.epoch  = cur_node-&gt;daemon-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(orted_snapshot-&gt;process_name.epoch,cur_node-&gt;daemon-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        mask = ORTE_NS_CMP_JOBID;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -636,7 +636,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            app_snapshot-&gt;process_name.jobid = procs[p]-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            app_snapshot-&gt;process_name.vpid = procs[p]-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            app_snapshot-&gt;process_name.epoch = procs[p]-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(app_snapshot-&gt;process_name.epoch,procs[p]-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            opal_list_append(&amp;(orted_snapshot-&gt;super.local_snapshots), &amp;(app_snapshot-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -800,7 +800,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                app_snapshot-&gt;process_name.jobid = procs[p]-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                app_snapshot-&gt;process_name.vpid = procs[p]-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                app_snapshot-&gt;process_name.epoch = procs[p]-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +                ORTE_EPOCH_SET(app_snapshot-&gt;process_name.epoch,procs[p]-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                opal_list_append(&amp;(orted_snapshot-&gt;super.local_snapshots), &amp;(app_snapshot-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -816,7 +816,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        orted_snapshot-&gt;process_name.jobid  = cur_node-&gt;daemon-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        orted_snapshot-&gt;process_name.vpid   = cur_node-&gt;daemon-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        orted_snapshot-&gt;process_name.epoch  = cur_node-&gt;daemon-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(orted_snapshot-&gt;process_name.epoch,cur_node-&gt;daemon-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        mask = ORTE_NS_CMP_ALL;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -837,7 +837,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            app_snapshot-&gt;process_name.jobid = procs[p]-&gt;name.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            app_snapshot-&gt;process_name.vpid = procs[p]-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            app_snapshot-&gt;process_name.epoch = procs[p]-&gt;name.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(app_snapshot-&gt;process_name.epoch,procs[p]-&gt;name.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            opal_list_append(&amp;(orted_snapshot-&gt;super.local_snapshots), &amp;(app_snapshot-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/snapc/full/snapc_full_local.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/snapc/full/snapc_full_local.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/snapc/full/snapc_full_local.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2033,7 +2033,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;process_pid              = child-&gt;pid;
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;super.process_name.jobid = child-&gt;name-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;super.process_name.vpid  = child-&gt;name-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            vpid_snapshot-&gt;super.process_name.epoch = child-&gt;name-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(vpid_snapshot-&gt;super.process_name.epoch,child-&gt;name-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2095,7 +2095,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;process_pid              = child-&gt;pid;
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;super.process_name.jobid = child-&gt;name-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;super.process_name.vpid  = child-&gt;name-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            vpid_snapshot-&gt;super.process_name.epoch = child-&gt;name-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(vpid_snapshot-&gt;super.process_name.epoch,child-&gt;name-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;            /*vpid_snapshot-&gt;migrating = true;*/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            opal_list_append(&amp;(local_global_snapshot.local_snapshots), &amp;(vpid_snapshot-&gt;super.super));
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2111,7 +2111,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;process_pid              = child-&gt;pid;
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;super.process_name.jobid = child-&gt;name-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;super.process_name.vpid  = child-&gt;name-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            vpid_snapshot-&gt;super.process_name.epoch = child-&gt;name-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(vpid_snapshot-&gt;super.process_name.epoch,child-&gt;name-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/snapc/full/snapc_full_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/snapc/full/snapc_full_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/snapc/full/snapc_full_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -83,7 +83,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; void orte_snapc_full_orted_construct(orte_snapc_full_orted_snapshot_t *snapshot) {
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.jobid  = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.vpid   = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    snapshot-&gt;process_name.epoch  = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,0);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;state = ORTE_SNAPC_CKPT_STATE_NONE;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -91,7 +91,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; void orte_snapc_full_orted_destruct( orte_snapc_full_orted_snapshot_t *snapshot) {
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.jobid  = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.vpid   = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    snapshot-&gt;process_name.epoch  = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,0);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;state = ORTE_SNAPC_CKPT_STATE_NONE;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/sstore/base/sstore_base_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/sstore/base/sstore_base_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/sstore/base/sstore_base_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -62,7 +62,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.jobid  = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.vpid   = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    snapshot-&gt;process_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;crs_comp = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;compress_comp    = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.jobid  = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    snapshot-&gt;process_name.vpid   = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    snapshot-&gt;process_name.epoch  = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL != snapshot-&gt;crs_comp ) {
</span><br>
<span class="quotelev2">&gt;&gt;        free(snapshot-&gt;crs_comp);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -637,7 +637,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;process_name.jobid  = proc.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;process_name.vpid   = proc.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            vpid_snapshot-&gt;process_name.epoch  = proc.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(vpid_snapshot-&gt;process_name.epoch,proc.epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        else if(0 == strncmp(token, SSTORE_METADATA_LOCAL_CRS_COMP_STR, strlen(SSTORE_METADATA_LOCAL_CRS_COMP_STR))) {
</span><br>
<span class="quotelev2">&gt;&gt;            vpid_snapshot-&gt;crs_comp = strdup(value);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/sstore/central/sstore_central_global.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/sstore/central/sstore_central_global.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1216,8 +1216,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        vpid_snapshot-&gt;process_name.jobid  = handle_info-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        vpid_snapshot-&gt;process_name.vpid   = i;
</span><br>
<span class="quotelev2">&gt;&gt; -        vpid_snapshot-&gt;process_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        vpid_snapshot-&gt;process_name.epoch = orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(vpid_snapshot-&gt;process_name.epoch,orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        vpid_snapshot-&gt;crs_comp     = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;        global_snapshot-&gt;start_time = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/sstore/central/sstore_central_local.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/sstore/central/sstore_central_local.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/sstore/central/sstore_central_local.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -210,7 +210,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    info-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(info-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;local_location = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;metadata_filename = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -222,7 +222,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    info-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(info-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL != info-&gt;local_location ) {
</span><br>
<span class="quotelev2">&gt;&gt;        free(info-&gt;local_location);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -535,7 +535,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    app_info-&gt;name.jobid = name-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    app_info-&gt;name.vpid  = name-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    app_info-&gt;name.epoch = name-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(app_info-&gt;name.epoch,name-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_append(handle_info-&gt;app_info_handle, &amp;(app_info-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/sstore/stage/sstore_stage_global.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/sstore/stage/sstore_stage_global.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1218,10 +1218,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;        p_set = OBJ_NEW(orte_filem_base_process_set_t);
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.jobid = peer-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.vpid  = peer-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        p_set-&gt;source.epoch = peer-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,peer-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;sink.jobid   = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;sink.vpid    = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        p_set-&gt;sink.epoch   = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(p_set-&gt;sink.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_list_append(&amp;(filem_request-&gt;process_sets), &amp;(p_set-&gt;super) );
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1706,8 +1706,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        vpid_snapshot-&gt;process_name.jobid  = handle_info-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        vpid_snapshot-&gt;process_name.vpid   = i;
</span><br>
<span class="quotelev2">&gt;&gt; -        vpid_snapshot-&gt;process_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        vpid_snapshot-&gt;process_name.epoch = orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(vpid_snapshot-&gt;process_name.epoch,orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* JJH: Currently we do not have this information since we do not save
</span><br>
<span class="quotelev2">&gt;&gt;         * individual vpid info in the Global SStore. It is in the metadata
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/sstore/stage/sstore_stage_local.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/sstore/stage/sstore_stage_local.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/sstore/stage/sstore_stage_local.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -287,7 +287,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    info-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(info-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;local_location = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;compressed_local_location = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -302,7 +302,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    info-&gt;name.vpid  = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    info-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(info-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL != info-&gt;local_location ) {
</span><br>
<span class="quotelev2">&gt;&gt;        free(info-&gt;local_location);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1014,7 +1014,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    app_info-&gt;name.jobid = name-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    app_info-&gt;name.vpid  = name-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    app_info-&gt;name.epoch = name-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(app_info-&gt;name.epoch,name-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_append(handle_info-&gt;app_info_handle, &amp;(app_info-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2057,17 +2057,17 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* if I am the HNP, then use me as the source */
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.vpid  = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        p_set-&gt;source.epoch = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    else {
</span><br>
<span class="quotelev2">&gt;&gt;        /* otherwise, set the HNP as the source */
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.jobid = ORTE_PROC_MY_HNP-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        p_set-&gt;source.vpid  = ORTE_PROC_MY_HNP-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        p_set-&gt;source.epoch = ORTE_PROC_MY_HNP-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,ORTE_PROC_MY_HNP-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    p_set-&gt;sink.jobid   = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    p_set-&gt;sink.vpid    = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    p_set-&gt;sink.epoch   = ORTE_PROC_MY_NAME-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(p_set-&gt;sink.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_append(&amp;(filem_request-&gt;process_sets), &amp;(p_set-&gt;super) );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* Define the file set */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/orted/orted_comm.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/orted/orted_comm.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/orted/orted_comm.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -123,18 +123,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;        nm = (orte_routed_tree_t*)item;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        target.vpid = nm-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        target.epoch = orte_util_lookup_epoch(&amp;target);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(target.epoch,orte_ess.proc_get_epoch(&amp;target));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!orte_util_proc_is_running(&amp;target)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (!PROC_IS_RUNNING(&amp;target)) {
</span><br>
<span class="quotelev2">&gt;&gt;            continue;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -        target.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        if (ORTE_NODE_RANK_INVALID == (target.epoch = orte_ess.proc_get_epoch(&amp;target))) {
</span><br>
<span class="quotelev2">&gt;&gt; -            /* If we are trying to send to a previously failed process it's
</span><br>
<span class="quotelev2">&gt;&gt; -             * better to fail silently. */
</span><br>
<span class="quotelev2">&gt;&gt; -            continue;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(target.epoch,orte_ess.proc_get_epoch(&amp;target));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL_OUTPUT_VERBOSE((1, orte_debug_output,
</span><br>
<span class="quotelev2">&gt;&gt;                             &quot;%s orte:daemon:send_relay sending relay msg to %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -422,7 +417,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;            proct = OBJ_NEW(orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;            proct-&gt;name.jobid = proc.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            proct-&gt;name.vpid = proc.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            proct-&gt;name.epoch = proc.epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(proct-&gt;name.epoch,proc.epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;            opal_pointer_array_add(&amp;procarray, proct);
</span><br>
<span class="quotelev2">&gt;&gt;            num_replies++;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1059,7 +1055,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;            orte_job_t *jdata;
</span><br>
<span class="quotelev2">&gt;&gt;            orte_proc_t *proc;
</span><br>
<span class="quotelev2">&gt;&gt;            orte_vpid_t vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;            orte_epoch_t epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;            int32_t i, num_procs;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            /* setup the answer */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1086,12 +1084,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;                goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;            /* unpack the epoch */
</span><br>
<span class="quotelev2">&gt;&gt;            n = 1;
</span><br>
<span class="quotelev2">&gt;&gt;            if (ORTE_SUCCESS != (ret = opal_dss.unpack(buffer, &amp;epoch, &amp;n, ORTE_EPOCH))) {
</span><br>
<span class="quotelev2">&gt;&gt;                ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;                goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            /* if they asked for a specific proc, then just get that info */
</span><br>
<span class="quotelev2">&gt;&gt;            if (ORTE_VPID_WILDCARD != vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1201,7 +1201,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                    /* loop across all daemons */
</span><br>
<span class="quotelev2">&gt;&gt;                    proc2.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;                    for (proc2.vpid=1; proc2.vpid &lt; orte_process_info.num_procs; proc2.vpid++) {
</span><br>
<span class="quotelev2">&gt;&gt; -                        proc2.epoch = orte_util_lookup_epoch(&amp;proc2);
</span><br>
<span class="quotelev2">&gt;&gt; +                        ORTE_EPOCH_SET(proc2.epoch,orte_util_lookup_epoch(&amp;proc2));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                        /* setup the cmd */
</span><br>
<span class="quotelev2">&gt;&gt;                        relay_msg = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/orted/orted_main.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/orted/orted_main.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/orted/orted_main.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -388,14 +388,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_process_info.my_daemon_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_DAEMON-&gt;jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    ORTE_PROC_MY_DAEMON-&gt;vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_PROC_MY_DAEMON-&gt;epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_DAEMON-&gt;epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* if I am also the hnp, then update that contact info field too */
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev2">&gt;&gt;        orte_process_info.my_hnp_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_PROC_MY_HNP-&gt;jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_PROC_MY_HNP-&gt;vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -        ORTE_PROC_MY_HNP-&gt;epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(ORTE_PROC_MY_HNP-&gt;epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* setup the primary daemon command receive function */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -495,7 +495,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;        proc = OBJ_NEW(orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;name.jobid = jdata-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;name.vpid = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;app_idx = 0;
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;node = nodes[0]; /* hnp node must be there */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_compare_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/data_type_support/orte_dt_compare_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_compare_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -76,6 +76,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    /** check the epochs - if one of them is WILDCARD, then ignore
</span><br>
<span class="quotelev2">&gt;&gt;    * this field since anything is okay
</span><br>
<span class="quotelev2">&gt;&gt;    */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -87,6 +88,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            return OPAL_VALUE1_GREATER;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /** only way to get here is if all fields are equal or WILDCARD */
</span><br>
<span class="quotelev2">&gt;&gt;    return OPAL_EQUAL;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -122,6 +124,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return OPAL_EQUAL;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_compare_epoch(orte_epoch_t *value1,
</span><br>
<span class="quotelev2">&gt;&gt;                          orte_epoch_t *value2,
</span><br>
<span class="quotelev2">&gt;&gt;                          opal_data_type_t type)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -136,6 +139,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return OPAL_EQUAL;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; /**
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -61,7 +61,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    val-&gt;jobid = src-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    val-&gt;vpid = src-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    val-&gt;epoch = src-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(val-&gt;epoch,src-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    *dest = val;
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -105,6 +105,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -123,6 +124,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -58,7 +58,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_process_name_t* proc;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_jobid_t *jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_vpid_t *vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    orte_epoch_t *epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* collect all the jobids in a contiguous array */
</span><br>
<span class="quotelev2">&gt;&gt;    jobid = (orte_jobid_t*)malloc(num_vals * sizeof(orte_jobid_t));
</span><br>
<span class="quotelev2">&gt;&gt; @@ -100,6 +102,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    free(vpid);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    /* Collect all the epochs in a contiguous array */
</span><br>
<span class="quotelev2">&gt;&gt;    epoch = (orte_epoch_t *) malloc(num_vals * sizeof(orte_epoch_t));
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == epoch) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -118,6 +121,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        return rc;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    free(epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -156,6 +160,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -171,6 +176,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_print_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/data_type_support/orte_dt_print_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_print_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -125,8 +125,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;            orte_dt_quick_print(output, &quot;ORTE_STD_CNTR&quot;, prefix, src, ORTE_STD_CNTR_T);
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_EPOCH:
</span><br>
<span class="quotelev2">&gt;&gt;            orte_dt_quick_print(output, &quot;ORTE_EPOCH&quot;, prefix, src, ORTE_EPOCH_T);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_VPID:
</span><br>
<span class="quotelev2">&gt;&gt;            orte_dt_quick_print(output, &quot;ORTE_VPID&quot;, prefix, src, ORTE_VPID_T);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -478,11 +480,21 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if (orte_xml_output) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* need to create the output in XML format */
</span><br>
<span class="quotelev2">&gt;&gt;        if (0 == src-&gt;pid) {
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;            asprintf(output, &quot;%s&lt;process rank=\&quot;%s\&quot; status=\&quot;%s\&quot; epoch=\&quot;%s\&quot;/&gt;\n&quot;, pfx2,
</span><br>
<span class="quotelev2">&gt;&gt;                     ORTE_VPID_PRINT(src-&gt;name.vpid), orte_proc_state_to_str(src-&gt;state), ORTE_EPOCH_PRINT(src-&gt;name.epoch));
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +            asprintf(output, &quot;%s&lt;process rank=\&quot;%s\&quot; status=\&quot;%s\&quot;/&gt;\n&quot;, pfx2,
</span><br>
<span class="quotelev2">&gt;&gt; +                     ORTE_VPID_PRINT(src-&gt;name.vpid), orte_proc_state_to_str(src-&gt;state));
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;        } else {
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;            asprintf(output, &quot;%s&lt;process rank=\&quot;%s\&quot; pid=\&quot;%d\&quot; status=\&quot;%s\&quot; epoch=\&quot;%s\&quot;/&gt;\n&quot;, pfx2,
</span><br>
<span class="quotelev2">&gt;&gt;                     ORTE_VPID_PRINT(src-&gt;name.vpid), (int)src-&gt;pid, orte_proc_state_to_str(src-&gt;state), ORTE_EPOCH_PRINT(src-&gt;name.epoch));
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +            asprintf(output, &quot;%s&lt;process rank=\&quot;%s\&quot; pid=\&quot;%d\&quot; status=\&quot;%s\&quot;/&gt;\n&quot;, pfx2,
</span><br>
<span class="quotelev2">&gt;&gt; +                     ORTE_VPID_PRINT(src-&gt;name.vpid), (int)src-&gt;pid, orte_proc_state_to_str(src-&gt;state));
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        free(pfx2);
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -490,10 +502,17 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (!orte_devel_level_output) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* just print a very simple output for users */
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;        asprintf(&amp;tmp, &quot;\n%sProcess OMPI jobid: %s Process rank: %s Epoch: %s&quot;, pfx2,
</span><br>
<span class="quotelev2">&gt;&gt;                 ORTE_JOBID_PRINT(src-&gt;name.jobid),
</span><br>
<span class="quotelev2">&gt;&gt;                 ORTE_VPID_PRINT(src-&gt;name.vpid),
</span><br>
<span class="quotelev2">&gt;&gt;                 ORTE_EPOCH_PRINT(src-&gt;name.epoch));
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +        asprintf(&amp;tmp, &quot;\n%sProcess OMPI jobid: %s Process rank: %s Epoch: %s&quot;, pfx2,
</span><br>
<span class="quotelev2">&gt;&gt; +                 ORTE_JOBID_PRINT(src-&gt;name.jobid),
</span><br>
<span class="quotelev2">&gt;&gt; +                 ORTE_VPID_PRINT(src-&gt;name.vpid));
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +        
</span><br>
<span class="quotelev2">&gt;&gt;        /* set the return */
</span><br>
<span class="quotelev2">&gt;&gt;        *output = tmp;
</span><br>
<span class="quotelev2">&gt;&gt;        free(pfx2);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_size_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/data_type_support/orte_dt_size_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_size_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -45,9 +45,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;            *size = sizeof(orte_std_cntr_t);
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_EPOCH:
</span><br>
<span class="quotelev2">&gt;&gt;            *size = sizeof(orte_epoch_t);
</span><br>
<span class="quotelev2">&gt;&gt;            break;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        case ORTE_VPID:
</span><br>
<span class="quotelev2">&gt;&gt;            *size = sizeof(orte_vpid_t);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_support.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/data_type_support/orte_dt_support.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_support.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -52,9 +52,14 @@
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_compare_vpid(orte_vpid_t *value1,
</span><br>
<span class="quotelev2">&gt;&gt;                         orte_vpid_t *value2,
</span><br>
<span class="quotelev2">&gt;&gt;                         opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_compare_epoch(orte_epoch_t *value1,
</span><br>
<span class="quotelev2">&gt;&gt;                          orte_epoch_t *value2,
</span><br>
<span class="quotelev2">&gt;&gt;                          opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_EPOCH_CMP(n,m) ( (m) - (n) )
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_EPOCH_CMP(n,m) ( 0 )
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_compare_job(orte_job_t *value1, orte_job_t *value2, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_compare_node(orte_node_t *value1, orte_node_t *value2, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -86,7 +91,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_copy_name(orte_process_name_t **dest, orte_process_name_t *src, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_copy_jobid(orte_jobid_t **dest, orte_jobid_t *src, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_copy_vpid(orte_vpid_t **dest, orte_vpid_t *src, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_copy_epoch(orte_epoch_t **dest, orte_epoch_t *src, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_copy_job(orte_job_t **dest, orte_job_t *src, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_copy_node(orte_node_t **dest, orte_node_t *src, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -116,8 +123,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;                       int32_t num_vals, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_pack_vpid(opal_buffer_t *buffer, const void *src,
</span><br>
<span class="quotelev2">&gt;&gt;                      int32_t num_vals, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_pack_epoch(opal_buffer_t *buffer, const void *src,
</span><br>
<span class="quotelev2">&gt;&gt;                      int32_t num_vals, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_pack_job(opal_buffer_t *buffer, const void *src,
</span><br>
<span class="quotelev2">&gt;&gt;                     int32_t num_vals, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -185,8 +194,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;                         int32_t *num_vals, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_unpack_vpid(opal_buffer_t *buffer, void *dest,
</span><br>
<span class="quotelev2">&gt;&gt;                        int32_t *num_vals, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_unpack_epoch(opal_buffer_t *buffer, void *dest,
</span><br>
<span class="quotelev2">&gt;&gt;                        int32_t *num_vals, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; int orte_dt_unpack_job(opal_buffer_t *buffer, void *dest,
</span><br>
<span class="quotelev2">&gt;&gt;                       int32_t *num_vals, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -54,7 +54,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_process_name_t* proc;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_jobid_t *jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_vpid_t *vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    orte_epoch_t *epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    num = *num_vals;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -92,6 +94,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        return rc;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    /* collect all the epochs in a contiguous array */
</span><br>
<span class="quotelev2">&gt;&gt;    epoch= (orte_epoch_t*)malloc(num * sizeof(orte_epoch_t));
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == epoch) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -109,18 +112,21 @@
</span><br>
<span class="quotelev2">&gt;&gt;        free(jobid);
</span><br>
<span class="quotelev2">&gt;&gt;        return rc;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* build the names from the jobid/vpid/epoch arrays */
</span><br>
<span class="quotelev2">&gt;&gt;    proc = (orte_process_name_t*)dest;
</span><br>
<span class="quotelev2">&gt;&gt;    for (i=0; i &lt; num; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;jobid = jobid[i];
</span><br>
<span class="quotelev2">&gt;&gt;        proc-&gt;vpid = vpid[i];
</span><br>
<span class="quotelev2">&gt;&gt; -        proc-&gt;epoch = epoch[i];
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc-&gt;epoch,epoch[i]);
</span><br>
<span class="quotelev2">&gt;&gt;        proc++;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* cleanup */
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    free(epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;    free(vpid);
</span><br>
<span class="quotelev2">&gt;&gt;    free(jobid);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -159,6 +165,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * EPOCH 
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -174,6 +181,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/orte_data_server.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/orte_data_server.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/orte_data_server.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -220,7 +220,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            data-&gt;port = port_name;
</span><br>
<span class="quotelev2">&gt;&gt;            data-&gt;owner.jobid = sender-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;            data-&gt;owner.vpid = sender-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -            data-&gt;owner.epoch = sender-&gt;epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_EPOCH_SET(data-&gt;owner.epoch,sender-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            /* store the data */
</span><br>
<span class="quotelev2">&gt;&gt;            data-&gt;index = opal_pointer_array_add(orte_data_server_store, data);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/orte_globals.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/orte_globals.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -277,6 +277,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        return rc;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    tmp = ORTE_EPOCH;
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = opal_dss.register_type(orte_dt_pack_epoch,
</span><br>
<span class="quotelev2">&gt;&gt;                                                     orte_dt_unpack_epoch,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -290,6 +291,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;        return rc;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if !ORTE_DISABLE_FULL_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt;    tmp = ORTE_JOB;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -933,7 +935,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    proc-&gt;beat = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;proc-&gt;stats, opal_ring_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;    opal_ring_buffer_init(&amp;proc-&gt;stats, orte_stat_history_size);
</span><br>
<span class="quotelev2">&gt;&gt; -    proc-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev2">&gt;&gt;    proc-&gt;ckpt_state = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    proc-&gt;ckpt_snapshot_ref = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/orte_init.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/orte_init.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/orte_init.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -57,8 +57,17 @@
</span><br>
<span class="quotelev2">&gt;&gt; char *orte_prohibited_session_dirs = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; bool orte_create_session_dirs = true;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +orte_process_name_t orte_name_wildcard = {ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD};
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_name_t orte_name_wildcard = {ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD};
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +orte_process_name_t orte_name_invalid = {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_INVALID}; 
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_name_t orte_name_invalid = {ORTE_JOBID_INVALID, ORTE_VPID_INVALID}; 
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_CC_USE_PRAGMA_IDENT
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/runtime/orte_wait.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/runtime/orte_wait.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/runtime/orte_wait.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -204,7 +204,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        mev = OBJ_NEW(orte_message_event_t);                    \
</span><br>
<span class="quotelev2">&gt;&gt;        mev-&gt;sender.jobid = (sndr)-&gt;jobid;                      \
</span><br>
<span class="quotelev2">&gt;&gt;        mev-&gt;sender.vpid = (sndr)-&gt;vpid;                        \
</span><br>
<span class="quotelev2">&gt;&gt; -        mev-&gt;sender.epoch = (sndr)-&gt;epoch;                      \
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(mev-&gt;sender.epoch,(sndr)-&gt;epoch);        \
</span><br>
<span class="quotelev2">&gt;&gt;        opal_dss.copy_payload(mev-&gt;buffer, (buf));              \
</span><br>
<span class="quotelev2">&gt;&gt;        mev-&gt;tag = (tg);                                        \
</span><br>
<span class="quotelev2">&gt;&gt;        mev-&gt;file = strdup((buf)-&gt;parent.cls_init_file_name);   \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -228,7 +228,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        mev = OBJ_NEW(orte_message_event_t);                    \
</span><br>
<span class="quotelev2">&gt;&gt;        mev-&gt;sender.jobid = (sndr)-&gt;jobid;                      \
</span><br>
<span class="quotelev2">&gt;&gt;        mev-&gt;sender.vpid = (sndr)-&gt;vpid;                        \
</span><br>
<span class="quotelev2">&gt;&gt; -        mev-&gt;sender.epoch = (sndr)-&gt;epoch;                      \
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(mev-&gt;sender.epoch,(sndr)-&gt;epoch);        \
</span><br>
<span class="quotelev2">&gt;&gt;        opal_dss.copy_payload(mev-&gt;buffer, (buf));              \
</span><br>
<span class="quotelev2">&gt;&gt;        mev-&gt;tag = (tg);                                        \
</span><br>
<span class="quotelev2">&gt;&gt;        opal_event_evtimer_set(opal_event_base,                 \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -258,7 +258,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        tmp = OBJ_NEW(orte_notify_event_t);                     \
</span><br>
<span class="quotelev2">&gt;&gt;        tmp-&gt;proc.jobid = (data)-&gt;jobid;                        \
</span><br>
<span class="quotelev2">&gt;&gt;        tmp-&gt;proc.vpid = (data)-&gt;vpid;                          \
</span><br>
<span class="quotelev2">&gt;&gt; -        tmp-&gt;proc.epoch = (data)-&gt;epoch;                        \
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(tmp-&gt;proc.epoch,(data)-&gt;epoch);          \
</span><br>
<span class="quotelev2">&gt;&gt;        opal_event.evtimer_set(opal_event_base,                 \
</span><br>
<span class="quotelev2">&gt;&gt;                               tmp-&gt;ev, (cbfunc), tmp);         \
</span><br>
<span class="quotelev2">&gt;&gt;        now.tv_sec = 0;                                         \
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/test/system/oob_stress.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/test/system/oob_stress.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/test/system/oob_stress.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -74,8 +74,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    for (j=1; j &lt; count+1; j++) {
</span><br>
<span class="quotelev2">&gt;&gt;        peer.vpid = (ORTE_PROC_MY_NAME-&gt;vpid + j) % orte_process_info.num_procs;
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* rank0 starts ring */
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_PROC_MY_NAME-&gt;vpid == 0) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/test/system/orte_ring.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/test/system/orte_ring.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/test/system/orte_ring.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -41,16 +41,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if( right_peer_orte_name.vpid &gt;= num_peers ) {
</span><br>
<span class="quotelev2">&gt;&gt;        right_peer_orte_name.vpid = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; -    right_peer_orte_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    right_peer_orte_name.epoch = orte_ess.proc_get_epoch(&amp;right_peer_orte_name);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(right_peer_orte_name.epoch,orte_ess.proc_get_epoch(&amp;right_peer_orte_name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    left_peer_orte_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    left_peer_orte_name.vpid   = ORTE_PROC_MY_NAME-&gt;vpid - 1;
</span><br>
<span class="quotelev2">&gt;&gt;    if( ORTE_PROC_MY_NAME-&gt;vpid == 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt;        left_peer_orte_name.vpid = num_peers - 1;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; -    left_peer_orte_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    left_peer_orte_name.epoch = orte_ess.proc_get_epoch(&amp;left_peer_orte_name);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(left_peer_orte_name.epoch,orte_ess.proc_get_epoch(&amp;left_peer_orte_name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;My name is: %s -- PID %d\tMy Left Peer is %s\tMy Right Peer is %s\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;           ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), getpid(),
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/test/system/orte_spawn.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/test/system/orte_spawn.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/test/system/orte_spawn.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -74,8 +74,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;    for (i=0; i &lt; app-&gt;num_procs; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;        name.vpid = i;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -        name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -        name.epoch = orte_ess.proc_get_epoch(&amp;name);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(name.epoch,orte_ess.proc_get_epoch(&amp;name));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;        fprintf(stderr, &quot;Parent: sending message to child %s\n&quot;, ORTE_NAME_PRINT(&amp;name));
</span><br>
<span class="quotelev2">&gt;&gt;        if (0 &gt; (rc = orte_rml.send(&amp;name, &amp;msg, 1, MY_TAG, 0))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/tools/orte-ps/orte-ps.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/tools/orte-ps/orte-ps.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/tools/orte-ps/orte-ps.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -869,8 +869,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* query the HNP for info on the procs in this job */
</span><br>
<span class="quotelev2">&gt;&gt; -        if (ORTE_SUCCESS != (ret = orte_util_comm_query_proc_info(&amp;(hnpinfo-&gt;hnp-&gt;name), job-&gt;jobid,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                                  ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD, &amp;cnt, &amp;procs))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (ORTE_SUCCESS != (ret = orte_util_comm_query_proc_info(&amp;(hnpinfo-&gt;hnp-&gt;name), 
</span><br>
<span class="quotelev2">&gt;&gt; +                                                                  job-&gt;jobid,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                                  ORTE_VPID_WILDCARD, 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +                                                                  ORTE_EPOCH_WILDCARD, 
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +                                                                  &amp;cnt, 
</span><br>
<span class="quotelev2">&gt;&gt; +                                                                  &amp;procs))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        job-&gt;procs-&gt;addr = (void**)procs;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/tools/orte-top/orte-top.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/tools/orte-top/orte-top.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/tools/orte-top/orte-top.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -471,7 +471,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == ranks) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* take all ranks */
</span><br>
<span class="quotelev2">&gt;&gt;        proc.vpid = ORTE_VPID_WILDCARD;
</span><br>
<span class="quotelev2">&gt;&gt; -        proc.epoch = ORTE_EPOCH_WILDCARD;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc.epoch,ORTE_EPOCH_WILDCARD);
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_SUCCESS != (ret = opal_dss.pack(&amp;cmdbuf, &amp;proc, 1, ORTE_NAME))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;            goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/comm/comm.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/comm/comm.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/comm/comm.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -433,8 +433,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; int orte_util_comm_query_proc_info(const orte_process_name_t *hnp, orte_jobid_t job, orte_vpid_t vpid,
</span><br>
<span class="quotelev2">&gt;&gt;                                   orte_epoch_t epoch, int *num_procs, orte_proc_t ***proc_info_array)
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +int orte_util_comm_query_proc_info(const orte_process_name_t *hnp, orte_jobid_t job, orte_vpid_t vpid,
</span><br>
<span class="quotelev2">&gt;&gt; +                                   int *num_procs, orte_proc_t ***proc_info_array)
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int ret;
</span><br>
<span class="quotelev2">&gt;&gt;    int32_t cnt, cnt_procs, n;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -463,11 +468,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_RELEASE(cmd);
</span><br>
<span class="quotelev2">&gt;&gt;        return ret;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (ret = opal_dss.pack(cmd, &amp;epoch, 1, ORTE_EPOCH))) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_RELEASE(cmd);
</span><br>
<span class="quotelev2">&gt;&gt;        return ret;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;    /* define a max time to wait for send to complete */
</span><br>
<span class="quotelev2">&gt;&gt;    timer_fired = false;
</span><br>
<span class="quotelev2">&gt;&gt;    error_exit = ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/comm/comm.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/comm/comm.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/comm/comm.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -52,7 +52,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                                 int *num_nodes, orte_node_t ***node_info_array);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_comm_query_proc_info(const orte_process_name_t *hnp, orte_jobid_t job, orte_vpid_t vpid,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                 orte_epoch_t epoch, int *num_procs, orte_proc_t ***proc_info_array);
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +                                                 orte_epoch_t epoch, 
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +                                                 int *num_procs, orte_proc_t ***proc_info_array);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_comm_spawn_job(const orte_process_name_t *hnp, orte_job_t *jdata);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/hnp_contact.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/hnp_contact.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/hnp_contact.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -55,7 +55,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;name.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    ptr-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(ptr-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    ptr-&gt;rml_uri = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; static void orte_hnp_contact_destruct(orte_hnp_contact_t *ptr)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/name_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/name_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/name_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -46,7 +46,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    list-&gt;name.jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    list-&gt;name.vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    list-&gt;name.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(list-&gt;name.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* destructor - used to free any resources held by instance */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -116,7 +116,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; char* orte_util_print_name_args(const orte_process_name_t *name)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    orte_print_args_buffers_t *ptr;
</span><br>
<span class="quotelev2">&gt;&gt; -    char *job, *vpid, *epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *job, *vpid; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +    char *epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* protect against NULL names */
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == name) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -141,7 +144,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev2">&gt;&gt;    vpid = orte_util_print_vpids(name-&gt;vpid);
</span><br>
<span class="quotelev2">&gt;&gt; -    epoch = orte_util_print_epoch(name-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(epoch,orte_util_print_epoch(name-&gt;epoch));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* get the next buffer */
</span><br>
<span class="quotelev2">&gt;&gt;    ptr = get_print_name_buffer();
</span><br>
<span class="quotelev2">&gt;&gt; @@ -156,9 +159,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;        ptr-&gt;cntr = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev2">&gt;&gt;             ORTE_PRINT_NAME_ARGS_MAX_SIZE, 
</span><br>
<span class="quotelev2">&gt;&gt;             &quot;[%s,%s,%s]&quot;, job, vpid, epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +    snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev2">&gt;&gt; +             ORTE_PRINT_NAME_ARGS_MAX_SIZE, 
</span><br>
<span class="quotelev2">&gt;&gt; +             &quot;[%s,%s]&quot;, job, vpid);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -282,6 +291,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; char* orte_util_print_epoch(const orte_epoch_t epoch)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    orte_print_args_buffers_t *ptr;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -309,6 +319,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -403,6 +414,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; int orte_util_convert_epoch_to_string(char **epoch_string, const orte_epoch_t epoch)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    /* check for wildcard value - handle appropriately */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -425,7 +437,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; int orte_util_convert_string_to_epoch(orte_epoch_t *epoch, const char* epoch_string)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == epoch_string) {  /* got an error */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -450,6 +461,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int orte_util_convert_string_to_process_name(orte_process_name_t *name,
</span><br>
<span class="quotelev2">&gt;&gt;                                             const char* name_string)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -457,13 +469,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;    char *temp, *token;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_jobid_t job;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_vpid_t vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    orte_epoch_t epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;    int return_code=ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; -    
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    /* set default */
</span><br>
<span class="quotelev2">&gt;&gt;    name-&gt;jobid = ORTE_JOBID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;    name-&gt;vpid = ORTE_VPID_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; -    name-&gt;epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(name-&gt;epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* check for NULL string - error */
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == name_string) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -510,6 +524,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        vpid = strtoul(token, NULL, 10);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    token = strtok(NULL, ORTE_SCHEMA_DELIMITER_STRING);  /** get next field -&gt; epoch*/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* check for error */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -528,10 +543,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;        epoch = strtoul(token, NULL, 10);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    name-&gt;jobid = job;
</span><br>
<span class="quotelev2">&gt;&gt;    name-&gt;vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    name-&gt;epoch = epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(name-&gt;epoch,epoch);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    free(temp);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -568,6 +584,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        asprintf(&amp;tmp2, &quot;%s%c%lu&quot;, tmp, ORTE_SCHEMA_DELIMITER_CHAR, (unsigned long)name-&gt;vpid);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_EPOCH_WILDCARD == name-&gt;epoch) {
</span><br>
<span class="quotelev2">&gt;&gt;        asprintf(name_string, &quot;%s%c%s&quot;, tmp2, ORTE_SCHEMA_DELIMITER_CHAR, ORTE_SCHEMA_WILDCARD_STRING);
</span><br>
<span class="quotelev2">&gt;&gt;    } else if (ORTE_EPOCH_INVALID == name-&gt;epoch) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -575,6 +592,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;        asprintf(name_string, &quot;%s%c%lu&quot;, tmp2, ORTE_SCHEMA_DELIMITER_CHAR, (unsigned long)name-&gt;epoch);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +    asprintf(name_string, &quot;%s&quot;, tmp2);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    free(tmp);
</span><br>
<span class="quotelev2">&gt;&gt;    free(tmp2);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -585,8 +606,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; /****    CREATE PROCESS NAME    ****/
</span><br>
<span class="quotelev2">&gt;&gt; int orte_util_create_process_name(orte_process_name_t **name,
</span><br>
<span class="quotelev2">&gt;&gt;                                  orte_jobid_t job,
</span><br>
<span class="quotelev2">&gt;&gt; -                                  orte_vpid_t vpid,
</span><br>
<span class="quotelev2">&gt;&gt; -                                  orte_epoch_t epoch)
</span><br>
<span class="quotelev2">&gt;&gt; +                                  orte_vpid_t vpid
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +                                  ,orte_epoch_t epoch
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +                                  )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    *name = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -598,7 +622,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    (*name)-&gt;jobid = job;
</span><br>
<span class="quotelev2">&gt;&gt;    (*name)-&gt;vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -    (*name)-&gt;epoch = epoch;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET((*name)-&gt;epoch,epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -655,6 +680,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt;    /* Get here if jobid's and vpid's are equal, or not being checked.
</span><br>
<span class="quotelev2">&gt;&gt;     * Now check epoch.
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -666,6 +692,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            return OPAL_VALUE1_GREATER;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* only way to get here is if all fields are being checked and are equal,
</span><br>
<span class="quotelev2">&gt;&gt;    * or jobid not checked, but vpid equal,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/name_fns.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/name_fns.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/name_fns.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -61,9 +61,13 @@
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_VPID_PRINT(n) \
</span><br>
<span class="quotelev2">&gt;&gt;    orte_util_print_vpids(n)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC char* orte_util_print_epoch(const orte_epoch_t epoch);
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_EPOCH_PRINT(n) \
</span><br>
<span class="quotelev2">&gt;&gt;    orte_util_print_epoch(n)
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_EPOCH_PRINT(n)
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC char* orte_util_print_job_family(const orte_jobid_t job);
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_JOB_FAMILY_PRINT(n) \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -104,6 +108,24 @@
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_JOBID_IS_DAEMON(n)  \
</span><br>
<span class="quotelev2">&gt;&gt;    !((n) &amp; 0x0000ffff)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +/* Macro for getting the epoch out of the process name */
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_EPOCH_GET(n) \
</span><br>
<span class="quotelev2">&gt;&gt; +    ((n)-&gt;epoch)
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_EPOCH_GET(n)
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/* Macro for setting the epoch in the process name */
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_EPOCH_SET(n,m) \
</span><br>
<span class="quotelev2">&gt;&gt; +    ( (n) = (m) )
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_EPOCH_SET(n,m) \
</span><br>
<span class="quotelev2">&gt;&gt; +    do {                    \
</span><br>
<span class="quotelev2">&gt;&gt; +    } while(0);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; /* List of names for general use */
</span><br>
<span class="quotelev2">&gt;&gt; struct orte_namelist_t {
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_item_t item;      /**&lt; Allows this item to be placed on a list */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -117,16 +139,24 @@
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_convert_string_to_jobid(orte_jobid_t *jobid, const char* jobidstring);
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_convert_vpid_to_string(char **vpid_string, const orte_vpid_t vpid);
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_convert_string_to_vpid(orte_vpid_t *vpid, const char* vpidstring);
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_convert_epoch_to_string(char **epoch_string, const orte_epoch_t epoch);
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_convert_string_to_epoch(orte_vpid_t *epoch, const char* epochstring);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_convert_string_to_process_name(orte_process_name_t *name,
</span><br>
<span class="quotelev2">&gt;&gt;                                             const char* name_string);
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_convert_process_name_to_string(char** name_string,
</span><br>
<span class="quotelev2">&gt;&gt;                                             const orte_process_name_t *name);
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_create_process_name(orte_process_name_t **name,
</span><br>
<span class="quotelev2">&gt;&gt;                                  orte_jobid_t job,
</span><br>
<span class="quotelev2">&gt;&gt;                                  orte_vpid_t vpid,
</span><br>
<span class="quotelev2">&gt;&gt;                                  orte_epoch_t epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC int orte_util_create_process_name(orte_process_name_t **name,
</span><br>
<span class="quotelev2">&gt;&gt; +                                  orte_jobid_t job,
</span><br>
<span class="quotelev2">&gt;&gt; +                                  orte_vpid_t vpid);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_compare_name_fields(orte_ns_cmp_bitmask_t fields,
</span><br>
<span class="quotelev2">&gt;&gt;                                  const orte_process_name_t* name1,
</span><br>
<span class="quotelev2">&gt;&gt;                                  const orte_process_name_t* name2);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/nidmap.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/nidmap.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/nidmap.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -249,7 +249,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;         */
</span><br>
<span class="quotelev2">&gt;&gt;        /* construct the URI */
</span><br>
<span class="quotelev2">&gt;&gt;        proc.vpid = node-&gt;daemon;
</span><br>
<span class="quotelev2">&gt;&gt; -        proc.epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_EPOCH_SET(proc.epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        orte_util_convert_process_name_to_string(&amp;proc_name, &amp;proc);
</span><br>
<span class="quotelev2">&gt;&gt;        asprintf(&amp;uri, &quot;%s;tcp://%s:%d&quot;, proc_name, addr, (int)orte_process_info.my_port);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1001,6 +1001,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; /* Look up the current epoch value that we have stored locally.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * Note that this will not ping the HNP to get the most up to date epoch stored
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1023,7 +1024,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;    /*print_orte_job_data();*/
</span><br>
<span class="quotelev2">&gt;&gt;    return e;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; bool orte_util_proc_is_running(orte_process_name_t *proc) {
</span><br>
<span class="quotelev2">&gt;&gt;    int i;
</span><br>
<span class="quotelev2">&gt;&gt;    unsigned int j;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1078,7 +1081,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return ORTE_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * This function performs both the get and set operations on the epoch for a
</span><br>
<span class="quotelev2">&gt;&gt; * sepcific process name. If the epoch passed into the function is
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1091,6 +1096,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_job_t *jdata;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_proc_t *pdata;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    if (ORTE_JOBID_INVALID == proc-&gt;jobid || 
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_VPID_INVALID  == proc-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; +        return ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    /* Sanity check just to make sure we don't overwrite our existing
</span><br>
<span class="quotelev2">&gt;&gt;     * orte_job_data.
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1165,4 +1175,5 @@
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/nidmap.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/nidmap.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/nidmap.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -48,11 +48,19 @@
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC orte_pmap_t* orte_util_lookup_pmap(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC orte_nid_t* orte_util_lookup_nid(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC orte_epoch_t orte_util_lookup_epoch(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC orte_epoch_t orte_util_set_epoch(orte_process_name_t *proc, orte_epoch_t epoch);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_set_proc_state(orte_process_name_t *proc, orte_proc_state_t state);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; +#define PROC_IS_RUNNING(n) orte_util_proc_is_running(n)
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC bool orte_util_proc_is_running(orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define PROC_IS_RUNNING(n) ( true )
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_encode_nodemap(opal_byte_object_t *boptr);
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_util_decode_nodemap(opal_byte_object_t *boptr);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -72,5 +80,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; END_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* Local functions */
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; orte_epoch_t get_epoch_from_orte_job_data(orte_process_name_t *proc, orte_epoch_t epoch);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/proc_info.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/proc_info.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/proc_info.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -36,13 +36,19 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_NAME_INVALID {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN}
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_NAME_INVALID {ORTE_JOBID_INVALID, ORTE_VPID_INVALID}
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC orte_proc_info_t orte_process_info = {
</span><br>
<span class="quotelev2">&gt;&gt; -    /*  .my_name =              */   {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN},
</span><br>
<span class="quotelev2">&gt;&gt; -    /*  .my_daemon =            */   {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN},
</span><br>
<span class="quotelev2">&gt;&gt; +    /*  .my_name =              */   ORTE_NAME_INVALID,
</span><br>
<span class="quotelev2">&gt;&gt; +    /*  .my_daemon =            */   ORTE_NAME_INVALID,
</span><br>
<span class="quotelev2">&gt;&gt;    /*  .my_daemon_uri =        */   NULL,
</span><br>
<span class="quotelev2">&gt;&gt; -    /*  .my_hnp =               */   {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN},
</span><br>
<span class="quotelev2">&gt;&gt; +    /*  .my_hnp =               */   ORTE_NAME_INVALID,
</span><br>
<span class="quotelev2">&gt;&gt;    /*  .my_hnp_uri =           */   NULL,
</span><br>
<span class="quotelev2">&gt;&gt; -    /*  .my_parent =            */   {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN},
</span><br>
<span class="quotelev2">&gt;&gt; +    /*  .my_parent =            */   ORTE_NAME_INVALID,
</span><br>
<span class="quotelev2">&gt;&gt;    /*  .hnp_pid =              */   0,
</span><br>
<span class="quotelev2">&gt;&gt;    /*  .app_num =              */   0,
</span><br>
<span class="quotelev2">&gt;&gt;    /*  .num_procs =            */   1,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/test/util/orte_session_dir.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/test/util/orte_session_dir.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/test/util/orte_session_dir.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -57,7 +57,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    orte_process_info.my_name-&gt;cellid = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_process_info.my_name-&gt;jobid = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_process_info.my_name-&gt;vpid = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_process_info.my_name-&gt;epoch = ORTE_EPOCH_MIN;
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_EPOCH_SET(orte_process_info.my_name-&gt;epoch,ORTE_EPOCH_MIN);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    test_init(&quot;orte_session_dir_t&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    test_out = fopen( &quot;test_session_dir_out&quot;, &quot;w+&quot; );
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="9701.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Previous message:</strong> <a href="9699.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>In reply to:</strong> <a href="9699.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9702.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Reply:</strong> <a href="9702.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
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
