<?
$subject_val = "Re: [OMPI users] broadcasting basic data items in Java";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 22 03:00:42 2012" -->
<!-- isoreceived="20121222080042" -->
<!-- sent="Sat, 22 Dec 2012 08:53:24 +0100 (CET)" -->
<!-- isosent="20121222075324" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] broadcasting basic data items in Java" -->
<!-- id="201212220753.qBM7rObN011242_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-12-22 02:53:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21042.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21040.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe in reply to:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21046.php">Jeff Squyres: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Reply:</strong> <a href="21046.php">Jeff Squyres: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev1">&gt; Interesting. My best guess is that the OMPI libraries aren't being
</span><br>
<span class="quotelev1">&gt; found, though I'm a little surprised because the error message
</span><br>
<span class="quotelev1">&gt; indicates an inability to malloc - but it's possible the message
</span><br>
<span class="quotelev1">&gt; isn't accurate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One thing stands out - I see you compiled your program with &quot;javac&quot;.
</span><br>
<span class="quotelev1">&gt; I suspect that is the source of the trouble - you really need to use
</span><br>
<span class="quotelev1">&gt; the Java wrapper compiler &quot;mpijavac&quot; so all the libs get absorbed
</span><br>
<span class="quotelev1">&gt; and/or linked correctly.
</span><br>
<p>No, I only compiled the first two programs (which don't use any MPI
<br>
methods) with javac. The MPI program &quot;InitFinalizeMain.java&quot; was
<br>
compiled with &quot;mpijavac&quot; (I use a script file and GNUmakefile).
<br>
<p>linpc1 java 102 make_classfiles
<br>
...
<br>
=========== linpc1 ===========
<br>
Warning: untrusted X11 forwarding setup failed: xauth key data not generated
<br>
Warning: No xauth data; using fake authentication data for X11 forwarding.
<br>
mpijavac -d /home/fd1026/Linux/x86_64/mpi_classfiles InitFinalizeMain.java
<br>
...
<br>
<p><p>The other programs work also if I compile them with &quot;mpijavac&quot;
<br>
<p>linpc1 prog 107 mpijavac MemAllocMain.java 
<br>
linpc1 prog 108 mpiexec java -cp `pwd` MemAllocMain
<br>
Type something (&quot;quit&quot; terminates program): dgdas
<br>
Received input:          dgdas
<br>
Converted to upper case: DGDAS
<br>
Type something (&quot;quit&quot; terminates program): quit
<br>
Received input:          quit
<br>
Converted to upper case: QUIT
<br>
linpc1 prog 109 
<br>
<p><p>My environment should be valid as well. LD_LIBRARY_PATH contains
<br>
first the directories for 32 bit libraries and then the directories
<br>
for 64 bit libraries. I have split the long lines for the PATH
<br>
variables so that they are easier to read.
<br>
<p>linpc1 java 111 mpiexec java EnvironVarMain
<br>
<p>Operating system: Linux    Processor architecture: x86_64
<br>
<p>&nbsp;&nbsp;CLASSPATH:
<br>
/usr/local/junit4.10:
<br>
/usr/local/junit4.10/junit-4.10.jar:
<br>
//usr/local/jdk1.7.0_07-64/j3d/lib/ext/j3dcore.jar:
<br>
//usr/local/jdk1.7.0_07-64/j3d/lib/ext/j3dutils.jar:
<br>
//usr/local/jdk1.7.0_07-64/j3d/lib/ext/vecmath.jar:
<br>
/usr/local/javacc-5.0/javacc.jar:
<br>
.:
<br>
/home/fd1026/Linux/x86_64/mpi_classfiles
<br>
<p>&nbsp;&nbsp;LD_LIBRARY_PATH:
<br>
/usr/lib:
<br>
...
<br>
/usr/lib64:
<br>
/usr/local/jdk1.7.0_07-64/jre/lib/amd64:
<br>
/usr/local/gcc-4.7.1/lib64:
<br>
/usr/local/gcc-4.7.1/libexec/gcc/x86_64-unknown-linux-gnu/4.7.1:
<br>
/usr/local/gcc-4.7.1/lib/gcc/x86_64-unknown-linux-gnu/4.7.1:
<br>
/usr/local/lib64:
<br>
/usr/local/ssl/lib64:
<br>
/usr/lib64:
<br>
/usr/X11R6/lib64:
<br>
/usr/local/openmpi-1.9_64_cc/lib64:
<br>
/home/fd1026/Linux/x86_64/lib64
<br>
linpc1 java 112 
<br>
<p>Can I provide any other information to solve this problem?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; On Dec 21, 2012, at 9:46 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hmmm...weird. Well, it looks like OMPI itself is okay, so the issue
</span><br>
<span class="quotelev3">&gt; &gt;&gt; appears to be in the Java side of things. For whatever reason, your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Java VM is refusing to allow a malloc to succeed. I suspect it has
</span><br>
<span class="quotelev3">&gt; &gt;&gt; something to do with its setup, but I'm not enough of a Java person
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to point you to the problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is it possible that the program was compiled against a different
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (perhaps incompatible) version of Java?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No, I don't think so. A small Java program without MPI methods works.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 bin 122 which mpicc
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.9_64_cc/bin/mpicc
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 bin 123 pwd
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.9_64_cc/bin
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 bin 124 grep jdk *
</span><br>
<span class="quotelev2">&gt; &gt; mpijavac:my $my_compiler = &quot;/usr/local/jdk1.7.0_07-64/bin/javac&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; mpijavac.pl:my $my_compiler = &quot;/usr/local/jdk1.7.0_07-64/bin/javac&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 bin 125 which java
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/jdk1.7.0_07-64/bin/java
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 bin 126 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 prog 110 javac MiniProgMain.java
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 prog 111 java MiniProgMain
</span><br>
<span class="quotelev2">&gt; &gt; Message 0
</span><br>
<span class="quotelev2">&gt; &gt; Message 1
</span><br>
<span class="quotelev2">&gt; &gt; Message 2
</span><br>
<span class="quotelev2">&gt; &gt; Message 3
</span><br>
<span class="quotelev2">&gt; &gt; Message 4
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 prog 112 mpiexec java MiniProgMain
</span><br>
<span class="quotelev2">&gt; &gt; Message 0
</span><br>
<span class="quotelev2">&gt; &gt; Message 1
</span><br>
<span class="quotelev2">&gt; &gt; Message 2
</span><br>
<span class="quotelev2">&gt; &gt; Message 3
</span><br>
<span class="quotelev2">&gt; &gt; Message 4
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 prog 113 mpiexec -np 2 java MiniProgMain
</span><br>
<span class="quotelev2">&gt; &gt; Message 0
</span><br>
<span class="quotelev2">&gt; &gt; Message 1
</span><br>
<span class="quotelev2">&gt; &gt; Message 2
</span><br>
<span class="quotelev2">&gt; &gt; Message 3
</span><br>
<span class="quotelev2">&gt; &gt; Message 4
</span><br>
<span class="quotelev2">&gt; &gt; Message 0
</span><br>
<span class="quotelev2">&gt; &gt; Message 1
</span><br>
<span class="quotelev2">&gt; &gt; Message 2
</span><br>
<span class="quotelev2">&gt; &gt; Message 3
</span><br>
<span class="quotelev2">&gt; &gt; Message 4
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A small program which allocates buffer for a new string.
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; stringBUFLEN = new String (string.substring (0, len));
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 prog 115 javac MemAllocMain.java 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 prog 116 java MemAllocMain
</span><br>
<span class="quotelev2">&gt; &gt; Type something (&quot;quit&quot; terminates program): ffghhfhh
</span><br>
<span class="quotelev2">&gt; &gt; Received input:          ffghhfhh
</span><br>
<span class="quotelev2">&gt; &gt; Converted to upper case: FFGHHFHH
</span><br>
<span class="quotelev2">&gt; &gt; Type something (&quot;quit&quot; terminates program): quit
</span><br>
<span class="quotelev2">&gt; &gt; Received input:          quit
</span><br>
<span class="quotelev2">&gt; &gt; Converted to upper case: QUIT
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 prog 117 mpiexec java MemAllocMain
</span><br>
<span class="quotelev2">&gt; &gt; Type something (&quot;quit&quot; terminates program): fbhshnhjs
</span><br>
<span class="quotelev2">&gt; &gt; Received input:          fbhshnhjs
</span><br>
<span class="quotelev2">&gt; &gt; Converted to upper case: FBHSHNHJS
</span><br>
<span class="quotelev2">&gt; &gt; Type something (&quot;quit&quot; terminates program): quit
</span><br>
<span class="quotelev2">&gt; &gt; Received input:          quit
</span><br>
<span class="quotelev2">&gt; &gt; Converted to upper case: QUIT
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 prog 118 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if this is of any help, but the problem starts with
</span><br>
<span class="quotelev2">&gt; &gt; MPI methods. The following program calls just the Init() and
</span><br>
<span class="quotelev2">&gt; &gt; Finalize() method.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 203 mpiexec -host linpc1 java InitFinalizeMain
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
<span class="quotelev2">&gt; &gt; Hopefully somebody will have an idea what goes wrong on my Linux
</span><br>
<span class="quotelev2">&gt; &gt; system. Thank you very much for any help in advance.
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
<span class="quotelev3">&gt; &gt;&gt; Just shooting in the dark here - I suspect you'll have to ask someone
</span><br>
<span class="quotelev3">&gt; &gt;&gt; more knowledgeable on JVMs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 21, 2012, at 7:32 AM, Siegmar Gross 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I can't speak to the other issues, but for these - it looks like
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; something isn't right in the system. Could be an incompatibility
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with Suse 12.1.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; What the errors are saying is that malloc is failing when used at
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; a very early stage in starting the process. Can you run even a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; C-based MPI &quot;hello&quot; program?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yes. I have implemented more or less the same program in C and Java.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr hello_1 131 mpiexec -np 2 -host linpc0,linpc1 hello_1_mpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Process 0 of 2 running on linpc0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Process 1 of 2 running on linpc1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Greetings from task 1:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; message type:        3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; msg length:          132 characters
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; message:             
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   hostname:          linpc1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   operating system:  Linux
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   release:           3.1.10-1.16-desktop
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   processor:         x86_64
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr hello_1 132 mpiexec -np 2 -host linpc0,linpc1 java HelloMainWithBarrier
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
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Dec 21, 2012, at 1:41 AM, Siegmar Gross 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The program breaks if I use two Linux.x86_64 machines (Open Suse 12.1).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; linpc1 etc 101 mpiexec -np 2 -host linpc0,linpc1 java BcastIntArrayMain
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mca_base_open failed
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [(null):10586] Local abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev2">&gt; &gt; able 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other 
</span><br>
<span class="quotelev2">&gt; &gt; processes 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; thus 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; causing
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Process name: [[16706,1],1]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I use a valid environment on all machines. The problem occurs as well
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; when I compile and run the program directly on the Linux system.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; linpc1 java 101 mpijavac BcastIntMain.java 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; linpc1 java 102 mpiexec -np 2 -host linpc0,linpc1 java -cp `pwd` 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; BcastIntMain
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mca_base_open failed
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;InitFinalizeMain.java&gt;_______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21042.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21040.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe in reply to:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21046.php">Jeff Squyres: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Reply:</strong> <a href="21046.php">Jeff Squyres: "Re: [OMPI users] broadcasting basic data items in Java"</a>
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
