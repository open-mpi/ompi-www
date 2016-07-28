<?
$subject_val = "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 00:18:44 2015" -->
<!-- isoreceived="20150203051844" -->
<!-- sent="Mon, 2 Feb 2015 21:18:43 -0800" -->
<!-- isosent="20150203051843" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="CAMD57oeZeU4Ae2xsgy-60yLB50D38nrQqSTLE_JXdiF_8Obqgg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="47AEA340-10C4-42C2-9BCF-7066074CB54C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-02-03 00:18:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26262.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>Previous message:</strong> <a href="26260.php">haozi : "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>In reply to:</strong> <a href="26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW: I've confirmed this only happens if you provide the hostfile info key.
<br>
A simple comm_spawn without the hostfile key works just fine.
<br>
<p><p>On Sun, Feb 1, 2015 at 8:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, I can reproduce it - but I won&#226;&#128;&#153;t have time to address it until I
</span><br>
<span class="quotelev1">&gt; return later this week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whether or not procs get spawned onto a remote host depends on the number
</span><br>
<span class="quotelev1">&gt; of local slots. You asked for 8 processes, so if there are more than 8
</span><br>
<span class="quotelev1">&gt; slots on the node, then it will launch them all on the local node. If you
</span><br>
<span class="quotelev1">&gt; want to spread them across nodes, you need to use &#226;&#128;&#148;map-by node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, FWIW: this job will &#226;&#128;&#156;hang&#226;&#128;&#157; as the spawned procs (&#226;&#128;&#156;hostname&#226;&#128;&#157;) never
</span><br>
<span class="quotelev1">&gt; call MPI_Init. You can only use MPI_Comm_spawn to launch MPI processes as
</span><br>
<span class="quotelev1">&gt; the spawning parent will blissfully wait forever for the child processes to
</span><br>
<span class="quotelev1">&gt; call MPI_Connect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 26, 2015, at 11:29 AM, Evan &lt;evan.samanas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using OpenMPI 1.8.4 on a Ubuntu 14.04 machine and 5 Ubuntu 12.04
</span><br>
<span class="quotelev1">&gt; machines.  I am using ssh to launch MPI jobs and I'm able to run simple
</span><br>
<span class="quotelev1">&gt; programs like 'mpirun -np 8 --host localhost,pachy1 hostname' and get the
</span><br>
<span class="quotelev1">&gt; expected output (pachy1 being an entry in my /etc/hosts file).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I started using MPI_Comm_spawn in my app with the intent of NOT calling
</span><br>
<span class="quotelev1">&gt; mpirun to launch the program that calls MPI_Comm_spawn (my attempt at using
</span><br>
<span class="quotelev1">&gt; the Singleton MPI_INIT pattern described in 10.5.2 of MPI 3.0 standard).
</span><br>
<span class="quotelev1">&gt; The app needs to launch an MPI job of a given size from a given hostfile,
</span><br>
<span class="quotelev1">&gt; where the job needs to report some info back to the app, so it seemed
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn was my best bet.  The app is only rarely going to be used
</span><br>
<span class="quotelev1">&gt; this way, thus mpirun not being used to launch the app that is the parent
</span><br>
<span class="quotelev1">&gt; in the MPI_Comm_spawn operation.  This pattern works fine if the only
</span><br>
<span class="quotelev1">&gt; entries in the hostfile are 'localhost'.  However if I add a host that
</span><br>
<span class="quotelev1">&gt; isn't local I get a segmentation fault from the orted process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In any case, I distilled my example down as small as I could.  I've
</span><br>
<span class="quotelev1">&gt; attached the C code of the master and the hostfile I'm using. Here's the
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ ./master
</span><br>
<span class="quotelev1">&gt; ~/mpi/test_distributed.hostfile
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32020] [[21014,1],0] FORKING HNP: orted --hnp --set-sid
</span><br>
<span class="quotelev1">&gt; --report-uri 14 --singleton-died-pipe 15 -mca state_novm_select 1 -mca
</span><br>
<span class="quotelev1">&gt; ess_base_jobid 1377173504
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x7f07af039340]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 1]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.4/lib/libopen-pal.so.6(opal_hwloc191_hwloc_get_obj_by_depth+0x32)[0x7f07aea227c2]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.4/lib/libopen-pal.so.6(opal_hwloc_base_get_nbobjs_by_type+0x90)[0x7f07ae9f5430]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 3]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.4/lib/openmpi/mca_rmaps_round_robin.so(orte_rmaps_rr_byobj+0x134)[0x7f07ab2fb154]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 4]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.4/lib/openmpi/mca_rmaps_round_robin.so(+0x12c6)[0x7f07ab2fa2c6]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 5]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.4/lib/libopen-rte.so.7(orte_rmaps_base_map_job+0x21a)[0x7f07af299f7a]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 6]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.4/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x6e4)[0x7f07ae9e7034]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 7]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.4/lib/libopen-rte.so.7(orte_daemon+0xdff)[0x7f07af27a86f]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 8] orted(main+0x47)[0x400877]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [ 9]
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f07aec84ec5]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] [10] orted[0x4008cb]
</span><br>
<span class="quotelev2">&gt; &gt; [lasarti:32022] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I launch 'master.c' using mpirun, I don't get a segmentation fault,
</span><br>
<span class="quotelev1">&gt; but it doesn't seem to be launching the process on anything more than
</span><br>
<span class="quotelev1">&gt; localhost, no matter what hostfile I give it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For what it's worth, I fully expected to debug some path issues
</span><br>
<span class="quotelev1">&gt; regarding the binary I wanted to launch with MPI_Comm_spawn when I used
</span><br>
<span class="quotelev1">&gt; this distributed, but this error at first glance doesn't appear to have
</span><br>
<span class="quotelev1">&gt; anything to do with that.  I'm sure this is something silly I'm doing
</span><br>
<span class="quotelev1">&gt; wrong, but I don't really know how to debug this further given this error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Evan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; P.S. Only including zipped config.log since the &quot;ompi_info -v ompi full
</span><br>
<span class="quotelev1">&gt; --parsable&quot; command I got from <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; doesn't seem to work anymore.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;master.c&gt;&lt;test_distributed.hostfile&gt;&lt;config.log.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26235.php">http://www.open-mpi.org/community/lists/users/2015/01/26235.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26261/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26262.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>Previous message:</strong> <a href="26260.php">haozi : "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>In reply to:</strong> <a href="26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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
