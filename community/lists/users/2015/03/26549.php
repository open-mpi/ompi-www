<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 22:10:49 2015" -->
<!-- isoreceived="20150327021049" -->
<!-- sent="Fri, 27 Mar 2015 11:11:10 +0900" -->
<!-- isosent="20150327021110" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="5514BC3E.8000205_at_iferc.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BEE49EED-D815-421B-9D05-06C622594104_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on blue waters<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 22:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Previous message:</strong> <a href="26548.php">Zhisong Fu: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<li><strong>In reply to:</strong> <a href="26540.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26545.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark,
<br>
<p>thanks for the link.
<br>
<p>i tried to read between the lines, and &quot;found&quot; that in the case of
<br>
torque+munge,
<br>
munge might be required only on admin nodes and submission hosts (which
<br>
could be restricted
<br>
to login nodes on most systems)
<br>
<p>on the other hand, slurm does require munge on compute nodes, even if
<br>
there is no job submission from compute nodes.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
&nbsp;
<br>
On 2015/03/26 17:33, Mark Santcroos wrote:
<br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the follow-up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that you are ruling out that Munge is required because the system runs TORQUE, but as far as I can see Munge is/can be used by both SLURM and TORQUE.
</span><br>
<span class="quotelev1">&gt; (<a href="http://docs.adaptivecomputing.com/torque/4-0-2/Content/topics/1-installConfig/serverConfig.htm#usingMUNGEAuth">http://docs.adaptivecomputing.com/torque/4-0-2/Content/topics/1-installConfig/serverConfig.htm#usingMUNGEAuth</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I misunderstood the drift, please ignore ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 26 Mar 2015, at 5:38 , Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2015/03/26 13:00, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, I did some digging around, and this PR looks like the right solution.
</span><br>
<span class="quotelev2">&gt;&gt; ok then :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; following stuff is not directly related to ompi, but you might want to
</span><br>
<span class="quotelev2">&gt;&gt; comment on that anyway ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Second, the running of munge on the IO nodes is not only okay but required by Luster.
</span><br>
<span class="quotelev2">&gt;&gt; this is the first time i hear that.
</span><br>
<span class="quotelev2">&gt;&gt; i googled &quot;lustre munge&quot; and could not find any relevant info about that.
</span><br>
<span class="quotelev2">&gt;&gt; is this a future feature of Lustre ?
</span><br>
<span class="quotelev2">&gt;&gt; as far as i am concerned, only Lustre MDS need a &quot;unix&quot; authentication
</span><br>
<span class="quotelev2">&gt;&gt; system
</span><br>
<span class="quotelev2">&gt;&gt; (ldap, nis, /etc/passwd, ...) and munge does not provide this service.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future systems are increasingly going to run the user&#226;&#128;&#153;s job script (including mpirun) on the IO nodes as this (a) frees up the login node for interactive editing, and (b) avoids the jitter introduced by running the job script on the same node as application procs, or wasting a compute node to just run the job script.
</span><br>
<span class="quotelev2">&gt;&gt; that does make sense not to run the script on a compute node.
</span><br>
<span class="quotelev2">&gt;&gt; but once again i am surprised ... as far as i am concerned, lustre IO
</span><br>
<span class="quotelev2">&gt;&gt; nodes (MDS and/or OSS) do not mount the filesystem
</span><br>
<span class="quotelev2">&gt;&gt; (i mean you cannot access the filesystem as if you were on a lustre client).
</span><br>
<span class="quotelev2">&gt;&gt; of course, you can write your script so it does not require any access
</span><br>
<span class="quotelev2">&gt;&gt; to the lustre filesystem, but that sounds like a lot of pain
</span><br>
<span class="quotelev2">&gt;&gt; for a small benefit.
</span><br>
<span class="quotelev2">&gt;&gt; /* that is specific to Lustre. GPFS for example can access the
</span><br>
<span class="quotelev2">&gt;&gt; filesystem from an IO node */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26539.php">http://www.open-mpi.org/community/lists/users/2015/03/26539.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26540.php">http://www.open-mpi.org/community/lists/users/2015/03/26540.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Previous message:</strong> <a href="26548.php">Zhisong Fu: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<li><strong>In reply to:</strong> <a href="26540.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26545.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
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
