<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 09:58:58 2006" -->
<!-- isoreceived="20060331145858" -->
<!-- sent="Fri, 31 Mar 2006 16:59:42 +0200" -->
<!-- isosent="20060331145942" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331145942.GQ16388_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="41E866EC-A39A-40B6-A22A-D54E5B72DB8A_at_open-mpi.org" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 09:59:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0785.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 31, 2006 at 09:07:39AM -0500, Brian Barrett wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I have a first quick and dirty patch, replacing AF_INET by AF_INET6,
</span><br>
<span class="quotelev2">&gt; &gt; the sockaddr_in structs and so on.
</span><br>
<span class="quotelev1">&gt; Is there a way to do this to better support both IPv4 and IPv6?
</span><br>
<p>I think so, too. There are probably two different ways to achieve
<br>
this: either provide two components &quot;tcp&quot; and &quot;tcp6&quot; or use
<br>
v6-mapped-v4 addresses. The first would surely result in a lot
<br>
of shared code, but I think this won't be a problem. If it is
<br>
possible to have to components (and by this several modules)
<br>
for communication, this might be a solution.
<br>
<p>The other way, v6-mapped-v4, is how normal userland daemons
<br>
are usually implemented. The application only listens on
<br>
v6-sockets, v4-addresses are mapped to ::ffff:a.b.c.d/96,
<br>
where a.b.c.d is the normal 32bit v4-address:
<br>
<p>Mar 31 13:58:26 ltw pop3-login: Login: xxxxx [::ffff:84.184.164.40]
<br>
<p>Perhaps it's a good idea to port any internal structure to
<br>
IPv6, as it is able to represent the whole v4 namespace.
<br>
One can always determine whether it is a real v6 or only
<br>
a mapped v4 address (the common ::ffff: prefix)
<br>
<p><p><span class="quotelev1">&gt; mca_btl_tcp_proc_insert(), which is what I think you're referring to  
</span><br>
<span class="quotelev1">&gt; by the net1/net2 code, that's intended to be used to try to get all  
</span><br>
<span class="quotelev1">&gt; the multi-nic scenarios wired up in the most advantageous way  
</span><br>
<span class="quotelev1">&gt; possible.  So we look at the combination IPv4 addr and netmask and  
</span><br>
<span class="quotelev1">&gt; prefer to connect two endpoints in the same subnet.
</span><br>
<p>Ok, this is how I understood the code. The current implementation
<br>
does a bitwise AND on uint32, for IPv6 this will be 128 bits.
<br>
<p>I don't know of any predeclared type of this size, so we have
<br>
to find a different solution. Though the final decision will
<br>
always be boolean (&quot;Are we on the same network?&quot; Yes/No), we
<br>
have to represent the correct answer.
<br>
<p>There is only one comparision between net1 and net2, so the
<br>
decision is a local one and we don't really need the
<br>
netmasks.
<br>
<p><span class="quotelev1">&gt; I'm not sure how IPv6 deals with netmasks and routing, but I'm
</span><br>
<span class="quotelev1">&gt; assuming there would be something similar.
</span><br>
<p>Pretty much the same. Netmasks are now called &quot;prefixlen&quot;,
<br>
integers between 0 (like /0) and 128 (like /32).
<br>
The typical onlink prefixlen is /64, there's usually no
<br>
smaller (i.e. /112) prefixlen, though it might exist.
<br>
<p>Routing aggregation is done by enlarging the prefix.
<br>
A typical one is /48, this means 2^16 networks with 2^64
<br>
hosts each.
<br>
<p>So to say: the LAN prefixlen will be 64 in most cases.
<br>
Larger ones (i.e. /48) are only for routing.
<br>
<p>I apologize for calling the numerical smaller value of 48
<br>
the larger prefix than 64. This just refers to the network
<br>
size as the /64 is the smaller network.
<br>
<p><p><span class="quotelev2">&gt; &gt; I don't know if this patched tcp-component can handle
</span><br>
<span class="quotelev2">&gt; &gt; IPv6 connections, I've never tested it. I think it
</span><br>
<span class="quotelev2">&gt; &gt; even breaks IPv4 functionality; we should make clear
</span><br>
<span class="quotelev2">&gt; &gt; how IPv4 and IPv6 may work in parallel (or may not, if
</span><br>
<span class="quotelev2">&gt; &gt; one considers IPv4 deprecated ;)
</span><br>
<span class="quotelev1">&gt;  From a practical standpoint, Open MPI has to support both IPv4 and  
</span><br>
<span class="quotelev1">&gt; IPv6 for the foreseeable future. 
</span><br>
<p>I think so, too. We're dual stacked.
<br>
<p><span class="quotelev1">&gt; We currently try to wire up one connection per &quot;IP device&quot;, so it
</span><br>
<span class="quotelev1">&gt; seems like we should be able to find some way to automatically
</span><br>
<span class="quotelev1">&gt; switch between IPv6 or IPv4 based on what we determine is available
</span><br>
<span class="quotelev1">&gt; on that host, right?
</span><br>
<p>That's right. The orte-oob seems to be the right place for
<br>
this decision, assuming that ompi/mca/btl/tcp can handle
<br>
both or have two different components providing the desired
<br>
functionality.
<br>
<p>Implementing this dual stack behaviour isn't that hard, almost
<br>
every userland tool does it this way: try the v6 and if it
<br>
fails, use v4. The user can usually force the code to use
<br>
either v4 or v6. This shouldn't be too hard in case of
<br>
v6-mapped-v4. The only thing to take care is for RFC1918 networks.
<br>
<p>adi_at_drcomp:~$ telnet ::ffff:127.0.0.1 25
<br>
<p>(works fine)
<br>
<p>To automatically select the right protocol, it might be good
<br>
to prefer IPv4 (smaller headers-&gt;less overhead). The user
<br>
can still force the use of IPv6 via DNS (assigning special
<br>
IPv6-only hostnames)
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Lieber einen Spanner im Garten als garkein Strom!
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0785.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
