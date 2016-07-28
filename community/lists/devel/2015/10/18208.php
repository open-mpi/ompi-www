<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 16:35:52 2015" -->
<!-- isoreceived="20151020203552" -->
<!-- sent="Tue, 20 Oct 2015 13:35:46 -0700" -->
<!-- isosent="20151020203546" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)" -->
<!-- id="CAAvDA17MAtfPP4kws3VkKe+AVgJeuC=-bUrvZe3dHwQWSa8KnQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F09E3802-49B1-4E7D-B272-B16ED4FEFAB7_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 16:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18209.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Previous message:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18209.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18209.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I looked quickly over the quoted emails and didn't see something I had
<br>
hoped/expected to.
<br>
<p>In addition to the &quot;dimensions&quot; of type, api and pml I think users may also
<br>
be concerned about the &quot;port&quot; dimension (or device if you prefer).
<br>
So, it might be worth including that in the discussion of the
<br>
high-level-thing-for-end-users.
<br>
<p>As an example, I might have two ethernet cards, one of which is a Cisco
<br>
VNIC.
<br>
I would want be able to control which BTL or MTL is used on those NICs
<br>
independently, including the option to disable use of one or the other.
<br>
I do not want to learn distinct include/exclude MCA params for every BTL
<br>
and MTL to accomplish that.
<br>
<p>-Paul
<br>
<p>On Tue, Oct 20, 2015 at 12:42 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We talked about this on the call last week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing we'll talk about this at the Feb dev meeting, but we need to
</span><br>
<span class="quotelev1">&gt; think about this a bit before hand.  Here's a little more fuel for the
</span><br>
<span class="quotelev1">&gt; fire: let's at least specify the problem space a bit more precisely...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (this item is on the agenda for the Feb dev meeting, but we all need to
</span><br>
<span class="quotelev1">&gt; think about this a little before then; it's a complicated set of issues)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One (not-even-half-baked) idea that was raised on the call last week was
</span><br>
<span class="quotelev1">&gt; the idea of 3 levels of specifying networks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Automatic selection.  &quot;mpirun a.out&quot; -- OMPI does all the selection for
</span><br>
<span class="quotelev1">&gt; the user.
</span><br>
<span class="quotelev1">&gt; 2. High-level abstraction.  &quot;mpirun &lt;SOME NICE EASY-TO-UNDERSTAND CLI
</span><br>
<span class="quotelev1">&gt; OPTIONS&gt; a.out&quot;
</span><br>
<span class="quotelev1">&gt; 3. Low-level specification.  &quot;mpirun --mca btl usnic,sm,self a.out&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1 and #3 already exist today: #1 is for most users, #3 is for OMPI
</span><br>
<span class="quotelev1">&gt; experts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #2 is the new thing.  It's intended for those who have a clue about what
</span><br>
<span class="quotelev1">&gt; they want, but they aren't necessarily OMPI or networking experts.  The
</span><br>
<span class="quotelev1">&gt; trick is defining what &lt;SOME NICE EASY-TO-UNDERSTAND CLI OPTIONS&gt; is.
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
<span class="quotelev1">&gt; These three spaces can be combined in specific ways (E.g., Ethernet / TCP
</span><br>
<span class="quotelev1">&gt; / PML OB1 + BTLs).
</span><br>
<span class="quotelev1">&gt; BTLs have the added complication that multiple can be used in a single job.
</span><br>
<span class="quotelev1">&gt; Some network types can be accessed through multiple combinations.
</span><br>
<span class="quotelev1">&gt; Obviously, not all combinations are sensible (e.g., uGNI / PSM2 / PML
</span><br>
<span class="quotelev1">&gt; Yalla).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Big Issues here are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the user generally only knows about the first dimension: network type.
</span><br>
<span class="quotelev1">&gt; - the OMPI networking layer names are generally not meaningful unless
</span><br>
<span class="quotelev1">&gt; you're an OMPI expert.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So how do we present a &quot;simple&quot; / &quot;higher-level abstraction&quot; for the
</span><br>
<span class="quotelev1">&gt; average user?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 12, 2015, at 11:47 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rolf: can you add this to the agenda?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We're now adding multiple ways to get to the same underlying network
</span><br>
<span class="quotelev1">&gt; transport, and it's getting confusing for users (I've fielded several
</span><br>
<span class="quotelev1">&gt; off-list questions from users about this issue).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - MXM: can be accessed via Yalla, the MXM MTL, (soon) UCX, and (soon)
</span><br>
<span class="quotelev1">&gt; libfabric
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
<span class="quotelev2">&gt; &gt; And more specifically, how can a user enable or disable a specific type
</span><br>
<span class="quotelev1">&gt; of network?  Or API?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A recent (off list) example I had was a user who was frustrated trying
</span><br>
<span class="quotelev1">&gt; to figure out how to disable all forms of MXM (note: this is a larger issue
</span><br>
<span class="quotelev1">&gt; than just MXM).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bottom line: underlying networks can be accessed through multiple
</span><br>
<span class="quotelev1">&gt; upper-layer APIs, and it creates both a mapping problem for the MPI
</span><br>
<span class="quotelev1">&gt; implementation, and a usability issue for users trying to be specific about
</span><br>
<span class="quotelev1">&gt; which network(s) they want the MPI implementation to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't have a solution (or even a proposal) here.  This is something we
</span><br>
<span class="quotelev1">&gt; need to think / talk about.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18207.php">http://www.open-mpi.org/community/lists/devel/2015/10/18207.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18209.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Previous message:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18209.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18209.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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
