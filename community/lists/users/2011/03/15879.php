<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 09:29:20 2011" -->
<!-- isoreceived="20110316132920" -->
<!-- sent="Wed, 16 Mar 2011 14:29:15 +0100" -->
<!-- isosent="20110316132915" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Windows 7" -->
<!-- id="4D80BB2B.9060207_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinLLDKS3UK_KyUpgArbJDx6_EERqqEJtJCuHna-_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI on Windows 7<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 09:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15880.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15878.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15877.php">hi: "[OMPI users] Building OpenMPI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15880.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15880.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hiral,
<br>
<p>1.3.4 is quite old, please use the latest version. As Damien noted, the 
<br>
full fortran support is in 1.5 series, it's only experimental in 1.4 
<br>
series. And there is only F77 bingdings on Windows, no F90 bindings. 
<br>
Another choice is to use the released binary installers to avoid 
<br>
compiling everything by yourself.
<br>
<p><p>Best Regards,
<br>
Shiqing
<br>
<p>On 3/16/2011 11:47 AM, hi wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build openmpi-1.3.4 and openmpi-1.4.3 on Windows 7 
</span><br>
<span class="quotelev1">&gt; (64-bit OS), but getting some difficuty...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My build environment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS : Windows 7 (64-bit)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C/C++ compiler : Visual Studio 2008 and Visual Studio 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fortran compiler: Intel &quot;ifort&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Approach: followed the &quot;First Approach&quot; described in README.WINDOWS file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *1) Using openmpi-1.3.4:***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Observed build time error in version.cc(136). This error is 
</span><br>
<span class="quotelev1">&gt; related to getting SVN version information as described in 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/01/11860.php">http://www.open-mpi.org/community/lists/users/2010/01/11860.php</a>. As we 
</span><br>
<span class="quotelev1">&gt; are using this openmpi-1.3.4 stable version on Linux platform, is 
</span><br>
<span class="quotelev1">&gt; there any fix to this compile time error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *2) Using openmpi-1.4.3:***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Builds properly without F77/F90 support (i.e. i.e. Skipping MPI 
</span><br>
<span class="quotelev1">&gt; F77 interface).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Now to get the &quot;mpif*.exe&quot; for fortran programs, I provided proper 
</span><br>
<span class="quotelev1">&gt; &quot;ifort&quot; path and enabled &quot;OMPI_WANT_F77_BINDINGS=ON&quot; and/or 
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F90_BINDINGS=ON flag; but getting following errors...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *   2.a) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON gave following errors... *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check ifort external symbol convention...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check ifort external symbol convention...single underscore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check if Fortran 77 compiler supports LOGICAL...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check if Fortran 77 compiler supports LOGICAL...done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMake Error at 
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76 (MESSAGE):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could not determine size of LOGICAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Call Stack (most recent call first):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/f77_check.cmake:82 
</span><br>
<span class="quotelev1">&gt; (OMPI_F77_GET_SIZEOF)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123 
</span><br>
<span class="quotelev1">&gt; (OMPI_F77_CHECK)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMakeLists.txt:87 (INCLUDE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *2.b) &quot;ifort&quot; with OMPI_WANT_F90_BINDINGS=ON gave following errors... *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Skipping MPI F77 interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMake Error: File 
</span><br>
<span class="quotelev1">&gt; C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake 
</span><br>
<span class="quotelev1">&gt; does not exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMake Error at ompi/tools/CMakeLists.txt:93 (CONFIGURE_FILE):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure_file Problem configuring file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMake Error: File 
</span><br>
<span class="quotelev1">&gt; C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake 
</span><br>
<span class="quotelev1">&gt; does not exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMake Error at ompi/tools/CMakeLists.txt:97 (CONFIGURE_FILE):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure_file Problem configuring file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; looking for ccp...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; looking for ccp...not found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; looking for ccp...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; looking for ccp...not found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *2.c) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON and 
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F90_BINDINGS=ON gave following errors... *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check ifort external symbol convention...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check ifort external symbol convention...single underscore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check if Fortran 77 compiler supports LOGICAL...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check if Fortran 77 compiler supports LOGICAL...done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMake Error at 
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76 (MESSAGE):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could not determine size of LOGICAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Call Stack (most recent call first):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/f77_check.cmake:82 
</span><br>
<span class="quotelev1">&gt; (OMPI_F77_GET_SIZEOF)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123 
</span><br>
<span class="quotelev1">&gt; (OMPI_F77_CHECK)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMakeLists.txt:87 (INCLUDE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea on resolving above errors to get mpif*.exe generated on 
</span><br>
<span class="quotelev1">&gt; Windows platform using &quot;ifort&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if more information is required.
</span><br>
<span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Hiral
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
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15880.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15878.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15877.php">hi: "[OMPI users] Building OpenMPI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15880.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15880.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
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
