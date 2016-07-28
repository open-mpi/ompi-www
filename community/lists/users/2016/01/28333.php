<?
$subject_val = "Re: [OMPI users] MPI hangs on poll_device() with rdma";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 03:33:03 2016" -->
<!-- isoreceived="20160122083303" -->
<!-- sent="Fri, 22 Jan 2016 16:32:22 +0800" -->
<!-- isosent="20160122083222" -->
<!-- name="Eva" -->
<!-- email="wuzhh01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs on poll_device() with rdma" -->
<!-- id="CAHgSaRQQ+ALik2OQfXvyS4cMJes9KQaXxmM557zRRLVquEH3dw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHgSaRTe33HZuvUnrbzfUo9pBzTrNAq+GH_dbZN+NFVGn-Jzjw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs on poll_device() with rdma<br>
<strong>From:</strong> Eva (<em>wuzhh01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 03:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28334.php">Paweł Jarzębski: "[OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="28327.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28322.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt;You can try a more recent version of openmpi
</span><br>
<span class="quotelev2">&gt;&gt;1.10.2 was released recently, or try with a nightly snapshot of master.
</span><br>
<p><span class="quotelev2">&gt;&gt;If all of these still fail, can you post a trimmed version of your
</span><br>
program so we can investigate ?
<br>
<p>Hi Gilles,
<br>
<p>I try 1.10.2. My program has been running successfully without any hang for
<br>
4 hours now. I will continue to watch its status.
<br>
<p>Btw, have you fixed any such hang issues from 1.8.5 to 1.10.2?
<br>
<p><p><p>2016-01-21 20:40 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Thanks Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;1. Can you create a small example to reproduce the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;2. The TCP and verbs-based transports use different thresholds and
</span><br>
<span class="quotelev1">&gt; protocols, and can sometimes bring to light errors in the application
</span><br>
<span class="quotelev1">&gt; (e.g., the application is making assumptions that just happen to be true
</span><br>
<span class="quotelev1">&gt; for TCP, but not necessarily for other transports).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;3. Is your program multi-threaded? If so, MPI_THREAD_MULTIPLE support in
</span><br>
<span class="quotelev1">&gt; the v1.8 and v1.10 series is not fully baked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;4. Additionally, if you have buffering / matching / progression
</span><br>
<span class="quotelev1">&gt; assumptions in your application, you might accidentally block. An
</span><br>
<span class="quotelev1">&gt; experiment to try to is to convert all MPI_SEND and MPI_ISEND to MPI_SSEND
</span><br>
<span class="quotelev1">&gt; and MPI_ISSEND, respectively, and see if your program still functions
</span><br>
<span class="quotelev1">&gt; properly on TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I will try to create a mall example to reproduce the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I didn't get your point. I didn't make any assumptions for TCP. Is
</span><br>
<span class="quotelev1">&gt; there any difference in MPI for TCP and RDMA?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. My program doesn't enable MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. what do you mean by buffering / matching / progression assumptions in
</span><br>
<span class="quotelev1">&gt; your application?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My program communicates like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4 processes: process0, 1, 2, 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; process1/process3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  foreach to_id in process0, process2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Send(send_buf, sendlen, to_id, TAG);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Recv(recv_buf, recvlen, to_id, TAG);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; process0/process2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       while(true):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MPI_recv(recv_buf, any_source, TAG);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MPI_Send(send_buf, source_id, TAG);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-21 17:49 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt; Actually, there are some more strange things.
</span><br>
<span class="quotelev2">&gt;&gt; With the same environment and MPI version, I write a simple program by
</span><br>
<span class="quotelev2">&gt;&gt; using the same communication logic with my hang program.
</span><br>
<span class="quotelev2">&gt;&gt; The simple program can work without hang.
</span><br>
<span class="quotelev2">&gt;&gt; So is there any possible reason?  I can try them one by one.
</span><br>
<span class="quotelev2">&gt;&gt; Or can I debug into the openib source code to find the root cause with
</span><br>
<span class="quotelev2">&gt;&gt; your instructions or guide?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-01-21 17:03 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;Can you try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;mpirun --mca btl tcp,self --mca btl_tcp_eager_limit 56 ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;and confirm it works fine with TCP *and* without eager ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tried this and it works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So what should I do next?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2016-01-21 16:25 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks Gilles.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it works fine on tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I use this to disable eager:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  -mca btl_openib_use_eager_rdma 0 -mca btl_openib_max_eager_rdma 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2016-01-21 13:10 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I run with two machines, 2 process per node: process0, process1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process2, process3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After some random rounds of communications, the communication hangs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I debug into the program, I found:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process1 sent a message to process2;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process2 received the message from process1 and then start to receive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; messages from other processes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But process1 doesn't get notice: process2 has received its message and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then hang on MPI_Send-&gt;...-&gt;poll_device() of rdmav2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #0  0x00007f6ba95f03e5 in ?? () from /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #1  0x00007f6bacf1ed93 in poll_device () from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #2  0x00007f6bacf1f7ed in btl_openib_component_progress () from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #3  0x00007f6bb06539da in opal_progress () from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/openmpi-1.8.5-gcc4.8/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #4  0x00007f6bab831f55 in mca_pml_ob1_send () from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/openmpi-1.8.5-gcc4.8/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #5  0x00007f6bb0df33c2 in PMPI_Send () from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/openmpi-1.8.5-gcc4.8/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Some experiments I have tried:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. compile openmpi without multi-thread enable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. --mca pml_ob1_use_early_completion 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. disable eager mode
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4. ssend, Bsend
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but it still hangs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The same program works fine on TCP for more than one year. After I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; move it onto rdma, it starts to hang. And I can't debug into any rdma
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; details
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2016-01-21 11:24 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Run MPI_Send on MPI1.8.5 without multithread enabled:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it hangs on mca_pml_ob1_send() -&gt; opal_progreses() -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component_progress() -&gt; poll_device() -&gt; libmlx4-rdmav2.so -&gt; cq
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -&gt; phread_spin_unlock
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The program can run on TCP with no error.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28333/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28334.php">Paweł Jarzębski: "[OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="28327.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28322.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
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
