<?
$subject_val = "[OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 19 04:47:28 2010" -->
<!-- isoreceived="20101019084728" -->
<!-- sent="Tue, 19 Oct 2010 10:47:24 +0200" -->
<!-- isosent="20101019084724" -->
<!-- name="livelfs" -->
<!-- email="livelfs_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure" -->
<!-- id="4CBD5B1C.8050907_at_free.fr" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure<br>
<strong>From:</strong> livelfs (<em>livelfs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-19 04:47:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14495.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="14493.php">Ralph Castain: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14500.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>Reply:</strong> <a href="14500.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>Maybe reply:</strong> <a href="14504.php">livelfs: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
this is to report that building openmpi-1.5 from rpm fails on Linux
<br>
SLES10sp3 x86_64,
<br>
due to  --program-prefix switch use now checked in configure script
<br>
delivered with 1.5.
<br>
<p>rpm is version 4.4.2-43.36.1
<br>
<p>rpmbuild --rebuild SRPMS/openmpi-1.5.0.src.rpm --define
<br>
'configure_options                      CC=&quot;/softs/gcc/4.5.1/bin/gcc
<br>
&quot;                      CXX=&quot;/softs/gcc/4.5.1/bin/g++
<br>
&quot;                      F77=&quot;/softs/gcc/4.5.1/bin/gfortran
<br>
&quot;                      FC=&quot;/softs/gcc/4.5.1/bin/gfortran &quot;
<br>
--prefix=/opt/openmpi/1.5.0/gfortran-4.5.1-gcc-4.5.1-BLCR-PBS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static --enable-shared
<br>
--with-wrapper-ldflags=&quot;-Wl,-rpath
<br>
-Wl,/opt/openmpi/1.5.0/gfortran-4.5.1-gcc-4.5.1-BLCR-PBS/lib64
<br>
-Wl,-rpath -Wl,/softs/blcr/0.8/lib&quot;
<br>
--with-memory-manager=ptmalloc2
<br>
--enable-orterun-prefix-by-default                     --with-openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-ipv6 --with-ft=cr
<br>
--enable-ft-thread --enable-mpi-threads
<br>
--with-blcr=/softs/blcr/0.8
<br>
--enable-mpirun-prefix-by-default
<br>
--with-tm=/opt/pbs/default
<br>
--with-wrapper-libs=&quot;-lpthread -lutil -lrt&quot;' --define '_prefix
<br>
/opt/openmpi/1.5.0/gfortran-4.5.1-gcc-4.5.1-BLCR-PBS' --define '_name
<br>
openmpi_gfortran-4.5.1-gcc-4.5.1-BLCR-PBS' --define '_topdir /scratch'
<br>
--define '_unpackaged_files_terminate_build 0' --define
<br>
'use_default_rpm_opt_flags 0'
<br>
<p>ends with:
<br>
[...]
<br>
configure: WARNING: *** This configure script does not support
<br>
--program-prefix, --program-suffix or --program-transform-name. Users
<br>
are recommended to instead use --prefix with a unique directory and make
<br>
symbolic links as desired for renaming.
<br>
configure: error: *** Cannot continue
<br>
<p><p>In the present environment (SLES10sp3 x86_64, rpm 4.4.2-43.36.1),
<br>
rpmbuild --rebuild produces and execs a temporary shell script calling
<br>
configure
<br>
with an *empty* --program-prefix switch (--program-prefix=).
<br>
<p>It works with openmpi 1.4.3
<br>
but configure script from openmpi 1.5 is more picky about using
<br>
--program-prefix, --program-suffix or --program-transform-name:
<br>
<p>#  diff /usr/src/packages/SOURCES/openmpi-1.5/configure
<br>
/usr/src/packages/SOURCES/openmpi-1.4.3/configure | grep program-prefix
<br>
&lt; # Suggestion from Paul Hargrove to disable --program-prefix and
<br>
&lt;     { $as_echo &quot;$as_me:${as_lineno-$LINENO}: WARNING: *** This
<br>
configure script does not support --program-prefix, --program-suffix or
<br>
--program-transform-name. Users are recommended to instead use --prefix
<br>
with a unique directory and make symbolic links as desired for
<br>
renaming.&quot; &gt;&amp;5
<br>
&lt; $as_echo &quot;$as_me: WARNING: *** This configure script does not support
<br>
--program-prefix, --program-suffix or --program-transform-name. Users
<br>
are recommended to instead use --prefix with a unique directory and make
<br>
symbolic links as desired for renaming.&quot; &gt;&amp;2;}
<br>
<p>If I remove the new control on --program-prefix in openmpi-1.5 configure
<br>
script, the 1.5 build becomes OK.
<br>
<p>Regards,
<br>
Stephane Rouberol
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14495.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="14493.php">Ralph Castain: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14500.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>Reply:</strong> <a href="14500.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>Maybe reply:</strong> <a href="14504.php">livelfs: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
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
