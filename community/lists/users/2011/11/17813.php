<?
$subject_val = "Re: [OMPI users] How are the Open MPI processes spawned?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 12:10:50 2011" -->
<!-- isoreceived="20111122171050" -->
<!-- sent="Tue, 22 Nov 2011 18:10:45 +0100" -->
<!-- isosent="20111122171045" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are the Open MPI processes spawned?" -->
<!-- id="4ECBD795.2070201_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="967CAE8A-5B9F-4B72-9CF8-FDB8FDB18285_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 12:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17814.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17812.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17814.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17814.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph, hello all.
<br>
<p><span class="quotelev1">&gt; No real ideas, I'm afraid. We regularly launch much larger jobs than that using ssh without problem,
</span><br>
I was also able to run a 288-node-job yesterday - the size alone is not 
<br>
the problem...
<br>
<p><p><p><span class="quotelev1">&gt; so it is likely something about the local setup of that node that is causing the problem. 
</span><br>
<span class="quotelev1">&gt; Offhand, it sounds like either the mapper isn't getting things right, or for some reason 
</span><br>
<span class="quotelev1">&gt; the daemon on 005 isn't properly getting or processing the launch command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you could try is adding --display-map to see if the map is being correctly generated.
</span><br>
<span class="quotelev1"> &gt; If that works, then (using a debug build) try adding 
</span><br>
--leave-session-attached and see if
<br>
<span class="quotelev1"> &gt; any daemons are outputting an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could add -mca odls_base_verbose 5 --leave-session-attached to your cmd line. 
</span><br>
<span class="quotelev1"> &gt; You'll see debug output from each daemon as it receives and processes
</span><br>
<span class="quotelev1">&gt; the launch command.  See if the daemon on 005 is behaving differently than the others.
</span><br>
<p>I've tried the options.
<br>
The map seem to be correctly build, also the output if the daemons seem 
<br>
to be the same (see helloworld.txt)
<br>
<p><span class="quotelev1">&gt; You should also try putting that long list of nodes in a hostfile - see if that makes a difference.
</span><br>
<span class="quotelev1"> &gt; It will process the nodes thru a different code path, so if there is 
</span><br>
some problem in --host,
<br>
<span class="quotelev1">&gt; this will tell us.
</span><br>
<p>No, with the host file instead of host list on command line the 
<br>
behaviour is the same.
<br>
<p>But, I just found out that the 1.4.3 does *not* hang on this 
<br>
constellation. The next thing I will try will be the installation of 
<br>
1.5.4 :o)
<br>
<p>Best,
<br>
<p>Paul
<br>
<p>P.S. started:
<br>
<p>$ /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec --hostfile 
<br>
hostfile-mini -mca odls_base_verbose 5 --leave-session-attached 
<br>
--display-map  helloworld 2&gt;&amp;1 | tee helloworld.txt
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 21, 2011, at 9:33 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello Open MPI volks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We use OpenMPI 1.5.3 on our pretty new 1800+ nodes InfiniBand cluster, and we have some strange hangups if starting OpenMPI processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The nodes are named linuxbsc001,linuxbsc002,... (with some lacuna due of  offline nodes). Each node is accessible from each other over SSH (without password), also MPI programs between any two nodes are checked to run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So long, I tried to start some bigger number of processes, one process per node:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -np NN  --host linuxbsc001,linuxbsc002,... MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now the problem: there are some constellations of names in the host list on which mpiexec reproducible hangs forever; and more surprising: other *permutation* of the *same* node names may run without any errors!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example: the command in laueft.txt runs OK, the command in haengt.txt hangs. Note: the only difference is that the node linuxbsc025 is put on the end of the host list. Amazed, too?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking on the particular nodes during the above mpiexec hangs, we found the orted daemons started on *each* node and the binary on all but one node (orted.txt, MPI_FastTest.txt).
</span><br>
<span class="quotelev2">&gt;&gt; Again amazing that the node with no user process started (leading to hangup in MPI_Init of all processes and thus to hangup, I believe) was always the same, linuxbsc005, which is NOT the permuted item linuxbsc025...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This behaviour is reproducible. The hang-on only occure if the started application is a MPI application (&quot;hostname&quot; does not hang).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any Idea what is gonna on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S: no alias names used, all names are real ones
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc001: STDOUT: 24323 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc002: STDOUT:  2142 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc003: STDOUT: 69266 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc004: STDOUT: 58899 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc006: STDOUT: 68255 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc007: STDOUT: 62026 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc008: STDOUT: 54221 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc009: STDOUT: 55482 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc010: STDOUT: 59380 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc011: STDOUT: 58312 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc014: STDOUT: 56013 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc016: STDOUT: 58563 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc017: STDOUT: 54693 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc018: STDOUT: 54187 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc020: STDOUT: 55811 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc021: STDOUT: 54982 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc022: STDOUT: 50032 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc023: STDOUT: 54044 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc024: STDOUT: 51247 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc025: STDOUT: 18575 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc027: STDOUT: 48969 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc028: STDOUT: 52397 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc029: STDOUT: 52780 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc030: STDOUT: 47537 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc031: STDOUT: 54609 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc032: STDOUT: 52833 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; $ timex /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec -np 27  --host 
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc001,linuxbsc002,linuxbsc003,linuxbsc004,linuxbsc005,linuxbsc006,linuxbsc007,linuxbsc008,linuxbsc009,linuxbsc010,linuxbsc011,linuxbsc014,linuxbsc016,linuxbsc017,linuxbsc018,linuxbsc020,linuxbsc021,linuxbsc022,linuxbsc023,linuxbsc024,linuxbsc025,linuxbsc027,linuxbsc028,linuxbsc029,linuxbsc030,linuxbsc031,linuxbsc032 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; $ timex /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec -np 27  --host 
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc001,linuxbsc002,linuxbsc003,linuxbsc004,linuxbsc005,linuxbsc006,linuxbsc007,linuxbsc008,linuxbsc009,linuxbsc010,linuxbsc011,linuxbsc014,linuxbsc016,linuxbsc017,linuxbsc018,linuxbsc020,linuxbsc021,linuxbsc022,linuxbsc023,linuxbsc024,linuxbsc027,linuxbsc028,linuxbsc029,linuxbsc030,linuxbsc031,linuxbsc032,linuxbsc025 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FastTest.exe
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc001: STDOUT: 24322 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc002: STDOUT:  2141 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc003: STDOUT: 69265 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc004: STDOUT: 58898 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 4 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc005: STDOUT: 65642 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 5 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc006: STDOUT: 68254 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 6 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc007: STDOUT: 62025 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 7 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc008: STDOUT: 54220 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 8 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc009: STDOUT: 55481 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 9 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc010: STDOUT: 59379 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 10 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc011: STDOUT: 58311 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 11 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc014: STDOUT: 56012 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 12 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc016: STDOUT: 58562 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 13 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc017: STDOUT: 54692 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 14 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc018: STDOUT: 54186 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 15 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc020: STDOUT: 55810 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 16 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc021: STDOUT: 54981 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 17 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc022: STDOUT: 50031 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 18 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc023: STDOUT: 54043 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 19 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc024: STDOUT: 51246 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 20 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc025: STDOUT: 18574 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 21 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc027: STDOUT: 48968 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 22 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc028: STDOUT: 52396 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 23 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc029: STDOUT: 52779 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 24 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc030: STDOUT: 47536 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 25 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc031: STDOUT: 54608 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 26 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; linuxbsc032: STDOUT: 52832 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 27 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
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
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
linuxbsc005 slots=1
<br>
linuxbsc006 slots=1
<br>
linuxbsc007 slots=1
<br>
linuxbsc008 slots=1
<br>
linuxbsc009 slots=1
<br>
linuxbsc010 slots=1
<br>
linuxbsc011 slots=1
<br>
linuxbsc014 slots=1
<br>
linuxbsc016 slots=1
<br>
linuxbsc017 slots=1
<br>
linuxbsc018 slots=1
<br>
linuxbsc020 slots=1
<br>
linuxbsc021 slots=1
<br>
linuxbsc022 slots=1
<br>
linuxbsc023 slots=1
<br>
linuxbsc024 slots=1
<br>
linuxbsc025 slots=1<br>

