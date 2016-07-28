<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 17:19:19 2015" -->
<!-- isoreceived="20151021211919" -->
<!-- sent="Wed, 21 Oct 2015 21:19:14 +0000" -->
<!-- isosent="20151021211914" -->
<!-- name="Atchley, Scott" -->
<!-- email="atchleyes_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)" -->
<!-- id="2537B404-8EA5-49C6-B4F8-1DFF45E1E3BF_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE35E958-F1E1-423E-8AE1-3D4849EC0430_at_cisco.com" -->
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
<strong>Date:</strong> 2015-10-21 17:19:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI	(was:	topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18237.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18232.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2015, at 11:09 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; REVISION 2 (based on feedback in last 24 hours).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - NETWORK instead of NETWORK_TYPE
</span><br>
<span class="quotelev1">&gt; - Shared memory and process loopback are not affected by this CLI
</span><br>
<span class="quotelev1">&gt; - Change the OPAL API usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actually like points 1-8 below quite a bit.  If implemented in ALL BTLs/MTLs/etc., it can solve the &quot;how do I disable XYZ across all of Open MPI?&quot; problem nicely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Point 9 -- what does QUALIFIER mean/how is it used? -- still needs work (no real updates since rev 1 of this proposal).  I am thinking that QUALIFIER (somehow) can be used to figure out which OMPI code path to use for a given network (e.g., BTL vs. MTL, etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun --[enable|disable] NETWORK[:QUALIFIER][,NETWORK[:QUALIFIER]]*
</span><br>
<span class="quotelev1">&gt;  # Or &quot;--[net|nonet]&quot;, or some other name if &quot;enable|disable&quot; is too general.
</span><br>
<span class="quotelev1">&gt;  # Suggestions welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The intent of these CLI options is to easily enable/disable specific network types and/or specific interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. The use of shared memory and process loopback is assumed (and is not affected by these CLI options -- the &quot;expert&quot; level must be used if specific control over shared memory / loopback is desired).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Both forms take a comma-delimited list of 1 or more items.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. --enable would work similar to our &quot;include&quot; MCA params: OMPI will *only* use the network type(s) listed (but will still use shared memory and process loopback).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. --disable would work similar to our &quot;exclude&quot; MCA params: OMPI will use all network types *except* those listed (but will still used shared memory and process loopback).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. NETWORK values can generally be one of three things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   - a human-recognizable name (e.g., &quot;ib&quot;, &quot;ethernet&quot;, ...etc.)
</span><br>
<span class="quotelev1">&gt;   - a Linux interface device name (e.g., &quot;eth0&quot;, &quot;usnic_0&quot;, &quot;mlx4_0&quot;, optionally specifying a specific port if desired and relevant, such as &quot;mlx4_0:1&quot;)
</span><br>
<span class="quotelev1">&gt;   - a network address (e.g., &quot;10.20.0.0/16&quot;, which specifies a specific network interface+port)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7. NETWORK and QUALIFIER values are parsed (by orterun/etc.) and distributed to MPI processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 8. MPI processes can query the NETWORK values during BTL/MTL/etc. initialization and selection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It may be sufficient to have a simple &quot;did the user specify this NETWORK value?&quot; (case insensitive) query function that just returns a boolean.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, the TCP BTL could look like this (only showing &quot;enable&quot; logic for simplicity -- adding &quot;disable&quot; logic is an exercise left for the reader):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;  if (opal_network_value(&quot;eth&quot;) || opal_network_value(&quot;ethernet&quot;)) {
</span><br>
<span class="quotelev1">&gt;      want_all_ip_interfaces = true;
</span><br>
<span class="quotelev1">&gt;  } else {
</span><br>
<span class="quotelev1">&gt;      foreach IP_interface {
</span><br>
<span class="quotelev1">&gt;          // Search for strings like &quot;eth0&quot; or &quot;10.10.0.0/16&quot;
</span><br>
<span class="quotelev1">&gt;          if (opal_network_value(ip_interface_name) ||
</span><br>
<span class="quotelev1">&gt;              opal_network_value(CIDR of ip_interface_name)) {
</span><br>
<span class="quotelev1">&gt;              push(@desired_interfaces, ip_interface_name);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  foreach IP_interface {
</span><br>
<span class="quotelev1">&gt;      if (want_all_ip_interfaces || @desired_interfaces contains ip_interface) {
</span><br>
<span class="quotelev1">&gt;          make a module for that IP interface
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The usnic BTL would likely be quite similar to the TCP BTL, but also look for strings like &quot;usnic_0&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The openib BTL could look like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;  if (opal_network_value(&quot;ib&quot;) || opal_network_value(&quot;infiniband&quot;)) {
</span><br>
<span class="quotelev1">&gt;      want_all_ib_interfaces = true;
</span><br>
<span class="quotelev1">&gt;  } else if (opal_network_value(&quot;roce&quot;) {
</span><br>
<span class="quotelev1">&gt;      want_all_roce_interfaces = true;
</span><br>
<span class="quotelev1">&gt;  } else if (opal_network_value(&quot;iwarp&quot;) {
</span><br>
<span class="quotelev1">&gt;      want_all_iwarp_interfaces = true;
</span><br>
<span class="quotelev1">&gt;  } else if (opal_network_value(&quot;eth&quot;) || opal_network_value(&quot;ethernet&quot;)) {
</span><br>
<span class="quotelev1">&gt;      want_all_roce_interfaces = true;
</span><br>
<span class="quotelev1">&gt;      want_all_iwarp_interfaces = true;
</span><br>
<span class="quotelev1">&gt;  } else {
</span><br>
<span class="quotelev1">&gt;      foreach verbs_interface {
</span><br>
<span class="quotelev1">&gt;          // Search for strings like &quot;mlx4_0&quot; or &quot;10.50.0.0/16&quot; for RoCE/iWARP/IB with IPoIB enabled.
</span><br>
<span class="quotelev1">&gt;          // Could also search for IB subnet IDs, if desired...?
</span><br>
<span class="quotelev1">&gt;          if (opal_network_value(verbs_interface_name) ||
</span><br>
<span class="quotelev1">&gt;              opal_network_value(subnet ID of verbs_interface_name) ||
</span><br>
<span class="quotelev1">&gt;              opal_network_value(IP CIDR of verbs_interface_name)) {
</span><br>
<span class="quotelev1">&gt;              push(@desired_interfaces, verbs_interface_name);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  foreach verbs_interface {
</span><br>
<span class="quotelev1">&gt;      make_module = false;
</span><br>
<span class="quotelev1">&gt;      if (@desired_interfaces contains verbs_interface) {
</span><br>
<span class="quotelev1">&gt;          make_module = true;
</span><br>
<span class="quotelev1">&gt;      } else if (verbs_interface is IB &amp;&amp; want_all_ib_interfaces)
</span><br>
<span class="quotelev1">&gt;          make_module = true;
</span><br>
<span class="quotelev1">&gt;      } else if (verbs_interface is RoCE &amp;&amp; want_all_roce_interfaces)
</span><br>
<span class="quotelev1">&gt;          make_module = true;
</span><br>
<span class="quotelev1">&gt;      } else if (verbs_interface is iWARP &amp;&amp; want_all_iwarp_interfaces)
</span><br>
<span class="quotelev1">&gt;          make_module = true;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      if (make_module) {
</span><br>
<span class="quotelev1">&gt;          make a module for that verbs interface
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I imagine that the MXM MTL, Yalla PML, and hcoll and FCA colls, could be similar, but slightly simpler since they (assumedly) don't care about iWARP interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PSM / PSM2 / uGNI / Portals / etc. can all do similar things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The key here is that ALL BTLs, MTLs, OSC, and COLL modules -- anything that talks directly to the network -- will need to use this opal_network_value() API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 9. The &quot;:QUALIFIER&quot; value is optional for each NETWORK_TYPE specified, and can be used to disambiguate when a given network type can be reached multiple ways in OMPI.  E.g., it can help choose between the openib BTL, the MXM MTL, and the Yalla PML.  E.g.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun --enable ib:btl
</span><br>
<span class="quotelev1">&gt;  mpirun --enable ib:mtl
</span><br>
<span class="quotelev1">&gt;  mpirun --enable ib:yalla
</span><br>
<p>I do not like this. One would expect that it would be:
<br>
<p>&nbsp;mpirun --enable ib:btl
<br>
&nbsp;mpirun --enable ib:mtl
<br>
&nbsp;mpirun --enable ib:pml
<br>
<p>because the first two use the component that the IB plugins operate under (openib-&gt;btl and mxm-&gt;mtl) and the last one uses the name of the plugin.
<br>
<p>That said, when UCX comes in, how do you select between yalla and ucx? Perhaps is makes more sense to specify the plugin rather than the parent (e.g. ib:openib or ib:mxm or ib:yalla or ib:ucx)?
<br>
<p>Scott
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I don't like these names (btl, mtl, yalla) because they mean nothing to non-OMPI experts.  But I like the concept that a QUALIFIER can (somehow) help choose between the different OMPI code paths.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's another example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun --enable eth:tcp
</span><br>
<span class="quotelev1">&gt;  mpirun --enable eth:usnic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These QUALIFIER values are a *little* better, but not much -- the user still has to know that they exist to know to choose one of them (&quot;tcp&quot; and &quot;usnic&quot;).  But note that usNIC will someday have tag matching support, so it will be able to be used through the OFI MTL, too.  Hence, &quot;eth:usnic&quot; won't be unique...
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18232.php">http://www.open-mpi.org/community/lists/devel/2015/10/18232.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI	(was:	topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18237.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18232.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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
