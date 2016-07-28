<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 17:31:20 2011" -->
<!-- isoreceived="20110914213120" -->
<!-- sent="Wed, 14 Sep 2011 15:31:06 -0600" -->
<!-- isosent="20110914213106" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275E507783_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALYD9gLfJL+JQQXss+a0WZvrG4=LBqnYyHTU0iejeCxaOxYaJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 17:31:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17298.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17296.php">Mudassar Majeed via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>In reply to:</strong> <a href="17295.php">Randall Svancara: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17298.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17298.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you -  I did pursue this kind of workaround, and it worked, but you'll be happy to know that nothing had to be owned by root.
<br>
<p>ASIDE ----
<br>
Just to remind:  The job script is a shell script that invokes mpirun; the job script itself is run with as the correct user, but the group id may be changed to whatever the user requests of the job-scheduling system.  I think it may not be uncommon to have jobs that request a specific Unix group, for many reasons, but in our case the group is an input for the scheduler's prioritization policy.
<br>
<p>Outcome: rank 0 runs user:group2 as the user requested, but the launched child processes run  user:group1  where group 1 is the user's primary group.  The peculiarity of this application is that each of the processes writes a file to disk, so the resulting group ownership of rank 0 files is group2, but the group ownership of all other ranks' files is group1.  That was the original problem I'm trying to work around.
<br>
--- END ASIDE
<br>
<p>Fortunately for me, there is another peculiarity of this application -- the executable gets copied out to /tmp (local space) on each of the hosts to be used in the job.  We found this helped prevent some crashes during test phases where an executable gets overwritten while in use.  Definitely a special behavior.  But as a result of this peculiarity, the mpirun command ends up launching the copied executable, and I took advantage of that.
<br>
<p>I had the job script do chown user:group2 on the copied executables and then chmod 6711, and then I observed that the child processes ran as user:group2, same as the rank 0 process, so the files they created had the desired group ownership.
<br>
<p>I will explore Reuti's guidance as well.
<br>
<p>Thank you
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Randall Svancara
<br>
Sent: Wednesday, September 14, 2011 3:07 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
<br>
<p>You could set the setuid bit on the application and chown it to root??  It is about as secure as anything else that has been described thus far.  As a system admin, I cringe at the thought of anything that would allow something to run as someone else,  so there would have to be a pretty good justification for such unique use case as yours.
<br>
<p>Randall
<br>
On Wed, Sep 14, 2011 at 12:56 PM, Reuti &lt;reuti_at_[hidden]&lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
<br>
Am 14.09.2011 um 19:02 schrieb Blosch, Edwin L:
<br>
<p><span class="quotelev1">&gt; Thanks for trying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you feel that this is an impossible request without the assistance of some process running as root, for example, as Reuti mentioned, the daemons of a job scheduler?  Or are you saying it will just not be as straightforward as calling setgid as you had hoped?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, do you think there is a way I could make use of the sg command below?  Perhaps there is a way to have the rsh/ssh launcher start the application processes with a command like 'sg &lt;group&gt; &lt;executable name&gt;'?
</span><br>
What about a half-tight integration (or call it: classic tight integration), i.e. no recompilation necessary?
<br>
<p>- setup your mpiexec call in the jobscript to use a plain rsh for the remote startup (no path given): -mca plm_rsh_agent rsh
<br>
<p>- the PE of SGE needs the argument -catch_rsh in start_proc_args and the supplied script in $SGE_ROOT/mpi/startmpi.sh
<br>
<p>&nbsp;(SGE will create a symbolic link in $TMPDIR therein [which will be called first this way] to the rsh-wrapper in $SGE_ROOT/mpi [pitfall: some applications need a -V to be added in the lines woth &quot;qrsh&quot;, i.e. &quot;qrsh -inherit -V ...&quot; to send all environment variables to the slaves])
<br>
<p>- what is your setting of qrsh_daemon/qrsh_command in `qconf -sconf`? This will then be used finally to reach the node and should be builtin or point to the SGE supplied rsh/rshd (no rshd necessary to install, no rshd is running all the time, no rshd will be started by xinet.d or alike)
<br>
<p>- like you do already: switch off the built-in SGE starter in your mpiexec call: -mca plm_rsh_disable_qrsh 1
<br>
<p>-- Reuti
<br>
<p>PS: To avoid misunderstandings: you could also set &quot;-mca plm_rsh_agent foobar&quot; and in $SGE_ROOT/mpi/startmpi.sh you change it to create a symbolic link called &quot;foobar &quot; in $TMPDIR. It's just a name at this stage of startup.
<br>
<p><p><span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NAME
</span><br>
<span class="quotelev1">&gt;      sg - execute command as different group ID
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SYNOPSIS
</span><br>
<span class="quotelev1">&gt;      sg [-] [group [-c ] command]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DESCRIPTION
</span><br>
<span class="quotelev1">&gt;      The sg command works similar to newgrp but accepts a command. The
</span><br>
<span class="quotelev1">&gt;      command will be executed with the /bin/sh shell. With most shells you
</span><br>
<span class="quotelev1">&gt;      may run sg from, you need to enclose multi-word commands in quotes.
</span><br>
<span class="quotelev1">&gt;      Another difference between newgrp and sg is that some shells treat
</span><br>
<span class="quotelev1">&gt;      newgrp specially, replacing themselves with a new instance of a shell
</span><br>
<span class="quotelev1">&gt;      that newgrp creates. This doesn't happen with sg, so upon exit from a
</span><br>
<span class="quotelev1">&gt;      sg command you are returned to your previous group ID.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 14, 2011 11:33 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2011, at 9:39 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the failure messages, unfortunately:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setgid FAILED
</span><br>
<span class="quotelev2">&gt;&gt; setgid FAILED
</span><br>
<span class="quotelev2">&gt;&gt; setgid FAILED
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I actually had attempted to call setgid from within the application previously, which looks similar to what you've done, but it failed. That was when I initiated the post to the mailing list. My conclusion, a guess really, was that Linux would not let me setgid from within my program because I was not root.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was afraid of that - the documentation seemed to indicate that would be the case, but I figured it was worth a quick try. Sorry I can't be of help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, September 14, 2011 8:15 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The attached should set the gid of the remote daemons (and their children) to the gid of mpirun. No cmd line option or anything is required - it will just always do it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would you mind giving it a try?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if/how it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><pre>
--
Randall Svancara
<a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17297/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17298.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17296.php">Mudassar Majeed via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>In reply to:</strong> <a href="17295.php">Randall Svancara: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17298.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17298.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
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
