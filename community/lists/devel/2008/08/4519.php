<?
$subject_val = "Re: [OMPI devel] if btl-&gt;add_procs() fails...?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 09:52:20 2008" -->
<!-- isoreceived="20080804135220" -->
<!-- sent="Mon, 4 Aug 2008 09:52:12 -0400" -->
<!-- isosent="20080804135212" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] if btl-&amp;gt;add_procs() fails...?" -->
<!-- id="7F634D0B-65FF-4CF2-A45F-18D34F99D418_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A17438-9B9F-4402-AEB4-E03A08A7E7E3_at_cisco.com" -->
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
<strong>Date:</strong> 2008-08-04 09:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 4, 2008, at 9:40 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 2, 2008, at 2:34 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am curious how all of the above affects client/server or spawned  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs.  If you finalize a BTL then do a connect to a process that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would use that BTL would it reinitialize itself?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To deal with all the dynamics issues, I wouldn't finalized the BTL.  
</span><br>
<span class="quotelev2">&gt;&gt; The BML should handle the progress stuff, just as if the add_procs  
</span><br>
<span class="quotelev2">&gt;&gt; succeeded but returned no active peers. But I'd guess that's part  
</span><br>
<span class="quotelev2">&gt;&gt; of the bit that doesn't work today. I would further suspect that a  
</span><br>
<span class="quotelev2">&gt;&gt; BTL will need to have a working progress function  in the face of  
</span><br>
<span class="quotelev2">&gt;&gt; add_procs failures to cope with all the dynamics options. I'm  
</span><br>
<span class="quotelev2">&gt;&gt; travelling this weekend, so I can't verify any of this at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems a little different than the rest of the code base --  
</span><br>
<span class="quotelev1">&gt; we're talking about having the BTL return an error but have the  
</span><br>
<span class="quotelev1">&gt; upper level not treat it as a fatal error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we actually have a few different situations (&quot;fail&quot; means  
</span><br>
<span class="quotelev1">&gt; &quot;not returning OMPI_SUCCESS&quot;):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. btl component init fails (only during MPI_INIT): the API supports  
</span><br>
<span class="quotelev1">&gt; no notion of failure -- it either returns modules or not (i.e.,  
</span><br>
<span class="quotelev1">&gt; valid pointers or NULL).  If NULL is returned, the component is  
</span><br>
<span class="quotelev1">&gt; ignored and unloaded.
</span><br>
<span class="quotelev1">&gt; 2. btl add_procs during MPI_INIT fails: this is under debate
</span><br>
<span class="quotelev1">&gt; 3. btl add_procs during MPI-2 dynamics fails: this is under debate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For #2 and #3, I suspect that only the BTL knows if it can continue  
</span><br>
<span class="quotelev1">&gt; or not.  For example, a failure in #3 may cause the entire BTL to be  
</span><br>
<span class="quotelev1">&gt; hosed such that it can no longer communicate with procs that it  
</span><br>
<span class="quotelev1">&gt; previously successfully added (e.g., in MPI_INIT).  So we really  
</span><br>
<span class="quotelev1">&gt; need add_procs to be able to return multiple things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A. OMPI_SUCCESS / all was good
</span><br>
<span class="quotelev1">&gt; B. a non-fatal error occurred such that this BTL cannot communicate  
</span><br>
<span class="quotelev1">&gt; with the desired peers, but the upper level PML can continue
</span><br>
<span class="quotelev1">&gt; C. a fatal error has occurred such that the upper level should abort  
</span><br>
<span class="quotelev1">&gt; (or, more specifically, do whatever the error manager says)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that for B in both #2 and #3, we can just have the BTL set  
</span><br>
<span class="quotelev1">&gt; all the reachability bits to 0 and return OMPI_SUCCESS.  But for C,  
</span><br>
<span class="quotelev1">&gt; the BTL should return != OMPI_SUCCESS.  The PML should treat it as a  
</span><br>
<span class="quotelev1">&gt; fatal error and therefore call the error manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that this is in-line with Brian's original comments, right?
</span><br>
<p>I suppose, but that's a pain when you just want to say &quot;I don't  
<br>
support calling add_procs a second time&quot; :).  But I'm not going to fix  
<br>
all the BTLs to make that work right, so I suppose in the end I really  
<br>
don't have a strong opinion.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
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
