<?
$subject_val = "[OMPI users] Runtime error only on one node.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 00:13:21 2009" -->
<!-- isoreceived="20090305051321" -->
<!-- sent="Thu, 05 Mar 2009 16:13:14 +1100" -->
<!-- isosent="20090305051314" -->
<!-- name="Shinta Bonnefoy" -->
<!-- email="shinta.bonnefoy_at_[hidden]" -->
<!-- subject="[OMPI users] Runtime error only on one node." -->
<!-- id="29133_1236230001_n255DGaC026461_49AF5F6A.2070703_at_anu.edu.au" -->
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
<strong>Subject:</strong> [OMPI users] Runtime error only on one node.<br>
<strong>From:</strong> Shinta Bonnefoy (<em>shinta.bonnefoy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 00:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8308.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8306.php">Jeff Layton: "[OMPI users] mlx4 error - looking for guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8338.php">Jeff Squyres: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>Reply:</strong> <a href="8338.php">Jeff Squyres: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>Maybe reply:</strong> <a href="8346.php">Shinta Bonnefoy: "Re: [OMPI users] Runtime error only on one node."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am the admin of a small cluster (server running under SLES 10.1 and
<br>
nodes on OSS 10.3).
<br>
and I have just installed openmpi 1.3 on it.
<br>
<p>I'm trying to get a simple program (like hello world) running but it
<br>
fails all the time on on of the node but never on the others.
<br>
<p>I don't think it's related to the program since it's the simplest on you
<br>
can write.
<br>
<p>All the nodes are sharing the openmpi install directory (trhough) nfs
<br>
and have all the same profile.
<br>
<p>Here is the runtime code error I've got :
<br>
mpirun -machinefile no  -np 6 ~/hello.x
<br>
--------------------------------------------------------------------------
<br>
[[6735,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: OpenFabrics (openib)
<br>
&nbsp;&nbsp;Host: node18
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
Hello world from process 3 of 6
<br>
Hello world from process 1 of 6
<br>
Hello world from process 4 of 6
<br>
Hello world from process 2 of 6
<br>
Hello world from process 5 of 6
<br>
Hello world from process 0 of 6
<br>
[node66:03997] *** Process received signal ***
<br>
[node66:03997] Signal: Segmentation fault (11)
<br>
[node66:03997] Signal code: Address not mapped (1)
<br>
[node66:03997] Failing at address: (nil)
<br>
[node66:03997] [ 0] /lib64/libpthread.so.0 [0x2b5e227a4fb0]
<br>
[node66:03997] [ 1] /usr/lib64/libibverbs.so.1(ibv_destroy_srq+0)
<br>
[0x2b5e24ee0fa0]
<br>
[node66:03997] [ 2]
<br>
/opt/cluster/software/openmpi/1.3/lib/openmpi/mca_btl_openib.so
<br>
[0x2b5e250eb2dd]
<br>
[node66:03997] [ 3]
<br>
/opt/cluster/software/openmpi/1.3/lib/libmpi.so.0(mca_btl_base_close+0x87)
<br>
[0x2b5e21aa2a67]
<br>
[node66:03997] [ 4]
<br>
/opt/cluster/software/openmpi/1.3/lib/openmpi/mca_bml_r2.so [0x2b5e24cc39d2]
<br>
[node66:03997] [ 5]
<br>
/opt/cluster/software/openmpi/1.3/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b5e24aa2d0e]
<br>
[node66:03997] [ 6]
<br>
/opt/cluster/software/openmpi/1.3/lib/libmpi.so.0(mca_pml_base_finalize+0x1b)
<br>
[0x2b5e21aacd2f]
<br>
[node66:03997] [ 7] /opt/cluster/software/openmpi/1.3/lib/libmpi.so.0
<br>
[0x2b5e21a66a7b]
<br>
[node66:03997] [ 8]
<br>
/opt/cluster/software/openmpi/1.3/lib/libmpi.so.0(MPI_Finalize+0x17)
<br>
[0x2b5e21a84207]
<br>
[node66:03997] [ 9] /home/donald/hello.x(main+0x6d) [0x401bd5]
<br>
[node66:03997] [10] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x2b5e229cfb54]
<br>
[node66:03997] [11] /home/donald/hello.x [0x401ad9]
<br>
[node66:03997] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 5 with PID 3997 on node node66 exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
[node72:07895] 4 more processes have sent help message
<br>
help-mpi-btl-base.txt / btl:no-nics
<br>
[node72:07895] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p><p><p><p>Please advise,
<br>
Thanks and regards,
<br>
SB
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8308.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8306.php">Jeff Layton: "[OMPI users] mlx4 error - looking for guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8338.php">Jeff Squyres: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>Reply:</strong> <a href="8338.php">Jeff Squyres: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>Maybe reply:</strong> <a href="8346.php">Shinta Bonnefoy: "Re: [OMPI users] Runtime error only on one node."</a>
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
