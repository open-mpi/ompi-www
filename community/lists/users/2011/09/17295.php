<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 16:06:49 2011" -->
<!-- isoreceived="20110914200649" -->
<!-- sent="Wed, 14 Sep 2011 13:06:44 -0700" -->
<!-- isosent="20110914200644" -->
<!-- name="Randall Svancara" -->
<!-- email="rsvancara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?" -->
<!-- id="CALYD9gLfJL+JQQXss+a0WZvrG4=LBqnYyHTU0iejeCxaOxYaJw_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="76365959-65C7-4354-8403-AFCCAFDCE4CF_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Randall Svancara (<em>rsvancara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 16:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17296.php">Mudassar Majeed via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="17294.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17294.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17297.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17297.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You could set the setuid bit on the application and chown it to root??  It
<br>
is about as secure as anything else that has been described thus far.  As a
<br>
system admin, I cringe at the thought of anything that would allow something
<br>
to run as someone else,  so there would have to be a pretty good
<br>
justification for such unique use case as yours.
<br>
<p>Randall
<br>
<p>On Wed, Sep 14, 2011 at 12:56 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 14.09.2011 um 19:02 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for trying.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you feel that this is an impossible request without the assistance of
</span><br>
<span class="quotelev1">&gt; some process running as root, for example, as Reuti mentioned, the daemons
</span><br>
<span class="quotelev1">&gt; of a job scheduler?  Or are you saying it will just not be as
</span><br>
<span class="quotelev1">&gt; straightforward as calling setgid as you had hoped?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, do you think there is a way I could make use of the sg command
</span><br>
<span class="quotelev1">&gt; below?  Perhaps there is a way to have the rsh/ssh launcher start the
</span><br>
<span class="quotelev1">&gt; application processes with a command like 'sg &lt;group&gt; &lt;executable name&gt;'?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about a half-tight integration (or call it: classic tight
</span><br>
<span class="quotelev1">&gt; integration), i.e. no recompilation necessary?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - setup your mpiexec call in the jobscript to use a plain rsh for the
</span><br>
<span class="quotelev1">&gt; remote startup (no path given): &#150;mca plm_rsh_agent rsh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the PE of SGE needs the argument -catch_rsh in start_proc_args and the
</span><br>
<span class="quotelev1">&gt; supplied script in $SGE_ROOT/mpi/startmpi.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (SGE will create a symbolic link in $TMPDIR therein [which will be called
</span><br>
<span class="quotelev1">&gt; first this way] to the rsh-wrapper in $SGE_ROOT/mpi [pitfall: some
</span><br>
<span class="quotelev1">&gt; applications need a -V to be added in the lines woth &quot;qrsh&quot;, i.e. &quot;qrsh
</span><br>
<span class="quotelev1">&gt; -inherit -V ...&quot; to send all environment variables to the slaves])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - what is your setting of qrsh_daemon/qrsh_command in `qconf -sconf`? This
</span><br>
<span class="quotelev1">&gt; will then be used finally to reach the node and should be builtin or point
</span><br>
<span class="quotelev1">&gt; to the SGE supplied rsh/rshd (no rshd necessary to install, no rshd is
</span><br>
<span class="quotelev1">&gt; running all the time, no rshd will be started by xinet.d or alike)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - like you do already: switch off the built-in SGE starter in your mpiexec
</span><br>
<span class="quotelev1">&gt; call: -mca plm_rsh_disable_qrsh 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: To avoid misunderstandings: you could also set &quot;&#150;mca plm_rsh_agent
</span><br>
<span class="quotelev1">&gt; foobar&quot; and in $SGE_ROOT/mpi/startmpi.sh you change it to create a symbolic
</span><br>
<span class="quotelev1">&gt; link called &quot;foobar &quot; in $TMPDIR. It's just a name at this stage of startup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; NAME
</span><br>
<span class="quotelev2">&gt; &gt;      sg - execute command as different group ID
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SYNOPSIS
</span><br>
<span class="quotelev2">&gt; &gt;      sg [-] [group [-c ] command]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; DESCRIPTION
</span><br>
<span class="quotelev2">&gt; &gt;      The sg command works similar to newgrp but accepts a command. The
</span><br>
<span class="quotelev2">&gt; &gt;      command will be executed with the /bin/sh shell. With most shells
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev2">&gt; &gt;      may run sg from, you need to enclose multi-word commands in quotes.
</span><br>
<span class="quotelev2">&gt; &gt;      Another difference between newgrp and sg is that some shells treat
</span><br>
<span class="quotelev2">&gt; &gt;      newgrp specially, replacing themselves with a new instance of a
</span><br>
<span class="quotelev1">&gt; shell
</span><br>
<span class="quotelev2">&gt; &gt;      that newgrp creates. This doesn't happen with sg, so upon exit from
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt; &gt;      sg command you are returned to your previous group ID.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wednesday, September 14, 2011 11:33 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the
</span><br>
<span class="quotelev1">&gt; processes created by mpirun?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 14, 2011, at 9:39 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks, Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I get the failure messages, unfortunately:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setgid FAILED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setgid FAILED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; setgid FAILED
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I actually had attempted to call setgid from within the application
</span><br>
<span class="quotelev1">&gt; previously, which looks similar to what you've done, but it failed. That was
</span><br>
<span class="quotelev1">&gt; when I initiated the post to the mailing list. My conclusion, a guess
</span><br>
<span class="quotelev1">&gt; really, was that Linux would not let me setgid from within my program
</span><br>
<span class="quotelev1">&gt; because I was not root.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was afraid of that - the documentation seemed to indicate that would be
</span><br>
<span class="quotelev1">&gt; the case, but I figured it was worth a quick try. Sorry I can't be of help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, September 14, 2011 8:15 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the
</span><br>
<span class="quotelev1">&gt; processes created by mpirun?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The attached should set the gid of the remote daemons (and their
</span><br>
<span class="quotelev1">&gt; children) to the gid of mpirun. No cmd line option or anything is required -
</span><br>
<span class="quotelev1">&gt; it will just always do it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Would you mind giving it a try?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please let me know if/how it works.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
Randall Svancara
<a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17295/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17296.php">Mudassar Majeed via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="17294.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17294.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17297.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17297.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
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
