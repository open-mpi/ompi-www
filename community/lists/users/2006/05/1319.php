<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 27 12:01:16 2006" -->
<!-- isoreceived="20060527160116" -->
<!-- sent="Sat, 27 May 2006 12:01:23 -0400" -->
<!-- isosent="20060527160123" -->
<!-- name="Justin Bronder" -->
<!-- email="rideonsnow_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers." -->
<!-- id="447877D3.4040709_at_gmail.com" -->
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
<strong>From:</strong> Justin Bronder (<em>rideonsnow_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-27 12:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Previous message:</strong> <a href="1318.php">imran shaik: "[OMPI users] mpirun hangs??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Reply:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attached the required logs.  Essentially the problem seems to
<br>
be that the XL Compilers fail to recognize &quot;__asm__ __volatile__&quot; in
<br>
opal/include/sys/powerpc/atomic.h when building 64-bit.
<br>
<p>I've tried using various xlc wrappers such as gxlc and xlc_r to
<br>
no avail.  The current log uses xlc_r_64 which is just a one line
<br>
shell script forcing the -q64 option.
<br>
<p>The same works flawlessly with gcc-4.1.0.  I'm using the nightly
<br>
build in order to link with Torque's new shared libraries.
<br>
<p>Any help would be greatly appreciated.  For reference here are
<br>
a few other things that may provide more information.
<br>
<p>node42 openmpi-1.0.3a1r10002 # uname -a
<br>
Linux node42 2.6.16-ck6-r1-h1 #1 SMP Wed May 24 16:39:01 EDT 2006 ppc64
<br>
PPC970FX, altivec supported GNU/Linux
<br>
<p>node42 openmpi-1.0.3a1r10002 # gcc -v
<br>
Reading specs from /usr/lib/gcc/powerpc64-unknown-linux-gnu/3.4.6/specs
<br>
Configured with: /var/tmp/portage/gcc-3.4.6-r1/work/gcc-3.4.6/configure
<br>
--prefix=/usr --bindir=/usr/powerpc64-unknown-linux-gnu/gcc-bin/3.4.6
<br>
--includedir=/usr/lib/gcc/powerpc64-unknown-linux-gnu/3.4.6/include
<br>
--datadir=/usr/share/gcc-data/powerpc64-unknown-linux-gnu/3.4.6
<br>
--mandir=/usr/share/gcc-data/powerpc64-unknown-linux-gnu/3.4.6/man
<br>
--infodir=/usr/share/gcc-data/powerpc64-unknown-linux-gnu/3.4.6/info
<br>
--with-gxx-include-dir=/usr/lib/gcc/powerpc64-unknown-linux-gnu/3.4.6/include/g++-v3
<br>
--host=powerpc64-unknown-linux-gnu --build=powerpc64-unknown-linux-gnu
<br>
--enable-altivec --enable-nls --without-included-gettext
<br>
--with-system-zlib --disable-checking --disable-werror
<br>
--disable-libunwind-exceptions --enable-multilib --disable-libgcj
<br>
--enable-languages=c,c++,f77 --enable-shared --enable-threads=posix
<br>
--enable-__cxa_atexit --enable-clocale=gnu
<br>
Thread model: posix
<br>
gcc version 3.4.6 (Gentoo 3.4.6-r1, ssp-3.4.5-1.0, pie-8.7.9)
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Justin Bronder
University of Maine, Orono
Advanced Computing Research Lab
20 Godfrey Dr
Orono, ME 04473
www.clusters.umaine.edu
Mathematics Department
425 Neville Hall
Orono, ME 04469

</pre>
<hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1319/ompi-build.tar.gz">ompi-build.tar.gz</a>
</ul>
<!-- attachment="ompi-build.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Previous message:</strong> <a href="1318.php">imran shaik: "[OMPI users] mpirun hangs??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Reply:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
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
