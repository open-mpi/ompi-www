<?
$subject_val = "Re: [OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 12:43:41 2015" -->
<!-- isoreceived="20150611164341" -->
<!-- sent="Thu, 11 Jun 2015 12:43:38 -0400" -->
<!-- isosent="20150611164338" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="CAG4F6z9uew76JSyW_ifxD4gf_y2KTZJVLwFDrUfN492isJG74Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj7TfUzB+o3O+kdTKJNZ4aoWp7cVYyLOY3+5nhn5qM4kJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted segmentation fault in pmix on master<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 12:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27101.php">Nathan Hjelm: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27099.php">Ray Sheppard: "[OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27101.php">Nathan Hjelm: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27101.php">Nathan Hjelm: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ken,
<br>
<p>Could you try to launch the job with aprun instead of mpirun?
<br>
<p>Thanks,
<br>
<p>Josh
<br>
<p>On Thu, Jun 11, 2015 at 12:21 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ken,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you give the details of the allocation request (qsub args)
</span><br>
<span class="quotelev1">&gt; as well as the mpirun command line args? I'm trying to reproduce
</span><br>
<span class="quotelev1">&gt; on the nersc system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be interesting if you have access to a similar size non-cray
</span><br>
<span class="quotelev1">&gt; cluster if you get the same problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-06-11 9:13 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don&#226;&#128;&#153;t have a Cray, but let me see if I can reproduce this on something
</span><br>
<span class="quotelev2">&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jun 11, 2015, at 7:26 AM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; kenneth.w.leiter2.civ_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am attempting to use the openmpi development master for a code that
</span><br>
<span class="quotelev2">&gt;&gt; uses
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dynamic process management (i.e. MPI_Comm_spawn) on our Cray XC40 at the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Army Research Laboratory. After reading through the mailing list I came
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the conclusion that the master branch is the only hope for getting this
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; work on the newer Cray machines.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To test I am using the cpi-master.c cpi-worker.c example. The test works
</span><br>
<span class="quotelev3">&gt;&gt; &gt; when executing on a small number of processors, five or less, but
</span><br>
<span class="quotelev2">&gt;&gt; begins to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fail with segmentation faults in orted when using more processors. Even
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; five or fewer processors, I am spreading the computation to more than
</span><br>
<span class="quotelev2">&gt;&gt; one
</span><br>
<span class="quotelev3">&gt;&gt; &gt; node. I am using the cray ugni btl through the alps scheduler.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I get a core file from orted and have the seg fault tracked down to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have tried
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reading the code to understand how this happens, but am unsure. I do see
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that in the if statement where I take the else branch, the other branch
</span><br>
<span class="quotelev3">&gt;&gt; &gt; specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no such check
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; done the the else branch.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have debug output dumped for the failing runs. I can provide the
</span><br>
<span class="quotelev2">&gt;&gt; output
</span><br>
<span class="quotelev3">&gt;&gt; &gt; along with ompi_info output and config.log to anyone who is interested.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - Ken Leiter
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27095.php">http://www.open-mpi.org/community/lists/users/2015/06/27095.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27098.php">http://www.open-mpi.org/community/lists/users/2015/06/27098.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27101.php">Nathan Hjelm: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27099.php">Ray Sheppard: "[OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27101.php">Nathan Hjelm: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27101.php">Nathan Hjelm: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
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
