<?
$subject_val = "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 08:27:24 2011" -->
<!-- isoreceived="20110831122724" -->
<!-- sent="Wed, 31 Aug 2011 14:27:15 +0200" -->
<!-- isosent="20110831122715" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'" -->
<!-- id="4E5E28A3.80700_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAY163-ds3CEDD50F2F838BFDB787ED5170_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 08:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17127.php">Faisal Shahzad: "[OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>In reply to:</strong> <a href="17126.php">Fabien: "[OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Reply:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Fabien,
<br>
<p>The GCC build under MinGW is not supported in Open MPI 1.4.3. The 
<br>
initial support is now in trunk, but needs more test.
<br>
<p>Actually, you may also try building 1.4.3 with Visual Studio Express 
<br>
with Fortran bindings for gfortran. Just configure the solution for 
<br>
Visual Studio, and specify the fortran compiler full path and name in 
<br>
variable CMAKE_Fortran_COMPILER.
<br>
<p>Please try it out. It worked for me before.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-08-30 11:45 PM, Fabien wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to compile Open-MPI 1.4.3 using {MinGW;CMake} on a 
</span><br>
<span class="quotelev1">&gt; Vista-32-Bits. I'm interested in running in parallel _a fortran 
</span><br>
<span class="quotelev1">&gt; program_ (compiled with C:\MINGW\bin\gfortran.exe )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm aware that a binary package has been released but -- unfortunately 
</span><br>
<span class="quotelev1">&gt; -- it has been configured with the Intel compiler (ifort).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I configured and generated solution with MinGW makefiles and 
</span><br>
<span class="quotelev1">&gt; Native compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then compiling the generated solutions with /mingw32-make/ leads to 
</span><br>
<span class="quotelev1">&gt; the following errors :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1/ /config.h/ is requested in /...openmpi-1.4.3\opal\event/ but not found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#240;Solved by adding /config.h/ from /...openmpi-1.4.3\opal\event\WIN32-Code/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2/ Then : /error: redefinition of `struct timezone' ... error: 
</span><br>
<span class="quotelev1">&gt; conflicting types for 'gettimeofday' ... error: conflicting types for 
</span><br>
<span class="quotelev1">&gt; 'gettimeofday'/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#240;Any idea would be more than welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm aware that it has been addressed before in 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/06/9622.php">http://www.open-mpi.org/community/lists/users/2009/06/9622.php</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3/ I also tried to try /mingw32-gcc/g++/gfortran.exe/ compilers. 
</span><br>
<span class="quotelev1">&gt; Without success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4/ I also tried with Visual Studio 2010 without success. I only have 
</span><br>
<span class="quotelev1">&gt; Visual Studio C++ Express...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#240;Will I be able to build /mpif90/mpif77/orterun/mpirun/ with these 
</span><br>
<span class="quotelev1">&gt; Visual Studio makefiles coupled with MinGW compilers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your attention &amp; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fabien Decung
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configurations &amp; Tools :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Open-MPI : 1.4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -MinGW : latest stable (08/2011), using GCC 4.5.2 &amp; /C:\MINGW\bin/ has 
</span><br>
<span class="quotelev1">&gt; correctly been updated in /PATH/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -CMake : 2.8.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email:fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17128/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17127.php">Faisal Shahzad: "[OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>In reply to:</strong> <a href="17126.php">Fabien: "[OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Reply:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
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
