<?
$subject_val = "Re: [OMPI users] Fortran Library Problem using openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 09:18:22 2009" -->
<!-- isoreceived="20091030131822" -->
<!-- sent="Fri, 30 Oct 2009 09:17:04 -0400" -->
<!-- isosent="20091030131704" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran Library Problem using openMPI" -->
<!-- id="4AEAE750.2080509_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Fortran Library Problem using openMPI" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran Library Problem using openMPI<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 09:17:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11019.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11017.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="11015.php">Georg A. Reichstein: "[OMPI users] Fortran Library Problem using openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11019.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Reply:</strong> <a href="11019.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Georg,
<br>
<p>I think your problem is you are using a ia32 (32 bit compiler) with a 64 
<br>
bit built library.  Either you need to use the intel64 compiler or build 
<br>
Open MPI with the 32 bit library.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Fortran Library Problem using openMPI
</span><br>
<span class="quotelev1">&gt; *From:* Georg A. Reichstein (/reichstein_at_[hidden]/)
</span><br>
<span class="quotelev1">&gt; *Date:* 2009-10-30 09:07:30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is he configure line I used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure OMPI_F77=/opt/intel/Compiler/11.1/056/bin/ia32/ifort
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fflags='-compiler -03 -ip-pad -xW -w -02'
</span><br>
<span class="quotelev1">&gt; OMPI_FFLAGS='-compiler -03
</span><br>
<span class="quotelev1">&gt; -ip -pad -xW -w -02'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The specifications were included on the basis that they are used in the
</span><br>
<span class="quotelev1">&gt; compile command I received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the Intel compiler 11.1 ia32 (as can be seen in the path to 
</span><br>
<span class="quotelev1">&gt; ifort
</span><br>
<span class="quotelev1">&gt; above)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I do file on libmpi_f77 I get the following result:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # file libmpi_f77.so
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so: symbolic link to `libmpi_f77.so.0.0.0'
</span><br>
<span class="quotelev1">&gt; # file libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.0.0.0: ELF 64-bit LSB shared object, x86-64, version 1 
</span><br>
<span class="quotelev1">&gt; (SYSV),
</span><br>
<span class="quotelev1">&gt; dynamically linked, not stripped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed my Open MPI build in the defaut directory, being 
</span><br>
<span class="quotelev1">&gt; /usr/local/bin
</span><br>
<span class="quotelev1">&gt; - the libraries are in /usr/local/lib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~G. 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11019.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11017.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="11015.php">Georg A. Reichstein: "[OMPI users] Fortran Library Problem using openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11019.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Reply:</strong> <a href="11019.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
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
