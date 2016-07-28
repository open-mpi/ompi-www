<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 16:03:15 2009" -->
<!-- isoreceived="20090929200315" -->
<!-- sent="Tue, 29 Sep 2009 16:03:11 -0400" -->
<!-- isosent="20090929200311" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014" -->
<!-- id="20090929200310.GD34892_at_sun.com" -->
<!-- charset="unknown-8bit" -->
<!-- inreplyto="20090928191146.GC34892_at_sun.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 16:03:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6916.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>In reply to:</strong> <a href="6910.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6916.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6916.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Sep/28/2009 03:11:46PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Mon, Sep/28/2009 02:05:14PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Try a newer compiler than gcc 3.4 -- it's pretty ancient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't get the warning with 4.1.2 either.
</span><br>
<p>To get the warning I needed to enable some developer configure options (e.g.,
<br>
mkdir .svn &amp;&amp; configure). 
<br>
<p>The below patch gets rid of the warning, but is it the right way?
<br>
<p>--- ompi/debuggers/debuggers.h
<br>
+++ ompi/debuggers/debuggers.h
<br>
@@ -40,6 +40,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_DECLSPEC void ompi_debugger_notify_abort(char *string);
<br>
<p>+    /**
<br>
+     * Breakpoint function for parallel debuggers.
<br>
+     */
<br>
+    OMPI_DECLSPEC void *MPIR_Breakpoint(void);
<br>
+
<br>
&nbsp;END_C_DECLS
<br>
<p>&nbsp;#endif /* OMPI_DEBUGGERS_H */
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 28, 2009, at 2:03 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Sep/25/2009 09:31:51PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I think there is a problem with this change - here is a warning I get 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; compiling on Mac and Linux:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ompi_debuggers.c:265: warning: no previous prototype for 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &#145;MPIR_Breakpoint&#146;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Can you please take a look?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you send me your config.log file? I can't reproduce the warning
</span><br>
<span class="quotelev3">&gt; &gt;&gt; using GCC (3.4.6) on RHEL 4.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Sep 25, 2009, at 1:14 PM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Date: 2009-09-25 15:14:19 EDT (Fri, 25 Sep 2009)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; New Revision: 22014
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22014">https://svn.open-mpi.org/trac/ompi/changeset/22014</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Remove `static` from `MPIR_Breakpoint` so Intel compilers will not 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; inline
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; it
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;   trunk/ompi/debuggers/ompi_debuggers.c |     2 +-
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Modified: trunk/ompi/debuggers/ompi_debuggers.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; --- trunk/ompi/debuggers/ompi_debuggers.c    (original)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; +++ trunk/ompi/debuggers/ompi_debuggers.c    2009-09-25 15:14:19 EDT 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (Fri, 25
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Sep 2009)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; @@ -261,7 +261,7 @@
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  * defined in orterun for the starter.  It should never conflict with
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  * this one, but we'll make it static, just to be sure.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  */
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; -static void *MPIR_Breakpoint(void)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; +void *MPIR_Breakpoint(void)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; {
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;     return NULL;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; }
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;ATT20809437.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6916.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>In reply to:</strong> <a href="6910.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6916.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6916.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
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
