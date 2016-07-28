<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 07:51:18 2011" -->
<!-- isoreceived="20110317115118" -->
<!-- sent="Thu, 17 Mar 2011 12:51:10 +0100" -->
<!-- isosent="20110317115110" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Windows 7" -->
<!-- id="4D81F5AE.3040503_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTiki-w7A6wY4y5o9FG4T1HtxdHaMmQgdxymUj4xg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-03-17 07:51:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15891.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15889.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15889.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15891.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15891.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I tried building openmpi-1.5.2 on Windows 7 (as described below 
</span><br>
<span class="quotelev1">&gt; environment) with OMPI_WANT_F77_BINDINGS_ON and
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F90_BINDINGS_ON using &quot;ifort&quot;.
</span><br>
<span class="quotelev1">&gt; I observed that it has generated mpif77.exe but didn't generated 
</span><br>
<span class="quotelev1">&gt; mpif90.exe, any idea???
</span><br>
<p>There is no f90 bindings at moment for Windows.
<br>
<p><span class="quotelev1">&gt; BTW: while using above generated mpif77.exe to compile hello_f77.f got 
</span><br>
<span class="quotelev1">&gt; following errors...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     c:\openmpi-1.5.2\examples&gt; mpif77 hello_f77.f
</span><br>
<span class="quotelev1">&gt;     Intel(R) Visual Fortran Compiler Professional for applications
</span><br>
<span class="quotelev1">&gt;     running on IA-32,
</span><br>
<span class="quotelev1">&gt;      Version 11.1    Build 20100414 Package ID: w_cprof_p_11.1.065
</span><br>
<span class="quotelev1">&gt;     Copyright (C) 1985-2010 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;     C:/openmpi-1.5.2/installed/include\mpif-config.h(91): error #5082:
</span><br>
<span class="quotelev1">&gt;     Syntax error,
</span><br>
<span class="quotelev1">&gt;      found ')' when expecting one of: ( &lt;IDENTIFIER&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;CHAR_CON_KIND_PARAM&gt; &lt;CHAR_NAM
</span><br>
<span class="quotelev1">&gt;     _KIND_PARAM&gt; &lt;CHARACTER_CONSTANT&gt; &lt;INTEGER_CONSTANT&gt; ...
</span><br>
<span class="quotelev1">&gt;           parameter (MPI_STATUS_SIZE=)
</span><br>
<span class="quotelev1">&gt;     ---------------------------------^
</span><br>
<span class="quotelev1">&gt;     compilation aborted for hello_f77.f (code 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
It seems MPI_STATUS_SIZE is not set. Could you please send me your 
<br>
CMakeCache.txt to me off the mailing list, so that I can check what is 
<br>
going wrong? A quick solution would be just set it to 0.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 16, 2011 at 8:11 PM, Damien &lt;damien_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hiral,
</span><br>
<span class="quotelev1">&gt;     To add to Shiqing's comments, 1.5 has been running great for me on
</span><br>
<span class="quotelev1">&gt;     Windows for over 6 months since it was in beta.  You should give
</span><br>
<span class="quotelev1">&gt;     it a try.
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;     On 16/03/2011 8:34 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Hiral,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;     &gt; it's only experimental in 1.4 series. And there is only F77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     bingdings on Windows, no F90 bindings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Can you please provide steps to build 1.4.3 with experimental
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     f77 bindings on Windows?
</span><br>
<span class="quotelev2">&gt;&gt;     Well, I highly recommend to use 1.5 series, but I can also take a
</span><br>
<span class="quotelev2">&gt;&gt;     look and probably provide you a patch for 1.4 .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     BTW: Do you have any idea on: when next stable release with full
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     fortran support on Windows would be available?
</span><br>
<span class="quotelev2">&gt;&gt;     There is no plan yet.
</span><br>
<span class="quotelev2">&gt;&gt;     Regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Shiqing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -Hiral
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Wed, Mar 16, 2011 at 6:59 PM, Shiqing Fan &lt;fan_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;mailto:fan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hi Hiral,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         1.3.4 is quite old, please use the latest version. As Damien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         noted, the full fortran support is in 1.5 series, it's only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         experimental in 1.4 series. And there is only F77 bingdings
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         on Windows, no F90 bindings. Another choice is to use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         released binary installers to avoid compiling everything by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         yourself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Shiqing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On 3/16/2011 11:47 AM, hi wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Greetings!!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         I am trying to build openmpi-1.3.4 and openmpi-1.4.3 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Windows 7 (64-bit OS), but getting some difficuty...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         My build environment:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         OS : Windows 7 (64-bit)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         C/C++ compiler : Visual Studio 2008 and Visual Studio 2010
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Fortran compiler: Intel &quot;ifort&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Approach: followed the &quot;First Approach&quot; described in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         README.WINDOWS file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *1) Using openmpi-1.3.4:***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Observed build time error in version.cc(136). This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         error is related to getting SVN version information as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         described in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2010/01/11860.php">http://www.open-mpi.org/community/lists/users/2010/01/11860.php</a>.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         As we are using this openmpi-1.3.4 stable version on Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         platform, is there any fix to this compile time error?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *2) Using openmpi-1.4.3:***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Builds properly without F77/F90 support (i.e. i.e.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Skipping MPI F77 interface).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Now to get the &quot;mpif*.exe&quot; for fortran programs, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         provided proper &quot;ifort&quot; path and enabled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &quot;OMPI_WANT_F77_BINDINGS=ON&quot; and/or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         OMPI_WANT_F90_BINDINGS=ON flag; but getting following errors...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *   2.a) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON gave
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         following errors... *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check ifort external symbol convention...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check ifort external symbol convention...single underscore
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check if Fortran 77 compiler supports LOGICAL...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check if Fortran 77 compiler supports LOGICAL...done
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CMake Error at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (MESSAGE):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Could not determine size of LOGICAL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Call Stack (most recent call first):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         contrib/platform/win32/CMakeModules/f77_check.cmake:82
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (OMPI_F77_GET_SIZEOF)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (OMPI_F77_CHECK)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CMakeLists.txt:87 (INCLUDE)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *2.b) &quot;ifort&quot; with OMPI_WANT_F90_BINDINGS=ON gave following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         errors... *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Skipping MPI F77 interface
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CMake Error: File
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         does not exist.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CMake Error at ompi/tools/CMakeLists.txt:93 (CONFIGURE_FILE):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         configure_file Problem configuring file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CMake Error: File
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         does not exist.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CMake Error at ompi/tools/CMakeLists.txt:97 (CONFIGURE_FILE):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         configure_file Problem configuring file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         looking for ccp...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         looking for ccp...not found.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         looking for ccp...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         looking for ccp...not found.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *2.c) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         OMPI_WANT_F90_BINDINGS=ON gave following errors... *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check ifort external symbol convention...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check ifort external symbol convention...single underscore
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check if Fortran 77 compiler supports LOGICAL...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check if Fortran 77 compiler supports LOGICAL...done
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CMake Error at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (MESSAGE):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Could not determine size of LOGICAL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Call Stack (most recent call first):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         contrib/platform/win32/CMakeModules/f77_check.cmake:82
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (OMPI_F77_GET_SIZEOF)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (OMPI_F77_CHECK)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CMakeLists.txt:87 (INCLUDE)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Any idea on resolving above errors to get mpif*.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         generated on Windows platform using &quot;ifort&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Please let me know if more information is required.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Thank you in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -Hiral
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ---------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Shiqing Fan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt;     High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt;     Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt;     Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt;     email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15890/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15891.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15889.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15889.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15891.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15891.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
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
