<?
$subject_val = "Re: [OMPI users] Error from mpirun command";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 14:10:21 2011" -->
<!-- isoreceived="20110113191021" -->
<!-- sent="Thu, 13 Jan 2011 14:10:16 -0500" -->
<!-- isosent="20110113191016" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error from mpirun command" -->
<!-- id="E482D5E5-D9AD-4405-9672-DB0BB30D52C9_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C953838F.DCA8%tsakai_at_gallo.ucsf.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-13 14:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15358.php">Shamis, Pavel: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>In reply to:</strong> <a href="15347.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: you can typically put that kind of stuff in a portion of your .bashrc that is only invoked for interactive logins.  I.e., the automated ssh's that OMPI's mpirun won't invoke those commands because they're non-interactive logins.
<br>
<p>I'm a tcsh user myself, so I don't know the appropriate mojo offhand to detect interactive vs. non-interactive bash logins, but I'm sure it exists.
<br>
<p><p><p>On Jan 12, 2011, at 7:13 PM, Tena Sakai wrote:
<br>
<p><span class="quotelev1">&gt; Thank you, Gus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I grep'ed &quot;stty&quot; in all .&lt;files&gt; in my home directory and found
</span><br>
<span class="quotelev1">&gt; that I had a line
</span><br>
<span class="quotelev1">&gt;   stty erase ^\?
</span><br>
<span class="quotelev1">&gt; in .bashrc.  When I commented out the line, the error message
</span><br>
<span class="quotelev1">&gt; &quot;stty: standard input: Invalid argument&quot; went away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I appreciate your tip.
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
<span class="quotelev1">&gt; On 1/12/11 3:44 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to run simple mpirun commands (pretty much straight out of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun man page) and getting a bit of error message.  Here&#146;s what I mean:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   stty: standard input: Invalid argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ : Invalid argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 hostname 2&gt; stdErr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ cat stdErr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   stty: standard input: Invalid argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$ ssh -l tsakai blitzen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Last login: Wed Jan 12 15:41:59 2011 from vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Platform OCS Frontend Node - Blitzen Cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Platform OCS 4.5.1 (Flintstone)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Profile built 11:01 10-Jul-2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Kickstarted 11:02 10-Jul-2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H blitzen -np 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   stty: standard inputvixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   stty: standard inputblitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ : Invalid argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname 2&gt; stdErr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ cat stdErr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   stty: standard input: Invalid argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_blitzen ~]$ exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using two hosts: vixen and blitzen.  It appears that when a machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the one I am on it is specified via &#150;H flag, I get &#147;stty: standard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; input: Invalid argument&#148;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message to stderr.  It doesn&#146;t seem to impeed the execution of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my example, hostname), though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can somebody please tell me what this means and what it takes to cure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Guessin' ...
</span><br>
<span class="quotelev2">&gt;&gt; Anything in your .bashrc/.tcshrc or on
</span><br>
<span class="quotelev2">&gt;&gt; system-wide initialization files in /etc /etc/profile.d
</span><br>
<span class="quotelev2">&gt;&gt; that may be causing the stty output to stderr?
</span><br>
<span class="quotelev2">&gt;&gt; I did a little googling and found some stuff about it.
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps it is not redirecting stderr  2&gt;dev/null.
</span><br>
<span class="quotelev2">&gt;&gt; The message may come from the ssh session opened when mpiexec connects
</span><br>
<span class="quotelev2">&gt;&gt; you to the remote machine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My $0.02
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15358.php">Shamis, Pavel: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>In reply to:</strong> <a href="15347.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15360.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
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
