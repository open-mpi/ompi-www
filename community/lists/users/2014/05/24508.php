<?
$subject_val = "[OMPI users] intel compiler and openmpi 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 07:11:45 2014" -->
<!-- isoreceived="20140529111145" -->
<!-- sent="Thu, 29 May 2014 13:11:39 +0200" -->
<!-- isosent="20140529111139" -->
<!-- name="Lorenzo Don&#224;" -->
<!-- email="lorechimica91_at_[hidden]" -->
<!-- subject="[OMPI users] intel compiler and openmpi 1.8.1" -->
<!-- id="BLU436-SMTP20159D89F3B87368991470BCB240_at_phx.gbl" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] intel compiler and openmpi 1.8.1<br>
<strong>From:</strong> Lorenzo Don&#224; (<em>lorechimica91_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 07:11:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24509.php">Tim Prince: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24507.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24509.php">Tim Prince: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24509.php">Tim Prince: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24510.php">Ralph Castain: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I compiled openmpi 1.8.1 with intel compiler with this conf.
<br>
./configure FC=ifort  CC=icc  CXX=icpc --prefix=/Users/lorenzodona/Documents/openmpi-1.8.1/
<br>
but when i write mpif90  -v i found:
<br>
Using built-in specs.
<br>
COLLECT_GCC=/opt/local/bin/gfortran-mp-4.8
<br>
COLLECT_LTO_WRAPPER=/opt/local/libexec/gcc/x86_64-apple-darwin13/4.8.2/lto-wrapper
<br>
Target: x86_64-apple-darwin13
<br>
Configured with: /opt/local/var/macports/build/_opt_mports_dports_lang_gcc48/gcc48/work/gcc-4.8.2/configure --prefix=/opt/local --build=x86_64-apple-darwin13 --enable-languages=c,c++,objc,obj-c++,lto,fortran,java --libdir=/opt/local/lib/gcc48 --includedir=/opt/local/include/gcc48 --infodir=/opt/local/share/info --mandir=/opt/local/share/man --datarootdir=/opt/local/share/gcc-4.8 --with-local-prefix=/opt/local --with-system-zlib --disable-nls --program-suffix=-mp-4.8 --with-gxx-include-dir=/opt/local/include/gcc48/c++/ --with-gmp=/opt/local --with-mpfr=/opt/local --with-mpc=/opt/local --with-cloog=/opt/local --enable-cloog-backend=isl --disable-cloog-version-check --enable-stage1-checking --disable-multilib --enable-lto --enable-libstdcxx-time --with-as=/opt/local/bin/as --with-ld=/opt/local/bin/ld --with-ar=/opt/local/bin/ar --with-bugurl=<a href="https://trac.macports.org/newticket">https://trac.macports.org/newticket</a> --with-pkgversion='MacPorts gcc48 4.8.2_0'
<br>
Thread model: posix
<br>
gcc version 4.8.2 (MacPorts gcc48 4.8.2_0) 
<br>
<p>and &#151;-version i found:
<br>
GNU Fortran (MacPorts gcc48 4.8.2_0) 4.8.2
<br>
Copyright (C) 2013 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
<p>So I think that is not compiled with intel compiler please can you help me.
<br>
thanks thanks a lot for your patience and to help me 
<br>
Dearly lorenzo
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24509.php">Tim Prince: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24507.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24509.php">Tim Prince: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24509.php">Tim Prince: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24510.php">Ralph Castain: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
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
