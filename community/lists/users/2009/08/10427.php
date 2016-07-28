<?
$subject_val = "Re: [OMPI users] --rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 02:27:20 2009" -->
<!-- isoreceived="20090819062720" -->
<!-- sent="Wed, 19 Aug 2009 08:27:14 +0200" -->
<!-- isosent="20090819062714" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --rankfile" -->
<!-- id="9b0da5ce0908182327p55bd088dj949fc2f93710e2d6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1c92aaf50908181353j1c5e819cq18751bc1cdc4fc0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] --rankfile<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 02:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10428.php">Nulik Nol: "Re: [OMPI users] --rankfile"</a>
<li><strong>Previous message:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10421.php">Nulik Nol: "[OMPI users] --rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10428.php">Nulik Nol: "Re: [OMPI users] --rankfile"</a>
<li><strong>Reply:</strong> <a href="10428.php">Nulik Nol: "Re: [OMPI users] --rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I had a similar problem.
<br>
Following a suggestion from Lenny,
<br>
i removed the &quot;max-slots&quot; entries from
<br>
my hostsfile and it worked.
<br>
<p>It seems that there still are some minor bugs in the rankfile mechanism.
<br>
See the post
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/08/10384.php">http://www.open-mpi.org/community/lists/users/2009/08/10384.php</a>
<br>
<p><p>Jody
<br>
<p><p>On Tue, Aug 18, 2009 at 10:53 PM, Nulik Nol&lt;nuliknol_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; i get this error when i use --rankfile,
</span><br>
<span class="quotelev1">&gt; &quot;There are not enough slots available in the system to satisfy the 2 slots&quot;
</span><br>
<span class="quotelev1">&gt; what could be the problem? I have tried using '*' for 'slot' param and
</span><br>
<span class="quotelev1">&gt; many other configs without any luck. Wihtout --rankfile everything
</span><br>
<span class="quotelev1">&gt; works fine. Will appriciate any help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; master waver # cat neat.hostfile
</span><br>
<span class="quotelev1">&gt; n64 max-slots=1 slots=1
</span><br>
<span class="quotelev1">&gt; master max-slots=1 slots=1
</span><br>
<span class="quotelev1">&gt; master waver # cat neat.rankfile
</span><br>
<span class="quotelev1">&gt; rank 0=n64 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=master slot=0
</span><br>
<span class="quotelev1">&gt; master waver # mpirun &#160;--rankfile neat.rankfile --hostfile
</span><br>
<span class="quotelev1">&gt; neat.hostfile -n 2 /tmp/neat
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt; &#160; &#160;/tmp/neat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1 &#160;while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
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
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; master waver # mpirun &#160; --hostfile neat.hostfile -n 2 /tmp/neat
</span><br>
<span class="quotelev1">&gt; entering master main loop
</span><br>
<span class="quotelev1">&gt; recieved msg from 1
</span><br>
<span class="quotelev1">&gt; unknown message 0
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 13064 on node master
</span><br>
<span class="quotelev1">&gt; exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; master waver #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ==================================
</span><br>
<span class="quotelev1">&gt; The power of zero is infinite
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
<li><strong>Next message:</strong> <a href="10428.php">Nulik Nol: "Re: [OMPI users] --rankfile"</a>
<li><strong>Previous message:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10421.php">Nulik Nol: "[OMPI users] --rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10428.php">Nulik Nol: "Re: [OMPI users] --rankfile"</a>
<li><strong>Reply:</strong> <a href="10428.php">Nulik Nol: "Re: [OMPI users] --rankfile"</a>
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
