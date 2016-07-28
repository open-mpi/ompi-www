<?
$subject_val = "Re: [OMPI users] Checkpointing a restarted app fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 07:27:38 2008" -->
<!-- isoreceived="20080917112738" -->
<!-- sent="Wed, 17 Sep 2008 07:27:30 -0400" -->
<!-- isosent="20080917112730" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing a restarted app fails" -->
<!-- id="6BB4A7FB-9CD2-484C-B3C6-641974CF7002_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48D076FC.1010800_at_cs.tu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing a restarted app fails<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 07:27:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Previous message:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6557.php">Matthias Hovestadt: "[OMPI users] Checkpointing a restarted app fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6593.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Reply:</strong> <a href="6593.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2008, at 11:18 PM, Matthias Hovestadt wrote:
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I am interested in fault tolerance, checkpointing and
</span><br>
<span class="quotelev1">&gt; restart of OMPI is an intersting feature for me. So I installed
</span><br>
<span class="quotelev1">&gt; BLCR 0.7.3 as well as OMPI from SVN (rev. 19553). For OMPI
</span><br>
<span class="quotelev1">&gt; I followed the instructions in the &quot;Fault Tolerance Guide&quot;
</span><br>
<span class="quotelev1">&gt; in the OMPI wiki:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; make -s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This gave me an OMPI version with checkpointing support, so I
</span><br>
<span class="quotelev1">&gt; started testing. The good news is: I am able to checkpoint and
</span><br>
<span class="quotelev1">&gt; restart applications. The bad news is: checkpointing a restarted
</span><br>
<span class="quotelev1">&gt; application fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In detail:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Starting the application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ompi-clean
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ mpirun -np 2 -am ft-enable-cr yafaray-xml  
</span><br>
<span class="quotelev1">&gt; yafaray.xml
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This starts my MPI-enabled application without any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Checkpointing the application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First I queried the PID of the mpirun process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ps auxww | grep mpirun
</span><br>
<span class="quotelev1">&gt; ccs      13897  0.4  0.2  63992  2704 pts/0    S+   04:59   0:00  
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -am ft-enable-cr yafaray-xml yafaray.xml
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I checkpointed the job, terminating it directly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ompi-checkpoint --term 13897
</span><br>
<span class="quotelev1">&gt; Snapshot Ref.:   0 ompi_global_snapshot_13897.ckpt
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The application indeed terminated:
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 13898 on node grid- 
</span><br>
<span class="quotelev1">&gt; demo-1.cit.tu-berlin.de exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The checkpoint command generated a checkpoint dataset
</span><br>
<span class="quotelev1">&gt; of 367MB size:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ du -s -h ompi_global_snapshot_13897.ckpt/
</span><br>
<span class="quotelev1">&gt; 367M    ompi_global_snapshot_13897.ckpt/
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Restarting the application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For restarting the application, I first executed ompi-clean,
</span><br>
<span class="quotelev1">&gt; then restarting the job with preloading all files:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ompi-clean
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ompi-restart --preload  
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_13897.ckpt/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Restarting works pretty fine. The jobs restarts from the
</span><br>
<span class="quotelev1">&gt; checkpointed state and continues to execute. If not interrupted,
</span><br>
<span class="quotelev1">&gt; it continues until its end, returning a correct result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I observed one weird thing: restarting the application
</span><br>
<span class="quotelev1">&gt; seemed to have the checkpoint dataset changed. Moreover, two new
</span><br>
<span class="quotelev1">&gt; directories have been created at restart time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   4 drwx------  3 ccs  ccs    4096 Sep 17 05:09  
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_13897.ckpt
</span><br>
<span class="quotelev1">&gt;   4 drwx------  2 ccs  ccs    4096 Sep 17 05:09 opal_snapshot_0.ckpt
</span><br>
<span class="quotelev1">&gt;   4 drwx------  2 ccs  ccs    4096 Sep 17 05:09 opal_snapshot_1.ckpt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The ('opal_snapshot_*.ckpt') directories are an artifact of the -- 
<br>
preload option. This option will copy the individual checkpoint to  
<br>
the remote machine before executing.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) Checkpointing again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again I first looked for the PID of the running mpirun process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ps auxww | grep mpirun
</span><br>
<span class="quotelev1">&gt; ccs      14005  0.0  0.2  63992  2736 pts/1    S+   05:09   0:00  
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr --app /home/ccs/ 
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_13897.ckpt/restart-appfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I checkpointed it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ompi-checkpoint 14005
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When executing this checkpoint command, the running application
</span><br>
<span class="quotelev1">&gt; directly aborts, even though I did not specify the &quot;--term&quot; option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 14050 on node grid- 
</span><br>
<span class="quotelev1">&gt; demo-1.cit.tu-berlin.de exited on signal 13 (Broken pipe).
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$
</span><br>
<p>Interesting. This looks like a bug with the restart mechanism in Open  
<br>
MPI. This was working fine, but something must have changed in the  
<br>
trunk to break it.
<br>
<p>A useful piece of debugging information for me would be a stack trace  
<br>
from the failed process. You should be able to get this from a core  
<br>
file it left or If you would set the following MCA variable in  
<br>
$HOME/.openmpi/mca-params.conf:
<br>
&nbsp;&nbsp;&nbsp;opal_cr_debug_sigpipe=1
<br>
This will cause the Open MPI app to wait in a sleep loop when it  
<br>
detects a Broken Pipe signal. Then you should be able to attach a  
<br>
debugger and retrieve a stack trace.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;ompi-checkpoint 14005&quot; command however does not return.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is anybody here using checkpoint/restart capabilities of OMPI?
</span><br>
<span class="quotelev1">&gt; Did anybody encounter similar problems? Or is there something
</span><br>
<span class="quotelev1">&gt; wrong about my way of using ompi-checkpoint/ompi-restart?
</span><br>
<p>I work with the checkpoint/restart functionality on a daily basis,  
<br>
but I must admit that I haven't worked on the trunk in a few weeks.   
<br>
I'll take a look and let you know what I find. I suspect that Open  
<br>
MPI is not resetting properly after a checkpoint.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any hint is greatly appreciated! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Previous message:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6557.php">Matthias Hovestadt: "[OMPI users] Checkpointing a restarted app fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6593.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Reply:</strong> <a href="6593.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
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
