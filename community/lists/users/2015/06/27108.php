<?
$subject_val = "Re: [OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 15:18:38 2015" -->
<!-- isoreceived="20150611191838" -->
<!-- sent="Thu, 11 Jun 2015 19:17:45 +0000" -->
<!-- isosent="20150611191745" -->
<!-- name="Leiter, Kenneth W CIV USARMY ARL (US)" -->
<!-- email="kenneth.w.leiter2.civ_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="3338D43B4B3406468B642ACE86F41E7E3AE8029C_at_ucolhpks.easf.csd.disa.mil" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="94EAF2BA-C3A1-4B7E-9438-4DBBFDCC33B0_at_centurylink.net" -->
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
<strong>Date:</strong> 2015-06-11 15:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27109.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27107.php">Douglas L Reeder: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27107.php">Douglas L Reeder: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27103.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am requesting a large interactive job, but not using all the nodes when executing the test.

- Ken

________________________________________
From: users [users-bounces_at_[hidden]] on behalf of Douglas L Reeder [dlr1_at_[hidden]]
Sent: Thursday, June 11, 2015 3:11 PM
To: Open MPI Users
Subject: Re: [OMPI users] orted segmentation fault in pmix on master

Ken,

Why are the qsub ncpus and mpiirun -np different values.

Doug
On Jun 11, 2015, at 12:08 PM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden]&gt; wrote:

&gt; Hi Howard,
&gt;
&gt; My qsub command is:
&gt; qsub -l select=10:ncpus=32:mpiprocs=32 -q debug -l walltime=01:00:00 -I
&gt;
&gt; I have also tried using ccm mode with no change in outcome.
&gt;
&gt; My mpirun command is:
&gt; mpirun -np 9 -debug-daemons  ./parent child
&gt;
&gt; I have also attached the debug output for the particular daemon that crashes to this message.
&gt;
&gt; I have access to a few other cray machines I can try this on, an XE6 and XC30.
&gt;
&gt; - Ken Leiter
&gt;
&gt; -----Original Message-----
&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Howard Pritchard
&gt; Sent: Thursday, June 11, 2015 12:21 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] orted segmentation fault in pmix on master
&gt;
&gt; Hello Ken,
&gt;
&gt; Could you give the details of the allocation request (qsub args) as well as the mpirun command line args? I'm trying to reproduce on the nersc system.
&gt;
&gt; It would be interesting if you have access to a similar size non-cray cluster if you get the same problems.
&gt;
&gt; Howard
&gt;
&gt;
&gt; 2015-06-11 9:13 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt; &gt;:
&gt;
&gt;
&gt;       I don&#146;t have a Cray, but let me see if I can reproduce this on something else
&gt;
&gt;       &gt; On Jun 11, 2015, at 7:26 AM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden] &lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt; &gt; wrote:
&gt;       &gt;
&gt;       &gt; Hello,
&gt;       &gt;
&gt;       &gt; I am attempting to use the openmpi development master for a code that uses
&gt;       &gt; dynamic process management (i.e. MPI_Comm_spawn) on our Cray XC40 at the
&gt;       &gt; Army Research Laboratory. After reading through the mailing list I came to
&gt;       &gt; the conclusion that the master branch is the only hope for getting this to
&gt;       &gt; work on the newer Cray machines.
&gt;       &gt;
&gt;       &gt; To test I am using the cpi-master.c cpi-worker.c example. The test works
&gt;       &gt; when executing on a small number of processors, five or less, but begins to
&gt;       &gt; fail with segmentation faults in orted when using more processors. Even with
&gt;       &gt; five or fewer processors, I am spreading the computation to more than one
&gt;       &gt; node. I am using the cray ugni btl through the alps scheduler.
&gt;       &gt;
&gt;       &gt; I get a core file from orted and have the seg fault tracked down to
&gt;       &gt; pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have tried
&gt;       &gt; reading the code to understand how this happens, but am unsure. I do see
&gt;       &gt; that in the if statement where I take the else branch, the other branch
&gt;       &gt; specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no such check is
&gt;       &gt; done the the else branch.
&gt;       &gt;
&gt;       &gt; I have debug output dumped for the failing runs. I can provide the output
&gt;       &gt; along with ompi_info output and config.log to anyone who is interested.
&gt;       &gt;
&gt;       &gt; - Ken Leiter
&gt;       &gt;
&gt;       &gt; _______________________________________________
&gt;       &gt; users mailing list
&gt;       &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;       &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;       &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a>
&gt;
&gt;       _______________________________________________
&gt;       users mailing list
&gt;       users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;       Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;       Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27095.php">http://www.open-mpi.org/community/lists/users/2015/06/27095.php</a>
&gt;
&gt;
&gt; &lt;error_output.tar.bz2&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27102.php">http://www.open-mpi.org/community/lists/users/2015/06/27102.php</a>

_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27107.php">http://www.open-mpi.org/community/lists/users/2015/06/27107.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27109.php">Howard Pritchard: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27107.php">Douglas L Reeder: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27107.php">Douglas L Reeder: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27103.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
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
