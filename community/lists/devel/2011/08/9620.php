<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 11:31:12 2011" -->
<!-- isoreceived="20110808153112" -->
<!-- sent="Mon, 8 Aug 2011 11:30:35 -0400" -->
<!-- isosent="20110808153035" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015" -->
<!-- id="CAMHgK37UeL1MLkuPoacUyoOOMFdn1ONeWwO-_FRGTs=vn8gWAg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0517F513-040E-446E-BD6C-7D8D86B9EC3C_at_cisco.com" -->
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
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 11:30:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<li><strong>In reply to:</strong> <a href="9618.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The reason is because valgrind was complaining about uninitialized values
<br>
that were passed into proc_get_epoch. I saw the same warnings from valgrind
<br>
when I ran it. I added the code to initialize the values to what really
<br>
should be the default value and the warnings went away. Since the
<br>
process_name_t struct isn't an object, it doesn't have an initialization
<br>
function like so many of the other objects in the code. This is what we
<br>
have.
<br>
<p>In reality this code is pretty useless and the value does get overridden.
<br>
The purpose of passing the process_name into the function is to be able to
<br>
get out the jobid and vpid. The epoch value is completely ignored except
<br>
when printing out the process_name struct.
<br>
<p>Wes
<br>
<p>On Mon, Aug 8, 2011 at 11:18 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FYI: Ralph's out today.  He'll be back tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not really part of this ORTE discussion, but I am curious about a code
</span><br>
<span class="quotelev1">&gt; style that I see in this commit: assigning ORTE_EPOCH_INVALID to a field,
</span><br>
<span class="quotelev1">&gt; and then immediately overwriting that field with another value.  E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev2">&gt; &gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This technique is used throughout this patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the purpose for this?  As I understand it, this won't squash any
</span><br>
<span class="quotelev1">&gt; valgrind warnings, and may even get eliminated by the compiler as dead code
</span><br>
<span class="quotelev1">&gt; because it seems to be useless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2011, at 11:11 AM, wbland_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: wbland
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 25015
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25015">https://svn.open-mpi.org/trac/ompi/changeset/25015</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Make sure that the epoch is initialized everywhere so we don't get weird
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev2">&gt; &gt; during valgrind. This shouldn't have caused any problems with any actual
</span><br>
<span class="quotelev2">&gt; &gt; execution. Just extra warnings in valgrind.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c            |     2 ++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/proc/proc.c                                |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/ess/alps/ess_alps_module.c             |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/ess/env/ess_env_module.c               |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/ess/lsf/ess_lsf_module.c               |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/ess/slave/ess_slave_module.c           |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/ess/slurm/ess_slurm_module.c           |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c       |    12
</span><br>
<span class="quotelev1">&gt; +++++++-----
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/iof/hnp/iof_hnp.c                      |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c      |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/odls/base/odls_base_open.c             |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c     |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/plm/base/plm_base_orted_cmds.c         |     2 ++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/plm/base/plm_base_receive.c            |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c    |     3 +++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c      |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/rmaps/seq/rmaps_seq.c                  |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/rml/oob/rml_oob_component.c            |     4 ----
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/routed/binomial/routed_binomial.c      |     4 ++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/routed/cm/routed_cm.c                  |     4 ++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/routed/linear/routed_linear.c          |     2 ++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/routed/radix/routed_radix.c            |     3 +++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/routed/slave/routed_slave.c            |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/sstore/central/sstore_central_global.c |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/sstore/stage/sstore_stage_global.c     |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/orted/orted_comm.c                         |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/test/system/oob_stress.c                   |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/test/system/orte_ring.c                    |     2 ++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/test/system/orte_spawn.c                   |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   29 files changed, 48 insertions(+), 11 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c        2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5284,6 +5284,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev2">&gt; &gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if( NULL == (peer_ref = find_peer(peer_name))) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5345,6 +5346,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev2">&gt; &gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if ( 0 &gt; (ret = orte_rml.recv_buffer_nb(&amp;peer_name,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/proc/proc.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/proc/proc.c    (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/proc/proc.c    2011-08-08 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -362,7 +362,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         /* Does not change: proc-&gt;proc_name.vpid */
</span><br>
<span class="quotelev2">&gt; &gt;         proc-&gt;proc_name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +        proc-&gt;proc_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         proc-&gt;proc_name.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;proc-&gt;proc_name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         /* Make sure to clear the local flag before we set it below */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/ess/alps/ess_alps_module.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/ess/alps/ess_alps_module.c (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/ess/alps/ess_alps_module.c 2011-08-08 11:11:55 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -351,6 +351,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;vpid = (orte_vpid_t) cnos_get_rank() +
</span><br>
<span class="quotelev1">&gt; starting_vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/ess/env/ess_env_module.c   (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/ess/env/ess_env_module.c   2011-08-08 11:11:55 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -392,6 +392,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/ess/lsf/ess_lsf_module.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/ess/lsf/ess_lsf_module.c   (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/ess/lsf/ess_lsf_module.c   2011-08-08 11:11:55 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -357,6 +357,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* fix up the base name and make it the &quot;real&quot; name */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/ess/slave/ess_slave_module.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/ess/slave/ess_slave_module.c       (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/ess/slave/ess_slave_module.c       2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -280,6 +280,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/ess/slurm/ess_slurm_module.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/ess/slurm/ess_slurm_module.c       (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/ess/slurm/ess_slurm_module.c       2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -368,6 +368,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     /* fix up the vpid and make it the &quot;real&quot; vpid */
</span><br>
<span class="quotelev2">&gt; &gt;     slurm_nodeid = atoi(getenv(&quot;SLURM_NODEID&quot;));
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;vpid = vpid + slurm_nodeid;
</span><br>
<span class="quotelev2">&gt; &gt; +    ORTE_PROC_MY_NAME-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_NAME-&gt;epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     OPAL_OUTPUT_VERBOSE((1, orte_ess_base_output,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c   (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/grpcomm/base/grpcomm_base_coll.c   2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -168,7 +168,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     if (vpids[0] == ORTE_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt; &gt;         /* I send first */
</span><br>
<span class="quotelev2">&gt; &gt;         peer.vpid = vpids[1];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         /* setup a temp buffer so I can inform the other side as to the
</span><br>
<span class="quotelev2">&gt; &gt; @@ -226,7 +226,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         opal_dss.pack(&amp;buf, &amp;num_entries, 1, OPAL_INT32);
</span><br>
<span class="quotelev2">&gt; &gt;         opal_dss.copy_payload(&amp;buf, sendbuf);
</span><br>
<span class="quotelev2">&gt; &gt;         peer.vpid = vpids[0];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         OPAL_OUTPUT_VERBOSE((5, orte_grpcomm_base.output,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -320,7 +320,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         /* first send my current contents */
</span><br>
<span class="quotelev2">&gt; &gt;         nv = (rank - distance + np) % np;
</span><br>
<span class="quotelev2">&gt; &gt;         peer.vpid = vpids[nv];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_CONSTRUCT(&amp;buf, opal_buffer_t);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -340,7 +340,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         num_recvd = 0;
</span><br>
<span class="quotelev2">&gt; &gt;         nv = (rank + distance) % np;
</span><br>
<span class="quotelev2">&gt; &gt;         peer.vpid = vpids[nv];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_CONSTRUCT(&amp;bucket, opal_buffer_t);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -439,7 +439,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         /* first send my current contents */
</span><br>
<span class="quotelev2">&gt; &gt;         nv = rank ^ distance;
</span><br>
<span class="quotelev2">&gt; &gt;         peer.vpid = vpids[nv];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_CONSTRUCT(&amp;buf, opal_buffer_t);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -646,6 +646,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         proc.jobid = jobid;
</span><br>
<span class="quotelev2">&gt; &gt;         proc.vpid = 0;
</span><br>
<span class="quotelev2">&gt; &gt;         while (proc.vpid &lt; jobdat-&gt;num_procs &amp;&amp; 0 &lt;
</span><br>
<span class="quotelev1">&gt; opal_list_get_size(&amp;daemon_tree)) {
</span><br>
<span class="quotelev2">&gt; &gt; +            proc.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;             proc.epoch = orte_ess.proc_get_epoch(&amp;proc);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             /* get the daemon that hosts this proc */
</span><br>
<span class="quotelev2">&gt; &gt; @@ -712,6 +713,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         /* send it */
</span><br>
<span class="quotelev2">&gt; &gt;         my_parent.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;         my_parent.vpid = orte_routed.get_routing_tree(NULL);
</span><br>
<span class="quotelev2">&gt; &gt; +        my_parent.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         my_parent.epoch = orte_ess.proc_get_epoch(&amp;my_parent);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         OPAL_OUTPUT_VERBOSE((5, orte_grpcomm_base.output,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/iof/hnp/iof_hnp.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/iof/hnp/iof_hnp.c  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/iof/hnp/iof_hnp.c  2011-08-08 11:11:55 EDT (Mon, 08
</span><br>
<span class="quotelev1">&gt; Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -281,6 +281,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                                  &amp;mca_iof_hnp_component.sinks);
</span><br>
<span class="quotelev2">&gt; &gt;             sink-&gt;daemon.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;             sink-&gt;daemon.vpid = proc-&gt;node-&gt;daemon-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +            sink-&gt;daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;             sink-&gt;daemon.epoch = orte_ess.proc_get_epoch(&amp;sink-&gt;daemon);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/odls/base/odls_base_default_fns.c  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/odls/base/odls_base_default_fns.c  2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -734,6 +734,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     proc.jobid = jobdat-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     for (j=0; j &lt; jobdat-&gt;num_procs; j++) {
</span><br>
<span class="quotelev2">&gt; &gt;         proc.vpid = j;
</span><br>
<span class="quotelev2">&gt; &gt; +        proc.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         proc.epoch = orte_ess.proc_get_epoch(&amp;proc);
</span><br>
<span class="quotelev2">&gt; &gt;         /* get the vpid of the daemon that is to host this proc */
</span><br>
<span class="quotelev2">&gt; &gt;         if (ORTE_VPID_INVALID == (host_daemon =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_daemon(&amp;proc))) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/odls/base/odls_base_open.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/odls/base/odls_base_open.c (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/odls/base/odls_base_open.c 2011-08-08 11:11:55 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -200,6 +200,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                  * will be in the job - we'll check later
</span><br>
<span class="quotelev2">&gt; &gt;                  */
</span><br>
<span class="quotelev2">&gt; &gt;                 nm-&gt;name.vpid = rank;
</span><br>
<span class="quotelev2">&gt; &gt; +                nm-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;                 nm-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;nm-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;             opal_list_append(&amp;orte_odls_globals.xterm_ranks, &amp;nm-&gt;item);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c 2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -377,6 +377,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     /* push stdin - the IOF will know what to do with the specified
</span><br>
<span class="quotelev1">&gt; target */
</span><br>
<span class="quotelev2">&gt; &gt;     name.jobid = job;
</span><br>
<span class="quotelev2">&gt; &gt;     name.vpid = jdata-&gt;stdin_target;
</span><br>
<span class="quotelev2">&gt; &gt; +    name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     name.epoch = orte_ess.proc_get_epoch(&amp;name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (ORTE_SUCCESS != (rc = orte_iof.push(&amp;name, ORTE_IOF_STDIN, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/plm/base/plm_base_orted_cmds.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/plm/base/plm_base_orted_cmds.c     (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/plm/base/plm_base_orted_cmds.c     2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -163,6 +163,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                 continue;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;             peer.vpid = v;
</span><br>
<span class="quotelev2">&gt; &gt; +            peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;             peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             /* don't worry about errors on the send here - just
</span><br>
<span class="quotelev2">&gt; &gt; @@ -339,6 +340,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                 continue;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;             peer.vpid = v;
</span><br>
<span class="quotelev2">&gt; &gt; +            peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;             peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt; &gt;             /* check to see if this daemon is known to be &quot;dead&quot; */
</span><br>
<span class="quotelev2">&gt; &gt;             if (proc-&gt;state &gt; ORTE_PROC_STATE_UNTERMINATED) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/plm/base/plm_base_receive.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/plm/base/plm_base_receive.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/plm/base/plm_base_receive.c        2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -394,6 +394,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                         break;
</span><br>
<span class="quotelev2">&gt; &gt;                     }
</span><br>
<span class="quotelev2">&gt; &gt;                     name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +                    name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;                     name.epoch = orte_ess.proc_get_epoch(&amp;name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     /* unpack the pid */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c        2011-08-08
</span><br>
<span class="quotelev1">&gt; 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -559,6 +559,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                         }
</span><br>
<span class="quotelev2">&gt; &gt;                     }
</span><br>
<span class="quotelev2">&gt; &gt;                     proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +                    proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;                     proc-&gt;name.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;                     /* If there is an invalid epoch here, it's because it
</span><br>
<span class="quotelev1">&gt; doesn't exist yet. */
</span><br>
<span class="quotelev2">&gt; &gt;                     if (ORTE_NODE_RANK_INVALID == proc-&gt;name.epoch) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -600,6 +601,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                         }
</span><br>
<span class="quotelev2">&gt; &gt;                     }
</span><br>
<span class="quotelev2">&gt; &gt;                     proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +                    proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;                     proc-&gt;name.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;                 }
</span><br>
<span class="quotelev2">&gt; &gt;                 if (NULL == opal_pointer_array_get_item(jdata-&gt;procs,
</span><br>
<span class="quotelev1">&gt; proc-&gt;name.vpid)) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1012,6 +1014,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;             return ORTE_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         proc-&gt;name.vpid = jdata-&gt;num_procs;  /* take the next available
</span><br>
<span class="quotelev1">&gt; vpid */
</span><br>
<span class="quotelev2">&gt; &gt; +        proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;         proc-&gt;node = node;
</span><br>
<span class="quotelev2">&gt; &gt;         proc-&gt;nodename = node-&gt;name;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.c  2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -502,6 +502,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;             proc-&gt;name.vpid = rank;
</span><br>
<span class="quotelev2">&gt; &gt;             /* Either init or update the epoch. */
</span><br>
<span class="quotelev2">&gt; &gt; +            proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;             proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             proc-&gt;slot_list = strdup(rfmap-&gt;slot_list);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/rmaps/seq/rmaps_seq.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/rmaps/seq/rmaps_seq.c      (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/rmaps/seq/rmaps_seq.c      2011-08-08 11:11:55 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -235,6 +235,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;             /* assign the vpid */
</span><br>
<span class="quotelev2">&gt; &gt;             proc-&gt;name.vpid = vpid++;
</span><br>
<span class="quotelev2">&gt; &gt; +            proc-&gt;name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;             proc-&gt;name.epoch = orte_ess.proc_get_epoch(&amp;proc-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             /* add to the jdata proc array */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/rml/oob/rml_oob_component.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/rml/oob/rml_oob_component.c        2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -363,7 +363,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;         origin = hdr-&gt;origin;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         next = orte_routed.get_route(&amp;hdr-&gt;destination);
</span><br>
<span class="quotelev2">&gt; &gt; -#if 0
</span><br>
<span class="quotelev2">&gt; &gt;         if (next.vpid == ORTE_VPID_INVALID) {
</span><br>
<span class="quotelev2">&gt; &gt;             opal_output(0,
</span><br>
<span class="quotelev2">&gt; &gt;                         &quot;%s:queued progress tried routing message from %s
</span><br>
<span class="quotelev1">&gt; to %s:%d, can't find route&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -374,7 +373,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;             opal_backtrace_print(stderr);
</span><br>
<span class="quotelev2">&gt; &gt;             orte_errmgr.abort(ORTE_ERROR_DEFAULT_EXIT_CODE, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         if (OPAL_EQUAL == orte_util_compare_name_fields(ORTE_NS_CMP_ALL,
</span><br>
<span class="quotelev1">&gt; &amp;next, ORTE_PROC_MY_NAME)) {
</span><br>
<span class="quotelev2">&gt; &gt;             opal_output(0, &quot;%s:queued progress trying to get message from
</span><br>
<span class="quotelev1">&gt; %s to %s:%d, routing loop&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -475,7 +473,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     next = orte_routed.get_route(&amp;hdr-&gt;destination);
</span><br>
<span class="quotelev2">&gt; &gt;     if (next.vpid == ORTE_VPID_INVALID) {
</span><br>
<span class="quotelev2">&gt; &gt; -#if 0
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(0, &quot;%s:route_callback tried routing message from %s
</span><br>
<span class="quotelev1">&gt; to %s:%d, can't find route&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt; &gt;                     ORTE_NAME_PRINT(&amp;origin),
</span><br>
<span class="quotelev2">&gt; &gt; @@ -483,7 +480,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;                     hdr-&gt;tag);
</span><br>
<span class="quotelev2">&gt; &gt;         opal_backtrace_print(stderr);
</span><br>
<span class="quotelev2">&gt; &gt;         orte_errmgr.abort(ORTE_ERROR_DEFAULT_EXIT_CODE, NULL);
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt;         return;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/routed/binomial/routed_binomial.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/routed/binomial/routed_binomial.c  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/routed/binomial/routed_binomial.c  2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -274,6 +274,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                                      ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev2">&gt; &gt;                 jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;                 jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +                jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;                 jfam-&gt;route.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -289,6 +290,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         jfam-&gt;job_family = jfamily;
</span><br>
<span class="quotelev2">&gt; &gt;         jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;         jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +        jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -459,6 +461,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     ret = &amp;daemon;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  found:
</span><br>
<span class="quotelev2">&gt; &gt; +    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     OPAL_OUTPUT_VERBOSE((1, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1007,6 +1010,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_PARENT-&gt;vpid = binomial_tree(0, 0,
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev2">&gt; &gt;                                    orte_process_info.max_procs,
</span><br>
<span class="quotelev2">&gt; &gt;                                    &amp;num_children, &amp;my_children, NULL,
</span><br>
<span class="quotelev1">&gt; true, jobid);
</span><br>
<span class="quotelev2">&gt; &gt; +    ORTE_PROC_MY_PARENT-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_PARENT-&gt;epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 &lt; opal_output_get_verbosity(orte_routed_base_output)) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/routed/cm/routed_cm.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/routed/cm/routed_cm.c      (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/routed/cm/routed_cm.c      2011-08-08 11:11:55 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -257,6 +257,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                                      ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev2">&gt; &gt;                 jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;                 jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +                jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;                 jfam-&gt;route.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -272,6 +273,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         jfam-&gt;job_family = jfamily;
</span><br>
<span class="quotelev2">&gt; &gt;         jfam-&gt;route.jobid = route-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;         jfam-&gt;route.vpid = route-&gt;vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +        jfam-&gt;route.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         jfam-&gt;route.epoch = orte_ess.proc_get_epoch(&amp;jfam-&gt;route);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         opal_pointer_array_add(&amp;orte_routed_jobfams, jfam);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -365,6 +367,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Initialize daemon's epoch, based on its current vpid/jobid */
</span><br>
<span class="quotelev2">&gt; &gt; +    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* if the daemon is me, then send direct to the target! */
</span><br>
<span class="quotelev2">&gt; &gt; @@ -811,6 +814,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt;     local_lifeline.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     local_lifeline.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +    local_lifeline.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     local_lifeline.epoch = orte_ess.proc_get_epoch(&amp;local_lifeline);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     lifeline = &amp;local_lifeline;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/routed/linear/routed_linear.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/routed/linear/routed_linear.c      (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/routed/linear/routed_linear.c      2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -373,6 +373,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Initialize daemon's epoch, based on its current vpid/jobid */
</span><br>
<span class="quotelev2">&gt; &gt; +    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* if the daemon is me, then send direct to the target! */
</span><br>
<span class="quotelev2">&gt; &gt; @@ -394,6 +395,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                 /* we are at end of chain - wrap around */
</span><br>
<span class="quotelev2">&gt; &gt;                 daemon.vpid = 0;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; +            daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;             daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt; &gt;             ret = &amp;daemon;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/routed/radix/routed_radix.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/routed/radix/routed_radix.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/routed/radix/routed_radix.c        2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -413,6 +413,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;             if (opal_bitmap_is_set_bit(&amp;child-&gt;relatives, daemon.vpid)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 /* yep - we need to step through this child */
</span><br>
<span class="quotelev2">&gt; &gt;                 daemon.vpid = child-&gt;vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +                daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;                 daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt; &gt;                 ret = &amp;daemon;
</span><br>
<span class="quotelev2">&gt; &gt;                 goto found;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -424,6 +425,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      * any of our children, so we have to step up through our parent
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt;     daemon.vpid = ORTE_PROC_MY_PARENT-&gt;vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +    daemon.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     daemon.epoch = orte_ess.proc_get_epoch(&amp;daemon);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ret = &amp;daemon;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -879,6 +881,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_PROC_MY_PARENT-&gt;vpid = (Ii-Sum) % NInPrevLevel;
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_PROC_MY_PARENT-&gt;vpid += (Sum - NInPrevLevel);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +    ORTE_PROC_MY_PARENT-&gt;epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     ORTE_PROC_MY_PARENT-&gt;epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(ORTE_PROC_MY_PARENT);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* compute my direct children and the bitmap that shows which vpids
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/routed/slave/routed_slave.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/routed/slave/routed_slave.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/routed/slave/routed_slave.c        2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -275,6 +275,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt;     local_lifeline.jobid = proc-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     local_lifeline.vpid = proc-&gt;vpid;
</span><br>
<span class="quotelev2">&gt; &gt; +    local_lifeline.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     local_lifeline.epoch = orte_ess.proc_get_epoch(&amp;local_lifeline);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     lifeline = &amp;local_lifeline;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/sstore/central/sstore_central_global.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/sstore/central/sstore_central_global.c     (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/sstore/central/sstore_central_global.c     2011-08-08
</span><br>
<span class="quotelev1">&gt; 11:11:55 EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1216,6 +1216,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         vpid_snapshot-&gt;process_name.jobid  = handle_info-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;         vpid_snapshot-&gt;process_name.vpid   = i;
</span><br>
<span class="quotelev2">&gt; &gt; +        vpid_snapshot-&gt;process_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         vpid_snapshot-&gt;process_name.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         vpid_snapshot-&gt;crs_comp     = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/sstore/stage/sstore_stage_global.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/sstore/stage/sstore_stage_global.c (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/sstore/stage/sstore_stage_global.c 2011-08-08 11:11:55
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1706,6 +1706,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         vpid_snapshot-&gt;process_name.jobid  = handle_info-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt;         vpid_snapshot-&gt;process_name.vpid   = i;
</span><br>
<span class="quotelev2">&gt; &gt; +        vpid_snapshot-&gt;process_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         vpid_snapshot-&gt;process_name.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;vpid_snapshot-&gt;process_name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         /* JJH: Currently we do not have this information since we do not
</span><br>
<span class="quotelev1">&gt; save
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/orted/orted_comm.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/orted/orted_comm.c     (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/orted/orted_comm.c     2011-08-08 11:11:55 EDT (Mon, 08
</span><br>
<span class="quotelev1">&gt; Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -129,6 +129,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;             continue;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +        target.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         if (ORTE_NODE_RANK_INVALID == (target.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;target))) {
</span><br>
<span class="quotelev2">&gt; &gt;             /* If we are trying to send to a previously failed process
</span><br>
<span class="quotelev1">&gt; it's
</span><br>
<span class="quotelev2">&gt; &gt;              * better to fail silently. */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/test/system/oob_stress.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/test/system/oob_stress.c       (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/test/system/oob_stress.c       2011-08-08 11:11:55 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -74,7 +74,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     for (j=1; j &lt; count+1; j++) {
</span><br>
<span class="quotelev2">&gt; &gt;         peer.vpid = (ORTE_PROC_MY_NAME-&gt;vpid + j) %
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +        peer.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         peer.epoch = orte_ess.proc_get_epoch(&amp;peer);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         /* rank0 starts ring */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/test/system/orte_ring.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/test/system/orte_ring.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/test/system/orte_ring.c        2011-08-08 11:11:55 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -41,6 +41,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     if( right_peer_orte_name.vpid &gt;= num_peers ) {
</span><br>
<span class="quotelev2">&gt; &gt;         right_peer_orte_name.vpid = 0;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +    right_peer_orte_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     right_peer_orte_name.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;right_peer_orte_name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     left_peer_orte_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -48,6 +49,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     if( ORTE_PROC_MY_NAME-&gt;vpid == 0 ) {
</span><br>
<span class="quotelev2">&gt; &gt;         left_peer_orte_name.vpid = num_peers - 1;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +    left_peer_orte_name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;     left_peer_orte_name.epoch =
</span><br>
<span class="quotelev1">&gt; orte_ess.proc_get_epoch(&amp;left_peer_orte_name);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;My name is: %s -- PID %d\tMy Left Peer is %s\tMy Right Peer
</span><br>
<span class="quotelev1">&gt; is %s\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/test/system/orte_spawn.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/test/system/orte_spawn.c       (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/test/system/orte_spawn.c       2011-08-08 11:11:55 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 08 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -74,6 +74,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     for (i=0; i &lt; app-&gt;num_procs; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;         name.vpid = i;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +        name.epoch = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt; &gt;         name.epoch = orte_ess.proc_get_epoch(&amp;name);
</span><br>
<span class="quotelev2">&gt; &gt;         fprintf(stderr, &quot;Parent: sending message to child %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(&amp;name));
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 &gt; (rc = orte_rml.send(&amp;name, &amp;msg, 1, MY_TAG, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<li><strong>In reply to:</strong> <a href="9618.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
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
