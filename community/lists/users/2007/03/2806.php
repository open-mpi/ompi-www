<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 14:37:19 2007" -->
<!-- isoreceived="20070315183719" -->
<!-- sent="Thu, 15 Mar 2007 13:36:54 -0500" -->
<!-- isosent="20070315183654" -->
<!-- name="McCalla, Mac" -->
<!-- email="macmccalla_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal 13" -->
<!-- id="F53E389D6EDBD6408B5BEED30A9DAD6301BB3CF3_at_HACSSEX005.ihess.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> McCalla, Mac (<em>macmccalla_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-15 14:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2807.php">Edmund Sumbar: "Re: [OMPI users] Shared Ram used for simple application"</a>
<li><strong>Previous message:</strong> <a href="2805.php">Mike Houston: "Re: [OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2804.php">David Bronke: "[OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2808.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2808.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the perror command is available on your system it will tell
<br>
you what the message is associated with the signal value.  On my system
<br>
RHEL4U3, it is permission denied.
<br>
<p>HTH,
<br>
<p>mac mccalla 
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of David Bronke
<br>
Sent: Thursday, March 15, 2007 12:25 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Signal 13
<br>
<p>I've been trying to get OpenMPI working on two of the computers at a lab
<br>
I help administer, and I'm running into a rather large issue. When
<br>
running anything using mpirun as a normal user, I get the following
<br>
output:
<br>
<p><p>$ mpirun --no-daemonize --host
<br>
localhost,localhost,localhost,localhost,localhost,localhost,localhost,lo
<br>
calhost
<br>
/workspace/bronke/mpi/hello
<br>
mpirun noticed that job rank 0 with PID 0 on node &quot;localhost&quot; exited on
<br>
signal 13.
<br>
[trixie:18104] ERROR: A daemon on node localhost failed to start as
<br>
expected.
<br>
[trixie:18104] ERROR: There may be more information available from
<br>
[trixie:18104] ERROR: the remote shell (see above).
<br>
[trixie:18104] The daemon received a signal 13.
<br>
8 additional processes aborted (not shown)
<br>
<p><p>However, running the same exact command line as root works fine:
<br>
<p><p>$ sudo mpirun --no-daemonize --host
<br>
localhost,localhost,localhost,localhost,localhost,localhost,localhost,lo
<br>
calhost
<br>
/workspace/bronke/mpi/hello
<br>
Password:
<br>
p is 8, my_rank is 0
<br>
p is 8, my_rank is 1
<br>
p is 8, my_rank is 2
<br>
p is 8, my_rank is 3
<br>
p is 8, my_rank is 6
<br>
p is 8, my_rank is 7
<br>
Greetings from process 1!
<br>
<p>Greetings from process 2!
<br>
<p>Greetings from process 3!
<br>
<p>p is 8, my_rank is 5
<br>
p is 8, my_rank is 4
<br>
Greetings from process 4!
<br>
<p>Greetings from process 5!
<br>
<p>Greetings from process 6!
<br>
<p>Greetings from process 7!
<br>
<p><p>I've looked up signal 13, and have found that it is apparently SIGPIPE;
<br>
I also found a thread on the LAM-MPI site:
<br>
<a href="http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php">http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php</a>
<br>
However, this thread seems to indicate that the problem would be in the
<br>
application, (/workspace/bronke/mpi/hello in this case) but there are no
<br>
pipes in use in this app, and the fact that it works as expected as root
<br>
doesn't seem to fit either. I have tried running mpirun with --verbose
<br>
and it doesn't show any more output than without it, so I've run into a
<br>
sort of dead-end on this issue. Does anyone know of any way I can figure
<br>
out what's going wrong or how I can fix it?
<br>
<p>Thanks!
<br>
<pre>
--
David H. Bronke
Lead Programmer
G33X Nexus Entertainment
<a href="http://games.g33xnexus.com/precursors/">http://games.g33xnexus.com/precursors/</a>
v3sw5/7Hhw5/6ln4pr6Ock3ma7u7+8Lw3/7Tm3l6+7Gi2e4t4Mb7Hen5g8+9ORPa22s6MSr7
p6
hackerkey.com
Support Web Standards! <a href="http://www.webstandards.org/">http://www.webstandards.org/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2807.php">Edmund Sumbar: "Re: [OMPI users] Shared Ram used for simple application"</a>
<li><strong>Previous message:</strong> <a href="2805.php">Mike Houston: "Re: [OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2804.php">David Bronke: "[OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2808.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2808.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
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
