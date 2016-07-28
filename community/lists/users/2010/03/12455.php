<?
$subject_val = "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 11:54:01 2010" -->
<!-- isoreceived="20100329155401" -->
<!-- sent="Mon, 29 Mar 2010 11:53:55 -0400" -->
<!-- isosent="20100329155355" -->
<!-- name="fengguang tian" -->
<!-- email="fernyabc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI" -->
<!-- id="958403f51003290853s2243966s1314cfcd997b6c07_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="40D3ED6C-34C7-41D2-9D81-ACDD25F72F98_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI<br>
<strong>From:</strong> fengguang tian (<em>fernyabc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 11:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12456.php">fengguang tian: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster"</a>
<li><strong>Previous message:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>In reply to:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12457.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12457.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi
<br>
<p>i have used the --term option,but the mpirun is still hanging,it is the same
<br>
whether I include the ' / ' or not.I am installing the v1.4 to see whether
<br>
the problems are still there. I tried, but some problems are still there.
<br>
<p>BTW, my MPI program will have some input file, and will generate some output
<br>
file after some computation, it can be checkpointed,but when restart it,
<br>
some error happened,have you met this kind of problem?
<br>
<p>cheers
<br>
fengguang
<br>
<p>On Mon, Mar 29, 2010 at 11:42 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2010, at 1:00 PM, Fernando Lemos wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Tue, Mar 23, 2010 at 12:55 PM, fengguang tian &lt;fernyabc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use mpirun -np 50 -am ft-enable-cr --mca snapc_base_global_snapshot_dir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hostfile .mpihostfile xxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to store the global checkpoint snapshot into the shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory:/mirror,but the problems are still there,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when ompi-checkpoint, the mpirun is still not killed,it is hanging
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; So the 'ompi-checkpoint' command does not finish? By default
</span><br>
<span class="quotelev1">&gt; 'ompi-checkpoint' does not terminate the MPI job. If you pass the '--term'
</span><br>
<span class="quotelev1">&gt; option to it, then it will.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  when doing ompi-restart, it shows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiu_at_nimbus:/mirror$ ompi-restart ompi_global_snapshot_333.ckpt/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: The filename (ompi_global_snapshot_333.ckpt/) is invalid because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; either you have not provided a filename
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       or provided an invalid filename.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Please see --help for usage.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Try removing the trailing '/' in the command. The current ompi-restart is
</span><br>
<span class="quotelev1">&gt; not good about differentiating between :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_global_snapshot_333.ckpt
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_global_snapshot_333.ckpt/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Have you tried OpenMPI 1.5? I got it to work with 1.5, but not with
</span><br>
<span class="quotelev2">&gt;&gt; 1.4 (but then I didn't try 1.4 with a shared filesystem).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would also suggest trying v1.4 or 1.5 to see if your problems persist
</span><br>
<span class="quotelev1">&gt; with these versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12455/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12456.php">fengguang tian: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster"</a>
<li><strong>Previous message:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>In reply to:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12457.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12457.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
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
