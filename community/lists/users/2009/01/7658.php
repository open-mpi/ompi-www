<?
$subject_val = "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and mpi-defaults";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 07:32:10 2009" -->
<!-- isoreceived="20090107123210" -->
<!-- sent="Wed, 07 Jan 2009 13:32:04 +0100" -->
<!-- isosent="20090107123204" -->
<!-- name="Manuel Prinz" -->
<!-- email="manuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and mpi-defaults" -->
<!-- id="1231331524.4893.27.camel_at_ce170155.zmb.uni-essen.de" -->
<!-- inreplyto="1231277625.13978.54.camel_at_workhorse" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and mpi-defaults<br>
<strong>From:</strong> Manuel Prinz (<em>manuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-07 07:32:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7659.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7657.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and	mpi-defaults"</a>
<li><strong>In reply to:</strong> <a href="7650.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am Dienstag, den 06.01.2009, 16:33 -0500 schrieb Adam C Powell IV:
<br>
<span class="quotelev1">&gt; Okay, found it.  This function is inline assembly in timer.h, which
</span><br>
<span class="quotelev1">&gt; exists in opal/sys/amd64, ia32, ia64, powerpc and sparcv9 but not alpha,
</span><br>
<span class="quotelev1">&gt; mips, sparc or win32.  That said, timer.h in opal/sys has:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifndef OPAL_HAVE_SYS_TIMER_GET_CYCLES
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_SYS_TIMER_GET_CYCLES 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which somehow is working on sparc (no reference to this function in the
</span><br>
<span class="quotelev1">&gt; buildd log) but not alpha.  (On mips, there are a bunch of assembler
</span><br>
<span class="quotelev1">&gt; errors of the form &quot;opcode not supported on this processor&quot;.)
</span><br>
<p>The reason why it works on sparc is probably because Debian only
<br>
supports sparcv9 (TTBOMK), which has the timer functions implemented in
<br>
opal/include/opal/sys/sparcv9/timer.h. The build log also reads:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for asssembly architecture... SPARCV9_32
<br>
<p><span class="quotelev1">&gt; That's about what I have time for now.  Don't worry about mpi-defaults,
</span><br>
<span class="quotelev1">&gt; it's not trying to get into Lenny; but we should worry about OpenMPI not
</span><br>
<span class="quotelev1">&gt; building on alpha.
</span><br>
<p>The reasoning for reassigning was that Open MPI built fine on alpha
<br>
before (first breakage in 1.2.8), so something has changed. I'm still
<br>
trying to find out what.
<br>
<p>Thanks for investigating the issue!
<br>
<p>Best regards
<br>
Manuel
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7658/signature.asc">Dies ist ein digital signierter Nachrichtenteil</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7659.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7657.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and	mpi-defaults"</a>
<li><strong>In reply to:</strong> <a href="7650.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
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
