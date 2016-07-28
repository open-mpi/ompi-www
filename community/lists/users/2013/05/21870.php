<?
$subject_val = "[OMPI users] Problems with building with VS 2010 and VS 2012";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 11:23:04 2013" -->
<!-- isoreceived="20130507152304" -->
<!-- sent="Tue, 7 May 2013 17:16:37 +0200" -->
<!-- isosent="20130507151637" -->
<!-- name="Nenad Vujicic" -->
<!-- email="nenadus_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with building with VS 2010 and VS 2012" -->
<!-- id="CAOr-WQvTbQNVXpKrAN4mtACSzVRhzPonD2kfDvYrNqK5cs+JTQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problems with building with VS 2010 and VS 2012<br>
<strong>From:</strong> Nenad Vujicic (<em>nenadus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 11:16:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21871.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21869.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21874.php">Ralph Castain: "Re: [OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>Reply:</strong> <a href="21874.php">Ralph Castain: "Re: [OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I'm having troubles with building OpenMPI v1.6.4 (actually all v1.6 and
<br>
v1.7 versions) release sources (in both x86 and x64 modes) on Windows
<br>
machine using VS 2010 and VS 2012 compilers and cmake v2.8.10.2. Just to
<br>
note, I tried it with VS2008 too and it worked fine in x86 mode, but failed
<br>
in x64 mode. Here is error I get with VS2010 and VS2012 when I execute
<br>
'cmake-gui ..' and push Configure:
<br>
<p>CMake Error at C:/Program Files (x86)/CMake
<br>
2.8/share/cmake-2.8/Modules/CMakeFortranInformation.cmake:27
<br>
(get_filename_component):
<br>
get_filename_component called with incorrect number of arguments
<br>
Call Stack (most recent call first):
<br>
contrib/platform/win32/CMakeModules/setup_f77.cmake:18 (include)
<br>
contrib/platform/win32/CMakeModules/ompi_configure.cmake:616 (INCLUDE)
<br>
CMakeLists.txt:99 (BEGIN_CONFIGURE)
<br>
<p>If I naively mask off using setup_F77 from ompi_configure.cmake (because I
<br>
don't wan't Fortran support), I get following compile error:
<br>
<p>1&gt;------ Build started: Project: libmpi_cxx, Configuration: Debug Win32
<br>
------
<br>
1&gt;  file.cc
<br>
1&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
11.0\VC\include\xkeycheck.h(199): warning C4005: 'inline' : macro
<br>
redefinition
<br>
1&gt;
<br>
&nbsp;c:\dependencies\openmpi\openmpi-1.6.4\build\opal\include\opal_config.h(1093)
<br>
: see previous definition of 'inline'
<br>
1&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
11.0\VC\include\xkeycheck.h(242): fatal error C1189: #error :  The C++
<br>
Standard Library forbids macroizing keywords. Enable warning C4005 to find
<br>
the forbidden macro.
<br>
<p>Do you have idea what I should patch to make it working with MS compilers?
<br>
<p>Best regards,
<br>
Nenad.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21870/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21871.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21869.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21874.php">Ralph Castain: "Re: [OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>Reply:</strong> <a href="21874.php">Ralph Castain: "Re: [OMPI users] Problems with building with VS 2010 and VS 2012"</a>
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
