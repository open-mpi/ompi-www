<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 11:23:35 2012" -->
<!-- isoreceived="20121107162335" -->
<!-- sent="Wed, 7 Nov 2012 08:23:23 -0800" -->
<!-- isosent="20121107162323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file" -->
<!-- id="E3612067-9359-426C-A19B-3FADCF50C2AE_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121107155500.GB54824_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 11:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11764.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27573 - trunk/ompi/mca/pml/v"</a>
<li><strong>Previous message:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<li><strong>In reply to:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Problem is that the orte function no longer seems to exist, so build fails
<br>
<p>Sent from my iPhone
<br>
<p>On Nov 7, 2012, at 7:55 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, looks like the default yyterminate does not clean up the lex state. The definition in rmaps/rankfile/rmaps_rank_file_lex.l should be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define yyterminate() return orte_rmaps_rank_file_lex_destroy()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can fix it if you want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 07, 2012 at 08:34:59AM -0700, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, not sure why I didn't see an error when I tested the change. It looks like in this case yyterminate should have been defined as orte_rmaps_rank_file_lex_destroy(). Looked a little deeper and it looks like the default action for yyterminate is to call the *lex_destroy function so we don't need to define it anywhere. Let me see if deleting yyterminate introduces any leaks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 07, 2012 at 06:11:06AM -0500, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2012-11-07 06:11:05 EST (Wed, 07 Nov 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 27574
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27574">https://svn.open-mpi.org/trac/ompi/changeset/27574</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A prior commit apparently broke the trunk when something was inadvertently left behind - so remove a reference to a no-longer-existing function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l |     3 ---                                     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   1 files changed, 0 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l    Tue Nov  6 16:25:19 2012    (r27573)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l    2012-11-07 06:11:05 EST (Wed, 07 Nov 2012)    (r27574)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -36,9 +36,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; END_C_DECLS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define yyterminate() \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  return orte_rmaps_rank_file_yylex_destroy()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * global variables
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11764.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27573 - trunk/ompi/mca/pml/v"</a>
<li><strong>Previous message:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<li><strong>In reply to:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
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
