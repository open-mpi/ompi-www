<?
$subject_val = "Re: [OMPI users] memory cg '(null)'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 20 09:03:09 2016" -->
<!-- isoreceived="20160620130309" -->
<!-- sent="Mon, 20 Jun 2016 13:03:06 +0000" -->
<!-- isosent="20160620130306" -->
<!-- name="Ahmed Rizwan" -->
<!-- email="rizwan.ahmed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory cg '(null)'" -->
<!-- id="F878C5EFABB09E468E9CBF778CCCF07D332EC6_at_EXMDB08.org.aalto.fi" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4343_1466424679_5767DD67_4343_95_2_CAAkFZ5u1c6vE-ZpPVgNSZ1mjEssOw13tzW-FpirfQbYTV4HxBQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memory cg '(null)'<br>
<strong>From:</strong> Ahmed Rizwan (<em>rizwan.ahmed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-20 09:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Previous message:</strong> <a href="29486.php">Gilles Gouaillardet: "[OMPI users]  memory cg '(null)'"</a>
<li><strong>Maybe in reply to:</strong> <a href="29485.php">Ahmed Rizwan: "[OMPI users] memory cg '(null)'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Reply:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>Thanks for the support. :)
<br>
<p>This is a test which I am running on a single node, but I am intending to run calculations on multiple nodes. You mean it wouldn't work on multiple nodes? If I run on multiple nodes, how can I avoid these errors then? I would just test it for multiple nodes.
<br>
<p>Regards,
<br>
Rizwan
<br>
________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
<br>
Sent: Monday, June 20, 2016 3:10 PM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] memory cg '(null)'
<br>
<p>There are two points here
<br>
1. slurm(stepd) is unable to put the processes in the (null) cgroup.
<br>
&nbsp;&nbsp;&nbsp;at first glance, this looks more of a slurm jus configuration
<br>
2. the MPI process forking. though this has a much better support than in the past, that might not always work, especially with fast interconnects. since you are running on a single node, you should be fine. simply
<br>
export OMPI_MCA_mpi_warn_on_fork=0
<br>
before invoking srun, in order to silence this message.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, June 20, 2016, Ahmed Rizwan &lt;rizwan.ahmed_at_[hidden]&lt;UrlBlockedError.aspx&gt;&gt; wrote:
<br>
Dear MPI users,
<br>
<p>I am getting the errors below while submitting/executing following script,
<br>
<p>#!/bin/sh
<br>
#SBATCH -p short
<br>
#SBATCH -J layers
<br>
#SBATCH -n 12
<br>
#SBATCH -N 1
<br>
#SBATCH -t 01:30:00
<br>
#SBATCH --mem-per-cpu=2500
<br>
#SBATCH --exclusive
<br>
#SBATCH --mail-type=END
<br>
#SBATCH --mail-user=rizwan.ahmed_at_[hidden]
<br>
#SBATCH -o output_%j.out
<br>
#SBATCH -e errors_%j.err
<br>
<p>srun --mpi=pmi2 gpaw-python layers.py
<br>
<p>--------------------------------------------------------------------------
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=126453] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=80379] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=124258] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=124259] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=124261] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=124266] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=124264] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=124262] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=124260] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=124265] to memory cg '(null)'
<br>
slurmstepd: error: task/cgroup: unable to add task[pid=124263] to memory cg '(null)'
<br>
--------------------------------------------------------------------------
<br>
An MPI process has executed an operation involving a call to the
<br>
&quot;fork()&quot; system call to create a child process.  Open MPI is currently
<br>
operating in a condition that could result in memory corruption or
<br>
other system errors; your MPI job may hang, crash, or produce silent
<br>
data corruption.  The use of fork() (or system() or other calls that
<br>
create child processes) is strongly discouraged.
<br>
<p>The process that invoked fork was:
<br>
<p>&nbsp;&nbsp;Local host:          pe38 (PID 80379)
<br>
&nbsp;&nbsp;MPI_COMM_WORLD rank: 1
<br>
<p>If you are *absolutely sure* that your application will successfully
<br>
and correctly survive a call to fork(), you may disable this warning
<br>
by setting the mpi_warn_on_fork MCA parameter to 0.
<br>
--------------------------------------------------------------------------
<br>
<p>Is this error fatal or should it be ignored? Thanks
<br>
Regards,
<br>
Rizwan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29487/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Previous message:</strong> <a href="29486.php">Gilles Gouaillardet: "[OMPI users]  memory cg '(null)'"</a>
<li><strong>Maybe in reply to:</strong> <a href="29485.php">Ahmed Rizwan: "[OMPI users] memory cg '(null)'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Reply:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
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
