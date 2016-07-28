<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 15:06:44 2012" -->
<!-- isoreceived="20120726190644" -->
<!-- sent="Thu, 26 Jul 2012 12:06:36 -0700" -->
<!-- isosent="20120726190636" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh" -->
<!-- id="3B781CE1-3F7B-44EB-9F30-FBE283B97B36_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="501164A4.4050204_at_oracle.com" -->
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
<strong>Date:</strong> 2012-07-26 15:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11326.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>Previous message:</strong> <a href="11324.php">Christoph van W&#252;llen: "[OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delay - local network was down and I couldn't commit the one-line fix :-(
<br>
<p>Turns out that there was a bug in the rsh launcher (the daemons *always* declared a failed launch) that was previously being ignored and was now exposed, resulting in a possible race condition. Fixed now.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Jul 26, 2012, at 8:39 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; Interestingly enough it worked for me for a while and then after many runs I started seeing the below too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/26/2012 11:07 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...it was working for me, but I'll recheck. Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 26, 2012, at 8:04 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r26868 seems to have some issues. It works well as long as all processes are started on the same node (aka. there is a single daemon), but it breaks with the error message attached below if there are more than two daemons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 --bynode ./runme
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:07767] [[21341,0],1] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file ../../../../../ompi/orte/mca/rml/oob/rml_oob_send.c at line 362
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:07767] [[21341,0],1] attempted to send to [[21341,0],2]: tag 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:07767] [[21341,0],1] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file ../../../../ompi/orte/mca/grpcomm/base/grpcomm_base_xcast.c at line 157
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I confirm that applying the reverted commit brings the trunk to a normal state.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please - a tad more care in what gets committed??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 25, 2012, at 23:46 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 26868
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26868">https://svn.open-mpi.org/trac/ompi/changeset/26868</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reconnect the rsh/ssh error reporting code for remote spawns to report failure to launch. Ensure the HNP correctly reports non-zero exit status when ssh encounters a problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks to Terry for spotting it!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/plm/base/plm_base_launch_support.c |    44 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/plm/base/plm_base_receive.c        |     6 +++++                                   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/plm/base/plm_private.h             |     4 +++                                     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/plm/rsh/plm_rsh_module.c           |    18 +++++++---------                        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  4 files changed, 62 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c	Wed Jul 25 12:32:51 2012	(r26867)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c	2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)	(r26868)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -741,6 +741,50 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +void orte_plm_base_daemon_failed(int st, orte_process_name_t* sender,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                                 opal_buffer_t *buffer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                                 orte_rml_tag_t tag, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    int status, rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    int32_t n;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    orte_vpid_t vpid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    orte_proc_t *daemon;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* get the daemon job, if necessary */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if (NULL == jdatorted) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        jdatorted = orte_get_job_data_object(ORTE_PROC_MY_NAME-&gt;jobid);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* unpack the daemon that failed */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    n=1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if (OPAL_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;vpid, &amp;n, ORTE_VPID))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        ORTE_UPDATE_EXIT_STATUS(ORTE_ERROR_DEFAULT_EXIT_CODE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        goto finish;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* unpack the exit status */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    n=1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if (OPAL_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;status, &amp;n, OPAL_INT))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        status = ORTE_ERROR_DEFAULT_EXIT_CODE;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        ORTE_UPDATE_EXIT_STATUS(ORTE_ERROR_DEFAULT_EXIT_CODE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        ORTE_UPDATE_EXIT_STATUS(WEXITSTATUS(status));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* find the daemon and update its state/status */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if (NULL == (daemon = (orte_proc_t*)opal_pointer_array_get_item(jdatorted-&gt;procs, vpid))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        goto finish;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    daemon-&gt;state = ORTE_PROC_STATE_FAILED_TO_START;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    daemon-&gt;exit_code = status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + finish:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    ORTE_ACTIVATE_PROC_STATE(&amp;daemon-&gt;name, ORTE_PROC_STATE_FAILED_TO_START);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int orte_plm_base_setup_orted_cmd(int *argc, char ***argv)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    int i, loc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_receive.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_receive.c	Wed Jul 25 12:32:51 2012	(r26867)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_receive.c	2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)	(r26868)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -87,6 +87,12 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                          orte_plm_base_daemon_callback, NULL))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        if (ORTE_SUCCESS != (rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                                                          ORTE_RML_TAG_REPORT_REMOTE_LAUNCH,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                                                          ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                                                          orte_plm_base_daemon_failed, NULL))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    recv_issued = true;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_private.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/plm/base/plm_private.h	Wed Jul 25 12:32:51 2012	(r26867)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/plm/base/plm_private.h	2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)	(r26868)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -78,6 +78,10 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_DECLSPEC void orte_plm_base_daemon_callback(int status, orte_process_name_t* sender,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                 opal_buffer_t *buffer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                 orte_rml_tag_t tag, void *cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +ORTE_DECLSPEC void orte_plm_base_daemon_failed(int status, orte_process_name_t* sender,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                                               opal_buffer_t *buffer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                                               orte_rml_tag_t tag, void *cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_DECLSPEC int orte_plm_base_create_jobid(orte_job_t *jdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_DECLSPEC int orte_plm_base_set_hnp_name(void);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_DECLSPEC void orte_plm_base_reset_job(orte_job_t *jdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/plm/rsh/plm_rsh_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/plm/rsh/plm_rsh_module.c	Wed Jul 25 12:32:51 2012	(r26867)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/plm/rsh/plm_rsh_module.c	2012-07-25 17:46:45 EDT (Wed, 25 Jul 2012)	(r26868)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -258,8 +258,6 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; static void rsh_wait_daemon(pid_t pid, int status, void* cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    orte_std_cntr_t cnt=1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    uint8_t flag;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    orte_job_t *jdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    orte_plm_rsh_caddy_t *caddy=(orte_plm_rsh_caddy_t*)cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    orte_proc_t *daemon=caddy-&gt;daemon;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -283,10 +281,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 (int)daemon-&gt;name.vpid, WEXITSTATUS(status)));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            opal_dss.pack(buf, &amp;cnt, 1, ORTE_STD_CNTR);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            flag = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            opal_dss.pack(buf, &amp;flag, 1, OPAL_UINT8);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            opal_dss.pack(buf, &amp;(daemon-&gt;name.vpid), 1, ORTE_VPID);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            opal_dss.pack(buf, &amp;status, 1, OPAL_INT);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                    ORTE_RML_TAG_REPORT_REMOTE_LAUNCH, 0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                    orte_rml_send_callback, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -297,6 +293,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 &quot;%s daemon %d failed with status %d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 (int)daemon-&gt;name.vpid, WEXITSTATUS(status)));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            /* set the exit status */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            ORTE_UPDATE_EXIT_STATUS(WEXITSTATUS(status));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            /* note that this daemon failed */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            daemon-&gt;state = ORTE_PROC_STATE_FAILED_TO_START;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            /* increment the #daemons terminated so we will exit properly */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -735,7 +733,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    char **argv = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    char *prefix, *hostname, *var;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    int argc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    int rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    int rc=ORTE_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    bool failed_launch = true;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    orte_std_cntr_t n;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    opal_byte_object_t *bo;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -748,6 +746,9 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         &quot;%s plm:rsh: remote spawn called&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* if we hit any errors, tell the HNP it was us */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    target.vpid = ORTE_PROC_MY_NAME-&gt;vpid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /* extract the prefix from the launch buffer */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    n = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if (ORTE_SUCCESS != (rc = opal_dss.unpack(launch, &amp;prefix, &amp;n, OPAL_STRING))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -867,12 +868,9 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if (failed_launch) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        /* report cannot launch this daemon to HNP */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        opal_buffer_t *buf;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        orte_std_cntr_t cnt=1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        uint8_t flag=1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        opal_dss.pack(buf, &amp;cnt, 1, ORTE_STD_CNTR);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        opal_dss.pack(buf, &amp;flag, 1, OPAL_UINT8);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        opal_dss.pack(buf, &amp;target.vpid, 1, ORTE_VPID);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        opal_dss.pack(buf, &amp;rc, 1, OPAL_INT);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        orte_rml.send_buffer_nb(ORTE_PROC_MY_HNP, buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                ORTE_RML_TAG_REPORT_REMOTE_LAUNCH, 0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                orte_rml_send_callback, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11326.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>Previous message:</strong> <a href="11324.php">Christoph van W&#252;llen: "[OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
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
