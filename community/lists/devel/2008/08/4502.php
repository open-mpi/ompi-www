<?
$subject_val = "Re: [OMPI devel] if btl-&gt;add_procs() fails...?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  2 10:29:18 2008" -->
<!-- isoreceived="20080802142918" -->
<!-- sent="Sat, 2 Aug 2008 10:29:10 -0400" -->
<!-- isosent="20080802142910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] if btl-&amp;gt;add_procs() fails...?" -->
<!-- id="B859FF76-1E4B-4A54-80B0-52EA63A1FDAC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C41E618E-42C1-415B-80F1-DB21ED89C4B4_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-02 10:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4501.php">Jeff Squyres: "Re: [OMPI devel] [patch] XgridFoundation configure check"</a>
<li><strong>In reply to:</strong> <a href="4499.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 1, 2008, at 11:39 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; My thought is that if add_procs fails, then that BTL should be  
</span><br>
<span class="quotelev1">&gt; removed (as if init failed) and things should continue on.  If that  
</span><br>
<span class="quotelev1">&gt; BTL was the only way to reach another process, we'll catch that  
</span><br>
<span class="quotelev1">&gt; later and abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are always going to be errors that can't be detected until the  
</span><br>
<span class="quotelev1">&gt; device is actually used, so I think that add_procs errors should be  
</span><br>
<span class="quotelev1">&gt; treated the same as init errors.  The error_cb is a red herring, as  
</span><br>
<span class="quotelev1">&gt; that's supposed to be used in situations where an error can't  
</span><br>
<span class="quotelev1">&gt; directly be returned to the upper layers (like the progress  
</span><br>
<span class="quotelev1">&gt; function).  In this case, we can directly return an error, so we  
</span><br>
<span class="quotelev1">&gt; should do so (and I believe we do, it's the BML/PML that's the  
</span><br>
<span class="quotelev1">&gt; problem).
</span><br>
<p>So if add_procs() fails, do you think that the BML/PML should finalize  
<br>
the module?  That looks like an easy change to make.
<br>
<p>Second, if there are no other successfully-add_proc()'ed modules from  
<br>
that component, should the BTL's progress function be removed from the  
<br>
list of progress functions?  The real question is: if a module  
<br>
add_procs() fails, do we mandate that it still must be safe to call  
<br>
the component's progress function?  I think you're saying &quot;yes&quot;, but  
<br>
just wanted to be sure.  I don't know offhand how a component's  
<br>
progress function is added to the list (can't check ATM), so I'd have  
<br>
to dig into that a bit.
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
<li><strong>Next message:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4501.php">Jeff Squyres: "Re: [OMPI devel] [patch] XgridFoundation configure check"</a>
<li><strong>In reply to:</strong> <a href="4499.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
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
