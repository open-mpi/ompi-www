<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 10:26:23 2014" -->
<!-- isoreceived="20141111152623" -->
<!-- sent="Tue, 11 Nov 2014 15:26:22 +0000" -->
<!-- isosent="20141111152622" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF" -->
<!-- id="5054B785-9A48-415E-9545-076791900B3E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87tx25n6h6.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 10:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25750.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25768.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25768.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2014, at 9:43 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I haven't checked the source, but the commit message above says
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  If the Fortran compiler supports both INTERFACE and ISO_FORTRAN_ENV,
</span><br>
<span class="quotelev1">&gt;  then we'll build the MPI_SIZEOF interfaces.  If not, we'll skip
</span><br>
<span class="quotelev1">&gt;  MPI_SIZEOF in mpif.h and the mpi module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which implies it it's been removed for gcc &lt; 4.9, whereas it worked before.
</span><br>
<p>I'll update the README to be more clear.
<br>
<p><span class="quotelev2">&gt;&gt; Any chance I could convince you to submit a patch?  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe, but I don't really know what it should involve or whether it can
</span><br>
<span class="quotelev1">&gt; be done mechanically; I definitely don't have time to dissect the spec.
</span><br>
<span class="quotelev1">&gt; Actually, I'd have expected the API man pages to be reference versions,
</span><br>
<span class="quotelev1">&gt; shared across implementations, but MPICH's are different.
</span><br>
<p>Yeah, we don't actually share man pages.
<br>
<p>I think the main issue would be just to edit the *.3in pages here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/tree/master/ompi/mpi/man/man3">https://github.com/open-mpi/ompi/tree/master/ompi/mpi/man/man3</a>
<br>
<p>They're all native nroff format (they're .3in instead of .3 because we pre-process them during &quot;make&quot; to substitute things like the release date and version in).
<br>
<p>I'm guessing it would be a pretty mechanical kind of patch -- just adding Fortran interfaces at the top of each page.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25750.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25768.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25768.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
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
