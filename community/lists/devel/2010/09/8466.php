<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  8 09:44:05 2010" -->
<!-- isoreceived="20100908134405" -->
<!-- sent="Wed, 08 Sep 2010 09:43:40 -0400" -->
<!-- isosent="20100908134340" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="4C87930C.6050306_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C877CF7.5080307_at_inria.fr" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-08 09:43:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 9/8/2010 8:09 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 08/09/2010 14:02, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2010, at 3:38 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, going over the existing BTLs I can see that some BTLs do not correctly set this value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL     Bandwidth        Auto-detect     Status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Elan    2000                NO           Correct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GM      250                 NO           Doubtful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MX      2000/10000          YES (Mbs)    Correct (before the patch)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OFUD    800                 NO           Doubtful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenIB  2000/4000/8000      YES (Mbs)    Correct (multiplied by the active_width)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Portals 1000                NO           Doubtful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SCTP    100                 NO           Conservative value (correct)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Self    100                 XXX          Correct (doesn't matter anyway)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SM      9000                NO           Correct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP     100                 NO           Conservative value (correct)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; UDAPL   225                 NO           Incorrect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that that patch has been rolled back out, did we come to conclusion here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - OFUD: why do we still even have this?
</span><br>
<span class="quotelev2">&gt;&gt; - Portals: does it matter if it gets it wrong?  No one will ever multi-rail with it.
</span><br>
<span class="quotelev2">&gt;&gt; - TCP: we can add auto-detect code for this (But doesn't have to be right away -- i.e., don't make 1.5.0 wait for it).
</span><br>
<span class="quotelev2">&gt;&gt; - UDAPL: I don't think anyone will multi-rail udapl with anything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was the *real* problem that Brice's OpenFabrics bandwidth was auto-detected incorrectly somehow?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The first problem came from IB not autodetecting at all by default and
</span><br>
<span class="quotelev1">&gt; using 800Mbit/s instead. When forcing autodetect with mca parameters,
</span><br>
<span class="quotelev1">&gt; the bandwidth are not perfect but not too bad. When forcing IB manually
</span><br>
<span class="quotelev1">&gt; to the right bandwidth value, I can tweak things as needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
Just to provide some closure on the uDAPL side, we agree with Jeff's 
<br>
comment that we do not see any demand for multi-rail uDAPL with anything.
<br>
But, we will change the uDPAL number to something more reasonable.  
<br>
Still trying to select an appropriate value.
<br>
Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
