<?
$subject_val = "Re: [OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 14:08:52 2015" -->
<!-- isoreceived="20150611180852" -->
<!-- sent="Thu, 11 Jun 2015 18:08:03 +0000" -->
<!-- isosent="20150611180803" -->
<!-- name="Leiter, Kenneth W CIV USARMY ARL (US)" -->
<!-- email="kenneth.w.leiter2.civ_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="3338D43B4B3406468B642ACE86F41E7E3AE801DF_at_ucolhpks.easf.csd.disa.mil" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Leiter, Kenneth W CIV USARMY ARL (US) (<em>kenneth.w.leiter2.civ_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 14:08:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27103.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27101.php">Nathan Hjelm: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27107.php">Douglas L Reeder: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27107.php">Douglas L Reeder: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p>My qsub command is:
<br>
qsub -l select=10:ncpus=32:mpiprocs=32 -q debug -l walltime=01:00:00 -I
<br>
<p>I have also tried using ccm mode with no change in outcome.
<br>
<p>My mpirun command is:
<br>
mpirun -np 9 -debug-daemons  ./parent child
<br>
<p>I have also attached the debug output for the particular daemon that crashes to this message.
<br>
<p>I have access to a few other cray machines I can try this on, an XE6 and XC30.
<br>
<p>- Ken Leiter
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Thursday, June 11, 2015 12:21 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] orted segmentation fault in pmix on master
<br>
<p>Hello Ken,
<br>
<p>Could you give the details of the allocation request (qsub args) as well as the mpirun command line args? I'm trying to reproduce on the nersc system.
<br>
<p>It would be interesting if you have access to a similar size non-cray cluster if you get the same problems. 
<br>
<p>Howard
<br>
<p><p>2015-06-11 9:13 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt; &gt;:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I don&#226;&#128;&#153;t have a Cray, but let me see if I can reproduce this on something else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">	&gt; On Jun 11, 2015, at 7:26 AM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden] &lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt; &gt; wrote:
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; Hello,
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; I am attempting to use the openmpi development master for a code that uses
</span><br>
<span class="quotelev1">	&gt; dynamic process management (i.e. MPI_Comm_spawn) on our Cray XC40 at the
</span><br>
<span class="quotelev1">	&gt; Army Research Laboratory. After reading through the mailing list I came to
</span><br>
<span class="quotelev1">	&gt; the conclusion that the master branch is the only hope for getting this to
</span><br>
<span class="quotelev1">	&gt; work on the newer Cray machines.
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; To test I am using the cpi-master.c cpi-worker.c example. The test works
</span><br>
<span class="quotelev1">	&gt; when executing on a small number of processors, five or less, but begins to
</span><br>
<span class="quotelev1">	&gt; fail with segmentation faults in orted when using more processors. Even with
</span><br>
<span class="quotelev1">	&gt; five or fewer processors, I am spreading the computation to more than one
</span><br>
<span class="quotelev1">	&gt; node. I am using the cray ugni btl through the alps scheduler.
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; I get a core file from orted and have the seg fault tracked down to
</span><br>
<span class="quotelev1">	&gt; pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have tried
</span><br>
<span class="quotelev1">	&gt; reading the code to understand how this happens, but am unsure. I do see
</span><br>
<span class="quotelev1">	&gt; that in the if statement where I take the else branch, the other branch
</span><br>
<span class="quotelev1">	&gt; specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no such check is
</span><br>
<span class="quotelev1">	&gt; done the the else branch.
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; I have debug output dumped for the failing runs. I can provide the output
</span><br>
<span class="quotelev1">	&gt; along with ompi_info output and config.log to anyone who is interested.
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; - Ken Leiter
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; _______________________________________________
</span><br>
<span class="quotelev1">	&gt; users mailing list
</span><br>
<span class="quotelev1">	&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">	&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">	&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27095.php">http://www.open-mpi.org/community/lists/users/2015/06/27095.php</a>
<br>
<p><p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27102/error_output.tar.bz2">error_output.tar.bz2</a>
</ul>
<!-- attachment="error_output.tar.bz2" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27102/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27103.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27101.php">Nathan Hjelm: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27098.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27107.php">Douglas L Reeder: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27107.php">Douglas L Reeder: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
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
