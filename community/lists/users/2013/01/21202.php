<?
$subject_val = "Re: [OMPI users] MXM vs OpenIB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 20:33:18 2013" -->
<!-- isoreceived="20130123013318" -->
<!-- sent="Tue, 22 Jan 2013 20:33:09 -0500" -->
<!-- isosent="20130123013309" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MXM vs OpenIB" -->
<!-- id="C24C4281-B7E4-44D9-AA05-36E07BA76CD7_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1B6C7C0E-C683-4C85-B415-2AAEB6086E4C_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MXM vs OpenIB<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 20:33:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21203.php">Alina Sklarevich: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Previous message:</strong> <a href="21201.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>In reply to:</strong> <a href="21201.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21211.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Reply:</strong> <a href="21211.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; You sound like our vendors, &quot;what is your app&quot;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ;-) I used to be one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ideally OMPI should do the switch between MXM/RC/XRC internally in the transport layer. Unfortunately,
</span><br>
<span class="quotelev1">&gt; we don't have such smart selection logic. Hopefully IB vendors will fix some day. 
</span><br>
<p>I actually looked in the openib-hca.ini (working from memory) to try and find what the default queues were, and I actually couldn't figure it out. The ConnectX entry doesn't have a default, and the 'default default'  also doesn't have an entry. 
<br>
<p>I need to dig into ompi_info, got distracted by an intel compiler bug, ADD for admin/user support folks.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note most of our users run just fine with the standard Peer-Peer queues, default out the box OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The P2P queue is fine, but most like using XRC your users will observe better performance. This is not just scalability.
</span><br>
<p>Cool thanks for all the input, I wonder why peer-to-peer is the default, I know XRC requires hardware support, 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Pasha
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21203.php">Alina Sklarevich: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Previous message:</strong> <a href="21201.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>In reply to:</strong> <a href="21201.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21211.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Reply:</strong> <a href="21211.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
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
