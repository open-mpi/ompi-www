<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  7 22:34:21 2010" -->
<!-- isoreceived="20100808023421" -->
<!-- sent="Sat, 7 Aug 2010 19:34:16 -0700" -->
<!-- isosent="20100808023416" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="AANLkTinLU+shGx5JoXu+nrV+9zKcwN+FaguhCg7--fdB_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7C358508-DA6B-480B-98AB-DA43377086D0_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-07 22:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13925.php">Terry Frankcombe: "Re: [OMPI users] Memory allocation error when linking with MPI	libraries"</a>
<li><strong>Previous message:</strong> <a href="13923.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13923.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In particular, intercommunicators
<br>
<p>On 8/7/10, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; You should consider reading about communicators in MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Aurelien Bouteiller, Ph.D.
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory, The University of Tennessee.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Envoy&#233; de mon iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le Aug 7, 2010 &#224; 1:05, Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; a
</span><br>
<span class="quotelev1">&gt; &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I seem to be having a problem with MPI_Bcast.
</span><br>
<span class="quotelev2">&gt;&gt; My massive I/O intensive data movement program must broadcast from n to n
</span><br>
<span class="quotelev2">&gt;&gt; nodes. My problem starts because I require 2 processes per node, a sender
</span><br>
<span class="quotelev2">&gt;&gt; and a receiver and I have implemented these using MPI processes rather
</span><br>
<span class="quotelev2">&gt;&gt; than tackle the complexities of threads on MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Consequently, broadcast and calls like alltoall are not completely
</span><br>
<span class="quotelev2">&gt;&gt; helpful.  The dataset is huge and each node must end up with a complete
</span><br>
<span class="quotelev2">&gt;&gt; copy built by the large number of contributing broadcasts from the sending
</span><br>
<span class="quotelev2">&gt;&gt; nodes.  Network efficiency and run time are paramount.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I don&#146;t want to needlessly broadcast all this data to the sending nodes
</span><br>
<span class="quotelev2">&gt;&gt; and I have a perfectly good MPI program that distributes globally from a
</span><br>
<span class="quotelev2">&gt;&gt; single node (1 to N), I took the unusual decision to start N copies of
</span><br>
<span class="quotelev2">&gt;&gt; this program by spawning the MPI system from the PVM system in an effort
</span><br>
<span class="quotelev2">&gt;&gt; to get my N to N concurrent transfers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the broadcasts running on concurrent MPI environments
</span><br>
<span class="quotelev2">&gt;&gt; collide and cause all but the first process to hang waiting for their
</span><br>
<span class="quotelev2">&gt;&gt; broadcasts.  This theory seems to be confirmed by introducing a sleep of
</span><br>
<span class="quotelev2">&gt;&gt; n-1 seconds before the first MPI_Bcast  call on each node, which results
</span><br>
<span class="quotelev2">&gt;&gt; in the code working perfectly.  (total run time 55 seconds, 3 nodes,
</span><br>
<span class="quotelev2">&gt;&gt; standard TCP stack)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that unlike PVM, OpenMPI implements broadcasts with broadcasts
</span><br>
<span class="quotelev2">&gt;&gt; rather than multicasts.  Can someone confirm this?  Is this a bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any multicast or N to N broadcast where sender processes can
</span><br>
<span class="quotelev2">&gt;&gt; avoid participating when they don&#146;t need to?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Randolph
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
Sent from my mobile device
David Zhang
University of California, San Diego
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13925.php">Terry Frankcombe: "Re: [OMPI users] Memory allocation error when linking with MPI	libraries"</a>
<li><strong>Previous message:</strong> <a href="13923.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13923.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
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
