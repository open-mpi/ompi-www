<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 07:02:27 2007" -->
<!-- isoreceived="20071001110227" -->
<!-- sent="Mon, 1 Oct 2007 13:02:21 +0200 (CEST)" -->
<!-- isosent="20071001110221" -->
<!-- name="Torje Henriksen" -->
<!-- email="torjeh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rank to host mapping" -->
<!-- id="Pine.LNX.4.63.0710011237590.19292_at_lgserv3.stud.cs.uit.no" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071001103309.GN1707_at_mv.qlogic.com" -->
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
<strong>Date:</strong> 2007-10-01 07:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4115.php">Amit Kumar Saha: "[OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>In reply to:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4116.php">Tim Prins: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Reply:</strong> <a href="4116.php">Tim Prins: "Re: [OMPI users] Rank to host mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Specifying nodes several times in the hostfile or with the --host 
<br>
parameter seems to just add up the number of slots availible for the 
<br>
given node. It doesn't seem to affect the mapping of the ranks. I think 
<br>
this is due to how the hostfile is read into the structure that holds this 
<br>
information in the source code.
<br>
<p>Adding the host several times to the hostfile was the first thing I tried, 
<br>
and I've also gotten that suggestion from others, so it might seem that it 
<br>
would make sense to make it work that way.
<br>
<p><p>I've hacked the source to be able to take a ranks-parameter in the 
<br>
hostfile like this:
<br>
<p>node0 ranks=0,1,3
<br>
node1 ranks=2,4,5
<br>
<p>so I guess it's not a problem any more, but I would love to know if there 
<br>
is a way of doing it without changing the source code.
<br>
<p><p>You're very right about the unix scripting part. It makes sense to create 
<br>
the hostfile this way.
<br>
<p><p>-Torje
<br>
<p>On Mon, 1 Oct 2007, Christian Bell wrote:
<br>
<p><span class="quotelev1">&gt; How about a hostfile such as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat -n ~/tmp/hostfile
</span><br>
<span class="quotelev1">&gt;     1  node0
</span><br>
<span class="quotelev1">&gt;     2  node0
</span><br>
<span class="quotelev1">&gt;     3  node1
</span><br>
<span class="quotelev1">&gt;     4  node0
</span><br>
<span class="quotelev1">&gt;     5  node1
</span><br>
<span class="quotelev1">&gt;     6  node1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like the function to express the mapping is not anything simple.  If it's
</span><br>
<span class="quotelev1">&gt; an expressible function but too complicated for open mpi, you'll have to make
</span><br>
<span class="quotelev1">&gt; your own script to generate the function.  This shouldn't be hard to do with
</span><br>
<span class="quotelev1">&gt; any standard unix scripting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	. . christian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 01 Oct 2007, Torje Henriksen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh man, sorry about that, and thanks for the fast response.
</span><br>
<span class="quotelev2">&gt;&gt; Let me try again, please :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to manually specify what ranks should run on what node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is an example of a mapping that I can't seem to be able to do, since
</span><br>
<span class="quotelev2">&gt;&gt; it isn't a round-robin type of mapping.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hosts ranks
</span><br>
<span class="quotelev2">&gt;&gt; ===========
</span><br>
<span class="quotelev2">&gt;&gt; node0 0,1,3
</span><br>
<span class="quotelev2">&gt;&gt; node1 2,4,5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No matter what I do, I either get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node0: 0,1,2
</span><br>
<span class="quotelev2">&gt;&gt; node1: 3,4,5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node0: 0,2,4
</span><br>
<span class="quotelev2">&gt;&gt; node1: 1,3,5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope I got it right this time, and thank you again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Torje
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 1 Oct 2007, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hosts ranks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0 1,2,4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node1 3,4,6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess there must be a typo:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can't assign one rank (4) to two nodes....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And ranks start from 0 not from 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check this site,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there might be some inforegarding your problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; christian.bell_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (QLogic Host Solutions Group, formerly Pathscale)
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
<li><strong>Next message:</strong> <a href="4115.php">Amit Kumar Saha: "[OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>In reply to:</strong> <a href="4113.php">Christian Bell: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4116.php">Tim Prins: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Reply:</strong> <a href="4116.php">Tim Prins: "Re: [OMPI users] Rank to host mapping"</a>
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
