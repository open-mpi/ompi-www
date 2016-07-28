<?
$subject_val = "Re: [OMPI users] Open MPI programs with autoconf/automake?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 23:21:37 2008" -->
<!-- isoreceived="20081111042137" -->
<!-- sent="Tue, 11 Nov 2008 13:21:22 +0900" -->
<!-- isosent="20081111042122" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI programs with autoconf/automake?" -->
<!-- id="49190842.1080401_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081110114147.GO20100_at_brakk.ethz.ch" -->
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
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 23:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7272.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>In reply to:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7240.php">Nuno Sucena Almeida: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jed,
<br>
<p>Thank you for your post; I have to admit that I never thought of this as 
<br>
an option.  As the &quot;other way&quot; [which Jeff has posted] is more natural 
<br>
to me, I will probably try for that first -- but I'll keep what you 
<br>
posted in the back of my mind.
<br>
<p>Thanks a lot!
<br>
<p>Ray
<br>
<p><p><p>Jed Brown wrote:
<br>
<span class="quotelev1">&gt; On Mon 2008-11-10 12:35, Raymond Wan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; With #define's and compiler flags, I think that can be  easily done --  
</span><br>
<span class="quotelev2">&gt;&gt; was wondering if this is something that developers using MPI do and  
</span><br>
<span class="quotelev2">&gt;&gt; whether AC/AM  supports it.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The normal way to do this is by building against a serial implementation
</span><br>
<span class="quotelev1">&gt; of MPI.  Lots of parallel numerical libraries bundle such an
</span><br>
<span class="quotelev1">&gt; implementation so you could just grab one of those.  For example, see
</span><br>
<span class="quotelev1">&gt; PETSc's mpiuni ($PETSC_DIR/include/mpiuni/mpi.h and
</span><br>
<span class="quotelev1">&gt; $PETSC_DIR/src/sys/mpiuni/mpi.c) which implements many MPI calls as
</span><br>
<span class="quotelev1">&gt; macros.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that your serial implementation only needs to provide the subset of
</span><br>
<span class="quotelev1">&gt; MPI that your program actually uses.  For instance, if you never send
</span><br>
<span class="quotelev1">&gt; messages to yourself, you can implement MPI_Send as MPI_Abort since it
</span><br>
<span class="quotelev1">&gt; should never be called in serial.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7272.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>In reply to:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7240.php">Nuno Sucena Almeida: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
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
