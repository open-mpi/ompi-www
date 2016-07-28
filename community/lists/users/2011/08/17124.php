<?
$subject_val = "Re: [OMPI users] How to add nodes while running job";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 11:27:29 2011" -->
<!-- isoreceived="20110830152729" -->
<!-- sent="Tue, 30 Aug 2011 16:26:55 +0100" -->
<!-- isosent="20110830152655" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to add nodes while running job" -->
<!-- id="CAPqNE2WGf_CAAG3P9=9hxga=Mpw5o_MLWPa+4mB-MBA3myPVRg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C256D58E-BE0A-4A04-BD2B-2238FDC00821_at_open-mpi.org" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-30 11:26:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17125.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Previous message:</strong> <a href="17123.php">Michael Shuey: "[OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>In reply to:</strong> <a href="17122.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17125.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Reply:</strong> <a href="17125.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30 August 2011 02:55, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Instead, all used dynamic requests - i.e., the job that was doing a comm_spawn would request resources at the time of the comm_spawn call. I would pass the request to Torque, and if resources were available, immediately process them into OMPI and spawn the new job. If resources weren't available, I simply returned an error to the program so it could either (a) terminate, or (b) wait awhile and try again. One of the groups got ambitious and supported non-blocking requests (generated a callback to me with resources when they became available). Worked pretty well - might work even better once we get non-blocking MPI_Comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe they generally were happy with the results, though I think some of them wound up having Torque &quot;hold&quot; a global pool of resources to satisfy such requests, just to avoid blocking progress on the job while waiting for comm_spawn resources.
</span><br>
<p>Quite often on a larger cluster there are several jobs running
<br>
simultaneously - and you configure the batch scheduler to select
<br>
groups of nodes which are physically close to each other as you get a
<br>
bit more performance that way.
<br>
However, if (say) a node is down for maintenance it can knock these
<br>
patterns out. Could we forsee a dynamic movement of MPI jobs which
<br>
move back to a node when it is replaced?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17125.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Previous message:</strong> <a href="17123.php">Michael Shuey: "[OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>In reply to:</strong> <a href="17122.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17125.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Reply:</strong> <a href="17125.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
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
