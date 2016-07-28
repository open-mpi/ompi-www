<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 07:31:05 2008" -->
<!-- isoreceived="20080522113105" -->
<!-- sent="Thu, 22 May 2008 07:30:53 -0400" -->
<!-- isosent="20080522113053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="E1354CA3-38FF-46A2-B582-0A277FCCFAFA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48353C52.2010702_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-05-22 07:30:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3983.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3981.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2008, at 5:26 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Ok, we will have own warning mechanism. But we still open question,  
</span><br>
<span class="quotelev1">&gt; Will
</span><br>
<span class="quotelev1">&gt; we show (by default) error message in case
</span><br>
<span class="quotelev1">&gt; when libibverbs exists but it is no hca in the hca_list ?
</span><br>
<span class="quotelev1">&gt; I think we should show the error. The problem of libibverbs default
</span><br>
<span class="quotelev1">&gt; install is relevant only  for
</span><br>
<span class="quotelev1">&gt; binary distribution, that install all ompi dependences with ompi
</span><br>
<span class="quotelev1">&gt; package. In this case
</span><br>
<span class="quotelev1">&gt; distribution will have openib mca parameter that will allow to disable
</span><br>
<span class="quotelev1">&gt; by default the warning message
</span><br>
<span class="quotelev1">&gt; during ompi package install (or build).
</span><br>
<span class="quotelev1">&gt; I guess that most people still install ompi from sources. And in this
</span><br>
<span class="quotelev1">&gt; case it sound reasonable for me
</span><br>
<span class="quotelev1">&gt; to print this &quot;no hca&quot;  warning it openib btl was build.
</span><br>
<p><p>I'm not sure I follow this logic -- can you explain more?
<br>
<p>Why does this only apply to binary distribution?  If libibverbs is  
<br>
installed by default, then OMPI will still build the openib BTL (and  
<br>
therefore warn if it's not used).  Granted, some distros will only  
<br>
install libibverbs if either explicitly or implicitly requested (e.g.,  
<br>
via dependency).  What if some other dependency pulls in libibverbs,  
<br>
even if OMPI was built from a source tarball?
<br>
<p>Let me ask another question: is it common to have the verbs stack /  
<br>
hardware so hosed up that ibv_get_device_list() returns an empty list  
<br>
when there really is a device there?  My assumption is that this is  
<br>
quite uncommon; that ibv_get_device_list() will usually return that  
<br>
there *are* devices and errors show up later during initialization,  
<br>
etc.  Never say &quot;never&quot;, of course; I'm sure that there are degenerate  
<br>
corner cases where a badly hosed device will cause  
<br>
ibv_get_device_list() to return an empty list -- but I'm assuming that  
<br>
those cases are very few and far between.  In such cases, the  
<br>
ibv_devinfo(1) and ibv_devices(1) commands would show the same error.
<br>
<p>Keep in mind that I'm *only* talking about disabling the default  
<br>
warning from the openib btl when ibv_get_device_list() returns an  
<br>
empty list (and there will be an option to enable it if you want,  
<br>
which we can set via OFED/other packaging for those who want/need  
<br>
it).  All other warnings/errors will remain exactly as they are.
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
<li><strong>Next message:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3983.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3981.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
