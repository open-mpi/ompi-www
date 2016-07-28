<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 17:35:03 2007" -->
<!-- isoreceived="20070315213503" -->
<!-- sent="Thu, 15 Mar 2007 15:34:57 -0600" -->
<!-- isosent="20070315213457" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal 13" -->
<!-- id="C21F1821.8247%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d0b79b10703151251q4f353163w4d7883b6fc99139d_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-15 17:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2811.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2808.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2811.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2811.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It isn't a /dev issue. The problem is likely that the system lacks
<br>
sufficient permissions to either:
<br>
<p>1. create the Open MPI session directory tree. We create a hierarchy of
<br>
subdirectories for temporary storage used for things like your shared memory
<br>
file - the location of the head of that tree can be specified at run time,
<br>
but has a series of built-in defaults it can search if you don't specify it
<br>
(we look at your environmental variables - e.g., TMP or TMPDIR - as well as
<br>
the typical Linux/Unix places). You might check to see what your tmp
<br>
directory is, and that you have write permission into it. Alternatively, you
<br>
can specify your own location (where you know you have permissions!) by
<br>
setting --tmpdir your-dir on the mpirun command line.
<br>
<p>2. execute or access the various binaries and/or libraries. This is usually
<br>
caused when someone installs OpenMPI as root, and then tries to execute as a
<br>
non-root user. Best thing here is to either run through the installation
<br>
directory and add the correct permissions (assuming it is a system-level
<br>
install), or reinstall as the non-root user (if the install is solely for
<br>
you anyway).
<br>
<p>You can also set --debug-daemons on the mpirun command line to get more
<br>
diagnostic output from the daemons and then send that along.
<br>
<p>BTW: if possible, it helps us to advise you if we know which version of
<br>
OpenMPI you are using. ;-)
<br>
<p>Hope that helps.
<br>
Ralph
<br>
<p><p><p><p>On 3/15/07 1:51 PM, &quot;David Bronke&quot; &lt;whitelynx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, now that I've figured out what the signal means, I'm wondering
</span><br>
<span class="quotelev1">&gt; exactly what is running into permission problems... the program I'm
</span><br>
<span class="quotelev1">&gt; running doesn't use any functions except printf, sprintf, and MPI_*...
</span><br>
<span class="quotelev1">&gt; I was thinking that possibly changes to permissions on certain /dev
</span><br>
<span class="quotelev1">&gt; entries in newer distros might cause this, but I'm not even sure what
</span><br>
<span class="quotelev1">&gt; /dev entries would be used by MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/15/07, McCalla, Mac &lt;macmccalla_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;         If the perror command is available on your system it will tell
</span><br>
<span class="quotelev2">&gt;&gt; you what the message is associated with the signal value.  On my system
</span><br>
<span class="quotelev2">&gt;&gt; RHEL4U3, it is permission denied.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mac mccalla
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of David Bronke
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, March 15, 2007 12:25 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Signal 13
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been trying to get OpenMPI working on two of the computers at a lab
</span><br>
<span class="quotelev2">&gt;&gt; I help administer, and I'm running into a rather large issue. When
</span><br>
<span class="quotelev2">&gt;&gt; running anything using mpirun as a normal user, I get the following
</span><br>
<span class="quotelev2">&gt;&gt; output:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun --no-daemonize --host
</span><br>
<span class="quotelev2">&gt;&gt; localhost,localhost,localhost,localhost,localhost,localhost,localhost,lo
</span><br>
<span class="quotelev2">&gt;&gt; calhost
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/bronke/mpi/hello
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node &quot;localhost&quot; exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 13.
</span><br>
<span class="quotelev2">&gt;&gt; [trixie:18104] ERROR: A daemon on node localhost failed to start as
</span><br>
<span class="quotelev2">&gt;&gt; expected.
</span><br>
<span class="quotelev2">&gt;&gt; [trixie:18104] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt; [trixie:18104] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [trixie:18104] The daemon received a signal 13.
</span><br>
<span class="quotelev2">&gt;&gt; 8 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, running the same exact command line as root works fine:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ sudo mpirun --no-daemonize --host
</span><br>
<span class="quotelev2">&gt;&gt; localhost,localhost,localhost,localhost,localhost,localhost,localhost,lo
</span><br>
<span class="quotelev2">&gt;&gt; calhost
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/bronke/mpi/hello
</span><br>
<span class="quotelev2">&gt;&gt; Password:
</span><br>
<span class="quotelev2">&gt;&gt; p is 8, my_rank is 0
</span><br>
<span class="quotelev2">&gt;&gt; p is 8, my_rank is 1
</span><br>
<span class="quotelev2">&gt;&gt; p is 8, my_rank is 2
</span><br>
<span class="quotelev2">&gt;&gt; p is 8, my_rank is 3
</span><br>
<span class="quotelev2">&gt;&gt; p is 8, my_rank is 6
</span><br>
<span class="quotelev2">&gt;&gt; p is 8, my_rank is 7
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from process 1!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from process 2!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from process 3!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; p is 8, my_rank is 5
</span><br>
<span class="quotelev2">&gt;&gt; p is 8, my_rank is 4
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from process 4!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from process 5!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from process 6!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from process 7!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've looked up signal 13, and have found that it is apparently SIGPIPE;
</span><br>
<span class="quotelev2">&gt;&gt; I also found a thread on the LAM-MPI site:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php">http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; However, this thread seems to indicate that the problem would be in the
</span><br>
<span class="quotelev2">&gt;&gt; application, (/workspace/bronke/mpi/hello in this case) but there are no
</span><br>
<span class="quotelev2">&gt;&gt; pipes in use in this app, and the fact that it works as expected as root
</span><br>
<span class="quotelev2">&gt;&gt; doesn't seem to fit either. I have tried running mpirun with --verbose
</span><br>
<span class="quotelev2">&gt;&gt; and it doesn't show any more output than without it, so I've run into a
</span><br>
<span class="quotelev2">&gt;&gt; sort of dead-end on this issue. Does anyone know of any way I can figure
</span><br>
<span class="quotelev2">&gt;&gt; out what's going wrong or how I can fix it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David H. Bronke
</span><br>
<span class="quotelev2">&gt;&gt; Lead Programmer
</span><br>
<span class="quotelev2">&gt;&gt; G33X Nexus Entertainment
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://games.g33xnexus.com/precursors/">http://games.g33xnexus.com/precursors/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; v3sw5/7Hhw5/6ln4pr6Ock3ma7u7+8Lw3/7Tm3l6+7Gi2e4t4Mb7Hen5g8+9ORPa22s6MSr7
</span><br>
<span class="quotelev2">&gt;&gt; p6
</span><br>
<span class="quotelev2">&gt;&gt; hackerkey.com
</span><br>
<span class="quotelev2">&gt;&gt; Support Web Standards! <a href="http://www.webstandards.org/">http://www.webstandards.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2811.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2808.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2811.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2811.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
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
