<?
$subject_val = "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 12:13:24 2011" -->
<!-- isoreceived="20110831161324" -->
<!-- sent="Wed, 31 Aug 2011 12:13:14 -0400" -->
<!-- isosent="20110831161314" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'" -->
<!-- id="4E5E5D9A.5020902_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5B363587-2174-473B-9C5C-547FC4CA267E_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 12:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17132.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17130.php">Josh Hursey: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>In reply to:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17132.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Reply:</strong> <a href="17132.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Shiqing --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you want to add this kind of info to the FAQ?  
</span><br>
<span class="quotelev1">&gt; I seem to recall that the gettimeofday question has come up before...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Indeed, but often related to the accuracy of the MPI_Wtime clock, IIRR.
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 31, 2011, at 8:27 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Fabien,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The GCC build under MinGW is not supported in Open MPI 1.4.3. The initial support is now in trunk, but needs more test.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, you may also try building 1.4.3 with Visual Studio Express with Fortran bindings for gfortran. Just configure the solution for Visual Studio, and specify the fortran compiler full path and name in variable CMAKE_Fortran_COMPILER. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please try it out. It worked for me before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2011-08-30 11:45 PM, Fabien wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m trying to compile Open-MPI 1.4.3 using {MinGW;CMake} on a Vista-32-Bits. I&#146;m interested in running in parallel a fortran program (compiled with C:\MINGW\bin\gfortran.exe )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m aware that a binary package has been released but &#150; unfortunately &#150; it has been configured with the Intel compiler (ifort).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I configured and generated solution with MinGW makefiles and Native compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then compiling the generated solutions with mingw32-make leads to the following errors :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1/ config.h is requested in &#133;openmpi-1.4.3\opal\event but not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#240;  Solved by adding config.h from &#133;openmpi-1.4.3\opal\event\WIN32-Code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2/ Then : error: redefinition of `struct timezone' &#133; error: conflicting types for 'gettimeofday' &#133; error: conflicting types for 'gettimeofday'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#240;  Any idea would be more than welcome.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m aware that it has been addressed before in <a href="http://www.open-mpi.org/community/lists/users/2009/06/9622.php">http://www.open-mpi.org/community/lists/users/2009/06/9622.php</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3/ I also tried to try mingw32-gcc/g++/gfortran.exe compilers. Without success.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4/ I also tried with Visual Studio 2010 without success. I only have Visual Studio C++ Express&#133;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#240;  Will I be able to build mpif90/mpif77/orterun/mpirun with these Visual Studio makefiles coupled with MinGW compilers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your attention &amp; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fabien Decung
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configurations &amp; Tools :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          Open-MPI : 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          MinGW : latest stable (08/2011), using GCC 4.5.2 &amp; C:\MINGW\bin has correctly been updated in PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          CMake : 2.8.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; email: 
</span><br>
<span class="quotelev2">&gt;&gt; fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17132.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17130.php">Josh Hursey: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>In reply to:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17132.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Reply:</strong> <a href="17132.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
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
