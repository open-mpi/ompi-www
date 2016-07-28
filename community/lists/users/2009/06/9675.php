<?
$subject_val = "Re: [OMPI users] OpenMPI and SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 13:26:53 2009" -->
<!-- isoreceived="20090623172653" -->
<!-- sent="Tue, 23 Jun 2009 12:26:48 -0500" -->
<!-- isosent="20090623172648" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SGE" -->
<!-- id="4A411058.2010603_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A410CA5.9000602_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and SGE<br>
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 13:26:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9676.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9674.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>In reply to:</strong> <a href="9674.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9676.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9676.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9677.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt; Ray Muno wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ray Muno wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are running a cluster using Rocks 5.0 and OpenMPI 1.2 (primarily).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scheduling is done through SGE.  MPI communication is over InfiniBand.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We also have OpenMPI 1.3 installed and receive similar errors.-
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; This does sound like a problem with SGE.  By default, we use qrsh to
</span><br>
<span class="quotelev1">&gt; start the jobs on all the remote nodes.  I believe that is the command
</span><br>
<span class="quotelev1">&gt; that is failing.  There are two things you can try to get more info
</span><br>
<span class="quotelev1">&gt; depending on the version of Open MPI.   With version 1.2, you can try
</span><br>
<span class="quotelev1">&gt; this to get more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; |--mca pls_gridengine_verbose 1|
</span><br>
<span class="quotelev1">&gt; 
</span><br>
This did not look like it gave me any more info.
<br>
<p><span class="quotelev1">&gt; With Open MPI 1.3.2 and later the verbose flag will not help.  But
</span><br>
<span class="quotelev1">&gt; instead, you can disable the use of qrsh and instead use rsh/ssh to
</span><br>
<span class="quotelev1">&gt; start the remote jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca plm_rsh_disable_qrsh 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Tha give me
<br>
<p>PMGR_COLLECTIVE ERROR: unitialized MPI task: Missing required
<br>
environment variable: MPIRUN_RANK
<br>
PMGR_COLLECTIVE ERROR: PMGR_COLLECTIVE ERROR: unitialized MPI task:
<br>
Missing required environment variable: MPIRUN_RANK
<br>
<p><p><pre>
-- 
 Ray Muno
 University of Minnesota
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9676.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9674.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>In reply to:</strong> <a href="9674.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9676.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9676.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9677.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
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
