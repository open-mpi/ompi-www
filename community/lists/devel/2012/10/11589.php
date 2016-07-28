<?
$subject_val = "[OMPI devel] rpmbuild of 1.6.2 fails when build_all_in_one_rpm is 0, works when 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 21:31:12 2012" -->
<!-- isoreceived="20121011013112" -->
<!-- sent="Thu, 11 Oct 2012 14:31:07 +1300" -->
<!-- isosent="20121011013107" -->
<!-- name="Kevin Buckley" -->
<!-- email="kevin.buckley.ecs.vuw.ac.nz_at_[hidden]" -->
<!-- subject="[OMPI devel] rpmbuild of 1.6.2 fails when build_all_in_one_rpm is 0, works when 1" -->
<!-- id="CABwOO=ckiot24=ahR_tuDtuJzvHcYDKtyPofLi5WdtwzdaxpzQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] rpmbuild of 1.6.2 fails when build_all_in_one_rpm is 0, works when 1<br>
<strong>From:</strong> Kevin Buckley (<em>kevin.buckley.ecs.vuw.ac.nz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 21:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11590.php">Nathan Hjelm: "[OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
<li><strong>Previous message:</strong> <a href="11588.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I'd had deep joy when rebuilding from the SRPM of 1.6.2 as follows
<br>
<p>rpmbuild  \
<br>
&nbsp;--define '_topdir  /home/scifachpc01/buckleke/rpmbuild' \
<br>
&nbsp;--define 'install_in_opt 1'  \
<br>
&nbsp;--define 'install_shell_scripts 1' \
<br>
&nbsp;--define 'install_modulefile 1' \
<br>
&nbsp;--define 'use_mpi_selector 1'  \
<br>
&nbsp;-bb openmpi-1.6.2.spec
<br>
<p>and so thought to try splitting out the various RPMS, so attempted an
<br>
<p>rpmbuild  \
<br>
&nbsp;--define '_topdir  /home/scifachpc01/buckleke/rpmbuild' \
<br>
&nbsp;--define 'install_in_opt 1'  \
<br>
&nbsp;--define 'install_shell_scripts 1' \
<br>
&nbsp;--define 'install_modulefile 1' \
<br>
&nbsp;--define 'use_mpi_selector 1'  \
<br>
&nbsp;--define 'build_all_in_one_rpm 0' \
<br>
&nbsp;-bb openmpi-1.6.2.spec
<br>
<p>however, deep sorrow.
<br>
<p>Cutting the lines from the tail of my grab of the output shows
<br>
<p>---------8&lt;--------------------------------8&lt;--------------------------------8&lt;--------------------------------8&lt;-----------------------
<br>
...
<br>
Processing files: openmpi-runtime-1.6.2-1
<br>
Executing(%doc): /bin/sh -e /var/tmp/rpm-tmp.68586
<br>
...
<br>
warning: File listed twice:
<br>
/opt/openmpi/1.6.2-gcc/share/openmpi/help-orte-notifier-command.txt
<br>
...
<br>
Processing files: openmpi-devel-1.6.2-1
<br>
Requires(rpmlib): rpmlib(CompressedFileNames) &lt;= 3.0.4-1
<br>
rpmlib(PayloadFilesHavePrefix) &lt;= 4.0-1
<br>
Requires: libc.so.6()(64bit) libc.so.6(GLIBC_2.2.5)(64bit)
<br>
libc.so.6(GLIBC_2.3.4)(64bit) libdl.so.2()(64bit) libm.so.6()(64bit)
<br>
libnsl.so.1()(64bit) libopen-pal.so.4()(64bit)
<br>
libpthread.so.0()(64bit) libpthread.so.0(GLIBC_2.2.5)(64bit)
<br>
librt.so.1()(64bit) libutil.so.1()(64bit) openmpi-runtime
<br>
rtld(GNU_HASH)
<br>
Processing files: openmpi-docs-1.6.2-1
<br>
Requires(rpmlib): rpmlib(CompressedFileNames) &lt;= 3.0.4-1
<br>
rpmlib(PayloadFilesHavePrefix) &lt;= 4.0-1
<br>
Requires: openmpi-runtime
<br>
Checking for unpackaged file(s): /usr/lib/rpm/check-files
<br>
/var/tmp/openmpi-1.6.2-1-root
<br>
error: Installed (but unpackaged) file(s) found:
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpiCC-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpic++-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpicc-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpicxx-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpif77-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpif90-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-clean
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-iof
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-probe
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-profiler
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-ps
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-top
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/orte-top
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/orteCC
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/orte_wrapper_script
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ortec++
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ortecc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/etc/openmpi-default-hostfile
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/etc/openmpi-mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi-c.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi-cxx.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi-f77.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi-f90.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/orte.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/share/config.log
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/share/libtool
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/share/omp.h
<br>
<p><p>RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;File listed twice:
<br>
/opt/openmpi/1.6.2-gcc/share/openmpi/help-orte-notifier-command.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Installed (but unpackaged) file(s) found:
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpiCC-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpic++-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpicc-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpicxx-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpif77-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/mpif90-vt
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-clean
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-iof
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-probe
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-profiler
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-ps
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ompi-top
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/orte-top
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/orteCC
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/orte_wrapper_script
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ortec++
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/bin/ortecc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/etc/openmpi-default-hostfile
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/etc/openmpi-mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi-c.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi-cxx.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi-f77.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi-f90.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/ompi.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/lib/pkgconfig/orte.pc
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/share/config.log
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/share/libtool
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.6.2-gcc/share/omp.h
<br>
---------8&lt;--------------------------------8&lt;--------------------------------8&lt;--------------------------------8&lt;-----------------------
<br>
<p>and there it ends, having not created any RPMS.
<br>
<p>The system is a RHEL5.8 with rpm-build-4.4.2.3-28.el5_8.x86_64.rpm
<br>
<p>The sharp-eyed amongst you will have noticed that there's a &quot;-gcc&quot;
<br>
suffix to the
<br>
<p>/opt/%{name}/%{version}
<br>
<p>parts, something I altered the spec-file to obtain, as I was also
<br>
thinking of building a version
<br>
against the PGI compilers, however, rest assured I saw the failiure to
<br>
build sperated RPMs
<br>
with a vanilla spec-file as well.
<br>
<p>Obviously no show stopper, as I can build the &quot;all_in_one_rpm&quot; but
<br>
thought to feed
<br>
the experience back.
<br>
<p>Kevin Buckley
<br>
ECS, VUW, NZ
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11590.php">Nathan Hjelm: "[OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
<li><strong>Previous message:</strong> <a href="11588.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
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
