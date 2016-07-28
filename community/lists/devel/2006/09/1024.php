<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  1 09:01:37 2006" -->
<!-- isoreceived="20060901130137" -->
<!-- sent="Fri, 01 Sep 2006 07:01:25 -0600" -->
<!-- isosent="20060901130125" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="C11D8B45.3B17%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060901121751.GM6454_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-01 09:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1023.php">Adrian Knoth: "[OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1023.php">Adrian Knoth: "[OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/1/06 6:17 AM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I felt impelled to create a new ORTE oob component: tcp6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to either compile the library with IPv4 or IPv6 support,
</span><br>
<span class="quotelev1">&gt; but not with both (so to say: two different ompi installations or
</span><br>
<span class="quotelev1">&gt; at least two different DSO versions).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I can see, many functions use mca_oob_tcp_component.tcp_listen_sd.
</span><br>
<span class="quotelev1">&gt; Unfortunately, as I am not allowed to use v4mapped addresses (not supported
</span><br>
<span class="quotelev1">&gt; by the Windows IPv6 stack, disabled by default on *BSD), this socket
</span><br>
<span class="quotelev1">&gt; is either AF_INET or AF_INET6, but not both (both means AF_INET6 *and*
</span><br>
<span class="quotelev1">&gt; accepting v4mapped addresses).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you agree to go on with two oob components, tcp and tcp6?
</span><br>
<span class="quotelev1">&gt; There is a lot of duplicated code, but we might refactor this
</span><br>
<span class="quotelev1">&gt; when everything else will be done.
</span><br>
<p>Yes, I think that's the right approach - see bottom for more comments,
<br>
though.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand, this whole procedure might be totally useless:
</span><br>
<span class="quotelev1">&gt; two nodes may exchange IPv4-URIs via IPv6 containing identical
</span><br>
<span class="quotelev1">&gt; RFC1918 networks. One would prefer IPv4 due to less overhead,
</span><br>
<span class="quotelev1">&gt; but with IPv6, these v4-addresses might be at different locations
</span><br>
<span class="quotelev1">&gt; anywhere in the world.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In other words: IPv6 must be tried first or mixing with IPv4
</span><br>
<span class="quotelev1">&gt; cannot be reliable. In this case, a lot of code may be removed
</span><br>
<span class="quotelev1">&gt; and we'll end up with either two installations/DSOs (a mentioned
</span><br>
<span class="quotelev1">&gt; above) or with runtime detection of af_family (i.e. look for
</span><br>
<span class="quotelev1">&gt; global IPv6 addresses and iff found, disable IPv4 completely)
</span><br>
<p>I think this can be supported nicely in the framework system. All we have to
<br>
do is set the IPv6 component's priority higher than IPv4. We then can deal
<br>
with the &quot;try IPv6 first&quot; by traversing the component list in priority
<br>
order. As an example, see the RAS framework.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you think - which way is best? Use cases?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The only use case I am really concerned about is that of a Head Node Process
<br>
(HNP) that needs to talk to both IPv6 and IPv4 systems. I admit this will be
<br>
unusual, but I would hate to pursue a design that inherently can't support
<br>
it. In this case, we need both OOB components active, and we need a routing
<br>
table that tells us which one to use to talk to various processes. I suspect
<br>
the routing table belongs in the RML framework. If you look at the PLS
<br>
framework, you'll see where we &quot;front&quot; the select function to give you the
<br>
ability to specify a preferred selection. We might have to do the same thing
<br>
with the OOB to allow the RML to say &quot;send this buffer using this specific
<br>
OOB component&quot;, while still allowing it to say &quot;send this buffer using the
<br>
*best* component&quot;.
<br>
<p>I suspect that backend processes (i.e., non-HNP processes) really will only
<br>
use one or the other. Of course, someone might set up a bizarre cluster or
<br>
grid that has a mix of IPv6 and IPv4 systems, but I doubt it. So I'm not as
<br>
concerned there.
<br>
<p>************************************
<br>
<p>You know, we never did much of a communications layer design for OpenRTE.
<br>
What may really be required here is to take a step back and do just that -
<br>
define the relative roles of the RML and OOB a little more clearly, decide
<br>
what would drive us to add components to either framework, etc.
<br>
<p>Does that sound like a good idea? Otherwise, I fear we will have another
<br>
major overhaul (like we are doing right now for the launch frameworks) in
<br>
our future.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1023.php">Adrian Knoth: "[OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1023.php">Adrian Knoth: "[OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
