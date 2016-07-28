<?
$subject_val = "Re: [OMPI devel] Should visibility and memchecker abort configure?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 09:18:42 2008" -->
<!-- isoreceived="20081003131842" -->
<!-- sent="Fri, 3 Oct 2008 09:18:32 -0400" -->
<!-- isosent="20081003131832" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Should visibility and memchecker abort configure?" -->
<!-- id="AD27F89C-F47A-403E-9C9E-5A1147C74C10_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="400A3A24-2BD4-422B-8F89-E902E2B9FFF1_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 09:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4729.php">Ralph Castain: "[OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph in order to have the behavior you describe for the visibility  
<br>
feature just don't specify --enable-visibility. This will enable it if  
<br>
the feature is supported and disable (plus a small warning) if not.
<br>
<p>We decided a while ago that 1) we should have a consistent behavior  
<br>
for similar scenarios and 2) if the user explicitly request something  
<br>
and we are unable to satisfy the request we exit with a big error  
<br>
message. This make perfectly sense as we all know that the output  
<br>
(with the exit) will be utterly ignored by 99.9% of people.
<br>
<p>If some of the --enable options do not abort the configuration when  
<br>
their condition is not satisfied, then this is the bug and we should  
<br>
correct it asap.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 2, 2008, at 6:04 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I make heavy use of platform files to provide OMPI support for the  
</span><br>
<span class="quotelev1">&gt; three NNSA labs. This means supporting multiple compilers, several  
</span><br>
<span class="quotelev1">&gt; different hardware and software configs, debug vs optimized, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Recently, I have encountered a problem that is making life  
</span><br>
<span class="quotelev1">&gt; difficult. The problem revolves around two configure options that  
</span><br>
<span class="quotelev1">&gt; apply to debug builds:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. --enable-visibility. Frustrating as it may be, some compilers  
</span><br>
<span class="quotelev1">&gt; just don't support visibility - and others only support it for  
</span><br>
<span class="quotelev1">&gt; versions above a specific level. Currently, this option will abort  
</span><br>
<span class="quotelev1">&gt; the configure procedure if the compiler does not support visibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. --enable-memchecker. This framework has a component that requires  
</span><br>
<span class="quotelev1">&gt; valgrind 3.2 or above. Unfortunately, if a valgrind meeting that  
</span><br>
<span class="quotelev1">&gt; criteria is not found, this option will also abort the configure  
</span><br>
<span class="quotelev1">&gt; procedure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it truly -necessary- for these options to abort configure in  
</span><br>
<span class="quotelev1">&gt; these conditions? Would it be acceptable for:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * visibility just to print a big warning, surrounded by asterisks,  
</span><br>
<span class="quotelev1">&gt; that the selected compiler does not support visibility - but allow  
</span><br>
<span class="quotelev1">&gt; the build to continue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * memchecker to also print a big warning, surrounded by asterisks,  
</span><br>
<span class="quotelev1">&gt; explaining the valgrind requirement and turn &quot;off&quot; the build of the  
</span><br>
<span class="quotelev1">&gt; memchecker/valgrind component - but allow the build to continue? It  
</span><br>
<span class="quotelev1">&gt; would seem to me that we would certainly want this for the future  
</span><br>
<span class="quotelev1">&gt; anyway as additional memchecker components are supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this would be acceptable, I am happy to help with or implement  
</span><br>
<span class="quotelev1">&gt; the changes. It would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4729.php">Ralph Castain: "[OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
