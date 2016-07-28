<?
$subject_val = "Re: [OMPI users] About openmpi-mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 08:17:18 2009" -->
<!-- isoreceived="20091217131718" -->
<!-- sent="Thu, 17 Dec 2009 14:17:12 +0100" -->
<!-- isosent="20091217131712" -->
<!-- name="Romaric David" -->
<!-- email="david_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About openmpi-mpirun" -->
<!-- id="4B2A2F58.6010003_at_icps.u-strasbg.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] About openmpi-mpirun" -->
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
<strong>Subject:</strong> Re: [OMPI users] About openmpi-mpirun<br>
<strong>From:</strong> Romaric David (<em>david_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 08:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11568.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11566.php">Min Zhu: "[OMPI users] About openmpi-mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="11566.php">Min Zhu: "[OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11568.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11568.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Min Zhu a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a question to ask you. If I issue a command &quot;bsub -n 16
</span><br>
<span class="quotelev1">&gt; openmpi-mpirun ./wrf.exe&quot; to my 128-core (16 nodes)cluster, the job
</span><br>
<span class="quotelev1">&gt; failed to run due to stacksize problem. Openmpi-mpirun is a wrapper
</span><br>
<span class="quotelev1">&gt; script written by Platform. If I want to add '/bin/sh -c ulimit -s
</span><br>
<span class="quotelev1">&gt; unlimited' to the above bsub command, how I can do it? Thank you very
</span><br>
<span class="quotelev1">&gt; much in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Hello,
<br>
<p>you should add it before wrf.exe :
<br>
<p>openmpi-mpirun &quot;sh -c ulmit -s unlimited  ; ./wrf.exe&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R. David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11568.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11566.php">Min Zhu: "[OMPI users] About openmpi-mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="11566.php">Min Zhu: "[OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11568.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11568.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
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
