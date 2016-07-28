<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 14:05:37 2009" -->
<!-- isoreceived="20090928180537" -->
<!-- sent="Mon, 28 Sep 2009 14:05:14 -0400" -->
<!-- isosent="20090928180514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014" -->
<!-- id="6CA1D5CA-706A-4F9C-B0B4-31ED9D1A9D24_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="20090928180330.GB34892_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 14:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6908.php">Shaun Jackman: "[OMPI devel] MPI_Reduce const sendbuf"</a>
<li><strong>Previous message:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6910.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6910.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try a newer compiler than gcc 3.4 -- it's pretty ancient.
<br>
<p><p>On Sep 28, 2009, at 2:03 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Sep/25/2009 09:31:51PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I think there is a problem with this change - here is a warning I  
</span><br>
<span class="quotelev1">&gt; get when
</span><br>
<span class="quotelev2">&gt; &gt; compiling on Mac and Linux:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_debuggers.c:265: warning: no previous prototype for  
</span><br>
<span class="quotelev1">&gt; &#145;MPIR_Breakpoint&#146;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you please take a look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send me your config.log file? I can't reproduce the warning
</span><br>
<span class="quotelev1">&gt; using GCC (3.4.6) on RHEL 4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 25, 2009, at 1:14 PM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: emallove
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: 2009-09-25 15:14:19 EDT (Fri, 25 Sep 2009)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; New Revision: 22014
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22014">https://svn.open-mpi.org/trac/ompi/changeset/22014</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Remove `static` from `MPIR_Breakpoint` so Intel compilers will  
</span><br>
<span class="quotelev1">&gt; not inline
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   trunk/ompi/debuggers/ompi_debuggers.c |     2 +-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/ompi/debuggers/ompi_debuggers.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
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
<span class="quotelev3">&gt; &gt;&gt; --- trunk/ompi/debuggers/ompi_debuggers.c    (original)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/ompi/debuggers/ompi_debuggers.c    2009-09-25 15:14:19  
</span><br>
<span class="quotelev1">&gt; EDT (Fri, 25
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sep 2009)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -261,7 +261,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  * defined in orterun for the starter.  It should never conflict  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  * this one, but we'll make it static, just to be sure.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -static void *MPIR_Breakpoint(void)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +void *MPIR_Breakpoint(void)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     return NULL;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT20809437.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6908.php">Shaun Jackman: "[OMPI devel] MPI_Reduce const sendbuf"</a>
<li><strong>Previous message:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6906.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6910.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6910.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
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
