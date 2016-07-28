<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 11:56:30 2015" -->
<!-- isoreceived="20151021155630" -->
<!-- sent="Wed, 21 Oct 2015 15:56:06 +0000" -->
<!-- isosent="20151021155606" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)" -->
<!-- id="5B7B3947-2044-444B-BD58-94AD5787010D_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="369E18A2-1FBE-4F73-96AA-0B1FC3EE8B50_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 11:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18235.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18235.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18235.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2015, at 11:32 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With all due respect, I think this still dodges the key question. Are we now saying that every user will be *required* to provide this info? If not, then what is the default?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let&#226;&#128;&#153;s face it: the default is what 90+% of the world is going to use. This all seems rather complex to expect the average user to figure out.
</span><br>

<br>
No, per my previous mail (<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18207.php">http://www.open-mpi.org/community/lists/devel/2015/10/18207.php</a>), there will be 3 levels:
<br>

<br>
1. Automatic selection. &quot;mpirun a.out&quot; -- OMPI does all the selection for the user. 
<br>
2. High-level abstraction. &quot;mpirun &lt;SOME NICE EASY-TO-UNDERSTAND CLI OPTIONS&gt; a.out&quot; 
<br>
3. Low-level specification. &quot;mpirun --mca btl usnic,sm,self a.out&quot; 
<br>

<br>
#1 is what most people do today (and will continue to do).
<br>

<br>
#3 also already exists.  It's (mostly) functional -- but there's at least two deficiencies:
<br>

<br>
- &quot;how do you turn off XYZ across all of Open MPI?&quot; is a complicated issue for users, because XYZ may be used in multiple places
<br>
- it has lots of OMPI-specific names, requiring someone to be an OMPI expert to use them
<br>

<br>
#2 is the new thing, and is the middle ground between the two.  It's aimed at the casual user who doesn't want to be an OMPI expert, but wants to ensure that a specific network is used (or not used).
<br>

<br>
I'm imagining the common usage for #2 to be pretty simple, actually:
<br>

<br>
&nbsp;&nbsp;&nbsp;mpirun --enable usnic ...
<br>
&nbsp;&nbsp;&nbsp;mpirun --enable ugni ...
<br>
&nbsp;&nbsp;&nbsp;mpirun --enable ib ...
<br>
&nbsp;&nbsp;&nbsp;# etc.
<br>

<br>
But it should be at least somewhat flexible so that you can do some of the cases Paul mentioned, and also can be used to &quot;disable XYZ across all of Open MPI&quot;, e.g.:
<br>

<br>
&nbsp;&nbsp;&nbsp;mpirun --disable mxm ...
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 21, 2015, at 8:09 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; REVISION 2 (based on feedback in last 24 hours).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Changes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - NETWORK instead of NETWORK_TYPE
</span><br>
<span class="quotelev2">&gt;&gt; - Shared memory and process loopback are not affected by this CLI
</span><br>
<span class="quotelev2">&gt;&gt; - Change the OPAL API usage.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I actually like points 1-8 below quite a bit.  If implemented in ALL BTLs/MTLs/etc., it can solve the &quot;how do I disable XYZ across all of Open MPI?&quot; problem nicely.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Point 9 -- what does QUALIFIER mean/how is it used? -- still needs work (no real updates since rev 1 of this proposal).  I am thinking that QUALIFIER (somehow) can be used to figure out which OMPI code path to use for a given network (e.g., BTL vs. MTL, etc.).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --[enable|disable] NETWORK[:QUALIFIER][,NETWORK[:QUALIFIER]]*
</span><br>
<span class="quotelev2">&gt;&gt; # Or &quot;--[net|nonet]&quot;, or some other name if &quot;enable|disable&quot; is too general.
</span><br>
<span class="quotelev2">&gt;&gt; # Suggestions welcome.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. The intent of these CLI options is to easily enable/disable specific network types and/or specific interfaces.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. The use of shared memory and process loopback is assumed (and is not affected by these CLI options -- the &quot;expert&quot; level must be used if specific control over shared memory / loopback is desired).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Both forms take a comma-delimited list of 1 or more items.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. --enable would work similar to our &quot;include&quot; MCA params: OMPI will *only* use the network type(s) listed (but will still use shared memory and process loopback).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 5. --disable would work similar to our &quot;exclude&quot; MCA params: OMPI will use all network types *except* those listed (but will still used shared memory and process loopback).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 6. NETWORK values can generally be one of three things:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  - a human-recognizable name (e.g., &quot;ib&quot;, &quot;ethernet&quot;, ...etc.)
</span><br>
<span class="quotelev2">&gt;&gt;  - a Linux interface device name (e.g., &quot;eth0&quot;, &quot;usnic_0&quot;, &quot;mlx4_0&quot;, optionally specifying a specific port if desired and relevant, such as &quot;mlx4_0:1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;  - a network address (e.g., &quot;10.20.0.0/16&quot;, which specifies a specific network interface+port)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 7. NETWORK and QUALIFIER values are parsed (by orterun/etc.) and distributed to MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 8. MPI processes can query the NETWORK values during BTL/MTL/etc. initialization and selection.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It may be sufficient to have a simple &quot;did the user specify this NETWORK value?&quot; (case insensitive) query function that just returns a boolean.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example, the TCP BTL could look like this (only showing &quot;enable&quot; logic for simplicity -- adding &quot;disable&quot; logic is an exercise left for the reader):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; if (opal_network_value(&quot;eth&quot;) || opal_network_value(&quot;ethernet&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;     want_all_ip_interfaces = true;
</span><br>
<span class="quotelev2">&gt;&gt; } else {
</span><br>
<span class="quotelev2">&gt;&gt;     foreach IP_interface {
</span><br>
<span class="quotelev2">&gt;&gt;         // Search for strings like &quot;eth0&quot; or &quot;10.10.0.0/16&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         if (opal_network_value(ip_interface_name) ||
</span><br>
<span class="quotelev2">&gt;&gt;             opal_network_value(CIDR of ip_interface_name)) {
</span><br>
<span class="quotelev2">&gt;&gt;             push(@desired_interfaces, ip_interface_name);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; foreach IP_interface {
</span><br>
<span class="quotelev2">&gt;&gt;     if (want_all_ip_interfaces || @desired_interfaces contains ip_interface) {
</span><br>
<span class="quotelev2">&gt;&gt;         make a module for that IP interface
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The usnic BTL would likely be quite similar to the TCP BTL, but also look for strings like &quot;usnic_0&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The openib BTL could look like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; if (opal_network_value(&quot;ib&quot;) || opal_network_value(&quot;infiniband&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;     want_all_ib_interfaces = true;
</span><br>
<span class="quotelev2">&gt;&gt; } else if (opal_network_value(&quot;roce&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt;     want_all_roce_interfaces = true;
</span><br>
<span class="quotelev2">&gt;&gt; } else if (opal_network_value(&quot;iwarp&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt;     want_all_iwarp_interfaces = true;
</span><br>
<span class="quotelev2">&gt;&gt; } else if (opal_network_value(&quot;eth&quot;) || opal_network_value(&quot;ethernet&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;     want_all_roce_interfaces = true;
</span><br>
<span class="quotelev2">&gt;&gt;     want_all_iwarp_interfaces = true;
</span><br>
<span class="quotelev2">&gt;&gt; } else {
</span><br>
<span class="quotelev2">&gt;&gt;     foreach verbs_interface {
</span><br>
<span class="quotelev2">&gt;&gt;         // Search for strings like &quot;mlx4_0&quot; or &quot;10.50.0.0/16&quot; for RoCE/iWARP/IB with IPoIB enabled.
</span><br>
<span class="quotelev2">&gt;&gt;         // Could also search for IB subnet IDs, if desired...?
</span><br>
<span class="quotelev2">&gt;&gt;         if (opal_network_value(verbs_interface_name) ||
</span><br>
<span class="quotelev2">&gt;&gt;             opal_network_value(subnet ID of verbs_interface_name) ||
</span><br>
<span class="quotelev2">&gt;&gt;             opal_network_value(IP CIDR of verbs_interface_name)) {
</span><br>
<span class="quotelev2">&gt;&gt;             push(@desired_interfaces, verbs_interface_name);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; foreach verbs_interface {
</span><br>
<span class="quotelev2">&gt;&gt;     make_module = false;
</span><br>
<span class="quotelev2">&gt;&gt;     if (@desired_interfaces contains verbs_interface) {
</span><br>
<span class="quotelev2">&gt;&gt;         make_module = true;
</span><br>
<span class="quotelev2">&gt;&gt;     } else if (verbs_interface is IB &amp;&amp; want_all_ib_interfaces)
</span><br>
<span class="quotelev2">&gt;&gt;         make_module = true;
</span><br>
<span class="quotelev2">&gt;&gt;     } else if (verbs_interface is RoCE &amp;&amp; want_all_roce_interfaces)
</span><br>
<span class="quotelev2">&gt;&gt;         make_module = true;
</span><br>
<span class="quotelev2">&gt;&gt;     } else if (verbs_interface is iWARP &amp;&amp; want_all_iwarp_interfaces)
</span><br>
<span class="quotelev2">&gt;&gt;         make_module = true;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     if (make_module) {
</span><br>
<span class="quotelev2">&gt;&gt;         make a module for that verbs interface
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I imagine that the MXM MTL, Yalla PML, and hcoll and FCA colls, could be similar, but slightly simpler since they (assumedly) don't care about iWARP interfaces.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PSM / PSM2 / uGNI / Portals / etc. can all do similar things.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The key here is that ALL BTLs, MTLs, OSC, and COLL modules -- anything that talks directly to the network -- will need to use this opal_network_value() API.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 9. The &quot;:QUALIFIER&quot; value is optional for each NETWORK_TYPE specified, and can be used to disambiguate when a given network type can be reached multiple ways in OMPI.  E.g., it can help choose between the openib BTL, the MXM MTL, and the Yalla PML.  E.g.:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --enable ib:btl
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --enable ib:mtl
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --enable ib:yalla
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, I don't like these names (btl, mtl, yalla) because they mean nothing to non-OMPI experts.  But I like the concept that a QUALIFIER can (somehow) help choose between the different OMPI code paths.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's another example:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --enable eth:tcp
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --enable eth:usnic
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; These QUALIFIER values are a *little* better, but not much -- the user still has to know that they exist to know to choose one of them (&quot;tcp&quot; and &quot;usnic&quot;).  But note that usNIC will someday have tag matching support, so it will be able to be used through the OFI MTL, too.  Hence, &quot;eth:usnic&quot; won't be unique...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18232.php">http://www.open-mpi.org/community/lists/devel/2015/10/18232.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18233.php">http://www.open-mpi.org/community/lists/devel/2015/10/18233.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18235.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18233.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18235.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18235.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
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
