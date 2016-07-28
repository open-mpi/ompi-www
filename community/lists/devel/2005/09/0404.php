<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 12:03:52 2005" -->
<!-- isoreceived="20050923170352" -->
<!-- sent="Fri, 23 Sep 2005 13:03:41 -0400" -->
<!-- isosent="20050923170341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  mca selection" -->
<!-- id="88dbba6d5570c429128a8642b289ea9e_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4334257A.20707_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-23 12:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0405.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0403.php">George Bosilca: "mpi.h and mpif.h"</a>
<li><strong>In reply to:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I understand -- all frameworks have priorities for their 
<br>
components...?
<br>
<p>On Sep 23, 2005, at 11:55 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This will benefit to several components: BTL/PTL, PML, having a common
</span><br>
<span class="quotelev1">&gt; set of functions will be really useful. I just have a request. If we
</span><br>
<span class="quotelev1">&gt; specify something like &quot;--mca btl self,mvapi&quot; I think it can be useful
</span><br>
<span class="quotelev1">&gt; to get them in the specified order. For some components (like the BTL)
</span><br>
<span class="quotelev1">&gt; it doesn't make any difference as we will use their internal priorities
</span><br>
<span class="quotelev1">&gt; to order them.For others we can use the order as an indication of the
</span><br>
<span class="quotelev1">&gt; user kind priority.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Short version:
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to have a single, top-level MCA param for each framework that
</span><br>
<span class="quotelev2">&gt;&gt; controls the &quot;include&quot; and &quot;exclude&quot; behavior of components.  
</span><br>
<span class="quotelev2">&gt;&gt; Something
</span><br>
<span class="quotelev2">&gt;&gt; like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun --mca btl self,mvapi ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; would &quot;include&quot; self, mvapi (this actually already works for dynamic
</span><br>
<span class="quotelev2">&gt;&gt; compiles).  And:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun --mca btl !tcp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; would &quot;exclude&quot; tcp.  This would be for all frameworks, at the
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_components_open() level, not during framework-specific
</span><br>
<span class="quotelev2">&gt;&gt; selection.  Hence, excluded / not-included components wouldn't even be
</span><br>
<span class="quotelev2">&gt;&gt; opened (i.e., faster startup and smaller memory footprint).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Longer version:
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Long, long ago, before Tim knew that I put in the &lt;framework&gt; MCA
</span><br>
<span class="quotelev2">&gt;&gt; params into mca_base_components_open(), he added btl_base_include and
</span><br>
<span class="quotelev2">&gt;&gt; btl_base_exclude to handle this kind of thing.  I think that this
</span><br>
<span class="quotelev2">&gt;&gt; should be handled at the MCA level itself -- there should be no need 
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; have this kind of exclusion and inclusion at each framework.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More specifically, the frameworks can call mca_base_components_open()
</span><br>
<span class="quotelev2">&gt;&gt; just as they do now, and if the MCA parameter for that framework was
</span><br>
<span class="quotelev2">&gt;&gt; specified, mca_base_components_open() will obey it and pass back a
</span><br>
<span class="quotelev2">&gt;&gt; customized list of components back to the caller.  The
</span><br>
<span class="quotelev2">&gt;&gt; btl_base_[include|exclude] parameters (and others similar to it) can
</span><br>
<span class="quotelev2">&gt;&gt; then be removed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given that I already am on the hook to fix the static compile issue 
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; 1.0, adding this functionality would be pretty trivial.  Therefore, 
</span><br>
<span class="quotelev2">&gt;&gt; I'd
</span><br>
<span class="quotelev2">&gt;&gt; like to do it for 1.0.  It would also give us a nice, uniform way of
</span><br>
<span class="quotelev2">&gt;&gt; including components across all frameworks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's also shorter to type on the command line.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0405.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0403.php">George Bosilca: "mpi.h and mpif.h"</a>
<li><strong>In reply to:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
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
