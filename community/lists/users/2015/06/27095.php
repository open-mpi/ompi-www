<?
$subject_val = "Re: [OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 11:13:50 2015" -->
<!-- isoreceived="20150611151350" -->
<!-- sent="Thu, 11 Jun 2015 08:13:47 -0700" -->
<!-- isosent="20150611151347" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="EFDCB064-79EF-4980-B409-D34DA7C4D7FE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3338D43B4B3406468B642ACE86F41E7E3AE80139_at_ucolhpks.easf.csd.disa.mil" -->
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
<strong>Date:</strong> 2015-06-11 11:13:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27096.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27094.php">Leiter, Kenneth W CIV USARMY ARL (US): "[OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27094.php">Leiter, Kenneth W CIV USARMY ARL (US): "[OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27099.php">Ray Sheppard: "[OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#226;&#128;&#153;t have a Cray, but let me see if I can reproduce this on something else
<br>
<p><span class="quotelev1">&gt; On Jun 11, 2015, at 7:26 AM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am attempting to use the openmpi development master for a code that uses
</span><br>
<span class="quotelev1">&gt; dynamic process management (i.e. MPI_Comm_spawn) on our Cray XC40 at the
</span><br>
<span class="quotelev1">&gt; Army Research Laboratory. After reading through the mailing list I came to
</span><br>
<span class="quotelev1">&gt; the conclusion that the master branch is the only hope for getting this to
</span><br>
<span class="quotelev1">&gt; work on the newer Cray machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To test I am using the cpi-master.c cpi-worker.c example. The test works
</span><br>
<span class="quotelev1">&gt; when executing on a small number of processors, five or less, but begins to
</span><br>
<span class="quotelev1">&gt; fail with segmentation faults in orted when using more processors. Even with
</span><br>
<span class="quotelev1">&gt; five or fewer processors, I am spreading the computation to more than one
</span><br>
<span class="quotelev1">&gt; node. I am using the cray ugni btl through the alps scheduler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a core file from orted and have the seg fault tracked down to
</span><br>
<span class="quotelev1">&gt; pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have tried
</span><br>
<span class="quotelev1">&gt; reading the code to understand how this happens, but am unsure. I do see
</span><br>
<span class="quotelev1">&gt; that in the if statement where I take the else branch, the other branch
</span><br>
<span class="quotelev1">&gt; specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no such check is
</span><br>
<span class="quotelev1">&gt; done the the else branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have debug output dumped for the failing runs. I can provide the output
</span><br>
<span class="quotelev1">&gt; along with ompi_info output and config.log to anyone who is interested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Ken Leiter
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27096.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27094.php">Leiter, Kenneth W CIV USARMY ARL (US): "[OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27094.php">Leiter, Kenneth W CIV USARMY ARL (US): "[OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27099.php">Ray Sheppard: "[OMPI users] Undefined ompi_mpi_info_null issue"</a>
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
