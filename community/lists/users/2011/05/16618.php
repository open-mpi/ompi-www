<?
$subject_val = "Re: [OMPI users] openmpi self checkpointing - error while running	example";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 13:54:17 2011" -->
<!-- isoreceived="20110524175417" -->
<!-- sent="Tue, 24 May 2011 17:53:57 +0000 (UTC)" -->
<!-- isosent="20110524175357" -->
<!-- name="Faisal" -->
<!-- email="itsfaisi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi self checkpointing - error while running	example" -->
<!-- id="loom.20110524T195230-895_at_post.gmane.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="41409C086371124DB9E054F9B1A8506F9345_at_MBX10.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi self checkpointing - error while running	example<br>
<strong>From:</strong> Faisal (<em>itsfaisi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-24 13:53:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16619.php">charles reid: "[OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Previous message:</strong> <a href="16617.php">sushil samant: "Re: [OMPI users] reading from file"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16148.php">Hellm&#252;ller  Roman: "[OMPI users] openmpi self checkpointing - error while running example"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hellm&#195;&#188;ller  Roman &lt;hroman &lt;at&gt; student.ethz.ch&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to get fault tolerant ompi running on our cluster for my 
</span><br>
semesterthesis.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Build &amp; compile were successful, blcr checkpointing works. openmpi 1.5.3, blcr 
</span><br>
0.8.2
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now i'm trying to set up the SELF checkpointing. the example from
</span><br>
<span class="quotelev1">&gt; <a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php">http://osl.iu.edu/research/ft/ompi-cr/examples.php</a> does not work. I can run 
</span><br>
the application and
<br>
<span class="quotelev1">&gt; also do checkpoints, but restarting won't work.  I got the following error by 
</span><br>
doning as sugested:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc my-app.c -export -export-dynamic -o my-app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -am ft-enable-cr -mca crs_self_prefix my_personal my-app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hroman &lt;at&gt; cbl1 ~ $ ompi-restart ompi_global_snapshot_27167.ckpt/
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt;        checkpoint file (opal_snapshot_0.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt;        checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i also tryed around with setting the path in the example file (restart_path 
</span><br>
variable), changing the
<br>
<span class="quotelev1">&gt; checkpoint directorys, and running the application in different directorys...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do you have an idea where the error could be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<a href="http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz<http://n.ethz.ch/%7Eh">http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz<http://n.ethz.ch/%7Eh</a>
<br>
roman/downloads/ompi_mailinglist.tar.gz&gt;
<br>
<span class="quotelev1">&gt; (40MB) you'll find the library and the build of openmpi &amp; blcr as well as the 
</span><br>
env variables and the output of
<br>
<span class="quotelev1">&gt; ompi_info. there is one for the login and the other for the compute nodes due 
</span><br>
to different kernels.  and here
<br>
<span class="quotelev1">&gt; 
</span><br>
<a href="http://n.ethz.ch/~hroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz<http:/">http://n.ethz.ch/~hroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz<http:/</a>
<br>
/n.ethz.ch/%7Ehroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz&gt;
<br>
<span class="quotelev1">&gt; there is the produced checkpoint. please let me know if more outputs are 
</span><br>
needed.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; roman
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Roman,
<br>
<p>Try putting name of your executable at end of the path.
<br>
char restart_path[128] = &quot;/full/path/to/personal-cr&quot;; 
<br>
Here 'personal-cr' is executable.
<br>
<p>I hope it helps.
<br>
<p>Kind regards,
<br>
Faisal
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16619.php">charles reid: "[OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Previous message:</strong> <a href="16617.php">sushil samant: "Re: [OMPI users] reading from file"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16148.php">Hellm&#252;ller  Roman: "[OMPI users] openmpi self checkpointing - error while running example"</a>
<!-- nextthread="start" -->
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
