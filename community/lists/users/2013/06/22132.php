<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 09:09:36 2013" -->
<!-- isoreceived="20130619130936" -->
<!-- sent="Wed, 19 Jun 2013 06:09:36 -0700" -->
<!-- isosent="20130619130936" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="D0F4C820-90CA-4282-8EE4-CA025D17D0A5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGAFX8y6-vt7sKqO_fy-ZVPQRyqgT+4cUPmS=24mKzV--U1ZCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 09:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22133.php">Vladimir Yamshchikov: "[OMPI users] unsubscribe"</a>
<li><strong>Previous message:</strong> <a href="22131.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="22130.php">Sergio Maffioletti: "[OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22134.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22134.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see a hostfile on your command line - so I assume you are using a default hostfile? What is in it?
<br>
<p>On Jun 19, 2013, at 1:49 AM, Sergio Maffioletti &lt;sergio.maffioletti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we have been hit observing a strange behavior with OpenMPI 1.6.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     strace -f /share/apps/openmpi/1.6.3/bin/mpiexec -n 2
</span><br>
<span class="quotelev1">&gt; --nooversubscribe --display-allocation --display-map --tag-output
</span><br>
<span class="quotelev1">&gt; /share/apps/gamess/2011R1/gamess.2011R1.x
</span><br>
<span class="quotelev1">&gt; /state/partition1/rmurri/29515/exam01.F05 -scr
</span><br>
<span class="quotelev1">&gt; /state/partition1/rmurri/29515
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Data for node: nh64-1-17.local Num slots: 0    Max slots: 0
</span><br>
<span class="quotelev1">&gt;      Data for node: nh64-1-17       Num slots: 2    Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     =================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Data for node: nh64-1-17       Num procs: 2
</span><br>
<span class="quotelev1">&gt;             Process OMPI jobid: [37108,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt;             Process OMPI jobid: [37108,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      =============================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, the host file lists the *unqualified* local host name;
</span><br>
<span class="quotelev1">&gt; OpenMPI fails to recognize that as the same host where it is running,
</span><br>
<span class="quotelev1">&gt; and uses `ssh` to spawn a remote `orted`, as use of `strace -f` shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Process 16552 attached
</span><br>
<span class="quotelev1">&gt;     [pid 16552] execve(&quot;//usr/bin/ssh&quot;, [&quot;/usr/bin/ssh&quot;, &quot;-x&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;nh64-1-17&quot;, &quot;OPAL_PREFIX=/share/apps/openmpi/1.6.3 ; export
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX; PATH=/share/apps/openmpi/1.6.3/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/share/apps/openmpi/1.6.3/lib:$LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt; DYLD_LIBRARY_PATH=/share/apps/openmpi/1.6.3/lib:$&quot;, &quot;--daemonize&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;-mca&quot;, &quot;ess&quot;, &quot;env&quot;, &quot;-mca&quot;, &quot;orte_ess_jobid&quot;, &quot;2431909888&quot;, &quot;-mca&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;orte_ess_vpid&quot;, &quot;1&quot;, &quot;-mca&quot;, &quot;orte_ess_num_procs&quot;, &quot;2&quot;, &quot;--hnp-uri&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;\&quot;2431909888.0;tcp://10.1.255.237:33154\&quot;&quot;, &quot;-mca&quot;, &quot;plm&quot;, &quot;rsh&quot;],
</span><br>
<span class="quotelev1">&gt; [&quot;OLI235=/state/partition1/rmurri/29515/exam01.F235&quot;, ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the machine file lists the FQDNs instead, `mpiexec` spawns the jobs
</span><br>
<span class="quotelev1">&gt; directly via fork()/exec().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems related to the fact that each compute node advertises
</span><br>
<span class="quotelev1">&gt; 127.0.1.1 as the IP address associated to its hostname:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     $ ssh nh64-1-17 getent hosts nh64-1-17
</span><br>
<span class="quotelev1">&gt;     127.0.1.1    nh64-1-17.local nh64-1-17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, if I change /etc/hosts so that a compute node associates a
</span><br>
<span class="quotelev1">&gt; &quot;real&quot; IP with its hostname, `mpiexec` works as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a known feature/bug/easter egg?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the record: using OpenMPI 1.6.3 on Rocks 5.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; on behalf of the GC3 Team
</span><br>
<span class="quotelev1">&gt; Sergio :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GC3: Grid Computing Competence Center
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gc3.uzh.ch/">http://www.gc3.uzh.ch/</a>
</span><br>
<span class="quotelev1">&gt; University of Zurich
</span><br>
<span class="quotelev1">&gt; Winterthurerstrasse 190
</span><br>
<span class="quotelev1">&gt; CH-8057 Zurich Switzerland
</span><br>
<span class="quotelev1">&gt; Tel: +41 44 635 4222
</span><br>
<span class="quotelev1">&gt; Fax: +41 44 635 6888
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22133.php">Vladimir Yamshchikov: "[OMPI users] unsubscribe"</a>
<li><strong>Previous message:</strong> <a href="22131.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="22130.php">Sergio Maffioletti: "[OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22134.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22134.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
