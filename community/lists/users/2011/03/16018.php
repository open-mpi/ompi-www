<?
$subject_val = "Re: [OMPI users] OMPI error terminate w/o reasons";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 27 18:27:53 2011" -->
<!-- isoreceived="20110327222753" -->
<!-- sent="Sun, 27 Mar 2011 16:27:47 -0600" -->
<!-- isosent="20110327222747" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI error terminate w/o reasons" -->
<!-- id="SNT134-w28A7FBD004E5E3845D3CCDCBBB0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="37787CBD-DD0E-4022-824A-5030163F1C7B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-03-27 18:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16019.php">David Zhang: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16017.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16017.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16019.php">David Zhang: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16019.php">David Zhang: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, my original bug is :
<br>
--------------------------------------------------------------------------mpirun noticed that process rank 0 with PID 77967 on node n342 exited on signal 9 (Killed).--------------------------------------------------------------------------
<br>
The main framework of my code is: 
<br>
main(){	for masternode: 	while (loop &lt;= LOOP_NUMBER)	{		master node distributes tasks to workers;		master collects results from workers; 		++loop;	}		for worker nodes: 	{		get the task ;		run the task; // call CPLEX API lib		return results to master;	}}
<br>
When the  LOOP_NUMBER &lt;= 600 (with 200 parallel processes), it works well.But, when LOOP_NUMBER &gt;= 700 (with 200 parallel processes), it got error:
<br>
The possible limit of my Torque may be reason for the above error ? 
<br>
It seems that Torque complains about my high I/O caused by print out something from each process. 
<br>
But, if I comment out the printout statements in my code the Torque complains will be gone, but the signal 9 error is still there. 
<br>
Any help is really appreciated. 
<br>
thanks
<br>
Jack
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Sun, 27 Mar 2011 13:08:31 -0600
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OMPI error terminate w/o reasons
<br>
<p><p><p>It means that Torque is unhappy with your job - either you are running longer than it permits, or you exceeded some other system limit.
<br>
Talk to your sys admin about imposed limits. Usually, there are flags you can provide to your job submission that allow you to change limits for your program.
<br>
<p>On Mar 27, 2011, at 12:59 PM, Jack Bryan wrote:Hi, I have figured out how to run the command. 
<br>
OMPI_RANKFILE=$HOME/$PBS_JOBID.ranks
<br>
&nbsp;mpirun -np 200  -rf $OMPI_RANKFILE --mca btl self,sm,openib -output-filename 700g200i200p14ye  ./myapplication 
<br>
Each process print out to a distinct file.
<br>
But, the program is terminated by the error :---------------------------------------------------------------------------------------------------------------------=&gt;&gt; PBS: job killed: node 18 (n314) requested job terminate, 'EOF' (code 1099) - received SISTER_EOF attempting to communicate with sister MOM'smpirun: Forwarding signal 10 to jobmpirun: killing job...
<br>
--------------------------------------------------------------------------mpirun was unable to cleanly terminate the daemons on the nodes shownbelow. Additional manual cleanup may be required - please refer tothe &quot;orte-clean&quot; tool for assistance.--------------------------------------------------------------------------        n341        n338        n337        n336        n335        n334        n333        n332        n331        n329        n328        n326        n324        n321        n318        n316        n315        n314        n313        n312        n309        n308        n306        n305
<br>
--------------------------------------------------------------------
<br>
After searching, I find that the error is probably related to the highly frequent I/O activities. 
<br>
I have also run valgrind to do mem check in  order to find the possible reason for the original signal 9 (SIGKILL) problem. 
<br>
mpirun -np 200 -rf $OMPI_RANKFILE --mca btl self,sm,openib  /usr/bin/valgrind --tool=memcheck --error-limit=no --leak-check=yes --log-file=nsga2b_g700_pop200_p200_valg_cystorm_mpi.log  ./myapplication 
<br>
But, I got the similar error as the above. 
<br>
What does the error mean ?   I cannot change the file system of the cluster. 
<br>
I only want to find a way to find the bug, which only appears in the case that the problem size is very large. 
<br>
But, I am stucked by the SIGKILL and then the above MOM_SISTER issues now. 
<br>
Any help is really appreciated. 
<br>
thanks
<br>
Jack 
<br>
--------------------------------------------------------------------------------------------------------From: rhc_at_[hidden]
<br>
Date: Sat, 26 Mar 2011 20:47:19 -0600
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OMPI error terminate w/o reasons
<br>
<p>That command line cannot possibly work. Both the -rf and --output-filename options require arguments.
<br>
PLEASE read the documentation? mpirun -h, or &quot;man mpirun&quot; will tell you how to correctly use these options.
<br>
<p>On Mar 26, 2011, at 6:35 PM, Jack Bryan wrote:Hi, I used : 
<br>
&nbsp;mpirun -np 200 -rf  --output-filename /mypath/myapplication
<br>
But, no files are printed out.
<br>
Can &quot;--debug&quot; option help me hear ? 
<br>
When I tried :
<br>
-bash-3.2$ mpirun -debug--------------------------------------------------------------------------A suitable debugger could not be found in your PATH.  Check the valuesspecified in the orte_base_user_debugger MCA parameter for the list ofdebuggers that was searched.--------------------------------------------------------------------------Any help is really appreciated. 
<br>
thanks
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Sat, 26 Mar 2011 15:45:39 -0600
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OMPI error terminate w/o reasons
<br>
<p>If you use that mpirun option, mpirun will place the output from each rank into a -separate- file for you. Give it:
<br>
mpirun --output-filename /myhome/debug/run01
<br>
and in /myhome/debug, you will find files:
<br>
run01.0run01.1...
<br>
each with the output from the indicated rank.
<br>
<p><p>On Mar 26, 2011, at 3:41 PM, Jack Bryan wrote:The cluster can print out all output into one file. 
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
<p>I don't know, but Ashley may be able to help - or you can see his web site for instructions.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16019.php">David Zhang: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16017.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16017.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16019.php">David Zhang: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16019.php">David Zhang: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
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
