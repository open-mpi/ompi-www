<?
$subject_val = "Re: [OMPI users] Fortran support on Windows Open-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 09:21:08 2010" -->
<!-- isoreceived="20100507132108" -->
<!-- sent="Fri, 07 May 2010 07:20:44 -0600" -->
<!-- isosent="20100507132044" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support on Windows Open-MPI" -->
<!-- id="4BE413AC.9020800_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE3D8D0.6050408_at_hlrs.de" -->
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
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 09:20:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12963.php">Jeff Squyres: "Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>Previous message:</strong> <a href="12961.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12959.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12969.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Shiqing.  I'll try that.  I'm not sure which bindings MUMPS uses, 
<br>
I'll post back if I need F90.
<br>
<p>My apologies for not asking a clearer question, when I said Fortran 90 
<br>
support on Windows, I meant Open MPI, not compilers.
<br>
<p>Damien
<br>
<p>On 07/05/2010 3:09 AM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Damien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently only Fortran 77 bindings are supported in Open MPI on 
</span><br>
<span class="quotelev1">&gt; Windows. You could set the Intel Fortran compiler with 
</span><br>
<span class="quotelev1">&gt; CMAKE_Fortran_COMPILER variable in CMake (the full path to ifort.exe), 
</span><br>
<span class="quotelev1">&gt; and enable OMPI_WANT_F77_BINDINGS option for Open MPI, then everything 
</span><br>
<span class="quotelev1">&gt; should be compiled. I recommend to use Open MPI trunk or 1.5 branch 
</span><br>
<span class="quotelev1">&gt; version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have successfully compiled/ran NPB benchmark with f77 bindings on 
</span><br>
<span class="quotelev1">&gt; Windows. If you want to compile f90 programs, this should also be 
</span><br>
<span class="quotelev1">&gt; possible, but it needs a little modification in the config file. 
</span><br>
<span class="quotelev1">&gt; Please let me know if I can help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2010-5-7 5:52 AM, Damien wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone tell me what the plans are for Fortran 90 support on 
</span><br>
<span class="quotelev2">&gt;&gt; Windows, with say the Intel compilers?  I need to get MUMPS built and 
</span><br>
<span class="quotelev2">&gt;&gt; running using Open-MPI, with Visual Studio and Intel 11.1.  I know 
</span><br>
<span class="quotelev2">&gt;&gt; Fortran isn't part of the regular CMake build for Windows.  If 
</span><br>
<span class="quotelev2">&gt;&gt; someone's working on this I'm happy to test or help out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12963.php">Jeff Squyres: "Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>Previous message:</strong> <a href="12961.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12959.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12969.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
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
