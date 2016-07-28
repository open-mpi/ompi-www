<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 10:41:26 2011" -->
<!-- isoreceived="20110316144126" -->
<!-- sent="Wed, 16 Mar 2011 08:41:05 -0600" -->
<!-- isosent="20110316144105" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Windows 7" -->
<!-- id="4D80CC01.1070101_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D80CA6D.20002_at_hlrs.de" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 10:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15883.php">Brock Palen: "[OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Previous message:</strong> <a href="15881.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15881.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15889.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15889.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hiral,
<br>
<p>To add to Shiqing's comments, 1.5 has been running great for me on 
<br>
Windows for over 6 months since it was in beta.  You should give it a try.
<br>
<p>Damien
<br>
<p>On 16/03/2011 8:34 AM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; Hi Hiral,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it's only experimental in 1.4 series. And there is only F77 
</span><br>
<span class="quotelev2">&gt;&gt; bingdings on Windows, no F90 bindings.
</span><br>
<span class="quotelev2">&gt;&gt; Can you please provide steps to build 1.4.3 with experimental f77 
</span><br>
<span class="quotelev2">&gt;&gt; bindings on Windows?
</span><br>
<span class="quotelev1">&gt; Well, I highly recommend to use 1.5 series, but I can also take a look 
</span><br>
<span class="quotelev1">&gt; and probably provide you a patch for 1.4 .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW: Do you have any idea on: when next stable release with full 
</span><br>
<span class="quotelev2">&gt;&gt; fortran support on Windows would be available?
</span><br>
<span class="quotelev1">&gt; There is no plan yet.
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
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; -Hiral
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Mar 16, 2011 at 6:59 PM, Shiqing Fan &lt;fan_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:fan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Hiral,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     1.3.4 is quite old, please use the latest version. As Damien
</span><br>
<span class="quotelev2">&gt;&gt;     noted, the full fortran support is in 1.5 series, it's only
</span><br>
<span class="quotelev2">&gt;&gt;     experimental in 1.4 series. And there is only F77 bingdings on
</span><br>
<span class="quotelev2">&gt;&gt;     Windows, no F90 bindings. Another choice is to use the released
</span><br>
<span class="quotelev2">&gt;&gt;     binary installers to avoid compiling everything by yourself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 3/16/2011 11:47 AM, hi wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Greetings!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I am trying to build openmpi-1.3.4 and openmpi-1.4.3 on Windows
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     7 (64-bit OS), but getting some difficuty...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     My build environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OS : Windows 7 (64-bit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C/C++ compiler : Visual Studio 2008 and Visual Studio 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Fortran compiler: Intel &quot;ifort&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Approach: followed the &quot;First Approach&quot; described in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     README.WINDOWS file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *1) Using openmpi-1.3.4:***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Observed build time error in version.cc(136). This error is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     related to getting SVN version information as described in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2010/01/11860.php">http://www.open-mpi.org/community/lists/users/2010/01/11860.php</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     As we are using this openmpi-1.3.4 stable version on Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     platform, is there any fix to this compile time error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *2) Using openmpi-1.4.3:***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Builds properly without F77/F90 support (i.e. i.e. Skipping
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI F77 interface).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Now to get the &quot;mpif*.exe&quot; for fortran programs, I provided
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     proper &quot;ifort&quot; path and enabled &quot;OMPI_WANT_F77_BINDINGS=ON&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and/or OMPI_WANT_F90_BINDINGS=ON flag; but getting following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     errors...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *   2.a) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON gave following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     errors... *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check ifort external symbol convention...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check ifort external symbol convention...single underscore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check if Fortran 77 compiler supports LOGICAL...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check if Fortran 77 compiler supports LOGICAL...done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CMake Error at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (MESSAGE):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Could not determine size of LOGICAL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Call Stack (most recent call first):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     contrib/platform/win32/CMakeModules/f77_check.cmake:82
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (OMPI_F77_GET_SIZEOF)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (OMPI_F77_CHECK)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CMakeLists.txt:87 (INCLUDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *2.b) &quot;ifort&quot; with OMPI_WANT_F90_BINDINGS=ON gave following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     errors... *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Skipping MPI F77 interface
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CMake Error: File
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     does not exist.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CMake Error at ompi/tools/CMakeLists.txt:93 (CONFIGURE_FILE):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     configure_file Problem configuring file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CMake Error: File
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     does not exist.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CMake Error at ompi/tools/CMakeLists.txt:97 (CONFIGURE_FILE):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     configure_file Problem configuring file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     looking for ccp...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     looking for ccp...not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     looking for ccp...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     looking for ccp...not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *2.c) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OMPI_WANT_F90_BINDINGS=ON gave following errors... *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check ifort external symbol convention...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check ifort external symbol convention...single underscore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check if Fortran 77 compiler supports LOGICAL...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check if Fortran 77 compiler supports LOGICAL...done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Check size of Fortran 77 LOGICAL...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CMake Error at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (MESSAGE):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Could not determine size of LOGICAL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Call Stack (most recent call first):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     contrib/platform/win32/CMakeModules/f77_check.cmake:82
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (OMPI_F77_GET_SIZEOF)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (OMPI_F77_CHECK)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CMakeLists.txt:87 (INCLUDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Any idea on resolving above errors to get mpif*.exe generated on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Windows platform using &quot;ifort&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Please let me know if more information is required.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thank you in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -Hiral
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15883.php">Brock Palen: "[OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Previous message:</strong> <a href="15881.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15881.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15889.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15889.php">hi: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
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
