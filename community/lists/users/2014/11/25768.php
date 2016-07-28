<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 10:10:07 2014" -->
<!-- isoreceived="20141112151007" -->
<!-- sent="Wed, 12 Nov 2014 15:09:56 +0000" -->
<!-- isosent="20141112150956" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF" -->
<!-- id="877fz0lakb.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5054B785-9A48-415E-9545-076791900B3E_at_cisco.com" -->
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
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 10:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="25749.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Yeah, we don't actually share man pages.
</span><br>
<p>I suppose it wouldn't save much anyhow at this stage of the game.
<br>
<p><span class="quotelev1">&gt; I think the main issue would be just to edit the *.3in pages here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/tree/master/ompi/mpi/man/man3">https://github.com/open-mpi/ompi/tree/master/ompi/mpi/man/man3</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They're all native nroff format (they're .3in instead of .3 because we pre-process them during &quot;make&quot; to substitute things like the release date and version in).
</span><br>
<p>Sure.
<br>
<p><span class="quotelev1">&gt; I'm guessing it would be a pretty mechanical kind of patch -- just adding Fortran interfaces at the top of each page.
</span><br>
<p>I'll try to take a look sometime and see if it actually is trivial.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="25749.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
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
