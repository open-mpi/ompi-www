<?
$subject_val = "[OMPI users] SGE integration when getting slots from different queues on one and the same host mismatch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 06:34:51 2010" -->
<!-- isoreceived="20100810103451" -->
<!-- sent="Tue, 10 Aug 2010 12:34:38 +0200" -->
<!-- isosent="20100810103438" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="[OMPI users] SGE integration when getting slots from different queues on one and the same host mismatch" -->
<!-- id="13D5151A-474F-4787-9D2A-9562DD6FB66A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> [OMPI users] SGE integration when getting slots from different queues on one and the same host mismatch<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 06:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
<li><strong>Previous message:</strong> <a href="13953.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just stumped into the following behavior of Open MPI 1.4.2. Used jobscript:
<br>
<p>***
<br>
#!/bin/sh
<br>
export PATH=~/local/openmpi-1.4.2/bin:$PATH
<br>
cat $PE_HOSTFILE
<br>
mpiexec ./dummy.sh
<br>
***
<br>
<p>with dummy.sh:
<br>
<p>***
<br>
#!/bin/sh
<br>
env | grep TMPDIR
<br>
sleep 30
<br>
***
<br>
===
<br>
Situation 1: getting 4 slots in total from 2 queues on 2 nodes. Output:
<br>
<p>pc15381 1 extra.q_at_pc15381 UNDEFINED
<br>
pc15370 1 extra.q_at_pc15370 UNDEFINED
<br>
pc15381 1 all.q_at_pc15381 UNDEFINED
<br>
pc15370 1 all.q_at_pc15370 UNDEFINED
<br>
TMPDIR=/tmp/1888.1.extra.q
<br>
TMPDIR=/tmp/1888.1.extra.q
<br>
TMPDIR=/tmp/1888.1.extra.q
<br>
<p>The slot of the master is in the first line of the PE_HOSTFILE. The job runs on pc15381, with one local fork of dummy.sh and doing two times a `qrsh -inherit` from pc15381 to pc15370 (checked with `ps -e f`). So only 3 instances are running, instead of four.
<br>
<p>===
<br>
Situation 2: getting 4 slots in total from 2 queues on one and the same node.
<br>
<p>pc15370 2 all.q_at_pc15370 UNDEFINED
<br>
pc15370 2 extra.q_at_pc15370 UNDEFINED
<br>
TMPDIR=/tmp/1889.1.all.q
<br>
TMPDIR=/tmp/1889.1.all.q
<br>
<p>It looks like for the master node of the parallel job, always only one entry of the PE_HOSTFILE is honored. So 2 processes are missing here.
<br>
<p>==
<br>
<p>So I see two isuses:
<br>
<p>(1) Number of started tasks is wrong. I'm not sure, whether the correct behavior should be:
<br>
<p>a) add up all slots for each machine, also for the master node of the job, and fork this number of slots
<br>
<p>b) fork only the slots mentioned for the master queue of the job, and make a local `qrsh -inherit` for the slots running in a different queue on the same host. So the third column of the PE_HOSTFILE should be honored too.
<br>
<p><p>(2) In situation 1: from the example, one slot on pc15370 should run in all.q and get an appropriate $TMPDIR. This is of course a bug in SGE, which I will investigate on the SGE list.
<br>
<p><p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
<li><strong>Previous message:</strong> <a href="13953.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
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
