<?
$subject_val = "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 18:30:38 2011" -->
<!-- isoreceived="20110901223038" -->
<!-- sent="Fri, 2 Sep 2011 00:30:31 +0200" -->
<!-- isosent="20110901223031" -->
<!-- name="Fabien" -->
<!-- email="potiolot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'" -->
<!-- id="BAY163-ds15C2B2678D35CB4CCF05A3D5190_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Fabien (<em>potiolot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 18:30:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17133.php">Eugene Loh: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Previous message:</strong> <a href="17131.php">Faisal Shahzad: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>In reply to:</strong> <a href="../../2011/08/17121.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17153.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Reply:</strong> <a href="17153.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for your answers. 
<br>
<p>- I encountered some errors with MinGW makefiles on &quot;trunk&quot;.
<br>
<p>- So, I dived into VS_Express_2010 makefiles and only specified
<br>
Mingw/gfortran as compiler. (I'm not sure : should I choose
<br>
CMAKE_Fortran_COMPILER:FILEPATH=C:/MinGW/bin/gfortran.exe or
<br>
mingw32-gfortran.exe?)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ But, configuring with F77+F90 bindings leads to this error :
<br>
<p>CMake Error at contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:86
<br>
(MESSAGE):
<br>
&nbsp;&nbsp;Could not determine size of CHARACTER.
<br>
Call Stack (most recent call first):
<br>
&nbsp;&nbsp;contrib/platform/win32/CMakeModules/f77_check.cmake:60
<br>
(OMPI_F77_GET_SIZEOF)
<br>
&nbsp;&nbsp;contrib/platform/win32/CMakeModules/ompi_configure.cmake:637
<br>
(OMPI_F77_CHECK)
<br>
&nbsp;&nbsp;CMakeLists.txt:99 (BEGIN_CONFIGURE)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ When disabling F77 bindings and only keeping F90 bindings, I was
<br>
able to configure/build/install but no &quot;mpif90&quot; are installed in
<br>
OUTPUT_PATH.
<br>
Only C-like. I suppose that F77 is then mandatory but what about this
<br>
error...?
<br>
<p>Should I give a try with G95 instead?
<br>
<p>Thanks for your attention &amp; Best regards,
<br>
<p>Fabien Decung
<br>
<p><p>-----Message d'origine-----
<br>
De&#160;: Jeff Squyres [mailto:jsquyres_at_[hidden]] 
<br>
Envoy&#233;&#160;: mercredi 31 ao&#251;t 2011 14:30
<br>
&#192;&#160;: fan_at_[hidden]; Open MPI Users
<br>
Cc&#160;: Fabien
<br>
Objet&#160;: Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'
<br>
<p>Shiqing --
<br>
<p>Do you want to add this kind of info to the FAQ?  I seem to recall that the
<br>
gettimeofday question has come up before...?
<br>
<p><p>On Aug 31, 2011, at 8:27 AM, Shiqing Fan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Fabien,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The GCC build under MinGW is not supported in Open MPI 1.4.3. The initial
</span><br>
support is now in trunk, but needs more test.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, you may also try building 1.4.3 with Visual Studio Express with
</span><br>
Fortran bindings for gfortran. Just configure the solution for Visual
<br>
Studio, and specify the fortran compiler full path and name in variable
<br>
CMAKE_Fortran_COMPILER. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please try it out. It worked for me before.
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
<span class="quotelev1">&gt; On 2011-08-30 11:45 PM, Fabien wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m trying to compile Open-MPI 1.4.3 using {MinGW;CMake} on a
</span><br>
Vista-32-Bits. I&#146;m interested in running in parallel a fortran program
<br>
(compiled with C:\MINGW\bin\gfortran.exe )
<br>
<span class="quotelev2">&gt;&gt; I&#146;m aware that a binary package has been released but &#150; unfortunately &#150;
</span><br>
it has been configured with the Intel compiler (ifort).
<br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; So, I configured and generated solution with MinGW makefiles and Native
</span><br>
compilers.
<br>
<span class="quotelev2">&gt;&gt; Then compiling the generated solutions with mingw32-make leads to the
</span><br>
following errors :
<br>
<span class="quotelev2">&gt;&gt; 1/ config.h is requested in &#133;openmpi-1.4.3\opal\event but not found.
</span><br>
<span class="quotelev2">&gt;&gt; &#240;  Solved by adding config.h from &#133;openmpi-1.4.3\opal\event\WIN32-Code
</span><br>
<span class="quotelev2">&gt;&gt; 2/ Then : error: redefinition of `struct timezone' &#133; error: conflicting
</span><br>
types for 'gettimeofday' &#133; error: conflicting types for 'gettimeofday'
<br>
<span class="quotelev2">&gt;&gt; &#240;  Any idea would be more than welcome.
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m aware that it has been addressed before in
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2009/06/9622.php">http://www.open-mpi.org/community/lists/users/2009/06/9622.php</a>.
<br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 3/ I also tried to try mingw32-gcc/g++/gfortran.exe compilers. Without
</span><br>
success.
<br>
<span class="quotelev2">&gt;&gt; 4/ I also tried with Visual Studio 2010 without success. I only have
</span><br>
Visual Studio C++ Express&#133;
<br>
<span class="quotelev2">&gt;&gt; &#240;  Will I be able to build mpif90/mpif77/orterun/mpirun with these Visual
</span><br>
Studio makefiles coupled with MinGW compilers?
<br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your attention &amp; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Fabien Decung
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Configurations &amp; Tools :
</span><br>
<span class="quotelev2">&gt;&gt; -          Open-MPI : 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; -          MinGW : latest stable (08/2011), using GCC 4.5.2 &amp;
</span><br>
C:\MINGW\bin has correctly been updated in PATH.
<br>
<span class="quotelev2">&gt;&gt; -          CMake : 2.8.3
</span><br>
<span class="quotelev2">&gt;&gt; -           
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; email: 
</span><br>
<span class="quotelev1">&gt; fan_at_[hidden]
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17133.php">Eugene Loh: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Previous message:</strong> <a href="17131.php">Faisal Shahzad: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>In reply to:</strong> <a href="../../2011/08/17121.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17153.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Reply:</strong> <a href="17153.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
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
