<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 07:38:45 2008" -->
<!-- isoreceived="20080111123845" -->
<!-- sent="Fri, 11 Jan 2008 07:38:27 -0500" -->
<!-- isosent="20080111123827" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement" -->
<!-- id="65654E91-9484-4D27-A53E-0D40090C60D0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4785E2BC.3080104_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 07:38:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2964.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2008, at 4:17 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; This patch has been tested with IB and iWARP adapters on a 2 node  
</span><br>
<span class="quotelev2">&gt;&gt; system
</span><br>
<span class="quotelev2">&gt;&gt; (with it correctly choosing to use oob and happily ignoring iWARP
</span><br>
<span class="quotelev2">&gt;&gt; adapters).  It needs XRC testing and testing of larger node systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Did you run MTT over all thess changes ?
</span><br>
<span class="quotelev1">&gt; I have few machines with connectX and i will try to run MTT on Sunday.
</span><br>
<p><p>I just completed a rather large MTT run over all the same tests and  
<br>
variants that I run MTT on nightly tarballs every night.  All looked  
<br>
good.
<br>
<p>Be sure to test after r17112; there was a double free() fix at r17112  
<br>
that is necessary.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2964.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
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
