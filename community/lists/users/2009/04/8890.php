<?
$subject_val = "[OMPI users]  XLF and 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 04:20:03 2009" -->
<!-- isoreceived="20090414082003" -->
<!-- sent="Tue, 14 Apr 2009 10:19:50 +0200" -->
<!-- isosent="20090414081950" -->
<!-- name="Jean-Michel Beuken" -->
<!-- email="jean-michel.beuken_at_[hidden]" -->
<!-- subject="[OMPI users]  XLF and 1.3.1" -->
<!-- id="49E44726.6090508_at_uclouvain.be" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1239691949.7289.5.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users]  XLF and 1.3.1<br>
<strong>From:</strong> Jean-Michel Beuken (<em>jean-michel.beuken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 04:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8891.php">Nysal Jan: "Re: [OMPI users] XLF and 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8889.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8888.php">&#197;ke Sandgren: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8891.php">Nysal Jan: "Re: [OMPI users] XLF and 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8891.php">Nysal Jan: "Re: [OMPI users] XLF and 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to build 1.3.1 under  IBM Power5 + SLES 9.1 + XLF 9.1...
<br>
<p>after some searches on FAQ and Google, my configure :
<br>
<p>export CC=&quot;/opt/ibmcmp/vac/7.0/bin/xlc&quot;
<br>
export CXX=&quot;/opt/ibmcmp/vacpp/7.0/bin/xlc++&quot;
<br>
export CFLAGS=&quot;-O2 -q64 -qmaxmem=-1&quot;
<br>
#
<br>
export F77=&quot;/opt/ibmcmp/xlf/9.1/bin/xlf&quot;
<br>
export FFLAGS=&quot;-O2 -q64 -qmaxmem=-1&quot;
<br>
export FC=&quot;/opt/ibmcmp/xlf/9.1/bin/xlf90&quot;
<br>
export FCFLAGS=&quot;-O2 -q64 -qmaxmem=-1&quot;
<br>
#
<br>
export LDFLAGS=&quot;-q64&quot;
<br>
#
<br>
./configure --prefix=/usr/local/openmpi_1.3.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-ipv6 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-f77 --enable-mpi-f90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-profile \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-xgrid \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static --disable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=libnbc,vt \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-no-build=maffinity,btl-portals \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-cxx --disable-mpi-cxx-seek
<br>
<p><p><p>there is a problem of &quot;multiple definition&quot;...
<br>
<p>any advices ?
<br>
<p>thanks
<br>
<p>jmb
<br>
<p>----------------------------------------------
<br>
make[2]: Entering directory 
<br>
`/usr/local/src/openmpi-1.3.1/opal/tools/wrappers'
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link 
<br>
/opt/ibmcmp/vac/7.0/bin/xlc  -DNDEBUG -O2 -q64 -qmaxmem=-1   
<br>
-export-dynamic -q64  -o opal_wrapper opal_wrapper.o 
<br>
../../../opal/libopen-pal.la -lnsl -lutil  -lpthread
<br>
libtool: link: /opt/ibmcmp/vac/7.0/bin/xlc -DNDEBUG -O2 -q64 -qmaxmem=-1 
<br>
-q64 -o opal_wrapper opal_wrapper.o -Wl,--export-dynamic  
<br>
../../../opal/.libs/libopen-pal.a -ldl -lnsl -lutil -lpthread
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt__alloc.o)(.opd+0x18): 
<br>
In function `argz_next':
<br>
: multiple definition of `argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt__alloc.o)(.text+0x60): 
<br>
In function `.argz_next':
<br>
: multiple definition of `.argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
<br>
first defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt__alloc.o)(.opd+0x30): 
<br>
In function `__argz_next':
<br>
: multiple definition of `__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt__alloc.o)(.text+0x80): 
<br>
In function `.__argz_next':
<br>
: multiple definition of `.__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
<br>
first defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)(.opd+0x108): In 
<br>
function `argz_next':
<br>
: multiple definition of `argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)(.text+0x860): 
<br>
In function `.argz_next':
<br>
: multiple definition of `.argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
<br>
first defined here
<br>
/usr/bin/ld: Warning: size of symbol `.argz_next' changed from 20 in 
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o) to 60 in 
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)(.opd+0x120): In 
<br>
function `__argz_next':
<br>
: multiple definition of `__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)(.text+0x8a0): 
<br>
In function `.__argz_next':
<br>
: multiple definition of `.__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
<br>
first defined here
<br>
../../../opal/.libs/libopen-pal.a(dlopen.o)(.opd+0x78): In function 
<br>
`argz_next':
<br>
: multiple definition of `argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(dlopen.o)(.text+0x240): In function 
<br>
`.argz_next':
<br>
: multiple definition of `.argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
<br>
first defined here
<br>
../../../opal/.libs/libopen-pal.a(dlopen.o)(.opd+0x90): In function 
<br>
`__argz_next':
<br>
: multiple definition of `__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(dlopen.o)(.text+0x280): In function 
<br>
`.__argz_next':
<br>
: multiple definition of `.__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
<br>
first defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_error.o)(.opd+0x78): In 
<br>
function `argz_next':
<br>
: multiple definition of `argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_error.o)(.text+0x260): 
<br>
In function `.argz_next':
<br>
: multiple definition of `.argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
<br>
first defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_error.o)(.opd+0x90): In 
<br>
function `__argz_next':
<br>
: multiple definition of `__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_error.o)(.text+0x2a0): 
<br>
In function `.__argz_next':
<br>
: multiple definition of `.__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
<br>
first defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)(.opd+0x90): 
<br>
In function `argz_next':
<br>
: multiple definition of `argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)(.text+0x480): 
<br>
In function `.argz_next':
<br>
: multiple definition of `.argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
<br>
first defined here
<br>
/usr/bin/ld: Warning: size of symbol `.argz_next' changed from 60 in 
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o) to 20 in 
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)(.opd+0xa8): 
<br>
In function `__argz_next':
<br>
: multiple definition of `__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)(.text+0x4a0): 
<br>
In function `.__argz_next':
<br>
: multiple definition of `.__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
<br>
first defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-slist.o)(.opd+0x2a0): In 
<br>
function `argz_next':
<br>
: multiple definition of `argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-slist.o)(.text+0xc40): In 
<br>
function `.argz_next':
<br>
: multiple definition of `.argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
<br>
first defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-slist.o)(.opd+0x2b8): In 
<br>
function `__argz_next':
<br>
: multiple definition of `__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
<br>
defined here
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-slist.o)(.text+0xc60): In 
<br>
function `.__argz_next':
<br>
: multiple definition of `.__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
<br>
first defined here
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
f----------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8891.php">Nysal Jan: "Re: [OMPI users] XLF and 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8889.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8888.php">&#197;ke Sandgren: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8891.php">Nysal Jan: "Re: [OMPI users] XLF and 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8891.php">Nysal Jan: "Re: [OMPI users] XLF and 1.3.1"</a>
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
