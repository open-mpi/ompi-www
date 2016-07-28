<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 15:25:34 2008" -->
<!-- isoreceived="20080522192534" -->
<!-- sent="Thu, 22 May 2008 22:25:22 +0300" -->
<!-- isosent="20080522192522" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="4835C8A2.7080404_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6A38FFF1-6043-4745-9513-2BC011C65E7B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 15:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3995.php">Patrick Geoffray: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3993.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Driver doesn't support the HCA - If I remember correct , RH40 by 
</span><br>
<span class="quotelev2">&gt;&gt; default doesn't support ConnectX hca . The device_list will be empty. 
</span><br>
<span class="quotelev2">&gt;&gt; It is very exotic case.
</span><br>
<span class="quotelev2">&gt;&gt; 2. Driver version doesn't correspond with fw version
</span><br>
<span class="quotelev2">&gt;&gt; 3. FW was broken
</span><br>
<span class="quotelev2">&gt;&gt; 4. Driver was broken and failed to start - it is not very exotic case 
</span><br>
<span class="quotelev2">&gt;&gt; too. Some times user make some modification - upgrade/install/etc.. 
</span><br>
<span class="quotelev2">&gt;&gt; and it brakes driver.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  In such cases, the ibv_devinfo(1) and ibv_devices(1) commands would 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; show the same error.
</span><br>
<span class="quotelev2">&gt;&gt; Yep these utilities will show the same error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cases 1-2-3 we may cover pretty simple. OPENIB driver creates 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/dev/infiniband&quot; during his startup. So if  /dev/infiniband exists 
</span><br>
<span class="quotelev2">&gt;&gt; and  _get_device_list() is empty we may print warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, that seems reasonable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how we can cover case 4 :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the user makes modifications to the driver and breaks it, I don't 
</span><br>
<span class="quotelev1">&gt; think we can be held responsible for that -- prudence declares that 
</span><br>
<span class="quotelev1">&gt; you should verify that your [self-modified] driver is not broken first 
</span><br>
<span class="quotelev1">&gt; before blaming Open MPI.  I'm not that concerned about #4; most of my 
</span><br>
<span class="quotelev1">&gt; customers do not modify the drivers.
</span><br>
Agree about #4.
<br>
<p>The check for /dev/infiniband should be simple and I think we can add it 
<br>
to 1.3 .
<br>
<p>Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3995.php">Patrick Geoffray: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3993.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
