<?
$subject_val = "[OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 19:10:16 2010" -->
<!-- isoreceived="20100204001016" -->
<!-- sent="Wed, 03 Feb 2010 17:10:03 -0700" -->
<!-- isosent="20100204001003" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="[OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround" -->
<!-- id="4B6A105B.3000805_at_khubla.com" -->
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
<strong>Subject:</strong> [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 19:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11997.php">Dorian Krause: "[OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Previous message:</strong> <a href="11995.php">Prentice Bisbal: "[OMPI users] MPI_Comm_dup hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>There might be some minor bugs in the 64-bit CMake Visual Studio Install 
<br>
project on Windows (say that 3 times fast...).  When I build a 64-bit 
<br>
release version, the install is still set up for installing pdbs, even 
<br>
though it's a release build.  This is for VS2008 on Windows 7, CMake 
<br>
2.6.4.  The offending sections are below, and the install works if you 
<br>
delete these sections yourself.  It doesn't happen on 32-bit release 
<br>
installs.
<br>
<p>opal cmake.install.cmake
<br>
<p>IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; STREQUAL 
<br>
&quot;Unspecified&quot;)
<br>
&nbsp;&nbsp;&nbsp;FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
<br>
FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libopen-pald.pdb&quot;)
<br>
ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
<br>
STREQUAL &quot;Unspecified&quot;)
<br>
<p><p>ompi cmake.install.cmake
<br>
<p>IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; STREQUAL 
<br>
&quot;Unspecified&quot;)
<br>
&nbsp;&nbsp;&nbsp;FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
<br>
FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libmpid.pdb&quot;)
<br>
ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
<br>
STREQUAL &quot;Unspecified&quot;)
<br>
<p><p>ompi/mpi/cxx cmake.install.cmake
<br>
<p>IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; STREQUAL 
<br>
&quot;Unspecified&quot;)
<br>
&nbsp;&nbsp;&nbsp;FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
<br>
FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libmpi_cxxd.pdb&quot;)
<br>
ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
<br>
STREQUAL &quot;Unspecified&quot;)
<br>
<p>orte cmake.install.cmake
<br>
<p>IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; STREQUAL 
<br>
&quot;Unspecified&quot;)
<br>
&nbsp;&nbsp;&nbsp;FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
<br>
FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libopen-rted.pdb&quot;)
<br>
ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
<br>
STREQUAL &quot;Unspecified&quot;)
<br>
<p><p>Damien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11997.php">Dorian Krause: "[OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Previous message:</strong> <a href="11995.php">Prentice Bisbal: "[OMPI users] MPI_Comm_dup hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
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
