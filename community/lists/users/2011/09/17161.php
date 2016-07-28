<?
$subject_val = "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 05:03:16 2011" -->
<!-- isoreceived="20110906090316" -->
<!-- sent="Tue, 06 Sep 2011 11:03:10 +0200" -->
<!-- isosent="20110906090310" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'" -->
<!-- id="4E65E1CE.5050705_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BAY163-ds15C2B2678D35CB4CCF05A3D5190_at_phx.gbl" -->
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
<strong>Date:</strong> 2011-09-06 05:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17162.php">Jeff Squyres: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17160.php">Simone Pellegrini: "[OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>In reply to:</strong> <a href="17140.php">Fabien: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Fabien,
<br>
<p>I've done some tests these days. 
<br>
<p>g95 works with Open MPI 1.4.3, you need to start the cmake-gui from a 
<br>
Visual Studio command prompt in order to grand all correct environment 
<br>
settings, then after the first time configuration, set 
<br>
CMAKE_Fortran_COMPILER to the path of g95.exe, and enable 
<br>
OMPI_F77_BINDINGS option. The F90 bindings are not supported yet.
<br>
<p>Regards,
<br>
Shiqing
<br>
On Friday, September 02, 2011 12:30:31 AM, Fabien wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your answers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I encountered some errors with MinGW makefiles on &quot;trunk&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - So, I dived into VS_Express_2010 makefiles and only specified
</span><br>
<span class="quotelev1">&gt; Mingw/gfortran as compiler. (I'm not sure : should I choose
</span><br>
<span class="quotelev1">&gt; CMAKE_Fortran_COMPILER:FILEPATH=C:/MinGW/bin/gfortran.exe or
</span><br>
<span class="quotelev1">&gt; mingw32-gfortran.exe?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	+ But, configuring with F77+F90 bindings leads to this error :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMake Error at contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:86
</span><br>
<span class="quotelev1">&gt; (MESSAGE):
</span><br>
<span class="quotelev1">&gt;    Could not determine size of CHARACTER.
</span><br>
<span class="quotelev1">&gt; Call Stack (most recent call first):
</span><br>
<span class="quotelev1">&gt;    contrib/platform/win32/CMakeModules/f77_check.cmake:60
</span><br>
<span class="quotelev1">&gt; (OMPI_F77_GET_SIZEOF)
</span><br>
<span class="quotelev1">&gt;    contrib/platform/win32/CMakeModules/ompi_configure.cmake:637
</span><br>
<span class="quotelev1">&gt; (OMPI_F77_CHECK)
</span><br>
<span class="quotelev1">&gt;    CMakeLists.txt:99 (BEGIN_CONFIGURE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	+ When disabling F77 bindings and only keeping F90 bindings, I was
</span><br>
<span class="quotelev1">&gt; able to configure/build/install but no &quot;mpif90&quot; are installed in
</span><br>
<span class="quotelev1">&gt; OUTPUT_PATH.
</span><br>
<span class="quotelev1">&gt; Only C-like. I suppose that F77 is then mandatory but what about this
</span><br>
<span class="quotelev1">&gt; error...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I give a try with G95 instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your attention&amp;  Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fabien Decung
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Message d'origine-----
</span><br>
<span class="quotelev1">&gt; De : Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Envoy&#195;&#169; : mercredi 31 ao&#195;&#187;t 2011 14:30
</span><br>
<span class="quotelev1">&gt; &#195;&#128; : fan_at_[hidden]; Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc : Fabien
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you want to add this kind of info to the FAQ?  I seem to recall that the
</span><br>
<span class="quotelev1">&gt; gettimeofday question has come up before...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 31, 2011, at 8:27 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Fabien,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The GCC build under MinGW is not supported in Open MPI 1.4.3. The initial
</span><br>
<span class="quotelev1">&gt; support is now in trunk, but needs more test.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, you may also try building 1.4.3 with Visual Studio Express with
</span><br>
<span class="quotelev1">&gt; Fortran bindings for gfortran. Just configure the solution for Visual
</span><br>
<span class="quotelev1">&gt; Studio, and specify the fortran compiler full path and name in variable
</span><br>
<span class="quotelev1">&gt; CMAKE_Fortran_COMPILER.
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
<span class="quotelev3">&gt;&gt;&gt; I&#226;&#128;&#153;m trying to compile Open-MPI 1.4.3 using {MinGW;CMake} on a
</span><br>
<span class="quotelev1">&gt; Vista-32-Bits. I&#226;&#128;&#153;m interested in running in parallel a fortran program
</span><br>
<span class="quotelev1">&gt; (compiled with C:\MINGW\bin\gfortran.exe )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#226;&#128;&#153;m aware that a binary package has been released but &#226;&#128;&#147; unfortunately &#226;&#128;&#147;
</span><br>
<span class="quotelev1">&gt; it has been configured with the Intel compiler (ifort).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I configured and generated solution with MinGW makefiles and Native
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then compiling the generated solutions with mingw32-make leads to the
</span><br>
<span class="quotelev1">&gt; following errors :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1/ config.h is requested in &#226;&#128;&#166;openmpi-1.4.3\opal\event but not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#195;&#176;  Solved by adding config.h from &#226;&#128;&#166;openmpi-1.4.3\opal\event\WIN32-Code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2/ Then : error: redefinition of `struct timezone' &#226;&#128;&#166; error: conflicting
</span><br>
<span class="quotelev1">&gt; types for 'gettimeofday' &#226;&#128;&#166; error: conflicting types for 'gettimeofday'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#195;&#176;  Any idea would be more than welcome.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#226;&#128;&#153;m aware that it has been addressed before in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/06/9622.php">http://www.open-mpi.org/community/lists/users/2009/06/9622.php</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3/ I also tried to try mingw32-gcc/g++/gfortran.exe compilers. Without
</span><br>
<span class="quotelev1">&gt; success.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4/ I also tried with Visual Studio 2010 without success. I only have
</span><br>
<span class="quotelev1">&gt; Visual Studio C++ Express&#226;&#128;&#166;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#195;&#176;  Will I be able to build mpif90/mpif77/orterun/mpirun with these Visual
</span><br>
<span class="quotelev1">&gt; Studio makefiles coupled with MinGW compilers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your attention&amp;  Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fabien Decung
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configurations&amp;  Tools :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          Open-MPI : 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          MinGW : latest stable (08/2011), using GCC 4.5.2&amp;
</span><br>
<span class="quotelev1">&gt; C:\MINGW\bin has correctly been updated in PATH.
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
<li><strong>Next message:</strong> <a href="17162.php">Jeff Squyres: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17160.php">Simone Pellegrini: "[OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>In reply to:</strong> <a href="17140.php">Fabien: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
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
