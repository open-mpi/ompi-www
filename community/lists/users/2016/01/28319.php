<?
$subject_val = "Re: [OMPI users] OMPI users] MPI hangs on poll_device() with rdma";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 04:41:46 2016" -->
<!-- isoreceived="20160121094146" -->
<!-- sent="Thu, 21 Jan 2016 18:41:35 +0900" -->
<!-- isosent="20160121094135" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI hangs on poll_device() with rdma" -->
<!-- id="e5u1gytjnrcer23blud10t7v.1453369295394_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] MPI hangs on poll_device() with rdma" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI hangs on poll_device() with rdma<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 04:41:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28320.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28318.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can try a more recent version of openmpi
<br>
1.10.2 was released recently, or try with a nightly snapshot of master.
<br>
<p>If all of these still fail, can you post a trimmed version of your program so we can investigate ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Eva &lt;wuzhh01_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Can you try to&#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;mpirun --mca btl tcp,self --mca btl_tcp_eager_limit 56 ...&#194;&#160;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;and confirm it works fine with TCP *and* without eager ?&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have tried this and it works.&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So what should I do next?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2016-01-21 16:25 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks Gilles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;it works fine on tcp&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So I use this to disable eager:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;-mca btl_openib_use_eager_rdma 0 -mca btl_openib_max_eager_rdma 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2016-01-21 13:10 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I run with two machines, 2 process per node: process0, process1, process2, process3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;After some random rounds of communications, the communication hangs. When I debug into the program, I found:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;process1 sent a message to process2;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;process2 received the message from process1 and then start to receive messages from other processes.&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But process1 doesn't get notice: process2 has received its message and then hang on MPI_Send-&gt;...-&gt;poll_device() of rdmav2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#0 &#194;&#160;0x00007f6ba95f03e5 in ?? () from /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#1 &#194;&#160;0x00007f6bacf1ed93 in poll_device () from /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#2 &#194;&#160;0x00007f6bacf1f7ed in btl_openib_component_progress () from /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#3 &#194;&#160;0x00007f6bb06539da in opal_progress () from /home/openmpi-1.8.5-gcc4.8/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#4 &#194;&#160;0x00007f6bab831f55 in mca_pml_ob1_send () from /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#5 &#194;&#160;0x00007f6bb0df33c2 in PMPI_Send () from /home/openmpi-1.8.5-gcc4.8/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Some experiments I have tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. compile openmpi without multi-thread enable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2.&#194;&#160;--mca pml_ob1_use_early_completion 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3. disable eager mode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4. ssend, Bsend
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;but it still hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The same program works fine on TCP for more than one year. After I move it onto rdma, it starts to hang. And I can't debug into any rdma details
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2016-01-21 11:24 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Run MPI_Send on MPI1.8.5 without multithread enabled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;it hangs on mca_pml_ob1_send() -&gt; opal_progreses() -&gt; btl_openib_component_progress() -&gt; poll_device() -&gt; libmlx4-rdmav2.so -&gt; cq -&gt; phread_spin_unlock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The program can run on TCP with no error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28319/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28320.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28318.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
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
