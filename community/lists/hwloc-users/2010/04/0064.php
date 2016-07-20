<?
$subject_val = "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 01:35:18 2010" -->
<!-- isoreceived="20100429053518" -->
<!-- sent="Thu, 29 Apr 2010 07:35:12 +0200" -->
<!-- isosent="20100429053512" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor" -->
<!-- id="4BD91A90.8030205_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BD8F223.6090204_at_cse.ohio-state.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 01:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>Previous message:</strong> <a href="0063.php">Hao Wang: "[hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>In reply to:</strong> <a href="0063.php">Hao Wang: "[hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>Reply:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Somebody already reported a similar problem. If I remember correctly, it
<br>
was kernel bug. /sys/devices/system/cpu*/cache/index*/ contains
<br>
erroneous virtual files. You should upgrade to a more recent kernel.
<br>
<p>In the vast majority of cases, hwloc does nothing but reading what the
<br>
kernel says anyway.
<br>
<p>Brice
<br>
<p><p><p><p>On 29/04/2010 04:42, Hao Wang wrote:
<br>
<span class="quotelev1">&gt; Hi guys
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use hwloc-1.0rc1 on AMD Barcelona machine (AMD Opteron Processor
</span><br>
<span class="quotelev1">&gt; 8350). But, it looks like hwloc-1.0rc1 detects my machine with a problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lstopo command output information is below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (16GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode #0 (phys=0 4015MB) + Socket #0
</span><br>
<span class="quotelev1">&gt;     L3 #0 (2048KB) + L2 #0 (512KB) + L1 #0 (512KB) + Core #0 + PU #0
</span><br>
<span class="quotelev1">&gt; (phys=0)
</span><br>
<span class="quotelev1">&gt;     L3 #1 (2048KB) + L2 #1 (512KB) + L1 #1 (512KB) + Core #1 + PU #1
</span><br>
<span class="quotelev1">&gt; (phys=1)
</span><br>
<span class="quotelev1">&gt;     L3 #2 (2048KB) + L2 #2 (512KB) + L1 #2 (512KB) + Core #2 + PU #2
</span><br>
<span class="quotelev1">&gt; (phys=2)
</span><br>
<span class="quotelev1">&gt;     L3 #3 (2048KB) + L2 #3 (512KB) + L1 #3 (512KB) + Core #3 + PU #3
</span><br>
<span class="quotelev1">&gt; (phys=3)
</span><br>
<span class="quotelev1">&gt;   NUMANode #1 (phys=1 4040MB) + Socket #1
</span><br>
<span class="quotelev1">&gt;     L3 #4 (2048KB) + L2 #4 (512KB) + L1 #4 (512KB) + Core #4 + PU #4
</span><br>
<span class="quotelev1">&gt; (phys=4)
</span><br>
<span class="quotelev1">&gt;     L3 #5 (2048KB) + L2 #5 (512KB) + L1 #5 (512KB) + Core #5 + PU #5
</span><br>
<span class="quotelev1">&gt; (phys=5)
</span><br>
<span class="quotelev1">&gt;     L3 #6 (2048KB) + L2 #6 (512KB) + L1 #6 (512KB) + Core #6 + PU #6
</span><br>
<span class="quotelev1">&gt; (phys=6)
</span><br>
<span class="quotelev1">&gt;     L3 #7 (2048KB) + L2 #7 (512KB) + L1 #7 (512KB) + Core #7 + PU #7
</span><br>
<span class="quotelev1">&gt; (phys=7)
</span><br>
<span class="quotelev1">&gt;   NUMANode #2 (phys=2 4040MB) + Socket #2
</span><br>
<span class="quotelev1">&gt;     L3 #8 (2048KB) + L2 #8 (512KB) + L1 #8 (512KB) + Core #8 + PU #8
</span><br>
<span class="quotelev1">&gt; (phys=8)
</span><br>
<span class="quotelev1">&gt;     L3 #9 (2048KB) + L2 #9 (512KB) + L1 #9 (512KB) + Core #9 + PU #9
</span><br>
<span class="quotelev1">&gt; (phys=9)
</span><br>
<span class="quotelev1">&gt;     L3 #10 (2048KB) + L2 #10 (512KB) + L1 #10 (512KB) + Core #10 + PU
</span><br>
<span class="quotelev1">&gt; #10 (phys=10)
</span><br>
<span class="quotelev1">&gt;     L3 #11 (2048KB) + L2 #11 (512KB) + L1 #11 (512KB) + Core #11 + PU
</span><br>
<span class="quotelev1">&gt; #11 (phys=11)
</span><br>
<span class="quotelev1">&gt;   NUMANode #3 (phys=3 4040MB) + Socket #3
</span><br>
<span class="quotelev1">&gt;     L3 #12 (2048KB) + L2 #12 (512KB) + L1 #12 (512KB) + Core #12 + PU
</span><br>
<span class="quotelev1">&gt; #12 (phys=12)
</span><br>
<span class="quotelev1">&gt;     L3 #13 (2048KB) + L2 #13 (512KB) + L1 #13 (512KB) + Core #13 + PU
</span><br>
<span class="quotelev1">&gt; #13 (phys=13)
</span><br>
<span class="quotelev1">&gt;     L3 #14 (2048KB) + L2 #14 (512KB) + L1 #14 (512KB) + Core #14 + PU
</span><br>
<span class="quotelev1">&gt; #14 (phys=14)
</span><br>
<span class="quotelev1">&gt;     L3 #15 (2048KB) + L2 #15 (512KB) + L1 #15 (512KB) + Core #15 + PU
</span><br>
<span class="quotelev1">&gt; #15 (phys=15)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure whether hwloc gave out the correct information. From my
</span><br>
<span class="quotelev1">&gt; understanding, L3 cache should be shared by for cores in each socket;
</span><br>
<span class="quotelev1">&gt; and L1 cache size shouldn't be 512KB. Are there somebody to confirm it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Hao
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>Previous message:</strong> <a href="0063.php">Hao Wang: "[hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>In reply to:</strong> <a href="0063.php">Hao Wang: "[hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>Reply:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
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
