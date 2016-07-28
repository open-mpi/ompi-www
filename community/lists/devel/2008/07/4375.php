<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 13:34:48 2008" -->
<!-- isoreceived="20080717173448" -->
<!-- sent="Thu, 17 Jul 2008 10:34:32 -0700" -->
<!-- isosent="20080717173432" -->
<!-- name="Sean Hefty" -->
<!-- email="sean.hefty_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="000001c8e833$5fdb1ab0$9d37170a_at_amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="487F42A5.6060604_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-07-17 13:34:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4376.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4374.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4376.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4376.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;It is not zero, it should be:
</span><br>
<span class="quotelev1">&gt;#define IB_CM_ASSIGN_SERVICE_ID __cpu_to_be64(0x0200000000000000ULL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Unfortunately the value defined in kernel level IBCM and does not
</span><br>
<span class="quotelev1">&gt;exposed to user level.
</span><br>
<span class="quotelev1">&gt;Can you please expose it to user level (infiniband/cm.h)
</span><br>
<p>Oops - good catch.  I will add the assign ID and mask values to the header file
<br>
for the next release.  Until then, can you try using the values given in the
<br>
kernel header file and let me know if it solves the problem?
<br>
<p>- Sean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4376.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4374.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4376.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4376.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
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
