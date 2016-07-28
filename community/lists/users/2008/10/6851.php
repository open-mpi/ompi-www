<?
$subject_val = "Re: [OMPI users] Tuned Collective MCA params";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 15:10:45 2008" -->
<!-- isoreceived="20081003191045" -->
<!-- sent="Fri, 3 Oct 2008 15:10:41 -0400 (EDT)" -->
<!-- isosent="20081003191041" -->
<!-- name="kyron_at_[hidden]" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tuned Collective MCA params" -->
<!-- id="59644.142.137.238.135.1223061041.squirrel_at_mail.neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="29F6ED14-BC92-4306-89E1-FCCC27BD1C11_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tuned Collective MCA params<br>
<strong>From:</strong> <a href="mailto:kyron_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Tuned%20Collective%20MCA%20params"><em>kyron_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-10-03 15:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6852.php">Daniel Hansen: "[OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6850.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1.3 and some of the latest 1.2.X versions tuned is the default
</span><br>
<span class="quotelev1">&gt; component for collectives. However, the tuned currently in the trunk
</span><br>
<span class="quotelev1">&gt; are optimized for high performance networks (such as IB or MX), and
</span><br>
<span class="quotelev1">&gt; they do not deliver the best performance on slower devices such as
</span><br>
<span class="quotelev1">&gt; Ethernet.
</span><br>
<p>I forgot to mention the version I am running is 1.2.7. Since I am running
<br>
Ethernet I know I can't expect miracles but I was at least wondering if I
<br>
could expect some performance gain by using Allgather compared to
<br>
Send/Recv, even givent that context.
<br>
<p><span class="quotelev1">&gt; In order to play with the different implementation of allgather you
</span><br>
<span class="quotelev1">&gt; should either on the $(HOME)/.openmpi/mca-params.conf or command line
</span><br>
<span class="quotelev1">&gt; set the following MCA parameters:
</span><br>
<span class="quotelev1">&gt; 1) coll_tuned_use_dynamic_rules to one in order to enable fine grain
</span><br>
<span class="quotelev1">&gt; selection of the algorithms
</span><br>
<p>The decription wasn't too clear about it's usage, thanks.
<br>
<p><span class="quotelev1">&gt; 2) coll_tuned_allgather_algorithm to a value between 0 and 6 (read the
</span><br>
<span class="quotelev1">&gt; output corresponding to this algorithm from 'ompi_info --param coll
</span><br>
<span class="quotelev1">&gt; tuned' once you enabled the dynamic rules).
</span><br>
<p>Since `ompi_info --param coll tuned|grep coll_tuned_allgather_algorithm`
<br>
returns null, I'll assume it's not part of 1.2.7. I'll dig into the code
<br>
to see what my options are, otherwise I'll be forced to install 1.3 ;)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will allow you to select a specific algorithm for the allgather.
</span><br>
<span class="quotelev1">&gt; You can further tuned it, by playing with the fanout (in case of trees
</span><br>
<span class="quotelev1">&gt; topologies), and with the segment size (for the pipelined ones).
</span><br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2008, at 8:48 AM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I am currently profiling a simple case where I replace multiple S/
</span><br>
<span class="quotelev2">&gt;&gt; R calls with Allgather calls and it would _seem_ the simple S/R
</span><br>
<span class="quotelev2">&gt;&gt; calls are faster. Now, *before* I come to any conclusion on this,
</span><br>
<span class="quotelev2">&gt;&gt; one of the pieces I am missing is more details on how /if/when the
</span><br>
<span class="quotelev2">&gt;&gt; tuned coll MCA is selected. In other words, can I assume the tuned
</span><br>
<span class="quotelev2">&gt;&gt; versions are used by default? I skimmed through the well documented
</span><br>
<span class="quotelev2">&gt;&gt; source code but before I can even start to analyze the replacement's
</span><br>
<span class="quotelev2">&gt;&gt; impact (in a small cluster), I need to know how and when the tuned
</span><br>
<span class="quotelev2">&gt;&gt; coll MCA is used/selected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6852.php">Daniel Hansen: "[OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6850.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
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
