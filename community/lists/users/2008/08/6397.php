<?
$subject_val = "Re: [OMPI users] run OpenMPI job on heterogeneous processor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 12:53:49 2008" -->
<!-- isoreceived="20080820165349" -->
<!-- sent="Wed, 20 Aug 2008 10:53:40 -0600" -->
<!-- isosent="20080820165340" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run OpenMPI job on heterogeneous processor" -->
<!-- id="D9B2A53C-F5E2-4A71-9A48-6011E14EE4E3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFDDD98CB4.75BCB4CD-ON852574AB.005712E1-852574AB.00581918_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] run OpenMPI job on heterogeneous processor<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-20 12:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6398.php">Mi Yan: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Previous message:</strong> <a href="6396.php">Mi Yan: "[OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>In reply to:</strong> <a href="6396.php">Mi Yan: "[OMPI users] run OpenMPI job on heterogeneous processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6398.php">Mi Yan: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Reply:</strong> <a href="6398.php">Mi Yan: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, I trust that you built Open MPI to support heterogeneous  
<br>
operations? I'm not sure what version you are using, but it may well  
<br>
have done it by default.
<br>
<p>Second, there is an error on your cmd line that is causing the  
<br>
problem. It should read:
<br>
<p>mpirun -np 1 -host b1 foo_x86 : -np 1 -host b2 foo_ppc
<br>
<p>The way you wrote it, foo_x86 will run anywhere it wants (which would  
<br>
default to whatever node you were on when you executed this), while  
<br>
foo_ppc will run on both hosts b1 and b2 (which means the first rank  
<br>
will always go on b1).
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On Aug 20, 2008, at 10:02 AM, Mi Yan wrote:
<br>
<p><span class="quotelev1">&gt; I have one MPI job consisting of two parts. One is &quot;foo_x86&quot;, the  
</span><br>
<span class="quotelev1">&gt; other is &quot;foo_ppc&quot;, and there is MPI communication between &quot;foo_x86&quot;  
</span><br>
<span class="quotelev1">&gt; and &quot;foo_ppc&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;foo_x86&quot; is built on X86 box &quot;b1&quot;, &quot;foo_pcc&quot; is built on PPC box  
</span><br>
<span class="quotelev1">&gt; &quot;b2&quot;. Anyone can tell me how to start this MPI job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried &quot;mpirun -np 1 foo_x86 : -np 1 foo_ppc -H b1,b2&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried the above command on &quot;b1&quot;, the X86 box, and I got &quot;foo_ppc:  
</span><br>
<span class="quotelev1">&gt; Exec Format error&quot;
</span><br>
<span class="quotelev1">&gt; I tired on &quot;b2&quot;, the PPC box, and I got &quot;foo_x86: Exec format error&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody has a clue? Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mi Yan
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6398.php">Mi Yan: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Previous message:</strong> <a href="6396.php">Mi Yan: "[OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>In reply to:</strong> <a href="6396.php">Mi Yan: "[OMPI users] run OpenMPI job on heterogeneous processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6398.php">Mi Yan: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Reply:</strong> <a href="6398.php">Mi Yan: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
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
