<?
$subject_val = "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 11:51:27 2016" -->
<!-- isoreceived="20160215165127" -->
<!-- sent="Mon, 15 Feb 2016 16:51:25 +0000" -->
<!-- isosent="20160215165125" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program" -->
<!-- id="87oabhzzle.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAGKz=uLWKmN1uf6+yt7eQe9Hf0z21UFO4wUfCeDzMPF2sbDdVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-15 11:51:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28533.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Previous message:</strong> <a href="28531.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="28526.php">Jeff Hammond: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28533.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Reply:</strong> <a href="28533.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; You can rely upon e.g. <a href="https://www.mpich.org/abi/">https://www.mpich.org/abi/</a> when redistributing MPI
</span><br>
<span class="quotelev1">&gt; binaries built with MPICH, but a better option would be to wrap all of your
</span><br>
<span class="quotelev1">&gt; MPI code in an implementation-agnostic wrapper and then ship a binary that
</span><br>
<span class="quotelev1">&gt; can dlopen a different version wrapper depending on which MPI
</span><br>
<span class="quotelev1">&gt; implementation the user has.  That would allow you to ship a single binary
</span><br>
<span class="quotelev1">&gt; that could use both MPICH and OpenMPI.
</span><br>
<p>I don't know how it works with MPICH, but in OMPI don't you need all of
<br>
the submitting orterun, the linked libraries, and the target ORTE to be
<br>
compatible, which a wrapper would need to know?  [How is the Fortran ABI
<br>
fixed anyhow?]
<br>
<p>I don't think there's a check on that currently, which would be useful
<br>
if the info can be propagated.  There have been issues on the list due
<br>
to host and target ORTE being different, and I've seen them locally.
<br>
Producing a clear error with incompatible components (to the extent it's
<br>
possible) could save confusion.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28533.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Previous message:</strong> <a href="28531.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="28526.php">Jeff Hammond: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28533.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Reply:</strong> <a href="28533.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
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
