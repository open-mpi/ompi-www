<?
$subject_val = "Re: [OMPI users] Gridengine + Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 05:31:18 2008" -->
<!-- isoreceived="20080707093118" -->
<!-- sent="Mon, 07 Jul 2008 11:31:08 +0200" -->
<!-- isosent="20080707093108" -->
<!-- name="Romaric David" -->
<!-- email="david_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gridengine + Open MPI" -->
<!-- id="4871E25C.7050802_at_icps.u-strasbg.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48710A22.2000301_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Gridengine + Open MPI<br>
<strong>From:</strong> Romaric David (<em>david_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 05:31:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6026.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6026.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pak Lui a &#233;crit :
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was fixed at one point in the trunk before v1.3 went official, but 
</span><br>
<span class="quotelev1">&gt; while rolling the code from gridengine PLM into the rsh PLM code, this 
</span><br>
<span class="quotelev1">&gt; feature was left out because there was some lingering issues that I 
</span><br>
<span class="quotelev1">&gt; didn't resolved and I lost track of it. Sorry but thanks for bringing it 
</span><br>
<span class="quotelev1">&gt; up, I will need to look at the issue again and reopen this ticket 
</span><br>
<span class="quotelev1">&gt; against v1.3:
</span><br>
Ok, so I have to wait for a 1.3 version to work with job suspend, or
<br>
will it be back-ported to 1.2.6 or 1.2.6 ?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So even it is the rsh PLM that starts the parallel job under SGE, the 
</span><br>
<span class="quotelev1">&gt; rsh PLM can detect if the Open MPI job is started under the SGE Parallel 
</span><br>
<span class="quotelev1">&gt; Environment (via checking some SGE env vars) and use the &quot;qrsh 
</span><br>
<span class="quotelev1">&gt; --inherit&quot; command to launch the parallel job the same way as it was 
</span><br>
<span class="quotelev1">&gt; before. You can check by setting MCA to something like &quot;--mca 
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 10&quot; in your mpirun command and look for the launch 
</span><br>
<span class="quotelev1">&gt; commands that mpirun uses.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
It looks like shepherd cannot be started for a reason I couldn't get yet.
<br>
/opt/SGE/utilbin/lx24-amd64/rsh exited with exit code 0
<br>
reading exit code from shepherd ... 255
<br>
[hostname:16745] ----------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Romaric
<br>
<pre>
-- 
--------------------------------------
   R. David - david_at_[hidden]
   Tel. : 03 90 24 45 48  (Fax 45 47)
--------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6026.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6026.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
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
