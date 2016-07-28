<?
$subject_val = "Re: [OMPI users] sm btl choices";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  1 04:51:25 2010" -->
<!-- isoreceived="20100301095125" -->
<!-- sent="Mon, 1 Mar 2010 02:51:12 -0700" -->
<!-- isosent="20100301095112" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sm btl choices" -->
<!-- id="14F280E3-B9D9-40F1-8D73-B8C18FB11757_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B8B7DDE.5010301_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] sm btl choices<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-01 04:51:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12186.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12184.php">David Turner: "[OMPI users] sm btl choices"</a>
<li><strong>In reply to:</strong> <a href="12184.php">David Turner: "[OMPI users] sm btl choices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12190.php">David Turner: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Reply:</strong> <a href="12190.php">David Turner: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Reply:</strong> <a href="12192.php">David Turner: "Re: [OMPI users] sm btl choices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which version of OMPI are you using? We know that the 1.2 series was unreliable about removing the session directories, but 1.3 and above appear to be quite good about it. If you are having problems with the 1.3 or 1.4 series, I would definitely like to know about it.
<br>
<p>When I was at LANL, I ran a number of tests in exactly this configuration. While the sm btl did provide some performance advantage, it wasn't very much (the bandwidth was only about 10% greater, and the latency wasn't all that different either). I set the default configuration for users to include sm as 10% isn't something to sneer at, but you could disable it without an enormous impact.
<br>
<p>Another option would be to run an epilog that hammers the session directory. That's what LANL does, even though we didn't see much trouble with cleanup starting with the 1.3 series (still have a bunch of users stuck on 1.2). Depending on what environment you are running, you might contact folks there and get a copy of their epilog script.
<br>
<p><p>On Mar 1, 2010, at 1:42 AM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running on a large cluster of 8-core nodes.  I understand
</span><br>
<span class="quotelev1">&gt; that the SM BTL is a &quot;good thing&quot;.  But I'm curious about
</span><br>
<span class="quotelev1">&gt; its use of memory-mapped files.  I believe these files will
</span><br>
<span class="quotelev1">&gt; be in $TMPDIR, which defaults to /tmp.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In our cluster, the compute nodes are stateless, so /tmp
</span><br>
<span class="quotelev1">&gt; is actually in RAM.  Keeping memory-mapped &quot;files&quot; in
</span><br>
<span class="quotelev1">&gt; memory seems kind of circular, although I know little
</span><br>
<span class="quotelev1">&gt; about these things.  A bigger problem is that it appears
</span><br>
<span class="quotelev1">&gt; OMPI does not remove the files upon completion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another option is to redefine $TMPDIR to point to a
</span><br>
<span class="quotelev1">&gt; &quot;real&quot; file system.  In our cluster, all the available
</span><br>
<span class="quotelev1">&gt; file systems are accessed over the IB fabric.  So it
</span><br>
<span class="quotelev1">&gt; seems that there will be IB traffic, even though the
</span><br>
<span class="quotelev1">&gt; point of the SM BTL is to avoid this traffic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given the above two constraints, might it just be
</span><br>
<span class="quotelev1">&gt; better to disable the SM BTL entirely, and use the
</span><br>
<span class="quotelev1">&gt; IB BTL even within a node?  Of course, the &quot;self&quot;
</span><br>
<span class="quotelev1">&gt; BTL should still be used if appropriate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts clarifying these issues would be
</span><br>
<span class="quotelev1">&gt; greatly appreciated.  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<li><strong>Next message:</strong> <a href="12186.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12184.php">David Turner: "[OMPI users] sm btl choices"</a>
<li><strong>In reply to:</strong> <a href="12184.php">David Turner: "[OMPI users] sm btl choices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12190.php">David Turner: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Reply:</strong> <a href="12190.php">David Turner: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Reply:</strong> <a href="12192.php">David Turner: "Re: [OMPI users] sm btl choices"</a>
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
