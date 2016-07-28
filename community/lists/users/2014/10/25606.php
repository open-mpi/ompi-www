<?
$subject_val = "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 07:39:46 2014" -->
<!-- isoreceived="20141027113946" -->
<!-- sent="Mon, 27 Oct 2014 20:39:38 +0900" -->
<!-- isosent="20141027113938" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
<!-- id="2lb1a63yye93bac3dx3ji4y2.1414409978728_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 07:39:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25607.php">Michael.Rachner_at_[hidden]: "[OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Previous message:</strong> <a href="25605.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25632.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Maybe reply:</strong> <a href="25632.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Marco,
<br>
<p>I could reproduce the issue even with one node sending/receiving to itself.
<br>
<p>I will investigate this tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 10/27/2014 10:30 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i tested on a RedHat 6 like linux server and could not observe any
</span><br>
<span class="quotelev2">&gt;&gt; memory leak.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, are you running 32 or 64 bits cygwin ? and what is your configure
</span><br>
<span class="quotelev2">&gt;&gt; command line ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the problem is present in both versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;cygwin 1.8.3-1 packages  are built with configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --prefix=/usr --exec-prefix=/usr --bindir=/usr/bin --sbindir=/usr/sbin 
</span><br>
<span class="quotelev1">&gt;--libexecdir=/usr/libexec --datadir=/usr/share --localstatedir=/var 
</span><br>
<span class="quotelev1">&gt;--sysconfdir=/etc --libdir=/usr/lib --datarootdir=/usr/share 
</span><br>
<span class="quotelev1">&gt;--docdir=/usr/share/doc/openmpi --htmldir=/usr/share/doc/openmpi/html -C 
</span><br>
<span class="quotelev1">&gt;LDFLAGS=-Wl,--export-all-symbols --disable-mca-dso --disable-sysv-shmem 
</span><br>
<span class="quotelev1">&gt;--enable-cxx-exceptions --with-threads=posix --without-cs-fs 
</span><br>
<span class="quotelev1">&gt;--with-mpi-param_check=always --enable-contrib-no-build=vt,libompitrace 
</span><br>
<span class="quotelev1">&gt;--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Regards
</span><br>
<span class="quotelev1">&gt;Marco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25604.php">http://www.open-mpi.org/community/lists/users/2014/10/25604.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25607.php">Michael.Rachner_at_[hidden]: "[OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Previous message:</strong> <a href="25605.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25632.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Maybe reply:</strong> <a href="25632.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
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
