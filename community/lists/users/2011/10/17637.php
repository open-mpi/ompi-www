<?
$subject_val = "[OMPI users] configure with cuda";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 27 14:38:48 2011" -->
<!-- isoreceived="20111027183848" -->
<!-- sent="Thu, 27 Oct 2011 14:38:22 -0400" -->
<!-- isosent="20111027183822" -->
<!-- name="Peter Wells" -->
<!-- email="Peter.Wells.43_at_[hidden]" -->
<!-- subject="[OMPI users] configure with cuda" -->
<!-- id="4233DF0214628A4789B98A2A4B4AE62E42C15829_at_ICE-MBX-2.ice.nd.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4233DF0214628A4789B98A2A4B4AE62E42C15827_at_ICE-MBX-2.ice.nd.edu" -->
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
<strong>Subject:</strong> [OMPI users] configure with cuda<br>
<strong>From:</strong> Peter Wells (<em>Peter.Wells.43_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-27 14:38:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Previous message:</strong> <a href="17636.php">Mudassar Majeed: "Re: [OMPI users] Want to find LogGP parameters. Please help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Reply:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am attempting to configure OpenMPI 1.4.3 with cuda support on a Redhat 5 box. When I try to run configure with the following command:
<br>
<p>&nbsp;./configure --prefix=/opt/crc/sandbox/pwells2/openmpi/1.4.3/intel-12.0-cuda/ FC=ifort F77=ifort CXX=icpc CC=icc --with-sge --disable-dlopen --enable-static --enable-shared --disable-openib-connectx-xrc --disable-openib-rdmacm --without-openib --with-cuda=/opt/crc/cuda/4.0/cuda --with-cuda-libdir=/opt/crc/cuda/4.0/cuda/lib64
<br>
<p>I receive the warning that '--with-cuda' and '--with-cuda-libdir' are unrecognized options. According to the FAQ these options are supported in this version of OpenMPI. I attempted the same thing with v.1.4.4 downloaded directly from open-mpi.org with similar results. Attached are the results of configure and make on v.1.4.3. Any help would be greatly appreciated.
<br>
<p>Peter Wells
<br>
HPC Intern
<br>
Center for Research Computing
<br>
University of Notre Dame
<br>
pwells2_at_[hidden]
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17637/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Previous message:</strong> <a href="17636.php">Mudassar Majeed: "Re: [OMPI users] Want to find LogGP parameters. Please help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Reply:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
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
