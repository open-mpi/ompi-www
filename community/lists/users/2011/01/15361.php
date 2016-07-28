<?
$subject_val = "Re: [OMPI users] Error from mpirun command";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 15:38:29 2011" -->
<!-- isoreceived="20110113203829" -->
<!-- sent="Thu, 13 Jan 2011 20:38:22 -0000" -->
<!-- isosent="20110113203822" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error from mpirun command" -->
<!-- id="002601cbb361$d2de8870$789b9950$_at_org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C954900F.DD00%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error from mpirun command<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-13 15:38:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15362.php">Tena Sakai: "[OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15363.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15363.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have some old memory of this where the .bashrc file and the .profile are
<br>
distinguishing login and non-login.
<br>
Also something to do with the - being an argument to the bash process or
<br>
something like this.
<br>
<p>man bash would give you a definite answer.
<br>
<p>rds,
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Tena Sakai
</span><br>
<span class="quotelev1">&gt; Sent: 13 January 2011 19:19
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error from mpirun command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you, Jeff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just commented the stty line out and it doesn't seem to have
</span><br>
<span class="quotelev1">&gt; any ill effect with interactive shells.  I guess my
</span><br>
<span class="quotelev1">&gt;   stty erase ^\?
</span><br>
<span class="quotelev1">&gt; was superfluous to begin with.  I have hard time remembering
</span><br>
<span class="quotelev1">&gt; which rc file invokes/chains what other rc file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/13/11 11:10 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FWIW: you can typically put that kind of stuff in a portion of your
</span><br>
<span class="quotelev1">&gt; .bashrc
</span><br>
<span class="quotelev2">&gt; &gt; that is only invoked for interactive logins.  I.e., the automated
</span><br>
<span class="quotelev1">&gt; ssh's that
</span><br>
<span class="quotelev2">&gt; &gt; OMPI's mpirun won't invoke those commands because they're non-
</span><br>
<span class="quotelev1">&gt; interactive
</span><br>
<span class="quotelev2">&gt; &gt; logins.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm a tcsh user myself, so I don't know the appropriate mojo offhand
</span><br>
<span class="quotelev1">&gt; to detect
</span><br>
<span class="quotelev2">&gt; &gt; interactive vs. non-interactive bash logins, but I'm sure it exists.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 12, 2011, at 7:13 PM, Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you, Gus.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I grep'ed &quot;stty&quot; in all .&lt;files&gt; in my home directory and found
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that I had a line
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   stty erase ^\?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in .bashrc.  When I commented out the line, the error message
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;stty: standard input: Invalid argument&quot; went away.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I appreciate your tip.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tena Sakai
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 1/12/11 3:44 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am trying to run simple mpirun commands (pretty much straight
</span><br>
<span class="quotelev1">&gt; out of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpirun man page) and getting a bit of error message.  Here&#185;s what
</span><br>
<span class="quotelev1">&gt; I mean:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   stty: standard input: Invalid argument
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen
</span><br>
<span class="quotelev1">&gt; -np
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1 hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ : Invalid argument
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen
</span><br>
<span class="quotelev1">&gt; -np
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1 hostname 2&gt; stdErr
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ cat stdErr
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   stty: standard input: Invalid argument
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ ssh -l tsakai blitzen
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Last login: Wed Jan 12 15:41:59 2011 from vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Platform OCS Frontend Node - Blitzen Cluster
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Platform OCS 4.5.1 (Flintstone)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Profile built 11:01 10-Jul-2008
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Kickstarted 11:02 10-Jul-2008
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen
</span><br>
<span class="quotelev1">&gt; -np 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   stty: standard inputblitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen
</span><br>
<span class="quotelev1">&gt; -np 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; hostname 2&gt; stdErr
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ cat stdErr
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   stty: standard input: Invalid argument
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ exit
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   logout
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am using two hosts: vixen and blitzen.  It appears that when a
</span><br>
<span class="quotelev1">&gt; machine
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; other than
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the one I am on it is specified via &#173;H flag, I get &#179;stty: standard
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; input: Invalid argument&#178;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; message to stderr.  It doesn&#185;t seem to impeed the execution of the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; command (in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; my example, hostname), though.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Can somebody please tell me what this means and what it takes to
</span><br>
<span class="quotelev1">&gt; cure
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the problem?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Guessin' ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Anything in your .bashrc/.tcshrc or on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; system-wide initialization files in /etc /etc/profile.d
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that may be causing the stty output to stderr?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I did a little googling and found some stuff about it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Perhaps it is not redirecting stderr  2&gt;dev/null.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The message may come from the ssh session opened when mpiexec
</span><br>
<span class="quotelev1">&gt; connects
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; you to the remote machine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My $0.02
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15362.php">Tena Sakai: "[OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15363.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15363.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
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
