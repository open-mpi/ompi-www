<?
$subject_val = "Re: [OMPI users] OpenMPI and SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 13:41:58 2009" -->
<!-- isoreceived="20090623174158" -->
<!-- sent="Tue, 23 Jun 2009 13:41:47 -0400" -->
<!-- isosent="20090623174147" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SGE" -->
<!-- id="4A4113DB.6030606_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A411058.2010603_at_aem.umn.edu" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 13:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9676.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>In reply to:</strong> <a href="9675.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9679.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9679.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ray Muno wrote:
<br>
<span class="quotelev1">&gt; Rolf Vandevaart wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Ray Muno wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ray Muno wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We are running a cluster using Rocks 5.0 and OpenMPI 1.2 (primarily).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scheduling is done through SGE.  MPI communication is over InfiniBand.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We also have OpenMPI 1.3 installed and receive similar errors.-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; This does sound like a problem with SGE.  By default, we use qrsh to
</span><br>
<span class="quotelev2">&gt;&gt; start the jobs on all the remote nodes.  I believe that is the command
</span><br>
<span class="quotelev2">&gt;&gt; that is failing.  There are two things you can try to get more info
</span><br>
<span class="quotelev2">&gt;&gt; depending on the version of Open MPI.   With version 1.2, you can try
</span><br>
<span class="quotelev2">&gt;&gt; this to get more information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; |--mca pls_gridengine_verbose 1|
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; This did not look like it gave me any more info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; With Open MPI 1.3.2 and later the verbose flag will not help.  But
</span><br>
<span class="quotelev2">&gt;&gt; instead, you can disable the use of qrsh and instead use rsh/ssh to
</span><br>
<span class="quotelev2">&gt;&gt; start the remote jobs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --mca plm_rsh_disable_qrsh 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tha give me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PMGR_COLLECTIVE ERROR: unitialized MPI task: Missing required
</span><br>
<span class="quotelev1">&gt; environment variable: MPIRUN_RANK
</span><br>
<span class="quotelev1">&gt; PMGR_COLLECTIVE ERROR: PMGR_COLLECTIVE ERROR: unitialized MPI task:
</span><br>
<span class="quotelev1">&gt; Missing required environment variable: MPIRUN_RANK
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I do not recognize these errors as part of Open MPI.  A google search 
<br>
showed they might be coming from MVAPICH.  Is there a chance we are 
<br>
using Open MPI to launch the jobs (via Open MPI mpirun) but we are 
<br>
actually launching an application that is linked to MVAPICH?
<br>
<p><pre>
--
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9677/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9676.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>In reply to:</strong> <a href="9675.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9679.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9679.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
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
