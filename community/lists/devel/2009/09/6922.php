<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 19:46:43 2009" -->
<!-- isoreceived="20090930234643" -->
<!-- sent="Wed, 30 Sep 2009 19:46:32 -0400" -->
<!-- isosent="20090930234632" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014" -->
<!-- id="FE6286D8-28D9-4960-95A5-10A5B941AE6F_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0529D1F1-D203-407E-B9F0-9537A51369B8_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 19:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6923.php">Lenny Verkhovsky: "Re: [OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6921.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6924.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6924.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After spending few hours reading through some pretty good papers about  
<br>
shared libraries, I came to the conclusion that somehow this whole  
<br>
stuff is even more obfuscated that one might think. If I understand  
<br>
correctly, there is no need for all local symbols to be visible at  
<br>
all. The linker is allowed to optimize them out. However, it turned  
<br>
out that at least [today] in practice the local symbols are visible  
<br>
(with several versions of gcc, icc and vc).
<br>
<p>In other words, we can safely remove the _DECLSPEC for all debugging  
<br>
symbols and today this will work. However, if we want to avoid having  
<br>
issues with them in the future (when the compiler and linked will be  
<br>
much much much more smarter) I think it's wiser to keep them there.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 30, 2009, at 06:01 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I still don't think these need to be DECLSPEC.  Debuggers can find  
</span><br>
<span class="quotelev1">&gt; local symbols (including static symbols).  Sun was having a problem  
</span><br>
<span class="quotelev1">&gt; with the Intel compilers because the function was being inlined --  
</span><br>
<span class="quotelev1">&gt; and therefore the symbol didn't exist at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removing the &quot;static&quot; was a simple optimization to force the intel  
</span><br>
<span class="quotelev1">&gt; compiler to *not* inline the function.  That's all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should *not* be exposing the MPIR_Breakpoint function to user  
</span><br>
<span class="quotelev1">&gt; applications who -lmpi.  That is what putting DECLSPEC there will do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that the DECLSPEC should be removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2009, at 12:08 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ethan is right. The MPIR_Breakpoint function will be queried by your
</span><br>
<span class="quotelev2">&gt;&gt; preferred parallel debugger, in order to set a breakpoint. Therefore,
</span><br>
<span class="quotelev2">&gt;&gt; to allow the debuggers to be able to find the function we have to  
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; sure it is externally visible, i.e. flagged with OMPI_DECLSPEC (for
</span><br>
<span class="quotelev2">&gt;&gt; the one in libmpi) and with ORTE_DECLSPEC for the one in libopen-rte.
</span><br>
<span class="quotelev2">&gt;&gt; And yes, we really need the *_DECLSPEC to make it visible, extern is
</span><br>
<span class="quotelev2">&gt;&gt; not enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, looking in the ompi/debugger/debugger.h file I realized  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; the two functions declared inside are flagged OMPI_DECLSPEC when they
</span><br>
<span class="quotelev2">&gt;&gt; should not have been, as these two functions are not called from
</span><br>
<span class="quotelev2">&gt;&gt; outside the libmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please try r22032.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2009, at 17:55 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Sep 29, 2009, at 5:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The issue isn't why or why not static, Jeff - the issue is that we
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; get
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; a compiler warning whenever we do a developer build.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Right.  The initial issue was the static-ness, though -- Ethan
</span><br>
<span class="quotelev3">&gt;&gt; &gt; removed the static because some compilers were effectively inlining
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the function (and therefore removing the symbol from the library,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; making the parallel debugger attach stuff not work) presumably
</span><br>
<span class="quotelev3">&gt;&gt; &gt; because a) the function was static, b) the function was short with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; no side effects, and c) the function was only called once within
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that .c file.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Removing the &quot;static&quot; from the function prototype violated those
</span><br>
<span class="quotelev3">&gt;&gt; &gt; assumptions so that it could no longer be inlined (And therefore  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; symbol definitely appears in the library).  But then we ran across
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the &quot;must be prototyped&quot; warning.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; That's where all this came from.  :-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So -- I still don't think we need to DECLSPEC the prototype.  :-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Sep 29, 2009, at 2:32 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I don't think we need to DECLSPEC it, do we?  We don't need (or
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; want) this symbol to be visible at the link level when user apps
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; link against libmpi.  You might want to put in a comment about  
</span><br>
<span class="quotelev2">&gt;&gt; why
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; it's not static so that we don't repeat this conversation again
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; next
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; year.  ;-)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I think not having it DECLSPEC'ed should still work for the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; debugger
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; (since it worked before when it was static), but if you could  
</span><br>
<span class="quotelev2">&gt;&gt; test
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; it to be sure, that would be great...
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6923.php">Lenny Verkhovsky: "Re: [OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6921.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6924.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6924.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
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
