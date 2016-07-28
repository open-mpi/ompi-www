<?
$subject_val = "Re: [OMPI devel] Should visibility and memchecker abort configure?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 09:26:31 2008" -->
<!-- isoreceived="20081003132631" -->
<!-- sent="Fri, 3 Oct 2008 07:26:21 -0600" -->
<!-- isosent="20081003132621" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Should visibility and memchecker abort configure?" -->
<!-- id="C331D542-B601-4058-BB8B-285F9A0D4363_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AD27F89C-F47A-403E-9C9E-5A1147C74C10_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Should visibility and memchecker abort configure?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 09:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4734.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4734.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4734.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah! I was unaware of that behavior for visibility. Thanks for  
<br>
clarifying - that's a behavior I can live with.
<br>
<p>However, what about memchecker? Per my earlier note that crossed this  
<br>
one, is the current behavior a &quot;bug&quot;?
<br>
<p><p>On Oct 3, 2008, at 7:18 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Ralph in order to have the behavior you describe for the visibility  
</span><br>
<span class="quotelev1">&gt; feature just don't specify --enable-visibility. This will enable it  
</span><br>
<span class="quotelev1">&gt; if the feature is supported and disable (plus a small warning) if not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We decided a while ago that 1) we should have a consistent behavior  
</span><br>
<span class="quotelev1">&gt; for similar scenarios and 2) if the user explicitly request  
</span><br>
<span class="quotelev1">&gt; something and we are unable to satisfy the request we exit with a  
</span><br>
<span class="quotelev1">&gt; big error message. This make perfectly sense as we all know that the  
</span><br>
<span class="quotelev1">&gt; output (with the exit) will be utterly ignored by 99.9% of people.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If some of the --enable options do not abort the configuration when  
</span><br>
<span class="quotelev1">&gt; their condition is not satisfied, then this is the bug and we should  
</span><br>
<span class="quotelev1">&gt; correct it asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2008, at 6:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I make heavy use of platform files to provide OMPI support for the  
</span><br>
<span class="quotelev2">&gt;&gt; three NNSA labs. This means supporting multiple compilers, several  
</span><br>
<span class="quotelev2">&gt;&gt; different hardware and software configs, debug vs optimized, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Recently, I have encountered a problem that is making life  
</span><br>
<span class="quotelev2">&gt;&gt; difficult. The problem revolves around two configure options that  
</span><br>
<span class="quotelev2">&gt;&gt; apply to debug builds:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. --enable-visibility. Frustrating as it may be, some compilers  
</span><br>
<span class="quotelev2">&gt;&gt; just don't support visibility - and others only support it for  
</span><br>
<span class="quotelev2">&gt;&gt; versions above a specific level. Currently, this option will abort  
</span><br>
<span class="quotelev2">&gt;&gt; the configure procedure if the compiler does not support visibility.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. --enable-memchecker. This framework has a component that  
</span><br>
<span class="quotelev2">&gt;&gt; requires valgrind 3.2 or above. Unfortunately, if a valgrind  
</span><br>
<span class="quotelev2">&gt;&gt; meeting that criteria is not found, this option will also abort the  
</span><br>
<span class="quotelev2">&gt;&gt; configure procedure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it truly -necessary- for these options to abort configure in  
</span><br>
<span class="quotelev2">&gt;&gt; these conditions? Would it be acceptable for:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * visibility just to print a big warning, surrounded by asterisks,  
</span><br>
<span class="quotelev2">&gt;&gt; that the selected compiler does not support visibility - but allow  
</span><br>
<span class="quotelev2">&gt;&gt; the build to continue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * memchecker to also print a big warning, surrounded by asterisks,  
</span><br>
<span class="quotelev2">&gt;&gt; explaining the valgrind requirement and turn &quot;off&quot; the build of the  
</span><br>
<span class="quotelev2">&gt;&gt; memchecker/valgrind component - but allow the build to continue? It  
</span><br>
<span class="quotelev2">&gt;&gt; would seem to me that we would certainly want this for the future  
</span><br>
<span class="quotelev2">&gt;&gt; anyway as additional memchecker components are supported.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If this would be acceptable, I am happy to help with or implement  
</span><br>
<span class="quotelev2">&gt;&gt; the changes. It would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<li><strong>Next message:</strong> <a href="4734.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4734.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4734.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
