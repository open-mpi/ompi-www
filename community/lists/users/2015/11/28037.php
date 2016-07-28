<?
$subject_val = "Re: [OMPI users] Propagate current shell's environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 13 14:56:16 2015" -->
<!-- isoreceived="20151113195616" -->
<!-- sent="Fri, 13 Nov 2015 14:56:11 -0500" -->
<!-- isosent="20151113195611" -->
<!-- name="Saurabh T" -->
<!-- email="saurabh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Propagate current shell's environment" -->
<!-- id="DUB123-W217A8EA64BDC1D0120C7FEB1110_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB123-W7FBE4398A97B27A499DBBB1150_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Propagate current shell's environment<br>
<strong>From:</strong> Saurabh T (<em>saurabh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-13 14:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28038.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Previous message:</strong> <a href="28036.php">Rolf vandeVaart: "Re: [OMPI users] static OpenMPI with GNU"</a>
<li><strong>In reply to:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28038.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Reply:</strong> <a href="28038.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Propagate current shell's environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd appreciate a response, even a simple no if this is not possible. Thank you.
<br>
saurabh
<br>
<p><span class="quotelev1">&gt; From: saurabh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: RE: Propagate current shell's environment
</span><br>
<span class="quotelev1">&gt; Date: Mon, 9 Nov 2015 11:45:07 -0500
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I meant different from the current shell, not different for different processes, sorry.
</span><br>
<span class="quotelev1">&gt; Also I am aware of -x but it's not the right solution in this case because (a) it's manual (b) it appears that anything set in bashrc that was unset in the shell would be set for the program which I do not want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; From: saurabh_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Propagate current shell's environment
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 9 Nov 2015 11:40:13 -0500
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any way with OpenMPI to propagate the current shell's environment to the parallel program? I am looking for an equivalent way to how MPICH handles environment variables (<a href="https://wiki.mpich.org/mpich/index.php/Frequently_Asked_Questions#Q:_How_do_I_pass_environment_variables_to_the_processes_of_my_parallel_program_when_using_the_mpd.2C_hydra_or_gforker_process_manager.3F">https://wiki.mpich.org/mpich/index.php/Frequently_Asked_Questions#Q:_How_do_I_pass_environment_variables_to_the_processes_of_my_parallel_program_when_using_the_mpd.2C_hydra_or_gforker_process_manager.3F</a>):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; By default, all the environment variables in the shell where mpiexec is
</span><br>
<span class="quotelev2">&gt; &gt; run are passed to all processes of the application program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI has the parallel processes read bashrc so the environment can be different for different processes, which is exactly what I want to avoid. I could not find any way of doing this in orterun --help or on the forums.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; saurabh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  		 	   		  
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This email has been sent from a virus-free computer protected by Avast. www.avast.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28038.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Previous message:</strong> <a href="28036.php">Rolf vandeVaart: "Re: [OMPI users] static OpenMPI with GNU"</a>
<li><strong>In reply to:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28038.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Reply:</strong> <a href="28038.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Propagate current shell's environment"</a>
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
