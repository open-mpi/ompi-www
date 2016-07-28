<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 11:08:03 2012" -->
<!-- isoreceived="20120726150803" -->
<!-- sent="Thu, 26 Jul 2012 08:07:56 -0700" -->
<!-- isosent="20120726150756" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh" -->
<!-- id="17A6487C-9209-4C63-97FA-E35ED7C5EC3E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="114A1BB0-3759-4A03-A1F4-14253FDA05BB_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 11:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>Previous message:</strong> <a href="11321.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>In reply to:</strong> <a href="11321.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>Reply:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...it was working for me, but I'll recheck. Thanks!
<br>
<p>On Jul 26, 2012, at 8:04 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; r26868 seems to have some issues. It works well as long as all processes are started on the same node (aka. there is a single daemon), but it breaks with the error message attached below if there are more than two daemons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --bynode ./runme
</span><br>
<span class="quotelev1">&gt; [node01:07767] [[21341,0],1] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file ../../../../../ompi/orte/mca/rml/oob/rml_oob_send.c at line 362
</span><br>
<span class="quotelev1">&gt; [node01:07767] [[21341,0],1] attempted to send to [[21341,0],2]: tag 15
</span><br>
<span class="quotelev1">&gt; [node01:07767] [[21341,0],1] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file ../../../../ompi/orte/mca/grpcomm/base/grpcomm_base_xcast.c at line 157
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I confirm that applying the reverted commit brings the trunk to a normal state.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please - a tad more care in what gets committed??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2012, at 23:46 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 26868
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26868">https://svn.open-mpi.org/trac/ompi/changeset/26868</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Reconnect the rsh/ssh error reporting code for remote spawns to report failure to launch. Ensure the HNP correctly reports non-zero exit status when ssh encounters a problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks to Terry for spotting it!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_launch_support.c |    44 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_receive.c        |     6 +++++                                   
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_private.h             |     4 +++                                     
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/rsh/plm_rsh_module.c           |    18 +++++++---------                        
</span><br>
<span class="quotelev2">&gt;&gt;  4 files changed, 62 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c	Wed Jul 25 12:32:51 2012	(r26867)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c	2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)	(r26868)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -741,6 +741,50 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +void orte_plm_base_daemon_failed(int st, orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 opal_buffer_t *buffer,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 orte_rml_tag_t tag, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    int status, rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    int32_t n;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_vpid_t vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_proc_t *daemon;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* get the daemon job, if necessary */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == jdatorted) {
</span><br>
<span class="quotelev2">&gt;&gt; +        jdatorted = orte_get_job_data_object(ORTE_PROC_MY_NAME-&gt;jobid);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* unpack the daemon that failed */
</span><br>
<span class="quotelev2">&gt;&gt; +    n=1;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (OPAL_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;vpid, &amp;n, ORTE_VPID))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_UPDATE_EXIT_STATUS(ORTE_ERROR_DEFAULT_EXIT_CODE);
</span><br>
<span class="quotelev2">&gt;&gt; +        goto finish;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* unpack the exit status */
</span><br>
<span class="quotelev2">&gt;&gt; +    n=1;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (OPAL_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;status, &amp;n, OPAL_INT))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +        status = ORTE_ERROR_DEFAULT_EXIT_CODE;
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_UPDATE_EXIT_STATUS(ORTE_ERROR_DEFAULT_EXIT_CODE);
</span><br>
<span class="quotelev2">&gt;&gt; +    } else {
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_UPDATE_EXIT_STATUS(WEXITSTATUS(status));
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* find the daemon and update its state/status */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == (daemon = (orte_proc_t*)opal_pointer_array_get_item(jdatorted-&gt;procs, vpid))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt;&gt; +        goto finish;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    daemon-&gt;state = ORTE_PROC_STATE_FAILED_TO_START;
</span><br>
<span class="quotelev2">&gt;&gt; +    daemon-&gt;exit_code = status;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + finish:
</span><br>
<span class="quotelev2">&gt;&gt; +    ORTE_ACTIVATE_PROC_STATE(&amp;daemon-&gt;name, ORTE_PROC_STATE_FAILED_TO_START);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; int orte_plm_base_setup_orted_cmd(int *argc, char ***argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int i, loc;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_receive.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_receive.c	Wed Jul 25 12:32:51 2012	(r26867)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_receive.c	2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)	(r26868)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -87,6 +87,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                                          orte_plm_base_daemon_callback, NULL))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; +        if (ORTE_SUCCESS != (rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                          ORTE_RML_TAG_REPORT_REMOTE_LAUNCH,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                          ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                          orte_plm_base_daemon_failed, NULL))) {
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    recv_issued = true;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_private.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_private.h	Wed Jul 25 12:32:51 2012	(r26867)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_private.h	2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)	(r26868)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -78,6 +78,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC void orte_plm_base_daemon_callback(int status, orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt;&gt;                                                 opal_buffer_t *buffer,
</span><br>
<span class="quotelev2">&gt;&gt;                                                 orte_rml_tag_t tag, void *cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC void orte_plm_base_daemon_failed(int status, orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt;&gt; +                                               opal_buffer_t *buffer,
</span><br>
<span class="quotelev2">&gt;&gt; +                                               orte_rml_tag_t tag, void *cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_plm_base_create_jobid(orte_job_t *jdata);
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC int orte_plm_base_set_hnp_name(void);
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC void orte_plm_base_reset_job(orte_job_t *jdata);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/rsh/plm_rsh_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/rsh/plm_rsh_module.c	Wed Jul 25 12:32:51 2012	(r26867)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/rsh/plm_rsh_module.c	2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)	(r26868)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -258,8 +258,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; static void rsh_wait_daemon(pid_t pid, int status, void* cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_std_cntr_t cnt=1;
</span><br>
<span class="quotelev2">&gt;&gt; -    uint8_t flag;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_job_t *jdata;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_plm_rsh_caddy_t *caddy=(orte_plm_rsh_caddy_t*)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_proc_t *daemon=caddy-&gt;daemon;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -283,10 +281,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                 ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt;                                 (int)daemon-&gt;name.vpid, WEXITSTATUS(status)));
</span><br>
<span class="quotelev2">&gt;&gt;            buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt; -            opal_dss.pack(buf, &amp;cnt, 1, ORTE_STD_CNTR);
</span><br>
<span class="quotelev2">&gt;&gt; -            flag = 1;
</span><br>
<span class="quotelev2">&gt;&gt; -            opal_dss.pack(buf, &amp;flag, 1, OPAL_UINT8);
</span><br>
<span class="quotelev2">&gt;&gt;            opal_dss.pack(buf, &amp;(daemon-&gt;name.vpid), 1, ORTE_VPID);
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_dss.pack(buf, &amp;status, 1, OPAL_INT);
</span><br>
<span class="quotelev2">&gt;&gt;            orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, buf,
</span><br>
<span class="quotelev2">&gt;&gt;                                    ORTE_RML_TAG_REPORT_REMOTE_LAUNCH, 0,
</span><br>
<span class="quotelev2">&gt;&gt;                                    orte_rml_send_callback, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -297,6 +293,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                 &quot;%s daemon %d failed with status %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                 ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt;                                 (int)daemon-&gt;name.vpid, WEXITSTATUS(status)));
</span><br>
<span class="quotelev2">&gt;&gt; +            /* set the exit status */
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_UPDATE_EXIT_STATUS(WEXITSTATUS(status));
</span><br>
<span class="quotelev2">&gt;&gt;            /* note that this daemon failed */
</span><br>
<span class="quotelev2">&gt;&gt;            daemon-&gt;state = ORTE_PROC_STATE_FAILED_TO_START;
</span><br>
<span class="quotelev2">&gt;&gt;            /* increment the #daemons terminated so we will exit properly */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -735,7 +733,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    char **argv = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    char *prefix, *hostname, *var;
</span><br>
<span class="quotelev2">&gt;&gt;    int argc;
</span><br>
<span class="quotelev2">&gt;&gt; -    int rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    int rc=ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    bool failed_launch = true;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_std_cntr_t n;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_byte_object_t *bo;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -748,6 +746,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;%s plm:rsh: remote spawn called&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    /* if we hit any errors, tell the HNP it was us */
</span><br>
<span class="quotelev2">&gt;&gt; +    target.vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    /* extract the prefix from the launch buffer */
</span><br>
<span class="quotelev2">&gt;&gt;    n = 1;
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = opal_dss.unpack(launch, &amp;prefix, &amp;n, OPAL_STRING))) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -867,12 +868,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if (failed_launch) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* report cannot launch this daemon to HNP */
</span><br>
<span class="quotelev2">&gt;&gt;        opal_buffer_t *buf;
</span><br>
<span class="quotelev2">&gt;&gt; -        orte_std_cntr_t cnt=1;
</span><br>
<span class="quotelev2">&gt;&gt; -        uint8_t flag=1;
</span><br>
<span class="quotelev2">&gt;&gt;        buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt; -        opal_dss.pack(buf, &amp;cnt, 1, ORTE_STD_CNTR);
</span><br>
<span class="quotelev2">&gt;&gt; -        opal_dss.pack(buf, &amp;flag, 1, OPAL_UINT8);
</span><br>
<span class="quotelev2">&gt;&gt;        opal_dss.pack(buf, &amp;target.vpid, 1, ORTE_VPID);
</span><br>
<span class="quotelev2">&gt;&gt; +        opal_dss.pack(buf, &amp;rc, 1, OPAL_INT);
</span><br>
<span class="quotelev2">&gt;&gt;        orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, buf,
</span><br>
<span class="quotelev2">&gt;&gt;                                ORTE_RML_TAG_REPORT_REMOTE_LAUNCH, 0,
</span><br>
<span class="quotelev2">&gt;&gt;                                orte_rml_send_callback, NULL);
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
<li><strong>Next message:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>Previous message:</strong> <a href="11321.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>In reply to:</strong> <a href="11321.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>Reply:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
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
