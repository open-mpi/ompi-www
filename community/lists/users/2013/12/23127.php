<?
$subject_val = "[OMPI users] can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 00:23:31 2013" -->
<!-- isoreceived="20131203052331" -->
<!-- sent="Tue, 3 Dec 2013 13:23:22 +0800" -->
<!-- isosent="20131203052322" -->
<!-- name="&#186;&#250;&#209;&#238;" -->
<!-- email="781578278_at_[hidden]" -->
<!-- subject="[OMPI users] can you help me please ?thanks" -->
<!-- id="tencent_14E1C2571FD810151CBC8DA6_at_qq.com" -->
<!-- charset="gb18030" -->
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
<strong>Subject:</strong> [OMPI users] can you help me please ?thanks<br>
<strong>From:</strong> &#186;&#250;&#209;&#238; (<em>781578278_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 00:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23126.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A simple program at my 4-node ROCKS cluster runs fine with command:
<br>
/opt/openmpi/bin/mpirun -np 4 -machinefile machines ./sort_mpi6
<br>

<br>

<br>
Another bigger programs runs fine on the head node only with command:
<br>

<br>
cd ./sphere; /opt/openmpi/bin/mpirun -np 4 ../bin/sort_mpi6
<br>

<br>
But with the command:
<br>

<br>
cd /sphere; /opt/openmpi/bin/mpirun -np 4 -machinefile ../machines
<br>
../bin/sort_mpi6
<br>

<br>
It gives output that:
<br>

<br>
../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
<br>
shared object file: No such file or directory<br>
<p>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23126.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
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
