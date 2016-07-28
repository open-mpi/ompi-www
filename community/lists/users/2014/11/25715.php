<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  8 23:13:46 2014" -->
<!-- isoreceived="20141109041346" -->
<!-- sent="Sat, 8 Nov 2014 23:13:44 -0500" -->
<!-- isosent="20141109041344" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="B5863FF8-DF92-4E93-9FC6-D88867CF6157_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D4A23E81-A03B-4EBE-9CFC-AEC3C751FD48_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How OMPI picks ethernet interfaces<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-08 23:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25716.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25714.php">Brock Palen: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25713.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25716.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25716.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok I figured, i'm going to have to read some more for my own curiosity. The reason I mention the Resource Manager we use, and that the hostnames given but PBS/Torque match the 1gig-e interfaces, i'm curious what path it would take to get to a peer node when the node list given all match the 1gig interfaces but yet data is being sent out the 10gig eoib0/ib0 interfaces.  
<br>
<p>I'll go do some measurements and see.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><span class="quotelev1">&gt; On Nov 8, 2014, at 8:30 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph is right: OMPI aggressively uses all Ethernet interfaces by default.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This short FAQ has links to 2 other FAQs that provide detailed information about reachability:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network">http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The usNIC BTL uses UDP for its wire transport and actually does a much more standards-conformant peer reachability determination (i.e., it actually checks routing tables to see if it can reach a given peer which has all kinds of caching benefits, kernel controls if you want them, etc.).  We haven't back-ported this to the TCP BTL because a) most people who use TCP for MPI still use a single L2 address space, and b) no one has asked for it.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the round robin scheduling, there's no indication from the Linux TCP stack what the bandwidth is on a given IP interface.  So unless you use the btl_tcp_bandwidth_&lt;IP_INTERFACE_NAME&gt; (e.g., btl_tcp_bandwidth_eth0) MCA params, OMPI will round-robin across them equally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have multiple IP interfaces sharing a single physical link, there will likely be no benefit from having Open MPI use more than one of them.  You should probably use btl_tcp_if_include / btl_tcp_if_exclude to select just one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2014, at 2:53 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was doing a test on our IB based cluster, where I was diabling IB
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl ^openib --mca mtl ^mxm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was sending very large messages &gt;1GB  and I was surppised by the speed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I noticed then that of all our ethernet interfaces
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; eth0  (1gig-e)
</span><br>
<span class="quotelev2">&gt;&gt; ib0  (ip over ib, for lustre configuration at vendor request)
</span><br>
<span class="quotelev2">&gt;&gt; eoib0  (ethernet over IB interface for IB -&gt; Ethernet gateway for some extrnal storage support at &gt;1Gig speed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I saw all three were getting traffic.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We use torque for our Resource Manager and use TM support, the hostnames given by torque match the eth0 interfaces.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How does OMPI figure out that it can also talk over the others?  How does it chose to load balance?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTW that is fine, but we will use if_exclude on one of the IB ones as ib0 and eoib0  are the same physical device and may screw with load balancing if anyone ver falls back to TCP.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25709.php">http://www.open-mpi.org/community/lists/users/2014/11/25709.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25713.php">http://www.open-mpi.org/community/lists/users/2014/11/25713.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25716.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25714.php">Brock Palen: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25713.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25716.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25716.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
