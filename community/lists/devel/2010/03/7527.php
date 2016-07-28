<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 15:33:38 2010" -->
<!-- isoreceived="20100303203338" -->
<!-- sent="Wed, 3 Mar 2010 15:33:33 -0500" -->
<!-- isosent="20100303203333" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762" -->
<!-- id="2AE1AFEB-2500-472A-BA82-025C1E871D86_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F3D3C109-8159-4A06-9603-B4047FB7FDD2_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 15:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2010, at 3:26 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I guess this is the result different developers with different ideas working on a non consistent way. This is without talking about the fact that we do the same checking in several places, and we duplicate the code in a way that doesn't enforce any consistency. Anyway, now that this problem is highlighted, we should clearly fix it.
</span><br>
<p>When I made that ompi-info list in the last mail, I was thinking the same thing - should we make an opal routine to examine in/exclude kind of behavior?  If so, then all those places could just call that instead of replicating the code.
<br>
<p>Consolidating the code might also enable doing some kind of simple globbing-like or regexp-like behavior (e.g., &quot;lo*&quot; with the globbing meaning, or &quot;lo.*&quot; with the regexp meaning -- globbing is probably a little easier to implement).  
<br>
<p>Such a thing might kill 2 birds with one stone...
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
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
