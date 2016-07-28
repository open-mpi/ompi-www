<?
$subject_val = "Re: [OMPI users] strange bug";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 12:57:45 2009" -->
<!-- isoreceived="20090512165745" -->
<!-- sent="Tue, 12 May 2009 11:57:38 -0500" -->
<!-- isosent="20090512165738" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange bug" -->
<!-- id="4A09AA82.6050005_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A098904.3010403_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange bug<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 12:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9318.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<li><strong>Previous message:</strong> <a href="9316.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9318.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9318.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hm, so I am out of ideas. I created multiple variants of test-programs 
<br>
which did what you basically described, and they all passed and did not 
<br>
generate problems. I compiled the MUMPS library and ran the tests that 
<br>
they have in the examples directory, and they all worked.
<br>
<p>Additionally, I checked in the source code of Open MPI. In comm_dup 
<br>
there is only a single location where we raise the error MPI_ERR_INTERN 
<br>
(which was reported in your email). I am fairly positive, that this can 
<br>
not occur, else we would segfault prior to that (it is a stupid check, 
<br>
don't ask). Furthermore, the code segment that has been modified does 
<br>
not raise anywhere MPI_ERR_INTERN. Of course, it could be a secondary 
<br>
effect and be created somewhere else (PML_ADD or collective module 
<br>
selection) and comm_dup just passes the error code up.
<br>
<p>One way or the other, I need more hints on what the code does. Any 
<br>
chance of getting a smaller code fragment which replicates the problem? 
<br>
It could use the MUMPS library, I am fine with that since I just 
<br>
compiled and installed it with the current ompi trunk...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I would say the probability is large that it is due to the recent 'fix'. 
</span><br>
<span class="quotelev1">&gt;  I will try to create a testcase similar to what you suggested. Could 
</span><br>
<span class="quotelev1">&gt; you give us maybe some hints on which functionality of MUMPS you are 
</span><br>
<span class="quotelev1">&gt; using, or even share the code/ a code fragment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hey Edgar --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could this have anything to do with your recent fixes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 12, 2009, at 8:30 AM, Anton Starikov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile from torque PBS_NODEFILE (OMPI is compilled with torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It happens with or without rankfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Started with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 16 ./somecode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca parameters:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl = self,sm,openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_maffinity_alone = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_base_no_oversubscribe = 1 (rmaps_base_no_oversubscribe = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't change it)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tested with both: &quot;btl=self,sm&quot; on 16c-core nodes and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;btl=self,sm,openib&quot; on 8x dual-core nodes , result is the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like it always occurs exactly at the same point in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execution, not at the beginning, it is not first MPI_Comm_dup in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't say too much about particular piece of the code, where it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happening, because it is in the 3rd-party library (MUMPS).  When error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occurs, MPI_Comm_dup in every task deals with single-task communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (MPI_Comm_split of initial MPI_Comm_world for 16 processes into 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; groups, 1 process per group). And I  can guess that before this error,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_dup is called something like 100 of times by the same piece
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of code on the same communicators without any problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can say that it used to work correctly with all previous versions of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi we used (1.2.8-1.3.2 and some earlier versions). It also works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correctly on other platforms/MPI implementations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All environmental variables (PATH, LD_LIBRARY_PATH) are correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I recompiled code and 3rd-party libraries with this version of OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;config.log.gz&gt;&lt;ompi-info.txt.gz&gt;&lt;ATT9775601.txt&gt;&lt;ATT9775603.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9318.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<li><strong>Previous message:</strong> <a href="9316.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9318.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9318.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
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
