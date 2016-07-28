<?
$subject_val = "[OMPI users] Job dies randomly, but only through torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 12:14:40 2008" -->
<!-- isoreceived="20080527161440" -->
<!-- sent="Tue, 27 May 2008 09:14:30 -0700" -->
<!-- isosent="20080527161430" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] Job dies randomly, but only through torque" -->
<!-- id="df8c8a6d0805270914n127197cci7c9dc38ac123e1ea_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Job dies randomly, but only through torque<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-27 12:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5737.php">Jeff Squyres: "[OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I've got a problem with a users' MPI job.  This code is in use on
<br>
dozzens of clusters around the world, but for some reason, when run on
<br>
my Rocks 4.3 cluster, it dies at random timesteps.  The logs are quite
<br>
unhelpful:
<br>
<p>[root_at_aeolus logs]# more 2047.aeolus.OU
<br>
Warning: no access to tty (Bad file descriptor).
<br>
Thus no job control in this shell.
<br>
data directory is  /mnt/pvfs2/patton/data/chem/aa1
<br>
exec directory is  /mnt/pvfs2/patton/exec/chem/aa1
<br>
arch directory is  /mnt/pvfs2/patton/data/chem/aa1
<br>
mpirun: killing job...
<br>
<p>Terminated
<br>
--------------------------------------------------------------------------
<br>
WARNING: mpirun is in the process of killing a job, but has detected an
<br>
interruption (probably control-C).
<br>
<p>It is dangerous to interrupt mpirun while it is killing a job (proper
<br>
termination may not be guaranteed).  Hit control-C again within 1
<br>
second if you really want to kill mpirun immediately.
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:03444] OOB: Connection to HNP lost
<br>
<p>We've been trying to figure out what's going on....We've tried
<br>
different datasets, different nodes, different numbers of processors.
<br>
We started on OpenMPI 1.2.4 and upgraded to 1.2.6, with no change.
<br>
We've connected the compute node to the head node directly (bypassing
<br>
the switch, etc.) with no change.  It doesn't matter where the data is
<br>
stored...  If we run with nodes=1 (single threaded, single cpu), then
<br>
it runs through to completion.
<br>
<p>The only clue we've found happened this morning:  If we run the job
<br>
directly with mpirun (torque has no knowledge), it runs fine.  But
<br>
submit it through torque+maui, and it dies as above.
<br>
<p>I'm at a loss at this point as to how to troubleshoot this further.
<br>
Is there a way to get more details on torque about this?  Turn up
<br>
logging?  Any known issues that might effect this?  I have about a
<br>
dozzen users running on the cluster, all using the scheduler, about
<br>
half of which are MPI (and some are using nearly the entire cluster on
<br>
a run), all without any such problems.  Any suggestions?
<br>
<p>--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5737.php">Jeff Squyres: "[OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
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
