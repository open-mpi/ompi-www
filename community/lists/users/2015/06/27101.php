<?
$subject_val = "Re: [OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 13:36:10 2015" -->
<!-- isoreceived="20150611173610" -->
<!-- sent="Thu, 11 Jun 2015 11:36:07 -0600" -->
<!-- isosent="20150611173607" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="20150611173607.GB39053_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z9uew76JSyW_ifxD4gf_y2KTZJVLwFDrUfN492isJG74Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 13:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27102.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27100.php">Joshua Ladd: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27100.php">Joshua Ladd: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27102.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Won't help him. aprun does not support dynamics.
<br>
<p>-Nathan
<br>
<p>On Thu, Jun 11, 2015 at 12:43:38PM -0400, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt;    Ken,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Could you try to launch the job with aprun instead of mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Josh
</span><br>
<span class="quotelev1">&gt;    On Thu, Jun 11, 2015 at 12:21 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hello Ken,
</span><br>
<span class="quotelev1">&gt;      Could you give the details of the allocation request (qsub args)
</span><br>
<span class="quotelev1">&gt;      as well as the mpirun command line args? I'm trying to reproduce
</span><br>
<span class="quotelev1">&gt;      on the nersc system.
</span><br>
<span class="quotelev1">&gt;      It would be interesting if you have access to a similar size non-cray
</span><br>
<span class="quotelev1">&gt;      cluster if you get the same problems. 
</span><br>
<span class="quotelev1">&gt;      Howard
</span><br>
<span class="quotelev1">&gt;      2015-06-11 9:13 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        I don't have a Cray, but let me see if I can reproduce this on
</span><br>
<span class="quotelev1">&gt;        something else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;        &gt; On Jun 11, 2015, at 7:26 AM, Leiter, Kenneth W CIV USARMY ARL (US)
</span><br>
<span class="quotelev1">&gt;        &lt;kenneth.w.leiter2.civ_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; Hello,
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; I am attempting to use the openmpi development master for a code
</span><br>
<span class="quotelev1">&gt;        that uses
</span><br>
<span class="quotelev2">&gt;        &gt; dynamic process management (i.e. MPI_Comm_spawn) on our Cray XC40 at
</span><br>
<span class="quotelev1">&gt;        the
</span><br>
<span class="quotelev2">&gt;        &gt; Army Research Laboratory. After reading through the mailing list I
</span><br>
<span class="quotelev1">&gt;        came to
</span><br>
<span class="quotelev2">&gt;        &gt; the conclusion that the master branch is the only hope for getting
</span><br>
<span class="quotelev1">&gt;        this to
</span><br>
<span class="quotelev2">&gt;        &gt; work on the newer Cray machines.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; To test I am using the cpi-master.c cpi-worker.c example. The test
</span><br>
<span class="quotelev1">&gt;        works
</span><br>
<span class="quotelev2">&gt;        &gt; when executing on a small number of processors, five or less, but
</span><br>
<span class="quotelev1">&gt;        begins to
</span><br>
<span class="quotelev2">&gt;        &gt; fail with segmentation faults in orted when using more processors.
</span><br>
<span class="quotelev1">&gt;        Even with
</span><br>
<span class="quotelev2">&gt;        &gt; five or fewer processors, I am spreading the computation to more
</span><br>
<span class="quotelev1">&gt;        than one
</span><br>
<span class="quotelev2">&gt;        &gt; node. I am using the cray ugni btl through the alps scheduler.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; I get a core file from orted and have the seg fault tracked down to
</span><br>
<span class="quotelev2">&gt;        &gt; pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have
</span><br>
<span class="quotelev1">&gt;        tried
</span><br>
<span class="quotelev2">&gt;        &gt; reading the code to understand how this happens, but am unsure. I do
</span><br>
<span class="quotelev1">&gt;        see
</span><br>
<span class="quotelev2">&gt;        &gt; that in the if statement where I take the else branch, the other
</span><br>
<span class="quotelev1">&gt;        branch
</span><br>
<span class="quotelev2">&gt;        &gt; specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no such
</span><br>
<span class="quotelev1">&gt;        check is
</span><br>
<span class="quotelev2">&gt;        &gt; done the the else branch.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; I have debug output dumped for the failing runs. I can provide the
</span><br>
<span class="quotelev1">&gt;        output
</span><br>
<span class="quotelev2">&gt;        &gt; along with ompi_info output and config.log to anyone who is
</span><br>
<span class="quotelev1">&gt;        interested.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; - Ken Leiter
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;        &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;        &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;        &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;        &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        users mailing list
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/users/2015/06/27095.php">http://www.open-mpi.org/community/lists/users/2015/06/27095.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/06/27098.php">http://www.open-mpi.org/community/lists/users/2015/06/27098.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27100.php">http://www.open-mpi.org/community/lists/users/2015/06/27100.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27101/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27102.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27100.php">Joshua Ladd: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27100.php">Joshua Ladd: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27102.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
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
