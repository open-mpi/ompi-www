<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 05:50:20 2007" -->
<!-- isoreceived="20071001095020" -->
<!-- sent="Mon, 1 Oct 2007 11:50:15 +0200 (CEST)" -->
<!-- isosent="20071001095015" -->
<!-- name="Torje Henriksen" -->
<!-- email="torjeh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rank to host mapping" -->
<!-- id="Pine.LNX.4.63.0710011121450.19292_at_lgserv3.stud.cs.uit.no" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0710010017t7c0cbefem4cf1e1551ae04a76_at_mail.gmail.com" -->
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
<strong>From:</strong> Torje Henriksen (<em>torjeh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 05:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4111.php">Gleb Natapov: "Re: [OMPI users] Multiple threads"</a>
<li><strong>In reply to:</strong> <a href="4108.php">jody: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Reply:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh man, sorry about that, and thanks for the fast response.
<br>
Let me try again, please :)
<br>
<p>I want to manually specify what ranks should run on what node.
<br>
<p>Here is an example of a mapping that I can't seem to be able to do, since 
<br>
it isn't a round-robin type of mapping.
<br>
<p>hosts ranks
<br>
===========
<br>
node0 0,1,3
<br>
node1 2,4,5
<br>
<p>No matter what I do, I either get
<br>
<p>node0: 0,1,2
<br>
node1: 3,4,5
<br>
<p>or
<br>
<p>node0: 0,2,4
<br>
node1: 1,3,5
<br>
<p><p>Hope I got it right this time, and thank you again.
<br>
<p>-Torje
<br>
<p>On Mon, 1 Oct 2007, jody wrote:
<br>
<p><span class="quotelev2">&gt;&gt; hosts ranks
</span><br>
<span class="quotelev2">&gt;&gt; ===========
</span><br>
<span class="quotelev2">&gt;&gt; node0 1,2,4
</span><br>
<span class="quotelev2">&gt;&gt; node1 3,4,6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess there must be a typo:
</span><br>
<span class="quotelev1">&gt; You can't assign one rank (4) to two nodes....
</span><br>
<span class="quotelev1">&gt; And ranks start from 0 not from 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check this site,
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev1">&gt; there might be some inforegarding your problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4111.php">Gleb Natapov: "Re: [OMPI users] Multiple threads"</a>
<li><strong>In reply to:</strong> <a href="4108.php">jody: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Reply:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
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
