<?
$subject_val = "Re: [OMPI users] OMPI error terminate w/o reasons";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 17:45:49 2011" -->
<!-- isoreceived="20110326214549" -->
<!-- sent="Sat, 26 Mar 2011 15:45:39 -0600" -->
<!-- isosent="20110326214539" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI error terminate w/o reasons" -->
<!-- id="9185F308-503C-47B7-9B74-4EF58C19D2A8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w58D677213782638D1BD70DCBB80_at_phx.gbl" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-26 17:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16010.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16008.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>In reply to:</strong> <a href="16007.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16010.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16010.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you use that mpirun option, mpirun will place the output from each rank into a -separate- file for you. Give it:
<br>
<p>mpirun --output-filename /myhome/debug/run01
<br>
<p>and in /myhome/debug, you will find files:
<br>
<p>run01.0
<br>
run01.1
<br>
...
<br>
<p>each with the output from the indicated rank.
<br>
<p><p><p>On Mar 26, 2011, at 3:41 PM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; The cluster can print out all output into one file. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, checking them for bugs is very hard. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The cluster also print out possible error messages into one file. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, sometimes the error file is empty , sometimes it is signal 9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I only run dummy tasks on worker nodes, no errors. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run real task, sometimes processes are terminated w/o any errors before the program normally exit.
</span><br>
<span class="quotelev1">&gt; Sometimes, the program get signal 9 but no other error messages. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is weird. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 26 Mar 2011 15:18:53 -0600
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know, but Ashley may be able to help - or you can see his web site for instructions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively, since you can put print statements into your code, have you considered using mpirun's option to direct output from each rank into its own file? Look at &quot;mpirun -h&quot; for the options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -output-filename|--output-filename &lt;arg0&gt;  
</span><br>
<span class="quotelev1">&gt;                          Redirect output from application processes into
</span><br>
<span class="quotelev1">&gt;                          filename.rank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2011, at 2:48 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to enable padb to print out the stack trace and other program execute information into a file ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run the program in gdb as this: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 200 -e gdb ./myapplication 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How to make gdb print out the debug information to a file ? 
</span><br>
<span class="quotelev1">&gt; So that I can check it when the program is terminated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 26 Mar 2011 13:56:13 -0600
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You don't need to install anything on a system folder - you can just install it in your home directory, assuming that is accessible on the remote nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the script - unless you can somehow modify it to allow you to run under a debugger, I am afraid you are completely out of luck.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2011, at 12:54 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on a cluster, where I am not allowed to install software on system folder. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My Open MPI is 1.3.4. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a very quick of the padb on <a href="http://padb.pittman.org.uk/">http://padb.pittman.org.uk/</a> . 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it require some software install on the cluster in order to use it ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot use command-line to run job on the lcuster , but only script.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 26 Mar 2011 12:12:11 -0600
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried a parallel debugger such as padb?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2011, at 10:34 AM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried this. But, the printout from 200 parallel processes make it 
</span><br>
<span class="quotelev1">&gt; very hard to locate the possible bug. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They may not stop at the same point when the program got signal 9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, even though I can figure out the print out statements from all
</span><br>
<span class="quotelev1">&gt; 200 processes, so many different locations where the processes
</span><br>
<span class="quotelev1">&gt; are stopped make it harder to find out some hints about the bug. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there some other programming tricks, which can help me 
</span><br>
<span class="quotelev1">&gt; narrow down to the doubt points ASAP.
</span><br>
<span class="quotelev1">&gt; Any help is appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 26 Mar 2011 07:53:40 -0600
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try adding some print statements so you can see where the error occurs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2011, at 11:49 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi , All: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I running a Open MPI (1.3.4) program by 200 parallel processes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, the program is terminated with 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 77967 on node n342 exited on signal 9 (Killed).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After searching, the signal 9 means: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the process is currently in an unworkable state and should be terminated with extreme prejudice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  If a process does not respond to any other termination signals, sending it a SIGKILL signal will almost always cause it to go away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The system will generate SIGKILL for a process itself under some unusual conditions where the program cannot possibly continue to run (even to run a signal handler).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; But, the error message does not indicate any possible reasons for the termination. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a FOR loop in the main() program, if the loop number is small (&lt; 200), the program works well, 
</span><br>
<span class="quotelev1">&gt; but if it becomes lager and larger, the program will got SIGKILL. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The cluster where I am running the MPI program does not allow running debug tools. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run it on a workstation, it will take a very very long time (for &gt; 200 loops) in order to 
</span><br>
<span class="quotelev1">&gt; get the error occur again. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What can I do to find the possible bugs ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16010.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16008.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>In reply to:</strong> <a href="16007.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16010.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16010.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
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
