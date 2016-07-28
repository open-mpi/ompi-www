<?
$subject_val = "Re: [OMPI users] Unable to schedule an MPI tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 27 05:28:42 2013" -->
<!-- isoreceived="20130827092842" -->
<!-- sent="Tue, 27 Aug 2013 11:28:32 +0200" -->
<!-- isosent="20130827092832" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to schedule an MPI tasks" -->
<!-- id="F11C5445-5FE1-497C-898A-CB4BB280D96B_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="COL126-W99CE50FC816BF40816F86FE4A0_at_phx.gbl" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-27 05:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22564.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22562.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="22562.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22560.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 27.08.2013 um 09:39 schrieb Ng Shi Wei:
<br>
<p><span class="quotelev1">&gt; I dont get what you meant ? Can you explain it more details ? Which file i should check whether mpiexec is included or not ?
</span><br>
<p>`at` will send you an email with the stdout of the job by default. Hence the output of the `which` command should end up there.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shi Wei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 27 Aug 2013 09:03:54 +0200
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Unable to schedule an MPI tasks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am 27.08.2013 um 08:56 schrieb Ng Shi Wei:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regarding the permission, I think I have the permission to run the at command because I can use the at command to schedule other programs except mpi program.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Maybe the `mpiexec` isn't found and a submitted script could help:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt; . ~/.profile
</span><br>
<span class="quotelev2">&gt; &gt; which mpiexec # remove this line when it's working
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (Replace ~/.profile with ~/.bash_profile or ~/.bash_login in case you use these. In case `mpiexec` is available even without these: is there something like /etc/profile which needs to be sourced?)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is there any other scheduling command to schedule task?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Shi Wei
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- Original Message ---
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: 27 August 2013 11:33
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] Unable to schedule an MPI tasks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Perhaps I don't understand, but mpirun has no problem being executed using the &quot;at&quot; command. Perhaps the problem is that you don't have permission for &quot;at&quot;? Per the man page:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The superuser may use these commands in any case. For other users, permission to use at is determined by the files /etc/at.allow and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /etc/at.deny.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If the file /etc/at.allow exists, only usernames mentioned in it are allowed to use at.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If /etc/at.allow does not exist, /etc/at.deny is checked, every username not mentioned in it is then allowed to use at.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If neither exists, only the superuser is allowed use of at.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; An empty /etc/at.deny means that every user is allowed use these commands, this is the default configuration.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You also might check to see what directory mpirun is executed from when &quot;at&quot; actually runs, and that the path to both mpirun and your executable are correct for that location.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 26, 2013, at 6:45 PM, Ng Shi Wei &lt;nsw_1216_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Due to the time constraints, I would like to run the mpi program by scheduling the program to run on desired time using the &quot;at&quot; command. However, it seems that the mpirun doesn't execute the mpi program at the desired time using the &quot;at&quot; command.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I would like to ask is there any other method to schedule a program to run ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For best, it can straight away starts the second mpi program once the previous program is finished.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hope to get some reply from you all.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Best Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Shi Wei
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22564.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22562.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="22562.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22560.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
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
