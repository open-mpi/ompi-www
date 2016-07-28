<?
$subject_val = "Re: [OMPI users] Fortran code generation error on 1.5 rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 05:12:12 2010" -->
<!-- isoreceived="20100809091212" -->
<!-- sent="Mon, 09 Aug 2010 10:00:49 +0200" -->
<!-- isosent="20100809080049" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran code generation error on 1.5 rc5" -->
<!-- id="4C5FB5B1.1040102_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C5F10BB.4070902_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran code generation error on 1.5 rc5<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 04:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13933.php">Shiqing Fan: "Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<li><strong>Previous message:</strong> <a href="13931.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13928.php">Damien: "[OMPI users] Fortran code generation error on 1.5 rc5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>I'll check this. Thanks for reporting it.
<br>
<p><p>Shiqing
<br>
<p><p>On 2010-8-8 10:16 PM, Damien wrote:
<br>
<span class="quotelev1">&gt;  Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a code generation bug in the CMake/Visual Studio build of rc 5 
</span><br>
<span class="quotelev1">&gt; on VS 2008.  A release build, with static libs, F77 and F90 support 
</span><br>
<span class="quotelev1">&gt; gives an error at line 91 in mpif-config.h :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; parameter (MPI_STATUS_SIZE=)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This obviously makes the compiler unhappy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In older trunk builds this was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; parameter (MPI_STATUS_SIZE=5)
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
<li><strong>Next message:</strong> <a href="13933.php">Shiqing Fan: "Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<li><strong>Previous message:</strong> <a href="13931.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13928.php">Damien: "[OMPI users] Fortran code generation error on 1.5 rc5"</a>
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
