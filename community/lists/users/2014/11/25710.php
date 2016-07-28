<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 15:56:43 2014" -->
<!-- isoreceived="20141107205643" -->
<!-- sent="Fri, 7 Nov 2014 12:56:39 -0800" -->
<!-- isosent="20141107205639" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="56FED689-4E59-4218-AEC6-1230F605CAF6_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C9CB2D03-B8F6-414F-8CCC-50F91CDE43E6_at_umich.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-07 15:56:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25711.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25709.php">Brock Palen: "[OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25709.php">Brock Palen: "[OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25713.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI discovers all active interfaces and automatically considers them available for its use unless instructed otherwise via the params. I&#226;&#128;&#153;d have to look at the TCP BTL code to see the loadbalancing algo - I thought we didn&#226;&#128;&#153;t have that &#226;&#128;&#156;on&#226;&#128;&#157; by default across BTLs, but I don&#226;&#128;&#153;t know if the TCP one automatically uses all available Ethernet interfaces by default. Sounds like it must.
<br>
<p><p><span class="quotelev1">&gt; On Nov 7, 2014, at 11:53 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was doing a test on our IB based cluster, where I was diabling IB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca btl ^openib --mca mtl ^mxm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was sending very large messages &gt;1GB  and I was surppised by the speed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed then that of all our ethernet interfaces
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth0  (1gig-e)
</span><br>
<span class="quotelev1">&gt; ib0  (ip over ib, for lustre configuration at vendor request)
</span><br>
<span class="quotelev1">&gt; eoib0  (ethernet over IB interface for IB -&gt; Ethernet gateway for some extrnal storage support at &gt;1Gig speed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw all three were getting traffic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use torque for our Resource Manager and use TM support, the hostnames given by torque match the eth0 interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does OMPI figure out that it can also talk over the others?  How does it chose to load balance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW that is fine, but we will use if_exclude on one of the IB ones as ib0 and eoib0  are the same physical device and may screw with load balancing if anyone ver falls back to TCP.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25709.php">http://www.open-mpi.org/community/lists/users/2014/11/25709.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25711.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25709.php">Brock Palen: "[OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25709.php">Brock Palen: "[OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25713.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
