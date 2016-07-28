<?
$subject_val = "Re: [OMPI devel] Should visibility and memchecker abort configure?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 04:00:07 2008" -->
<!-- isoreceived="20081003080007" -->
<!-- sent="Fri, 3 Oct 2008 03:59:58 -0400" -->
<!-- isosent="20081003075958" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Should visibility and memchecker abort configure?" -->
<!-- id="B8A61F30-8E65-4673-BAC5-C9B634C7D4BB_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 03:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4729.php">Ralph Castain: "[OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4729.php">Ralph Castain: "[OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>1. No. Having visibility turned off without knowing it is the best way  
<br>
for us to commit bugs in the trunk without noticing, I mean before  
<br>
somebody else get the leg caught in the &quot;not-compiling-trunk trap&quot;. I  
<br>
had more of my share of responsibility for that kind of problems in  
<br>
the past, that exactly rooted in visibility issues. I must say that it  
<br>
is painful enough that some compilers will just silently ignore  
<br>
visibility settings without adding the configure to the chain of guys  
<br>
who just do whatever they want regardless of the requested flags. If I  
<br>
can't have visibility, I want to know. Especially in debug mode.
<br>
<p>2. If Valgrind is not available and this feature requires valgrind, it  
<br>
is reasonable to disable it. Anyway, this would not lead to include  
<br>
silent bugs in the trunk if it gets disabled &quot;silently&quot;. (are you sure  
<br>
though ? I used to enable this on my mac, where there is of course no  
<br>
valid valgrind installed, and it compiled just fine).
<br>
<p>Aurelien
<br>
<p>Le 2 oct. 08 &#224; 18:04, Ralph Castain a &#233;crit :
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
<li><strong>Next message:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4729.php">Ralph Castain: "[OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4729.php">Ralph Castain: "[OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
