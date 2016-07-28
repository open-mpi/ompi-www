<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 08:27:10 2015" -->
<!-- isoreceived="20151021122710" -->
<!-- sent="Wed, 21 Oct 2015 12:27:05 +0000" -->
<!-- isosent="20151021122705" -->
<!-- name="Atchley, Scott" -->
<!-- email="atchleyes_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)" -->
<!-- id="19664EBE-551A-44DE-A7FB-C7FA4F38E63E_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="45269F41-CBA2-40C9-B421-0A552DDA0C90_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)<br>
<strong>From:</strong> Atchley, Scott (<em>atchleyes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 08:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18228.php">Gilles Gouaillardet: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Previous message:</strong> <a href="18226.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>In reply to:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18228.php">Gilles Gouaillardet: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18228.php">Gilles Gouaillardet: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18230.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2015, at 4:45 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 20, 2015, at 3:42 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm guessing we'll talk about this at the Feb dev meeting, but we need to think about this a bit before hand.  Here's a little more fuel for the fire: let's at least specify the problem space a bit more precisely...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm replying to my own mail because I wanted a separate email for a (half-baked) proposal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun --[enable|disable] NETWORK_TYPE[:QUALIFIER][,NETWORK_TYPE[:QUALIFIER]]*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Both forms take a comma-delimited list of 1 or more items.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. --enable would work similar to our &quot;include&quot; MCA params: OMPI will *only* use the network type(s) listed.
</span><br>
<p>Jeff,
<br>
<p>In this scenario, will the user still need to &#147;enable&#148; off-node network, sm, and self? Or do you assume sm and self?
<br>
<p>Scott
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. --disable would work similar to our &quot;exclude&quot; MCA params: OMPI will use all network types *except* those listed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; Alternative, if &quot;--enable&quot; and &quot;--disable&quot; are too general, we could use &quot;--net&quot; and &quot;--nonet&quot;, or something like that.  Suggestions welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. NETWORK_TYPE values can be registered via an OPAL API, e.g.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // In the TCP BTL
</span><br>
<span class="quotelev1">&gt;   opal_register_network_type(&quot;eth&quot;, ...some TCP BTL callback function...);
</span><br>
<span class="quotelev1">&gt;   // In the usnic BTL
</span><br>
<span class="quotelev1">&gt;   opal_register_network_type(&quot;eth&quot;, ...some usnic BTL callback function...);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // In the openib BTL
</span><br>
<span class="quotelev1">&gt;   opal_register_network_type(&quot;ib&quot;, ...some openib BTL callback function...);
</span><br>
<span class="quotelev1">&gt;   // In the MXM MTL
</span><br>
<span class="quotelev1">&gt;   opal_register_network_type(&quot;ib&quot;, ...some MXM MTL callback function...);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The main idea, though, is that various components can register themselves to these network type names that can be specified on the mpirun/orterun/oshrun command lines.  Once a user specifies a network type, I'm not quite sure what OMPI does next (e.g., what will that callback function pointer do?), ...but I thought I'd at least capture these thoughts far. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can even allow synonyms:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_register_network_synonym(&quot;eth&quot;, &quot;ethernet&quot;);
</span><br>
<span class="quotelev1">&gt;   opal_register_network_synonym(&quot;ib&quot;, &quot;infiniband&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. &quot;:QUALIFIER&quot; is optional for each NETWORK_TYPE specified, and can be used to disambiguate when a given network type can be reached multiple ways in OMPI.  E.g., it can help choose between the openib BTL, the MXM MTL, and the Yalla PML.  E.g.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun --enable ib:btl
</span><br>
<span class="quotelev1">&gt;   mpirun --enable ib:mtl
</span><br>
<span class="quotelev1">&gt;   mpirun --enable ib:yalla
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I don't like these names (btl, mtl, yalla) -- they mean nothing to non-OMPI experts.  But I like the idea that a QUALIFIER can help choose between the different possibilities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun --enable eth:tcp
</span><br>
<span class="quotelev1">&gt;   mpirun --enable eth:usnic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These QUALIFIER values are a *little* better, but not much.  And usnic is going to get confusing when it starts supporting the OFI MTL tag matching interface (i.e., you'll be able to use usNIC support via the usnic BTL and the OFI MTL).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...thoughts?
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18210.php">http://www.open-mpi.org/community/lists/devel/2015/10/18210.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18228.php">Gilles Gouaillardet: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Previous message:</strong> <a href="18226.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>In reply to:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18228.php">Gilles Gouaillardet: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18228.php">Gilles Gouaillardet: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18230.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
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
