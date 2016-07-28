<?
$subject_val = "Re: [OMPI users] Unable to configure with f77 bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 09:40:56 2012" -->
<!-- isoreceived="20120613134056" -->
<!-- sent="Wed, 13 Jun 2012 15:42:00 +0200" -->
<!-- isosent="20120613134200" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to configure with f77 bindings" -->
<!-- id="4FD898A8.4030407_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0717D4FF-658A-4F6C-9097-3F5FE0408DE9_at_geofirma.ca" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 09:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19524.php">Filippo Donida: "[OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19522.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19520.php">Nicola J. Calder: "[OMPI users] Unable to configure with f77 bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19525.php">Nicola J. Calder: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
<li><strong>Reply:</strong> <a href="19525.php">Nicola J. Calder: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nicola,
<br>
<p>Which Open MPI version did you use?
<br>
<p>What build type did you use for configuring it? For example, if you use 
<br>
cmake generator &quot;Visual Studio 10 Win64&quot; then the whole project is 
<br>
configured only for 64bit, even if you change c/c++ options. In order to 
<br>
use f77, which is only 32 bit available, you have to configure the whole 
<br>
project with 32 bit, i.e. cmake generator &quot;Visual Studio 10&quot;.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p><p>On 2012-06-13 3:25 PM, Nicola J. Calder wrote:
<br>
<span class="quotelev1">&gt; I am trying to configure Open MPI using CMake 2.8.8 and Visual Studio 
</span><br>
<span class="quotelev1">&gt; 2005 in 32 bit mode, with Intel Fortran.  The machine is a 64 bit 
</span><br>
<span class="quotelev1">&gt; machine running Windows XP 64 bit, and VS has 64 bit support.
</span><br>
<span class="quotelev1">&gt; Configure works fine without f77 bindings, but as soon as I add this 
</span><br>
<span class="quotelev1">&gt; option, I get the error:
</span><br>
<span class="quotelev1">&gt; Checking for working Fortran compiler...
</span><br>
<span class="quotelev1">&gt; Microsoft (R) Incremental Linker Version 8.00.50727.762
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; -out:testFortranCompiler.exe
</span><br>
<span class="quotelev1">&gt; -subsystem:console
</span><br>
<span class="quotelev1">&gt; testFortranCompiler.obj
</span><br>
<span class="quotelev1">&gt; LIBCMT.lib(crt0dat.obj) : fatal error LNK1112: module machine type 
</span><br>
<span class="quotelev1">&gt; 'x64' conflicts with target machine type 'X86'
</span><br>
<span class="quotelev1">&gt; Intel(R) Fortran Compiler for 32-bit applications, Version 9.1    
</span><br>
<span class="quotelev1">&gt; Build 20070322Z Package ID: W_FC_C_9.1.037
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2007 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; Fortran compiler ifort.exe can't compile a simple fortran program.
</span><br>
<span class="quotelev1">&gt; CMake Error at contrib/platform/win32/CMakeModules/setup_f77.cmake:116 
</span><br>
<span class="quotelev1">&gt; (MESSAGE):
</span><br>
<span class="quotelev1">&gt;   Cannot continue.  Please check Fortran compiler installation, or disable
</span><br>
<span class="quotelev1">&gt;   Fortran 77 support.
</span><br>
<span class="quotelev1">&gt; Call Stack (most recent call first):
</span><br>
<span class="quotelev1">&gt;   contrib/platform/win32/CMakeModules/ompi_configure.cmake:616 (INCLUDE)
</span><br>
<span class="quotelev1">&gt;   CMakeLists.txt:99 (BEGIN_CONFIGURE)
</span><br>
<span class="quotelev1">&gt; Configuring incomplete, errors occurred!
</span><br>
<span class="quotelev1">&gt; I am using all default options, except that I have specified a 
</span><br>
<span class="quotelev1">&gt; cmake_build_type of release.  Both the c and cxx compilers appear to 
</span><br>
<span class="quotelev1">&gt; be pointing to the 64 bit versions, but changing these to the 32 bit 
</span><br>
<span class="quotelev1">&gt; versions does not seem to matter.
</span><br>
<span class="quotelev1">&gt; If I attempt to compile testFortranCompiler from a command prompt it 
</span><br>
<span class="quotelev1">&gt; compiles without any difficulties (ifort testFortranCompiler.f, with 
</span><br>
<span class="quotelev1">&gt; no other flags).
</span><br>
<span class="quotelev1">&gt; Any ideas which options I am missing to get this to work?
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19523/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19524.php">Filippo Donida: "[OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19522.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19520.php">Nicola J. Calder: "[OMPI users] Unable to configure with f77 bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19525.php">Nicola J. Calder: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
<li><strong>Reply:</strong> <a href="19525.php">Nicola J. Calder: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
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
