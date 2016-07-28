<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 09:51:15 2006" -->
<!-- isoreceived="20061020135115" -->
<!-- sent="Fri, 20 Oct 2006 09:51:06 -0400" -->
<!-- isosent="20061020135106" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Bproc support in MTT" -->
<!-- id="20061020135106.GH21959_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6.2.3.4.2.20061019120009.0226aa48_at_cic-mail.lanl.gov" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-20 09:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Maybe in reply to:</strong> <a href="0147.php">James W. Barker: "[MTT users] Bproc support in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Reply:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT users] Bproc support in MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim,
<br>
<p>I'm not familiar with intel's built-in iteration over an 
<br>
array of -np values. MTT achieves this 'multiplicative'
<br>
effect via &quot;funclets&quot; in the INI file. E.g., 
<br>
<p>np = &amp;pow(2, 0, &amp;log(2, 60))
<br>
<p>So you would insert the above line in the [Test run: intel]
<br>
section of the INI file. More on the above &quot;funclet&quot;
<br>
mechanism in MTT here:
<br>
<p><a href="http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview#Funclets">http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview#Funclets</a>
<br>
<p>&quot;... &amp;pow returns an array of values from base^min_exponent
<br>
to base^max_exponent. So in the above &quot;np&quot; example, ... np
<br>
would be an array of the following values: 1, 2, 4, 8 16,
<br>
32.&quot;
<br>
<p>-Ethan
<br>
<p><p>On Thu, Oct/19/2006 12:07:42PM, James W. Barker wrote:
<br>
<span class="quotelev1">&gt; Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe you are correct, $NODES and $NODELIST appear to be the only 
</span><br>
<span class="quotelev1">&gt; environmental variables associated with BProc.  It would be nice if 
</span><br>
<span class="quotelev1">&gt; MTT had the &quot;smarts to ... do that for BProc&quot;.  However, before you 
</span><br>
<span class="quotelev1">&gt; invest any effort in that; how do you currently increase the number 
</span><br>
<span class="quotelev1">&gt; of processors per iteration for tests like the intel test suite?  You 
</span><br>
<span class="quotelev1">&gt; can't simply set -np 2 or -np 32 because the intel test suite was 
</span><br>
<span class="quotelev1">&gt; designed to iterate, squaring the number of processors each time the 
</span><br>
<span class="quotelev1">&gt; suite is executed up to (I think) a maximum of 64 processors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jim Barker
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 03:41 PM 10/18/2006, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On Wed, Oct/18/2006 09:28:01AM, James W. Barker wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ethan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In an email exchange with Jeff Squyres regarding setting the number
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of processors on a Bproc system the following statement was made:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Are you running under bproc or some other scheduler?  Right now, MTT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; understands SLURM, Torque, and LoadLeveler.  If you're running under
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bproc, we can easily add support for it into MTT (I'll need some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; information from you since I don't have any BProc systems myself).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff went on to say:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ethan Mallove is the engineer at Sun who is heading up most of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MTT efforts these days; the mails go to all of us, so he can reply
</span><br>
<span class="quotelev3">&gt; &gt;&gt; even when I'm unavailable.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I am asking what information do you need from me to add Bproc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; support to MTT?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Are NODES and NODELIST the only env vars that BProc uses (I
</span><br>
<span class="quotelev2">&gt; &gt;gleaned this info from
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://asci-training.lanl.gov/BProc/">http://asci-training.lanl.gov/BProc/</a>)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;MTT is set up to detect environment variables and hostfiles
</span><br>
<span class="quotelev2">&gt; &gt;used by Slurm, PBS, N1GE, and LoadLeveler and set a max
</span><br>
<span class="quotelev2">&gt; &gt;value for -np based on those env vars.  While we add the
</span><br>
<span class="quotelev2">&gt; &gt;smarts to MTT to do that for BProc, you could also hardcode
</span><br>
<span class="quotelev2">&gt; &gt;the -np value (e.g., 2) in your ini's &quot;MPI Details&quot; section
</span><br>
<span class="quotelev2">&gt; &gt;like so:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;exec = mpirun @hosts@ -np 2 --prefix &amp;test_prefix() 
</span><br>
<span class="quotelev2">&gt; &gt;&amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jim Barker
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; James W. Barker,  Ph.D.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer, Computational and Statistical Sciences Division
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Advanced Computing Laboratory - Application Communications and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Performance Research Team
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 505-665-9558
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; James W. Barker,  Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Computer, Computational and Statistical Sciences Division
</span><br>
<span class="quotelev1">&gt; Advanced Computing Laboratory - Application Communications and 
</span><br>
<span class="quotelev1">&gt; Performance Research Team
</span><br>
<span class="quotelev1">&gt; 505-665-9558 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Maybe in reply to:</strong> <a href="0147.php">James W. Barker: "[MTT users] Bproc support in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Reply:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT users] Bproc support in MTT"</a>
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
