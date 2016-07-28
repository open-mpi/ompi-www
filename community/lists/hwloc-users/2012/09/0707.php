<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 03:56:24 2012" -->
<!-- isoreceived="20120907075624" -->
<!-- sent="Fri, 7 Sep 2012 09:56:19 +0200" -->
<!-- isosent="20120907075619" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="CAJNPZUWpn7qY58DO6MrXj=vEukjsrtCRcbmBu16StcuEq56x1w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5049A716.2060206_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread binding problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 03:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0708.php">Jeff Squyres: "[hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;did you gather this info during the sleep(10) after the failure before
</span><br>
<span class="quotelev1">&gt;the program exits ?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt;You likely need numa devel if you're configuring/building hwloc. The
</span><br>
<span class="quotelev1">&gt;summary at the end of the hwloc configure will tell you if memory
</span><br>
<span class="quotelev1">&gt;binding is supported or not, it mostly depends on numa devel.
</span><br>
<p>Ok!
<br>
<p><p>2012/9/7 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Le 07/09/2012 09:43, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Good,  you found the kernel limit that exceed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; proc/memfinfo reports as MemFree     47834588 kB
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; numactl -H:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; available: 2 nodes (0-1)
</span><br>
<span class="quotelev2">&gt; &gt; node 0 size: 24194 MB
</span><br>
<span class="quotelev2">&gt; &gt; node 0 free: 22702 MB
</span><br>
<span class="quotelev2">&gt; &gt; node 1 size: 24240 MB
</span><br>
<span class="quotelev2">&gt; &gt; node 1 free: 23997 MB
</span><br>
<span class="quotelev2">&gt; &gt; node distances:
</span><br>
<span class="quotelev2">&gt; &gt; node   0   1
</span><br>
<span class="quotelev2">&gt; &gt;   0:  10  21
</span><br>
<span class="quotelev2">&gt; &gt;   1:  21  10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did you gather this info during the sleep(10) after the failure before
</span><br>
<span class="quotelev1">&gt; the program exits ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another question. I'm trying the same code in another system, but
</span><br>
<span class="quotelev2">&gt; &gt; hwloc gives: &quot;Function not implemented&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Maybe because there isn't installed numa-devel package? Numa non devel
</span><br>
<span class="quotelev2">&gt; &gt; package il alreay installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You likely need numa devel if you're configuring/building hwloc. The
</span><br>
<span class="quotelev1">&gt; summary at the end of the hwloc configure will tell you if memory
</span><br>
<span class="quotelev1">&gt; binding is supported or not, it mostly depends on numa devel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0707/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0708.php">Jeff Squyres: "[hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
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
