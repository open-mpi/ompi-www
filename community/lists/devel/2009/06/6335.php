<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 17:37:26 2009" -->
<!-- isoreceived="20090624213726" -->
<!-- sent="Wed, 24 Jun 2009 15:37:12 -0600" -->
<!-- isosent="20090624213712" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513" -->
<!-- id="EE1C17B5-6B68-40AE-BD08-F2D7F5BD1C81_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="11A88DDE-56AA-4B07-876E-2D83A439BA93_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 17:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6336.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Previous message:</strong> <a href="6334.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>In reply to:</strong> <a href="6334.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6336.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you read the original comment, we had concluded that there were no  
<br>
multi-word options that were being passed back to the orteds. All  
<br>
multi-word options known to us at that time, and still today, -only-  
<br>
apply to the HNP. Hence, dropping them has zero impact.
<br>
<p>To update you on the history: Tim P had tried this before, Josh tried  
<br>
it before, and I tried it before - and we all wound up with the same  
<br>
conclusion. We even engaged Jeff in a lengthy discussion of having the  
<br>
OPAL mca param processor automatically strip all leading/trailing  
<br>
quotes from params, but he expressed concern that someone might  
<br>
actually want a quote, so we couldn't generalize that behavior.
<br>
<p>Hence the  comments in the code explaining why this shouldn't be done.
<br>
<p>Guess I will have to work through the various environments one more  
<br>
time to demonstrate yet again why this breaks the system...
<br>
<p><p>On Jun 24, 2009, at 3:15 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I can't guarantee this for all PLM but I can confirm that rsh and  
</span><br>
<span class="quotelev1">&gt; slurm (1.3.12) works well with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We try with and without Open MPI, and the outcome is the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bosilca_at_dancer c]$ srun -n 4 echo &quot;1 2 3 4 5 it works&quot;
</span><br>
<span class="quotelev1">&gt; 1 2 3 4 5 it works
</span><br>
<span class="quotelev1">&gt; 1 2 3 4 5 it works
</span><br>
<span class="quotelev1">&gt; 1 2 3 4 5 it works
</span><br>
<span class="quotelev1">&gt; 1 2 3 4 5 it works
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bosilca_at_dancer c]$ srun -N 2 -c 2 mpirun --mca plm slurm --mca  
</span><br>
<span class="quotelev1">&gt; orte_launch_agent &quot;orted -s&quot; --mca plm_rsh_tree_spawn 1 --bynode -- 
</span><br>
<span class="quotelev1">&gt; mca pml ob1 --mca orte_daemon_spin 0 ./hello
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2 on node03
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2 on node04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *after releasing the orted from their spin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fact what I find strange is the old behavior. Dropping arguments  
</span><br>
<span class="quotelev1">&gt; without even letting the user know about it, is certainly not a  
</span><br>
<span class="quotelev1">&gt; desirable approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 24, 2009, at 16:15 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yo George
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This commit is going to break non-rsh launchers. While it is true  
</span><br>
<span class="quotelev2">&gt;&gt; that the rsh launcher may handle multi-word options by putting them  
</span><br>
<span class="quotelev2">&gt;&gt; in quotes, we specifically avoided it here because it breaks SLURM,  
</span><br>
<span class="quotelev2">&gt;&gt; Torque, and others.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is why we specifically put the inclusion of multi-word options  
</span><br>
<span class="quotelev2">&gt;&gt; in the rsh plm module, and not here. Would you please move it back  
</span><br>
<span class="quotelev2">&gt;&gt; there?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 24, 2009 at 1:51 PM, &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-06-24 15:51:52 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 21513
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21513">https://svn.open-mpi.org/trac/ompi/changeset/21513</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; When we get a report from an orted about its state, don't use the  
</span><br>
<span class="quotelev2">&gt;&gt; sender of
</span><br>
<span class="quotelev2">&gt;&gt; the message to update the structures, but instead use the  
</span><br>
<span class="quotelev2">&gt;&gt; information from
</span><br>
<span class="quotelev2">&gt;&gt; the URI. The reason is that even the launch report messages can get  
</span><br>
<span class="quotelev2">&gt;&gt; routed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Deal with the orted_cmd_line in a single location.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_launch_support.c |    69 +++++++++ 
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++++----------------
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 41 insertions(+), 28 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c   2009-06-24  
</span><br>
<span class="quotelev2">&gt;&gt; 15:51:52 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -433,7 +433,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    orte_message_event_t *mev = (orte_message_event_t*)data;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_buffer_t *buffer = mev-&gt;buffer;
</span><br>
<span class="quotelev2">&gt;&gt; -    char *rml_uri;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_process_name_t peer;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *rml_uri = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    int rc, idx;
</span><br>
<span class="quotelev2">&gt;&gt;    int32_t arch;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_node_t **nodes;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -442,19 +443,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;    int64_t setupsec, setupusec;
</span><br>
<span class="quotelev2">&gt;&gt;    int64_t startsec, startusec;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev2">&gt;&gt; -                         &quot;%s plm:base:orted_report_launch from  
</span><br>
<span class="quotelev2">&gt;&gt; daemon %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt; -                         ORTE_NAME_PRINT(&amp;mev-&gt;sender)));
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;    /* see if we need to timestamp this receipt */
</span><br>
<span class="quotelev2">&gt;&gt;    if (orte_timing) {
</span><br>
<span class="quotelev2">&gt;&gt;        gettimeofday(&amp;recvtime, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    /* update state */
</span><br>
<span class="quotelev2">&gt;&gt; -    pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;    /* unpack its contact info */
</span><br>
<span class="quotelev2">&gt;&gt;    idx = 1;
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = opal_dss.unpack(buffer, &amp;rml_uri,  
</span><br>
<span class="quotelev2">&gt;&gt; &amp;idx, OPAL_STRING))) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -466,13 +459,26 @@
</span><br>
<span class="quotelev2">&gt;&gt;    /* set the contact info into the hash table */
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = orte_rml.set_contact_info(rml_uri))) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; -        free(rml_uri);
</span><br>
<span class="quotelev2">&gt;&gt;        orted_failed_launch = true;
</span><br>
<span class="quotelev2">&gt;&gt;        goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; -    /* lookup and record this daemon's contact info */
</span><br>
<span class="quotelev2">&gt;&gt; -    pdatorted[mev-&gt;sender.vpid]-&gt;rml_uri = strdup(rml_uri);
</span><br>
<span class="quotelev2">&gt;&gt; -    free(rml_uri);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    rc = orte_rml_base_parse_uris(rml_uri, &amp;peer, NULL );
</span><br>
<span class="quotelev2">&gt;&gt; +    if( ORTE_SUCCESS != rc ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +        orted_failed_launch = true;
</span><br>
<span class="quotelev2">&gt;&gt; +        goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev2">&gt;&gt; +                         &quot;%s plm:base:orted_report_launch from  
</span><br>
<span class="quotelev2">&gt;&gt; daemon %s via %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt; +                         ORTE_NAME_PRINT(&amp;peer),
</span><br>
<span class="quotelev2">&gt;&gt; +                         ORTE_NAME_PRINT(&amp;mev-&gt;sender)));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* update state and record for this daemon contact info */
</span><br>
<span class="quotelev2">&gt;&gt; +    pdatorted[peer.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev2">&gt;&gt; +    pdatorted[peer.vpid]-&gt;rml_uri = rml_uri;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* get the remote arch */
</span><br>
<span class="quotelev2">&gt;&gt;    idx = 1;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -555,31 +561,33 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* lookup the node */
</span><br>
<span class="quotelev2">&gt;&gt;    nodes = (orte_node_t**)orte_node_pool-&gt;addr;
</span><br>
<span class="quotelev2">&gt;&gt; -    if (NULL == nodes[mev-&gt;sender.vpid]) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == nodes[peer.vpid]) {
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt;&gt;        orted_failed_launch = true;
</span><br>
<span class="quotelev2">&gt;&gt;        goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    /* store the arch */
</span><br>
<span class="quotelev2">&gt;&gt; -    nodes[mev-&gt;sender.vpid]-&gt;arch = arch;
</span><br>
<span class="quotelev2">&gt;&gt; +    nodes[peer.vpid]-&gt;arch = arch;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* if a tree-launch is underway, send the cmd back */
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL != orte_tree_launch_cmd) {
</span><br>
<span class="quotelev2">&gt;&gt; -        orte_rml.send_buffer(&amp;mev-&gt;sender, orte_tree_launch_cmd,  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RML_TAG_DAEMON, 0);
</span><br>
<span class="quotelev2">&gt;&gt; +        orte_rml.send_buffer(&amp;peer, orte_tree_launch_cmd,  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RML_TAG_DAEMON, 0);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CLEANUP:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev2">&gt;&gt; -                         &quot;%s plm:base:orted_report_launch %s for  
</span><br>
<span class="quotelev2">&gt;&gt; daemon %s at contact %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                         &quot;%s plm:base:orted_report_launch %s for  
</span><br>
<span class="quotelev2">&gt;&gt; daemon %s (via %s) at contact %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt;                         orted_failed_launch ? &quot;failed&quot; : &quot;completed&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                         ORTE_NAME_PRINT(&amp;mev-&gt;sender),  
</span><br>
<span class="quotelev2">&gt;&gt; pdatorted[mev-&gt;sender.vpid]-&gt;rml_uri));
</span><br>
<span class="quotelev2">&gt;&gt; +                         ORTE_NAME_PRINT(&amp;peer),
</span><br>
<span class="quotelev2">&gt;&gt; +                         ORTE_NAME_PRINT(&amp;mev-&gt;sender),  
</span><br>
<span class="quotelev2">&gt;&gt; pdatorted[peer.vpid]-&gt;rml_uri));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* release the message */
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_RELEASE(mev);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if (orted_failed_launch) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if( NULL != rml_uri ) free(rml_uri);
</span><br>
<span class="quotelev2">&gt;&gt;        orte_errmgr.incomplete_start(ORTE_PROC_MY_NAME-&gt;jobid,  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_DEFAULT_EXIT_CODE);
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;        orted_num_callback++;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1133,18 +1141,23 @@
</span><br>
<span class="quotelev2">&gt;&gt;     * being sure to &quot;purge&quot; any that would cause problems
</span><br>
<span class="quotelev2">&gt;&gt;     * on backend nodes
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (ORTE_PROC_IS_HNP || ORTE_PROC_IS_DAEMON) {
</span><br>
<span class="quotelev2">&gt;&gt;        cnt = opal_argv_count(orted_cmd_line);
</span><br>
<span class="quotelev2">&gt;&gt;        for (i=0; i &lt; cnt; i+=3) {
</span><br>
<span class="quotelev2">&gt;&gt; -            /* if the specified option is more than one word, we  
</span><br>
<span class="quotelev2">&gt;&gt; don't
</span><br>
<span class="quotelev2">&gt;&gt; -             * have a generic way of passing it as some  
</span><br>
<span class="quotelev2">&gt;&gt; environments ignore
</span><br>
<span class="quotelev2">&gt;&gt; -             * any quotes we add, while others don't - so we  
</span><br>
<span class="quotelev2">&gt;&gt; ignore any
</span><br>
<span class="quotelev2">&gt;&gt; -             * such options. In most cases, this won't be a  
</span><br>
<span class="quotelev2">&gt;&gt; problem as
</span><br>
<span class="quotelev2">&gt;&gt; -             * they typically only apply to things of interest to  
</span><br>
<span class="quotelev2">&gt;&gt; the HNP.
</span><br>
<span class="quotelev2">&gt;&gt; -             * Individual environments can add these back into the  
</span><br>
<span class="quotelev2">&gt;&gt; cmd line
</span><br>
<span class="quotelev2">&gt;&gt; -             * as they know if it can be supported
</span><br>
<span class="quotelev2">&gt;&gt; -             */
</span><br>
<span class="quotelev2">&gt;&gt; -            if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
</span><br>
<span class="quotelev2">&gt;&gt; +             /* in the rsh environment, we can append multi-word  
</span><br>
<span class="quotelev2">&gt;&gt; arguments
</span><br>
<span class="quotelev2">&gt;&gt; +              * by enclosing them in quotes. Check for any multi- 
</span><br>
<span class="quotelev2">&gt;&gt; word
</span><br>
<span class="quotelev2">&gt;&gt; +              * mca params passed to mpirun and include them
</span><br>
<span class="quotelev2">&gt;&gt; +              */
</span><br>
<span class="quotelev2">&gt;&gt; +             if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
</span><br>
<span class="quotelev2">&gt;&gt; +                char* param;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                /* must add quotes around it */
</span><br>
<span class="quotelev2">&gt;&gt; +                asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, orted_cmd_line[i+2]);
</span><br>
<span class="quotelev2">&gt;&gt; +                /* now pass it along */
</span><br>
<span class="quotelev2">&gt;&gt; +                opal_argv_append(argc, argv, orted_cmd_line[i]);
</span><br>
<span class="quotelev2">&gt;&gt; +                opal_argv_append(argc, argv, orted_cmd_line[i+1]);
</span><br>
<span class="quotelev2">&gt;&gt; +                opal_argv_append(argc, argv, param);
</span><br>
<span class="quotelev2">&gt;&gt; +                free(param);
</span><br>
<span class="quotelev2">&gt;&gt;                continue;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            /* The daemon will attempt to open the PLM on the remote
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
<li><strong>Next message:</strong> <a href="6336.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Previous message:</strong> <a href="6334.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>In reply to:</strong> <a href="6334.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6336.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
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
