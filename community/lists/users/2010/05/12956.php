<?
$subject_val = "Re: [OMPI users] Fortran support on Windows Open-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 02:09:35 2010" -->
<!-- isoreceived="20100507060935" -->
<!-- sent="Thu, 06 May 2010 23:09:25 -0700" -->
<!-- isosent="20100507060925" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support on Windows Open-MPI" -->
<!-- id="4BE3AE95.700_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="COL117-DS1020E45E3C023949B176C1E9F60_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran support on Windows Open-MPI<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 02:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12957.php">Tim Prince: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12953.php">Trent Creekmore: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12959.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/6/2010 9:07 PM, Trent Creekmore wrote:
<br>
<span class="quotelev1">&gt; Compaq Visual Fortan for Windows was out, but HP aquired Compaq. HP, later
</span><br>
<span class="quotelev1">&gt; deciding they did not want it, along with the Alpha processor techonology,
</span><br>
<span class="quotelev1">&gt; sold them to Intel. So now it's Intel Visual Fortran Compiler for Windows.
</span><br>
<span class="quotelev1">&gt; In addition, if you don't want that package, instead they do sell a plug-in
</span><br>
<span class="quotelev1">&gt; for Microsoft Visual Studio. There is also a HPC/Parallel enviroment too for
</span><br>
<span class="quotelev1">&gt; Visual Studio, but none of these are cheap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see why you can't include Open MPI libraries in that enviroment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Damien
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 06, 2010 10:53 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Fortran support on Windows Open-MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone tell me what the plans are for Fortran 90 support on Windows,
</span><br>
<span class="quotelev1">&gt; with say the Intel compilers?  I need to get MUMPS built and running
</span><br>
<span class="quotelev1">&gt; using Open-MPI, with Visual Studio and Intel 11.1.  I know Fortran isn't
</span><br>
<span class="quotelev1">&gt; part of the regular CMake build for Windows.  If someone's working on
</span><br>
<span class="quotelev1">&gt; this I'm happy to test or help out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;    
</span><br>
I'm not certain whether the top-post is intended as a reply to the 
<br>
original post, but I feel I must protest efforts to add confusion.  
<br>
Looking at the instructions for building on Windows, it appears that 
<br>
several routes have been taken with reported success, not including 
<br>
commercial Fortran.  It seems it should not be a major task to include 
<br>
gfortran in the cygwin build.
<br>
HP never transferred ownership of Compaq Fortran, not that it's relevant 
<br>
to the discussion.
<br>
The most popular open source MPI for commercial Windows Fortran has been 
<br>
Argonne MPICH2, which offers a pre-built version compatible with Intel 
<br>
Fortran.   Intel also offers MPI, derived originally from Argonne 
<br>
MPICH2, for both Windows and linux.
<br>
I can't imagine OpenMPI libraries being added to the Microsoft HPC 
<br>
environment; maybe that's not exactly what the top poster meant.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12957.php">Tim Prince: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12953.php">Trent Creekmore: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12959.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
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
