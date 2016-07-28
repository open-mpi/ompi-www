<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 10:35:04 2012" -->
<!-- isoreceived="20121107153504" -->
<!-- sent="Wed, 7 Nov 2012 08:34:59 -0700" -->
<!-- isosent="20121107153459" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file" -->
<!-- id="20121107153459.GA54824_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121107111106.234D615FA9C_at_tiger.crest.iu.edu" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 10:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<li><strong>Reply:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, not sure why I didn't see an error when I tested the change. It looks like in this case yyterminate should have been defined as orte_rmaps_rank_file_lex_destroy(). Looked a little deeper and it looks like the default action for yyterminate is to call the *lex_destroy function so we don't need to define it anywhere. Let me see if deleting yyterminate introduces any leaks.
<br>
<p>-Nathan
<br>
<p>On Wed, Nov 07, 2012 at 06:11:06AM -0500, svn-commit-mailer_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2012-11-07 06:11:05 EST (Wed, 07 Nov 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 27574
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27574">https://svn.open-mpi.org/trac/ompi/changeset/27574</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; A prior commit apparently broke the trunk when something was inadvertently left behind - so remove a reference to a no-longer-existing function
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l |     3 ---                                     
</span><br>
<span class="quotelev1">&gt;    1 files changed, 0 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l	Tue Nov  6 16:25:19 2012	(r27573)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l	2012-11-07 06:11:05 EST (Wed, 07 Nov 2012)	(r27574)
</span><br>
<span class="quotelev1">&gt; @@ -36,9 +36,6 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  END_C_DECLS
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -#define yyterminate() \
</span><br>
<span class="quotelev1">&gt; -  return orte_rmaps_rank_file_yylex_destroy()
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * global variables
</span><br>
<span class="quotelev1">&gt;   */
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
<li><strong>Next message:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<li><strong>Reply:</strong> <a href="11762.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
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
