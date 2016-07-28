<?
$subject_val = "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 16:26:19 2012" -->
<!-- isoreceived="20120126212619" -->
<!-- sent="Thu, 26 Jan 2012 16:26:14 -0500" -->
<!-- isosent="20120126212614" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange recursive &amp;quot;no&amp;quot; error message when compiling 1.5 series with fault tolerance enabled" -->
<!-- id="CAANzjEmYmL5_puCYTqQ3dzpvn03iD1b4THU-5tTW4wAma4M78g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AC2B0426-5541-43D6-8479-37EB3A088611_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 16:26:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18285.php">Jeff Squyres: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Previous message:</strong> <a href="18283.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>In reply to:</strong> <a href="18282.php">Jeff Squyres: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18283.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like Jeff beat me too it. The problem was with a missing 'test' in
<br>
the configure script. I'm not sure how it creeped in there, but the fix is
<br>
in the pipeline for the next 1.5 release. The ticket to track the progress
<br>
of this patch is on the following ticket:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2979">https://svn.open-mpi.org/trac/ompi/ticket/2979</a>
<br>
<p>Thanks for the bug report!
<br>
<p>-- Josh
<br>
<p>On Thu, Jan 26, 2012 at 4:16 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Doh!  That's a fun one.  Thanks for the report!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I filed a fix; we'll get this in very shortly (looks like the fix is
</span><br>
<span class="quotelev1">&gt; already on the trunk, but somehow got missed on the v1.5 branch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 26, 2012, at 3:42 PM, David Akin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can build OpenMPI with FT on my system if I'm using 1.4 source, but
</span><br>
<span class="quotelev2">&gt; &gt; if I use any of the 1.5 series, I get hung in a strange &quot;no&quot; loop  at the
</span><br>
<span class="quotelev2">&gt; &gt; beginning of the compile (see below):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; + ./configure --build=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt; --host=x86_64-unknown-linux-gnu --target=x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt; --program-prefix= --prefix=/usr/mpi/intel/openmpi-1.5-ckpt
</span><br>
<span class="quotelev2">&gt; &gt; --exec-prefix=/usr/mpi/intel/openmpi-1.5-ckpt
</span><br>
<span class="quotelev2">&gt; &gt; --bindir=/usr/mpi/intel/openmpi-1.5-ckpt/bin
</span><br>
<span class="quotelev2">&gt; &gt; --sbindir=/usr/mpi/intel/openmpi-1.5-ckpt/sbin
</span><br>
<span class="quotelev2">&gt; &gt; --sysconfdir=/usr/mpi/intel/openmpi-1.5-ckpt/etc
</span><br>
<span class="quotelev2">&gt; &gt; --datadir=/usr/mpi/intel/openmpi-1.5-ckpt/share
</span><br>
<span class="quotelev2">&gt; &gt; --includedir=/usr/mpi/intel/openmpi-1.5-ckpt/include
</span><br>
<span class="quotelev2">&gt; &gt; --libdir=/usr/mpi/intel/openmpi-1.5-ckpt/lib64
</span><br>
<span class="quotelev2">&gt; &gt; --libexecdir=/usr/mpi/intel/openmpi-1.5-ckpt/libexec
</span><br>
<span class="quotelev2">&gt; &gt; --localstatedir=/var --sharedstatedir=/var/lib --mandir=/usr/share/man
</span><br>
<span class="quotelev2">&gt; &gt; --infodir=/usr/share/info --enable-ft-thread --with-ft=cr
</span><br>
<span class="quotelev2">&gt; &gt; --enable-opal-multi-threads
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; .
</span><br>
<span class="quotelev2">&gt; &gt; .
</span><br>
<span class="quotelev2">&gt; &gt; .
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; == System-specific tests
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; checking checking for type of MPI_Offset... long long
</span><br>
<span class="quotelev2">&gt; &gt; checking checking for an MPI datatype for MPI_Offset... MPI_LONG_LONG
</span><br>
<span class="quotelev2">&gt; &gt; checking for _SC_NPROCESSORS_ONLN... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking whether byte ordering is bigendian... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for broken qsort... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if word-sized integers must be word-size aligned... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C compiler and POSIX threads work as is... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C++ compiler and POSIX threads work as is... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if C compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if C++ compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C++ compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C++ compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for PTHREAD_MUTEX_ERRORCHECK... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for working POSIX threads package... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if C compiler and Solaris threads work... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if C++ compiler and Solaris threads work... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if F77 compiler and Solaris threads work... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for working Solaris threads package... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for type of thread support... posix
</span><br>
<span class="quotelev2">&gt; &gt; checking if threads have different pids (pthreads on linux)... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if want OPAL thread support... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if want fault tolerance thread... = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; = no
</span><br>
<span class="quotelev2">&gt; &gt; .
</span><br>
<span class="quotelev2">&gt; &gt; .
</span><br>
<span class="quotelev2">&gt; &gt; .
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The system just keeps repeating &quot;no&quot; over and over infinitely.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm on RHEL6 2.6.32-220.2.1.el6.x86_64. I've tried the
</span><br>
<span class="quotelev2">&gt; &gt; following OpenMPI 1.5 series tarballs with the same results:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.5.5rc1.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.5.5rc2r25765.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.5.5rc2r25773.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any guidance is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; Dave
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18285.php">Jeff Squyres: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Previous message:</strong> <a href="18283.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>In reply to:</strong> <a href="18282.php">Jeff Squyres: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18283.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
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
