<?
$subject_val = "Re: [OMPI users] Fortran Library Problem using openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 09:20:58 2009" -->
<!-- isoreceived="20091030132058" -->
<!-- sent="Fri, 30 Oct 2009 09:19:46 -0400" -->
<!-- isosent="20091030131946" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran Library Problem using openMPI" -->
<!-- id="4AEAE7F2.9000002_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AEAE750.2080509_at_sun.com" -->
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
<strong>Date:</strong> 2009-10-30 09:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11020.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>In reply to:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11020.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Reply:</strong> <a href="11020.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me try this one more time.
<br>
<p>Your application is being built with a 32 bit compiler ia32.  However 
<br>
the Open MPI libraries look to be built with the 64 bit compiler 
<br>
intel64.  One or the other needs to change.
<br>
<p>--td
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Georg,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think your problem is you are using a ia32 (32 bit compiler) with a 
</span><br>
<span class="quotelev1">&gt; 64 bit built library.  Either you need to use the intel64 compiler or 
</span><br>
<span class="quotelev1">&gt; build Open MPI with the 32 bit library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* Re: [OMPI users] Fortran Library Problem using openMPI
</span><br>
<span class="quotelev2">&gt;&gt; *From:* Georg A. Reichstein (/reichstein_at_[hidden]/)
</span><br>
<span class="quotelev2">&gt;&gt; *Date:* 2009-10-30 09:07:30
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is he configure line I used:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure OMPI_F77=/opt/intel/Compiler/11.1/056/bin/ia32/ifort
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fflags='-compiler -03 -ip-pad -xW -w -02'
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_FFLAGS='-compiler -03
</span><br>
<span class="quotelev2">&gt;&gt; -ip -pad -xW -w -02'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The specifications were included on the basis that they are used in the
</span><br>
<span class="quotelev2">&gt;&gt; compile command I received.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the Intel compiler 11.1 ia32 (as can be seen in the path 
</span><br>
<span class="quotelev2">&gt;&gt; to ifort
</span><br>
<span class="quotelev2">&gt;&gt; above)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I do file on libmpi_f77 I get the following result:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # file libmpi_f77.so
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.so: symbolic link to `libmpi_f77.so.0.0.0'
</span><br>
<span class="quotelev2">&gt;&gt; # file libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.so.0.0.0: ELF 64-bit LSB shared object, x86-64, version 1 
</span><br>
<span class="quotelev2">&gt;&gt; (SYSV),
</span><br>
<span class="quotelev2">&gt;&gt; dynamically linked, not stripped
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed my Open MPI build in the defaut directory, being 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin
</span><br>
<span class="quotelev2">&gt;&gt; - the libraries are in /usr/local/lib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ~G. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11020.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>In reply to:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11020.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Reply:</strong> <a href="11020.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
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
