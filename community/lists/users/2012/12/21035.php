<?
$subject_val = "Re: [OMPI users] broadcasting basic data items in Java";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 12:53:35 2012" -->
<!-- isoreceived="20121221175335" -->
<!-- sent="Fri, 21 Dec 2012 18:46:37 +0100 (CET)" -->
<!-- isosent="20121221174637" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] broadcasting basic data items in Java" -->
<!-- id="201212211746.qBLHkbEe009723_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] broadcasting basic data items in Java" -->
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
<strong>Subject:</strong> Re: [OMPI users] broadcasting basic data items in Java<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-21 12:46:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21036.php">Jeff Squyres: "Re: [OMPI users] Open MPI planned outage"</a>
<li><strong>Previous message:</strong> <a href="21034.php">Jeff Squyres: "[OMPI users] Open MPI planned outage"</a>
<li><strong>Maybe in reply to:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21040.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Reply:</strong> <a href="21040.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev1">&gt; Hmmm...weird. Well, it looks like OMPI itself is okay, so the issue
</span><br>
<span class="quotelev1">&gt; appears to be in the Java side of things. For whatever reason, your
</span><br>
<span class="quotelev1">&gt; Java VM is refusing to allow a malloc to succeed. I suspect it has
</span><br>
<span class="quotelev1">&gt; something to do with its setup, but I'm not enough of a Java person
</span><br>
<span class="quotelev1">&gt; to point you to the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible that the program was compiled against a different
</span><br>
<span class="quotelev1">&gt; (perhaps incompatible) version of Java?
</span><br>
<p>No, I don't think so. A small Java program without MPI methods works.
<br>
<p>linpc1 bin 122 which mpicc
<br>
/usr/local/openmpi-1.9_64_cc/bin/mpicc
<br>
linpc1 bin 123 pwd
<br>
/usr/local/openmpi-1.9_64_cc/bin
<br>
linpc1 bin 124 grep jdk *
<br>
mpijavac:my $my_compiler = &quot;/usr/local/jdk1.7.0_07-64/bin/javac&quot;;
<br>
mpijavac.pl:my $my_compiler = &quot;/usr/local/jdk1.7.0_07-64/bin/javac&quot;;
<br>
linpc1 bin 125 which java
<br>
/usr/local/jdk1.7.0_07-64/bin/java
<br>
linpc1 bin 126 
<br>
<p><p>linpc1 prog 110 javac MiniProgMain.java
<br>
linpc1 prog 111 java MiniProgMain
<br>
Message 0
<br>
Message 1
<br>
Message 2
<br>
Message 3
<br>
Message 4
<br>
linpc1 prog 112 mpiexec java MiniProgMain
<br>
Message 0
<br>
Message 1
<br>
Message 2
<br>
Message 3
<br>
Message 4
<br>
linpc1 prog 113 mpiexec -np 2 java MiniProgMain
<br>
Message 0
<br>
Message 1
<br>
Message 2
<br>
Message 3
<br>
Message 4
<br>
Message 0
<br>
Message 1
<br>
Message 2
<br>
Message 3
<br>
Message 4
<br>
<p><p>A small program which allocates buffer for a new string.
<br>
...
<br>
stringBUFLEN = new String (string.substring (0, len));
<br>
...
<br>
<p>linpc1 prog 115 javac MemAllocMain.java 
<br>
linpc1 prog 116 java MemAllocMain
<br>
Type something (&quot;quit&quot; terminates program): ffghhfhh
<br>
Received input:          ffghhfhh
<br>
Converted to upper case: FFGHHFHH
<br>
Type something (&quot;quit&quot; terminates program): quit
<br>
Received input:          quit
<br>
Converted to upper case: QUIT
<br>
<p>linpc1 prog 117 mpiexec java MemAllocMain
<br>
Type something (&quot;quit&quot; terminates program): fbhshnhjs
<br>
Received input:          fbhshnhjs
<br>
Converted to upper case: FBHSHNHJS
<br>
Type something (&quot;quit&quot; terminates program): quit
<br>
Received input:          quit
<br>
Converted to upper case: QUIT
<br>
linpc1 prog 118 
<br>
<p>I'm not sure if this is of any help, but the problem starts with
<br>
MPI methods. The following program calls just the Init() and
<br>
Finalize() method.
<br>
<p>tyr java 203 mpiexec -host linpc1 java InitFinalizeMain
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;mca_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value -2 instead of OPAL_SUCCESS
<br>
...
<br>
<p><p>Hopefully somebody will have an idea what goes wrong on my Linux
<br>
system. Thank you very much for any help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p>&nbsp;
<br>
<span class="quotelev1">&gt; Just shooting in the dark here - I suspect you'll have to ask someone
</span><br>
<span class="quotelev1">&gt; more knowledgeable on JVMs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2012, at 7:32 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I can't speak to the other issues, but for these - it looks like
</span><br>
<span class="quotelev3">&gt; &gt;&gt; something isn't right in the system. Could be an incompatibility
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with Suse 12.1.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What the errors are saying is that malloc is failing when used at
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a very early stage in starting the process. Can you run even a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; C-based MPI &quot;hello&quot; program?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes. I have implemented more or less the same program in C and Java.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 131 mpiexec -np 2 -host linpc0,linpc1 hello_1_mpi
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 2 running on linpc0
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 2 running on linpc1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from task 1:
</span><br>
<span class="quotelev2">&gt; &gt;  message type:        3
</span><br>
<span class="quotelev2">&gt; &gt;  msg length:          132 characters
</span><br>
<span class="quotelev2">&gt; &gt;  message:             
</span><br>
<span class="quotelev2">&gt; &gt;    hostname:          linpc1
</span><br>
<span class="quotelev2">&gt; &gt;    operating system:  Linux
</span><br>
<span class="quotelev2">&gt; &gt;    release:           3.1.10-1.16-desktop
</span><br>
<span class="quotelev2">&gt; &gt;    processor:         x86_64
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 132 mpiexec -np 2 -host linpc0,linpc1 java HelloMainWithBarrier
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  mca_base_open failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 21, 2012, at 1:41 AM, Siegmar Gross 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The program breaks if I use two Linux.x86_64 machines (Open Suse 12.1).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; linpc1 etc 101 mpiexec -np 2 -host linpc0,linpc1 java BcastIntArrayMain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mca_base_open failed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [(null):10586] Local abort before MPI_INIT completed successfully; not 
</span><br>
able 
<br>
<span class="quotelev2">&gt; &gt; to 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other 
</span><br>
processes 
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, 
</span><br>
<span class="quotelev2">&gt; &gt; thus 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; causing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Process name: [[16706,1],1]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I use a valid environment on all machines. The problem occurs as well
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; when I compile and run the program directly on the Linux system.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; linpc1 java 101 mpijavac BcastIntMain.java 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; linpc1 java 102 mpiexec -np 2 -host linpc0,linpc1 java -cp `pwd` 
</span><br>
<span class="quotelev2">&gt; &gt; BcastIntMain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mca_base_open failed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>
<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21035/InitFinalizeMain.java">InitFinalizeMain.java</a>
</ul>
<!-- attachment="InitFinalizeMain.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21036.php">Jeff Squyres: "Re: [OMPI users] Open MPI planned outage"</a>
<li><strong>Previous message:</strong> <a href="21034.php">Jeff Squyres: "[OMPI users] Open MPI planned outage"</a>
<li><strong>Maybe in reply to:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21040.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Reply:</strong> <a href="21040.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
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
