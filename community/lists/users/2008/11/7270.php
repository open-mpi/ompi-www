<?
$subject_val = "Re: [OMPI users] ompi_info hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 22:20:56 2008" -->
<!-- isoreceived="20081111032056" -->
<!-- sent="Mon, 10 Nov 2008 22:18:58 -0500" -->
<!-- isosent="20081111031858" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info hangs" -->
<!-- id="27982AF4-F1F4-488D-AF5E-22AFF2724F39_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F49EEBA9-3B70-4093-AE5E-BE04BA32191C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi_info hangs<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 22:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7271.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7258.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7279.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Reply:</strong> <a href="7279.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I rebuilt without the memory manager, now ompi_info crashes with this  
<br>
output:
<br>
<p>./configure --prefix=/usr/local/openmpi --disable-mpi-f90 --disable- 
<br>
mpi-f77 --without-memory-manager
<br>
<p>localhost:~/openmpi&gt; ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r19718
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r19718
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r19718
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local/openmpi
<br>
&nbsp;&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Tue Nov 11 04:08:47 CET 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: localhost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Tue Nov 11 04:13:01 CET 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: localhost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;&nbsp;Fortran90 bindings size: na
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;&nbsp;mpirun default --prefix: no
<br>
*** glibc detected *** ompi_info: double free or corruption  
<br>
(fasttop): 0x00000000006279e0 ***
<br>
======= Backtrace: =========
<br>
/lib64/libc.so.6[0x2ae688b0621d]
<br>
/lib64/libc.so.6(cfree+0x76)[0x2ae688b07f76]
<br>
/usr/lib64/libstdc++.so.6(_ZNSs6assignERKSs+0x9c)[0x2ae6881b44bc]
<br>
ompi_info(_ZN9ompi_info15open_componentsEv+0x100)[0x405670]
<br>
ompi_info(main+0x11e7)[0x40b837]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x2ae688ab5b54]
<br>
ompi_info(__gxx_personality_v0+0x121)[0x405249]
<br>
======= Memory map: ========
<br>
00400000-0041f000 r-xp 00000000 08:01  
<br>
68989625                           /usr/local/openmpi/bin/ompi_info
<br>
0061e000-0061f000 r--p 0001e000 08:01  
<br>
68989625                           /usr/local/openmpi/bin/ompi_info
<br>
0061f000-00620000 rw-p 0001f000 08:01  
<br>
68989625                           /usr/local/openmpi/bin/ompi_info
<br>
00620000-00642000 rw-p 00620000 00:00  
<br>
0                                  [heap]
<br>
2ae687174000-2ae687190000 r-xp 00000000 08:01  
<br>
100681559                  /lib64/ld-2.6.1.so
<br>
2ae687190000-2ae687192000 rw-p 2ae687190000 00:00 0
<br>
2ae68738f000-2ae687391000 rw-p 0001b000 08:01  
<br>
100681559                  /lib64/ld-2.6.1.so
<br>
2ae687391000-2ae687411000 r-xp 00000000 08:01  
<br>
403422302                  /usr/local/openmpi/lib/libmpi.so.0.0.0
<br>
2ae687411000-2ae687611000 ---p 00080000 08:01  
<br>
403422302                  /usr/local/openmpi/lib/libmpi.so.0.0.0
<br>
2ae687611000-2ae687612000 r--p 00080000 08:01  
<br>
403422302                  /usr/local/openmpi/lib/libmpi.so.0.0.0
<br>
2ae687612000-2ae68761b000 rw-p 00081000 08:01  
<br>
403422302                  /usr/local/openmpi/lib/libmpi.so.0.0.0
<br>
2ae68761b000-2ae687622000 rw-p 2ae68761b000 00:00 0
<br>
2ae687622000-2ae68767a000 r-xp 00000000 08:01  
<br>
403422294                  /usr/local/openmpi/lib/libopen-rte.so.0.0.0
<br>
2ae68767a000-2ae68787a000 ---p 00058000 08:01  
<br>
403422294                  /usr/local/openmpi/lib/libopen-rte.so.0.0.0
<br>
2ae68787a000-2ae68787b000 r--p 00058000 08:01  
<br>
403422294                  /usr/local/openmpi/lib/libopen-rte.so.0.0.0
<br>
2ae68787b000-2ae68787d000 rw-p 00059000 08:01  
<br>
403422294                  /usr/local/openmpi/lib/libopen-rte.so.0.0.0
<br>
2ae68787d000-2ae68787e000 rw-p 2ae68787d000 00:00 0
<br>
2ae68787e000-2ae6878b1000 r-xp 00000000 08:01  
<br>
403422290                  /usr/local/openmpi/lib/libopen-pal.so.0.0.0
<br>
2ae6878b1000-2ae687ab0000 ---p 00033000 08:01  
<br>
403422290                  /usr/local/openmpi/lib/libopen-pal.so.0.0.0
<br>
2ae687ab0000-2ae687ab1000 r--p 00032000 08:01  
<br>
403422290                  /usr/local/openmpi/lib/libopen-pal.so.0.0.0
<br>
2ae687ab1000-2ae687ab3000 rw-p 00033000 08:01  
<br>
403422290                  /usr/local/openmpi/lib/libopen-pal.so.0.0.0
<br>
2ae687ab3000-2ae687ad5000 rw-p 2ae687ab3000 00:00 0
<br>
2ae687af3000-2ae687af5000 r-xp 00000000 08:01  
<br>
100681700                  /lib64/libdl-2.6.1.so
<br>
2ae687af5000-2ae687cf5000 ---p 00002000 08:01  
<br>
100681700                  /lib64/libdl-2.6.1.so
<br>
2ae687cf5000-2ae687cf7000 rw-p 00002000 08:01  
<br>
100681700                  /lib64/libdl-2.6.1.so
<br>
2ae687cf7000-2ae687cf8000 rw-p 2ae687cf7000 00:00 0
<br>
2ae687cf8000-2ae687d0c000 r-xp 00000000 08:01  
<br>
100681705                  /lib64/libnsl-2.6.1.so
<br>
2ae687d0c000-2ae687f0b000 ---p 00014000 08:01  
<br>
100681705                  /lib64/libnsl-2.6.1.so
<br>
2ae687f0b000-2ae687f0d000 rw-p 00013000 08:01  
<br>
100681705                  /lib64/libnsl-2.6.1.so
<br>
2ae687f0d000-2ae687f0f000 rw-p 2ae687f0d000 00:00 0
<br>
2ae687f0f000-2ae687f11000 r-xp 00000000 08:01  
<br>
100681728                  /lib64/libutil-2.6.1.so
<br>
2ae687f11000-2ae688110000 ---p 00002000 08:01  
<br>
100681728                  /lib64/libutil-2.6.1.so
<br>
2ae688110000-2ae688112000 rw-p 00001000 08:01  
<br>
100681728                  /lib64/libutil-2.6.1.so
<br>
2ae688112000-2ae6881fe000 r-xp 00000000 08:01  
<br>
67350662                   /usr/lib64/libstdc++.so.6.0.9
<br>
2ae6881fe000-2ae6883fe000 ---p 000ec000 08:01  
<br>
67350662                   /usr/lib64/libstdc++.so.6.0.9
<br>
2ae6883fe000-2ae688404000 r--p 000ec000 08:01  
<br>
67350662                   /usr/lib64/libstdc++.so.6.0.9
<br>
2ae688404000-2ae688407000 rw-p 000f2000 08:01  
<br>
67350662                   /usr/lib64/libstdc++.so.6.0.9
<br>
2ae688407000-2ae68841b000 rw-p 2ae688407000 00:00 0
<br>
2ae68841b000-2ae68846d000 r-xp 00000000 08:01  
<br>
100681702                  /lib64/libm-2.6.1.so
<br>
2ae68846d000-2ae68866c000 ---p 00052000 08:01  
<br>
100681702                  /lib64/libm-2.6.1.so
<br>
2ae68866c000-2ae68866e000 rw-p 00051000 08:01  
<br>
100681702                  /lib64/libm-2.6.1.so
<br>
2ae68866e000-2ae68867b000 r-xp 00000000 08:01  
<br>
100845329                  /lib64/libgcc_s.so.1
<br>
2ae68867b000-2ae68887a000 ---p 0000d000 08:01  
<br>
100845329                  /lib64/libgcc_s.so.1
<br>
2ae68887a000-2ae68887c000 rw-p 0000c000 08:01  
<br>
100845329                  /lib64/libgcc_s.so.1
<br>
2ae68887c000-2ae688891000 r-xp 00000000 08:01  
<br>
100681720                  /lib64/libpthread-2.6.1.so
<br>
2ae688891000-2ae688a91000 ---p 00015000 08:01  
<br>
100681720                  /lib64/libpthread-2.6.1.so
<br>
2ae688a91000-2ae688a93000 rw-p 00015000 08:01  
<br>
100681720                  /lib64/libpthread-2.6.1.so
<br>
2ae688a93000-2ae688a98000 rw-p 2ae688a93000 00:00 0
<br>
2ae688a98000-2ae688bd4000 r-xp 00000000 08:01  
<br>
100681566                  /lib64/libc-2.6.1.so
<br>
2ae688bd4000-2ae688dd4000 ---p 0013c000 08:01  
<br>
100681566                  /lib64/libc-2.6.1.so
<br>
2ae688dd4000-2ae688dd7000 r--p 0013c000 08:01  
<br>
100681566                  /lib64/libc-2.6.1.so
<br>
2ae688dd7000-2ae688dd9000 rw-p 0013f000 08:01  
<br>
100681566                  /lib64/libc-2.6.1.so
<br>
2ae688dd9000-2ae688de0000 rw-p 2ae688dd9000 00:00 0
<br>
2ae68c000000-2ae68c021000 rw-p 2ae68c000000 00:00 0
<br>
2ae68c021000-2ae690000000 ---p 2ae68c021000 00:00 0
<br>
7fff23921000-7fff23936000 rw-p 7fff23921000 00:00  
<br>
0                      [stack]
<br>
ffffffffff600000-ffffffffff601000 r-xp 00000000 00:00  
<br>
0                  [vdso]
<br>
[localhost] *** Process received signal ***
<br>
[localhost] Signal: Aborted (6)
<br>
[localhost] Signal code:  (-6)
<br>
[localhost] [ 0] /lib64/libpthread.so.0 [0x2ae688889fb0]
<br>
[localhost] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x2ae688ac8b45]
<br>
[localhost] [ 2] /lib64/libc.so.6(abort+0x110) [0x2ae688aca0e0]
<br>
[localhost] [ 3] /lib64/libc.so.6 [0x2ae688b00fbb]
<br>
[localhost] [ 4] /lib64/libc.so.6 [0x2ae688b0621d]
<br>
[localhost] [ 5] /lib64/libc.so.6(cfree+0x76) [0x2ae688b07f76]
<br>
[localhost] [ 6] /usr/lib64/libstdc++.so.6(_ZNSs6assignERKSs+0x9c)  
<br>
[0x2ae6881b44bc]
<br>
[localhost] [ 7] ompi_info(_ZN9ompi_info15open_componentsEv+0x100)  
<br>
[0x405670]
<br>
[localhost] [ 8] ompi_info(main+0x11e7) [0x40b837]
<br>
[localhost] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x2ae688ab5b54]
<br>
[localhost] [10] ompi_info(__gxx_personality_v0+0x121) [0x405249]
<br>
[localhost] *** End of error message ***
<br>
Aborted
<br>
<p>localhost:~/archives/openmpi-1.2.8&gt; g++ -v
<br>
Using built-in specs.
<br>
Target: x86_64-suse-linux
<br>
Configured with: ../configure --enable-threads=posix --prefix=/usr -- 
<br>
with-local-prefix=/usr/local --infodir=/usr/share/info --mandir=/usr/ 
<br>
share/man --libdir=/usr/lib64 --libexecdir=/usr/lib64 --enable- 
<br>
languages=c,c++,objc,fortran,obj-c++,java,ada --enable- 
<br>
checking=release --with-gxx-include-dir=/usr/include/c++/4.2.1 -- 
<br>
enable-ssp --disable-libssp --disable-libgcj --with-slibdir=/lib64 -- 
<br>
with-system-zlib --enable-shared --enable-__cxa_atexit --enable- 
<br>
libstdcxx-allocator=new --disable-libstdcxx-pch --program-suffix=-4.2  
<br>
--enable-version-specific-runtime-libs --without-system-libunwind -- 
<br>
with-cpu=generic --host=x86_64-suse-linux
<br>
Thread model: posix
<br>
gcc version 4.2.1 (SUSE Linux)
<br>
<p><p>On Nov 10, 2008, at 1:44 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; If you're not using OpenFabrics-based networks, try configuring  
</span><br>
<span class="quotelev1">&gt; Open MPI --without-memory-manager and see if that fixes your problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2008, at 5:31 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George, I have warning when running under debugger 'Lowest section  
</span><br>
<span class="quotelev2">&gt;&gt; in system-supplied DSO at 0xffffe000 is .hash at ffffe0b4'
</span><br>
<span class="quotelev2">&gt;&gt; The program hangs in _int_malloc():
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) run
</span><br>
<span class="quotelev2">&gt;&gt; Starting program: /opt/openmpi-1.2.7/bin/ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; warning: Lowest section in system-supplied DSO at 0xffffe000  
</span><br>
<span class="quotelev2">&gt;&gt; is .hash at ffffe0b4
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; [New Thread 0xf7b7d6d0 (LWP 16621)]
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev2">&gt;&gt; [Switching to Thread 0xf7b7d6d0 (LWP 16621)]
</span><br>
<span class="quotelev2">&gt;&gt; 0xf7e5267e in _int_malloc () from /opt/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; #0  0xf7e5267e in _int_malloc () from /opt/openmpi/lib/libopen- 
</span><br>
<span class="quotelev2">&gt;&gt; pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1  0xf7e544e1 in malloc () from /opt/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #2  0xf7db46c7 in operator new () from /usr/lib/libstdc++.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #3  0xf7d8e121 in std::string::_Rep::_S_create () from /usr/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; libstdc++.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #4  0xf7d8ee18 in std::string::_Rep::_M_clone () from /usr/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; libstdc++.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #5  0xf7d8fac8 in std::string::reserve () from /usr/lib/libstdc+ 
</span><br>
<span class="quotelev2">&gt;&gt; +.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #6  0xf7d8ff6a in std::string::append () from /usr/lib/libstdc++.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x08054f30 in ompi_info::out ()
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x08062a33 in ompi_info::show_ompi_version ()
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x080533a0 in main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 8, 2008, at 12:33 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think we had a similar problem on the past. It has something to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do with the atomics on this architecture.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have access to such an architecture. Can you provide us a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stack trace when this happens ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 8, 2008, at 12:14 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am having problems building OMPI 1.2.7 on an Intel Xeon quad- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core 64 bits server. The compilation completes but ompi_info  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hangs after printing the OMPI version:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.2.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to run a few mpi applications on this same install and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they do work fine. What can cause ompi_info to hang?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7271.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7258.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7279.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Reply:</strong> <a href="7279.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
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
