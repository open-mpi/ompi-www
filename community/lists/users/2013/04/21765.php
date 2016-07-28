<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 22 18:46:36 2013" -->
<!-- isoreceived="20130422224636" -->
<!-- sent="Mon, 22 Apr 2013 16:46:32 -0600" -->
<!-- isosent="20130422224632" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="20130422224632.GE76153_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="21F18986-C03E-4CB3-9C9A-72ED1173CF7B_at_nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI at scale on Cray XK7<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-22 18:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21766.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21764.php">Mike Clark: "[OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21764.php">Mike Clark: "[OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21766.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21766.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21768.php">Дербунович Андрей: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 22, 2013 at 03:17:16PM -0700, Mike Clark wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run OpenMPI on the Cray XK7 system at Oak Ridge National Lab (Titan), and am running in an issue whereby MPI_Init seems to hang indefinitely, but this issue only arises at large scale, e.g., when running on 18560 compute nodes (with two MPI processes per node).  The application runs successfully on 4600 nodes, and we are currently trying to test a 9000 node job to see if this fails or runs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are launching our job using something like the following
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # mpirun command                                                                                   
</span><br>
<span class="quotelev1">&gt; mpicmd=&quot;$OMP_DIR/bin/mpirun --prefix $OMP_DIR -np 37120 --npernode 2 --bind-to core --bind-to numa $app $args&quot;
</span><br>
<span class="quotelev1">&gt; # Print  and Run the Command                                                                       
</span><br>
<span class="quotelev1">&gt; echo $mpicmd
</span><br>
<span class="quotelev1">&gt; $mpicmd &gt;&amp; $output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any issues that I should be aware of when running OpenMPI on 37120 processes or when running on the Cray Gemini Interconnect?
</span><br>
<p>We have only tested Open MPI up to 131072 ranks on 8192 nodes. Have you tried running DDT on the process to see where it is hung up?
<br>
<p>I have a Titan account so I can help with debugging. I would like to get this issue fixed in 1.7.2.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21766.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21764.php">Mike Clark: "[OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21764.php">Mike Clark: "[OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21766.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21766.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21768.php">Дербунович Андрей: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
