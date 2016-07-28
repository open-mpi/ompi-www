<?
$subject_val = "Re: [OMPI users] Problems with building with VS 2010 and VS 2012";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 11:49:08 2013" -->
<!-- isoreceived="20130507154908" -->
<!-- sent="Tue, 7 May 2013 08:49:01 -0700" -->
<!-- isosent="20130507154901" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with building with VS 2010 and VS 2012" -->
<!-- id="44BCF350-EC24-45F2-8C9D-DC6BF5CF913A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOr-WQvTbQNVXpKrAN4mtACSzVRhzPonD2kfDvYrNqK5cs+JTQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with building with VS 2010 and VS 2012<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 11:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21875.php">Ralph Castain: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>Previous message:</strong> <a href="21873.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>In reply to:</strong> <a href="21870.php">Nenad Vujicic: "[OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid our Windows support person has moved on to greener pastures, and so we don't actually support it any more (in fact, the 1.7 version specifically removed the support code).
<br>
<p>Our friends in the cygwin world have a module that allows you to continue using OMPI on those systems - you might check it out
<br>
<p>On May 7, 2013, at 8:16 AM, Nenad Vujicic &lt;nenadus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having troubles with building OpenMPI v1.6.4 (actually all v1.6 and v1.7 versions) release sources (in both x86 and x64 modes) on Windows machine using VS 2010 and VS 2012 compilers and cmake v2.8.10.2. Just to note, I tried it with VS2008 too and it worked fine in x86 mode, but failed in x64 mode. Here is error I get with VS2010 and VS2012 when I execute 'cmake-gui ..' and push Configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CMake Error at C:/Program Files (x86)/CMake 2.8/share/cmake-2.8/Modules/CMakeFortranInformation.cmake:27 (get_filename_component):
</span><br>
<span class="quotelev1">&gt; get_filename_component called with incorrect number of arguments
</span><br>
<span class="quotelev1">&gt; Call Stack (most recent call first):
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/setup_f77.cmake:18 (include)
</span><br>
<span class="quotelev1">&gt; contrib/platform/win32/CMakeModules/ompi_configure.cmake:616 (INCLUDE)
</span><br>
<span class="quotelev1">&gt; CMakeLists.txt:99 (BEGIN_CONFIGURE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I naively mask off using setup_F77 from ompi_configure.cmake (because I don't wan't Fortran support), I get following compile error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1&gt;------ Build started: Project: libmpi_cxx, Configuration: Debug Win32 ------
</span><br>
<span class="quotelev1">&gt; 1&gt;  file.cc
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\Program Files (x86)\Microsoft Visual Studio 11.0\VC\include\xkeycheck.h(199): warning C4005: 'inline' : macro redefinition
</span><br>
<span class="quotelev1">&gt; 1&gt;          c:\dependencies\openmpi\openmpi-1.6.4\build\opal\include\opal_config.h(1093) : see previous definition of 'inline'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\Program Files (x86)\Microsoft Visual Studio 11.0\VC\include\xkeycheck.h(242): fatal error C1189: #error :  The C++ Standard Library forbids macroizing keywords. Enable warning C4005 to find the forbidden macro.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have idea what I should patch to make it working with MS compilers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Nenad.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21875.php">Ralph Castain: "Re: [OMPI users] Building Open MPI with LSF"</a>
<li><strong>Previous message:</strong> <a href="21873.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>In reply to:</strong> <a href="21870.php">Nenad Vujicic: "[OMPI users] Problems with building with VS 2010 and VS 2012"</a>
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
