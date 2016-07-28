<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 07:21:12 2008" -->
<!-- isoreceived="20080522112112" -->
<!-- sent="Thu, 22 May 2008 07:21:02 -0400" -->
<!-- isosent="20080522112102" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="EFE7C7D1-DE42-4FC7-8FA7-70247EA06A24_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48355008.3030501_at_sun.com" -->
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
<strong>Date:</strong> 2008-05-22 07:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2008, at 6:50 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Brian and I chatted a bit about this off-list, and I think we're in
</span><br>
<span class="quotelev2">&gt;&gt; agreement now:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - do not change the default value or meaning of
</span><br>
<span class="quotelev2">&gt;&gt; btl_base_want_component_unsed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - major point of confusion: the openib BTL is actually fairly unique
</span><br>
<span class="quotelev2">&gt;&gt; in that it can (and does) tell the difference between &quot;there are no
</span><br>
<span class="quotelev2">&gt;&gt; devices present&quot; and &quot;there are devices, but something went wrong&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Other BTL's have network interfaces that can't tell the difference  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; can *only* call the no_nics function, regardless of whether there are
</span><br>
<span class="quotelev2">&gt;&gt; no relevant network interfaces or some error occurred during
</span><br>
<span class="quotelev2">&gt;&gt; initialization.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - so a reasonable solution would be an openib-BTL-specific mechanism
</span><br>
<span class="quotelev2">&gt;&gt; that doesn't call the no_nics function (to display that
</span><br>
<span class="quotelev2">&gt;&gt; btl_base_want_component_unused) if there are no verbs-capable devices
</span><br>
<span class="quotelev2">&gt;&gt; found because of the fact that mainline Linuxes are starting to ship
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs.  Specific mechanism TBD; likely to be an openib MCA  
</span><br>
<span class="quotelev2">&gt;&gt; param.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; So, if you are delivering something similar to a BTL for myrinet you
</span><br>
<span class="quotelev1">&gt; will see the message but
</span><br>
<span class="quotelev1">&gt; the belief is this is necessary since there isn't enough granularity  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; the error reporting of the
</span><br>
<span class="quotelev1">&gt; device to feel comfortable enough as to whether the user want the  
</span><br>
<span class="quotelev1">&gt; device
</span><br>
<span class="quotelev1">&gt; to be used?
</span><br>
<p>The major difference here is that libmyriexpress is not being included  
<br>
in mainline Linux distributions.  Specifically: if you can find/use  
<br>
libmyriexpress, it's likely because you have that hardware.  The same  
<br>
*used* to be true for libibverbs, but is no longer true because Linux  
<br>
distros are now shipping (e.g., the Debian distribution pulls in  
<br>
libibverbs when you install Open MPI).
<br>
<p><span class="quotelev1">&gt; Won't udapl have a similar issue here or does it not get built by
</span><br>
<span class="quotelev1">&gt; default when OFED is built?
</span><br>
<p>We decided that under Linux, the udapl BTL does not get built by  
<br>
default (even if it could) because then an &quot;mpirun a.out&quot; by default  
<br>
would use both UDAPL and verbs, which is undesirable for several  
<br>
reasons.  There's Linux-specific logic to this effect in config/ 
<br>
ompi_check_udapl.m4.
<br>
<p><span class="quotelev1">&gt; FWIW, our distribution actually turns off  
</span><br>
<span class="quotelev1">&gt; btl_base_want_component_unused
</span><br>
<span class="quotelev1">&gt; because it seemed
</span><br>
<span class="quotelev1">&gt; the majority of our cases would be that users would false positive
</span><br>
<span class="quotelev1">&gt; sights of the message.
</span><br>
<p>Is the UDAPL library shipped in Solaris by default?  If so, then  
<br>
you're likely in exactly the same kind of situation that I'm  
<br>
describing.  The same will be true if Solaris ends up shipping  
<br>
libibverbs by default.
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
<li><strong>Next message:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
