<?
$subject_val = "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 02:55:11 2009" -->
<!-- isoreceived="20090312065511" -->
<!-- sent="Thu, 12 Mar 2009 12:25:04 +0530" -->
<!-- isosent="20090312065504" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node" -->
<!-- id="cb60cbc40903112355v59473dacld10ac197a0b9d76f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fd21f64d0903100416k6aa4f1b3pdc9e863d9a50220c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 02:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8406.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Previous message:</strong> <a href="8404.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>In reply to:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8406.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Reply:</strong> <a href="8406.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello INK,
<br>
<p>&nbsp;&nbsp;&nbsp;I've run couple of jobs with different mpirun options.
<br>
<p>CRITERIA 1:
<br>
<p>On one of the nodes - connected to infiniband network:
<br>
<p>Job No 1:
<br>
<p>mpirun command: /opt/mpi/openmpi/1.3/intel/bin/mpirun  --mca btl
<br>
^openib -np $NSLOTS -hostfile $TMPDIR/machines
<br>
/opt/apps/cpmd/3.11/ompi-atl
<br>
as/SOURCE/cpmd311-ompi-atlas.x  job.in $PP_LIBRARY &gt; job_nn_out_omp_$JOB_ID
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS 10 MINUTES 11.58 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS 10 MINUTES 30.51 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS  123384/ 384344 kBYTES ***
<br>
<p>&nbsp;PROGRAM CPMD ENDED AT:   Wed Mar 11 12:38:48 2009
<br>
<p><p>&nbsp;================================================================
<br>
&nbsp;= COMMUNICATION TASK  AVERAGE MESSAGE LENGTH  NUMBER OF CALLS  =
<br>
&nbsp;= SEND/RECEIVE              116817. BYTES                891.  =
<br>
&nbsp;= BROADCAST                 123195. BYTES                284.  =
<br>
&nbsp;= GLOBAL SUMMATION           32926. BYTES                404.  =
<br>
&nbsp;= GLOBAL MULTIPLICATION          0. BYTES                  1.  =
<br>
&nbsp;= ALL TO ALL COMM          2799401. BYTES               1226.  =
<br>
&nbsp;=                             PERFORMANCE          TOTAL TIME  =
<br>
&nbsp;= SEND/RECEIVE             1040.965  MB/S           0.100 SEC  =
<br>
&nbsp;= BROADCAST                 388.748  MB/S           0.090 SEC  =
<br>
&nbsp;= GLOBAL SUMMATION            0.924  MB/S          28.780 SEC  =
<br>
&nbsp;= GLOBAL MULTIPLICATION       0.000  MB/S           0.001 SEC  =
<br>
&nbsp;= ALL TO ALL COMM           121.233  MB/S          28.310 SEC  =
<br>
&nbsp;= SYNCHRONISATION                                   0.010 SEC  =
<br>
&nbsp;================================================================
<br>
<p><p>Job No 2:
<br>
<p>/opt/mpi/openmpi/1.3/intel/bin/mpirun  --mca btl ^tcp -np $NSLOTS
<br>
-hostfile $TMPDIR/machines /opt/apps/cpmd/3.11/ompi-atlas/
<br>
SOURCE/cpmd311-ompi-atlas.x  job.in $PP_LIBRARY &gt; job_nn_omp_tcp$JOB_ID
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS 10 MINUTES 42.46 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS 10 MINUTES 43.76 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS  300480/ 567860 kBYTES ***
<br>
<p>&nbsp;PROGRAM CPMD ENDED AT:   Wed Mar 11 12:43:06 2009
<br>
<p><p>&nbsp;================================================================
<br>
&nbsp;= COMMUNICATION TASK  AVERAGE MESSAGE LENGTH  NUMBER OF CALLS  =
<br>
&nbsp;= SEND/RECEIVE              116817. BYTES                891.  =
<br>
&nbsp;= BROADCAST                 123195. BYTES                284.  =
<br>
&nbsp;= GLOBAL SUMMATION           32926. BYTES                404.  =
<br>
&nbsp;= GLOBAL MULTIPLICATION          0. BYTES                  1.  =
<br>
&nbsp;= ALL TO ALL COMM          2799401. BYTES               1226.  =
<br>
&nbsp;=                             PERFORMANCE          TOTAL TIME  =
<br>
&nbsp;= SEND/RECEIVE             1487.163  MB/S           0.070 SEC  =
<br>
&nbsp;= BROADCAST                 388.751  MB/S           0.090 SEC  =
<br>
&nbsp;= GLOBAL SUMMATION            1.899  MB/S          14.010 SEC  =
<br>
&nbsp;= GLOBAL MULTIPLICATION       0.000  MB/S           0.001 SEC  =
<br>
&nbsp;= ALL TO ALL COMM           264.404  MB/S          12.980 SEC  =
<br>
&nbsp;= SYNCHRONISATION                                   0.001 SEC  =
<br>
&nbsp;================================================================
<br>
<p><p>Job No 3:
<br>
<p>/opt/mpi/openmpi/1.3/intel/bin/mpirun  -np $NSLOTS -hostfile
<br>
$TMPDIR/machines /opt/apps/cpmd/3.11/ompi-atlas/SOURCE/cpmd311-
<br>
ompi-atlas.x  job.in $PP_LIBRARY &gt; job_nn_out_omp_$JOB_ID
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS  9 MINUTES 31.99 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS  9 MINUTES 33.37 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS  301192/ 571044 kBYTES ***
<br>
<p>&nbsp;PROGRAM CPMD ENDED AT:   Wed Mar 11 20:25:12 2009
<br>
<p><p>&nbsp;================================================================
<br>
&nbsp;= COMMUNICATION TASK  AVERAGE MESSAGE LENGTH  NUMBER OF CALLS  =
<br>
&nbsp;= SEND/RECEIVE              116817. BYTES                891.  =
<br>
&nbsp;= BROADCAST                 123195. BYTES                284.  =
<br>
&nbsp;= GLOBAL SUMMATION           32926. BYTES                404.  =
<br>
&nbsp;= GLOBAL MULTIPLICATION          0. BYTES                  1.  =
<br>
&nbsp;= ALL TO ALL COMM          2799401. BYTES               1226.  =
<br>
&nbsp;=                             PERFORMANCE          TOTAL TIME  =
<br>
&nbsp;= SEND/RECEIVE             2600.799  MB/S           0.040 SEC  =
<br>
&nbsp;= BROADCAST                 349.872  MB/S           0.100 SEC  =
<br>
&nbsp;= GLOBAL SUMMATION            3.811  MB/S           6.980 SEC  =
<br>
&nbsp;= GLOBAL MULTIPLICATION       0.000  MB/S           0.001 SEC  =
<br>
&nbsp;= ALL TO ALL COMM           286.729  MB/S          11.970 SEC  =
<br>
&nbsp;= SYNCHRONISATION                                   0.010 SEC  =
<br>
&nbsp;================================================================
<br>
<p><p>CRITERIA 2:
<br>
<p>On one of the nodes connected to Gigabit network:
<br>
<p>Job No 1:
<br>
<p>/opt/mpi/openmpi/1.3/intel/bin/mpirun  -np $NSLOTS -hostfile
<br>
$TMPDIR/machines /opt/apps/cpmd/3.11/ompi-atlas/SOURCE/cpmd311-
<br>
ompi-atlas.x  job.in $PP_LIBRARY &gt; job_nn_GB_out_omp_$JOB_ID
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS  5 MINUTES 57.45 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS  6 MINUTES 10.21 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS  123392/ 384344 kBYTES ***
<br>
<p>&nbsp;PROGRAM CPMD ENDED AT:   Wed Mar 11 20:07:52 2009
<br>
<p><p>&nbsp;================================================================
<br>
&nbsp;= COMMUNICATION TASK  AVERAGE MESSAGE LENGTH  NUMBER OF CALLS  =
<br>
&nbsp;= SEND/RECEIVE              116817. BYTES                891.  =
<br>
&nbsp;= BROADCAST                 123195. BYTES                284.  =
<br>
&nbsp;= GLOBAL SUMMATION           32926. BYTES                404.  =
<br>
&nbsp;= GLOBAL MULTIPLICATION          0. BYTES                  1.  =
<br>
&nbsp;= ALL TO ALL COMM          2799401. BYTES               1226.  =
<br>
&nbsp;=                             PERFORMANCE          TOTAL TIME  =
<br>
&nbsp;= SEND/RECEIVE             2081.711  MB/S           0.050 SEC  =
<br>
&nbsp;= BROADCAST                 583.121  MB/S           0.060 SEC  =
<br>
&nbsp;= GLOBAL SUMMATION            3.514  MB/S           7.570 SEC  =
<br>
&nbsp;= GLOBAL MULTIPLICATION       0.000  MB/S           0.001 SEC  =
<br>
&nbsp;= ALL TO ALL COMM           438.891  MB/S           7.820 SEC  =
<br>
&nbsp;= SYNCHRONISATION                                   0.010 SEC  =
<br>
&nbsp;================================================================
<br>
<p>Job No 2:
<br>
<p>/opt/mpi/openmpi/1.3/intel/bin/mpirun --mca btl sm,self,tcp -np
<br>
$NSLOTS -hostfile $TMPDIR/machines /opt/apps/cpmd/3.11/ompi-
<br>
atlas/SOURCE/cpmd311-ompi-atlas.x  job.in $PP_LIBRARY &gt;
<br>
job_nn_GB_out_omp_$JOB_ID
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS  6 MINUTES 37.24 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS  6 MINUTES 49.97 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS  123416/ 384344 kBYTES ***
<br>
<p>&nbsp;PROGRAM CPMD ENDED AT:   Wed Mar 11 20:09:32 2009
<br>
<p><p>&nbsp;================================================================
<br>
&nbsp;= COMMUNICATION TASK  AVERAGE MESSAGE LENGTH  NUMBER OF CALLS  =
<br>
&nbsp;= SEND/RECEIVE              116817. BYTES                891.  =
<br>
&nbsp;= BROADCAST                 123195. BYTES                284.  =
<br>
&nbsp;= GLOBAL SUMMATION           32926. BYTES                404.  =
<br>
&nbsp;= GLOBAL MULTIPLICATION          0. BYTES                  1.  =
<br>
&nbsp;= ALL TO ALL COMM          2799401. BYTES               1226.  =
<br>
&nbsp;=                             PERFORMANCE          TOTAL TIME  =
<br>
&nbsp;= SEND/RECEIVE             2080.441  MB/S           0.050 SEC  =
<br>
&nbsp;= BROADCAST                 583.130  MB/S           0.060 SEC  =
<br>
&nbsp;= GLOBAL SUMMATION            2.043  MB/S          13.020 SEC  =
<br>
&nbsp;= GLOBAL MULTIPLICATION       0.000  MB/S           0.001 SEC  =
<br>
&nbsp;= ALL TO ALL COMM           338.792  MB/S          10.130 SEC  =
<br>
&nbsp;= SYNCHRONISATION                                   0.001 SEC  =
<br>
&nbsp;================================================================
<br>
<p><p>Observations:
<br>
<p>For all jobs 4 processes are used and have run on a single node.
<br>
<p>This time gigabit jobs are performing far better than infiniband jobs.
<br>
i.e gigabit jobs have taken 6 minutes and infiniband jobs 10 minutes
<br>
approximately.
<br>
<p>What factors may be causing this change?
<br>
<p>During these jobs execution, there were no jobs running on gigabit
<br>
network - nodes were completely free. But the infiniband nodes were
<br>
almost filled up with other jobs. Is this causing the lower
<br>
performance of ib jobs?
<br>
<p>Note that, all jobs have submitted through gridengine from master
<br>
node. In this case, eventhough 4 processes are running on a single
<br>
node will there be a communication/link between master node and
<br>
execution node?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p>On Tue, Mar 10, 2009 at 4:46 PM, Igor Kozin &lt;i.n.kozin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Sangamesh,
</span><br>
<span class="quotelev1">&gt; As far as I can tell there should be no difference if you run CPMD on a
</span><br>
<span class="quotelev1">&gt; single node whether with or without ib. One easy thing that you could do is
</span><br>
<span class="quotelev1">&gt; to repeat your runs on the infiniband node(s) with and without infiniband
</span><br>
<span class="quotelev1">&gt; using --mca btl ^tcp and --mca btl ^openib respectively. But since you are
</span><br>
<span class="quotelev1">&gt; using a single node I doubt it will make any difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with Jeff that there are many factors you need to be sure of. Please
</span><br>
<span class="quotelev1">&gt; note that not only your elapsed times but also your&#160;CPU times are different.
</span><br>
<span class="quotelev1">&gt; Furthermore the difference in communication times as indicated in your CPMD
</span><br>
<span class="quotelev1">&gt; outputs can not be&#160;the only reason&#160;for the difference in the elapsed times.
</span><br>
<span class="quotelev1">&gt; CPMD,&#160;MKL, and compiler versions, memory bandwidth,&#160;i/o and rogue processes
</span><br>
<span class="quotelev1">&gt; running on a node&#160;could be&#160;the differentiating factors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The standard wat32 benchmark is a good test for a single node. You can find
</span><br>
<span class="quotelev1">&gt; our benchmarking results here if you want to compare yours
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cse.scitech.ac.uk/disco/dbd/index.html">http://www.cse.scitech.ac.uk/disco/dbd/index.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; INK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/3/10 Sangamesh B &lt;forum.san_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Ralph &amp; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;This is the same issue - but this time the job is running on a single
</span><br>
<span class="quotelev2">&gt;&gt; node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The two systems on which the jobs are run, have the same hardware/OS
</span><br>
<span class="quotelev2">&gt;&gt; configuration. The only differences are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One node has 4 GB RAM and it is part of infiniband connected nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other node has 8 GB RAM and it is part of gigabit connected nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For both jobs only 4 processes are used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All the processes are run on a single node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But why the GB node is taking more time than IB node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {ELAPSED TIME = WALL CLOCK TIME}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope you are now clear with the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Mar 9, 2009 at 10:56 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It depends on the characteristics of the nodes in question. &#160;You mention
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CPU speeds and the RAM, but there are other factors as well: cache size,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; memory architecture, how many MPI processes you're running, etc. &#160;Memory
</span><br>
<span class="quotelev3">&gt;&gt; &gt; access patterns, particularly across UMA machines like clovertown and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; follow-in intel architectures can really get bogged down by the RAM
</span><br>
<span class="quotelev3">&gt;&gt; &gt; bottlneck (all 8 cores hammering on memory simultaneously via a single
</span><br>
<span class="quotelev3">&gt;&gt; &gt; memory bus).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mar 9, 2009, at 10:30 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Dear Open MPI team,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160; &#160; &#160;With Open MPI-1.3, the fortran application CPMD is installed on
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Rocks-4.3 cluster - Dual Processor Quad core Xeon @ 3 GHz. (8 cores
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; per node)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Two jobs (4 processes job) are run on two nodes, separately - one node
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; has a ib connection ( 4 GB RAM) &#160;and the other node has gigabit
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; connection (8 GB RAM).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Note that, the network-connectivity may not be or not required to be
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; used as the two jobs are running in stand alone mode.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Since the jobs are running on single node - no intercommunication
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; between nodes - so the performance of both the jobs should be same
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; irrespective of network connectivity. But here this is not the case.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The gigabit job is taking double the time of infiniband job.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Following are the details of two jobs:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Infiniband Job:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160; &#160; &#160;CPU TIME : &#160; &#160;0 HOURS 10 MINUTES 21.71 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160; ELAPSED TIME : &#160; &#160;0 HOURS 10 MINUTES 23.08 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160;*** &#160; &#160; &#160;CPMD| SIZE OF THE PROGRAM IS &#160;301192/ 571044 kBYTES ***
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Gigabit Job:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160; &#160; &#160; CPU TIME : &#160; &#160;0 HOURS 12 MINUTES &#160;7.93 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160; ELAPSED TIME : &#160; &#160;0 HOURS 21 MINUTES &#160;0.07 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160;*** &#160; &#160; &#160;CPMD| SIZE OF THE PROGRAM IS &#160;123420/ 384344 kBYTES ***
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; More details are attached here in a file.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Why there is a long difference between CPU TIME and ELAPSED TIME for
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Gigabit job?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; This could be an issue with Open MPI itself. What could be the reason?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Is there any flags need to be set?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sangamesh
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &lt;cpmd_gb_ib_1node&gt;&lt;ATT3915213.txt&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8406.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Previous message:</strong> <a href="8404.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>In reply to:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8406.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Reply:</strong> <a href="8406.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
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
