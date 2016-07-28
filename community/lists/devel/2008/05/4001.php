<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 16:19:15 2008" -->
<!-- isoreceived="20080522201915" -->
<!-- sent="Thu, 22 May 2008 16:19:05 -0400" -->
<!-- isosent="20080522201905" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="7B5632A4-3CBD-4825-88C5-76D838D45029_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080522200701.GA32142_at_master.debian.org" -->
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
<strong>Date:</strong> 2008-05-22 16:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4000.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4000.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4006.php">Gleb Natapov: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2008, at 4:07 PM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; Is there a test I could run for you?
</span><br>
<p>Can you see if /dev/infiniband exists?  If it does, the OpenFabrics  
<br>
kernel drivers are running.  If not, they aren't.
<br>
<p><span class="quotelev1">&gt; Also, if this test depends on the Debian kernel packages, then we're
</span><br>
<span class="quotelev1">&gt; back to square one as some folks (like myself) run binary kernels,
</span><br>
<span class="quotelev1">&gt; other may just hand-compile and this test may not work as we may miss
</span><br>
<span class="quotelev1">&gt; the 'Debian trigger' in those cases.
</span><br>
<p><p>The OpenFabrics kernel drivers are implemented as kernel modules, so  
<br>
it's mainly just a question of loading them it to start them running.   
<br>
For example, in the official OFED distribution, it comes with /etc/ 
<br>
init.d/openibd -- &quot;start&quot; loads the kernel modules and does all the  
<br>
necessary initialization, &quot;stop&quot; unloads everything, etc.
<br>
<p>So if you have this init.d file, perhaps it's a question of checking  
<br>
the chkconfig levels upon installation...?
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
<li><strong>Next message:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4000.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4000.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4006.php">Gleb Natapov: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
