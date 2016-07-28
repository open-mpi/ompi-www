<?
$subject_val = "Re: [OMPI devel] if btl-&gt;add_procs() fails...?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 23:39:49 2008" -->
<!-- isoreceived="20080802033949" -->
<!-- sent="Fri, 1 Aug 2008 21:39:44 -0600" -->
<!-- isosent="20080802033944" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] if btl-&amp;gt;add_procs() fails...?" -->
<!-- id="C41E618E-42C1-415B-80F1-DB21ED89C4B4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="27369CBE-F144-4B9D-BB64-F4EC41AC9804_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] if btl-&gt;add_procs() fails...?<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-01 23:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4500.php">Toby Peterson: "[OMPI devel] [patch] XgridFoundation configure check"</a>
<li><strong>Previous message:</strong> <a href="4498.php">Jeff Squyres: "[OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4498.php">Jeff Squyres: "[OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4502.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4502.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My thought is that if add_procs fails, then that BTL should be removed  
<br>
(as if init failed) and things should continue on.  If that BTL was  
<br>
the only way to reach another process, we'll catch that later and abort.
<br>
<p>There are always going to be errors that can't be detected until the  
<br>
device is actually used, so I think that add_procs errors should be  
<br>
treated the same as init errors.  The error_cb is a red herring, as  
<br>
that's supposed to be used in situations where an error can't directly  
<br>
be returned to the upper layers (like the progress function).  In this  
<br>
case, we can directly return an error, so we should do so (and I  
<br>
believe we do, it's the BML/PML that's the problem).
<br>
<p>Brian
<br>
<p><p>On Aug 1, 2008, at 8:03 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I wasted a bunch of time today debugging a scenario where openib- 
</span><br>
<span class="quotelev2">&gt; &gt;add_procs() was (legitimately) failing during MPI_INIT.   
</span><br>
<span class="quotelev1">&gt; Specifically: an openib BTL module had successfully been  
</span><br>
<span class="quotelev1">&gt; initialized, but then was failing during add_procs().  I say  
</span><br>
<span class="quotelev1">&gt; &quot;legitimately&quot; failing because something external was causing  
</span><br>
<span class="quotelev1">&gt; add_procs to fail (i.e., a misconfiguration on my cluster).  By  
</span><br>
<span class="quotelev1">&gt; &quot;fail&quot;, I mean add_procs() returned != OMPI_SUCCESS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that OMPI does not handle this situation gracefully;  
</span><br>
<span class="quotelev1">&gt; every MPI process dumped core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: what exactly should happen when BTL add_procs()  
</span><br>
<span class="quotelev1">&gt; fails?  Is the BTL expected to recover?  What if the BTL has no  
</span><br>
<span class="quotelev1">&gt; procs as a result of this failure; should the PML (or BML) remove it  
</span><br>
<span class="quotelev1">&gt; from progress loops?  Or should the BTL be able to handle if  
</span><br>
<span class="quotelev1">&gt; progress is called on its component?  (which seems kinda wasteful)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or should the failure of add_procs() be a fatal error?  If so, what  
</span><br>
<span class="quotelev1">&gt; should the BTL do?  The PML's error_cb has not yet been registered,  
</span><br>
<span class="quotelev1">&gt; and returning != OMPI_SUCCESS does not [currently] cause the PML to  
</span><br>
<span class="quotelev1">&gt; abort.  This fact seems to indicate to me that the PML/BTL designers  
</span><br>
<span class="quotelev1">&gt; envisioned that the MPI process should be able to continue.  But I'm  
</span><br>
<span class="quotelev1">&gt; not sure that I agree with that assessment: we have a successfully  
</span><br>
<span class="quotelev1">&gt; initialized BTL module, but an error occurred during add_procs().   
</span><br>
<span class="quotelev1">&gt; Shouldn't we gracefully abort?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - if the BTL returns != OMPI_SUCCESS from add_procs(), the PML  
</span><br>
<span class="quotelev1">&gt; should gracefully abort.
</span><br>
<span class="quotelev1">&gt; - if a BTL fails add_procs() in a non-fatal way, it can set all  
</span><br>
<span class="quotelev1">&gt; reachable bits to 0 and return OMPI_SUCCESS.  The PML will therefore  
</span><br>
<span class="quotelev1">&gt; effectively ignore it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?  I'd like to fix the openib btl's add_procs() one way or  
</span><br>
<span class="quotelev1">&gt; another for v1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4500.php">Toby Peterson: "[OMPI devel] [patch] XgridFoundation configure check"</a>
<li><strong>Previous message:</strong> <a href="4498.php">Jeff Squyres: "[OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4498.php">Jeff Squyres: "[OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4502.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4502.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
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
