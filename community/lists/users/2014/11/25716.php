<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  8 23:38:56 2014" -->
<!-- isoreceived="20141109043856" -->
<!-- sent="Sat, 8 Nov 2014 20:38:52 -0800" -->
<!-- isosent="20141109043852" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="EFCB16CC-85E4-4C97-8313-0D0275CB11BF_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B5863FF8-DF92-4E93-9FC6-D88867CF6157_at_umich.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-08 23:38:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25717.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25715.php">Brock Palen: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25715.php">Brock Palen: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25721.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25721.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: during MPI_Init, each process &#226;&#128;&#156;publishes&#226;&#128;&#157; all of its interfaces. Each process receives a complete map of that info for every process in the job. So when the TCP btl sets itself up, it attempts to connect across -all- the interfaces published by the other end.
<br>
<p>So it doesn&#226;&#128;&#153;t matter what hostname is provided by the RM. We discover and &#226;&#128;&#156;share&#226;&#128;&#157; all of the interface info for every node, and then use them for loadbalancing.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Nov 8, 2014, at 8:13 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok I figured, i'm going to have to read some more for my own curiosity. The reason I mention the Resource Manager we use, and that the hostnames given but PBS/Torque match the 1gig-e interfaces, i'm curious what path it would take to get to a peer node when the node list given all match the 1gig interfaces but yet data is being sent out the 10gig eoib0/ib0 interfaces.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll go do some measurements and see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 8, 2014, at 8:30 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph is right: OMPI aggressively uses all Ethernet interfaces by default.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This short FAQ has links to 2 other FAQs that provide detailed information about reachability:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network">http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The usNIC BTL uses UDP for its wire transport and actually does a much more standards-conformant peer reachability determination (i.e., it actually checks routing tables to see if it can reach a given peer which has all kinds of caching benefits, kernel controls if you want them, etc.).  We haven't back-ported this to the TCP BTL because a) most people who use TCP for MPI still use a single L2 address space, and b) no one has asked for it.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As for the round robin scheduling, there's no indication from the Linux TCP stack what the bandwidth is on a given IP interface.  So unless you use the btl_tcp_bandwidth_&lt;IP_INTERFACE_NAME&gt; (e.g., btl_tcp_bandwidth_eth0) MCA params, OMPI will round-robin across them equally.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you have multiple IP interfaces sharing a single physical link, there will likely be no benefit from having Open MPI use more than one of them.  You should probably use btl_tcp_if_include / btl_tcp_if_exclude to select just one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 7, 2014, at 2:53 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was doing a test on our IB based cluster, where I was diabling IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl ^openib --mca mtl ^mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was sending very large messages &gt;1GB  and I was surppised by the speed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I noticed then that of all our ethernet interfaces
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0  (1gig-e)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib0  (ip over ib, for lustre configuration at vendor request)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eoib0  (ethernet over IB interface for IB -&gt; Ethernet gateway for some extrnal storage support at &gt;1Gig speed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I saw all three were getting traffic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We use torque for our Resource Manager and use TM support, the hostnames given by torque match the eth0 interfaces.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How does OMPI figure out that it can also talk over the others?  How does it chose to load balance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW that is fine, but we will use if_exclude on one of the IB ones as ib0 and eoib0  are the same physical device and may screw with load balancing if anyone ver falls back to TCP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25709.php">http://www.open-mpi.org/community/lists/users/2014/11/25709.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25713.php">http://www.open-mpi.org/community/lists/users/2014/11/25713.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25715.php">http://www.open-mpi.org/community/lists/users/2014/11/25715.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25717.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25715.php">Brock Palen: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25715.php">Brock Palen: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25721.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25721.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
