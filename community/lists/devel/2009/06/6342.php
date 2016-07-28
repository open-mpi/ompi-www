<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 20:14:04 2009" -->
<!-- isoreceived="20090625001404" -->
<!-- sent="Wed, 24 Jun 2009 20:13:54 -0400" -->
<!-- isosent="20090625001354" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517" -->
<!-- id="23D4C068-E5CF-4772-8522-F8F988F9F573_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D7EF9578-E800-4427-BFE1-5916C54E4D2E_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 20:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6341.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<li><strong>In reply to:</strong> <a href="6341.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I didn't do it so you can appreciate, and there is no need to revisit  
<br>
the logic behind anything. I missed the exception for the orted  
<br>
command, so this whole mess is my fault.
<br>
<p>As a side note, let me just remind you that the trunk is meant to be  
<br>
more or less stable, so there is absolutely no pressure on this.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 24, 2009, at 19:49 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Thanks George - you may ignore the note I just sent! :-) I am happy  
</span><br>
<span class="quotelev1">&gt; to revisit the logic behind the prior work, without the time  
</span><br>
<span class="quotelev1">&gt; pressure of dealing with it right away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do appreciate this!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 24, 2009, at 5:48 PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-06-24 19:48:14 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 21517
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21517">https://svn.open-mpi.org/trac/ompi/changeset/21517</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Partially revert 21513. Beware of the exception on the  
</span><br>
<span class="quotelev2">&gt;&gt; orte_launch_agent which
</span><br>
<span class="quotelev2">&gt;&gt; is treated apart in orte_plm_base_setup_orted_cmd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/plm/base/plm_base_launch_support.c |    23 ++++++++ 
</span><br>
<span class="quotelev2">&gt;&gt; +--------------
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 9 insertions(+), 14 deletions(-)
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
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c	2009-06-24  
</span><br>
<span class="quotelev2">&gt;&gt; 19:48:14 EDT (Wed, 24 Jun 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1144,20 +1144,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_PROC_IS_HNP || ORTE_PROC_IS_DAEMON) {
</span><br>
<span class="quotelev2">&gt;&gt;        cnt = opal_argv_count(orted_cmd_line);
</span><br>
<span class="quotelev2">&gt;&gt;        for (i=0; i &lt; cnt; i+=3) {
</span><br>
<span class="quotelev2">&gt;&gt; -             /* in the rsh environment, we can append multi-word  
</span><br>
<span class="quotelev2">&gt;&gt; arguments
</span><br>
<span class="quotelev2">&gt;&gt; -              * by enclosing them in quotes. Check for any multi- 
</span><br>
<span class="quotelev2">&gt;&gt; word
</span><br>
<span class="quotelev2">&gt;&gt; -              * mca params passed to mpirun and include them
</span><br>
<span class="quotelev2">&gt;&gt; -              */
</span><br>
<span class="quotelev2">&gt;&gt; -             if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
</span><br>
<span class="quotelev2">&gt;&gt; -                char* param;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                /* must add quotes around it */
</span><br>
<span class="quotelev2">&gt;&gt; -                asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, orted_cmd_line[i+2]);
</span><br>
<span class="quotelev2">&gt;&gt; -                /* now pass it along */
</span><br>
<span class="quotelev2">&gt;&gt; -                opal_argv_append(argc, argv, orted_cmd_line[i]);
</span><br>
<span class="quotelev2">&gt;&gt; -                opal_argv_append(argc, argv, orted_cmd_line[i+1]);
</span><br>
<span class="quotelev2">&gt;&gt; -                opal_argv_append(argc, argv, param);
</span><br>
<span class="quotelev2">&gt;&gt; -                free(param);
</span><br>
<span class="quotelev2">&gt;&gt; +            /* if the specified option is more than one word, we  
</span><br>
<span class="quotelev2">&gt;&gt; don't
</span><br>
<span class="quotelev2">&gt;&gt; +             * have a generic way of passing it as some  
</span><br>
<span class="quotelev2">&gt;&gt; environments ignore
</span><br>
<span class="quotelev2">&gt;&gt; +             * any quotes we add, while others don't - so we  
</span><br>
<span class="quotelev2">&gt;&gt; ignore any
</span><br>
<span class="quotelev2">&gt;&gt; +             * such options. In most cases, this won't be a  
</span><br>
<span class="quotelev2">&gt;&gt; problem as
</span><br>
<span class="quotelev2">&gt;&gt; +             * they typically only apply to things of interest to  
</span><br>
<span class="quotelev2">&gt;&gt; the HNP.
</span><br>
<span class="quotelev2">&gt;&gt; +             * Individual environments can add these back into the  
</span><br>
<span class="quotelev2">&gt;&gt; cmd line
</span><br>
<span class="quotelev2">&gt;&gt; +             * as they know if it can be supported
</span><br>
<span class="quotelev2">&gt;&gt; +             */
</span><br>
<span class="quotelev2">&gt;&gt; +            if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
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
<li><strong>Next message:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6341.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<li><strong>In reply to:</strong> <a href="6341.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
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
