<?
$subject_val = "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 09:20:31 2010" -->
<!-- isoreceived="20100204142031" -->
<!-- sent="Thu, 04 Feb 2010 07:20:19 -0700" -->
<!-- isosent="20100204142019" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround" -->
<!-- id="4B6AD7A3.8040707_at_0x544745.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B6AB25E.5010902_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 09:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12002.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12002.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12002.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm.  I did try setting release and I think I still got pdbs.  I'll try 
<br>
again from a totally clean source tree and post back.
<br>
<p>Damien
<br>
<p>On 10-02-04 4:41 AM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Damien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did a clean build on my 64 bit Windows 7, but I didn't see the same 
</span><br>
<span class="quotelev1">&gt; problem. Could you please make sure that the CMAKE_BUILD_TYPE variable 
</span><br>
<span class="quotelev1">&gt; in the CMake-GUI is set to &quot;release&quot;? Setting &quot;release&quot; in Visual 
</span><br>
<span class="quotelev1">&gt; Studio will not change the CMake install scripts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien Hocking wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There might be some minor bugs in the 64-bit CMake Visual Studio 
</span><br>
<span class="quotelev2">&gt;&gt; Install project on Windows (say that 3 times fast...).  When I build 
</span><br>
<span class="quotelev2">&gt;&gt; a 64-bit release version, the install is still set up for installing 
</span><br>
<span class="quotelev2">&gt;&gt; pdbs, even though it's a release build.  This is for VS2008 on 
</span><br>
<span class="quotelev2">&gt;&gt; Windows 7, CMake 2.6.4.  The offending sections are below, and the 
</span><br>
<span class="quotelev2">&gt;&gt; install works if you delete these sections yourself.  It doesn't 
</span><br>
<span class="quotelev2">&gt;&gt; happen on 32-bit release installs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal cmake.install.cmake
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;   FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
</span><br>
<span class="quotelev2">&gt;&gt; FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libopen-pald.pdb&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi cmake.install.cmake
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;   FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
</span><br>
<span class="quotelev2">&gt;&gt; FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libmpid.pdb&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mpi/cxx cmake.install.cmake
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;   FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
</span><br>
<span class="quotelev2">&gt;&gt; FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libmpi_cxxd.pdb&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte cmake.install.cmake
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;   FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
</span><br>
<span class="quotelev2">&gt;&gt; FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libopen-rted.pdb&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12002.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12002.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12002.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
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
