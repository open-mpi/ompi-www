<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 23:32:01 2009" -->
<!-- isoreceived="20090926033201" -->
<!-- sent="Fri, 25 Sep 2009 21:31:51 -0600" -->
<!-- isosent="20090926033151" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014" -->
<!-- id="4E2DE530-7AF0-4439-A18A-39BD078B206A_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="200909251914.n8PJEJuK023109_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 23:31:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6895.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Previous message:</strong> <a href="6893.php">Eugene Loh: "Re: [OMPI devel] bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think there is a problem with this change - here is a warning I get  
<br>
when compiling on Mac and Linux:
<br>
<p>ompi_debuggers.c:265: warning: no previous prototype for  
<br>
&#145;MPIR_Breakpoint&#146;
<br>
<p>Can you please take a look?
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Sep 25, 2009, at 1:14 PM, emallove_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2009-09-25 15:14:19 EDT (Fri, 25 Sep 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 22014
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22014">https://svn.open-mpi.org/trac/ompi/changeset/22014</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Remove `static` from `MPIR_Breakpoint` so Intel compilers will not  
</span><br>
<span class="quotelev1">&gt; inline it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/debuggers/ompi_debuggers.c |     2 +-
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/debuggers/ompi_debuggers.c
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
<span class="quotelev1">&gt; --- trunk/ompi/debuggers/ompi_debuggers.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/debuggers/ompi_debuggers.c	2009-09-25 15:14:19 EDT  
</span><br>
<span class="quotelev1">&gt; (Fri, 25 Sep 2009)
</span><br>
<span class="quotelev1">&gt; @@ -261,7 +261,7 @@
</span><br>
<span class="quotelev1">&gt;  * defined in orterun for the starter.  It should never conflict with
</span><br>
<span class="quotelev1">&gt;  * this one, but we'll make it static, just to be sure.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -static void *MPIR_Breakpoint(void)
</span><br>
<span class="quotelev1">&gt; +void *MPIR_Breakpoint(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return NULL;
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="6895.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Previous message:</strong> <a href="6893.php">Eugene Loh: "Re: [OMPI devel] bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
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
