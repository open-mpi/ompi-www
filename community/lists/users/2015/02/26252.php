<?
$subject_val = "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 23:53:38 2015" -->
<!-- isoreceived="20150202045338" -->
<!-- sent="Sun, 1 Feb 2015 20:53:34 -0800" -->
<!-- isosent="20150202045334" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="47AEA340-10C4-42C2-9BCF-7066074CB54C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54C695A1.3080307_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-01 23:53:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26253.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>Previous message:</strong> <a href="26251.php">Ralph Castain: "Re: [OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26235.php">Evan: "[OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26261.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26261.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I can reproduce it - but I won&#226;&#128;&#153;t have time to address it until I return later this week.
<br>
<p>Whether or not procs get spawned onto a remote host depends on the number of local slots. You asked for 8 processes, so if there are more than 8 slots on the node, then it will launch them all on the local node. If you want to spread them across nodes, you need to use &#226;&#128;&#148;map-by node
<br>
<p>Also, FWIW: this job will &#226;&#128;&#156;hang&#226;&#128;&#157; as the spawned procs (&#226;&#128;&#156;hostname&#226;&#128;&#157;) never call MPI_Init. You can only use MPI_Comm_spawn to launch MPI processes as the spawning parent will blissfully wait forever for the child processes to call MPI_Connect.
<br>
<p><p><span class="quotelev1">&gt; On Jan 26, 2015, at 11:29 AM, Evan &lt;evan.samanas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.8.4 on a Ubuntu 14.04 machine and 5 Ubuntu 12.04 machines.  I am using ssh to launch MPI jobs and I'm able to run simple programs like 'mpirun -np 8 --host localhost,pachy1 hostname' and get the expected output (pachy1 being an entry in my /etc/hosts file).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I started using MPI_Comm_spawn in my app with the intent of NOT calling mpirun to launch the program that calls MPI_Comm_spawn (my attempt at using the Singleton MPI_INIT pattern described in 10.5.2 of MPI 3.0 standard).  The app needs to launch an MPI job of a given size from a given hostfile, where the job needs to report some info back to the app, so it seemed MPI_Comm_spawn was my best bet.  The app is only rarely going to be used this way, thus mpirun not being used to launch the app that is the parent in the MPI_Comm_spawn operation.  This pattern works fine if the only entries in the hostfile are 'localhost'.  However if I add a host that isn't local I get a segmentation fault from the orted process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In any case, I distilled my example down as small as I could.  I've attached the C code of the master and the hostfile I'm using. Here's the output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ ./master ~/mpi/test_distributed.hostfile
</span><br>
<span class="quotelev1">&gt; [lasarti:32020] [[21014,1],0] FORKING HNP: orted --hnp --set-sid --report-uri 14 --singleton-died-pipe 15 -mca state_novm_select 1 -mca ess_base_jobid 1377173504
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x7f07af039340]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 1] /opt/openmpi-1.8.4/lib/libopen-pal.so.6(opal_hwloc191_hwloc_get_obj_by_depth+0x32)[0x7f07aea227c2]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 2] /opt/openmpi-1.8.4/lib/libopen-pal.so.6(opal_hwloc_base_get_nbobjs_by_type+0x90)[0x7f07ae9f5430]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 3] /opt/openmpi-1.8.4/lib/openmpi/mca_rmaps_round_robin.so(orte_rmaps_rr_byobj+0x134)[0x7f07ab2fb154]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 4] /opt/openmpi-1.8.4/lib/openmpi/mca_rmaps_round_robin.so(+0x12c6)[0x7f07ab2fa2c6]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 5] /opt/openmpi-1.8.4/lib/libopen-rte.so.7(orte_rmaps_base_map_job+0x21a)[0x7f07af299f7a]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 6] /opt/openmpi-1.8.4/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x6e4)[0x7f07ae9e7034]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 7] /opt/openmpi-1.8.4/lib/libopen-rte.so.7(orte_daemon+0xdff)[0x7f07af27a86f]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 8] orted(main+0x47)[0x400877]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [ 9] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f07aec84ec5]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] [10] orted[0x4008cb]
</span><br>
<span class="quotelev1">&gt; [lasarti:32022] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I launch 'master.c' using mpirun, I don't get a segmentation fault, but it doesn't seem to be launching the process on anything more than localhost, no matter what hostfile I give it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For what it's worth, I fully expected to debug some path issues regarding the binary I wanted to launch with MPI_Comm_spawn when I used this distributed, but this error at first glance doesn't appear to have anything to do with that.  I'm sure this is something silly I'm doing wrong, but I don't really know how to debug this further given this error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Evan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. Only including zipped config.log since the &quot;ompi_info -v ompi full --parsable&quot; command I got from <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> doesn't seem to work anymore.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;master.c&gt;&lt;test_distributed.hostfile&gt;&lt;config.log.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26235.php">http://www.open-mpi.org/community/lists/users/2015/01/26235.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26253.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>Previous message:</strong> <a href="26251.php">Ralph Castain: "Re: [OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26235.php">Evan: "[OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26261.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26261.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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
