<?
$subject_val = "[OMPI users]  memory cg '(null)'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 20 08:10:49 2016" -->
<!-- isoreceived="20160620121049" -->
<!-- sent="Mon, 20 Jun 2016 21:10:47 +0900" -->
<!-- isosent="20160620121047" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI users]  memory cg '(null)'" -->
<!-- id="CAAkFZ5u1c6vE-ZpPVgNSZ1mjEssOw13tzW-FpirfQbYTV4HxBQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F878C5EFABB09E468E9CBF778CCCF07D332D0D_at_EXMDB08.org.aalto.fi" -->
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
<strong>Subject:</strong> [OMPI users]  memory cg '(null)'<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-20 08:10:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29487.php">Ahmed Rizwan: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Previous message:</strong> <a href="29485.php">Ahmed Rizwan: "[OMPI users] memory cg '(null)'"</a>
<li><strong>In reply to:</strong> <a href="29485.php">Ahmed Rizwan: "[OMPI users] memory cg '(null)'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29487.php">Ahmed Rizwan: "Re: [OMPI users] memory cg '(null)'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two points here
<br>
1. slurm(stepd) is unable to put the processes in the (null) cgroup.
<br>
&nbsp;&nbsp;&nbsp;at first glance, this looks more of a slurm jus configuration
<br>
2. the MPI process forking. though this has a much better support than in
<br>
the past, that might not always work, especially with fast interconnects.
<br>
since you are running on a single node, you should be fine. simply
<br>
export OMPI_MCA_mpi_warn_on_fork=0
<br>
before invoking srun, in order to silence this message.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, June 20, 2016, Ahmed Rizwan &lt;rizwan.ahmed_at_[hidden]
<br>
&lt;javascript:_e(%7B%7D,'cvml','rizwan.ahmed_at_[hidden]');&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear MPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting the errors below while submitting/executing following script,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #SBATCH -p short
</span><br>
<span class="quotelev1">&gt; #SBATCH -J layers
</span><br>
<span class="quotelev1">&gt; #SBATCH -n 12
</span><br>
<span class="quotelev1">&gt; #SBATCH -N 1
</span><br>
<span class="quotelev1">&gt; #SBATCH -t 01:30:00
</span><br>
<span class="quotelev1">&gt; #SBATCH --mem-per-cpu=2500
</span><br>
<span class="quotelev1">&gt; #SBATCH --exclusive
</span><br>
<span class="quotelev1">&gt; #SBATCH --mail-type=END
</span><br>
<span class="quotelev1">&gt; #SBATCH --mail-user=rizwan.ahmed_at_[hidden]
</span><br>
<span class="quotelev1">&gt; #SBATCH -o output_%j.out
</span><br>
<span class="quotelev1">&gt; #SBATCH -e errors_%j.err
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; srun --mpi=pmi2 gpaw-python layers.py
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=126453] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=80379] to memory cg
</span><br>
<span class="quotelev1">&gt; '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124258] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124259] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124261] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124266] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124264] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124262] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124260] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124265] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124263] to memory
</span><br>
<span class="quotelev1">&gt; cg '(null)'
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev1">&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev1">&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev1">&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev1">&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev1">&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process that invoked fork was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:          pe38 (PID 80379)
</span><br>
<span class="quotelev1">&gt;   MPI_COMM_WORLD rank: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are *absolutely sure* that your application will successfully
</span><br>
<span class="quotelev1">&gt; and correctly survive a call to fork(), you may disable this warning
</span><br>
<span class="quotelev1">&gt; by setting the mpi_warn_on_fork MCA parameter to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this error fatal or should it be ignored? Thanks
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rizwan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29486/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29487.php">Ahmed Rizwan: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Previous message:</strong> <a href="29485.php">Ahmed Rizwan: "[OMPI users] memory cg '(null)'"</a>
<li><strong>In reply to:</strong> <a href="29485.php">Ahmed Rizwan: "[OMPI users] memory cg '(null)'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29487.php">Ahmed Rizwan: "Re: [OMPI users] memory cg '(null)'"</a>
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
