<?
$subject_val = "Re: [OMPI users] How are the Open MPI processes spawned?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 11:53:58 2011" -->
<!-- isoreceived="20111121165358" -->
<!-- sent="Mon, 21 Nov 2011 09:53:49 -0700" -->
<!-- isosent="20111121165349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are the Open MPI processes spawned?" -->
<!-- id="967CAE8A-5B9F-4B72-9CF8-FDB8FDB18285_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ECA7D4D.30700_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] How are the Open MPI processes spawned?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 11:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17802.php">Jeff Squyres: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17800.php">Paul Kapinos: "[OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17800.php">Paul Kapinos: "[OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17813.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17813.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No real ideas, I'm afraid. We regularly launch much larger jobs than that using ssh without problem, so it is likely something about the local setup of that node that is causing the problem. Offhand, it sounds like either the mapper isn't getting things right, or for some reason the daemon on 005 isn't properly getting or processing the launch command.
<br>
<p>What you could try is adding --display-map to see if the map is being correctly generated. If that works, then (using a debug build) try adding --leave-session-attached and see if any daemons are outputting an error.
<br>
<p>You could add -mca odls_base_verbose 5 --leave-session-attached to your cmd line. You'll see debug output from each daemon as it receives and processes the launch command. See if the daemon on 005 is behaving differently than the others.
<br>
<p>You should also try putting that long list of nodes in a hostfile - see if that makes a difference. It will process the nodes thru a different code path, so if there is some problem in --host, this will tell us.
<br>
<p><p>On Nov 21, 2011, at 9:33 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hello Open MPI volks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use OpenMPI 1.5.3 on our pretty new 1800+ nodes InfiniBand cluster, and we have some strange hangups if starting OpenMPI processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The nodes are named linuxbsc001,linuxbsc002,... (with some lacuna due of  offline nodes). Each node is accessible from each other over SSH (without password), also MPI programs between any two nodes are checked to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So long, I tried to start some bigger number of processes, one process per node:
</span><br>
<span class="quotelev1">&gt; $ mpiexec -np NN  --host linuxbsc001,linuxbsc002,... MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the problem: there are some constellations of names in the host list on which mpiexec reproducible hangs forever; and more surprising: other *permutation* of the *same* node names may run without any errors!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example: the command in laueft.txt runs OK, the command in haengt.txt hangs. Note: the only difference is that the node linuxbsc025 is put on the end of the host list. Amazed, too?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking on the particular nodes during the above mpiexec hangs, we found the orted daemons started on *each* node and the binary on all but one node (orted.txt, MPI_FastTest.txt).
</span><br>
<span class="quotelev1">&gt; Again amazing that the node with no user process started (leading to hangup in MPI_Init of all processes and thus to hangup, I believe) was always the same, linuxbsc005, which is NOT the permuted item linuxbsc025...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This behaviour is reproducible. The hang-on only occure if the started application is a MPI application (&quot;hostname&quot; does not hang).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any Idea what is gonna on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S: no alias names used, all names are real ones
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; linuxbsc001: STDOUT: 24323 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc002: STDOUT:  2142 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc003: STDOUT: 69266 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc004: STDOUT: 58899 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc006: STDOUT: 68255 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc007: STDOUT: 62026 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc008: STDOUT: 54221 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc009: STDOUT: 55482 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc010: STDOUT: 59380 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc011: STDOUT: 58312 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc014: STDOUT: 56013 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc016: STDOUT: 58563 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc017: STDOUT: 54693 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc018: STDOUT: 54187 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc020: STDOUT: 55811 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc021: STDOUT: 54982 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc022: STDOUT: 50032 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc023: STDOUT: 54044 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc024: STDOUT: 51247 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc025: STDOUT: 18575 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc027: STDOUT: 48969 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc028: STDOUT: 52397 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc029: STDOUT: 52780 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc030: STDOUT: 47537 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc031: STDOUT: 54609 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc032: STDOUT: 52833 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; $ timex /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec -np 27  --host 
</span><br>
<span class="quotelev1">&gt; linuxbsc001,linuxbsc002,linuxbsc003,linuxbsc004,linuxbsc005,linuxbsc006,linuxbsc007,linuxbsc008,linuxbsc009,linuxbsc010,linuxbsc011,linuxbsc014,linuxbsc016,linuxbsc017,linuxbsc018,linuxbsc020,linuxbsc021,linuxbsc022,linuxbsc023,linuxbsc024,linuxbsc025,linuxbsc027,linuxbsc028,linuxbsc029,linuxbsc030,linuxbsc031,linuxbsc032 
</span><br>
<span class="quotelev1">&gt; MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; $ timex /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec -np 27  --host 
</span><br>
<span class="quotelev1">&gt; linuxbsc001,linuxbsc002,linuxbsc003,linuxbsc004,linuxbsc005,linuxbsc006,linuxbsc007,linuxbsc008,linuxbsc009,linuxbsc010,linuxbsc011,linuxbsc014,linuxbsc016,linuxbsc017,linuxbsc018,linuxbsc020,linuxbsc021,linuxbsc022,linuxbsc023,linuxbsc024,linuxbsc027,linuxbsc028,linuxbsc029,linuxbsc030,linuxbsc031,linuxbsc032,linuxbsc025 
</span><br>
<span class="quotelev1">&gt; MPI_FastTest.exe
</span><br>
<span class="quotelev1">&gt; linuxbsc001: STDOUT: 24322 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc002: STDOUT:  2141 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc003: STDOUT: 69265 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc004: STDOUT: 58898 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 4 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc005: STDOUT: 65642 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 5 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc006: STDOUT: 68254 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 6 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc007: STDOUT: 62025 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 7 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc008: STDOUT: 54220 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 8 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc009: STDOUT: 55481 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 9 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc010: STDOUT: 59379 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 10 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc011: STDOUT: 58311 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 11 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc014: STDOUT: 56012 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 12 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc016: STDOUT: 58562 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 13 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc017: STDOUT: 54692 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 14 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc018: STDOUT: 54186 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 15 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc020: STDOUT: 55810 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 16 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc021: STDOUT: 54981 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 17 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc022: STDOUT: 50031 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 18 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc023: STDOUT: 54043 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 19 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc024: STDOUT: 51246 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 20 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc025: STDOUT: 18574 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 21 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc027: STDOUT: 48968 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 22 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc028: STDOUT: 52396 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 23 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc029: STDOUT: 52779 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 24 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc030: STDOUT: 47536 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 25 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc031: STDOUT: 54608 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 26 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; linuxbsc032: STDOUT: 52832 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 27 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
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
<li><strong>Next message:</strong> <a href="17802.php">Jeff Squyres: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17800.php">Paul Kapinos: "[OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17800.php">Paul Kapinos: "[OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17813.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17813.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
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
