<?
$subject_val = "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 13:16:24 2014" -->
<!-- isoreceived="20140320171624" -->
<!-- sent="Thu, 20 Mar 2014 13:16:03 -0400" -->
<!-- isosent="20140320171603" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran" -->
<!-- id="CAFb48S-qHPd8zFP1T+PcQNtZ3eCNSgGie27GD4aMwbBJtPASHQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D2C35DB8-0DB0-47FE-967E-008B28389EB9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 13:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23897.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23895.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23920.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23920.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, here you go:
<br>
<p>(3) $ cd ompi/mpi/fortran/use-mpi-ignore-tkr
<br>
total 2888
<br>
-rw-r--r--  1 fortran  staff   1.7K Apr 13  2013 Makefile.am
<br>
-rw-r--r--  1 fortran  staff   215K Dec 17 21:09
<br>
mpi-ignore-tkr-interfaces.h.in
<br>
-rw-r--r--  1 fortran  staff    39K Dec 17 21:09
<br>
mpi-ignore-tkr-file-interfaces.h.in
<br>
-rw-r--r--  1 fortran  staff   1.5K Jan 27 19:04 mpi-ignore-tkr.F90
<br>
-rw-r--r--  1 fortran  staff    80K Feb  4 17:53 Makefile.in
<br>
-rw-r--r--  1 fortran  staff   208K Mar 18 20:37 mpi-ignore-tkr-interfaces.h
<br>
-rw-r--r--  1 fortran  staff    38K Mar 18 20:37
<br>
mpi-ignore-tkr-file-interfaces.h
<br>
-rw-r--r--  1 fortran  staff    75K Mar 18 20:37 Makefile
<br>
-rw-r--r--  1 fortran  staff   765K Mar 18 20:47 mpi.mod
<br>
-rw-r--r--  1 fortran  staff   280B Mar 18 20:47 mpi-ignore-tkr.lo
<br>
-rw-r--r--  1 fortran  staff   1.0K Mar 18 20:47 libmpi_usempi_ignore_tkr.la
<br>
Directory:
<br>
/Users/fortran/MPI/src/openmpi-1.7.4/ompi/mpi/fortran/use-mpi-ignore-tkr
<br>
(4) $ make clean
<br>
test -z &quot;*~ .#*&quot; || rm -f *~ .#*
<br>
test -z &quot;libmpi_usempi_ignore_tkr.la&quot; || rm -f libmpi_usempi_ignore_tkr.la
<br>
rm -f ./so_locations
<br>
rm -rf .libs _libs
<br>
rm -f *.o
<br>
test -z &quot;*.mod&quot; || rm -f *.mod
<br>
rm -f *.lo
<br>
(5) $ make V=1
<br>
/bin/sh ../../../../libtool  --tag=FC   --mode=compile pgfortran
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include
<br>
-I../../../../ompi/include
<br>
-I../../../../opal/mca/hwloc/hwloc172/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc172/hwloc/include/hwloc/autogen
<br>
&nbsp;-DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1 -I../../../..
<br>
&nbsp;-D_REENTRANT
<br>
-I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/include
<br>
-I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent
<br>
-I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent/include
<br>
-I../../../../ompi/include -I../../../../ompi/include -I../../../..
<br>
-I../../../..  -m64 -c -o mpi-ignore-tkr.lo mpi-ignore-tkr.F90
<br>
libtool: compile:  pgfortran -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/hwloc/hwloc172/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc172/hwloc/include/hwloc/autogen
<br>
-DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1 -I../../../..
<br>
-D_REENTRANT
<br>
-I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/include
<br>
-I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent
<br>
-I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent/include
<br>
-I../../../../ompi/include -I../../../../ompi/include -I../../../..
<br>
-I../../../.. -m64 -c mpi-ignore-tkr.F90  -o .libs/mpi-ignore-tkr.o
<br>
/bin/sh ../../../../libtool  --tag=FC   --mode=link pgfortran
<br>
-I../../../../ompi/include -I../../../../ompi/include -I../../../..
<br>
-I../../../..  -m64  -export-dynamic -m64  -o
<br>
libmpi_usempi_ignore_tkr.la-rpath
<br>
/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib mpi-ignore-tkr.lo
<br>
<p>libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_usempi_ignore_tkr.dylib&quot; &amp;&amp; ln
<br>
-s &quot;libmpi_usempi_ignore_tkr.0.dylib&quot; &quot;libmpi_usempi_ignore_tkr.dylib&quot;)
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_usempi_ignore_tkr.la&quot; &amp;&amp; ln -s
<br>
&quot;../libmpi_usempi_ignore_tkr.la&quot; &quot;libmpi_usempi_ignore_tkr.la&quot; )
<br>
(6) $ find .
<br>
.
<br>
./.libs
<br>
./.libs/libmpi_usempi_ignore_tkr.dylib
<br>
./.libs/libmpi_usempi_ignore_tkr.la
<br>
./.libs/libmpi_usempi_ignore_tkr.lai
<br>
./.libs/mpi-ignore-tkr.o
<br>
./libmpi_usempi_ignore_tkr.la
<br>
./Makefile
<br>
./Makefile.am
<br>
./Makefile.in
<br>
./mpi-ignore-tkr-file-interfaces.h
<br>
./mpi-ignore-tkr-file-interfaces.h.in
<br>
./mpi-ignore-tkr-interfaces.h
<br>
./mpi-ignore-tkr-interfaces.h.in
<br>
./mpi-ignore-tkr.F90
<br>
./mpi-ignore-tkr.lo
<br>
./mpi.mod
<br>
(7) $ make install
<br>
&nbsp;../../../../config/install-sh -c -d
<br>
'/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
<br>
&nbsp;/bin/sh ../../../../libtool   --mode=install /usr/bin/install -c
<br>
libmpi_usempi_ignore_tkr.la'/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
<br>
libtool: install: /usr/bin/install -c
<br>
.libs/libmpi_usempi_ignore_tkr.0.dylib
<br>
/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib/libmpi_usempi_ignore_tkr.0.dylib
<br>
install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or directory
<br>
make[1]: *** [install-libLTLIBRARIES] Error 71
<br>
make: *** [install-am] Error 2
<br>
<p><p><p>On Thu, Mar 20, 2014 at 8:37 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Very odd.  Your logfiles indicate that OMPI's configure found the right
</span><br>
<span class="quotelev1">&gt; ignore TKR syntax and decided to build the ignore TKR mpi module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking
</span><br>
<span class="quotelev1">&gt; variants
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK...
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$
</span><br>
<span class="quotelev1">&gt; IGNORE_TKR
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then the make logs indicate that it did, indeed, build the ignore TKR
</span><br>
<span class="quotelev1">&gt; mpi module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Making all in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt;   PPFC     mpi-ignore-tkr.lo
</span><br>
<span class="quotelev1">&gt;   FCLD     libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then make install fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Making install in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt;  ../../../../config/install-sh -c -d
</span><br>
<span class="quotelev1">&gt; '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev1">&gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la'/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev1">&gt; libtool: install: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or directory
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you do the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; cd ompi_build_dir/ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt; make clean
</span><br>
<span class="quotelev1">&gt; make V=1
</span><br>
<span class="quotelev1">&gt; find .
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2014, at 7:44 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It does not:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Directory:
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/src/openmpi-1.7.4/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs
</span><br>
<span class="quotelev2">&gt; &gt; (106) $ ls -ltr
</span><br>
<span class="quotelev2">&gt; &gt; total 1560
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff  784824 Mar 18 20:47 mpi-ignore-tkr.o
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff    1021 Mar 18 20:47
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.lai
</span><br>
<span class="quotelev2">&gt; &gt; lrwxr-xr-x  1 fortran  staff      30 Mar 18 20:47
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la@ -&gt; ../libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev2">&gt; &gt; lrwxr-xr-x  1 fortran  staff      32 Mar 18 20:47
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.dylib@ -&gt; libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which I guess makes sense.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm attaching the logfiles from my compile attempt. This is the &quot;basic&quot;
</span><br>
<span class="quotelev1">&gt; attempt as can be seen from the config.log file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Matt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Mar 20, 2014 at 6:45 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the delay; we're working on releasing 1.7.5 and that's
</span><br>
<span class="quotelev1">&gt; consuming all my time...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's a strange error.  Can you confirm whether
</span><br>
<span class="quotelev1">&gt; ompi_buil_dir/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; exists or not?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you send all the info listed here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 18, 2014, at 8:59 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; All,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I recently downloaded PGI's Free OS X Fortran compiler:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.pgroup.com/products/freepgi/">http://www.pgroup.com/products/freepgi/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in the hope of potentially using it to compile a weather model I work
</span><br>
<span class="quotelev1">&gt; with GEOS-5. That model requires an MPI stack and I usually start (and end)
</span><br>
<span class="quotelev1">&gt; with Open MPI on a desktop.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, I grabbed Open MPI 1.7.4 and tried compiling it in a few ways. In
</span><br>
<span class="quotelev1">&gt; each case, my C and C++ compilers were the built-in clang-y gcc and g++
</span><br>
<span class="quotelev1">&gt; from Xcode, while pgfortran was the Fortran compiler. I tried a few
</span><br>
<span class="quotelev1">&gt; different configures from the basic:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; all the way to the &quot;let's try every flag Google says I might use&quot;
</span><br>
<span class="quotelev1">&gt; version of:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64
</span><br>
<span class="quotelev1">&gt; -Xclang -target-feature -Xclang -aes -mmacosx-version-min=10.8'
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-m64 -Xclang -target-feature -Xclang -aes
</span><br>
<span class="quotelev1">&gt; -mmacosx-version-min=10.8' LDFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In every case, the configure, make, and make check worked well without
</span><br>
<span class="quotelev1">&gt; error, but running a 'make install' led to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Making install in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ../../../../config/install-sh -c -d
</span><br>
<span class="quotelev1">&gt; '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la'/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libtool: install: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev3">&gt; &gt; &gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[3]: *** [install-libLTLIBRARIES] Error 71
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any ideas on how to overcome this?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Matt Thompson
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  get is one trick: rational thinking. But when you're good and crazy,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev2">&gt; &gt;  get is one trick: rational thinking. But when you're good and crazy,
</span><br>
<span class="quotelev2">&gt; &gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;OMPI-1.7.4-Logfiles.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
 get is one trick: rational thinking. But when you're good and crazy,
 oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23897.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23895.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23920.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23920.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
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
