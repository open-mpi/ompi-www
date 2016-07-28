<?
$subject_val = "Re: [OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 16:09:24 2015" -->
<!-- isoreceived="20150611200924" -->
<!-- sent="Thu, 11 Jun 2015 13:09:20 -0700" -->
<!-- isosent="20150611200920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="BFDBEEED-E07B-4BC6-A132-91798E223F59_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3338D43B4B3406468B642ACE86F41E7E3AE802BF_at_ucolhpks.easf.csd.disa.mil" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 16:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27113.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27111.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27110.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27113.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27113.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So to be clear: each parent launches 10 children, and no other parents participate in that spawn?
<br>
<p>And there is no threading in the app, yes?
<br>
<p><p><span class="quotelev1">&gt; On Jun 11, 2015, at 12:53 PM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not run into a problem when I have one parent spawning many children (tested up to 100 children ranks), but am seeing the problem when I have, for example, 8 parents launching 10 children each.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Ken
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Howard Pritchard [hppritcha_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 11, 2015 2:36 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orted segmentation fault in pmix on master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ken,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you post the output of your ompi_info?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have PrgEnv-gnu/5.2.56 and gcc/4.9.2 loaded in my env on nersc system.  Following configure line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-java --prefix=my_favorite_install_location
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The general rule of thumb on cray's with master (not with older versions though) is you should be able to
</span><br>
<span class="quotelev1">&gt; do a ./configure (install location) and you're ready to go, no need for complicated platform files, etc.
</span><br>
<span class="quotelev1">&gt; to just build vanilla.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you're probably guessing, I'm going to say it works for me, at least up to 68 slave ranks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do notice there's some glitch with the mapping of the ranks though.  The binding logic seems
</span><br>
<span class="quotelev1">&gt; to think there's oversubscription of cores even when there should not be.  I had to use the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --bind-to none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; option on the command line once I asked for more than 22 slave ranks.  edison system has
</span><br>
<span class="quotelev1">&gt; has 24 cores/node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-06-11 12:10 GMT-06:00 Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden] &lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; I will try on a non-cray machine as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Ken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Howard Pritchard
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 11, 2015 12:21 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orted segmentation fault in pmix on master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Ken,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you give the details of the allocation request (qsub args) as well as the mpirun command line args? I'm trying to reproduce on the nersc system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be interesting if you have access to a similar size non-cray cluster if you get the same problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-06-11 9:13 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; &gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I don&#146;t have a Cray, but let me see if I can reproduce this on something else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; On Jun 11, 2015, at 7:26 AM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden] &lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt; &lt;mailto:kenneth.w.leiter2.civ_at_[hidden] &lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Hello,
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; I am attempting to use the openmpi development master for a code that uses
</span><br>
<span class="quotelev2">&gt;         &gt; dynamic process management (i.e. MPI_Comm_spawn) on our Cray XC40 at the
</span><br>
<span class="quotelev2">&gt;         &gt; Army Research Laboratory. After reading through the mailing list I came to
</span><br>
<span class="quotelev2">&gt;         &gt; the conclusion that the master branch is the only hope for getting this to
</span><br>
<span class="quotelev2">&gt;         &gt; work on the newer Cray machines.
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; To test I am using the cpi-master.c cpi-worker.c example. The test works
</span><br>
<span class="quotelev2">&gt;         &gt; when executing on a small number of processors, five or less, but begins to
</span><br>
<span class="quotelev2">&gt;         &gt; fail with segmentation faults in orted when using more processors. Even with
</span><br>
<span class="quotelev2">&gt;         &gt; five or fewer processors, I am spreading the computation to more than one
</span><br>
<span class="quotelev2">&gt;         &gt; node. I am using the cray ugni btl through the alps scheduler.
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; I get a core file from orted and have the seg fault tracked down to
</span><br>
<span class="quotelev2">&gt;         &gt; pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have tried
</span><br>
<span class="quotelev2">&gt;         &gt; reading the code to understand how this happens, but am unsure. I do see
</span><br>
<span class="quotelev2">&gt;         &gt; that in the if statement where I take the else branch, the other branch
</span><br>
<span class="quotelev2">&gt;         &gt; specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no such check is
</span><br>
<span class="quotelev2">&gt;         &gt; done the the else branch.
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; I have debug output dumped for the failing runs. I can provide the output
</span><br>
<span class="quotelev2">&gt;         &gt; along with ompi_info output and config.log to anyone who is interested.
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; - Ken Leiter
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;         &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;         &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;         Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27095.php">http://www.open-mpi.org/community/lists/users/2015/06/27095.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27095.php">http://www.open-mpi.org/community/lists/users/2015/06/27095.php</a>&gt;
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27103.php">http://www.open-mpi.org/community/lists/users/2015/06/27103.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27103.php">http://www.open-mpi.org/community/lists/users/2015/06/27103.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27110.php">http://www.open-mpi.org/community/lists/users/2015/06/27110.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27112/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27113.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27111.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27110.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27113.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27113.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
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
