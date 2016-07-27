<?
$subject_val = "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 13:56:58 2010" -->
<!-- isoreceived="20101220185658" -->
<!-- sent="Mon, 20 Dec 2010 19:56:52 +0100" -->
<!-- isosent="20101220185652" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5" -->
<!-- id="4D0FA6F4.5010508_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0FA30D.8020104_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 13:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1742.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Previous message:</strong> <a href="1740.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>In reply to:</strong> <a href="1740.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1742.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Reply:</strong> <a href="1742.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Reply:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/12/2010 19:40, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; Get  this singlethreaded process memory : expected 0x0000000f, got
</span><br>
<span class="quotelev1">&gt; 0xf...f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that a bug?
</span><br>
<span class="quotelev1">&gt; That's on my Fedora 13 non-numa system.
</span><br>
<p>This is kind of expected. 0x0000000f means all the cores in the machine.
<br>
0xf...f means all the machine when the machine isn't numa. It's hard to
<br>
make things strictly the same without loosing some semantics and keeping
<br>
things simple. Fortunately, your application won't see any actual
<br>
difference unless it actually compares full cpusets like above.
<br>
<p><span class="quotelev1">&gt; On my RHEL6.0 numa system,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Get  this singlethreaded process memory : expected 0x00ffffff, got
</span><br>
<span class="quotelev1">&gt; 0x0000003f
</span><br>
<p>In which section of hwloc_bind is this? Sometimes, the difference is
<br>
normal too because Linux doesn't exactly do what we want.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1742.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Previous message:</strong> <a href="1740.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>In reply to:</strong> <a href="1740.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1742.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Reply:</strong> <a href="1742.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Reply:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
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
