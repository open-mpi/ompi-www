<?
$subject_val = "Re: [OMPI users] Strange behaviour OpenMPI in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 07:21:52 2016" -->
<!-- isoreceived="20160125122152" -->
<!-- sent="Mon, 25 Jan 2016 12:21:51 +0000" -->
<!-- isosent="20160125122151" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour OpenMPI in Fortran" -->
<!-- id="87wpqxetnk.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAGKz=uLAeRtkAacRXPP7kdpCWGquvLaKrSn6QkMRH3K0L-5tLg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange behaviour OpenMPI in Fortran<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 07:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28366.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28367.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28367.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; You will find the MPI Fortran 2008 bindings to be significantly better
</span><br>
<span class="quotelev1">&gt; w.r.t. MPI types.  See e.g. MPI 3.1 section 17.2.5 where it describes
</span><br>
<span class="quotelev1">&gt; TYPE(MPI_Status), which means that the status object is a first-class type
</span><br>
<span class="quotelev1">&gt; in the Fortran 2008 interface, rather than being an error prone INTEGER
</span><br>
<span class="quotelev1">&gt; array.
</span><br>
<p>You might expect the f90 module to reveal the error anyway.
<br>
Unfortunately which routines it covers depends on the compiler and OMPI
<br>
versions in a way I don't understand -- can someone explain?  For
<br>
instance, it won't work with the RHEL6 system compiler (GCC 4.4), but
<br>
OMPI 1.8 using GCC 4.9 will report the error with &quot;use mpi&quot;.
<br>
<p><span class="quotelev1">&gt; I haven't used Fortran 2008 bindings in a nontrivial way yet, but it is my
</span><br>
<span class="quotelev1">&gt; understanding that Open-MPI has a good implementation of them and has for a
</span><br>
<span class="quotelev1">&gt; relatively long time.
</span><br>
<p>Unfortunately they won't be built if you use the system compiler on
<br>
RHEL6 (which I'd guess is still be the most common HPC platform).
<br>
Aren't they meant to address different problems with the subroutine
<br>
signatures anyway?  But strong typing is definitely good.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28366.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28367.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28367.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
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
