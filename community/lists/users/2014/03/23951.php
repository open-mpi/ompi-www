<?
$subject_val = "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 18:34:27 2014" -->
<!-- isoreceived="20140324223427" -->
<!-- sent="Mon, 24 Mar 2014 18:34:06 -0400" -->
<!-- isosent="20140324223406" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran" -->
<!-- id="CAFb48S8st_svi6jtsgqrCBarCUhFpLHf9L+k86C2CaeQSBd6Xg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="549FD4B8-F92B-4987-B2E2-DB64A54C976B_at_cisco.com" -->
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
<strong>Date:</strong> 2014-03-24 18:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23950.php">Ross Boylan: "Re: [OMPI users] delays in Isend"</a>
<li><strong>In reply to:</strong> <a href="23920.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Sorry for the late reply. The answer is: No, 1.14.1 has not fixed the
<br>
problem (and indeed, that's what my Mac is running):
<br>
<p>(28) $ make install | &amp; tee makeinstall.log
<br>
Making install in src
<br>
&nbsp;../config/install-sh -c -d '/Users/fortran/AutomakeBug/autobug14/lib'
<br>
&nbsp;/bin/sh ../libtool   --mode=install /usr/bin/install -c
<br>
libfortran_stuff.la '/Users/fortran/AutomakeBug/autobug14/lib'
<br>
libtool: install: /usr/bin/install -c .libs/libfortran_stuff.0.dylib
<br>
/Users/fortran/AutomakeBug/autobug14/lib/libfortran_stuff.0.dylib
<br>
install: .libs/libfortran_stuff.0.dylib: No such file or directory
<br>
make[2]: *** [install-libLTLIBRARIES] Error 71
<br>
make[1]: *** [install-am] Error 2
<br>
make: *** [install-recursive] Error 1
<br>
<p>This is the output from either the am12 or am14 test. If you have any
<br>
options you'd like me to try with this, let me know. (For example, is there
<br>
a way to make autotools *more* verbose? I've always tried to make it less
<br>
so!)
<br>
<p>Matt
<br>
<p><p>On Fri, Mar 21, 2014 at 11:02 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  This is starting to smell like a Libtool and/or Automake bug -- it
</span><br>
<span class="quotelev1">&gt; created libmpi_usempi_ignore_tkr.dylib, but it tried to install
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.0.dylib (notice the extra &quot;.0&quot;).  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is both good and bad.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good: I can think of 2 ways to work around this issue off the top of my
</span><br>
<span class="quotelev1">&gt; head:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. &quot;make -k install&quot; and ignore the error as it flashes by.  The rest of
</span><br>
<span class="quotelev1">&gt; OMPI will install properly.  Then cd into
</span><br>
<span class="quotelev1">&gt; build_dir/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs. Copy
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.* to $libdir (i.e.,
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib, in your example below).
</span><br>
<span class="quotelev1">&gt; And you should be good to go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...although you may need to do a similar thing in the
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/use-mpi-f08/.libs directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Somewhere in ompi/mpi/fortran/use-mpi-ignore-tkr/Makefile will be the
</span><br>
<span class="quotelev1">&gt; filename &quot;libmpi_usempi_ignore_tkr.0.dylib&quot;.  Edit it to remove the &quot;.0&quot;.
</span><br>
<span class="quotelev1">&gt; Then &quot;make install&quot; should work fine.  (you might need to do the same in
</span><br>
<span class="quotelev1">&gt; use-mpi-f08/Makefile)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bad: we can't really fix this error if it really is a bug in Automake
</span><br>
<span class="quotelev1">&gt; and/or Libtool, but we can at least report it upstream.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've made a trivial Autotools test project (
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/jsquyres/pgi-autotool-bug">https://github.com/jsquyres/pgi-autotool-bug</a>) to see if we can nail this
</span><br>
<span class="quotelev1">&gt; down a little more, and possibly use the results to report upstream.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the versions of Autotools that we use to make the OMPI 1.7.x series:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Autoconf 2.69
</span><br>
<span class="quotelev1">&gt; Automake 1.12.2
</span><br>
<span class="quotelev1">&gt; Libtool 2.4.2
</span><br>
<span class="quotelev1">&gt; m4 1.4.16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a tarball I made of the sample project using those versions.
</span><br>
<span class="quotelev1">&gt; Can you try building and installing this tarball on your system with the
</span><br>
<span class="quotelev1">&gt; same kinds of options you used with OMPI?  Hopefully, you should see the
</span><br>
<span class="quotelev1">&gt; same error.  If not, I need to tweak this project a bit more to make it
</span><br>
<span class="quotelev1">&gt; more like OMPI's build system behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can replicate the error, then also try the second attached tarball:
</span><br>
<span class="quotelev1">&gt; it's the same project, but bootstrapped with the latest versions of GNU
</span><br>
<span class="quotelev1">&gt; Automake (the others are already the most recent):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Automake 1.14.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will let us see if automake 1.14.1 has fixed the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2014, at 1:16 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff, here you go:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (3) $ cd ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev2">&gt; &gt; total 2888
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff   1.7K Apr 13  2013 Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff   215K Dec 17 21:09
</span><br>
<span class="quotelev1">&gt; mpi-ignore-tkr-interfaces.h.in
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff    39K Dec 17 21:09
</span><br>
<span class="quotelev1">&gt; mpi-ignore-tkr-file-interfaces.h.in
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff   1.5K Jan 27 19:04 mpi-ignore-tkr.F90
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff    80K Feb  4 17:53 Makefile.in
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff   208K Mar 18 20:37
</span><br>
<span class="quotelev1">&gt; mpi-ignore-tkr-interfaces.h
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff    38K Mar 18 20:37
</span><br>
<span class="quotelev1">&gt; mpi-ignore-tkr-file-interfaces.h
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff    75K Mar 18 20:37 Makefile
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff   765K Mar 18 20:47 mpi.mod
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff   280B Mar 18 20:47 mpi-ignore-tkr.lo
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 fortran  staff   1.0K Mar 18 20:47
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev2">&gt; &gt; Directory:
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/src/openmpi-1.7.4/ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev2">&gt; &gt; (4) $ make clean
</span><br>
<span class="quotelev2">&gt; &gt; test -z &quot;*~ .#*&quot; || rm -f *~ .#*
</span><br>
<span class="quotelev2">&gt; &gt; test -z &quot;libmpi_usempi_ignore_tkr.la&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev2">&gt; &gt; rm -f ./so_locations
</span><br>
<span class="quotelev2">&gt; &gt; rm -rf .libs _libs
</span><br>
<span class="quotelev2">&gt; &gt; rm -f *.o
</span><br>
<span class="quotelev2">&gt; &gt; test -z &quot;*.mod&quot; || rm -f *.mod
</span><br>
<span class="quotelev2">&gt; &gt; rm -f *.lo
</span><br>
<span class="quotelev2">&gt; &gt; (5) $ make V=1
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../../libtool  --tag=FC   --mode=compile pgfortran
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc172/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc172/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1 -I../../../..
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I../../../../ompi/include -I../../../..
</span><br>
<span class="quotelev1">&gt; -I../../../..  -m64 -c -o mpi-ignore-tkr.lo mpi-ignore-tkr.F90
</span><br>
<span class="quotelev2">&gt; &gt; libtool: compile:  pgfortran -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc172/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc172/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1 -I../../../..
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/Users/fortran/MPI/src/openmpi-1.7.4/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I../../../../ompi/include -I../../../..
</span><br>
<span class="quotelev1">&gt; -I../../../.. -m64 -c mpi-ignore-tkr.F90  -o .libs/mpi-ignore-tkr.o
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../../libtool  --tag=FC   --mode=link pgfortran
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I../../../../ompi/include -I../../../..
</span><br>
<span class="quotelev1">&gt; -I../../../..  -m64  -export-dynamic -m64  -o libmpi_usempi_ignore_tkr.la-rpath /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib
</span><br>
<span class="quotelev1">&gt; mpi-ignore-tkr.lo
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_usempi_ignore_tkr.dylib&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt; ln -s &quot;libmpi_usempi_ignore_tkr.0.dylib&quot; &quot;libmpi_usempi_ignore_tkr.dylib&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_usempi_ignore_tkr.la&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../libmpi_usempi_ignore_tkr.la&quot; &quot;libmpi_usempi_ignore_tkr.la&quot; )
</span><br>
<span class="quotelev2">&gt; &gt; (6) $ find .
</span><br>
<span class="quotelev2">&gt; &gt; .
</span><br>
<span class="quotelev2">&gt; &gt; ./.libs
</span><br>
<span class="quotelev2">&gt; &gt; ./.libs/libmpi_usempi_ignore_tkr.dylib
</span><br>
<span class="quotelev2">&gt; &gt; ./.libs/libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev2">&gt; &gt; ./.libs/libmpi_usempi_ignore_tkr.lai
</span><br>
<span class="quotelev2">&gt; &gt; ./.libs/mpi-ignore-tkr.o
</span><br>
<span class="quotelev2">&gt; &gt; ./libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev2">&gt; &gt; ./Makefile
</span><br>
<span class="quotelev2">&gt; &gt; ./Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; ./Makefile.in
</span><br>
<span class="quotelev2">&gt; &gt; ./mpi-ignore-tkr-file-interfaces.h
</span><br>
<span class="quotelev2">&gt; &gt; ./mpi-ignore-tkr-file-interfaces.h.in
</span><br>
<span class="quotelev2">&gt; &gt; ./mpi-ignore-tkr-interfaces.h
</span><br>
<span class="quotelev2">&gt; &gt; ./mpi-ignore-tkr-interfaces.h.in
</span><br>
<span class="quotelev2">&gt; &gt; ./mpi-ignore-tkr.F90
</span><br>
<span class="quotelev2">&gt; &gt; ./mpi-ignore-tkr.lo
</span><br>
<span class="quotelev2">&gt; &gt; ./mpi.mod
</span><br>
<span class="quotelev2">&gt; &gt; (7) $ make install
</span><br>
<span class="quotelev2">&gt; &gt;  ../../../../config/install-sh -c -d
</span><br>
<span class="quotelev1">&gt; '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev2">&gt; &gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la'/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev2">&gt; &gt; libtool: install: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [install-libLTLIBRARIES] Error 71
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Mar 20, 2014 at 8:37 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Very odd.  Your logfiles indicate that OMPI's configure found the right
</span><br>
<span class="quotelev1">&gt; ignore TKR syntax and decided to build the ignore TKR mpi module.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; checking Fortran compiler ignore TKR syntax... not cached; checking
</span><br>
<span class="quotelev1">&gt; variants
</span><br>
<span class="quotelev2">&gt; &gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES
</span><br>
<span class="quotelev1">&gt; NO_ARG_CHECK... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking Fortran compiler ignore TKR syntax... 1:real,
</span><br>
<span class="quotelev1">&gt; dimension(*):!DIR$ IGNORE_TKR
</span><br>
<span class="quotelev2">&gt; &gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And then the make logs indicate that it did, indeed, build the ignore
</span><br>
<span class="quotelev1">&gt; TKR mpi module.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; Making all in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev2">&gt; &gt;   PPFC     mpi-ignore-tkr.lo
</span><br>
<span class="quotelev2">&gt; &gt;   FCLD     libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And then make install fails:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; Making install in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev2">&gt; &gt;  ../../../../config/install-sh -c -d
</span><br>
<span class="quotelev1">&gt; '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev2">&gt; &gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la'/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
</span><br>
<span class="quotelev2">&gt; &gt; libtool: install: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you do the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; cd ompi_build_dir/ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev2">&gt; &gt; make clean
</span><br>
<span class="quotelev2">&gt; &gt; make V=1
</span><br>
<span class="quotelev2">&gt; &gt; find .
</span><br>
<span class="quotelev2">&gt; &gt; make install
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 20, 2014, at 7:44 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It does not:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Directory:
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/src/openmpi-1.7.4/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (106) $ ls -ltr
</span><br>
<span class="quotelev3">&gt; &gt; &gt; total 1560
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -rw-r--r--  1 fortran  staff  784824 Mar 18 20:47 mpi-ignore-tkr.o
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -rw-r--r--  1 fortran  staff    1021 Mar 18 20:47
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.lai
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lrwxr-xr-x  1 fortran  staff      30 Mar 18 20:47
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la@ -&gt; ../libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lrwxr-xr-x  1 fortran  staff      32 Mar 18 20:47
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.dylib@ -&gt; libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; which I guess makes sense.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm attaching the logfiles from my compile attempt. This is the
</span><br>
<span class="quotelev1">&gt; &quot;basic&quot; attempt as can be seen from the config.log file.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Matt
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thu, Mar 20, 2014 at 6:45 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sorry for the delay; we're working on releasing 1.7.5 and that's
</span><br>
<span class="quotelev1">&gt; consuming all my time...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; That's a strange error.  Can you confirm whether
</span><br>
<span class="quotelev1">&gt; ompi_buil_dir/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; exists or not?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you send all the info listed here:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mar 18, 2014, at 8:59 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; All,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I recently downloaded PGI's Free OS X Fortran compiler:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.pgroup.com/products/freepgi/">http://www.pgroup.com/products/freepgi/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; in the hope of potentially using it to compile a weather model I
</span><br>
<span class="quotelev1">&gt; work with GEOS-5. That model requires an MPI stack and I usually start (and
</span><br>
<span class="quotelev1">&gt; end) with Open MPI on a desktop.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; So, I grabbed Open MPI 1.7.4 and tried compiling it in a few ways.
</span><br>
<span class="quotelev1">&gt; In each case, my C and C++ compilers were the built-in clang-y gcc and g++
</span><br>
<span class="quotelev1">&gt; from Xcode, while pgfortran was the Fortran compiler. I tried a few
</span><br>
<span class="quotelev1">&gt; different configures from the basic:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran
</span><br>
<span class="quotelev1">&gt; CFLAGS='-m64' CXXFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; all the way to the &quot;let's try every flag Google says I might use&quot;
</span><br>
<span class="quotelev1">&gt; version of:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64
</span><br>
<span class="quotelev1">&gt; -Xclang -target-feature -Xclang -aes -mmacosx-version-min=10.8'
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-m64 -Xclang -target-feature -Xclang -aes
</span><br>
<span class="quotelev1">&gt; -mmacosx-version-min=10.8' LDFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In every case, the configure, make, and make check worked well
</span><br>
<span class="quotelev1">&gt; without error, but running a 'make install' led to:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Making install in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  ../../../../config/install-sh -c -d
</span><br>
<span class="quotelev1">&gt; '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la'/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; libtool: install: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[3]: *** [install-libLTLIBRARIES] Error 71
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Any ideas on how to overcome this?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Matt Thompson
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  get is one trick: rational thinking. But when you're good and crazy,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;OMPI-1.7.4-Logfiles.tar.bz2&gt;_______________________________________________
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
<span class="quotelev2">&gt; &gt; _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23951/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23950.php">Ross Boylan: "Re: [OMPI users] delays in Isend"</a>
<li><strong>In reply to:</strong> <a href="23920.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
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
