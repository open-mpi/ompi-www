<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 09:50:06 2010" -->
<!-- isoreceived="20100903135006" -->
<!-- sent="Fri, 03 Sep 2010 15:50:00 +0200" -->
<!-- isosent="20100903135000" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="4C80FD08.1070303_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3E30988A-AAC0-4A16-8E90-C3AC8A4B1592_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2010-09-03 09:50:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8458.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8458.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8458.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/09/2010 15:38, George Bosilca a &#233;crit :
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you will have to revert this patch as the btl_bandwidth __IS__ supposed to be in Mbs and not MBs. We usually talk about networks in Mbs (there is a pattern in Ethernet 1G/10G, Myricom 10G). In addition the original design of the multi-rail was based on this assumption, and the multi-rail handling code deal with these values (at that level I don't think it really matters, but at least it needs consistent values from all BTLs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, going over the existing BTLs I can see that some BTLs do not correctly set this value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTL     Bandwidth        Auto-detect     Status
</span><br>
<span class="quotelev1">&gt; Elan    2000                NO           Correct
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>2000 looks strange to me. Last time I played with Elan4, bandwidth was
<br>
900MB/s or so.
<br>
<p><span class="quotelev1">&gt; GM      250                 NO           Doubtful
</span><br>
<span class="quotelev1">&gt; MX      2000/10000          YES (Mbs)    Correct (before the patch)
</span><br>
<span class="quotelev1">&gt; OFUD    800                 NO           Doubtful
</span><br>
<span class="quotelev1">&gt; OpenIB  2000/4000/8000      YES (Mbs)    Correct (multiplied by the active_width)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I found the problem when using both MX and OpenIB at the same time, so
<br>
they can't be both wrong or both correct. IB was reporting 800, not
<br>
2000/4000/8000. Maybe because auto-detect didn't work and the default is
<br>
wrong:
<br>
btl_openib_mca.c:527:    mca_btl_openib_module.super.btl_bandwidth = 800;
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8458.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8458.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8458.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
