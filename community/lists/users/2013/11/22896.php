<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  2 03:40:52 2013" -->
<!-- isoreceived="20131102074052" -->
<!-- sent="Sat, 2 Nov 2013 13:10:52 +0530" -->
<!-- isosent="20131102074052" -->
<!-- name="San B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="CAC2jn-T9UKfsLFR6W_jyDFs-GHmx99gyd2AAfd+-FEnei_23+Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="56321213-537B-4D66-BD95-00F9A5E354A9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> San B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-02 03:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22897.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22895.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22886.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22897.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22897.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes MM...  But here a single node has 16cores not 64 cores.
<br>
The 1st two jobs were with OMPI-1.4.5.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 cores of single node - 3692.403
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 cores on two nodes (8 cores per node) - 12338.809
<br>
<p>The 1st two jobs were with OMPI-1.6.5.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 cores of single node - 3547.879
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 cores on two nodes (8 cores per node) - 5527.320
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As others said, due to shared memory communication the single node
<br>
job is running faster, but I was expecting a slight difference between 1 &amp;
<br>
2 nodes - which is taking 60% more time here.
<br>
<p><p><p>On Thu, Oct 31, 2013 at 8:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, though the degree of impact obviously depends on the messaging
</span><br>
<span class="quotelev1">&gt; pattern of the app.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2013, at 2:50 AM, MM &lt;finjulhich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, by this you mean, with the same total number of nodes, for e.g.
</span><br>
<span class="quotelev1">&gt; 64 process on 1 node using shared mem, vs 64 processes spread over 2 nodes
</span><br>
<span class="quotelev1">&gt; (32 each for e.g.)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 29 October 2013 14:37, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As someone previously noted, apps will always run slower on multiple
</span><br>
<span class="quotelev2">&gt;&gt; nodes vs everything on a single node due to the shared memory vs IB
</span><br>
<span class="quotelev2">&gt;&gt; differences. Nothing you can do about that one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22897.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22895.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22886.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22897.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22897.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
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
