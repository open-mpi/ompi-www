<?
$subject_val = "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 01:56:25 2011" -->
<!-- isoreceived="20110214065625" -->
<!-- sent="Mon, 14 Feb 2011 07:56:18 +0100" -->
<!-- isosent="20110214065618" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?" -->
<!-- id="4D58D212.6020305_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="55365.28857.qm_at_web110415.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 01:56:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0280.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0281.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/02/2011 07:43, Siew Yin Chan a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     No. Each hwloc-bind command in the mpirun above doesn't know that
</span><br>
<span class="quotelev1">&gt;     there are other hwloc-bind instances on the same machine. All of
</span><br>
<span class="quotelev1">&gt;     them bind their process to all cores in the first socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =&gt; Agree. For socket:0.core:0-3 , hwloc will bind the MPI processes to
</span><br>
<span class="quotelev1">&gt; all cores in the first socket. But how are the individual processes
</span><br>
<span class="quotelev1">&gt; mapped on these cores? Will it be in this order:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0 &#224; core 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 1 &#224; core 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 2 &#224; core 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 3 &#224; core 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or in this *arbitrary* order:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0 &#224; core 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 1 &#224; core 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 2 &#224; core 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 3 &#224; core 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The operating system decides where each process runs (according to the
<br>
binding). It usually has no knowledge of MPI ranks. And I don't think it
<br>
looks at the PID numbers during the scheduling. So it's very likely random.
<br>
<p><p>Please distinguish your replies from the test you quote. Otherwise, it's
<br>
hard to understand where's your reply. I hope I didn't miss anything.
<br>
<p>Brice
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0280.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>In reply to:</strong> <a href="0278.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0281.php">Jeff Squyres: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
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
