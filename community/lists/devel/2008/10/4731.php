<?
$subject_val = "Re: [OMPI devel] Should visibility and memchecker abort configure?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 08:52:50 2008" -->
<!-- isoreceived="20081003125250" -->
<!-- sent="Fri, 3 Oct 2008 06:52:42 -0600" -->
<!-- isosent="20081003125242" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Should visibility and memchecker abort configure?" -->
<!-- id="27383238-2D11-4BB0-80E5-4BF491E5B39D_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B8A61F30-8E65-4673-BAC5-C9B634C7D4BB_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-10-03 08:52:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4730.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4730.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2008, at 1:59 AM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. No. Having visibility turned off without knowing it is the best  
</span><br>
<span class="quotelev1">&gt; way for us to commit bugs in the trunk without noticing, I mean  
</span><br>
<span class="quotelev1">&gt; before somebody else get the leg caught in the &quot;not-compiling-trunk  
</span><br>
<span class="quotelev1">&gt; trap&quot;. I had more of my share of responsibility for that kind of  
</span><br>
<span class="quotelev1">&gt; problems in the past, that exactly rooted in visibility issues. I  
</span><br>
<span class="quotelev1">&gt; must say that it is painful enough that some compilers will just  
</span><br>
<span class="quotelev1">&gt; silently ignore visibility settings without adding the configure to  
</span><br>
<span class="quotelev1">&gt; the chain of guys who just do whatever they want regardless of the  
</span><br>
<span class="quotelev1">&gt; requested flags. If I can't have visibility, I want to know.  
</span><br>
<span class="quotelev1">&gt; Especially in debug mode.
</span><br>
<p>Not sure you understood my proposal. I didn't say you wouldn't know  
<br>
that visibility was not supported - in fact, I suggested a large  
<br>
blaring warning. I just don't believe it should cause the entire build  
<br>
to abort. The fact is that compilers such as PGI simply don't support  
<br>
it, so whether we believe it is important or not, you are not going to  
<br>
get visibility warnings. Once you build, you'll never again see a  
<br>
warning of that fact, so it isn't clear to me what we accomplish by  
<br>
aborting a configure as opposed to blasting out a warning.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If Valgrind is not available and this feature requires valgrind,  
</span><br>
<span class="quotelev1">&gt; it is reasonable to disable it. Anyway, this would not lead to  
</span><br>
<span class="quotelev1">&gt; include silent bugs in the trunk if it gets disabled &quot;silently&quot;.  
</span><br>
<span class="quotelev1">&gt; (are you sure though ? I used to enable this on my mac, where there  
</span><br>
<span class="quotelev1">&gt; is of course no valid valgrind installed, and it compiled just fine).
</span><br>
<p>I verified this. The problem is that there is a valgrind installed -  
<br>
however, it doesn't meet the release criterion. In the case of the  
<br>
Mac, there is no valgrind at all - the configure script seems happy  
<br>
with that scenario.
<br>
<p>I suspect we could consider this portion of the problem a &quot;bug&quot;?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2 oct. 08 &#224; 18:04, Ralph Castain a &#233;crit :
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
<li><strong>Next message:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4730.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4730.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
