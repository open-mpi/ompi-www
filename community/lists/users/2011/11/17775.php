<?
$subject_val = "[OMPI users] Program hangs in mpi_bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 17:08:50 2011" -->
<!-- isoreceived="20111114220850" -->
<!-- sent="Mon, 14 Nov 2011 14:10:01 -0800" -->
<!-- isosent="20111114221001" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] Program hangs in mpi_bcast" -->
<!-- id="1321308601.4260.77.camel_at_cedar.reachone.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Program hangs in mpi_bcast<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 17:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17776.php">Enzo Dari: "[OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>Previous message:</strong> <a href="17774.php">Reuti: "Re: [OMPI users] Printing information on computing nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17777.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Reply:</strong> <a href="17777.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello:
<br>
<p>A colleague and I have been running a large F90 application that does an
<br>
enormous number of mpi_bcast calls during execution.  I deny any
<br>
responsibility for the design of the code and why it needs these calls,
<br>
but it is what we have inherited and have to work with.
<br>
<p>Recently we ported the code to an 8 node, 6 processor/node NUMA system
<br>
(lstopo output attached) running Debian linux 6.0.3 with Open_MPI 1.5.3,
<br>
and began having trouble with mysterious 'hangs' in the program inside
<br>
the mpi_bcast calls.  The hangs were always in the same calls, but not
<br>
necessarily at the same time during integration.  We originally didn't
<br>
have NUMA support, so reinstalled with libnuma support added, but the
<br>
problem persisted.  Finally, just as a wild guess, we inserted
<br>
'mpi_barrier' calls just before the 'mpi_bcast' calls, and the program
<br>
now runs without problems.
<br>
<p>I believe conventional wisdom is that properly formulated MPI programs
<br>
should run correctly without barriers, so do you have any thoughts on
<br>
why we found it necessary to add them?  The code has run correctly on
<br>
other architectures, i.g. Crayxe6, so I don't think there is a bug
<br>
anywhere.  My only explanation is that some internal resource gets
<br>
exhausted because of the large number of 'mpi_bcast' calls in rapid
<br>
succession, and the barrier calls force synchronization which allows the
<br>
resource to be restored.  Does this make sense?  I'd appreciate any
<br>
comments and advice you can provide.
<br>
<p><p>I have attached compressed copies of config.log and ompi_info for the
<br>
system.  The program is built with ifort 12.0 and typically runs with 
<br>
<p>&nbsp;&nbsp;mpirun -np 36 -bycore -bind-to-core program.exe
<br>
<p>We have run both interactively and with PBS, but that doesn't seem to
<br>
make any difference in program behavior.
<br>
<p>T. Rosmond
<br>
<p><p><p>
<p>
Machine (128GB)
<br>
&nbsp;&nbsp;Socket L#0 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 16GB) + L3 L#0 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (512KB) + L1 L#0 (64KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (512KB) + L1 L#1 (64KB) + Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (512KB) + L1 L#2 (64KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (512KB) + L1 L#3 (64KB) + Core L#3 + PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (512KB) + L1 L#4 (64KB) + Core L#4 + PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (512KB) + L1 L#5 (64KB) + Core L#5 + PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 16GB) + L3 L#1 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (512KB) + L1 L#6 (64KB) + Core L#6 + PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (512KB) + L1 L#7 (64KB) + Core L#7 + PU L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (512KB) + L1 L#8 (64KB) + Core L#8 + PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (512KB) + L1 L#9 (64KB) + Core L#9 + PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (512KB) + L1 L#10 (64KB) + Core L#10 + PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (512KB) + L1 L#11 (64KB) + Core L#11 + PU L#11 (P#11)
<br>
&nbsp;&nbsp;Socket L#1 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#2 (P#2 16GB) + L3 L#2 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#12 (512KB) + L1 L#12 (64KB) + Core L#12 + PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#13 (512KB) + L1 L#13 (64KB) + Core L#13 + PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#14 (512KB) + L1 L#14 (64KB) + Core L#14 + PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#15 (512KB) + L1 L#15 (64KB) + Core L#15 + PU L#15 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#16 (512KB) + L1 L#16 (64KB) + Core L#16 + PU L#16 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#17 (512KB) + L1 L#17 (64KB) + Core L#17 + PU L#17 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#3 (P#3 16GB) + L3 L#3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#18 (512KB) + L1 L#18 (64KB) + Core L#18 + PU L#18 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#19 (512KB) + L1 L#19 (64KB) + Core L#19 + PU L#19 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#20 (512KB) + L1 L#20 (64KB) + Core L#20 + PU L#20 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#21 (512KB) + L1 L#21 (64KB) + Core L#21 + PU L#21 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#22 (512KB) + L1 L#22 (64KB) + Core L#22 + PU L#22 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#23 (512KB) + L1 L#23 (64KB) + Core L#23 + PU L#23 (P#23)
<br>
&nbsp;&nbsp;Socket L#2 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#4 (P#4 16GB) + L3 L#4 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#24 (512KB) + L1 L#24 (64KB) + Core L#24 + PU L#24 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#25 (512KB) + L1 L#25 (64KB) + Core L#25 + PU L#25 (P#25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#26 (512KB) + L1 L#26 (64KB) + Core L#26 + PU L#26 (P#26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#27 (512KB) + L1 L#27 (64KB) + Core L#27 + PU L#27 (P#27)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#28 (512KB) + L1 L#28 (64KB) + Core L#28 + PU L#28 (P#28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#29 (512KB) + L1 L#29 (64KB) + Core L#29 + PU L#29 (P#29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#5 (P#5 16GB) + L3 L#5 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#30 (512KB) + L1 L#30 (64KB) + Core L#30 + PU L#30 (P#30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#31 (512KB) + L1 L#31 (64KB) + Core L#31 + PU L#31 (P#31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#32 (512KB) + L1 L#32 (64KB) + Core L#32 + PU L#32 (P#32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#33 (512KB) + L1 L#33 (64KB) + Core L#33 + PU L#33 (P#33)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#34 (512KB) + L1 L#34 (64KB) + Core L#34 + PU L#34 (P#34)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#35 (512KB) + L1 L#35 (64KB) + Core L#35 + PU L#35 (P#35)
<br>
&nbsp;&nbsp;Socket L#3 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#6 (P#6 16GB) + L3 L#6 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#36 (512KB) + L1 L#36 (64KB) + Core L#36 + PU L#36 (P#36)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#37 (512KB) + L1 L#37 (64KB) + Core L#37 + PU L#37 (P#37)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#38 (512KB) + L1 L#38 (64KB) + Core L#38 + PU L#38 (P#38)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#39 (512KB) + L1 L#39 (64KB) + Core L#39 + PU L#39 (P#39)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#40 (512KB) + L1 L#40 (64KB) + Core L#40 + PU L#40 (P#40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#41 (512KB) + L1 L#41 (64KB) + Core L#41 + PU L#41 (P#41)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#7 (P#7 16GB) + L3 L#7 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#42 (512KB) + L1 L#42 (64KB) + Core L#42 + PU L#42 (P#42)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#43 (512KB) + L1 L#43 (64KB) + Core L#43 + PU L#43 (P#43)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#44 (512KB) + L1 L#44 (64KB) + Core L#44 + PU L#44 (P#44)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#45 (512KB) + L1 L#45 (64KB) + Core L#45 + PU L#45 (P#45)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#46 (512KB) + L1 L#46 (64KB) + Core L#46 + PU L#46 (P#46)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#47 (512KB) + L1 L#47 (64KB) + Core L#47 + PU L#47 (P#47)
<br>
<p>

<br><p>
<p><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17775/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17775/ompi_info.bz2">ompi_info.bz2</a>
</ul>
<!-- attachment="ompi_info.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17776.php">Enzo Dari: "[OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>Previous message:</strong> <a href="17774.php">Reuti: "Re: [OMPI users] Printing information on computing nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17777.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Reply:</strong> <a href="17777.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
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
