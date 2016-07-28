<?
$subject_val = "[OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 15:42:43 2012" -->
<!-- isoreceived="20120126204243" -->
<!-- sent="Thu, 26 Jan 2012 14:42:38 -0600" -->
<!-- isosent="20120126204238" -->
<!-- name="David Akin" -->
<!-- email="nospamou_at_[hidden]" -->
<!-- subject="[OMPI users] Strange recursive &amp;quot;no&amp;quot; error message when compiling 1.5 series with fault tolerance enabled" -->
<!-- id="CAJucgoZZVZMmZT1=+k9v+qtpiJFFvUkggdr0kxiPvT+TgqTSDA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled<br>
<strong>From:</strong> David Akin (<em>nospamou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 15:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18282.php">Jeff Squyres: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Previous message:</strong> <a href="18280.php">Jeff Squyres: "Re: [OMPI users] Cant build OpenMPI!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18282.php">Jeff Squyres: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Reply:</strong> <a href="18282.php">Jeff Squyres: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Reply:</strong> <a href="18283.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can build OpenMPI with FT on my system if I'm using 1.4 source, but
<br>
if I use any of the 1.5 series, I get hung in a strange &quot;no&quot; loop  at the
<br>
beginning of the compile (see below):
<br>
<p>+ ./configure --build=x86_64-unknown-linux-gnu
<br>
--host=x86_64-unknown-linux-gnu --target=x86_64-redhat-linux-gnu
<br>
--program-prefix= --prefix=/usr/mpi/intel/openmpi-1.5-ckpt
<br>
--exec-prefix=/usr/mpi/intel/openmpi-1.5-ckpt
<br>
--bindir=/usr/mpi/intel/openmpi-1.5-ckpt/bin
<br>
--sbindir=/usr/mpi/intel/openmpi-1.5-ckpt/sbin
<br>
--sysconfdir=/usr/mpi/intel/openmpi-1.5-ckpt/etc
<br>
--datadir=/usr/mpi/intel/openmpi-1.5-ckpt/share
<br>
--includedir=/usr/mpi/intel/openmpi-1.5-ckpt/include
<br>
--libdir=/usr/mpi/intel/openmpi-1.5-ckpt/lib64
<br>
--libexecdir=/usr/mpi/intel/openmpi-1.5-ckpt/libexec
<br>
--localstatedir=/var --sharedstatedir=/var/lib --mandir=/usr/share/man
<br>
--infodir=/usr/share/info --enable-ft-thread --with-ft=cr
<br>
--enable-opal-multi-threads
<br>
<p>.
<br>
.
<br>
.
<br>
<p>============================================================================
<br>
== System-specific tests
<br>
============================================================================
<br>
checking checking for type of MPI_Offset... long long
<br>
checking checking for an MPI datatype for MPI_Offset... MPI_LONG_LONG
<br>
checking for _SC_NPROCESSORS_ONLN... yes
<br>
checking whether byte ordering is bigendian... no
<br>
checking for broken qsort... no
<br>
checking if word-sized integers must be word-size aligned... no
<br>
checking if C compiler and POSIX threads work as is... no
<br>
checking if C++ compiler and POSIX threads work as is... no
<br>
checking if F77 compiler and POSIX threads work as is... yes
<br>
checking if C compiler and POSIX threads work with -Kthread... no
<br>
checking if C compiler and POSIX threads work with -kthread... no
<br>
checking if C compiler and POSIX threads work with -pthread... yes
<br>
checking if C++ compiler and POSIX threads work with -Kthread... no
<br>
checking if C++ compiler and POSIX threads work with -kthread... no
<br>
checking if C++ compiler and POSIX threads work with -pthread... yes
<br>
checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
<br>
checking for PTHREAD_MUTEX_ERRORCHECK... yes
<br>
checking for working POSIX threads package... yes
<br>
checking if C compiler and Solaris threads work... no
<br>
checking if C++ compiler and Solaris threads work... no
<br>
checking if F77 compiler and Solaris threads work... no
<br>
checking for working Solaris threads package... no
<br>
checking for type of thread support... posix
<br>
checking if threads have different pids (pthreads on linux)... no
<br>
checking if want OPAL thread support... yes
<br>
checking if want fault tolerance thread... = no
<br>
= no
<br>
= no
<br>
= no
<br>
= no
<br>
= no
<br>
= no
<br>
= no
<br>
= no
<br>
= no
<br>
= no
<br>
= no
<br>
= no
<br>
.
<br>
.
<br>
.
<br>
<p><p>The system just keeps repeating &quot;no&quot; over and over infinitely.
<br>
<p>&nbsp;I'm on RHEL6 2.6.32-220.2.1.el6.x86_64. I've tried the
<br>
following OpenMPI 1.5 series tarballs with the same results:
<br>
<p>openmpi-1.5.5rc1.tar.bz2
<br>
openmpi-1.5.5rc2r25765.tar.bz2
<br>
openmpi-1.5.5rc2r25773.tar.bz2
<br>
<p>Any guidance is appreciated.
<br>
Thanks!
<br>
Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18282.php">Jeff Squyres: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Previous message:</strong> <a href="18280.php">Jeff Squyres: "Re: [OMPI users] Cant build OpenMPI!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18282.php">Jeff Squyres: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Reply:</strong> <a href="18282.php">Jeff Squyres: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Reply:</strong> <a href="18283.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
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
