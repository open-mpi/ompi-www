<?
$subject_val = "Re: [OMPI users] How to add nodes while running job";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 11:33:35 2011" -->
<!-- isoreceived="20110830153335" -->
<!-- sent="Tue, 30 Aug 2011 09:33:27 -0600" -->
<!-- isosent="20110830153327" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to add nodes while running job" -->
<!-- id="E15FD8BB-6724-490B-B7F2-3F19C8EA4543_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPqNE2WGf_CAAG3P9=9hxga=Mpw5o_MLWPa+4mB-MBA3myPVRg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to add nodes while running job<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-30 11:33:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17126.php">Fabien: "[OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17124.php">John Hearns: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>In reply to:</strong> <a href="17124.php">John Hearns: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 30, 2011, at 9:26 AM, John Hearns wrote:
<br>
<p><span class="quotelev1">&gt; On 30 August 2011 02:55, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Instead, all used dynamic requests - i.e., the job that was doing a comm_spawn would request resources at the time of the comm_spawn call. I would pass the request to Torque, and if resources were available, immediately process them into OMPI and spawn the new job. If resources weren't available, I simply returned an error to the program so it could either (a) terminate, or (b) wait awhile and try again. One of the groups got ambitious and supported non-blocking requests (generated a callback to me with resources when they became available). Worked pretty well - might work even better once we get non-blocking MPI_Comm_spawn.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe they generally were happy with the results, though I think some of them wound up having Torque &quot;hold&quot; a global pool of resources to satisfy such requests, just to avoid blocking progress on the job while waiting for comm_spawn resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Quite often on a larger cluster there are several jobs running
</span><br>
<span class="quotelev1">&gt; simultaneously - and you configure the batch scheduler to select
</span><br>
<span class="quotelev1">&gt; groups of nodes which are physically close to each other as you get a
</span><br>
<span class="quotelev1">&gt; bit more performance that way.
</span><br>
<span class="quotelev1">&gt; However, if (say) a node is down for maintenance it can knock these
</span><br>
<span class="quotelev1">&gt; patterns out. Could we forsee a dynamic movement of MPI jobs which
</span><br>
<span class="quotelev1">&gt; move back to a node when it is replaced?
</span><br>
<p><p>The run-time in OMPI already supports that - just waiting for the MPI layer to handle that situation.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17126.php">Fabien: "[OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17124.php">John Hearns: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>In reply to:</strong> <a href="17124.php">John Hearns: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
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
