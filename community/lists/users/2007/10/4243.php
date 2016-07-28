<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 08:31:32 2007" -->
<!-- isoreceived="20071018123132" -->
<!-- sent="Thu, 18 Oct 2007 08:31:15 -0400" -->
<!-- isosent="20071018123115" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB latency on Mellanox ConnectX hardware" -->
<!-- id="7E661D25-9A5C-4287-9714-E00F5B94413D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071018115640.GD21159_at_minantech.com" -->
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
<strong>Date:</strong> 2007-10-18 08:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4244.php">Marcin Skoczylas: "[OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Previous message:</strong> <a href="4242.php">Gleb Natapov: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<li><strong>In reply to:</strong> <a href="4242.php">Gleb Natapov: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 18, 2007, at 7:56 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Open MPI v1.2.4 (and newer) will get around 1.5us latency with 0 byte
</span><br>
<span class="quotelev2">&gt;&gt; ping-pong benchmarks on Mellanox ConnectX HCAs.  Prior versions of
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI can also achieve this low latency by setting the
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_use_eager_rdma MCA parameter to 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually setting btl_openib_use_eager_rdma to 1 will not help. The
</span><br>
<span class="quotelev1">&gt; reason is that it is 1 by default anyway, but Open MPI disables eager
</span><br>
<span class="quotelev1">&gt; rdma because it can't find HCA description in the ini file and cannot
</span><br>
<span class="quotelev1">&gt; distinguish between default value and value that user set explicitly.
</span><br>
<p>Arrgh; that's a fun (read: annoying) bug.  Well, it's not a total  
<br>
loss -- you can still get the same performance in older Open MPI  
<br>
versions by adding the following to the end of the $prefix/share/ 
<br>
openmpi/mca-btl-openib-hca-params.ini file:
<br>
<p>[Mellanox Hermon]
<br>
vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708
<br>
vendor_part_id = 25408,25418,25428
<br>
use_eager_rdma = 1
<br>
mtu = 2048
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4244.php">Marcin Skoczylas: "[OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Previous message:</strong> <a href="4242.php">Gleb Natapov: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<li><strong>In reply to:</strong> <a href="4242.php">Gleb Natapov: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
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
