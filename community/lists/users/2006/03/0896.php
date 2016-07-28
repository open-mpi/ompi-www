<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 23 17:32:25 2006" -->
<!-- isoreceived="20060323223225" -->
<!-- sent="Thu, 23 Mar 2006 17:32:17 -0500" -->
<!-- isosent="20060323223217" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] Absoft fortran detected as g77?" -->
<!-- id="AF7DC37C-1520-4F42-8B2D-4FE8C9D4F169_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-23 17:32:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0897.php">Ralph Castain: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0895.php">Edgar Gabriel: "Re: [OMPI users] Error message about libopal.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Reply:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have Absoft version 8.2a installed on my OS X 10.4.5 system and in  
<br>
order to do some testing I was trying to build OpenMPI 1.1a1r9364  
<br>
with it and got the following funny result:
<br>
<p>*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... yes
<br>
checking whether f95 accepts -g... yes
<br>
checking if Fortran 77 compiler works... yes
<br>
checking f95 external symbol convention... upper case
<br>
checking if Fortran 77 compiler supports LOGICAL... yes
<br>
checking size of Fortran 77 LOGICAL...
<br>
checking for C type corresponding to LOGICAL... not found
<br>
configure: WARNING: *** Did not find corresponding C type
<br>
configure: error: Cannot continue
<br>
<p>Note that f95 is/should be my Absoft compiler but the configure  
<br>
script flags it as the GNU Fortran 77 compiler.
<br>
<p>I had set FC and F77 to f95.
<br>
<p>The config.log is attached and the terminal display is pasted below:
<br>
<p>checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for gawk... no
<br>
checking for mawk... no
<br>
checking for nawk... no
<br>
checking for awk... awk
<br>
checking whether make sets $(MAKE)... yes
<br>
<p>======================================================================== 
<br>
====
<br>
== Configuring Open MPI
<br>
======================================================================== 
<br>
====
<br>
<p>*** Checking versions
<br>
checking Open MPI version... 1.1a1r9364
<br>
checking Open MPI Subversion repository version... r9364
<br>
checking Open Run-Time Environment version... 1.1a1r9364
<br>
checking Open Run-Time Environment Subversion repository version...  
<br>
r9364
<br>
checking Open Portable Access Layer version... 1.1a1r9364
<br>
checking Open Portable Access Layer Subversion repository version...  
<br>
r9364
<br>
<p>*** Initialization, setup
<br>
configure: builddir: /Users/mkluskens/Public/MPI/OpenMPI/ 
<br>
openmpi-1.1a1r9364
<br>
configure: srcdir: /Users/mkluskens/Public/MPI/OpenMPI/ 
<br>
openmpi-1.1a1r9364
<br>
checking build system type... powerpc-apple-darwin8.5.0
<br>
checking host system type... powerpc-apple-darwin8.5.0
<br>
checking for prefix by checking for ompi_clean... no
<br>
installing to directory &quot;/usr/local&quot;
<br>
<p>*** Configuration options
<br>
checking Whether to run code coverage... no
<br>
checking whether to debug memory usage... no
<br>
checking whether to profile memory usage... no
<br>
checking if want developer-level compiler pickyness... no
<br>
checking if want developer-level debugging code... no
<br>
checking if want Fortran 77 bindings... yes
<br>
checking if want Fortran 90 bindings... yes
<br>
checking whether to enable PMPI... yes
<br>
checking if want C++ bindings... yes
<br>
checking if want to enable weak symbol support... yes
<br>
checking if want run-time MPI parameter checking... runtime
<br>
checking if want to install OMPI header files... no
<br>
checking if want pretty-print stacktrace... yes
<br>
checking if want deprecated executable names... no
<br>
checking max supported array dimension in F90 MPI bindings... 4
<br>
checking if pty support should be enabled... yes
<br>
checking if user wants dlopen support... yes
<br>
checking if heterogeneous support should be enabled... yes
<br>
checking if want trace file debugging... no
<br>
<p>======================================================================== 
<br>
====
<br>
== Compiler and preprocessor tests
<br>
======================================================================== 
<br>
====
<br>
<p>*** C compiler and preprocessor
<br>
checking for style of include used by make... GNU
<br>
checking for gcc... gcc
<br>
checking for C compiler default output file name... a.out
<br>
checking whether the C compiler works... yes
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of executables...
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether gcc accepts -g... yes
<br>
checking for gcc option to accept ANSI C... none needed
<br>
checking dependency style of gcc... gcc3
<br>
checking whether gcc and cc understand -c and -o together... yes
<br>
checking for the C compiler vendor... gnu
<br>
checking if gcc supports -finline-functions... yes
<br>
checking if gcc supports -fno-strict-aliasing... yes
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
checking for C optimization flags... -O3 -DNDEBUG -fno-strict-aliasing
<br>
checking how to run the C preprocessor... gcc -E
<br>
checking for egrep... grep -E
<br>
checking for ANSI C header files... yes
<br>
checking for sys/types.h... yes
<br>
checking for sys/stat.h... yes
<br>
checking for stdlib.h... yes
<br>
checking for string.h... yes
<br>
checking for memory.h... yes
<br>
checking for strings.h... yes
<br>
checking for inttypes.h... yes
<br>
checking for stdint.h... yes
<br>
checking for unistd.h... yes
<br>
checking for long long... yes
<br>
checking for long double... yes
<br>
checking for int8_t... yes
<br>
checking for uint8_t... yes
<br>
checking for int16_t... yes
<br>
checking for uint16_t... yes
<br>
checking for int32_t... yes
<br>
checking for uint32_t... yes
<br>
checking for int64_t... yes
<br>
checking for uint64_t... yes
<br>
checking for intptr_t... yes
<br>
checking for uintptr_t... yes
<br>
checking for mode_t... yes
<br>
checking for char... yes
<br>
checking size of char... 1
<br>
checking for short... yes
<br>
checking size of short... 2
<br>
checking for int... yes
<br>
checking size of int... 4
<br>
checking for long... yes
<br>
checking size of long... 4
<br>
checking for long long... (cached) yes
<br>
checking size of long long... 8
<br>
checking for long double... (cached) yes
<br>
checking size of long double... 16
<br>
checking for float... yes
<br>
checking size of float... 4
<br>
checking for double... yes
<br>
checking size of double... 8
<br>
checking for void *... yes
<br>
checking size of void *... 4
<br>
checking for size_t... yes
<br>
checking size of size_t... 4
<br>
checking alignment of char... 1
<br>
checking alignment of short... 2
<br>
checking alignment of wchar_t... 4
<br>
checking alignment of int... 4
<br>
checking alignment of long... 4
<br>
checking alignment of long long... 4
<br>
checking alignment of float... 4
<br>
checking alignment of double... 4
<br>
checking alignment of long double... 16
<br>
checking alignment of void *... 4
<br>
checking for C bool type... no
<br>
checking for inline... __inline__
<br>
checking for C/C++ restrict keyword... __restrict
<br>
checking for weak symbol support... no
<br>
<p>*** C++ compiler and preprocessor
<br>
checking for g++... g++
<br>
checking whether we are using the GNU C++ compiler... yes
<br>
checking whether g++ accepts -g... yes
<br>
checking dependency style of g++... gcc3
<br>
checking how to run the C++ preprocessor... g++ -E
<br>
checking if C++ compiler works... yes
<br>
checking for the C++ compiler vendor... gnu
<br>
checking if g++ supports -finline-functions... yes
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
checking if want C++ exception handling... no
<br>
checking for C++ template_repository_directory... not used
<br>
checking for C++ compiler template parameters... none needed
<br>
checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
<br>
checking for bool... yes
<br>
checking size of bool... 4
<br>
checking alignment of bool... 4
<br>
<p>*** Assembler
<br>
checking for BSD-compatible nm... /usr/bin/nm -p
<br>
checking for fgrep... grep -F
<br>
checking whether to enable smp locks... yes
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... no
<br>
checking if .note.GNU-stack is needed... no
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels... _
<br>
checking prefix for lsym labels... L
<br>
checking prefix for function in .type...
<br>
checking if .size is needed... no
<br>
checking if .align directive takes logarithmic value... yes
<br>
checking if PowerPC registers have r prefix... yes
<br>
checking for 64-bit PowerPC assembly support... no
<br>
checking if gcc supports GCC inline assembly... yes
<br>
checking if gcc supports DEC inline assembly... no
<br>
checking if gcc supports XLC inline assembly... no
<br>
checking if g++ supports GCC inline assembly... yes
<br>
checking if g++ supports DEC inline assembly... no
<br>
checking if g++ supports XLC inline assembly... no
<br>
checking for assembly format... default-.text-.globl-:-_-L--0-1-1-0-0
<br>
checking for asssembly architecture... POWERPC32
<br>
checking for perl... perl
<br>
checking for pre-built assembly file... yes (atomic-powerpc32-osx.s)
<br>
checking for atomic assembly filename... atomic-powerpc32-osx.s
<br>
<p>*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... yes
<br>
checking whether f95 accepts -g... yes
<br>
checking if Fortran 77 compiler works... yes
<br>
checking f95 external symbol convention... upper case
<br>
checking if Fortran 77 compiler supports LOGICAL... yes
<br>
checking size of Fortran 77 LOGICAL...
<br>
checking for C type corresponding to LOGICAL... not found
<br>
configure: WARNING: *** Did not find corresponding C type
<br>
configure: error: Cannot continue
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0896/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0897.php">Ralph Castain: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0895.php">Edgar Gabriel: "Re: [OMPI users] Error message about libopal.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Reply:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
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
