<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 11 14:33:07 2009" -->
<!-- isoreceived="20091211193307" -->
<!-- sent="Fri, 11 Dec 2009 14:32:58 -0500" -->
<!-- isosent="20091211193258" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem" -->
<!-- id="189DAB1C-41A0-446C-B891-094ED42AC28A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="df8c8a6d0912091347ue49e452l6da7caa8bd25916b_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-11 14:32:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11522.php">David Turner: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11520.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11487.php">Jim Kusznir: "[OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 9, 2009, at 4:47 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; One (on gcc only): the D_FORTIFY_SOURCE build failure.  I've had to
</span><br>
<span class="quotelev1">&gt; move the if test &quot;$using_gcc&quot; = 0; then line down to after the
</span><br>
<span class="quotelev1">&gt; RPM_OPT_FLAGS= that includes D_FORTIFY_SOURCE; otherwise the compile
</span><br>
<span class="quotelev1">&gt; blows up.
</span><br>
<p>Hmm.  Can you explain why / provide more detail?
<br>
<p><span class="quotelev1">&gt; The second, and in my opinion, more major rpm spec file bug is
</span><br>
<span class="quotelev1">&gt; something with the files specification.  I build multiple versions of
</span><br>
<span class="quotelev1">&gt; OpenMPI to accomidate the collection of compilers I use (on this
</span><br>
<span class="quotelev1">&gt; machine, I have intel 10.1 and GCC, and will have to add 9.1 per user
</span><br>
<span class="quotelev1">&gt; request); on others, I use PGI and GCC.  In any case, here's my build
</span><br>
<span class="quotelev1">&gt; command for Intel:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CC=icc CXX=icpc F77=ifort FC=ifort rpmbuild -bb --define
</span><br>
<span class="quotelev1">&gt; 'install_in_opt 1' --define 'install_modulefile 1' --define
</span><br>
<span class="quotelev1">&gt; 'modules_rpm_name Modules' --define 'build_all_in_one_rpm 0'  --define
</span><br>
<span class="quotelev1">&gt; 'configure_options --with-tm=/opt/torque' --define '_name
</span><br>
<span class="quotelev1">&gt; openmpi-intel' openmpi-1.4.spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, the filespec is somehow broke and it ends up missing
</span><br>
<span class="quotelev1">&gt; most (all?) the files, and failing in the final stage of RPM creation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt; Processing files: openmpi-intel-docs-1.4-1
</span><br>
<span class="quotelev1">&gt; Finding  Provides: /usr/lib/rpm/find-provides openmpi-intel
</span><br>
<span class="quotelev1">&gt; Finding  Requires: /usr/lib/rpm/find-requires openmpi-intel
</span><br>
<span class="quotelev1">&gt; Finding  Supplements: /usr/lib/rpm/find-supplements openmpi-intel
</span><br>
<span class="quotelev1">&gt; Requires(rpmlib): rpmlib(PayloadFilesHavePrefix) &lt;= 4.0-1
</span><br>
<span class="quotelev1">&gt; rpmlib(CompressedFileNames) &lt;= 3.0.4-1
</span><br>
<span class="quotelev1">&gt; Requires: openmpi-intel-runtime
</span><br>
<span class="quotelev1">&gt; Checking for unpackaged file(s): /usr/lib/rpm/check-files
</span><br>
<span class="quotelev1">&gt; /var/tmp/openmpi-intel-1.4-1-root
</span><br>
<span class="quotelev1">&gt; error: Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfaux
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfcompress
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfconfig
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfdump
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfinfo
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfmerge
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpiCC-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpic++-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpicc-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpicxx-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpif77-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpif90-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-checkpoint
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-clean
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-iof
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-ps
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-restart
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-server
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/opari
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/orte-clean
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/orte-iof
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/orte-ps
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/otfdecompress
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtcc
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtcxx
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtf77
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtf90
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtfilter
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtunify
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/FILTER.SPEC
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/GROUPS.SPEC
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/METRICS.SPEC
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/ChangeLog
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/LICENSE
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.html
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.pdf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/ChangeLog
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/LICENSE
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/Readme.html
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.pdf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.ps.gz
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/opari-logo-100.gif
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/ChangeLog
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/LICENSE
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/otftools.pdf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/specification.pdf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vtcc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vtcxx-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vtf77-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vtf90-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;     Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfaux
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfcompress
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfconfig
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfdump
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfinfo
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ia64-suse-linux-otfmerge
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpiCC-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpic++-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpicc-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpicxx-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpif77-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/mpif90-vt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-checkpoint
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-clean
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-iof
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-ps
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-restart
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/ompi-server
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/opari
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/orte-clean
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/orte-iof
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/orte-ps
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/otfdecompress
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtcc
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtcxx
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtf77
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtf90
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtfilter
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/bin/vtunify
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/FILTER.SPEC
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/GROUPS.SPEC
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/METRICS.SPEC
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/ChangeLog
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/LICENSE
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.html
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/UserManual.pdf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/ChangeLog
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/LICENSE
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/Readme.html
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.pdf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/lacsi01.ps.gz
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/opari/opari-logo-100.gif
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/ChangeLog
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/LICENSE
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/otftools.pdf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vampirtrace/doc/otf/specification.pdf
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vtcc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vtcxx-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vtf77-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-intel/1.4/share/vtf90-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I took a look at the spec file, and its not clear to me this time
</span><br>
<span class="quotelev1">&gt; what's breaking.  If %{name} is being properly expanded, then at least
</span><br>
<span class="quotelev1">&gt; all the */share/* stuff should have been caught (although I'm not
</span><br>
<span class="quotelev1">&gt; clear on how the rest of the stuff was supposed to be caught).
</span><br>
<p>Can you send the specific rpmbuild command line that you're using to build the openmpi-1.4 srpm?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11522.php">David Turner: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11520.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11487.php">Jim Kusznir: "[OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
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
