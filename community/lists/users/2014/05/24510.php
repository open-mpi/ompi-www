<?
$subject_val = "Re: [OMPI users] intel compiler and openmpi 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 09:04:51 2014" -->
<!-- isoreceived="20140529130451" -->
<!-- sent="Thu, 29 May 2014 06:04:46 -0700" -->
<!-- isosent="20140529130446" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler and openmpi 1.8.1" -->
<!-- id="285B09AF-C56F-4A6B-8C29-BC4D8C2E692E_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 09:04:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24511.php">Joshua Ladd: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24509.php">Tim Prince: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24508.php">Lorenzo Don&#224;: "[OMPI users] intel compiler and openmpi 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24511.php">Joshua Ladd: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24511.php">Joshua Ladd: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you sure you have /Users/lorenzodona/Documents/openmpi-1.8.1/bin at the *beginning* of your PATH?
<br>
<p>Reason: most common cause of what you are showing is that you are picking up some other version of mpif90
<br>
<p><p>On May 29, 2014, at 4:11 AM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I compiled openmpi 1.8.1 with intel compiler with this conf.
</span><br>
<span class="quotelev1">&gt; ./configure FC=ifort  CC=icc  CXX=icpc --prefix=/Users/lorenzodona/Documents/openmpi-1.8.1/
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
<span class="quotelev1">&gt; Configured with: /opt/local/var/macports/build/_opt_mports_dports_lang_gcc48/gcc48/work/gcc-4.8.2/configure --prefix=/opt/local --build=x86_64-apple-darwin13 --enable-languages=c,c++,objc,obj-c++,lto,fortran,java --libdir=/opt/local/lib/gcc48 --includedir=/opt/local/include/gcc48 --infodir=/opt/local/share/info --mandir=/opt/local/share/man --datarootdir=/opt/local/share/gcc-4.8 --with-local-prefix=/opt/local --with-system-zlib --disable-nls --program-suffix=-mp-4.8 --with-gxx-include-dir=/opt/local/include/gcc48/c++/ --with-gmp=/opt/local --with-mpfr=/opt/local --with-mpc=/opt/local --with-cloog=/opt/local --enable-cloog-backend=isl --disable-cloog-version-check --enable-stage1-checking --disable-multilib --enable-lto --enable-libstdcxx-time --with-as=/opt/local/bin/as --with-ld=/opt/local/bin/ld --with-ar=/opt/local/bin/ar --with-bugurl=<a href="https://trac.macports.org/newticket">https://trac.macports.org/newticket</a> --with-pkgversion='MacPorts gcc48 4.8.2_0'
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.8.2 (MacPorts gcc48 4.8.2_0) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and &#151;-version i found:
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
<span class="quotelev1">&gt; So I think that is not compiled with intel compiler please can you help me.
</span><br>
<span class="quotelev1">&gt; thanks thanks a lot for your patience and to help me 
</span><br>
<span class="quotelev1">&gt; Dearly lorenzo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24511.php">Joshua Ladd: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24509.php">Tim Prince: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24508.php">Lorenzo Don&#224;: "[OMPI users] intel compiler and openmpi 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24511.php">Joshua Ladd: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24511.php">Joshua Ladd: "Re: [OMPI users] intel compiler and openmpi 1.8.1"</a>
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
