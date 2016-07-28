<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 17:16:07 2012" -->
<!-- isoreceived="20121030211607" -->
<!-- sent="Tue, 30 Oct 2012 15:16:03 -0600" -->
<!-- isosent="20121030211603" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh" -->
<!-- id="20121030211603.GA50051_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="66DE130A-1C5F-4E19-B293-6D599383DBD7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 17:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11690.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
<li><strong>Previous message:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>In reply to:</strong> <a href="11687.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11690.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct 30, 2012 at 01:16:17PM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Actually, now that I look at it, I'm not sure what Jeff is talking about here is correct. I think Nathan's patch is in fact right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan's change doesn't in any way impact what gets passed to remote procs. All it does is modify what gets passed on the *orted's* command line. The orted has no idea what OMPI_foo means as an argument on its command line, and I don't think we want to change it.
</span><br>
<p>Exactly! The loop is meant to add mca options the user has set via env vars that are not already on the command line. Some examples with the wrong conditional (env var -&gt; orted option):
<br>
<p>OMPI_COMMAND=foo    ---&gt;    -mca AND foo
<br>
OMPI_PATH=foo       ---&gt;    -mca  foo
<br>
OMPI_MCA_bar=foo    ---&gt;    -mca bar foo
<br>
OMPI_=f             ---&gt;    SEGV (possibly)  -- shorter than 9 characters long
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11690.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
<li><strong>Previous message:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>In reply to:</strong> <a href="11687.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11690.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
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
