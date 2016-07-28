<?
$subject_val = "Re: [OMPI devel] if btl-&gt;add_procs() fails...?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 09:41:04 2008" -->
<!-- isoreceived="20080804134104" -->
<!-- sent="Mon, 4 Aug 2008 09:40:56 -0400" -->
<!-- isosent="20080804134056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] if btl-&amp;gt;add_procs() fails...?" -->
<!-- id="49A17438-9B9F-4402-AEB4-E03A08A7E7E3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3886EFFB-97E9-48DF-B38B-6A0F8CAC5AB9_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-08-04 09:40:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4517.php">Ralf Wildenhues: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4504.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 2, 2008, at 2:34 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I am curious how all of the above affects client/server or spawned  
</span><br>
<span class="quotelev2">&gt;&gt; jobs.  If you finalize a BTL then do a connect to a process that  
</span><br>
<span class="quotelev2">&gt;&gt; would use that BTL would it reinitialize itself?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To deal with all the dynamics issues, I wouldn't finalized the BTL.  
</span><br>
<span class="quotelev1">&gt; The BML should handle the progress stuff, just as if the add_procs  
</span><br>
<span class="quotelev1">&gt; succeeded but returned no active peers. But I'd guess that's part of  
</span><br>
<span class="quotelev1">&gt; the bit that doesn't work today. I would further suspect that a BTL  
</span><br>
<span class="quotelev1">&gt; will need to have a working progress function  in the face of  
</span><br>
<span class="quotelev1">&gt; add_procs failures to cope with all the dynamics options. I'm  
</span><br>
<span class="quotelev1">&gt; travelling this weekend, so I can't verify any of this at the moment.
</span><br>
<p><p>This seems a little different than the rest of the code base -- we're  
<br>
talking about having the BTL return an error but have the upper level  
<br>
not treat it as a fatal error.
<br>
<p>I think we actually have a few different situations (&quot;fail&quot; means &quot;not  
<br>
returning OMPI_SUCCESS&quot;):
<br>
<p>1. btl component init fails (only during MPI_INIT): the API supports  
<br>
no notion of failure -- it either returns modules or not (i.e., valid  
<br>
pointers or NULL).  If NULL is returned, the component is ignored and  
<br>
unloaded.
<br>
2. btl add_procs during MPI_INIT fails: this is under debate
<br>
3. btl add_procs during MPI-2 dynamics fails: this is under debate
<br>
<p>For #2 and #3, I suspect that only the BTL knows if it can continue or  
<br>
not.  For example, a failure in #3 may cause the entire BTL to be  
<br>
hosed such that it can no longer communicate with procs that it  
<br>
previously successfully added (e.g., in MPI_INIT).  So we really need  
<br>
add_procs to be able to return multiple things:
<br>
<p>A. OMPI_SUCCESS / all was good
<br>
B. a non-fatal error occurred such that this BTL cannot communicate  
<br>
with the desired peers, but the upper level PML can continue
<br>
C. a fatal error has occurred such that the upper level should abort  
<br>
(or, more specifically, do whatever the error manager says)
<br>
<p>I think that for B in both #2 and #3, we can just have the BTL set all  
<br>
the reachability bits to 0 and return OMPI_SUCCESS.  But for C, the  
<br>
BTL should return != OMPI_SUCCESS.  The PML should treat it as a fatal  
<br>
error and therefore call the error manager.
<br>
<p>I think that this is in-line with Brian's original comments, right?
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
<li><strong>Next message:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4517.php">Ralf Wildenhues: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4504.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
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
