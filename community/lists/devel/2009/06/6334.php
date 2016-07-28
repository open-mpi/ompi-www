<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 17:15:54 2009" -->
<!-- isoreceived="20090624211554" -->
<!-- sent="Wed, 24 Jun 2009 17:15:30 -0400" -->
<!-- isosent="20090624211530" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513" -->
<!-- id="11A88DDE-56AA-4B07-876E-2D83A439BA93_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0906241315m2a58d604ne4dc6d023e9523bf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 17:15:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6335.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Previous message:</strong> <a href="6333.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>In reply to:</strong> <a href="6330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6335.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Reply:</strong> <a href="6335.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Reply:</strong> <a href="6336.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't guarantee this for all PLM but I can confirm that rsh and  
<br>
slurm (1.3.12) works well with this.
<br>
<p>We try with and without Open MPI, and the outcome is the same.
<br>
<p>[bosilca_at_dancer c]$ srun -n 4 echo &quot;1 2 3 4 5 it works&quot;
<br>
1 2 3 4 5 it works
<br>
1 2 3 4 5 it works
<br>
1 2 3 4 5 it works
<br>
1 2 3 4 5 it works
<br>
<p>[bosilca_at_dancer c]$ srun -N 2 -c 2 mpirun --mca plm slurm --mca  
<br>
orte_launch_agent &quot;orted -s&quot; --mca plm_rsh_tree_spawn 1 --bynode --mca  
<br>
pml ob1 --mca orte_daemon_spin 0 ./hello
<br>
Hello, world, I am 0 of 2 on node03
<br>
Hello, world, I am 1 of 2 on node04
<br>
<p>*after releasing the orted from their spin.
<br>
<p>In fact what I find strange is the old behavior. Dropping arguments  
<br>
without even letting the user know about it, is certainly not a  
<br>
desirable approach.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 24, 2009, at 16:15 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This commit is going to break non-rsh launchers. While it is true  
</span><br>
<span class="quotelev1">&gt; that the rsh launcher may handle multi-word options by putting them  
</span><br>
<span class="quotelev1">&gt; in quotes, we specifically avoided it here because it breaks SLURM,  
</span><br>
<span class="quotelev1">&gt; Torque, and others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is why we specifically put the inclusion of multi-word options  
</span><br>
<span class="quotelev1">&gt; in the rsh plm module, and not here. Would you please move it back  
</span><br>
<span class="quotelev1">&gt; there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 24, 2009 at 1:51 PM, &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-06-24 15:51:52 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21513
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21513">https://svn.open-mpi.org/trac/ompi/changeset/21513</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; When we get a report from an orted about its state, don't use the  
</span><br>
<span class="quotelev1">&gt; sender of
</span><br>
<span class="quotelev1">&gt; the message to update the structures, but instead use the  
</span><br>
<span class="quotelev1">&gt; information from
</span><br>
<span class="quotelev1">&gt; the URI. The reason is that even the launch report messages can get  
</span><br>
<span class="quotelev1">&gt; routed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deal with the orted_cmd_line in a single location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c |    69 +++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++++++++----------------
</span><br>
<span class="quotelev1">&gt;   1 files changed, 41 insertions(+), 28 deletions(-)
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
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c   2009-06-24  
</span><br>
<span class="quotelev1">&gt; 15:51:52 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -433,7 +433,8 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;     orte_message_event_t *mev = (orte_message_event_t*)data;
</span><br>
<span class="quotelev1">&gt;     opal_buffer_t *buffer = mev-&gt;buffer;
</span><br>
<span class="quotelev1">&gt; -    char *rml_uri;
</span><br>
<span class="quotelev1">&gt; +    orte_process_name_t peer;
</span><br>
<span class="quotelev1">&gt; +    char *rml_uri = NULL;
</span><br>
<span class="quotelev1">&gt;     int rc, idx;
</span><br>
<span class="quotelev1">&gt;     int32_t arch;
</span><br>
<span class="quotelev1">&gt;     orte_node_t **nodes;
</span><br>
<span class="quotelev1">&gt; @@ -442,19 +443,11 @@
</span><br>
<span class="quotelev1">&gt;     int64_t setupsec, setupusec;
</span><br>
<span class="quotelev1">&gt;     int64_t startsec, startusec;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt; -                         &quot;%s plm:base:orted_report_launch from  
</span><br>
<span class="quotelev1">&gt; daemon %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; -                         ORTE_NAME_PRINT(&amp;mev-&gt;sender)));
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     /* see if we need to timestamp this receipt */
</span><br>
<span class="quotelev1">&gt;     if (orte_timing) {
</span><br>
<span class="quotelev1">&gt;         gettimeofday(&amp;recvtime, NULL);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* update state */
</span><br>
<span class="quotelev1">&gt; -    pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     /* unpack its contact info */
</span><br>
<span class="quotelev1">&gt;     idx = 1;
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;rml_uri,  
</span><br>
<span class="quotelev1">&gt; &amp;idx, OPAL_STRING))) {
</span><br>
<span class="quotelev1">&gt; @@ -466,13 +459,26 @@
</span><br>
<span class="quotelev1">&gt;     /* set the contact info into the hash table */
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (rc = orte_rml.set_contact_info(rml_uri))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        free(rml_uri);
</span><br>
<span class="quotelev1">&gt;         orted_failed_launch = true;
</span><br>
<span class="quotelev1">&gt;         goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    /* lookup and record this daemon's contact info */
</span><br>
<span class="quotelev1">&gt; -    pdatorted[mev-&gt;sender.vpid]-&gt;rml_uri = strdup(rml_uri);
</span><br>
<span class="quotelev1">&gt; -    free(rml_uri);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    rc = orte_rml_base_parse_uris(rml_uri, &amp;peer, NULL );
</span><br>
<span class="quotelev1">&gt; +    if( ORTE_SUCCESS != rc ) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +        orted_failed_launch = true;
</span><br>
<span class="quotelev1">&gt; +        goto CLEANUP;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt; +                         &quot;%s plm:base:orted_report_launch from  
</span><br>
<span class="quotelev1">&gt; daemon %s via %s&quot;,
</span><br>
<span class="quotelev1">&gt; +                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; +                         ORTE_NAME_PRINT(&amp;peer),
</span><br>
<span class="quotelev1">&gt; +                         ORTE_NAME_PRINT(&amp;mev-&gt;sender)));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* update state and record for this daemon contact info */
</span><br>
<span class="quotelev1">&gt; +    pdatorted[peer.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev1">&gt; +    pdatorted[peer.vpid]-&gt;rml_uri = rml_uri;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* get the remote arch */
</span><br>
<span class="quotelev1">&gt;     idx = 1;
</span><br>
<span class="quotelev1">&gt; @@ -555,31 +561,33 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* lookup the node */
</span><br>
<span class="quotelev1">&gt;     nodes = (orte_node_t**)orte_node_pool-&gt;addr;
</span><br>
<span class="quotelev1">&gt; -    if (NULL == nodes[mev-&gt;sender.vpid]) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL == nodes[peer.vpid]) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;         orted_failed_launch = true;
</span><br>
<span class="quotelev1">&gt;         goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* store the arch */
</span><br>
<span class="quotelev1">&gt; -    nodes[mev-&gt;sender.vpid]-&gt;arch = arch;
</span><br>
<span class="quotelev1">&gt; +    nodes[peer.vpid]-&gt;arch = arch;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* if a tree-launch is underway, send the cmd back */
</span><br>
<span class="quotelev1">&gt;     if (NULL != orte_tree_launch_cmd) {
</span><br>
<span class="quotelev1">&gt; -        orte_rml.send_buffer(&amp;mev-&gt;sender, orte_tree_launch_cmd,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON, 0);
</span><br>
<span class="quotelev1">&gt; +        orte_rml.send_buffer(&amp;peer, orte_tree_launch_cmd,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON, 0);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  CLEANUP:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt; -                         &quot;%s plm:base:orted_report_launch %s for  
</span><br>
<span class="quotelev1">&gt; daemon %s at contact %s&quot;,
</span><br>
<span class="quotelev1">&gt; +                         &quot;%s plm:base:orted_report_launch %s for  
</span><br>
<span class="quotelev1">&gt; daemon %s (via %s) at contact %s&quot;,
</span><br>
<span class="quotelev1">&gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt;                          orted_failed_launch ? &quot;failed&quot; : &quot;completed&quot;,
</span><br>
<span class="quotelev1">&gt; -                         ORTE_NAME_PRINT(&amp;mev-&gt;sender),  
</span><br>
<span class="quotelev1">&gt; pdatorted[mev-&gt;sender.vpid]-&gt;rml_uri));
</span><br>
<span class="quotelev1">&gt; +                         ORTE_NAME_PRINT(&amp;peer),
</span><br>
<span class="quotelev1">&gt; +                         ORTE_NAME_PRINT(&amp;mev-&gt;sender),  
</span><br>
<span class="quotelev1">&gt; pdatorted[peer.vpid]-&gt;rml_uri));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* release the message */
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(mev);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (orted_failed_launch) {
</span><br>
<span class="quotelev1">&gt; +        if( NULL != rml_uri ) free(rml_uri);
</span><br>
<span class="quotelev1">&gt;         orte_errmgr.incomplete_start(ORTE_PROC_MY_NAME-&gt;jobid,  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_DEFAULT_EXIT_CODE);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         orted_num_callback++;
</span><br>
<span class="quotelev1">&gt; @@ -1133,18 +1141,23 @@
</span><br>
<span class="quotelev1">&gt;      * being sure to &quot;purge&quot; any that would cause problems
</span><br>
<span class="quotelev1">&gt;      * on backend nodes
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_PROC_IS_HNP || ORTE_PROC_IS_DAEMON) {
</span><br>
<span class="quotelev1">&gt;         cnt = opal_argv_count(orted_cmd_line);
</span><br>
<span class="quotelev1">&gt;         for (i=0; i &lt; cnt; i+=3) {
</span><br>
<span class="quotelev1">&gt; -            /* if the specified option is more than one word, we  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev1">&gt; -             * have a generic way of passing it as some  
</span><br>
<span class="quotelev1">&gt; environments ignore
</span><br>
<span class="quotelev1">&gt; -             * any quotes we add, while others don't - so we ignore  
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; -             * such options. In most cases, this won't be a problem  
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; -             * they typically only apply to things of interest to  
</span><br>
<span class="quotelev1">&gt; the HNP.
</span><br>
<span class="quotelev1">&gt; -             * Individual environments can add these back into the  
</span><br>
<span class="quotelev1">&gt; cmd line
</span><br>
<span class="quotelev1">&gt; -             * as they know if it can be supported
</span><br>
<span class="quotelev1">&gt; -             */
</span><br>
<span class="quotelev1">&gt; -            if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
</span><br>
<span class="quotelev1">&gt; +             /* in the rsh environment, we can append multi-word  
</span><br>
<span class="quotelev1">&gt; arguments
</span><br>
<span class="quotelev1">&gt; +              * by enclosing them in quotes. Check for any multi-word
</span><br>
<span class="quotelev1">&gt; +              * mca params passed to mpirun and include them
</span><br>
<span class="quotelev1">&gt; +              */
</span><br>
<span class="quotelev1">&gt; +             if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
</span><br>
<span class="quotelev1">&gt; +                char* param;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                /* must add quotes around it */
</span><br>
<span class="quotelev1">&gt; +                asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, orted_cmd_line[i+2]);
</span><br>
<span class="quotelev1">&gt; +                /* now pass it along */
</span><br>
<span class="quotelev1">&gt; +                opal_argv_append(argc, argv, orted_cmd_line[i]);
</span><br>
<span class="quotelev1">&gt; +                opal_argv_append(argc, argv, orted_cmd_line[i+1]);
</span><br>
<span class="quotelev1">&gt; +                opal_argv_append(argc, argv, param);
</span><br>
<span class="quotelev1">&gt; +                free(param);
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             /* The daemon will attempt to open the PLM on the remote
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li><strong>Next message:</strong> <a href="6335.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Previous message:</strong> <a href="6333.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>In reply to:</strong> <a href="6330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6335.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Reply:</strong> <a href="6335.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Reply:</strong> <a href="6336.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
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
