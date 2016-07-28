<?
$subject_val = "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 07:04:57 2014" -->
<!-- isoreceived="20141028110457" -->
<!-- sent="Tue, 28 Oct 2014 20:04:57 +0900" -->
<!-- isosent="20141028110457" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
<!-- id="544F7859.4010907_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="544E1429.9030709_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 07:04:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25624.php">Siegmar Gross: "[OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="25622.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25604.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25630.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25630.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marco,
<br>
<p>here is attached a patch that fixes the issue
<br>
/* i could not find yet why this does not occurs on Linux ... */
<br>
<p>could you please give it a try ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/10/27 18:45, Marco Atzeri wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/27/2014 10:30 AM, Gilles Gouaillardet wrote:
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
<span class="quotelev1">&gt; the problem is present in both versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cygwin 1.8.3-1 packages  are built with configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --prefix=/usr --exec-prefix=/usr --bindir=/usr/bin
</span><br>
<span class="quotelev1">&gt; --sbindir=/usr/sbin --libexecdir=/usr/libexec --datadir=/usr/share
</span><br>
<span class="quotelev1">&gt; --localstatedir=/var --sysconfdir=/etc --libdir=/usr/lib
</span><br>
<span class="quotelev1">&gt; --datarootdir=/usr/share --docdir=/usr/share/doc/openmpi
</span><br>
<span class="quotelev1">&gt; --htmldir=/usr/share/doc/openmpi/html -C
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-Wl,--export-all-symbols --disable-mca-dso
</span><br>
<span class="quotelev1">&gt; --disable-sysv-shmem --enable-cxx-exceptions --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --without-cs-fs --with-mpi-param_check=always
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=vt,libompitrace
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25604.php">http://www.open-mpi.org/community/lists/users/2014/10/25604.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25623/leak.diff">leak.diff</a>
</ul>
<!-- attachment="leak.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25624.php">Siegmar Gross: "[OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="25622.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25604.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25630.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25630.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
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
