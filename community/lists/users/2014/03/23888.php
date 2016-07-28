<?
$subject_val = "[OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 21:00:11 2014" -->
<!-- isoreceived="20140319010011" -->
<!-- sent="Tue, 18 Mar 2014 20:59:50 -0400" -->
<!-- isosent="20140319005950" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="[OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran" -->
<!-- id="CAFb48S9Snca9F6WpSZn-EgDBPqjyEDWt8n9gBjgcDpBbp1Ocnw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 20:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23889.php">Amin Hassani: "[OMPI users] How to turn on the internal help messages of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I recently downloaded PGI's Free OS X Fortran compiler:
<br>
<p><a href="http://www.pgroup.com/products/freepgi/">http://www.pgroup.com/products/freepgi/</a>
<br>
<p>in the hope of potentially using it to compile a weather model I work with
<br>
GEOS-5. That model requires an MPI stack and I usually start (and end) with
<br>
Open MPI on a desktop.
<br>
<p>So, I grabbed Open MPI 1.7.4 and tried compiling it in a few ways. In each
<br>
case, my C and C++ compilers were the built-in clang-y gcc and g++ from
<br>
Xcode, while pgfortran was the Fortran compiler. I tried a few different
<br>
configures from the basic:
<br>
<p>$ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64'
<br>
<span class="quotelev1">&gt; CXXFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3
</span><br>
<p><p>all the way to the &quot;let's try every flag Google says I might use&quot; version
<br>
of:
<br>
<p>$ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64
<br>
<span class="quotelev1">&gt; -Xclang -target-feature -Xclang -aes -mmacosx-version-min=10.8'
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-m64 -Xclang -target-feature -Xclang -aes
</span><br>
<span class="quotelev1">&gt; -mmacosx-version-min=10.8' LDFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64'
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx
</span><br>
<p><p>In every case, the configure, make, and make check worked well without
<br>
error, but running a 'make install' led to:
<br>
<p>Making install in mpi/fortran/use-mpi-ignore-tkr
<br>
<span class="quotelev1">&gt;  ../../../../config/install-sh -c -d
</span><br>
<span class="quotelev1">&gt; '/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev1">&gt;  /bin/sh ../../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.la'/Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib'
</span><br>
<span class="quotelev1">&gt; libtool: install: /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; /Users/fortran/MPI/openmpi_1.7.4-pgi_14.3-gcc-mmacosx/lib/libmpi_usempi_ignore_tkr.0.dylib
</span><br>
<span class="quotelev1">&gt; install: .libs/libmpi_usempi_ignore_tkr.0.dylib: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-libLTLIBRARIES] Error 71
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<p><p>Any ideas on how to overcome this?
<br>
<p>Thanks,
<br>
Matt Thompson
<br>
<pre>
-- 
&quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
 get is one trick: rational thinking. But when you're good and crazy,
 oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23888/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23889.php">Amin Hassani: "[OMPI users] How to turn on the internal help messages of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
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
