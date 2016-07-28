<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 09:01:33 2008" -->
<!-- isoreceived="20080717130133" -->
<!-- sent="Thu, 17 Jul 2008 16:01:25 +0300" -->
<!-- isosent="20080717130125" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="487F42A5.6060604_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-17 09:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4374.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4372.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>In reply to:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sean Hefty wrote:
<br>
<span class="quotelev1">&gt; If you don't care what the service ID is, you can specify 0, and the kernel will
</span><br>
<span class="quotelev1">&gt; assign one.  The assigned value can be retrieved by calling ib_cm_attr_id().
</span><br>
<span class="quotelev1">&gt; (I'm assuming that you communicate the IDs out of band somehow.)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It is not zero, it should be:
<br>
#define IB_CM_ASSIGN_SERVICE_ID __cpu_to_be64(0x0200000000000000ULL)
<br>
<p>Unfortunately the value defined in kernel level IBCM and does not 
<br>
exposed to user level.
<br>
Can you please expose it to user level (infiniband/cm.h)
<br>
<p>Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4374.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4372.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>In reply to:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
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
