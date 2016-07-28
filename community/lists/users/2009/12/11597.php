<?
$subject_val = "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 09:49:46 2009" -->
<!-- isoreceived="20091218144946" -->
<!-- sent="Fri, 18 Dec 2009 07:49:37 -0700" -->
<!-- isosent="20091218144937" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?" -->
<!-- id="FB94F0F3-B675-4FD4-8406-425078501A4C_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="89F8C511E9BE1F41AE2F1BB0424037F201D6A1E981_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Date:</strong> 2009-12-18 09:49:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11598.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>In reply to:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11598.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11598.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, the timeout won't work as there is no MPI requirement to call MPI_Init before some specific point in the application. This would create an experimental process to &quot;guess&quot; the correct timeout on an application-by-application basis - ugly.
<br>
<p>I have committed code to the OMPI trunk that fixes this problem for the general case. Managed to do it without the extra communication, though it required a little more complexity in the launch logic.
<br>
<p>Anyway, the problem appears resolved on that code branch. Given the required change, I do not expect this to appear in the 1.4 series - work is progressing on the first release of the next feature series (1.5), and it will be in there. Meantime, you are welcome to use a nightly tarball from the devel trunk as it appears to be in pretty good shape right now in prep for the 1.5 branch.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Dec 18, 2009, at 7:06 AM, Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; Yes, the scenario is as you described: one of the processes didn&#146;t call MPI_Init and exited &#147;normally&#148;. All the rest of the processes got stuck forever in MPI_Init.
</span><br>
<span class="quotelev1">&gt; Ideally, I would like to have a time-out setting for a process to call MPI_Init, which when expired would indicate a failure to start-up (as if the processes aborted). The time-out may be indefinite by default, for backward compatibility. No extra communication if no time-out happens&#133;
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
<span class="quotelev1">&gt; Sent: Wednesday, December 16, 2009 05:55
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Finally got time to look at this - not sure this is a bug, if I understand correctly your scenario.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When you say the application exits, do you mean it calls &quot;exit&quot; - or do you mean it segfaults or some other such abnormal termination?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Reason I ask: if the process has not yet called MPI_Init and instead calls &quot;exit&quot;, as far as we are concerned that is a normal termination. So we note that it happened, but we don't consider it as having &quot;aborted&quot; - and hence, we don't terminate the job.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If that is indeed the scenario, then trying to resolve it is a tad difficult. Although we don't advise it, people do frequently have their apps do a bunch of stuff prior to calling MPI_Init. So there is no timer I can set that would alert me that the job is stuck - could just be waiting for one or more procs to reach MPI_Init (e.g., reading a large input file).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Only thing I can think of would be to (a) detect that other procs in the job had called MPI_Init, (b) note that this one did -not- call MPI_Init/Finalize prior to terminating, and therefore (c) declare the job as having failed.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This might be doable. Tad complicated if, for example, there is only one proc/node as now the daemons have to know that other procs (not local to them) called MPI_Init.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'll have to ask the MPI folks on the team if that is something we want to do as it could affect scalability by requiring more communication...not sure how this fits into the std either.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 8:47 AM, Katz, Jacob wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11598.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>In reply to:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11598.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11598.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
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
