<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 15:35:14 2008" -->
<!-- isoreceived="20080522193514" -->
<!-- sent="Thu, 22 May 2008 15:35:03 -0400" -->
<!-- isosent="20080522193503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="1A8D0D5B-9FAA-4D22-888A-6325FECEAC4E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4835C8A2.7080404_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 15:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3998.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3998.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3998.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dirk / Debian guys --
<br>
<p>When you install binary OMPI (which pulls in libibverbs and all the  
<br>
rest), do you set the OpenFabrics kernel drivers to start upon boot?   
<br>
Or does the user have to do that manually?
<br>
<p>I ask because of the check Pasha proposes: if the user has started the  
<br>
OpenFabrics kernel drivers, it's ok for OMPI to print warning messages  
<br>
(this is better than the current: if libibverbs exists, it's ok for  
<br>
OMPI to print warning messages).
<br>
<p><p><p>On May 22, 2008, at 3:25 PM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Driver doesn't support the HCA - If I remember correct , RH40  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by default doesn't support ConnectX hca . The device_list will be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; empty. It is very exotic case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Driver version doesn't correspond with fw version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. FW was broken
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. Driver was broken and failed to start - it is not very exotic  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case too. Some times user make some modification - upgrade/install/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.. and it brakes driver.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In such cases, the ibv_devinfo(1) and ibv_devices(1) commands  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would show the same error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yep these utilities will show the same error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cases 1-2-3 we may cover pretty simple. OPENIB driver creates &quot;/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dev/infiniband&quot; during his startup. So if  /dev/infiniband exists  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and  _get_device_list() is empty we may print warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, that seems reasonable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know how we can cover case 4 :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the user makes modifications to the driver and breaks it, I  
</span><br>
<span class="quotelev2">&gt;&gt; don't think we can be held responsible for that -- prudence  
</span><br>
<span class="quotelev2">&gt;&gt; declares that you should verify that your [self-modified] driver is  
</span><br>
<span class="quotelev2">&gt;&gt; not broken first before blaming Open MPI.  I'm not that concerned  
</span><br>
<span class="quotelev2">&gt;&gt; about #4; most of my customers do not modify the drivers.
</span><br>
<span class="quotelev1">&gt; Agree about #4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The check for /dev/infiniband should be simple and I think we can  
</span><br>
<span class="quotelev1">&gt; add it to 1.3 .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3998.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3998.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3998.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
