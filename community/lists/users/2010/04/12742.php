<?
$subject_val = "[OMPI users] Not getting mpi.mod file from openmpi build and install";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 20:10:41 2010" -->
<!-- isoreceived="20100423001041" -->
<!-- sent="Thu, 22 Apr 2010 18:10:26 -0600" -->
<!-- isosent="20100423001026" -->
<!-- name="Price, Brian M (N-KCI)" -->
<!-- email="brian.m.price_at_[hidden]" -->
<!-- subject="[OMPI users] Not getting mpi.mod file from openmpi build and install" -->
<!-- id="07E77CF9C426584F8126A762FD1AFEA4145C044182_at_HDXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Not getting mpi.mod file from openmpi build and install<br>
<strong>From:</strong> Price, Brian M (N-KCI) (<em>brian.m.price_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 20:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12743.php">Pankatz, Klaus: "[OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12741.php">Eugene Loh: "Re: [OMPI users] program with MPI enabled subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12758.php">Jeff Squyres: "Re: [OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<li><strong>Reply:</strong> <a href="12758.php">Jeff Squyres: "Re: [OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI version: 1.3.3
<br>
Platform: IBM P5
<br>
<p>If I configure with just the --prefix option for where to install, and then run &quot;make all install&quot;, I get an &quot;mpi.mod&quot; file in the &quot;lib&quot; directory of the prefix directory I specified.  ALL GOOD!
<br>
<p>When I add compiler options to the configure script (e.g. &quot;CC=xlC_r CXX=xlC_r FC=xlf95_r&quot;), I no longer get the &quot;mpi.mod&quot; file.
<br>
<p>I have traced this to the Makefile in the &quot;ompi/mpi/f90&quot; directory.  When I add the compiler options to the configure script, a bunch of lines get commented out of the Makefile, including the ones that look like they build the &quot;mpi.mod&quot; file.
<br>
<p>Can anyone tell me why this happens?
<br>
<p>Thanks.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12742/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12743.php">Pankatz, Klaus: "[OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12741.php">Eugene Loh: "Re: [OMPI users] program with MPI enabled subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12758.php">Jeff Squyres: "Re: [OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<li><strong>Reply:</strong> <a href="12758.php">Jeff Squyres: "Re: [OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
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
