<?
$subject_val = "Re: [OMPI users] Setting bind-to none as default via environment?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 12:52:21 2015" -->
<!-- isoreceived="20151103175221" -->
<!-- sent="Tue, 03 Nov 2015 17:52:16 +0000" -->
<!-- isosent="20151103175216" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting bind-to none as default via environment?" -->
<!-- id="87h9l3otrj.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="5638E16F.4060209_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting bind-to none as default via environment?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-03 12:52:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27981.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>In reply to:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; No problem.  It wasn't much of a delay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The scenario involves a combination of MPI and OpenMP (or other
</span><br>
<span class="quotelev1">&gt; threading scheme).  Basically, the software will launch one or more
</span><br>
<span class="quotelev1">&gt; processes via MPI, which then spawn threads to do the work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What we've been seeing is that, without something like '--bind-to none'
</span><br>
<span class="quotelev1">&gt; or similar, those threads end up being pinned to the same processor as
</span><br>
<span class="quotelev1">&gt; the process that spawned them.
</span><br>
<p>The default binding is supposed to be to sockets, as --report-bindings
<br>
should show.  Otherwise see another message I just posted to for an
<br>
empirical test (and possibly examples in the tutorials referenced -- I
<br>
don't remember).
<br>
<p><span class="quotelev1">&gt; We're okay with a bind=none, since we already have cgroups in place to
</span><br>
<span class="quotelev1">&gt; constrain the user to the resources they request.  We might get more
</span><br>
<span class="quotelev1">&gt; process/thread migration between processors (but within the cgroup) than
</span><br>
<span class="quotelev1">&gt; we would like, but that's still probably acceptable in this scenario.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there's a better solution, we'd love to hear it.
</span><br>
<p>--cpus-per-proc, or whatever the non-deprecated version is in mpirun(1).
<br>
[You needed --loadbalance in OMPI 1.6 to make that work.]
<br>
<p>You might also like to supply environment variables to get the OpenMP
<br>
runtime to DTRT for thread affinity, if it doesn't; there isn't an OMPI
<br>
mechanism for that but you can do it with a wrapper or simple LD_PRELOAD
<br>
library.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27981.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>In reply to:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
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
