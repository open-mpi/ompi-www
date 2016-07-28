<?
$subject_val = "Re: [OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 11 06:13:24 2013" -->
<!-- isoreceived="20130711101324" -->
<!-- sent="Thu, 11 Jul 2013 12:06:20 +0200" -->
<!-- isosent="20130711100620" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.6.5 &amp;quot;make all&amp;quot; fails on Win7 with &amp;quot;system cannot find file specified&amp;quot;" -->
<!-- id="51DE839C.8080404_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="22549_1373534118_r6B9FDKw008855_CAHjMdoPtZCUQTYJX9ksP3vYEhYLb4bFDQXb=hNa87-9DdT6GJQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-11 06:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22317.php">Mark Dixon: "[OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22315.php">Don Warren: "[OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<li><strong>In reply to:</strong> <a href="22315.php">Don Warren: "[OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Il 7/11/2013 11:15 AM, Don Warren ha scritto:
<br>
<span class="quotelev1">&gt; Hello, all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm attempting to install Open MPI in a cygwin environment on Windows 7
</span><br>
<span class="quotelev1">&gt; (64-bit, but I think Open MPI is treating things like a 32-bit environment).
</span><br>
<p>Hi Don,
<br>
cygwin already has a 1.7.1 package
<br>
<p>$ cygcheck -c -d |grep mpi
<br>
libopenmpi                               1.7.1-2
<br>
libopenmpi-devel                         1.7.1-2
<br>
libopenmpicxx1                           1.7.1-2
<br>
libopenmpifh2                            1.7.1-2
<br>
libopenmpiuse1                           1.7.1-2
<br>
openmpi                                  1.7.1-2
<br>
<p>any reason to not use it ?
<br>
Any reason to need 1.6.5 ?
<br>
<p>Cygwin is 32 bit enviroment, so of coure the package is 32bit;
<br>
However cygwin64, still beta, already has the same package version
<br>
<p>$ cygcheck -c -d |grep mpi
<br>
libopenmpi                          1.7.1-2
<br>
libopenmpi-devel                    1.7.1-2
<br>
libopenmpicxx1                      1.7.1-2
<br>
libopenmpifh2                       1.7.1-2
<br>
libopenmpiuse1                      1.7.1-2
<br>
openmpi                             1.7.1-2
<br>
<p><span class="quotelev1">&gt; The command I used to configure Open MPI was
</span><br>
<span class="quotelev1">&gt; -----------------------
</span><br>
<span class="quotelev1">&gt; ./configure --with-mpi-f90-size=medium -prefix=/home/Don/openmpi
</span><br>
<span class="quotelev1">&gt; F77=gfortran FC=gfortran
</span><br>
<span class="quotelev1">&gt; -----------------------
</span><br>
<p>too little ;-)
<br>
current 1.7.1-2 package is built with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-sysv-shmem \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt,libompitrace \
<br>
&nbsp;
<br>
--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
<br>
<p>and I had a similar one on previous 1.6.4-2 package
<br>
<p>Regards
<br>
MArco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22317.php">Mark Dixon: "[OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22315.php">Don Warren: "[OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<li><strong>In reply to:</strong> <a href="22315.php">Don Warren: "[OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<!-- nextthread="start" -->
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
