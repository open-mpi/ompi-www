<?
$subject_val = "Re: [OMPI users] Error from mpirun command";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 18:44:26 2011" -->
<!-- isoreceived="20110112234426" -->
<!-- sent="Wed, 12 Jan 2011 18:44:16 -0500" -->
<!-- isosent="20110112234416" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error from mpirun command" -->
<!-- id="4D2E3CD0.5020407_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C95371E2.DC9B%tsakai_at_gallo.ucsf.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 18:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15346.php">Tena Sakai: "[OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15344.php">Tena Sakai: "[OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15344.php">Tena Sakai: "[OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15347.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15347.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run simple mpirun commands (pretty much straight out of
</span><br>
<span class="quotelev1">&gt; mpirun man page) and getting a bit of error message.  Here&#146;s what I mean:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$ hostname
</span><br>
<span class="quotelev1">&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev1">&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev1">&gt;    stty: standard input: Invalid argument
</span><br>
<span class="quotelev1">&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 
</span><br>
<span class="quotelev1">&gt; 1 hostname
</span><br>
<span class="quotelev1">&gt;    stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$ : Invalid argument
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 
</span><br>
<span class="quotelev1">&gt; 1 hostname 2&gt; stdErr
</span><br>
<span class="quotelev1">&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$ cat stdErr
</span><br>
<span class="quotelev1">&gt;    stty: standard input: Invalid argument
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$ ssh -l tsakai blitzen
</span><br>
<span class="quotelev1">&gt;    Last login: Wed Jan 12 15:41:59 2011 from vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    Platform OCS Frontend Node - Blitzen Cluster
</span><br>
<span class="quotelev1">&gt;    Platform OCS 4.5.1 (Flintstone)
</span><br>
<span class="quotelev1">&gt;    Profile built 11:01 10-Jul-2008
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    Kickstarted 11:02 10-Jul-2008
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$ hostname
</span><br>
<span class="quotelev1">&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev1">&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev1">&gt;    stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1 
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt;    stty: standard inputblitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1 
</span><br>
<span class="quotelev1">&gt; hostname 2&gt; stdErr
</span><br>
<span class="quotelev1">&gt;    blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$ cat stdErr
</span><br>
<span class="quotelev1">&gt;    stty: standard input: Invalid argument
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_blitzen ~]$ exit
</span><br>
<span class="quotelev1">&gt;    logout
</span><br>
<span class="quotelev1">&gt;    [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using two hosts: vixen and blitzen.  It appears that when a machine 
</span><br>
<span class="quotelev1">&gt; other than
</span><br>
<span class="quotelev1">&gt; the one I am on it is specified via &#150;H flag, I get &#147;stty: standard 
</span><br>
<span class="quotelev1">&gt; input: Invalid argument&#148;
</span><br>
<span class="quotelev1">&gt; message to stderr.  It doesn&#146;t seem to impeed the execution of the 
</span><br>
<span class="quotelev1">&gt; command (in
</span><br>
<span class="quotelev1">&gt; my example, hostname), though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can somebody please tell me what this means and what it takes to cure 
</span><br>
<span class="quotelev1">&gt; the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Guessin' ...
<br>
Anything in your .bashrc/.tcshrc or on
<br>
system-wide initialization files in /etc /etc/profile.d
<br>
that may be causing the stty output to stderr?
<br>
I did a little googling and found some stuff about it.
<br>
Perhaps it is not redirecting stderr  2&gt;dev/null.
<br>
The message may come from the ssh session opened when mpiexec connects
<br>
you to the remote machine.
<br>
<p>My $0.02
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15346.php">Tena Sakai: "[OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15344.php">Tena Sakai: "[OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15344.php">Tena Sakai: "[OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15347.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15347.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
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
