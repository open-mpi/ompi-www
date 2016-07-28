<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 15 05:37:52 2011" -->
<!-- isoreceived="20110915093752" -->
<!-- sent="Thu, 15 Sep 2011 11:37:16 +0200" -->
<!-- isosent="20110915093716" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?" -->
<!-- id="CAFB055D-790A-40DB-AD9A-321372CB5A26_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275E5078B9_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-15 05:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17302.php">&#186;&#194;&#206;&#196;&#198;&#189;: "[OMPI users] openmpi configure error"</a>
<li><strong>In reply to:</strong> <a href="17299.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17306.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17306.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17327.php">devendra rai: "[OMPI users] Problems with MPI_Init_Thread(...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.09.2011 um 01:15 schrieb Blosch, Edwin L:
<br>
<p><span class="quotelev1">&gt; I would appreciate trying to fix the multi-word argument to orte_launch_agent, unless you&#146;ve already fixed it in a later series in which case I could update.  My workaround with the setuid applied to a copied executable doesn&#146;t work for other applications that run on our clusters ( I mean their job scripts would also have to be modified similarly).
</span><br>
<p>I played around with `sg` and it looks like having some pitfalls:
<br>
<p>$ sg 25000 ls -l
<br>
<p>The -l will go to `sg`, even double quotes fo &quot; and ' don't help and there is no --:
<br>
<p>$ sg 2600 ls &quot;'-l'&quot;
<br>
<p>gives an error too.
<br>
<p>(I was about to suggest an orted wrapper doing: 
<br>
<p>#!/bin/sh
<br>
exec sg 25000 orted ${@}&quot;
<br>
<p>but it failed.)
<br>
<p><p><span class="quotelev1">&gt; I think OpenMPI should be able to launch all processes with the same uid and gid even when the user has launched the job while using one of his secondary groups.  Whether it should be a change request or bug (unexpected, counter-intuitive), I&#146;ll leave that to your judgment.
</span><br>
<p>Yes, but for now the &quot;username&quot; is used, not the &quot;uid&quot; - right? So it could have a different uid/gid on the machines, but with the new feature they must be the same. Okay, in a cluster they are most likely unique across all machines anyway. But just to note as a side effect.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thank you again for the support
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 14, 2011 5:10 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I finally had some time to dig around a little. I believe we could make this work if I fix the multi-word cmd line param issue. Either &quot;newgrp&quot; or &quot;sg&quot; should resolve the problem - both are user-level cmds.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Up to you - let me know if you want me to pursue this.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2011, at 3:31 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you -  I did pursue this kind of workaround, and it worked, but you&#146;ll be happy to know that nothing had to be owned by root.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ASIDE ----
</span><br>
<span class="quotelev1">&gt; Just to remind:  The job script is a shell script that invokes mpirun; the job script itself is run with as the correct user, but the group id may be changed to whatever the user requests of the job-scheduling system.  I think it may not be uncommon to have jobs that request a specific Unix group, for many reasons, but in our case the group is an input for the scheduler&#146;s prioritization policy.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Outcome: rank 0 runs user:group2 as the user requested, but the launched child processes run  user:group1  where group 1 is the user&#146;s primary group.  The peculiarity of this application is that each of the processes writes a file to disk, so the resulting group ownership of rank 0 files is group2, but the group ownership of all other ranks&#146; files is group1.  That was the original problem I&#146;m trying to work around.
</span><br>
<span class="quotelev1">&gt; --- END ASIDE
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Fortunately for me, there is another peculiarity of this application -- the executable gets copied out to /tmp (local space) on each of the hosts to be used in the job.  We found this helped prevent some crashes during test phases where an executable gets overwritten while in use.  Definitely a special behavior.  But as a result of this peculiarity, the mpirun command ends up launching the copied executable, and I took advantage of that.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I had the job script do chown user:group2 on the copied executables and then chmod 6711, and then I observed that the child processes ran as user:group2, same as the rank 0 process, so the files they created had the desired group ownership.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I will explore Reuti&#146;s guidance as well.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Randall Svancara
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 14, 2011 3:07 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You could set the setuid bit on the application and chown it to root??  It is about as secure as anything else that has been described thus far.  As a system admin, I cringe at the thought of anything that would allow something to run as someone else,  so there would have to be a pretty good justification for such unique use case as yours.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Randall
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 14, 2011 at 12:56 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Am 14.09.2011 um 19:02 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for trying.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you feel that this is an impossible request without the assistance of some process running as root, for example, as Reuti mentioned, the daemons of a job scheduler?  Or are you saying it will just not be as straightforward as calling setgid as you had hoped?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, do you think there is a way I could make use of the sg command below?  Perhaps there is a way to have the rsh/ssh launcher start the application processes with a command like 'sg &lt;group&gt; &lt;executable name&gt;'?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What about a half-tight integration (or call it: classic tight integration), i.e. no recompilation necessary?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - setup your mpiexec call in the jobscript to use a plain rsh for the remote startup (no path given): &#150;mca plm_rsh_agent rsh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the PE of SGE needs the argument -catch_rsh in start_proc_args and the supplied script in $SGE_ROOT/mpi/startmpi.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  (SGE will create a symbolic link in $TMPDIR therein [which will be called first this way] to the rsh-wrapper in $SGE_ROOT/mpi [pitfall: some applications need a -V to be added in the lines woth &quot;qrsh&quot;, i.e. &quot;qrsh -inherit -V ...&quot; to send all environment variables to the slaves])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - what is your setting of qrsh_daemon/qrsh_command in `qconf -sconf`? This will then be used finally to reach the node and should be builtin or point to the SGE supplied rsh/rshd (no rshd necessary to install, no rshd is running all the time, no rshd will be started by xinet.d or alike)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - like you do already: switch off the built-in SGE starter in your mpiexec call: -mca plm_rsh_disable_qrsh 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: To avoid misunderstandings: you could also set &quot;&#150;mca plm_rsh_agent foobar&quot; and in $SGE_ROOT/mpi/startmpi.sh you change it to create a symbolic link called &quot;foobar &quot; in $TMPDIR. It's just a name at this stage of startup.
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
<span class="quotelev2">&gt; &gt;      command will be executed with the /bin/sh shell. With most shells you
</span><br>
<span class="quotelev2">&gt; &gt;      may run sg from, you need to enclose multi-word commands in quotes.
</span><br>
<span class="quotelev2">&gt; &gt;      Another difference between newgrp and sg is that some shells treat
</span><br>
<span class="quotelev2">&gt; &gt;      newgrp specially, replacing themselves with a new instance of a shell
</span><br>
<span class="quotelev2">&gt; &gt;      that newgrp creates. This doesn't happen with sg, so upon exit from a
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
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wednesday, September 14, 2011 11:33 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
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
<span class="quotelev3">&gt; &gt;&gt; I actually had attempted to call setgid from within the application previously, which looks similar to what you've done, but it failed. That was when I initiated the post to the mailing list. My conclusion, a guess really, was that Linux would not let me setgid from within my program because I was not root.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was afraid of that - the documentation seemed to indicate that would be the case, but I figured it was worth a quick try. Sorry I can't be of help.
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
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, September 14, 2011 8:15 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The attached should set the gid of the remote daemons (and their children) to the gid of mpirun. No cmd line option or anything is required - it will just always do it.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Randall Svancara
</span><br>
<span class="quotelev1">&gt; <a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
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
<li><strong>Next message:</strong> <a href="17304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17302.php">&#186;&#194;&#206;&#196;&#198;&#189;: "[OMPI users] openmpi configure error"</a>
<li><strong>In reply to:</strong> <a href="17299.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17306.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17306.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17327.php">devendra rai: "[OMPI users] Problems with MPI_Init_Thread(...)"</a>
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
