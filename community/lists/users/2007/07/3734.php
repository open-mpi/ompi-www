<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 09:04:16 2007" -->
<!-- isoreceived="20070723130416" -->
<!-- sent="Mon, 23 Jul 2007 09:04:13 -0400" -->
<!-- isosent="20070723130413" -->
<!-- name="Kelley, Sean" -->
<!-- email="Sean.Kelley_at_[hidden]" -->
<!-- subject="[OMPI users] orterun --bynode/--byslot problem" -->
<!-- id="864805E437EF7C40986276CE00F29E4C9D9DEF_at_ava-es5.solers.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE83AC414_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> Kelley, Sean (<em>Sean.Kelley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 09:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3735.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Previous message:</strong> <a href="3733.php">Derrick Kondo: "[OMPI users] EuroPVM/MPI'07 -- Call for Participation"</a>
<li><strong>In reply to:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3735.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Reply:</strong> <a href="3735.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are experiencing a problem with the process allocation on our Open MPI cluster. We are using Scyld 4.1 (BPROC), the OFED 1.2 Topspin Infiniband drivers, Open MPI 1.2.3 + patch (to run processes on the head node). The hardware consists of a head node and N blades on private ethernet and infiniband networks.
<br>
&nbsp;
<br>
The command run for these tests is a simple MPI program (called 'hn') which prints out the rank and the hostname. The hostname for the head node is 'head' and the compute nodes are '.0' ... '.9'.
<br>
&nbsp;
<br>
We are using the following hostfiles for this example:
<br>
&nbsp;
<br>
hostfile7
<br>
-1 max_slots=1
<br>
0 max_slots=3
<br>
1 max_slots=3
<br>
&nbsp;
<br>
hostfile8
<br>
-1 max_slots=2
<br>
0 max_slots=3
<br>
1 max_slots=3
<br>
&nbsp;
<br>
hostfile9
<br>
-1 max_slots=3
<br>
0 max_slots=3
<br>
1 max_slots=3
<br>
&nbsp;
<br>
running the following commands:
<br>
&nbsp;
<br>
orterun --hostfile hostfile7 -np 7 ./hn
<br>
orterun --hostfile hostfile8 -np 8 ./hn
<br>
orterun --byslot --hostfile hostfile7 -np 7 ./hn
<br>
orterun --byslot --hostfile hostfile8 -np 8 ./hn
<br>
&nbsp;
<br>
causes orterun to crash. However,
<br>
&nbsp;
<br>
orterun --hostfile hostfile9 -np 9 ./hn
<br>
ortetrun --byslot --hostfile hostfile9 -np 9 ./hn
<br>
&nbsp;
<br>
works outputing the following:
<br>
&nbsp;
<br>
0 head
<br>
1 head
<br>
2 head
<br>
3 .0
<br>
4 .0
<br>
5 .0
<br>
6 .0
<br>
7 .0
<br>
8 .0
<br>
&nbsp;
<br>
However, running the following:
<br>
&nbsp;
<br>
orterun --bynode --hostfile hostfile7 -np 7 ./hn 
<br>
&nbsp;
<br>
works, outputing the following
<br>
&nbsp;
<br>
0 head
<br>
1 .0
<br>
2 .1
<br>
3 .0
<br>
4 .1
<br>
5 .0
<br>
6 .1
<br>
&nbsp;
<br>
Is the '--byslot' crash a known problem? Does it have something to do with BPROC? Thanks in advance for any assistance!
<br>
&nbsp;
<br>
Sean
<br>
&nbsp;
<br>
<p>
<br><hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3734/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3735.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Previous message:</strong> <a href="3733.php">Derrick Kondo: "[OMPI users] EuroPVM/MPI'07 -- Call for Participation"</a>
<li><strong>In reply to:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3735.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Reply:</strong> <a href="3735.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
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
