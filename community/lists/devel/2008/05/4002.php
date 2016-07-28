<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 16:31:00 2008" -->
<!-- isoreceived="20080522203100" -->
<!-- sent="Thu, 22 May 2008 20:30:52 +0000" -->
<!-- isosent="20080522203052" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="20080522203052.GA11663_at_master.debian.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7B5632A4-3CBD-4825-88C5-76D838D45029_at_cisco.com" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 16:30:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4003.php">George Bosilca: "[OMPI devel] r18481"</a>
<li><strong>Previous message:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4007.php">Gleb Natapov: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 22, 2008 at 04:19:05PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 22, 2008, at 4:07 PM, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there a test I could run for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you see if /dev/infiniband exists?  If it does, the OpenFabrics  
</span><br>
<span class="quotelev1">&gt; kernel drivers are running.  If not, they aren't.
</span><br>
<p>Negative -- I have no /dev/infiniband.  So his test idea seems
<br>
feasible which is nice!
<br>
<p><span class="quotelev2">&gt; &gt; Also, if this test depends on the Debian kernel packages, then we're
</span><br>
<span class="quotelev2">&gt; &gt; back to square one as some folks (like myself) run binary kernels,
</span><br>
<span class="quotelev2">&gt; &gt; other may just hand-compile and this test may not work as we may miss
</span><br>
<span class="quotelev2">&gt; &gt; the 'Debian trigger' in those cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OpenFabrics kernel drivers are implemented as kernel modules, so  
</span><br>
<span class="quotelev1">&gt; it's mainly just a question of loading them it to start them running.   
</span><br>
<span class="quotelev1">&gt; For example, in the official OFED distribution, it comes with /etc/ 
</span><br>
<p>Do you have any information whether OFED is in fact packaged for
<br>
Debian?  It may not be, and hence no file ...
<br>
<p><span class="quotelev1">&gt; init.d/openibd -- &quot;start&quot; loads the kernel modules and does all the  
</span><br>
<span class="quotelev1">&gt; necessary initialization, &quot;stop&quot; unloads everything, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if you have this init.d file, perhaps it's a question of checking  
</span><br>
<span class="quotelev1">&gt; the chkconfig levels upon installation...?
</span><br>
<p>Don't have it, but then again, my personal installation is in no way
<br>
authorative for all of Debian.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4003.php">George Bosilca: "[OMPI devel] r18481"</a>
<li><strong>Previous message:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4007.php">Gleb Natapov: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
