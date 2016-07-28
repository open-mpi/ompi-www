<?
$subject_val = "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 18:04:26 2013" -->
<!-- isoreceived="20130326220426" -->
<!-- sent="Tue, 26 Mar 2013 22:04:21 +0000" -->
<!-- isosent="20130326220421" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC8018_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1363917176l.958622l.0l_at_psu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 18:04:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21621.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201"</a>
<li><strong>Previous message:</strong> <a href="21619.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<li><strong>In reply to:</strong> <a href="21591.php">David A. Boger: "[OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2013, at 9:52 PM, David A. Boger &lt;dab143_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If I add &quot;-mca oob_tcp_if_exclude cscotun0&quot;, then the corresponding address for that vpn interface no longer shows up in contact.txt, but the problem remains. I also add &quot;-mca btl ^cscotun0 -mca btl_tcp_if_exclude cscotun0&quot; with no effect.
</span><br>
<p>I don't know if you have resolved this or not, but I notice you seem to have an error in your exclude line.  You should probably do:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca oob_tcp_if_exclude lo,cscotun0 --mca btl_tcp_if_exclude lo,cscotun0 ...
<br>
<p>Or, better yet, just *include* the one interface that you want (so that you don't have to remember to *also* exclude localhost, and/or any other problematic interfaces):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca oob_tcp_if_include en0 --mca btl_tcp_if_include en0 ...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21621.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201"</a>
<li><strong>Previous message:</strong> <a href="21619.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<li><strong>In reply to:</strong> <a href="21591.php">David A. Boger: "[OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
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
