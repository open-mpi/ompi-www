<?
$subject_val = "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 10:47:37 2009" -->
<!-- isoreceived="20091215154737" -->
<!-- sent="Tue, 15 Dec 2009 17:47:10 +0200" -->
<!-- isosent="20091215154710" -->
<!-- name="Katz, Jacob" -->
<!-- email="jacob.katz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?" -->
<!-- id="89F8C511E9BE1F41AE2F1BB0424037F201C90A535E_at_hasmsx504.ger.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71d2d8cc0912060923h77025359g15925a9d0b52cd0_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-15 10:47:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11544.php">Gus Correa: "Re: [OMPI users] NFS and openmpi through different NICs"</a>
<li><strong>Previous message:</strong> <a href="11542.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11445.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11550.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11550.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
Have you been able to confirm this as a bug?
<br>
Thanks!
<br>
--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt; | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11543/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11544.php">Gus Correa: "Re: [OMPI users] NFS and openmpi through different NICs"</a>
<li><strong>Previous message:</strong> <a href="11542.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11445.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11550.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11550.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
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
