<?
$subject_val = "Re: [OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 11 02:45:32 2011" -->
<!-- isoreceived="20110111074532" -->
<!-- sent="Tue, 11 Jan 2011 08:38:45 +0100 (CET)" -->
<!-- isosent="20110111073845" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question" -->
<!-- id="201101110738.p0B7cjZ5024760_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Newbie question" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie question<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-11 02:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15336.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] [Open MPI] #2681: ompi-server publish name broken in 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Maybe in reply to:</strong> <a href="15332.php">Tena Sakai: "[OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15341.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15341.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; What I want is to spawn a bunch of R slaves to other machines on
</span><br>
<span class="quotelev1">&gt; the network. I can spawn R slaves, as many as I like, to the local
</span><br>
<span class="quotelev1">&gt; machine, but I don t know how to do this with machines on the
</span><br>
<span class="quotelev1">&gt; network.  That s what hosts parameter of mpi.spawn.Rslaves()
</span><br>
<span class="quotelev1">&gt; enables me to do, I think.  If I can do that, then Rmpi has
</span><br>
<span class="quotelev1">&gt; function(s) to send command to each of the spawned slaves.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is how can I get open MPI to give me those hosts
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<p>I am not quite sure if I understood your question, but when you
<br>
read &quot;man MPI_Comm_spawn&quot; you can find the parameter &quot;MPI_Info info&quot;
<br>
which allows to specify where and how to start processes. &quot;man
<br>
MPI_Info_create&quot; shows you how to create an info object and &quot;man
<br>
MPI_Info_set&quot; how to add a key/value pair. &quot;man orte_hosts&quot; shows
<br>
you how you can build a hostfile. I do not know how to do these
<br>
things in your language R but hopefully the information of the
<br>
manual pages helps to solve your problem.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15336.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] [Open MPI] #2681: ompi-server publish name broken in 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Maybe in reply to:</strong> <a href="15332.php">Tena Sakai: "[OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15341.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15341.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
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
