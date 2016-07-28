<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 09:59:57 2007" -->
<!-- isoreceived="20070611135957" -->
<!-- sent="Mon, 11 Jun 2007 09:58:53 -0400" -->
<!-- isosent="20070611135853" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Library Definitions" -->
<!-- id="34D76F54-3F9D-4234-B1C5-18340194E67E_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="466D48D5.6070407_at_uark.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 09:58:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3451.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3449.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3433.php">Ralph Castain: "Re: [OMPI users] Library Definitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes,  we find its best to let users benchmark their code (if they  
<br>
have it already)  Or a code that uses similar algorithms.  And then  
<br>
have the user run on some machines we set aside.
<br>
<p>While we are on the benchmark topic,  Users might be interested, we  
<br>
just installed a new set of Opteron 2220se's,  We used HPL with GOTO  
<br>
blas and on 58 machines (232 cpus)  achieved 1.099 Tflop,  (85% of  
<br>
theory)
<br>
On one node using 4 cpus (duel core duel socket)  I could only get  
<br>
88% so for a machine that had __no tuning__ of the IB network or the  
<br>
sysctl,  We were very happy.
<br>
<p>Boy i love that compile one run on any network of Openmpi.
<br>
<p>Info:
<br>
<p>OS:  RHEL4
<br>
Compiler:  pgi/6.2
<br>
mpi:    openmpi/1.2.0
<br>
BLAS:  GOTO-1.15
<br>
Cisco Topspin infiniband using openIB provided by redhat.
<br>
<p>Thanks for all the help list :-)
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jun 11, 2007, at 9:06 AM, Jeff Pummill wrote:
<br>
<p><span class="quotelev1">&gt; Glad to contribute Victor!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running on a home workstation that uses an AMD 3800 cpu  
</span><br>
<span class="quotelev1">&gt; attached to 2 gigs of ram.
</span><br>
<span class="quotelev1">&gt; My timings for FT were 175 secs with one core and 110 on two cores  
</span><br>
<span class="quotelev1">&gt; with -O3 and -mtune=amd64 as tuning options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock, Terry and Jeff are all exactly correct in their comments  
</span><br>
<span class="quotelev1">&gt; regarding benchmarks. There are simply too many variables to  
</span><br>
<span class="quotelev1">&gt; contend with. In addition, one and two core runs on a single  
</span><br>
<span class="quotelev1">&gt; workstation probably isn't the best evaluation of OpenMPI. As you  
</span><br>
<span class="quotelev1">&gt; expand to more devices and generate bigger problems (HPL or HPCC  
</span><br>
<span class="quotelev1">&gt; for example), a better overall picture will emerge.
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
<span class="quotelev1">&gt; victor marian wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Thank you everybody for the advices.
</span><br>
<span class="quotelev2">&gt;&gt;   I ran the NAS benchmark class B and it runs in 181
</span><br>
<span class="quotelev2">&gt;&gt; seconds on one core and in 90 seconds on two cores, so
</span><br>
<span class="quotelev2">&gt;&gt; it scales almost perfectly.
</span><br>
<span class="quotelev2">&gt;&gt;   What were your timings, Jeff, and what processor do
</span><br>
<span class="quotelev2">&gt;&gt; you exactly have?
</span><br>
<span class="quotelev2">&gt;&gt;   Mine is a Pentium D at 2.8GHz.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                          Victor
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
<span class="quotelev3">&gt;&gt;&gt; Victor,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Build the FT benchmark and build it as a class B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem. This will run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the 1-2 minute range instead of 2-4 seconds the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CG class A benchmark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does.
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry Frankcombe wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Victor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd suggest 3 seconds of CPU time is far, far to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; small a problem to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scaling tests with.  Even with only 2 CPUs, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wouldn't go below 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; times that.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, 2007-06-11 at 01:10 -0700, victor marian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I ran the NAS Parallel Bechmark and it gives for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -bash%/export/home/vmarian/fortran/benchmarks/NPB3.2/NPB3.2-MPI/bin$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 1 cg.A.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any NICs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may result in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Size:      14000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Iterations:    15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Number of active processes:     1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Number of nonzeroes per row:       11
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Eigenvalue shift: .200E+02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Benchmark completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  VERIFICATION SUCCESSFUL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Zeta is      0.171302350540E+02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Error is     0.512264003323E-13
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Time in seconds =                     3.02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Total processes =                        1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Compiled procs  =                        1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Mop/s total     =                   495.93
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Mop/s/process   =                   495.93
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Operation type  =           floating point
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Verification    =               SUCCESSFUL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Version         =                      3.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Compile date    =              11 Jun 2007
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -bash%/export/home/vmarian/fortran/benchmarks/NPB3.2/NPB3.2-MPI/bin$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 2 cg.A.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any NICs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may result in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0,1,1]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any NICs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may result in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Size:      14000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Iterations:    15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Number of active processes:     2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Number of nonzeroes per row:       11
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Eigenvalue shift: .200E+02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Benchmark completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  VERIFICATION SUCCESSFUL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Zeta is      0.171302350540E+02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Error is     0.522633719989E-13
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Time in seconds =                     2.47
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Total processes =                        2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Compiled procs  =                        2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Mop/s total     =                   606.32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Mop/s/process   =                   303.16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Operation type  =           floating point
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Verification    =               SUCCESSFUL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Version         =                      3.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Compile date    =              11 Jun 2007
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     You can remark that the scalling is not so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; like yours. Maibe I am having comunications
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; between processors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    You can also remark that I am faster on one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; concared to your processor.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                        Victor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- Jeff Pummill &lt;jpummil_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Perfect! Thanks Jeff!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The NAS Parallel Benchmark on a dual core AMD
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; machine now returns this...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [jpummil_at_localhost bin]$ mpirun -np 1 cg.A.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CG Benchmark Completed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Time in seconds =                     4.75
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Total processes =                        1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Compiled procs  =                        1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Mop/s total     =                   315.32
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ...and...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [jpummil_at_localhost bin]$ mpirun -np 2 cg.A.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; NAS Parallel Benchmarks 3.2 -- CG Benchmark
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  CG Benchmark Completed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Class           =                        A
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Size            =                    14000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Iterations      =                       15
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Time in seconds =                     2.48
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Total processes =                        2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Compiled procs  =                        2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Mop/s total     =                   604.46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Not quite linear, but one must account for all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the OS traffic that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; one core or the other must deal with.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; University of Arkansas
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fayetteville, Arkansas 72701
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (479) 575 - 4590
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;A supercomputer is a device for turning
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute-bound
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problems into I/O-bound problems.&quot; -Seymour Cray
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Just remove the -L and -l arguments -- OMPI's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpif90&quot; (and other
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrapper compilers) will do all that magic for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; === message truncated ===&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _____________________________________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt; _______________
</span><br>
<span class="quotelev2">&gt;&gt; Be a better Globetrotter. Get better travel answers from someone  
</span><br>
<span class="quotelev2">&gt;&gt; who knows. Yahoo! Answers - Check it out.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://answers.yahoo.com/dir/?link=list&amp;sid=396545469">http://answers.yahoo.com/dir/?link=list&amp;sid=396545469</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3450/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3451.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3449.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3433.php">Ralph Castain: "Re: [OMPI users] Library Definitions"</a>
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
