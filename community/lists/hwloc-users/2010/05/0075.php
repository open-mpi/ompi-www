<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 16 15:44:21 2010" -->
<!-- isoreceived="20100516194421" -->
<!-- sent="Sun, 16 May 2010 21:44:15 +0200" -->
<!-- isosent="20100516194415" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="4BF04B0F.8030004_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201005142351.08507.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on systems with more than 64 cpus?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-16 15:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0074.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0074.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, there is no such limit. If you have 128cores, the cpuset string will
<br>
be 0xffffffff,0xffffffff,0xffffffff,0xffffffff
<br>
<p>As long as you have less than 1024 cores, everything should work fine.
<br>
For more than 1024, you'll need to rebuild with a manual change in the
<br>
source code, or wait for hwloc 1.1.
<br>
<p>Brice
<br>
<p><p><p><p>On 14/05/2010 23:51, Jirka Hladky wrote:
<br>
<span class="quotelev1">&gt; Thanks Samuel!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The data looks fine. hwloc rocks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume 
</span><br>
<span class="quotelev1">&gt; --cpuset
</span><br>
<span class="quotelev1">&gt; option (lstopo command)
</span><br>
<span class="quotelev1">&gt; is not supported on such systems, right? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is that cpuset masks works only upto 64 cores. Is it correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday 14 May 2010 08:06:12 pm Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres, le Fri 14 May 2010 09:09:44 -0400, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe that Brice / Samuel (the two main developers) have tested hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on an old Altix 4700 with 256 itanium cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have their exact results, and I don't see them on IM right now,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I don't know if they're around today or not...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; It was tested on a 256 core itanium machine, see
</span><br>
<span class="quotelev2">&gt;&gt; tests/linux/256ia64-64n2s2c.tar.gz.output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0074.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0074.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0076.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
