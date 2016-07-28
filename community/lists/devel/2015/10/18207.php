<?
$subject_val = "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 15:42:58 2015" -->
<!-- isoreceived="20151020194258" -->
<!-- sent="Tue, 20 Oct 2015 19:42:36 +0000" -->
<!-- isosent="20151020194236" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)" -->
<!-- id="F09E3802-49B1-4E7D-B272-B16ED4FEFAB7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C6D9D6B0-4EFA-417D-8FB3-8D62B75A6E62_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 15:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Previous message:</strong> <a href="18206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IBM Innovation Center Reserved for Open MPI Face-2-Face"</a>
<li><strong>In reply to:</strong> <a href="18154.php">Jeff Squyres (jsquyres): "[OMPI devel] topic for agenda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about this on the call last week.
<br>
<p>I'm guessing we'll talk about this at the Feb dev meeting, but we need to think about this a bit before hand.  Here's a little more fuel for the fire: let's at least specify the problem space a bit more precisely...
<br>
<p>(this item is on the agenda for the Feb dev meeting, but we all need to think about this a little before then; it's a complicated set of issues)
<br>
<p>One (not-even-half-baked) idea that was raised on the call last week was the idea of 3 levels of specifying networks:
<br>
<p>1. Automatic selection.  &quot;mpirun a.out&quot; -- OMPI does all the selection for the user.
<br>
2. High-level abstraction.  &quot;mpirun &lt;SOME NICE EASY-TO-UNDERSTAND CLI OPTIONS&gt; a.out&quot;
<br>
3. Low-level specification.  &quot;mpirun --mca btl usnic,sm,self a.out&quot;
<br>
<p>#1 and #3 already exist today: #1 is for most users, #3 is for OMPI experts.
<br>
<p>#2 is the new thing.  It's intended for those who have a clue about what they want, but they aren't necessarily OMPI or networking experts.  The trick is defining what &lt;SOME NICE EASY-TO-UNDERSTAND CLI OPTIONS&gt; is.
<br>
<p>The selection space is complicated -- it has (at least?) three dimensions:
<br>
<p>1. First, we have network types:
<br>
<p>a. Ethernet
<br>
b. InfiniBand
<br>
c. uGNI
<br>
d. InfiniPath
<br>
e. OmniScale
<br>
f. Shared memory
<br>
g. SCIF
<br>
<p>2. Second, we have network APIs:
<br>
<p>a. TCP
<br>
b. usNIC (via libfabric)
<br>
c. Verbs
<br>
d. MXM
<br>
e. uGNI
<br>
f. PSM
<br>
g. PSM2
<br>
h. POSIX shared memory segments
<br>
i. xpmem
<br>
j. knem
<br>
k. Linux CMA
<br>
l. SCIF
<br>
<p>3. Third, we have Open MPI networking layers:
<br>
<p>a. PML OB1 (and associated BTLs)
<br>
b. PML CM (and associated MTL)
<br>
c. PML BFO
<br>
d. PML crcpw
<br>
e. PML v
<br>
f. PML Yalla
<br>
g. PML UCX (soon)
<br>
<p>These three spaces can be combined in specific ways (E.g., Ethernet / TCP / PML OB1 + BTLs).
<br>
BTLs have the added complication that multiple can be used in a single job.
<br>
Some network types can be accessed through multiple combinations.
<br>
Obviously, not all combinations are sensible (e.g., uGNI / PSM2 / PML Yalla).
<br>
<p>The Big Issues here are:
<br>
<p>- the user generally only knows about the first dimension: network type.
<br>
- the OMPI networking layer names are generally not meaningful unless you're an OMPI expert.
<br>
<p>So how do we present a &quot;simple&quot; / &quot;higher-level abstraction&quot; for the average user?
<br>
<p><p><p><span class="quotelev1">&gt; On Oct 12, 2015, at 11:47 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf: can you add this to the agenda?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're now adding multiple ways to get to the same underlying network transport, and it's getting confusing for users (I've fielded several off-list questions from users about this issue).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - MXM: can be accessed via Yalla, the MXM MTL, (soon) UCX, and (soon) libfabric
</span><br>
<span class="quotelev1">&gt; - PSM: can be accessed via the PSM MTL and libfabric
</span><br>
<span class="quotelev1">&gt; - verbs: can be accessed via the openib BTL and libfabric
</span><br>
<span class="quotelev1">&gt; - PSM2: ditto
</span><br>
<span class="quotelev1">&gt; - uGNI: can be accessed via the uGNI BTL, portals(4?), and (soon) UCX
</span><br>
<span class="quotelev1">&gt; - shared memory: can be accessed via sm, vader, and (soon) UCX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But you can also look at this from a different perspective:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - IB: can be used via Yalla, MXM MTL, UCX, libfabric (multiple ways)
</span><br>
<span class="quotelev1">&gt; - RoCE: can be used via ^^some (or all? I'm not sure) of these
</span><br>
<span class="quotelev1">&gt; - Cray: can be used via the uGNI BTL, portals(4?), and (soon) UCX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...what's a user supposed to use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And more specifically, how can a user enable or disable a specific type of network?  Or API?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A recent (off list) example I had was a user who was frustrated trying to figure out how to disable all forms of MXM (note: this is a larger issue than just MXM).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bottom line: underlying networks can be accessed through multiple upper-layer APIs, and it creates both a mapping problem for the MPI implementation, and a usability issue for users trying to be specific about which network(s) they want the MPI implementation to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have a solution (or even a proposal) here.  This is something we need to think / talk about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Previous message:</strong> <a href="18206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IBM Innovation Center Reserved for Open MPI Face-2-Face"</a>
<li><strong>In reply to:</strong> <a href="18154.php">Jeff Squyres (jsquyres): "[OMPI devel] topic for agenda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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
