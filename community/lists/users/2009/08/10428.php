<?
$subject_val = "Re: [OMPI users] --rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 09:26:29 2009" -->
<!-- isoreceived="20090819132629" -->
<!-- sent="Wed, 19 Aug 2009 08:26:24 -0500" -->
<!-- isosent="20090819132624" -->
<!-- name="Nulik Nol" -->
<!-- email="nuliknol_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --rankfile" -->
<!-- id="1c92aaf50908190626i13158eadyf7f3edc7ff5b85fe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0908182327p55bd088dj949fc2f93710e2d6_at_mail.gmail.com" -->
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
<strong>From:</strong> Nulik Nol (<em>nuliknol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 09:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10427.php">jody: "Re: [OMPI users] --rankfile"</a>
<li><strong>In reply to:</strong> <a href="10427.php">jody: "Re: [OMPI users] --rankfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks a lot, it worked.
<br>
<p>On Wed, Aug 19, 2009 at 1:27 AM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I had a similar problem.
</span><br>
<span class="quotelev1">&gt; Following a suggestion from Lenny,
</span><br>
<span class="quotelev1">&gt; i removed the &quot;max-slots&quot; entries from
</span><br>
<span class="quotelev1">&gt; my hostsfile and it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that there still are some minor bugs in the rankfile mechanism.
</span><br>
<span class="quotelev1">&gt; See the post
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/08/10384.php">http://www.open-mpi.org/community/lists/users/2009/08/10384.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 18, 2009 at 10:53 PM, Nulik Nol&lt;nuliknol_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; i get this error when i use --rankfile,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;There are not enough slots available in the system to satisfy the 2 slots&quot;
</span><br>
<span class="quotelev2">&gt;&gt; what could be the problem? I have tried using '*' for 'slot' param and
</span><br>
<span class="quotelev2">&gt;&gt; many other configs without any luck. Wihtout --rankfile everything
</span><br>
<span class="quotelev2">&gt;&gt; works fine. Will appriciate any help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; master waver # cat neat.hostfile
</span><br>
<span class="quotelev2">&gt;&gt; n64 max-slots=1 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; master max-slots=1 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; master waver # cat neat.rankfile
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=n64 slot=0
</span><br>
<span class="quotelev2">&gt;&gt; rank 1=master slot=0
</span><br>
<span class="quotelev2">&gt;&gt; master waver # mpirun  --rankfile neat.rankfile --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; neat.hostfile -n 2 /tmp/neat
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev2">&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt;&gt;    /tmp/neat
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev2">&gt;&gt; for use.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; master waver # mpirun   --hostfile neat.hostfile -n 2 /tmp/neat
</span><br>
<span class="quotelev2">&gt;&gt; entering master main loop
</span><br>
<span class="quotelev2">&gt;&gt; recieved msg from 1
</span><br>
<span class="quotelev2">&gt;&gt; unknown message 0
</span><br>
<span class="quotelev2">&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 13064 on node master
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; master waver #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ==================================
</span><br>
<span class="quotelev2">&gt;&gt; The power of zero is infinite
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
==================================
The power of zero is infinite
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10427.php">jody: "Re: [OMPI users] --rankfile"</a>
<li><strong>In reply to:</strong> <a href="10427.php">jody: "Re: [OMPI users] --rankfile"</a>
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
