<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 06:33:13 2007" -->
<!-- isoreceived="20071001103313" -->
<!-- sent="Mon, 1 Oct 2007 03:33:09 -0700" -->
<!-- isosent="20071001103309" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rank to host mapping" -->
<!-- id="20071001103309.GN1707_at_mv.qlogic.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.LNX.4.63.0710011121450.19292_at_lgserv3.stud.cs.uit.no" -->
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
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 06:33:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4112.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>In reply to:</strong> <a href="4112.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Reply:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about a hostfile such as
<br>
<p>% cat -n ~/tmp/hostfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1  node0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2  node0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3  node1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4  node0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5  node1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  node1
<br>
<p>Looks like the function to express the mapping is not anything simple.  If it's
<br>
an expressible function but too complicated for open mpi, you'll have to make
<br>
your own script to generate the function.  This shouldn't be hard to do with
<br>
any standard unix scripting.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. . christian
<br>
<p>On Mon, 01 Oct 2007, Torje Henriksen wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh man, sorry about that, and thanks for the fast response.
</span><br>
<span class="quotelev1">&gt; Let me try again, please :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to manually specify what ranks should run on what node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an example of a mapping that I can't seem to be able to do, since 
</span><br>
<span class="quotelev1">&gt; it isn't a round-robin type of mapping.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hosts ranks
</span><br>
<span class="quotelev1">&gt; ===========
</span><br>
<span class="quotelev1">&gt; node0 0,1,3
</span><br>
<span class="quotelev1">&gt; node1 2,4,5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No matter what I do, I either get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0: 0,1,2
</span><br>
<span class="quotelev1">&gt; node1: 3,4,5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0: 0,2,4
</span><br>
<span class="quotelev1">&gt; node1: 1,3,5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope I got it right this time, and thank you again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Torje
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 1 Oct 2007, jody wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hosts ranks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===========
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node0 1,2,4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node1 3,4,6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess there must be a typo:
</span><br>
<span class="quotelev2">&gt; &gt; You can't assign one rank (4) to two nodes....
</span><br>
<span class="quotelev2">&gt; &gt; And ranks start from 0 not from 1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Check this site,
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev2">&gt; &gt; there might be some inforegarding your problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
christian.bell_at_[hidden]
(QLogic Host Solutions Group, formerly Pathscale)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4112.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>In reply to:</strong> <a href="4112.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Reply:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
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
