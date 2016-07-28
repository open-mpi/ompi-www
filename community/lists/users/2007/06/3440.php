<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 08:40:16 2007" -->
<!-- isoreceived="20070611124016" -->
<!-- sent="Mon, 11 Jun 2007 07:40:09 -0500" -->
<!-- isosent="20070611124009" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Library Definitions" -->
<!-- id="466D42A9.9000802_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1181549856.6116.25.camel_at_fkpc167.phc.chalmers.se" -->
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
<strong>Date:</strong> 2007-06-11 08:40:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3439.php">Brock Palen: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3442.php">victor marian: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3442.php">victor marian: "Re: [OMPI users] Library Definitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Victor,
<br>
<p>Build the FT benchmark and build it as a class B problem. This will run 
<br>
in the 1-2 minute range instead of 2-4 seconds the CG class A benchmark 
<br>
does.
<br>
<p><p>Jeff F. Pummill
<br>
Senior Linux Cluster Administrator
<br>
University of Arkansas
<br>
<p><p><p>Terry Frankcombe wrote:
<br>
<span class="quotelev1">&gt; Hi Victor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd suggest 3 seconds of CPU time is far, far to small a problem to do
</span><br>
<span class="quotelev1">&gt; scaling tests with.  Even with only 2 CPUs, I wouldn't go below 100
</span><br>
<span class="quotelev1">&gt; times that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2007-06-11 at 01:10 -0700, victor marian wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran the NAS Parallel Bechmark and it gives for me
</span><br>
<span class="quotelev2">&gt;&gt; -bash%/export/home/vmarian/fortran/benchmarks/NPB3.2/NPB3.2-MPI/bin$
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 cg.A.1
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to find
</span><br>
<span class="quotelev2">&gt;&gt; any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this
</span><br>
<span class="quotelev2">&gt;&gt; may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Size:      14000
</span><br>
<span class="quotelev2">&gt;&gt;  Iterations:    15
</span><br>
<span class="quotelev2">&gt;&gt;  Number of active processes:     1
</span><br>
<span class="quotelev2">&gt;&gt;  Number of nonzeroes per row:       11
</span><br>
<span class="quotelev2">&gt;&gt;  Eigenvalue shift: .200E+02
</span><br>
<span class="quotelev2">&gt;&gt;  Benchmark completed
</span><br>
<span class="quotelev2">&gt;&gt;  VERIFICATION SUCCESSFUL
</span><br>
<span class="quotelev2">&gt;&gt;  Zeta is      0.171302350540E+02
</span><br>
<span class="quotelev2">&gt;&gt;  Error is     0.512264003323E-13
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev2">&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev2">&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev2">&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev2">&gt;&gt;  Time in seconds =                     3.02
</span><br>
<span class="quotelev2">&gt;&gt;  Total processes =                        1
</span><br>
<span class="quotelev2">&gt;&gt;  Compiled procs  =                        1
</span><br>
<span class="quotelev2">&gt;&gt;  Mop/s total     =                   495.93
</span><br>
<span class="quotelev2">&gt;&gt;  Mop/s/process   =                   495.93
</span><br>
<span class="quotelev2">&gt;&gt;  Operation type  =           floating point
</span><br>
<span class="quotelev2">&gt;&gt;  Verification    =               SUCCESSFUL
</span><br>
<span class="quotelev2">&gt;&gt;  Version         =                      3.2
</span><br>
<span class="quotelev2">&gt;&gt;  Compile date    =              11 Jun 2007
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -bash%/export/home/vmarian/fortran/benchmarks/NPB3.2/NPB3.2-MPI/bin$
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 cg.A.2
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to find
</span><br>
<span class="quotelev2">&gt;&gt; any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this
</span><br>
<span class="quotelev2">&gt;&gt; may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1]: uDAPL on host SERVSOLARIS was unable to find
</span><br>
<span class="quotelev2">&gt;&gt; any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this
</span><br>
<span class="quotelev2">&gt;&gt; may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Size:      14000
</span><br>
<span class="quotelev2">&gt;&gt;  Iterations:    15
</span><br>
<span class="quotelev2">&gt;&gt;  Number of active processes:     2
</span><br>
<span class="quotelev2">&gt;&gt;  Number of nonzeroes per row:       11
</span><br>
<span class="quotelev2">&gt;&gt;  Eigenvalue shift: .200E+02
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Benchmark completed
</span><br>
<span class="quotelev2">&gt;&gt;  VERIFICATION SUCCESSFUL
</span><br>
<span class="quotelev2">&gt;&gt;  Zeta is      0.171302350540E+02
</span><br>
<span class="quotelev2">&gt;&gt;  Error is     0.522633719989E-13
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev2">&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev2">&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev2">&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev2">&gt;&gt;  Time in seconds =                     2.47
</span><br>
<span class="quotelev2">&gt;&gt;  Total processes =                        2
</span><br>
<span class="quotelev2">&gt;&gt;  Compiled procs  =                        2
</span><br>
<span class="quotelev2">&gt;&gt;  Mop/s total     =                   606.32
</span><br>
<span class="quotelev2">&gt;&gt;  Mop/s/process   =                   303.16
</span><br>
<span class="quotelev2">&gt;&gt;  Operation type  =           floating point
</span><br>
<span class="quotelev2">&gt;&gt;  Verification    =               SUCCESSFUL
</span><br>
<span class="quotelev2">&gt;&gt;  Version         =                      3.2
</span><br>
<span class="quotelev2">&gt;&gt;  Compile date    =              11 Jun 2007
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     You can remark that the scalling is not so good
</span><br>
<span class="quotelev2">&gt;&gt; like yours. Maibe I am having comunications problems
</span><br>
<span class="quotelev2">&gt;&gt; between processors.
</span><br>
<span class="quotelev2">&gt;&gt;    You can also remark that I am faster on one process
</span><br>
<span class="quotelev2">&gt;&gt; concared to your processor.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                        Victor
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
<span class="quotelev2">&gt;&gt; --- Jeff Pummill &lt;jpummil_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perfect! Thanks Jeff!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The NAS Parallel Benchmark on a dual core AMD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine now returns this...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jpummil_at_localhost bin]$ mpirun -np 1 cg.A.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CG Benchmark Completed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Time in seconds =                     4.75
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Total processes =                        1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Compiled procs  =                        1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Mop/s total     =                   315.32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...and...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jpummil_at_localhost bin]$ mpirun -np 2 cg.A.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Time in seconds =                     2.48
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Total processes =                        2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Compiled procs  =                        2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Mop/s total     =                   604.46
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not quite linear, but one must account for all of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OS traffic that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one core or the other must deal with.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Arkansas
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fayetteville, Arkansas 72701
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (479) 575 - 4590
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;A supercomputer is a device for turning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-bound
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems into I/O-bound problems.&quot; -Seymour Cray
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just remove the -L and -l arguments -- OMPI's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpif90&quot; (and other  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrapper compilers) will do all that magic for you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Many -L/-l arguments in MPI application Makefiles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are throwbacks to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; older versions of MPICH wrapper compilers that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't always work  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; properly.  Those days are long gone; most (all?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI wrapper  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compilers do not need you to specify -L/-l these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; days.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 10, 2007, at 3:08 PM, Jeff Pummill wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe the &quot;dumb question&quot; of the week, but here
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; goes...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to compile a piece of code (NPB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under OpenMPI and I am  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; having a problem with specifying the right
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library. Possibly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something I need to define in a LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; statement?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Using Gnu mpich, the line looked like this...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FMPI_LIB  = -L/opt/mpich/gnu/lib/ -lmpich
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried to replace this with...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FMPI_LIB  = -L/usr/lib/openmpi/ -llibmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to which the make responded...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpif90 -O -o ../bin/cg.A.2 cg.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../common/print_results.o ../common/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; randdp.o ../common/timers.o -L/usr/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -llibmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/bin/ld: cannot find -llibmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Wrong library file? Setup or path issue?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; ____________________________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Get your own web address.  
</span><br>
<span class="quotelev2">&gt;&gt; Have a HUGE year through Yahoo! Small Business.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://smallbusiness.yahoo.com/domains/?p=BESTDEAL">http://smallbusiness.yahoo.com/domains/?p=BESTDEAL</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3439.php">Brock Palen: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3442.php">victor marian: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3442.php">victor marian: "Re: [OMPI users] Library Definitions"</a>
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
