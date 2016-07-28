<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 06:01:13 2009" -->
<!-- isoreceived="20090930100113" -->
<!-- sent="Wed, 30 Sep 2009 06:01:10 -0400" -->
<!-- isosent="20090930100110" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014" -->
<!-- id="0529D1F1-D203-407E-B9F0-9537A51369B8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9CA11A3A-7AFB-403A-8763-C36F3F5E1EB1_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-09-30 06:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6921.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6921.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6921.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I still don't think these need to be DECLSPEC.  Debuggers can find  
<br>
local symbols (including static symbols).  Sun was having a problem  
<br>
with the Intel compilers because the function was being inlined -- and  
<br>
therefore the symbol didn't exist at all.
<br>
<p>Removing the &quot;static&quot; was a simple optimization to force the intel  
<br>
compiler to *not* inline the function.  That's all.
<br>
<p>We should *not* be exposing the MPIR_Breakpoint function to user  
<br>
applications who -lmpi.  That is what putting DECLSPEC there will do.
<br>
<p>I believe that the DECLSPEC should be removed.
<br>
<p><p><p>On Sep 30, 2009, at 12:08 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Ethan is right. The MPIR_Breakpoint function will be queried by your
</span><br>
<span class="quotelev1">&gt; preferred parallel debugger, in order to set a breakpoint. Therefore,
</span><br>
<span class="quotelev1">&gt; to allow the debuggers to be able to find the function we have to make
</span><br>
<span class="quotelev1">&gt; sure it is externally visible, i.e. flagged with OMPI_DECLSPEC (for
</span><br>
<span class="quotelev1">&gt; the one in libmpi) and with ORTE_DECLSPEC for the one in libopen-rte.
</span><br>
<span class="quotelev1">&gt; And yes, we really need the *_DECLSPEC to make it visible, extern is
</span><br>
<span class="quotelev1">&gt; not enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, looking in the ompi/debugger/debugger.h file I realized that
</span><br>
<span class="quotelev1">&gt; the two functions declared inside are flagged OMPI_DECLSPEC when they
</span><br>
<span class="quotelev1">&gt; should not have been, as these two functions are not called from
</span><br>
<span class="quotelev1">&gt; outside the libmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please try r22032.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2009, at 17:55 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 29, 2009, at 5:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The issue isn't why or why not static, Jeff - the issue is that we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; get
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a compiler warning whenever we do a developer build.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right.  The initial issue was the static-ness, though -- Ethan
</span><br>
<span class="quotelev2">&gt; &gt; removed the static because some compilers were effectively inlining
</span><br>
<span class="quotelev2">&gt; &gt; the function (and therefore removing the symbol from the library,
</span><br>
<span class="quotelev2">&gt; &gt; making the parallel debugger attach stuff not work) presumably
</span><br>
<span class="quotelev2">&gt; &gt; because a) the function was static, b) the function was short with
</span><br>
<span class="quotelev2">&gt; &gt; no side effects, and c) the function was only called once within
</span><br>
<span class="quotelev2">&gt; &gt; that .c file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Removing the &quot;static&quot; from the function prototype violated those
</span><br>
<span class="quotelev2">&gt; &gt; assumptions so that it could no longer be inlined (And therefore the
</span><br>
<span class="quotelev2">&gt; &gt; symbol definitely appears in the library).  But then we ran across
</span><br>
<span class="quotelev2">&gt; &gt; the &quot;must be prototyped&quot; warning.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's where all this came from.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So -- I still don't think we need to DECLSPEC the prototype.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 29, 2009, at 2:32 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I don't think we need to DECLSPEC it, do we?  We don't need (or
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; want) this symbol to be visible at the link level when user apps
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; link against libmpi.  You might want to put in a comment about  
</span><br>
<span class="quotelev1">&gt; why
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; it's not static so that we don't repeat this conversation again
</span><br>
<span class="quotelev3">&gt; &gt;&gt; next
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; year.  ;-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I think not having it DECLSPEC'ed should still work for the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; debugger
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; (since it worked before when it was static), but if you could  
</span><br>
<span class="quotelev1">&gt; test
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; it to be sure, that would be great...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6921.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6921.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6921.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
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
