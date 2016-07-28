<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 13:25:18 2007" -->
<!-- isoreceived="20070315172518" -->
<!-- sent="Thu, 15 Mar 2007 13:25:12 -0400" -->
<!-- isosent="20070315172512" -->
<!-- name="David Bronke" -->
<!-- email="whitelynx_at_[hidden]" -->
<!-- subject="[OMPI users] Signal 13" -->
<!-- id="d0b79b10703151025oaf3937cwa94bb00a4458a36e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> David Bronke (<em>whitelynx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-15 13:25:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2805.php">Mike Houston: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2803.php">Sebastien.HERRY_at_[hidden]: "[OMPI users] Shared Ram used for simple application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2805.php">Mike Houston: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2805.php">Mike Houston: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been trying to get OpenMPI working on two of the computers at a
<br>
lab I help administer, and I'm running into a rather large issue. When
<br>
running anything using mpirun as a normal user, I get the following
<br>
output:
<br>
<p><p>$ mpirun --no-daemonize --host
<br>
localhost,localhost,localhost,localhost,localhost,localhost,localhost,localhost
<br>
/workspace/bronke/mpi/hello
<br>
mpirun noticed that job rank 0 with PID 0 on node &quot;localhost&quot; exited
<br>
on signal 13.
<br>
[trixie:18104] ERROR: A daemon on node localhost failed to start as expected.
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
localhost,localhost,localhost,localhost,localhost,localhost,localhost,localhost
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
<p><p>I've looked up signal 13, and have found that it is apparently
<br>
SIGPIPE; I also found a thread on the LAM-MPI site:
<br>
<a href="http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php">http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php</a>
<br>
However, this thread seems to indicate that the problem would be in
<br>
the application, (/workspace/bronke/mpi/hello in this case) but there
<br>
are no pipes in use in this app, and the fact that it works as
<br>
expected as root doesn't seem to fit either. I have tried running
<br>
mpirun with --verbose and it doesn't show any more output than without
<br>
it, so I've run into a sort of dead-end on this issue. Does anyone
<br>
know of any way I can figure out what's going wrong or how I can fix
<br>
it?
<br>
<p>Thanks!
<br>
<pre>
-- 
David H. Bronke
Lead Programmer
G33X Nexus Entertainment
<a href="http://games.g33xnexus.com/precursors/">http://games.g33xnexus.com/precursors/</a>
v3sw5/7Hhw5/6ln4pr6Ock3ma7u7+8Lw3/7Tm3l6+7Gi2e4t4Mb7Hen5g8+9ORPa22s6MSr7p6
hackerkey.com
Support Web Standards! <a href="http://www.webstandards.org/">http://www.webstandards.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2805.php">Mike Houston: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2803.php">Sebastien.HERRY_at_[hidden]: "[OMPI users] Shared Ram used for simple application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2805.php">Mike Houston: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2805.php">Mike Houston: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
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
