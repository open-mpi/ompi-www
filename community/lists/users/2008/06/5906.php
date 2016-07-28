<?
$subject_val = "[OMPI users] orted runs on host, but doesn't seem to communicate";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 10:44:13 2008" -->
<!-- isoreceived="20080617144413" -->
<!-- sent="Tue, 17 Jun 2008 16:44:07 +0200" -->
<!-- isosent="20080617144407" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] orted runs on host, but doesn't seem to communicate" -->
<!-- id="9b0da5ce0806170744x420839d0r7bce5f5c9c8563b2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0806110713q780e718dj2c8462d23bb77e17_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] orted runs on host, but doesn't seem to communicate<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 10:44:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5907.php">Ralph H Castain: "Re: [OMPI users] Application Context and OpenMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5905.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5860.php">jody: "[OMPI users] orted runs on host, but doesn't seem to communicate"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Since i upgraded from open-mpi .2.2 to open-mpi 1.2.5 and
<br>
had to reinstall my machine aim-plankton (fedora 8 instead of fedora 6)
<br>
open-mpi doesn't work correctly anymore:
<br>
<p>When i start an application from aim-plankton to run on an other machine,
<br>
it seems to hang (no output, not even from debug-daemons).
<br>
[jody_at_aim-plankton ~] $ mpirun -np 1 --debug-daemons --host
<br>
aim-nano1.uzh.ch MPITest
<br>
<p>However, this action causes the creation of an orted process on the
<br>
other machine:
<br>
[jody_at_aim-nano1 ~] $ ps ax | grep orted
<br>
&nbsp;7680 ?        Ss     0:00 /opt/openmpi/bin/orted --bootproxy 1 --name
<br>
0.0.1 --num_procs 2 --vpid_start 0 --nodename aim-nano1.uzh.ch
<br>
--universe jody_at_[hidden]:default-universe-9422 --nsreplica
<br>
0.0.0;tcp://130.60.126.111:60229 --gprreplica
<br>
0.0.0;tcp://130.60.126.111:60229
<br>
&nbsp;7772 pts/0    S+     0:00 grep --colour=auto orted
<br>
<p><p>The other way round it works without problems
<br>
[jody_at_aim-nano1 ~] $ mpirun -np 1 --debug-daemons --host aim-plankton MPITest
<br>
Daemon [0,0,1] checking in as pid 9759 on host aim-plankton
<br>
[aim-plankton.uzh.ch:09759] [0,0,1] orted: received launch callback
<br>
[aim-plankton.uzh.ch]I am #0/1 global
<br>
[aim-plankton.uzh.ch:09759] [0,0,1] orted_recv_pls: received message
<br>
from [0,0,0]
<br>
[aim-plankton.uzh.ch:09759] [0,0,1] orted_recv_pls: received exit
<br>
<p>ssh works perfectly in both directions, with or without login.
<br>
<p>My open-mpi setup worked well before. What happened since
<br>
was an upgrade to open-mpi 1.2.5 on all machines, and
<br>
a change from fedora 6 to fedora 8 on aim-plankton, the badly behaving machine.
<br>
<p>Does anybody have a suggestion where i should start looking?
<br>
<p>Thank you
<br>
&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5907.php">Ralph H Castain: "Re: [OMPI users] Application Context and OpenMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5905.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5860.php">jody: "[OMPI users] orted runs on host, but doesn't seem to communicate"</a>
<!-- nextthread="start" -->
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
