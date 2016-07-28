<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 10:55:43 2005" -->
<!-- isoreceived="20050923155543" -->
<!-- sent="Fri, 23 Sep 2005 17:55:38 +0200" -->
<!-- isosent="20050923155538" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  mca selection" -->
<!-- id="4334257A.20707_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cee920052d23a29464fab31fc65eb0cb_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-23 10:55:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>In reply to:</strong> <a href="0396.php">Jeff Squyres: "mca selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0404.php">Jeff Squyres: "Re:  mca selection"</a>
<li><strong>Reply:</strong> <a href="0404.php">Jeff Squyres: "Re:  mca selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This will benefit to several components: BTL/PTL, PML, having a common 
<br>
set of functions will be really useful. I just have a request. If we 
<br>
specify something like &quot;--mca btl self,mvapi&quot; I think it can be useful 
<br>
to get them in the specified order. For some components (like the BTL) 
<br>
it doesn't make any difference as we will use their internal priorities 
<br>
to order them.For others we can use the order as an indication of the 
<br>
user kind priority.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Short version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to have a single, top-level MCA param for each framework that 
</span><br>
<span class="quotelev1">&gt; controls the &quot;include&quot; and &quot;exclude&quot; behavior of components.  Something 
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun --mca btl self,mvapi ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; would &quot;include&quot; self, mvapi (this actually already works for dynamic 
</span><br>
<span class="quotelev1">&gt; compiles).  And:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun --mca btl !tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; would &quot;exclude&quot; tcp.  This would be for all frameworks, at the 
</span><br>
<span class="quotelev1">&gt; mca_base_components_open() level, not during framework-specific 
</span><br>
<span class="quotelev1">&gt; selection.  Hence, excluded / not-included components wouldn't even be 
</span><br>
<span class="quotelev1">&gt; opened (i.e., faster startup and smaller memory footprint).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Longer version:
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long, long ago, before Tim knew that I put in the &lt;framework&gt; MCA 
</span><br>
<span class="quotelev1">&gt; params into mca_base_components_open(), he added btl_base_include and 
</span><br>
<span class="quotelev1">&gt; btl_base_exclude to handle this kind of thing.  I think that this 
</span><br>
<span class="quotelev1">&gt; should be handled at the MCA level itself -- there should be no need to 
</span><br>
<span class="quotelev1">&gt; have this kind of exclusion and inclusion at each framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically, the frameworks can call mca_base_components_open() 
</span><br>
<span class="quotelev1">&gt; just as they do now, and if the MCA parameter for that framework was 
</span><br>
<span class="quotelev1">&gt; specified, mca_base_components_open() will obey it and pass back a 
</span><br>
<span class="quotelev1">&gt; customized list of components back to the caller.  The 
</span><br>
<span class="quotelev1">&gt; btl_base_[include|exclude] parameters (and others similar to it) can 
</span><br>
<span class="quotelev1">&gt; then be removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that I already am on the hook to fix the static compile issue for 
</span><br>
<span class="quotelev1">&gt; 1.0, adding this functionality would be pretty trivial.  Therefore, I'd 
</span><br>
<span class="quotelev1">&gt; like to do it for 1.0.  It would also give us a nice, uniform way of 
</span><br>
<span class="quotelev1">&gt; including components across all frameworks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's also shorter to type on the command line.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>In reply to:</strong> <a href="0396.php">Jeff Squyres: "mca selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0404.php">Jeff Squyres: "Re:  mca selection"</a>
<li><strong>Reply:</strong> <a href="0404.php">Jeff Squyres: "Re:  mca selection"</a>
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
