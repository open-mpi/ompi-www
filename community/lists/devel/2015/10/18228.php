<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 09:00:26 2015" -->
<!-- isoreceived="20151021130026" -->
<!-- sent="Wed, 21 Oct 2015 22:00:20 +0900" -->
<!-- isosent="20151021130020" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)" -->
<!-- id="CAAkFZ5vm5KQ_WAT4b-L8wBJxdGndzZSHqTobsjiJ-mf=CbbQrA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="19664EBE-551A-44DE-A7FB-C7FA4F38E63E_at_ornl.gov" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 09:00:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18229.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18229.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18229.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott and all,
<br>
<p>two btl are optimized (and work only) for intra node communications : sm
<br>
and vader
<br>
<p>by &quot;sm&quot; I am not sure you mean the sm btl, or any/both sm and vader btl.
<br>
<p>from an user point of view, and to disambiguate this, maybe we should use
<br>
the term &quot;shm&quot;
<br>
(which means sm and/or vader btl for ompi developers)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wednesday, October 21, 2015, Atchley, Scott &lt;atchleyes_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 20, 2015, at 4:45 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 20, 2015, at 3:42 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm guessing we'll talk about this at the Feb dev meeting, but we need
</span><br>
<span class="quotelev1">&gt; to think about this a bit before hand.  Here's a little more fuel for the
</span><br>
<span class="quotelev1">&gt; fire: let's at least specify the problem space a bit more precisely...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm replying to my own mail because I wanted a separate email for a
</span><br>
<span class="quotelev1">&gt; (half-baked) proposal.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How about something like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun --[enable|disable]
</span><br>
<span class="quotelev1">&gt; NETWORK_TYPE[:QUALIFIER][,NETWORK_TYPE[:QUALIFIER]]*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Both forms take a comma-delimited list of 1 or more items.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. --enable would work similar to our &quot;include&quot; MCA params: OMPI will
</span><br>
<span class="quotelev1">&gt; *only* use the network type(s) listed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this scenario, will the user still need to &#226;&#128;&#156;enable&#226;&#128;&#157; off-node network,
</span><br>
<span class="quotelev1">&gt; sm, and self? Or do you assume sm and self?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. --disable would work similar to our &quot;exclude&quot; MCA params: OMPI will
</span><br>
<span class="quotelev1">&gt; use all network types *except* those listed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Alternative, if &quot;--enable&quot; and &quot;--disable&quot; are too general, we could
</span><br>
<span class="quotelev1">&gt; use &quot;--net&quot; and &quot;--nonet&quot;, or something like that.  Suggestions welcome.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4. NETWORK_TYPE values can be registered via an OPAL API, e.g.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // In the TCP BTL
</span><br>
<span class="quotelev2">&gt; &gt;   opal_register_network_type(&quot;eth&quot;, ...some TCP BTL callback
</span><br>
<span class="quotelev1">&gt; function...);
</span><br>
<span class="quotelev2">&gt; &gt;   // In the usnic BTL
</span><br>
<span class="quotelev2">&gt; &gt;   opal_register_network_type(&quot;eth&quot;, ...some usnic BTL callback
</span><br>
<span class="quotelev1">&gt; function...);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // In the openib BTL
</span><br>
<span class="quotelev2">&gt; &gt;   opal_register_network_type(&quot;ib&quot;, ...some openib BTL callback
</span><br>
<span class="quotelev1">&gt; function...);
</span><br>
<span class="quotelev2">&gt; &gt;   // In the MXM MTL
</span><br>
<span class="quotelev2">&gt; &gt;   opal_register_network_type(&quot;ib&quot;, ...some MXM MTL callback function...);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The main idea, though, is that various components can register
</span><br>
<span class="quotelev1">&gt; themselves to these network type names that can be specified on the
</span><br>
<span class="quotelev1">&gt; mpirun/orterun/oshrun command lines.  Once a user specifies a network type,
</span><br>
<span class="quotelev1">&gt; I'm not quite sure what OMPI does next (e.g., what will that callback
</span><br>
<span class="quotelev1">&gt; function pointer do?), ...but I thought I'd at least capture these thoughts
</span><br>
<span class="quotelev1">&gt; far. :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We can even allow synonyms:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   opal_register_network_synonym(&quot;eth&quot;, &quot;ethernet&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;   opal_register_network_synonym(&quot;ib&quot;, &quot;infiniband&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 5. &quot;:QUALIFIER&quot; is optional for each NETWORK_TYPE specified, and can be
</span><br>
<span class="quotelev1">&gt; used to disambiguate when a given network type can be reached multiple ways
</span><br>
<span class="quotelev1">&gt; in OMPI.  E.g., it can help choose between the openib BTL, the MXM MTL, and
</span><br>
<span class="quotelev1">&gt; the Yalla PML.  E.g.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun --enable ib:btl
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun --enable ib:mtl
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun --enable ib:yalla
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, I don't like these names (btl, mtl, yalla) -- they mean
</span><br>
<span class="quotelev1">&gt; nothing to non-OMPI experts.  But I like the idea that a QUALIFIER can help
</span><br>
<span class="quotelev1">&gt; choose between the different possibilities.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun --enable eth:tcp
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun --enable eth:usnic
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; These QUALIFIER values are a *little* better, but not much.  And usnic
</span><br>
<span class="quotelev1">&gt; is going to get confusing when it starts supporting the OFI MTL tag
</span><br>
<span class="quotelev1">&gt; matching interface (i.e., you'll be able to use usNIC support via the usnic
</span><br>
<span class="quotelev1">&gt; BTL and the OFI MTL).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...thoughts?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18210.php">http://www.open-mpi.org/community/lists/devel/2015/10/18210.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18227.php">http://www.open-mpi.org/community/lists/devel/2015/10/18227.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18228/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18229.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18229.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18229.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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
