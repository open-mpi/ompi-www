<?
$subject_val = "Re: [OMPI users] getting fortran90 to compile";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 14:13:22 2008" -->
<!-- isoreceived="20080713181322" -->
<!-- sent="Sun, 13 Jul 2008 11:06:26 -0700" -->
<!-- isosent="20080713180626" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting fortran90 to compile" -->
<!-- id="695B7BFB-FC5E-4931-BB4E-2473F9D32F31_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9fdb08030807130858y26fae84dk375c95667dacd8d7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] getting fortran90 to compile<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-13 14:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6072.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Previous message:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6074.php">Jeff Squyres: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>Reply:</strong> <a href="6074.php">Jeff Squyres: "Re: [OMPI users] getting fortran90 to compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Zachary,
<br>
<p>I believe you need to ad F90=/usr/bin/gfortran-4.2 (or something  
<br>
similar) to the configure arguments, FC= just gets f77 support.
<br>
<p>Doug Reeder
<br>
On Jul 13, 2008, at 8:58 AM, zach wrote:
<br>
<p><span class="quotelev1">&gt; I installed openmpi like
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=&lt;install dir&gt; FC=/usr/bin/gfortran-4.2
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When i type
</span><br>
<span class="quotelev1">&gt; mpif90 file1.f90 file2.f90 file3.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am i doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zachary
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6072.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Previous message:</strong> <a href="6070.php">Shiqing Fan: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6074.php">Jeff Squyres: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>Reply:</strong> <a href="6074.php">Jeff Squyres: "Re: [OMPI users] getting fortran90 to compile"</a>
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
