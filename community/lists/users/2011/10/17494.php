<?
$subject_val = "Re: [OMPI users] [SOLVED] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  3 18:14:44 2011" -->
<!-- isoreceived="20111003221444" -->
<!-- sent="Mon, 3 Oct 2011 18:14:35 -0400" -->
<!-- isosent="20111003221435" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [SOLVED] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*" -->
<!-- id="79EFF6A3-B41D-438E-8025-D61B4F52D7EA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGR4S9E0r-5HFg4f8Fph+8tmbADpVo5JhNy5y8j=n5kSt_JqpQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [SOLVED] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-03 18:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17495.php">Ralph Castain: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17493.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17491.php">Dmitry N. Mikushin: "Re: [OMPI users] [SOLVED] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow -- painful!  Glad you figured it out; thanks for posting it back here to make it google-able.
<br>
<p><p>On Oct 3, 2011, at 9:21 AM, Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; Ok, here's the solution: remove --as-needed option out of compiler's
</span><br>
<span class="quotelev1">&gt; internal linker invocation command line. Steps to do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Dump compiler specs: $ gcc -dumpspecs &gt; specs
</span><br>
<span class="quotelev1">&gt; 2) Open specs file for edit and remove --as-needed from the line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *link:
</span><br>
<span class="quotelev1">&gt; %{!r:--build-id} --no-add-needed --as-needed %{!static:--eh-frame-hdr}
</span><br>
<span class="quotelev1">&gt; %{!m32:-m elf_x86_64} %{m32:-m elf_i386} --hash-style=gnu
</span><br>
<span class="quotelev1">&gt; %{shared:-shared}   %{!shared:     %{!static:
</span><br>
<span class="quotelev1">&gt; %{rdynamic:-export-dynamic}       %{m32:-dynamic-linker
</span><br>
<span class="quotelev1">&gt; %{muclibc:/lib/ld-uClibc.so.0;:%{mbionic:/system/bin/linker;:/lib/ld-linux.so.2}}}
</span><br>
<span class="quotelev1">&gt;      %{!m32:-dynamic-linker
</span><br>
<span class="quotelev1">&gt; %{muclibc:/lib/ld64-uClibc.so.0;:%{mbionic:/system/bin/linker64;:/lib64/ld-linux-x86-64.so.2}}}}
</span><br>
<span class="quotelev1">&gt;    %{static:-static}}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; resulting into
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *link:
</span><br>
<span class="quotelev1">&gt; %{!r:--build-id} --no-add-needed %{!static:--eh-frame-hdr} %{!m32:-m
</span><br>
<span class="quotelev1">&gt; elf_x86_64} %{m32:-m elf_i386} --hash-style=gnu   %{shared:-shared}
</span><br>
<span class="quotelev1">&gt; %{!shared:     %{!static:       %{rdynamic:-export-dynamic}
</span><br>
<span class="quotelev1">&gt; %{m32:-dynamic-linker
</span><br>
<span class="quotelev1">&gt; %{muclibc:/lib/ld-uClibc.so.0;:%{mbionic:/system/bin/linker;:/lib/ld-linux.so.2}}}
</span><br>
<span class="quotelev1">&gt;      %{!m32:-dynamic-linker
</span><br>
<span class="quotelev1">&gt; %{muclibc:/lib/ld64-uClibc.so.0;:%{mbionic:/system/bin/linker64;:/lib64/ld-linux-x86-64.so.2}}}}
</span><br>
<span class="quotelev1">&gt;    %{static:-static}}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) Save specs file into compiler's folder
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/&lt;target&gt;/&lt;version&gt;/ For example, in case of Ubuntu 10.10
</span><br>
<span class="quotelev1">&gt; with gcc 4.6.1 it's /usr/lib/gcc/x86_64-linux-gnu/4.6.1/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With this change no unresolvable relocations anymore!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/10/3 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's a reprocase, the same one as mentioned here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=608901">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=608901</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; marcusmae_at_loveland:~/Programming/mpitest$ cat mpitest.f90
</span><br>
<span class="quotelev2">&gt;&gt; program main
</span><br>
<span class="quotelev2">&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt; integer ierr
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; marcusmae_at_loveland:~/Programming/mpitest$ mpif90 -g mpitest.f90
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: /tmp/cc3NLduM.o(.debug_info+0x542): unresolvable
</span><br>
<span class="quotelev2">&gt;&gt; R_X86_64_64 relocation against symbol `mpi_fortran_argv_null_'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: /tmp/cc3NLduM.o(.debug_info+0x55c): unresolvable
</span><br>
<span class="quotelev2">&gt;&gt; R_X86_64_64 relocation against symbol `mpi_fortran_argv_null_'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: /tmp/cc3NLduM.o(.debug_info+0x5d2): unresolvable
</span><br>
<span class="quotelev2">&gt;&gt; R_X86_64_64 relocation against symbol `mpi_fortran_errcodes_ignore_'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: /tmp/cc3NLduM.o(.debug_info+0x5ec): unresolvable
</span><br>
<span class="quotelev2">&gt;&gt; R_X86_64_64 relocation against symbol `mpi_fortran_errcodes_ignore_'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Remove &quot;-g&quot;, and the error will be gone.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; marcusmae_at_loveland:~/Programming/mpitest$ mpif90 --showme -g mpitest.f90
</span><br>
<span class="quotelev2">&gt;&gt; gfortran -g mpitest.f90 -I/opt/openmpi_gcc-1.5.4/include -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -I/opt/openmpi_gcc-1.5.4/lib -L/opt/openmpi_gcc-1.5.4/lib -lmpi_f90
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; marcusmae_at_loveland:~/Programming/mpitest$ mpif90 -v
</span><br>
<span class="quotelev2">&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev2">&gt;&gt; COLLECT_GCC=/usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt; COLLECT_LTO_WRAPPER=/usr/lib/gcc/x86_64-linux-gnu/4.6.1/lto-wrapper
</span><br>
<span class="quotelev2">&gt;&gt; Target: x86_64-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: ../src/configure -v --with-pkgversion='Ubuntu/Linaro
</span><br>
<span class="quotelev2">&gt;&gt; 4.6.1-9ubuntu3'
</span><br>
<span class="quotelev2">&gt;&gt; --with-bugurl=file:///usr/share/doc/gcc-4.6/README.Bugs
</span><br>
<span class="quotelev2">&gt;&gt; --enable-languages=c,c++,fortran,objc,obj-c++,go --prefix=/usr
</span><br>
<span class="quotelev2">&gt;&gt; --program-suffix=-4.6 --enable-shared --enable-linker-build-id
</span><br>
<span class="quotelev2">&gt;&gt; --with-system-zlib --libexecdir=/usr/lib --without-included-gettext
</span><br>
<span class="quotelev2">&gt;&gt; --enable-threads=posix --with-gxx-include-dir=/usr/include/c++/4.6
</span><br>
<span class="quotelev2">&gt;&gt; --libdir=/usr/lib --enable-nls --with-sysroot=/ --enable-clocale=gnu
</span><br>
<span class="quotelev2">&gt;&gt; --enable-libstdcxx-debug --enable-libstdcxx-time=yes --enable-plugin
</span><br>
<span class="quotelev2">&gt;&gt; --enable-objc-gc --disable-werror --with-arch-32=i686
</span><br>
<span class="quotelev2">&gt;&gt; --with-tune=generic --enable-checking=release --build=x86_64-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; --host=x86_64-linux-gnu --target=x86_64-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 4.6.1 (Ubuntu/Linaro 4.6.1-9ubuntu3)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2011/9/28 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interestingly, the errors are gone after I removed &quot;-g&quot; from the app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile options.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tested again on the fresh Ubuntu 11.10 install: both 1.4.3 and 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile fine, but with the same error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also I tried hard to find any 32-bit object or library and failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They all are 64-bit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2011/9/24 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check the output from when you ran Open MPI's configure and &quot;make all&quot; -- did it decide to build the F77 interface?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also check that gcc and gfortran output .o files of the same bitness / type.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 24, 2011, at 8:07 AM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Compile and link - yes, but it turns out there was some unnoticed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compilation error because
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./hellompi: error while loading shared libraries: libmpi_f77.so.1:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and this library does not exist.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hm.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2011/9/24 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can you compile / link simple OMPI applications without this problem?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 24, 2011, at 7:54 AM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Today I've verified this application on the Feroda 15 x86_64, where
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm usually building OpenMPI from source using the same method.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Result: no link errors there! So, the issue is likely ubuntu-specific.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Target application is compiled linked with mpif90 pointing to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/openmpi_gcc-1.5.4/bin/mpif90 I built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regarding architectures, everything in target folders and OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; installation is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ELF 64-bit LSB shared object, x86-64, version 1 (SYSV), dynamically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; linked, not stripped
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2011/9/24 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How does the target application compile / link itself?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Try running &quot;file&quot; on the Open MPI libraries and/or your target application .o files to see what their bitness is, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2011, at 3:15 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You're right because I also tried 1.4.3, and it's the same issue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; there. But what could be wrong? I'm using the simplest form -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../configure --prefix=/opt/openmpi_gcc-1.4.3/ and only installed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compilers are system-default gcc and gfortran 4.6.1. Distro is ubuntu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 11.10. There is no any mpi installed from packages, and no -m32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; options around. What else could be the source?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2011/9/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This usually means that you're mixing compiler/linker flags somehow (e.g., built something with 32 bit, built something else with 64 bit, try to link them together).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can you verify that everything was built with all the same 32/64?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2011, at 1:21 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI 1.5.4 compiled with gcc 4.6.1 and linked with target app gives
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a load of linker messages like this one:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/ld: ../../lib/libutil.a(parallel_utilities.o)(.debug_info+0x529d):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unresolvable R_X86_64_64 relocation against symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `mpi_fortran_argv_null_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; There are a lot of similar messages about other mpi_fortran_ symbols.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is it a known issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17495.php">Ralph Castain: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17493.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17491.php">Dmitry N. Mikushin: "Re: [OMPI users] [SOLVED] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
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
