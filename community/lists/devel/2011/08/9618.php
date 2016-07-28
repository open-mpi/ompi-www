<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 11:18:46 2011" -->
<!-- isoreceived="20110808151846" -->
<!-- sent="Mon, 8 Aug 2011 11:18:23 -0400" -->
<!-- isosent="20110808151823" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015" -->
<!-- id="0517F513-040E-446E-BD6C-7D8D86B9EC3C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201108081511.p78FBvvD023224_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 11:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<li><strong>Previous message:</strong> <a href="9617.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: Ralph's out today.  He'll be back tomorrow.
<br>
<p>I'm not really part of this ORTE discussion, but I am curious about a code style that I see in this commit: assigning ORTE_EPOCH_INVALID to a field, and then immediately overwriting that field with another value.  E.g.:
<br>
<p><span class="quotelev1">&gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev1">&gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<p><p>This technique is used throughout this patch.
<br>
<p>What is the purpose for this?  As I understand it, this won't squash any valgrind warnings, and may even get eliminated by the compiler as dead code because it seems to be useless.
<br>
<p><p><p>On Aug 8, 2011, at 11:11 AM, wbland_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: wbland
</span><br>
<span class="quotelev1">&gt; Date: 2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25015
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25015">https://svn.open-mpi.org/trac/ompi/changeset/25015</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Make sure that the epoch is initialized everywhere so we don't get weird output
</span><br>
<span class="quotelev1">&gt; during valgrind. This shouldn't have caused any problems with any actual
</span><br>
<span class="quotelev1">&gt; execution. Just extra warnings in valgrind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            |     2 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/proc/proc.c                                |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/alps/ess_alps_module.c             |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/env/ess_env_module.c               |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/lsf/ess_lsf_module.c               |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/slave/ess_slave_module.c           |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/slurm/ess_slurm_module.c           |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c       |    12 +++++++-----                            
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/hnp/iof_hnp.c                      |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c      |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_open.c             |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c     |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_orted_cmds.c         |     2 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_receive.c            |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c    |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c      |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/seq/rmaps_seq.c                  |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rml/oob/rml_oob_component.c            |     4 ----                                    
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/binomial/routed_binomial.c      |     4 ++++                                    
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/cm/routed_cm.c                  |     4 ++++                                    
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/linear/routed_linear.c          |     2 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/radix/routed_radix.c            |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/slave/routed_slave.c            |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/sstore/central/sstore_central_global.c |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/sstore/stage/sstore_stage_global.c     |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/orted/orted_comm.c                         |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/oob_stress.c                   |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/orte_ring.c                    |     2 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/orte/test/system/orte_spawn.c                   |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   29 files changed, 48 insertions(+), 11 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -5284,6 +5284,7 @@
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev1">&gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if( NULL == (peer_ref = find_peer(peer_name))) {
</span><br>
<span class="quotelev1">&gt; @@ -5345,6 +5346,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev1">&gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if ( 0 &gt; (ret = orte_rml.recv_buffer_nb(&amp;peer_name,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/proc/proc.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/proc/proc.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -362,7 +362,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* Does not change: proc-&gt;proc_name.vpid */
</span><br>
<span class="quotelev1">&gt;         proc-&gt;proc_name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt; -        
</span><br>
<span class="quotelev1">&gt; +        proc-&gt;proc_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         proc-&gt;proc_name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;proc_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* Make sure to clear the local flag before we set it below */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/alps/ess_alps_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/alps/ess_alps_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/alps/ess_alps_module.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -351,6 +351,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;vpid = (orte_vpid_t) cnos_get_rank() + starting_vpid;
</span><br>
<span class="quotelev1">&gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/env/ess_env_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/env/ess_env_module.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -392,6 +392,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev1">&gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/lsf/ess_lsf_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/lsf/ess_lsf_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/lsf/ess_lsf_module.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -357,6 +357,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev1">&gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* fix up the base name and make it the &quot;real&quot; name */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/slave/ess_slave_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/slave/ess_slave_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/slave/ess_slave_module.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -280,6 +280,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev1">&gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/slurm/ess_slurm_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/slurm/ess_slurm_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/slurm/ess_slurm_module.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -368,6 +368,7 @@
</span><br>
<span class="quotelev1">&gt;     /* fix up the vpid and make it the &quot;real&quot; vpid */
</span><br>
<span class="quotelev1">&gt;     slurm_nodeid = atoi(getenv(&quot;SLURM_NODEID&quot;));
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid + slurm_nodeid;
</span><br>
<span class="quotelev1">&gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_NAME-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -168,7 +168,7 @@
</span><br>
<span class="quotelev1">&gt;     if (vpids[0] == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt;         /* I send first */
</span><br>
<span class="quotelev1">&gt;         peer.vpid = vpids[1];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* setup a temp buffer so I can inform the other side as to the
</span><br>
<span class="quotelev1">&gt; @@ -226,7 +226,7 @@
</span><br>
<span class="quotelev1">&gt;         opal_dss.pack(&amp;buf, &amp;num_entries, 1, OPAL_INT32);
</span><br>
<span class="quotelev1">&gt;         opal_dss.copy_payload(&amp;buf, sendbuf);
</span><br>
<span class="quotelev1">&gt;         peer.vpid = vpids[0];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         OPAL_OUTPUT_VERBOSE((5, orte_grpcomm_base.output,
</span><br>
<span class="quotelev1">&gt; @@ -320,7 +320,7 @@
</span><br>
<span class="quotelev1">&gt;         /* first send my current contents */
</span><br>
<span class="quotelev1">&gt;         nv = (rank - distance + np) % np;
</span><br>
<span class="quotelev1">&gt;         peer.vpid = vpids[nv];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         OBJ_CONSTRUCT(&amp;buf, opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; @@ -340,7 +340,7 @@
</span><br>
<span class="quotelev1">&gt;         num_recvd = 0;
</span><br>
<span class="quotelev1">&gt;         nv = (rank + distance) % np;
</span><br>
<span class="quotelev1">&gt;         peer.vpid = vpids[nv];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         OBJ_CONSTRUCT(&amp;bucket, opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; @@ -439,7 +439,7 @@
</span><br>
<span class="quotelev1">&gt;         /* first send my current contents */
</span><br>
<span class="quotelev1">&gt;         nv = rank ^ distance;
</span><br>
<span class="quotelev1">&gt;         peer.vpid = vpids[nv];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         OBJ_CONSTRUCT(&amp;buf, opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; @@ -646,6 +646,7 @@
</span><br>
<span class="quotelev1">&gt;         proc.jobid = jobid;
</span><br>
<span class="quotelev1">&gt;         proc.vpid = 0;
</span><br>
<span class="quotelev1">&gt;         while (proc.vpid &lt; jobdat-&gt;num_procs &amp;&amp; 0 &lt; opal_list_get_size(&amp;daemon_tree)) {
</span><br>
<span class="quotelev1">&gt; +            proc.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;             proc.epoch = orte_ess.proc_get_epoch(&amp;proc);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /* get the daemon that hosts this proc */
</span><br>
<span class="quotelev1">&gt; @@ -712,6 +713,7 @@
</span><br>
<span class="quotelev1">&gt;         /* send it */
</span><br>
<span class="quotelev1">&gt;         my_parent.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;         my_parent.vpid = orte_routed.get_routing_tree(NULL);
</span><br>
<span class="quotelev1">&gt; +        my_parent.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         my_parent.epoch = orte_ess.proc_get_epoch(&amp;my_parent);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         OPAL_OUTPUT_VERBOSE((5, orte_grpcomm_base.output,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/iof/hnp/iof_hnp.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/iof/hnp/iof_hnp.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/iof/hnp/iof_hnp.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -281,6 +281,7 @@
</span><br>
<span class="quotelev1">&gt;                                  &amp;mca_iof_hnp_component.sinks);
</span><br>
<span class="quotelev1">&gt;             sink-&gt;daemon.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;             sink-&gt;daemon.vpid = proc-&gt;node-&gt;daemon-&gt;name.vpid;
</span><br>
<span class="quotelev1">&gt; +            sink-&gt;daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;             sink-&gt;daemon.epoch = orte_ess.proc_get_epoch(&amp;sink-&gt;daemon);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/odls/base/odls_base_default_fns.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/odls/base/odls_base_default_fns.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -734,6 +734,7 @@
</span><br>
<span class="quotelev1">&gt;     proc.jobid = jobdat-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;     for (j=0; j &lt; jobdat-&gt;num_procs; j++) {
</span><br>
<span class="quotelev1">&gt;         proc.vpid = j;
</span><br>
<span class="quotelev1">&gt; +        proc.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         proc.epoch = orte_ess.proc_get_epoch(&amp;proc);
</span><br>
<span class="quotelev1">&gt;         /* get the vpid of the daemon that is to host this proc */
</span><br>
<span class="quotelev1">&gt;         if (ORTE_VPID_INVALID == (host_daemon = orte_ess.proc_get_daemon(&amp;proc))) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/odls/base/odls_base_open.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/odls/base/odls_base_open.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/odls/base/odls_base_open.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -200,6 +200,7 @@
</span><br>
<span class="quotelev1">&gt;                  * will be in the job - we'll check later
</span><br>
<span class="quotelev1">&gt;                  */
</span><br>
<span class="quotelev1">&gt;                 nm-&gt;name.vpid = rank;
</span><br>
<span class="quotelev1">&gt; +                nm-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;                 nm-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;nm-&gt;name);
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             opal_list_append(&amp;orte_odls_globals.xterm_ranks, &amp;nm-&gt;item);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -377,6 +377,7 @@
</span><br>
<span class="quotelev1">&gt;     /* push stdin - the IOF will know what to do with the specified target */
</span><br>
<span class="quotelev1">&gt;     name.jobid = job;
</span><br>
<span class="quotelev1">&gt;     name.vpid = jdata-&gt;stdin_target;
</span><br>
<span class="quotelev1">&gt; +    name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     name.epoch = orte_ess.proc_get_epoch(&amp;name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (rc = orte_iof.push(&amp;name, ORTE_IOF_STDIN, 0))) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_orted_cmds.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_orted_cmds.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_orted_cmds.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -163,6 +163,7 @@
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             peer.vpid = v;
</span><br>
<span class="quotelev1">&gt; +            peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;             peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /* don't worry about errors on the send here - just
</span><br>
<span class="quotelev1">&gt; @@ -339,6 +340,7 @@
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             peer.vpid = v;
</span><br>
<span class="quotelev1">&gt; +            peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;             peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev1">&gt;             /* check to see if this daemon is known to be &quot;dead&quot; */
</span><br>
<span class="quotelev1">&gt;             if (proc-&gt;state &gt; ORTE_PROC_STATE_UNTERMINATED) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_receive.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_receive.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_receive.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -394,6 +394,7 @@
</span><br>
<span class="quotelev1">&gt;                         break;
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                     name.vpid = vpid;
</span><br>
<span class="quotelev1">&gt; +                    name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;                     name.epoch = orte_ess.proc_get_epoch(&amp;name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                     /* unpack the pid */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -559,6 +559,7 @@
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                     proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev1">&gt; +                    proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;                     proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev1">&gt;                     /* If there is an invalid epoch here, it's because it doesn't exist yet. */
</span><br>
<span class="quotelev1">&gt;                     if (ORTE_NODE_RANK_INVALID == proc-&gt;name.epoch) {
</span><br>
<span class="quotelev1">&gt; @@ -600,6 +601,7 @@
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                     proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev1">&gt; +                    proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;                     proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;name.vpid)) {
</span><br>
<span class="quotelev1">&gt; @@ -1012,6 +1014,7 @@
</span><br>
<span class="quotelev1">&gt;             return ORTE_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         proc-&gt;name.vpid = jdata-&gt;num_procs;  /* take the next available vpid */
</span><br>
<span class="quotelev1">&gt; +        proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev1">&gt;         proc-&gt;node = node;
</span><br>
<span class="quotelev1">&gt;         proc-&gt;nodename = node-&gt;name;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -502,6 +502,7 @@
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             proc-&gt;name.vpid = rank;
</span><br>
<span class="quotelev1">&gt;             /* Either init or update the epoch. */
</span><br>
<span class="quotelev1">&gt; +            proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;             proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             proc-&gt;slot_list = strdup(rfmap-&gt;slot_list);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/seq/rmaps_seq.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/seq/rmaps_seq.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/seq/rmaps_seq.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -235,6 +235,7 @@
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             /* assign the vpid */
</span><br>
<span class="quotelev1">&gt;             proc-&gt;name.vpid = vpid++;
</span><br>
<span class="quotelev1">&gt; +            proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;             proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /* add to the jdata proc array */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rml/oob/rml_oob_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rml/oob/rml_oob_component.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -363,7 +363,6 @@
</span><br>
<span class="quotelev1">&gt;         origin = hdr-&gt;origin;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         next = orte_routed.get_route(&amp;hdr-&gt;destination);
</span><br>
<span class="quotelev1">&gt; -#if 0
</span><br>
<span class="quotelev1">&gt;         if (next.vpid == ORTE_VPID_INVALID) {
</span><br>
<span class="quotelev1">&gt;             opal_output(0,
</span><br>
<span class="quotelev1">&gt;                         &quot;%s:queued progress tried routing message from %s to %s:%d, can't find route&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -374,7 +373,6 @@
</span><br>
<span class="quotelev1">&gt;             opal_backtrace_print(stderr);
</span><br>
<span class="quotelev1">&gt;             orte_errmgr.abort(ORTE_ERROR_DEFAULT_EXIT_CODE, NULL);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (OPAL_EQUAL == orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;next, ORTE_PROC_MY_NAME)) {
</span><br>
<span class="quotelev1">&gt;             opal_output(0, &quot;%s:queued progress trying to get message from %s to %s:%d, routing loop&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -475,7 +473,6 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     next = orte_routed.get_route(&amp;hdr-&gt;destination);
</span><br>
<span class="quotelev1">&gt;     if (next.vpid == ORTE_VPID_INVALID) {
</span><br>
<span class="quotelev1">&gt; -#if 0
</span><br>
<span class="quotelev1">&gt;         opal_output(0, &quot;%s:route_callback tried routing message from %s to %s:%d, can't find route&quot;,
</span><br>
<span class="quotelev1">&gt;                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt;                     ORTE_NAME_PRINT(&amp;origin),
</span><br>
<span class="quotelev1">&gt; @@ -483,7 +480,6 @@
</span><br>
<span class="quotelev1">&gt;                     hdr-&gt;tag);
</span><br>
<span class="quotelev1">&gt;         opal_backtrace_print(stderr);
</span><br>
<span class="quotelev1">&gt;         orte_errmgr.abort(ORTE_ERROR_DEFAULT_EXIT_CODE, NULL);
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/binomial/routed_binomial.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/binomial/routed_binomial.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/binomial/routed_binomial.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -274,6 +274,7 @@
</span><br>
<span class="quotelev1">&gt;                                      ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev1">&gt;                 jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;                 jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; +                jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;                 jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; @@ -289,6 +290,7 @@
</span><br>
<span class="quotelev1">&gt;         jfam-&gt;job_family = jfamily;
</span><br>
<span class="quotelev1">&gt;         jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;         jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; +        jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
</span><br>
<span class="quotelev1">&gt; @@ -459,6 +461,7 @@
</span><br>
<span class="quotelev1">&gt;     ret = &amp;daemon;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  found:
</span><br>
<span class="quotelev1">&gt; +    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt; @@ -1007,6 +1010,7 @@
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_PARENT-&gt;vpid = binomial_tree(0, 0, ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev1">&gt;                                    orte_process_info.max_procs,
</span><br>
<span class="quotelev1">&gt;                                    &amp;num_children, &amp;my_children, NULL, true, jobid);
</span><br>
<span class="quotelev1">&gt; +    ORTE_PROC_MY_PARENT-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_PARENT-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (0 &lt; opal_output_get_verbosity(orte_routed_base_output)) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/cm/routed_cm.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/cm/routed_cm.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/cm/routed_cm.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -257,6 +257,7 @@
</span><br>
<span class="quotelev1">&gt;                                      ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev1">&gt;                 jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;                 jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; +                jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;                 jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; @@ -272,6 +273,7 @@
</span><br>
<span class="quotelev1">&gt;         jfam-&gt;job_family = jfamily;
</span><br>
<span class="quotelev1">&gt;         jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;         jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; +        jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
</span><br>
<span class="quotelev1">&gt; @@ -365,6 +367,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Initialize daemon's epoch, based on its current vpid/jobid */
</span><br>
<span class="quotelev1">&gt; +    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* if the daemon is me, then send direct to the target! */
</span><br>
<span class="quotelev1">&gt; @@ -811,6 +814,7 @@
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     local_lifeline.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;     local_lifeline.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; +    local_lifeline.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     local_lifeline.epoch = orte_ess.proc_get_epoch(&amp;local_lifeline);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     lifeline = &amp;local_lifeline;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/linear/routed_linear.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/linear/routed_linear.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/linear/routed_linear.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -373,6 +373,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Initialize daemon's epoch, based on its current vpid/jobid */
</span><br>
<span class="quotelev1">&gt; +    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* if the daemon is me, then send direct to the target! */
</span><br>
<span class="quotelev1">&gt; @@ -394,6 +395,7 @@
</span><br>
<span class="quotelev1">&gt;                 /* we are at end of chain - wrap around */
</span><br>
<span class="quotelev1">&gt;                 daemon.vpid = 0;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; +            daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;             daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev1">&gt;             ret = &amp;daemon;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/radix/routed_radix.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/radix/routed_radix.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/radix/routed_radix.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -413,6 +413,7 @@
</span><br>
<span class="quotelev1">&gt;             if (opal_bitmap_is_set_bit(&amp;child-&gt;relatives, daemon.vpid)) {
</span><br>
<span class="quotelev1">&gt;                 /* yep - we need to step through this child */
</span><br>
<span class="quotelev1">&gt;                 daemon.vpid = child-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; +                daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;                 daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev1">&gt;                 ret = &amp;daemon;
</span><br>
<span class="quotelev1">&gt;                 goto found;
</span><br>
<span class="quotelev1">&gt; @@ -424,6 +425,7 @@
</span><br>
<span class="quotelev1">&gt;      * any of our children, so we have to step up through our parent
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     daemon.vpid = ORTE_PROC_MY_PARENT-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; +    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ret = &amp;daemon;
</span><br>
<span class="quotelev1">&gt; @@ -879,6 +881,7 @@
</span><br>
<span class="quotelev1">&gt;         ORTE_PROC_MY_PARENT-&gt;vpid = (Ii-Sum) % NInPrevLevel;
</span><br>
<span class="quotelev1">&gt;         ORTE_PROC_MY_PARENT-&gt;vpid += (Sum - NInPrevLevel);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    ORTE_PROC_MY_PARENT-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     ORTE_PROC_MY_PARENT-&gt;epoch = orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* compute my direct children and the bitmap that shows which vpids
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/slave/routed_slave.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/slave/routed_slave.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/slave/routed_slave.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -275,6 +275,7 @@
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     local_lifeline.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;     local_lifeline.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev1">&gt; +    local_lifeline.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     local_lifeline.epoch = orte_ess.proc_get_epoch(&amp;local_lifeline);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     lifeline = &amp;local_lifeline;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/sstore/central/sstore_central_global.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/sstore/central/sstore_central_global.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -1216,6 +1216,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         vpid_snapshot-&gt;process_name.jobid  = handle_info-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;         vpid_snapshot-&gt;process_name.vpid   = i;
</span><br>
<span class="quotelev1">&gt; +        vpid_snapshot-&gt;process_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         vpid_snapshot-&gt;process_name.epoch = orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         vpid_snapshot-&gt;crs_comp     = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/sstore/stage/sstore_stage_global.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/sstore/stage/sstore_stage_global.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -1706,6 +1706,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         vpid_snapshot-&gt;process_name.jobid  = handle_info-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;         vpid_snapshot-&gt;process_name.vpid   = i;
</span><br>
<span class="quotelev1">&gt; +        vpid_snapshot-&gt;process_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         vpid_snapshot-&gt;process_name.epoch = orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* JJH: Currently we do not have this information since we do not save
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/orted/orted_comm.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/orted/orted_comm.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/orted/orted_comm.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -129,6 +129,7 @@
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +        target.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         if (ORTE_NODE_RANK_INVALID == (target.epoch = orte_ess.proc_get_epoch(&amp;target))) {
</span><br>
<span class="quotelev1">&gt;             /* If we are trying to send to a previously failed process it's
</span><br>
<span class="quotelev1">&gt;              * better to fail silently. */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/test/system/oob_stress.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/test/system/oob_stress.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/test/system/oob_stress.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -74,7 +74,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for (j=1; j &lt; count+1; j++) {
</span><br>
<span class="quotelev1">&gt;         peer.vpid = (ORTE_PROC_MY_NAME-&gt;vpid + j) % orte_process_info.num_procs;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* rank0 starts ring */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/test/system/orte_ring.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/test/system/orte_ring.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/test/system/orte_ring.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -41,6 +41,7 @@
</span><br>
<span class="quotelev1">&gt;     if( right_peer_orte_name.vpid &gt;= num_peers ) {
</span><br>
<span class="quotelev1">&gt;         right_peer_orte_name.vpid = 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    right_peer_orte_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     right_peer_orte_name.epoch = orte_ess.proc_get_epoch(&amp;right_peer_orte_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     left_peer_orte_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt; @@ -48,6 +49,7 @@
</span><br>
<span class="quotelev1">&gt;     if( ORTE_PROC_MY_NAME-&gt;vpid == 0 ) {
</span><br>
<span class="quotelev1">&gt;         left_peer_orte_name.vpid = num_peers - 1;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    left_peer_orte_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     left_peer_orte_name.epoch = orte_ess.proc_get_epoch(&amp;left_peer_orte_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;My name is: %s -- PID %d\tMy Left Peer is %s\tMy Right Peer is %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/test/system/orte_spawn.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/test/system/orte_spawn.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/test/system/orte_spawn.c	2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -74,6 +74,7 @@
</span><br>
<span class="quotelev1">&gt;     for (i=0; i &lt; app-&gt;num_procs; i++) {
</span><br>
<span class="quotelev1">&gt;         name.vpid = i;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +        name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;         name.epoch = orte_ess.proc_get_epoch(&amp;name);
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr, &quot;Parent: sending message to child %s\n&quot;, ORTE_NAME_PRINT(&amp;name));
</span><br>
<span class="quotelev1">&gt;         if (0 &gt; (rc = orte_rml.send(&amp;name, &amp;msg, 1, MY_TAG, 0))) {
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<li><strong>Previous message:</strong> <a href="9617.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
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
