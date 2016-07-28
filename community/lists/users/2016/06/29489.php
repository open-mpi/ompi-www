<?
$subject_val = "Re: [OMPI users] memory cg '(null)'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 20 11:26:47 2016" -->
<!-- isoreceived="20160620152647" -->
<!-- sent="Mon, 20 Jun 2016 10:26:17 -0500" -->
<!-- isosent="20160620152617" -->
<!-- name="Jason Maldonis" -->
<!-- email="maldonis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory cg '(null)'" -->
<!-- id="CA+LevYJQJkNT7wkZ4+qtwKnJjVCuTPffcmSzug+8aYWBm4N+nw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5sLu+Qz-iXzE=UWPhQFSGNYj4tEU3Bwh4zSj5h9bGyzrA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jason Maldonis (<em>maldonis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-20 11:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>In reply to:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rizwan,
<br>
<p>If you need to rewrite your fork system calls, you may want to check out
<br>
mpi's spawn functionality. I recently found out about it and it's really
<br>
useful if you haven't heard of it already. I am using it through python's
<br>
mpi4py and it seems to be working well.
<br>
<p>Best,
<br>
Jason
<br>
<p>Jason Maldonis
<br>
Research Assistant of Professor Paul Voyles
<br>
Materials Science Grad Student
<br>
University of Wisconsin, Madison
<br>
1509 University Ave, Rm M142
<br>
Madison, WI 53706
<br>
maldonis_at_[hidden]
<br>
608-295-5532
<br>
<p>On Mon, Jun 20, 2016 at 8:38 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There is no guarantee that will work on a multiple mode job.
</span><br>
<span class="quotelev1">&gt; tcp should be fine, infiniband might not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the best way to be on the safe side is you rewrite your MPI app so it does
</span><br>
<span class="quotelev1">&gt; not invoke the fork system call. this is generally invoked directly, or via
</span><br>
<span class="quotelev1">&gt; the &quot;system&quot; subroutine.
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
<span class="quotelev1">&gt; On Monday, June 20, 2016, Ahmed Rizwan &lt;rizwan.ahmed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the support. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a test which I am running on a single node, but I am intending to
</span><br>
<span class="quotelev2">&gt;&gt; run calculations on multiple nodes. You mean it wouldn't work on multiple
</span><br>
<span class="quotelev2">&gt;&gt; nodes? If I run on multiple nodes, how can I avoid these errors then? I
</span><br>
<span class="quotelev2">&gt;&gt; would just test it for multiple nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rizwan
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Gilles
</span><br>
<span class="quotelev2">&gt;&gt; Gouaillardet [gilles.gouaillardet_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Monday, June 20, 2016 3:10 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* [OMPI users] memory cg '(null)'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are two points here
</span><br>
<span class="quotelev2">&gt;&gt; 1. slurm(stepd) is unable to put the processes in the (null) cgroup.
</span><br>
<span class="quotelev2">&gt;&gt;    at first glance, this looks more of a slurm jus configuration
</span><br>
<span class="quotelev2">&gt;&gt; 2. the MPI process forking. though this has a much better support than in
</span><br>
<span class="quotelev2">&gt;&gt; the past, that might not always work, especially with fast interconnects.
</span><br>
<span class="quotelev2">&gt;&gt; since you are running on a single node, you should be fine. simply
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_mpi_warn_on_fork=0
</span><br>
<span class="quotelev2">&gt;&gt; before invoking srun, in order to silence this message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Monday, June 20, 2016, Ahmed Rizwan &lt;rizwan.ahmed_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://UrlBlockedError.aspx">http://UrlBlockedError.aspx</a>&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear MPI users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting the errors below while submitting/executing following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH -p short
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH -J layers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH -n 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH -N 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH -t 01:30:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH --mem-per-cpu=2500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH --exclusive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH --mail-type=END
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH --mail-user=rizwan.ahmed_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH -o output_%j.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH -e errors_%j.err
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun --mpi=pmi2 gpaw-python layers.py
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=126453] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=80379] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124258] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124259] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124261] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124266] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124264] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124262] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124260] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124265] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurmstepd: error: task/cgroup: unable to add task[pid=124263] to memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg '(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The process that invoked fork was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host:          pe38 (PID 80379)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_COMM_WORLD rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are *absolutely sure* that your application will successfully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and correctly survive a call to fork(), you may disable this warning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by setting the mpi_warn_on_fork MCA parameter to 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this error fatal or should it be ignored? Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rizwan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29488.php">http://www.open-mpi.org/community/lists/users/2016/06/29488.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29489/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
<li><strong>In reply to:</strong> <a href="29488.php">Gilles Gouaillardet: "Re: [OMPI users] memory cg '(null)'"</a>
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
