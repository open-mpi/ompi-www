<?
$subject_val = "[OMPI users] Building OpenMPI on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 06:47:36 2011" -->
<!-- isoreceived="20110316104736" -->
<!-- sent="Wed, 16 Mar 2011 16:17:30 +0530" -->
<!-- isosent="20110316104730" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI on Windows 7" -->
<!-- id="AANLkTinLLDKS3UK_KyUpgArbJDx6_EERqqEJtJCuHna-_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Building OpenMPI on Windows 7<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 06:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15878.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15878.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15878.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15879.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings!!!
<br>
<p><p><p>I am trying to build openmpi-1.3.4 and openmpi-1.4.3 on Windows 7 (64-bit
<br>
OS), but getting some difficuty...
<br>
<p><p><p>My build environment:
<br>
<p>OS                     : Windows 7 (64-bit)
<br>
<p>C/C++ compiler : Visual Studio 2008 and Visual Studio 2010
<br>
<p>Fortran compiler: Intel &quot;ifort&quot;
<br>
<p><p><p>Approach: followed the &quot;First Approach&quot; described in README.WINDOWS file.
<br>
<p><p><p>*1) Using openmpi-1.3.4:***
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Observed build time error in version.cc(136). This error is related to
<br>
getting SVN version information as described in
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/01/11860.php">http://www.open-mpi.org/community/lists/users/2010/01/11860.php</a>. As we are
<br>
using this openmpi-1.3.4 stable version on Linux platform, is there any fix
<br>
to this compile time error?
<br>
<p><p><p>*2) Using openmpi-1.4.3:***
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Builds properly without F77/F90 support (i.e. i.e. Skipping MPI F77
<br>
interface).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Now to get the &quot;mpif*.exe&quot; for fortran programs, I provided proper
<br>
&quot;ifort&quot; path and enabled &quot;OMPI_WANT_F77_BINDINGS=ON&quot; and/or
<br>
OMPI_WANT_F90_BINDINGS=ON flag; but getting following errors...
<br>
<p>*   2.a) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON gave following errors... *
<br>
<p>Check ifort external symbol convention...
<br>
<p>Check ifort external symbol convention...single underscore
<br>
<p>Check if Fortran 77 compiler supports LOGICAL...
<br>
<p>Check if Fortran 77 compiler supports LOGICAL...done
<br>
<p>Check size of Fortran 77 LOGICAL...
<br>
<p>CMake Error at contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76
<br>
(MESSAGE):
<br>
<p>Could not determine size of LOGICAL.
<br>
<p>Call Stack (most recent call first):
<br>
<p>contrib/platform/win32/CMakeModules/f77_check.cmake:82 (OMPI_F77_GET_SIZEOF)
<br>
<p>contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123
<br>
(OMPI_F77_CHECK)
<br>
<p>CMakeLists.txt:87 (INCLUDE)
<br>
<p>Configuring incomplete, errors occurred!
<br>
<p><p><p>*   2.b) &quot;ifort&quot; with OMPI_WANT_F90_BINDINGS=ON gave following errors... *
<br>
<p>Skipping MPI F77 interface
<br>
<p>CMake Error: File
<br>
C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake
<br>
does not exist.
<br>
<p>CMake Error at ompi/tools/CMakeLists.txt:93 (CONFIGURE_FILE):
<br>
<p>configure_file Problem configuring file
<br>
<p>CMake Error: File
<br>
C:/openmpi-1.4.3/contrib/platform/win32/ConfigFiles/mpif90-wrapper-data.txt.cmake
<br>
does not exist.
<br>
<p>CMake Error at ompi/tools/CMakeLists.txt:97 (CONFIGURE_FILE):
<br>
<p>configure_file Problem configuring file
<br>
<p>looking for ccp...
<br>
<p>looking for ccp...not found.
<br>
<p>looking for ccp...
<br>
<p>looking for ccp...not found.
<br>
<p>Configuring incomplete, errors occurred!
<br>
<p><p><p>*   2.c) &quot;ifort&quot; with OMPI_WANT_F77_BINDINGS=ON and
<br>
OMPI_WANT_F90_BINDINGS=ON gave following errors... *
<br>
<p>Check ifort external symbol convention...
<br>
<p>Check ifort external symbol convention...single underscore
<br>
<p>Check if Fortran 77 compiler supports LOGICAL...
<br>
<p>Check if Fortran 77 compiler supports LOGICAL...done
<br>
<p>Check size of Fortran 77 LOGICAL...
<br>
<p>CMake Error at contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake:76
<br>
(MESSAGE):
<br>
<p>Could not determine size of LOGICAL.
<br>
<p>Call Stack (most recent call first):
<br>
<p>contrib/platform/win32/CMakeModules/f77_check.cmake:82 (OMPI_F77_GET_SIZEOF)
<br>
<p>contrib/platform/win32/CMakeModules/ompi_configure.cmake:1123
<br>
(OMPI_F77_CHECK)
<br>
<p>CMakeLists.txt:87 (INCLUDE)
<br>
<p>Configuring incomplete, errors occurred!
<br>
<p><p><p>Any idea on resolving above errors to get mpif*.exe generated on Windows
<br>
platform using &quot;ifort&quot;?
<br>
<p>Please let me know if more information is required.
<br>
Thank you in advance.
<br>
<p>-Hiral
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15878.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="15876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15878.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15878.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="15879.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
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
