<?
$subject_val = "Re: [OMPI devel] Should visibility and memchecker abort configure?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 09:32:28 2008" -->
<!-- isoreceived="20081003133228" -->
<!-- sent="Fri, 3 Oct 2008 09:32:22 -0400" -->
<!-- isosent="20081003133222" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Should visibility and memchecker abort configure?" -->
<!-- id="59663146-1D93-454D-A616-484377C576AA_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C331D542-B601-4058-BB8B-285F9A0D4363_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-10-03 09:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4735.php">Daniel Hansen: "[OMPI devel] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2008, at 9:26 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; However, what about memchecker? Per my earlier note that crossed  
</span><br>
<span class="quotelev1">&gt; this one, is the current behavior a &quot;bug&quot;?
</span><br>
<p>As I said if one request the memchecker and we cannot satisfy it, then  
<br>
we should exit with a big error message that clearly state that we are  
<br>
unable to find any (or some specific) version of the valgrind libraries.
<br>
<p>The behavior related to memchecker you described in your second email  
<br>
seems like a deviation from this, so from my perspective it should be  
<br>
considered as a bug.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; On Oct 3, 2008, at 7:18 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph in order to have the behavior you describe for the visibility  
</span><br>
<span class="quotelev2">&gt;&gt; feature just don't specify --enable-visibility. This will enable it  
</span><br>
<span class="quotelev2">&gt;&gt; if the feature is supported and disable (plus a small warning) if  
</span><br>
<span class="quotelev2">&gt;&gt; not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We decided a while ago that 1) we should have a consistent behavior  
</span><br>
<span class="quotelev2">&gt;&gt; for similar scenarios and 2) if the user explicitly request  
</span><br>
<span class="quotelev2">&gt;&gt; something and we are unable to satisfy the request we exit with a  
</span><br>
<span class="quotelev2">&gt;&gt; big error message. This make perfectly sense as we all know that  
</span><br>
<span class="quotelev2">&gt;&gt; the output (with the exit) will be utterly ignored by 99.9% of  
</span><br>
<span class="quotelev2">&gt;&gt; people.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If some of the --enable options do not abort the configuration when  
</span><br>
<span class="quotelev2">&gt;&gt; their condition is not satisfied, then this is the bug and we  
</span><br>
<span class="quotelev2">&gt;&gt; should correct it asap.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 2, 2008, at 6:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I make heavy use of platform files to provide OMPI support for the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; three NNSA labs. This means supporting multiple compilers, several  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different hardware and software configs, debug vs optimized, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Recently, I have encountered a problem that is making life  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difficult. The problem revolves around two configure options that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apply to debug builds:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. --enable-visibility. Frustrating as it may be, some compilers  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just don't support visibility - and others only support it for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions above a specific level. Currently, this option will abort  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the configure procedure if the compiler does not support visibility.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. --enable-memchecker. This framework has a component that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requires valgrind 3.2 or above. Unfortunately, if a valgrind  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; meeting that criteria is not found, this option will also abort  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the configure procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it truly -necessary- for these options to abort configure in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these conditions? Would it be acceptable for:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * visibility just to print a big warning, surrounded by asterisks,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the selected compiler does not support visibility - but allow  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the build to continue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * memchecker to also print a big warning, surrounded by asterisks,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explaining the valgrind requirement and turn &quot;off&quot; the build of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the memchecker/valgrind component - but allow the build to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; continue? It would seem to me that we would certainly want this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the future anyway as additional memchecker components are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supported.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If this would be acceptable, I am happy to help with or implement  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the changes. It would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4735.php">Daniel Hansen: "[OMPI devel] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4733.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
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
