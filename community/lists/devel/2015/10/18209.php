<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 16:37:57 2015" -->
<!-- isoreceived="20151020203757" -->
<!-- sent="Tue, 20 Oct 2015 13:37:51 -0700" -->
<!-- isosent="20151020203751" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)" -->
<!-- id="1B451319-1E87-455F-98B3-C304487C7E1B_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA17MAtfPP4kws3VkKe+AVgJeuC=-bUrvZe3dHwQWSa8KnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 16:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don&#226;&#128;&#153;t you also have the question of, for example, PSM via the mtl/psm versus PSM via the mtl/ofi path? So I think you need to split the entries in #2 as:
<br>
<p>PSM/MTL
<br>
PSM/MTL/OFI
<br>
<p>PSM2/MTL
<br>
PSM2/MTL/OFI
<br>
<p>etc. Or we could remove the PSM/PSM2 MTL components and just drive those thru the OFI provider interface. Not sure how those groups view it...
<br>
<p>I imagine others may have similar issues as OFI providers are added.
<br>
<p><span class="quotelev1">&gt; On Oct 20, 2015, at 1:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked quickly over the quoted emails and didn't see something I had hoped/expected to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition to the &quot;dimensions&quot; of type, api and pml I think users may also be concerned about the &quot;port&quot; dimension (or device if you prefer).
</span><br>
<span class="quotelev1">&gt; So, it might be worth including that in the discussion of the high-level-thing-for-end-users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As an example, I might have two ethernet cards, one of which is a Cisco VNIC.
</span><br>
<span class="quotelev1">&gt; I would want be able to control which BTL or MTL is used on those NICs independently, including the option to disable use of one or the other.
</span><br>
<span class="quotelev1">&gt; I do not want to learn distinct include/exclude MCA params for every BTL and MTL to accomplish that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 20, 2015 at 12:42 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; We talked about this on the call last week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm guessing we'll talk about this at the Feb dev meeting, but we need to think about this a bit before hand.  Here's a little more fuel for the fire: let's at least specify the problem space a bit more precisely...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (this item is on the agenda for the Feb dev meeting, but we all need to think about this a little before then; it's a complicated set of issues)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One (not-even-half-baked) idea that was raised on the call last week was the idea of 3 levels of specifying networks:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Automatic selection.  &quot;mpirun a.out&quot; -- OMPI does all the selection for the user.
</span><br>
<span class="quotelev1">&gt; 2. High-level abstraction.  &quot;mpirun &lt;SOME NICE EASY-TO-UNDERSTAND CLI OPTIONS&gt; a.out&quot;
</span><br>
<span class="quotelev1">&gt; 3. Low-level specification.  &quot;mpirun --mca btl usnic,sm,self a.out&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #1 and #3 already exist today: #1 is for most users, #3 is for OMPI experts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #2 is the new thing.  It's intended for those who have a clue about what they want, but they aren't necessarily OMPI or networking experts.  The trick is defining what &lt;SOME NICE EASY-TO-UNDERSTAND CLI OPTIONS&gt; is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The selection space is complicated -- it has (at least?) three dimensions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. First, we have network types:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a. Ethernet
</span><br>
<span class="quotelev1">&gt; b. InfiniBand
</span><br>
<span class="quotelev1">&gt; c. uGNI
</span><br>
<span class="quotelev1">&gt; d. InfiniPath
</span><br>
<span class="quotelev1">&gt; e. OmniScale
</span><br>
<span class="quotelev1">&gt; f. Shared memory
</span><br>
<span class="quotelev1">&gt; g. SCIF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Second, we have network APIs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a. TCP
</span><br>
<span class="quotelev1">&gt; b. usNIC (via libfabric)
</span><br>
<span class="quotelev1">&gt; c. Verbs
</span><br>
<span class="quotelev1">&gt; d. MXM
</span><br>
<span class="quotelev1">&gt; e. uGNI
</span><br>
<span class="quotelev1">&gt; f. PSM
</span><br>
<span class="quotelev1">&gt; g. PSM2
</span><br>
<span class="quotelev1">&gt; h. POSIX shared memory segments
</span><br>
<span class="quotelev1">&gt; i. xpmem
</span><br>
<span class="quotelev1">&gt; j. knem
</span><br>
<span class="quotelev1">&gt; k. Linux CMA
</span><br>
<span class="quotelev1">&gt; l. SCIF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Third, we have Open MPI networking layers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a. PML OB1 (and associated BTLs)
</span><br>
<span class="quotelev1">&gt; b. PML CM (and associated MTL)
</span><br>
<span class="quotelev1">&gt; c. PML BFO
</span><br>
<span class="quotelev1">&gt; d. PML crcpw
</span><br>
<span class="quotelev1">&gt; e. PML v
</span><br>
<span class="quotelev1">&gt; f. PML Yalla
</span><br>
<span class="quotelev1">&gt; g. PML UCX (soon)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These three spaces can be combined in specific ways (E.g., Ethernet / TCP / PML OB1 + BTLs).
</span><br>
<span class="quotelev1">&gt; BTLs have the added complication that multiple can be used in a single job.
</span><br>
<span class="quotelev1">&gt; Some network types can be accessed through multiple combinations.
</span><br>
<span class="quotelev1">&gt; Obviously, not all combinations are sensible (e.g., uGNI / PSM2 / PML Yalla).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Big Issues here are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the user generally only knows about the first dimension: network type.
</span><br>
<span class="quotelev1">&gt; - the OMPI networking layer names are generally not meaningful unless you're an OMPI expert.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So how do we present a &quot;simple&quot; / &quot;higher-level abstraction&quot; for the average user?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 12, 2015, at 11:47 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rolf: can you add this to the agenda?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We're now adding multiple ways to get to the same underlying network transport, and it's getting confusing for users (I've fielded several off-list questions from users about this issue).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - MXM: can be accessed via Yalla, the MXM MTL, (soon) UCX, and (soon) libfabric
</span><br>
<span class="quotelev2">&gt; &gt; - PSM: can be accessed via the PSM MTL and libfabric
</span><br>
<span class="quotelev2">&gt; &gt; - verbs: can be accessed via the openib BTL and libfabric
</span><br>
<span class="quotelev2">&gt; &gt; - PSM2: ditto
</span><br>
<span class="quotelev2">&gt; &gt; - uGNI: can be accessed via the uGNI BTL, portals(4?), and (soon) UCX
</span><br>
<span class="quotelev2">&gt; &gt; - shared memory: can be accessed via sm, vader, and (soon) UCX
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But you can also look at this from a different perspective:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - IB: can be used via Yalla, MXM MTL, UCX, libfabric (multiple ways)
</span><br>
<span class="quotelev2">&gt; &gt; - RoCE: can be used via ^^some (or all? I'm not sure) of these
</span><br>
<span class="quotelev2">&gt; &gt; - Cray: can be used via the uGNI BTL, portals(4?), and (soon) UCX
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...what's a user supposed to use?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And more specifically, how can a user enable or disable a specific type of network?  Or API?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A recent (off list) example I had was a user who was frustrated trying to figure out how to disable all forms of MXM (note: this is a larger issue than just MXM).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bottom line: underlying networks can be accessed through multiple upper-layer APIs, and it creates both a mapping problem for the MPI implementation, and a usability issue for users trying to be specific about which network(s) they want the MPI implementation to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't have a solution (or even a proposal) here.  This is something we need to think / talk about.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18207.php">http://www.open-mpi.org/community/lists/devel/2015/10/18207.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18207.php">http://www.open-mpi.org/community/lists/devel/2015/10/18207.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18208.php">http://www.open-mpi.org/community/lists/devel/2015/10/18208.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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
