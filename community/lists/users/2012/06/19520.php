<?
$subject_val = "[OMPI users] Unable to configure with f77 bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 09:25:53 2012" -->
<!-- isoreceived="20120613132553" -->
<!-- sent="Wed, 13 Jun 2012 09:25:46 -0400" -->
<!-- isosent="20120613132546" -->
<!-- name="Nicola J. Calder" -->
<!-- email="NCalder_at_[hidden]" -->
<!-- subject="[OMPI users] Unable to configure with f77 bindings" -->
<!-- id="0717D4FF-658A-4F6C-9097-3F5FE0408DE9_at_geofirma.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="13862F2C12551A4DBE20A6485933BC64EF5AE007B6_at_dc1.intera-eng.local" -->
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
<strong>Subject:</strong> [OMPI users] Unable to configure with f77 bindings<br>
<strong>From:</strong> Nicola J. Calder (<em>NCalder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 09:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19521.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19519.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19523.php">Shiqing Fan: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
<li><strong>Reply:</strong> <a href="19523.php">Shiqing Fan: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19520/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19521.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19519.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19523.php">Shiqing Fan: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
<li><strong>Reply:</strong> <a href="19523.php">Shiqing Fan: "Re: [OMPI users] Unable to configure with f77 bindings"</a>
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
