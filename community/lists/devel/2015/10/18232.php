<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 11:09:40 2015" -->
<!-- isoreceived="20151021150940" -->
<!-- sent="Wed, 21 Oct 2015 15:09:17 +0000" -->
<!-- isosent="20151021150917" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)" -->
<!-- id="CE35E958-F1E1-423E-8AE1-3D4849EC0430_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 11:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18231.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18238.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
REVISION 2 (based on feedback in last 24 hours).
<br>
<p>Changes:
<br>
<p>- NETWORK instead of NETWORK_TYPE
<br>
- Shared memory and process loopback are not affected by this CLI
<br>
- Change the OPAL API usage.
<br>
<p>I actually like points 1-8 below quite a bit.  If implemented in ALL BTLs/MTLs/etc., it can solve the &quot;how do I disable XYZ across all of Open MPI?&quot; problem nicely.
<br>
<p>Point 9 -- what does QUALIFIER mean/how is it used? -- still needs work (no real updates since rev 1 of this proposal).  I am thinking that QUALIFIER (somehow) can be used to figure out which OMPI code path to use for a given network (e.g., BTL vs. MTL, etc.).
<br>
<p>-----
<br>
<p>&nbsp;&nbsp;mpirun --[enable|disable] NETWORK[:QUALIFIER][,NETWORK[:QUALIFIER]]*
<br>
&nbsp;&nbsp;# Or &quot;--[net|nonet]&quot;, or some other name if &quot;enable|disable&quot; is too general.
<br>
&nbsp;&nbsp;# Suggestions welcome.
<br>
<p>1. The intent of these CLI options is to easily enable/disable specific network types and/or specific interfaces.
<br>
<p>2. The use of shared memory and process loopback is assumed (and is not affected by these CLI options -- the &quot;expert&quot; level must be used if specific control over shared memory / loopback is desired).
<br>
<p>3. Both forms take a comma-delimited list of 1 or more items.
<br>
<p>4. --enable would work similar to our &quot;include&quot; MCA params: OMPI will *only* use the network type(s) listed (but will still use shared memory and process loopback).
<br>
<p>5. --disable would work similar to our &quot;exclude&quot; MCA params: OMPI will use all network types *except* those listed (but will still used shared memory and process loopback).
<br>
<p>6. NETWORK values can generally be one of three things:
<br>
<p>&nbsp;&nbsp;&nbsp;- a human-recognizable name (e.g., &quot;ib&quot;, &quot;ethernet&quot;, ...etc.)
<br>
&nbsp;&nbsp;&nbsp;- a Linux interface device name (e.g., &quot;eth0&quot;, &quot;usnic_0&quot;, &quot;mlx4_0&quot;, optionally specifying a specific port if desired and relevant, such as &quot;mlx4_0:1&quot;)
<br>
&nbsp;&nbsp;&nbsp;- a network address (e.g., &quot;10.20.0.0/16&quot;, which specifies a specific network interface+port)
<br>
<p>7. NETWORK and QUALIFIER values are parsed (by orterun/etc.) and distributed to MPI processes.
<br>
<p>8. MPI processes can query the NETWORK values during BTL/MTL/etc. initialization and selection.
<br>
<p>It may be sufficient to have a simple &quot;did the user specify this NETWORK value?&quot; (case insensitive) query function that just returns a boolean.
<br>
<p>For example, the TCP BTL could look like this (only showing &quot;enable&quot; logic for simplicity -- adding &quot;disable&quot; logic is an exercise left for the reader):
<br>
<p>-----
<br>
&nbsp;&nbsp;if (opal_network_value(&quot;eth&quot;) || opal_network_value(&quot;ethernet&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want_all_ip_interfaces = true;
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach IP_interface {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Search for strings like &quot;eth0&quot; or &quot;10.10.0.0/16&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (opal_network_value(ip_interface_name) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_network_value(CIDR of ip_interface_name)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(@desired_interfaces, ip_interface_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;foreach IP_interface {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (want_all_ip_interfaces || @desired_interfaces contains ip_interface) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make a module for that IP interface
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
-----
<br>
<p>The usnic BTL would likely be quite similar to the TCP BTL, but also look for strings like &quot;usnic_0&quot;.
<br>
<p>The openib BTL could look like this:
<br>
<p>-----
<br>
&nbsp;&nbsp;if (opal_network_value(&quot;ib&quot;) || opal_network_value(&quot;infiniband&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want_all_ib_interfaces = true;
<br>
&nbsp;&nbsp;} else if (opal_network_value(&quot;roce&quot;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want_all_roce_interfaces = true;
<br>
&nbsp;&nbsp;} else if (opal_network_value(&quot;iwarp&quot;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want_all_iwarp_interfaces = true;
<br>
&nbsp;&nbsp;} else if (opal_network_value(&quot;eth&quot;) || opal_network_value(&quot;ethernet&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want_all_roce_interfaces = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want_all_iwarp_interfaces = true;
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach verbs_interface {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Search for strings like &quot;mlx4_0&quot; or &quot;10.50.0.0/16&quot; for RoCE/iWARP/IB with IPoIB enabled.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Could also search for IB subnet IDs, if desired...?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (opal_network_value(verbs_interface_name) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_network_value(subnet ID of verbs_interface_name) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_network_value(IP CIDR of verbs_interface_name)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(@desired_interfaces, verbs_interface_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;foreach verbs_interface {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make_module = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (@desired_interfaces contains verbs_interface) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make_module = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (verbs_interface is IB &amp;&amp; want_all_ib_interfaces)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make_module = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (verbs_interface is RoCE &amp;&amp; want_all_roce_interfaces)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make_module = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (verbs_interface is iWARP &amp;&amp; want_all_iwarp_interfaces)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make_module = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (make_module) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make a module for that verbs interface
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
-----
<br>
<p>I imagine that the MXM MTL, Yalla PML, and hcoll and FCA colls, could be similar, but slightly simpler since they (assumedly) don't care about iWARP interfaces.
<br>
<p>PSM / PSM2 / uGNI / Portals / etc. can all do similar things.
<br>
<p>The key here is that ALL BTLs, MTLs, OSC, and COLL modules -- anything that talks directly to the network -- will need to use this opal_network_value() API.
<br>
<p>9. The &quot;:QUALIFIER&quot; value is optional for each NETWORK_TYPE specified, and can be used to disambiguate when a given network type can be reached multiple ways in OMPI.  E.g., it can help choose between the openib BTL, the MXM MTL, and the Yalla PML.  E.g.:
<br>
<p>&nbsp;&nbsp;mpirun --enable ib:btl
<br>
&nbsp;&nbsp;mpirun --enable ib:mtl
<br>
&nbsp;&nbsp;mpirun --enable ib:yalla
<br>
<p>That being said, I don't like these names (btl, mtl, yalla) because they mean nothing to non-OMPI experts.  But I like the concept that a QUALIFIER can (somehow) help choose between the different OMPI code paths.
<br>
<p>Here's another example:
<br>
<p>&nbsp;&nbsp;mpirun --enable eth:tcp
<br>
&nbsp;&nbsp;mpirun --enable eth:usnic
<br>
<p>These QUALIFIER values are a *little* better, but not much -- the user still has to know that they exist to know to choose one of them (&quot;tcp&quot; and &quot;usnic&quot;).  But note that usNIC will someday have tag matching support, so it will be able to be used through the OFI MTL, too.  Hence, &quot;eth:usnic&quot; won't be unique...
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
<li><strong>Next message:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18231.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18238.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
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
