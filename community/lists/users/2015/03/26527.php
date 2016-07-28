<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 12:39:49 2015" -->
<!-- isoreceived="20150325163949" -->
<!-- sent="Wed, 25 Mar 2015 09:39:46 -0700" -->
<!-- isosent="20150325163946" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="38346C45-7710-4075-BC51-D32E2A3ED89E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C94E7052-E533-41C4-9DD2-FFB852F4EFAB_at_rutgers.edu" -->
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
<strong>Date:</strong> 2015-03-25 12:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26528.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26526.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26526.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26528.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26528.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not surprising - I&#226;&#128;&#153;m surprised to find munge on the mom&#226;&#128;&#153;s node anyway given that you are using Torque.
<br>
<p>I have to finish something else first, and it sounds like you aren&#226;&#128;&#153;t blocked at the moment. I&#226;&#128;&#153;ll provide a patch for you to try later, if you&#226;&#128;&#153;re willing.
<br>
<p><span class="quotelev1">&gt; On Mar 25, 2015, at 9:32 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI:
</span><br>
<span class="quotelev2">&gt;&gt; aprun munge -n
</span><br>
<span class="quotelev1">&gt; munge: Error: Unable to access &quot;/var/run/munge/munge.socket.2&quot;: No such file or directory
</span><br>
<span class="quotelev1">&gt; Application 23792792 exit codes: 6
</span><br>
<span class="quotelev1">&gt; Application 23792792 resources: utime ~0s, stime ~1s, Rss ~27304, inblocks ~35, outblocks ~58
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 25 Mar 2015, at 17:29 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, what&#226;&#128;&#153;s happening is that mpirun is picking one security mechanism for authenticating connections, but the backend daemons are picking another, and hence we get the conflict. The weird thing here is that you usually don&#226;&#128;&#153;t see this kind of mismatch for the very reason you are hitting - it becomes difficult to resolve authentications.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me ponder a bit. We can resolve it easily enough, but I want to ensure we don&#226;&#128;&#153;t do it by creating a security hole.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 25, 2015, at 9:25 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 25 Mar 2015, at 17:06 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OHO! You have munge running on the head node, but not on the backends!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, so I now know that munge is ... :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's running on the MOM node (not on the head node):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon   18800  0.0  0.0 118476  3212 ?        Sl   01:27   0:00 /usr/sbin/munged --key-file /opt/munge/munge.key --num-threads 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any tests you would like me to perform?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26524.php">http://www.open-mpi.org/community/lists/users/2015/03/26524.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26525.php">http://www.open-mpi.org/community/lists/users/2015/03/26525.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26526.php">http://www.open-mpi.org/community/lists/users/2015/03/26526.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26528.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26526.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26526.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26528.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26528.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
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
