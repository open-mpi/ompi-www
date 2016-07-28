<?
$subject_val = "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 06:41:26 2010" -->
<!-- isoreceived="20100204114126" -->
<!-- sent="Thu, 04 Feb 2010 12:41:18 +0100" -->
<!-- isosent="20100204114118" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround" -->
<!-- id="4B6AB25E.5010902_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B6A105B.3000805_at_khubla.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 06:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12001.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="11999.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11996.php">Damien Hocking: "[OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12001.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12001.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12004.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>I did a clean build on my 64 bit Windows 7, but I didn't see the same 
<br>
problem. Could you please make sure that the CMAKE_BUILD_TYPE variable 
<br>
in the CMake-GUI is set to &quot;release&quot;? Setting &quot;release&quot; in Visual Studio 
<br>
will not change the CMake install scripts.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p><p>Damien Hocking wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There might be some minor bugs in the 64-bit CMake Visual Studio 
</span><br>
<span class="quotelev1">&gt; Install project on Windows (say that 3 times fast...).  When I build a 
</span><br>
<span class="quotelev1">&gt; 64-bit release version, the install is still set up for installing 
</span><br>
<span class="quotelev1">&gt; pdbs, even though it's a release build.  This is for VS2008 on Windows 
</span><br>
<span class="quotelev1">&gt; 7, CMake 2.6.4.  The offending sections are below, and the install 
</span><br>
<span class="quotelev1">&gt; works if you delete these sections yourself.  It doesn't happen on 
</span><br>
<span class="quotelev1">&gt; 32-bit release installs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal cmake.install.cmake
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev1">&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev1">&gt;   FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
</span><br>
<span class="quotelev1">&gt; FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libopen-pald.pdb&quot;)
</span><br>
<span class="quotelev1">&gt; ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev1">&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi cmake.install.cmake
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev1">&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev1">&gt;   FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
</span><br>
<span class="quotelev1">&gt; FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libmpid.pdb&quot;)
</span><br>
<span class="quotelev1">&gt; ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev1">&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/mpi/cxx cmake.install.cmake
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev1">&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev1">&gt;   FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
</span><br>
<span class="quotelev1">&gt; FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libmpi_cxxd.pdb&quot;)
</span><br>
<span class="quotelev1">&gt; ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev1">&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte cmake.install.cmake
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev1">&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev1">&gt;   FILE(INSTALL DESTINATION &quot;${CMAKE_INSTALL_PREFIX}/bin&quot; TYPE FILE 
</span><br>
<span class="quotelev1">&gt; FILES &quot;C:/projects2/openmpi-1.4.1/build64/Debug/libopen-rted.pdb&quot;)
</span><br>
<span class="quotelev1">&gt; ENDIF(NOT CMAKE_INSTALL_COMPONENT OR &quot;${CMAKE_INSTALL_COMPONENT}&quot; 
</span><br>
<span class="quotelev1">&gt; STREQUAL &quot;Unspecified&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12001.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="11999.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11996.php">Damien Hocking: "[OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12001.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12001.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12004.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
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