<br><p>
[linuxc2.rz.RWTH-Aachen.DE:22229] mca:base:select:( odls) Querying component [default]
<br>
[linuxc2.rz.RWTH-Aachen.DE:22229] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxc2.rz.RWTH-Aachen.DE:22229] mca:base:select:( odls) Selected component [default]
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: linuxbsc005	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 0
<br>
<p>&nbsp;Data for node: linuxbsc006	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 1
<br>
<p>&nbsp;Data for node: linuxbsc007	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 2
<br>
<p>&nbsp;Data for node: linuxbsc008	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 3
<br>
<p>&nbsp;Data for node: linuxbsc009	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 4
<br>
<p>&nbsp;Data for node: linuxbsc010	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 5
<br>
<p>&nbsp;Data for node: linuxbsc011	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 6
<br>
<p>&nbsp;Data for node: linuxbsc014	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 7
<br>
<p>&nbsp;Data for node: linuxbsc016	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 8
<br>
<p>&nbsp;Data for node: linuxbsc017	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 9
<br>
<p>&nbsp;Data for node: linuxbsc018	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 10
<br>
<p>&nbsp;Data for node: linuxbsc020	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 11
<br>
<p>&nbsp;Data for node: linuxbsc021	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 12
<br>
<p>&nbsp;Data for node: linuxbsc022	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 13
<br>
<p>&nbsp;Data for node: linuxbsc023	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 14
<br>
<p>&nbsp;Data for node: linuxbsc024	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 15
<br>
<p>&nbsp;Data for node: linuxbsc025	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [87,1] Process rank: 16
<br>
<p>&nbsp;=============================================================
<br>
[linuxbsc007.rz.RWTH-Aachen.DE:07574] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc007.rz.RWTH-Aachen.DE:07574] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc007.rz.RWTH-Aachen.DE:07574] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc016.rz.RWTH-Aachen.DE:03146] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc016.rz.RWTH-Aachen.DE:03146] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc016.rz.RWTH-Aachen.DE:03146] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc005.rz.RWTH-Aachen.DE:22051] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc005.rz.RWTH-Aachen.DE:22051] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc005.rz.RWTH-Aachen.DE:22051] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc011.rz.RWTH-Aachen.DE:07131] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc011.rz.RWTH-Aachen.DE:07131] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc011.rz.RWTH-Aachen.DE:07131] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc025.rz.RWTH-Aachen.DE:43153] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc025.rz.RWTH-Aachen.DE:43153] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc025.rz.RWTH-Aachen.DE:43153] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc017.rz.RWTH-Aachen.DE:05044] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc017.rz.RWTH-Aachen.DE:05044] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc017.rz.RWTH-Aachen.DE:05044] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc018.rz.RWTH-Aachen.DE:01840] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc018.rz.RWTH-Aachen.DE:01840] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc018.rz.RWTH-Aachen.DE:01840] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc024.rz.RWTH-Aachen.DE:79549] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc024.rz.RWTH-Aachen.DE:79549] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc024.rz.RWTH-Aachen.DE:79549] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc022.rz.RWTH-Aachen.DE:73501] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc022.rz.RWTH-Aachen.DE:73501] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc022.rz.RWTH-Aachen.DE:73501] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc023.rz.RWTH-Aachen.DE:03364] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc023.rz.RWTH-Aachen.DE:03364] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc023.rz.RWTH-Aachen.DE:03364] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc006.rz.RWTH-Aachen.DE:16811] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc006.rz.RWTH-Aachen.DE:16811] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc006.rz.RWTH-Aachen.DE:16811] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc014.rz.RWTH-Aachen.DE:10206] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc014.rz.RWTH-Aachen.DE:10206] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc014.rz.RWTH-Aachen.DE:10206] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc008.rz.RWTH-Aachen.DE:00858] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc008.rz.RWTH-Aachen.DE:00858] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc008.rz.RWTH-Aachen.DE:00858] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc010.rz.RWTH-Aachen.DE:09727] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc010.rz.RWTH-Aachen.DE:09727] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc010.rz.RWTH-Aachen.DE:09727] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc020.rz.RWTH-Aachen.DE:06680] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc020.rz.RWTH-Aachen.DE:06680] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc020.rz.RWTH-Aachen.DE:06680] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc009.rz.RWTH-Aachen.DE:05145] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc009.rz.RWTH-Aachen.DE:05145] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc009.rz.RWTH-Aachen.DE:05145] mca:base:select:( odls) Selected component [default]
<br>
[linuxbsc021.rz.RWTH-Aachen.DE:01405] mca:base:select:( odls) Querying component [default]
<br>
[linuxbsc021.rz.RWTH-Aachen.DE:01405] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[linuxbsc021.rz.RWTH-Aachen.DE:01405] mca:base:select:( odls) Selected component [default]
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17813/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17814.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17812.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17814.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17814.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
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
