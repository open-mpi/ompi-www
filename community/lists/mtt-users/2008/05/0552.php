<?
$subject_val = "[MTT users] How to test just one MPI version?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 13:55:03 2008" -->
<!-- isoreceived="20080513175503" -->
<!-- sent="Tue, 13 May 2008 14:54:46 -0300" -->
<!-- isosent="20080513175446" -->
<!-- name="Rafael Folco" -->
<!-- email="rfolco_at_[hidden]" -->
<!-- subject="[MTT users] How to test just one MPI version?" -->
<!-- id="1210701286.6755.22.camel_at_T42" -->
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
<strong>Subject:</strong> [MTT users] How to test just one MPI version?<br>
<strong>From:</strong> Rafael Folco (<em>rfolco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 13:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Previous message:</strong> <a href="0551.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Reply:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I appreciate if anyone can give me some help.
<br>
<p>How to run MTT tests just against one specific MPI version ? It is
<br>
running against all MPI versions: ompi-nightly-v1.1, ompi-nightly-trunk,
<br>
and ompi-nightly-v1.2.
<br>
<p>I've already tried to use the following configurations. Did I miss
<br>
anything ?
<br>
<p>MPI Get phase:
<br>
==============
<br>
[MPI get: OpenMPI-1.2.5]
<br>
mpi_details = Open MPI 1.2.5
<br>
module = AlreadyInstalled
<br>
<p><p>MPI Install phase:
<br>
==================
<br>
[MPI install: OpenMPI-1.2.5]
<br>
module = Analyze::OMPI
<br>
<p><p>Test Build phase:
<br>
=================
<br>
skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
<br>
skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk,
<br>
ompi-nightly-v1.2
<br>
<p><p>Command line:
<br>
=============
<br>
<p># client/mtt -d --force -f samples/ompi-core.ini
<br>
alreadyinstalled_dir=/usr/lib64/openmpi/1.2.5-gcc
<br>
<p><p>Thanks in advance.
<br>
<p><pre>
-- 
Rafael Folco
OpenHPC / Brazil Test Lead
IBM Linux Technology Center
E-Mail: rfolco_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Previous message:</strong> <a href="0551.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Reply:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
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
