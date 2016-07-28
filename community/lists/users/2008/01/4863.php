<?
$subject_val = "Re: [OMPI users] Occasional mpirun hang on completion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 12:52:11 2008" -->
<!-- isoreceived="20080122175211" -->
<!-- sent="Tue, 22 Jan 2008 18:51:49 +0100 (MET)" -->
<!-- isosent="20080122175149" -->
<!-- name="Marco Sbrighi" -->
<!-- email="m.sbrighi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Occasional mpirun hang on completion" -->
<!-- id="1201024308.4881.71.camel_at_nb-sbrighi.cineca.it" -->
<!-- inreplyto="20080119031323.GB4468_at_eponymous" -->
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
<strong>Subject:</strong> Re: [OMPI users] Occasional mpirun hang on completion<br>
<strong>From:</strong> Marco Sbrighi (<em>m.sbrighi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-22 12:51:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4864.php">Pignot Geoffroy: "Re: [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4862.php">Brock Palen: "[OMPI users] problems with flash"</a>
<li><strong>In reply to:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4873.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Barry and Jeff,
<br>
<p><p>using OpenMPI we are experimenting something like the behaviour reported
<br>
by Barry.
<br>
Let me to introduce the context:
<br>
we are using RHEL4 U4 on 2 way, AMD Opteron dual core, nodes.
<br>
Each node is equipped with 16 GB of RAM, plus 4 GB of SWAP.
<br>
OpenMPi is 1.2.2.
<br>
Sometimes, for jobs that runs for many hours (1 - 2 days), it happens
<br>
that mpirun generates &quot;kernel memory crisis&quot;. This is an excerpt of what
<br>
we are seeing in syslog:
<br>
<p>Jan  7 10:14:18 node203e0 kernel: mpirun: page allocation failure. order:5, mode:0xd0
<br>
Jan  7 10:14:18 node203e0 kernel:
<br>
Jan  7 10:14:18 node203e0 kernel: Call Trace:&lt;ffffffff8015e0a8&gt;{__alloc_pages+768} &lt;ffffffff8015e141&gt;{__get_free_pages+11}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff8016127c&gt;{kmem_getpages+36} &lt;ffffffff802d0d2e&gt;{tcp_sendmsg+0}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff802d0d2e&gt;{tcp_sendmsg+0} &lt;ffffffff80161a11&gt;{cache_alloc_refill+609}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff801616df&gt;{__kmalloc+123} &lt;ffffffff802aadd4&gt;{alloc_skb+65}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff802d0e99&gt;{tcp_sendmsg+363} &lt;ffffffff802a7143&gt;{sock_sendmsg+271}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff8015bfc1&gt;{__generic_file_aio_write_nolock+731}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff8015c329&gt;{generic_file_aio_write+126} &lt;ffffffff80135752&gt;{autoremove_wake_function+0}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffffa0254448&gt;{:nfs:nfs_file_write+195} &lt;ffffffff802a767f&gt;{sock_readv_writev+122}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff802a7704&gt;{sock_writev+61} &lt;ffffffff80179a89&gt;{do_readv_writev+421}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff80135752&gt;{autoremove_wake_function+0} &lt;ffffffff8018b393&gt;{poll_freewait+64}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff801932d4&gt;{dnotify_parent+34} &lt;ffffffff80179c5b&gt;{sys_writev+69}
<br>
Jan  7 10:14:18 node203e0 kernel:        &lt;ffffffff8011026a&gt;{system_call+126}
<br>
Jan  7 10:14:18 node203e0 kernel: Mem-info:
<br>
Jan  7 10:14:18 node203e0 kernel: Node 1 DMA per-cpu: empty
<br>
Jan  7 10:14:18 node203e0 kernel: Node 1 Normal per-cpu:
<br>
Jan  7 10:14:18 node203e0 kernel: cpu 0 hot: low 32, high 96, batch 16
<br>
Jan  7 10:14:18 node203e0 kernel: cpu 0 cold: low 0, high 32, batch 16
<br>
Jan  7 10:14:18 node203e0 kernel: cpu 1 hot: low 32, high 96, batch 16
<br>
Jan  7 10:14:18 node203e0 kernel: cpu 1 cold: low 0, high 32, batch 16
<br>
Jan  7 10:14:19 node203e0 kernel: cpu 2 hot: low 32, high 96, batch 16
<br>
Jan  7 10:14:19 node203e0 kernel: cpu 2 cold: low 0, high 32, batch 16
<br>
Jan  7 10:14:19 node203e0 kernel: cpu 3 hot: low 32, high 96, batch 16
<br>
Jan  7 10:14:19 node203e0 kernel: cpu 3 cold: low 0, high 32, batch 16
<br>
Jan  7 10:14:19 node203e0 kernel: Node 1 HighMem per-cpu: empty
<br>
Jan  7 10:14:19 node203e0 kernel: Node 0 DMA per-cpu:
<br>
Jan  7 10:14:19 node203e0 kernel: cpu 0 hot: low 2, high 6, batch 1
<br>
Jan  7 10:14:19 node203e0 kernel: cpu 0 cold: low 0, high 2, batch 1
<br>
Jan  7 10:14:19 node203e0 kernel: cpu 1 hot: low 2, high 6, batch 1
<br>
Jan  7 10:14:19 node203e0 kernel: cpu 1 cold: low 0, high 2, batch 1
<br>
Jan  7 10:14:19 node203e0 kernel: cpu 2 hot: low 2, high 6, batch 1
<br>
:                                                                 
<br>
<p>The &quot;crisis&quot; may lead to an &quot;mpirun hang&quot;, sometimes.
<br>
It seems that mpirun uses aggressively &quot;socket calls&quot;, but we are not
<br>
sure about the motivation of such behaviour. Maybe there are a set of
<br>
synergistic causes, nevertheless when the kernel reports such kind of
<br>
&quot;fault&quot; the only implied process is mpirun ...., all the times.
<br>
<p>marco
<br>
&nbsp;&nbsp;&nbsp;
<br>
<p>On Fri, 2008-01-18 at 22:13 -0500, Barry Rountree wrote:
<br>
<span class="quotelev1">&gt; On Fri, Jan 18, 2008 at 08:33:10PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Barry --
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could you check what apps are still running when it hangs?  I.e., I  
</span><br>
<span class="quotelev2">&gt; &gt; assume that all the uptime's are dead; are all the orted's dead on the  
</span><br>
<span class="quotelev2">&gt; &gt; remote nodes?  (orted = our helper process that is launched on the  
</span><br>
<span class="quotelev2">&gt; &gt; remote nodes to exert process control, funnel I/O back and forth to  
</span><br>
<span class="quotelev2">&gt; &gt; mpirun, etc.)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If any of the orted's are still running, can you connect to them with  
</span><br>
<span class="quotelev2">&gt; &gt; gdb and get a backtrace to see where they are hung?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Likewise, can you connect to mpirun with gdb and get a backtrace of  
</span><br>
<span class="quotelev2">&gt; &gt; where it's hung?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ralph, the main ORTE developer, is pretty sure that it's stuck in the  
</span><br>
<span class="quotelev2">&gt; &gt; IO flushing routines that are executed at the end of time (look for  
</span><br>
<span class="quotelev2">&gt; &gt; function names like iof_flush or similar).  We thought we had fixed  
</span><br>
<span class="quotelev2">&gt; &gt; all of those on the 1.2 branch, but perhaps there's some other weird  
</span><br>
<span class="quotelev2">&gt; &gt; race condition happening that doesn't happen on our test machines...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm happy to help.  I've got a paper submission deadline on Tuesday, so
</span><br>
<span class="quotelev1">&gt; it might not be until midweek.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 13, 2008, at 10:17 AM, Barry Rountree wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Sun, Jan 13, 2008 at 09:54:47AM -0500, Barry Rountree wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The following command
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun -np 2 -hostfile ~/hostfile uptime
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; will occasionally hang after completing.  The expected output  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; appears on
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the screen, but mpirun needs a SIGKILL to return to the console.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This has been verified with OpenMPI v1.2.4 compiled with both icc  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 9.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 20061101 (aka 9.1.045) and gcc 4.1.0 20060304 (aka Red Hat  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 4.1.0-3).  I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; have also tried earlier versions of OpenMPI and found the same bug
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (1.1.2 and 1.2.2).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Using  -verbose didn't provide any additional output.  I'm happy  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to help
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; tracking down whatever is causing this.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A couple more data points:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 4 -hostfile ~/hostfile --no-daemonize uptime
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hung twice over 100 runs.  Without the --no-daemonize, the command  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hung
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 16 times over 100 runs.  (This is using the version compiled with  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; icc.)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Barry
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Many thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Barry Rountree
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ph.D. Candidate, Computer Science
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; University of Georgia
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
-----------------------------------------------------------------
 Marco Sbrighi  m.sbrighi_at_[hidden]
 HPC Group
 CINECA Interuniversity Computing Centre
 via Magnanelli, 6/3
 40033 Casalecchio di Reno (Bo) ITALY
 tel. 051 6171516
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4864.php">Pignot Geoffroy: "Re: [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4862.php">Brock Palen: "[OMPI users] problems with flash"</a>
<li><strong>In reply to:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4873.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
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
