<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 14:55:13 2009" -->
<!-- isoreceived="20091214195513" -->
<!-- sent="Mon, 14 Dec 2009 14:55:07 -0500" -->
<!-- isosent="20091214195507" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem" -->
<!-- id="78F4AC75-4DF1-4B31-9858-D6799B2A4C2C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="df8c8a6d0912091541k3a4e1949yc7e9bab6d3fd25ec_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-14 14:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11534.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11532.php">Rahul Nabar: "[OMPI users] Disabling irqbalance service for better performance of MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11521.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim and I iterated a bit off-list.
<br>
<p>Jim -- I committed a change to our specfile that makes it work for me.  Before I release a 1.4-2 SRPM, could you give it a whirl?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
<br>
<p><p><p>On Dec 9, 2009, at 6:41 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; By the way, if I set build_all_in_one_rpm to 1, it works fine...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 9, 2009 at 1:47 PM, Jim Kusznir &lt;jkusznir_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to build openmpi-1.4 rpms using my normal (complex) rpm
</span><br>
<span class="quotelev2">&gt; &gt; build commands, but its failing.  I'm running into two errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One (on gcc only): the D_FORTIFY_SOURCE build failure.  I've had to
</span><br>
<span class="quotelev2">&gt; &gt; move the if test &quot;$using_gcc&quot; = 0; then line down to after the
</span><br>
<span class="quotelev2">&gt; &gt; RPM_OPT_FLAGS= that includes D_FORTIFY_SOURCE; otherwise the compile
</span><br>
<span class="quotelev2">&gt; &gt; blows up.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The second, and in my opinion, more major rpm spec file bug is
</span><br>
<span class="quotelev2">&gt; &gt; something with the files specification.  I build multiple versions of
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI to accomidate the collection of compilers I use (on this
</span><br>
<span class="quotelev2">&gt; &gt; machine, I have intel 10.1 and GCC, and will have to add 9.1 per user
</span><br>
<span class="quotelev2">&gt; &gt; request); on others, I use PGI and GCC.  In any case, here's my build
</span><br>
<span class="quotelev2">&gt; &gt; command for Intel:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CC=icc CXX=icpc F77=ifort FC=ifort rpmbuild -bb --define
</span><br>
<span class="quotelev2">&gt; &gt; 'install_in_opt 1' --define 'install_modulefile 1' --define
</span><br>
<span class="quotelev2">&gt; &gt; 'modules_rpm_name Modules' --define 'build_all_in_one_rpm 0'  --define
</span><br>
<span class="quotelev2">&gt; &gt; 'configure_options --with-tm=/opt/torque' --define '_name
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-intel' openmpi-1.4.spec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, the filespec is somehow broke and it ends up missing
</span><br>
<span class="quotelev2">&gt; &gt; most (all?) the files, and failing in the final stage of RPM creation:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -------------------
</span><br>
<span class="quotelev2">&gt; &gt; Processing files: openmpi-intel-docs-1.4-1
</span><br>
<span class="quotelev2">&gt; &gt; Finding  Provides: /usr/lib/rpm/find-provides openmpi-intel
</span><br>
<span class="quotelev2">&gt; &gt; Finding  Requires: /usr/lib/rpm/find-requires openmpi-intel
</span><br>
<span class="quotelev2">&gt; &gt; Finding  Supplements: /usr/lib/rpm/find-supplements openmpi-intel
</span><br>
<span class="quotelev2">&gt; &gt; Requires(rpmlib): rpmlib(PayloadFilesHavePrefix) &lt;= 4.0-1
</span><br>
<span class="quotelev2">&gt; &gt; rpmlib(CompressedFileNames) &lt;= 3.0.4-1
</span><br>
<span class="quotelev2">&gt; &gt; Requires: openmpi-intel-runtime
</span><br>
<span class="quotelev2">&gt; &gt; Checking for unpackaged file(s): /usr/lib/rpm/check-files
</span><br>
<span class="quotelev2">&gt; &gt; /var/tmp/openmpi-intel-1.4-1-root
</span><br>
<span class="quotelev2">&gt; &gt; error: Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfaux
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfcompress
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfconfig
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfdump
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfinfo
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfmerge
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpiCC-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpic++-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpicc-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpicxx-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpif77-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpif90-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-checkpoint
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-clean
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-iof
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-ps
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-restart
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-server
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/opari
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/orte-clean
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/orte-iof
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/orte-ps
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/otfdecompress
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtcc
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtcxx
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtf77
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtf90
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtfilter
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtunify
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/FILTER.SPEC
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/GROUPS.SPEC
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/METRICS.SPEC
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/ChangeLog
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/LICENSE
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.html
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.pdf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/ChangeLog
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/LICENSE
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/Readme.html
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.pdf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.ps.gz
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/opari-logo-100.gif
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/ChangeLog
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/LICENSE
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/otftools.pdf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/specification.pdf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vtcc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vtcxx-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vtf77-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vtf90-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; RPM build errors:
</span><br>
<span class="quotelev2">&gt; &gt;    Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfaux
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfcompress
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfconfig
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfdump
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfinfo
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfmerge
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpiCC-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpic++-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpicc-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpicxx-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpif77-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/mpif90-vt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-checkpoint
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-clean
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-iof
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-ps
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-restart
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/ompi-server
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/opari
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/orte-clean
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/orte-iof
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/orte-ps
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/otfdecompress
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtcc
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtcxx
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtf77
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtf90
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtfilter
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/bin/vtunify
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/FILTER.SPEC
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/GROUPS.SPEC
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/METRICS.SPEC
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/ChangeLog
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/LICENSE
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.html
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.pdf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/ChangeLog
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/LICENSE
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/Readme.html
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.pdf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.ps.gz
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/opari-logo-100.gif
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/ChangeLog
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/LICENSE
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/otftools.pdf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/specification.pdf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vtcc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vtcxx-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vtf77-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi-intel/1.4/share/vtf90-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt; &gt; ---------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I took a look at the spec file, and its not clear to me this time
</span><br>
<span class="quotelev2">&gt; &gt; what's breaking.  If %{name} is being properly expanded, then at least
</span><br>
<span class="quotelev2">&gt; &gt; all the */share/* stuff should have been caught (although I'm not
</span><br>
<span class="quotelev2">&gt; &gt; clear on how the rest of the stuff was supposed to be caught).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestions / bugfixes to correct this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --Jim
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11534.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11532.php">Rahul Nabar: "[OMPI users] Disabling irqbalance service for better performance of MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11521.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
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
