<?
$subject_val = "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 08:37:44 2014" -->
<!-- isoreceived="20140320123744" -->
<!-- sent="Thu, 20 Mar 2014 12:37:42 +0000" -->
<!-- isosent="20140320123742" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran" -->
<!-- id="D2C35DB8-0DB0-47FE-967E-008B28389EB9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S_+9AZxHeJryMAhCw5enGK68whzCbtTDjS+R4ofR9t7Ag_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-03-20 08:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23894.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23892.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23892.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23896.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23896.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very odd.  Your logfiles indicate that OMPI's configure found the right ignore TKR syntax and decided to build the ignore TKR mpi module.  
<br>
<p>-----
<br>
checking Fortran compiler ignore TKR syntax... not cached; checking variants
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
<br>
checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
<br>
checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
<br>
checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
<br>
checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$ IGNORE_TKR
<br>
checking if building Fortran 'use mpi' bindings... yes
<br>
-----
<br>
<p>And then the make logs indicate that it did, indeed, build the ignore TKR mpi module.
<br>
<p>-----
<br>
Making all in mpi/fortran/use-mpi-ignore-tkr
<br>
&nbsp;&nbsp;PPFC     mpi-ignore-tkr.lo
<br>
&nbsp;&nbsp;FCLD     libmpi_usempi_ignore_tkr.la
<br>
-----
<br>
<p>And then make install fails:
<br>
<p>-----
<br>
Making install in mpi/fortran/use-mpi-ignore-tkr
<br>
&nbsp;../../../../config/install-sh -c -d '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
<br>
&nbsp;/bin/sh ../../../../libtool   --mode=install /usr/bin/install -c   libmpi_usempi_ignore_tkr.la '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib'
<br>
libtool: install: /usr/bin/install -c .libs/libmpi_usempi_ignore_tkr.0.dylib /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc/lib/libmpi_usempi_ignore_tkr.0.dylib
<br>
install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or directory
<br>
-----
<br>
<p>Can you do the following:
<br>
<p>-----
<br>
cd ompi_build_dir/ompi/mpi/fortran/use-mpi-ignore-tkr
<br>
make clean
<br>
make V=1
<br>
find .
<br>
make install
<br>
-----
<br>
<p><p>On Mar 20, 2014, at 7:44 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does not:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Directory: /Users/fortran/MPI/src/openmpi-1.7.4/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs
</span><br>
<span class="quotelev1">&gt; (106) $ ls -ltr
</span><br>
<span class="quotelev1">&gt; total 1560
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff  784824 Mar 18 20:47 mpi-ignore-tkr.o
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 fortran  staff    1021 Mar 18 20:47 libmpi_usempi_ignore_tkr.lai
</span><br>
<span class="quotelev1">&gt; lrwxr-xr-x  1 fortran  staff      30 Mar 18 20:47 libmpi_usempi_ignore_tkr.la@ -&gt; ../libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev1">&gt; lrwxr-xr-x  1 fortran  staff      32 Mar 18 20:47 libmpi_usempi_ignore_tkr.dylib@ -&gt; libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which I guess makes sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm attaching the logfiles from my compile attempt. This is the &quot;basic&quot; attempt as can be seen from the config.log file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 20, 2014 at 6:45 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Sorry for the delay; we're working on releasing 1.7.5 and that's consuming all my time...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a strange error.  Can you confirm whether ompi_buil_dir/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs/libmpi_usempi_ignore_tkr.0.dylib exists or not?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send all the info listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2014, at 8:59 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I recently downloaded PGI's Free OS X Fortran compiler:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.pgroup.com/products/freepgi/">http://www.pgroup.com/products/freepgi/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; in the hope of potentially using it to compile a weather model I work with GEOS-5. That model requires an MPI stack and I usually start (and end) with Open MPI on a desktop.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I grabbed Open MPI 1.7.4 and tried compiling it in a few ways. In each case, my C and C++ compilers were the built-in clang-y gcc and g++ from Xcode, while pgfortran was the Fortran compiler. I tried a few different configures from the basic:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64' CXXFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64' --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; all the way to the &quot;let's try every flag Google says I might use&quot; version of:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64 -Xclang -target-feature -Xclang -aes -mmacosx-version-min=10.8' CXXFLAGS='-m64 -Xclang -target-feature -Xclang -aes -mmacosx-version-min=10.8' LDFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64' --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In every case, the configure, make, and make check worked well without error, but running a 'make install' led to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making install in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev2">&gt; &gt;  ../../../../config/install-sh -c -d '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev2">&gt; &gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c   libmpi_usempi_ignore_tkr.la '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev2">&gt; &gt; libtool: install: /usr/bin/install -c .libs/libmpi_usempi_ignore_tkr.0.dylib /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [install-libLTLIBRARIES] Error 71
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas on how to overcome this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Matt Thompson
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
<span class="quotelev1">&gt; &lt;OMPI-1.7.4-Logfiles.tar.bz2&gt;_______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23894.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23892.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23892.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23896.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23896.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
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
