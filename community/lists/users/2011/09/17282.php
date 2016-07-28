<?
$subject_val = "Re: [OMPI users] Question on MPI_Ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 07:09:48 2011" -->
<!-- isoreceived="20110914110948" -->
<!-- sent="Wed, 14 Sep 2011 07:09:36 -0400" -->
<!-- isosent="20110914110936" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPI_Ssend" -->
<!-- id="F8B7EB21-2DEC-4F97-9420-802712521343_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1315992495.1355.YahooMailNeo_at_web29618.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on MPI_Ssend<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 07:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah!  Are you using MPI-thread-multiple?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Sep 14, 2011, at 5:28 AM, &quot;devendra rai&quot; &lt;rai.devendra_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello MPI Forum, Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, the problem is not with incorrect arguments with MPI_Ssend(...) and/or MPI_Recv(...).  I confirmed this. Also, if there were any obvious programming and logical errors, I would never have any successful run. In fact, I am having some  runs which go through successfully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem seems to be random, and therefore, I am finding it hard to debug. I am using Open MPI v. 1.4.3, on Linux kernel 2.6.37.6-0.7. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am also using tags, in addition to normal sender node and receiver nodes. I am using integers for tags, and none of the tags are more than 1000. I am also running MPI_Ssends and MPI_Recv within pthreads, and I  believe that it should be okay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the question is, am I stumbling across a bug, or an incorrect MPI installation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, 13 September 2011, 16:13
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Question on MPI_Ssend
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2011, at 8:41 AM, devendra rai wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also, I read the definition of MPI_Ssend(...) that you sent, but then it does not explain why both MPI_Ssend(...) and MPI_Recv(...) are blocked seemingly forever. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, they're blocked *forever*!  Sorry; I didn't get that from your prior description -- I thought you just wanted non-blocking instead of blocking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I notice that such a block happens when MPI_Recv(...) is posted before MPI_Ssend(...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't matter if the receive is posted before the send or the other way around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When blocking sends/receives block forever, it usually means that there's a mismatch in the communicator, tag, or src/dest arguments between the two.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17282/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
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
