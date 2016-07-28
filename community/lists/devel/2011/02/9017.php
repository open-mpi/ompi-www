<?
$subject_val = "Re: [OMPI devel] trunk hwloc &amp; static builds";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 17:46:32 2011" -->
<!-- isoreceived="20110223224632" -->
<!-- sent="Wed, 23 Feb 2011 17:46:27 -0500" -->
<!-- isosent="20110223224627" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hwloc &amp;amp; static builds" -->
<!-- id="68B67EF4-0E1E-4927-9C20-42E3490680DC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="442AC3A7-5D11-458C-AC43-60F2F36C085D_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hwloc &amp; static builds<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 17:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9018.php">Nysal Jan: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>Previous message:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>In reply to:</strong> <a href="9006.php">Barrett, Brian W: "[OMPI devel] trunk hwloc &amp; static builds"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I think I have this one solved.  It's a configury change, so it'll come in tonight.  
<br>
<p>Thanks for reporting it.
<br>
<p><p>On Feb 21, 2011, at 9:49 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The trunk currently doesn't link with --enable-static --disable-shared on Linux.  The problem is that the component doesn't pass it's dependencies into the wrapper compiler list.  In particular, the xml support creates a dependency on libxml.  --disable-xml solves the problem, but is still pretty ugly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9018.php">Nysal Jan: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>Previous message:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>In reply to:</strong> <a href="9006.php">Barrett, Brian W: "[OMPI devel] trunk hwloc &amp; static builds"</a>
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
