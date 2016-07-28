<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 10:41:16 2007" -->
<!-- isoreceived="20071001144116" -->
<!-- sent="Mon, 01 Oct 2007 10:41:18 -0400" -->
<!-- isosent="20071001144118" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rank to host mapping" -->
<!-- id="4701070E.4070602_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.63.0710011237590.19292_at_lgserv3.stud.cs.uit.no" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 10:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4117.php">Si Hammond: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4115.php">Amit Kumar Saha: "[OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So you know this is something that we are working on for the next major 
<br>
release of Open MPI (v 1.3). More details on some of the discussion can 
<br>
be found here:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1023">https://svn.open-mpi.org/trac/ompi/ticket/1023</a>
<br>
<p>Tim
<br>
<p>Torje Henriksen wrote:
<br>
<span class="quotelev1">&gt; Specifying nodes several times in the hostfile or with the --host 
</span><br>
<span class="quotelev1">&gt; parameter seems to just add up the number of slots availible for the 
</span><br>
<span class="quotelev1">&gt; given node. It doesn't seem to affect the mapping of the ranks. I think 
</span><br>
<span class="quotelev1">&gt; this is due to how the hostfile is read into the structure that holds this 
</span><br>
<span class="quotelev1">&gt; information in the source code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding the host several times to the hostfile was the first thing I tried, 
</span><br>
<span class="quotelev1">&gt; and I've also gotten that suggestion from others, so it might seem that it 
</span><br>
<span class="quotelev1">&gt; would make sense to make it work that way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've hacked the source to be able to take a ranks-parameter in the 
</span><br>
<span class="quotelev1">&gt; hostfile like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0 ranks=0,1,3
</span><br>
<span class="quotelev1">&gt; node1 ranks=2,4,5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so I guess it's not a problem any more, but I would love to know if there 
</span><br>
<span class="quotelev1">&gt; is a way of doing it without changing the source code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're very right about the unix scripting part. It makes sense to create 
</span><br>
<span class="quotelev1">&gt; the hostfile this way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Torje
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 1 Oct 2007, Christian Bell wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How about a hostfile such as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % cat -n ~/tmp/hostfile
</span><br>
<span class="quotelev2">&gt;&gt;     1  node0
</span><br>
<span class="quotelev2">&gt;&gt;     2  node0
</span><br>
<span class="quotelev2">&gt;&gt;     3  node1
</span><br>
<span class="quotelev2">&gt;&gt;     4  node0
</span><br>
<span class="quotelev2">&gt;&gt;     5  node1
</span><br>
<span class="quotelev2">&gt;&gt;     6  node1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like the function to express the mapping is not anything simple.  If it's
</span><br>
<span class="quotelev2">&gt;&gt; an expressible function but too complicated for open mpi, you'll have to make
</span><br>
<span class="quotelev2">&gt;&gt; your own script to generate the function.  This shouldn't be hard to do with
</span><br>
<span class="quotelev2">&gt;&gt; any standard unix scripting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	. . christian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 01 Oct 2007, Torje Henriksen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh man, sorry about that, and thanks for the fast response.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me try again, please :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to manually specify what ranks should run on what node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is an example of a mapping that I can't seem to be able to do, since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it isn't a round-robin type of mapping.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hosts ranks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0 0,1,3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node1 2,4,5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No matter what I do, I either get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0: 0,1,2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node1: 3,4,5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0: 0,2,4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node1: 1,3,5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope I got it right this time, and thank you again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Torje
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 1 Oct 2007, jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hosts ranks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===========
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node0 1,2,4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node1 3,4,6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess there must be a typo:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can't assign one rank (4) to two nodes....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And ranks start from 0 not from 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check this site,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there might be some inforegarding your problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; christian.bell_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (QLogic Host Solutions Group, formerly Pathscale)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4117.php">Si Hammond: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4115.php">Amit Kumar Saha: "[OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
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
