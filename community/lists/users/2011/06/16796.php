<?
$subject_val = "Re: [OMPI users] Anyone with Visual Studio + MPI Experience";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 17:06:18 2011" -->
<!-- isoreceived="20110630210618" -->
<!-- sent="Thu, 30 Jun 2011 17:06:13 -0400" -->
<!-- isosent="20110630210613" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyone with Visual Studio + MPI Experience" -->
<!-- id="4E0CE545.4060806_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="580DEAC013D9134283D52B6610071A2E8F3CE7_at_NASCMEX01.na.mscsoftware.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anyone with Visual Studio + MPI Experience<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 17:06:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16797.php">Qasim Ali: "[OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Previous message:</strong> <a href="16795.php">David Warren: "[OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16794.php">Joe Griffin: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16813.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Joe.
<br>
<p>I did say that, but I meant that in a different way. For program 'foo',
<br>
I need to tell Visual Studio that when I click on the 'run' button, I
<br>
need it to execute
<br>
<p>mpiexec -np X foo
<br>
<p>instead of just
<br>
<p>foo
<br>
<p>I know what I *need* to do to the VS environment, I just don't know
<br>
*how* to do it. I've been going through all the settings, but can't find
<br>
the magical checkbox or textbox.
<br>
<p>Windows is so disorienting. It's like someone went out of their way to
<br>
make life as hard as possible for us command-line guys.
<br>
<p>Prentice
<br>
<p>On 06/30/2011 04:46 PM, Joe Griffin wrote:
<br>
<span class="quotelev1">&gt; Prentice,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might or might not matter, but on your older system you
</span><br>
<span class="quotelev1">&gt; may have used &quot;LD_LIBRARY_PATH&quot; but on windows you need &quot;PATH&quot;
</span><br>
<span class="quotelev1">&gt; to contain the PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I only mention this because you said it runs in one environment,
</span><br>
<span class="quotelev1">&gt; but not the other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Joe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Prentice Bisbal
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 30, 2011 1:42 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Anyone with Visual Studio + MPI Experience
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone on this list have experience using MS Visual Studio for MPI
</span><br>
<span class="quotelev1">&gt; development? I'm supporting a Windows user who has been doing Fortran
</span><br>
<span class="quotelev1">&gt; programming on Windows using an ANCIENT version of Digital Visual
</span><br>
<span class="quotelev1">&gt; Fortran (I know, I know - using &quot;ancient&quot; and &quot;Digital&quot; in the same
</span><br>
<span class="quotelev1">&gt; sentence is redundant.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, we are upgrading his equally ancient laptopa new one with Windows
</span><br>
<span class="quotelev1">&gt; 7, so we installed Intel Visual Fortran (direct descendent of DVF) and
</span><br>
<span class="quotelev1">&gt; Visual Studio 2010, and to be honest, I feel like a fish out of water
</span><br>
<span class="quotelev1">&gt; using VS 2010. It took me a longer than I care to admit to figure out
</span><br>
<span class="quotelev1">&gt; how to specify the include and linker paths.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now, I'm working with the Intel MPI libraries, but plan on
</span><br>
<span class="quotelev1">&gt; installing OpenMPI, too, once I figure out VS 2010.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone tell me how to configure visual studio so that when you click
</span><br>
<span class="quotelev1">&gt; on the little &quot;play&quot; icon to build/run the code, it will call mpiexec
</span><br>
<span class="quotelev1">&gt; automatically? Right now, it compiles fine, but throws errors when the
</span><br>
<span class="quotelev1">&gt; program executes because it doesn't have the right environment setup
</span><br>
<span class="quotelev1">&gt; because it's not being executed by mpiexec. It runs fine when I execute
</span><br>
<span class="quotelev1">&gt; it with mpiexec or wmpiexec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16797.php">Qasim Ali: "[OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Previous message:</strong> <a href="16795.php">David Warren: "[OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16794.php">Joe Griffin: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16813.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
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
