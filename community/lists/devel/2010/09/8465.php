<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  8 08:09:32 2010" -->
<!-- isoreceived="20100908120932" -->
<!-- sent="Wed, 08 Sep 2010 14:09:27 +0200" -->
<!-- isosent="20100908120927" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="4C877CF7.5080307_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AF0150D5-65BB-4E92-B855-91E5D47331E9_at_cisco.com" -->
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
<strong>Date:</strong> 2010-09-08 08:09:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8466.php">Rolf vandeVaart: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8466.php">Rolf vandeVaart: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8466.php">Rolf vandeVaart: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/09/2010 14:02, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 3, 2010, at 3:38 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; However, going over the existing BTLs I can see that some BTLs do not correctly set this value:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTL     Bandwidth        Auto-detect     Status
</span><br>
<span class="quotelev2">&gt;&gt; Elan    2000                NO           Correct
</span><br>
<span class="quotelev2">&gt;&gt; GM      250                 NO           Doubtful
</span><br>
<span class="quotelev2">&gt;&gt; MX      2000/10000          YES (Mbs)    Correct (before the patch)
</span><br>
<span class="quotelev2">&gt;&gt; OFUD    800                 NO           Doubtful
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB  2000/4000/8000      YES (Mbs)    Correct (multiplied by the active_width)
</span><br>
<span class="quotelev2">&gt;&gt; Portals 1000                NO           Doubtful
</span><br>
<span class="quotelev2">&gt;&gt; SCTP    100                 NO           Conservative value (correct)
</span><br>
<span class="quotelev2">&gt;&gt; Self    100                 XXX          Correct (doesn't matter anyway)
</span><br>
<span class="quotelev2">&gt;&gt; SM      9000                NO           Correct
</span><br>
<span class="quotelev2">&gt;&gt; TCP     100                 NO           Conservative value (correct)
</span><br>
<span class="quotelev2">&gt;&gt; UDAPL   225                 NO           Incorrect
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Now that that patch has been rolled back out, did we come to conclusion here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - OFUD: why do we still even have this?
</span><br>
<span class="quotelev1">&gt; - Portals: does it matter if it gets it wrong?  No one will ever multi-rail with it.
</span><br>
<span class="quotelev1">&gt; - TCP: we can add auto-detect code for this (But doesn't have to be right away -- i.e., don't make 1.5.0 wait for it).
</span><br>
<span class="quotelev1">&gt; - UDAPL: I don't think anyone will multi-rail udapl with anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was the *real* problem that Brice's OpenFabrics bandwidth was auto-detected incorrectly somehow?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The first problem came from IB not autodetecting at all by default and
<br>
using 800Mbit/s instead. When forcing autodetect with mca parameters,
<br>
the bandwidth are not perfect but not too bad. When forcing IB manually
<br>
to the right bandwidth value, I can tweak things as needed.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8466.php">Rolf vandeVaart: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8466.php">Rolf vandeVaart: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8466.php">Rolf vandeVaart: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
