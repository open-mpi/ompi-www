<?
$subject_val = "[OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 09:13:08 2009" -->
<!-- isoreceived="20090603131308" -->
<!-- sent="Wed, 03 Jun 2009 15:13:25 +0200" -->
<!-- isosent="20090603131325" -->
<!-- name="DEVEL Michel" -->
<!-- email="Michel.Devel_at_[hidden]" -->
<!-- subject="[OMPI users] Pb in configure script when using ifort with &amp;quot;-fast&amp;quot; + link of opal_wrapper" -->
<!-- id="4A2676F5.3040909_at_ens2m.fr" -->
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
<strong>Subject:</strong> [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper<br>
<strong>From:</strong> DEVEL Michel (<em>Michel.Devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 09:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9507.php">Scott Atchley: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openMPI users and developers,
<br>
<p>I have just tried installing  openmpi by compiling it rather than just
<br>
using a rpm because I want to use it with the ifort compiler.
<br>
I have noticed a problem in the configure script (present at least in
<br>
version 1.3.1 and 1.3.2) for the determination of Fortran naming
<br>
convention :
<br>
I tried to use
<br>
./configure --prefix=/opt/intel/Compiler/11.0/074/ --with-sge
<br>
--enable-static CC='icc' CFLAGS=' -fast -C' LDFLAGS='-fast -C' AR='ar'
<br>
F77='ifort' FC='ifort' FFLAGS=' -fast -C' FCFLAGS=' -fast -C' CXX='icpc'
<br>
but the test to determine Fortran naming convention (single underscore
<br>
in ifort case) fails because of the -fast flag.
<br>
If I do &quot;ifort -c -C -fast conftest.f&quot; then &quot;nm -B conftest.o&quot; gives
<br>
&quot;                 w __ildata_included &quot;
<br>
whereas it correctly gives &quot;0000000000000000 T foo_bar_ &quot; if I use
<br>
&quot;ifort -c -C -O3 conftest.f&quot;
<br>
<p>I inserted &quot;ompi_cv_f77_external_symbol=&quot;single underscore&quot; at line
<br>
35244 of configure script (as if this variable had been cached) to get
<br>
around this bug, which is not clean at all but works in my case.
<br>
With this change, the configure script completes successfully.
<br>
However &quot;make all&quot; then fails at the linking of opal_wrapper with
<br>
following messages :
<br>
<p>/bin/sh ../../../libtool --tag=CC   --mode=link icc  -DNDEBUG -fast -C
<br>
-finline-functions -fno-strict-aliasing -restrict -pthread
<br>
-fvisibility=hidden  -export-dynamic -fast -C  -o opal_wrapper
<br>
opal_wrapper.o ../../../opal/libopen-pal.la -lnsl
<br>
-lutil                                            
<br>
libtool: link: icc -DNDEBUG -fast -C -finline-functions
<br>
-fno-strict-aliasing -restrict -pthread -fvisibility=hidden -fast -C -o
<br>
.libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic 
<br>
../../../opal/.libs/libopen-pal.so -lm -lnsl -lutil -pthread -Wl,-rpath
<br>
-Wl,/opt/intel/Compiler/11.0/074/lib 
<br>
*** glibc detected *** /opt/intel/Compiler/11.0/074/bin/intel64/mcpcom:
<br>
double free or corruption (!prev): 0x0000000002d06c70 ***                 
<br>
======= Backtrace:
<br>
=========                                                                                                                      
<br>
<p>/lib64/libc.so.6[0x2b8a83f7d118]                                                                                                                  
<br>
<p>/lib64/libc.so.6(cfree+0x76)[0x2b8a83f7ec76]                                                                                                      
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x10b43e7]                                                                                        
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x1104a68]                                                                                        
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x11145ae]                                                                                        
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x11172d5]                                                                                        
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x11168b7]                                                                                        
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x110f181]                                                                                        
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x10ffe06]                                                                                        
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x10ade6b]                                                                                        
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0xfe7960]                                                                                         
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x847c06]                                                                                         
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom[0x452935]                                                                                         
<br>
<p>/lib64/libc.so.6(__libc_start_main+0xe6)[0x2b8a83f27586]                                                                                          
<br>
<p>/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom(regcomp+0x3a)[0x40557a]                                                                           
<br>
<p>======= Memory map:
<br>
========                                                                                                                      
<br>
<p>00400000-01dff000 r-xp 00000000 08:07 402335                            
<br>
/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom                          
<br>
01efe000-0202f000 rwxp 019fe000 08:07 402335                            
<br>
/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom                          
<br>
0202f000-02e6b000 rwxp 0202f000 00:00 0                                 
<br>
[heap]                                                                   
<br>
2b8a83599000-2b8a835b7000 r-xp 00000000 08:07 1262134                   
<br>
/lib64/ld-2.9.so                                                         
<br>
2b8a835b7000-2b8a835b9000 rwxp 2b8a835b7000 00:00
<br>
0                                                                                               
<br>
<p>2b8a837b6000-2b8a837b7000 r-xp 0001d000 08:07 1262134                   
<br>
/lib64/ld-2.9.so                                                         
<br>
2b8a837b7000-2b8a837b8000 rwxp 0001e000 08:07 1262134                   
<br>
/lib64/ld-2.9.so
<br>
2b8a837b8000-2b8a8380d000 r-xp 00000000 08:07 1264546                   
<br>
/lib64/libm-2.9.so
<br>
2b8a8380d000-2b8a83a0c000 ---p 00055000 08:07 1264546                   
<br>
/lib64/libm-2.9.so
<br>
2b8a83a0c000-2b8a83a0d000 r-xp 00054000 08:07 1264546                   
<br>
/lib64/libm-2.9.so
<br>
2b8a83a0d000-2b8a83a0e000 rwxp 00055000 08:07 1264546                   
<br>
/lib64/libm-2.9.so
<br>
2b8a83a0e000-2b8a83ad6000 r-xp 00000000 08:07 755598                    
<br>
/usr/lib64/libstdc++.so.5.0.7
<br>
2b8a83ad6000-2b8a83cd5000 ---p 000c8000 08:07 755598                    
<br>
/usr/lib64/libstdc++.so.5.0.7
<br>
2b8a83cd5000-2b8a83cd7000 r-xp 000c7000 08:07 755598                    
<br>
/usr/lib64/libstdc++.so.5.0.7
<br>
2b8a83cd7000-2b8a83cde000 rwxp 000c9000 08:07 755598                    
<br>
/usr/lib64/libstdc++.so.5.0.7
<br>
2b8a83cde000-2b8a83cf1000 rwxp 2b8a83cde000 00:00 0
<br>
2b8a83cf1000-2b8a83d07000 r-xp 00000000 08:07 1261682                   
<br>
/lib64/libgcc_s.so.1
<br>
2b8a83d07000-2b8a83f07000 ---p 00016000 08:07 1261682                   
<br>
/lib64/libgcc_s.so.1
<br>
2b8a83f07000-2b8a83f08000 r-xp 00016000 08:07 1261682                   
<br>
/lib64/libgcc_s.so.1
<br>
2b8a83f08000-2b8a83f09000 rwxp 00017000 08:07 1261682                   
<br>
/lib64/libgcc_s.so.1
<br>
2b8a83f09000-2b8a84058000 r-xp 00000000 08:07 1261574                   
<br>
/lib64/libc-2.9.so
<br>
2b8a84058000-2b8a84258000 ---p 0014f000 08:07 1261574                   
<br>
/lib64/libc-2.9.so
<br>
2b8a84258000-2b8a8425c000 r-xp 0014f000 08:07 1261574                   
<br>
/lib64/libc-2.9.so
<br>
2b8a8425c000-2b8a8425d000 rwxp 00153000 08:07 1261574                   
<br>
/lib64/libc-2.9.so
<br>
2b8a8425d000-2b8a84262000 rwxp 2b8a8425d000 00:00 0
<br>
2b8a84262000-2b8a84264000 r-xp 00000000 08:07 1264544                   
<br>
/lib64/libdl-2.9.so
<br>
2b8a84264000-2b8a84464000 ---p 00002000 08:07 1264544                   
<br>
/lib64/libdl-2.9.so
<br>
2b8a84464000-2b8a84465000 r-xp 00002000 08:07 1264544                   
<br>
/lib64/libdl-2.9.so
<br>
2b8a84465000-2b8a84466000 rwxp 00003000 08:07 1264544                   
<br>
/lib64/libdl-2.9.so
<br>
2b8a84466000-2b8a8466a000 rwxp 2b8a84466000 00:00 0
<br>
2b8a8466a000-2b8a84719000 r-xs 00000000 08:08 352933                    
<br>
/usr/local/src/openmpi-1.3.1/opal/.libs/libopen-pal.so.0.0.0
<br>
2b8a84719000-2b8a8471a000 rwxp 2b8a84719000 00:00 0
<br>
2b8a88000000-2b8a88021000 rwxp 2b8a88000000 00:00 0
<br>
2b8a88021000-2b8a8c000000 ---p 2b8a88021000 00:00 0
<br>
7fff274f2000-7fff27511000 rwxp 7ffffffe0000 00:00 0                     
<br>
[stack]
<br>
7fff275fe000-7fff275ff000 r-xp 7fff275fe000 00:00 0                     
<br>
[vdso]
<br>
ffffffffff600000-ffffffffff601000 r-xp 00000000 00:00 0                 
<br>
[vsyscall]
<br>
icc: error #10106: Fatal error in
<br>
/opt/intel/Compiler/11.0/074/bin/intel64/mcpcom, terminated by IOT
<br>
instruction
<br>
icc: error #10014: problem during multi-file optimization compilation
<br>
(code 1)
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory
<br>
`/usr/local/src/openmpi-1.3.1/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/usr/local/src/openmpi-1.3.1/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><pre>
-- 
Sincerely yours,
Michel DEVEL
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9507.php">Scott Atchley: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
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
