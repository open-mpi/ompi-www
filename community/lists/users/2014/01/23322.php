<?
$subject_val = "Re: [OMPI users] Unable to schedule an MPI tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  4 02:37:55 2014" -->
<!-- isoreceived="20140104073755" -->
<!-- sent="Sat, 4 Jan 2014 15:37:54 +0800" -->
<!-- isosent="20140104073754" -->
<!-- name="Ng Shi Wei" -->
<!-- email="nsw_1216_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to schedule an MPI tasks" -->
<!-- id="COL126-W1F0C9EC7612A06FA7B40BFEB50_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7DA5A90A-A0B4-4508-976B-4E48B4D96D99_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-01-04 02:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23323.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="23321.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="23321.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23323.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="23323.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any examples ? I am not familiar with task scheduling. 
<br>
Your Help will be appreciated.
<br>
Thanks in advance.
<br>
Best Regards,Shi Wei.
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Fri, 3 Jan 2014 19:00:06 -0800
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Unable to schedule an MPI tasks
<br>
<p>Why don't you just have one script that executes all the jobs sequentially, and then use the &quot;at&quot; command to start it?
<br>
<p>On Jan 3, 2014, at 8:36 AM, Ng Shi Wei &lt;nsw_1216_at_[hidden]&gt; wrote:Hi Reuti,
<br>
May I know how to starts the second mpi program once the previous program is finished? I am using Fedora Cluster.
<br>
Hope you can provide me some guide on this.
<br>
Thank you.
<br>
Best Regards,Shi Wei.
<br>
<p><span class="quotelev1">&gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 27 Aug 2013 08:56:26 +0200
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Unable to schedule an MPI tasks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 27.08.2013 um 03:45 schrieb Ng Shi Wei:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Due to the time constraints, I would like to run the mpi program by scheduling the program to run on desired time using the &quot;at&quot; command. However, it seems that the mpirun doesn't execute the mpi program at the desired time using the &quot;at&quot; command.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would like to ask is there any other method to schedule a program to run ?
</span><br>
<span class="quotelev2">&gt; &gt; For best, it can straight away starts the second mpi program once the previous program is finished.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a local machine just for you, a cluster for you or one shared by several users?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could also think of implementing a full blown queuingsystem like SoGE <a href="https://arc.liv.ac.uk/trac/SGE">https://arc.liv.ac.uk/trac/SGE</a> or Torque <a href="http://www.adaptivecomputing.com/products/open-source/torque/">http://www.adaptivecomputing.com/products/open-source/torque/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You don't have to think about a time when the job should start then (even though this is possible with the -a option), but requesting the intended number of cores will allow a job to run as soon as these resources are available. I.e. you can submit several jobs at once but they will be executed one after the other without oversubscribing the available resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NB: There is also the command `batch` in the at-suite to start the next job when the load drops under a certain value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hope to get some reply from you all.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Shi Wei
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23322/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23323.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="23321.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="23321.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23323.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="23323.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
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
