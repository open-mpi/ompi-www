<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 11:16:57 2005" -->
<!-- isoreceived="20051031161657" -->
<!-- sent="Mon, 31 Oct 2005 09:16:53 -0700" -->
<!-- isosent="20051031161653" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] TCP problems with 1.0rc4" -->
<!-- id="43664375.6010807_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43664304.6000501_at_lanl.gov" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 11:16:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0252.php">Galen M. Shipman: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>In reply to:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error indicates the IP address exported by the peer is not reachable.
</span><br>
<span class="quotelev1">&gt; You can use the tcp btl parameters:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl_tcp_include eth0,eth1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl_tcp_exclude eth1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To specify the set of interfaces to use/not use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>George was correct - these should be btl_tcp_if_include/btl_tcp_if_exclude.
<br>
<p>Regards,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0252.php">Galen M. Shipman: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>In reply to:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
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
