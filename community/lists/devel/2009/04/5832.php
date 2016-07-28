<?
$subject_val = "Re: [OMPI devel] Device failover in dr pml (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 10:46:33 2009" -->
<!-- isoreceived="20090416144633" -->
<!-- sent="Thu, 16 Apr 2009 10:46:18 -0400" -->
<!-- isosent="20090416144618" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover in dr pml (fwd)" -->
<!-- id="FB993DC2-3D6E-4A63-9288-50B49C872D1A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2A0DE3C3-4276-4605-8B49-74A2097B5AE1_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Device failover in dr pml (fwd)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 10:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5833.php">Jeff Squyres: "[OMPI devel] 1.3.2 rc"</a>
<li><strong>Previous message:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>In reply to:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2009, at 9:12 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Sounds fine, though note that we don't want ob1 itself to do this as
</span><br>
<span class="quotelev1">&gt; it inevitably adds overhead that translates into latency. Instead, we
</span><br>
<span class="quotelev1">&gt; want that functionality to be in a separate component for those people
</span><br>
<span class="quotelev1">&gt; who want to use it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>To drive this point home: in an MPI implementation, latency and  
<br>
bandwidth performance benchmarks are [unfortunately] king.  There  
<br>
should be zero (not &quot;close to zero&quot;) performance impact of such  
<br>
changes for those who do not want to use them.  That's why all work  
<br>
has been done in &quot;cloned&quot; ob1 components to date, to include failover,  
<br>
retransmission (note that retransmission implies a lot of tracking of  
<br>
pending requests that ob1 does not currently do -- the overhead for  
<br>
that is definitely going to be non-zero).
<br>
<p><span class="quotelev1">&gt; We did talk on a telecon earlier this week about the need to refactor
</span><br>
<span class="quotelev1">&gt; the PML so that all these various PML components don't have to keep
</span><br>
<span class="quotelev1">&gt; tracking what is done in ob1 - bit of a pain. Nothing has been done
</span><br>
<span class="quotelev1">&gt; yet, but hopefully at some point we'll address this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes; talking to Sun is probably the next logical step to see a) the  
<br>
details of what Rolf has been doing, and b) if we can make a more  
<br>
general framework for these kinds of things without having to clone  
<br>
ob1 every time (this was the death of dr, for example -- dr is hasn't  
<br>
been updated with all the new changes to ob1 over the past year or  
<br>
two; I already see Nysal making heroic efforts to keep csum up to date  
<br>
with ob1.  It just seems like there should be a better way... although  
<br>
I don't know offhand what that is, because all the options we've  
<br>
talked about so far have added overhear :-\ ).
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
<li><strong>Next message:</strong> <a href="5833.php">Jeff Squyres: "[OMPI devel] 1.3.2 rc"</a>
<li><strong>Previous message:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>In reply to:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
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
