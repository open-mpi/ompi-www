<?
$subject_val = "Re: [OMPI users] strange bug";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 10:34:55 2009" -->
<!-- isoreceived="20090512143455" -->
<!-- sent="Tue, 12 May 2009 09:34:44 -0500" -->
<!-- isosent="20090512143444" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange bug" -->
<!-- id="4A098904.3010403_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C440111D-CA6C-4D6B-896D-EEF118E1118B_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-12 10:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9314.php">Katz, Jacob: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>Previous message:</strong> <a href="9312.php">Jeff Squyres: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9317.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9317.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would say the probability is large that it is due to the recent 'fix'. 
<br>
&nbsp;&nbsp;I will try to create a testcase similar to what you suggested. Could 
<br>
you give us maybe some hints on which functionality of MUMPS you are 
<br>
using, or even share the code/ a code fragment?
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hey Edgar --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could this have anything to do with your recent fixes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 12, 2009, at 8:30 AM, Anton Starikov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hostfile from torque PBS_NODEFILE (OMPI is compilled with torque
</span><br>
<span class="quotelev2">&gt;&gt; support)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It happens with or without rankfile.
</span><br>
<span class="quotelev2">&gt;&gt; Started with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 16 ./somecode
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca parameters:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl = self,sm,openib
</span><br>
<span class="quotelev2">&gt;&gt; mpi_maffinity_alone = 1
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_base_no_oversubscribe = 1 (rmaps_base_no_oversubscribe = 0
</span><br>
<span class="quotelev2">&gt;&gt; doesn't change it)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tested with both: &quot;btl=self,sm&quot; on 16c-core nodes and
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl=self,sm,openib&quot; on 8x dual-core nodes , result is the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like it always occurs exactly at the same point in the
</span><br>
<span class="quotelev2">&gt;&gt; execution, not at the beginning, it is not first MPI_Comm_dup in the
</span><br>
<span class="quotelev2">&gt;&gt; code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't say too much about particular piece of the code, where it is
</span><br>
<span class="quotelev2">&gt;&gt; happening, because it is in the 3rd-party library (MUMPS).  When error
</span><br>
<span class="quotelev2">&gt;&gt; occurs, MPI_Comm_dup in every task deals with single-task communicator
</span><br>
<span class="quotelev2">&gt;&gt; (MPI_Comm_split of initial MPI_Comm_world for 16 processes into 16
</span><br>
<span class="quotelev2">&gt;&gt; groups, 1 process per group). And I  can guess that before this error,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_dup is called something like 100 of times by the same piece
</span><br>
<span class="quotelev2">&gt;&gt; of code on the same communicators without any problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can say that it used to work correctly with all previous versions of
</span><br>
<span class="quotelev2">&gt;&gt; openmpi we used (1.2.8-1.3.2 and some earlier versions). It also works
</span><br>
<span class="quotelev2">&gt;&gt; correctly on other platforms/MPI implementations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All environmental variables (PATH, LD_LIBRARY_PATH) are correct.
</span><br>
<span class="quotelev2">&gt;&gt; I recompiled code and 3rd-party libraries with this version of OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.gz&gt;&lt;ompi-info.txt.gz&gt;&lt;ATT9775601.txt&gt;&lt;ATT9775603.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9314.php">Katz, Jacob: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>Previous message:</strong> <a href="9312.php">Jeff Squyres: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9317.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9317.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
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
