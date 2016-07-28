<?
$subject_val = "[OMPI users] OpenMPI 1.4 RPM Spec file problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 16:47:42 2009" -->
<!-- isoreceived="20091209214742" -->
<!-- sent="Wed, 9 Dec 2009 13:47:38 -0800" -->
<!-- isosent="20091209214738" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.4 RPM Spec file problem" -->
<!-- id="df8c8a6d0912091347ue49e452l6da7caa8bd25916b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.4 RPM Spec file problem<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 16:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11488.php">Gus Correa: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11486.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Reply:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Reply:</strong> <a href="11521.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I'm trying to build openmpi-1.4 rpms using my normal (complex) rpm
<br>
build commands, but its failing.  I'm running into two errors:
<br>
<p>One (on gcc only): the D_FORTIFY_SOURCE build failure.  I've had to
<br>
move the if test &quot;$using_gcc&quot; = 0; then line down to after the
<br>
RPM_OPT_FLAGS= that includes D_FORTIFY_SOURCE; otherwise the compile
<br>
blows up.
<br>
<p>The second, and in my opinion, more major rpm spec file bug is
<br>
something with the files specification.  I build multiple versions of
<br>
OpenMPI to accomidate the collection of compilers I use (on this
<br>
machine, I have intel 10.1 and GCC, and will have to add 9.1 per user
<br>
request); on others, I use PGI and GCC.  In any case, here's my build
<br>
command for Intel:
<br>
<p>CC=icc CXX=icpc F77=ifort FC=ifort rpmbuild -bb --define
<br>
'install_in_opt 1' --define 'install_modulefile 1' --define
<br>
'modules_rpm_name Modules' --define 'build_all_in_one_rpm 0'  --define
<br>
'configure_options --with-tm=/opt/torque' --define '_name
<br>
openmpi-intel' openmpi-1.4.spec
<br>
<p>Unfortunately, the filespec is somehow broke and it ends up missing
<br>
most (all?) the files, and failing in the final stage of RPM creation:
<br>
<p>-------------------
<br>
Processing files: openmpi-intel-docs-1.4-1
<br>
Finding  Provides: /usr/lib/rpm/find-provides openmpi-intel
<br>
Finding  Requires: /usr/lib/rpm/find-requires openmpi-intel
<br>
Finding  Supplements: /usr/lib/rpm/find-supplements openmpi-intel
<br>
Requires(rpmlib): rpmlib(PayloadFilesHavePrefix) &lt;= 4.0-1
<br>
rpmlib(CompressedFileNames) &lt;= 3.0.4-1
<br>
Requires: openmpi-intel-runtime
<br>
Checking for unpackaged file(s): /usr/lib/rpm/check-files
<br>
/var/tmp/openmpi-intel-1.4-1-root
<br>
error: Installed (but unpackaged) file(s) found:
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfaux
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfcompress
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfconfig
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfdump
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfinfo
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfmerge
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpiCC-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpic++-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpicc-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpicxx-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpif77-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpif90-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-checkpoint
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-clean
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-iof
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-ps
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-restart
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-server
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/opari
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/orte-clean
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/orte-iof
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/orte-ps
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/otfdecompress
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtcc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtcxx
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtf77
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtf90
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtfilter
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtunify
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/etc/openmpi-default-hostfile
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/etc/openmpi-mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/etc/openmpi-totalview.tcl
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/FILTER.SPEC
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/GROUPS.SPEC
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/METRICS.SPEC
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/ChangeLog
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/LICENSE
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.html
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.pdf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/ChangeLog
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/LICENSE
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/Readme.html
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.pdf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.ps.gz
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/opari-logo-100.gif
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/ChangeLog
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/LICENSE
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/otftools.pdf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/specification.pdf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vtcc-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vtcxx-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vtf77-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vtf90-wrapper-data.txt
<br>
<p><p>RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Installed (but unpackaged) file(s) found:
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfaux
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfcompress
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfconfig
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfdump
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfinfo
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfmerge
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpiCC-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpic++-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpicc-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpicxx-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpif77-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/mpif90-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-checkpoint
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-clean
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-iof
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-ps
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-restart
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/ompi-server
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/opari
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/orte-clean
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/orte-iof
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/orte-ps
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/otfdecompress
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtcc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtcxx
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtf77
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtf90
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtfilter
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/bin/vtunify
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/etc/openmpi-default-hostfile
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/etc/openmpi-mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/etc/openmpi-totalview.tcl
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/FILTER.SPEC
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/GROUPS.SPEC
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/METRICS.SPEC
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/ChangeLog
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/LICENSE
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.html
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.pdf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/ChangeLog
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/LICENSE
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/Readme.html
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.pdf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.ps.gz
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/opari-logo-100.gif
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/ChangeLog
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/LICENSE
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/otftools.pdf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/specification.pdf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vtcc-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vtcxx-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vtf77-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi-intel/1.4/share/vtf90-wrapper-data.txt
<br>
---------------
<br>
<p>I took a look at the spec file, and its not clear to me this time
<br>
what's breaking.  If %{name} is being properly expanded, then at least
<br>
all the */share/* stuff should have been caught (although I'm not
<br>
clear on how the rest of the stuff was supposed to be caught).
<br>
<p>Any suggestions / bugfixes to correct this?
<br>
<p>--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11488.php">Gus Correa: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11486.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Reply:</strong> <a href="11492.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Reply:</strong> <a href="11521.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
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
