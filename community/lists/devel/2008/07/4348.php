<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 17:48:50 2008" -->
<!-- isoreceived="20080714214850" -->
<!-- sent="Mon, 14 Jul 2008 14:48:25 -0700" -->
<!-- isosent="20080714214825" -->
<!-- name="Sean Hefty" -->
<!-- email="sean.hefty_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="000701c8e5fb$57c9e3e0$9d37170a_at_amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="572936FD-BD6D-4E2A-969D-28C19F902D10_at_cisco.com" -->
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
<strong>From:</strong> Sean Hefty (<em>sean.hefty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 17:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;Ah!  I did not realize that there were other services on the machine
</span><br>
<span class="quotelev1">&gt;that were using / reserving IBCM service ID's.
</span><br>
<p>Intel MPI hit a similar problem a long, long time ago.
<br>
<p><span class="quotelev1">&gt;Is there a service ID range that is guaranteed to be available for
</span><br>
<span class="quotelev1">&gt;user apps?
</span><br>
<p>I need to check on this.  You may want to look at section A3.2.3 of the spec.
<br>
If you set the first byte (network order) to 0x00, and the 2nd byte to 0x01,
<br>
then you hit a 'reserved' range that probably isn't being used currently.
<br>
<p>If you don't care what the service ID is, you can specify 0, and the kernel will
<br>
assign one.  The assigned value can be retrieved by calling ib_cm_attr_id().
<br>
(I'm assuming that you communicate the IDs out of band somehow.)
<br>
<p>- Sean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
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
