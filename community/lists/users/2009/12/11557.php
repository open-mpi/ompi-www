<?
$subject_val = "Re: [OMPI users] Debugging spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 09:43:07 2009" -->
<!-- isoreceived="20091216144307" -->
<!-- sent="Wed, 16 Dec 2009 07:42:52 -0700" -->
<!-- isosent="20091216144252" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging spawned processes" -->
<!-- id="C932B5AE-23B5-4BBB-93D4-A7703B518D44_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9b0da5ce0912160620y6d5b0da2p411a5c66627cc0aa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging spawned processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 09:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11558.php">Jeff Squyres: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184"</a>
<li><strong>Previous message:</strong> <a href="11556.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11556.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11563.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11563.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is in a later version - pretty sure it made 1.3.3. IIRC, I added it at your request :-)
<br>
<p>On Dec 16, 2009, at 7:20 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That sounds good. I have Open-MPI version 1.3.2, and mpirun seems not
</span><br>
<span class="quotelev1">&gt; to recognize the --xterm option.
</span><br>
<span class="quotelev1">&gt; [jody_at_plankton tileopt]$ mpirun --xterm -np 1 ./boss 9 sample.tlf
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev1">&gt; find an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: 1
</span><br>
<span class="quotelev1">&gt; Node: aim-plankton.uzh.ch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; (if i reverse the --xterm and -np 1, it complains about not finding
</span><br>
<span class="quotelev1">&gt; executable '9')
</span><br>
<span class="quotelev1">&gt; Do i need to install a higher version, or is this something i'd have
</span><br>
<span class="quotelev1">&gt; to set as option in configure?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 16, 2009 at 1:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Depends on the version you are working with. If it includes the -xterm option, then that option gets applied to the dynamically spawned procs too, so this should be automatically taken care of...but in that case, you wouldn't need your script to open an xterm anyway. You would just do:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --xterm -np 5 gdb ./my_app
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; or the equivalent. You would then comm_spawn an argv[0] of &quot;gdb&quot;, with argv[1] being your target app.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how to avoid including that &quot;gdb&quot; in the comm_spawn argv's - I once added an mpirun cmd line option to automatically add it, but got loudly told to remove it.  Of course, it should be easy to pass an option to your app itself that tells it whether or not to do so!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 16, 2009, at 4:06 AM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Until now i always wrote applications for which the number of processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was given on the command line with -np.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To debug these applications i wrote a script, run_gdb.sh which basically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open a xterm and starts gdb in it for my application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This allowed me to have a window for each of the processes being debugged.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, however, i write my first application in which additional processes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being spawned. My question is now: how can i open xterm windows in which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gdb runs for the spawned processes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only way i can think of is to pass my script run_gdb.sh into the argv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters of MPI_Spawn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would this be correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If yes, what about other parameters passed to the spawning process, such as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment variables passed via -x? Are they being passed to the spawned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes as well? In my case this would be necessary so that processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on other machine will get the $DISPLAY environment variable in order to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; display their xterms with gdb on my workstation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another negative point would be the need to change the argv parameters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; every time one switches between debugging and normal running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anybody got some hints on how to debug spawned processes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="11558.php">Jeff Squyres: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184"</a>
<li><strong>Previous message:</strong> <a href="11556.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11556.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11563.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11563.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
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
