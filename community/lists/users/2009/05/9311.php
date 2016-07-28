<?
$subject_val = "Re: [OMPI users] strange bug";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 09:57:30 2009" -->
<!-- isoreceived="20090512135730" -->
<!-- sent="Tue, 12 May 2009 09:57:24 -0400" -->
<!-- isosent="20090512135724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange bug" -->
<!-- id="C440111D-CA6C-4D6B-896D-EEF118E1118B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="990B7C73-D000-4DDD-BBD8-A7E6B0346B66_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 09:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9312.php">Jeff Squyres: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Previous message:</strong> <a href="9310.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>In reply to:</strong> <a href="9306.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9320.php">shan axida: "[OMPI users] ****---How to configure NIS and MPI on spread NICs?----****"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Edgar --
<br>
<p>Could this have anything to do with your recent fixes?
<br>
<p>On May 12, 2009, at 8:30 AM, Anton Starikov wrote:
<br>
<p><span class="quotelev1">&gt; hostfile from torque PBS_NODEFILE (OMPI is compilled with torque
</span><br>
<span class="quotelev1">&gt; support)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It happens with or without rankfile.
</span><br>
<span class="quotelev1">&gt; Started with
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 ./somecode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl = self,sm,openib
</span><br>
<span class="quotelev1">&gt; mpi_maffinity_alone = 1
</span><br>
<span class="quotelev1">&gt; rmaps_base_no_oversubscribe = 1 (rmaps_base_no_oversubscribe = 0
</span><br>
<span class="quotelev1">&gt; doesn't change it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested with both: &quot;btl=self,sm&quot; on 16c-core nodes and
</span><br>
<span class="quotelev1">&gt; &quot;btl=self,sm,openib&quot; on 8x dual-core nodes , result is the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like it always occurs exactly at the same point in the
</span><br>
<span class="quotelev1">&gt; execution, not at the beginning, it is not first MPI_Comm_dup in the
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't say too much about particular piece of the code, where it is
</span><br>
<span class="quotelev1">&gt; happening, because it is in the 3rd-party library (MUMPS).  When error
</span><br>
<span class="quotelev1">&gt; occurs, MPI_Comm_dup in every task deals with single-task communicator
</span><br>
<span class="quotelev1">&gt; (MPI_Comm_split of initial MPI_Comm_world for 16 processes into 16
</span><br>
<span class="quotelev1">&gt; groups, 1 process per group). And I  can guess that before this error,
</span><br>
<span class="quotelev1">&gt; MPI_Comm_dup is called something like 100 of times by the same piece
</span><br>
<span class="quotelev1">&gt; of code on the same communicators without any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can say that it used to work correctly with all previous versions of
</span><br>
<span class="quotelev1">&gt; openmpi we used (1.2.8-1.3.2 and some earlier versions). It also works
</span><br>
<span class="quotelev1">&gt; correctly on other platforms/MPI implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All environmental variables (PATH, LD_LIBRARY_PATH) are correct.
</span><br>
<span class="quotelev1">&gt; I recompiled code and 3rd-party libraries with this version of OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;&lt;ompi-info.txt.gz&gt;&lt;ATT9775601.txt&gt;&lt;ATT9775603.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9312.php">Jeff Squyres: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Previous message:</strong> <a href="9310.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>In reply to:</strong> <a href="9306.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9320.php">shan axida: "[OMPI users] ****---How to configure NIS and MPI on spread NICs?----****"</a>
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
