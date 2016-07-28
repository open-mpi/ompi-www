<?
$subject_val = "[OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 04:49:13 2013" -->
<!-- isoreceived="20130619084913" -->
<!-- sent="Wed, 19 Jun 2013 10:49:09 +0200" -->
<!-- isosent="20130619084909" -->
<!-- name="Sergio Maffioletti" -->
<!-- email="sergio.maffioletti_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAGAFX8y6-vt7sKqO_fy-ZVPQRyqgT+4cUPmS=24mKzV--U1ZCw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Sergio Maffioletti (<em>sergio.maffioletti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 04:49:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22131.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22129.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22132.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22132.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>we have been hit observing a strange behavior with OpenMPI 1.6.3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;strace -f /share/apps/openmpi/1.6.3/bin/mpiexec -n 2
<br>
--nooversubscribe --display-allocation --display-map --tag-output
<br>
/share/apps/gamess/2011R1/gamess.2011R1.x
<br>
/state/partition1/rmurri/29515/exam01.F05 -scr
<br>
/state/partition1/rmurri/29515
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for node: nh64-1-17.local Num slots: 0    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for node: nh64-1-17       Num slots: 2    Max slots: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;=================================================================
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for node: nh64-1-17       Num procs: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [37108,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [37108,1] Process rank: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=============================================================
<br>
<p>As you can see, the host file lists the *unqualified* local host name;
<br>
OpenMPI fails to recognize that as the same host where it is running,
<br>
and uses `ssh` to spawn a remote `orted`, as use of `strace -f` shows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Process 16552 attached
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[pid 16552] execve(&quot;//usr/bin/ssh&quot;, [&quot;/usr/bin/ssh&quot;, &quot;-x&quot;,
<br>
&quot;nh64-1-17&quot;, &quot;OPAL_PREFIX=/share/apps/openmpi/1.6.3 ; export
<br>
OPAL_PREFIX; PATH=/share/apps/openmpi/1.6.3/bin:$PATH ; export PATH ;
<br>
LD_LIBRARY_PATH=/share/apps/openmpi/1.6.3/lib:$LD_LIBRARY_PATH ;
<br>
export LD_LIBRARY_PATH ;
<br>
DYLD_LIBRARY_PATH=/share/apps/openmpi/1.6.3/lib:$&quot;, &quot;--daemonize&quot;,
<br>
&quot;-mca&quot;, &quot;ess&quot;, &quot;env&quot;, &quot;-mca&quot;, &quot;orte_ess_jobid&quot;, &quot;2431909888&quot;, &quot;-mca&quot;,
<br>
&quot;orte_ess_vpid&quot;, &quot;1&quot;, &quot;-mca&quot;, &quot;orte_ess_num_procs&quot;, &quot;2&quot;, &quot;--hnp-uri&quot;,
<br>
&quot;\&quot;2431909888.0;tcp://10.1.255.237:33154\&quot;&quot;, &quot;-mca&quot;, &quot;plm&quot;, &quot;rsh&quot;],
<br>
[&quot;OLI235=/state/partition1/rmurri/29515/exam01.F235&quot;, ...
<br>
<p>If the machine file lists the FQDNs instead, `mpiexec` spawns the jobs
<br>
directly via fork()/exec().
<br>
<p>This seems related to the fact that each compute node advertises
<br>
127.0.1.1 as the IP address associated to its hostname:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ ssh nh64-1-17 getent hosts nh64-1-17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;127.0.1.1    nh64-1-17.local nh64-1-17
<br>
<p>Indeed, if I change /etc/hosts so that a compute node associates a
<br>
&quot;real&quot; IP with its hostname, `mpiexec` works as expected.
<br>
<p>Is this a known feature/bug/easter egg?
<br>
<p>For the record: using OpenMPI 1.6.3 on Rocks 5.2.
<br>
<p>Thanks,
<br>
on behalf of the GC3 Team
<br>
Sergio :)
<br>
<p>GC3: Grid Computing Competence Center
<br>
<a href="http://www.gc3.uzh.ch/">http://www.gc3.uzh.ch/</a>
<br>
University of Zurich
<br>
Winterthurerstrasse 190
<br>
CH-8057 Zurich Switzerland
<br>
Tel: +41 44 635 4222
<br>
Fax: +41 44 635 6888
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22130/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22131.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22129.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22132.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22132.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
