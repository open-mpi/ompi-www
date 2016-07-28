<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 12:51:05 2007" -->
<!-- isoreceived="20070206175105" -->
<!-- sent="Tue, 6 Feb 2007 12:50:55 -0500" -->
<!-- isosent="20070206175055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails" -->
<!-- id="CB09C4C3-AF92-457D-8D71-057614E1DC3D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900702060938t1fbb7741o68e187168d3fb6f7_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-06 12:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2629.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2007, at 12:38 PM, Alex Tumanov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The pointer was rather informative. We do have to use non-standard
</span><br>
<span class="quotelev1">&gt; ranges for IB interfaces, because we're performing automatic IP over
</span><br>
<span class="quotelev1">&gt; IB configuration based on the eth0 IP and netmask. Given 10.x.y.z/8
</span><br>
<span class="quotelev1">&gt; configuration for eth0, the IPs assigned to infiniband interfaces will
</span><br>
<span class="quotelev1">&gt; not only end up on the same subnet ID, but may even conflict with
</span><br>
<span class="quotelev1">&gt; existing ethernet interface IP addresses. Hence the use of 20.x.y.z
</span><br>
<span class="quotelev1">&gt; and 30.x.y.z for ib0 &amp; ib1 respectively.
</span><br>
<p>I'm not sure I'm parsing your explanation properly.  Are you saying  
<br>
that your cluster's ethernet addresses are dispersed across all of  
<br>
10.x.y.z, and therefore you don't want the IPoIB addresses to  
<br>
conflict?  Even being conservative, that's 250^3 IP addresses (over  
<br>
15 million).  There should be plenty of space in there for your  
<br>
cluster's ethernet and IPoIB addresses to share (and any other  
<br>
machines that also share your 10.x.y.z address space).
<br>
<p>But it doesn't really matter -- this is a minor point.  :-)
<br>
<p><span class="quotelev1">&gt; I actually tried benchmarking with HPLinpack. Specifically, I'm
</span><br>
<span class="quotelev1">&gt; interested in measuring performance improvements when running OpenMPI
</span><br>
<span class="quotelev1">&gt; jobs over several available interconnects. However, I have difficulty
</span><br>
<span class="quotelev1">&gt; interpreting the cryptic HPL output. I've seen members of the list
</span><br>
<span class="quotelev1">&gt; using xhpl benchmark. Perhaps someone could shed some light on how to
</span><br>
<span class="quotelev1">&gt; read its output? Also, my understanding is that the only advantage of
</span><br>
<p>I'll defer to others on this one...
<br>
<p><span class="quotelev1">&gt; multiple interconnect availability is the increased bandwidth for
</span><br>
<span class="quotelev1">&gt; OpenMPI message striping - correct? In that case, I would probably
</span><br>
<p>That's a big reason, yes.
<br>
<p><span class="quotelev1">&gt; benefit from a more bandwidth intensive benchmark. If the OpenMPI
</span><br>
<span class="quotelev1">&gt; community could point me in the right direction for that, it would be
</span><br>
<span class="quotelev1">&gt; greatly appreciated. I have a feeling that this is not one of HPL's
</span><br>
<span class="quotelev1">&gt; strongest points.
</span><br>
<p>Actually, it depends on how big your HPL problem size it.  HPL can  
<br>
send very large messages if you set the size high enough.  For  
<br>
example, when we were running HPL at Sandia for its Top500 run, we  
<br>
were seeing 800MB messages (for 4000+ nodes, lotsa memory -- very  
<br>
large HPL problem size).
<br>
<p>A simple ping-pong benchmark can also be useful to ballpark what  
<br>
you're seeing for your network performance.  My personal favorite is  
<br>
NetPIPE, but there's others as well.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2629.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
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
