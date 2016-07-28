<?
$subject_val = "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 22:55:22 2009" -->
<!-- isoreceived="20091216035522" -->
<!-- sent="Tue, 15 Dec 2009 20:55:13 -0700" -->
<!-- isosent="20091216035513" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?" -->
<!-- id="606EA33F-D036-4F34-8045-5E94DF91DF48_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="89F8C511E9BE1F41AE2F1BB0424037F201C90A535E_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 22:55:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11551.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
<li><strong>Previous message:</strong> <a href="11549.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11543.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Finally got time to look at this - not sure this is a bug, if I understand correctly your scenario.
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
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; Have you been able to confirm this as a bug?
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet: (8)-465-5726
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, December 06, 2009 19:24
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'll look into it - sounds like a bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 6, 2009 at 9:13 AM, Katz, Jacob &lt;jacob.katz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I&#146;m using 1.3.3.
</span><br>
<span class="quotelev1">&gt; The job isn&#146;t aborted  in my case when the failing process haven&#146;t called MPI_Init&#133; It is aborted if the process have called MPI_Init&#133;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet: (8)-465-5726
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, December 06, 2009 17:44
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The system should see that app fail and abort the job - whether it calls MPI_Init first or not is irrelevant. What version are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 6, 2009 at 8:40 AM, Katz, Jacob &lt;jacob.katz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Is there a way to detect a situation than one of the processes in an MPI application exits without even calling MPI_Init()?
</span><br>
<span class="quotelev1">&gt; I have a case in which all the processes except one are stuck forever in MPI_Init(), and that one exits before being able to call MPI_Init()&#133;
</span><br>
<span class="quotelev1">&gt; I tried using the mca params that I thought might be related - orte_startup_timeout, orte_abort_timeout, but that didn&#146;t help.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet: (8)-465-5726
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Intel Israel (74) Limited
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments may contain confidential material for
</span><br>
<span class="quotelev1">&gt; the sole use of the intended recipient(s). Any review or distribution
</span><br>
<span class="quotelev1">&gt; by others is strictly prohibited. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender and delete all copies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Intel Israel (74) Limited
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments may contain confidential material for
</span><br>
<span class="quotelev1">&gt; the sole use of the intended recipient(s). Any review or distribution
</span><br>
<span class="quotelev1">&gt; by others is strictly prohibited. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender and delete all copies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Intel Israel (74) Limited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments may contain confidential material for
</span><br>
<span class="quotelev1">&gt; the sole use of the intended recipient(s). Any review or distribution
</span><br>
<span class="quotelev1">&gt; by others is strictly prohibited. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender and delete all copies.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11551.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
<li><strong>Previous message:</strong> <a href="11549.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11543.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
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
