<?
$subject_val = "[OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 19:54:53 2015" -->
<!-- isoreceived="20150618235453" -->
<!-- sent="Thu, 18 Jun 2015 23:54:50 +0000" -->
<!-- isosent="20150618235450" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EDC41A_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-18 19:54:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27160.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27158.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27160.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27160.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having a strange problem w/OpenMPI 1.8.6. If I run
<br>
my OpenMPI test code (compiled against OpenMPI 1.8.6
<br>
libraries) on &lt; 131 slots I get no issues. Anything over 131
<br>
errors out:
<br>
<p>mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/ --hostfile hostfile-single --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus /hpc/home/lanew/mpi/openmpi/ProcessColors3
<br>
<p>The hostfile has the number of slots restricted
<br>
to the number of cores, while the max-slots includes
<br>
the hyperthreading cores (e.g. csclprd3-0-0 slots=6
<br>
max-slots=12).
<br>
<p>The nodes are a mix of IBM x3550 nodes some
<br>
are Sandybridges and others are older Xeons.
<br>
<p>I would like to add that the submit node from
<br>
which I am launching mpirun has the open files
<br>
soft limit (ulimit -a) set to 1024, while the hard limit
<br>
(ulimit -Ha) is set to 4096. I know open file limits
<br>
were an issue w/an older version of OpenMPI. The
<br>
compute nodes all have their hard open files limit
<br>
and soft open files limits set to 4096.
<br>
<p>Here's the output (csclprd3-0-13 is the last node
<br>
listed in the hostfile hostfile-single):
<br>
<p>[csclprd3-0-13:28765] Signal: Bus error (7)
<br>
[csclprd3-0-13:28765] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28765] Failing at address: 0x7f30002a8980
<br>
[csclprd3-0-13:28766] *** Process received signal ***
<br>
[csclprd3-0-13:28766] Signal: Bus error (7)
<br>
[csclprd3-0-13:28766] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28766] Failing at address: 0x7fe137662880
<br>
[csclprd3-0-13:28768] *** Process received signal ***
<br>
[csclprd3-0-13:28768] Signal: Bus error (7)
<br>
[csclprd3-0-13:28768] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28768] Failing at address: 0x7f9b40228a80
<br>
[csclprd3-0-13:28770] *** Process received signal ***
<br>
[csclprd3-0-13:28770] Signal: Bus error (7)
<br>
[csclprd3-0-13:28770] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28770] Failing at address: 0x7f0de7f2bb00
<br>
[csclprd3-0-13:28767] *** Process received signal ***
<br>
[csclprd3-0-13:28767] Signal: Bus error (7)
<br>
[csclprd3-0-13:28767] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28767] Failing at address: 0x7f9b6c2e8980
<br>
[csclprd3-0-13:28764] *** Process received signal ***
<br>
[csclprd3-0-13:28764] Signal: Bus error (7)
<br>
[csclprd3-0-13:28764] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28765] Signal: Bus error (7)
<br>
[csclprd3-0-13:28765] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28765] Failing at address: 0x7f30002a8980
<br>
[csclprd3-0-13:28766] *** Process received signal ***
<br>
[csclprd3-0-13:28766] Signal: Bus error (7)
<br>
[csclprd3-0-13:28766] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28766] Failing at address: 0x7fe137662880
<br>
[csclprd3-0-13:28768] *** Process received signal ***
<br>
[csclprd3-0-13:28768] Signal: Bus error (7)
<br>
[csclprd3-0-13:28768] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28768] Failing at address: 0x7f9b40228a80
<br>
[csclprd3-0-13:28770] *** Process received signal ***
<br>
[csclprd3-0-13:28770] Signal: Bus error (7)
<br>
[csclprd3-0-13:28770] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28770] Failing at address: 0x7f0de7f2bb00
<br>
[csclprd3-0-13:28767] *** Process received signal ***
<br>
[csclprd3-0-13:28767] Signal: Bus error (7)
<br>
[csclprd3-0-13:28767] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28767] Failing at address: 0x7f9b6c2e8980
<br>
[csclprd3-0-13:28764] *** Process received signal ***
<br>
[csclprd3-0-13:28764] Signal: Bus error (7)
<br>
[csclprd3-0-13:28764] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:28768] [ 3] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f9b513ad110]
<br>
[csclprd3-0-13:28768] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x219)[0x7f0df77b6009]
<br>
[csclprd3-0-13:28770] [ 3] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f0df77b6110]
<br>
[csclprd3-0-13:28770] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f9b5141d68e]
<br>
[csclprd3-0-13:28768] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f9b514f1715]
<br>
[csclprd3-0-13:28768] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f30115ea68e]
<br>
[csclprd3-0-13:28765] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f30116be715]
<br>
[csclprd3-0-13:28765] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f9b7bb3b68e]
<br>
[csclprd3-0-13:28767] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f9b7bc0f715]
<br>
[csclprd3-0-13:28767] [ 6] [csclprd3-0-13:28764] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7fa946bb768e]
<br>
[csclprd3-0-13:28764] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7fe146d4068e]
<br>
[csclprd3-0-13:28766] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f0df782668e]
<br>
[csclprd3-0-13:28770] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f0df78fa715]
<br>
[csclprd3-0-13:28770] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f0df77d0ad6]
<br>
[csclprd3-0-13:28770] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fe146e14715]
<br>
[csclprd3-0-13:28766] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fe146ceaad6]
<br>
[csclprd3-0-13:28766] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f9b513c7ad6]
<br>
[csclprd3-0-13:28768] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f9b513e6c60]
<br>
[csclprd3-0-13:28768] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:28768] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9b50dc7cdd]
<br>
[csclprd3-0-13:28768] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:28768] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f3011594ad6]
<br>
[csclprd3-0-13:28765] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f30115b3c60]
<br>
[csclprd3-0-13:28765] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:28765] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f3010f94cdd]
<br>
[csclprd3-0-13:28765] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:28765] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f9b7bae5ad6]
<br>
[csclprd3-0-13:28767] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f9b7bb04c60]
<br>
[csclprd3-0-13:28767] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:28767] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9b7b4e5cdd]
<br>
[csclprd3-0-13:28767] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:28767] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fa946c8b715]
<br>
[csclprd3-0-13:28764] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fa946b61ad6]
<br>
[csclprd3-0-13:28764] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f0df77efc60]
<br>
[csclprd3-0-13:28770] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:28770] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f0df71d0cdd]
<br>
[csclprd3-0-13:28770] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:28770] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fe146d09c60]
<br>
[csclprd3-0-13:28766] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:28766] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe1466eacdd]
<br>
[csclprd3-0-13:28767] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fa946c8b715]
<br>
[csclprd3-0-13:28764] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fa946b61ad6]
<br>
[csclprd3-0-13:28764] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f0df77efc60]
<br>
[csclprd3-0-13:28770] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:28770] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f0df71d0cdd]
<br>
[csclprd3-0-13:28770] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:28770] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fe146d09c60]
<br>
[csclprd3-0-13:28766] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:28766] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe1466eacdd]
<br>
[csclprd3-0-13:28766] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:28766] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fa946b80c60]
<br>
[csclprd3-0-13:28764] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:28764] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fa946561cdd]
<br>
[csclprd3-0-13:28764] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:28764] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 126 with PID 0 on node csclprd3-0-13 exited on signal 7 (Bus error).
<br>
<p>Could a lack of the necessary NUMA libraries or the wrong version of NUMA
<br>
libraries be contributing to this?
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27160.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27158.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27160.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27160.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
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
