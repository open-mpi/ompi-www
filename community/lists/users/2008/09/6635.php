<?
$subject_val = "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 22:22:48 2008" -->
<!-- isoreceived="20080920022248" -->
<!-- sent="Fri, 19 Sep 2008 19:22:44 -0700 (PDT)" -->
<!-- isosent="20080920022244" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..." -->
<!-- id="405709.20690.qm_at_web34806.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 22:22:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6636.php">Gabriele Fatigati: "Re: [OMPI users] MPI Finalize"</a>
<li><strong>Previous message:</strong> <a href="6634.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6637.php">Aurélien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6637.php">Aurélien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Maybe reply:</strong> <a href="6641.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi every one,
<br>
I need urgent help plz :-(
<br>
I am getting the following error when i run my program. OpenMPI compilation was all fine and went well, but now i dont understand the source of this error:
<br>
============================================
<br>
[node01:29264] *** Process received signal ***
<br>
[node01:29264] Signal: Segmentation fault (11)
<br>
[node01:29264] Signal code: Address not mapped (1)
<br>
[node01:29264] Failing at address: 0xcf
<br>
[node01:29264] [ 0] /lib/tls/libpthread.so.0 [0x7ccf80]
<br>
[node01:29264] [ 1] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(physicalGetId__C10CommPhyMPI+0x14) [0x8305880]
<br>
[node01:29264] [ 2] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(physicalCommGetId__Fv+0x43) [0x82ff81b]
<br>
[node01:29264] [ 3] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(openComm__16StandAloneLoader+0x1f) [0x80fdf43]
<br>
[node01:29264] [ 4] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(run__21ParallelMainSimulator+0x1640) [0x81ea53c]
<br>
[node01:29264] [ 5] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(main+0xde) [0x80a58ce]
<br>
[node01:29264] [ 6] /lib/tls/libc.so.6(__libc_start_main+0xda) [0xe3d79a]
<br>
[node01:29264] [ 7] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++(sinh+0x4d) [0x80a2221]
<br>
[node01:29264] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 29264 on node node01 exited on signal 11 (Segmentation fault). 
<br>
===========================================
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6636.php">Gabriele Fatigati: "Re: [OMPI users] MPI Finalize"</a>
<li><strong>Previous message:</strong> <a href="6634.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6637.php">Aurélien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6637.php">Aurélien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Maybe reply:</strong> <a href="6641.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
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
