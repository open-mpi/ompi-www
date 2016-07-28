<?
$subject_val = "Re: [OMPI users] OMPI error terminate w/o reasons";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 27 18:33:18 2011" -->
<!-- isoreceived="20110327223318" -->
<!-- sent="Sun, 27 Mar 2011 15:32:51 -0700" -->
<!-- isosent="20110327223251" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI error terminate w/o reasons" -->
<!-- id="AANLkTi=SMurg+jZam_XX+ghyg9JS7Fwa+Yu-xOdY2_jp_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w28A7FBD004E5E3845D3CCDCBBB0_at_phx.gbl" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-27 18:32:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16020.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<li><strong>Previous message:</strong> <a href="16018.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16018.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16021.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16021.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This might not have anything to do with your problem, but how do you
<br>
finalize your worker nodes when your master loop terminates?
<br>
<p>On Sun, Mar 27, 2011 at 3:27 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi, my original bug is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 77967 on node n342 exited on
</span><br>
<span class="quotelev1">&gt; signal 9 (Killed).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main framework of my code is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; for masternode:
</span><br>
<span class="quotelev1">&gt; while (loop &lt;= LOOP_NUMBER)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; master node distributes tasks to workers;
</span><br>
<span class="quotelev1">&gt;  master collects results from workers;
</span><br>
<span class="quotelev1">&gt; ++loop;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; for worker nodes:
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; get the task ;
</span><br>
<span class="quotelev1">&gt; run the task; // call CPLEX API lib
</span><br>
<span class="quotelev1">&gt;  return results to master;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the  LOOP_NUMBER &lt;= 600 (with 200 parallel processes), it works well.
</span><br>
<span class="quotelev1">&gt; But, when LOOP_NUMBER &gt;= 700 (with 200 parallel processes), it got error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The possible limit of my Torque may be reason for the above error ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that Torque complains about my high I/O caused by print out
</span><br>
<span class="quotelev1">&gt; something from each process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, if I comment out the printout statements in my code the Torque complains
</span><br>
<span class="quotelev1">&gt; will be gone, but
</span><br>
<span class="quotelev1">&gt; the signal 9 error is still there.
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sun, 27 Mar 2011 13:08:31 -0600
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It means that Torque is unhappy with your job - either you are running
</span><br>
<span class="quotelev1">&gt; longer than it permits, or you exceeded some other system limit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Talk to your sys admin about imposed limits. Usually, there are flags you
</span><br>
<span class="quotelev1">&gt; can provide to your job submission that allow you to change limits for your
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2011, at 12:59 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, I have figured out how to run the command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_RANKFILE=$HOME/$PBS_JOBID.ranks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -np 200  -rf $OMPI_RANKFILE --mca btl self,sm,openib
</span><br>
<span class="quotelev1">&gt; -output-filename 700g200i200p14ye  ./myapplication
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each process print out to a distinct file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, the program is terminated by the error :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; =&gt;&gt; PBS: job killed: node 18 (n314) requested job terminate, 'EOF' (code
</span><br>
<span class="quotelev1">&gt; 1099) - received SISTER_EOF attempting to communicate with sister MOM's
</span><br>
<span class="quotelev1">&gt; mpirun: Forwarding signal 10 to job
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         n341
</span><br>
<span class="quotelev1">&gt;         n338
</span><br>
<span class="quotelev1">&gt;         n337
</span><br>
<span class="quotelev1">&gt;         n336
</span><br>
<span class="quotelev1">&gt;         n335
</span><br>
<span class="quotelev1">&gt;         n334
</span><br>
<span class="quotelev1">&gt;         n333
</span><br>
<span class="quotelev1">&gt;         n332
</span><br>
<span class="quotelev1">&gt;         n331
</span><br>
<span class="quotelev1">&gt;         n329
</span><br>
<span class="quotelev1">&gt;         n328
</span><br>
<span class="quotelev1">&gt;         n326
</span><br>
<span class="quotelev1">&gt;         n324
</span><br>
<span class="quotelev1">&gt;         n321
</span><br>
<span class="quotelev1">&gt;         n318
</span><br>
<span class="quotelev1">&gt;         n316
</span><br>
<span class="quotelev1">&gt;         n315
</span><br>
<span class="quotelev1">&gt;         n314
</span><br>
<span class="quotelev1">&gt;         n313
</span><br>
<span class="quotelev1">&gt;         n312
</span><br>
<span class="quotelev1">&gt;         n309
</span><br>
<span class="quotelev1">&gt;         n308
</span><br>
<span class="quotelev1">&gt;         n306
</span><br>
<span class="quotelev1">&gt;         n305
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After searching, I find that the error is probably related to the highly
</span><br>
<span class="quotelev1">&gt; frequent I/O activities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also run valgrind to do mem check in  order to find the possible
</span><br>
<span class="quotelev1">&gt; reason for the original
</span><br>
<span class="quotelev1">&gt; signal 9 (SIGKILL) problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 200 -rf $OMPI_RANKFILE --mca btl self,sm,openib
</span><br>
<span class="quotelev1">&gt;  /usr/bin/valgrind --tool=memcheck --error-limit=no --leak-check=yes
</span><br>
<span class="quotelev1">&gt; --log-file=nsga2b_g700_pop200_p200_valg_cystorm_mpi.log  ./myapplication
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, I got the similar error as the above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does the error mean ?
</span><br>
<span class="quotelev1">&gt; I cannot change the file system of the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I only want to find a way to find the bug, which only appears in the case
</span><br>
<span class="quotelev1">&gt; that the problem size is very large.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, I am stucked by the SIGKILL and then the above MOM_SISTER issues now.
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 26 Mar 2011 20:47:19 -0600
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That command line cannot possibly work. Both the -rf and --output-filename
</span><br>
<span class="quotelev1">&gt; options require arguments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PLEASE read the documentation? mpirun -h, or &quot;man mpirun&quot; will tell you how
</span><br>
<span class="quotelev1">&gt; to correctly use these options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2011, at 6:35 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, I used :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -np 200 -rf  --output-filename /mypath/myapplication
</span><br>
<span class="quotelev1">&gt; But, no files are printed out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can &quot;--debug&quot; option help me hear ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ mpirun -debug
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A suitable debugger could not be found in your PATH.  Check the values
</span><br>
<span class="quotelev1">&gt; specified in the orte_base_user_debugger MCA parameter for the list of
</span><br>
<span class="quotelev1">&gt; debuggers that was searched.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 26 Mar 2011 15:45:39 -0600
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI error terminate w/o reasons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use that mpirun option, mpirun will place the output from each rank
</span><br>
<span class="quotelev1">&gt; into a -separate- file for you. Give it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --output-filename /myhome/debug/run01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and in /myhome/debug, you will find files:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; run01.0
</span><br>
<span class="quotelev1">&gt; run01.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; each with the output from the indicated rank.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2011, at 3:41 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster can print out all output into one file.
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
<span class="quotelev1">&gt; If I run real task, sometimes processes are terminated w/o any errors
</span><br>
<span class="quotelev1">&gt; before the program normally exit.
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
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; I don't know, but Ashley may be able to help - or you can see his web site
</span><br>
<span class="quotelev1">&gt; for instructions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, since you can put print statements into your code, have you
</span><br>
<span class="quotelev1">&gt; considered using mpirun's option to direct output from each rank into its
</span><br>
<span class="quotelev1">&gt; own file? Look at &quot;mpirun -h&quot; for the options.
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
<span class="quotelev1">&gt; Is it possible to enable padb to print out the stack trace and other
</span><br>
<span class="quotelev1">&gt; program execute information into a file ?
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
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; You don't need to install anything on a system folder - you can just
</span><br>
<span class="quotelev1">&gt; install it in your home directory, assuming that is accessible on the remote
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the script - unless you can somehow modify it to allow you to run
</span><br>
<span class="quotelev1">&gt; under a debugger, I am afraid you are completely out of luck.
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
<span class="quotelev1">&gt; I am working on a cluster, where I am not allowed to install software on
</span><br>
<span class="quotelev1">&gt; system folder.
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
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 77967 on node n342 exited on
</span><br>
<span class="quotelev1">&gt; signal 9 (Killed).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After searching, the signal 9 means:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the process is currently in an unworkable state and should be terminated
</span><br>
<span class="quotelev1">&gt; with extreme prejudice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If a process does not respond to any other termination signals, sending
</span><br>
<span class="quotelev1">&gt; it a SIGKILL signal will almost always cause it to go away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The system will generate SIGKILL for a process itself under some unusual
</span><br>
<span class="quotelev1">&gt; conditions where the program cannot possibly continue to run (even to run a
</span><br>
<span class="quotelev1">&gt; signal handler).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, the error message does not indicate any possible reasons for the
</span><br>
<span class="quotelev1">&gt; termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a FOR loop in the main() program, if the loop number is small (&lt;
</span><br>
<span class="quotelev1">&gt; 200), the program works well,
</span><br>
<span class="quotelev1">&gt; but if it becomes lager and larger, the program will got SIGKILL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster where I am running the MPI program does not allow running debug
</span><br>
<span class="quotelev1">&gt; tools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run it on a workstation, it will take a very very long time (for &gt; 200
</span><br>
<span class="quotelev1">&gt; loops) in order to
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16019/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16020.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<li><strong>Previous message:</strong> <a href="16018.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16018.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16021.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="16021.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
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
