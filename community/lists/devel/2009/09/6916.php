<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 16:33:00 2009" -->
<!-- isoreceived="20090929203300" -->
<!-- sent="Tue, 29 Sep 2009 16:32:53 -0400" -->
<!-- isosent="20090929203253" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014" -->
<!-- id="22A9F27C-F3CB-4289-9CDF-2833457A7F07_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="20090929200310.GD34892_at_sun.com" -->
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
<strong>Date:</strong> 2009-09-29 16:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6915.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6915.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think we need to DECLSPEC it, do we?  We don't need (or want)  
<br>
this symbol to be visible at the link level when user apps link  
<br>
against libmpi.  You might want to put in a comment about why it's not  
<br>
static so that we don't repeat this conversation again next year.  ;-)
<br>
<p>I think not having it DECLSPEC'ed should still work for the debugger  
<br>
(since it worked before when it was static), but if you could test it  
<br>
to be sure, that would be great...
<br>
<p><p>On Sep 29, 2009, at 4:03 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Sep/28/2009 03:11:46PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Sep/28/2009 02:05:14PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Try a newer compiler than gcc 3.4 -- it's pretty ancient.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't get the warning with 4.1.2 either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To get the warning I needed to enable some developer configure  
</span><br>
<span class="quotelev1">&gt; options (e.g.,
</span><br>
<span class="quotelev1">&gt; mkdir .svn &amp;&amp; configure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The below patch gets rid of the warning, but is it the right way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- ompi/debuggers/debuggers.h
</span><br>
<span class="quotelev1">&gt; +++ ompi/debuggers/debuggers.h
</span><br>
<span class="quotelev1">&gt; @@ -40,6 +40,11 @@
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      OMPI_DECLSPEC void ompi_debugger_notify_abort(char *string);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /**
</span><br>
<span class="quotelev1">&gt; +     * Breakpoint function for parallel debuggers.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    OMPI_DECLSPEC void *MPIR_Breakpoint(void);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  END_C_DECLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif /* OMPI_DEBUGGERS_H */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Sep 28, 2009, at 2:03 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Fri, Sep/25/2009 09:31:51PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I think there is a problem with this change - here is a  
</span><br>
<span class="quotelev1">&gt; warning I get
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; when
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; compiling on Mac and Linux:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ompi_debuggers.c:265: warning: no previous prototype for
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &#145;MPIR_Breakpoint&#146;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Can you please take a look?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Can you send me your config.log file? I can't reproduce the  
</span><br>
<span class="quotelev1">&gt; warning
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; using GCC (3.4.6) on RHEL 4.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; On Sep 25, 2009, at 1:14 PM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Author: emallove
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Date: 2009-09-25 15:14:19 EDT (Fri, 25 Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; New Revision: 22014
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22014">https://svn.open-mpi.org/trac/ompi/changeset/22014</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Remove `static` from `MPIR_Breakpoint` so Intel compilers  
</span><br>
<span class="quotelev1">&gt; will not
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; inline
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; it
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;   trunk/ompi/debuggers/ompi_debuggers.c |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Modified: trunk/ompi/debuggers/ompi_debuggers.c
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  
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
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; --- trunk/ompi/debuggers/ompi_debuggers.c    (original)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; +++ trunk/ompi/debuggers/ompi_debuggers.c    2009-09-25  
</span><br>
<span class="quotelev1">&gt; 15:14:19 EDT
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (Fri, 25
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Sep 2009)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; @@ -261,7 +261,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;  * defined in orterun for the starter.  It should never  
</span><br>
<span class="quotelev1">&gt; conflict with
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;  * this one, but we'll make it static, just to be sure.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; -static void *MPIR_Breakpoint(void)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; +void *MPIR_Breakpoint(void)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; {
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;     return NULL;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &lt;ATT20809437.txt&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT21059370.txt&gt;
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
<li><strong>Next message:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6915.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6915.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
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
