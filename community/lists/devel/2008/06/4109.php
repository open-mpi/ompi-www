<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 17:07:39 2008" -->
<!-- isoreceived="20080609210739" -->
<!-- sent="Mon, 9 Jun 2008 17:07:27 -0400" -->
<!-- isosent="20080609210727" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625" -->
<!-- id="8BC7EAEB-6904-4099-A1AD-4EC50CD59CE9_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200806092034.m59KYEn6024443_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 17:07:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>Previous message:</strong> <a href="4108.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>Reply:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit looks like it does not compile.
<br>
orterun.o: In function `orterun':
<br>
../../../../trunk/orte/tools/orterun/orterun.c:525: undefined  
<br>
reference to `orte_totalview_init_before_spawn'
<br>
orterun.o: In function `job_completed':
<br>
../../../../trunk/orte/tools/orterun/orterun.c:603: undefined  
<br>
reference to `orte_totalview_finalize'
<br>
orterun.o: In function `parse_globals':
<br>
../../../../trunk/orte/tools/orterun/orterun.c:1106: undefined  
<br>
reference to `orte_run_debugger'
<br>
collect2: ld returned 1 exit status
<br>
<p>Aurelien
<br>
<p><p>Le 9 juin 08 &#224; 16:34, rhc_at_[hidden] a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2008-06-09 16:34:14 EDT (Mon, 09 Jun 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 18625
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18625">https://svn.open-mpi.org/trac/ompi/changeset/18625</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Refs #1255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This commit repairs the debugger initialization procedure. I am not  
</span><br>
<span class="quotelev1">&gt; closing the ticket, however, pending Jeff's review of how it  
</span><br>
<span class="quotelev1">&gt; interfaces to the ompi_debugger code he implemented. There were  
</span><br>
<span class="quotelev1">&gt; duplicate symbols being created in that code, but not used anywhere.  
</span><br>
<span class="quotelev1">&gt; I replaced them with the ORTE-created symbols instead. However,  
</span><br>
<span class="quotelev1">&gt; since they aren't used anywhere, I have no way of checking to ensure  
</span><br>
<span class="quotelev1">&gt; I didn't break something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the ticket can be checked by Jeff when he returns from  
</span><br>
<span class="quotelev1">&gt; vacation... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/totalview.c
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/totalview.h
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/totalview.c
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/totalview.h
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/debuggers/ompi_debuggers.c             |    13 + 
</span><br>
<span class="quotelev1">&gt; +-----------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c |    14 ++++ 
</span><br>
<span class="quotelev1">&gt; +---------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/Makefile.am              |     5 ++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/orterun.c                |     7 +++++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/Makefile.am                       |     6 ++++--
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/show_help.h                       |     4 ++--
</span><br>
<span class="quotelev1">&gt;   6 files changed, 20 insertions(+), 29 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (41811 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 18624:18625 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>Previous message:</strong> <a href="4108.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
<li><strong>Reply:</strong> <a href="4110.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18625"</a>
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
