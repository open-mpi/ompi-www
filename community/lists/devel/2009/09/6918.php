<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 17:55:15 2009" -->
<!-- isoreceived="20090929215515" -->
<!-- sent="Tue, 29 Sep 2009 17:55:10 -0400" -->
<!-- isosent="20090929215510" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014" -->
<!-- id="4573E876-59B5-4682-A2A3-A74687B4D88D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF2F75C3-CC50-45D2-8E59-AA52D4758031_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-09-29 17:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 29, 2009, at 5:30 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The issue isn't why or why not static, Jeff - the issue is that we get
</span><br>
<span class="quotelev1">&gt; a compiler warning whenever we do a developer build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Right.  The initial issue was the static-ness, though -- Ethan removed  
<br>
the static because some compilers were effectively inlining the  
<br>
function (and therefore removing the symbol from the library, making  
<br>
the parallel debugger attach stuff not work) presumably because a) the  
<br>
function was static, b) the function was short with no side effects,  
<br>
and c) the function was only called once within that .c file.
<br>
<p>Removing the &quot;static&quot; from the function prototype violated those  
<br>
assumptions so that it could no longer be inlined (And therefore the  
<br>
symbol definitely appears in the library).  But then we ran across the  
<br>
&quot;must be prototyped&quot; warning.
<br>
<p>That's where all this came from.  :-)
<br>
<p>So -- I still don't think we need to DECLSPEC the prototype.  :-)
<br>
<p><span class="quotelev1">&gt; On Sep 29, 2009, at 2:32 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't think we need to DECLSPEC it, do we?  We don't need (or
</span><br>
<span class="quotelev2">&gt; &gt; want) this symbol to be visible at the link level when user apps
</span><br>
<span class="quotelev2">&gt; &gt; link against libmpi.  You might want to put in a comment about why
</span><br>
<span class="quotelev2">&gt; &gt; it's not static so that we don't repeat this conversation again next
</span><br>
<span class="quotelev2">&gt; &gt; year.  ;-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think not having it DECLSPEC'ed should still work for the debugger
</span><br>
<span class="quotelev2">&gt; &gt; (since it worked before when it was static), but if you could test
</span><br>
<span class="quotelev2">&gt; &gt; it to be sure, that would be great...
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
<li><strong>Next message:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Previous message:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>Reply:</strong> <a href="6919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
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
