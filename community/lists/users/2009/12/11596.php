<?
$subject_val = "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 09:06:42 2009" -->
<!-- isoreceived="20091218140642" -->
<!-- sent="Fri, 18 Dec 2009 16:06:03 +0200" -->
<!-- isosent="20091218140603" -->
<!-- name="Katz, Jacob" -->
<!-- email="jacob.katz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?" -->
<!-- id="89F8C511E9BE1F41AE2F1BB0424037F201D6A1E981_at_hasmsx504.ger.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="606EA33F-D036-4F34-8045-5E94DF91DF48_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?<br>
<strong>From:</strong> Katz, Jacob (<em>jacob.katz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-18 09:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11597.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11595.php">Craig Tierney: "[OMPI users] Unable to run WRF on large core counts (1024+), queue pair error"</a>
<li><strong>In reply to:</strong> <a href="11550.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11597.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11597.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the scenario is as you described: one of the processes didn't call MPI_Init and exited &quot;normally&quot;. All the rest of the processes got stuck forever in MPI_Init.
<br>
Ideally, I would like to have a time-out setting for a process to call MPI_Init, which when expired would indicate a failure to start-up (as if the processes aborted). The time-out may be indefinite by default, for backward compatibility. No extra communication if no time-out happens...
<br>
<p>--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt; | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, December 16, 2009 05:55
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?
<br>
<p>Finally got time to look at this - not sure this is a bug, if I understand correctly your scenario.
<br>
<p>When you say the application exits, do you mean it calls &quot;exit&quot; - or do you mean it segfaults or some other such abnormal termination?
<br>
<p>Reason I ask: if the process has not yet called MPI_Init and instead calls &quot;exit&quot;, as far as we are concerned that is a normal termination. So we note that it happened, but we don't consider it as having &quot;aborted&quot; - and hence, we don't terminate the job.
<br>
<p>If that is indeed the scenario, then trying to resolve it is a tad difficult. Although we don't advise it, people do frequently have their apps do a bunch of stuff prior to calling MPI_Init. So there is no timer I can set that would alert me that the job is stuck - could just be waiting for one or more procs to reach MPI_Init (e.g., reading a large input file).
<br>
<p>Only thing I can think of would be to (a) detect that other procs in the job had called MPI_Init, (b) note that this one did -not- call MPI_Init/Finalize prior to terminating, and therefore (c) declare the job as having failed.
<br>
<p>This might be doable. Tad complicated if, for example, there is only one proc/node as now the daemons have to know that other procs (not local to them) called MPI_Init.
<br>
<p>I'll have to ask the MPI folks on the team if that is something we want to do as it could affect scalability by requiring more communication...not sure how this fits into the std either.
<br>
<p>Ralph
<br>
<p><p>On Dec 15, 2009, at 8:47 AM, Katz, Jacob wrote:
<br>
<p><p>Ralph,
<br>
Have you been able to confirm this as a bug?
<br>
Thanks!
<br>
--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt; | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p>From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Sunday, December 06, 2009 19:24
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?
<br>
<p>I'll look into it - sounds like a bug
<br>
<p>Thanks!
<br>
On Sun, Dec 6, 2009 at 9:13 AM, Katz, Jacob &lt;jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt;&gt; wrote:
<br>
I'm using 1.3.3.
<br>
The job isn't aborted  in my case when the failing process haven't called MPI_Init... It is aborted if the process have called MPI_Init...
<br>
<p>--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt; | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p>From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
<br>
Sent: Sunday, December 06, 2009 17:44
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?
<br>
<p>The system should see that app fail and abort the job - whether it calls MPI_Init first or not is irrelevant. What version are you using?
<br>
On Sun, Dec 6, 2009 at 8:40 AM, Katz, Jacob &lt;jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>
Is there a way to detect a situation than one of the processes in an MPI application exits without even calling MPI_Init()?
<br>
I have a case in which all the processes except one are stuck forever in MPI_Init(), and that one exits before being able to call MPI_Init()...
<br>
I tried using the mca params that I thought might be related - orte_startup_timeout, orte_abort_timeout, but that didn't help.
<br>
<p>Thanks!
<br>
--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt; | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p><p>---------------------------------------------------------------------
<br>
<p>Intel Israel (74) Limited
<br>
<p><p><p>This e-mail and any attachments may contain confidential material for
<br>
<p>the sole use of the intended recipient(s). Any review or distribution
<br>
<p>by others is strictly prohibited. If you are not the intended
<br>
<p>recipient, please contact the sender and delete all copies.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>---------------------------------------------------------------------
<br>
<p>Intel Israel (74) Limited
<br>
<p><p><p>This e-mail and any attachments may contain confidential material for
<br>
<p>the sole use of the intended recipient(s). Any review or distribution
<br>
<p>by others is strictly prohibited. If you are not the intended
<br>
<p>recipient, please contact the sender and delete all copies.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>---------------------------------------------------------------------
<br>
<p>Intel Israel (74) Limited
<br>
<p><p><p>This e-mail and any attachments may contain confidential material for
<br>
<p>the sole use of the intended recipient(s). Any review or distribution
<br>
<p>by others is strictly prohibited. If you are not the intended
<br>
<p>recipient, please contact the sender and delete all copies.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>---------------------------------------------------------------------
<br>
Intel Israel (74) Limited
<br>
<p>This e-mail and any attachments may contain confidential material for
<br>
the sole use of the intended recipient(s). Any review or distribution
<br>
by others is strictly prohibited. If you are not the intended
<br>
recipient, please contact the sender and delete all copies.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11597.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11595.php">Craig Tierney: "[OMPI users] Unable to run WRF on large core counts (1024+), queue pair error"</a>
<li><strong>In reply to:</strong> <a href="11550.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11597.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11597.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
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
