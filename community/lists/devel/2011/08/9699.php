<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 26 18:18:12 2011" -->
<!-- isoreceived="20110826221812" -->
<!-- sent="Fri, 26 Aug 2011 18:18:06 -0400" -->
<!-- isosent="20110826221806" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093" -->
<!-- id="F2E0F11D-8384-4C1C-93CC-BAF942396962_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201108262216.p7QMGKN1002536_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-26 18:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9700.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Previous message:</strong> <a href="9698.php">Josh Hursey: "[OMPI devel] Open MPI MTT Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9700.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Reply:</strong> <a href="9700.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Reply:</strong> <a href="9701.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Reply:</strong> <a href="9729.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The epoch and resilient rote code is now macro'd away. To enable use
<br>
<p>--enable-resilient-orte
<br>
<p>which defines:
<br>
<p>ORTE_ENABLE_EPOCH
<br>
ORTE_RESIL_ORTE
<br>
<p><pre>
--
Wesley
On Aug 26, 2011, at 6:16 PM, wbland_at_[hidden] wrote:
&gt; Author: wbland
&gt; Date: 2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; New Revision: 25093
&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25093">https://svn.open-mpi.org/trac/ompi/changeset/25093</a>
&gt; 
&gt; Log:
&gt; By popular demand the epoch code is now disabled by default. 
&gt; 
&gt; To enable the epochs and the resilient orte code, use the configure flag:
&gt; 
&gt; --enable-resilient-orte
&gt; 
&gt; This will define both:
&gt; 
&gt; ORTE_ENABLE_EPOCH
&gt; ORTE_RESIL_ORTE
&gt; 
&gt; Text files modified: 
&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c  |    12 ++++                                    
&gt;   trunk/ompi/mca/coll/sm2/coll_sm2_module.c                    |     3                                         
&gt;   trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c                   |    49 ++++++++----------                      
&gt;   trunk/ompi/mca/dpm/orte/dpm_orte.c                           |     2                                         
&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_failover.c                    |    10 +--                                     
&gt;   trunk/ompi/mca/pml/bfo/pml_bfo_hdr.h                         |     6 --                                      
&gt;   trunk/ompi/proc/proc.c                                       |     6 +-                                      
&gt;   trunk/opal/config/opal_configure_options.m4                  |     8 +++                                     
&gt;   trunk/orte/include/orte/types.h                              |    24 +++++++++                               
&gt;   trunk/orte/mca/db/daemon/db_daemon.c                         |     2                                         
&gt;   trunk/orte/mca/errmgr/app/errmgr_app.c                       |    19 ++++++-                                 
&gt;   trunk/orte/mca/errmgr/base/errmgr_base_fns.c                 |    12 ++--                                    
&gt;   trunk/orte/mca/errmgr/base/errmgr_base_tool.c                |     6 +-                                      
&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp.c                       |    99 +++++++++++++++++++++++++++------------ 
&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c                 |     6 +-                                      
&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c                 |     6 +-                                      
&gt;   trunk/orte/mca/errmgr/orted/errmgr_orted.c                   |    71 +++++++++++++++++++++-------            
&gt;   trunk/orte/mca/ess/alps/ess_alps_module.c                    |     4                                         
&gt;   trunk/orte/mca/ess/base/base.h                               |     4 +                                       
&gt;   trunk/orte/mca/ess/base/ess_base_select.c                    |    14 ++---                                   
&gt;   trunk/orte/mca/ess/env/ess_env_module.c                      |     3                                         
&gt;   trunk/orte/mca/ess/ess.h                                     |     4 +                                       
&gt;   trunk/orte/mca/ess/generic/ess_generic_module.c              |     6 +-                                      
&gt;   trunk/orte/mca/ess/hnp/ess_hnp_module.c                      |     2                                         
&gt;   trunk/orte/mca/ess/lsf/ess_lsf_module.c                      |     3                                         
&gt;   trunk/orte/mca/ess/singleton/ess_singleton_module.c          |     2                                         
&gt;   trunk/orte/mca/ess/slave/ess_slave_module.c                  |     3                                         
&gt;   trunk/orte/mca/ess/slurm/ess_slurm_module.c                  |     3                                         
&gt;   trunk/orte/mca/ess/slurmd/ess_slurmd_module.c                |     4                                         
&gt;   trunk/orte/mca/ess/tm/ess_tm_module.c                        |     2                                         
&gt;   trunk/orte/mca/filem/rsh/filem_rsh_module.c                  |     6 +-                                      
&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c              |    21 ++-----                                 
&gt;   trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c            |     8 +-                                      
&gt;   trunk/orte/mca/iof/base/base.h                               |     8 +-                                      
&gt;   trunk/orte/mca/iof/base/iof_base_open.c                      |     2                                         
&gt;   trunk/orte/mca/iof/hnp/iof_hnp.c                             |     7 +-                                      
&gt;   trunk/orte/mca/iof/hnp/iof_hnp_receive.c                     |     6 +-                                      
&gt;   trunk/orte/mca/iof/orted/iof_orted.c                         |     2                                         
&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c             |     7 +-                                      
&gt;   trunk/orte/mca/odls/base/odls_base_open.c                    |     5 -                                       
&gt;   trunk/orte/mca/odls/base/odls_base_state.c                   |     6 +-                                      
&gt;   trunk/orte/mca/oob/tcp/oob_tcp_msg.c                         |     2                                         
&gt;   trunk/orte/mca/oob/tcp/oob_tcp_peer.c                        |     5 ++                                      
&gt;   trunk/orte/mca/plm/base/plm_base_jobid.c                     |     4                                         
&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c            |     3                                         
&gt;   trunk/orte/mca/plm/base/plm_base_orted_cmds.c                |     8 +--                                     
&gt;   trunk/orte/mca/plm/base/plm_base_receive.c                   |     7 ++                                      
&gt;   trunk/orte/mca/plm/base/plm_base_rsh_support.c               |     4 +                                       
&gt;   trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c           |    23 +++++----                               
&gt;   trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c             |     3                                         
&gt;   trunk/orte/mca/rmaps/seq/rmaps_seq.c                         |     3                                         
&gt;   trunk/orte/mca/rmcast/base/rmcast_base_open.c                |     6 +-                                      
&gt;   trunk/orte/mca/rmcast/tcp/rmcast_tcp.c                       |     4                                         
&gt;   trunk/orte/mca/rmcast/udp/rmcast_udp.c                       |     4                                         
&gt;   trunk/orte/mca/rml/base/rml_base_components.c                |     5 +                                       
&gt;   trunk/orte/mca/rml/rml_types.h                               |     6 +                                       
&gt;   trunk/orte/mca/routed/base/routed_base_components.c          |     6 +-                                      
&gt;   trunk/orte/mca/routed/base/routed_base_register_sync.c       |     4 +                                       
&gt;   trunk/orte/mca/routed/binomial/routed_binomial.c             |    54 ++++++++++++---------                   
&gt;   trunk/orte/mca/routed/cm/routed_cm.c                         |    19 +++----                                 
&gt;   trunk/orte/mca/routed/direct/routed_direct.c                 |     3                                         
&gt;   trunk/orte/mca/routed/linear/routed_linear.c                 |    17 +++---                                  
&gt;   trunk/orte/mca/routed/radix/routed_radix.c                   |    22 ++++----                                
&gt;   trunk/orte/mca/routed/slave/routed_slave.c                   |     6 +-                                      
&gt;   trunk/orte/mca/sensor/file/sensor_file.c                     |     2                                         
&gt;   trunk/orte/mca/snapc/base/snapc_base_fns.c                   |     4                                         
&gt;   trunk/orte/mca/snapc/full/snapc_full_global.c                |    12 ++--                                    
&gt;   trunk/orte/mca/snapc/full/snapc_full_local.c                 |     6 +-                                      
&gt;   trunk/orte/mca/snapc/full/snapc_full_module.c                |     4                                         
&gt;   trunk/orte/mca/sstore/base/sstore_base_fns.c                 |     6 +-                                      
&gt;   trunk/orte/mca/sstore/central/sstore_central_global.c        |     3                                         
&gt;   trunk/orte/mca/sstore/central/sstore_central_local.c         |     6 +-                                      
&gt;   trunk/orte/mca/sstore/stage/sstore_stage_global.c            |     7 +-                                      
&gt;   trunk/orte/mca/sstore/stage/sstore_stage_local.c             |    12 ++--                                    
&gt;   trunk/orte/orted/orted_comm.c                                |    20 ++++----                                
&gt;   trunk/orte/orted/orted_main.c                                |     7 +-                                      
&gt;   trunk/orte/runtime/data_type_support/orte_dt_compare_fns.c   |     4 +                                       
&gt;   trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c      |     4 +                                       
&gt;   trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c   |     6 ++                                      
&gt;   trunk/orte/runtime/data_type_support/orte_dt_print_fns.c     |    19 +++++++                                 
&gt;   trunk/orte/runtime/data_type_support/orte_dt_size_fns.c      |     2                                         
&gt;   trunk/orte/runtime/data_type_support/orte_dt_support.h       |    11 ++++                                    
&gt;   trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c |    10 +++                                     
&gt;   trunk/orte/runtime/orte_data_server.c                        |     2                                         
&gt;   trunk/orte/runtime/orte_globals.c                            |     4 +                                       
&gt;   trunk/orte/runtime/orte_init.c                               |     9 +++                                     
&gt;   trunk/orte/runtime/orte_wait.h                               |     6 +-                                      
&gt;   trunk/orte/test/system/oob_stress.c                          |     3                                         
&gt;   trunk/orte/test/system/orte_ring.c                           |     6 -                                       
&gt;   trunk/orte/test/system/orte_spawn.c                          |     4                                         
&gt;   trunk/orte/tools/orte-ps/orte-ps.c                           |    10 +++                                     
&gt;   trunk/orte/tools/orte-top/orte-top.c                         |     2                                         
&gt;   trunk/orte/util/comm/comm.c                                  |     7 ++                                      
&gt;   trunk/orte/util/comm/comm.h                                  |     5 +                                       
&gt;   trunk/orte/util/hnp_contact.c                                |     3                                         
&gt;   trunk/orte/util/name_fns.c                                   |    47 ++++++++++++++----                      
&gt;   trunk/orte/util/name_fns.h                                   |    30 ++++++++++++                            
&gt;   trunk/orte/util/nidmap.c                                     |    13 ++++                                    
&gt;   trunk/orte/util/nidmap.h                                     |    11 ++++                                    
&gt;   trunk/orte/util/proc_info.c                                  |    14 ++++-                                   
&gt;   trunk/test/util/orte_session_dir.c                           |     2                                         
&gt;   101 files changed, 652 insertions(+), 362 deletions(-)
&gt; 
&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
&gt; ==============================================================================
&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(original)
&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -693,8 +693,16 @@
&gt;     bool found = false;
&gt; 
&gt;     BTL_VERBOSE((&quot;Searching for ep and proc with follow parameters:&quot;
&gt; -                &quot;jobid %d, vpid %d, epoch %d, sid %&quot; PRIx64 &quot;, lid %d&quot;,
&gt; -                process_name-&gt;jobid, process_name-&gt;vpid, process_name-&gt;epoch, subnet_id, lid));
&gt; +                &quot;jobid %d, vpid %d, &quot;
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +                &quot;epoch %d, &quot;
&gt; +#endif
&gt; +                &quot;sid %&quot; PRIx64 &quot;, lid %d&quot;,
&gt; +                process_name-&gt;jobid, process_name-&gt;vpid, 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +                process_name-&gt;epoch, 
&gt; +#endif
&gt; +                subnet_id, lid));
&gt;     /* find ibproc */
&gt;     OPAL_THREAD_LOCK(&amp;mca_btl_openib_component.ib_lock);
&gt;     for (ib_proc = (mca_btl_openib_proc_t*)
&gt; 
&gt; Modified: trunk/ompi/mca/coll/sm2/coll_sm2_module.c
&gt; ==============================================================================
&gt; --- trunk/ompi/mca/coll/sm2/coll_sm2_module.c	(original)
&gt; +++ trunk/ompi/mca/coll/sm2/coll_sm2_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -1208,7 +1208,8 @@
&gt;             peer = OBJ_NEW(orte_namelist_t);
&gt;             peer-&gt;name.jobid = comm-&gt;c_local_group-&gt;grp_proc_pointers[i]-&gt;proc_name.jobid;
&gt;             peer-&gt;name.vpid =  comm-&gt;c_local_group-&gt;grp_proc_pointers[i]-&gt;proc_name.vpid;
&gt; -            peer-&gt;name.epoch = comm-&gt;c_local_group-&gt;grp_proc_pointers[i]-&gt;proc_name.epoch;
&gt; +            ORTE_EPOCH_SET(peer-&gt;name.epoch,comm-&gt;c_local_group-&gt;grp_proc_pointers[i]-&gt;proc_name.epoch);
&gt; +
&gt;             opal_list_append(&amp;peers, &amp;peer-&gt;item);
&gt;         }
&gt;         /* prepare send data */
&gt; 
&gt; Modified: trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
&gt; ==============================================================================
&gt; --- trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c	(original)
&gt; +++ trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -702,7 +702,7 @@
&gt; void ompi_crcp_bkmrk_pml_peer_ref_construct(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref) {
&gt;     peer_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
&gt;     peer_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
&gt; -    peer_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(peer_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     OBJ_CONSTRUCT(&amp;peer_ref-&gt;send_list,       opal_list_t);
&gt;     OBJ_CONSTRUCT(&amp;peer_ref-&gt;isend_list,      opal_list_t);
&gt; @@ -730,7 +730,7 @@
&gt; 
&gt;     peer_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
&gt;     peer_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
&gt; -    peer_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(peer_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     while( NULL != (item = opal_list_remove_first(&amp;peer_ref-&gt;send_list)) ) {
&gt;         HOKE_TRAFFIC_MSG_REF_RETURN(item);
&gt; @@ -840,7 +840,7 @@
&gt; 
&gt;     msg_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
&gt;     msg_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
&gt; -    msg_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     msg_ref-&gt;matched        = INVALID_INT;
&gt;     msg_ref-&gt;done           = INVALID_INT;
&gt; @@ -868,7 +868,7 @@
&gt; 
&gt;     msg_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
&gt;     msg_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
&gt; -    msg_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     msg_ref-&gt;matched        = INVALID_INT;
&gt;     msg_ref-&gt;done           = INVALID_INT;
&gt; @@ -902,7 +902,7 @@
&gt; 
&gt;     msg_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
&gt;     msg_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
&gt; -    msg_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     msg_ref-&gt;done           = INVALID_INT;
&gt;     msg_ref-&gt;active         = INVALID_INT;
&gt; @@ -934,7 +934,7 @@
&gt; 
&gt;     msg_ref-&gt;proc_name.jobid  = ORTE_JOBID_INVALID;
&gt;     msg_ref-&gt;proc_name.vpid   = ORTE_VPID_INVALID;
&gt; -    msg_ref-&gt;proc_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     msg_ref-&gt;done           = INVALID_INT;
&gt;     msg_ref-&gt;active         = INVALID_INT;
&gt; @@ -954,7 +954,7 @@
&gt; 
&gt;     msg_ack_ref-&gt;peer.jobid  = ORTE_JOBID_INVALID;
&gt;     msg_ack_ref-&gt;peer.vpid   = ORTE_VPID_INVALID;
&gt; -    msg_ack_ref-&gt;peer.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(msg_ack_ref-&gt;peer.epoch,ORTE_EPOCH_MIN);
&gt; }
&gt; 
&gt; void ompi_crcp_bkmrk_pml_drain_message_ack_ref_destruct( ompi_crcp_bkmrk_pml_drain_message_ack_ref_t *msg_ack_ref) {
&gt; @@ -962,7 +962,7 @@
&gt; 
&gt;     msg_ack_ref-&gt;peer.jobid  = ORTE_JOBID_INVALID;
&gt;     msg_ack_ref-&gt;peer.vpid   = ORTE_VPID_INVALID;
&gt; -    msg_ack_ref-&gt;peer.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(msg_ack_ref-&gt;peer.epoch,ORTE_EPOCH_MIN);
&gt; }
&gt; 
&gt; 
&gt; @@ -1015,7 +1015,7 @@
&gt;  }
&gt; 
&gt; 
&gt; -#define CREATE_NEW_MSG(msg_ref, v_type, v_count, v_ddt_size, v_tag, v_rank, v_comm, p_jobid, p_vpid, p_epoch) \
&gt; +#define CREATE_NEW_MSG(msg_ref, v_type, v_count, v_ddt_size, v_tag, v_rank, v_comm, p_jobid, p_vpid) \
&gt;  {                                                               \
&gt;    HOKE_TRAFFIC_MSG_REF_ALLOC(msg_ref, ret);                     \
&gt;                                                                  \
&gt; @@ -1034,7 +1034,7 @@
&gt;                                                                  \
&gt;    msg_ref-&gt;proc_name.jobid  = p_jobid;                          \
&gt;    msg_ref-&gt;proc_name.vpid   = p_vpid;                           \
&gt; -   msg_ref-&gt;proc_name.epoch  = p_epoch;                          \
&gt; +   ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,orte_ess.proc_get_epoch(&amp;(msg_ref-&gt;proc_name))); \
&gt;                                                                  \
&gt;    msg_ref-&gt;matched = 0;                                         \
&gt;    msg_ref-&gt;done    = 0;                                         \
&gt; @@ -1043,7 +1043,7 @@
&gt;    msg_ref-&gt;active_drain = 0;                                    \
&gt;  }
&gt; 
&gt; -#define CREATE_NEW_DRAIN_MSG(msg_ref, v_type, v_count, v_ddt_size, v_tag, v_rank, v_comm, p_jobid, p_vpid, p_epoch) \
&gt; +#define CREATE_NEW_DRAIN_MSG(msg_ref, v_type, v_count, v_ddt_size, v_tag, v_rank, v_comm, p_jobid, p_vpid) \
&gt;  {                                                               \
&gt;    HOKE_DRAIN_MSG_REF_ALLOC(msg_ref, ret);                       \
&gt;                                                                  \
&gt; @@ -1063,7 +1063,7 @@
&gt;                                                                  \
&gt;    msg_ref-&gt;proc_name.jobid  = p_jobid;                          \
&gt;    msg_ref-&gt;proc_name.vpid   = p_vpid;                           \
&gt; -   msg_ref-&gt;proc_name.epoch  = p_epoch;                          \
&gt; +   ORTE_EPOCH_SET(msg_ref-&gt;proc_name.epoch,orte_ess.proc_get_epoch(&amp;(msg_ref-&gt;proc_name))); \
&gt;  }
&gt; 
&gt; 
&gt; @@ -1466,7 +1466,7 @@
&gt; 
&gt;         new_peer_ref-&gt;proc_name.jobid  = procs[i]-&gt;proc_name.jobid;
&gt;         new_peer_ref-&gt;proc_name.vpid   = procs[i]-&gt;proc_name.vpid;
&gt; -        new_peer_ref-&gt;proc_name.epoch  = procs[i]-&gt;proc_name.epoch;
&gt; +        ORTE_EPOCH_SET(new_peer_ref-&gt;proc_name.epoch,procs[i]-&gt;proc_name.epoch);
&gt; 
&gt;         opal_list_append(&amp;ompi_crcp_bkmrk_pml_peer_refs, &amp;(new_peer_ref-&gt;super));
&gt;     }
&gt; @@ -3237,13 +3237,11 @@
&gt;             CREATE_NEW_MSG((*msg_ref), msg_type,
&gt;                            count, ddt_size, tag, dest, comm,
&gt;                            peer_ref-&gt;proc_name.jobid,
&gt; -                           peer_ref-&gt;proc_name.vpid,
&gt; -                           peer_ref-&gt;proc_name.epoch);
&gt; +                           peer_ref-&gt;proc_name.vpid);
&gt;         } else {
&gt;             CREATE_NEW_MSG((*msg_ref), msg_type,
&gt;                            count, ddt_size, tag, dest, comm,
&gt; -                           ORTE_JOBID_INVALID, ORTE_VPID_INVALID,
&gt; -                           ORTE_EPOCH_INVALID);
&gt; +                           ORTE_JOBID_INVALID, ORTE_VPID_INVALID);
&gt;         }
&gt; 
&gt;         if( msg_type == COORD_MSG_TYPE_P_SEND ||
&gt; @@ -3377,7 +3375,7 @@
&gt;     if( NULL == from_peer_ref &amp;&amp; NULL != to_peer_ref ) {
&gt;         (*new_msg_ref)-&gt;proc_name.jobid = to_peer_ref-&gt;proc_name.jobid;
&gt;         (*new_msg_ref)-&gt;proc_name.vpid  = to_peer_ref-&gt;proc_name.vpid;
&gt; -        (*new_msg_ref)-&gt;proc_name.epoch = to_peer_ref-&gt;proc_name.epoch;
&gt; +        ORTE_EPOCH_SET((*new_msg_ref)-&gt;proc_name.epoch,to_peer_ref-&gt;proc_name.epoch);
&gt;     }
&gt; 
&gt;     return exit_status;
&gt; @@ -3808,8 +3806,7 @@
&gt;         CREATE_NEW_DRAIN_MSG((*msg_ref), msg_type,
&gt;                              count, NULL, tag, dest, comm,
&gt;                              peer_ref-&gt;proc_name.jobid,
&gt; -                             peer_ref-&gt;proc_name.vpid,
&gt; -                             peer_ref-&gt;proc_name.epoch);
&gt; +                             peer_ref-&gt;proc_name.vpid);
&gt; 
&gt;         (*msg_ref)-&gt;done           = 0;
&gt;         (*msg_ref)-&gt;active         = 0;
&gt; @@ -5284,8 +5281,7 @@
&gt;      */
&gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     peer_name.vpid   = peer_idx;
&gt; -    peer_name.epoch  = ORTE_EPOCH_INVALID;
&gt; -    peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
&gt; +    ORTE_EPOCH_SET(peer_name.epoch,orte_ess.proc_get_epoch(&amp;peer_name));
&gt; 
&gt;     if( NULL == (peer_ref = find_peer(peer_name))) {
&gt;         opal_output(mca_crcp_bkmrk_component.super.output_handle,
&gt; @@ -5346,8 +5342,7 @@
&gt; 
&gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     peer_name.vpid   = peer_idx;
&gt; -    peer_name.epoch  = ORTE_EPOCH_INVALID;
&gt; -    peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
&gt; +    ORTE_EPOCH_SET(peer_name.epoch,orte_ess.proc_get_epoch(&amp;peer_name));
&gt; 
&gt;     if ( 0 &gt; (ret = orte_rml.recv_buffer_nb(&amp;peer_name,
&gt;                                             OMPI_CRCP_COORD_BOOKMARK_TAG,
&gt; @@ -5529,7 +5524,8 @@
&gt;     HOKE_DRAIN_ACK_MSG_REF_ALLOC(d_msg_ack, ret);
&gt;     d_msg_ack-&gt;peer.jobid  = peer_ref-&gt;proc_name.jobid;
&gt;     d_msg_ack-&gt;peer.vpid   = peer_ref-&gt;proc_name.vpid;
&gt; -    d_msg_ack-&gt;peer.epoch  = peer_ref-&gt;proc_name.epoch;
&gt; +    ORTE_EPOCH_SET(d_msg_ack-&gt;peer.epoch,peer_ref-&gt;proc_name.epoch);
&gt; +
&gt;     d_msg_ack-&gt;complete    = false;
&gt;     opal_list_append(&amp;drained_msg_ack_list, &amp;(d_msg_ack-&gt;super));
&gt;     OPAL_OUTPUT_VERBOSE((10, mca_crcp_bkmrk_component.super.output_handle,
&gt; @@ -6169,8 +6165,7 @@
&gt;                        count, datatype_size, tag, rank,
&gt;                        ompi_comm_lookup(comm_id),
&gt;                        peer_ref-&gt;proc_name.jobid,
&gt; -                       peer_ref-&gt;proc_name.vpid,
&gt; -                       peer_ref-&gt;proc_name.epoch);
&gt; +                       peer_ref-&gt;proc_name.vpid);
&gt; 
&gt;         traffic_message_create_drain_message(true, num_left_unresolved,
&gt;                                              peer_ref,
&gt; 
&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
&gt; ==============================================================================
&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c	(original)
&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -1130,7 +1130,7 @@
&gt;     /* flag the identity of the remote proc */
&gt;     carport.jobid = mev-&gt;sender.jobid;
&gt;     carport.vpid = mev-&gt;sender.vpid;
&gt; -    carport.epoch = mev-&gt;sender.epoch;
&gt; +    ORTE_EPOCH_SET(carport.epoch,mev-&gt;sender.epoch);
&gt; 
&gt;     /* release the event */
&gt;     OBJ_RELEASE(mev);
&gt; 
&gt; Modified: trunk/ompi/mca/pml/bfo/pml_bfo_failover.c
&gt; ==============================================================================
&gt; --- trunk/ompi/mca/pml/bfo/pml_bfo_failover.c	(original)
&gt; +++ trunk/ompi/mca/pml/bfo/pml_bfo_failover.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -1,8 +1,5 @@
&gt; /*
&gt;  * Copyright (c) 2010      Oracle and/or its affiliates.  All rights reserved.
&gt; - * Copyright (c) 2004-2011 The University of Tennessee and The University
&gt; - *                         of Tennessee Research Foundation.  All rights
&gt; - *                         reserved.
&gt;  * $COPYRIGHT$
&gt;  *
&gt;  * Additional copyrights may follow
&gt; @@ -398,13 +395,13 @@
&gt;         (hdr-&gt;hdr_match.hdr_seq != (uint16_t)recvreq-&gt;req_msgseq)) {
&gt;         orte_proc.jobid = hdr-&gt;hdr_restart.hdr_jobid;
&gt;         orte_proc.vpid = hdr-&gt;hdr_restart.hdr_vpid;
&gt; -        orte_proc.epoch = hdr-&gt;hdr_restart.hdr_epoch;
&gt; +
&gt;         ompi_proc = ompi_proc_find(&amp;orte_proc);
&gt;         opal_output_verbose(20, mca_pml_bfo_output,
&gt;                             &quot;RNDVRESTARTNOTIFY: received: does not match request, sending NACK back &quot;
&gt;                             &quot;PML:req=%d,hdr=%d CTX:req=%d,hdr=%d SRC:req=%d,hdr=%d &quot;
&gt;                             &quot;RQS:req=%d,hdr=%d src_req=%p, dst_req=%p, peer=%d, hdr-&gt;hdr_jobid=%d, &quot;
&gt; -                            &quot;hdr-&gt;hdr_vpid=%d, hdr-&gt;hdr_epoch=%d, ompi_proc-&gt;proc_hostname=%s&quot;,
&gt; +                            &quot;hdr-&gt;hdr_vpid=%d, ompi_proc-&gt;proc_hostname=%s&quot;,
&gt;                             (uint16_t)recvreq-&gt;req_msgseq, hdr-&gt;hdr_match.hdr_seq,
&gt;                             recvreq-&gt;req_recv.req_base.req_comm-&gt;c_contextid, hdr-&gt;hdr_match.hdr_ctx,
&gt;                             recvreq-&gt;req_recv.req_base.req_ompi.req_status.MPI_SOURCE,
&gt; @@ -413,7 +410,7 @@
&gt;                             recvreq-&gt;remote_req_send.pval, (void *)recvreq,
&gt;                             recvreq-&gt;req_recv.req_base.req_ompi.req_status.MPI_SOURCE,
&gt;                             hdr-&gt;hdr_restart.hdr_jobid, hdr-&gt;hdr_restart.hdr_vpid, 
&gt; -                            hdr-&gt;hdr_restart.hdr_epoch, ompi_proc-&gt;proc_hostname);
&gt; +                            ompi_proc-&gt;proc_hostname);
&gt;         mca_pml_bfo_recv_request_rndvrestartnack(des, ompi_proc, false);
&gt;         return;
&gt;     }
&gt; @@ -715,7 +712,6 @@
&gt;     restart-&gt;hdr_dst_rank = sendreq-&gt;req_send.req_base.req_peer; /* Needed for NACKs */
&gt;     restart-&gt;hdr_jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     restart-&gt;hdr_vpid = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -    restart-&gt;hdr_epoch = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; 
&gt;     bfo_hdr_hton(restart, MCA_PML_BFO_HDR_TYPE_RNDVRESTARTNOTIFY, proc);
&gt; 
&gt; 
&gt; Modified: trunk/ompi/mca/pml/bfo/pml_bfo_hdr.h
&gt; ==============================================================================
&gt; --- trunk/ompi/mca/pml/bfo/pml_bfo_hdr.h	(original)
&gt; +++ trunk/ompi/mca/pml/bfo/pml_bfo_hdr.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -2,9 +2,6 @@
&gt;  * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
&gt;  *                         University Research and Technology
&gt;  *                         Corporation.  All rights reserved.
&gt; - * Copyright (c) 2004-2011 The University of Tennessee and The University
&gt; - *                         of Tennessee Research Foundation.  All rights
&gt; - *                         reserved.
&gt;  * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
&gt;  *                         University of Stuttgart.  All rights reserved.
&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
&gt; @@ -415,7 +412,6 @@
&gt;     int32_t  hdr_dst_rank;                    /**&lt; needed to send NACK */
&gt;     uint32_t hdr_jobid;                       /**&lt; needed to send NACK */
&gt;     uint32_t hdr_vpid;                        /**&lt; needed to send NACK */
&gt; -    uint32_t hdr_epoch;                       /**&lt; needed to send NACK */
&gt; };
&gt; typedef struct mca_pml_bfo_restart_hdr_t mca_pml_bfo_restart_hdr_t;
&gt; 
&gt; @@ -428,7 +424,6 @@
&gt;     (h).hdr_dst_rank = ntohl((h).hdr_dst_rank); \
&gt;     (h).hdr_jobid = ntohl((h).hdr_jobid); \
&gt;     (h).hdr_vpid = ntohl((h).hdr_vpid); \
&gt; -    (h).hdr_epoch = ntohl((h).hdr_epoch); \
&gt;     } while (0)
&gt; 
&gt; #define MCA_PML_BFO_RESTART_HDR_HTON(h) \
&gt; @@ -437,7 +432,6 @@
&gt;     (h).hdr_dst_rank = htonl((h).hdr_dst_rank); \
&gt;     (h).hdr_jobid = htonl((h).hdr_jobid); \
&gt;     (h).hdr_vpid = htonl((h).hdr_vpid); \
&gt; -    (h).hdr_epoch = htonl((h).hdr_epoch); \
&gt;     } while (0) 
&gt; 
&gt; #endif /* PML_BFO */
&gt; 
&gt; Modified: trunk/ompi/proc/proc.c
&gt; ==============================================================================
&gt; --- trunk/ompi/proc/proc.c	(original)
&gt; +++ trunk/ompi/proc/proc.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -108,7 +108,8 @@
&gt; 
&gt;         proc-&gt;proc_name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;         proc-&gt;proc_name.vpid = i;
&gt; -        proc-&gt;proc_name.epoch = ORTE_EPOCH_MIN;
&gt; +        ORTE_EPOCH_SET(proc-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
&gt; +
&gt;         if (i == ORTE_PROC_MY_NAME-&gt;vpid) {
&gt;             ompi_proc_local_proc = proc;
&gt;             proc-&gt;proc_flags = OPAL_PROC_ALL_LOCAL;
&gt; @@ -362,8 +363,7 @@
&gt; 
&gt;         /* Does not change: proc-&gt;proc_name.vpid */
&gt;         proc-&gt;proc_name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt; -        proc-&gt;proc_name.epoch = ORTE_EPOCH_INVALID;
&gt; -        proc-&gt;proc_name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;proc_name);
&gt; +        ORTE_EPOCH_SET(proc-&gt;proc_name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;proc_name));
&gt; 
&gt;         /* Make sure to clear the local flag before we set it below */
&gt;         proc-&gt;proc_flags = 0;
&gt; 
&gt; Modified: trunk/opal/config/opal_configure_options.m4
&gt; ==============================================================================
&gt; --- trunk/opal/config/opal_configure_options.m4	(original)
&gt; +++ trunk/opal/config/opal_configure_options.m4	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -416,6 +416,14 @@
&gt; AM_CONDITIONAL(WANT_FT_CR,  test &quot;$opal_want_ft_cr&quot; = &quot;1&quot;)
&gt; 
&gt; #
&gt; +# Compile in resilient runtime code
&gt; +#
&gt; +AC_ARG_ENABLE(resilient-orte,
&gt; +    [AC_HELP_STRING([--enable-resilient-orte], [Enable the resilient runtime code.])])
&gt; +AM_CONDITIONAL(ORTE_RESIL_ORTE, [test &quot;$enable_resilient_orte&quot; = &quot;yes&quot;])
&gt; +AM_CONDITIONAL(ORTE_ENABLE_EPOCH, [test &quot;$enable_resilient_orte&quot; = &quot;yes&quot;])
&gt; +
&gt; +#
&gt; # Do we want to install binaries?
&gt; #
&gt; AC_ARG_ENABLE([binaries],
&gt; 
&gt; Modified: trunk/orte/include/orte/types.h
&gt; ==============================================================================
&gt; --- trunk/orte/include/orte/types.h	(original)
&gt; +++ trunk/orte/include/orte/types.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -81,24 +81,43 @@
&gt; #define ORTE_VPID_T         OPAL_UINT32
&gt; #define ORTE_VPID_MAX       UINT32_MAX-2
&gt; #define ORTE_VPID_MIN       0
&gt; +
&gt; +#if ORTE_ENABLE_EPOCH
&gt; typedef uint32_t orte_epoch_t;
&gt; #define ORTE_EPOCH_T        OPAL_UINT32
&gt; #define ORTE_EPOCH_MAX      UINT32_MAX-2
&gt; #define ORTE_EPOCH_MIN      0
&gt; +#endif
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; #define ORTE_PROCESS_NAME_HTON(n)       \
&gt; do {                                    \
&gt;     n.jobid = htonl(n.jobid);           \
&gt;     n.vpid = htonl(n.vpid);             \
&gt;     n.epoch = htonl(n.epoch);           \
&gt; } while (0)
&gt; +#else
&gt; +#define ORTE_PROCESS_NAME_HTON(n)       \
&gt; +do {                                    \
&gt; +    n.jobid = htonl(n.jobid);           \
&gt; +    n.vpid = htonl(n.vpid);             \
&gt; +} while (0)
&gt; +#endif
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; #define ORTE_PROCESS_NAME_NTOH(n)       \
&gt; do {                                    \
&gt;     n.jobid = ntohl(n.jobid);           \
&gt;     n.vpid = ntohl(n.vpid);             \
&gt;     n.epoch = ntohl(n.epoch);           \
&gt; } while (0)
&gt; +#else
&gt; +#define ORTE_PROCESS_NAME_NTOH(n)       \
&gt; +do {                                    \
&gt; +    n.jobid = ntohl(n.jobid);           \
&gt; +    n.vpid = ntohl(n.vpid);             \
&gt; +} while (0)
&gt; +#endif
&gt; 
&gt; #define ORTE_NAME_ARGS(n) \
&gt;     (unsigned long) ((NULL == n) ? (unsigned long)ORTE_JOBID_INVALID : (unsigned long)(n)-&gt;jobid), \
&gt; @@ -127,6 +146,7 @@
&gt; struct orte_process_name_t {
&gt;     orte_jobid_t jobid;     /**&lt; Job number */
&gt;     orte_vpid_t vpid;       /**&lt; Process id - equivalent to rank */
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     orte_epoch_t epoch;     /**&lt; Epoch - used to measure the generation of a recovered process.
&gt;                              *   The epoch will start at ORTE_EPOCH_MIN and
&gt;                              *   increment every time the process is detected as
&gt; @@ -135,6 +155,7 @@
&gt;                              *   processes that did not directly detect the
&gt;                              *   failure to increment their epochs.
&gt;                              */
&gt; +#endif
&gt; };
&gt; typedef struct orte_process_name_t orte_process_name_t;
&gt; 
&gt; @@ -157,7 +178,10 @@
&gt; #define    ORTE_NAME                (OPAL_DSS_ID_DYNAMIC + 2)  /**&lt; an orte_process_name_t */
&gt; #define    ORTE_VPID                (OPAL_DSS_ID_DYNAMIC + 3)  /**&lt; a vpid */
&gt; #define    ORTE_JOBID               (OPAL_DSS_ID_DYNAMIC + 4)  /**&lt; a jobid */
&gt; +
&gt; +#if ORTE_ENABLE_EPOCH
&gt; #define    ORTE_EPOCH               (OPAL_DSS_ID_DYNAMIC + 5)  /**&lt; an epoch */
&gt; +#endif
&gt; 
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt;     /* State-related types */
&gt; 
&gt; Modified: trunk/orte/mca/db/daemon/db_daemon.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/db/daemon/db_daemon.c	(original)
&gt; +++ trunk/orte/mca/db/daemon/db_daemon.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -386,7 +386,7 @@
&gt;             dat = OBJ_NEW(orte_db_data_t);
&gt;             dat-&gt;name.jobid = sender-&gt;jobid;
&gt;             dat-&gt;name.vpid = sender-&gt;vpid;
&gt; -            dat-&gt;name.epoch= sender-&gt;epoch;
&gt; +            ORTE_EPOCH_SET(dat-&gt;name.epoch,sender-&gt;epoch);
&gt;             dat-&gt;key = key;
&gt;             count=1;
&gt;             opal_dss.unpack(buf, &amp;dat-&gt;size, &amp;count, OPAL_INT32);
&gt; 
&gt; Modified: trunk/orte/mca/errmgr/app/errmgr_app.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/errmgr/app/errmgr_app.c	(original)
&gt; +++ trunk/orte/mca/errmgr/app/errmgr_app.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -82,8 +82,10 @@
&gt;     NULL,
&gt;     NULL,
&gt;     NULL,
&gt; -    orte_errmgr_base_register_migration_warning,
&gt; -    orte_errmgr_base_set_fault_callback
&gt; +    orte_errmgr_base_register_migration_warning
&gt; +#if ORTE_RESIL_ORTE
&gt; +    ,orte_errmgr_base_set_fault_callback
&gt; +#endif
&gt; };
&gt; 
&gt; /************************
&gt; @@ -93,18 +95,23 @@
&gt; {
&gt;     int ret = ORTE_SUCCESS;
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt;     ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
&gt;                                   ORTE_RML_TAG_EPOCH_CHANGE, 
&gt;                                   ORTE_RML_PERSISTENT, 
&gt;                                   epoch_change_recv, 
&gt;                                   NULL);
&gt; +#endif
&gt; +
&gt;     return ret;
&gt; }
&gt; 
&gt; static int finalize(void)
&gt; {
&gt; +#if ORTE_RESIL_ORTE
&gt;     orte_rml.recv_cancel(ORTE_NAME_WILDCARD,
&gt;                          ORTE_RML_TAG_EPOCH_CHANGE);
&gt; +#endif
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; @@ -151,6 +158,7 @@
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt; void epoch_change_recv(int status, 
&gt;                        orte_process_name_t *sender, 
&gt;                        opal_buffer_t *buffer, 
&gt; @@ -209,15 +217,20 @@
&gt;                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt; 
&gt;         (*fault_cbfunc)(procs);
&gt; +    } else if (NULL == fault_cbfunc) {
&gt; +        OPAL_OUTPUT_VERBOSE((1, orte_errmgr_base.output,
&gt; +                    &quot;%s errmgr:app Calling fault callback failed (NULL pointer)!&quot;,
&gt; +                    ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt;     } else {
&gt;         OPAL_OUTPUT_VERBOSE((1, orte_errmgr_base.output,
&gt; -                    &quot;%s errmgr:app Calling fault callback failed!&quot;,
&gt; +                    &quot;%s errmgr:app Calling fault callback failed (num_dead &lt;= 0)!&quot;,
&gt;                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt;     }
&gt; 
&gt;     free(proc);
&gt;     OBJ_RELEASE(procs);
&gt; }
&gt; +#endif
&gt; 
&gt; static int orte_errmgr_app_abort_peers(orte_process_name_t *procs, orte_std_cntr_t num_procs)
&gt; {
&gt; 
&gt; Modified: trunk/orte/mca/errmgr/base/errmgr_base_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/errmgr/base/errmgr_base_fns.c	(original)
&gt; +++ trunk/orte/mca/errmgr/base/errmgr_base_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -97,13 +97,13 @@
&gt; {
&gt;     item-&gt;proc_name.vpid  = ORTE_VPID_INVALID;
&gt;     item-&gt;proc_name.jobid = ORTE_JOBID_INVALID;
&gt; -    item-&gt;proc_name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(item-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
&gt; }
&gt; 
&gt; void orte_errmgr_predicted_proc_destruct( orte_errmgr_predicted_proc_t *item)
&gt; {
&gt;     item-&gt;proc_name.vpid  = ORTE_VPID_INVALID;
&gt; -    item-&gt;proc_name.epoch = ORTE_EPOCH_INVALID;
&gt; +    ORTE_EPOCH_SET(item-&gt;proc_name.epoch,ORTE_EPOCH_INVALID);
&gt;     item-&gt;proc_name.jobid = ORTE_JOBID_INVALID;
&gt; }
&gt; 
&gt; @@ -139,13 +139,13 @@
&gt; void orte_errmgr_predicted_map_construct(orte_errmgr_predicted_map_t *item)
&gt; {
&gt;     item-&gt;proc_name.vpid  = ORTE_VPID_INVALID;
&gt; -    item-&gt;proc_name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(item-&gt;proc_name.epoch,ORTE_EPOCH_MIN);
&gt;     item-&gt;proc_name.jobid = ORTE_JOBID_INVALID;
&gt; 
&gt;     item-&gt;node_name = NULL;
&gt; 
&gt;     item-&gt;map_proc_name.vpid  = ORTE_VPID_INVALID;
&gt; -    item-&gt;map_proc_name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(item-&gt;map_proc_name.epoch,ORTE_EPOCH_MIN);
&gt;     item-&gt;map_proc_name.jobid = ORTE_JOBID_INVALID;
&gt; 
&gt;     item-&gt;map_node_name = NULL;
&gt; @@ -156,7 +156,7 @@
&gt; void orte_errmgr_predicted_map_destruct( orte_errmgr_predicted_map_t *item)
&gt; {
&gt;     item-&gt;proc_name.vpid  = ORTE_VPID_INVALID;
&gt; -    item-&gt;proc_name.epoch = ORTE_EPOCH_INVALID;
&gt; +    ORTE_EPOCH_SET(item-&gt;proc_name.epoch,ORTE_EPOCH_INVALID);
&gt;     item-&gt;proc_name.jobid = ORTE_JOBID_INVALID;
&gt; 
&gt;     if( NULL != item-&gt;node_name ) {
&gt; @@ -165,7 +165,7 @@
&gt;     }
&gt; 
&gt;     item-&gt;map_proc_name.vpid  = ORTE_VPID_INVALID;
&gt; -    item-&gt;map_proc_name.epoch = ORTE_EPOCH_INVALID;
&gt; +    ORTE_EPOCH_SET(item-&gt;map_proc_name.epoch,ORTE_EPOCH_INVALID);
&gt;     item-&gt;map_proc_name.jobid = ORTE_JOBID_INVALID;
&gt; 
&gt;     if( NULL != item-&gt;map_node_name ) {
&gt; 
&gt; Modified: trunk/orte/mca/errmgr/base/errmgr_base_tool.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/errmgr/base/errmgr_base_tool.c	(original)
&gt; +++ trunk/orte/mca/errmgr/base/errmgr_base_tool.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -267,7 +267,7 @@
&gt;      */
&gt;     errmgr_cmdline_sender.jobid = ORTE_JOBID_INVALID;
&gt;     errmgr_cmdline_sender.vpid  = ORTE_VPID_INVALID;
&gt; -    errmgr_cmdline_sender.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(errmgr_cmdline_sender.epoch,ORTE_EPOCH_MIN);
&gt;     if (ORTE_SUCCESS != (ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
&gt;                                                        ORTE_RML_TAG_MIGRATE,
&gt;                                                        0,
&gt; @@ -379,14 +379,14 @@
&gt;     if( OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ORTE_NAME_INVALID, &amp;errmgr_cmdline_sender) ) {
&gt;         swap_dest.jobid = errmgr_cmdline_sender.jobid;
&gt;         swap_dest.vpid  = errmgr_cmdline_sender.vpid;
&gt; -        swap_dest.epoch = errmgr_cmdline_sender.epoch;
&gt; +        ORTE_EPOCH_SET(swap_dest.epoch,errmgr_cmdline_sender.epoch);
&gt; 
&gt;         errmgr_cmdline_sender = *sender;
&gt;         orte_errmgr_base_migrate_update(ORTE_ERRMGR_MIGRATE_STATE_ERR_INPROGRESS);
&gt; 
&gt;         errmgr_cmdline_sender.jobid = swap_dest.jobid;
&gt;         errmgr_cmdline_sender.vpid  = swap_dest.vpid;
&gt; -        errmgr_cmdline_sender.epoch = swap_dest.epoch;
&gt; +        ORTE_EPOCH_SET(errmgr_cmdline_sender.epoch,swap_dest.epoch);
&gt; 
&gt;         goto cleanup;
&gt;     }
&gt; 
&gt; Modified: trunk/orte/mca/errmgr/hnp/errmgr_hnp.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/errmgr/hnp/errmgr_hnp.c	(original)
&gt; +++ trunk/orte/mca/errmgr/hnp/errmgr_hnp.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -53,6 +53,7 @@
&gt; #include &quot;orte/runtime/orte_globals.h&quot;
&gt; #include &quot;orte/runtime/orte_locks.h&quot;
&gt; #include &quot;orte/runtime/orte_quit.h&quot;
&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
&gt; 
&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
&gt; #include &quot;orte/mca/errmgr/base/base.h&quot;
&gt; @@ -83,9 +84,11 @@
&gt;     orte_errmgr_hnp_global_suggest_map_targets,
&gt;     /* FT Event hook  */
&gt;     orte_errmgr_hnp_global_ft_event,
&gt; -    orte_errmgr_base_register_migration_warning,
&gt; +    orte_errmgr_base_register_migration_warning
&gt; +#if ORTE_RESIL_ORTE
&gt;     /* Set the callback */
&gt; -    orte_errmgr_base_set_fault_callback
&gt; +    ,orte_errmgr_base_set_fault_callback
&gt; +#endif
&gt; };
&gt; 
&gt; 
&gt; @@ -97,14 +100,16 @@
&gt; static void update_local_procs_in_job(orte_job_t *jdata, orte_job_state_t jobstate,
&gt;                                       orte_proc_state_t state, orte_exit_code_t exit_code);
&gt; static void check_job_complete(orte_job_t *jdata);
&gt; -static void killprocs(orte_jobid_t job, orte_vpid_t vpid, orte_epoch_t epoch);
&gt; +static void killprocs(orte_jobid_t job, orte_vpid_t vpid);
&gt; static int hnp_relocate(orte_job_t *jdata, orte_process_name_t *proc,
&gt;                         orte_proc_state_t state, orte_exit_code_t exit_code);
&gt; static orte_odls_child_t* proc_is_local(orte_process_name_t *proc);
&gt; +#if ORTE_RESIL_ORTE
&gt; static int send_to_local_applications(opal_pointer_array_t *dead_names);
&gt; static void failure_notification(int status, orte_process_name_t* sender,
&gt;                                  opal_buffer_t *buffer, orte_rml_tag_t tag,
&gt;                                  void* cbdata);
&gt; +#endif
&gt; 
&gt; /************************
&gt;  * API Definitions
&gt; @@ -380,16 +385,21 @@
&gt;  **********************/
&gt; int orte_errmgr_hnp_base_global_init(void)
&gt; {
&gt; -    int ret;
&gt; +    int ret = ORTE_SUCCESS;
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt;     ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_FAILURE_NOTICE,
&gt;                                   ORTE_RML_PERSISTENT, failure_notification, NULL);
&gt; +#endif
&gt; +
&gt;     return ret;
&gt; }
&gt; 
&gt; int orte_errmgr_hnp_base_global_finalize(void)
&gt; {
&gt; +#if ORTE_RESIL_ORTE
&gt;     orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_FAILURE_NOTICE);
&gt; +#endif
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; @@ -406,6 +416,7 @@
&gt;     orte_odls_child_t *child;
&gt;     int rc;
&gt;     orte_app_context_t *app;
&gt; +    orte_proc_t *pdat;
&gt; 
&gt;     OPAL_OUTPUT_VERBOSE((1, orte_errmgr_base.output,
&gt;                          &quot;%s errmgr:hnp: job %s reported state %s&quot;
&gt; @@ -538,7 +549,7 @@
&gt;                                       ORTE_PROC_STATE_SENSOR_BOUND_EXCEEDED,
&gt;                                       exit_code);
&gt;             /* order all local procs for this job to be killed */
&gt; -            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
&gt; +            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD);
&gt;             check_job_complete(jdata);  /* set the local proc states */
&gt;             /* the job object for this job will have been NULL'd
&gt;              * in the array if the job was solely local. If it isn't
&gt; @@ -550,7 +561,7 @@
&gt;             break;
&gt;         case ORTE_JOB_STATE_COMM_FAILED:
&gt;             /* order all local procs for this job to be killed */
&gt; -            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
&gt; +            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD);
&gt;             check_job_complete(jdata);  /* set the local proc states */
&gt;             /* the job object for this job will have been NULL'd
&gt;              * in the array if the job was solely local. If it isn't
&gt; @@ -562,7 +573,7 @@
&gt;             break;
&gt;         case ORTE_JOB_STATE_HEARTBEAT_FAILED:
&gt;             /* order all local procs for this job to be killed */
&gt; -            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
&gt; +            killprocs(jdata-&gt;jobid, ORTE_VPID_WILDCARD);
&gt;             check_job_complete(jdata);  /* set the local proc states */
&gt;             /* the job object for this job will have been NULL'd
&gt;              * in the array if the job was solely local. If it isn't
&gt; @@ -632,10 +643,6 @@
&gt;             }
&gt;         }
&gt; 
&gt; -        if (ORTE_PROC_STATE_ABORTED_BY_SIG == state) {
&gt; -            exit_code = 0;
&gt; -        }
&gt; -
&gt;         orte_errmgr_hnp_update_proc(jdata, proc, state, pid, exit_code);
&gt;         check_job_complete(jdata);  /* need to set the job state */
&gt;         /* the job object for this job will have been NULL'd
&gt; @@ -679,7 +686,7 @@
&gt; 
&gt;         case ORTE_PROC_STATE_SENSOR_BOUND_EXCEEDED:
&gt;             if (jdata-&gt;enable_recovery) {
&gt; -                killprocs(proc-&gt;jobid, proc-&gt;vpid, proc-&gt;epoch);
&gt; +                killprocs(proc-&gt;jobid, proc-&gt;vpid);
&gt;                 /* is this a local proc */
&gt;                 if (NULL != (child = proc_is_local(proc))) {
&gt;                     /* local proc - see if it has reached its restart limit */
&gt; @@ -778,18 +785,37 @@
&gt;                         opal_output(0, &quot;%s UNABLE TO RELOCATE PROCS FROM FAILED DAEMON %s&quot;,
&gt;                                 ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), ORTE_NAME_PRINT(proc));
&gt;                         /* kill all local procs */
&gt; -                        killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
&gt; +                        killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
&gt;                         /* kill all jobs */
&gt;                         hnp_abort(ORTE_JOBID_WILDCARD, exit_code);
&gt;                         /* check if all is complete so we can terminate */
&gt;                         check_job_complete(jdata);
&gt;                     }
&gt;                 } else {
&gt; +#if !ORTE_RESIL_ORTE
&gt; +                    if (NULL == (pdat = (orte_proc_t*)opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;vpid))) {
&gt; +                        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
&gt; +                        orte_show_help(&quot;help-orte-errmgr-hnp.txt&quot;, &quot;errmgr-hnp:daemon-died&quot;, true,
&gt; +                                       ORTE_VPID_PRINT(proc-&gt;vpid), &quot;Unknown&quot;);
&gt; +                    } else {
&gt; +                        orte_show_help(&quot;help-orte-errmgr-hnp.txt&quot;, &quot;errmgr-hnp:daemon-died&quot;, true,
&gt; +                                       ORTE_VPID_PRINT(proc-&gt;vpid), 
&gt; +                                       (NULL == pdat-&gt;node) ? &quot;Unknown&quot; : 
&gt; +                                       ((NULL == pdat-&gt;node-&gt;name) ? &quot;Unknown&quot; : pdat-&gt;node-&gt;name));
&gt; +                    }
&gt; +#endif
&gt;                     if (ORTE_SUCCESS != orte_errmgr_hnp_record_dead_process(proc)) {
&gt;                         /* The process is already dead so don't keep trying to do
&gt;                          * this stuff. */
&gt;                         return ORTE_SUCCESS;
&gt;                     }
&gt; +
&gt; +#if !ORTE_RESIL_ORTE
&gt; +                    /* kill all local procs */
&gt; +                    killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
&gt; +                    /* kill all jobs */
&gt; +                    hnp_abort(ORTE_JOBID_WILDCARD, exit_code);
&gt; +#endif
&gt;                     /* We'll check if the job was complete when we get the
&gt;                      * message back from the HNP notifying us of the dead
&gt;                      * process */
&gt; @@ -805,7 +831,7 @@
&gt;             } else {
&gt;                 orte_errmgr_hnp_record_dead_process(proc);
&gt;                 /* kill all local procs */
&gt; -                killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
&gt; +                killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
&gt;                 /* kill all jobs */
&gt;                 hnp_abort(ORTE_JOBID_WILDCARD, exit_code);
&gt;                 return ORTE_ERR_UNRECOVERABLE;
&gt; @@ -824,6 +850,7 @@
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt; static void failure_notification(int status, orte_process_name_t* sender,
&gt;                                  opal_buffer_t *buffer, orte_rml_tag_t tag,
&gt;                                  void* cbdata)
&gt; @@ -984,6 +1011,7 @@
&gt; 
&gt;     OBJ_RELEASE(dead_names);
&gt; }
&gt; +#endif
&gt; 
&gt; /*****************
&gt;  * Local Functions
&gt; @@ -1354,7 +1382,6 @@
&gt;                 ORTE_UPDATE_EXIT_STATUS(proc-&gt;exit_code);
&gt;             }
&gt;             break;
&gt; -#if 0
&gt;         case ORTE_PROC_STATE_ABORTED_BY_SIG:
&gt;             OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,
&gt;                                  &quot;%s errmgr:hnp:check_job_completed proc %s aborted by signal&quot;,
&gt; @@ -1370,7 +1397,6 @@
&gt;                 ORTE_UPDATE_EXIT_STATUS(proc-&gt;exit_code);
&gt;             }
&gt;             break;
&gt; -#endif
&gt;         case ORTE_PROC_STATE_TERM_WO_SYNC:
&gt;             OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,
&gt;                                  &quot;%s errmgr:hnp:check_job_completed proc %s terminated without sync&quot;,
&gt; @@ -1393,7 +1419,6 @@
&gt;             }
&gt;             break;
&gt;         case ORTE_PROC_STATE_COMM_FAILED:
&gt; -#if 1
&gt;             if (!jdata-&gt;abort) {
&gt;                 jdata-&gt;state = ORTE_JOB_STATE_COMM_FAILED;
&gt;                 /* point to the lowest rank to cause the problem */
&gt; @@ -1403,7 +1428,6 @@
&gt;                 jdata-&gt;abort = true;
&gt;                 ORTE_UPDATE_EXIT_STATUS(proc-&gt;exit_code);
&gt;             }
&gt; -#endif
&gt;             break;
&gt;         case ORTE_PROC_STATE_SENSOR_BOUND_EXCEEDED:
&gt;             if (!jdata-&gt;abort) {
&gt; @@ -1530,9 +1554,6 @@
&gt;      */
&gt; CHECK_DAEMONS:
&gt;     if (jdata == NULL || jdata-&gt;jobid == ORTE_PROC_MY_NAME-&gt;jobid) {
&gt; -#if 0
&gt; -        if ((jdata-&gt;num_procs - 1) &lt;= jdata-&gt;num_terminated) { /* Subtract one for the HNP */
&gt; -#endif
&gt;         if (0 == orte_routed.num_routes()) {
&gt;             /* orteds are done! */
&gt;             OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,
&gt; @@ -1696,7 +1717,7 @@
&gt;     }
&gt; }
&gt; 
&gt; -static void killprocs(orte_jobid_t job, orte_vpid_t vpid, orte_epoch_t epoch)
&gt; +static void killprocs(orte_jobid_t job, orte_vpid_t vpid)
&gt; {
&gt;     opal_pointer_array_t cmd;
&gt;     orte_proc_t proc;
&gt; @@ -1707,7 +1728,9 @@
&gt;         orte_sensor.stop(job);
&gt;     }
&gt; 
&gt; -    if (ORTE_JOBID_WILDCARD == job &amp;&amp; ORTE_VPID_WILDCARD == vpid &amp;&amp; ORTE_EPOCH_WILDCARD == epoch) {
&gt; +    if (ORTE_JOBID_WILDCARD == job 
&gt; +        &amp;&amp; ORTE_VPID_WILDCARD == vpid 
&gt; +        &amp;&amp; ORTE_EPOCH_CMP(ORTE_EPOCH_WILDCARD,epoch)) {
&gt;         if (ORTE_SUCCESS != (rc = orte_odls.kill_local_procs(NULL))) {
&gt;             ORTE_ERROR_LOG(rc);
&gt;         }
&gt; @@ -1718,7 +1741,7 @@
&gt;     OBJ_CONSTRUCT(&amp;proc, orte_proc_t);
&gt;     proc.name.jobid = job;
&gt;     proc.name.vpid = vpid;
&gt; -    proc.name.epoch = epoch;
&gt; +    ORTE_EPOCH_SET(proc.name.epoch,epoch);
&gt;     opal_pointer_array_add(&amp;cmd, &amp;proc);
&gt;     if (ORTE_SUCCESS != (rc = orte_odls.kill_local_procs(&amp;cmd))) {
&gt;         ORTE_ERROR_LOG(rc);
&gt; @@ -1913,13 +1936,15 @@
&gt;     }
&gt; 
&gt;     if (NULL != (pdat = (orte_proc_t*)opal_pointer_array_get_item(jdat-&gt;procs, proc-&gt;vpid)) &amp;&amp;
&gt; -        ORTE_PROC_STATE_TERMINATED &lt; pdat-&gt;state) {
&gt; +        ORTE_PROC_STATE_TERMINATED &gt; pdat-&gt;state) {
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;         /* Make sure that the epochs match. */
&gt;         if (proc-&gt;epoch != pdat-&gt;name.epoch) {
&gt;             opal_output(1, &quot;The epoch does not match the current epoch. Throwing the request out.&quot;);
&gt;             return ORTE_SUCCESS;
&gt;         }
&gt; +#endif
&gt; 
&gt;         dead_names = OBJ_NEW(opal_pointer_array_t);
&gt; 
&gt; @@ -1935,6 +1960,7 @@
&gt;             }
&gt;         }
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt;         if (!mca_errmgr_hnp_component.term_in_progress) {
&gt;             /*
&gt;              * Send a message to the other daemons so they know that a daemon has
&gt; @@ -1949,7 +1975,7 @@
&gt;                 OBJ_RELEASE(buffer);
&gt;             } else {
&gt; 
&gt; -                /* Iterate of the list of dead procs and send them along with
&gt; +                /* Iterate over the list of dead procs and send them along with
&gt;                  * the rest. The HNP needs this info so it can tell the other
&gt;                  * ORTEDs and they can inform the appropriate applications.
&gt;                  */
&gt; @@ -1973,6 +1999,9 @@
&gt;         } else {
&gt;             orte_errmgr_hnp_global_mark_processes_as_dead(dead_names);
&gt;         }
&gt; +#else
&gt; +        orte_errmgr_hnp_global_mark_processes_as_dead(dead_names);
&gt; +#endif
&gt;     }
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; @@ -2011,6 +2040,7 @@
&gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
&gt;                         ORTE_NAME_PRINT(&amp;pdat-&gt;name)));
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt;             /* Make sure the epochs match, if not it probably means that we
&gt;              * already reported this failure. */
&gt;             if (name_item-&gt;epoch != pdat-&gt;name.epoch) {
&gt; @@ -2018,6 +2048,7 @@
&gt;             }
&gt; 
&gt;             orte_util_set_epoch(name_item, name_item-&gt;epoch + 1);
&gt; +#endif
&gt; 
&gt;             /* Remove it from the job array */
&gt;             opal_pointer_array_set_item(jdat-&gt;procs, name_item-&gt;vpid, NULL);
&gt; @@ -2034,6 +2065,7 @@
&gt; 
&gt;             OBJ_RELEASE(pdat);
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt;             /* Create a new proc object that will keep track of the epoch
&gt;              * information */
&gt;             pdat = OBJ_NEW(orte_proc_t);
&gt; @@ -2041,14 +2073,15 @@
&gt;             pdat-&gt;name.vpid = name_item-&gt;vpid;
&gt;             pdat-&gt;name.epoch = name_item-&gt;epoch + 1;
&gt; 
&gt; -            /* Set the state as terminated so we'll know the process isn't
&gt; -             * actually there. */
&gt; -            pdat-&gt;state = ORTE_PROC_STATE_TERMINATED;
&gt; -
&gt;             opal_pointer_array_set_item(jdat-&gt;procs, name_item-&gt;vpid, pdat);
&gt;             jdat-&gt;num_procs++;
&gt;             jdat-&gt;num_terminated++;
&gt; +#endif
&gt; +            /* Set the state as terminated so we'll know the process isn't
&gt; +             * actually there. */
&gt; +            pdat-&gt;state = ORTE_PROC_STATE_TERMINATED;
&gt;         } else {
&gt; +#if ORTE_RESIL_ORTE
&gt;             opal_output(0, &quot;Proc data not found for %s&quot;, ORTE_NAME_PRINT(name_item));
&gt;             /* Create a new proc object that will keep track of the epoch
&gt;              * information */
&gt; @@ -2064,11 +2097,13 @@
&gt;             opal_pointer_array_set_item(jdat-&gt;procs, name_item-&gt;vpid, pdat);
&gt;             jdat-&gt;num_procs++;
&gt;             jdat-&gt;num_terminated++;
&gt; +#endif
&gt;         }
&gt; 
&gt;         check_job_complete(jdat);
&gt;     }
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt;     if (!orte_orteds_term_ordered) {
&gt;         /* Need to update the orted routing module. */
&gt;         orte_routed.update_routing_tree(ORTE_PROC_MY_NAME-&gt;jobid);
&gt; @@ -2077,10 +2112,12 @@
&gt;             (*fault_cbfunc)(dead_procs);
&gt;         }
&gt;     }
&gt; +#endif
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt; int send_to_local_applications(opal_pointer_array_t *dead_names) {
&gt;     opal_buffer_t *buf;
&gt;     int ret = ORTE_SUCCESS;
&gt; @@ -2121,3 +2158,5 @@
&gt; 
&gt;     return ret;
&gt; }
&gt; +#endif
&gt; +
&gt; 
&gt; Modified: trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c	(original)
&gt; +++ trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -522,7 +522,7 @@
&gt;     wp_item = OBJ_NEW(errmgr_autor_wp_item_t);
&gt;     wp_item-&gt;name.jobid = proc-&gt;jobid;
&gt;     wp_item-&gt;name.vpid = proc-&gt;vpid;
&gt; -    wp_item-&gt;name.epoch = proc-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(wp_item-&gt;name.epoch,proc-&gt;epoch);
&gt;     wp_item-&gt;state = state;
&gt; 
&gt;     opal_list_append(procs_pending_recovery, &amp;(wp_item-&gt;super));
&gt; @@ -626,7 +626,7 @@
&gt; {
&gt;     wp-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     wp-&gt;name.vpid  = ORTE_VPID_INVALID;
&gt; -    wp-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(wp-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     wp-&gt;state = 0;
&gt; }
&gt; @@ -635,7 +635,7 @@
&gt; {
&gt;     wp-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     wp-&gt;name.vpid  = ORTE_VPID_INVALID;
&gt; -    wp-&gt;name.epoch = ORTE_EPOCH_INVALID;
&gt; +    ORTE_EPOCH_SET(wp-&gt;name.epoch,ORTE_EPOCH_INVALID);
&gt; 
&gt;     wp-&gt;state = 0;
&gt; }
&gt; 
&gt; Modified: trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c	(original)
&gt; +++ trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -750,7 +750,7 @@
&gt;                 close_iof_stdin = true;
&gt;                 iof_name.jobid = proc-&gt;name.jobid;
&gt;                 iof_name.vpid = proc-&gt;name.vpid;
&gt; -                iof_name.epoch = proc-&gt;name.epoch;
&gt; +                ORTE_EPOCH_SET(iof_name.epoch,proc-&gt;name.epoch);
&gt;             }
&gt;         }
&gt;     }
&gt; @@ -807,7 +807,7 @@
&gt;                     close_iof_stdin = true;
&gt;                     iof_name.jobid = proc-&gt;name.jobid;
&gt;                     iof_name.vpid = proc-&gt;name.vpid;
&gt; -                    iof_name.epoch = proc-&gt;name.epoch;
&gt; +                    ORTE_EPOCH_SET(iof_name.epoch,proc-&gt;name.epoch);
&gt;                 }
&gt;             }
&gt;         }
&gt; @@ -855,7 +855,7 @@
&gt;                     close_iof_stdin = true;
&gt;                     iof_name.jobid = proc-&gt;name.jobid;
&gt;                     iof_name.vpid = proc-&gt;name.vpid;
&gt; -                    iof_name.epoch = proc-&gt;name.epoch;
&gt; +                    ORTE_EPOCH_SET(iof_name.epoch,proc-&gt;name.epoch);
&gt;                 }
&gt;             }
&gt;         }
&gt; 
&gt; Modified: trunk/orte/mca/errmgr/orted/errmgr_orted.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/errmgr/orted/errmgr_orted.c	(original)
&gt; +++ trunk/orte/mca/errmgr/orted/errmgr_orted.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -34,6 +34,7 @@
&gt; #include &quot;orte/util/show_help.h&quot;
&gt; #include &quot;orte/util/nidmap.h&quot;
&gt; #include &quot;orte/runtime/orte_globals.h&quot;
&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
&gt; #include &quot;orte/mca/rml/rml.h&quot;
&gt; #include &quot;orte/mca/odls/odls.h&quot;
&gt; #include &quot;orte/mca/odls/base/base.h&quot;
&gt; @@ -41,7 +42,9 @@
&gt; #include &quot;orte/mca/plm/plm_types.h&quot;
&gt; #include &quot;orte/mca/routed/routed.h&quot;
&gt; #include &quot;orte/mca/sensor/sensor.h&quot;
&gt; +#include &quot;orte/mca/ess/ess.h&quot;
&gt; #include &quot;orte/runtime/orte_quit.h&quot;
&gt; +#include &quot;orte/runtime/orte_globals.h&quot;
&gt; 
&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
&gt; #include &quot;orte/mca/errmgr/base/base.h&quot;
&gt; @@ -59,13 +62,15 @@
&gt; static void update_local_children(orte_odls_job_t *jobdat,
&gt;                                   orte_job_state_t jobstate,
&gt;                                   orte_proc_state_t state);
&gt; -static void killprocs(orte_jobid_t job, orte_vpid_t vpid, orte_epoch_t epoch);
&gt; +static void killprocs(orte_jobid_t job, orte_vpid_t vpid);
&gt; static int record_dead_process(orte_process_name_t *proc);
&gt; -static int send_to_local_applications(opal_pointer_array_t *dead_names);
&gt; static int mark_processes_as_dead(opal_pointer_array_t *dead_procs);
&gt; +#if ORTE_RESIL_ORTE
&gt; +static int send_to_local_applications(opal_pointer_array_t *dead_names);
&gt; static void failure_notification(int status, orte_process_name_t* sender,
&gt;                                  opal_buffer_t *buffer, orte_rml_tag_t tag,
&gt;                                  void* cbdata);
&gt; +#endif
&gt; 
&gt; /*
&gt;  * Module functions: Global
&gt; @@ -104,8 +109,10 @@
&gt;     predicted_fault,
&gt;     suggest_map_targets,
&gt;     ft_event,
&gt; -    orte_errmgr_base_register_migration_warning,
&gt; -    orte_errmgr_base_set_fault_callback  /* Set callback function */
&gt; +    orte_errmgr_base_register_migration_warning
&gt; +#if ORTE_RESIL_ORTE
&gt; +    ,orte_errmgr_base_set_fault_callback  /* Set callback function */
&gt; +#endif
&gt; };
&gt; 
&gt; /************************
&gt; @@ -113,16 +120,22 @@
&gt;  ************************/
&gt; static int init(void)
&gt; {
&gt; -    int ret;
&gt; +    int ret = ORTE_SUCCESS;
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt;     ret = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_FAILURE_NOTICE,
&gt;                                   ORTE_RML_PERSISTENT, failure_notification, NULL);
&gt; +#endif
&gt; +
&gt;     return ret;
&gt; }
&gt; 
&gt; static int finalize(void)
&gt; {
&gt; +#if ORTE_RESIL_ORTE
&gt;     orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_FAILURE_NOTICE);
&gt; +#endif
&gt; +
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; @@ -228,10 +241,10 @@
&gt;             /* update all procs in job */
&gt;             update_local_children(jobdat, jobstate, ORTE_PROC_STATE_SENSOR_BOUND_EXCEEDED);
&gt;             /* order all local procs for this job to be killed */
&gt; -            killprocs(jobdat-&gt;jobid, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
&gt; +            killprocs(jobdat-&gt;jobid, ORTE_VPID_WILDCARD);
&gt;         case ORTE_JOB_STATE_COMM_FAILED:
&gt;             /* kill all local procs */
&gt; -            killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
&gt; +            killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
&gt;             /* tell the caller we can't recover */
&gt;             return ORTE_ERR_UNRECOVERABLE;
&gt;             break;
&gt; @@ -276,7 +289,7 @@
&gt;         /* see if this was a lifeline */
&gt;         if (ORTE_SUCCESS != orte_routed.route_lost(proc)) {
&gt;             /* kill our children */
&gt; -            killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD);
&gt; +            killprocs(ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD);
&gt;             /* terminate - our routed children will see
&gt;              * us leave and automatically die
&gt;              */
&gt; @@ -290,10 +303,18 @@
&gt;             if (0 == orte_routed.num_routes() &amp;&amp;
&gt;                     0 == opal_list_get_size(&amp;orte_local_children)) {
&gt;                 orte_quit();
&gt; +            } else {
&gt; +                OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,
&gt; +                            &quot;%s errmgr:orted not exiting, num_routes() == %d, num children == %d&quot;,
&gt; +                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
&gt; +                            orte_routed.num_routes(),
&gt; +                            opal_list_get_size(&amp;orte_local_children)));
&gt;             }
&gt;         }
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt;         record_dead_process(proc);
&gt; +#endif
&gt; 
&gt;         /* if not, then indicate we can continue */
&gt;         return ORTE_SUCCESS;
&gt; @@ -344,7 +365,7 @@
&gt;                     /* Decrement the number of local procs */
&gt;                     jobdat-&gt;num_local_procs--;
&gt;                     /* kill this proc */
&gt; -                    killprocs(proc-&gt;jobid, proc-&gt;vpid, proc-&gt;epoch);
&gt; +                    killprocs(proc-&gt;jobid, proc-&gt;vpid);
&gt;                 }
&gt;                 app = (orte_app_context_t*)opal_pointer_array_get_item(&amp;jobdat-&gt;apps, child-&gt;app_idx);
&gt;                 if( jobdat-&gt;enable_recovery &amp;&amp; child-&gt;restarts &lt; app-&gt;max_restarts ) {
&gt; @@ -526,10 +547,12 @@
&gt;                         ORTE_ERROR_LOG(rc);
&gt;                         goto FINAL_CLEANUP;
&gt;                     }
&gt; +#if ORTE_ENABLE_EPOCH
&gt;                     if (ORTE_SUCCESS != (rc = opal_dss.pack(alert, &amp;child-&gt;name-&gt;epoch, 1, ORTE_EPOCH))) {
&gt;                         ORTE_ERROR_LOG(rc);
&gt;                         goto FINAL_CLEANUP;
&gt;                     }
&gt; +#endif
&gt;                 }
&gt;             }
&gt;             /* pack an invalid marker */
&gt; @@ -660,7 +683,7 @@
&gt;             continue;
&gt;         }
&gt; 
&gt; -        if (name_item-&gt;epoch &lt; orte_util_lookup_epoch(name_item)) {
&gt; +        if (0 &lt; ORTE_EPOCH_CMP(name_item-&gt;epoch,orte_ess.proc_get_epoch(name_item))) {
&gt;             continue;
&gt;         }
&gt; 
&gt; @@ -669,9 +692,11 @@
&gt;                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
&gt;                              ORTE_NAME_PRINT(name_item)));
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;         /* Increment the epoch */
&gt;         orte_util_set_proc_state(name_item, ORTE_PROC_STATE_TERMINATED);
&gt;         orte_util_set_epoch(name_item, name_item-&gt;epoch + 1);
&gt; +#endif
&gt; 
&gt;         OPAL_THREAD_LOCK(&amp;orte_odls_globals.mutex);
&gt; 
&gt; @@ -706,6 +731,7 @@
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt; static void failure_notification(int status, orte_process_name_t* sender,
&gt;                                  opal_buffer_t *buffer, orte_rml_tag_t tag,
&gt;                                  void* cbdata)
&gt; @@ -714,7 +740,7 @@
&gt;     orte_std_cntr_t n;
&gt;     int ret = ORTE_SUCCESS, num_failed;
&gt;     int32_t i;
&gt; -    orte_process_name_t *name_item, proc;
&gt; +    orte_process_name_t *name_item;
&gt; 
&gt;     dead_names = OBJ_NEW(opal_pointer_array_t);
&gt; 
&gt; @@ -746,7 +772,7 @@
&gt;         /* There shouldn't be an issue of receiving this message multiple 
&gt;          * times but it doesn't hurt to double check.
&gt;          */
&gt; -        if (proc.epoch &lt; orte_util_lookup_epoch(name_item)) {
&gt; +        if (0 &lt; ORTE_EPOCH_CMP(name_item-&gt;epoch,orte_ess.proc_get_epoch(name_item))) {
&gt;             opal_output(1, &quot;Received from proc %s local epoch %d&quot;, ORTE_NAME_PRINT(name_item), orte_util_lookup_epoch(name_item));
&gt;             continue;
&gt;         }
&gt; @@ -767,6 +793,7 @@
&gt;         free(name_item);
&gt;     }
&gt; }
&gt; +#endif
&gt; 
&gt; /*****************
&gt;  * Local Functions
&gt; @@ -948,11 +975,13 @@
&gt;                 ORTE_ERROR_LOG(rc);
&gt;                 return rc;
&gt;             }            
&gt; +#if ORTE_ENABLE_EPOCH
&gt;             /* Pack the child's epoch. */
&gt;             if (ORTE_SUCCESS != (rc = opal_dss.pack(buf, &amp;(child-&gt;name-&gt;epoch), 1, ORTE_EPOCH))) {
&gt;                 ORTE_ERROR_LOG(rc);
&gt;                 return rc;
&gt;             }
&gt; +#endif
&gt;             /* pack the contact info */
&gt;             if (ORTE_SUCCESS != (rc = opal_dss.pack(buf, &amp;child-&gt;rml_uri, 1, OPAL_STRING))) {
&gt;                 ORTE_ERROR_LOG(rc);
&gt; @@ -1015,7 +1044,7 @@
&gt;     }
&gt; }
&gt; 
&gt; -static void killprocs(orte_jobid_t job, orte_vpid_t vpid, orte_epoch_t epoch)
&gt; +static void killprocs(orte_jobid_t job, orte_vpid_t vpid)
&gt; {
&gt;     opal_pointer_array_t cmd;
&gt;     orte_proc_t proc;
&gt; @@ -1026,7 +1055,9 @@
&gt;         orte_sensor.stop(job);
&gt;     }
&gt; 
&gt; -    if (ORTE_JOBID_WILDCARD == job &amp;&amp; ORTE_VPID_WILDCARD == vpid &amp;&amp; ORTE_EPOCH_WILDCARD == epoch) {
&gt; +    if (ORTE_JOBID_WILDCARD == job 
&gt; +        &amp;&amp; ORTE_VPID_WILDCARD == vpid 
&gt; +        &amp;&amp; 0 == ORTE_EPOCH_CMP(ORTE_EPOCH_WILDCARD,epoch)) {
&gt;         if (ORTE_SUCCESS != (rc = orte_odls.kill_local_procs(NULL))) {
&gt;             ORTE_ERROR_LOG(rc);
&gt;         }
&gt; @@ -1037,7 +1068,7 @@
&gt;     OBJ_CONSTRUCT(&amp;proc, orte_proc_t);
&gt;     proc.name.jobid = job;
&gt;     proc.name.vpid = vpid;
&gt; -    proc.name.epoch = epoch;
&gt; +    ORTE_EPOCH_SET(proc.name.epoch,epoch);
&gt;     opal_pointer_array_add(&amp;cmd, &amp;proc);
&gt;     if (ORTE_SUCCESS != (rc = orte_odls.kill_local_procs(&amp;cmd))) {
&gt;         ORTE_ERROR_LOG(rc);
&gt; @@ -1082,20 +1113,21 @@
&gt;     return rc;
&gt; }
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt; int send_to_local_applications(opal_pointer_array_t *dead_names) {
&gt;     opal_buffer_t *buf;
&gt;     int ret;
&gt;     orte_process_name_t *name_item;
&gt;     int size, i;
&gt; 
&gt; -    OPAL_OUTPUT_VERBOSE((10, orte_errmgr_base.output,
&gt; -                &quot;%s Sending failure to local applications.&quot;,
&gt; -                ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt; -    
&gt;     buf = OBJ_NEW(opal_buffer_t);
&gt; 
&gt;     size = opal_pointer_array_get_size(dead_names);
&gt; 
&gt; +    OPAL_OUTPUT_VERBOSE((10, orte_errmgr_base.output,
&gt; +                &quot;%s Sending %d failure(s) to local applications.&quot;,
&gt; +                ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), size));
&gt; +    
&gt;     if (ORTE_SUCCESS != (ret = opal_dss.pack(buf, &amp;size, 1, ORTE_VPID))) {
&gt;         ORTE_ERROR_LOG(ret);
&gt;         OBJ_RELEASE(buf);
&gt; @@ -1122,4 +1154,5 @@
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; +#endif
&gt; 
&gt; 
&gt; Modified: trunk/orte/mca/ess/alps/ess_alps_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/alps/ess_alps_module.c	(original)
&gt; +++ trunk/orte/mca/ess/alps/ess_alps_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -363,8 +363,8 @@
&gt; 
&gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
&gt;     ORTE_PROC_MY_NAME-&gt;vpid = (orte_vpid_t) cnos_get_rank() + starting_vpid;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
&gt; +    ORTE_EPOCH_PRINT(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_INVALID);
&gt; +    ORTE_EPOCH_PRINT(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
&gt; 
&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
&gt;                          &quot;ess:alps set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt; 
&gt; Modified: trunk/orte/mca/ess/base/base.h
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/base/base.h	(original)
&gt; +++ trunk/orte/mca/ess/base/base.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -57,7 +57,11 @@
&gt; 
&gt; ORTE_DECLSPEC extern opal_list_t orte_ess_base_components_available;
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; ORTE_DECLSPEC orte_epoch_t orte_ess_base_proc_get_epoch(orte_process_name_t *proc);
&gt; +#else
&gt; +ORTE_DECLSPEC int orte_ess_base_proc_get_epoch(orte_process_name_t *proc);
&gt; +#endif
&gt; 
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; 
&gt; 
&gt; Modified: trunk/orte/mca/ess/base/ess_base_select.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/base/ess_base_select.c	(original)
&gt; +++ trunk/orte/mca/ess/base/ess_base_select.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -36,21 +36,19 @@
&gt;  * Generic function to retrieve the epoch of a specific process 
&gt;  * from the job data.
&gt;  */
&gt; +#if !ORTE_ENABLE_EPOCH
&gt; +int orte_ess_base_proc_get_epoch(orte_process_name_t *proc) {
&gt; +    return 0;
&gt; +}
&gt; +#else
&gt; orte_epoch_t orte_ess_base_proc_get_epoch(orte_process_name_t *proc) {
&gt;     orte_epoch_t epoch = ORTE_EPOCH_INVALID;
&gt; 
&gt; -#if !ORTE_DISABLE_FULL_SUPPORT
&gt;     epoch = orte_util_lookup_epoch(proc);
&gt; -#endif
&gt; -
&gt; -    OPAL_OUTPUT_VERBOSE((2, orte_ess_base_output,
&gt; -                         &quot;%s ess:generic: proc %s has epoch %d&quot;,
&gt; -                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
&gt; -                         ORTE_NAME_PRINT(proc),
&gt; -                         epoch));
&gt; 
&gt;     return epoch;
&gt; }
&gt; +#endif
&gt; 
&gt; int 
&gt; orte_ess_base_select(void)
&gt; 
&gt; Modified: trunk/orte/mca/ess/env/ess_env_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/env/ess_env_module.c	(original)
&gt; +++ trunk/orte/mca/ess/env/ess_env_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -392,8 +392,7 @@
&gt; 
&gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
&gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
&gt; 
&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
&gt;                          &quot;ess:env set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt; 
&gt; Modified: trunk/orte/mca/ess/ess.h
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/ess.h	(original)
&gt; +++ trunk/orte/mca/ess/ess.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -111,7 +111,11 @@
&gt;  * will get the most up to date version stored within the orte_proc_t struct.
&gt;  * Obviously the epoch of the proc that is passed in will be ignored.
&gt;  */
&gt; +#if ORTE_ENABLE_EPOCH
&gt; typedef orte_epoch_t (*orte_ess_base_module_proc_get_epoch_fn_t)(orte_process_name_t *proc);
&gt; +#else
&gt; +typedef int (*orte_ess_base_module_proc_get_epoch_fn_t)(orte_process_name_t *proc);
&gt; +#endif
&gt; 
&gt; /**
&gt;  * Update the pidmap
&gt; 
&gt; Modified: trunk/orte/mca/ess/generic/ess_generic_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/generic/ess_generic_module.c	(original)
&gt; +++ trunk/orte/mca/ess/generic/ess_generic_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -155,7 +155,7 @@
&gt;         goto error;
&gt;     }
&gt;     ORTE_PROC_MY_NAME-&gt;vpid = strtol(envar, NULL, 10);
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
&gt;                          &quot;%s completed name definition&quot;,
&gt; @@ -273,7 +273,7 @@
&gt;                 if (vpid == ORTE_PROC_MY_NAME-&gt;vpid) {
&gt;                     ORTE_PROC_MY_DAEMON-&gt;jobid = 0;
&gt;                     ORTE_PROC_MY_DAEMON-&gt;vpid = i;
&gt; -                    ORTE_PROC_MY_DAEMON-&gt;epoch = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +                    ORTE_EPOCH_SET(ORTE_PROC_MY_DAEMON-&gt;epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt;                 }
&gt;                 OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
&gt;                                      &quot;%s node %d name %s rank %s&quot;,
&gt; @@ -304,7 +304,7 @@
&gt;                     if (vpid == ORTE_PROC_MY_NAME-&gt;vpid) {
&gt;                         ORTE_PROC_MY_DAEMON-&gt;jobid = 0;
&gt;                         ORTE_PROC_MY_DAEMON-&gt;vpid = i;
&gt; -                        ORTE_PROC_MY_DAEMON-&gt;epoch = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +                        ORTE_EPOCH_SET(ORTE_PROC_MY_DAEMON-&gt;epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt;                     }
&gt;                     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
&gt;                                          &quot;%s node %d name %s rank %d&quot;,
&gt; 
&gt; Modified: trunk/orte/mca/ess/hnp/ess_hnp_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/hnp/ess_hnp_module.c	(original)
&gt; +++ trunk/orte/mca/ess/hnp/ess_hnp_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -494,7 +494,7 @@
&gt;     proc = OBJ_NEW(orte_proc_t);
&gt;     proc-&gt;name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     proc-&gt;name.vpid = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -    proc-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     proc-&gt;pid = orte_process_info.pid;
&gt;     proc-&gt;rml_uri = orte_rml.get_contact_info();
&gt; 
&gt; Modified: trunk/orte/mca/ess/lsf/ess_lsf_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/lsf/ess_lsf_module.c	(original)
&gt; +++ trunk/orte/mca/ess/lsf/ess_lsf_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -357,8 +357,7 @@
&gt; 
&gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
&gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
&gt; 
&gt;     /* fix up the base name and make it the &quot;real&quot; name */
&gt;     lsf_nodeid = atoi(getenv(&quot;LSF_PM_TASKID&quot;));
&gt; 
&gt; Modified: trunk/orte/mca/ess/singleton/ess_singleton_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/singleton/ess_singleton_module.c	(original)
&gt; +++ trunk/orte/mca/ess/singleton/ess_singleton_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -188,7 +188,7 @@
&gt;         /* set the name */
&gt;         ORTE_PROC_MY_NAME-&gt;jobid = 0xffff0000 &amp; ((uint32_t)jobfam &lt;&lt; 16);
&gt;         ORTE_PROC_MY_NAME-&gt;vpid = 0;
&gt; -        ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_MIN;
&gt; +        ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     } else {
&gt;         /*
&gt; 
&gt; Modified: trunk/orte/mca/ess/slave/ess_slave_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/slave/ess_slave_module.c	(original)
&gt; +++ trunk/orte/mca/ess/slave/ess_slave_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -280,8 +280,7 @@
&gt; 
&gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
&gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
&gt; 
&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
&gt;                          &quot;ess:slave set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt; 
&gt; Modified: trunk/orte/mca/ess/slurm/ess_slurm_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/slurm/ess_slurm_module.c	(original)
&gt; +++ trunk/orte/mca/ess/slurm/ess_slurm_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -368,8 +368,7 @@
&gt;     /* fix up the vpid and make it the &quot;real&quot; vpid */
&gt;     slurm_nodeid = atoi(getenv(&quot;SLURM_NODEID&quot;));
&gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid + slurm_nodeid;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
&gt; 
&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
&gt;                          &quot;ess:slurm set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt; 
&gt; Modified: trunk/orte/mca/ess/slurmd/ess_slurmd_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/slurmd/ess_slurmd_module.c	(original)
&gt; +++ trunk/orte/mca/ess/slurmd/ess_slurmd_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -195,7 +195,7 @@
&gt;     }
&gt;     ORTE_PROC_MY_NAME-&gt;vpid = strtol(envar, NULL, 10);
&gt; #endif
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_MIN);
&gt;     /* get our local rank */
&gt;     if (NULL == (envar = getenv(&quot;SLURM_LOCALID&quot;))) {
&gt;         error = &quot;could not get SLURM_LOCALID&quot;;
&gt; @@ -260,7 +260,7 @@
&gt;     nodeid = strtol(envar, NULL, 10);
&gt;     ORTE_PROC_MY_DAEMON-&gt;jobid = 0;
&gt;     ORTE_PROC_MY_DAEMON-&gt;vpid = nodeid;
&gt; -    ORTE_PROC_MY_DAEMON-&gt;epoch = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_DAEMON-&gt;epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt; 
&gt;     /* get the number of ppn */
&gt;     if (NULL == (tasks_per_node = getenv(&quot;SLURM_STEP_TASKS_PER_NODE&quot;))) {
&gt; 
&gt; Modified: trunk/orte/mca/ess/tm/ess_tm_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/ess/tm/ess_tm_module.c	(original)
&gt; +++ trunk/orte/mca/ess/tm/ess_tm_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -364,7 +364,7 @@
&gt; 
&gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
&gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME));
&gt; 
&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
&gt;                          &quot;ess:tm set name to %s&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt; 
&gt; Modified: trunk/orte/mca/filem/rsh/filem_rsh_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/filem/rsh/filem_rsh_module.c	(original)
&gt; +++ trunk/orte/mca/filem/rsh/filem_rsh_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -1097,11 +1097,11 @@
&gt;     if( NULL != proc_set ) {
&gt;         wp_item-&gt;proc_set.source.jobid = proc_set-&gt;source.jobid;
&gt;         wp_item-&gt;proc_set.source.vpid  = proc_set-&gt;source.vpid;
&gt; -        wp_item-&gt;proc_set.source.epoch = proc_set-&gt;source.epoch;
&gt; +        ORTE_EPOCH_SET(wp_item-&gt;proc_set.source.epoch,proc_set-&gt;source.epoch);
&gt; 
&gt;         wp_item-&gt;proc_set.sink.jobid = proc_set-&gt;sink.jobid;
&gt;         wp_item-&gt;proc_set.sink.vpid  = proc_set-&gt;sink.vpid;
&gt; -        wp_item-&gt;proc_set.sink.epoch = proc_set-&gt;sink.epoch;
&gt; +        ORTE_EPOCH_SET(wp_item-&gt;proc_set.sink.epoch,proc_set-&gt;sink.epoch);
&gt;     }
&gt;     /* Copy the File Set */
&gt;     if( NULL != file_set ) {
&gt; @@ -1396,7 +1396,7 @@
&gt;             wp_item = OBJ_NEW(orte_filem_rsh_work_pool_item_t);
&gt;             wp_item-&gt;proc_set.source.jobid = sender-&gt;jobid;
&gt;             wp_item-&gt;proc_set.source.vpid  = sender-&gt;vpid;
&gt; -            wp_item-&gt;proc_set.source.epoch = sender-&gt;epoch;
&gt; +            ORTE_EPOCH_SET(wp_item-&gt;proc_set.source.epoch,sender-&gt;epoch);
&gt; 
&gt;             opal_list_append(&amp;work_pool_waiting, &amp;(wp_item-&gt;super));
&gt;         }
&gt; 
&gt; Modified: trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c	(original)
&gt; +++ trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -168,8 +168,7 @@
&gt;     if (vpids[0] == ORTE_PROC_MY_NAME-&gt;vpid) {
&gt;         /* I send first */
&gt;         peer.vpid = vpids[1];
&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
&gt; 
&gt;         /* setup a temp buffer so I can inform the other side as to the
&gt;          * number of entries in my buffer
&gt; @@ -226,8 +225,7 @@
&gt;         opal_dss.pack(&amp;buf, &amp;num_entries, 1, OPAL_INT32);
&gt;         opal_dss.copy_payload(&amp;buf, sendbuf);
&gt;         peer.vpid = vpids[0];
&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
&gt; 
&gt;         OPAL_OUTPUT_VERBOSE((5, orte_grpcomm_base.output,
&gt;                              &quot;%s grpcomm:coll:two-proc sending to %s&quot;,
&gt; @@ -320,8 +318,7 @@
&gt;         /* first send my current contents */
&gt;         nv = (rank - distance + np) % np;
&gt;         peer.vpid = vpids[nv];
&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
&gt; 
&gt;         OBJ_CONSTRUCT(&amp;buf, opal_buffer_t);
&gt;         opal_dss.pack(&amp;buf, &amp;total_entries, 1, OPAL_INT32);
&gt; @@ -340,8 +337,7 @@
&gt;         num_recvd = 0;
&gt;         nv = (rank + distance) % np;
&gt;         peer.vpid = vpids[nv];
&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
&gt; 
&gt;         OBJ_CONSTRUCT(&amp;bucket, opal_buffer_t);
&gt;         if (ORTE_SUCCESS != (rc = orte_rml.recv_buffer_nb(&amp;peer,
&gt; @@ -439,8 +435,7 @@
&gt;         /* first send my current contents */
&gt;         nv = rank ^ distance;
&gt;         peer.vpid = vpids[nv];
&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
&gt; 
&gt;         OBJ_CONSTRUCT(&amp;buf, opal_buffer_t);
&gt;         opal_dss.pack(&amp;buf, &amp;total_entries, 1, OPAL_INT32);
&gt; @@ -646,8 +641,7 @@
&gt;         proc.jobid = jobid;
&gt;         proc.vpid = 0;
&gt;         while (proc.vpid &lt; jobdat-&gt;num_procs &amp;&amp; 0 &lt; opal_list_get_size(&amp;daemon_tree)) {
&gt; -            proc.epoch = ORTE_EPOCH_INVALID;
&gt; -            proc.epoch = orte_ess.proc_get_epoch(&amp;proc);
&gt; +            ORTE_EPOCH_SET(proc.epoch,orte_ess.proc_get_epoch(&amp;proc));
&gt; 
&gt;             /* get the daemon that hosts this proc */
&gt;             daemonvpid = orte_ess.proc_get_daemon(&amp;proc);
&gt; @@ -713,8 +707,7 @@
&gt;         /* send it */
&gt;         my_parent.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;         my_parent.vpid = orte_routed.get_routing_tree(NULL);
&gt; -        my_parent.epoch = ORTE_EPOCH_INVALID;
&gt; -        my_parent.epoch = orte_ess.proc_get_epoch(&amp;my_parent);
&gt; +        ORTE_EPOCH_SET(my_parent.epoch,orte_ess.proc_get_epoch(&amp;my_parent));
&gt; 
&gt;         OPAL_OUTPUT_VERBOSE((5, orte_grpcomm_base.output,
&gt;                              &quot;%s grpcomm:base:daemon_coll: daemon collective not the HNP - sending to parent %s&quot;,
&gt; 
&gt; Modified: trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c	(original)
&gt; +++ trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -95,7 +95,7 @@
&gt; 
&gt;     my_local_rank_zero_proc.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     my_local_rank_zero_proc.vpid = ORTE_VPID_INVALID;
&gt; -    my_local_rank_zero_proc.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(my_local_rank_zero_proc.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     if (ORTE_SUCCESS != (rc = orte_grpcomm_base_modex_init())) {
&gt;         ORTE_ERROR_LOG(rc);
&gt; @@ -270,7 +270,7 @@
&gt;         proc.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;         for (v=0; v &lt; orte_process_info.num_procs; v++) {
&gt;             proc.vpid = v;
&gt; -            proc.epoch = orte_util_lookup_epoch(&amp;proc);
&gt; +            ORTE_EPOCH_SET(proc.epoch,orte_util_lookup_epoch(&amp;proc));
&gt; 
&gt;             /* is this proc local_rank=0 on its node? */
&gt;             if (0 == my_local_rank &amp;&amp; 0 == orte_ess.get_local_rank(&amp;proc)) {
&gt; @@ -285,7 +285,7 @@
&gt;             nm = OBJ_NEW(orte_namelist_t);
&gt;             nm-&gt;name.jobid = proc.jobid;
&gt;             nm-&gt;name.vpid = proc.vpid;
&gt; -            nm-&gt;name.epoch = proc.epoch;
&gt; +            ORTE_EPOCH_SET(nm-&gt;name.epoch,proc.epoch);
&gt; 
&gt;             opal_list_append(&amp;my_local_peers, &amp;nm-&gt;item);
&gt;             /* if I am not local_rank=0, is this one? */
&gt; @@ -293,7 +293,7 @@
&gt;                 0 == orte_ess.get_local_rank(&amp;proc)) {
&gt;                 my_local_rank_zero_proc.jobid = proc.jobid;
&gt;                 my_local_rank_zero_proc.vpid = proc.vpid;
&gt; -                my_local_rank_zero_proc.epoch = proc.epoch;
&gt; +                ORTE_EPOCH_SET(my_local_rank_zero_proc.epoch,proc.epoch);
&gt;             }
&gt;         }
&gt; 
&gt; 
&gt; Modified: trunk/orte/mca/iof/base/base.h
&gt; ==============================================================================
&gt; --- trunk/orte/mca/iof/base/base.h	(original)
&gt; +++ trunk/orte/mca/iof/base/base.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -135,7 +135,7 @@
&gt;         ep = OBJ_NEW(orte_iof_sink_t);                              \
&gt;         ep-&gt;name.jobid = (nm)-&gt;jobid;                               \
&gt;         ep-&gt;name.vpid = (nm)-&gt;vpid;                                 \
&gt; -        ep-&gt;name.epoch = (nm)-&gt;epoch;                               \
&gt; +        ORTE_EPOCH_SET(ep-&gt;name.epoch,(nm)-&gt;epoch);                 \
&gt;         ep-&gt;tag = (tg);                                             \
&gt;         if (0 &lt;= (fid)) {                                           \
&gt;             ep-&gt;wev-&gt;fd = (fid);                                    \
&gt; @@ -169,7 +169,7 @@
&gt;         rev = OBJ_NEW(orte_iof_read_event_t);                       \
&gt;         rev-&gt;name.jobid = (nm)-&gt;jobid;                              \
&gt;         rev-&gt;name.vpid = (nm)-&gt;vpid;                                \
&gt; -        rev-&gt;name.epoch = (nm)-&gt;epoch;                              \
&gt; +        ORTE_EPOCH_SET(rev-&gt;name.epoch,(nm)-&gt;epoch);                \
&gt;         rev-&gt;tag = (tg);                                            \
&gt;         rev-&gt;fd = (fid);                                            \
&gt;         *(rv) = rev;                                                \
&gt; @@ -194,7 +194,7 @@
&gt;         ep = OBJ_NEW(orte_iof_sink_t);                              \
&gt;         ep-&gt;name.jobid = (nm)-&gt;jobid;                               \
&gt;         ep-&gt;name.vpid = (nm)-&gt;vpid;                                 \
&gt; -        ep-&gt;name.epoch = (nm)-&gt;epoch;                               \
&gt; +        ORTE_EPOCH_SET(ep-&gt;name.epoch,(nm)-&gt;epoch);                 \
&gt;         ep-&gt;tag = (tg);                                             \
&gt;         if (0 &lt;= (fid)) {                                           \
&gt;             ep-&gt;wev-&gt;fd = (fid);                                    \
&gt; @@ -215,7 +215,7 @@
&gt;         rev = OBJ_NEW(orte_iof_read_event_t);                       \
&gt;         rev-&gt;name.jobid = (nm)-&gt;jobid;                              \
&gt;         rev-&gt;name.vpid = (nm)-&gt;vpid;                                \
&gt; -        rev-&gt;name.epoch= (nm)-&gt;epoch;                               \
&gt; +        ORTE_EPOCH_SET(rev-&gt;name.epoch,(nm)-&gt;epoch);                \
&gt;         rev-&gt;tag = (tg);                                            \
&gt;         *(rv) = rev;                                                \
&gt;         opal_event_set(opal_event_base,                             \
&gt; 
&gt; Modified: trunk/orte/mca/iof/base/iof_base_open.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/iof/base/iof_base_open.c	(original)
&gt; +++ trunk/orte/mca/iof/base/iof_base_open.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -91,7 +91,7 @@
&gt; {
&gt;     ptr-&gt;daemon.jobid = ORTE_JOBID_INVALID;
&gt;     ptr-&gt;daemon.vpid = ORTE_VPID_INVALID;
&gt; -    ptr-&gt;daemon.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(ptr-&gt;daemon.epoch,ORTE_EPOCH_MIN);
&gt;     ptr-&gt;wev = OBJ_NEW(orte_iof_write_event_t);
&gt; }
&gt; static void orte_iof_base_sink_destruct(orte_iof_sink_t* ptr)
&gt; 
&gt; Modified: trunk/orte/mca/iof/hnp/iof_hnp.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/iof/hnp/iof_hnp.c	(original)
&gt; +++ trunk/orte/mca/iof/hnp/iof_hnp.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -186,7 +186,7 @@
&gt;         proct = OBJ_NEW(orte_iof_proc_t);
&gt;         proct-&gt;name.jobid = dst_name-&gt;jobid;
&gt;         proct-&gt;name.vpid = dst_name-&gt;vpid;
&gt; -        proct-&gt;name.epoch = dst_name-&gt;epoch;
&gt; +        ORTE_EPOCH_SET(proct-&gt;name.epoch,dst_name-&gt;epoch);
&gt;         opal_list_append(&amp;mca_iof_hnp_component.procs, &amp;proct-&gt;super);
&gt;         /* see if we are to output to a file */
&gt;         if (NULL != orte_output_filename) {
&gt; @@ -281,8 +281,7 @@
&gt;                                  &amp;mca_iof_hnp_component.sinks);
&gt;             sink-&gt;daemon.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;             sink-&gt;daemon.vpid = proc-&gt;node-&gt;daemon-&gt;name.vpid;
&gt; -            sink-&gt;daemon.epoch = ORTE_EPOCH_INVALID;
&gt; -            sink-&gt;daemon.epoch = orte_ess.proc_get_epoch(&amp;sink-&gt;daemon);
&gt; +            ORTE_EPOCH_SET(sink-&gt;daemon.epoch,orte_ess.proc_get_epoch(&amp;sink-&gt;daemon));
&gt;         }
&gt;     }
&gt; 
&gt; @@ -389,7 +388,7 @@
&gt;                          &amp;mca_iof_hnp_component.sinks);
&gt;     sink-&gt;daemon.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     sink-&gt;daemon.vpid = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -    sink-&gt;daemon.epoch = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(sink-&gt;daemon.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; Modified: trunk/orte/mca/iof/hnp/iof_hnp_receive.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/iof/hnp/iof_hnp_receive.c	(original)
&gt; +++ trunk/orte/mca/iof/hnp/iof_hnp_receive.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -109,21 +109,21 @@
&gt;                                  NULL, &amp;mca_iof_hnp_component.sinks);
&gt;             sink-&gt;daemon.jobid = mev-&gt;sender.jobid;
&gt;             sink-&gt;daemon.vpid = mev-&gt;sender.vpid;
&gt; -            sink-&gt;daemon.epoch = mev-&gt;sender.epoch;
&gt; +            ORTE_EPOCH_SET(sink-&gt;daemon.epoch,mev-&gt;sender.epoch);
&gt;         }
&gt;         if (ORTE_IOF_STDERR &amp; stream) {
&gt;             ORTE_IOF_SINK_DEFINE(&amp;sink, &amp;origin, -1, ORTE_IOF_STDERR,
&gt;                                  NULL, &amp;mca_iof_hnp_component.sinks);
&gt;             sink-&gt;daemon.jobid = mev-&gt;sender.jobid;
&gt;             sink-&gt;daemon.vpid = mev-&gt;sender.vpid;
&gt; -            sink-&gt;daemon.epoch = mev-&gt;sender.epoch;
&gt; +            ORTE_EPOCH_SET(sink-&gt;daemon.epoch,mev-&gt;sender.epoch);
&gt;         }
&gt;         if (ORTE_IOF_STDDIAG &amp; stream) {
&gt;             ORTE_IOF_SINK_DEFINE(&amp;sink, &amp;origin, -1, ORTE_IOF_STDDIAG,
&gt;                                  NULL, &amp;mca_iof_hnp_component.sinks);
&gt;             sink-&gt;daemon.jobid = mev-&gt;sender.jobid;
&gt;             sink-&gt;daemon.vpid = mev-&gt;sender.vpid;
&gt; -            sink-&gt;daemon.epoch = mev-&gt;sender.epoch;
&gt; +            ORTE_EPOCH_SET(sink-&gt;daemon.epoch,mev-&gt;sender.epoch);
&gt;         }
&gt;         goto CLEAN_RETURN;
&gt;     }
&gt; 
&gt; Modified: trunk/orte/mca/iof/orted/iof_orted.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/iof/orted/iof_orted.c	(original)
&gt; +++ trunk/orte/mca/iof/orted/iof_orted.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -163,7 +163,7 @@
&gt;     proct = OBJ_NEW(orte_iof_proc_t);
&gt;     proct-&gt;name.jobid = dst_name-&gt;jobid;
&gt;     proct-&gt;name.vpid = dst_name-&gt;vpid;
&gt; -    proct-&gt;name.epoch = dst_name-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(proct-&gt;name.epoch,dst_name-&gt;epoch);
&gt;     opal_list_append(&amp;mca_iof_orted_component.procs, &amp;proct-&gt;super);
&gt;     /* see if we are to output to a file */
&gt;     if (NULL != orte_output_filename) {
&gt; 
&gt; Modified: trunk/orte/mca/odls/base/odls_base_default_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/odls/base/odls_base_default_fns.c	(original)
&gt; +++ trunk/orte/mca/odls/base/odls_base_default_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -734,8 +734,7 @@
&gt;     proc.jobid = jobdat-&gt;jobid;
&gt;     for (j=0; j &lt; jobdat-&gt;num_procs; j++) {
&gt;         proc.vpid = j;
&gt; -        proc.epoch = ORTE_EPOCH_INVALID;
&gt; -        proc.epoch = orte_ess.proc_get_epoch(&amp;proc);
&gt; +        ORTE_EPOCH_SET(proc.epoch,orte_ess.proc_get_epoch(&amp;proc));
&gt;         /* get the vpid of the daemon that is to host this proc */
&gt;         if (ORTE_VPID_INVALID == (host_daemon = orte_ess.proc_get_daemon(&amp;proc))) {
&gt;             ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
&gt; @@ -1044,6 +1043,7 @@
&gt;     free(param);
&gt;     free(value);
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     /* setup the epoch */
&gt;     if (ORTE_SUCCESS != (rc = orte_util_convert_epoch_to_string(&amp;value, child-&gt;name-&gt;epoch))) {
&gt;         ORTE_ERROR_LOG(rc);
&gt; @@ -1057,6 +1057,7 @@
&gt;     opal_setenv(param, value, true, env);
&gt;     free(param);
&gt;     free(value);
&gt; +#endif
&gt; 
&gt;     /* setup the vpid */
&gt;     if (ORTE_SUCCESS != (rc = orte_util_convert_vpid_to_string(&amp;value, child-&gt;name-&gt;vpid))) {
&gt; @@ -2721,7 +2722,7 @@
&gt;         OBJ_CONSTRUCT(&amp;proctmp, orte_proc_t);
&gt;         proctmp.name.jobid = ORTE_JOBID_WILDCARD;
&gt;         proctmp.name.vpid = ORTE_VPID_WILDCARD;
&gt; -        proctmp.name.epoch = ORTE_EPOCH_WILDCARD;
&gt; +        ORTE_EPOCH_SET(proctmp.name.epoch,ORTE_EPOCH_WILDCARD);
&gt;         opal_pointer_array_add(&amp;procarray, &amp;proctmp);
&gt;         procptr = &amp;procarray;
&gt;         do_cleanup = true;
&gt; 
&gt; Modified: trunk/orte/mca/odls/base/odls_base_open.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/odls/base/odls_base_open.c	(original)
&gt; +++ trunk/orte/mca/odls/base/odls_base_open.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -187,7 +187,7 @@
&gt;             if (-1 == rank) {
&gt;                 /* wildcard */
&gt;                 nm-&gt;name.vpid = ORTE_VPID_WILDCARD;
&gt; -                nm-&gt;name.epoch = ORTE_EPOCH_WILDCARD;
&gt; +                ORTE_EPOCH_SET(nm-&gt;name.epoch,ORTE_EPOCH_WILDCARD);
&gt;             } else if (rank &lt; 0) {
&gt;                 /* error out on bozo case */
&gt;                 orte_show_help(&quot;help-odls-base.txt&quot;,
&gt; @@ -200,8 +200,7 @@
&gt;                  * will be in the job - we'll check later
&gt;                  */
&gt;                 nm-&gt;name.vpid = rank;
&gt; -                nm-&gt;name.epoch = ORTE_EPOCH_INVALID;
&gt; -                nm-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;nm-&gt;name);
&gt; +                ORTE_EPOCH_SET(nm-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;nm-&gt;name));
&gt;             }
&gt;             opal_list_append(&amp;orte_odls_globals.xterm_ranks, &amp;nm-&gt;item);
&gt;         }
&gt; 
&gt; Modified: trunk/orte/mca/odls/base/odls_base_state.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/odls/base/odls_base_state.c	(original)
&gt; +++ trunk/orte/mca/odls/base/odls_base_state.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -77,17 +77,17 @@
&gt;         /* if I am the HNP, then use me as the source */
&gt;         p_set-&gt;source.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;         p_set-&gt;source.vpid  = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -        p_set-&gt;source.epoch = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt;     }
&gt;     else {
&gt;         /* otherwise, set the HNP as the source */
&gt;         p_set-&gt;source.jobid = ORTE_PROC_MY_HNP-&gt;jobid;
&gt;         p_set-&gt;source.vpid  = ORTE_PROC_MY_HNP-&gt;vpid;
&gt; -        p_set-&gt;source.epoch = ORTE_PROC_MY_HNP-&gt;epoch;
&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,ORTE_PROC_MY_HNP-&gt;epoch);
&gt;     }
&gt;     p_set-&gt;sink.jobid   = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     p_set-&gt;sink.vpid    = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -    p_set-&gt;sink.epoch   = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(p_set-&gt;sink.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt; 
&gt;     opal_list_append(&amp;(filem_request-&gt;process_sets), &amp;(p_set-&gt;super) );
&gt; 
&gt; 
&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp_msg.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/oob/tcp/oob_tcp_msg.c	(original)
&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp_msg.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -137,6 +137,7 @@
&gt; bool mca_oob_tcp_msg_send_handler(mca_oob_tcp_msg_t* msg, struct mca_oob_tcp_peer_t * peer)
&gt; {
&gt;     int rc;
&gt; +
&gt;     while(1) {
&gt;         rc = writev(peer-&gt;peer_sd, msg-&gt;msg_rwptr, msg-&gt;msg_rwnum);
&gt;         if(rc &lt; 0) {
&gt; @@ -338,6 +339,7 @@
&gt;     orte_process_name_t src = msg-&gt;msg_hdr.msg_src;
&gt; 
&gt;     OPAL_THREAD_LOCK(&amp;mca_oob_tcp_component.tcp_lock);
&gt; +
&gt;     if (orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;peer-&gt;peer_name, &amp;src) != OPAL_EQUAL) {
&gt;         opal_hash_table_remove_value_uint64(&amp;mca_oob_tcp_component.tcp_peers, 
&gt;                                             orte_util_hash_name(&amp;peer-&gt;peer_name));
&gt; 
&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp_peer.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/oob/tcp/oob_tcp_peer.c	(original)
&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp_peer.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -903,6 +903,11 @@
&gt; static void mca_oob_tcp_peer_recv_handler(int sd, short flags, void* user)
&gt; {
&gt;     mca_oob_tcp_peer_t* peer = (mca_oob_tcp_peer_t *)user;
&gt; +
&gt; +    if (orte_abnormal_term_ordered) {
&gt; +        return;
&gt; +    }
&gt; +
&gt;     OPAL_THREAD_LOCK(&amp;peer-&gt;peer_lock);
&gt;     switch(peer-&gt;peer_state) {
&gt;         case MCA_OOB_TCP_CONNECT_ACK: 
&gt; 
&gt; Modified: trunk/orte/mca/plm/base/plm_base_jobid.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/plm/base/plm_base_jobid.c	(original)
&gt; +++ trunk/orte/mca/plm/base/plm_base_jobid.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -62,12 +62,12 @@
&gt;     /* set the name */
&gt;     ORTE_PROC_MY_NAME-&gt;jobid = 0xffff0000 &amp; ((uint32_t)jobfam &lt;&lt; 16);
&gt;     ORTE_PROC_MY_NAME-&gt;vpid = 0;
&gt; -    ORTE_PROC_MY_NAME-&gt;epoch= ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_NAME-&gt;epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     /* copy it to the HNP field */
&gt;     ORTE_PROC_MY_HNP-&gt;jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     ORTE_PROC_MY_HNP-&gt;vpid = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -    ORTE_PROC_MY_HNP-&gt;epoch = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_HNP-&gt;epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt; 
&gt;     /* done */
&gt;     return ORTE_SUCCESS;
&gt; 
&gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c	(original)
&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -377,8 +377,7 @@
&gt;     /* push stdin - the IOF will know what to do with the specified target */
&gt;     name.jobid = job;
&gt;     name.vpid = jdata-&gt;stdin_target;
&gt; -    name.epoch = ORTE_EPOCH_INVALID;
&gt; -    name.epoch = orte_ess.proc_get_epoch(&amp;name);
&gt; +    ORTE_EPOCH_SET(name.epoch,orte_ess.proc_get_epoch(&amp;name));
&gt; 
&gt;     if (ORTE_SUCCESS != (rc = orte_iof.push(&amp;name, ORTE_IOF_STDIN, 0))) {
&gt;         ORTE_ERROR_LOG(rc);
&gt; 
&gt; Modified: trunk/orte/mca/plm/base/plm_base_orted_cmds.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/plm/base/plm_base_orted_cmds.c	(original)
&gt; +++ trunk/orte/mca/plm/base/plm_base_orted_cmds.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -163,8 +163,7 @@
&gt;                 continue;
&gt;             }
&gt;             peer.vpid = v;
&gt; -            peer.epoch = ORTE_EPOCH_INVALID;
&gt; -            peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
&gt; +            ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
&gt; 
&gt;             /* don't worry about errors on the send here - just
&gt;              * issue it and keep going
&gt; @@ -242,7 +241,7 @@
&gt;     OBJ_CONSTRUCT(&amp;proc, orte_proc_t);
&gt;     proc.name.jobid = jobid;
&gt;     proc.name.vpid = ORTE_VPID_WILDCARD;
&gt; -    proc.name.epoch  = ORTE_EPOCH_WILDCARD;
&gt; +    ORTE_EPOCH_SET(proc.name.epoch,ORTE_EPOCH_WILDCARD);
&gt;     opal_pointer_array_add(&amp;procs, &amp;proc);
&gt;     if (ORTE_SUCCESS != (rc = orte_plm_base_orted_kill_local_procs(&amp;procs))) {
&gt;         ORTE_ERROR_LOG(rc);
&gt; @@ -340,8 +339,7 @@
&gt;                 continue;
&gt;             }
&gt;             peer.vpid = v;
&gt; -            peer.epoch = ORTE_EPOCH_INVALID;
&gt; -            peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
&gt; +            ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
&gt;             /* check to see if this daemon is known to be &quot;dead&quot; */
&gt;             if (proc-&gt;state &gt; ORTE_PROC_STATE_UNTERMINATED) {
&gt;                 /* don't try to send this */
&gt; 
&gt; Modified: trunk/orte/mca/plm/base/plm_base_receive.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/plm/base/plm_base_receive.c	(original)
&gt; +++ trunk/orte/mca/plm/base/plm_base_receive.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -146,7 +146,9 @@
&gt;     orte_job_t *jdata, *parent;
&gt;     opal_buffer_t answer;
&gt;     orte_vpid_t vpid;
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     orte_epoch_t epoch;
&gt; +#endif
&gt;     orte_proc_t *proc;
&gt;     orte_proc_state_t state;
&gt;     orte_exit_code_t exit_code;
&gt; @@ -394,8 +396,7 @@
&gt;                         break;
&gt;                     }
&gt;                     name.vpid = vpid;
&gt; -                    name.epoch = ORTE_EPOCH_INVALID;
&gt; -                    name.epoch = orte_ess.proc_get_epoch(&amp;name);
&gt; +                    ORTE_EPOCH_SET(name.epoch,orte_ess.proc_get_epoch(&amp;name));
&gt; 
&gt;                     /* unpack the pid */
&gt;                     count = 1;
&gt; @@ -488,9 +489,11 @@
&gt;                 }
&gt;                 name.vpid = vpid;
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;                 count=1;
&gt;                 opal_dss.unpack(msgpkt-&gt;buffer, &amp;epoch, &amp;count, ORTE_EPOCH);
&gt;                 name.epoch = epoch;
&gt; +#endif
&gt; 
&gt;                 OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
&gt;                                      &quot;%s plm:base:receive Described rank %s&quot;,
&gt; 
&gt; Modified: trunk/orte/mca/plm/base/plm_base_rsh_support.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/plm/base/plm_base_rsh_support.c	(original)
&gt; +++ trunk/orte/mca/plm/base/plm_base_rsh_support.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -1527,7 +1527,9 @@
&gt; {
&gt;     char *param, *path, *tmp, *cmd, *basename, *dest_dir;
&gt;     int i;
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     orte_epoch_t epoch;
&gt; +#endif
&gt;     orte_process_name_t proc;
&gt; 
&gt;     /* if a prefix is set, pass it to the bootproxy in a special way */
&gt; @@ -1638,6 +1640,7 @@
&gt;     opal_setenv(&quot;OMPI_COMM_WORLD_RANK&quot;, cmd, true, argv);
&gt;     free(cmd);
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     /* set the epoch */
&gt;     proc.jobid = jobid;
&gt;     proc.vpid = vpid;
&gt; @@ -1648,6 +1651,7 @@
&gt;     opal_setenv(param, cmd, true, argv);
&gt;     free(param);
&gt;     free(cmd);
&gt; +#endif
&gt; 
&gt;     /* set the number of procs */
&gt;     asprintf(&amp;cmd, &quot;%d&quot;, (int)num_procs);
&gt; 
&gt; Modified: trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	(original)
&gt; +++ trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -33,12 +33,14 @@
&gt; #include &quot;orte/mca/ess/ess.h&quot;
&gt; #include &quot;opal/mca/sysinfo/sysinfo_types.h&quot;
&gt; 
&gt; +#include &quot;orte/types.h&quot;
&gt; #include &quot;orte/util/show_help.h&quot;
&gt; #include &quot;orte/util/name_fns.h&quot;
&gt; #include &quot;orte/runtime/orte_globals.h&quot;
&gt; #include &quot;orte/util/hostfile/hostfile.h&quot;
&gt; #include &quot;orte/util/dash_host/dash_host.h&quot;
&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
&gt; 
&gt; #include &quot;orte/mca/rmaps/base/rmaps_private.h&quot;
&gt; #include &quot;orte/mca/rmaps/base/base.h&quot;
&gt; @@ -454,7 +456,7 @@
&gt;          */
&gt; 
&gt;         /* We do set the epoch here since they all start with the same value. */
&gt; -        proc-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;         proc-&gt;app_idx = app_idx;
&gt;         OPAL_OUTPUT_VERBOSE((5, orte_rmaps_base.rmaps_output,
&gt; @@ -559,11 +561,12 @@
&gt;                         }
&gt;                     }
&gt;                     proc-&gt;name.vpid = vpid;
&gt; -                    proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
&gt; -                    proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
&gt; +                    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
&gt; +                    ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
&gt; +                    
&gt;                     /* If there is an invalid epoch here, it's because it doesn't exist yet. */
&gt; -                    if (ORTE_NODE_RANK_INVALID == proc-&gt;name.epoch) {
&gt; -                        proc-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +                    if (0 == ORTE_EPOCH_CMP(ORTE_EPOCH_INVALID,proc-&gt;name.epoch)) {
&gt; +                        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt;                     }
&gt;                 }
&gt;                 if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;name.vpid)) {
&gt; @@ -601,8 +604,8 @@
&gt;                         }
&gt;                     }
&gt;                     proc-&gt;name.vpid = vpid;
&gt; -                    proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
&gt; -                    proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
&gt; +                    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
&gt; +                    ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
&gt;                 }
&gt;                 if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;name.vpid)) {
&gt;                     if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs, proc-&gt;name.vpid, proc))) {
&gt; @@ -835,7 +838,7 @@
&gt;                 return ORTE_ERR_OUT_OF_RESOURCE;
&gt;             }
&gt;             proc-&gt;name.vpid = daemons-&gt;num_procs;  /* take the next available vpid */
&gt; -            proc-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +            ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt;             proc-&gt;node = node;
&gt;             proc-&gt;nodename = node-&gt;name;
&gt;             OPAL_OUTPUT_VERBOSE((5, orte_rmaps_base.rmaps_output,
&gt; @@ -1014,8 +1017,8 @@
&gt;             return ORTE_ERR_OUT_OF_RESOURCE;
&gt;         }
&gt;         proc-&gt;name.vpid = jdata-&gt;num_procs;  /* take the next available vpid */
&gt; -        proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
&gt; -        proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
&gt; +        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
&gt; +        ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
&gt;         proc-&gt;node = node;
&gt;         proc-&gt;nodename = node-&gt;name;
&gt;         OPAL_OUTPUT_VERBOSE((5, orte_rmaps_base.rmaps_output,
&gt; 
&gt; Modified: trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c	(original)
&gt; +++ trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -502,8 +502,7 @@
&gt;             }
&gt;             proc-&gt;name.vpid = rank;
&gt;             /* Either init or update the epoch. */
&gt; -            proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
&gt; -            proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
&gt; +            ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
&gt; 
&gt;             proc-&gt;slot_list = strdup(rfmap-&gt;slot_list);
&gt;             /* insert the proc into the proper place */
&gt; 
&gt; Modified: trunk/orte/mca/rmaps/seq/rmaps_seq.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/rmaps/seq/rmaps_seq.c	(original)
&gt; +++ trunk/orte/mca/rmaps/seq/rmaps_seq.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -235,8 +235,7 @@
&gt;             }
&gt;             /* assign the vpid */
&gt;             proc-&gt;name.vpid = vpid++;
&gt; -            proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
&gt; -            proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
&gt; +            ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
&gt; 
&gt;             /* add to the jdata proc array */
&gt;             if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs, proc-&gt;name.vpid, proc))) {
&gt; 
&gt; Modified: trunk/orte/mca/rmcast/base/rmcast_base_open.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/rmcast/base/rmcast_base_open.c	(original)
&gt; +++ trunk/orte/mca/rmcast/base/rmcast_base_open.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -341,7 +341,7 @@
&gt; {
&gt;     ptr-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     ptr-&gt;name.vpid = ORTE_VPID_INVALID;
&gt; -    ptr-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(ptr-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt;     ptr-&gt;channel = ORTE_RMCAST_INVALID_CHANNEL;
&gt;     OBJ_CONSTRUCT(&amp;ptr-&gt;ctl, orte_thread_ctl_t);
&gt;     ptr-&gt;seq_num = ORTE_RMCAST_SEQ_INVALID;
&gt; @@ -430,7 +430,7 @@
&gt; {
&gt;     ptr-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     ptr-&gt;name.vpid = ORTE_VPID_INVALID;
&gt; -    ptr-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(ptr-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt;     OBJ_CONSTRUCT(&amp;ptr-&gt;last_msg, opal_list_t);
&gt; }
&gt; static void recvlog_destruct(rmcast_recv_log_t *ptr)
&gt; @@ -439,7 +439,7 @@
&gt; 
&gt;     ptr-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     ptr-&gt;name.vpid = ORTE_VPID_INVALID;
&gt; -    ptr-&gt;name.epoch = ORTE_EPOCH_INVALID;
&gt; +    ORTE_EPOCH_SET(ptr-&gt;name.epoch,ORTE_EPOCH_INVALID);
&gt;     while (NULL != (item = opal_list_remove_first(&amp;ptr-&gt;last_msg))) {
&gt;         OBJ_RELEASE(item);
&gt;     }
&gt; 
&gt; Modified: trunk/orte/mca/rmcast/tcp/rmcast_tcp.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/rmcast/tcp/rmcast_tcp.c	(original)
&gt; +++ trunk/orte/mca/rmcast/tcp/rmcast_tcp.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -681,7 +681,7 @@
&gt;         /* caller requested id of sender */
&gt;         name-&gt;jobid = recvptr-&gt;name.jobid;
&gt;         name-&gt;vpid = recvptr-&gt;name.vpid;
&gt; -        name-&gt;epoch= recvptr-&gt;name.epoch;
&gt; +        ORTE_EPOCH_SET(name-&gt;epoch,recvptr-&gt;name.epoch);
&gt;     }
&gt;     *seq_num = recvptr-&gt;seq_num;
&gt;     *msg = recvptr-&gt;iovec_array;
&gt; @@ -776,7 +776,7 @@
&gt;         /* caller requested id of sender */
&gt;         name-&gt;jobid = recvptr-&gt;name.jobid;
&gt;         name-&gt;vpid = recvptr-&gt;name.vpid;
&gt; -        name-&gt;epoch= recvptr-&gt;name.epoch;
&gt; +        ORTE_EPOCH_SET(name-&gt;epoch,recvptr-&gt;name.epoch);
&gt;     }
&gt;     *seq_num = recvptr-&gt;seq_num;
&gt;     if (ORTE_SUCCESS != (ret = opal_dss.copy_payload(buf, recvptr-&gt;buf))) {
&gt; 
&gt; Modified: trunk/orte/mca/rmcast/udp/rmcast_udp.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/rmcast/udp/rmcast_udp.c	(original)
&gt; +++ trunk/orte/mca/rmcast/udp/rmcast_udp.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -460,7 +460,7 @@
&gt;         /* caller requested id of sender */
&gt;         name-&gt;jobid = recvptr-&gt;name.jobid;
&gt;         name-&gt;vpid = recvptr-&gt;name.vpid;
&gt; -        name-&gt;epoch= recvptr-&gt;name.epoch;
&gt; +        ORTE_EPOCH_SET(name-&gt;epoch,recvptr-&gt;name.epoch);
&gt;     }
&gt;     *seq_num = recvptr-&gt;seq_num;
&gt;     *msg = recvptr-&gt;iovec_array;
&gt; @@ -553,7 +553,7 @@
&gt;         /* caller requested id of sender */
&gt;         name-&gt;jobid = recvptr-&gt;name.jobid;
&gt;         name-&gt;vpid = recvptr-&gt;name.vpid;
&gt; -        name-&gt;epoch= recvptr-&gt;name.epoch;
&gt; +        ORTE_EPOCH_SET(name-&gt;epoch,recvptr-&gt;name.epoch);
&gt;     }
&gt;     *seq_num = recvptr-&gt;seq_num;
&gt;     if (ORTE_SUCCESS != (ret = opal_dss.copy_payload(buf, recvptr-&gt;buf))) {
&gt; 
&gt; Modified: trunk/orte/mca/rml/base/rml_base_components.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/rml/base/rml_base_components.c	(original)
&gt; +++ trunk/orte/mca/rml/base/rml_base_components.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -20,6 +20,7 @@
&gt; #include &quot;opal/util/output.h&quot;
&gt; 
&gt; #include &quot;orte/mca/rml/rml.h&quot;
&gt; +#include &quot;orte/util/name_fns.h&quot;
&gt; 
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; 
&gt; @@ -67,14 +68,14 @@
&gt; {
&gt;     pkt-&gt;sender.jobid = ORTE_JOBID_INVALID;
&gt;     pkt-&gt;sender.vpid = ORTE_VPID_INVALID;
&gt; -    pkt-&gt;sender.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(pkt-&gt;sender.epoch,ORTE_EPOCH_MIN);
&gt;     pkt-&gt;buffer = NULL;
&gt; }
&gt; static void msg_pkt_destructor(orte_msg_packet_t *pkt)
&gt; {
&gt;     pkt-&gt;sender.jobid = ORTE_JOBID_INVALID;
&gt;     pkt-&gt;sender.vpid = ORTE_VPID_INVALID;
&gt; -    pkt-&gt;sender.epoch = ORTE_EPOCH_INVALID;
&gt; +    ORTE_EPOCH_SET(pkt-&gt;sender.epoch,ORTE_EPOCH_INVALID);
&gt;     if (NULL != pkt-&gt;buffer) {
&gt;         OBJ_RELEASE(pkt-&gt;buffer);
&gt;     }
&gt; 
&gt; Modified: trunk/orte/mca/rml/rml_types.h
&gt; ==============================================================================
&gt; --- trunk/orte/mca/rml/rml_types.h	(original)
&gt; +++ trunk/orte/mca/rml/rml_types.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -62,7 +62,7 @@
&gt;         pkt = OBJ_NEW(orte_msg_packet_t);                           \
&gt;         pkt-&gt;sender.jobid = (sndr)-&gt;jobid;                          \
&gt;         pkt-&gt;sender.vpid = (sndr)-&gt;vpid;                            \
&gt; -        pkt-&gt;sender.epoch = (sndr)-&gt;epoch;                          \
&gt; +        ORTE_EPOCH_SET(pkt-&gt;sender.epoch,(sndr)-&gt;epoch);            \
&gt;         if ((crt)) {                                                \
&gt;             pkt-&gt;buffer = OBJ_NEW(opal_buffer_t);                   \
&gt;             opal_dss.copy_payload(pkt-&gt;buffer, *(buf));             \
&gt; @@ -85,7 +85,7 @@
&gt;         pkt = OBJ_NEW(orte_msg_packet_t);                           \
&gt;         pkt-&gt;sender.jobid = (sndr)-&gt;jobid;                          \
&gt;         pkt-&gt;sender.vpid = (sndr)-&gt;vpid;                            \
&gt; -        pkt-&gt;sender.epoch = (sndr)-&gt;epoch;                          \
&gt; +        ORTE_EPOCH_SET(pkt-&gt;sender.epoch,(sndr)-&gt;epoch);            \
&gt;         if ((crt)) {                                                \
&gt;             pkt-&gt;buffer = OBJ_NEW(opal_buffer_t);                   \
&gt;             opal_dss.copy_payload(pkt-&gt;buffer, *(buf));             \
&gt; @@ -191,8 +191,10 @@
&gt; 
&gt; #define ORTE_RML_TAG_SUBSCRIBE              46
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; /* For Epoch Updates */
&gt; #define ORTE_RML_TAG_EPOCH_CHANGE           47
&gt; +#endif
&gt; 
&gt; /* Notify of failed processes */
&gt; #define ORTE_RML_TAG_FAILURE_NOTICE         48
&gt; 
&gt; Modified: trunk/orte/mca/routed/base/routed_base_components.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/routed/base/routed_base_components.c	(original)
&gt; +++ trunk/orte/mca/routed/base/routed_base_components.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -65,7 +65,7 @@
&gt; {
&gt;     ptr-&gt;route.jobid = ORTE_JOBID_INVALID;
&gt;     ptr-&gt;route.vpid = ORTE_VPID_INVALID;
&gt; -    ptr-&gt;route.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(ptr-&gt;route.epoch,ORTE_EPOCH_MIN);
&gt;     ptr-&gt;hnp_uri = NULL;
&gt; }
&gt; static void jfamdest(orte_routed_jobfam_t *ptr)
&gt; @@ -117,7 +117,7 @@
&gt;     jfam = OBJ_NEW(orte_routed_jobfam_t);
&gt;     jfam-&gt;route.jobid = ORTE_PROC_MY_HNP-&gt;jobid;
&gt;     jfam-&gt;route.vpid = ORTE_PROC_MY_HNP-&gt;vpid;
&gt; -    jfam-&gt;route.epoch = ORTE_PROC_MY_HNP-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(jfam-&gt;route.epoch,ORTE_PROC_MY_HNP-&gt;epoch);
&gt;     jfam-&gt;job_family = ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid);
&gt;     if (NULL != orte_process_info.my_hnp_uri) {
&gt;         jfam-&gt;hnp_uri = strdup(orte_process_info.my_hnp_uri);
&gt; @@ -252,7 +252,7 @@
&gt;         jfam-&gt;job_family = jobfamily;
&gt;         jfam-&gt;route.jobid = name.jobid;
&gt;         jfam-&gt;route.vpid = name.vpid;
&gt; -        jfam-&gt;route.epoch = name.epoch;
&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,name.epoch);
&gt;         jfam-&gt;hnp_uri = strdup(uri);
&gt;     done:
&gt;         free(uri);
&gt; 
&gt; Modified: trunk/orte/mca/routed/base/routed_base_register_sync.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/routed/base/routed_base_register_sync.c	(original)
&gt; +++ trunk/orte/mca/routed/base/routed_base_register_sync.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -127,7 +127,9 @@
&gt;     orte_std_cntr_t cnt;
&gt;     char *rml_uri;
&gt;     orte_vpid_t vpid;
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     orte_epoch_t epoch;
&gt; +#endif
&gt;     int rc;
&gt; 
&gt;     if (ORTE_JOB_FAMILY(job) == ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid)) {
&gt; @@ -146,11 +148,13 @@
&gt;     cnt = 1;
&gt;     while (ORTE_SUCCESS == (rc = opal_dss.unpack(buffer, &amp;vpid, &amp;cnt, ORTE_VPID))) {
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;         cnt = 1;
&gt;         if (ORTE_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;epoch, &amp;cnt, ORTE_EPOCH))) {
&gt;             ORTE_ERROR_LOG(rc);
&gt;             continue;
&gt;         }        
&gt; +#endif
&gt; 
&gt;         if (ORTE_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;rml_uri, &amp;cnt, OPAL_STRING))) {
&gt;             ORTE_ERROR_LOG(rc);
&gt; 
&gt; Modified: trunk/orte/mca/routed/binomial/routed_binomial.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/routed/binomial/routed_binomial.c	(original)
&gt; +++ trunk/orte/mca/routed/binomial/routed_binomial.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -33,6 +33,7 @@
&gt; #include &quot;orte/runtime/orte_globals.h&quot;
&gt; #include &quot;orte/runtime/orte_wait.h&quot;
&gt; #include &quot;orte/runtime/runtime.h&quot;
&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
&gt; 
&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
&gt; 
&gt; @@ -147,7 +148,7 @@
&gt; 
&gt;     if (proc-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         proc-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        proc-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(proc-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         return ORTE_ERR_BAD_PARAM;
&gt;     }
&gt; 
&gt; @@ -216,7 +217,7 @@
&gt; 
&gt;     if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         target-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         return ORTE_ERR_BAD_PARAM;
&gt;     }
&gt; 
&gt; @@ -274,8 +275,7 @@
&gt;                                      ORTE_NAME_PRINT(route)));
&gt;                 jfam-&gt;route.jobid = route-&gt;jobid;
&gt;                 jfam-&gt;route.vpid = route-&gt;vpid;
&gt; -                jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
&gt; -                jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
&gt; +                ORTE_EPOCH_SET(jfam-&gt;route.epoch,orte_ess.proc_get_epoch(&amp;jfam-&gt;route));
&gt; 
&gt;                 return ORTE_SUCCESS;
&gt;             }
&gt; @@ -290,8 +290,7 @@
&gt;         jfam-&gt;job_family = jfamily;
&gt;         jfam-&gt;route.jobid = route-&gt;jobid;
&gt;         jfam-&gt;route.vpid = route-&gt;vpid;
&gt; -        jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
&gt; -        jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,orte_ess.proc_get_epoch(&amp;jfam-&gt;route));
&gt; 
&gt;         opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
&gt;         return ORTE_SUCCESS;
&gt; @@ -317,11 +316,21 @@
&gt;     /* initialize */
&gt;     daemon.jobid = ORTE_PROC_MY_DAEMON-&gt;jobid;
&gt;     daemon.vpid = ORTE_PROC_MY_DAEMON-&gt;vpid;
&gt; -    daemon.epoch = ORTE_PROC_MY_DAEMON-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(daemon.epoch,ORTE_PROC_MY_DAEMON-&gt;epoch);
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         target-&gt;vpid == ORTE_VPID_INVALID ||
&gt;         target-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +#else
&gt; +    if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt; +        target-&gt;vpid == ORTE_VPID_INVALID) {
&gt; +#endif
&gt; +        ret = ORTE_NAME_INVALID;
&gt; +        goto found;
&gt; +    }
&gt; +
&gt; +    if (0 &gt; ORTE_EPOCH_CMP(target-&gt;epoch, orte_ess.proc_get_epoch(target))) {
&gt;         ret = ORTE_NAME_INVALID;
&gt;         goto found;
&gt;     }
&gt; @@ -443,7 +452,7 @@
&gt; 
&gt;             /* If the daemon to which we should be routing is dead, then update
&gt;              * the routing tree and start over. */
&gt; -            if (!orte_util_proc_is_running(&amp;daemon)) {
&gt; +            if (!PROC_IS_RUNNING(&amp;daemon)) {
&gt;                 update_routing_tree(daemon.jobid);
&gt;                 goto startover;
&gt;             }
&gt; @@ -461,8 +470,7 @@
&gt;     ret = &amp;daemon;
&gt; 
&gt;  found:
&gt; -    daemon.epoch = ORTE_EPOCH_INVALID;
&gt; -    daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
&gt; +    ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
&gt; 
&gt;     OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
&gt;                          &quot;%s routed_binomial_get(%s) --&gt; %s&quot;,
&gt; @@ -879,7 +887,7 @@
&gt;      */
&gt;     local_lifeline.jobid = proc-&gt;jobid;
&gt;     local_lifeline.vpid = proc-&gt;vpid;
&gt; -    local_lifeline.epoch = proc-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,proc-&gt;epoch);
&gt;     lifeline = &amp;local_lifeline;
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; @@ -924,11 +932,11 @@
&gt;                  * that process so we can check it's state.
&gt;                  */
&gt;                 proc_name.vpid = peer;
&gt; -                proc_name.epoch = orte_util_lookup_epoch(&amp;proc_name);
&gt; +                ORTE_EPOCH_SET(proc_name.epoch,orte_util_lookup_epoch(&amp;proc_name));
&gt; 
&gt; -                if (!orte_util_proc_is_running(&amp;proc_name) 
&gt; -                    &amp;&amp; ORTE_EPOCH_MIN &lt; proc_name.epoch
&gt; -                    &amp;&amp; ORTE_EPOCH_INVALID != proc_name.epoch) {
&gt; +                if (!PROC_IS_RUNNING(&amp;proc_name)
&gt; +                    &amp;&amp; 0 &lt; ORTE_EPOCH_CMP(ORTE_EPOCH_MIN,proc_name.epoch)
&gt; +                    &amp;&amp; 0 != ORTE_EPOCH_CMP(ORTE_EPOCH_INVALID,proc_name.epoch)) {
&gt;                     OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
&gt;                                          &quot;%s routed:binomial child %s is dead&quot;,
&gt;                                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
&gt; @@ -967,7 +975,7 @@
&gt;     }
&gt; 
&gt;     /* find the children of this rank */
&gt; -    OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
&gt; +    OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
&gt;                          &quot;%s routed:binomial find children of rank %d&quot;,
&gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), rank));
&gt;     bitmap = opal_cube_dim(num_procs);
&gt; @@ -977,24 +985,25 @@
&gt; 
&gt;     for (i = hibit + 1, mask = 1 &lt;&lt; i; i &lt;= bitmap; ++i, mask &lt;&lt;= 1) {
&gt;         peer = rank | mask;
&gt; -        OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
&gt; +        OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
&gt;                              &quot;%s routed:binomial find children checking peer %d&quot;,
&gt;                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), peer));
&gt;         if (peer &lt; num_procs) {
&gt; -            OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
&gt; +            OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
&gt;                                  &quot;%s routed:binomial find children computing tree&quot;,
&gt;                                  ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
&gt;             /* execute compute on this child */
&gt;             if (0 &lt;= (found = binomial_tree(peer, rank, me, num_procs, nchildren, childrn, relatives, mine, jobid))) {
&gt;                 proc_name.vpid = found;
&gt; 
&gt; -                if (!orte_util_proc_is_running(&amp;proc_name) &amp;&amp; ORTE_EPOCH_MIN &lt; orte_util_lookup_epoch(&amp;proc_name)) {
&gt; -                    OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
&gt; +                if (!PROC_IS_RUNNING(&amp;proc_name) 
&gt; +                    &amp;&amp; 0 &lt; ORTE_EPOCH_CMP(ORTE_EPOCH_MIN,orte_util_lookup_epoch(&amp;proc_name))) {
&gt; +                    OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
&gt;                                          &quot;%s routed:binomial find children proc out of date - returning parent %d&quot;,
&gt;                                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), parent));
&gt;                     return parent;
&gt;                 }
&gt; -                OPAL_OUTPUT_VERBOSE((3, orte_routed_base_output,
&gt; +                OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
&gt;                                      &quot;%s routed:binomial find children returning found value %d&quot;,
&gt;                                      ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), found));
&gt;                 return found;
&gt; @@ -1029,8 +1038,7 @@
&gt;     ORTE_PROC_MY_PARENT-&gt;vpid = binomial_tree(0, 0, ORTE_PROC_MY_NAME-&gt;vpid,
&gt;                                    orte_process_info.max_procs,
&gt;                                    &amp;num_children, &amp;my_children, NULL, true, jobid);
&gt; -    ORTE_PROC_MY_PARENT-&gt;epoch = ORTE_EPOCH_INVALID;
&gt; -    ORTE_PROC_MY_PARENT-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT);
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_PARENT-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT));
&gt; 
&gt;     if (0 &lt; opal_output_get_verbosity(orte_routed_base_output)) {
&gt;         opal_output(0, &quot;%s: parent %d num_children %d&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), ORTE_PROC_MY_PARENT-&gt;vpid, num_children);
&gt; 
&gt; Modified: trunk/orte/mca/routed/cm/routed_cm.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/routed/cm/routed_cm.c	(original)
&gt; +++ trunk/orte/mca/routed/cm/routed_cm.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -35,6 +35,7 @@
&gt; #include &quot;orte/runtime/orte_globals.h&quot;
&gt; #include &quot;orte/runtime/orte_wait.h&quot;
&gt; #include &quot;orte/runtime/runtime.h&quot;
&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
&gt; 
&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
&gt; 
&gt; @@ -139,7 +140,7 @@
&gt; 
&gt;     if (proc-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         proc-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        proc-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(proc-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         return ORTE_ERR_BAD_PARAM;
&gt;     }
&gt; 
&gt; @@ -200,7 +201,7 @@
&gt; 
&gt;     if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         target-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         return ORTE_ERR_BAD_PARAM;
&gt;     }
&gt; 
&gt; @@ -257,8 +258,7 @@
&gt;                                      ORTE_NAME_PRINT(route)));
&gt;                 jfam-&gt;route.jobid = route-&gt;jobid;
&gt;                 jfam-&gt;route.vpid = route-&gt;vpid;
&gt; -                jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
&gt; -                jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
&gt; +                ORTE_EPOCH_SET(jfam-&gt;route.epoch,orte_ess.proc_get_epoch(&amp;jfam-&gt;route));
&gt; 
&gt;                 return ORTE_SUCCESS;
&gt;             }
&gt; @@ -273,8 +273,7 @@
&gt;         jfam-&gt;job_family = jfamily;
&gt;         jfam-&gt;route.jobid = route-&gt;jobid;
&gt;         jfam-&gt;route.vpid = route-&gt;vpid;
&gt; -        jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
&gt; -        jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,orte_ess.proc_get_epoch(&amp;jfam-&gt;route));
&gt; 
&gt;         opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
&gt;         return ORTE_SUCCESS;
&gt; @@ -299,7 +298,7 @@
&gt; 
&gt;     if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         target-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         ret = ORTE_NAME_INVALID;
&gt;         goto found;
&gt;     }
&gt; @@ -367,8 +366,7 @@
&gt;     }
&gt; 
&gt;     /* Initialize daemon's epoch, based on its current vpid/jobid */
&gt; -    daemon.epoch = ORTE_EPOCH_INVALID;
&gt; -    daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
&gt; +    ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
&gt; 
&gt;     /* if the daemon is me, then send direct to the target! */
&gt;     if (ORTE_PROC_MY_NAME-&gt;vpid == daemon.vpid) {
&gt; @@ -814,8 +812,7 @@
&gt;      */
&gt;     local_lifeline.jobid = proc-&gt;jobid;
&gt;     local_lifeline.vpid = proc-&gt;vpid;
&gt; -    local_lifeline.epoch = ORTE_EPOCH_INVALID;
&gt; -    local_lifeline.epoch = orte_ess.proc_get_epoch(&amp;local_lifeline);
&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,orte_ess.proc_get_epoch(&amp;local_lifeline));
&gt; 
&gt;     lifeline = &amp;local_lifeline;
&gt; 
&gt; 
&gt; Modified: trunk/orte/mca/routed/direct/routed_direct.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/routed/direct/routed_direct.c	(original)
&gt; +++ trunk/orte/mca/routed/direct/routed_direct.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -24,6 +24,7 @@
&gt; #include &quot;orte/util/name_fns.h&quot;
&gt; #include &quot;orte/util/proc_info.h&quot;
&gt; #include &quot;orte/runtime/orte_globals.h&quot;
&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
&gt; 
&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
&gt; 
&gt; @@ -135,7 +136,7 @@
&gt; 
&gt;     if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         target-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         ret = ORTE_NAME_INVALID;
&gt;     } else {
&gt;         /* all routes are direct */
&gt; 
&gt; Modified: trunk/orte/mca/routed/linear/routed_linear.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/routed/linear/routed_linear.c	(original)
&gt; +++ trunk/orte/mca/routed/linear/routed_linear.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -31,6 +31,7 @@
&gt; #include &quot;orte/runtime/orte_globals.h&quot;
&gt; #include &quot;orte/runtime/orte_wait.h&quot;
&gt; #include &quot;orte/runtime/runtime.h&quot;
&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
&gt; 
&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
&gt; 
&gt; @@ -132,7 +133,7 @@
&gt; 
&gt;     if (proc-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         proc-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        proc-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(proc-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         return ORTE_ERR_BAD_PARAM;
&gt;     }
&gt; 
&gt; @@ -201,7 +202,7 @@
&gt; 
&gt;     if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         target-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         return ORTE_ERR_BAD_PARAM;
&gt;     }
&gt; 
&gt; @@ -259,7 +260,7 @@
&gt;                                      ORTE_NAME_PRINT(route)));
&gt;                 jfam-&gt;route.jobid = route-&gt;jobid;
&gt;                 jfam-&gt;route.vpid = route-&gt;vpid;
&gt; -                jfam-&gt;route.epoch = route-&gt;epoch;
&gt; +                ORTE_EPOCH_SET(jfam-&gt;route.epoch,route-&gt;epoch);
&gt;                 return ORTE_SUCCESS;
&gt;             }
&gt;         }
&gt; @@ -273,7 +274,7 @@
&gt;         jfam-&gt;job_family = jfamily;
&gt;         jfam-&gt;route.jobid = route-&gt;jobid;
&gt;         jfam-&gt;route.vpid = route-&gt;vpid;
&gt; -        jfam-&gt;route.epoch = route-&gt;epoch;
&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,route-&gt;epoch);
&gt;         opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
&gt;         return ORTE_SUCCESS;
&gt;     }
&gt; @@ -373,8 +374,7 @@
&gt;     }
&gt; 
&gt;     /* Initialize daemon's epoch, based on its current vpid/jobid */
&gt; -    daemon.epoch = ORTE_EPOCH_INVALID;
&gt; -    daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
&gt; +    ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
&gt; 
&gt;     /* if the daemon is me, then send direct to the target! */
&gt;     if (ORTE_PROC_MY_NAME-&gt;vpid == daemon.vpid) {
&gt; @@ -395,8 +395,7 @@
&gt;                 /* we are at end of chain - wrap around */
&gt;                 daemon.vpid = 0;
&gt;             }
&gt; -            daemon.epoch = ORTE_EPOCH_INVALID;
&gt; -            daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
&gt; +            ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
&gt;             ret = &amp;daemon;
&gt;         }
&gt;     }
&gt; @@ -741,7 +740,7 @@
&gt;      */
&gt;     local_lifeline.jobid = proc-&gt;jobid;
&gt;     local_lifeline.vpid = proc-&gt;vpid;
&gt; -    local_lifeline.epoch = proc-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,proc-&gt;epoch);
&gt;     lifeline = &amp;local_lifeline;
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; 
&gt; Modified: trunk/orte/mca/routed/radix/routed_radix.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/routed/radix/routed_radix.c	(original)
&gt; +++ trunk/orte/mca/routed/radix/routed_radix.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -31,6 +31,7 @@
&gt; #include &quot;orte/runtime/orte_globals.h&quot;
&gt; #include &quot;orte/runtime/orte_wait.h&quot;
&gt; #include &quot;orte/runtime/runtime.h&quot;
&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
&gt; 
&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
&gt; 
&gt; @@ -145,7 +146,7 @@
&gt; 
&gt;     if (proc-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         proc-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        proc-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(proc-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         return ORTE_ERR_BAD_PARAM;
&gt;     }
&gt; 
&gt; @@ -214,7 +215,7 @@
&gt; 
&gt;     if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         target-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         return ORTE_ERR_BAD_PARAM;
&gt;     }
&gt; 
&gt; @@ -272,7 +273,7 @@
&gt;                                      ORTE_NAME_PRINT(route)));
&gt;                 jfam-&gt;route.jobid = route-&gt;jobid;
&gt;                 jfam-&gt;route.vpid = route-&gt;vpid;
&gt; -                jfam-&gt;route.epoch = route-&gt;epoch;
&gt; +                ORTE_EPOCH_SET(jfam-&gt;route.epoch,route-&gt;epoch);
&gt;                 return ORTE_SUCCESS;
&gt;             }
&gt;         }
&gt; @@ -286,7 +287,7 @@
&gt;         jfam-&gt;job_family = jfamily;
&gt;         jfam-&gt;route.jobid = route-&gt;jobid;
&gt;         jfam-&gt;route.vpid = route-&gt;vpid;
&gt; -        jfam-&gt;route.epoch = route-&gt;epoch;
&gt; +        ORTE_EPOCH_SET(jfam-&gt;route.epoch,route-&gt;epoch);
&gt;         opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
&gt;         return ORTE_SUCCESS;
&gt;     }
&gt; @@ -310,7 +311,7 @@
&gt; 
&gt;     if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         target-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         ret = ORTE_NAME_INVALID;
&gt;         goto found;
&gt;     }
&gt; @@ -413,8 +414,7 @@
&gt;             if (opal_bitmap_is_set_bit(&amp;child-&gt;relatives, daemon.vpid)) {
&gt;                 /* yep - we need to step through this child */
&gt;                 daemon.vpid = child-&gt;vpid;
&gt; -                daemon.epoch = ORTE_EPOCH_INVALID;
&gt; -                daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
&gt; +                ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
&gt;                 ret = &amp;daemon;
&gt;                 goto found;
&gt;             }
&gt; @@ -425,8 +425,7 @@
&gt;      * any of our children, so we have to step up through our parent
&gt;      */
&gt;     daemon.vpid = ORTE_PROC_MY_PARENT-&gt;vpid;
&gt; -    daemon.epoch = ORTE_EPOCH_INVALID;
&gt; -    daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
&gt; +    ORTE_EPOCH_SET(daemon.epoch,orte_ess.proc_get_epoch(&amp;daemon));
&gt; 
&gt;     ret = &amp;daemon;
&gt; 
&gt; @@ -788,7 +787,7 @@
&gt;      */
&gt;     local_lifeline.jobid = proc-&gt;jobid;
&gt;     local_lifeline.vpid = proc-&gt;vpid;
&gt; -    local_lifeline.epoch = proc-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,proc-&gt;epoch);
&gt;     lifeline = &amp;local_lifeline;
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; @@ -881,8 +880,7 @@
&gt;         ORTE_PROC_MY_PARENT-&gt;vpid = (Ii-Sum) % NInPrevLevel;
&gt;         ORTE_PROC_MY_PARENT-&gt;vpid += (Sum - NInPrevLevel);
&gt;     }
&gt; -    ORTE_PROC_MY_PARENT-&gt;epoch = ORTE_EPOCH_INVALID;
&gt; -    ORTE_PROC_MY_PARENT-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT);
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_PARENT-&gt;epoch,orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT));
&gt; 
&gt;     /* compute my direct children and the bitmap that shows which vpids
&gt;      * lie underneath their branch
&gt; 
&gt; Modified: trunk/orte/mca/routed/slave/routed_slave.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/routed/slave/routed_slave.c	(original)
&gt; +++ trunk/orte/mca/routed/slave/routed_slave.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -26,6 +26,7 @@
&gt; #include &quot;orte/runtime/orte_globals.h&quot;
&gt; #include &quot;orte/runtime/orte_wait.h&quot;
&gt; #include &quot;orte/runtime/runtime.h&quot;
&gt; +#include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
&gt; 
&gt; #include &quot;orte/mca/rml/base/rml_contact.h&quot;
&gt; 
&gt; @@ -134,7 +135,7 @@
&gt; 
&gt;     if (target-&gt;jobid == ORTE_JOBID_INVALID ||
&gt;         target-&gt;vpid == ORTE_VPID_INVALID ||
&gt; -        target-&gt;epoch == ORTE_EPOCH_INVALID) {
&gt; +        0 == ORTE_EPOCH_CMP(target-&gt;epoch,ORTE_EPOCH_INVALID)) {
&gt;         ret = ORTE_NAME_INVALID;
&gt;     } else {
&gt;         /* a slave must always route via its parent daemon */
&gt; @@ -275,8 +276,7 @@
&gt;      */
&gt;     local_lifeline.jobid = proc-&gt;jobid;
&gt;     local_lifeline.vpid = proc-&gt;vpid;
&gt; -    local_lifeline.epoch = ORTE_EPOCH_INVALID;
&gt; -    local_lifeline.epoch = orte_ess.proc_get_epoch(&amp;local_lifeline);
&gt; +    ORTE_EPOCH_SET(local_lifeline.epoch,orte_ess.proc_get_epoch(&amp;local_lifeline));
&gt; 
&gt;     lifeline = &amp;local_lifeline;
&gt; 
&gt; 
&gt; Modified: trunk/orte/mca/sensor/file/sensor_file.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/sensor/file/sensor_file.c	(original)
&gt; +++ trunk/orte/mca/sensor/file/sensor_file.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -70,7 +70,9 @@
&gt;     opal_list_item_t super;
&gt;     orte_jobid_t jobid;
&gt;     orte_vpid_t vpid;
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     orte_epoch_t epoch;
&gt; +#endif
&gt;     char *file;
&gt;     int tick;
&gt;     bool check_size;
&gt; 
&gt; Modified: trunk/orte/mca/snapc/base/snapc_base_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/snapc/base/snapc_base_fns.c	(original)
&gt; +++ trunk/orte/mca/snapc/base/snapc_base_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -81,7 +81,7 @@
&gt; {
&gt;     snapshot-&gt;process_name.jobid  = 0;
&gt;     snapshot-&gt;process_name.vpid   = 0;
&gt; -    snapshot-&gt;process_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     snapshot-&gt;state = ORTE_SNAPC_CKPT_STATE_NONE;
&gt; 
&gt; @@ -92,7 +92,7 @@
&gt; {
&gt;     snapshot-&gt;process_name.jobid  = 0;
&gt;     snapshot-&gt;process_name.vpid   = 0;
&gt; -    snapshot-&gt;process_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     snapshot-&gt;state = ORTE_SNAPC_CKPT_STATE_NONE;
&gt; 
&gt; 
&gt; Modified: trunk/orte/mca/snapc/full/snapc_full_global.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/snapc/full/snapc_full_global.c	(original)
&gt; +++ trunk/orte/mca/snapc/full/snapc_full_global.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -427,7 +427,7 @@
&gt;             new_proc = OBJ_NEW(orte_proc_t);
&gt;             new_proc-&gt;name.jobid = proc-&gt;name.jobid;
&gt;             new_proc-&gt;name.vpid  = proc-&gt;name.vpid;
&gt; -            new_proc-&gt;name.epoch = proc-&gt;name.epoch;
&gt; +            ORTE_EPOCH_SET(new_proc-&gt;name.epoch,proc-&gt;name.epoch);
&gt;             new_proc-&gt;node = OBJ_NEW(orte_node_t);
&gt;             new_proc-&gt;node-&gt;name = proc-&gt;node-&gt;name;
&gt;             opal_list_append(migrating_procs, &amp;new_proc-&gt;super);
&gt; @@ -618,7 +618,7 @@
&gt; 
&gt;         orted_snapshot-&gt;process_name.jobid  = cur_node-&gt;daemon-&gt;name.jobid;
&gt;         orted_snapshot-&gt;process_name.vpid   = cur_node-&gt;daemon-&gt;name.vpid;
&gt; -        orted_snapshot-&gt;process_name.epoch  = cur_node-&gt;daemon-&gt;name.epoch;
&gt; +        ORTE_EPOCH_SET(orted_snapshot-&gt;process_name.epoch,cur_node-&gt;daemon-&gt;name.epoch);
&gt; 
&gt;         mask = ORTE_NS_CMP_JOBID;
&gt; 
&gt; @@ -636,7 +636,7 @@
&gt; 
&gt;             app_snapshot-&gt;process_name.jobid = procs[p]-&gt;name.jobid;
&gt;             app_snapshot-&gt;process_name.vpid = procs[p]-&gt;name.vpid;
&gt; -            app_snapshot-&gt;process_name.epoch = procs[p]-&gt;name.epoch;
&gt; +            ORTE_EPOCH_SET(app_snapshot-&gt;process_name.epoch,procs[p]-&gt;name.epoch);
&gt; 
&gt;             opal_list_append(&amp;(orted_snapshot-&gt;super.local_snapshots), &amp;(app_snapshot-&gt;super));
&gt;         }
&gt; @@ -800,7 +800,7 @@
&gt; 
&gt;                 app_snapshot-&gt;process_name.jobid = procs[p]-&gt;name.jobid;
&gt;                 app_snapshot-&gt;process_name.vpid = procs[p]-&gt;name.vpid;
&gt; -                app_snapshot-&gt;process_name.epoch = procs[p]-&gt;name.epoch;
&gt; +                ORTE_EPOCH_SET(app_snapshot-&gt;process_name.epoch,procs[p]-&gt;name.epoch);
&gt; 
&gt;                 opal_list_append(&amp;(orted_snapshot-&gt;super.local_snapshots), &amp;(app_snapshot-&gt;super));
&gt;             }
&gt; @@ -816,7 +816,7 @@
&gt; 
&gt;         orted_snapshot-&gt;process_name.jobid  = cur_node-&gt;daemon-&gt;name.jobid;
&gt;         orted_snapshot-&gt;process_name.vpid   = cur_node-&gt;daemon-&gt;name.vpid;
&gt; -        orted_snapshot-&gt;process_name.epoch  = cur_node-&gt;daemon-&gt;name.epoch;
&gt; +        ORTE_EPOCH_SET(orted_snapshot-&gt;process_name.epoch,cur_node-&gt;daemon-&gt;name.epoch);
&gt; 
&gt;         mask = ORTE_NS_CMP_ALL;
&gt; 
&gt; @@ -837,7 +837,7 @@
&gt; 
&gt;             app_snapshot-&gt;process_name.jobid = procs[p]-&gt;name.jobid;
&gt;             app_snapshot-&gt;process_name.vpid = procs[p]-&gt;name.vpid;
&gt; -            app_snapshot-&gt;process_name.epoch = procs[p]-&gt;name.epoch;
&gt; +            ORTE_EPOCH_SET(app_snapshot-&gt;process_name.epoch,procs[p]-&gt;name.epoch);
&gt; 
&gt;             opal_list_append(&amp;(orted_snapshot-&gt;super.local_snapshots), &amp;(app_snapshot-&gt;super));
&gt;         }
&gt; 
&gt; Modified: trunk/orte/mca/snapc/full/snapc_full_local.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/snapc/full/snapc_full_local.c	(original)
&gt; +++ trunk/orte/mca/snapc/full/snapc_full_local.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -2033,7 +2033,7 @@
&gt;             vpid_snapshot-&gt;process_pid              = child-&gt;pid;
&gt;             vpid_snapshot-&gt;super.process_name.jobid = child-&gt;name-&gt;jobid;
&gt;             vpid_snapshot-&gt;super.process_name.vpid  = child-&gt;name-&gt;vpid;
&gt; -            vpid_snapshot-&gt;super.process_name.epoch = child-&gt;name-&gt;epoch;
&gt; +            ORTE_EPOCH_SET(vpid_snapshot-&gt;super.process_name.epoch,child-&gt;name-&gt;epoch);
&gt;         }
&gt;     }
&gt; 
&gt; @@ -2095,7 +2095,7 @@
&gt;             vpid_snapshot-&gt;process_pid              = child-&gt;pid;
&gt;             vpid_snapshot-&gt;super.process_name.jobid = child-&gt;name-&gt;jobid;
&gt;             vpid_snapshot-&gt;super.process_name.vpid  = child-&gt;name-&gt;vpid;
&gt; -            vpid_snapshot-&gt;super.process_name.epoch = child-&gt;name-&gt;epoch;
&gt; +            ORTE_EPOCH_SET(vpid_snapshot-&gt;super.process_name.epoch,child-&gt;name-&gt;epoch);
&gt;             /*vpid_snapshot-&gt;migrating = true;*/
&gt; 
&gt;             opal_list_append(&amp;(local_global_snapshot.local_snapshots), &amp;(vpid_snapshot-&gt;super.super));
&gt; @@ -2111,7 +2111,7 @@
&gt;             vpid_snapshot-&gt;process_pid              = child-&gt;pid;
&gt;             vpid_snapshot-&gt;super.process_name.jobid = child-&gt;name-&gt;jobid;
&gt;             vpid_snapshot-&gt;super.process_name.vpid  = child-&gt;name-&gt;vpid;
&gt; -            vpid_snapshot-&gt;super.process_name.epoch = child-&gt;name-&gt;epoch;
&gt; +            ORTE_EPOCH_SET(vpid_snapshot-&gt;super.process_name.epoch,child-&gt;name-&gt;epoch);
&gt;         }
&gt;     }
&gt; 
&gt; 
&gt; Modified: trunk/orte/mca/snapc/full/snapc_full_module.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/snapc/full/snapc_full_module.c	(original)
&gt; +++ trunk/orte/mca/snapc/full/snapc_full_module.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -83,7 +83,7 @@
&gt; void orte_snapc_full_orted_construct(orte_snapc_full_orted_snapshot_t *snapshot) {
&gt;     snapshot-&gt;process_name.jobid  = 0;
&gt;     snapshot-&gt;process_name.vpid   = 0;
&gt; -    snapshot-&gt;process_name.epoch  = 0;
&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,0);
&gt; 
&gt;     snapshot-&gt;state = ORTE_SNAPC_CKPT_STATE_NONE;
&gt; }
&gt; @@ -91,7 +91,7 @@
&gt; void orte_snapc_full_orted_destruct( orte_snapc_full_orted_snapshot_t *snapshot) {
&gt;     snapshot-&gt;process_name.jobid  = 0;
&gt;     snapshot-&gt;process_name.vpid   = 0;
&gt; -    snapshot-&gt;process_name.epoch  = 0;
&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,0);
&gt; 
&gt;     snapshot-&gt;state = ORTE_SNAPC_CKPT_STATE_NONE;
&gt; }
&gt; 
&gt; Modified: trunk/orte/mca/sstore/base/sstore_base_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/sstore/base/sstore_base_fns.c	(original)
&gt; +++ trunk/orte/mca/sstore/base/sstore_base_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -62,7 +62,7 @@
&gt; {
&gt;     snapshot-&gt;process_name.jobid  = 0;
&gt;     snapshot-&gt;process_name.vpid   = 0;
&gt; -    snapshot-&gt;process_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     snapshot-&gt;crs_comp = NULL;
&gt;     snapshot-&gt;compress_comp    = NULL;
&gt; @@ -76,7 +76,7 @@
&gt; {
&gt;     snapshot-&gt;process_name.jobid  = 0;
&gt;     snapshot-&gt;process_name.vpid   = 0;
&gt; -    snapshot-&gt;process_name.epoch  = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(snapshot-&gt;process_name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     if( NULL != snapshot-&gt;crs_comp ) {
&gt;         free(snapshot-&gt;crs_comp);
&gt; @@ -637,7 +637,7 @@
&gt; 
&gt;             vpid_snapshot-&gt;process_name.jobid  = proc.jobid;
&gt;             vpid_snapshot-&gt;process_name.vpid   = proc.vpid;
&gt; -            vpid_snapshot-&gt;process_name.epoch  = proc.epoch;
&gt; +            ORTE_EPOCH_SET(vpid_snapshot-&gt;process_name.epoch,proc.epoch);
&gt;         }
&gt;         else if(0 == strncmp(token, SSTORE_METADATA_LOCAL_CRS_COMP_STR, strlen(SSTORE_METADATA_LOCAL_CRS_COMP_STR))) {
&gt;             vpid_snapshot-&gt;crs_comp = strdup(value);
&gt; 
&gt; Modified: trunk/orte/mca/sstore/central/sstore_central_global.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/sstore/central/sstore_central_global.c	(original)
&gt; +++ trunk/orte/mca/sstore/central/sstore_central_global.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -1216,8 +1216,7 @@
&gt; 
&gt;         vpid_snapshot-&gt;process_name.jobid  = handle_info-&gt;jobid;
&gt;         vpid_snapshot-&gt;process_name.vpid   = i;
&gt; -        vpid_snapshot-&gt;process_name.epoch = ORTE_EPOCH_INVALID;
&gt; -        vpid_snapshot-&gt;process_name.epoch = orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name);
&gt; +        ORTE_EPOCH_SET(vpid_snapshot-&gt;process_name.epoch,orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name));
&gt; 
&gt;         vpid_snapshot-&gt;crs_comp     = NULL;
&gt;         global_snapshot-&gt;start_time = NULL;
&gt; 
&gt; Modified: trunk/orte/mca/sstore/central/sstore_central_local.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/sstore/central/sstore_central_local.c	(original)
&gt; +++ trunk/orte/mca/sstore/central/sstore_central_local.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -210,7 +210,7 @@
&gt; {
&gt;     info-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     info-&gt;name.vpid  = ORTE_VPID_INVALID;
&gt; -    info-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(info-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     info-&gt;local_location = NULL;
&gt;     info-&gt;metadata_filename = NULL;
&gt; @@ -222,7 +222,7 @@
&gt; {
&gt;     info-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     info-&gt;name.vpid  = ORTE_VPID_INVALID;
&gt; -    info-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(info-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     if( NULL != info-&gt;local_location ) {
&gt;         free(info-&gt;local_location);
&gt; @@ -535,7 +535,7 @@
&gt; 
&gt;     app_info-&gt;name.jobid = name-&gt;jobid;
&gt;     app_info-&gt;name.vpid  = name-&gt;vpid;
&gt; -    app_info-&gt;name.epoch = name-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(app_info-&gt;name.epoch,name-&gt;epoch);
&gt; 
&gt;     opal_list_append(handle_info-&gt;app_info_handle, &amp;(app_info-&gt;super));
&gt; 
&gt; 
&gt; Modified: trunk/orte/mca/sstore/stage/sstore_stage_global.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/sstore/stage/sstore_stage_global.c	(original)
&gt; +++ trunk/orte/mca/sstore/stage/sstore_stage_global.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -1218,10 +1218,10 @@
&gt;         p_set = OBJ_NEW(orte_filem_base_process_set_t);
&gt;         p_set-&gt;source.jobid = peer-&gt;jobid;
&gt;         p_set-&gt;source.vpid  = peer-&gt;vpid;
&gt; -        p_set-&gt;source.epoch = peer-&gt;epoch;
&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,peer-&gt;epoch);
&gt;         p_set-&gt;sink.jobid   = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;         p_set-&gt;sink.vpid    = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -        p_set-&gt;sink.epoch   = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +        ORTE_EPOCH_SET(p_set-&gt;sink.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt;         opal_list_append(&amp;(filem_request-&gt;process_sets), &amp;(p_set-&gt;super) );
&gt;     }
&gt; 
&gt; @@ -1706,8 +1706,7 @@
&gt; 
&gt;         vpid_snapshot-&gt;process_name.jobid  = handle_info-&gt;jobid;
&gt;         vpid_snapshot-&gt;process_name.vpid   = i;
&gt; -        vpid_snapshot-&gt;process_name.epoch = ORTE_EPOCH_INVALID;
&gt; -        vpid_snapshot-&gt;process_name.epoch = orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name);
&gt; +        ORTE_EPOCH_SET(vpid_snapshot-&gt;process_name.epoch,orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name));
&gt; 
&gt;         /* JJH: Currently we do not have this information since we do not save
&gt;          * individual vpid info in the Global SStore. It is in the metadata
&gt; 
&gt; Modified: trunk/orte/mca/sstore/stage/sstore_stage_local.c
&gt; ==============================================================================
&gt; --- trunk/orte/mca/sstore/stage/sstore_stage_local.c	(original)
&gt; +++ trunk/orte/mca/sstore/stage/sstore_stage_local.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -287,7 +287,7 @@
&gt; {
&gt;     info-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     info-&gt;name.vpid  = ORTE_VPID_INVALID;
&gt; -    info-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(info-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     info-&gt;local_location = NULL;
&gt;     info-&gt;compressed_local_location = NULL;
&gt; @@ -302,7 +302,7 @@
&gt; {
&gt;     info-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     info-&gt;name.vpid  = ORTE_VPID_INVALID;
&gt; -    info-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(info-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     if( NULL != info-&gt;local_location ) {
&gt;         free(info-&gt;local_location);
&gt; @@ -1014,7 +1014,7 @@
&gt; 
&gt;     app_info-&gt;name.jobid = name-&gt;jobid;
&gt;     app_info-&gt;name.vpid  = name-&gt;vpid;
&gt; -    app_info-&gt;name.epoch = name-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(app_info-&gt;name.epoch,name-&gt;epoch);
&gt; 
&gt;     opal_list_append(handle_info-&gt;app_info_handle, &amp;(app_info-&gt;super));
&gt; 
&gt; @@ -2057,17 +2057,17 @@
&gt;         /* if I am the HNP, then use me as the source */
&gt;         p_set-&gt;source.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;         p_set-&gt;source.vpid  = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -        p_set-&gt;source.epoch = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt;     }
&gt;     else {
&gt;         /* otherwise, set the HNP as the source */
&gt;         p_set-&gt;source.jobid = ORTE_PROC_MY_HNP-&gt;jobid;
&gt;         p_set-&gt;source.vpid  = ORTE_PROC_MY_HNP-&gt;vpid;
&gt; -        p_set-&gt;source.epoch = ORTE_PROC_MY_HNP-&gt;epoch;
&gt; +        ORTE_EPOCH_SET(p_set-&gt;source.epoch,ORTE_PROC_MY_HNP-&gt;epoch);
&gt;     }
&gt;     p_set-&gt;sink.jobid   = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     p_set-&gt;sink.vpid    = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -    p_set-&gt;sink.epoch   = ORTE_PROC_MY_NAME-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(p_set-&gt;sink.epoch,ORTE_PROC_MY_NAME-&gt;epoch);
&gt;     opal_list_append(&amp;(filem_request-&gt;process_sets), &amp;(p_set-&gt;super) );
&gt; 
&gt;     /* Define the file set */
&gt; 
&gt; Modified: trunk/orte/orted/orted_comm.c
&gt; ==============================================================================
&gt; --- trunk/orte/orted/orted_comm.c	(original)
&gt; +++ trunk/orte/orted/orted_comm.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -123,18 +123,13 @@
&gt;         nm = (orte_routed_tree_t*)item;
&gt; 
&gt;         target.vpid = nm-&gt;vpid;
&gt; -        target.epoch = orte_util_lookup_epoch(&amp;target);
&gt; +        ORTE_EPOCH_SET(target.epoch,orte_ess.proc_get_epoch(&amp;target));
&gt; 
&gt; -        if (!orte_util_proc_is_running(&amp;target)) {
&gt; +        if (!PROC_IS_RUNNING(&amp;target)) {
&gt;             continue;
&gt;         }
&gt; 
&gt; -        target.epoch = ORTE_EPOCH_INVALID;
&gt; -        if (ORTE_NODE_RANK_INVALID == (target.epoch = orte_ess.proc_get_epoch(&amp;target))) {
&gt; -            /* If we are trying to send to a previously failed process it's
&gt; -             * better to fail silently. */
&gt; -            continue;
&gt; -        }
&gt; +        ORTE_EPOCH_SET(target.epoch,orte_ess.proc_get_epoch(&amp;target));
&gt; 
&gt;         OPAL_OUTPUT_VERBOSE((1, orte_debug_output,
&gt;                              &quot;%s orte:daemon:send_relay sending relay msg to %s&quot;,
&gt; @@ -422,7 +417,8 @@
&gt;             proct = OBJ_NEW(orte_proc_t);
&gt;             proct-&gt;name.jobid = proc.jobid;
&gt;             proct-&gt;name.vpid = proc.vpid;
&gt; -            proct-&gt;name.epoch = proc.epoch;
&gt; +            ORTE_EPOCH_SET(proct-&gt;name.epoch,proc.epoch);
&gt; +
&gt;             opal_pointer_array_add(&amp;procarray, proct);
&gt;             num_replies++;
&gt;         }
&gt; @@ -1059,7 +1055,9 @@
&gt;             orte_job_t *jdata;
&gt;             orte_proc_t *proc;
&gt;             orte_vpid_t vpid;
&gt; +#if ORTE_ENABLE_EPOCH
&gt;             orte_epoch_t epoch;
&gt; +#endif
&gt;             int32_t i, num_procs;
&gt; 
&gt;             /* setup the answer */
&gt; @@ -1086,12 +1084,14 @@
&gt;                 goto CLEANUP;
&gt;             }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;             /* unpack the epoch */
&gt;             n = 1;
&gt;             if (ORTE_SUCCESS != (ret = opal_dss.unpack(buffer, &amp;epoch, &amp;n, ORTE_EPOCH))) {
&gt;                 ORTE_ERROR_LOG(ret);
&gt;                 goto CLEANUP;
&gt;             }
&gt; +#endif
&gt; 
&gt;             /* if they asked for a specific proc, then just get that info */
&gt;             if (ORTE_VPID_WILDCARD != vpid) {
&gt; @@ -1201,7 +1201,7 @@
&gt;                     /* loop across all daemons */
&gt;                     proc2.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;                     for (proc2.vpid=1; proc2.vpid &lt; orte_process_info.num_procs; proc2.vpid++) {
&gt; -                        proc2.epoch = orte_util_lookup_epoch(&amp;proc2);
&gt; +                        ORTE_EPOCH_SET(proc2.epoch,orte_util_lookup_epoch(&amp;proc2));
&gt; 
&gt;                         /* setup the cmd */
&gt;                         relay_msg = OBJ_NEW(opal_buffer_t);
&gt; 
&gt; Modified: trunk/orte/orted/orted_main.c
&gt; ==============================================================================
&gt; --- trunk/orte/orted/orted_main.c	(original)
&gt; +++ trunk/orte/orted/orted_main.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -388,14 +388,14 @@
&gt;     orte_process_info.my_daemon_uri = orte_rml.get_contact_info();
&gt;     ORTE_PROC_MY_DAEMON-&gt;jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     ORTE_PROC_MY_DAEMON-&gt;vpid = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -    ORTE_PROC_MY_DAEMON-&gt;epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(ORTE_PROC_MY_DAEMON-&gt;epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     /* if I am also the hnp, then update that contact info field too */
&gt;     if (ORTE_PROC_IS_HNP) {
&gt;         orte_process_info.my_hnp_uri = orte_rml.get_contact_info();
&gt;         ORTE_PROC_MY_HNP-&gt;jobid = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;         ORTE_PROC_MY_HNP-&gt;vpid = ORTE_PROC_MY_NAME-&gt;vpid;
&gt; -        ORTE_PROC_MY_HNP-&gt;epoch = ORTE_EPOCH_MIN;
&gt; +        ORTE_EPOCH_SET(ORTE_PROC_MY_HNP-&gt;epoch,ORTE_EPOCH_MIN);
&gt;     }
&gt; 
&gt;     /* setup the primary daemon command receive function */
&gt; @@ -495,7 +495,8 @@
&gt;         proc = OBJ_NEW(orte_proc_t);
&gt;         proc-&gt;name.jobid = jdata-&gt;jobid;
&gt;         proc-&gt;name.vpid = 0;
&gt; -        proc-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; +
&gt;         proc-&gt;state = ORTE_PROC_STATE_RUNNING;
&gt;         proc-&gt;app_idx = 0;
&gt;         proc-&gt;node = nodes[0]; /* hnp node must be there */
&gt; 
&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_compare_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/data_type_support/orte_dt_compare_fns.c	(original)
&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_compare_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -76,6 +76,7 @@
&gt;         }
&gt;     }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     /** check the epochs - if one of them is WILDCARD, then ignore
&gt;     * this field since anything is okay
&gt;     */
&gt; @@ -87,6 +88,7 @@
&gt;             return OPAL_VALUE1_GREATER;
&gt;         }
&gt;     }
&gt; +#endif
&gt; 
&gt;     /** only way to get here is if all fields are equal or WILDCARD */
&gt;     return OPAL_EQUAL;
&gt; @@ -122,6 +124,7 @@
&gt;     return OPAL_EQUAL;
&gt; }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; int orte_dt_compare_epoch(orte_epoch_t *value1,
&gt;                           orte_epoch_t *value2,
&gt;                           opal_data_type_t type)
&gt; @@ -136,6 +139,7 @@
&gt; 
&gt;     return OPAL_EQUAL;
&gt; }
&gt; +#endif
&gt; 
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; /**
&gt; 
&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c	(original)
&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_copy_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -61,7 +61,7 @@
&gt; 
&gt;     val-&gt;jobid = src-&gt;jobid;
&gt;     val-&gt;vpid = src-&gt;vpid;
&gt; -    val-&gt;epoch = src-&gt;epoch;
&gt; +    ORTE_EPOCH_SET(val-&gt;epoch,src-&gt;epoch);
&gt; 
&gt;     *dest = val;
&gt;     return ORTE_SUCCESS;
&gt; @@ -105,6 +105,7 @@
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; /*
&gt;  * EPOCH
&gt;  */
&gt; @@ -123,6 +124,7 @@
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; +#endif
&gt; 
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; 
&gt; 
&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c	(original)
&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_packing_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -58,7 +58,9 @@
&gt;     orte_process_name_t* proc;
&gt;     orte_jobid_t *jobid;
&gt;     orte_vpid_t *vpid;
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     orte_epoch_t *epoch;
&gt; +#endif
&gt; 
&gt;     /* collect all the jobids in a contiguous array */
&gt;     jobid = (orte_jobid_t*)malloc(num_vals * sizeof(orte_jobid_t));
&gt; @@ -100,6 +102,7 @@
&gt;     }
&gt;     free(vpid);
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     /* Collect all the epochs in a contiguous array */
&gt;     epoch = (orte_epoch_t *) malloc(num_vals * sizeof(orte_epoch_t));
&gt;     if (NULL == epoch) {
&gt; @@ -118,6 +121,7 @@
&gt;         return rc;
&gt;     }
&gt;     free(epoch);
&gt; +#endif
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; @@ -156,6 +160,7 @@
&gt;     return ret;
&gt; }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; /*
&gt;  * EPOCH
&gt;  */
&gt; @@ -171,6 +176,7 @@
&gt; 
&gt;     return ret;
&gt; }
&gt; +#endif
&gt; 
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; /*
&gt; 
&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_print_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/data_type_support/orte_dt_print_fns.c	(original)
&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_print_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -125,8 +125,10 @@
&gt;             orte_dt_quick_print(output, &quot;ORTE_STD_CNTR&quot;, prefix, src, ORTE_STD_CNTR_T);
&gt;             break;
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;         case ORTE_EPOCH:
&gt;             orte_dt_quick_print(output, &quot;ORTE_EPOCH&quot;, prefix, src, ORTE_EPOCH_T);
&gt; +#endif
&gt; 
&gt;         case ORTE_VPID:
&gt;             orte_dt_quick_print(output, &quot;ORTE_VPID&quot;, prefix, src, ORTE_VPID_T);
&gt; @@ -478,11 +480,21 @@
&gt;     if (orte_xml_output) {
&gt;         /* need to create the output in XML format */
&gt;         if (0 == src-&gt;pid) {
&gt; +#if ORTE_ENABLE_EPOCH
&gt;             asprintf(output, &quot;%s&lt;process rank=\&quot;%s\&quot; status=\&quot;%s\&quot; epoch=\&quot;%s\&quot;/&gt;\n&quot;, pfx2,
&gt;                      ORTE_VPID_PRINT(src-&gt;name.vpid), orte_proc_state_to_str(src-&gt;state), ORTE_EPOCH_PRINT(src-&gt;name.epoch));
&gt; +#else
&gt; +            asprintf(output, &quot;%s&lt;process rank=\&quot;%s\&quot; status=\&quot;%s\&quot;/&gt;\n&quot;, pfx2,
&gt; +                     ORTE_VPID_PRINT(src-&gt;name.vpid), orte_proc_state_to_str(src-&gt;state));
&gt; +#endif
&gt;         } else {
&gt; +#if ORTE_ENABLE_EPOCH
&gt;             asprintf(output, &quot;%s&lt;process rank=\&quot;%s\&quot; pid=\&quot;%d\&quot; status=\&quot;%s\&quot; epoch=\&quot;%s\&quot;/&gt;\n&quot;, pfx2,
&gt;                      ORTE_VPID_PRINT(src-&gt;name.vpid), (int)src-&gt;pid, orte_proc_state_to_str(src-&gt;state), ORTE_EPOCH_PRINT(src-&gt;name.epoch));
&gt; +#else
&gt; +            asprintf(output, &quot;%s&lt;process rank=\&quot;%s\&quot; pid=\&quot;%d\&quot; status=\&quot;%s\&quot;/&gt;\n&quot;, pfx2,
&gt; +                     ORTE_VPID_PRINT(src-&gt;name.vpid), (int)src-&gt;pid, orte_proc_state_to_str(src-&gt;state));
&gt; +#endif
&gt;         }
&gt;         free(pfx2);
&gt;         return ORTE_SUCCESS;
&gt; @@ -490,10 +502,17 @@
&gt; 
&gt;     if (!orte_devel_level_output) {
&gt;         /* just print a very simple output for users */
&gt; +#if ORTE_ENABLE_EPOCH
&gt;         asprintf(&amp;tmp, &quot;\n%sProcess OMPI jobid: %s Process rank: %s Epoch: %s&quot;, pfx2,
&gt;                  ORTE_JOBID_PRINT(src-&gt;name.jobid),
&gt;                  ORTE_VPID_PRINT(src-&gt;name.vpid),
&gt;                  ORTE_EPOCH_PRINT(src-&gt;name.epoch));
&gt; +#else
&gt; +        asprintf(&amp;tmp, &quot;\n%sProcess OMPI jobid: %s Process rank: %s Epoch: %s&quot;, pfx2,
&gt; +                 ORTE_JOBID_PRINT(src-&gt;name.jobid),
&gt; +                 ORTE_VPID_PRINT(src-&gt;name.vpid));
&gt; +#endif
&gt; +        
&gt;         /* set the return */
&gt;         *output = tmp;
&gt;         free(pfx2);
&gt; 
&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_size_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/data_type_support/orte_dt_size_fns.c	(original)
&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_size_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -45,9 +45,11 @@
&gt;             *size = sizeof(orte_std_cntr_t);
&gt;             break;
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;         case ORTE_EPOCH:
&gt;             *size = sizeof(orte_epoch_t);
&gt;             break;
&gt; +#endif
&gt; 
&gt;         case ORTE_VPID:
&gt;             *size = sizeof(orte_vpid_t);
&gt; 
&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_support.h
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/data_type_support/orte_dt_support.h	(original)
&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_support.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -52,9 +52,14 @@
&gt; int orte_dt_compare_vpid(orte_vpid_t *value1,
&gt;                          orte_vpid_t *value2,
&gt;                          opal_data_type_t type);
&gt; +#if ORTE_ENABLE_EPOCH
&gt; int orte_dt_compare_epoch(orte_epoch_t *value1,
&gt;                           orte_epoch_t *value2,
&gt;                           opal_data_type_t type);
&gt; +#define ORTE_EPOCH_CMP(n,m) ( (m) - (n) )
&gt; +#else
&gt; +#define ORTE_EPOCH_CMP(n,m) ( 0 )
&gt; +#endif
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; int orte_dt_compare_job(orte_job_t *value1, orte_job_t *value2, opal_data_type_t type);
&gt; int orte_dt_compare_node(orte_node_t *value1, orte_node_t *value2, opal_data_type_t type);
&gt; @@ -86,7 +91,9 @@
&gt; int orte_dt_copy_name(orte_process_name_t **dest, orte_process_name_t *src, opal_data_type_t type);
&gt; int orte_dt_copy_jobid(orte_jobid_t **dest, orte_jobid_t *src, opal_data_type_t type);
&gt; int orte_dt_copy_vpid(orte_vpid_t **dest, orte_vpid_t *src, opal_data_type_t type);
&gt; +#if ORTE_ENABLE_EPOCH
&gt; int orte_dt_copy_epoch(orte_epoch_t **dest, orte_epoch_t *src, opal_data_type_t type);
&gt; +#endif
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; int orte_dt_copy_job(orte_job_t **dest, orte_job_t *src, opal_data_type_t type);
&gt; int orte_dt_copy_node(orte_node_t **dest, orte_node_t *src, opal_data_type_t type);
&gt; @@ -116,8 +123,10 @@
&gt;                        int32_t num_vals, opal_data_type_t type);
&gt; int orte_dt_pack_vpid(opal_buffer_t *buffer, const void *src,
&gt;                       int32_t num_vals, opal_data_type_t type);
&gt; +#if ORTE_ENABLE_EPOCH
&gt; int orte_dt_pack_epoch(opal_buffer_t *buffer, const void *src,
&gt;                       int32_t num_vals, opal_data_type_t type);
&gt; +#endif
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; int orte_dt_pack_job(opal_buffer_t *buffer, const void *src,
&gt;                      int32_t num_vals, opal_data_type_t type);
&gt; @@ -185,8 +194,10 @@
&gt;                          int32_t *num_vals, opal_data_type_t type);
&gt; int orte_dt_unpack_vpid(opal_buffer_t *buffer, void *dest,
&gt;                         int32_t *num_vals, opal_data_type_t type);
&gt; +#if ORTE_ENABLE_EPOCH
&gt; int orte_dt_unpack_epoch(opal_buffer_t *buffer, void *dest,
&gt;                         int32_t *num_vals, opal_data_type_t type);
&gt; +#endif
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; int orte_dt_unpack_job(opal_buffer_t *buffer, void *dest,
&gt;                        int32_t *num_vals, opal_data_type_t type);
&gt; 
&gt; Modified: trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c	(original)
&gt; +++ trunk/orte/runtime/data_type_support/orte_dt_unpacking_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -54,7 +54,9 @@
&gt;     orte_process_name_t* proc;
&gt;     orte_jobid_t *jobid;
&gt;     orte_vpid_t *vpid;
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     orte_epoch_t *epoch;
&gt; +#endif
&gt; 
&gt;     num = *num_vals;
&gt; 
&gt; @@ -92,6 +94,7 @@
&gt;         return rc;
&gt;     }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     /* collect all the epochs in a contiguous array */
&gt;     epoch= (orte_epoch_t*)malloc(num * sizeof(orte_epoch_t));
&gt;     if (NULL == epoch) {
&gt; @@ -109,18 +112,21 @@
&gt;         free(jobid);
&gt;         return rc;
&gt;     }
&gt; +#endif
&gt; 
&gt;     /* build the names from the jobid/vpid/epoch arrays */
&gt;     proc = (orte_process_name_t*)dest;
&gt;     for (i=0; i &lt; num; i++) {
&gt;         proc-&gt;jobid = jobid[i];
&gt;         proc-&gt;vpid = vpid[i];
&gt; -        proc-&gt;epoch = epoch[i];
&gt; +        ORTE_EPOCH_SET(proc-&gt;epoch,epoch[i]);
&gt;         proc++;
&gt;     }
&gt; 
&gt;     /* cleanup */
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     free(epoch);
&gt; +#endif
&gt;     free(vpid);
&gt;     free(jobid);
&gt; 
&gt; @@ -159,6 +165,7 @@
&gt;     return ret;
&gt; }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; /*
&gt;  * EPOCH 
&gt;  */
&gt; @@ -174,6 +181,7 @@
&gt; 
&gt;     return ret;
&gt; }
&gt; +#endif
&gt; 
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt; /*
&gt; 
&gt; Modified: trunk/orte/runtime/orte_data_server.c
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/orte_data_server.c	(original)
&gt; +++ trunk/orte/runtime/orte_data_server.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -220,7 +220,7 @@
&gt;             data-&gt;port = port_name;
&gt;             data-&gt;owner.jobid = sender-&gt;jobid;
&gt;             data-&gt;owner.vpid = sender-&gt;vpid;
&gt; -            data-&gt;owner.epoch = sender-&gt;epoch;
&gt; +            ORTE_EPOCH_SET(data-&gt;owner.epoch,sender-&gt;epoch);
&gt; 
&gt;             /* store the data */
&gt;             data-&gt;index = opal_pointer_array_add(orte_data_server_store, data);
&gt; 
&gt; Modified: trunk/orte/runtime/orte_globals.c
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/orte_globals.c	(original)
&gt; +++ trunk/orte/runtime/orte_globals.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -277,6 +277,7 @@
&gt;         return rc;
&gt;     }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     tmp = ORTE_EPOCH;
&gt;     if (ORTE_SUCCESS != (rc = opal_dss.register_type(orte_dt_pack_epoch,
&gt;                                                      orte_dt_unpack_epoch,
&gt; @@ -290,6 +291,7 @@
&gt;         ORTE_ERROR_LOG(rc);
&gt;         return rc;
&gt;     }
&gt; +#endif
&gt; 
&gt; #if !ORTE_DISABLE_FULL_SUPPORT
&gt;     tmp = ORTE_JOB;
&gt; @@ -933,7 +935,7 @@
&gt;     proc-&gt;beat = 0;
&gt;     OBJ_CONSTRUCT(&amp;proc-&gt;stats, opal_ring_buffer_t);
&gt;     opal_ring_buffer_init(&amp;proc-&gt;stats, orte_stat_history_size);
&gt; -    proc-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; #if OPAL_ENABLE_FT_CR == 1
&gt;     proc-&gt;ckpt_state = 0;
&gt;     proc-&gt;ckpt_snapshot_ref = NULL;
&gt; 
&gt; Modified: trunk/orte/runtime/orte_init.c
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/orte_init.c	(original)
&gt; +++ trunk/orte/runtime/orte_init.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -57,8 +57,17 @@
&gt; char *orte_prohibited_session_dirs = NULL;
&gt; bool orte_create_session_dirs = true;
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +orte_process_name_t orte_name_wildcard = {ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD};
&gt; +#else
&gt; orte_process_name_t orte_name_wildcard = {ORTE_JOBID_WILDCARD, ORTE_VPID_WILDCARD};
&gt; +#endif
&gt; +
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +orte_process_name_t orte_name_invalid = {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_INVALID}; 
&gt; +#else
&gt; orte_process_name_t orte_name_invalid = {ORTE_JOBID_INVALID, ORTE_VPID_INVALID}; 
&gt; +#endif
&gt; 
&gt; 
&gt; #if OPAL_CC_USE_PRAGMA_IDENT
&gt; 
&gt; Modified: trunk/orte/runtime/orte_wait.h
&gt; ==============================================================================
&gt; --- trunk/orte/runtime/orte_wait.h	(original)
&gt; +++ trunk/orte/runtime/orte_wait.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -204,7 +204,7 @@
&gt;         mev = OBJ_NEW(orte_message_event_t);                    \
&gt;         mev-&gt;sender.jobid = (sndr)-&gt;jobid;                      \
&gt;         mev-&gt;sender.vpid = (sndr)-&gt;vpid;                        \
&gt; -        mev-&gt;sender.epoch = (sndr)-&gt;epoch;                      \
&gt; +        ORTE_EPOCH_SET(mev-&gt;sender.epoch,(sndr)-&gt;epoch);        \
&gt;         opal_dss.copy_payload(mev-&gt;buffer, (buf));              \
&gt;         mev-&gt;tag = (tg);                                        \
&gt;         mev-&gt;file = strdup((buf)-&gt;parent.cls_init_file_name);   \
&gt; @@ -228,7 +228,7 @@
&gt;         mev = OBJ_NEW(orte_message_event_t);                    \
&gt;         mev-&gt;sender.jobid = (sndr)-&gt;jobid;                      \
&gt;         mev-&gt;sender.vpid = (sndr)-&gt;vpid;                        \
&gt; -        mev-&gt;sender.epoch = (sndr)-&gt;epoch;                      \
&gt; +        ORTE_EPOCH_SET(mev-&gt;sender.epoch,(sndr)-&gt;epoch);        \
&gt;         opal_dss.copy_payload(mev-&gt;buffer, (buf));              \
&gt;         mev-&gt;tag = (tg);                                        \
&gt;         opal_event_evtimer_set(opal_event_base,                 \
&gt; @@ -258,7 +258,7 @@
&gt;         tmp = OBJ_NEW(orte_notify_event_t);                     \
&gt;         tmp-&gt;proc.jobid = (data)-&gt;jobid;                        \
&gt;         tmp-&gt;proc.vpid = (data)-&gt;vpid;                          \
&gt; -        tmp-&gt;proc.epoch = (data)-&gt;epoch;                        \
&gt; +        ORTE_EPOCH_SET(tmp-&gt;proc.epoch,(data)-&gt;epoch);          \
&gt;         opal_event.evtimer_set(opal_event_base,                 \
&gt;                                tmp-&gt;ev, (cbfunc), tmp);         \
&gt;         now.tv_sec = 0;                                         \
&gt; 
&gt; Modified: trunk/orte/test/system/oob_stress.c
&gt; ==============================================================================
&gt; --- trunk/orte/test/system/oob_stress.c	(original)
&gt; +++ trunk/orte/test/system/oob_stress.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -74,8 +74,7 @@
&gt; 
&gt;     for (j=1; j &lt; count+1; j++) {
&gt;         peer.vpid = (ORTE_PROC_MY_NAME-&gt;vpid + j) % orte_process_info.num_procs;
&gt; -        peer.epoch = ORTE_EPOCH_INVALID;
&gt; -        peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
&gt; +        ORTE_EPOCH_SET(peer.epoch,orte_ess.proc_get_epoch(&amp;peer));
&gt; 
&gt;         /* rank0 starts ring */
&gt;         if (ORTE_PROC_MY_NAME-&gt;vpid == 0) {
&gt; 
&gt; Modified: trunk/orte/test/system/orte_ring.c
&gt; ==============================================================================
&gt; --- trunk/orte/test/system/orte_ring.c	(original)
&gt; +++ trunk/orte/test/system/orte_ring.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -41,16 +41,14 @@
&gt;     if( right_peer_orte_name.vpid &gt;= num_peers ) {
&gt;         right_peer_orte_name.vpid = 0;
&gt;     }
&gt; -    right_peer_orte_name.epoch = ORTE_EPOCH_INVALID;
&gt; -    right_peer_orte_name.epoch = orte_ess.proc_get_epoch(&amp;right_peer_orte_name);
&gt; +    ORTE_EPOCH_SET(right_peer_orte_name.epoch,orte_ess.proc_get_epoch(&amp;right_peer_orte_name));
&gt; 
&gt;     left_peer_orte_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
&gt;     left_peer_orte_name.vpid   = ORTE_PROC_MY_NAME-&gt;vpid - 1;
&gt;     if( ORTE_PROC_MY_NAME-&gt;vpid == 0 ) {
&gt;         left_peer_orte_name.vpid = num_peers - 1;
&gt;     }
&gt; -    left_peer_orte_name.epoch = ORTE_EPOCH_INVALID;
&gt; -    left_peer_orte_name.epoch = orte_ess.proc_get_epoch(&amp;left_peer_orte_name);
&gt; +    ORTE_EPOCH_SET(left_peer_orte_name.epoch,orte_ess.proc_get_epoch(&amp;left_peer_orte_name));
&gt; 
&gt;     printf(&quot;My name is: %s -- PID %d\tMy Left Peer is %s\tMy Right Peer is %s\n&quot;,
&gt;            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), getpid(),
&gt; 
&gt; Modified: trunk/orte/test/system/orte_spawn.c
&gt; ==============================================================================
&gt; --- trunk/orte/test/system/orte_spawn.c	(original)
&gt; +++ trunk/orte/test/system/orte_spawn.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -74,8 +74,8 @@
&gt;     for (i=0; i &lt; app-&gt;num_procs; i++) {
&gt;         name.vpid = i;
&gt; 
&gt; -        name.epoch = ORTE_EPOCH_INVALID;
&gt; -        name.epoch = orte_ess.proc_get_epoch(&amp;name);
&gt; +        ORTE_EPOCH_SET(name.epoch,orte_ess.proc_get_epoch(&amp;name));
&gt; +
&gt;         fprintf(stderr, &quot;Parent: sending message to child %s\n&quot;, ORTE_NAME_PRINT(&amp;name));
&gt;         if (0 &gt; (rc = orte_rml.send(&amp;name, &amp;msg, 1, MY_TAG, 0))) {
&gt;             ORTE_ERROR_LOG(rc);
&gt; 
&gt; Modified: trunk/orte/tools/orte-ps/orte-ps.c
&gt; ==============================================================================
&gt; --- trunk/orte/tools/orte-ps/orte-ps.c	(original)
&gt; +++ trunk/orte/tools/orte-ps/orte-ps.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -869,8 +869,14 @@
&gt;         }
&gt; 
&gt;         /* query the HNP for info on the procs in this job */
&gt; -        if (ORTE_SUCCESS != (ret = orte_util_comm_query_proc_info(&amp;(hnpinfo-&gt;hnp-&gt;name), job-&gt;jobid,
&gt; -                                                                  ORTE_VPID_WILDCARD, ORTE_EPOCH_WILDCARD, &amp;cnt, &amp;procs))) {
&gt; +        if (ORTE_SUCCESS != (ret = orte_util_comm_query_proc_info(&amp;(hnpinfo-&gt;hnp-&gt;name), 
&gt; +                                                                  job-&gt;jobid,
&gt; +                                                                  ORTE_VPID_WILDCARD, 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +                                                                  ORTE_EPOCH_WILDCARD, 
&gt; +#endif
&gt; +                                                                  &amp;cnt, 
&gt; +                                                                  &amp;procs))) {
&gt;             ORTE_ERROR_LOG(ret);
&gt;         }
&gt;         job-&gt;procs-&gt;addr = (void**)procs;
&gt; 
&gt; Modified: trunk/orte/tools/orte-top/orte-top.c
&gt; ==============================================================================
&gt; --- trunk/orte/tools/orte-top/orte-top.c	(original)
&gt; +++ trunk/orte/tools/orte-top/orte-top.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -471,7 +471,7 @@
&gt;     if (NULL == ranks) {
&gt;         /* take all ranks */
&gt;         proc.vpid = ORTE_VPID_WILDCARD;
&gt; -        proc.epoch = ORTE_EPOCH_WILDCARD;
&gt; +        ORTE_EPOCH_SET(proc.epoch,ORTE_EPOCH_WILDCARD);
&gt;         if (ORTE_SUCCESS != (ret = opal_dss.pack(&amp;cmdbuf, &amp;proc, 1, ORTE_NAME))) {
&gt;             ORTE_ERROR_LOG(ret);
&gt;             goto cleanup;
&gt; 
&gt; Modified: trunk/orte/util/comm/comm.c
&gt; ==============================================================================
&gt; --- trunk/orte/util/comm/comm.c	(original)
&gt; +++ trunk/orte/util/comm/comm.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -433,8 +433,13 @@
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; int orte_util_comm_query_proc_info(const orte_process_name_t *hnp, orte_jobid_t job, orte_vpid_t vpid,
&gt;                                    orte_epoch_t epoch, int *num_procs, orte_proc_t ***proc_info_array)
&gt; +#else
&gt; +int orte_util_comm_query_proc_info(const orte_process_name_t *hnp, orte_jobid_t job, orte_vpid_t vpid,
&gt; +                                   int *num_procs, orte_proc_t ***proc_info_array)
&gt; +#endif
&gt; {
&gt;     int ret;
&gt;     int32_t cnt, cnt_procs, n;
&gt; @@ -463,11 +468,13 @@
&gt;         OBJ_RELEASE(cmd);
&gt;         return ret;
&gt;     }
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     if (ORTE_SUCCESS != (ret = opal_dss.pack(cmd, &amp;epoch, 1, ORTE_EPOCH))) {
&gt;         ORTE_ERROR_LOG(ret);
&gt;         OBJ_RELEASE(cmd);
&gt;         return ret;
&gt;     }
&gt; +#endif
&gt;     /* define a max time to wait for send to complete */
&gt;     timer_fired = false;
&gt;     error_exit = ORTE_SUCCESS;
&gt; 
&gt; Modified: trunk/orte/util/comm/comm.h
&gt; ==============================================================================
&gt; --- trunk/orte/util/comm/comm.h	(original)
&gt; +++ trunk/orte/util/comm/comm.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -52,7 +52,10 @@
&gt;                                                  int *num_nodes, orte_node_t ***node_info_array);
&gt; 
&gt; ORTE_DECLSPEC int orte_util_comm_query_proc_info(const orte_process_name_t *hnp, orte_jobid_t job, orte_vpid_t vpid,
&gt; -                                                 orte_epoch_t epoch, int *num_procs, orte_proc_t ***proc_info_array);
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +                                                 orte_epoch_t epoch, 
&gt; +#endif
&gt; +                                                 int *num_procs, orte_proc_t ***proc_info_array);
&gt; 
&gt; ORTE_DECLSPEC int orte_util_comm_spawn_job(const orte_process_name_t *hnp, orte_job_t *jdata);
&gt; 
&gt; 
&gt; Modified: trunk/orte/util/hnp_contact.c
&gt; ==============================================================================
&gt; --- trunk/orte/util/hnp_contact.c	(original)
&gt; +++ trunk/orte/util/hnp_contact.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -55,7 +55,8 @@
&gt; {
&gt;     ptr-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     ptr-&gt;name.vpid = ORTE_VPID_INVALID;
&gt; -    ptr-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(ptr-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; +
&gt;     ptr-&gt;rml_uri = NULL;
&gt; }
&gt; static void orte_hnp_contact_destruct(orte_hnp_contact_t *ptr)
&gt; 
&gt; Modified: trunk/orte/util/name_fns.c
&gt; ==============================================================================
&gt; --- trunk/orte/util/name_fns.c	(original)
&gt; +++ trunk/orte/util/name_fns.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -46,7 +46,7 @@
&gt; {
&gt;     list-&gt;name.jobid = ORTE_JOBID_INVALID;
&gt;     list-&gt;name.vpid = ORTE_VPID_INVALID;
&gt; -    list-&gt;name.epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(list-&gt;name.epoch,ORTE_EPOCH_MIN);
&gt; }
&gt; 
&gt; /* destructor - used to free any resources held by instance */
&gt; @@ -116,7 +116,10 @@
&gt; char* orte_util_print_name_args(const orte_process_name_t *name)
&gt; {
&gt;     orte_print_args_buffers_t *ptr;
&gt; -    char *job, *vpid, *epoch;
&gt; +    char *job, *vpid; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +    char *epoch;
&gt; +#endif
&gt; 
&gt;     /* protect against NULL names */
&gt;     if (NULL == name) {
&gt; @@ -141,7 +144,7 @@
&gt;      */
&gt;     job = orte_util_print_jobids(name-&gt;jobid);
&gt;     vpid = orte_util_print_vpids(name-&gt;vpid);
&gt; -    epoch = orte_util_print_epoch(name-&gt;epoch);
&gt; +    ORTE_EPOCH_SET(epoch,orte_util_print_epoch(name-&gt;epoch));
&gt; 
&gt;     /* get the next buffer */
&gt;     ptr = get_print_name_buffer();
&gt; @@ -156,9 +159,15 @@
&gt;         ptr-&gt;cntr = 0;
&gt;     }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
&gt;              ORTE_PRINT_NAME_ARGS_MAX_SIZE, 
&gt;              &quot;[%s,%s,%s]&quot;, job, vpid, epoch);
&gt; +#else
&gt; +    snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
&gt; +             ORTE_PRINT_NAME_ARGS_MAX_SIZE, 
&gt; +             &quot;[%s,%s]&quot;, job, vpid);
&gt; +#endif
&gt; 
&gt;     return ptr-&gt;buffers[ptr-&gt;cntr-1];
&gt; }
&gt; @@ -282,6 +291,7 @@
&gt;     return ptr-&gt;buffers[ptr-&gt;cntr-1];
&gt; }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; char* orte_util_print_epoch(const orte_epoch_t epoch)
&gt; {
&gt;     orte_print_args_buffers_t *ptr;
&gt; @@ -309,6 +319,7 @@
&gt;     }
&gt;     return ptr-&gt;buffers[ptr-&gt;cntr-1];
&gt; }
&gt; +#endif
&gt; 
&gt; 
&gt; 
&gt; @@ -403,6 +414,7 @@
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; int orte_util_convert_epoch_to_string(char **epoch_string, const orte_epoch_t epoch)
&gt; {
&gt;     /* check for wildcard value - handle appropriately */
&gt; @@ -425,7 +437,6 @@
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; -
&gt; int orte_util_convert_string_to_epoch(orte_epoch_t *epoch, const char* epoch_string)
&gt; {
&gt;     if (NULL == epoch_string) {  /* got an error */
&gt; @@ -450,6 +461,7 @@
&gt; 
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; +#endif
&gt; 
&gt; int orte_util_convert_string_to_process_name(orte_process_name_t *name,
&gt;                                              const char* name_string)
&gt; @@ -457,13 +469,15 @@
&gt;     char *temp, *token;
&gt;     orte_jobid_t job;
&gt;     orte_vpid_t vpid;
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     orte_epoch_t epoch;
&gt; +#endif
&gt;     int return_code=ORTE_SUCCESS;
&gt; -    
&gt; +
&gt;     /* set default */
&gt;     name-&gt;jobid = ORTE_JOBID_INVALID;
&gt;     name-&gt;vpid = ORTE_VPID_INVALID;
&gt; -    name-&gt;epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(name-&gt;epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     /* check for NULL string - error */
&gt;     if (NULL == name_string) {
&gt; @@ -510,6 +524,7 @@
&gt;         vpid = strtoul(token, NULL, 10);
&gt;     }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     token = strtok(NULL, ORTE_SCHEMA_DELIMITER_STRING);  /** get next field -&gt; epoch*/
&gt; 
&gt;     /* check for error */
&gt; @@ -528,10 +543,11 @@
&gt;     } else {
&gt;         epoch = strtoul(token, NULL, 10);
&gt;     }
&gt; +#endif
&gt; 
&gt;     name-&gt;jobid = job;
&gt;     name-&gt;vpid = vpid;
&gt; -    name-&gt;epoch = epoch;
&gt; +    ORTE_EPOCH_SET(name-&gt;epoch,epoch);
&gt; 
&gt;     free(temp);
&gt; 
&gt; @@ -568,6 +584,7 @@
&gt;         asprintf(&amp;tmp2, &quot;%s%c%lu&quot;, tmp, ORTE_SCHEMA_DELIMITER_CHAR, (unsigned long)name-&gt;vpid);
&gt;     }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     if (ORTE_EPOCH_WILDCARD == name-&gt;epoch) {
&gt;         asprintf(name_string, &quot;%s%c%s&quot;, tmp2, ORTE_SCHEMA_DELIMITER_CHAR, ORTE_SCHEMA_WILDCARD_STRING);
&gt;     } else if (ORTE_EPOCH_INVALID == name-&gt;epoch) {
&gt; @@ -575,6 +592,10 @@
&gt;     } else {
&gt;         asprintf(name_string, &quot;%s%c%lu&quot;, tmp2, ORTE_SCHEMA_DELIMITER_CHAR, (unsigned long)name-&gt;epoch);
&gt;     }
&gt; +#else
&gt; +    asprintf(name_string, &quot;%s&quot;, tmp2);
&gt; +#endif
&gt; +
&gt;     free(tmp);
&gt;     free(tmp2);
&gt; 
&gt; @@ -585,8 +606,11 @@
&gt; /****    CREATE PROCESS NAME    ****/
&gt; int orte_util_create_process_name(orte_process_name_t **name,
&gt;                                   orte_jobid_t job,
&gt; -                                  orte_vpid_t vpid,
&gt; -                                  orte_epoch_t epoch)
&gt; +                                  orte_vpid_t vpid
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +                                  ,orte_epoch_t epoch
&gt; +#endif
&gt; +                                  )
&gt; {
&gt;     *name = NULL;
&gt; 
&gt; @@ -598,7 +622,8 @@
&gt; 
&gt;     (*name)-&gt;jobid = job;
&gt;     (*name)-&gt;vpid = vpid;
&gt; -    (*name)-&gt;epoch = epoch;
&gt; +    ORTE_EPOCH_SET((*name)-&gt;epoch,epoch);
&gt; +
&gt;     return ORTE_SUCCESS;
&gt; }
&gt; 
&gt; @@ -655,6 +680,7 @@
&gt;         }
&gt;     }
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt;     /* Get here if jobid's and vpid's are equal, or not being checked.
&gt;      * Now check epoch.
&gt;      */
&gt; @@ -666,6 +692,7 @@
&gt;             return OPAL_VALUE1_GREATER;
&gt;         }
&gt;     }
&gt; +#endif
&gt; 
&gt;     /* only way to get here is if all fields are being checked and are equal,
&gt;     * or jobid not checked, but vpid equal,
&gt; 
&gt; Modified: trunk/orte/util/name_fns.h
&gt; ==============================================================================
&gt; --- trunk/orte/util/name_fns.h	(original)
&gt; +++ trunk/orte/util/name_fns.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -61,9 +61,13 @@
&gt; #define ORTE_VPID_PRINT(n) \
&gt;     orte_util_print_vpids(n)
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; ORTE_DECLSPEC char* orte_util_print_epoch(const orte_epoch_t epoch);
&gt; #define ORTE_EPOCH_PRINT(n) \
&gt;     orte_util_print_epoch(n)
&gt; +#else
&gt; +#define ORTE_EPOCH_PRINT(n)
&gt; +#endif
&gt; 
&gt; ORTE_DECLSPEC char* orte_util_print_job_family(const orte_jobid_t job);
&gt; #define ORTE_JOB_FAMILY_PRINT(n) \
&gt; @@ -104,6 +108,24 @@
&gt; #define ORTE_JOBID_IS_DAEMON(n)  \
&gt;     !((n) &amp; 0x0000ffff)
&gt; 
&gt; +/* Macro for getting the epoch out of the process name */
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +#define ORTE_EPOCH_GET(n) \
&gt; +    ((n)-&gt;epoch)
&gt; +#else
&gt; +#define ORTE_EPOCH_GET(n)
&gt; +#endif
&gt; +
&gt; +/* Macro for setting the epoch in the process name */
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +#define ORTE_EPOCH_SET(n,m) \
&gt; +    ( (n) = (m) )
&gt; +#else
&gt; +#define ORTE_EPOCH_SET(n,m) \
&gt; +    do {                    \
&gt; +    } while(0);
&gt; +#endif
&gt; +
&gt; /* List of names for general use */
&gt; struct orte_namelist_t {
&gt;     opal_list_item_t item;      /**&lt; Allows this item to be placed on a list */
&gt; @@ -117,16 +139,24 @@
&gt; ORTE_DECLSPEC int orte_util_convert_string_to_jobid(orte_jobid_t *jobid, const char* jobidstring);
&gt; ORTE_DECLSPEC int orte_util_convert_vpid_to_string(char **vpid_string, const orte_vpid_t vpid);
&gt; ORTE_DECLSPEC int orte_util_convert_string_to_vpid(orte_vpid_t *vpid, const char* vpidstring);
&gt; +#if ORTE_ENABLE_EPOCH
&gt; ORTE_DECLSPEC int orte_util_convert_epoch_to_string(char **epoch_string, const orte_epoch_t epoch);
&gt; ORTE_DECLSPEC int orte_util_convert_string_to_epoch(orte_vpid_t *epoch, const char* epochstring);
&gt; +#endif
&gt; ORTE_DECLSPEC int orte_util_convert_string_to_process_name(orte_process_name_t *name,
&gt;                                              const char* name_string);
&gt; ORTE_DECLSPEC int orte_util_convert_process_name_to_string(char** name_string,
&gt;                                              const orte_process_name_t *name);
&gt; +#if ORTE_ENABLE_EPOCH
&gt; ORTE_DECLSPEC int orte_util_create_process_name(orte_process_name_t **name,
&gt;                                   orte_jobid_t job,
&gt;                                   orte_vpid_t vpid,
&gt;                                   orte_epoch_t epoch);
&gt; +#else
&gt; +ORTE_DECLSPEC int orte_util_create_process_name(orte_process_name_t **name,
&gt; +                                  orte_jobid_t job,
&gt; +                                  orte_vpid_t vpid);
&gt; +#endif
&gt; ORTE_DECLSPEC int orte_util_compare_name_fields(orte_ns_cmp_bitmask_t fields,
&gt;                                   const orte_process_name_t* name1,
&gt;                                   const orte_process_name_t* name2);
&gt; 
&gt; Modified: trunk/orte/util/nidmap.c
&gt; ==============================================================================
&gt; --- trunk/orte/util/nidmap.c	(original)
&gt; +++ trunk/orte/util/nidmap.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -249,7 +249,7 @@
&gt;          */
&gt;         /* construct the URI */
&gt;         proc.vpid = node-&gt;daemon;
&gt; -        proc.epoch = ORTE_EPOCH_MIN;
&gt; +        ORTE_EPOCH_SET(proc.epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;         orte_util_convert_process_name_to_string(&amp;proc_name, &amp;proc);
&gt;         asprintf(&amp;uri, &quot;%s;tcp://%s:%d&quot;, proc_name, addr, (int)orte_process_info.my_port);
&gt; @@ -1001,6 +1001,7 @@
&gt; }
&gt; #endif
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; /* Look up the current epoch value that we have stored locally.
&gt;  *
&gt;  * Note that this will not ping the HNP to get the most up to date epoch stored
&gt; @@ -1023,7 +1024,9 @@
&gt;     /*print_orte_job_data();*/
&gt;     return e;
&gt; }
&gt; +#endif
&gt; 
&gt; +#if ORTE_RESIL_ORTE
&gt; bool orte_util_proc_is_running(orte_process_name_t *proc) {
&gt;     int i;
&gt;     unsigned int j;
&gt; @@ -1078,7 +1081,9 @@
&gt; 
&gt;     return ORTE_ERROR;
&gt; }
&gt; +#endif
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; /*
&gt;  * This function performs both the get and set operations on the epoch for a
&gt;  * sepcific process name. If the epoch passed into the function is
&gt; @@ -1091,6 +1096,11 @@
&gt;     orte_job_t *jdata;
&gt;     orte_proc_t *pdata;
&gt; 
&gt; +    if (ORTE_JOBID_INVALID == proc-&gt;jobid || 
&gt; +        ORTE_VPID_INVALID  == proc-&gt;vpid) {
&gt; +        return ORTE_EPOCH_INVALID;
&gt; +    }
&gt; +
&gt;     /* Sanity check just to make sure we don't overwrite our existing
&gt;      * orte_job_data.
&gt;      */
&gt; @@ -1165,4 +1175,5 @@
&gt;         return ORTE_EPOCH_MIN;
&gt;     }
&gt; }
&gt; +#endif
&gt; 
&gt; 
&gt; Modified: trunk/orte/util/nidmap.h
&gt; ==============================================================================
&gt; --- trunk/orte/util/nidmap.h	(original)
&gt; +++ trunk/orte/util/nidmap.h	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -48,11 +48,19 @@
&gt; ORTE_DECLSPEC orte_pmap_t* orte_util_lookup_pmap(orte_process_name_t *proc);
&gt; ORTE_DECLSPEC orte_nid_t* orte_util_lookup_nid(orte_process_name_t *proc);
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; ORTE_DECLSPEC orte_epoch_t orte_util_lookup_epoch(orte_process_name_t *proc);
&gt; ORTE_DECLSPEC orte_epoch_t orte_util_set_epoch(orte_process_name_t *proc, orte_epoch_t epoch);
&gt; +#endif
&gt; 
&gt; ORTE_DECLSPEC int orte_util_set_proc_state(orte_process_name_t *proc, orte_proc_state_t state);
&gt; +
&gt; +#if ORTE_RESIL_ORTE
&gt; +#define PROC_IS_RUNNING(n) orte_util_proc_is_running(n)
&gt; ORTE_DECLSPEC bool orte_util_proc_is_running(orte_process_name_t *proc);
&gt; +#else
&gt; +#define PROC_IS_RUNNING(n) ( true )
&gt; +#endif
&gt; 
&gt; ORTE_DECLSPEC int orte_util_encode_nodemap(opal_byte_object_t *boptr);
&gt; ORTE_DECLSPEC int orte_util_decode_nodemap(opal_byte_object_t *boptr);
&gt; @@ -72,5 +80,8 @@
&gt; END_C_DECLS
&gt; 
&gt; /* Local functions */
&gt; +#if ORTE_ENABLE_EPOCH
&gt; orte_epoch_t get_epoch_from_orte_job_data(orte_process_name_t *proc, orte_epoch_t epoch);
&gt; #endif
&gt; +
&gt; +#endif
&gt; 
&gt; Modified: trunk/orte/util/proc_info.c
&gt; ==============================================================================
&gt; --- trunk/orte/util/proc_info.c	(original)
&gt; +++ trunk/orte/util/proc_info.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -36,13 +36,19 @@
&gt; 
&gt; #include &quot;orte/util/proc_info.h&quot;
&gt; 
&gt; +#if ORTE_ENABLE_EPOCH
&gt; +#define ORTE_NAME_INVALID {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN}
&gt; +#else
&gt; +#define ORTE_NAME_INVALID {ORTE_JOBID_INVALID, ORTE_VPID_INVALID}
&gt; +#endif
&gt; +
&gt; ORTE_DECLSPEC orte_proc_info_t orte_process_info = {
&gt; -    /*  .my_name =              */   {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN},
&gt; -    /*  .my_daemon =            */   {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN},
&gt; +    /*  .my_name =              */   ORTE_NAME_INVALID,
&gt; +    /*  .my_daemon =            */   ORTE_NAME_INVALID,
&gt;     /*  .my_daemon_uri =        */   NULL,
&gt; -    /*  .my_hnp =               */   {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN},
&gt; +    /*  .my_hnp =               */   ORTE_NAME_INVALID,
&gt;     /*  .my_hnp_uri =           */   NULL,
&gt; -    /*  .my_parent =            */   {ORTE_JOBID_INVALID, ORTE_VPID_INVALID, ORTE_EPOCH_MIN},
&gt; +    /*  .my_parent =            */   ORTE_NAME_INVALID,
&gt;     /*  .hnp_pid =              */   0,
&gt;     /*  .app_num =              */   0,
&gt;     /*  .num_procs =            */   1,
&gt; 
&gt; Modified: trunk/test/util/orte_session_dir.c
&gt; ==============================================================================
&gt; --- trunk/test/util/orte_session_dir.c	(original)
&gt; +++ trunk/test/util/orte_session_dir.c	2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
&gt; @@ -57,7 +57,7 @@
&gt;     orte_process_info.my_name-&gt;cellid = 0;
&gt;     orte_process_info.my_name-&gt;jobid = 0;
&gt;     orte_process_info.my_name-&gt;vpid = 0;
&gt; -    orte_process_info.my_name-&gt;epoch = ORTE_EPOCH_MIN;
&gt; +    ORTE_EPOCH_SET(orte_process_info.my_name-&gt;epoch,ORTE_EPOCH_MIN);
&gt; 
&gt;     test_init(&quot;orte_session_dir_t&quot;);
&gt;     test_out = fopen( &quot;test_session_dir_out&quot;, &quot;w+&quot; );
&gt; _______________________________________________
&gt; svn-full mailing list
&gt; svn-full_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9700.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Previous message:</strong> <a href="9698.php">Josh Hursey: "[OMPI devel] Open MPI MTT Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9700.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Reply:</strong> <a href="9700.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Reply:</strong> <a href="9701.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Reply:</strong> <a href="9729.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
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
