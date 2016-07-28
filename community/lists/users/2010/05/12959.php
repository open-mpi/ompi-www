<?
$subject_val = "Re: [OMPI users] Fortran support on Windows Open-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 05:08:33 2010" -->
<!-- isoreceived="20100507090833" -->
<!-- sent="Fri, 07 May 2010 11:09:36 +0200" -->
<!-- isosent="20100507090936" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support on Windows Open-MPI" -->
<!-- id="4BE3D8D0.6050408_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE38E8E.50205_at_khubla.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 05:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12960.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12958.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>In reply to:</strong> <a href="12952.php">Damien: "[OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12962.php">Damien Hocking: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="12962.php">Damien Hocking: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="12969.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>Currently only Fortran 77 bindings are supported in Open MPI on Windows. 
<br>
You could set the Intel Fortran compiler with CMAKE_Fortran_COMPILER 
<br>
variable in CMake (the full path to ifort.exe), and enable 
<br>
OMPI_WANT_F77_BINDINGS option for Open MPI, then everything should be 
<br>
compiled. I recommend to use Open MPI trunk or 1.5 branch version.
<br>
<p>I have successfully compiled/ran NPB benchmark with f77 bindings on 
<br>
Windows. If you want to compile f90 programs, this should also be 
<br>
possible, but it needs a little modification in the config file. Please 
<br>
let me know if I can help.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2010-5-7 5:52 AM, Damien wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone tell me what the plans are for Fortran 90 support on 
</span><br>
<span class="quotelev1">&gt; Windows, with say the Intel compilers?  I need to get MUMPS built and 
</span><br>
<span class="quotelev1">&gt; running using Open-MPI, with Visual Studio and Intel 11.1.  I know 
</span><br>
<span class="quotelev1">&gt; Fortran isn't part of the regular CMake build for Windows.  If 
</span><br>
<span class="quotelev1">&gt; someone's working on this I'm happy to test or help out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12960.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12958.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>In reply to:</strong> <a href="12952.php">Damien: "[OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12962.php">Damien Hocking: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="12962.php">Damien Hocking: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="12969.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
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
