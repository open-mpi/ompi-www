<?
$subject_val = "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 17:59:15 2008" -->
<!-- isoreceived="20081027215915" -->
<!-- sent="Mon, 27 Oct 2008 17:59:09 -0400" -->
<!-- isosent="20081027215909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory" -->
<!-- id="5774AAE0-F94F-41EC-BFED-62E309AFE33D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1224864612.920.1280946849_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 17:59:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7108.php">Edgar Gabriel: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Previous message:</strong> <a href="7106.php">Jeff Squyres: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7089.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 24, 2008, at 12:10 PM, V. Ram wrote:
<br>
<p><span class="quotelev1">&gt; Resuscitating this thread...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, we spent some time testing the various options, and Leonardo's
</span><br>
<span class="quotelev1">&gt; suggestion seems to work!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We disabled TCP Segment Offloading on the e1000 NICs using &quot;ethtool -K
</span><br>
<span class="quotelev1">&gt; eth&lt;X&gt; tso off&quot; and this type of crash no longer happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this message can help anyone else experiencing the same issues.
</span><br>
<span class="quotelev1">&gt; Thanks Leonardo!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI devs: does this imply bug(s) in the e1000 driver/chip?  Should I
</span><br>
<span class="quotelev1">&gt; contact the driver authors?
</span><br>
<p>Maybe?  :-)
<br>
<p>I don't think that we do anything particularly whacky, TCP-wise -- we  
<br>
just open sockets and read/write plain vanilla data down the fd's.  So  
<br>
it might be worth contacting them and asking if there are any known  
<br>
issues...?
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
<li><strong>Next message:</strong> <a href="7108.php">Edgar Gabriel: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Previous message:</strong> <a href="7106.php">Jeff Squyres: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7089.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
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
