<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 00:08:24 2009" -->
<!-- isoreceived="20090930040824" -->
<!-- sent="Wed, 30 Sep 2009 00:08:15 -0400" -->
<!-- isosent="20090930040815" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014" -->
<!-- id="9CA11A3A-7AFB-403A-8763-C36F3F5E1EB1_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4573E876-59B5-4682-A2A3-A74687B4D88D_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-30 00:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6918.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6918.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan is right. The MPIR_Breakpoint function will be queried by your  
<br>
preferred parallel debugger, in order to set a breakpoint. Therefore,  
<br>
to allow the debuggers to be able to find the function we have to make  
<br>
sure it is externally visible, i.e. flagged with OMPI_DECLSPEC (for  
<br>
the one in libmpi) and with ORTE_DECLSPEC for the one in libopen-rte.  
<br>
And yes, we really need the *_DECLSPEC to make it visible, extern is  
<br>
not enough.
<br>
<p>Moreover, looking in the ompi/debugger/debugger.h file I realized that  
<br>
the two functions declared inside are flagged OMPI_DECLSPEC when they  
<br>
should not have been, as these two functions are not called from  
<br>
outside the libmpi.
<br>
<p>Please try r22032.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 29, 2009, at 17:55 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 29, 2009, at 5:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The issue isn't why or why not static, Jeff - the issue is that we  
</span><br>
<span class="quotelev2">&gt;&gt; get
</span><br>
<span class="quotelev2">&gt;&gt; a compiler warning whenever we do a developer build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.  The initial issue was the static-ness, though -- Ethan  
</span><br>
<span class="quotelev1">&gt; removed the static because some compilers were effectively inlining  
</span><br>
<span class="quotelev1">&gt; the function (and therefore removing the symbol from the library,  
</span><br>
<span class="quotelev1">&gt; making the parallel debugger attach stuff not work) presumably  
</span><br>
<span class="quotelev1">&gt; because a) the function was static, b) the function was short with  
</span><br>
<span class="quotelev1">&gt; no side effects, and c) the function was only called once within  
</span><br>
<span class="quotelev1">&gt; that .c file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removing the &quot;static&quot; from the function prototype violated those  
</span><br>
<span class="quotelev1">&gt; assumptions so that it could no longer be inlined (And therefore the  
</span><br>
<span class="quotelev1">&gt; symbol definitely appears in the library).  But then we ran across  
</span><br>
<span class="quotelev1">&gt; the &quot;must be prototyped&quot; warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's where all this came from.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So -- I still don't think we need to DECLSPEC the prototype.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2009, at 2:32 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I don't think we need to DECLSPEC it, do we?  We don't need (or
</span><br>
<span class="quotelev3">&gt;&gt; &gt; want) this symbol to be visible at the link level when user apps
</span><br>
<span class="quotelev3">&gt;&gt; &gt; link against libmpi.  You might want to put in a comment about why
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it's not static so that we don't repeat this conversation again  
</span><br>
<span class="quotelev2">&gt;&gt; next
</span><br>
<span class="quotelev3">&gt;&gt; &gt; year.  ;-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I think not having it DECLSPEC'ed should still work for the  
</span><br>
<span class="quotelev2">&gt;&gt; debugger
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (since it worked before when it was static), but if you could test
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it to be sure, that would be great...
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
<li><strong>Next message:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6918.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6918.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
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
