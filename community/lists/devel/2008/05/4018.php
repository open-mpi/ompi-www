<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 12:55:46 2008" -->
<!-- isoreceived="20080523165546" -->
<!-- sent="Fri, 23 May 2008 09:55:41 -0700" -->
<!-- isosent="20080523165541" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="adar6btufhu.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CC2DF84E-1CAA-4CE2-90BF-16A7FA5E79D0_at_cisco.com" -->
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
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 12:55:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4019.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>In reply to:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4022.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; OFED is one distribution of the OpenFabrics software.  It can be  
</span><br>
<span class="quotelev1"> &gt; bundled up and packaged differently, too.  I suspect that Debian does  
</span><br>
<span class="quotelev1"> &gt; not include OFED directly, because OFED is pretty heavily dependent  
</span><br>
<span class="quotelev1"> &gt; upon RPM.  So the OpenFabrics kernel bits must be there somewhere  
</span><br>
<span class="quotelev1"> &gt; (libibverbs would be useless, otherwise); it would be nice to  
</span><br>
<span class="quotelev1"> &gt; understand how they are activated: either manually or automatically.
</span><br>
<p>&quot;OpenFabrics kernel bits&quot; doesn't really make sense.  Debian just ships
<br>
a Linux kernel, which has InfiniBand/RDMA drivers.
<br>
<p>Debian doesn't load the ib_uverbs module by default, nor should it,
<br>
since the vast majority of users don't have RDMA hardware.  So
<br>
libibverbs and Open MPI should act sanely when no kernel drivers are
<br>
loaded, /sys/class/infinibad_verbs doesn't exist, etc.
<br>
<p>There is already a Debian bug open about this for libibverbs:
<br>
<a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=418014">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=418014</a>
<br>
<p>I've been meaning to work on this but sadly I have not been able to put
<br>
much time into it.
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4019.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>In reply to:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4022.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
