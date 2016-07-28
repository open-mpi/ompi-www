<?
$subject_val = "Re: [OMPI users] OMPI error terminate w/o reasons";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 12:34:59 2011" -->
<!-- isoreceived="20110326163459" -->
<!-- sent="Sat, 26 Mar 2011 10:34:53 -0600" -->
<!-- isosent="20110326163453" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI error terminate w/o reasons" -->
<!-- id="SNT134-w5150FD0073ADE2EB9A7350CBB80_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0575A5DF-D7C3-4A01-937C-97E8F38DFA51_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI error terminate w/o reasons<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-26 12:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15995.php">Michele Marena: "[OMPI users] Shared Memory Problem."</a>
<li><strong>Previous message:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15996.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="15996.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
I have tried this. But, the printout from 200 parallel processes make it very hard to locate the possible bug. 
<br>
They may not stop at the same point when the program got signal 9.
<br>
So, even though I can figure out the print out statements from all200 processes, so many different locations where the processesare stopped make it harder to find out some hints about the bug. 
<br>
Are there some other programming tricks, which can help me narrow down to the doubt points ASAP.Any help is appreciated. 
<br>
Jack
<br>
From: rhc_at_[hidden]
<br>
Date: Sat, 26 Mar 2011 07:53:40 -0600
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OMPI error terminate w/o reasons
<br>
<p><p><p>Try adding some print statements so you can see where the error occurs.
<br>
On Mar 25, 2011, at 11:49 PM, Jack Bryan wrote:Hi , All: 
<br>
I running a Open MPI (1.3.4) program by 200 parallel processes. 
<br>
But, the program is terminated with 
<br>
--------------------------------------------------------------------------mpirun noticed that process rank 0 with PID 77967 on node n342 exited on signal 9 (Killed).--------------------------------------------------------------------------
<br>
After searching, the signal 9 means: 
<br>
the process is currently in an unworkable state and should be terminated with extreme prejudice
<br>
&nbsp;If a process does not respond to any other termination signals, sending it a SIGKILL signal will almost always cause it to go away.
<br>
&nbsp;The system will generate SIGKILL for a process itself under some unusual conditions where the program cannot possibly continue to run (even to run a signal handler). 
<br>
But, the error message does not indicate any possible reasons for the termination. 
<br>
There is a FOR loop in the main() program, if the loop number is small (&lt; 200), the program works well, but if it becomes lager and larger, the program will got SIGKILL. 
<br>
The cluster where I am running the MPI program does not allow running debug tools. 
<br>
If I run it on a workstation, it will take a very very long time (for &gt; 200 loops) in order to get the error occur again. 
<br>
What can I do to find the possible bugs ? 
<br>
Any help is really appreciated. 
<br>
thanks
<br>
Jack
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15995.php">Michele Marena: "[OMPI users] Shared Memory Problem."</a>
<li><strong>Previous message:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15996.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="15996.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
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
