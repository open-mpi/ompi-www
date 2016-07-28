<?
$subject_val = "Re: [OMPI users] ompi_info hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 10:29:10 2008" -->
<!-- isoreceived="20081111152910" -->
<!-- sent="Tue, 11 Nov 2008 10:29:03 -0500" -->
<!-- isosent="20081111152903" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info hangs" -->
<!-- id="846C3DD0-1FAB-4E5E-BD1D-CD96547C4E51_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="27982AF4-F1F4-488D-AF5E-22AFF2724F39_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 10:29:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I'm unable to replicate this error.  :-(
<br>
<p>Is there any chance that you have some stale OMPI libraries (or OMPI  
<br>
libraries from any other OMPI version) that are accidentally being  
<br>
found by ompi_info?
<br>
<p><p>On Nov 10, 2008, at 10:18 PM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; I rebuilt without the memory manager, now ompi_info crashes with  
</span><br>
<span class="quotelev1">&gt; this output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi --disable-mpi-f90 --disable- 
</span><br>
<span class="quotelev1">&gt; mpi-f77 --without-memory-manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; localhost:~/openmpi&gt; ompi_info
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.2.8
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.2.8
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.2.8
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr/local/openmpi
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configured by: root
</span><br>
<span class="quotelev1">&gt;           Configured on: Tue Nov 11 04:08:47 CET 2008
</span><br>
<span class="quotelev1">&gt;          Configure host: localhost
</span><br>
<span class="quotelev1">&gt;                Built by: root
</span><br>
<span class="quotelev1">&gt;                Built on: Tue Nov 11 04:13:01 CET 2008
</span><br>
<span class="quotelev1">&gt;              Built host: localhost
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** ompi_info: double free or corruption  
</span><br>
<span class="quotelev1">&gt; (fasttop): 0x00000000006279e0 ***
</span><br>
<span class="quotelev1">&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6[0x2ae688b0621d]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(cfree+0x76)[0x2ae688b07f76]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libstdc++.so.6(_ZNSs6assignERKSs+0x9c)[0x2ae6881b44bc]
</span><br>
<span class="quotelev1">&gt; ompi_info(_ZN9ompi_info15open_componentsEv+0x100)[0x405670]
</span><br>
<span class="quotelev1">&gt; ompi_info(main+0x11e7)[0x40b837]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xf4)[0x2ae688ab5b54]
</span><br>
<span class="quotelev1">&gt; ompi_info(__gxx_personality_v0+0x121)[0x405249]
</span><br>
<span class="quotelev1">&gt; ======= Memory map: ========
</span><br>
<span class="quotelev1">&gt; 00400000-0041f000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 68989625                           /usr/local/openmpi/bin/ompi_info
</span><br>
<span class="quotelev1">&gt; 0061e000-0061f000 r--p 0001e000 08:01  
</span><br>
<span class="quotelev1">&gt; 68989625                           /usr/local/openmpi/bin/ompi_info
</span><br>
<span class="quotelev1">&gt; 0061f000-00620000 rw-p 0001f000 08:01  
</span><br>
<span class="quotelev1">&gt; 68989625                           /usr/local/openmpi/bin/ompi_info
</span><br>
<span class="quotelev1">&gt; 00620000-00642000 rw-p 00620000 00:00  
</span><br>
<span class="quotelev1">&gt; 0                                  [heap]
</span><br>
<span class="quotelev1">&gt; 2ae687174000-2ae687190000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681559                  /lib64/ld-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae687190000-2ae687192000 rw-p 2ae687190000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae68738f000-2ae687391000 rw-p 0001b000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681559                  /lib64/ld-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae687391000-2ae687411000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422302                  /usr/local/openmpi/lib/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae687411000-2ae687611000 ---p 00080000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422302                  /usr/local/openmpi/lib/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae687611000-2ae687612000 r--p 00080000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422302                  /usr/local/openmpi/lib/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae687612000-2ae68761b000 rw-p 00081000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422302                  /usr/local/openmpi/lib/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae68761b000-2ae687622000 rw-p 2ae68761b000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae687622000-2ae68767a000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422294                  /usr/local/openmpi/lib/libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae68767a000-2ae68787a000 ---p 00058000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422294                  /usr/local/openmpi/lib/libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae68787a000-2ae68787b000 r--p 00058000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422294                  /usr/local/openmpi/lib/libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae68787b000-2ae68787d000 rw-p 00059000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422294                  /usr/local/openmpi/lib/libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae68787d000-2ae68787e000 rw-p 2ae68787d000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae68787e000-2ae6878b1000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422290                  /usr/local/openmpi/lib/libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae6878b1000-2ae687ab0000 ---p 00033000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422290                  /usr/local/openmpi/lib/libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae687ab0000-2ae687ab1000 r--p 00032000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422290                  /usr/local/openmpi/lib/libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae687ab1000-2ae687ab3000 rw-p 00033000 08:01  
</span><br>
<span class="quotelev1">&gt; 403422290                  /usr/local/openmpi/lib/libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 2ae687ab3000-2ae687ad5000 rw-p 2ae687ab3000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae687af3000-2ae687af5000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681700                  /lib64/libdl-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae687af5000-2ae687cf5000 ---p 00002000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681700                  /lib64/libdl-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae687cf5000-2ae687cf7000 rw-p 00002000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681700                  /lib64/libdl-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae687cf7000-2ae687cf8000 rw-p 2ae687cf7000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae687cf8000-2ae687d0c000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681705                  /lib64/libnsl-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae687d0c000-2ae687f0b000 ---p 00014000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681705                  /lib64/libnsl-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae687f0b000-2ae687f0d000 rw-p 00013000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681705                  /lib64/libnsl-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae687f0d000-2ae687f0f000 rw-p 2ae687f0d000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae687f0f000-2ae687f11000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681728                  /lib64/libutil-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae687f11000-2ae688110000 ---p 00002000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681728                  /lib64/libutil-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae688110000-2ae688112000 rw-p 00001000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681728                  /lib64/libutil-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae688112000-2ae6881fe000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 67350662                   /usr/lib64/libstdc++.so.6.0.9
</span><br>
<span class="quotelev1">&gt; 2ae6881fe000-2ae6883fe000 ---p 000ec000 08:01  
</span><br>
<span class="quotelev1">&gt; 67350662                   /usr/lib64/libstdc++.so.6.0.9
</span><br>
<span class="quotelev1">&gt; 2ae6883fe000-2ae688404000 r--p 000ec000 08:01  
</span><br>
<span class="quotelev1">&gt; 67350662                   /usr/lib64/libstdc++.so.6.0.9
</span><br>
<span class="quotelev1">&gt; 2ae688404000-2ae688407000 rw-p 000f2000 08:01  
</span><br>
<span class="quotelev1">&gt; 67350662                   /usr/lib64/libstdc++.so.6.0.9
</span><br>
<span class="quotelev1">&gt; 2ae688407000-2ae68841b000 rw-p 2ae688407000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae68841b000-2ae68846d000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681702                  /lib64/libm-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae68846d000-2ae68866c000 ---p 00052000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681702                  /lib64/libm-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae68866c000-2ae68866e000 rw-p 00051000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681702                  /lib64/libm-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae68866e000-2ae68867b000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 100845329                  /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; 2ae68867b000-2ae68887a000 ---p 0000d000 08:01  
</span><br>
<span class="quotelev1">&gt; 100845329                  /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; 2ae68887a000-2ae68887c000 rw-p 0000c000 08:01  
</span><br>
<span class="quotelev1">&gt; 100845329                  /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; 2ae68887c000-2ae688891000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681720                  /lib64/libpthread-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae688891000-2ae688a91000 ---p 00015000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681720                  /lib64/libpthread-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae688a91000-2ae688a93000 rw-p 00015000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681720                  /lib64/libpthread-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae688a93000-2ae688a98000 rw-p 2ae688a93000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae688a98000-2ae688bd4000 r-xp 00000000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681566                  /lib64/libc-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae688bd4000-2ae688dd4000 ---p 0013c000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681566                  /lib64/libc-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae688dd4000-2ae688dd7000 r--p 0013c000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681566                  /lib64/libc-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae688dd7000-2ae688dd9000 rw-p 0013f000 08:01  
</span><br>
<span class="quotelev1">&gt; 100681566                  /lib64/libc-2.6.1.so
</span><br>
<span class="quotelev1">&gt; 2ae688dd9000-2ae688de0000 rw-p 2ae688dd9000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae68c000000-2ae68c021000 rw-p 2ae68c000000 00:00 0
</span><br>
<span class="quotelev1">&gt; 2ae68c021000-2ae690000000 ---p 2ae68c021000 00:00 0
</span><br>
<span class="quotelev1">&gt; 7fff23921000-7fff23936000 rw-p 7fff23921000 00:00  
</span><br>
<span class="quotelev1">&gt; 0                      [stack]
</span><br>
<span class="quotelev1">&gt; ffffffffff600000-ffffffffff601000 r-xp 00000000 00:00  
</span><br>
<span class="quotelev1">&gt; 0                  [vdso]
</span><br>
<span class="quotelev1">&gt; [localhost] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [localhost] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [localhost] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [localhost] [ 0] /lib64/libpthread.so.0 [0x2ae688889fb0]
</span><br>
<span class="quotelev1">&gt; [localhost] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x2ae688ac8b45]
</span><br>
<span class="quotelev1">&gt; [localhost] [ 2] /lib64/libc.so.6(abort+0x110) [0x2ae688aca0e0]
</span><br>
<span class="quotelev1">&gt; [localhost] [ 3] /lib64/libc.so.6 [0x2ae688b00fbb]
</span><br>
<span class="quotelev1">&gt; [localhost] [ 4] /lib64/libc.so.6 [0x2ae688b0621d]
</span><br>
<span class="quotelev1">&gt; [localhost] [ 5] /lib64/libc.so.6(cfree+0x76) [0x2ae688b07f76]
</span><br>
<span class="quotelev1">&gt; [localhost] [ 6] /usr/lib64/libstdc++.so.6(_ZNSs6assignERKSs+0x9c)  
</span><br>
<span class="quotelev1">&gt; [0x2ae6881b44bc]
</span><br>
<span class="quotelev1">&gt; [localhost] [ 7] ompi_info(_ZN9ompi_info15open_componentsEv+0x100)  
</span><br>
<span class="quotelev1">&gt; [0x405670]
</span><br>
<span class="quotelev1">&gt; [localhost] [ 8] ompi_info(main+0x11e7) [0x40b837]
</span><br>
<span class="quotelev1">&gt; [localhost] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x2ae688ab5b54]
</span><br>
<span class="quotelev1">&gt; [localhost] [10] ompi_info(__gxx_personality_v0+0x121) [0x405249]
</span><br>
<span class="quotelev1">&gt; [localhost] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; localhost:~/archives/openmpi-1.2.8&gt; g++ -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: x86_64-suse-linux
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --enable-threads=posix --prefix=/usr -- 
</span><br>
<span class="quotelev1">&gt; with-local-prefix=/usr/local --infodir=/usr/share/info --mandir=/usr/ 
</span><br>
<span class="quotelev1">&gt; share/man --libdir=/usr/lib64 --libexecdir=/usr/lib64 --enable- 
</span><br>
<span class="quotelev1">&gt; languages=c,c++,objc,fortran,obj-c++,java,ada --enable- 
</span><br>
<span class="quotelev1">&gt; checking=release --with-gxx-include-dir=/usr/include/c++/4.2.1 -- 
</span><br>
<span class="quotelev1">&gt; enable-ssp --disable-libssp --disable-libgcj --with-slibdir=/lib64 -- 
</span><br>
<span class="quotelev1">&gt; with-system-zlib --enable-shared --enable-__cxa_atexit --enable- 
</span><br>
<span class="quotelev1">&gt; libstdcxx-allocator=new --disable-libstdcxx-pch --program- 
</span><br>
<span class="quotelev1">&gt; suffix=-4.2 --enable-version-specific-runtime-libs --without-system- 
</span><br>
<span class="quotelev1">&gt; libunwind --with-cpu=generic --host=x86_64-suse-linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.2.1 (SUSE Linux)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2008, at 1:44 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you're not using OpenFabrics-based networks, try configuring  
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI --without-memory-manager and see if that fixes your  
</span><br>
<span class="quotelev2">&gt;&gt; problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 8, 2008, at 5:31 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George, I have warning when running under debugger 'Lowest section  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in system-supplied DSO at 0xffffe000 is .hash at ffffe0b4'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program hangs in _int_malloc():
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting program: /opt/openmpi-1.2.7/bin/ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Lowest section in system-supplied DSO at 0xffffe000  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is .hash at ffffe0b4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 0xf7b7d6d0 (LWP 16621)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Switching to Thread 0xf7b7d6d0 (LWP 16621)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xf7e5267e in _int_malloc () from /opt/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0xf7e5267e in _int_malloc () from /opt/openmpi/lib/libopen- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0xf7e544e1 in malloc () from /opt/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0xf7db46c7 in operator new () from /usr/lib/libstdc++.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0xf7d8e121 in std::string::_Rep::_S_create () from /usr/lib/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libstdc++.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0xf7d8ee18 in std::string::_Rep::_M_clone () from /usr/lib/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libstdc++.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0xf7d8fac8 in std::string::reserve () from /usr/lib/libstdc+ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0xf7d8ff6a in std::string::append () from /usr/lib/libstdc+ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x08054f30 in ompi_info::out ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0x08062a33 in ompi_info::show_ompi_version ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0x080533a0 in main ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 8, 2008, at 12:33 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think we had a similar problem on the past. It has something to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do with the atomics on this architecture.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't have access to such an architecture. Can you provide us a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stack trace when this happens ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 8, 2008, at 12:14 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am having problems building OMPI 1.2.7 on an Intel Xeon quad- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core 64 bits server. The compilation completes but ompi_info  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hangs after printing the OMPI version:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # ompi_info
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.2.7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried to run a few mpi applications on this same install and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they do work fine. What can cause ompi_info to hang?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
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
