<?
$subject_val = "[OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 08:32:04 2012" -->
<!-- isoreceived="20120320123204" -->
<!-- sent="Tue, 20 Mar 2012 13:31:58 +0100" -->
<!-- isosent="20120320123158" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="[OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo" -->
<!-- id="C2E47DDD62F84E4CAF40AFFA65C0843C100F54C6E6_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 08:31:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18806.php">Jeffrey Squyres: "Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<li><strong>Previous message:</strong> <a href="18804.php">Barnet Wagman: "[OMPI users] ppe-ompi 1.1 (OMPI on EC2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18806.php">Jeffrey Squyres: "Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<li><strong>Reply:</strong> <a href="18806.php">Jeffrey Squyres: "Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I updated ompi-trunk to the most recent trunk:
<br>
<p>ilias_at_[hidden]:~/bin/openmpi_i32lp64_intel_static/ompi-trunk/.svn info
<br>
Path: .
<br>
URL: <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
<br>
Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>
<br>
Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
<br>
Revision: 26166
<br>
Node Kind: directory
<br>
Schedule: normal
<br>
Last Changed Author: miked
<br>
Last Changed Rev: 26166
<br>
Last Changed Date: 2012-03-20 11:00:52 +0100 (Tue, 20 Mar 2012)
<br>
<p>and did configure, which returned with this error:
<br>
<p>../configure --prefix=/home/ilias/bin/openmpi_i32lp64_intel_static --without-memory-manager CXX=icpc CC=icc F77=ifort FC=ifort LDFLAGS=--static --disable-share  --enable-static
<br>
.
<br>
.
<br>
.
<br>
config.status: orte/include/orte_config.h is unchanged
<br>
config.status: creating ompi/include/ompi_config.h
<br>
config.status: ompi/include/ompi_config.h is unchanged
<br>
config.status: creating ompi/include/mpi.h
<br>
config.status: error: cannot find input file: `opal/mca/hwloc/hwloc131/hwloc/include/private/autogen/config.h.in'
<br>
ilias_at_[hidden]:~/bin/openmpi_i32lp64_intel_static/ompi-trunk/.make all install
<br>
CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd . &amp;&amp; /bin/sh /home/ilias/bin/openmpi_i32lp64_intel_static/ompi-trunk/config/missing --run aclocal-1.11 -I config
<br>
aclocal-1.11: config/autogen_found_items.m4:286: file `opal/mca/hwloc/hwloc131/configure.m4' does not exist
<br>
make: *** [aclocal.m4] Error 1
<br>
<p>Miro
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18806.php">Jeffrey Squyres: "Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<li><strong>Previous message:</strong> <a href="18804.php">Barnet Wagman: "[OMPI users] ppe-ompi 1.1 (OMPI on EC2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18806.php">Jeffrey Squyres: "Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<li><strong>Reply:</strong> <a href="18806.php">Jeffrey Squyres: "Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
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
