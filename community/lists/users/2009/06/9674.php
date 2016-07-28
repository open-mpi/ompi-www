<?
$subject_val = "Re: [OMPI users] OpenMPI and SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 13:11:12 2009" -->
<!-- isoreceived="20090623171112" -->
<!-- sent="Tue, 23 Jun 2009 13:11:01 -0400" -->
<!-- isosent="20090623171101" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SGE" -->
<!-- id="4A410CA5.9000602_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A40E176.3040307_at_aem.umn.edu" -->
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
<strong>Date:</strong> 2009-06-23 13:11:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9675.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9673.php">Andreas Hoelzlwimmer: "[OMPI users] MPI over ethernet non default-adapter - Need Help/Advice"</a>
<li><strong>In reply to:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9675.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9675.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ray Muno wrote:
<br>
<span class="quotelev1">&gt; Ray Muno wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; We are running a cluster using Rocks 5.0 and OpenMPI 1.2 (primarily).
</span><br>
<span class="quotelev2">&gt;&gt; Scheduling is done through SGE.  MPI communication is over InfiniBand.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We also have OpenMPI 1.3 installed and receive similar errors.-
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
This does sound like a problem with SGE.  By default, we use qrsh to 
<br>
start the jobs on all the remote nodes.  I believe that is the command 
<br>
that is failing.  There are two things you can try to get more info 
<br>
depending on the version of Open MPI.   With version 1.2, you can try 
<br>
this to get more information.
<br>
<p>|--mca pls_gridengine_verbose 1|
<br>
<p>With Open MPI 1.3.2 and later the verbose flag will not help.  But 
<br>
instead, you can disable the use of qrsh and instead use rsh/ssh to 
<br>
start the remote jobs.
<br>
<p>--mca plm_rsh_disable_qrsh 1
<br>
<p>Maybe trying one or both of these might provide some extra clues.
<br>
<p>Rolf
<br>
<p><p><p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9675.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9673.php">Andreas Hoelzlwimmer: "[OMPI users] MPI over ethernet non default-adapter - Need Help/Advice"</a>
<li><strong>In reply to:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9675.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9675.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
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
