<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 11:04:44 2015" -->
<!-- isoreceived="20150326150444" -->
<!-- sent="Thu, 26 Mar 2015 08:04:40 -0700" -->
<!-- isosent="20150326150440" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="ABFA6BB0-7B86-4490-B0E4-EAA8629355B2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55138D3B.4000801_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 11:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26546.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26544.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26539.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26541.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Mar 25, 2015, at 9:38 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2015/03/26 13:00, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Well, I did some digging around, and this PR looks like the right solution.
</span><br>
<span class="quotelev1">&gt; ok then :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; following stuff is not directly related to ompi, but you might want to
</span><br>
<span class="quotelev1">&gt; comment on that anyway ...
</span><br>
<span class="quotelev2">&gt;&gt; Second, the running of munge on the IO nodes is not only okay but required by Luster.
</span><br>
<span class="quotelev1">&gt; this is the first time i hear that.
</span><br>
<span class="quotelev1">&gt; i googled &quot;lustre munge&quot; and could not find any relevant info about that.
</span><br>
<span class="quotelev1">&gt; is this a future feature of Lustre ?
</span><br>
<span class="quotelev1">&gt; as far as i am concerned, only Lustre MDS need a &quot;unix&quot; authentication
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; (ldap, nis, /etc/passwd, ...) and munge does not provide this service.
</span><br>
<p>My understanding per the Lustre team is that they can use munge, if configured to do so. Not saying that is the case here, but it is one potential use that would explain the presence of munge on the IO node
<br>
<p><span class="quotelev2">&gt;&gt; Future systems are increasingly going to run the user&#226;&#128;&#153;s job script (including mpirun) on the IO nodes as this (a) frees up the login node for interactive editing, and (b) avoids the jitter introduced by running the job script on the same node as application procs, or wasting a compute node to just run the job script.
</span><br>
<span class="quotelev1">&gt; that does make sense not to run the script on a compute node.
</span><br>
<span class="quotelev1">&gt; but once again i am surprised ... as far as i am concerned, lustre IO
</span><br>
<span class="quotelev1">&gt; nodes (MDS and/or OSS) do not mount the filesystem
</span><br>
<span class="quotelev1">&gt; (i mean you cannot access the filesystem as if you were on a lustre client).
</span><br>
<span class="quotelev1">&gt; of course, you can write your script so it does not require any access
</span><br>
<span class="quotelev1">&gt; to the lustre filesystem, but that sounds like a lot of pain
</span><br>
<span class="quotelev1">&gt; for a small benefit.
</span><br>
<span class="quotelev1">&gt; /* that is specific to Lustre. GPFS for example can access the
</span><br>
<span class="quotelev1">&gt; filesystem from an IO node */
</span><br>
<p>As far as I know, that is not a functional requirement, but rather a typical installation configuration. In other words, there is nothing preventing you from mounting the filesystem from the IO node - it&#226;&#128;&#153;s just a common choice not to do so.
<br>
<p>It&#226;&#128;&#153;s also a question of how the system designer decided to define an &#226;&#128;&#156;IO node&#226;&#128;&#157;. You&#226;&#128;&#153;ve made an assumption that may not be accurate.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26539.php">http://www.open-mpi.org/community/lists/users/2015/03/26539.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26546.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26544.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26539.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26541.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
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
