<?
$subject_val = "[OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 11:10:28 2009" -->
<!-- isoreceived="20090804151028" -->
<!-- sent="Tue, 4 Aug 2009 17:10:18 +0200" -->
<!-- isosent="20090804151018" -->
<!-- name="Hoelzlwimmer Andreas - S0810595005" -->
<!-- email="S0810595005_at_[hidden]" -->
<!-- subject="[OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)" -->
<!-- id="C199A1B3AACF2946BF3E11F97D4E295A7CCF4C_at_hagmxbe02.hagenberg.fhooe.at" -->
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
<strong>Subject:</strong> [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)<br>
<strong>From:</strong> Hoelzlwimmer Andreas - S0810595005 (<em>S0810595005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 11:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10201.php">Jean-Christophe Ducom: "[OMPI users] Kerberos ticket forwarding"</a>
<li><strong>Previous message:</strong> <a href="10199.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Reply:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've wanted to run MPI on a couple of PS3 here. According to a colleague who set it up, I had to set several HugePages. As the PS3 RAM is limited I had to allocate 2 HugePages. I ran HPL at first with the following command (out of a tutorial):
<br>
mpirun --mca btl_openib_want_fork_support 0 -np 1 numactl --physcpubind=0 ./xhpl : -np 1 numactl --physcpubind=1 ./xhpl
<br>
<p>Now as I had very little memory I had to disable some services. I did so (Wifi Service, Bluetooth, printing, unneeded). After running the same command again, I got the an error message (see below). Can anyone help me here, I have no idea what the error message actually means, and I can't find anything useful about it. It's running on Yellow Dog Linux, using OpenMPI 1.2.8
<br>
<p>Cheers,
<br>
Andreas Hoelzlwimmer
<br>
<p>Error Message:
<br>
[PS02:04815] *** Process received signal ***
<br>
[PS02:04815] Signal: Bus error (7)
<br>
[PS02:04815] Signal code:  (2)
<br>
[PS02:04815] Failing at address: 0x4000ca78008
<br>
[PS02:04816] *** Process received signal ***
<br>
[PS02:04816] Signal: Bus error (7)
<br>
[PS02:04816] Signal code:  (2)
<br>
[PS02:04816] Failing at address: 0x4000ca78008
<br>
[PS02:04816] [ 0] [0x1003e8]
<br>
[PS02:04816] [ 1] ./xhpl(HPL_hpalloc-0x17cc8c) [0x1001103c]
<br>
[PS02:04816] [ 2] ./xhpl(HPL_pdtest-0x17da40) [0x100101f8]
<br>
[PS02:04816] [ 3] ./xhpl(main-0x182f2c) [0x1000acdc]
<br>
[PS02:04816] [ 4] /lib64/libc.so.6 [0x80ca0e966c]
<br>
[PS02:04816] [ 5] /lib64/libc.so.6(__libc_start_main-0x1473e0) [0x80ca0e98e8]
<br>
[PS02:04816] *** End of error message ***
<br>
[PS02:04815] [ 0] [0x1003e8]
<br>
[PS02:04815] [ 1] ./xhpl(HPL_hpalloc-0x17cc8c) [0x1001103c]
<br>
[PS02:04815] [ 2] ./xhpl(HPL_pdtest-0x17da40) [0x100101f8]
<br>
[PS02:04815] [ 3] ./xhpl(main-0x182f2c) [0x1000acdc]
<br>
[PS02:04815] [ 4] /lib64/libc.so.6 [0x80ca0e966c]
<br>
[PS02:04815] [ 5] /lib64/libc.so.6(__libc_start_main-0x1473e0) [0x80ca0e98e8]
<br>
[PS02:04815] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 4815 on node PS02 exited on signal 7 (Bus error).
<br>
1 additional process aborted (not shown)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10200/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10201.php">Jean-Christophe Ducom: "[OMPI users] Kerberos ticket forwarding"</a>
<li><strong>Previous message:</strong> <a href="10199.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Reply:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
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
