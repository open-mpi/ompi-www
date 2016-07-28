<?
$subject_val = "Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 12:33:50 2010" -->
<!-- isoreceived="20100128173350" -->
<!-- sent="Thu, 28 Jan 2010 18:33:40 +0100" -->
<!-- isosent="20100128173340" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran" -->
<!-- id="4B61CA74.3080109_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="473502DFF1A2F249B970842E22D9823B0193B9D6F530_at_MAILCCR.arl.psu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 12:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Previous message:</strong> <a href="11910.php">Justin Watson: "[OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>In reply to:</strong> <a href="11910.php">Justin Watson: "[OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Justin,
<br>
<p>Unfortunately, for Open MPI on Windows, not all the Fortran compilers 
<br>
are supported, and the f90 bindings haven't been implemented. But the 
<br>
f77 bindings are available, and the Windows version of GNU Fortran 
<br>
compilers should work in that case, e.g. g77, g95.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>Justin Watson wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I am trying to build a 32 bit version of OpenMP on 
</span><br>
<span class="quotelev1">&gt; Window XP 64 using Visual Studio 6 and Compaq Visual Fortran 6.6b.  I 
</span><br>
<span class="quotelev1">&gt;  am using CMake to configure the build I specify Visual Studio 6 as my 
</span><br>
<span class="quotelev1">&gt; generator for this project.  I specify where my c (cl.exe) and fortran 
</span><br>
<span class="quotelev1">&gt; (f90.exe) compilers are.  After I run configure for the first time, I 
</span><br>
<span class="quotelev1">&gt; select that I want f77 and f90 bindings.  The second time I run 
</span><br>
<span class="quotelev1">&gt; configure I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Define it as 'long long'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Define it as 'unsigned long long'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check alignment of long long in c...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check alignment of long long in c...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check C:/Program Files (x86)/Microsoft Visual Studio/DF98/BIN/F90.EXE 
</span><br>
<span class="quotelev1">&gt; external symbol convention...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMake Error at 
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/f77_find_ext_symbol_convention.cmake:96 
</span><br>
<span class="quotelev1">&gt; (MESSAGE):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unknow Fortran naming convertion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Call Stack (most recent call first):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/setup_f77.cmake:26 
</span><br>
<span class="quotelev1">&gt; (OMPI_F77_FIND_EXT_SYMBOL_CONVENTION)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/ompi_configure.cmake:1113 (INCLUDE)
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
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone had success in building with a similar configuration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Justin K. 
</span><br>
<span class="quotelev1">&gt; Watson                                                                                               
</span><br>
<span class="quotelev1">&gt; Email: jkw104_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research 
</span><br>
<span class="quotelev1">&gt; Assistant                                                                                          
</span><br>
<span class="quotelev1">&gt; Phone: (814) 863-6754
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Computational Methods Development Department                       
</span><br>
<span class="quotelev1">&gt; Fax: (814) 865-3287
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Applied Research Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Pennsylvania State University
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.O. Box 30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; State College, Pa 16804-0030
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Previous message:</strong> <a href="11910.php">Justin Watson: "[OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>In reply to:</strong> <a href="11910.php">Justin Watson: "[OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
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
