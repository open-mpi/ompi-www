<?
$subject_val = "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 16:16:45 2012" -->
<!-- isoreceived="20120126211645" -->
<!-- sent="Thu, 26 Jan 2012 16:16:40 -0500" -->
<!-- isosent="20120126211640" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange recursive &amp;quot;no&amp;quot; error message when compiling 1.5 series with fault tolerance enabled" -->
<!-- id="AC2B0426-5541-43D6-8479-37EB3A088611_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJucgoZZVZMmZT1=+k9v+qtpiJFFvUkggdr0kxiPvT+TgqTSDA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 16:16:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18283.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Previous message:</strong> <a href="18281.php">David Akin: "[OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>In reply to:</strong> <a href="18281.php">David Akin: "[OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18284.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Reply:</strong> <a href="18284.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh!  That's a fun one.  Thanks for the report!
<br>
<p>I filed a fix; we'll get this in very shortly (looks like the fix is already on the trunk, but somehow got missed on the v1.5 branch).
<br>
<p><p>On Jan 26, 2012, at 3:42 PM, David Akin wrote:
<br>
<p><span class="quotelev1">&gt; I can build OpenMPI with FT on my system if I'm using 1.4 source, but
</span><br>
<span class="quotelev1">&gt; if I use any of the 1.5 series, I get hung in a strange &quot;no&quot; loop  at the
</span><br>
<span class="quotelev1">&gt; beginning of the compile (see below):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + ./configure --build=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; --host=x86_64-unknown-linux-gnu --target=x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev1">&gt; --program-prefix= --prefix=/usr/mpi/intel/openmpi-1.5-ckpt
</span><br>
<span class="quotelev1">&gt; --exec-prefix=/usr/mpi/intel/openmpi-1.5-ckpt
</span><br>
<span class="quotelev1">&gt; --bindir=/usr/mpi/intel/openmpi-1.5-ckpt/bin
</span><br>
<span class="quotelev1">&gt; --sbindir=/usr/mpi/intel/openmpi-1.5-ckpt/sbin
</span><br>
<span class="quotelev1">&gt; --sysconfdir=/usr/mpi/intel/openmpi-1.5-ckpt/etc
</span><br>
<span class="quotelev1">&gt; --datadir=/usr/mpi/intel/openmpi-1.5-ckpt/share
</span><br>
<span class="quotelev1">&gt; --includedir=/usr/mpi/intel/openmpi-1.5-ckpt/include
</span><br>
<span class="quotelev1">&gt; --libdir=/usr/mpi/intel/openmpi-1.5-ckpt/lib64
</span><br>
<span class="quotelev1">&gt; --libexecdir=/usr/mpi/intel/openmpi-1.5-ckpt/libexec
</span><br>
<span class="quotelev1">&gt; --localstatedir=/var --sharedstatedir=/var/lib --mandir=/usr/share/man
</span><br>
<span class="quotelev1">&gt; --infodir=/usr/share/info --enable-ft-thread --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == System-specific tests
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; checking checking for type of MPI_Offset... long long
</span><br>
<span class="quotelev1">&gt; checking checking for an MPI datatype for MPI_Offset... MPI_LONG_LONG
</span><br>
<span class="quotelev1">&gt; checking for _SC_NPROCESSORS_ONLN... yes
</span><br>
<span class="quotelev1">&gt; checking whether byte ordering is bigendian... no
</span><br>
<span class="quotelev1">&gt; checking for broken qsort... no
</span><br>
<span class="quotelev1">&gt; checking if word-sized integers must be word-size aligned... no
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work as is... no
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work as is... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev1">&gt; checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
</span><br>
<span class="quotelev1">&gt; checking for PTHREAD_MUTEX_ERRORCHECK... yes
</span><br>
<span class="quotelev1">&gt; checking for working POSIX threads package... yes
</span><br>
<span class="quotelev1">&gt; checking if C compiler and Solaris threads work... no
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and Solaris threads work... no
</span><br>
<span class="quotelev1">&gt; checking if F77 compiler and Solaris threads work... no
</span><br>
<span class="quotelev1">&gt; checking for working Solaris threads package... no
</span><br>
<span class="quotelev1">&gt; checking for type of thread support... posix
</span><br>
<span class="quotelev1">&gt; checking if threads have different pids (pthreads on linux)... no
</span><br>
<span class="quotelev1">&gt; checking if want OPAL thread support... yes
</span><br>
<span class="quotelev1">&gt; checking if want fault tolerance thread... = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; = no
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The system just keeps repeating &quot;no&quot; over and over infinitely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm on RHEL6 2.6.32-220.2.1.el6.x86_64. I've tried the
</span><br>
<span class="quotelev1">&gt; following OpenMPI 1.5 series tarballs with the same results:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1.tar.bz2
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc2r25765.tar.bz2
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc2r25773.tar.bz2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any guidance is appreciated.
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Dave
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18283.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Previous message:</strong> <a href="18281.php">David Akin: "[OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>In reply to:</strong> <a href="18281.php">David Akin: "[OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18284.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>Reply:</strong> <a href="18284.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
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
