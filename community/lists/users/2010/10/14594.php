<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 13:07:36 2010" -->
<!-- isoreceived="20101025170736" -->
<!-- sent="Mon, 25 Oct 2010 11:07:30 -0600" -->
<!-- isosent="20101025170730" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="SNT134-w24A699A3795F2DCAE97163CB410_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTi=a_GZ_VxZ41efC8aDRWMeuPpdq=F6VOHb1KOfE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI program cannot complete<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 13:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14595.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14593.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14593.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14596.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14596.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks, 
<br>
Would like to tell me how to use 
<br>
(gdb --batch -ex 'bt full' -ex 'info reg' -pid ZOMBIE_PID)
<br>
in MPI ? 
<br>
I need to use #PBS parallel job script to submit a job on MPI cluster. 
<br>
Where should I put the (gdb --batch -ex 'bt full' -ex 'info reg' -pid ZOMBIE_PID) in the script ? 
<br>
How to get the ZOMBIE_PID ? 
<br>
thanks
<br>
Any help is appreciated. 
<br>
Jack
<br>
Oct. 25 2010
<br>
Date: Mon, 25 Oct 2010 19:01:38 +0200
<br>
From: jed_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Open MPI program cannot complete
<br>
<p>On Mon, Oct 25, 2010 at 18:26, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p>Thanks, the problem is still there.
<br>
This really doesn't prove that there are no outstanding asynchronous requests, but perhaps you know that there are not, despite not being able to post a complete test case here.  I suggest attaching a debugger and getting a stack trace from the zombies (gdb --batch -ex 'bt full' -ex 'info reg' -pid ZOMBIE_PID).
<br>
<p>Jed
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14595.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14593.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14593.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14596.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14596.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
