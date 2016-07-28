<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  4 12:25:29 2010" -->
<!-- isoreceived="20100904162529" -->
<!-- sent="Sat, 04 Sep 2010 18:25:30 +0200" -->
<!-- isosent="20100904162530" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="4C8272FA.1010006_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="029D7491-E39B-4EB8-8CE8-A1C841E27304_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-04 12:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8463.php">Shamis, Pavel: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>Previous message:</strong> <a href="8461.php">Bogdan Costescu: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8458.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/09/2010 17:33, George Bosilca a &#233;crit :
<br>
<span class="quotelev3">&gt;&gt;&gt; GM      250                 NO           Doubtful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<p>This one should be 2000 (assuming nobody runs Myrinet 1280 from the 90s
<br>
anymore :))
<br>
<p><span class="quotelev3">&gt;&gt;&gt; MX      2000/10000          YES (Mbs)    Correct (before the patch)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OFUD    800                 NO           Doubtful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenIB  2000/4000/8000      YES (Mbs)    Correct (multiplied by the active_width)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I found the problem when using both MX and OpenIB at the same time, so
</span><br>
<span class="quotelev2">&gt;&gt; they can't be both wrong or both correct. IB was reporting 800, not
</span><br>
<span class="quotelev2">&gt;&gt; 2000/4000/8000. Maybe because auto-detect didn't work and the default is
</span><br>
<span class="quotelev2">&gt;&gt; wrong:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_mca.c:527:    mca_btl_openib_module.super.btl_bandwidth = 800;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; It appears that Open IB only auto-detect the bandwidth if the value is explicitly set to zero via the mca parameters. As a last resort: as for the other devices you can set it manually. Use something like btl_openib_bandwidth_%dev_name% to set the bandwidth per device.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Ah thanks, it helps a lot. I added a similar mca parameter to tune the
<br>
MX/Open-MX bandwidth as well, and I can tune averything I want now.
<br>
<p>By the way, why is IB auto-detect disabled by default?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8463.php">Shamis, Pavel: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>Previous message:</strong> <a href="8461.php">Bogdan Costescu: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8458.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
