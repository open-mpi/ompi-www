<?
$subject_val = "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 17:08:22 2011" -->
<!-- isoreceived="20111215220822" -->
<!-- sent="Thu, 15 Dec 2011 17:08:17 -0500" -->
<!-- isosent="20111215220817" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)" -->
<!-- id="D193A625-31DC-4B53-8219-26F00D68A4DB_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6FC9BC21-E33C-48DE-B570-1C13944451F8_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 17:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10150.php">Ralph Castain: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10148.php">Ralph Castain: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10152.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Reply:</strong> <a href="10152.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is quite impressive. After digging a little bit more, it appears that the orte/tools/orterun/debuggers.c is in the repository but it is not used for compilation. Thus, I really don't see where the second definition is coming from?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 15, 2011, at 17:02 , George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2011, at 16:55 , Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a problem with 1.5.5rc1 that prevents padb from loading the process table start from the orterun process, what appears to be happening is that MPIR_proctable and MPIR_proctable_size is present in both orterun itself and also in libopen-rte.so, the code is correctly setting them in libopen-rte.so however when gdb is picking the variable from orterun in preference and hence padb is reading NULL values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, there are two definitions, but a single declaration. This is true for both the trunk and the 1.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./orte/mca/debugger/base/base.h:61:ORTE_DECLSPEC extern struct MPIR_PROCDESC *MPIR_proctable;
</span><br>
<span class="quotelev1">&gt; ./orte/mca/debugger/base/base.h:62:ORTE_DECLSPEC extern int MPIR_proctable_size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./orte/mca/debugger/base/debugger_base_open.c:42:struct MPIR_PROCDESC *MPIR_proctable = NULL;
</span><br>
<span class="quotelev1">&gt; ./orte/mca/debugger/base/debugger_base_open.c:43:int MPIR_proctable_size = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./orte/tools/orterun/debuggers.c:142:struct MPIR_PROCDESC *MPIR_proctable = NULL;
</span><br>
<span class="quotelev1">&gt; ./orte/tools/orterun/debuggers.c:143:int MPIR_proctable_size = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a log showing the problem, the only change I made to the source is to add a call to orte_debugger_base_dump() before the return from orte_debugger_base_init_after_spawn(), it looks like this could also have been achieved via a debug setting but I couldn't see how.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10150.php">Ralph Castain: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10148.php">Ralph Castain: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10152.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Reply:</strong> <a href="10152.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
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
