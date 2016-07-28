<?
$subject_val = "[OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 09:58:16 2013" -->
<!-- isoreceived="20130701135816" -->
<!-- sent="Mon, 1 Jul 2013 15:58:12 +0200" -->
<!-- isosent="20130701135812" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="[OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist" -->
<!-- id="CAHYyVz6XzUjCUhaJubHoCj3iZTCqKzPuNJ=b95TtKn96CUng-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 09:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12505.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12503.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12505.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Reply:</strong> <a href="12505.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>There is an error while configuring OpenMPI from the svn checkout with
<br>
aclocal not being able to find 'opal/mca/backtrace/configure.m4',
<br>
which, in fact, does exist there. What changes are needed to fix that?
<br>
<p>Note: it has stepped in the 'opal/libltdl' directory just before that error:
<br>
<p>*** GNU libltdl setup
<br>
checking location of libltdl... internal copy
<br>
configure: OMPI configuring in opal/libltdl
<br>
configure: running /bin/sh
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/configure'
<br>
&nbsp;'--prefix=/usr' '--exec-prefix=/usr' '--bindir=/usr/bin'
<br>
'--sbindir=/usr/sbin' '--libexecdir=/usr/lib' '--datadir=/usr/share'
<br>
'--localstatedir=/var' '--sysconfdir=/etc' '--datarootdir=/usr/share'
<br>
'--docdir=/usr/share/doc/openmpi' 'LDFLAGS=-Wl,--export-all-symbols
<br>
-Wl,-no-undefined' '--disable-mca-dso' '--disable-sysv-shmem'
<br>
'--without-udapl' '--enable-cxx-exceptions' '--with-threads=posix'
<br>
'--without-cs-fs' '--enable-heterogeneous'
<br>
'--with-mpi-param_check=always'
<br>
'--enable-contrib-no-build=vt,libompitrace'
<br>
'--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv'
<br>
'CC=gcc' 'CFLAGS=-ggdb -march=native -mtune=native -Ofast
<br>
-fomit-frame-pointer -pipe
<br>
-fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build=/usr/src/debug/openmpi-1.9.0-a1
<br>
-fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
<br>
'LIBS=' 'CPPFLAGS=' 'CXX=g++' 'CXXFLAGS=-ggdb -march=native
<br>
-mtune=native -Ofast -fomit-frame-pointer -pipe
<br>
-fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build=/usr/src/debug/openmpi-1.9.0-a1
<br>
-fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
<br>
'FC=gfortran' 'FCFLAGS=-ggdb -march=native -mtune=native -Ofast
<br>
-fomit-frame-pointer -pipe
<br>
-fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build=/usr/src/debug/openmpi-1.9.0-a1
<br>
-fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
<br>
--enable-ltdl-convenience --disable-ltdl-install --enable-shared
<br>
--disable-static --cache-file=/dev/null
<br>
--srcdir=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl
<br>
--disable-option-checking
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
&lt;stripped&gt;
<br>
<p>*** Final output
<br>
checking that generated files are newer than configure... done
<br>
&lt;stripped&gt;
<br>
<p>config.status: executing libtool commands
<br>
Making all in config
<br>
make[1]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/config'
<br>
make[1]: Nothing to be done for 'all'.
<br>
make[1]: Leaving directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/config'
<br>
Making all in contrib
<br>
make[1]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/contrib'
<br>
make[1]: Nothing to be done for 'all'.
<br>
make[1]: Leaving directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/contrib'
<br>
Making all in opal
<br>
make[1]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal'
<br>
Making all in include
<br>
make[2]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
<br>
make  all-am
<br>
make[3]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
<br>
make[3]: Leaving directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
<br>
make[2]: Leaving directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
<br>
Making all in libltdl
<br>
make[2]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/libltdl'
<br>
CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl
<br>
&amp;&amp; /bin/sh /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/missing
<br>
aclocal-1.14 -I ../../config
<br>
aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file
<br>
'opal/mca/backtrace/configure.m4' does not exist
<br>
Makefile:527: recipe for target
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/aclocal.m4'
<br>
failed
<br>
make[2]: *** [/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/aclocal.m4]
<br>
Error 1
<br>
make[2]: Leaving directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/libltdl'
<br>
Makefile:2070: recipe for target 'all-recursive' failed
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal'
<br>
Makefile:1578: recipe for target 'all-recursive' failed
<br>
make: *** [all-recursive] Error 1
<br>
*** ERROR: make failed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12505.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12503.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12505.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Reply:</strong> <a href="12505.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
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
