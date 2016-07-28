<?
$subject_val = "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 11:02:22 2014" -->
<!-- isoreceived="20140321150222" -->
<!-- sent="Fri, 21 Mar 2014 15:02:14 +0000" -->
<!-- isosent="20140321150214" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran" -->
<!-- id="549FD4B8-F92B-4987-B2E2-DB64A54C976B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S-qHPd8zFP1T+PcQNtZ3eCNSgGie27GD4aMwbBJtPASHQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 11:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Previous message:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23896.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is starting to smell like a Libtool and/or Automake bug -- it created libmpi_usempi_ignore_tkr.dylib, but it tried to install libmpi_usempi_ignore_tkr.0.dylib (notice the extra &quot;.0&quot;).  :-\
<br>
<p>This is both good and bad.
<br>
<p>Good: I can think of 2 ways to work around this issue off the top of my head:
<br>
<p>1. &quot;make -k install&quot; and ignore the error as it flashes by.  The rest of OMPI will install properly.  Then cd into build_dir/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs. Copy libmpi_usempi_ignore_tkr.* to $libdir (i.e., /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib, in your example below).  And you should be good to go.
<br>
<p>...although you may need to do a similar thing in the ompi/mpi/fortran/use-mpi-f08/.libs directory.
<br>
<p>2. Somewhere in ompi/mpi/fortran/use-mpi-ignore-tkr/Makefile will be the filename &quot;libmpi_usempi_ignore_tkr.0.dylib&quot;.  Edit it to remove the &quot;.0&quot;.  Then &quot;make install&quot; should work fine.  (you might need to do the same in use-mpi-f08/Makefile)
<br>
<p>Bad: we can't really fix this error if it really is a bug in Automake and/or Libtool, but we can at least report it upstream.
<br>
<p>I've made a trivial Autotools test project (<a href="https://github.com/jsquyres/pgi-autotool-bug">https://github.com/jsquyres/pgi-autotool-bug</a>) to see if we can nail this down a little more, and possibly use the results to report upstream.
<br>
<p>Here's the versions of Autotools that we use to make the OMPI 1.7.x series:
<br>
<p>Autoconf 2.69
<br>
Automake 1.12.2
<br>
Libtool 2.4.2
<br>
m4 1.4.16
<br>
<p>Attached is a tarball I made of the sample project using those versions.  Can you try building and installing this tarball on your system with the same kinds of options you used with OMPI?  Hopefully, you should see the same error.  If not, I need to tweak this project a bit more to make it more like OMPI's build system behavior.
<br>
<p>If you can replicate the error, then also try the second attached tarball: it's the same project, but bootstrapped with the latest versions of GNU Automake (the others are already the most recent):
<br>
<p>Automake 1.14.1
<br>
<p>This will let us see if automake 1.14.1 has fixed the issue.
<br>
<p><p><p><p>On Mar 20, 2014, at 1:16 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, here you go:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (3) $ cd ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt; total 2888
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff   1.7K Apr 13  2013 Makefile.am
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff   215K Dec 17 21:09 mpi-ignore-tkr-interfaces.h.in
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff    39K Dec 17 21:09 mpi-ignore-tkr-file-interfaces.h.in
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff   1.5K Jan 27 19:04 mpi-ignore-tkr.F90
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff    80K Feb  4 17:53 Makefile.in
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff   208K Mar 18 20:37 mpi-ignore-tkr-interfaces.h
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff    38K Mar 18 20:37 mpi-ignore-tkr-file-interfaces.h
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff    75K Mar 18 20:37 Makefile
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff   765K Mar 18 20:47 mpi.mod
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff   280B Mar 18 20:47 mpi-ignore-tkr.lo
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff   1.0K Mar 18 20:47 libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev1">&gt; Directory: /Users/fortran/MPI/src/openmpi-1.7.4/ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt; (4) $ make clean
</span><br>
<span class="quotelev1">&gt; test -z &quot;*~ .#*&quot; || rm -f *~ .#*
</span><br>
<span class="quotelev1">&gt; test -z &quot;libmpi_usempi_ignore_tkr.la&quot; || rm -f libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev1">&gt; rm -f ./so_locations
</span><br>
<span class="quotelev1">&gt; rm -rf .libs _libs
</span><br>
<span class="quotelev1">&gt; rm -f *.o
</span><br>
<span class="quotelev1">&gt; test -z &quot;*.mod&quot; || rm -f *.mod
</span><br>
<span class="quotelev1">&gt; rm -f *.lo
</span><br>
<span class="quotelev1">&gt; (5) $ make V=1
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool  --tag=FC   --mode=compile pgfortran -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/hwloc/hwloc172/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc172/hwloc/include/hwloc/autogen  -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1 -I../../../..  -D_REENTRANT -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/include -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent/include -I../../../../ompi/include -I../../../../ompi/include -I../../../.. -I../../../..  -m64 -c -o mpi-ignore-tkr.lo mpi-ignore-tkr.F90
</span><br>
<span class="quotelev1">&gt; libtool: compile:  pgfortran -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/hwloc/hwloc172/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc172/hwloc/include/hwloc/autogen -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1 -I../../../.. -D_REENTRANT -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/include -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent/include -I../../../../ompi/include -I../../../../ompi/include -I../../../.. -I../../../.. -m64 -c mpi-ignore-tkr.F90  -o .libs/mpi-ignore-tkr.o
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool  --tag=FC   --mode=link pgfortran -I../../../../ompi/include -I../../../../ompi/include -I../../../.. -I../../../..  -m64  -export-dynamic -m64  -o libmpi_usempi_ignore_tkr.la -rpath /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib mpi-ignore-tkr.lo
</span><br>
<span class="quotelev1">&gt; libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_usempi_ignore_tkr.dylib&quot; &amp;&amp; ln -s &quot;libmpi_usempi_ignore_tkr.0.dylib&quot; &quot;libmpi_usempi_ignore_tkr.dylib&quot;)
</span><br>
<span class="quotelev1">&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_usempi_ignore_tkr.la&quot; &amp;&amp; ln -s &quot;../libmpi_usempi_ignore_tkr.la&quot; &quot;libmpi_usempi_ignore_tkr.la&quot; )
</span><br>
<span class="quotelev1">&gt; (6) $ find .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; ./.libs
</span><br>
<span class="quotelev1">&gt; ./.libs/libmpi_usempi_ignore_tkr.dylib
</span><br>
<span class="quotelev1">&gt; ./.libs/libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev1">&gt; ./.libs/libmpi_usempi_ignore_tkr.lai
</span><br>
<span class="quotelev1">&gt; ./.libs/mpi-ignore-tkr.o
</span><br>
<span class="quotelev1">&gt; ./libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev1">&gt; ./Makefile
</span><br>
<span class="quotelev1">&gt; ./Makefile.am
</span><br>
<span class="quotelev1">&gt; ./Makefile.in
</span><br>
<span class="quotelev1">&gt; ./mpi-ignore-tkr-file-interfaces.h
</span><br>
<span class="quotelev1">&gt; ./mpi-ignore-tkr-file-interfaces.h.in
</span><br>
<span class="quotelev1">&gt; ./mpi-ignore-tkr-interfaces.h
</span><br>
<span class="quotelev1">&gt; ./mpi-ignore-tkr-interfaces.h.in
</span><br>
<span class="quotelev1">&gt; ./mpi-ignore-tkr.F90
</span><br>
<span class="quotelev1">&gt; ./mpi-ignore-tkr.lo
</span><br>
<span class="quotelev1">&gt; ./mpi.mod
</span><br>
<span class="quotelev1">&gt; (7) $ make install
</span><br>
<span class="quotelev1">&gt;  ../../../../config/install-sh -c -d '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev1">&gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c   libmpi_usempi_ignore_tkr.la '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev1">&gt; libtool: install: /usr/bin/install -c .libs/libmpi_usempi_ignore_tkr.0.dylib /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-libLTLIBRARIES] Error 71
</span><br>
<span class="quotelev1">&gt; make: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 20, 2014 at 8:37 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Very odd.  Your logfiles indicate that OMPI's configure found the right ignore TKR syntax and decided to build the ignore TKR mpi module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking variants
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$ IGNORE_TKR
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then the make logs indicate that it did, indeed, build the ignore TKR mpi module.
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
<span class="quotelev1">&gt;  ../../../../config/install-sh -c -d '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev1">&gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c   libmpi_usempi_ignore_tkr.la '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev1">&gt; libtool: install: /usr/bin/install -c .libs/libmpi_usempi_ignore_tkr.0.dylib /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib/libmpi_usempi_ignore_tkr.0.dylib
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
<span class="quotelev2">&gt; &gt; Directory: /Users/fortran/MPI/src/openmpi-1.7.4/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs
</span><br>
<span class="quotelev2">&gt; &gt; (106) $ ls -ltr
</span><br>
<span class="quotelev2">&gt; &gt; total 1560
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff  784824 Mar 18 20:47 mpi-ignore-tkr.o
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff    1021 Mar 18 20:47 libmpi_usempi_ignore_tkr.lai
</span><br>
<span class="quotelev2">&gt; &gt; lrwxr-xr-x  1 fortran  staff      30 Mar 18 20:47 libmpi_usempi_ignore_tkr.la@ -&gt; ../libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev2">&gt; &gt; lrwxr-xr-x  1 fortran  staff      32 Mar 18 20:47 libmpi_usempi_ignore_tkr.dylib@ -&gt; libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which I guess makes sense.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm attaching the logfiles from my compile attempt. This is the &quot;basic&quot; attempt as can be seen from the config.log file.
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
<span class="quotelev2">&gt; &gt; On Thu, Mar 20, 2014 at 6:45 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the delay; we're working on releasing 1.7.5 and that's consuming all my time...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's a strange error.  Can you confirm whether ompi_buil_dir/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs/libmpi_usempi_ignore_tkr.0.dylib exists or not?
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
<span class="quotelev3">&gt; &gt; &gt; in the hope of potentially using it to compile a weather model I work with GEOS-5. That model requires an MPI stack and I usually start (and end) with Open MPI on a desktop.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, I grabbed Open MPI 1.7.4 and tried compiling it in a few ways. In each case, my C and C++ compilers were the built-in clang-y gcc and g++ from Xcode, while pgfortran was the Fortran compiler. I tried a few different configures from the basic:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64' CXXFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64' --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; all the way to the &quot;let's try every flag Google says I might use&quot; version of:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64 -Xclang -target-feature -Xclang -aes -mmacosx-version-min=10.8' CXXFLAGS='-m64 -Xclang -target-feature -Xclang -aes -mmacosx-version-min=10.8' LDFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64' --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In every case, the configure, make, and make check worked well without error, but running a 'make install' led to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Making install in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ../../../../config/install-sh -c -d '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c   libmpi_usempi_ignore_tkr.la '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libtool: install: /usr/bin/install -c .libs/libmpi_usempi_ignore_tkr.0.dylib /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev3">&gt; &gt; &gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or directory
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
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; &lt;OMPI-1.7.4-Logfiles.tar.bz2&gt;_______________________________________________
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev1">&gt;  get is one trick: rational thinking. But when you're good and crazy,
</span><br>
<span class="quotelev1">&gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23920/pgi-autotool-bug-am12-1.0.tar.bz2">pgi-autotool-bug-am12-1.0.tar.bz2</a>
</ul>
<!-- attachment="pgi-autotool-bug-am12-1.0.tar.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23920/pgi-autotool-bug-am14-1.0.tar.bz2">pgi-autotool-bug-am14-1.0.tar.bz2</a>
</ul>
<!-- attachment="pgi-autotool-bug-am14-1.0.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Previous message:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23896.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
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
