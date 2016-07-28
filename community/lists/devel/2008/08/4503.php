<?
$subject_val = "Re: [OMPI devel] if btl-&gt;add_procs() fails...?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  2 12:46:27 2008" -->
<!-- isoreceived="20080802164627" -->
<!-- sent="Sat, 02 Aug 2008 12:46:22 -0400" -->
<!-- isosent="20080802164622" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] if btl-&amp;gt;add_procs() fails...?" -->
<!-- id="48948F5E.4040904_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B859FF76-1E4B-4A54-80B0-52EA63A1FDAC_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-02 12:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4504.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4502.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4502.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4504.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4504.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 1, 2008, at 11:39 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My thought is that if add_procs fails, then that BTL should be 
</span><br>
<span class="quotelev2">&gt;&gt; removed (as if init failed) and things should continue on.  If that 
</span><br>
<span class="quotelev2">&gt;&gt; BTL was the only way to reach another process, we'll catch that later 
</span><br>
<span class="quotelev2">&gt;&gt; and abort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are always going to be errors that can't be detected until the 
</span><br>
<span class="quotelev2">&gt;&gt; device is actually used, so I think that add_procs errors should be 
</span><br>
<span class="quotelev2">&gt;&gt; treated the same as init errors.  The error_cb is a red herring, as 
</span><br>
<span class="quotelev2">&gt;&gt; that's supposed to be used in situations where an error can't 
</span><br>
<span class="quotelev2">&gt;&gt; directly be returned to the upper layers (like the progress 
</span><br>
<span class="quotelev2">&gt;&gt; function).  In this case, we can directly return an error, so we 
</span><br>
<span class="quotelev2">&gt;&gt; should do so (and I believe we do, it's the BML/PML that's the problem).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if add_procs() fails, do you think that the BML/PML should finalize 
</span><br>
<span class="quotelev1">&gt; the module?  That looks like an easy change to make.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, if there are no other successfully-add_proc()'ed modules from 
</span><br>
<span class="quotelev1">&gt; that component, should the BTL's progress function be removed from the 
</span><br>
<span class="quotelev1">&gt; list of progress functions?  The real question is: if a module 
</span><br>
<span class="quotelev1">&gt; add_procs() fails, do we mandate that it still must be safe to call 
</span><br>
<span class="quotelev1">&gt; the component's progress function?  I think you're saying &quot;yes&quot;, but 
</span><br>
<span class="quotelev1">&gt; just wanted to be sure.  I don't know offhand how a component's 
</span><br>
<span class="quotelev1">&gt; progress function is added to the list (can't check ATM), so I'd have 
</span><br>
<span class="quotelev1">&gt; to dig into that a bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I am curious how all of the above affects client/server or spawned 
<br>
jobs.  If you finalize a BTL then do a connect to a process that would 
<br>
use that BTL would it reinitialize itself?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4504.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4502.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4502.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4504.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4504.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
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
