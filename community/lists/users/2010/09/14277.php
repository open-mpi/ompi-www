<?
$subject_val = "Re: [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 09:08:10 2010" -->
<!-- isoreceived="20100922130810" -->
<!-- sent="Wed, 22 Sep 2010 09:07:53 -0400" -->
<!-- isosent="20100922130753" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..." -->
<!-- id="980548E3-4940-425D-9D4B-3C3D3ED5EDDC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E9838FE224683419F586D9DF46A0E25B05422FBFA_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 09:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14278.php">Richard Walsh: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11	upgrade ..."</a>
<li><strong>Previous message:</strong> <a href="14276.php">Jeff Squyres: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14244.php">Richard Walsh: "[OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14278.php">Richard Walsh: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11	upgrade ..."</a>
<li><strong>Reply:</strong> <a href="14278.php">Richard Walsh: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11	upgrade ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2010, at 1:20 PM, Richard Walsh wrote:
<br>
<p><span class="quotelev1">&gt; I was not expecting things to work, and find that codes compiled using
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.1 commands under SLES 10.2 produce the following message
</span><br>
<span class="quotelev1">&gt; when run under SLES11:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open /share/apps/openmpi-intel/1.4.1/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This file is in position and is NOT the result of a faulty mixed-release over-build
</span><br>
<span class="quotelev1">&gt; (things work great under SLES10.2).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The message indicates that (as the default is to build OpenMPI dynamically
</span><br>
<span class="quotelev1">&gt; with share objects) in loading this required IB-related library there must
</span><br>
<span class="quotelev1">&gt; be a format incompatibility.   However, I find that if I force the use of GE with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; things seem to run OK under SLES 11.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could someone add some detail here on what, if anything, I can expect to
</span><br>
<span class="quotelev1">&gt; work when we try to run old SLES 10.2 build OpenMPI 1.4.1 binaries under
</span><br>
<span class="quotelev1">&gt; SLES 11.   I would have thought NOTHING, but maybe that is not quite right.
</span><br>
<p>I do not have any experience with SLES, so I can't comment for sure.  But I'd *guess* that there was a symbol change between 10.2 and 11 in the OpenFabrics libraries such that the openib BTL is unable to find a symbol that it needs.  Another possibility is the dependent libraries of libibverbs.so changed (e.g., perhaps libibverbs.so required -lsysfs in 10.2, but then libsysfs.so doesn't exist in 11...?).  Does the SLES release notes say anything about binary compatibility (particularly of the OpenFabrics libraries) between SLES 10.2 and 11?
<br>
<p>I'm quite sure that recompiling all of OMPI should make it work -- I'd be very surprised if the OpenFabrics libraries in SLES 11 were inconsistent such that you couldn't just rebuild and have it work.
<br>
<p>You may be able to recompile *just the openib BTL module* on SLES 11, drop it in your OMPI 1.4.2 installation, and have it work again.  But that's not a guarantee -- other things may have changed such that a recompile may change some struct sizes or somesuch.  
<br>
<p>Probably your best bet would be:
<br>
<p>- investigate if there's a missing symbol or library in the current mca_btl_openib.so (e.g., run nm on mca_btl_openib.so and ensure that all those libraries are present in SLES 11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- if it's a missing library, see if you can supply a dummy library to make it work (that may involve a little trickery)
<br>
- recompile OMPI 1.4.2 under SLES 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- copy in the mca_btl_openib.so from that install to your old OMPI install
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- run some apps and see if it works
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- if it does, relax, have a beer^H^H^H^Hnon-cafinated tea
<br>
- if it does not work, you may have to go the recompile-everything route
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14278.php">Richard Walsh: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11	upgrade ..."</a>
<li><strong>Previous message:</strong> <a href="14276.php">Jeff Squyres: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14244.php">Richard Walsh: "[OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14278.php">Richard Walsh: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11	upgrade ..."</a>
<li><strong>Reply:</strong> <a href="14278.php">Richard Walsh: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11	upgrade ..."</a>
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
