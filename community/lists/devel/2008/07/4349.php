<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 18:49:50 2008" -->
<!-- isoreceived="20080714224950" -->
<!-- sent="Mon, 14 Jul 2008 18:49:42 -0400" -->
<!-- isosent="20080714224942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="F0C3A354-0183-47F2-BA5F-1E3016DABA5C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="000701c8e5fb$57c9e3e0$9d37170a_at_amr.corp.intel.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 18:49:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4350.php">Ralph Castain: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4352.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4352.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2008, at 5:48 PM, Sean Hefty wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Is there a service ID range that is guaranteed to be available for
</span><br>
<span class="quotelev2">&gt;&gt; user apps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to check on this.  You may want to look at section A3.2.3 of  
</span><br>
<span class="quotelev1">&gt; the spec.
</span><br>
<span class="quotelev1">&gt; If you set the first byte (network order) to 0x00, and the 2nd byte  
</span><br>
<span class="quotelev1">&gt; to 0x01,
</span><br>
<span class="quotelev1">&gt; then you hit a 'reserved' range that probably isn't being used  
</span><br>
<span class="quotelev1">&gt; currently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't care what the service ID is, you can specify 0, and the  
</span><br>
<span class="quotelev1">&gt; kernel will
</span><br>
<span class="quotelev1">&gt; assign one.  The assigned value can be retrieved by calling  
</span><br>
<span class="quotelev1">&gt; ib_cm_attr_id().
</span><br>
<span class="quotelev1">&gt; (I'm assuming that you communicate the IDs out of band somehow.)
</span><br>
<p><p>Ok; we'll need to check into this.  I don't remember the ordering --  
<br>
we might actually be communicating the IDs before calling  
<br>
ib_cm_listen() (since we were simply using the PIDs, we could do that).
<br>
<p>Thanks for the tip!  Pasha -- can you look into this?
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
<li><strong>Next message:</strong> <a href="4350.php">Ralph Castain: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4352.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4352.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
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
