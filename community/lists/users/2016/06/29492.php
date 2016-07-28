<?
$subject_val = "Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 21 09:47:09 2016" -->
<!-- isoreceived="20160621134709" -->
<!-- sent="Tue, 21 Jun 2016 13:47:06 +0000" -->
<!-- isosent="20160621134706" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?" -->
<!-- id="65F0A268-DB63-4217-A696-7B092D3184EE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="559690AE95344283AFCE94C19806723D_at_chem.msu.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-21 09:47:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29491.php">Alex A. Granovsky: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29491.php">Alex A. Granovsky: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 20, 2016, at 4:27 PM, Alex A. Granovsky &lt;gran_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would be the use of  mlockall helpful for this approach?
</span><br>
<p>That's an interesting idea; I didn't know about the existence of mlockall(MCL_FUTURE).
<br>
<p>It has a few drawbacks, of course (e.g., processes can't shrink), but they might be acceptable tradeoffs for typical HPC/MPI application scenarios.
<br>
<p>Keep in mind that locking memory is only one half of the registration process: the other half is notifying the network stack so that they can record/track virtual memory--&gt;physical memory mapping.  Meaning: Open MPI will still need its registration cache infrastructure -- but it *might* be able to be slightly simpler because the eviction mechanisms will never be invoked.
<br>
<p>Also keep in mind that the memory mechanisms -- regardless of whether it's mlockall(MCL_FUTURE) or the newly-revamped &quot;patcher&quot; system in the upcoming Open MPI v2.0.0 -- are not in the critical performance path (e.g., that stuff doesn't happen during a call to MPI_SEND).  The part that *is* in the critical performance path is the registration cache -- i.e., the part where Open MPI asks &quot;is this buffer/memory registered [with the network stack]?&quot;  That part is designed to be fast and, at least at the moment, will still need to be there.
<br>
<p>If there's some kind of equivalent to mlockall(MCL_FUTURE) that *also* transparently registers all new memory with the relevant underlying network stack(s) and contexts, that would be neat.  
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29491.php">Alex A. Granovsky: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29491.php">Alex A. Granovsky: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
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
