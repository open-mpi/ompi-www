<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 24 15:12:03 2006" -->
<!-- isoreceived="20060124201203" -->
<!-- sent="Tue, 24 Jan 2006 15:11:52 -0500" -->
<!-- isosent="20060124201152" -->
<!-- name="Michael Kluskens" -->
<!-- email="michael.kluskens_at_[hidden]" -->
<!-- subject="[O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown" -->
<!-- id="001D8B60-2DF3-4CE5-B656-BCAFB2CE13E5_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael Kluskens (<em>michael.kluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-24 15:11:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0518.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Reply:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building Open MPI 1.0.1 on a PowerMac running OS X 10.4.4 using
<br>
1) Apple gnu compilers from Xcode 2.2.1
<br>
2) fink-installed g77
<br>
3) latest g95 &quot;G95 (GCC 4.0.1 (g95!) Jan 23 2006)&quot;
<br>
&nbsp;&nbsp;(the binary from G95 Home)
<br>
<p>setenv F77 g77
<br>
setenv FC g95
<br>
./configure
<br>
<p>In the G95 section of the configure I get
<br>
<p>checking size of FORTRAN integer(selected_int_kind(2))... unknown
<br>
configure: WARNING: *** Problem running configure test!
<br>
<p>Gzipped config.log attached.
<br>
<p>If I change to the older Fink g95 &quot;G95 (GCC 4.0.2 (g95!) Dec 19  
<br>
2005)&quot; I don't see this problem
<br>
<p>System info:
<br>
uname -a
<br>
Darwin 8.4.0 Darwin Kernel Version 8.4.0: Tue Jan  3 18:22:10 PST  
<br>
2006; root:xnu-792.6.56.obj~1/RELEASE_PPC Power Macintosh powerpcgcc  
<br>
--version
<br>
powerpc-apple-darwin8-gcc-4.0.0 (GCC) 4.0.0 (Apple Computer, Inc.
<br>
build 5026)
<br>
<p>g++ --version
<br>
powerpc-apple-darwin8-g++-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc.  
<br>
build 5250)
<br>
<p>&nbsp;&nbsp;g77 --version
<br>
GNU Fortran (GCC) 3.4.3
<br>
<p>Details on latest G95 build:
<br>
g95 -v
<br>
Using built-in specs.
<br>
Target:
<br>
Configured with: /Users/andy/g95/osx/gcc.osx/configure --enable- 
<br>
languages=c
<br>
Thread model: posix
<br>
gcc version 4.0.1 (g95!) Jan 23 2006
<br>
<p>Details on older Fink g95 build:
<br>
g95 -v
<br>
Using built-in specs.
<br>
Target:
<br>
Configured with: ../configure --prefix=/sw/lib/gcc-lib/powerpc-apple- 
<br>
darwin8/4.0.2 --with-gmp=/sw --enable-languages=c --disable-checking  
<br>
--with-included-gettext
<br>
Thread model: posix
<br>
gcc version 4.0.2 (g95!) Dec 19 2005
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0519/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0518.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Reply:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
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
