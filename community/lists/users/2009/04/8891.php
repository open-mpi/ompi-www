<?
$subject_val = "Re: [OMPI users] XLF and 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 07:07:25 2009" -->
<!-- isoreceived="20090414110725" -->
<!-- sent="Tue, 14 Apr 2009 16:36:59 +0530" -->
<!-- isosent="20090414110659" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] XLF and 1.3.1" -->
<!-- id="1239707219.15691.1.camel_at_jnysal" -->
<!-- inreplyto="49E44726.6090508_at_uclouvain.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] XLF and 1.3.1<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 07:06:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8892.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8890.php">Jean-Michel Beuken: "[OMPI users]  XLF and 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8890.php">Jean-Michel Beuken: "[OMPI users]  XLF and 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8918.php">Jean-Michel Beuken: "Re: [OMPI users] XLF and 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8918.php">Jean-Michel Beuken: "Re: [OMPI users] XLF and 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try adding --disable-dlopen to the configure command line
<br>
<p>--Nysal
<br>
<p>On Tue, 2009-04-14 at 10:19 +0200, Jean-Michel Beuken wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to build 1.3.1 under  IBM Power5 + SLES 9.1 + XLF 9.1...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after some searches on FAQ and Google, my configure :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CC=&quot;/opt/ibmcmp/vac/7.0/bin/xlc&quot;
</span><br>
<span class="quotelev1">&gt; export CXX=&quot;/opt/ibmcmp/vacpp/7.0/bin/xlc++&quot;
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-O2 -q64 -qmaxmem=-1&quot;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; export F77=&quot;/opt/ibmcmp/xlf/9.1/bin/xlf&quot;
</span><br>
<span class="quotelev1">&gt; export FFLAGS=&quot;-O2 -q64 -qmaxmem=-1&quot;
</span><br>
<span class="quotelev1">&gt; export FC=&quot;/opt/ibmcmp/xlf/9.1/bin/xlf90&quot;
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=&quot;-O2 -q64 -qmaxmem=-1&quot;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=&quot;-q64&quot;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi_1.3.1 \
</span><br>
<span class="quotelev1">&gt;        --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt;        --enable-mpi-f77 --enable-mpi-f90 \
</span><br>
<span class="quotelev1">&gt;        --disable-mpi-profile \
</span><br>
<span class="quotelev1">&gt;        --without-xgrid \
</span><br>
<span class="quotelev1">&gt;        --enable-static --disable-shared \
</span><br>
<span class="quotelev1">&gt;        --disable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;        --enable-contrib-no-build=libnbc,vt \
</span><br>
<span class="quotelev1">&gt;        --enable-mca-no-build=maffinity,btl-portals \
</span><br>
<span class="quotelev1">&gt;        --disable-mpi-cxx --disable-mpi-cxx-seek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there is a problem of &quot;multiple definition&quot;...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any advices ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jmb
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/usr/local/src/openmpi-1.3.1/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link 
</span><br>
<span class="quotelev1">&gt; /opt/ibmcmp/vac/7.0/bin/xlc  -DNDEBUG -O2 -q64 -qmaxmem=-1   
</span><br>
<span class="quotelev1">&gt; -export-dynamic -q64  -o opal_wrapper opal_wrapper.o 
</span><br>
<span class="quotelev1">&gt; ../../../opal/libopen-pal.la -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/ibmcmp/vac/7.0/bin/xlc -DNDEBUG -O2 -q64 -qmaxmem=-1 
</span><br>
<span class="quotelev1">&gt; -q64 -o opal_wrapper opal_wrapper.o -Wl,--export-dynamic  
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a -ldl -lnsl -lutil -lpthread
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt__alloc.o)(.opd+0x18): 
</span><br>
<span class="quotelev1">&gt; In function `argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt__alloc.o)(.text+0x60): 
</span><br>
<span class="quotelev1">&gt; In function `.argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt__alloc.o)(.opd+0x30): 
</span><br>
<span class="quotelev1">&gt; In function `__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt__alloc.o)(.text+0x80): 
</span><br>
<span class="quotelev1">&gt; In function `.__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)(.opd+0x108): In 
</span><br>
<span class="quotelev1">&gt; function `argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)(.text+0x860): 
</span><br>
<span class="quotelev1">&gt; In function `.argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `.argz_next' changed from 20 in 
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o) to 60 in 
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)(.opd+0x120): In 
</span><br>
<span class="quotelev1">&gt; function `__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-preopen.o)(.text+0x8a0): 
</span><br>
<span class="quotelev1">&gt; In function `.__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(dlopen.o)(.opd+0x78): In function 
</span><br>
<span class="quotelev1">&gt; `argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(dlopen.o)(.text+0x240): In function 
</span><br>
<span class="quotelev1">&gt; `.argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(dlopen.o)(.opd+0x90): In function 
</span><br>
<span class="quotelev1">&gt; `__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(dlopen.o)(.text+0x280): In function 
</span><br>
<span class="quotelev1">&gt; `.__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_error.o)(.opd+0x78): In 
</span><br>
<span class="quotelev1">&gt; function `argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_error.o)(.text+0x260): 
</span><br>
<span class="quotelev1">&gt; In function `.argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_error.o)(.opd+0x90): In 
</span><br>
<span class="quotelev1">&gt; function `__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_error.o)(.text+0x2a0): 
</span><br>
<span class="quotelev1">&gt; In function `.__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)(.opd+0x90): 
</span><br>
<span class="quotelev1">&gt; In function `argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)(.text+0x480): 
</span><br>
<span class="quotelev1">&gt; In function `.argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `.argz_next' changed from 60 in 
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o) to 20 in 
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)(.opd+0xa8): 
</span><br>
<span class="quotelev1">&gt; In function `__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-lt_dlloader.o)(.text+0x4a0): 
</span><br>
<span class="quotelev1">&gt; In function `.__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-slist.o)(.opd+0x2a0): In 
</span><br>
<span class="quotelev1">&gt; function `argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x528): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-slist.o)(.text+0xc40): In 
</span><br>
<span class="quotelev1">&gt; function `.argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4760): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-slist.o)(.opd+0x2b8): In 
</span><br>
<span class="quotelev1">&gt; function `__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x540): first 
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-slist.o)(.text+0xc60): In 
</span><br>
<span class="quotelev1">&gt; function `.__argz_next':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `.__argz_next'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0x4780): 
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/usr/local/src/openmpi-1.3.1/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/usr/local/src/openmpi-1.3.1/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; f----------------------------------------------
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
<li><strong>Next message:</strong> <a href="8892.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8890.php">Jean-Michel Beuken: "[OMPI users]  XLF and 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8890.php">Jean-Michel Beuken: "[OMPI users]  XLF and 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8918.php">Jean-Michel Beuken: "Re: [OMPI users] XLF and 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8918.php">Jean-Michel Beuken: "Re: [OMPI users] XLF and 1.3.1"</a>
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
