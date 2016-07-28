<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 17:30:47 2010" -->
<!-- isoreceived="20100903213047" -->
<!-- sent="Fri, 3 Sep 2010 23:30:38 +0200" -->
<!-- isosent="20100903213038" -->
<!-- name="Bogdan Costescu" -->
<!-- email="bcostescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="AANLkTiktgJh+BaydkinJuBdpXsV-cEgBjVNuYxV5F0Pv_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1FB3A925-5CDD-49CE-A910-28E6C5FE102D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] fix mx btl_bandwidth<br>
<strong>From:</strong> Bogdan Costescu (<em>bcostescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 17:30:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8462.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8460.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 3, 2010 at 3:47 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It might be worth having even a Linux-specific way to auto-detect, just for this use case (which is becoming more common -- 1GB LOM and a 10GB non-iWARP NIC).
</span><br>
<p>The file:
<br>
<p>/sys/class/net/ethX/speed
<br>
<p>should contain the current speed and is readable by any user; if it
<br>
contains 65535 there is no link so the speed is not defined. The
<br>
information should also be available through ethtool, but for root
<br>
only, which is not so useful in this case. The file might not always
<br>
exists, f.e. when /sys is not mounted, using an older kernel, the
<br>
driver doesn't expose this info, etc., but from what I understand this
<br>
is just a best effort to locate a realistic value.
<br>
<p>Cheers,
<br>
Bogdan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8462.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8460.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
