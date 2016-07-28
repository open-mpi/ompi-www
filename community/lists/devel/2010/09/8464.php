<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  8 08:02:54 2010" -->
<!-- isoreceived="20100908120254" -->
<!-- sent="Wed, 8 Sep 2010 14:02:49 +0200" -->
<!-- isosent="20100908120249" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="AF0150D5-65BB-4E92-B855-91E5D47331E9_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-08 08:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8463.php">Shamis, Pavel: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>In reply to:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2010, at 3:38 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; However, going over the existing BTLs I can see that some BTLs do not correctly set this value:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTL     Bandwidth        Auto-detect     Status
</span><br>
<span class="quotelev1">&gt; Elan    2000                NO           Correct
</span><br>
<span class="quotelev1">&gt; GM      250                 NO           Doubtful
</span><br>
<span class="quotelev1">&gt; MX      2000/10000          YES (Mbs)    Correct (before the patch)
</span><br>
<span class="quotelev1">&gt; OFUD    800                 NO           Doubtful
</span><br>
<span class="quotelev1">&gt; OpenIB  2000/4000/8000      YES (Mbs)    Correct (multiplied by the active_width)
</span><br>
<span class="quotelev1">&gt; Portals 1000                NO           Doubtful
</span><br>
<span class="quotelev1">&gt; SCTP    100                 NO           Conservative value (correct)
</span><br>
<span class="quotelev1">&gt; Self    100                 XXX          Correct (doesn't matter anyway)
</span><br>
<span class="quotelev1">&gt; SM      9000                NO           Correct
</span><br>
<span class="quotelev1">&gt; TCP     100                 NO           Conservative value (correct)
</span><br>
<span class="quotelev1">&gt; UDAPL   225                 NO           Incorrect
</span><br>
<p>Now that that patch has been rolled back out, did we come to conclusion here?
<br>
<p>- OFUD: why do we still even have this?
<br>
- Portals: does it matter if it gets it wrong?  No one will ever multi-rail with it.
<br>
- TCP: we can add auto-detect code for this (But doesn't have to be right away -- i.e., don't make 1.5.0 wait for it).
<br>
- UDAPL: I don't think anyone will multi-rail udapl with anything.
<br>
<p>Was the *real* problem that Brice's OpenFabrics bandwidth was auto-detected incorrectly somehow?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8463.php">Shamis, Pavel: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>In reply to:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8465.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
