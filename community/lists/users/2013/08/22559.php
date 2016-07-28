<?
$subject_val = "Re: [OMPI users] Unable to schedule an MPI tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 27 02:56:17 2013" -->
<!-- isoreceived="20130827065617" -->
<!-- sent="Tue, 27 Aug 2013 14:56:17 +0800" -->
<!-- isosent="20130827065617" -->
<!-- name="Ng Shi Wei" -->
<!-- email="nsw_1216_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to schedule an MPI tasks" -->
<!-- id="COL401-EAS486169DD96AC36E07D7CF0CFE4A0_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Unable to schedule an MPI tasks" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to schedule an MPI tasks<br>
<strong>From:</strong> Ng Shi Wei (<em>nsw_1216_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-27 02:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22560.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="22558.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Maybe in reply to:</strong> <a href="22557.php">Ng Shi Wei: "[OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Regarding the permission, I think I have the permission to run the at command because I can use the at command to schedule other programs except mpi program.
<br>
<p>Is there any other scheduling command to schedule task?
<br>
<p>Thank you in advance.
<br>
<p>Best Regards,
<br>
Shi Wei
<br>
<p>--- Original Message ---
<br>
<p>From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
<br>
Sent: 27 August 2013 11:33
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Unable to schedule an MPI tasks
<br>
<p>Perhaps I don't understand, but mpirun has no problem being executed using the &quot;at&quot; command. Perhaps the problem is that you don't have permission for &quot;at&quot;? Per the man page:
<br>
<p>&nbsp;&nbsp;The superuser may use these commands in any case.  For  other  users,  permission  to  use  at  is  determined  by  the  files  /etc/at.allow  and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/etc/at.deny.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the file /etc/at.allow exists, only usernames mentioned in it are allowed to use at.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If /etc/at.allow does not exist, /etc/at.deny is checked, every username not mentioned in it is then allowed to use at.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If neither exists, only the superuser is allowed use of at.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An empty /etc/at.deny means that every user is allowed use these commands, this is the default configuration.
<br>
<p>You also might check to see what directory mpirun is executed from when &quot;at&quot; actually runs, and that the path to both mpirun and your executable are correct for that location.
<br>
<p><p>On Aug 26, 2013, at 6:45 PM, Ng Shi Wei &lt;nsw_1216_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Due to the time constraints, I would like to run the mpi program by scheduling the program to run on desired time using the &quot;at&quot; command. However, it seems that the mpirun doesn't execute the mpi program at the desired time using the &quot;at&quot; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to ask is there any other method to schedule a program to run ?
</span><br>
<span class="quotelev1">&gt; For best, it can straight away starts the second mpi program once the previous program is finished.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope to get some reply from you all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shi Wei
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>
<p>
<br><p>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22559/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22560.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="22558.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Maybe in reply to:</strong> <a href="22557.php">Ng Shi Wei: "[OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
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
