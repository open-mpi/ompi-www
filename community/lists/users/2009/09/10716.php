<?
$subject_val = "[OMPI users] How to create multi-thread parallel program using thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 00:09:11 2009" -->
<!-- isoreceived="20090922040911" -->
<!-- sent="Tue, 22 Sep 2009 12:09:06 +0800" -->
<!-- isosent="20090922040906" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="[OMPI users] How to create multi-thread parallel program using thread-safe send and recv?" -->
<!-- id="COL102-W1609734903C2BD74E663ADA8DC0_at_phx.gbl" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?<br>
<strong>From:</strong> guosong (<em>guosong1079_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 00:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10717.php">Mallikarjuna Shastry: "[OMPI users] error in ompi-checkpoint"</a>
<li><strong>Previous message:</strong> <a href="10715.php">Rolf Vandevaart: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I would like to write a multi-thread parallel program. I used pthread. Basicly, I want to create two background threads besides  the main thread(process). For example, if I use &quot;-np 4&quot;, the program should have 4 main processes on four processors and two background threads for each main process. So there should be 8 threads totally. I wrote a test program and it worked unpredictable. Sometimes I got the result I want, but sometimes the program got segmentation fault. I used MPI_Isend and MPI_Irecv for sending and recving. I do not know why? I attached the error message as follow:
<br>
<p>&nbsp;
<br>
<p>[cheetah:29780] *** Process received signal ***
<br>
[cheetah:29780] Signal: Segmentation fault (11)
<br>
[cheetah:29780] Signal code: Address not mapped (1)
<br>
[cheetah:29780] Failing at address: 0x10
<br>
[cheetah:29779] *** Process received signal ***
<br>
[cheetah:29779] Signal: Segmentation fault (11)
<br>
[cheetah:29779] Signal code: Address not mapped (1)
<br>
[cheetah:29779] Failing at address: 0x10
<br>
[cheetah:29780] [ 0] /lib64/libpthread.so.0 [0x334b00de70]
<br>
[cheetah:29780] [ 1] /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so [0x2b90e1227940]
<br>
[cheetah:29780] [ 2] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b90e05d61ca]
<br>
[cheetah:29780] [ 3] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b90e05cac86]
<br>
[cheetah:29780] [ 4] /act/openmpi/gnu/lib/libmpi.so.0(PMPI_Send+0x13d) [0x2b90dde7271d]
<br>
[cheetah:29780] [ 5] pt_muti(_Z6backIDPv+0x29b) [0x409929]
<br>
[cheetah:29780] [ 6] /lib64/libpthread.so.0 [0x334b0062f7]
<br>
[cheetah:29780] [ 7] /lib64/libc.so.6(clone+0x6d) [0x334a4d1e3d]
<br>
[cheetah:29780] *** End of error message ***
<br>
[cheetah:29779] [ 0] /lib64/libpthread.so.0 [0x334b00de70]
<br>
[cheetah:29779] [ 1] /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so [0x2b39785c0940]
<br>
[cheetah:29779] [ 2] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b397796f1ca]
<br>
[cheetah:29779] [ 3] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b3977963c86]
<br>
[cheetah:29779] [ 4] /act/openmpi/gnu/lib/libmpi.so.0(PMPI_Send+0x13d) [0x2b397520b71d]
<br>
[cheetah:29779] [ 5] pt_muti(_Z6backIDPv+0x29b) [0x409929]
<br>
[cheetah:29779] [ 6] /lib64/libpthread.so.0 [0x334b0062f7]
<br>
[cheetah:29779] [ 7] /lib64/libc.so.6(clone+0x6d) [0x334a4d1e3d]
<br>
[cheetah:29779] *** End of error message ***
<br>
<p><p>&nbsp;
<br>
<p>I used gdb to &quot;bt&quot; the error and I got :
<br>
<p>&nbsp;Program terminated with signal 11, Segmentation fault.
<br>
#0  0x00002b90e1227940 in mca_btl_sm_alloc ()
<br>
&nbsp;&nbsp;&nbsp;from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so
<br>
(gdb) bt
<br>
#0  0x00002b90e1227940 in mca_btl_sm_alloc ()
<br>
&nbsp;&nbsp;&nbsp;from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so
<br>
#1  0x00002b90e05d61ca in mca_pml_ob1_send_request_start_copy ()
<br>
&nbsp;&nbsp;&nbsp;from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
<br>
#2  0x00002b90e05cac86 in mca_pml_ob1_send ()
<br>
&nbsp;&nbsp;&nbsp;from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
<br>
#3  0x00002b90dde7271d in PMPI_Send () from /act/openmpi/gnu/lib/libmpi.so.0
<br>
#4  0x0000000000409929 in backID (arg=0x0) at pt_muti.cpp:50
<br>
#5  0x000000334b0062f7 in start_thread () from /lib64/libpthread.so.0
<br>
#6  0x000000334a4d1e3d in clone () from /lib64/libc.so.6
<br>
So can anyone give me some suggestions or advice. Thanks very much.  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
&#201;&#207;Windows Live &#214;&#208;&#185;&#250;&#202;&#215;&#210;&#179;&#163;&#172;&#207;&#194;&#212;&#216;&#215;&#238;&#208;&#194;&#176;&#230;Messenger&#163;&#161;
<br>
<a href="http://www.windowslive.cn">http://www.windowslive.cn</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10716/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10717.php">Mallikarjuna Shastry: "[OMPI users] error in ompi-checkpoint"</a>
<li><strong>Previous message:</strong> <a href="10715.php">Rolf Vandevaart: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
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
