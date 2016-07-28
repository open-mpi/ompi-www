<?
$subject_val = "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 07:45:05 2014" -->
<!-- isoreceived="20140320114505" -->
<!-- sent="Thu, 20 Mar 2014 07:44:43 -0400" -->
<!-- isosent="20140320114443" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran" -->
<!-- id="CAFb48S_+9AZxHeJryMAhCw5enGK68whzCbtTDjS+R4ofR9t7Ag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="939F804C-82EC-4DA8-B42B-479C760C38D7_at_cisco.com" -->
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
<strong>Date:</strong> 2014-03-20 07:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>It does not:
<br>
<p>Directory:
<br>
/Users/fortran/MPI/src/openmpi-1.7.4/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs
<br>
(106) $ ls -ltr
<br>
total 1560
<br>
-rw-r--r--  1 fortran  staff  784824 Mar 18 20:47 mpi-ignore-tkr.o
<br>
-rw-r--r--  1 fortran  staff    1021 Mar 18 20:47
<br>
libmpi_usempi_ignore_tkr.lai
<br>
lrwxr-xr-x  1 fortran  staff      30 Mar 18 20:47
<br>
libmpi_usempi_ignore_tkr.la@ -&gt; ../libmpi_usempi_ignore_tkr.la
<br>
lrwxr-xr-x  1 fortran  staff      32 Mar 18 20:47
<br>
libmpi_usempi_ignore_tkr.dylib@ -&gt; libmpi_usempi_ignore_tkr.0.dylib
<br>
<p>which I guess makes sense.
<br>
<p>I'm attaching the logfiles from my compile attempt. This is the &quot;basic&quot;
<br>
attempt as can be seen from the config.log file.
<br>
<p>Thanks,
<br>
Matt
<br>
<p><p><p>On Thu, Mar 20, 2014 at 6:45 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Sorry for the delay; we're working on releasing 1.7.5 and that's consuming
</span><br>
<span class="quotelev1">&gt; all my time...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a strange error.  Can you confirm whether
</span><br>
<span class="quotelev1">&gt; ompi_buil_dir/ompi/mpi/fortran/use-mpi-ignore-tkr/.libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; exists or not?
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
<span class="quotelev2">&gt; &gt; in the hope of potentially using it to compile a weather model I work
</span><br>
<span class="quotelev1">&gt; with GEOS-5. That model requires an MPI stack and I usually start (and end)
</span><br>
<span class="quotelev1">&gt; with Open MPI on a desktop.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I grabbed Open MPI 1.7.4 and tried compiling it in a few ways. In
</span><br>
<span class="quotelev1">&gt; each case, my C and C++ compilers were the built-in clang-y gcc and g++
</span><br>
<span class="quotelev1">&gt; from Xcode, while pgfortran was the Fortran compiler. I tried a few
</span><br>
<span class="quotelev1">&gt; different configures from the basic:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; all the way to the &quot;let's try every flag Google says I might use&quot;
</span><br>
<span class="quotelev1">&gt; version of:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64
</span><br>
<span class="quotelev1">&gt; -Xclang -target-feature -Xclang -aes -mmacosx-version-min=10.8'
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-m64 -Xclang -target-feature -Xclang -aes
</span><br>
<span class="quotelev1">&gt; -mmacosx-version-min=10.8' LDFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In every case, the configure, make, and make check worked well without
</span><br>
<span class="quotelev1">&gt; error, but running a 'make install' led to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making install in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev2">&gt; &gt;  ../../../../config/install-sh -c -d
</span><br>
<span class="quotelev1">&gt; '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev2">&gt; &gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la'/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev2">&gt; &gt; libtool: install: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or
</span><br>
<span class="quotelev1">&gt; directory
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23892/OMPI-1.7.4-Logfiles.tar.bz2">OMPI-1.7.4-Logfiles.tar.bz2</a>
</ul>
<!-- attachment="OMPI-1.7.4-Logfiles.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
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
