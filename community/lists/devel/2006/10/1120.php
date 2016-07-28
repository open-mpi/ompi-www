<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 21:23:36 2006" -->
<!-- isoreceived="20061017012336" -->
<!-- sent="Mon, 16 Oct 2006 19:22:12 -0600" -->
<!-- isosent="20061017012212" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 in btl/tcp" -->
<!-- id="51C38893-0C58-4A40-AADF-5A393C5F4E5F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061016230955.GJ30962_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-16 21:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1121.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1121.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="1121.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian -
<br>
<p>I just committed some code in the TCP OOB component to deal with  
<br>
packing / unpacking sockaddr_in structures for cases where there is  
<br>
different heterogeneity / padding.  I think it's going to require  
<br>
some work to make it IPv6 friendly.  Just an FYI.
<br>
<p>Brian
<br>
<p><p>On Oct 16, 2006, at 5:09 PM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Oct 11, 2006 at 11:28:13PM +0200, Adrian Knoth wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ringtest also works fine in plain IPv4 environments and
</span><br>
<span class="quotelev2">&gt;&gt; mixed environments within the same cluster. It fails on
</span><br>
<span class="quotelev2">&gt;&gt; mixed multi-cluster setups and heterogenous OSs, but I'm
</span><br>
<span class="quotelev2">&gt;&gt; going to fix these issues on Saturday (or next week).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've fixed it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0: sending message (0) to 1
</span><br>
<span class="quotelev1">&gt; 0: got message (3) from 3
</span><br>
<span class="quotelev1">&gt; [0,1,1][/home/racl/adi/ompi/trunk/src/ompi/mca/btl/tcp/ 
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint.c:194:mca_btl_tcp_endpoint_dump] accepted:  
</span><br>
<span class="quotelev1">&gt; 192.168.1.132 - 192.168.1.1 nodelay 1 sndbuf 262144 rcvbuf 262144  
</span><br>
<span class="quotelev1">&gt; flags 00000802
</span><br>
<span class="quotelev1">&gt; 3: got message (3) from 2, sending to 0
</span><br>
<span class="quotelev1">&gt; 2: got message (2) from 1, sending to 3
</span><br>
<span class="quotelev1">&gt; [0,1,0][/home/racl/adi/ompi/trunk/src/ompi/mca/btl/tcp/ 
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint.c:194:mca_btl_tcp_endpoint_dump] connected:  
</span><br>
<span class="quotelev1">&gt; 192.168.1.1 - 192.168.1.132 nodelay 1 sndbuf 262144 rcvbuf 262144  
</span><br>
<span class="quotelev1">&gt; flags 00000802
</span><br>
<span class="quotelev1">&gt; [0,1,0][/home/racl/adi/ompi/trunk/src/ompi/mca/btl/tcp/ 
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint.c:194:mca_btl_tcp_endpoint_dump] accepted:  
</span><br>
<span class="quotelev1">&gt; 141.35.14.189 - 141.35.13.178 nodelay 1 sndbuf 262144 rcvbuf 262144  
</span><br>
<span class="quotelev1">&gt; flags 00000802
</span><br>
<span class="quotelev1">&gt; [0,1,1][/home/racl/adi/ompi/trunk/src/ompi/mca/btl/tcp/ 
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint.c:194:mca_btl_tcp_endpoint_dump] connected:  
</span><br>
<span class="quotelev1">&gt; 2001:638:906:1:20e:a6ff:fe3d:48d6 -  
</span><br>
<span class="quotelev1">&gt; 2001:638:906:2:213:d3ff:fec5:3480 nodelay 1 sndbuf 262144 rcvbuf  
</span><br>
<span class="quotelev1">&gt; 262144 flags 00000802
</span><br>
<span class="quotelev1">&gt; 1: got message (1) from 0, sending to 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a ringtest between two different Linux machines and two
</span><br>
<span class="quotelev1">&gt; Solaris hosts (both x86) in a mixed environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The two Linux nodes talk via RFC1918 (192.168.1.x) - the fastest  
</span><br>
<span class="quotelev1">&gt; connection
</span><br>
<span class="quotelev1">&gt; between them. One of them talk to the Solaris via public IPv4  
</span><br>
<span class="quotelev1">&gt; (141.x.y.z),
</span><br>
<span class="quotelev1">&gt; also the fastest connection, the other Linux system (which is  
</span><br>
<span class="quotelev1">&gt; 192.168.1.131
</span><br>
<span class="quotelev1">&gt; and doesn't have a public IPv4 address) uses IPv6 to communicate
</span><br>
<span class="quotelev1">&gt; with the second Solaris, because no faster (other) connection is
</span><br>
<span class="quotelev1">&gt; available. (it's a node from the formerly RFC1918-only cluster which
</span><br>
<span class="quotelev1">&gt; now has its own IPv6 subnet (2001:638:908:1/64))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things are getting interesting... ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [X] &lt;-- nail here for new monitor
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1121.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1121.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="1121.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
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
