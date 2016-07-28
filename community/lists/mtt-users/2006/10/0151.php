<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 17:41:57 2006" -->
<!-- isoreceived="20061018214157" -->
<!-- sent="Wed, 18 Oct 2006 17:41:51 -0400" -->
<!-- isosent="20061018214151" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Bproc support in MTT" -->
<!-- id="20061018214151.GD21959_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6.2.3.4.2.20061018091951.02260fb8_at_cic-mail.lanl.gov" -->
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
<strong>Date:</strong> 2006-10-18 17:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<li><strong>In reply to:</strong> <a href="0147.php">James W. Barker: "[MTT users] Bproc support in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0152.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct/18/2006 09:28:01AM, James W. Barker wrote:
<br>
<span class="quotelev1">&gt; Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In an email exchange with Jeff Squyres regarding setting the number 
</span><br>
<span class="quotelev1">&gt; of processors on a Bproc system the following statement was made:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you running under bproc or some other scheduler?  Right now, MTT 
</span><br>
<span class="quotelev1">&gt; understands SLURM, Torque, and LoadLeveler.  If you're running under 
</span><br>
<span class="quotelev1">&gt; Bproc, we can easily add support for it into MTT (I'll need some 
</span><br>
<span class="quotelev1">&gt; information from you since I don't have any BProc systems myself).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff went on to say:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ethan Mallove is the engineer at Sun who is heading up most of the 
</span><br>
<span class="quotelev1">&gt; MTT efforts these days; the mails go to all of us, so he can reply 
</span><br>
<span class="quotelev1">&gt; even when I'm unavailable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I am asking what information do you need from me to add Bproc 
</span><br>
<span class="quotelev1">&gt; support to MTT?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Are NODES and NODELIST the only env vars that BProc uses (I
<br>
gleaned this info from
<br>
<a href="http://asci-training.lanl.gov/BProc/">http://asci-training.lanl.gov/BProc/</a>)?
<br>
<p>MTT is set up to detect environment variables and hostfiles
<br>
used by Slurm, PBS, N1GE, and LoadLeveler and set a max
<br>
value for -np based on those env vars.  While we add the
<br>
smarts to MTT to do that for BProc, you could also hardcode
<br>
the -np value (e.g., 2) in your ini's &quot;MPI Details&quot; section
<br>
like so:
<br>
<p>exec = mpirun @hosts@ -np 2 --prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jim Barker
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<li><strong>In reply to:</strong> <a href="0147.php">James W. Barker: "[MTT users] Bproc support in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0152.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
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
