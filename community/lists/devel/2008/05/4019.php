<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 12:58:37 2008" -->
<!-- isoreceived="20080523165837" -->
<!-- sent="Fri, 23 May 2008 09:58:25 -0700" -->
<!-- isosent="20080523165825" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="adamymhufda.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080523065417.GA18904_at_minantech.com" -->
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
<strong>Date:</strong> 2008-05-23 12:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4020.php">George Bosilca: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Previous message:</strong> <a href="4018.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4006.php">Gleb Natapov: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; Either that or udev in not configured properly.
</span><br>
<p>Debian has a correct udev configuration, modulo
<br>
<p><a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=449081">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=449081</a>
<br>
<p><span class="quotelev1"> &gt; ib_core/mthca/mlx4 should be loaded automatically by hotplug if HW is
</span><br>
<span class="quotelev1"> &gt; present. No need for any additional configuration.
</span><br>
<p>Yes (although only mlx4_core and not mlx4_ib will be loaded based on PCI
<br>
IDs), but nothing loads ib_uverbs automatically, and systems that have
<br>
no RDMA hardware will obviously not have any RDMA drivers autoloaded.
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4020.php">George Bosilca: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Previous message:</strong> <a href="4018.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4006.php">Gleb Natapov: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
