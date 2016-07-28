<?
$subject_val = "Re: [OMPI users] Open MPI programs with autoconf/automake?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 06:41:55 2008" -->
<!-- isoreceived="20081110114155" -->
<!-- sent="Mon, 10 Nov 2008 12:41:47 +0100" -->
<!-- isosent="20081110114147" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI programs with autoconf/automake?" -->
<!-- id="20081110114147.GO20100_at_brakk.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4917AC02.80303_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI programs with autoconf/automake?<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 06:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7254.php">Oleg V. Zhylin: "[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7255.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7255.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7271.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon 2008-11-10 12:35, Raymond Wan wrote:
<br>
<p><span class="quotelev1">&gt; One thing I was wondering about was whether it is possible, though the
</span><br>
<span class="quotelev1">&gt; use of #define's, to create code that is both multi-processor
</span><br>
<span class="quotelev1">&gt; (MPI/mpic++) and single-processor (normal g++).  That is, if users do
</span><br>
<span class="quotelev1">&gt; not have any MPI installed, it compiles it with g++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With #define's and compiler flags, I think that can be  easily done --  
</span><br>
<span class="quotelev1">&gt; was wondering if this is something that developers using MPI do and  
</span><br>
<span class="quotelev1">&gt; whether AC/AM  supports it.
</span><br>
<p>The normal way to do this is by building against a serial implementation
<br>
of MPI.  Lots of parallel numerical libraries bundle such an
<br>
implementation so you could just grab one of those.  For example, see
<br>
PETSc's mpiuni ($PETSC_DIR/include/mpiuni/mpi.h and
<br>
$PETSC_DIR/src/sys/mpiuni/mpi.c) which implements many MPI calls as
<br>
macros.
<br>
<p>Note that your serial implementation only needs to provide the subset of
<br>
MPI that your program actually uses.  For instance, if you never send
<br>
messages to yourself, you can implement MPI_Send as MPI_Abort since it
<br>
should never be called in serial.
<br>
<p>Jed
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7253/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7254.php">Oleg V. Zhylin: "[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7255.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7255.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7271.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
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
