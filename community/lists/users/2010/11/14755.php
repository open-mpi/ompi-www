<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 14 05:58:06 2010" -->
<!-- isoreceived="20101114105806" -->
<!-- sent="Sun, 14 Nov 2010 11:57:54 +0100" -->
<!-- isosent="20101114105754" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="F9F5E45B-B225-4EC9-B5D3-17517AAC7478_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="671D8819-015E-4369-AC4C-18F180E1E153_at_warwick.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-14 05:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14756.php">Joshua Hursey: "[OMPI users] Fwd: BLCR at SC10"</a>
<li><strong>Previous message:</strong> <a href="14754.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14757.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 13.11.2010 um 15:39 schrieb Chris Jewell:
<br>
<p><span class="quotelev1">&gt; Sorry for kicking off this thread, and then disappearing.  I've been away for a bit.  Anyway, Dave, I'm glad you experienced the same issue as I had with my installation of SGE 6.2u5 and OpenMPI with core binding -- namely that with 'qsub -pe openmpi 8 -binding set linear:1 &lt;myscript.com&gt;', if two or more of the parallel processes get scheduled to the same execution node, then the processes end up being bound to the same core.  Not good!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been playing around quite a bit trying to understand this issue, and ended up on the GE dev list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=39&amp;dsMessageId=285878">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=39&amp;dsMessageId=285878</a>
</span><br>
<p>as the [GE dev] list was nearly dead as it went closed source, I'm no longer subscripted to it. [GE users] will reach a broader audience I think.  Anyway,
<br>
<p>I don't have a free suitable cluster, but can you please try the following:
<br>
<p>$ qsub -pe openmpi 8 -binding linear:2 &lt;myscript.com&gt;
<br>
<p>with a fixed &quot;allocation_rule 2&quot; in your PE. And also:
<br>
<p>$ qsub -pe openmpi 8 -binding linear:8 &lt;myscript.com&gt;
<br>
<p><p><span class="quotelev1">&gt; It seems that most people expect that calls to 'qrsh -inherit' (that I assume OpenMPI uses to bind parallel processes to reserved GE slots) activates a separate binding.  This does not appear to be the case.  I *was* hoping that using -binding pe linear:1 might enable me to write a script that read the pe_hostfile and created a machine file for OpenMPI, but this fails as GE does not appear to give information as to which cores are unbound, only the number required.
</span><br>
<p>You can get the information about the to be used cores when you use &quot;env&quot; or even better &quot;pe&quot; as &quot;binding_instance&quot; instead of &quot;set&quot;. Then it should be possible (and you even need to implement it) to let Open MPI do the core binding instead of SGE. From `man qsub`:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pe means that the information about the selected cores appears in the fourth column of the pe_hostfile.  Here  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logical  core  and  socket  numbers are printed (they start at 0 and have no holes) in colon separated pairs (i.e.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,0:1,0 which means core 0 on socket 0 and core 0 on socket 1).  For more information about the $pe_hostfile check
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ge_pe(5)
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; So, for now, my solution has been to use a JSV to remove core binding for the MPI jobs (but retain it for serial and SMP jobs).  Any more ideas??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (PS. Dave: how is my alma mater these days??)
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr Chris Jewell
</span><br>
<span class="quotelev1">&gt; Department of Statistics
</span><br>
<span class="quotelev1">&gt; University of Warwick
</span><br>
<span class="quotelev1">&gt; Coventry
</span><br>
<span class="quotelev1">&gt; CV4 7AL
</span><br>
<span class="quotelev1">&gt; UK
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14756.php">Joshua Hursey: "[OMPI users] Fwd: BLCR at SC10"</a>
<li><strong>Previous message:</strong> <a href="14754.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14757.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
