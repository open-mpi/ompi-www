<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 03:35:02 2009" -->
<!-- isoreceived="20091209083502" -->
<!-- sent="Wed, 09 Dec 2009 11:34:53 +0300" -->
<!-- isosent="20091209083453" -->
<!-- name="Aleksej Saushev" -->
<!-- email="asau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="87iqcgeeaa.fsf_at_inbox.ru" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="04bd4ebe58341a8a2a55927367dba6cc.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> Aleksej Saushev (<em>asau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 03:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11467.php">Constantinos Makassikis: "[OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<li><strong>Previous message:</strong> <a href="11465.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kevin.Buckley_at_[hidden] writes:
<br>
<p><span class="quotelev1">&gt; Cc: to the OpenMPI list as the oftdump clash might be of interest
</span><br>
<span class="quotelev1">&gt; elsewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I attach a patch, but it doesn't work and I don't see where the
</span><br>
<span class="quotelev2">&gt;&gt; error lies now. It may be that I'm doing something stupid.
</span><br>
<span class="quotelev2">&gt;&gt; It produces working OpenMPI-1.3.4 package on Dragonfly though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I'll try and merge it in to the working stuff we have here.
</span><br>
<span class="quotelev1">&gt; I, obviously, just #ifdef'd for NetBSD as that is all I have to
</span><br>
<span class="quotelev1">&gt; try stuff out against.
</span><br>
<p>No need for that actually, we can do it later.
<br>
I was using Dragonfly as platform where it works out of box.
<br>
<p><span class="quotelev2">&gt;&gt; Kevin, I've tried your chunk but it doesn't make any better.
</span><br>
<span class="quotelev2">&gt;&gt; Do you really have working OpenMPI on NetBSD?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh yes!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have placed the tar of current patches from our PkgSrc build in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.ecs.vuw.ac.nz/~kevin/forMPI/openmpi-1.3.4-20091208-netbsd.tar.gz">http://www.ecs.vuw.ac.nz/~kevin/forMPI/openmpi-1.3.4-20091208-netbsd.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in case you want to try something out from an actual NetBSD build.
</span><br>
<p>I'm looking at your patches now.
<br>
<p><span class="quotelev2">&gt;&gt; (What conflict do you observe with pkgsrc-wip package by the way?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That was detailed in another email but basically the Open Trace Format
</span><br>
<span class="quotelev1">&gt; that the Vampire Trace (VT) stuff is looking to install tries to install:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ${LOCALBASE}/bin/otfdump
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and that binary is already installed there as part of another
</span><br>
<span class="quotelev1">&gt; package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can get around this for a NetBSD OpenMPI deployment by adding this
</span><br>
<span class="quotelev1">&gt; patch to the PkgSrc Makefile which just removes the VT toolkit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 26a27
</span><br>
<span class="quotelev2">&gt;&gt; CONFIGURE_ARGS+=      --enable-contrib-no-build=vt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no idea how NetBSD go about resolving such clashes in the long
</span><br>
<span class="quotelev1">&gt; term though?
</span><br>
<p>I've disabled it the same way for this time, my local package differs
<br>
from what's in wip:
<br>
<p>--- PLIST	3 Dec 2009 10:18:00 -0000	1.5
<br>
+++ PLIST	9 Dec 2009 08:29:31 -0000
<br>
@@ -1,17 +1,11 @@
<br>
&nbsp;@comment $NetBSD$
<br>
&nbsp;bin/mpiCC
<br>
-bin/mpiCC-vt
<br>
&nbsp;bin/mpic++
<br>
-bin/mpic++-vt
<br>
&nbsp;bin/mpicc
<br>
-bin/mpicc-vt
<br>
&nbsp;bin/mpicxx
<br>
-bin/mpicxx-vt
<br>
&nbsp;bin/mpiexec
<br>
&nbsp;bin/mpif77
<br>
-bin/mpif77-vt
<br>
&nbsp;bin/mpif90
<br>
-bin/mpif90-vt
<br>
&nbsp;bin/mpirun
<br>
&nbsp;bin/ompi-checkpoint
<br>
&nbsp;bin/ompi-clean
<br>
@@ -21,28 +15,11 @@
<br>
&nbsp;bin/ompi-server
<br>
&nbsp;bin/ompi_info
<br>
&nbsp;bin/opal_wrapper
<br>
-bin/opari
<br>
&nbsp;bin/orte-clean
<br>
&nbsp;bin/orte-iof
<br>
&nbsp;bin/orte-ps
<br>
&nbsp;bin/orted
<br>
&nbsp;bin/orterun
<br>
-bin/otfaux
<br>
-bin/otfcompress
<br>
-bin/otfconfig
<br>
-bin/otfdecompress
<br>
-bin/otfdump
<br>
-bin/otfinfo
<br>
-bin/otfmerge
<br>
-bin/vtcc
<br>
-bin/vtcxx
<br>
-bin/vtf77
<br>
-bin/vtf90
<br>
-bin/vtfilter
<br>
-bin/vtunify
<br>
-etc/openmpi-default-hostfile
<br>
-etc/openmpi-mca-params.conf
<br>
-etc/openmpi-totalview.tcl
<br>
&nbsp;include/mpi.h
<br>
&nbsp;include/mpif-common.h
<br>
&nbsp;include/mpif-config.h
<br>
@@ -79,40 +56,12 @@
<br>
&nbsp;include/openmpi/ompi/mpi/cxx/topology_inln.h
<br>
&nbsp;include/openmpi/ompi/mpi/cxx/win.h
<br>
&nbsp;include/openmpi/ompi/mpi/cxx/win_inln.h
<br>
-include/vampirtrace/OTF_CopyHandler.h
<br>
-include/vampirtrace/OTF_Definitions.h
<br>
-include/vampirtrace/OTF_File.h
<br>
-include/vampirtrace/OTF_FileManager.h
<br>
-include/vampirtrace/OTF_Filenames.h
<br>
-include/vampirtrace/OTF_HandlerArray.h
<br>
-include/vampirtrace/OTF_MasterControl.h
<br>
-include/vampirtrace/OTF_RBuffer.h
<br>
-include/vampirtrace/OTF_RStream.h
<br>
-include/vampirtrace/OTF_Reader.h
<br>
-include/vampirtrace/OTF_WBuffer.h
<br>
-include/vampirtrace/OTF_WStream.h
<br>
-include/vampirtrace/OTF_Writer.h
<br>
-include/vampirtrace/OTF_inttypes.h
<br>
-include/vampirtrace/OTF_inttypes_unix.h
<br>
-include/vampirtrace/opari_omp.h
<br>
-include/vampirtrace/otf.h
<br>
-include/vampirtrace/pomp_lib.h
<br>
-include/vampirtrace/vt_user.h
<br>
-include/vampirtrace/vt_user.inc
<br>
-include/vampirtrace/vt_user_comment.h
<br>
-include/vampirtrace/vt_user_comment.inc
<br>
-include/vampirtrace/vt_user_count.h
<br>
-include/vampirtrace/vt_user_count.inc
<br>
&nbsp;lib/libmca_common_sm.la
<br>
&nbsp;lib/libmpi.la
<br>
&nbsp;lib/libmpi_cxx.la
<br>
&nbsp;lib/libmpi_f77.la
<br>
&nbsp;lib/libopen-pal.la
<br>
&nbsp;lib/libopen-rte.la
<br>
-lib/libotf.la
<br>
-lib/libvt.a
<br>
-lib/libvt.fmpi.a
<br>
-lib/libvt.mpi.a
<br>
&nbsp;lib/openmpi/libompi_dbg_msgq.la
<br>
&nbsp;lib/openmpi/mca_allocator_basic.la
<br>
&nbsp;lib/openmpi/mca_allocator_bucket.la
<br>
@@ -503,6 +452,9 @@
<br>
&nbsp;man/man7/orte_hosts.7
<br>
&nbsp;man/man7/orte_snapc.7
<br>
&nbsp;share/openmpi/amca-param-sets/example.conf
<br>
+share/openmpi/examples/openmpi-default-hostfile
<br>
+share/openmpi/examples/openmpi-mca-params.conf
<br>
+share/openmpi/examples/openmpi-totalview.tcl
<br>
&nbsp;share/openmpi/help-coll-sync.txt
<br>
&nbsp;share/openmpi/help-dash-host.txt
<br>
&nbsp;share/openmpi/help-ess-base.txt
<br>
@@ -548,36 +500,9 @@
<br>
&nbsp;share/openmpi/help-plm-rsh.txt
<br>
&nbsp;share/openmpi/help-ras-base.txt
<br>
&nbsp;share/openmpi/help-rmaps_rank_file.txt
<br>
-share/openmpi/mpiCC-vt-wrapper-data.txt
<br>
&nbsp;share/openmpi/mpiCC-wrapper-data.txt
<br>
-share/openmpi/mpic++-vt-wrapper-data.txt
<br>
&nbsp;share/openmpi/mpic++-wrapper-data.txt
<br>
-share/openmpi/mpicc-vt-wrapper-data.txt
<br>
&nbsp;share/openmpi/mpicc-wrapper-data.txt
<br>
-share/openmpi/mpicxx-vt-wrapper-data.txt
<br>
&nbsp;share/openmpi/mpicxx-wrapper-data.txt
<br>
-share/openmpi/mpif77-vt-wrapper-data.txt
<br>
&nbsp;share/openmpi/mpif77-wrapper-data.txt
<br>
-share/openmpi/mpif90-vt-wrapper-data.txt
<br>
&nbsp;share/openmpi/mpif90-wrapper-data.txt
<br>
-share/vampirtrace/FILTER.SPEC
<br>
-share/vampirtrace/GROUPS.SPEC
<br>
-share/vampirtrace/METRICS.SPEC
<br>
-share/vampirtrace/doc/ChangeLog
<br>
-share/vampirtrace/doc/LICENSE
<br>
-share/vampirtrace/doc/UserManual.html
<br>
-share/vampirtrace/doc/UserManual.pdf
<br>
-share/vampirtrace/doc/opari/ChangeLog
<br>
-share/vampirtrace/doc/opari/LICENSE
<br>
-share/vampirtrace/doc/opari/Readme.html
<br>
-share/vampirtrace/doc/opari/lacsi01.pdf
<br>
-share/vampirtrace/doc/opari/lacsi01.ps.gz
<br>
-share/vampirtrace/doc/opari/opari-logo-100.gif
<br>
-share/vampirtrace/doc/otf/ChangeLog
<br>
-share/vampirtrace/doc/otf/LICENSE
<br>
-share/vampirtrace/doc/otf/otftools.pdf
<br>
-share/vampirtrace/doc/otf/specification.pdf
<br>
-share/vampirtrace/vtcc-wrapper-data.txt
<br>
-share/vampirtrace/vtcxx-wrapper-data.txt
<br>
-share/vampirtrace/vtf77-wrapper-data.txt
<br>
-share/vampirtrace/vtf90-wrapper-data.txt
<br>
<p><p>I can commit my development patches into wip right now,
<br>
if that helps you.
<br>
<p>Some patches should be there anyway, since OpenMPI doesn't help with
<br>
installation of configuration files into example directory anyway.
<br>
<p><p><pre>
-- 
HE CE3OH...
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11467.php">Constantinos Makassikis: "[OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<li><strong>Previous message:</strong> <a href="11465.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11483.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
