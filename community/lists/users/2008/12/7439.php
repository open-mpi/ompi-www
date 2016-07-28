<?
$subject_val = "[OMPI users] Problem with feupdateenv";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  7 09:50:33 2008" -->
<!-- isoreceived="20081207145033" -->
<!-- sent="Sun, 7 Dec 2008 20:20:28 +0530" -->
<!-- isosent="20081207145028" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with feupdateenv" -->
<!-- id="cb60cbc40812070650u2f2cb839ree50a086be176cde_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with feupdateenv<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-07 09:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7440.php">Brian Dobbins: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Previous message:</strong> <a href="7438.php">Douglas Guptill: "[OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7440.php">Brian Dobbins: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Reply:</strong> <a href="7440.php">Brian Dobbins: "Re: [OMPI users] Problem with feupdateenv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>Installed Open MPI 1.2.8 with Intel C++compilers on Cent OS 4.5 based
<br>
Rocks 4.3 linux cluster (&amp; Voltaire infiniband). Installation was
<br>
smooth.
<br>
<p>The following error occurred during compilation:
<br>
<p># mpicc hellompi.c -o hellompi
<br>
/opt/intel/cce/10.1.018/lib/libimf.so: warning: warning: feupdateenv
<br>
is not implemented and will always fail
<br>
<p>It produced the executable. But during execution it failed with
<br>
Segmentation fault:
<br>
<p>&nbsp;# which mpirun
<br>
/opt/openmpi_intel/1.2.8/bin/mpirun
<br>
# mpirun -np 2 ./hellompi
<br>
./hellompi: Symbol `ompi_mpi_comm_world' has different size in shared
<br>
object, consider re-linking
<br>
./hellompi: Symbol `ompi_mpi_comm_world' has different size in shared
<br>
object, consider re-linking
<br>
[master:17781] *** Process received signal ***
<br>
[master:17781] Signal: Segmentation fault (11)
<br>
[master:17781] Signal code: Address not mapped (1)
<br>
[master:17781] Failing at address: 0x10
<br>
[master:17781] [ 0] /lib64/tls/libpthread.so.0 [0x34b150c4f0]
<br>
[master:17781] [ 1] /usr/lib64/openmpi/libmpi.so.0 [0x34b19544b8]
<br>
[master:17781] [ 2]
<br>
/usr/lib64/openmpi/libmpi.so.0(ompi_proc_init+0x14d) [0x34b1954cfd]
<br>
[master:17781] [ 3] /usr/lib64/openmpi/libmpi.so.0(ompi_mpi_init+0xba)
<br>
[0x34b19567da]
<br>
[master:17781] [ 4] /usr/lib64/openmpi/libmpi.so.0(MPI_Init+0x94) [0x34b1977ab4]
<br>
[master:17781] [ 5] ./hellompi(main+0x44) [0x401c0c]
<br>
[master:17781] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x34b0e1c3fb]
<br>
[master:17781] [ 7] ./hellompi [0x401b3a]
<br>
[master:17781] *** End of error message ***
<br>
[master:17778] [0,0,0]-[0,1,1] mca_oob_tcp_msg_recv: readv failed:
<br>
Connection reset by peer (104)
<br>
mpirun noticed that job rank 0 with PID 17781 on node master exited on
<br>
signal 11 (Segmentation fault).
<br>
1 additional process aborted (not shown)
<br>
<p>But this is not the case, during non-mpi c code compilation or execution.
<br>
<p># icc sample.c -o sample
<br>
# ./sample
<br>
<p>Compiler is working
<br>
#
<br>
<p>What might be the reason for this &amp; how it can be resolved?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7440.php">Brian Dobbins: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Previous message:</strong> <a href="7438.php">Douglas Guptill: "[OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7440.php">Brian Dobbins: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>Reply:</strong> <a href="7440.php">Brian Dobbins: "Re: [OMPI users] Problem with feupdateenv"</a>
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
