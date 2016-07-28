<?
$subject_val = "Re: [OMPI users] Propagate current shell's environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 13 15:03:35 2015" -->
<!-- isoreceived="20151113200335" -->
<!-- sent="Fri, 13 Nov 2015 20:03:27 +0000" -->
<!-- isosent="20151113200327" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Propagate current shell's environment" -->
<!-- id="2F6B4AF1-6D47-47F7-AD19-709ABEF453F3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB123-W217A8EA64BDC1D0120C7FEB1110_at_phx.gbl" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-13 15:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28039.php">Christopher Paredes: "[OMPI users] Problem mpirun Signal: Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="28037.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>In reply to:</strong> <a href="28037.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry Saurabh; all of us are caught up in preparing for the Supercomputing trade show next week.  We've been delayed in replying to list email.  :-(
<br>
<p>We actually take the opposite approach than MPICH: nothing is exported to remote processes by default except for internal Open MPI env variables.  The -x option is provided as a way to selectively export env vars if you want them.
<br>
<p>We went this way because many run time systems already export environments for you to the remote processes, and sometimes they even selectively edit the environment (e.g., some env vars will have different values for different MPI processes).  We didn't want Open MPI to override that behavior.
<br>
<p>ssh, of course, doesn't export things for you automatically.  But there are some options in ssh to automatically forward environment variables, if you want to go that route.
<br>
<p>Hope that helps.
<br>
<p><p><p><span class="quotelev1">&gt; On Nov 13, 2015, at 2:56 PM, Saurabh T &lt;saurabh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd appreciate a response, even a simple no if this is not possible. Thank you.
</span><br>
<span class="quotelev1">&gt; saurabh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: saurabh_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: RE: Propagate current shell's environment
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 9 Nov 2015 11:45:07 -0500
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I meant different from the current shell, not different for different processes, sorry.
</span><br>
<span class="quotelev2">&gt; &gt; Also I am aware of -x but it's not the right solution in this case because (a) it's manual (b) it appears that anything set in bashrc that was unset in the shell would be set for the program which I do not want.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: saurabh_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Propagate current shell's environment
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Mon, 9 Nov 2015 11:40:13 -0500
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is there any way with OpenMPI to propagate the current shell's environment to the parallel program? I am looking for an equivalent way to how MPICH handles environment variables (<a href="https://wiki.mpich.org/mpich/index.php/Frequently_Asked_Questions#Q:_How_do_I_pass_environment_variables_to_the_processes_of_my_parallel_program_when_using_the_mpd.2C_hydra_or_gforker_process_manager.3F">https://wiki.mpich.org/mpich/index.php/Frequently_Asked_Questions#Q:_How_do_I_pass_environment_variables_to_the_processes_of_my_parallel_program_when_using_the_mpd.2C_hydra_or_gforker_process_manager.3F</a>):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; By default, all the environment variables in the shell where mpiexec is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; run are passed to all processes of the application program.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenMPI has the parallel processes read bashrc so the environment can be different for different processes, which is exactly what I want to avoid. I could not find any way of doing this in orterun --help or on the forums.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; saurabh
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 	This email has been sent from a virus-free computer protected by Avast. 
</span><br>
<span class="quotelev1">&gt; www.avast.com
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28037.php">http://www.open-mpi.org/community/lists/users/2015/11/28037.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28039.php">Christopher Paredes: "[OMPI users] Problem mpirun Signal: Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="28037.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>In reply to:</strong> <a href="28037.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
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
