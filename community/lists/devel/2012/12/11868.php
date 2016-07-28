<?
$subject_val = "[OMPI devel] openmpi-1.9a1r27710 on cygwin: patch and questions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 10:54:59 2012" -->
<!-- isoreceived="20121221155459" -->
<!-- sent="Fri, 21 Dec 2012 16:54:46 +0100" -->
<!-- isosent="20121221155446" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.9a1r27710 on cygwin: patch and questions" -->
<!-- id="50D48646.9010405_at_gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.9a1r27710 on cygwin: patch and questions<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-21 10:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11869.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11867.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
additional to the patches used for building on cygwin
<br>
openmpi-1.7rc5, a new one is needed for openmpi-1.9a1r27710 build.
<br>
See attached for statfs usage.
<br>
<p>As config parameters, I added &quot;if-windows,shmem-windows&quot;
<br>
to
<br>
&nbsp;
<br>
--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv,if-windows,shmem-windows
<br>
<p><p>Question 1 :
<br>
instead of a platform check should be better to check
<br>
if statvfs or statfs are implemented on the platform ?
<br>
<p>Question 2:
<br>
any specif reason to have reset the shared library
<br>
version numbers ?
<br>
<p>On openmpi-1.9a1r27710
<br>
./usr/bin/cygmpi-0.dll
<br>
./usr/bin/cygmpi_cxx-0.dll
<br>
./usr/bin/cygmpi_mpifh-0.dll
<br>
./usr/bin/cygmpi_usempi-0.dll
<br>
./usr/bin/cygopen-pal-0.dll
<br>
./usr/bin/cygopen-rte-0.dll
<br>
./usr/lib/openmpi/cygompi_dbg_msgq.dll
<br>
<p>On openmpi-1.7rc5
<br>
./usr/bin/cygmpi-1.dll
<br>
./usr/bin/cygmpi_cxx-1.dll
<br>
./usr/bin/cygmpi_mpifh-2.dll
<br>
./usr/bin/cygmpi_usempi-1.dll
<br>
./usr/bin/cygopen-pal-5.dll
<br>
./usr/bin/cygopen-rte-5.dll
<br>
./usr/lib/openmpi/cygompi_dbg_msgq.dll
<br>
<p>Question 3:
<br>
&nbsp;&nbsp;there is an alternative way to exclude all the &quot;*-windows&quot; mca
<br>
&nbsp;&nbsp;instead of
<br>
--enable-mca-no-build=installdirs-windows,timer-windows,if-windows,shmem-windows
<br>
<p><p>Regards
<br>
Marco
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11868/util-path.patch">util-path.patch</a>
</ul>
<!-- attachment="util-path.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11869.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11867.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
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
