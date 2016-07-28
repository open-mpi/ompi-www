<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 10:09:12 2012" -->
<!-- isoreceived="20120601140912" -->
<!-- sent="Fri, 1 Jun 2012 10:09:07 -0400" -->
<!-- isosent="20120601140907" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="E332808D-0D8A-4194-920C-65034359756D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPkgxcxPsr2mB8i6SO=dL1ZJFVL0yuNNwzHOxaY1a7hhs7xLMg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault with intel compiler<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 10:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19417.php">Mudassar Majeed: "[OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19415.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19415.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19421.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19421.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 1, 2012, at 10:03 AM, Edmund Sumbar wrote:
<br>
<p><span class="quotelev1">&gt; I ran the following PBS script with &quot;qsub -l procs=128 job.pbs&quot;. Environment variables are set using the Environment Modules packages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo $HOSTNAME
</span><br>
<span class="quotelev1">&gt; which mpiexec
</span><br>
<span class="quotelev1">&gt; module load library/openmpi/1.6-intel
</span><br>
<p>This *may* be the problem here.
<br>
<p>It's been a loooong time since I've run under PBS, so I don't remember if your script's environment is copied out to the remote nodes where your application actually runs.
<br>
<p>Can you verify that PATH and LD_LIBRARY_PATH are the same on all nodes in your PBS allocation after you module load?
<br>
<p>FWIW, since you've installed OMPI 1.6, you may want to uninstall the Open MPI that may have been installed by your OS.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19417.php">Mudassar Majeed: "[OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19415.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19415.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19421.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19421.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
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
