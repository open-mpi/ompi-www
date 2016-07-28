<?
$subject_val = "Re: [OMPI users] Error from mpirun command";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 14:23:21 2011" -->
<!-- isoreceived="20110113192321" -->
<!-- sent="Thu, 13 Jan 2011 11:18:39 -0800" -->
<!-- isosent="20110113191839" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error from mpirun command" -->
<!-- id="C954900F.DD00%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E482D5E5-D9AD-4405-9672-DB0BB30D52C9_at_cisco.com" -->
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
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-13 14:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15361.php">Hicham Mouline: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15361.php">Hicham Mouline: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15361.php">Hicham Mouline: "Re: [OMPI users] Error from mpirun command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Jeff.
<br>
<p>I just commented the stty line out and it doesn't seem to have
<br>
any ill effect with interactive shells.  I guess my
<br>
&nbsp;&nbsp;stty erase ^\?
<br>
was superfluous to begin with.  I have hard time remembering
<br>
which rc file invokes/chains what other rc file.
<br>
<p>Regards,
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><p>On 1/13/11 11:10 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: you can typically put that kind of stuff in a portion of your .bashrc
</span><br>
<span class="quotelev1">&gt; that is only invoked for interactive logins.  I.e., the automated ssh's that
</span><br>
<span class="quotelev1">&gt; OMPI's mpirun won't invoke those commands because they're non-interactive
</span><br>
<span class="quotelev1">&gt; logins.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a tcsh user myself, so I don't know the appropriate mojo offhand to detect
</span><br>
<span class="quotelev1">&gt; interactive vs. non-interactive bash logins, but I'm sure it exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 12, 2011, at 7:13 PM, Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Gus.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I grep'ed &quot;stty&quot; in all .&lt;files&gt; in my home directory and found
</span><br>
<span class="quotelev2">&gt;&gt; that I had a line
</span><br>
<span class="quotelev2">&gt;&gt;   stty erase ^\?
</span><br>
<span class="quotelev2">&gt;&gt; in .bashrc.  When I commented out the line, the error message
</span><br>
<span class="quotelev2">&gt;&gt; &quot;stty: standard input: Invalid argument&quot; went away.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I appreciate your tip.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/12/11 3:44 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to run simple mpirun commands (pretty much straight out of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun man page) and getting a bit of error message.  Here&#185;s what I mean:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   stty: standard input: Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ : Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 hostname 2&gt; stdErr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ cat stdErr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   stty: standard input: Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ ssh -l tsakai blitzen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Last login: Wed Jan 12 15:41:59 2011 from vixen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Platform OCS Frontend Node - Blitzen Cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Platform OCS 4.5.1 (Flintstone)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Profile built 11:01 10-Jul-2008
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Kickstarted 11:02 10-Jul-2008
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   stty: standard inputblitzen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostname 2&gt; stdErr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ cat stdErr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   stty: standard input: Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   logout
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using two hosts: vixen and blitzen.  It appears that when a machine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the one I am on it is specified via &#173;H flag, I get &#179;stty: standard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; input: Invalid argument&#178;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message to stderr.  It doesn&#185;t seem to impeed the execution of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my example, hostname), though.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can somebody please tell me what this means and what it takes to cure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Guessin' ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anything in your .bashrc/.tcshrc or on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system-wide initialization files in /etc /etc/profile.d
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that may be causing the stty output to stderr?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did a little googling and found some stuff about it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps it is not redirecting stderr  2&gt;dev/null.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The message may come from the ssh session opened when mpiexec connects
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you to the remote machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My $0.02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15361.php">Hicham Mouline: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15361.php">Hicham Mouline: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15361.php">Hicham Mouline: "Re: [OMPI users] Error from mpirun command"</a>
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
