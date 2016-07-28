<?
$subject_val = "[OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 14:53:18 2014" -->
<!-- isoreceived="20141107195318" -->
<!-- sent="Fri, 7 Nov 2014 14:53:10 -0500" -->
<!-- isosent="20141107195310" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="C9CB2D03-B8F6-414F-8CCC-50F91CDE43E6_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] How OMPI picks ethernet interfaces<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-07 14:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25710.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25710.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25710.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25713.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was doing a test on our IB based cluster, where I was diabling IB
<br>
<p>--mca btl ^openib --mca mtl ^mxm
<br>
<p>I was sending very large messages &gt;1GB  and I was surppised by the speed.
<br>
<p>I noticed then that of all our ethernet interfaces
<br>
<p>eth0  (1gig-e)
<br>
ib0  (ip over ib, for lustre configuration at vendor request)
<br>
eoib0  (ethernet over IB interface for IB -&gt; Ethernet gateway for some extrnal storage support at &gt;1Gig speed
<br>
<p>I saw all three were getting traffic.
<br>
<p>We use torque for our Resource Manager and use TM support, the hostnames given by torque match the eth0 interfaces.
<br>
<p>How does OMPI figure out that it can also talk over the others?  How does it chose to load balance?
<br>
<p>BTW that is fine, but we will use if_exclude on one of the IB ones as ib0 and eoib0  are the same physical device and may screw with load balancing if anyone ver falls back to TCP.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25710.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25710.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25710.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25713.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
