<?
$subject_val = "[OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 11:44:56 2010" -->
<!-- isoreceived="20100128164456" -->
<!-- sent="Thu, 28 Jan 2010 11:44:46 -0500" -->
<!-- isosent="20100128164446" -->
<!-- name="Justin Watson" -->
<!-- email="jkw104_at_[hidden]" -->
<!-- subject="[OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran" -->
<!-- id="473502DFF1A2F249B970842E22D9823B0193B9D6F530_at_MAILCCR.arl.psu.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran<br>
<strong>From:</strong> Justin Watson (<em>jkw104_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 11:44:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11911.php">Shiqing Fan: "Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>Previous message:</strong> <a href="11909.php">Laurence Marks: "[OMPI users] Trapping fortran I/O errors leaving zombie mpi processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11911.php">Shiqing Fan: "Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>Reply:</strong> <a href="11911.php">Shiqing Fan: "Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am trying to build a 32 bit version of OpenMP on Window XP 64 using Visual Studio 6 and Compaq Visual Fortran 6.6b.  I  am using CMake to configure the build I specify Visual Studio 6 as my generator for this project.  I specify where my c (cl.exe) and fortran (f90.exe) compilers are.  After I run configure for the first time, I select that I want f77 and f90 bindings.  The second time I run configure I get the following error:
<br>
<p>Define it as 'long long'.
<br>
Define it as 'unsigned long long'.
<br>
Check alignment of long long in c...
<br>
Check alignment of long long in c...
<br>
Check C:/Program Files (x86)/Microsoft Visual Studio/DF98/BIN/F90.EXE external symbol convention...
<br>
CMake Error at contrib/platform/win32/CMakeModules/f77_find_ext_symbol_convention.cmake:96 (MESSAGE):
<br>
unknow Fortran naming convertion.
<br>
Call Stack (most recent call first):
<br>
contrib/platform/win32/CMakeModules/setup_f77.cmake:26 (OMPI_F77_FIND_EXT_SYMBOL_CONVENTION)
<br>
contrib/platform/win32/CMakeModules/ompi_configure.cmake:1113 (INCLUDE)
<br>
CMakeLists.txt:87 (INCLUDE)
<br>
Configuring incomplete, errors occurred!
<br>
<p>Has anyone had success in building with a similar configuration?
<br>
<p><p>Justin K. Watson                                                                                               Email: jkw104_at_[hidden]
<br>
Research Assistant                                                                                          Phone: (814) 863-6754
<br>
Computational Methods Development Department                       Fax: (814) 865-3287
<br>
<p><p>Applied Research Laboratory
<br>
The Pennsylvania State University
<br>
P.O. Box 30
<br>
State College, Pa 16804-0030
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11910/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11911.php">Shiqing Fan: "Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>Previous message:</strong> <a href="11909.php">Laurence Marks: "[OMPI users] Trapping fortran I/O errors leaving zombie mpi processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11911.php">Shiqing Fan: "Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>Reply:</strong> <a href="11911.php">Shiqing Fan: "Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
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
