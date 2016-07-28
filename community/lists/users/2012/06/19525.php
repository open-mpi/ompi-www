<?
$subject_val = "Re: [OMPI users] Unable to configure with f77 bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 10:11:31 2012" -->
<!-- isoreceived="20120613141131" -->
<!-- sent="Wed, 13 Jun 2012 10:11:25 -0400" -->
<!-- isosent="20120613141125" -->
<!-- name="Nicola J. Calder" -->
<!-- email="NCalder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to configure with f77 bindings" -->
<!-- id="2526FA38-F248-49A8-BBE9-86AB4D8526FF_at_geofirma.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FD898A8.4030407_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to configure with f77 bindings<br>
<strong>From:</strong> Nicola J. Calder (<em>NCalder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 10:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19526.php">Ralph Castain: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19524.php">Filippo Donida: "[OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>In reply to:</strong> <a href="19523.php">Shiqing Fan: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19528.php">John R. Cary: "[OMPI users] Plans for cmake with non-Windows?"</a>
<li><strong>Reply:</strong> <a href="19528.php">John R. Cary: "[OMPI users] Plans for cmake with non-Windows?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used the latest stable build of Open MPI (1.6-2).  I used Visual Studio 2005 (not Visual Studio 2005 x64).
<br>
<p>On 2012-06-13, at 9:42 AM, Shiqing Fan wrote:
<br>
<p>Hi Nicola,
<br>
<p>Which Open MPI version did you use?
<br>
<p>What build type did you use for configuring it? For example, if you use cmake generator &quot;Visual Studio 10 Win64&quot; then the whole project is configured only for 64bit, even if you change c/c++ options. In order to use f77, which is only 32 bit available, you have to configure the whole project with 32 bit, i.e. cmake generator &quot;Visual Studio 10&quot;.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p><p>On 2012-06-13 3:25 PM, Nicola J. Calder wrote:
<br>
I am trying to configure Open MPI using CMake 2.8.8 and Visual Studio 2005 in 32 bit mode, with Intel Fortran.  The machine is a 64 bit machine running Windows XP 64 bit, and VS has 64 bit support.
<br>
<p>Configure works fine without f77 bindings, but as soon as I add this option, I get the error:
<br>
<p>Checking for working Fortran compiler...
<br>
Microsoft (R) Incremental Linker Version 8.00.50727.762
<br>
Copyright (C) Microsoft Corporation.  All rights reserved.
<br>
<p>-out:testFortranCompiler.exe
<br>
-subsystem:console
<br>
testFortranCompiler.obj
<br>
LIBCMT.lib(crt0dat.obj) : fatal error LNK1112: module machine type 'x64' conflicts with target machine type 'X86'
<br>
<p>Intel(R) Fortran Compiler for 32-bit applications, Version 9.1    Build 20070322Z Package ID: W_FC_C_9.1.037
<br>
Copyright (C) 1985-2007 Intel Corporation.  All rights reserved.
<br>
<p><p>Fortran compiler ifort.exe can't compile a simple fortran program.
<br>
CMake Error at contrib/platform/win32/CMakeModules/setup_f77.cmake:116 (MESSAGE):
<br>
&nbsp;&nbsp;Cannot continue.  Please check Fortran compiler installation, or disable
<br>
&nbsp;&nbsp;Fortran 77 support.
<br>
Call Stack (most recent call first):
<br>
&nbsp;&nbsp;contrib/platform/win32/CMakeModules/ompi_configure.cmake:616 (INCLUDE)
<br>
&nbsp;&nbsp;CMakeLists.txt:99 (BEGIN_CONFIGURE)
<br>
<p><p>Configuring incomplete, errors occurred!
<br>
<p>I am using all default options, except that I have specified a cmake_build_type of release.  Both the c and cxx compilers appear to be pointing to the 64 bit versions, but changing these to the 32 bit versions does not seem to matter.
<br>
<p>If I attempt to compile testFortranCompiler from a command prompt it compiles without any difficulties (ifort testFortranCompiler.f, with no other flags).
<br>
<p>Any ideas which options I am missing to get this to work?
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><pre>
--
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]&lt;mailto:fan_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19526.php">Ralph Castain: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19524.php">Filippo Donida: "[OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>In reply to:</strong> <a href="19523.php">Shiqing Fan: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19528.php">John R. Cary: "[OMPI users] Plans for cmake with non-Windows?"</a>
<li><strong>Reply:</strong> <a href="19528.php">John R. Cary: "[OMPI users] Plans for cmake with non-Windows?"</a>
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
