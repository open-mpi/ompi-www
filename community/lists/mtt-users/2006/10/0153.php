<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 09:58:44 2006" -->
<!-- isoreceived="20061020135844" -->
<!-- sent="Fri, 20 Oct 2006 09:58:32 -0400" -->
<!-- isosent="20061020135832" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Bproc support in MTT" -->
<!-- id="720D0425-A6B1-4730-B570-1E6E0D4CE5E4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061020135106.GH21959_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-20 09:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim --
<br>
<p>It's really not hard to add the &quot;smarts&quot; to MTT for parse NDOES /  
<br>
NODELIST.  Can you send some examples of what they look like?
<br>
<p><p>On Oct 20, 2006, at 9:51 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Jim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not familiar with intel's built-in iteration over an
</span><br>
<span class="quotelev1">&gt; array of -np values. MTT achieves this 'multiplicative'
</span><br>
<span class="quotelev1">&gt; effect via &quot;funclets&quot; in the INI file. E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; np = &amp;pow(2, 0, &amp;log(2, 60))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you would insert the above line in the [Test run: intel]
</span><br>
<span class="quotelev1">&gt; section of the INI file. More on the above &quot;funclet&quot;
</span><br>
<span class="quotelev1">&gt; mechanism in MTT here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview#Funclets">http://svn.open-mpi.org/trac/mtt/wiki/MTTOverview#Funclets</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;... &amp;pow returns an array of values from base^min_exponent
</span><br>
<span class="quotelev1">&gt; to base^max_exponent. So in the above &quot;np&quot; example, ... np
</span><br>
<span class="quotelev1">&gt; would be an array of the following values: 1, 2, 4, 8 16,
</span><br>
<span class="quotelev1">&gt; 32.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct/19/2006 12:07:42PM, James W. Barker wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ethan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe you are correct, $NODES and $NODELIST appear to be the only
</span><br>
<span class="quotelev2">&gt;&gt; environmental variables associated with BProc.  It would be nice if
</span><br>
<span class="quotelev2">&gt;&gt; MTT had the &quot;smarts to ... do that for BProc&quot;.  However, before you
</span><br>
<span class="quotelev2">&gt;&gt; invest any effort in that; how do you currently increase the number
</span><br>
<span class="quotelev2">&gt;&gt; of processors per iteration for tests like the intel test suite?  You
</span><br>
<span class="quotelev2">&gt;&gt; can't simply set -np 2 or -np 32 because the intel test suite was
</span><br>
<span class="quotelev2">&gt;&gt; designed to iterate, squaring the number of processors each time the
</span><br>
<span class="quotelev2">&gt;&gt; suite is executed up to (I think) a maximum of 64 processors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jim Barker
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At 03:41 PM 10/18/2006, you wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Oct/18/2006 09:28:01AM, James W. Barker wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ethan,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In an email exchange with Jeff Squyres regarding setting the number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of processors on a Bproc system the following statement was made:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you running under bproc or some other scheduler?  Right now,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MTT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; understands SLURM, Torque, and LoadLeveler.  If you're running  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; under
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bproc, we can easily add support for it into MTT (I'll need some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information from you since I don't have any BProc systems myself).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff went on to say:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ethan Mallove is the engineer at Sun who is heading up most of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MTT efforts these days; the mails go to all of us, so he can reply
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even when I'm unavailable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I am asking what information do you need from me to add Bproc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support to MTT?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are NODES and NODELIST the only env vars that BProc uses (I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gleaned this info from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://asci-training.lanl.gov/BProc/">http://asci-training.lanl.gov/BProc/</a>)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTT is set up to detect environment variables and hostfiles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used by Slurm, PBS, N1GE, and LoadLeveler and set a max
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value for -np based on those env vars.  While we add the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; smarts to MTT to do that for BProc, you could also hardcode
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the -np value (e.g., 2) in your ini's &quot;MPI Details&quot; section
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exec = mpirun @hosts@ -np 2 --prefix &amp;test_prefix()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jim Barker
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; James W. Barker,  Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer, Computational and Statistical Sciences Division
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Advanced Computing Laboratory - Application Communications and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Performance Research Team
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 505-665-9558
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; James W. Barker,  Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Computer, Computational and Statistical Sciences Division
</span><br>
<span class="quotelev2">&gt;&gt; Advanced Computing Laboratory - Application Communications and
</span><br>
<span class="quotelev2">&gt;&gt; Performance Research Team
</span><br>
<span class="quotelev2">&gt;&gt; 505-665-9558
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<!-- nextthread="start" -->
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
