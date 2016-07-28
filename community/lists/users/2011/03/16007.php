<?
$subject_val = "Re: [OMPI users] OMPI error terminate w/o reasons";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 17:41:26 2011" -->
<!-- isoreceived="20110326214126" -->
<!-- sent="Sat, 26 Mar 2011 15:41:20 -0600" -->
<!-- isosent="20110326214120" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI error terminate w/o reasons" -->
<!-- id="SNT134-w58D677213782638D1BD70DCBB80_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AF965926-3B55-4648-A08F-13F02E0D372B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-03-26 17:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16008.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Previous message:</strong> <a href="16006.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16006.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16009.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16009.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The cluster can print out all output into one file. 
<br>
But, checking them for bugs is very hard. 
<br>
The cluster also print out possible error messages into one file. 
<br>
<p>But, sometimes the error file is empty , sometimes it is signal 9.
<br>
If I only run dummy tasks on worker nodes, no errors. 
<br>
If I run real task, sometimes processes are terminated w/o any errors before the program normally exit.Sometimes, the program get signal 9 but no other error messages. 
<br>
It is weird. 
<br>
Any help is really appreciated. 
<br>
Jack
<br>
From: rhc_at_[hidden]
<br>
Date: Sat, 26 Mar 2011 15:18:53 -0600
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OMPI error terminate w/o reasons
<br>
<p><p><p>I don't know, but Ashley may be able to help - or you can see his web site for instructions.
<br>
Alternatively, since you can put print statements into your code, have you considered using mpirun's option to direct output from each rank into its own file? Look at &quot;mpirun -h&quot; for the options.
<br>
&nbsp;&nbsp;&nbsp;-output-filename|--output-filename &lt;arg0&gt;                           Redirect output from application processes into                         filename.rank
<br>
<p>On Mar 26, 2011, at 2:48 PM, Jack Bryan wrote:Is it possible to enable padb to print out the stack trace and other program execute information into a file ?
<br>
I can run the program in gdb as this: 
<br>
mpirun -np 200 -e gdb ./myapplication 
<br>
How to make gdb print out the debug information to a file ? So that I can check it when the program is terminated. 
<br>
thanks
<br>
Jack
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Sat, 26 Mar 2011 13:56:13 -0600
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OMPI error terminate w/o reasons
<br>
<p>You don't need to install anything on a system folder - you can just install it in your home directory, assuming that is accessible on the remote nodes.
<br>
As for the script - unless you can somehow modify it to allow you to run under a debugger, I am afraid you are completely out of luck.
<br>
<p>On Mar 26, 2011, at 12:54 PM, Jack Bryan wrote:Hi, 
<br>
I am working on a cluster, where I am not allowed to install software on system folder. 
<br>
My Open MPI is 1.3.4. 
<br>
I have a very quick of the padb on <a href="http://padb.pittman.org.uk/">http://padb.pittman.org.uk/</a> . 
<br>
Does it require some software install on the cluster in order to use it ? 
<br>
I cannot use command-line to run job on the lcuster , but only script.
<br>
thanks
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Sat, 26 Mar 2011 12:12:11 -0600
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OMPI error terminate w/o reasons
<br>
<p>Have you tried a parallel debugger such as padb?
<br>
On Mar 26, 2011, at 10:34 AM, Jack Bryan wrote:Hi, 
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
<p>Try adding some print statements so you can see where the error occurs.
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
<p>_______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16008.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Previous message:</strong> <a href="16006.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16006.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16009.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16009.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
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
