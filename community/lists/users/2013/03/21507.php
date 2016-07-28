<?
$subject_val = "[OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  6 12:55:29 2013" -->
<!-- isoreceived="20130306175529" -->
<!-- sent="Wed, 6 Mar 2013 12:55:05 -0500" -->
<!-- isosent="20130306175505" -->
<!-- name="Limin Gu" -->
<!-- email="lgu_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c" -->
<!-- id="CAAU_HgZ82jPyVtAYGMc9ySRX8p0GDFwV0s0+E=o98uDEzvuTEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c<br>
<strong>From:</strong> Limin Gu (<em>lgu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-06 12:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21506.php">Smith, Brian E.: "[OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have successfully built openmpi-1.6.3 and many previous openmpi versions
<br>
on both RHEL5 and RHEL6, for the new openmpi-1.6.4 I do the same configure,
<br>
make and install as before, but the resulting mpicc does not compile
<br>
hello_c.c.
<br>
<p>I have PATH and LD_LIBRARY_PATH set correctly.
<br>
<p>[root_at_tesla examples]# echo $LD_LIBRARY_PATH
<br>
/opt/scyld/openmpi/1.6.4/gnu/lib
<br>
[root_at_tesla examples]# which mpicc
<br>
/opt/scyld/openmpi/1.6.4/gnu/bin/mpicc
<br>
[root_at_tesla examples]# mpicc -o hello_c hello_c.c
<br>
/tmp/ccuZg1I9.o: In function `main':
<br>
hello_c.c:(.text+0x1d): undefined reference to `ompi_mpi_comm_world'
<br>
hello_c.c:(.text+0x2b): undefined reference to `ompi_mpi_comm_world'
<br>
collect2: ld returned 1 exit status
<br>
[root_at_tesla examples]#
<br>
<p>But mpicxx does compile:
<br>
[root_at_tesla examples]# which mpicxx
<br>
/opt/scyld/openmpi/1.6.4/gnu/bin/mpicxx
<br>
[root_at_tesla examples]# mpicxx -o hello_cxx hello_cxx.cc
<br>
[root_at_tesla examples]#
<br>
<p>Any idea about what is wrong here? I have the same error on both RHEL5 and
<br>
RHEL6 systems.
<br>
<p>Thank you!
<br>
<p>Limin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21507/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21506.php">Smith, Brian E.: "[OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
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
