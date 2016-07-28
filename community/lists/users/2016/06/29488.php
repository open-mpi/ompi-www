<?
$subject_val = "Re: [OMPI users] memory cg '(null)'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 20 09:38:34 2016" -->
<!-- isoreceived="20160620133834" -->
<!-- sent="Mon, 20 Jun 2016 22:38:24 +0900" -->
<!-- isosent="20160620133824" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory cg '(null)'" -->
<!-- id="CAAkFZ5sLu+Qz-iXzE=UWPhQFSGNYj4tEU3Bwh4zSj5h9bGyzrA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F878C5EFABB09E468E9CBF778CCCF07D332EC6_at_EXMDB08.org.aalto.fi" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-20 09:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29489.php">Jason Maldonis: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Previous message:</strong> <a href="29487.php">Ahmed Rizwan: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>In reply to:</strong> <a href="29487.php">Ahmed Rizwan: "Re: [OMPI users] memory cg '(null)'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29489.php">Jason Maldonis: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Reply:</strong> <a href="29489.php">Jason Maldonis: "Re: [OMPI users] memory cg '(null)'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no guarantee that will work on a multiple mode job.
<br>
tcp should be fine, infiniband might not work.
<br>
<p>the best way to be on the safe side is you rewrite your MPI app so it does
<br>
not invoke the fork system call. this is generally invoked directly, or via
<br>
the &quot;system&quot; subroutine.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, June 20, 2016, Ahmed Rizwan &lt;rizwan.ahmed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the support. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a test which I am running on a single node, but I am intending to
</span><br>
<span class="quotelev1">&gt; run calculations on multiple nodes. You mean it wouldn't work on multiple
</span><br>
<span class="quotelev1">&gt; nodes? If I run on multiple nodes, how can I avoid these errors then? I
</span><br>
<span class="quotelev1">&gt; would just test it for multiple nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rizwan
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;] on behalf
</span><br>
<span class="quotelev1">&gt; of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;]
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, June 20, 2016 3:10 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] memory cg '(null)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two points here
</span><br>
<span class="quotelev1">&gt; 1. slurm(stepd) is unable to put the processes in the (null) cgroup.
</span><br>
<span class="quotelev1">&gt;    at first glance, this looks more of a slurm jus configuration
</span><br>
<span class="quotelev1">&gt; 2. the MPI process forking. though this has a much better support than in
</span><br>
<span class="quotelev1">&gt; the past, that might not always work, especially with fast interconnects.
</span><br>
<span class="quotelev1">&gt; since you are running on a single node, you should be fine. simply
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_mpi_warn_on_fork=0
</span><br>
<span class="quotelev1">&gt; before invoking srun, in order to silence this message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday, June 20, 2016, Ahmed Rizwan &lt;rizwan.ahmed_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://UrlBlockedError.aspx">http://UrlBlockedError.aspx</a>&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear MPI users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting the errors below while submitting/executing following
</span><br>
<span class="quotelev2">&gt;&gt; script,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH -p short
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH -J layers
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH -n 12
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH -N 1
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH -t 01:30:00
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --mem-per-cpu=2500
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --exclusive
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --mail-type=END
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --mail-user=rizwan.ahmed_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH -o output_%j.out
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH -e errors_%j.err
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; srun --mpi=pmi2 gpaw-python layers.py
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=126453] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=80379] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124258] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124259] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124261] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124266] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124264] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124262] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124260] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124265] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124263] to memory
</span><br>
<span class="quotelev2">&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev2">&gt;&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev2">&gt;&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev2">&gt;&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev2">&gt;&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The process that invoked fork was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:          pe38 (PID 80379)
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_COMM_WORLD rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you are *absolutely sure* that your application will successfully
</span><br>
<span class="quotelev2">&gt;&gt; and correctly survive a call to fork(), you may disable this warning
</span><br>
<span class="quotelev2">&gt;&gt; by setting the mpi_warn_on_fork MCA parameter to 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this error fatal or should it be ignored? Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rizwan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29489.php">Jason Maldonis: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Previous message:</strong> <a href="29487.php">Ahmed Rizwan: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>In reply to:</strong> <a href="29487.php">Ahmed Rizwan: "Re: [OMPI users] memory cg '(null)'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29489.php">Jason Maldonis: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>Reply:</strong> <a href="29489.php">Jason Maldonis: "Re: [OMPI users] memory cg '(null)'"</a>
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
