<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 04:10:44 2007" -->
<!-- isoreceived="20070611081044" -->
<!-- sent="Mon, 11 Jun 2007 01:10:40 -0700 (PDT)" -->
<!-- isosent="20070611081040" -->
<!-- name="victor marian" -->
<!-- email="vctrmarian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Library Definitions" -->
<!-- id="816667.42997.qm_at_web55808.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="466C50E6.9060001_at_uark.edu" -->
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
<strong>From:</strong> victor marian (<em>vctrmarian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 04:10:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3435.php">smairal_at_[hidden]: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3434.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>I ran the NAS Parallel Bechmark and it gives for me
<br>
-bash%/export/home/vmarian/fortran/benchmarks/NPB3.2/NPB3.2-MPI/bin$
<br>
mpirun -np 1 cg.A.1
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: uDAPL on host SERVSOLARIS was unable to find
<br>
any NICs.
<br>
Another transport will be used instead, although this
<br>
may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;NAS Parallel Benchmarks 3.2 -- CG Benchmark
<br>
<p>&nbsp;Size:      14000
<br>
&nbsp;Iterations:    15
<br>
&nbsp;Number of active processes:     1
<br>
&nbsp;Number of nonzeroes per row:       11
<br>
&nbsp;Eigenvalue shift: .200E+02
<br>
&nbsp;Benchmark completed
<br>
&nbsp;VERIFICATION SUCCESSFUL
<br>
&nbsp;Zeta is      0.171302350540E+02
<br>
&nbsp;Error is     0.512264003323E-13
<br>
<p><p>&nbsp;CG Benchmark Completed.
<br>
&nbsp;Class           =                        A
<br>
&nbsp;Size            =                    14000
<br>
&nbsp;Iterations      =                       15
<br>
&nbsp;Time in seconds =                     3.02
<br>
&nbsp;Total processes =                        1
<br>
&nbsp;Compiled procs  =                        1
<br>
&nbsp;Mop/s total     =                   495.93
<br>
&nbsp;Mop/s/process   =                   495.93
<br>
&nbsp;Operation type  =           floating point
<br>
&nbsp;Verification    =               SUCCESSFUL
<br>
&nbsp;Version         =                      3.2
<br>
&nbsp;Compile date    =              11 Jun 2007
<br>
<p><p>-bash%/export/home/vmarian/fortran/benchmarks/NPB3.2/NPB3.2-MPI/bin$
<br>
mpirun -np 2 cg.A.2
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: uDAPL on host SERVSOLARIS was unable to find
<br>
any NICs.
<br>
Another transport will be used instead, although this
<br>
may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,1,1]: uDAPL on host SERVSOLARIS was unable to find
<br>
any NICs.
<br>
Another transport will be used instead, although this
<br>
may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
<p><p>&nbsp;NAS Parallel Benchmarks 3.2 -- CG Benchmark
<br>
<p>&nbsp;Size:      14000
<br>
&nbsp;Iterations:    15
<br>
&nbsp;Number of active processes:     2
<br>
&nbsp;Number of nonzeroes per row:       11
<br>
&nbsp;Eigenvalue shift: .200E+02
<br>
<p>&nbsp;Benchmark completed
<br>
&nbsp;VERIFICATION SUCCESSFUL
<br>
&nbsp;Zeta is      0.171302350540E+02
<br>
&nbsp;Error is     0.522633719989E-13
<br>
<p><p>&nbsp;CG Benchmark Completed.
<br>
&nbsp;Class           =                        A
<br>
&nbsp;Size            =                    14000
<br>
&nbsp;Iterations      =                       15
<br>
&nbsp;Time in seconds =                     2.47
<br>
&nbsp;Total processes =                        2
<br>
&nbsp;Compiled procs  =                        2
<br>
&nbsp;Mop/s total     =                   606.32
<br>
&nbsp;Mop/s/process   =                   303.16
<br>
&nbsp;Operation type  =           floating point
<br>
&nbsp;Verification    =               SUCCESSFUL
<br>
&nbsp;Version         =                      3.2
<br>
&nbsp;Compile date    =              11 Jun 2007
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;You can remark that the scalling is not so good
<br>
like yours. Maibe I am having comunications problems
<br>
between processors.
<br>
&nbsp;&nbsp;&nbsp;You can also remark that I am faster on one process
<br>
concared to your processor.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Victor
<br>
<p><p><p><p><p>--- Jeff Pummill &lt;jpummil_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Perfect! Thanks Jeff!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The NAS Parallel Benchmark on a dual core AMD
</span><br>
<span class="quotelev1">&gt; machine now returns this...
</span><br>
<span class="quotelev1">&gt; [jpummil_at_localhost bin]$ mpirun -np 1 cg.A.1
</span><br>
<span class="quotelev1">&gt; NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev1">&gt; CG Benchmark Completed.
</span><br>
<span class="quotelev1">&gt;  Class           =                        A
</span><br>
<span class="quotelev1">&gt;  Size            =                    14000
</span><br>
<span class="quotelev1">&gt;  Iterations      =                       15
</span><br>
<span class="quotelev1">&gt;  Time in seconds =                     4.75
</span><br>
<span class="quotelev1">&gt;  Total processes =                        1
</span><br>
<span class="quotelev1">&gt;  Compiled procs  =                        1
</span><br>
<span class="quotelev1">&gt;  Mop/s total     =                   315.32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...and...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jpummil_at_localhost bin]$ mpirun -np 2 cg.A.2
</span><br>
<span class="quotelev1">&gt; NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev1">&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev1">&gt;  Class           =                        A
</span><br>
<span class="quotelev1">&gt;  Size            =                    14000
</span><br>
<span class="quotelev1">&gt;  Iterations      =                       15
</span><br>
<span class="quotelev1">&gt;  Time in seconds =                     2.48
</span><br>
<span class="quotelev1">&gt;  Total processes =                        2
</span><br>
<span class="quotelev1">&gt;  Compiled procs  =                        2
</span><br>
<span class="quotelev1">&gt;  Mop/s total     =                   604.46
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not quite linear, but one must account for all of
</span><br>
<span class="quotelev1">&gt; the OS traffic that 
</span><br>
<span class="quotelev1">&gt; one core or the other must deal with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev1">&gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt; Fayetteville, Arkansas 72701
</span><br>
<span class="quotelev1">&gt; (479) 575 - 4590
</span><br>
<span class="quotelev1">&gt; <a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;A supercomputer is a device for turning
</span><br>
<span class="quotelev1">&gt; compute-bound
</span><br>
<span class="quotelev1">&gt; problems into I/O-bound problems.&quot; -Seymour Cray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Just remove the -L and -l arguments -- OMPI's
</span><br>
<span class="quotelev1">&gt; &quot;mpif90&quot; (and other  
</span><br>
<span class="quotelev2">&gt; &gt; wrapper compilers) will do all that magic for you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Many -L/-l arguments in MPI application Makefiles
</span><br>
<span class="quotelev1">&gt; are throwbacks to  
</span><br>
<span class="quotelev2">&gt; &gt; older versions of MPICH wrapper compilers that
</span><br>
<span class="quotelev1">&gt; didn't always work  
</span><br>
<span class="quotelev2">&gt; &gt; properly.  Those days are long gone; most (all?)
</span><br>
<span class="quotelev1">&gt; MPI wrapper  
</span><br>
<span class="quotelev2">&gt; &gt; compilers do not need you to specify -L/-l these
</span><br>
<span class="quotelev1">&gt; days.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 10, 2007, at 3:08 PM, Jeff Pummill wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Maybe the &quot;dumb question&quot; of the week, but here
</span><br>
<span class="quotelev1">&gt; goes...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to compile a piece of code (NPB)
</span><br>
<span class="quotelev1">&gt; under OpenMPI and I am  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; having a problem with specifying the right
</span><br>
<span class="quotelev1">&gt; library. Possibly  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; something I need to define in a LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; statement?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Using Gnu mpich, the line looked like this...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FMPI_LIB  = -L/opt/mpich/gnu/lib/ -lmpich
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I tried to replace this with...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FMPI_LIB  = -L/usr/lib/openmpi/ -llibmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to which the make responded...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpif90 -O -o ../bin/cg.A.2 cg.o
</span><br>
<span class="quotelev1">&gt; ../common/print_results.o ../common/ 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; randdp.o ../common/timers.o -L/usr/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; -llibmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/bin/ld: cannot find -llibmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wrong library file? Setup or path issue?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev3">&gt; &gt;&gt; University of Arkansas
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Get your own web address.  
<br>
Have a HUGE year through Yahoo! Small Business.
<br>
<a href="http://smallbusiness.yahoo.com/domains/?p=BESTDEAL">http://smallbusiness.yahoo.com/domains/?p=BESTDEAL</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3435.php">smairal_at_[hidden]: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3434.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
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
