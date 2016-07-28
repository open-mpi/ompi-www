<?
$subject_val = "Re: [OMPI users] CMake-Windows build of 1.41 with Fortran bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 13:31:41 2010" -->
<!-- isoreceived="20100203183141" -->
<!-- sent="Wed, 03 Feb 2010 19:29:23 +0100" -->
<!-- isosent="20100203182923" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CMake-Windows build of 1.41 with Fortran bindings" -->
<!-- id="4B69C083.6090700_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B69974D.8060102_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CMake-Windows build of 1.41 with Fortran bindings<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 13:29:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11995.php">Prentice Bisbal: "[OMPI users] MPI_Comm_dup hangs"</a>
<li><strong>Previous message:</strong> <a href="11993.php">Shiqing Fan: "Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<li><strong>In reply to:</strong> <a href="11991.php">Damien Hocking: "[OMPI users] CMake-Windows build of 1.41 with Fortran bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you can enable the option &quot;OMPI_WANT_F77_BINDINGS&quot; in CMake GUI, 
<br>
but this only supports for the GNU fortran compilers at moment, e.g. 
<br>
G95. The support for other Fortran compilers, like Intel Fortran, has 
<br>
also been started in trunk.
<br>
<p><p>Shiqing
<br>
<p><p>Damien Hocking wrote:
<br>
<span class="quotelev1">&gt; Can anyone tell me how to enable Fortran bindings on a Windows build?
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
<li><strong>Next message:</strong> <a href="11995.php">Prentice Bisbal: "[OMPI users] MPI_Comm_dup hangs"</a>
<li><strong>Previous message:</strong> <a href="11993.php">Shiqing Fan: "Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<li><strong>In reply to:</strong> <a href="11991.php">Damien Hocking: "[OMPI users] CMake-Windows build of 1.41 with Fortran bindings"</a>
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
