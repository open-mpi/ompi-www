<?
$subject_val = "Re: [OMPI users] Pros and cons of --enable-heterogeneous";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 14:19:44 2010" -->
<!-- isoreceived="20101008181944" -->
<!-- sent="Fri, 8 Oct 2010 14:19:39 -0400" -->
<!-- isosent="20101008181939" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pros and cons of --enable-heterogeneous" -->
<!-- id="8FBB856E-F38A-4107-8FC0-07110D1E57A0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1286480662.28705.4.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pros and cons of --enable-heterogeneous<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-08 14:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14428.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Previous message:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14410.php">David Ronis: "[OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 7, 2010, at 3:44 PM, David Ronis wrote:
<br>
<p><span class="quotelev1">&gt; I have various boxes that run openmpi and I can't seem to use all of
</span><br>
<span class="quotelev1">&gt; them at once because they have different CPU's (e.g., pentiums, athlons
</span><br>
<span class="quotelev1">&gt; (both 32 bit) vs Intel I7 (64 bit)).  
</span><br>
<p>You could also just compile everything 32 bit, and then not use the heterogeneous flag.
<br>
<p><span class="quotelev1">&gt; I'm about the build 1.4.3 and was
</span><br>
<span class="quotelev1">&gt; wondering if I should add --enable-heterogenous to the configure flags.
</span><br>
<p>Keep in mind that you may still lose precision if you, for example, send a 64 MPI_DOUBLE to a machine where MPI_DOUBLE is 32 bit.  There's not too much that OMPI can do there.
<br>
<p>The heterogeneous flag is more traditionally used for endian flipping kinds of things.
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
<li><strong>Next message:</strong> <a href="14428.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Previous message:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14410.php">David Ronis: "[OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
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
