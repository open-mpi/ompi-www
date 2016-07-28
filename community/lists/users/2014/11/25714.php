<?
$subject_val = "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  8 23:11:36 2014" -->
<!-- isoreceived="20141109041136" -->
<!-- sent="Sat, 8 Nov 2014 23:11:31 -0500" -->
<!-- isosent="20141109041131" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="3C85822F-2356-4A4F-AA88-433BA35A3D77_at_umich.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="f9nxbtl6k337ohfq9ibmvxpn.1415410594512_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-08 23:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25715.php">Brock Palen: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25713.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25712.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25783.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right I understand those are TCP interfaces, I was just showing that I have two TCP interfaces over one physical interface, so why I was asking how TCP interfaces were selected.  It rarely if ever will mater to us.
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
<p><p><p><span class="quotelev1">&gt; On Nov 7, 2014, at 8:38 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IIRC there is load balancing accros all the btl, for example
</span><br>
<span class="quotelev1">&gt; between vader and scif.
</span><br>
<span class="quotelev1">&gt; So load balancing between ib0 and eoib0 is just a particular case that might not necessarily be handled by the btl tcp.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; OMPI discovers all active interfaces and automatically considers them available for its use unless instructed otherwise via the params. I&#226;&#128;&#153;d have to look at the TCP BTL code to see the loadbalancing algo - I thought we didn&#226;&#128;&#153;t have that &#226;&#128;&#156;on&#226;&#128;&#157; by default across BTLs, but I don&#226;&#128;&#153;t know if the TCP one automatically uses all available Ethernet interfaces by default. Sounds like it must.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 7, 2014, at 11:53 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25710.php">http://www.open-mpi.org/community/lists/users/2014/11/25710.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25712.php">http://www.open-mpi.org/community/lists/users/2014/11/25712.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25715.php">Brock Palen: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25713.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25712.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25783.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
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
