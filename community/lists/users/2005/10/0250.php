<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 11:15:04 2005" -->
<!-- isoreceived="20051031161504" -->
<!-- sent="Mon, 31 Oct 2005 09:15:00 -0700" -->
<!-- isosent="20051031161500" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] TCP problems with 1.0rc4" -->
<!-- id="43664304.6000501_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43663C64.1050408_at_graphics.stanford.edu" -->
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
<strong>Date:</strong> 2005-10-31 11:15:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0251.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Previous message:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>In reply to:</strong> <a href="0247.php">Mike Houston: "[O-MPI users] TCP problems with 1.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0251.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Reply:</strong> <a href="0251.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>Mike Houston wrote:
<br>
<span class="quotelev1">&gt; We can't seem to run across TCP.  We did a default 'configure'.  Shared 
</span><br>
<span class="quotelev1">&gt; memory seems to work, but trying tcp give us:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_tcp_endpoint.c:557:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This error indicates the IP address exported by the peer is not reachable.
<br>
You can use the tcp btl parameters:
<br>
<p>-mca btl_tcp_include eth0,eth1
<br>
<p>or
<br>
<p>-mca btl_tcp_exclude eth1
<br>
<p>To specify the set of interfaces to use/not use.
<br>
<p><p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0251.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Previous message:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>In reply to:</strong> <a href="0247.php">Mike Houston: "[O-MPI users] TCP problems with 1.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0251.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Reply:</strong> <a href="0251.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
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
