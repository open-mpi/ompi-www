<?
$subject_val = "Re: [OMPI users] Problem with btl_openib_endpoint_post_rr";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 08:26:01 2008" -->
<!-- isoreceived="20080826122601" -->
<!-- sent="Tue, 26 Aug 2008 14:25:54 +0200" -->
<!-- isosent="20080826122554" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with btl_openib_endpoint_post_rr" -->
<!-- id="1219753554.6045.31.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="48B3F0D8.1060906_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with btl_openib_endpoint_post_rr<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-26 08:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6431.php">Aurélien Bouteiller: "[OMPI users] Opal documentation"</a>
<li><strong>Previous message:</strong> <a href="6429.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with btl_openib_endpoint_post_rr"</a>
<li><strong>In reply to:</strong> <a href="6429.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with btl_openib_endpoint_post_rr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2008-08-26 at 15:02 +0300, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Can you please provide more information about your setup:
</span><br>
<span class="quotelev1">&gt; - OpenMPI version
</span><br>
<span class="quotelev1">&gt; - Runtime tuning
</span><br>
<span class="quotelev1">&gt; - Platform
</span><br>
<span class="quotelev1">&gt; - IB vendor and driver version
</span><br>
<p>openmpi: 1.2.6
<br>
runtime: mpirun -mca mpi_yield_when_idle 1 (PBS -l nodes=32:ppn=8)
<br>
platform: intel dual quadcore, centos5
<br>
ib: Mellanox Technologies MT25208 InfiniHost III Ex
<br>
<p>libraries from centos5:
<br>
libibverbs-1.1.1-6.el5_1.1
<br>
libibumad-1.0.5-6.el5_1.1
<br>
libibcommon-1.0.3-6.el5_1.1
<br>
<p>I haven't had time to run this enough to know if it happens everytime or
<br>
only intermittently.
<br>
It takes a while before it happens...
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6431.php">Aurélien Bouteiller: "[OMPI users] Opal documentation"</a>
<li><strong>Previous message:</strong> <a href="6429.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with btl_openib_endpoint_post_rr"</a>
<li><strong>In reply to:</strong> <a href="6429.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with btl_openib_endpoint_post_rr"</a>
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
