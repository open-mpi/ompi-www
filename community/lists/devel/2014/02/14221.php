<?
$subject_val = "[OMPI devel] openmpi-1.7.5a1r30797 fails building on SL 5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 22 13:20:08 2014" -->
<!-- isoreceived="20140222182008" -->
<!-- sent="Sat, 22 Feb 2014 19:20:07 +0100" -->
<!-- isosent="20140222182007" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.7.5a1r30797 fails building on SL 5.5" -->
<!-- id="20140222182007.GF30628_at_lisas.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.7.5a1r30797 fails building on SL 5.5<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-22 13:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14222.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Previous message:</strong> <a href="14220.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a Scientific Linux 5.5 system the nightly snapshot
<br>
openmpi-1.7.5a1r30797 fails to build with following errors:
<br>
<p><p>Making all in romio
<br>
make[3]: Entering directory `/tmp/adrian/openmpi-compile/openmpi-1.7.5a1r30797/build/ompi/mca/io/romio/romio'
<br>
make[4]: Entering directory `/tmp/adrian/openmpi-compile/openmpi-1.7.5a1r30797/build/ompi/mca/io/romio/romio'
<br>
make[4]: Leaving directory `/tmp/adrian/openmpi-compile/openmpi-1.7.5a1r30797/build/ompi/mca/io/romio/romio'
<br>
make[3]: Leaving directory `/tmp/adrian/openmpi-compile/openmpi-1.7.5a1r30797/build/ompi/mca/io/romio/romio'
<br>
make[3]: Entering directory `/tmp/adrian/openmpi-compile/openmpi-1.7.5a1r30797/build/ompi/mca/io/romio'
<br>
&nbsp;&nbsp;CCLD     mca_io_romio.la
<br>
romio/.libs/libromio_dist.a(delete.o): In function `lstat64':
<br>
delete.c:(.text+0x0): multiple definition of `lstat64'
<br>
romio/.libs/libromio_dist.a(close.o):close.c:(.text+0x0): first defined here
<br>
romio/.libs/libromio_dist.a(fsync.o): In function `lstat64':
<br>
fsync.c:(.text+0x0): multiple definition of `lstat64'
<br>
romio/.libs/libromio_dist.a(close.o):close.c:(.text+0x0): first defined here
<br>
romio/.libs/libromio_dist.a(get_amode.o): In function `lstat64':
<br>
get_amode.c:(.text+0x0): multiple definition of `lstat64'
<br>
romio/.libs/libromio_dist.a(close.o):close.c:(.text+0x0): first defined here
<br>
romio/.libs/libromio_dist.a(get_atom.o): In function `lstat64':
<br>
get_atom.c:(.text+0x0): multiple definition of `lstat64'
<br>
<p>and many more of those errors. 1.7.4 also fails.
<br>
<p>Following can be seen during configure (with no parameters):
<br>
<p>WARNING: Unknown architecture ... proceeding anyway
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14222.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Previous message:</strong> <a href="14220.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
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
