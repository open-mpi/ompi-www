<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 19:08:57 2006" -->
<!-- isoreceived="20061016230857" -->
<!-- sent="Tue, 17 Oct 2006 01:09:55 +0200" -->
<!-- isosent="20061016230955" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 in btl/tcp" -->
<!-- id="20061016230955.GJ30962_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061011212813.GX31927_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2006-10-16 19:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1120.php">Brian Barrett: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="1118.php">Jeff Squyres: "Re: [OMPI devel] Something broken using Persistent Requests"</a>
<li><strong>In reply to:</strong> <a href="1106.php">Adrian Knoth: "[OMPI devel] IPv6 in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1120.php">Brian Barrett: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="1120.php">Brian Barrett: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 11, 2006 at 11:28:13PM +0200, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; The ringtest also works fine in plain IPv4 environments and
</span><br>
<span class="quotelev1">&gt; mixed environments within the same cluster. It fails on
</span><br>
<span class="quotelev1">&gt; mixed multi-cluster setups and heterogenous OSs, but I'm
</span><br>
<span class="quotelev1">&gt; going to fix these issues on Saturday (or next week).
</span><br>
<p>I've fixed it:
<br>
<p>0: sending message (0) to 1
<br>
0: got message (3) from 3
<br>
[0,1,1][/home/racl/adi/ompi/trunk/src/ompi/mca/btl/tcp/btl_tcp_endpoint.c:194:mca_btl_tcp_endpoint_dump] accepted: 192.168.1.132 - 192.168.1.1 nodelay 1 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
3: got message (3) from 2, sending to 0
<br>
2: got message (2) from 1, sending to 3
<br>
[0,1,0][/home/racl/adi/ompi/trunk/src/ompi/mca/btl/tcp/btl_tcp_endpoint.c:194:mca_btl_tcp_endpoint_dump] connected: 192.168.1.1 - 192.168.1.132 nodelay 1 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
[0,1,0][/home/racl/adi/ompi/trunk/src/ompi/mca/btl/tcp/btl_tcp_endpoint.c:194:mca_btl_tcp_endpoint_dump] accepted: 141.35.14.189 - 141.35.13.178 nodelay 1 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
[0,1,1][/home/racl/adi/ompi/trunk/src/ompi/mca/btl/tcp/btl_tcp_endpoint.c:194:mca_btl_tcp_endpoint_dump] connected: 2001:638:906:1:20e:a6ff:fe3d:48d6 - 2001:638:906:2:213:d3ff:fec5:3480 nodelay 1 sndbuf 262144 rcvbuf 262144 flags 00000802
<br>
1: got message (1) from 0, sending to 2
<br>
<p>This is a ringtest between two different Linux machines and two
<br>
Solaris hosts (both x86) in a mixed environment.
<br>
<p>The two Linux nodes talk via RFC1918 (192.168.1.x) - the fastest connection
<br>
between them. One of them talk to the Solaris via public IPv4 (141.x.y.z),
<br>
also the fastest connection, the other Linux system (which is 192.168.1.131
<br>
and doesn't have a public IPv4 address) uses IPv6 to communicate
<br>
with the second Solaris, because no faster (other) connection is
<br>
available. (it's a node from the formerly RFC1918-only cluster which
<br>
now has its own IPv6 subnet (2001:638:908:1/64))
<br>
<p><p>Things are getting interesting... ;)
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
[X] &lt;-- nail here for new monitor
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1120.php">Brian Barrett: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="1118.php">Jeff Squyres: "Re: [OMPI devel] Something broken using Persistent Requests"</a>
<li><strong>In reply to:</strong> <a href="1106.php">Adrian Knoth: "[OMPI devel] IPv6 in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1120.php">Brian Barrett: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="1120.php">Brian Barrett: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
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
