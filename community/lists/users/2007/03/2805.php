<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 13:36:33 2007" -->
<!-- isoreceived="20070315173633" -->
<!-- sent="Thu, 15 Mar 2007 10:36:29 -0700" -->
<!-- isosent="20070315173629" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal 13" -->
<!-- id="45F9841D.4000408_at_graphics.stanford.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d0b79b10703151025oaf3937cwa94bb00a4458a36e_at_mail.gmail.com" -->
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
<strong>From:</strong> Mike Houston (<em>mhouston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-15 13:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2804.php">David Bronke: "[OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2804.php">David Bronke: "[OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been having similar issues with brand new FC5/6 and RHEL5 machines, 
<br>
but our FC4/RHEL4 machines are just fine.  On the FC5/6 RHEL5 machines, 
<br>
I can get things to run as root.  There must be some ACL or security 
<br>
setting issue that's enabled by default on the newer distros.  If I 
<br>
figure it out this weekend, I'll let you know.  If anyone else knows the 
<br>
solution, please post to the list.
<br>
<p>-Mike
<br>
<p>David Bronke wrote:
<br>
<span class="quotelev1">&gt; I've been trying to get OpenMPI working on two of the computers at a
</span><br>
<span class="quotelev1">&gt; lab I help administer, and I'm running into a rather large issue. When
</span><br>
<span class="quotelev1">&gt; running anything using mpirun as a normal user, I get the following
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --no-daemonize --host
</span><br>
<span class="quotelev1">&gt; localhost,localhost,localhost,localhost,localhost,localhost,localhost,localhost
</span><br>
<span class="quotelev1">&gt; /workspace/bronke/mpi/hello
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev1">&gt; on signal 13.
</span><br>
<span class="quotelev1">&gt; [trixie:18104] ERROR: A daemon on node localhost failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [trixie:18104] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [trixie:18104] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [trixie:18104] The daemon received a signal 13.
</span><br>
<span class="quotelev1">&gt; 8 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, running the same exact command line as root works fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ sudo mpirun --no-daemonize --host
</span><br>
<span class="quotelev1">&gt; localhost,localhost,localhost,localhost,localhost,localhost,localhost,localhost
</span><br>
<span class="quotelev1">&gt; /workspace/bronke/mpi/hello
</span><br>
<span class="quotelev1">&gt; Password:
</span><br>
<span class="quotelev1">&gt; p is 8, my_rank is 0
</span><br>
<span class="quotelev1">&gt; p is 8, my_rank is 1
</span><br>
<span class="quotelev1">&gt; p is 8, my_rank is 2
</span><br>
<span class="quotelev1">&gt; p is 8, my_rank is 3
</span><br>
<span class="quotelev1">&gt; p is 8, my_rank is 6
</span><br>
<span class="quotelev1">&gt; p is 8, my_rank is 7
</span><br>
<span class="quotelev1">&gt; Greetings from process 1!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 2!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 3!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; p is 8, my_rank is 5
</span><br>
<span class="quotelev1">&gt; p is 8, my_rank is 4
</span><br>
<span class="quotelev1">&gt; Greetings from process 4!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 5!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 6!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 7!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've looked up signal 13, and have found that it is apparently
</span><br>
<span class="quotelev1">&gt; SIGPIPE; I also found a thread on the LAM-MPI site:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php">http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php</a>
</span><br>
<span class="quotelev1">&gt; However, this thread seems to indicate that the problem would be in
</span><br>
<span class="quotelev1">&gt; the application, (/workspace/bronke/mpi/hello in this case) but there
</span><br>
<span class="quotelev1">&gt; are no pipes in use in this app, and the fact that it works as
</span><br>
<span class="quotelev1">&gt; expected as root doesn't seem to fit either. I have tried running
</span><br>
<span class="quotelev1">&gt; mpirun with --verbose and it doesn't show any more output than without
</span><br>
<span class="quotelev1">&gt; it, so I've run into a sort of dead-end on this issue. Does anyone
</span><br>
<span class="quotelev1">&gt; know of any way I can figure out what's going wrong or how I can fix
</span><br>
<span class="quotelev1">&gt; it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2804.php">David Bronke: "[OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2804.php">David Bronke: "[OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
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
