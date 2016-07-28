<?
$subject_val = "Re: [OMPI users] Debugging spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 07:00:19 2009" -->
<!-- isoreceived="20091216120019" -->
<!-- sent="Wed, 16 Dec 2009 05:00:10 -0700" -->
<!-- isosent="20091216120010" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging spawned processes" -->
<!-- id="59399F93-090B-4143-83D8-E39E4DD7199C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9b0da5ce0912160306m392fdc6p8f8bfd2bf30427d3_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-16 07:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11555.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="11553.php">jody: "[OMPI users] Debugging spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11553.php">jody: "[OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11556.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11556.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depends on the version you are working with. If it includes the -xterm option, then that option gets applied to the dynamically spawned procs too, so this should be automatically taken care of...but in that case, you wouldn't need your script to open an xterm anyway. You would just do:
<br>
<p>mpirun --xterm -np 5 gdb ./my_app
<br>
<p>or the equivalent. You would then comm_spawn an argv[0] of &quot;gdb&quot;, with argv[1] being your target app.
<br>
<p>I don't know how to avoid including that &quot;gdb&quot; in the comm_spawn argv's - I once added an mpirun cmd line option to automatically add it, but got loudly told to remove it.  Of course, it should be easy to pass an option to your app itself that tells it whether or not to do so!
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Dec 16, 2009, at 4:06 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Until now i always wrote applications for which the number of processes
</span><br>
<span class="quotelev1">&gt; was given on the command line with -np.
</span><br>
<span class="quotelev1">&gt; To debug these applications i wrote a script, run_gdb.sh which basically
</span><br>
<span class="quotelev1">&gt; open a xterm and starts gdb in it for my application.
</span><br>
<span class="quotelev1">&gt; This allowed me to have a window for each of the processes being debugged.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, however, i write my first application in which additional processes are
</span><br>
<span class="quotelev1">&gt; being spawned. My question is now: how can i open xterm windows in which
</span><br>
<span class="quotelev1">&gt; gdb runs for the spawned processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only way i can think of is to pass my script run_gdb.sh into the argv
</span><br>
<span class="quotelev1">&gt; parameters of MPI_Spawn.
</span><br>
<span class="quotelev1">&gt; Would this be correct?
</span><br>
<span class="quotelev1">&gt; If yes, what about other parameters passed to the spawning process, such as
</span><br>
<span class="quotelev1">&gt; environment variables passed via -x? Are they being passed to the spawned
</span><br>
<span class="quotelev1">&gt; processes as well? In my case this would be necessary so that processes
</span><br>
<span class="quotelev1">&gt; on other machine will get the $DISPLAY environment variable in order to
</span><br>
<span class="quotelev1">&gt; display their xterms with gdb on my workstation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another negative point would be the need to change the argv parameters
</span><br>
<span class="quotelev1">&gt; every time one switches between debugging and normal running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anybody got some hints on how to debug spawned processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
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
<li><strong>Next message:</strong> <a href="11555.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="11553.php">jody: "[OMPI users] Debugging spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11553.php">jody: "[OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11556.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11556.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
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
