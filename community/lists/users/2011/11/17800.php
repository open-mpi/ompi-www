<?
$subject_val = "[OMPI users] How are the Open MPI processes spawned?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 11:33:22 2011" -->
<!-- isoreceived="20111121163322" -->
<!-- sent="Mon, 21 Nov 2011 17:33:17 +0100" -->
<!-- isosent="20111121163317" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] How are the Open MPI processes spawned?" -->
<!-- id="4ECA7D4D.30700_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] How are the Open MPI processes spawned?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 11:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17799.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Open MPI volks,
<br>
<p>We use OpenMPI 1.5.3 on our pretty new 1800+ nodes InfiniBand cluster, 
<br>
and we have some strange hangups if starting OpenMPI processes.
<br>
<p>The nodes are named linuxbsc001,linuxbsc002,... (with some lacuna due of 
<br>
&nbsp;&nbsp;offline nodes). Each node is accessible from each other over SSH 
<br>
(without password), also MPI programs between any two nodes are checked 
<br>
to run.
<br>
<p><p>So long, I tried to start some bigger number of processes, one process 
<br>
per node:
<br>
$ mpiexec -np NN  --host linuxbsc001,linuxbsc002,... MPI_FastTest.exe
<br>
<p>Now the problem: there are some constellations of names in the host list 
<br>
on which mpiexec reproducible hangs forever; and more surprising: other 
<br>
*permutation* of the *same* node names may run without any errors!
<br>
<p>Example: the command in laueft.txt runs OK, the command in haengt.txt 
<br>
hangs. Note: the only difference is that the node linuxbsc025 is put on 
<br>
the end of the host list. Amazed, too?
<br>
<p>Looking on the particular nodes during the above mpiexec hangs, we found 
<br>
the orted daemons started on *each* node and the binary on all but one 
<br>
node (orted.txt, MPI_FastTest.txt).
<br>
Again amazing that the node with no user process started (leading to 
<br>
hangup in MPI_Init of all processes and thus to hangup, I believe) was 
<br>
always the same, linuxbsc005, which is NOT the permuted item linuxbsc025...
<br>
<p>This behaviour is reproducible. The hang-on only occure if the started 
<br>
application is a MPI application (&quot;hostname&quot; does not hang).
<br>
<p><p>Any Idea what is gonna on?
<br>
<p><p>Best,
<br>
<p>Paul Kapinos
<br>
<p><p>P.S: no alias names used, all names are real ones
<br>
<p><p><p><p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
linuxbsc001: STDOUT: 24323 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc002: STDOUT:  2142 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc003: STDOUT: 69266 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc004: STDOUT: 58899 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc006: STDOUT: 68255 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc007: STDOUT: 62026 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc008: STDOUT: 54221 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc009: STDOUT: 55482 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc010: STDOUT: 59380 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc011: STDOUT: 58312 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc014: STDOUT: 56013 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc016: STDOUT: 58563 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc017: STDOUT: 54693 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc018: STDOUT: 54187 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc020: STDOUT: 55811 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc021: STDOUT: 54982 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc022: STDOUT: 50032 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc023: STDOUT: 54044 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc024: STDOUT: 51247 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc025: STDOUT: 18575 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc027: STDOUT: 48969 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc028: STDOUT: 52397 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc029: STDOUT: 52780 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc030: STDOUT: 47537 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc031: STDOUT: 54609 ?        SLl    0:00 MPI_FastTest.exe
<br>
linuxbsc032: STDOUT: 52833 ?        SLl    0:00 MPI_FastTest.exe
<br>
<p>
<br><p>
$ timex /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec -np 27  --host 
<br>
linuxbsc001,linuxbsc002,linuxbsc003,linuxbsc004,linuxbsc005,linuxbsc006,linuxbsc007,linuxbsc008,linuxbsc009,linuxbsc010,linuxbsc011,linuxbsc014,linuxbsc016,linuxbsc017,linuxbsc018,linuxbsc020,linuxbsc021,linuxbsc022,linuxbsc023,linuxbsc024,linuxbsc025,linuxbsc027,linuxbsc028,linuxbsc029,linuxbsc030,linuxbsc031,linuxbsc032 
<br>
MPI_FastTest.exe
<br>
<p>
<br><p>
$ timex /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec -np 27  --host 
<br>
linuxbsc001,linuxbsc002,linuxbsc003,linuxbsc004,linuxbsc005,linuxbsc006,linuxbsc007,linuxbsc008,linuxbsc009,linuxbsc010,linuxbsc011,linuxbsc014,linuxbsc016,linuxbsc017,linuxbsc018,linuxbsc020,linuxbsc021,linuxbsc022,linuxbsc023,linuxbsc024,linuxbsc027,linuxbsc028,linuxbsc029,linuxbsc030,linuxbsc031,linuxbsc032,linuxbsc025 
<br>
MPI_FastTest.exe
<br>
<p>
<p>
linuxbsc001: STDOUT: 24322 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc002: STDOUT:  2141 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc003: STDOUT: 69265 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc004: STDOUT: 58898 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 4 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc005: STDOUT: 65642 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 5 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc006: STDOUT: 68254 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 6 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc007: STDOUT: 62025 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 7 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc008: STDOUT: 54220 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 8 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc009: STDOUT: 55481 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 9 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc010: STDOUT: 59379 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 10 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc011: STDOUT: 58311 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 11 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc014: STDOUT: 56012 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 12 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc016: STDOUT: 58562 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 13 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc017: STDOUT: 54692 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 14 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc018: STDOUT: 54186 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 15 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc020: STDOUT: 55810 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 16 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc021: STDOUT: 54981 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 17 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc022: STDOUT: 50031 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 18 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc023: STDOUT: 54043 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 19 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc024: STDOUT: 51246 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 20 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc025: STDOUT: 18574 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 21 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc027: STDOUT: 48968 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 22 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc028: STDOUT: 52396 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 23 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc029: STDOUT: 52779 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 24 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc030: STDOUT: 47536 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 25 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc031: STDOUT: 54608 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 26 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
linuxbsc032: STDOUT: 52832 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 27 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17800/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17799.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
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
