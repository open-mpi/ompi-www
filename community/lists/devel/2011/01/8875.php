<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24251";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 14 13:33:35 2011" -->
<!-- isoreceived="20110114183335" -->
<!-- sent="Fri, 14 Jan 2011 13:33:33 -0500 (EST)" -->
<!-- isosent="20110114183333" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r24251" -->
<!-- id="alpine.LRH.2.02.1101141330470.12487_at_hulk.cs.indiana.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4D308A20.6070006_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r24251<br>
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-14 13:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8876.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8874.php">Mohamad Chaarawi: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24251"</a>
<li><strong>In reply to:</strong> <a href="8874.php">Mohamad Chaarawi: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24251"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 14 Jan 2011, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to break the trunk..
</span><br>
<span class="quotelev1">&gt; the patch attached seems to fix it..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks -- I applied it to the trunk.
<br>
<p>Abhishek
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Mohamad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; adkulkar_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: adkulkar
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 24251
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24251">https://svn.open-mpi.org/trac/ompi/changeset/24251</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Few fault tolerance updates related to the CIFTS project (<a href="http://www.mcs.anl.gov/research/cifts/">http://www.mcs.anl.gov/research/cifts/</a>)
</span><br>
<span class="quotelev2">&gt;&gt;  * Improve the FTB notifier to publish (C/R, process/communication failure) events to the FTB with the
</span><br>
<span class="quotelev2">&gt;&gt;    OMPI jobid as the associated payload.
</span><br>
<span class="quotelev2">&gt;&gt;  * Add notifier calls for C/R events and process status events in SnapC and ErrMgr components.
</span><br>
<span class="quotelev2">&gt;&gt;  * Fix a bug where the SnapC states and process states collide before being thrown out over the notifier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/errmgr/base/base.h                    |     3
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/errmgr/base/errmgr_base_fns.c         |    47 ++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/errmgr/hnp/errmgr_hnp.c               |     4
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/notifier/ftb/notifier_ftb_component.c |     5 -
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/notifier/ftb/notifier_ftb_module.c    |   162 ++++++++++++++++++++++++++++-----------
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/oob/tcp/oob_tcp_peer.c                |     3
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/snapc/base/snapc_base_fns.c           |    26 ++++--
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/snapc/full/snapc_full_global.c        |     4
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/snapc/snapc.h                         |    19 ++++
</span><br>
<span class="quotelev2">&gt;&gt;    9 files changed, 208 insertions(+), 65 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/base/base.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/base/base.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/base/base.h	2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -97,6 +97,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;  ORTE_DECLSPEC int orte_errmgr_base_restart_job(orte_jobid_t jobid, char * global_handle, int seq_num);
</span><br>
<span class="quotelev2">&gt;&gt;  ORTE_DECLSPEC int orte_errmgr_base_migrate_job(orte_jobid_t jobid, orte_snapc_base_request_op_t *datum);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +/* Interface to report process state to the notifier */
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC void orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_name_t *proc);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  #endif /* OPAL_ENABLE_FT_CR */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/base/errmgr_base_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/base/errmgr_base_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/base/errmgr_base_fns.c	2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -248,12 +248,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_ERRMGR_MIGRATE_STATE_ERROR:
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_ERRMGR_MIGRATE_STATE_ERR_INPROGRESS:
</span><br>
<span class="quotelev2">&gt;&gt;          orte_notifier.log(ORTE_NOTIFIER_ERROR, state,
</span><br>
<span class="quotelev2">&gt;&gt; -                          &quot;base:migrate_state_notify: Migration failed (PID = %d)&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; -                          orte_process_info.pid);
</span><br>
<span class="quotelev2">&gt;&gt; +                          &quot;%d: Migration failed for process %s.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                          orte_process_info.pid, ORTE_JOBID_PRINT(ORTE_PROC_MY_NAME-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt;          break;
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_ERRMGR_MIGRATE_STATE_FINISH:
</span><br>
<span class="quotelev2">&gt;&gt; -        orte_notifier.show_help(ORTE_NOTIFIER_INFO, state,
</span><br>
<span class="quotelev2">&gt;&gt; -                                &quot;help-orte-errmgr-hnp.txt&quot;, &quot;crmig_migrated_job&quot;, true);
</span><br>
<span class="quotelev2">&gt;&gt; +        orte_notifier.log(ORTE_NOTIFIER_INFO, state,
</span><br>
<span class="quotelev2">&gt;&gt; +                          &quot;%d: Migration successful for process %s.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                          orte_process_info.pid, ORTE_JOBID_PRINT(ORTE_PROC_MY_NAME-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt;          break;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_ERRMGR_MIGRATE_STATE_NONE:
</span><br>
<span class="quotelev2">&gt;&gt; @@ -267,6 +268,44 @@
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +void orte_errmgr_base_proc_state_notify(orte_proc_state_t state, orte_process_name_t *proc)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL != proc) {
</span><br>
<span class="quotelev2">&gt;&gt; +        switch(state) {
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_ABORTED:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_ABORTED_BY_SIG:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_TERM_WO_SYNC:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_TERMINATED:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_KILLED_BY_CMD:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_SENSOR_BOUND_EXCEEDED:
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_notifier.log(ORTE_NOTIFIER_ERROR, state, &quot;%d: Process %s is dead.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                              orte_process_info.pid, ORTE_JOBID_PRINT(proc-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_HEARTBEAT_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_notifier.log(ORTE_NOTIFIER_ERROR, state,
</span><br>
<span class="quotelev2">&gt;&gt; +                              &quot;%d: Process %s is unreachable.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                              orte_process_info.pid, ORTE_JOBID_PRINT(proc-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_COMM_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_notifier.log(ORTE_NOTIFIER_WARN, state,
</span><br>
<span class="quotelev2">&gt;&gt; +                              &quot;%d: Failed to communicate with process %s.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                              orte_process_info.pid, ORTE_JOBID_PRINT(proc-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_CALLED_ABORT:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_FAILED_TO_START:
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_notifier.log(ORTE_NOTIFIER_ERROR, state,
</span><br>
<span class="quotelev2">&gt;&gt; +                              &quot;%d: Process %s has called abort.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                              orte_process_info.pid, ORTE_JOBID_PRINT(proc-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_MIGRATING:
</span><br>
<span class="quotelev2">&gt;&gt; +        default:
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  int orte_errmgr_base_migrate_state_str(char ** state_str, int state)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      switch(state) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/errmgr/hnp/errmgr_hnp.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/errmgr/hnp/errmgr_hnp.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/errmgr/hnp/errmgr_hnp.c	2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -543,6 +543,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Notify the process state to the notifier framework if it is
</span><br>
<span class="quotelev2">&gt;&gt; +       active and selected. */
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_errmgr_base_proc_state_notify(state, proc);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      /* update is for a specific proc */
</span><br>
<span class="quotelev2">&gt;&gt;      switch (state) {
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_PROC_STATE_ABORTED:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/notifier/ftb/notifier_ftb_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/notifier/ftb/notifier_ftb_component.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/notifier/ftb/notifier_ftb_component.c	2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -80,11 +80,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;          free(mca_notifier_ftb_component.subscription_style);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    /* If the FTB client handle is valid, disconnect the client */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (1 == ftb_client_handle.valid) {
</span><br>
<span class="quotelev2">&gt;&gt; -        FTB_Disconnect(ftb_client_handle);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/notifier/ftb/notifier_ftb_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/notifier/ftb/notifier_ftb_module.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/notifier/ftb/notifier_ftb_module.c	2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34,11 +34,17 @@
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;opal/util/os_path.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/plm/base/plm_private.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/plm/plm.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/sensor/sensor.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;orte/mca/ess/ess.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;orte/mca/snapc/snapc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;orte/mca/snapc/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/mca/errmgr/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;orte/mca/notifier/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;notifier_ftb.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -95,7 +101,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  static void finalize(void) {
</span><br>
<span class="quotelev2">&gt;&gt; -    FTB_Disconnect(ftb_client_handle);
</span><br>
<span class="quotelev2">&gt;&gt; +    /* If the FTB client handle is valid, disconnect the client from FTB. */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (1 == ftb_client_handle.valid) {
</span><br>
<span class="quotelev2">&gt;&gt; +	    FTB_Disconnect(ftb_client_handle);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  static const char* get_ftb_event_severity(orte_notifier_base_severity_t severity)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -121,53 +130,106 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  static const char* get_ftb_event_name(int errnum)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -    switch (errnum) {
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    case ORTE_SNAPC_CKPT_STATE_ESTABLISHED:
</span><br>
<span class="quotelev2">&gt;&gt; -        return FTB_EVENT(FTB_MPI_PROCS_CKPTED);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    case ORTE_SNAPC_CKPT_STATE_NO_CKPT:
</span><br>
<span class="quotelev2">&gt;&gt; -    case ORTE_SNAPC_CKPT_STATE_ERROR:
</span><br>
<span class="quotelev2">&gt;&gt; -        return FTB_EVENT(FTB_MPI_PROCS_CKPT_FAIL);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    case ORTE_ERR_CONNECTION_REFUSED:
</span><br>
<span class="quotelev2">&gt;&gt; -    case ORTE_ERR_CONNECTION_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt; -    case ORTE_ERR_UNREACH:
</span><br>
<span class="quotelev2">&gt;&gt; -        return FTB_EVENT(FTB_MPI_PROCS_UNREACHABLE);
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Handle checkpoint/restart and migration events */
</span><br>
<span class="quotelev2">&gt;&gt; +    if ( CHECK_ORTE_SNAPC_CKPT_STATE(errnum) ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        errnum = ORTE_SNAPC_CKPT_STATE(errnum);
</span><br>
<span class="quotelev2">&gt;&gt; +        switch (errnum) {
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_SNAPC_CKPT_STATE_ESTABLISHED:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_CKPTED);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_SNAPC_CKPT_STATE_NO_CKPT:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_SNAPC_CKPT_STATE_ERROR:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_CKPT_FAIL);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        /* Restart events */
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_SNAPC_CKPT_STATE_RECOVERED:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_RESTARTED);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_SNAPC_CKPT_STATE_NO_RESTART:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_RESTART_FAIL);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        /* Process migration events */
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_ERRMGR_MIGRATE_STATE_FINISH:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_MIGRATED);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_ERRMGR_MIGRATE_STATE_ERROR:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_ERRMGR_MIGRATE_STATE_ERR_INPROGRESS:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_MIGRATE_FAIL);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    case ORTE_ERR_COMM_FAILURE:
</span><br>
<span class="quotelev2">&gt;&gt; -        return FTB_EVENT(FTB_MPI_PROCS_COMM_ERROR);
</span><br>
<span class="quotelev2">&gt;&gt; +        default:
</span><br>
<span class="quotelev2">&gt;&gt; +            return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    } else {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* Handle process and communication failure events */
</span><br>
<span class="quotelev2">&gt;&gt; +        switch (errnum) {
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_ERR_CONNECTION_REFUSED:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_ERR_CONNECTION_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_ERR_UNREACH:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_HEARTBEAT_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_UNREACHABLE);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_ERR_COMM_FAILURE:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_COMM_FAILED:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_COMM_ERROR);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_FAILED_TO_START:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_CALLED_ABORT:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_ABORTED);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_ABORTED:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_ABORTED_BY_SIG:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_TERM_WO_SYNC:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_TERMINATED:
</span><br>
<span class="quotelev2">&gt;&gt; +        case ORTE_PROC_STATE_KILLED_BY_CMD:
</span><br>
<span class="quotelev2">&gt;&gt; +            return FTB_EVENT(FTB_MPI_PROCS_DEAD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    default:
</span><br>
<span class="quotelev2">&gt;&gt; -        return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +        default:
</span><br>
<span class="quotelev2">&gt;&gt; +            return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      return NULL;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -static void publish_ftb_event(orte_notifier_base_severity_t severity, int errcode, char *payload)
</span><br>
<span class="quotelev2">&gt;&gt; +/* Extracts the FTB payload (inside the brackets []) from notifier
</span><br>
<span class="quotelev2">&gt;&gt; + * message payload.
</span><br>
<span class="quotelev2">&gt;&gt; + * For instance: &quot;&lt;FTB message [payload]&gt;&quot; would return &quot;payload&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +static unsigned int extract_payload(char *dest, char *src, unsigned int size)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    unsigned int ret;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *lbrace, *rbrace;
</span><br>
<span class="quotelev2">&gt;&gt; +    rbrace = strrchr(src, ']');
</span><br>
<span class="quotelev2">&gt;&gt; +    lbrace = strchr(src, '[');
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == rbrace || NULL == lbrace) {
</span><br>
<span class="quotelev2">&gt;&gt; +        strncpy(dest, src, size);
</span><br>
<span class="quotelev2">&gt;&gt; +        ret = size;
</span><br>
<span class="quotelev2">&gt;&gt; +    } else {
</span><br>
<span class="quotelev2">&gt;&gt; +        ret = rbrace - lbrace + 1;
</span><br>
<span class="quotelev2">&gt;&gt; +        if (ret &gt; size) {
</span><br>
<span class="quotelev2">&gt;&gt; +            ret = size;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +        strncpy(dest, lbrace, ret);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +static void publish_ftb_event(orte_notifier_base_severity_t severity, int errcode,
</span><br>
<span class="quotelev2">&gt;&gt; +                              FTB_event_properties_t *eprop)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      int ret;
</span><br>
<span class="quotelev2">&gt;&gt;      const char *event_name;
</span><br>
<span class="quotelev2">&gt;&gt;      FTB_event_handle_t ehandle;
</span><br>
<span class="quotelev2">&gt;&gt; -    FTB_event_properties_t eprop;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* Only normal FTB events are supported currently. */
</span><br>
<span class="quotelev2">&gt;&gt; -    eprop.event_type = (int) FTB_EVENT_NORMAL;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* Copy the event payload, if we have one */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (NULL != payload) {
</span><br>
<span class="quotelev2">&gt;&gt; -        strncpy(eprop.event_payload, payload, FTB_MAX_PAYLOAD_DATA);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* Publish the event to the Fault Tolerant Backplane */
</span><br>
<span class="quotelev2">&gt;&gt;      event_name = get_ftb_event_name(errcode);
</span><br>
<span class="quotelev2">&gt;&gt;      if (NULL != event_name) {
</span><br>
<span class="quotelev2">&gt;&gt; -        ret = FTB_Publish(ftb_client_handle, event_name, &amp;eprop, &amp;ehandle);
</span><br>
<span class="quotelev2">&gt;&gt; +        ret = FTB_Publish(ftb_client_handle, event_name, eprop, &amp;ehandle);
</span><br>
<span class="quotelev2">&gt;&gt;          if (FTB_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt;&gt;              orte_show_help(&quot;help-orte-notifier-ftb.txt&quot;, &quot;publish failed&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt;                             &quot;FTB_Publish() failed&quot;, ret, get_ftb_event_severity(severity),
</span><br>
<span class="quotelev2">&gt;&gt; -                           event_name, payload, errcode);
</span><br>
<span class="quotelev2">&gt;&gt; +                           event_name, eprop-&gt;event_payload, errcode);
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -176,11 +238,17 @@
</span><br>
<span class="quotelev2">&gt;&gt;                      va_list ap)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      char *payload;
</span><br>
<span class="quotelev2">&gt;&gt; +    FTB_event_properties_t ev_prop;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Only normal FTB events are supported currently. */
</span><br>
<span class="quotelev2">&gt;&gt; +    ev_prop.event_type = (int) FTB_EVENT_NORMAL;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Copy the event payload, if we have one */
</span><br>
<span class="quotelev2">&gt;&gt;      vasprintf(&amp;payload, msg, ap);
</span><br>
<span class="quotelev2">&gt;&gt;      if (NULL != payload) {
</span><br>
<span class="quotelev2">&gt;&gt; -        publish_ftb_event(severity, errcode, payload);
</span><br>
<span class="quotelev2">&gt;&gt; +        extract_payload(ev_prop.event_payload, payload, FTB_MAX_PAYLOAD_DATA);
</span><br>
<span class="quotelev2">&gt;&gt;          free(payload);
</span><br>
<span class="quotelev2">&gt;&gt; +        publish_ftb_event(severity, errcode, &amp;ev_prop);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -188,11 +256,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;                       const char *filename, const char *topic, va_list ap)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      char *payload;
</span><br>
<span class="quotelev2">&gt;&gt; +    FTB_event_properties_t ev_prop;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Only normal FTB events are supported currently. */
</span><br>
<span class="quotelev2">&gt;&gt; +    ev_prop.event_type = (int) FTB_EVENT_NORMAL;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      payload = opal_show_help_vstring(filename, topic, false, ap);
</span><br>
<span class="quotelev2">&gt;&gt;      if (NULL != payload) {
</span><br>
<span class="quotelev2">&gt;&gt; -        publish_ftb_event(severity, errcode, payload);
</span><br>
<span class="quotelev2">&gt;&gt; +        extract_payload(ev_prop.event_payload, payload, FTB_MAX_PAYLOAD_DATA);
</span><br>
<span class="quotelev2">&gt;&gt;          free(payload);
</span><br>
<span class="quotelev2">&gt;&gt; +        publish_ftb_event(severity, errcode, &amp;ev_prop);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -200,23 +273,22 @@
</span><br>
<span class="quotelev2">&gt;&gt;                       orte_process_name_t *peer_proc, const char *msg,
</span><br>
<span class="quotelev2">&gt;&gt;                       va_list ap)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -    char payload[FTB_MAX_PAYLOAD_DATA + 1];
</span><br>
<span class="quotelev2">&gt;&gt; -    char *peer_host = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; -    char *pos = payload;
</span><br>
<span class="quotelev2">&gt;&gt; -    int len, space = FTB_MAX_PAYLOAD_DATA;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *payload, *peer_host;
</span><br>
<span class="quotelev2">&gt;&gt; +    FTB_event_properties_t ev_prop;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Only normal FTB events are supported currently. */
</span><br>
<span class="quotelev2">&gt;&gt; +    ev_prop.event_type = (int) FTB_EVENT_NORMAL;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    peer_host = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;      if (peer_proc) {
</span><br>
<span class="quotelev2">&gt;&gt;          peer_host = orte_ess.proc_get_hostname(peer_proc);
</span><br>
<span class="quotelev2">&gt;&gt; +        /* Ignore the peer_host for now. */
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; -    len = snprintf(pos, space, &quot;%s:&quot;, peer_host ? peer_host : &quot;UNKNOWN&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    space -= len;
</span><br>
<span class="quotelev2">&gt;&gt; -    pos += len;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    /* If there was a message, and space left, output it */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (0 &lt; space) {
</span><br>
<span class="quotelev2">&gt;&gt; -        vsnprintf(pos, space, msg, ap);
</span><br>
<span class="quotelev2">&gt;&gt; +    vasprintf(&amp;payload, msg, ap);
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL != payload) {
</span><br>
<span class="quotelev2">&gt;&gt; +        extract_payload(ev_prop.event_payload, payload, FTB_MAX_PAYLOAD_DATA);
</span><br>
<span class="quotelev2">&gt;&gt; +        free(payload);
</span><br>
<span class="quotelev2">&gt;&gt; +        publish_ftb_event(severity, errcode, &amp;ev_prop);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    payload[FTB_MAX_PAYLOAD_DATA] = '\0';
</span><br>
<span class="quotelev2">&gt;&gt; -    publish_ftb_event(severity, errcode, payload);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp_peer.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/oob/tcp/oob_tcp_peer.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp_peer.c	2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -635,7 +635,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                      (NULL == host) ? &quot;NULL&quot; : host);
</span><br>
<span class="quotelev2">&gt;&gt;          /* provide a notifier message */
</span><br>
<span class="quotelev2">&gt;&gt;          orte_notifier.log_peer(ORTE_NOTIFIER_CRIT, ORTE_ERR_COMM_FAILURE, &amp;(peer-&gt;peer_name),
</span><br>
<span class="quotelev2">&gt;&gt; -                           &quot;OOB Connection retries exceeded.  Can not communicate with peer&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                               &quot;OOB connection retries exceeded. Cannot communicate with peer %s.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                               ORTE_JOBID_PRINT(peer-&gt;peer_name.jobid));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          /* There are cases during the initial connection setup where
</span><br>
<span class="quotelev2">&gt;&gt;             the peer_send_msg is NULL but there are things in the queue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/snapc/base/snapc_base_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/snapc/base/snapc_base_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/snapc/base/snapc_base_fns.c	2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -423,24 +423,32 @@
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      switch(state) {
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_SNAPC_CKPT_STATE_ESTABLISHED:
</span><br>
<span class="quotelev2">&gt;&gt; -        orte_notifier.log(ORTE_NOTIFIER_INFO, state,
</span><br>
<span class="quotelev2">&gt;&gt; -                          &quot;base:ckpt_state_notify: Checkpoint established for PID = %d {%s}.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                          orte_process_info.pid, ORTE_JOBID_PRINT(ORTE_PROC_MY_NAME-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt; +	    orte_notifier.log(ORTE_NOTIFIER_INFO, ORTE_SNAPC_CKPT_NOTIFY(state),
</span><br>
<span class="quotelev2">&gt;&gt; +                          &quot;%d: Checkpoint established for process %s.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +			  orte_process_info.pid, ORTE_JOBID_PRINT(ORTE_PROC_MY_NAME-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt;          break;
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_SNAPC_CKPT_STATE_NO_CKPT:
</span><br>
<span class="quotelev2">&gt;&gt; -        orte_notifier.log(ORTE_NOTIFIER_WARN, state,
</span><br>
<span class="quotelev2">&gt;&gt; -                          &quot;base:ckpt_state_notify: PID = %d is not checkpointable {%s}.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +        orte_notifier.log(ORTE_NOTIFIER_WARN, ORTE_SNAPC_CKPT_NOTIFY(state),
</span><br>
<span class="quotelev2">&gt;&gt; +                          &quot;%d: Process %s is not checkpointable.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                            orte_process_info.pid, ORTE_JOBID_PRINT(ORTE_PROC_MY_NAME-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt;          break;
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_SNAPC_CKPT_STATE_ERROR:
</span><br>
<span class="quotelev2">&gt;&gt; -        orte_notifier.log(ORTE_NOTIFIER_WARN, state,
</span><br>
<span class="quotelev2">&gt;&gt; -                          &quot;base:ckpt_state_notify: Failed to checkpoint PID = %d {%s}.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +        orte_notifier.log(ORTE_NOTIFIER_WARN, ORTE_SNAPC_CKPT_NOTIFY(state),
</span><br>
<span class="quotelev2">&gt;&gt; +                          &quot;%d: Failed to checkpoint process %s.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                          orte_process_info.pid, ORTE_JOBID_PRINT(ORTE_PROC_MY_NAME-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt; +        break;
</span><br>
<span class="quotelev2">&gt;&gt; +    case ORTE_SNAPC_CKPT_STATE_RECOVERED:
</span><br>
<span class="quotelev2">&gt;&gt; +        orte_notifier.log(ORTE_NOTIFIER_INFO, ORTE_SNAPC_CKPT_NOTIFY(state),
</span><br>
<span class="quotelev2">&gt;&gt; +                          &quot;%d: Successfully restarted process %s.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                          orte_process_info.pid, ORTE_JOBID_PRINT(ORTE_PROC_MY_NAME-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt; +        break;
</span><br>
<span class="quotelev2">&gt;&gt; +    case ORTE_SNAPC_CKPT_STATE_NO_RESTART:
</span><br>
<span class="quotelev2">&gt;&gt; +        orte_notifier.log(ORTE_NOTIFIER_WARN, ORTE_SNAPC_CKPT_NOTIFY(state),
</span><br>
<span class="quotelev2">&gt;&gt; +                          &quot;%d: Failed to restart process %s.&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                            orte_process_info.pid, ORTE_JOBID_PRINT(ORTE_PROC_MY_NAME-&gt;jobid));
</span><br>
<span class="quotelev2">&gt;&gt;          break;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      /* ADK: We currently do not notify for these states, but good to
</span><br>
<span class="quotelev2">&gt;&gt;       * have them around anyways. */
</span><br>
<span class="quotelev2">&gt;&gt; -    case ORTE_SNAPC_CKPT_STATE_RECOVERED:
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_SNAPC_CKPT_STATE_NONE:
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_SNAPC_CKPT_STATE_REQUEST:
</span><br>
<span class="quotelev2">&gt;&gt;      case ORTE_SNAPC_CKPT_STATE_PENDING:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/snapc/full/snapc_full_global.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/snapc/full/snapc_full_global.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/snapc/full/snapc_full_global.c	2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1358,12 +1358,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;          count = 1;
</span><br>
<span class="quotelev2">&gt;&gt;          if (ORTE_SUCCESS != (ret = opal_dss.unpack(sbuffer, &amp;seq_num, &amp;count, OPAL_INT))) {
</span><br>
<span class="quotelev2">&gt;&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_snapc_ckpt_state_notify(ORTE_SNAPC_CKPT_STATE_NO_RESTART);
</span><br>
<span class="quotelev2">&gt;&gt;              goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          count = 1;
</span><br>
<span class="quotelev2">&gt;&gt;          if (ORTE_SUCCESS != (ret = opal_dss.unpack(sbuffer, &amp;global_handle, &amp;count, OPAL_STRING))) {
</span><br>
<span class="quotelev2">&gt;&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_snapc_ckpt_state_notify(ORTE_SNAPC_CKPT_STATE_NO_RESTART);
</span><br>
<span class="quotelev2">&gt;&gt;              goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1372,6 +1374,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;           */
</span><br>
<span class="quotelev2">&gt;&gt;          if( ORTE_SUCCESS != (ret = orte_errmgr_base_restart_job(current_global_jobid, global_handle, seq_num) ) ) {
</span><br>
<span class="quotelev2">&gt;&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_snapc_ckpt_state_notify(ORTE_SNAPC_CKPT_STATE_NO_RESTART);
</span><br>
<span class="quotelev2">&gt;&gt;              goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1757,6 +1760,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                   &quot;Global) Job has been successfully restarted&quot;));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              /*current_job_ckpt_state = ORTE_SNAPC_CKPT_STATE_RECOVERED;*/
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_snapc_ckpt_state_notify(ORTE_SNAPC_CKPT_STATE_RECOVERED);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              for(item  = opal_list_get_first(&amp;(global_snapshot.local_snapshots));
</span><br>
<span class="quotelev2">&gt;&gt;                  item != opal_list_get_end(&amp;(global_snapshot.local_snapshots));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/snapc/snapc.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/snapc/snapc.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/snapc/snapc.h	2011-01-13 15:13:49 EST (Thu, 13 Jan 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -117,7 +117,24 @@
</span><br>
<span class="quotelev2">&gt;&gt;  #define ORTE_SNAPC_CKPT_STATE_RECOVERED      10
</span><br>
<span class="quotelev2">&gt;&gt;  /* Unable to checkpoint this job */
</span><br>
<span class="quotelev2">&gt;&gt;  #define ORTE_SNAPC_CKPT_STATE_NO_CKPT        11
</span><br>
<span class="quotelev2">&gt;&gt; -#define ORTE_SNAPC_CKPT_MAX                  12
</span><br>
<span class="quotelev2">&gt;&gt; +/* Unable to restart this job */
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_SNAPC_CKPT_STATE_NO_RESTART     12
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_SNAPC_CKPT_MAX                  13
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/**
</span><br>
<span class="quotelev2">&gt;&gt; + * Sufficiently high shift value to avoid colliding the process
</span><br>
<span class="quotelev2">&gt;&gt; + * checkpointing states above with the ORTE process states
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_SNAPC_CKPT_SHIFT                131072
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/* Uniquely encode the SNAPC state */
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_SNAPC_CKPT_NOTIFY(state) (ORTE_SNAPC_CKPT_SHIFT + state)
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/* Decode the SNAPC state */
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_SNAPC_CKPT_STATE(state) (state - ORTE_SNAPC_CKPT_SHIFT)
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/* Check whether a state is a SNAPC state or not. */
</span><br>
<span class="quotelev2">&gt;&gt; +#define CHECK_ORTE_SNAPC_CKPT_STATE(state) (state &gt;= ORTE_SNAPC_CKPT_SHIFT)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /**
</span><br>
<span class="quotelev2">&gt;&gt;   * Definition of a orte local snapshot.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev1">&gt; Research Assistant                <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science    University of Houston
</span><br>
<span class="quotelev1">&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8876.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8874.php">Mohamad Chaarawi: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24251"</a>
<li><strong>In reply to:</strong> <a href="8874.php">Mohamad Chaarawi: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24251"</a>
<!-- nextthread="start" -->
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
