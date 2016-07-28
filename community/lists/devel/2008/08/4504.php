<?
$subject_val = "Re: [OMPI devel] if btl-&gt;add_procs() fails...?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  2 14:34:30 2008" -->
<!-- isoreceived="20080802183430" -->
<!-- sent="Sat, 2 Aug 2008 13:34:14 -0500" -->
<!-- isosent="20080802183414" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] if btl-&amp;gt;add_procs() fails...?" -->
<!-- id="3886EFFB-97E9-48DF-B38B-6A0F8CAC5AB9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48948F5E.4040904_at_sun.com" -->
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
<strong>Date:</strong> 2008-08-02 14:34:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4505.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 2, 2008, at 11:46, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 1, 2008, at 11:39 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My thought is that if add_procs fails, then that BTL should be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; removed (as if init failed) and things should continue on.  If  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that BTL was the only way to reach another process, we'll catch  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that later and abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are always going to be errors that can't be detected until  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the device is actually used, so I think that add_procs errors  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be treated the same as init errors.  The error_cb is a red  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; herring, as that's supposed to be used in situations where an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error can't directly be returned to the upper layers (like the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress function).  In this case, we can directly return an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error, so we should do so (and I believe we do, it's the BML/PML  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that's the problem).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So if add_procs() fails, do you think that the BML/PML should  
</span><br>
<span class="quotelev2">&gt;&gt; finalize the module?  That looks like an easy change to make.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Second, if there are no other successfully-add_proc()'ed modules  
</span><br>
<span class="quotelev2">&gt;&gt; from that component, should the BTL's progress function be removed  
</span><br>
<span class="quotelev2">&gt;&gt; from the list of progress functions?  The real question is: if a  
</span><br>
<span class="quotelev2">&gt;&gt; module add_procs() fails, do we mandate that it still must be safe  
</span><br>
<span class="quotelev2">&gt;&gt; to call the component's progress function?  I think you're saying  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;yes&quot;, but just wanted to be sure.  I don't know offhand how a  
</span><br>
<span class="quotelev2">&gt;&gt; component's progress function is added to the list (can't check  
</span><br>
<span class="quotelev2">&gt;&gt; ATM), so I'd have to dig into that a bit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I am curious how all of the above affects client/server or spawned  
</span><br>
<span class="quotelev1">&gt; jobs.  If you finalize a BTL then do a connect to a process that  
</span><br>
<span class="quotelev1">&gt; would use that BTL would it reinitialize itself?
</span><br>
<p>To deal with all the dynamics issues, I wouldn't finalized the BTL.  
<br>
The BML should handle the progress stuff, just as if the add_procs  
<br>
succeeded but returned no active peers. But I'd guess that's part of  
<br>
the bit that doesn't work today. I would further suspect that a BTL  
<br>
will need to have a working progress function  in the face of  
<br>
add_procs failures to cope with all the dynamics options. I'm  
<br>
travelling this weekend, so I can't verify any of this at the moment.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4505.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4503.php">Terry Dontje: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
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
