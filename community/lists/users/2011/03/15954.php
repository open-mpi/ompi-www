<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 06:08:05 2011" -->
<!-- isoreceived="20110322100805" -->
<!-- sent="Tue, 22 Mar 2011 11:07:57 +0100" -->
<!-- isosent="20110322100757" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Windows 7" -->
<!-- id="4D8874FD.8090908_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinOmBJ6pbhjx-y7Haw9xCkqq=HS92aSfa+7qjqy_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-03-22 06:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15955.php">Abdul Rahman Riza: "[OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>Previous message:</strong> <a href="15953.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15953.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hiral,
<br>
<p>You have to add &quot;OMPI_IMPORTS&quot; as a preprocessor definition in you 
<br>
project configuration. Or a easier way is to use the mpicc command line.
<br>
<p>Please also take a look into the output of &quot;mpicc --showme&quot;, it will 
<br>
give you the complete compile options.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 3/22/2011 10:36 AM, hi wrote:
<br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt; While building my application (on Windows 7, Vistual Studio 2008 
</span><br>
<span class="quotelev1">&gt; 32-bit application) with openmpi-1.5.2, getting following error...
</span><br>
<span class="quotelev1">&gt; util.o : error LNK2001: unresolved external symbol _ompi_mpi_byte
</span><br>
<span class="quotelev1">&gt; util.o : error LNK2001: unresolved external symbol _ompi_mpi_op_max
</span><br>
<span class="quotelev1">&gt; util.o : error LNK2001: unresolved external symbol _ompi_mpi_int
</span><br>
<span class="quotelev1">&gt; util.o : error LNK2001: unresolved external symbol _ompi_mpi_char
</span><br>
<span class="quotelev1">&gt; util.o : error LNK2001: unresolved external symbol _ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt; util.o : error LNK2001: unresolved external symbol _ompi_mpi_op_sum
</span><br>
<span class="quotelev1">&gt; Linking options...
</span><br>
<span class="quotelev1">&gt; /LIBPATH:&quot;&quot;c:\openmpi-1.5.2\installed&quot;/lib/&quot; libmpi_cxxd.lib 
</span><br>
<span class="quotelev1">&gt; libmpid.lib libmpi_f77d.lib libopen-pald.lib libopen-rted.lib
</span><br>
<span class="quotelev1">&gt; I seems that 'dllexport' is missing for above symbols.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 18, 2011 at 1:53 AM, Shiqing Fan &lt;fan_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:fan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Hiral,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; There is no f90 bindings at moment for Windows.
</span><br>
<span class="quotelev2">&gt;&gt;     Any idea when this available?
</span><br>
<span class="quotelev1">&gt;     At moment, no. But only if there is strong requirements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;     -Hiral
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Mar 17, 2011 at 5:21 PM, Shiqing Fan &lt;fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:fan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I tried building openmpi-1.5.2 on Windows 7 (as described
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         below environment) with OMPI_WANT_F77_BINDINGS_ON and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OMPI_WANT_F90_BINDINGS_ON using &quot;ifort&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I observed that it has generated mpif77.exe but didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         generated mpif90.exe, any idea???
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         There is no f90 bindings at moment for Windows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         BTW: while using above generated mpif77.exe to compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hello_f77.f got following errors...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             c:\openmpi-1.5.2\examples&gt; mpif77 hello_f77.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Intel(R) Visual Fortran Compiler Professional for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             applications running on IA-32,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Version 11.1    Build 20100414 Package ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             w_cprof_p_11.1.065
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Copyright (C) 1985-2010 Intel Corporation.  All rights
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C:/openmpi-1.5.2/installed/include\mpif-config.h(91):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             error #5082: Syntax error,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              found ')' when expecting one of: ( &lt;IDENTIFIER&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;CHAR_CON_KIND_PARAM&gt; &lt;CHAR_NAM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _KIND_PARAM&gt; &lt;CHARACTER_CONSTANT&gt; &lt;INTEGER_CONSTANT&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   parameter (MPI_STATUS_SIZE=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ---------------------------------^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             compilation aborted for hello_f77.f (code 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         It seems MPI_STATUS_SIZE is not set. Could you please send me
</span><br>
<span class="quotelev2">&gt;&gt;         your CMakeCache.txt to me off the mailing list, so that I can
</span><br>
<span class="quotelev2">&gt;&gt;         check what is going wrong? A quick solution would be just set
</span><br>
<span class="quotelev2">&gt;&gt;         it to 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Regards,
</span><br>
<span class="quotelev2">&gt;&gt;         Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -Hiral
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Wed, Mar 16, 2011 at 8:11 PM, Damien &lt;damien_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Hiral,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             To add to Shiqing's comments, 1.5 has been running great
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             for me on Windows for over 6 months since it was in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             beta.  You should give it a try.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Damien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On 16/03/2011 8:34 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Hi Hiral,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;             &gt; it's only experimental in 1.4 series. And there is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             only F77 bingdings on Windows, no F90 bindings.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Can you please provide steps to build 1.4.3 with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             experimental f77 bindings on Windows?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Well, I highly recommend to use 1.5 series, but I can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             also take a look and probably provide you a patch for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             1.4 .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             BTW: Do you have any idea on: when next stable release
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             with full fortran support on Windows would be available?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             There is no plan yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Shiqing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Thank you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             -Hiral
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             On Wed, Mar 16, 2011 at 6:59 PM, Shiqing Fan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             &lt;fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Hi Hiral,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 1.3.4 is quite old, please use the latest version.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 As Damien noted, the full fortran support is in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 1.5 series, it's only experimental in 1.4 series.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 And there is only F77 bingdings on Windows, no F90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 bindings. Another choice is to use the released
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 binary installers to avoid compiling everything by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 yourself.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Best Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Shiqing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 On 3/16/2011 11:47 AM, hi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Greetings!!!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 I am trying to build openmpi-1.3.4 and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 openmpi-1.4.3 on Windows 7 (64-bit OS), but
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 getting some difficuty...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 My build environment:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 OS : Windows 7 (64-bit)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 C/C++ compiler : Visual Studio 2008 and Visual
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Studio 2010
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Fortran compiler: Intel &quot;ifort&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Approach: followed the &quot;First Approach&quot; described
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 in README.WINDOWS file.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *1) Using openmpi-1.3.4:***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     Observed build time error in version.cc(136).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 This error is related to getting SVN version
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 information as described in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2010/01/11860.php">http://www.open-mpi.org/community/lists/users/2010/01/11860.php</a>.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 As we are using this openmpi-1.3.4 stable version
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 on Linux platform, is there any fix to this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 compile time error?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *2) Using openmpi-1.4.3:***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     Builds properly without F77/F90 support (i.e.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 i.e. Skipping MPI F77 interface).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                     Now to get the &quot;mpif*.exe&quot; for fortran
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 programs, I provided proper &quot;ifort&quot; path and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 enabled &quot;OMPI_WANT_F77_BINDINGS=ON&quot; and/or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 OMPI_WANT_F90_BINDINGS=ON flag; but getting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 following errors...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *   2.a) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 gave following errors... *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check ifort external symbol convention...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check ifort external symbol convention...single
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 underscore
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check if Fortran 77 compiler supports LOGICAL...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check if Fortran 77 compiler supports LOGICAL...done
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 CMake Error at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 (MESSAGE):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Could not determine size of LOGICAL.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Call Stack (most recent call first):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 contrib/platform/win32/CMakeModules/f77_check.cmake:82
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 (OMPI_F77_GET_SIZEOF)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 (OMPI_F77_CHECK)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 CMakeLists.txt:87 (INCLUDE)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *2.b) &quot;ifort&quot; with OMPI_WANT_F90_BINDINGS=ON gave
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 following errors... *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Skipping MPI F77 interface
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 CMake Error: File
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 does not exist.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 CMake Error at ompi/tools/CMakeLists.txt:93
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 (CONFIGURE_FILE):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 configure_file Problem configuring file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 CMake Error: File
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 does not exist.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 CMake Error at ompi/tools/CMakeLists.txt:97
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 (CONFIGURE_FILE):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 configure_file Problem configuring file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 looking for ccp...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 looking for ccp...not found.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 looking for ccp...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 looking for ccp...not found.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *2.c) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 OMPI_WANT_F90_BINDINGS=ON gave following errors... *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check ifort external symbol convention...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check ifort external symbol convention...single
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 underscore
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check if Fortran 77 compiler supports LOGICAL...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check if Fortran 77 compiler supports LOGICAL...done
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Check size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 CMake Error at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 (MESSAGE):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Could not determine size of LOGICAL.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Call Stack (most recent call first):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 contrib/platform/win32/CMakeModules/f77_check.cmake:82
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 (OMPI_F77_GET_SIZEOF)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 (OMPI_F77_CHECK)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 CMakeLists.txt:87 (INCLUDE)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Any idea on resolving above errors to get
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 mpif*.exe generated on Windows platform using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 &quot;ifort&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Please let me know if more information is required.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Thank you in advance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 -Hiral
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Shiqing Fan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             ---------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Shiqing Fan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt;         High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt;         Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt;         Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt;         email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Shiqing Fan
</span><br>
<span class="quotelev1">&gt;     High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt;     Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt;     Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt;     email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
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
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15954/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15955.php">Abdul Rahman Riza: "[OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>Previous message:</strong> <a href="15953.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15953.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
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
