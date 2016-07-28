<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 08:57:06 2007" -->
<!-- isoreceived="20070611125706" -->
<!-- sent="Mon, 11 Jun 2007 05:57:02 -0700 (PDT)" -->
<!-- isosent="20070611125702" -->
<!-- name="victor marian" -->
<!-- email="vctrmarian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Library Definitions" -->
<!-- id="303303.56641.qm_at_web55814.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="466D42A9.9000802_at_uark.edu" -->
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
<strong>Date:</strong> 2007-06-11 08:57:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3440.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Thank you everybody for the advices.
<br>
&nbsp;&nbsp;I ran the NAS benchmark class B and it runs in 181
<br>
seconds on one core and in 90 seconds on two cores, so
<br>
it scales almost perfectly.
<br>
&nbsp;&nbsp;What were your timings, Jeff, and what processor do
<br>
you exactly have?
<br>
&nbsp;&nbsp;Mine is a Pentium D at 2.8GHz.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Victor
<br>
<p><p>--- Jeff Pummill &lt;jpummil_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Victor,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Build the FT benchmark and build it as a class B
</span><br>
<span class="quotelev1">&gt; problem. This will run 
</span><br>
<span class="quotelev1">&gt; in the 1-2 minute range instead of 2-4 seconds the
</span><br>
<span class="quotelev1">&gt; CG class A benchmark 
</span><br>
<span class="quotelev1">&gt; does.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Victor
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd suggest 3 seconds of CPU time is far, far to
</span><br>
<span class="quotelev1">&gt; small a problem to do
</span><br>
<span class="quotelev2">&gt; &gt; scaling tests with.  Even with only 2 CPUs, I
</span><br>
<span class="quotelev1">&gt; wouldn't go below 100
</span><br>
<span class="quotelev2">&gt; &gt; times that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 2007-06-11 at 01:10 -0700, victor marian
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Jeff
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I ran the NAS Parallel Bechmark and it gives for
</span><br>
<span class="quotelev1">&gt; me
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
-bash%/export/home/vmarian/fortran/benchmarks/NPB3.2/NPB3.2-MPI/bin$
<br>
<span class="quotelev3">&gt; &gt;&gt; mpirun -np 1 cg.A.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev1">&gt; find
</span><br>
<span class="quotelev3">&gt; &gt;&gt; any NICs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Another transport will be used instead, although
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; may result in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;  NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Size:      14000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Iterations:    15
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Number of active processes:     1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Number of nonzeroes per row:       11
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Eigenvalue shift: .200E+02
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Benchmark completed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  VERIFICATION SUCCESSFUL
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Zeta is      0.171302350540E+02
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Error is     0.512264003323E-13
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Time in seconds =                     3.02
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Total processes =                        1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Compiled procs  =                        1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Mop/s total     =                   495.93
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Mop/s/process   =                   495.93
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Operation type  =           floating point
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Verification    =               SUCCESSFUL
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Version         =                      3.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Compile date    =              11 Jun 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
-bash%/export/home/vmarian/fortran/benchmarks/NPB3.2/NPB3.2-MPI/bin$
<br>
<span class="quotelev3">&gt; &gt;&gt; mpirun -np 2 cg.A.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev1">&gt; find
</span><br>
<span class="quotelev3">&gt; &gt;&gt; any NICs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Another transport will be used instead, although
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; may result in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt; [0,1,1]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev1">&gt; find
</span><br>
<span class="quotelev3">&gt; &gt;&gt; any NICs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Another transport will be used instead, although
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; may result in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Size:      14000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Iterations:    15
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Number of active processes:     2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Number of nonzeroes per row:       11
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Eigenvalue shift: .200E+02
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Benchmark completed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  VERIFICATION SUCCESSFUL
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Zeta is      0.171302350540E+02
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Error is     0.522633719989E-13
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Time in seconds =                     2.47
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Total processes =                        2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Compiled procs  =                        2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Mop/s total     =                   606.32
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Mop/s/process   =                   303.16
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Operation type  =           floating point
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Verification    =               SUCCESSFUL
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Version         =                      3.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Compile date    =              11 Jun 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     You can remark that the scalling is not so
</span><br>
<span class="quotelev1">&gt; good
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like yours. Maibe I am having comunications
</span><br>
<span class="quotelev1">&gt; problems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; between processors.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    You can also remark that I am faster on one
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev3">&gt; &gt;&gt; concared to your processor.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                        Victor
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- Jeff Pummill &lt;jpummil_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Perfect! Thanks Jeff!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The NAS Parallel Benchmark on a dual core AMD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; machine now returns this...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jpummil_at_localhost bin]$ mpirun -np 1 cg.A.1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CG Benchmark Completed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Time in seconds =                     4.75
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Total processes =                        1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Compiled procs  =                        1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Mop/s total     =                   315.32
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...and...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jpummil_at_localhost bin]$ mpirun -np 2 cg.A.2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Time in seconds =                     2.48
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Total processes =                        2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Compiled procs  =                        2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Mop/s total     =                   604.46
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Not quite linear, but one must account for all
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the OS traffic that 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; one core or the other must deal with.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; University of Arkansas
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Fayetteville, Arkansas 72701
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (479) 575 - 4590
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;A supercomputer is a device for turning
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compute-bound
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; problems into I/O-bound problems.&quot; -Seymour Cray
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Just remove the -L and -l arguments -- OMPI's
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;mpif90&quot; (and other  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; wrapper compilers) will do all that magic for
</span><br>
<span class="quotelev1">&gt; you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
=== message truncated ===&gt;
<br>
_______________________________________________
<br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Be a better Globetrotter. Get better travel answers from someone who knows. Yahoo! Answers - Check it out.
<br>
<a href="http://answers.yahoo.com/dir/?link=list&amp;sid=396545469">http://answers.yahoo.com/dir/?link=list&amp;sid=396545469</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3440.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
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
