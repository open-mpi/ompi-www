<?
$subject_val = "Re: [OMPI users] OMPI error terminate w/o reasons";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 27 20:29:40 2011" -->
<!-- isoreceived="20110328002940" -->
<!-- sent="Sun, 27 Mar 2011 20:29:11 -0400" -->
<!-- isosent="20110328002911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI error terminate w/o reasons" -->
<!-- id="829A63F7-07ED-476E-83AE-4947AB9C19C3_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-27 20:29:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16023.php">Jeff Squyres: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16021.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16017.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16024.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16024.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on what Ralph is saying.
<br>
<p>You need to talk to your local administrators and ask them why Torque is killing your job.  Perhaps you're submitting to a queue that only allows jobs to run for a few seconds, or something like that.
<br>
<p><p>On Mar 27, 2011, at 3:08 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It means that Torque is unhappy with your job - either you are running longer than it permits, or you exceeded some other system limit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Talk to your sys admin about imposed limits. Usually, there are flags you can provide to your job submission that allow you to change limits for your program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2011, at 12:59 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I have figured out how to run the command. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_RANKFILE=$HOME/$PBS_JOBID.ranks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 200  -rf $OMPI_RANKFILE --mca btl self,sm,openib -output-filename 700g200i200p14ye  ./myapplication 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Each process print out to a distinct file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But, the program is terminated by the error :
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; =&gt;&gt; PBS: job killed: node 18 (n314) requested job terminate, 'EOF' (code 1099) - received SISTER_EOF attempting to communicate with sister MOM's
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: Forwarding signal 10 to job
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         n341
</span><br>
<span class="quotelev2">&gt;&gt;         n338
</span><br>
<span class="quotelev2">&gt;&gt;         n337
</span><br>
<span class="quotelev2">&gt;&gt;         n336
</span><br>
<span class="quotelev2">&gt;&gt;         n335
</span><br>
<span class="quotelev2">&gt;&gt;         n334
</span><br>
<span class="quotelev2">&gt;&gt;         n333
</span><br>
<span class="quotelev2">&gt;&gt;         n332
</span><br>
<span class="quotelev2">&gt;&gt;         n331
</span><br>
<span class="quotelev2">&gt;&gt;         n329
</span><br>
<span class="quotelev2">&gt;&gt;         n328
</span><br>
<span class="quotelev2">&gt;&gt;         n326
</span><br>
<span class="quotelev2">&gt;&gt;         n324
</span><br>
<span class="quotelev2">&gt;&gt;         n321
</span><br>
<span class="quotelev2">&gt;&gt;         n318
</span><br>
<span class="quotelev2">&gt;&gt;         n316
</span><br>
<span class="quotelev2">&gt;&gt;         n315
</span><br>
<span class="quotelev2">&gt;&gt;         n314
</span><br>
<span class="quotelev2">&gt;&gt;         n313
</span><br>
<span class="quotelev2">&gt;&gt;         n312
</span><br>
<span class="quotelev2">&gt;&gt;         n309
</span><br>
<span class="quotelev2">&gt;&gt;         n308
</span><br>
<span class="quotelev2">&gt;&gt;         n306
</span><br>
<span class="quotelev2">&gt;&gt;         n305
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After searching, I find that the error is probably related to the highly frequent I/O activities. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have also run valgrind to do mem check in  order to find the possible reason for the original 
</span><br>
<span class="quotelev2">&gt;&gt; signal 9 (SIGKILL) problem. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 200 -rf $OMPI_RANKFILE --mca btl self,sm,openib  /usr/bin/valgrind --tool=memcheck --error-limit=no --leak-check=yes --log-file=nsga2b_g700_pop200_p200_valg_cystorm_mpi.log  ./myapplication 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But, I got the similar error as the above. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What does the error mean ?   
</span><br>
<span class="quotelev2">&gt;&gt; I cannot change the file system of the cluster. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I only want to find a way to find the bug, which only appears in the case that the problem size is very large. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But, I am stucked by the SIGKILL and then the above MOM_SISTER issues now. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jack 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sat, 26 Mar 2011 20:47:19 -0600
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That command line cannot possibly work. Both the -rf and --output-filename options require arguments.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PLEASE read the documentation? mpirun -h, or &quot;man mpirun&quot; will tell you how to correctly use these options.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 26, 2011, at 6:35 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I used : 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 200 -rf  --output-filename /mypath/myapplication
</span><br>
<span class="quotelev2">&gt;&gt; But, no files are printed out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can &quot;--debug&quot; option help me hear ? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I tried :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -bash-3.2$ mpirun -debug
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A suitable debugger could not be found in your PATH.  Check the values
</span><br>
<span class="quotelev2">&gt;&gt; specified in the orte_base_user_debugger MCA parameter for the list of
</span><br>
<span class="quotelev2">&gt;&gt; debuggers that was searched.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sat, 26 Mar 2011 15:45:39 -0600
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you use that mpirun option, mpirun will place the output from each rank into a -separate- file for you. Give it:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --output-filename /myhome/debug/run01
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and in /myhome/debug, you will find files:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; run01.0
</span><br>
<span class="quotelev2">&gt;&gt; run01.1
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; each with the output from the indicated rank.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 26, 2011, at 3:41 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The cluster can print out all output into one file. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But, checking them for bugs is very hard. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The cluster also print out possible error messages into one file. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But, sometimes the error file is empty , sometimes it is signal 9.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I only run dummy tasks on worker nodes, no errors. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I run real task, sometimes processes are terminated w/o any errors before the program normally exit.
</span><br>
<span class="quotelev2">&gt;&gt; Sometimes, the program get signal 9 but no other error messages. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is weird. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jack
</span><br>
<span class="quotelev2">&gt;&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sat, 26 Mar 2011 15:18:53 -0600
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know, but Ashley may be able to help - or you can see his web site for instructions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, since you can put print statements into your code, have you considered using mpirun's option to direct output from each rank into its own file? Look at &quot;mpirun -h&quot; for the options.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    -output-filename|--output-filename &lt;arg0&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;                          Redirect output from application processes into
</span><br>
<span class="quotelev2">&gt;&gt;                          filename.rank
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 26, 2011, at 2:48 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to enable padb to print out the stack trace and other program execute information into a file ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can run the program in gdb as this: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 200 -e gdb ./myapplication 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How to make gdb print out the debug information to a file ? 
</span><br>
<span class="quotelev2">&gt;&gt; So that I can check it when the program is terminated. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jack
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sat, 26 Mar 2011 13:56:13 -0600
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You don't need to install anything on a system folder - you can just install it in your home directory, assuming that is accessible on the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As for the script - unless you can somehow modify it to allow you to run under a debugger, I am afraid you are completely out of luck.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 26, 2011, at 12:54 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am working on a cluster, where I am not allowed to install software on system folder. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My Open MPI is 1.3.4. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a very quick of the padb on <a href="http://padb.pittman.org.uk/">http://padb.pittman.org.uk/</a> . 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does it require some software install on the cluster in order to use it ? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I cannot use command-line to run job on the lcuster , but only script.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sat, 26 Mar 2011 12:12:11 -0600
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried a parallel debugger such as padb?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 26, 2011, at 10:34 AM, Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have tried this. But, the printout from 200 parallel processes make it 
</span><br>
<span class="quotelev2">&gt;&gt; very hard to locate the possible bug. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; They may not stop at the same point when the program got signal 9.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, even though I can figure out the print out statements from all
</span><br>
<span class="quotelev2">&gt;&gt; 200 processes, so many different locations where the processes
</span><br>
<span class="quotelev2">&gt;&gt; are stopped make it harder to find out some hints about the bug. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there some other programming tricks, which can help me 
</span><br>
<span class="quotelev2">&gt;&gt; narrow down to the doubt points ASAP.
</span><br>
<span class="quotelev2">&gt;&gt; Any help is appreciated. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jack
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sat, 26 Mar 2011 07:53:40 -0600
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try adding some print statements so you can see where the error occurs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2011, at 11:49 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi , All: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I running a Open MPI (1.3.4) program by 200 parallel processes. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But, the program is terminated with 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 77967 on node n342 exited on signal 9 (Killed).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After searching, the signal 9 means: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the process is currently in an unworkable state and should be terminated with extreme prejudice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  If a process does not respond to any other termination signals, sending it a SIGKILL signal will almost always cause it to go away.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  The system will generate SIGKILL for a process itself under some unusual conditions where the program cannot possibly continue to run (even to run a signal handler).
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; But, the error message does not indicate any possible reasons for the termination. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a FOR loop in the main() program, if the loop number is small (&lt; 200), the program works well, 
</span><br>
<span class="quotelev2">&gt;&gt; but if it becomes lager and larger, the program will got SIGKILL. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The cluster where I am running the MPI program does not allow running debug tools. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I run it on a workstation, it will take a very very long time (for &gt; 200 loops) in order to 
</span><br>
<span class="quotelev2">&gt;&gt; get the error occur again. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What can I do to find the possible bugs ? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jack
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16023.php">Jeff Squyres: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16021.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16017.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16024.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16024.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
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
