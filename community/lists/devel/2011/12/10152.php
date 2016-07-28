<?
$subject_val = "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 17:10:24 2011" -->
<!-- isoreceived="20111215221024" -->
<!-- sent="Thu, 15 Dec 2011 17:10:19 -0500" -->
<!-- isosent="20111215221019" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)" -->
<!-- id="75C0A374-BD6F-412C-910D-B826150E8721_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D193A625-31DC-4B53-8219-26F00D68A4DB_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 17:10:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10153.php">Ashley Pittman: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10151.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10149.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10151.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on Ralph's comment -- it's not on the trunk.  Perhaps the CMR didn't properly remove it from v1.5, but that explains why it's not in the v1.5 Makefile.am.
<br>
<p><p>On Dec 15, 2011, at 5:08 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This is quite impressive. After digging a little bit more, it appears that the orte/tools/orterun/debuggers.c is in the repository but it is not used for compilation. Thus, I really don't see where the second definition is coming from?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2011, at 17:02 , George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2011, at 16:55 , Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a problem with 1.5.5rc1 that prevents padb from loading the process table start from the orterun process, what appears to be happening is that MPIR_proctable and MPIR_proctable_size is present in both orterun itself and also in libopen-rte.so, the code is correctly setting them in libopen-rte.so however when gdb is picking the variable from orterun in preference and hence padb is reading NULL values.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, there are two definitions, but a single declaration. This is true for both the trunk and the 1.5.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/mca/debugger/base/base.h:61:ORTE_DECLSPEC extern struct MPIR_PROCDESC *MPIR_proctable;
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/mca/debugger/base/base.h:62:ORTE_DECLSPEC extern int MPIR_proctable_size;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/mca/debugger/base/debugger_base_open.c:42:struct MPIR_PROCDESC *MPIR_proctable = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/mca/debugger/base/debugger_base_open.c:43:int MPIR_proctable_size = 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/tools/orterun/debuggers.c:142:struct MPIR_PROCDESC *MPIR_proctable = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/tools/orterun/debuggers.c:143:int MPIR_proctable_size = 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached is a log showing the problem, the only change I made to the source is to add a call to orte_debugger_base_dump() before the return from orte_debugger_base_init_after_spawn(), it looks like this could also have been achieved via a debug setting but I couldn't see how.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10153.php">Ashley Pittman: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10151.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10149.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10151.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
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
