<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 10 15:28:50 2007" -->
<!-- isoreceived="20070610192850" -->
<!-- sent="Sun, 10 Jun 2007 14:28:38 -0500" -->
<!-- isosent="20070610192838" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Library Definitions" -->
<!-- id="466C50E6.9060001_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43C022C7-6CC9-4F8D-A078-78A1CFC61C86_at_cisco.com" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-10 15:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3435.php">smairal_at_[hidden]: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3433.php">Ralph Castain: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3436.php">victor marian: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3436.php">victor marian: "Re: [OMPI users] Library Definitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perfect! Thanks Jeff!
<br>
<p>The NAS Parallel Benchmark on a dual core AMD machine now returns this...
<br>
[jpummil_at_localhost bin]$ mpirun -np 1 cg.A.1
<br>
NAS Parallel Benchmarks 3.2 -- CG Benchmark
<br>
CG Benchmark Completed.
<br>
&nbsp;Class           =                        A
<br>
&nbsp;Size            =                    14000
<br>
&nbsp;Iterations      =                       15
<br>
&nbsp;Time in seconds =                     4.75
<br>
&nbsp;Total processes =                        1
<br>
&nbsp;Compiled procs  =                        1
<br>
&nbsp;Mop/s total     =                   315.32
<br>
<p>...and...
<br>
<p>[jpummil_at_localhost bin]$ mpirun -np 2 cg.A.2
<br>
NAS Parallel Benchmarks 3.2 -- CG Benchmark
<br>
&nbsp;CG Benchmark Completed.
<br>
&nbsp;Class           =                        A
<br>
&nbsp;Size            =                    14000
<br>
&nbsp;Iterations      =                       15
<br>
&nbsp;Time in seconds =                     2.48
<br>
&nbsp;Total processes =                        2
<br>
&nbsp;Compiled procs  =                        2
<br>
&nbsp;Mop/s total     =                   604.46
<br>
<p>Not quite linear, but one must account for all of the OS traffic that 
<br>
one core or the other must deal with.
<br>
<p><p>Jeff F. Pummill
<br>
Senior Linux Cluster Administrator
<br>
University of Arkansas
<br>
Fayetteville, Arkansas 72701
<br>
(479) 575 - 4590
<br>
<a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
<br>
<p>&quot;A supercomputer is a device for turning compute-bound
<br>
problems into I/O-bound problems.&quot; -Seymour Cray
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Just remove the -L and -l arguments -- OMPI's &quot;mpif90&quot; (and other  
</span><br>
<span class="quotelev1">&gt; wrapper compilers) will do all that magic for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many -L/-l arguments in MPI application Makefiles are throwbacks to  
</span><br>
<span class="quotelev1">&gt; older versions of MPICH wrapper compilers that didn't always work  
</span><br>
<span class="quotelev1">&gt; properly.  Those days are long gone; most (all?) MPI wrapper  
</span><br>
<span class="quotelev1">&gt; compilers do not need you to specify -L/-l these days.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 10, 2007, at 3:08 PM, Jeff Pummill wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the &quot;dumb question&quot; of the week, but here goes...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to compile a piece of code (NPB) under OpenMPI and I am  
</span><br>
<span class="quotelev2">&gt;&gt; having a problem with specifying the right library. Possibly  
</span><br>
<span class="quotelev2">&gt;&gt; something I need to define in a LD_LIBRARY_PATH statement?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using Gnu mpich, the line looked like this...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FMPI_LIB  = -L/opt/mpich/gnu/lib/ -lmpich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to replace this with...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FMPI_LIB  = -L/usr/lib/openmpi/ -llibmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to which the make responded...
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -O -o ../bin/cg.A.2 cg.o ../common/print_results.o ../common/ 
</span><br>
<span class="quotelev2">&gt;&gt; randdp.o ../common/timers.o -L/usr/lib/openmpi/ -llibmpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: cannot find -llibmpi
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Wrong library file? Setup or path issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev2">&gt;&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev2">&gt;&gt; University of Arkansas
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3435.php">smairal_at_[hidden]: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3433.php">Ralph Castain: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3436.php">victor marian: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3436.php">victor marian: "Re: [OMPI users] Library Definitions"</a>
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
