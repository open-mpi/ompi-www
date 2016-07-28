<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 08:12:26 2008" -->
<!-- isoreceived="20080522121226" -->
<!-- sent="Thu, 22 May 2008 08:11:54 -0400" -->
<!-- isosent="20080522121154" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="4835630A.2050902_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EFE7C7D1-DE42-4FC7-8FA7-70247EA06A24_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 08:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3983.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3989.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3989.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 22, 2008, at 6:50 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian and I chatted a bit about this off-list, and I think we're in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; agreement now:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - do not change the default value or meaning of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_base_want_component_unsed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - major point of confusion: the openib BTL is actually fairly unique
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in that it can (and does) tell the difference between &quot;there are no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devices present&quot; and &quot;there are devices, but something went wrong&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Other BTL's have network interfaces that can't tell the difference  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can *only* call the no_nics function, regardless of whether there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no relevant network interfaces or some error occurred during
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initialization.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - so a reasonable solution would be an openib-BTL-specific mechanism
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that doesn't call the no_nics function (to display that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_base_want_component_unused) if there are no verbs-capable devices
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found because of the fact that mainline Linuxes are starting to ship
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs.  Specific mechanism TBD; likely to be an openib MCA  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; param.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; So, if you are delivering something similar to a BTL for myrinet you
</span><br>
<span class="quotelev2">&gt;&gt; will see the message but
</span><br>
<span class="quotelev2">&gt;&gt; the belief is this is necessary since there isn't enough granularity  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; the error reporting of the
</span><br>
<span class="quotelev2">&gt;&gt; device to feel comfortable enough as to whether the user want the  
</span><br>
<span class="quotelev2">&gt;&gt; device
</span><br>
<span class="quotelev2">&gt;&gt; to be used?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The major difference here is that libmyriexpress is not being included  
</span><br>
<span class="quotelev1">&gt; in mainline Linux distributions.  Specifically: if you can find/use  
</span><br>
<span class="quotelev1">&gt; libmyriexpress, it's likely because you have that hardware.  The same  
</span><br>
<span class="quotelev1">&gt; *used* to be true for libibverbs, but is no longer true because Linux  
</span><br>
<span class="quotelev1">&gt; distros are now shipping (e.g., the Debian distribution pulls in  
</span><br>
<span class="quotelev1">&gt; libibverbs when you install Open MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, but there are distributions that do include the myrinet BTL/MTL (ie 
<br>
CT).  Though I agree
<br>
for the most part in the case of myrinet if you have libmyriexpress you 
<br>
probably will probably have
<br>
an operable interface.  I guess I am curious how many other BTLs a 
<br>
distribution might end up
<br>
delivering that could run into this reporting issue.  I guess my point 
<br>
is could this be worth something
<br>
more general instead of a one off for IB? 
<br>
<p>&nbsp;From my point of view the btl_warn_unused_components coupled with &quot;-mca 
<br>
btl ^mlfbtl&quot; works for
<br>
me.  However the fact that the IB vendors/community (ie CISCO) is 
<br>
solving this for their favorite interface
<br>
makes me pause for a moment.
<br>
<span class="quotelev2">&gt;&gt; Won't udapl have a similar issue here or does it not get built by
</span><br>
<span class="quotelev2">&gt;&gt; default when OFED is built?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We decided that under Linux, the udapl BTL does not get built by  
</span><br>
<span class="quotelev1">&gt; default (even if it could) because then an &quot;mpirun a.out&quot; by default  
</span><br>
<span class="quotelev1">&gt; would use both UDAPL and verbs, which is undesirable for several  
</span><br>
<span class="quotelev1">&gt; reasons.  There's Linux-specific logic to this effect in config/ 
</span><br>
<span class="quotelev1">&gt; ompi_check_udapl.m4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, that makes sense.
<br>
<span class="quotelev2">&gt;&gt; FWIW, our distribution actually turns off  
</span><br>
<span class="quotelev2">&gt;&gt; btl_base_want_component_unused
</span><br>
<span class="quotelev2">&gt;&gt; because it seemed
</span><br>
<span class="quotelev2">&gt;&gt; the majority of our cases would be that users would false positive
</span><br>
<span class="quotelev2">&gt;&gt; sights of the message.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the UDAPL library shipped in Solaris by default?  If so, then  
</span><br>
<span class="quotelev1">&gt; you're likely in exactly the same kind of situation that I'm  
</span><br>
<span class="quotelev1">&gt; describing.  The same will be true if Solaris ends up shipping  
</span><br>
<span class="quotelev1">&gt; libibverbs by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes the UDAPL library is shipped in Solaris by default.  Which is why we 
<br>
turn off
<br>
btl_warn_unused_components.  Yes, and I suspect once Solaris starts 
<br>
delivering libibverbs
<br>
we (Sun) will need to figure out how to handle having both the udapl and 
<br>
openib btls being
<br>
available.
<br>
<p><p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3983.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3989.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3989.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
