<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 15:51:16 2007" -->
<!-- isoreceived="20070315195116" -->
<!-- sent="Thu, 15 Mar 2007 15:51:09 -0400" -->
<!-- isosent="20070315195109" -->
<!-- name="David Bronke" -->
<!-- email="whitelynx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal 13" -->
<!-- id="d0b79b10703151251q4f353163w4d7883b6fc99139d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F53E389D6EDBD6408B5BEED30A9DAD6301BB3CF3_at_HACSSEX005.ihess.com" -->
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
<strong>Date:</strong> 2007-03-15 15:51:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2807.php">Edmund Sumbar: "Re: [OMPI users] Shared Ram used for simple application"</a>
<li><strong>In reply to:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2810.php">Ralph H Castain: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2810.php">Ralph H Castain: "Re: [OMPI users] Signal 13"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, now that I've figured out what the signal means, I'm wondering
<br>
exactly what is running into permission problems... the program I'm
<br>
running doesn't use any functions except printf, sprintf, and MPI_*...
<br>
I was thinking that possibly changes to permissions on certain /dev
<br>
entries in newer distros might cause this, but I'm not even sure what
<br>
/dev entries would be used by MPI.
<br>
<p>On 3/15/07, McCalla, Mac &lt;macmccalla_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;         If the perror command is available on your system it will tell
</span><br>
<span class="quotelev1">&gt; you what the message is associated with the signal value.  On my system
</span><br>
<span class="quotelev1">&gt; RHEL4U3, it is permission denied.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mac mccalla
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of David Bronke
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, March 15, 2007 12:25 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Signal 13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been trying to get OpenMPI working on two of the computers at a lab
</span><br>
<span class="quotelev1">&gt; I help administer, and I'm running into a rather large issue. When
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
<span class="quotelev1">&gt; localhost,localhost,localhost,localhost,localhost,localhost,localhost,lo
</span><br>
<span class="quotelev1">&gt; calhost
</span><br>
<span class="quotelev1">&gt; /workspace/bronke/mpi/hello
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node &quot;localhost&quot; exited on
</span><br>
<span class="quotelev1">&gt; signal 13.
</span><br>
<span class="quotelev1">&gt; [trixie:18104] ERROR: A daemon on node localhost failed to start as
</span><br>
<span class="quotelev1">&gt; expected.
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
<span class="quotelev1">&gt; localhost,localhost,localhost,localhost,localhost,localhost,localhost,lo
</span><br>
<span class="quotelev1">&gt; calhost
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
<span class="quotelev1">&gt; I've looked up signal 13, and have found that it is apparently SIGPIPE;
</span><br>
<span class="quotelev1">&gt; I also found a thread on the LAM-MPI site:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php">http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php</a>
</span><br>
<span class="quotelev1">&gt; However, this thread seems to indicate that the problem would be in the
</span><br>
<span class="quotelev1">&gt; application, (/workspace/bronke/mpi/hello in this case) but there are no
</span><br>
<span class="quotelev1">&gt; pipes in use in this app, and the fact that it works as expected as root
</span><br>
<span class="quotelev1">&gt; doesn't seem to fit either. I have tried running mpirun with --verbose
</span><br>
<span class="quotelev1">&gt; and it doesn't show any more output than without it, so I've run into a
</span><br>
<span class="quotelev1">&gt; sort of dead-end on this issue. Does anyone know of any way I can figure
</span><br>
<span class="quotelev1">&gt; out what's going wrong or how I can fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David H. Bronke
</span><br>
<span class="quotelev1">&gt; Lead Programmer
</span><br>
<span class="quotelev1">&gt; G33X Nexus Entertainment
</span><br>
<span class="quotelev1">&gt; <a href="http://games.g33xnexus.com/precursors/">http://games.g33xnexus.com/precursors/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v3sw5/7Hhw5/6ln4pr6Ock3ma7u7+8Lw3/7Tm3l6+7Gi2e4t4Mb7Hen5g8+9ORPa22s6MSr7
</span><br>
<span class="quotelev1">&gt; p6
</span><br>
<span class="quotelev1">&gt; hackerkey.com
</span><br>
<span class="quotelev1">&gt; Support Web Standards! <a href="http://www.webstandards.org/">http://www.webstandards.org/</a>
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2807.php">Edmund Sumbar: "Re: [OMPI users] Shared Ram used for simple application"</a>
<li><strong>In reply to:</strong> <a href="2806.php">McCalla, Mac: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2810.php">Ralph H Castain: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2810.php">Ralph H Castain: "Re: [OMPI users] Signal 13"</a>
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
