<?
$subject_val = "Re: [OMPI users] Problem Installing OpenMPI with Lahey 64-bit Fortran compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 09:59:41 2008" -->
<!-- isoreceived="20080506135941" -->
<!-- sent="Tue, 6 May 2008 09:59:16 -0400" -->
<!-- isosent="20080506135916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem Installing OpenMPI with Lahey 64-bit Fortran compiler" -->
<!-- id="6C6173E4-CD7E-423E-9F91-253E9D3BE4BF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8CA79B71F5EBC2C-14F8-189E_at_mblk-d15.sysops.aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem Installing OpenMPI with Lahey 64-bit Fortran compiler<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 09:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5610.php">rajlaxmi: "[OMPI users] Query:File locking failed in ADIOI_Set_lock"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This post was accidentally sent to the list owner rather than to the  
<br>
entire list.  Re-sending to the list...
<br>
<p>On May 1, 2008, at 11:28 AM, cfdman7_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I am encountering a difficulty when installing OpenMPI with the  
</span><br>
<span class="quotelev1">&gt; Lahey 64-bit (LF64 V8.0) Fortran Compiler for use on a dual quad- 
</span><br>
<span class="quotelev1">&gt; core machine. I am currently trying to install this particular Lahey  
</span><br>
<span class="quotelev1">&gt; compiler with openmpi-1.2.6 on a 64-bit intel machine running Red  
</span><br>
<span class="quotelev1">&gt; Hat Linux Enterprise 5. In the past, I have not had any difficulty  
</span><br>
<span class="quotelev1">&gt; installing 32-bit versions of the Lahey compiler with the current or  
</span><br>
<span class="quotelev1">&gt; previous versions of OpenMPI, so this issue appears to be specific  
</span><br>
<span class="quotelev1">&gt; to the 64-bit version of the Lahey compiler. I have attached the  
</span><br>
<span class="quotelev1">&gt; install script that I used to install OpenMPI. I have also attached  
</span><br>
<span class="quotelev1">&gt; the output stream that results when I execute this install script.
</span><br>
<p><p>The error message that it is showing is:
<br>
<p>/usr/bin/ld: .libs/mpi_wtick_f90.o: relocation R_X86_64_32S against `a  
<br>
local symbol' can not be used when making a shared object; recompile  
<br>
with -fPIC
<br>
<p>We don't test with the Laheay compiler, so I'm not familiar with the  
<br>
exact problem here -- perhaps try adding -fPIC to the FCFLAGS when  
<br>
running configure?
<br>
<p>./configure FCFLAGS=-fPIC ...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems



</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5611/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5611/configure.log.bz2">configure.log.bz2</a>
</ul>
<!-- attachment="configure.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5611/make.log.bz2">make.log.bz2</a>
</ul>
<!-- attachment="make.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5610.php">rajlaxmi: "[OMPI users] Query:File locking failed in ADIOI_Set_lock"</a>
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
