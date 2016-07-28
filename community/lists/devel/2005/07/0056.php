<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 28 08:47:16 2005" -->
<!-- isoreceived="20050728134716" -->
<!-- sent="Thu, 28 Jul 2005 07:47:11 -0600" -->
<!-- isosent="20050728134711" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Mellanox VAPI SRQ." -->
<!-- id="2067869932f7a64caf0014d31501584d_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-28 08:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0057.php">Tim S. Woodall: "Re:  Launching orted from Eclipse problem: solved"</a>
<li><strong>Previous message:</strong> <a href="0055.php">Jeff Squyres: "Re:  Launching orted from Eclipse problem: solved"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the mvapi btl you can now set OMPI_MCA_btl_mvapi_use_srq=1 which 
<br>
will cause mvapi to use a shared receive queue. This will allow much 
<br>
better scaling as receives are posted per interface port and not per 
<br>
queue pair. Note: older versions of mellanox firmware may see a 
<br>
substantial performance impact on small message latency but the latest 
<br>
firmware shows only a small cost on the order of 2/10 uSec.
<br>
<p><p>- Galen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0057.php">Tim S. Woodall: "Re:  Launching orted from Eclipse problem: solved"</a>
<li><strong>Previous message:</strong> <a href="0055.php">Jeff Squyres: "Re:  Launching orted from Eclipse problem: solved"</a>
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
