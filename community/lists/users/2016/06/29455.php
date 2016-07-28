<?
$subject_val = "[OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 11:06:07 2016" -->
<!-- isoreceived="20160615150607" -->
<!-- sent="Wed, 15 Jun 2016 15:05:50 +0000" -->
<!-- isosent="20160615150550" -->
<!-- name="Sasso, John (GE Power, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;failed to create queue pair&amp;quot; problem, but settings appear OK" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC52AAAB9F_at_CINURCNA10.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK<br>
<strong>From:</strong> Sasso, John (GE Power, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 11:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29456.php">Louis Williams: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Previous message:</strong> <a href="29454.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Maybe reply:</strong> <a href="29462.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In doing testing with IMB, I find that running a 4200+ core case with the IMB test Alltoall, and message lengths of 16..1024 bytes (as per -msglog 4:10 IMB option), it fails with:
<br>
<p>--------------------------------------------------------------------------
<br>
A process failed to create a queue pair. This usually means either
<br>
the device has run out of queue pairs (too many connections) or
<br>
there are insufficient resources available to allocate a queue pair
<br>
(out of memory). The latter can happen if either 1) insufficient
<br>
memory is available, or 2) no more physical memory can be registered
<br>
with the device.
<br>
<p>For more information on memory registration see the Open MPI FAQs at:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>Local host:             node7106
<br>
Local device:           mlx4_0
<br>
Queue pair type:        Reliable connected (RC)
<br>
--------------------------------------------------------------------------
<br>
[node7106][[51922,1],0][connect/btl_openib_connect_oob.c:867:rml_recv_cb] error in endpoint reply start connect
<br>
[node7106:06503] [[51922,0],0]-[[51922,1],0] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 6504 on
<br>
node node7106 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>Yes, these are ALL of the error messages.  I did not get a message about not being able to register enough memory.   I verified that log_num_mtt = 24  and log_mtts_per_seg = 0 (via catting of their files in /sys/module/mlx4_core/parameters and what is set in /etc/modprobe.d/mlx4_core.conf).  While such a large-scale job runs, I run 'vmstat 10' to examine memory usage, but there appears to be a good amount of memory still available and swap is never used.   In terms of settings in /etc/security/limits.conf:
<br>
<p>* soft memlock  unlimited
<br>
* hard memlock  unlimited
<br>
* soft stack 300000
<br>
* hard stack unlimited
<br>
<p>I don't know if btl_openib_connect_oob.c or mca_oob_tcp_msg_recv are clues, but I am now at a loss as to where the problem lies.
<br>
<p>This is for an application using OpenMPI 1.6.5, and the systems have Mellanox OFED 3.1.1 installed.
<br>
<p>--john
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29455/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29456.php">Louis Williams: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Previous message:</strong> <a href="29454.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Maybe reply:</strong> <a href="29462.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
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
