<?
$subject_val = "Re: [OMPI users] Debugging spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 09:20:25 2009" -->
<!-- isoreceived="20091216142025" -->
<!-- sent="Wed, 16 Dec 2009 15:20:20 +0100" -->
<!-- isosent="20091216142020" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging spawned processes" -->
<!-- id="9b0da5ce0912160620y6d5b0da2p411a5c66627cc0aa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59399F93-090B-4143-83D8-E39E4DD7199C_at_open-mpi.org" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 09:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11557.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11555.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11554.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11557.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11557.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply
<br>
<p>That sounds good. I have Open-MPI version 1.3.2, and mpirun seems not
<br>
to recognize the --xterm option.
<br>
[jody_at_plankton tileopt]$ mpirun --xterm -np 1 ./boss 9 sample.tlf
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not
<br>
find an executable:
<br>
<p>Executable: 1
<br>
Node: aim-plankton.uzh.ch
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
(if i reverse the --xterm and -np 1, it complains about not finding
<br>
executable '9')
<br>
Do i need to install a higher version, or is this something i'd have
<br>
to set as option in configure?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Wed, Dec 16, 2009 at 1:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Depends on the version you are working with. If it includes the -xterm option, then that option gets applied to the dynamically spawned procs too, so this should be automatically taken care of...but in that case, you wouldn't need your script to open an xterm anyway. You would just do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --xterm -np 5 gdb ./my_app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or the equivalent. You would then comm_spawn an argv[0] of &quot;gdb&quot;, with argv[1] being your target app.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how to avoid including that &quot;gdb&quot; in the comm_spawn argv's - I once added an mpirun cmd line option to automatically add it, but got loudly told to remove it. &#160;Of course, it should be easy to pass an option to your app itself that tells it whether or not to do so!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 16, 2009, at 4:06 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; Until now i always wrote applications for which the number of processes
</span><br>
<span class="quotelev2">&gt;&gt; was given on the command line with -np.
</span><br>
<span class="quotelev2">&gt;&gt; To debug these applications i wrote a script, run_gdb.sh which basically
</span><br>
<span class="quotelev2">&gt;&gt; open a xterm and starts gdb in it for my application.
</span><br>
<span class="quotelev2">&gt;&gt; This allowed me to have a window for each of the processes being debugged.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, however, i write my first application in which additional processes are
</span><br>
<span class="quotelev2">&gt;&gt; being spawned. My question is now: how can i open xterm windows in which
</span><br>
<span class="quotelev2">&gt;&gt; gdb runs for the spawned processes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only way i can think of is to pass my script run_gdb.sh into the argv
</span><br>
<span class="quotelev2">&gt;&gt; parameters of MPI_Spawn.
</span><br>
<span class="quotelev2">&gt;&gt; Would this be correct?
</span><br>
<span class="quotelev2">&gt;&gt; If yes, what about other parameters passed to the spawning process, such as
</span><br>
<span class="quotelev2">&gt;&gt; environment variables passed via -x? Are they being passed to the spawned
</span><br>
<span class="quotelev2">&gt;&gt; processes as well? In my case this would be necessary so that processes
</span><br>
<span class="quotelev2">&gt;&gt; on other machine will get the $DISPLAY environment variable in order to
</span><br>
<span class="quotelev2">&gt;&gt; display their xterms with gdb on my workstation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another negative point would be the need to change the argv parameters
</span><br>
<span class="quotelev2">&gt;&gt; every time one switches between debugging and normal running.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anybody got some hints on how to debug spawned processes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Jody
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11557.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11555.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11554.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11557.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11557.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
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
