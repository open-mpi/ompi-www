<?
$subject_val = "Re: [OMPI users] sm btl choices";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  1 10:41:32 2010" -->
<!-- isoreceived="20100301154132" -->
<!-- sent="Mon, 01 Mar 2010 07:41:26 -0800" -->
<!-- isosent="20100301154126" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sm btl choices" -->
<!-- id="4B8BE026.5000401_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="14F280E3-B9D9-40F1-8D73-B8C18FB11757_at_open-mpi.org" -->
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
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-01 10:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12191.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Previous message:</strong> <a href="12189.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="12185.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12191.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Reply:</strong> <a href="12191.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/1/10 1:51 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Which version of OMPI are you using? We know that the 1.2 series was unreliable about removing the session directories, but 1.3 and above appear to be quite good about it. If you are having problems with the 1.3 or 1.4 series, I would definitely like to know about it.
</span><br>
<p>Oops; sorry!  OMPI 1.4.1, compiled with PGI 10.0 compilers,
<br>
running on Scientific Linux 5.4, ofed 1.4.2.
<br>
<p>The session directories are *frequently* left behind.  I have
<br>
not really tried to characterize under what circumstances they
<br>
are removed. But please confirm:  they *should* be removed by
<br>
OMPI.
<br>
<p><span class="quotelev1">&gt; When I was at LANL, I ran a number of tests in exactly this configuration. While the sm btl did provide some performance advantage, it wasn't very much (the bandwidth was only about 10% greater, and the latency wasn't all that different either). I set the default configuration for users to include sm as 10% isn't something to sneer at, but you could disable it without an enormous impact.
</span><br>
<p>I'd prefer to provide as much performance as possible, also.
<br>
<p><span class="quotelev1">&gt; Another option would be to run an epilog that hammers the session directory. That's what LANL does, even though we didn't see much trouble with cleanup starting with the 1.3 series (still have a bunch of users stuck on 1.2). Depending on what environment you are running, you might contact folks there and get a copy of their epilog script.
</span><br>
<p>Yes, we are already planning our prologues and epilogues, just
<br>
haven't implemented them yet.  Even if I can find and fix a
<br>
reason why OMPI is currently not doing this, we will probably
<br>
do it an epilogue anyway.
<br>
<p>Thanks for your help!
<br>
<p><span class="quotelev1">&gt; On Mar 1, 2010, at 1:42 AM, David Turner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running on a large cluster of 8-core nodes.  I understand
</span><br>
<span class="quotelev2">&gt;&gt; that the SM BTL is a &quot;good thing&quot;.  But I'm curious about
</span><br>
<span class="quotelev2">&gt;&gt; its use of memory-mapped files.  I believe these files will
</span><br>
<span class="quotelev2">&gt;&gt; be in $TMPDIR, which defaults to /tmp.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In our cluster, the compute nodes are stateless, so /tmp
</span><br>
<span class="quotelev2">&gt;&gt; is actually in RAM.  Keeping memory-mapped &quot;files&quot; in
</span><br>
<span class="quotelev2">&gt;&gt; memory seems kind of circular, although I know little
</span><br>
<span class="quotelev2">&gt;&gt; about these things.  A bigger problem is that it appears
</span><br>
<span class="quotelev2">&gt;&gt; OMPI does not remove the files upon completion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another option is to redefine $TMPDIR to point to a
</span><br>
<span class="quotelev2">&gt;&gt; &quot;real&quot; file system.  In our cluster, all the available
</span><br>
<span class="quotelev2">&gt;&gt; file systems are accessed over the IB fabric.  So it
</span><br>
<span class="quotelev2">&gt;&gt; seems that there will be IB traffic, even though the
</span><br>
<span class="quotelev2">&gt;&gt; point of the SM BTL is to avoid this traffic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given the above two constraints, might it just be
</span><br>
<span class="quotelev2">&gt;&gt; better to disable the SM BTL entirely, and use the
</span><br>
<span class="quotelev2">&gt;&gt; IB BTL even within a node?  Of course, the &quot;self&quot;
</span><br>
<span class="quotelev2">&gt;&gt; BTL should still be used if appropriate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts clarifying these issues would be
</span><br>
<span class="quotelev2">&gt;&gt; greatly appreciated.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David Turner
</span><br>
<span class="quotelev2">&gt;&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12191.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Previous message:</strong> <a href="12189.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="12185.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12191.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Reply:</strong> <a href="12191.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
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
