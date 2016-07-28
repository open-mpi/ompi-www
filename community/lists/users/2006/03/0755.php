<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 12:09:19 2006" -->
<!-- isoreceived="20060302170919" -->
<!-- sent="Thu, 2 Mar 2006 12:09:18 -0500" -->
<!-- isosent="20060302170918" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcsh: orted: Not Found" -->
<!-- id="20A6B50F-9BA4-47EC-9636-A8F5A65DAF5E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C02C6CB6.8F2B%xyang_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 12:09:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0754.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>In reply to:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0759.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Reply:</strong> <a href="0759.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2006, at 11:34 AM, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for the help. I did include path to orted in my .tcshrc  
</span><br>
<span class="quotelev1">&gt; file on
</span><br>
<span class="quotelev1">&gt; mac2, but I put the path at the end of the file. It is interesting  
</span><br>
<span class="quotelev1">&gt; that when
</span><br>
<span class="quotelev1">&gt; I logged into mac with ssh, the path was included and orted was in  
</span><br>
<span class="quotelev1">&gt; my path.
</span><br>
<span class="quotelev1">&gt; But when I ran &quot;ssh mac2 which orted&quot;, orted was not found. It  
</span><br>
<span class="quotelev1">&gt; finds orted
</span><br>
<span class="quotelev1">&gt; only after I move the path from the end of .tcshrc to the beginning  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; file. Strange. Again, thanks and at least I may make MPI work.
</span><br>
<p>Do you have a test like if ( $?prompt ) exit towards the end of  
<br>
your .tcshrc?  Most .tcshrc files do, and the end is only evaluated  
<br>
for interactive shells (which the one to start the orted is not).   
<br>
This is probably why moving it to the top helped.
<br>
<p>Anyway, glad to hear things are working for you.
<br>
<p>Brian
<br>
<p><p><p><span class="quotelev2">&gt;&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 2 Mar 2006 00:24:27 -0500
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] tcsh: orted: Not Found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 1, 2006, at 5:26 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed Open MPI 1.0.1 on two Mac G5s (one with two cpus and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with 4 cpus.). I set up ssh on both machines according to the FAQ.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs work fine if I run the jobs on only one computer. But when I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ran a job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; across the two Macs from the first Mac mac1, I got:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mac1: mpirun -np 6 --hostfiles /Users/me/my_hosts hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tcsh: orted: Command not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mac1:01019] ERROR: A daemon on node mac2 failed to start as  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mac1:01019] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mac1:01019] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mac1:01019] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; File my_hosts looks like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mac1 slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mac2 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The orted is definitely on my path on both machines. Any idea?  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Help is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; greatly appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm guessing that the issue is with your shell configuration.  mpirun
</span><br>
<span class="quotelev2">&gt;&gt; starts the orted on the remote node through rsh/ssh, which will start
</span><br>
<span class="quotelev2">&gt;&gt; a non-login shell on the remote node.  Unfortunately, the set of
</span><br>
<span class="quotelev2">&gt;&gt; dotfiles evaluated when a non-login shell is different than when
</span><br>
<span class="quotelev2">&gt;&gt; starting a login shell.  The easiest way to tell if this is the issue
</span><br>
<span class="quotelev2">&gt;&gt; is to check whether orted is in your path when started in a non-login
</span><br>
<span class="quotelev2">&gt;&gt; shell with a command like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    ssh remote_host which orted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More information on how to configure your particular shell for use
</span><br>
<span class="quotelev2">&gt;&gt; with Open MPI can be found in our FAQ at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0754.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>In reply to:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0759.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Reply:</strong> <a href="0759.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
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
