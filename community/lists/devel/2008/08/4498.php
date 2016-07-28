<?
$subject_val = "[OMPI devel] if btl-&gt;add_procs() fails...?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 22:03:14 2008" -->
<!-- isoreceived="20080802020314" -->
<!-- sent="Fri, 1 Aug 2008 22:03:02 -0400" -->
<!-- isosent="20080802020302" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] if btl-&amp;gt;add_procs() fails...?" -->
<!-- id="27369CBE-F144-4B9D-BB64-F4EC41AC9804_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] if btl-&gt;add_procs() fails...?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-01 22:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4499.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4497.php">Jeff Squyres: "[OMPI devel] v1.3 RMs: pls_rsh_agent MCA param deprecated synonym"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4499.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4499.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wasted a bunch of time today debugging a scenario where openib- 
<br>
<span class="quotelev1"> &gt;add_procs() was (legitimately) failing during MPI_INIT.   
</span><br>
Specifically: an openib BTL module had successfully been initialized,  
<br>
but then was failing during add_procs().  I say &quot;legitimately&quot; failing  
<br>
because something external was causing add_procs to fail (i.e., a  
<br>
misconfiguration on my cluster).  By &quot;fail&quot;, I mean add_procs()  
<br>
returned != OMPI_SUCCESS.
<br>
<p>The problem is that OMPI does not handle this situation gracefully;  
<br>
every MPI process dumped core.
<br>
<p>My question is: what exactly should happen when BTL add_procs()  
<br>
fails?  Is the BTL expected to recover?  What if the BTL has no procs  
<br>
as a result of this failure; should the PML (or BML) remove it from  
<br>
progress loops?  Or should the BTL be able to handle if progress is  
<br>
called on its component?  (which seems kinda wasteful)
<br>
<p>Or should the failure of add_procs() be a fatal error?  If so, what  
<br>
should the BTL do?  The PML's error_cb has not yet been registered,  
<br>
and returning != OMPI_SUCCESS does not [currently] cause the PML to  
<br>
abort.  This fact seems to indicate to me that the PML/BTL designers  
<br>
envisioned that the MPI process should be able to continue.  But I'm  
<br>
not sure that I agree with that assessment: we have a successfully  
<br>
initialized BTL module, but an error occurred during add_procs().   
<br>
Shouldn't we gracefully abort?
<br>
<p>My $0.02:
<br>
<p>- if the BTL returns != OMPI_SUCCESS from add_procs(), the PML should  
<br>
gracefully abort.
<br>
- if a BTL fails add_procs() in a non-fatal way, it can set all  
<br>
reachable bits to 0 and return OMPI_SUCCESS.  The PML will therefore  
<br>
effectively ignore it.
<br>
<p>Comments?  I'd like to fix the openib btl's add_procs() one way or  
<br>
another for v1.3.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4499.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4497.php">Jeff Squyres: "[OMPI devel] v1.3 RMs: pls_rsh_agent MCA param deprecated synonym"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4499.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4499.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
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
