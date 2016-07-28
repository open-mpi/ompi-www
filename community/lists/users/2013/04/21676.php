<?
$subject_val = "[OMPI users] openmpi-1.7 failed to build on Centos 6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 15:20:10 2013" -->
<!-- isoreceived="20130404192010" -->
<!-- sent="Thu, 4 Apr 2013 15:19:42 -0400" -->
<!-- isosent="20130404191942" -->
<!-- name="Limin Gu" -->
<!-- email="lgu_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.7 failed to build on Centos 6.4" -->
<!-- id="CAAU_HgZwMr-_Ps5P+B=4gUTUJJvQ76b4yBERGnzeLqzMp23TDw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.7 failed to build on Centos 6.4<br>
<strong>From:</strong> Limin Gu (<em>lgu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 15:19:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Previous message:</strong> <a href="21675.php">Yevgeny Popkov: "[OMPI users] Fwd: network related MPI errors on Amazon EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Reply:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I downloaded openmpi-1.7, but it failed to build on Centos 6.4 with
<br>
following error:
<br>
<p>make[10]: Entering directory
<br>
`/root/openmpi/openmpi-1.7/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
<br>
&nbsp;&nbsp;CC       otfmerge_mpi-handler.o
<br>
&nbsp;&nbsp;CC       otfmerge_mpi-otfmerge.o
<br>
&nbsp;&nbsp;CCLD     otfmerge-mpi
<br>
/root/openmpi/openmpi-1.7/ompi/contrib/vt/vt/../../../.libs/libmpi.so:
<br>
undefined reference to `opal_memory_linux_malloc_init_hook'
<br>
collect2: ld returned 1 exit status
<br>
make[10]: *** [otfmerge-mpi] Error 1
<br>
<p><p>And this is my configure options:
<br>
<p>&nbsp;./configure --with-udapl --with-tm --with-openib --disable-dlopen
<br>
--without-slurm --without-mx --without-lsf --without-loadleveler
<br>
--without-memory-manager --with-memory-manager=no --with-psm CC=gcc CXX=g++
<br>
F77=gfortran FC=gfortran
<br>
<p>Thank you!
<br>
<p>Limin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21676/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Previous message:</strong> <a href="21675.php">Yevgeny Popkov: "[OMPI users] Fwd: network related MPI errors on Amazon EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Reply:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
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
