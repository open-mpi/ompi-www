<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 19:50:08 2009" -->
<!-- isoreceived="20090624235008" -->
<!-- sent="Wed, 24 Jun 2009 17:49:55 -0600" -->
<!-- isosent="20090624234955" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517" -->
<!-- id="D7EF9578-E800-4427-BFE1-5916C54E4D2E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906242348.n5ONmFPG014506_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 19:49:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6342.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<li><strong>Previous message:</strong> <a href="6340.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6342.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<li><strong>Reply:</strong> <a href="6342.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George - you may ignore the note I just sent! :-) I am happy to  
<br>
revisit the logic behind the prior work, without the time pressure of  
<br>
dealing with it right away.
<br>
<p>I do appreciate this!
<br>
Ralph
<br>
<p><p>On Jun 24, 2009, at 5:48 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-06-24 19:48:14 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21517
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21517">https://svn.open-mpi.org/trac/ompi/changeset/21517</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Partially revert 21513. Beware of the exception on the  
</span><br>
<span class="quotelev1">&gt; orte_launch_agent which
</span><br>
<span class="quotelev1">&gt; is treated apart in orte_plm_base_setup_orted_cmd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c |    23 ++++++++ 
</span><br>
<span class="quotelev1">&gt; +--------------
</span><br>
<span class="quotelev1">&gt;   1 files changed, 9 insertions(+), 14 deletions(-)
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
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c	2009-06-24  
</span><br>
<span class="quotelev1">&gt; 19:48:14 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -1144,20 +1144,15 @@
</span><br>
<span class="quotelev1">&gt;     if (ORTE_PROC_IS_HNP || ORTE_PROC_IS_DAEMON) {
</span><br>
<span class="quotelev1">&gt;         cnt = opal_argv_count(orted_cmd_line);
</span><br>
<span class="quotelev1">&gt;         for (i=0; i &lt; cnt; i+=3) {
</span><br>
<span class="quotelev1">&gt; -             /* in the rsh environment, we can append multi-word  
</span><br>
<span class="quotelev1">&gt; arguments
</span><br>
<span class="quotelev1">&gt; -              * by enclosing them in quotes. Check for any multi-word
</span><br>
<span class="quotelev1">&gt; -              * mca params passed to mpirun and include them
</span><br>
<span class="quotelev1">&gt; -              */
</span><br>
<span class="quotelev1">&gt; -             if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
</span><br>
<span class="quotelev1">&gt; -                char* param;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -                /* must add quotes around it */
</span><br>
<span class="quotelev1">&gt; -                asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, orted_cmd_line[i+2]);
</span><br>
<span class="quotelev1">&gt; -                /* now pass it along */
</span><br>
<span class="quotelev1">&gt; -                opal_argv_append(argc, argv, orted_cmd_line[i]);
</span><br>
<span class="quotelev1">&gt; -                opal_argv_append(argc, argv, orted_cmd_line[i+1]);
</span><br>
<span class="quotelev1">&gt; -                opal_argv_append(argc, argv, param);
</span><br>
<span class="quotelev1">&gt; -                free(param);
</span><br>
<span class="quotelev1">&gt; +            /* if the specified option is more than one word, we  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev1">&gt; +             * have a generic way of passing it as some  
</span><br>
<span class="quotelev1">&gt; environments ignore
</span><br>
<span class="quotelev1">&gt; +             * any quotes we add, while others don't - so we ignore  
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; +             * such options. In most cases, this won't be a problem  
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; +             * they typically only apply to things of interest to  
</span><br>
<span class="quotelev1">&gt; the HNP.
</span><br>
<span class="quotelev1">&gt; +             * Individual environments can add these back into the  
</span><br>
<span class="quotelev1">&gt; cmd line
</span><br>
<span class="quotelev1">&gt; +             * as they know if it can be supported
</span><br>
<span class="quotelev1">&gt; +             */
</span><br>
<span class="quotelev1">&gt; +            if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6342.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<li><strong>Previous message:</strong> <a href="6340.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6342.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<li><strong>Reply:</strong> <a href="6342.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
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
