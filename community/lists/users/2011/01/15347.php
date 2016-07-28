<?
$subject_val = "Re: [OMPI users] Error from mpirun command";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 19:17:46 2011" -->
<!-- isoreceived="20110113001746" -->
<!-- sent="Wed, 12 Jan 2011 16:13:03 -0800" -->
<!-- isosent="20110113001303" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error from mpirun command" -->
<!-- id="C953838F.DCA8%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D2E3CD0.5020407_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-01-12 19:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15348.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15346.php">Tena Sakai: "[OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="15345.php">Gus Correa: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Gus.
<br>
<p>I grep'ed &quot;stty&quot; in all .&lt;files&gt; in my home directory and found
<br>
that I had a line
<br>
&nbsp;&nbsp;&nbsp;stty erase ^\?
<br>
in .bashrc.  When I commented out the line, the error message
<br>
&quot;stty: standard input: Invalid argument&quot; went away.
<br>
<p>I appreciate your tip.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><p>On 1/12/11 3:44 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run simple mpirun commands (pretty much straight out of
</span><br>
<span class="quotelev2">&gt;&gt; mpirun man page) and getting a bit of error message.  Here&#185;s what I mean:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$ hostname
</span><br>
<span class="quotelev2">&gt;&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;    stty: standard input: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np
</span><br>
<span class="quotelev2">&gt;&gt; 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;    stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$ : Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np
</span><br>
<span class="quotelev2">&gt;&gt; 1 hostname 2&gt; stdErr
</span><br>
<span class="quotelev2">&gt;&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$ cat stdErr
</span><br>
<span class="quotelev2">&gt;&gt;    stty: standard input: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$ ssh -l tsakai blitzen
</span><br>
<span class="quotelev2">&gt;&gt;    Last login: Wed Jan 12 15:41:59 2011 from vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    Platform OCS Frontend Node - Blitzen Cluster
</span><br>
<span class="quotelev2">&gt;&gt;    Platform OCS 4.5.1 (Flintstone)
</span><br>
<span class="quotelev2">&gt;&gt;    Profile built 11:01 10-Jul-2008
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    Kickstarted 11:02 10-Jul-2008
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$ hostname
</span><br>
<span class="quotelev2">&gt;&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;    stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt;    stty: standard inputblitzen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1
</span><br>
<span class="quotelev2">&gt;&gt; hostname 2&gt; stdErr
</span><br>
<span class="quotelev2">&gt;&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$ cat stdErr
</span><br>
<span class="quotelev2">&gt;&gt;    stty: standard input: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_blitzen ~]$ exit
</span><br>
<span class="quotelev2">&gt;&gt;    logout
</span><br>
<span class="quotelev2">&gt;&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using two hosts: vixen and blitzen.  It appears that when a machine
</span><br>
<span class="quotelev2">&gt;&gt; other than
</span><br>
<span class="quotelev2">&gt;&gt; the one I am on it is specified via &#173;H flag, I get &#179;stty: standard
</span><br>
<span class="quotelev2">&gt;&gt; input: Invalid argument&#178;
</span><br>
<span class="quotelev2">&gt;&gt; message to stderr.  It doesn&#185;t seem to impeed the execution of the
</span><br>
<span class="quotelev2">&gt;&gt; command (in
</span><br>
<span class="quotelev2">&gt;&gt; my example, hostname), though.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can somebody please tell me what this means and what it takes to cure
</span><br>
<span class="quotelev2">&gt;&gt; the problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guessin' ...
</span><br>
<span class="quotelev1">&gt; Anything in your .bashrc/.tcshrc or on
</span><br>
<span class="quotelev1">&gt; system-wide initialization files in /etc /etc/profile.d
</span><br>
<span class="quotelev1">&gt; that may be causing the stty output to stderr?
</span><br>
<span class="quotelev1">&gt; I did a little googling and found some stuff about it.
</span><br>
<span class="quotelev1">&gt; Perhaps it is not redirecting stderr  2&gt;dev/null.
</span><br>
<span class="quotelev1">&gt; The message may come from the ssh session opened when mpiexec connects
</span><br>
<span class="quotelev1">&gt; you to the remote machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My $0.02
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="15348.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15346.php">Tena Sakai: "[OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="15345.php">Gus Correa: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
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
