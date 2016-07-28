<?
$subject_val = "Re: [OMPI users] intel compiler and openmpi 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 08:23:56 2014" -->
<!-- isoreceived="20140529122356" -->
<!-- sent="Thu, 29 May 2014 08:23:55 -0400" -->
<!-- isosent="20140529122355" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler and openmpi 1.8.1" -->
<!-- id="538726DB.7010709_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BLU436-SMTP20159D89F3B87368991470BCB240_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] intel compiler and openmpi 1.8.1<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 08:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24510.php">Ralph Castain: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24508.php">Lorenzo Don&#224;: "[OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24508.php">Lorenzo Don&#224;: "[OMPI users] intel compiler and openmpi 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24510.php">Ralph Castain: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/29/2014 07:11 AM, Lorenzo Don&#224; wrote:
<br>
<span class="quotelev1">&gt; I compiled openmpi 1.8.1 with intel compiler with this conf.
</span><br>
<span class="quotelev1">&gt; ./configure FC=ifort  CC=icc  CXX=icpc 
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/lorenzodona/Documents/openmpi-1.8.1/
</span><br>
<span class="quotelev1">&gt; but when i write mpif90  -v i found:
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; COLLECT_GCC=/opt/local/bin/gfortran-mp-4.8
</span><br>
<span class="quotelev1">&gt; COLLECT_LTO_WRAPPER=/opt/local/libexec/gcc/x86_64-apple-darwin13/4.8.2/lto-wrapper
</span><br>
<span class="quotelev1">&gt; Target: x86_64-apple-darwin13
</span><br>
<span class="quotelev1">&gt; Configured with: 
</span><br>
<span class="quotelev1">&gt; /opt/local/var/macports/build/_opt_mports_dports_lang_gcc48/gcc48/work/gcc-4.8.2/configure 
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/local --build=x86_64-apple-darwin13 
</span><br>
<span class="quotelev1">&gt; --enable-languages=c,c++,objc,obj-c++,lto,fortran,java 
</span><br>
<span class="quotelev1">&gt; --libdir=/opt/local/lib/gcc48 --includedir=/opt/local/include/gcc48 
</span><br>
<span class="quotelev1">&gt; --infodir=/opt/local/share/info --mandir=/opt/local/share/man 
</span><br>
<span class="quotelev1">&gt; --datarootdir=/opt/local/share/gcc-4.8 --with-local-prefix=/opt/local 
</span><br>
<span class="quotelev1">&gt; --with-system-zlib --disable-nls --program-suffix=-mp-4.8 
</span><br>
<span class="quotelev1">&gt; --with-gxx-include-dir=/opt/local/include/gcc48/c++/ 
</span><br>
<span class="quotelev1">&gt; --with-gmp=/opt/local --with-mpfr=/opt/local --with-mpc=/opt/local 
</span><br>
<span class="quotelev1">&gt; --with-cloog=/opt/local --enable-cloog-backend=isl 
</span><br>
<span class="quotelev1">&gt; --disable-cloog-version-check --enable-stage1-checking 
</span><br>
<span class="quotelev1">&gt; --disable-multilib --enable-lto --enable-libstdcxx-time 
</span><br>
<span class="quotelev1">&gt; --with-as=/opt/local/bin/as --with-ld=/opt/local/bin/ld 
</span><br>
<span class="quotelev1">&gt; --with-ar=/opt/local/bin/ar 
</span><br>
<span class="quotelev1">&gt; --with-bugurl=<a href="https://trac.macports.org/newticket">https://trac.macports.org/newticket</a> 
</span><br>
<span class="quotelev1">&gt; --with-pkgversion='MacPorts gcc48 4.8.2_0'
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.8.2 (MacPorts gcc48 4.8.2_0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and ----version i found:
</span><br>
<span class="quotelev1">&gt; GNU Fortran (MacPorts gcc48 4.8.2_0) 4.8.2
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev1">&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev1">&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think that is not compiled with intel compiler please can you 
</span><br>
<span class="quotelev1">&gt; help me.
</span><br>
<span class="quotelev1">&gt; thanks thanks a lot for your patience and to help me
</span><br>
<span class="quotelev1">&gt;
</span><br>
Perhaps you forgot to make the Intel compilers active in your configure 
<br>
session.  Normally this would be done by command such as
<br>
source /opt/intel/composer_xe_2013/bin/compilervars.sh intel64
<br>
<p>In such a case, if you would examine the configure log, you would expect 
<br>
to see a failed attempt to reach ifort, falling back to your gfortran.
<br>
<p>On the C and C++ side, the MPI libraries should be compatible between 
<br>
gnu and Intel compilers, but the MPI Fortran library would not be 
<br>
compatible between gfortran and ifort.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24510.php">Ralph Castain: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24508.php">Lorenzo Don&#224;: "[OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24508.php">Lorenzo Don&#224;: "[OMPI users] intel compiler and openmpi 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24510.php">Ralph Castain: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
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
