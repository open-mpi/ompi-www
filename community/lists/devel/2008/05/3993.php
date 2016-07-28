<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 13:23:51 2008" -->
<!-- isoreceived="20080522172351" -->
<!-- sent="Thu, 22 May 2008 13:23:41 -0400" -->
<!-- isosent="20080522172341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="6A38FFF1-6043-4745-9513-2BC011C65E7B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48359702.30307_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-05-22 13:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3994.php">Jeff Squyres: "Re: [OMPI devel] Documentation update"</a>
<li><strong>Previous message:</strong> <a href="3992.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2008, at 11:53 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; 1. Driver doesn't support the HCA - If I remember correct , RH40 by  
</span><br>
<span class="quotelev1">&gt; default doesn't support ConnectX hca . The device_list will be  
</span><br>
<span class="quotelev1">&gt; empty. It is very exotic case.
</span><br>
<span class="quotelev1">&gt; 2. Driver version doesn't correspond with fw version
</span><br>
<span class="quotelev1">&gt; 3. FW was broken
</span><br>
<span class="quotelev1">&gt; 4. Driver was broken and failed to start - it is not very exotic  
</span><br>
<span class="quotelev1">&gt; case too. Some times user make some modification - upgrade/install/ 
</span><br>
<span class="quotelev1">&gt; etc.. and it brakes driver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  In such cases, the ibv_devinfo(1) and ibv_devices(1) commands  
</span><br>
<span class="quotelev2">&gt;&gt; would show the same error.
</span><br>
<span class="quotelev1">&gt; Yep these utilities will show the same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cases 1-2-3 we may cover pretty simple. OPENIB driver creates &quot;/dev/ 
</span><br>
<span class="quotelev1">&gt; infiniband&quot; during his startup. So if  /dev/infiniband exists and   
</span><br>
<span class="quotelev1">&gt; _get_device_list() is empty we may print warning.
</span><br>
<p>Ok, that seems reasonable.
<br>
<p><span class="quotelev1">&gt; I don't know how we can cover case 4 :-(
</span><br>
<p>If the user makes modifications to the driver and breaks it, I don't  
<br>
think we can be held responsible for that -- prudence declares that  
<br>
you should verify that your [self-modified] driver is not broken first  
<br>
before blaming Open MPI.  I'm not that concerned about #4; most of my  
<br>
customers do not modify the drivers.
<br>
<p><span class="quotelev1">&gt; BTW I think that problem is relevant for all BTLs and not only  
</span><br>
<span class="quotelev1">&gt; openib and may be we need look for some global solution.
</span><br>
<p><p>Brian's solution was reasonable; perhaps just adding a flag to the  
<br>
existing no_nics function.
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
<li><strong>Next message:</strong> <a href="3994.php">Jeff Squyres: "Re: [OMPI devel] Documentation update"</a>
<li><strong>Previous message:</strong> <a href="3992.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
