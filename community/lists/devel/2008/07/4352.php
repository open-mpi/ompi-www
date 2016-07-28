<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 03:33:55 2008" -->
<!-- isoreceived="20080715073355" -->
<!-- sent="Tue, 15 Jul 2008 10:33:49 +0300" -->
<!-- isosent="20080715073349" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="487C52DD.30103_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F0C3A354-0183-47F2-BA5F-1E3016DABA5C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 03:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; I need to check on this.  You may want to look at section A3.2.3 of 
</span><br>
<span class="quotelev2">&gt;&gt; the spec.
</span><br>
<span class="quotelev2">&gt;&gt; If you set the first byte (network order) to 0x00, and the 2nd byte 
</span><br>
<span class="quotelev2">&gt;&gt; to 0x01,
</span><br>
<span class="quotelev2">&gt;&gt; then you hit a 'reserved' range that probably isn't being used 
</span><br>
<span class="quotelev2">&gt;&gt; currently.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you don't care what the service ID is, you can specify 0, and the 
</span><br>
<span class="quotelev2">&gt;&gt; kernel will
</span><br>
<span class="quotelev2">&gt;&gt; assign one.  The assigned value can be retrieved by calling 
</span><br>
<span class="quotelev2">&gt;&gt; ib_cm_attr_id().
</span><br>
<span class="quotelev2">&gt;&gt; (I'm assuming that you communicate the IDs out of band somehow.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok; we'll need to check into this.  I don't remember the ordering -- 
</span><br>
<span class="quotelev1">&gt; we might actually be communicating the IDs before calling 
</span><br>
<span class="quotelev1">&gt; ib_cm_listen() (since we were simply using the PIDs, we could do that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the tip!  Pasha -- can you look into this?
</span><br>
It looks that th modex message we are preparing during query stage, so 
<br>
the order looks ok.
<br>
Unfortunately on my machines ibcm module does not create 
<br>
&quot;/dev/infiniband/ucm*&quot; and I can not thest the functionality.
<br>
<p>Regards,
<br>
Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
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
