<?
$subject_val = "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 03:55:21 2010" -->
<!-- isoreceived="20101020075521" -->
<!-- sent="Wed, 20 Oct 2010 09:52:37 +0200" -->
<!-- isosent="20101020075237" -->
<!-- name="livelfs" -->
<!-- email="livelfs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure" -->
<!-- id="4CBE9FC5.4050202_at_free.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure<br>
<strong>From:</strong> livelfs (<em>livelfs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 03:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="14503.php">Eugene Loh: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="14494.php">livelfs: "[OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;Thanks for the report. Someone reported pretty much the same issue to
</span><br>
me off-list a few days ago for RHEL5.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It looks like RHEL5 / 6 ship with Autoconf 2.63, and have a
</span><br>
/usr/lib/rpm/macros that defines %configure to include options such as
<br>
--program-suffix. We bootstrapped Open MPI v1.5 with Autoconf 2.65,
<br>
which does not understand the --program-suffix option.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't know why AC 2.65 dropped the --program-suffix option, but this
</span><br>
seems to be where we are.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I've emailed a contact at Red Hat asking for advice on what to do here
</span><br>
-- I can't imagine Open MPI is the only package in this situation.
<br>
<p>I confirm troubles on SLES10sp3 x86_64 come from
<br>
/usr/lib/rpm/macros (from rpm 4.4.2-43.36.1 package)
<br>
which includes:
<br>
#  grep program-prefix /usr/lib/rpm/macros
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--program-prefix=%{?_program_prefix} \\\
<br>
<p>Regards,
<br>
Stephane Rouberol
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Oct 19, 2010, at 4:47 AM, livelfs wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; this is to report that building openmpi-1.5 from rpm fails on Linux
</span><br>
<span class="quotelev2">&gt;&gt; SLES10sp3 x86_64,
</span><br>
<span class="quotelev2">&gt;&gt; due to --program-prefix switch use now checked in configure script
</span><br>
<span class="quotelev2">&gt;&gt; delivered with 1.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rpm is version 4.4.2-43.36.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild --rebuild SRPMS/openmpi-1.5.0.src.rpm --define
</span><br>
<span class="quotelev2">&gt;&gt; 'configure_options CC=&quot;/softs/gcc/4.5.1/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; &quot; CXX=&quot;/softs/gcc/4.5.1/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt; &quot; F77=&quot;/softs/gcc/4.5.1/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt; &quot; FC=&quot;/softs/gcc/4.5.1/bin/gfortran &quot;
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi/1.5.0/gfortran-4.5.1-gcc-4.5.1-BLCR-PBS
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static --enable-shared
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-ldflags=&quot;-Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/opt/openmpi/1.5.0/gfortran-4.5.1-gcc-4.5.1-BLCR-PBS/lib64
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-rpath -Wl,/softs/blcr/0.8/lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --with-memory-manager=ptmalloc2
</span><br>
<span class="quotelev2">&gt;&gt; --enable-orterun-prefix-by-default --with-openib
</span><br>
<span class="quotelev2">&gt;&gt; --disable-ipv6 --with-ft=cr
</span><br>
<span class="quotelev2">&gt;&gt; --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr=/softs/blcr/0.8
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/opt/pbs/default
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-libs=&quot;-lpthread -lutil -lrt&quot;' --define '_prefix
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.5.0/gfortran-4.5.1-gcc-4.5.1-BLCR-PBS' --define '_name
</span><br>
<span class="quotelev2">&gt;&gt; openmpi_gfortran-4.5.1-gcc-4.5.1-BLCR-PBS' --define '_topdir /scratch'
</span><br>
<span class="quotelev2">&gt;&gt; --define '_unpackaged_files_terminate_build 0' --define
</span><br>
<span class="quotelev2">&gt;&gt; 'use_default_rpm_opt_flags 0'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ends with:
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** This configure script does not support
</span><br>
<span class="quotelev2">&gt;&gt; --program-prefix, --program-suffix or --program-transform-name. Users
</span><br>
<span class="quotelev2">&gt;&gt; are recommended to instead use --prefix with a unique directory and make
</span><br>
<span class="quotelev2">&gt;&gt; symbolic links as desired for renaming.
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the present environment (SLES10sp3 x86_64, rpm 4.4.2-43.36.1),
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild --rebuild produces and execs a temporary shell script calling
</span><br>
<span class="quotelev2">&gt;&gt; configure
</span><br>
<span class="quotelev2">&gt;&gt; with an *empty* --program-prefix switch (--program-prefix=).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It works with openmpi 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; but configure script from openmpi 1.5 is more picky about using
</span><br>
<span class="quotelev2">&gt;&gt; --program-prefix, --program-suffix or --program-transform-name:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # diff /usr/src/packages/SOURCES/openmpi-1.5/configure
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/packages/SOURCES/openmpi-1.4.3/configure | grep program-prefix
</span><br>
<span class="quotelev2">&gt;&gt; &lt; # Suggestion from Paul Hargrove to disable --program-prefix and
</span><br>
<span class="quotelev2">&gt;&gt; &lt; { $as_echo &quot;$as_me:${as_lineno-$LINENO}: WARNING: *** This
</span><br>
<span class="quotelev2">&gt;&gt; configure script does not support --program-prefix, --program-suffix or
</span><br>
<span class="quotelev2">&gt;&gt; --program-transform-name. Users are recommended to instead use --prefix
</span><br>
<span class="quotelev2">&gt;&gt; with a unique directory and make symbolic links as desired for
</span><br>
<span class="quotelev2">&gt;&gt; renaming.&quot; &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; &lt; $as_echo &quot;$as_me: WARNING: *** This configure script does not support
</span><br>
<span class="quotelev2">&gt;&gt; --program-prefix, --program-suffix or --program-transform-name. Users
</span><br>
<span class="quotelev2">&gt;&gt; are recommended to instead use --prefix with a unique directory and make
</span><br>
<span class="quotelev2">&gt;&gt; symbolic links as desired for renaming.&quot; &gt;&amp;2;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I remove the new control on --program-prefix in openmpi-1.5 configure
</span><br>
<span class="quotelev2">&gt;&gt; script, the 1.5 build becomes OK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Stephane Rouberol
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="14503.php">Eugene Loh: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="14494.php">livelfs: "[OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
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
