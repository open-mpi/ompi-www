<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 16:45:52 2015" -->
<!-- isoreceived="20151020204552" -->
<!-- sent="Tue, 20 Oct 2015 20:45:29 +0000" -->
<!-- isosent="20151020204529" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)" -->
<!-- id="45269F41-CBA2-40C9-B421-0A552DDA0C90_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 16:45:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18209.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18232.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2015, at 3:42 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm guessing we'll talk about this at the Feb dev meeting, but we need to think about this a bit before hand.  Here's a little more fuel for the fire: let's at least specify the problem space a bit more precisely...
</span><br>
<p>I'm replying to my own mail because I wanted a separate email for a (half-baked) proposal.
<br>
<p>How about something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --[enable|disable] NETWORK_TYPE[:QUALIFIER][,NETWORK_TYPE[:QUALIFIER]]*
<br>
<p>1. Both forms take a comma-delimited list of 1 or more items.
<br>
<p>2. --enable would work similar to our &quot;include&quot; MCA params: OMPI will *only* use the network type(s) listed.
<br>
<p>3. --disable would work similar to our &quot;exclude&quot; MCA params: OMPI will use all network types *except* those listed.
<br>
<p>--&gt; Alternative, if &quot;--enable&quot; and &quot;--disable&quot; are too general, we could use &quot;--net&quot; and &quot;--nonet&quot;, or something like that.  Suggestions welcome.
<br>
<p>4. NETWORK_TYPE values can be registered via an OPAL API, e.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;// In the TCP BTL
<br>
&nbsp;&nbsp;&nbsp;opal_register_network_type(&quot;eth&quot;, ...some TCP BTL callback function...);
<br>
&nbsp;&nbsp;&nbsp;// In the usnic BTL
<br>
&nbsp;&nbsp;&nbsp;opal_register_network_type(&quot;eth&quot;, ...some usnic BTL callback function...);
<br>
<p>&nbsp;&nbsp;&nbsp;// In the openib BTL
<br>
&nbsp;&nbsp;&nbsp;opal_register_network_type(&quot;ib&quot;, ...some openib BTL callback function...);
<br>
&nbsp;&nbsp;&nbsp;// In the MXM MTL
<br>
&nbsp;&nbsp;&nbsp;opal_register_network_type(&quot;ib&quot;, ...some MXM MTL callback function...);
<br>
<p>The main idea, though, is that various components can register themselves to these network type names that can be specified on the mpirun/orterun/oshrun command lines.  Once a user specifies a network type, I'm not quite sure what OMPI does next (e.g., what will that callback function pointer do?), ...but I thought I'd at least capture these thoughts far. :-)
<br>
<p>We can even allow synonyms:
<br>
<p>&nbsp;&nbsp;&nbsp;opal_register_network_synonym(&quot;eth&quot;, &quot;ethernet&quot;);
<br>
&nbsp;&nbsp;&nbsp;opal_register_network_synonym(&quot;ib&quot;, &quot;infiniband&quot;);
<br>
<p>5. &quot;:QUALIFIER&quot; is optional for each NETWORK_TYPE specified, and can be used to disambiguate when a given network type can be reached multiple ways in OMPI.  E.g., it can help choose between the openib BTL, the MXM MTL, and the Yalla PML.  E.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --enable ib:btl
<br>
&nbsp;&nbsp;&nbsp;mpirun --enable ib:mtl
<br>
&nbsp;&nbsp;&nbsp;mpirun --enable ib:yalla
<br>
<p>That being said, I don't like these names (btl, mtl, yalla) -- they mean nothing to non-OMPI experts.  But I like the idea that a QUALIFIER can help choose between the different possibilities.
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --enable eth:tcp
<br>
&nbsp;&nbsp;&nbsp;mpirun --enable eth:usnic
<br>
<p>These QUALIFIER values are a *little* better, but not much.  And usnic is going to get confusing when it starts supporting the OFI MTL tag matching interface (i.e., you'll be able to use usNIC support via the usnic BTL and the OFI MTL).
<br>
<p>...thoughts?
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
<li><strong>Next message:</strong> <a href="18211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18209.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18232.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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
