<?
$subject_val = "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 19 20:12:28 2010" -->
<!-- isoreceived="20101020001228" -->
<!-- sent="Tue, 19 Oct 2010 20:12:22 -0400" -->
<!-- isosent="20101020001222" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure" -->
<!-- id="4744169A-F74F-4464-82DB-3045A57E4422_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CBD5B1C.8050907_at_free.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-19 20:12:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14501.php">Brian Budge: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Previous message:</strong> <a href="14499.php">Jack Bryan: "[OMPI users] Open MPI dynamic data structure error"</a>
<li><strong>In reply to:</strong> <a href="14494.php">livelfs: "[OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14504.php">livelfs: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report.  Someone reported pretty much the same issue to me off-list a few days ago for RHEL5.  
<br>
<p>It looks like RHEL5 / 6 ship with Autoconf 2.63, and have a /usr/lib/rpm/macros that defines %configure to include options such as --program-suffix.  We bootstrapped Open MPI v1.5 with Autoconf 2.65, which does not understand the --program-suffix option.
<br>
<p>I don't know why AC 2.65 dropped the --program-suffix option, but this seems to be where we are.
<br>
<p>I've emailed a contact at Red Hat asking for advice on what to do here -- I can't imagine Open MPI is the only package in this situation.
<br>
<p><p><p><p>On Oct 19, 2010, at 4:47 AM, livelfs wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; this is to report that building openmpi-1.5 from rpm fails on Linux
</span><br>
<span class="quotelev1">&gt; SLES10sp3 x86_64,
</span><br>
<span class="quotelev1">&gt; due to  --program-prefix switch use now checked in configure script
</span><br>
<span class="quotelev1">&gt; delivered with 1.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpm is version 4.4.2-43.36.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild SRPMS/openmpi-1.5.0.src.rpm --define
</span><br>
<span class="quotelev1">&gt; 'configure_options                      CC=&quot;/softs/gcc/4.5.1/bin/gcc
</span><br>
<span class="quotelev1">&gt; &quot;                      CXX=&quot;/softs/gcc/4.5.1/bin/g++
</span><br>
<span class="quotelev1">&gt; &quot;                      F77=&quot;/softs/gcc/4.5.1/bin/gfortran
</span><br>
<span class="quotelev1">&gt; &quot;                      FC=&quot;/softs/gcc/4.5.1/bin/gfortran &quot;
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi/1.5.0/gfortran-4.5.1-gcc-4.5.1-BLCR-PBS
</span><br>
<span class="quotelev1">&gt;          --enable-static --enable-shared
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags=&quot;-Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/opt/openmpi/1.5.0/gfortran-4.5.1-gcc-4.5.1-BLCR-PBS/lib64
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/softs/blcr/0.8/lib&quot;
</span><br>
<span class="quotelev1">&gt; --with-memory-manager=ptmalloc2
</span><br>
<span class="quotelev1">&gt; --enable-orterun-prefix-by-default                     --with-openib
</span><br>
<span class="quotelev1">&gt;                  --disable-ipv6 --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --with-blcr=/softs/blcr/0.8
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/pbs/default
</span><br>
<span class="quotelev1">&gt; --with-wrapper-libs=&quot;-lpthread -lutil -lrt&quot;' --define '_prefix
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.5.0/gfortran-4.5.1-gcc-4.5.1-BLCR-PBS' --define '_name
</span><br>
<span class="quotelev1">&gt; openmpi_gfortran-4.5.1-gcc-4.5.1-BLCR-PBS' --define '_topdir /scratch'
</span><br>
<span class="quotelev1">&gt; --define '_unpackaged_files_terminate_build 0' --define
</span><br>
<span class="quotelev1">&gt; 'use_default_rpm_opt_flags 0'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ends with:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** This configure script does not support
</span><br>
<span class="quotelev1">&gt; --program-prefix, --program-suffix or --program-transform-name. Users
</span><br>
<span class="quotelev1">&gt; are recommended to instead use --prefix with a unique directory and make
</span><br>
<span class="quotelev1">&gt; symbolic links as desired for renaming.
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the present environment (SLES10sp3 x86_64, rpm 4.4.2-43.36.1),
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild produces and execs a temporary shell script calling
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; with an *empty* --program-prefix switch (--program-prefix=).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works with openmpi 1.4.3
</span><br>
<span class="quotelev1">&gt; but configure script from openmpi 1.5 is more picky about using
</span><br>
<span class="quotelev1">&gt; --program-prefix, --program-suffix or --program-transform-name:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #  diff /usr/src/packages/SOURCES/openmpi-1.5/configure
</span><br>
<span class="quotelev1">&gt; /usr/src/packages/SOURCES/openmpi-1.4.3/configure | grep program-prefix
</span><br>
<span class="quotelev1">&gt; &lt; # Suggestion from Paul Hargrove to disable --program-prefix and
</span><br>
<span class="quotelev1">&gt; &lt;     { $as_echo &quot;$as_me:${as_lineno-$LINENO}: WARNING: *** This
</span><br>
<span class="quotelev1">&gt; configure script does not support --program-prefix, --program-suffix or
</span><br>
<span class="quotelev1">&gt; --program-transform-name. Users are recommended to instead use --prefix
</span><br>
<span class="quotelev1">&gt; with a unique directory and make symbolic links as desired for
</span><br>
<span class="quotelev1">&gt; renaming.&quot; &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; &lt; $as_echo &quot;$as_me: WARNING: *** This configure script does not support
</span><br>
<span class="quotelev1">&gt; --program-prefix, --program-suffix or --program-transform-name. Users
</span><br>
<span class="quotelev1">&gt; are recommended to instead use --prefix with a unique directory and make
</span><br>
<span class="quotelev1">&gt; symbolic links as desired for renaming.&quot; &gt;&amp;2;}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I remove the new control on --program-prefix in openmpi-1.5 configure
</span><br>
<span class="quotelev1">&gt; script, the 1.5 build becomes OK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Stephane Rouberol
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
<li><strong>Next message:</strong> <a href="14501.php">Brian Budge: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Previous message:</strong> <a href="14499.php">Jack Bryan: "[OMPI users] Open MPI dynamic data structure error"</a>
<li><strong>In reply to:</strong> <a href="14494.php">livelfs: "[OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14504.php">livelfs: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
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
