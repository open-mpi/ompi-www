<?
$subject_val = "Re: [OMPI users] Gridengine + Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 06:15:08 2008" -->
<!-- isoreceived="20080707101508" -->
<!-- sent="Mon, 7 Jul 2008 12:14:51 +0200" -->
<!-- isosent="20080707101451" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gridengine + Open MPI" -->
<!-- id="6C12E636-F0BF-4DBE-867C-6335149DEA04_at_staff.uni-marburg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4871E25C.7050802_at_icps.u-strasbg.fr" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 06:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6030.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6030.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 07.07.2008 um 11:31 schrieb Romaric David:
<br>
<p><span class="quotelev1">&gt; Pak Lui a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; It was fixed at one point in the trunk before v1.3 went official,  
</span><br>
<span class="quotelev2">&gt;&gt; but while rolling the code from gridengine PLM into the rsh PLM  
</span><br>
<span class="quotelev2">&gt;&gt; code, this feature was left out because there was some lingering  
</span><br>
<span class="quotelev2">&gt;&gt; issues that I didn't resolved and I lost track of it. Sorry but  
</span><br>
<span class="quotelev2">&gt;&gt; thanks for bringing it up, I will need to look at the issue again  
</span><br>
<span class="quotelev2">&gt;&gt; and reopen this ticket against v1.3:
</span><br>
<span class="quotelev1">&gt; Ok, so I have to wait for a 1.3 version to work with job suspend, or
</span><br>
<span class="quotelev1">&gt; will it be back-ported to 1.2.6 or 1.2.6 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So even it is the rsh PLM that starts the parallel job under SGE,  
</span><br>
<span class="quotelev2">&gt;&gt; the rsh PLM can detect if the Open MPI job is started under the  
</span><br>
<span class="quotelev2">&gt;&gt; SGE Parallel Environment (via checking some SGE env vars) and use  
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;qrsh --inherit&quot; command to launch the parallel job the same  
</span><br>
<span class="quotelev2">&gt;&gt; way as it was before. You can check by setting MCA to something  
</span><br>
<span class="quotelev2">&gt;&gt; like &quot;--mca plm_base_verbose 10&quot; in your mpirun command and look  
</span><br>
<span class="quotelev2">&gt;&gt; for the launch commands that mpirun uses.
</span><br>
<span class="quotelev1">&gt; It looks like shepherd cannot be started for a reason I couldn't  
</span><br>
<span class="quotelev1">&gt; get yet.
</span><br>
<span class="quotelev1">&gt; /opt/SGE/utilbin/lx24-amd64/rsh exited with exit code 0
</span><br>
<span class="quotelev1">&gt; reading exit code from shepherd ... 255
</span><br>
<span class="quotelev1">&gt; [hostname:16745] ----------------------------
</span><br>
<p>you mean with the plain rsh startup, like a loose integration? Isn't  
<br>
in this case a proper hostlist necessary, which is for other MPI  
<br>
implementations built in the start_proc_args defined routine? AFAIK  
<br>
you can disregard the hostlist only with Open MPI's tight SGE support.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6030.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6030.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
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
