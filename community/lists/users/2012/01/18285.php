<?
$subject_val = "Re: [OMPI users] OpenMPI: How many connections?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 16:38:57 2012" -->
<!-- isoreceived="20120126213857" -->
<!-- sent="Thu, 26 Jan 2012 16:38:52 -0500" -->
<!-- isosent="20120126213852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI: How many connections?" -->
<!-- id="0771AB89-A0F0-4DF1-9A68-5D448C511757_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1327444486.27788.YahooMailNeo_at_web29601.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI: How many connections?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 16:38:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18286.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18284.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>In reply to:</strong> <a href="18261.php">devendra rai: "[OMPI users] OpenMPI: How many connections?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18299.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Reply:</strong> <a href="18299.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 24, 2012, at 5:34 PM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to find out how many separate connections are opened by MPI as messages are sent. Basically, I have threaded-MPI calls to a bunch of different MPI processes (who, in turn have threaded MPI calls). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The point is, with every thread added, are new ports opened (even if the sender-receiver pairs already have a connection between them)?
</span><br>
<p>In Open MPI: no.  The underlying connections are independent of how many threads you have.
<br>
<p><span class="quotelev1">&gt; Is there any way to find out? I went through MPI APIs, and the closest thing I found was related to cartographic information. This is not sufficient, since this only tells me the logical connections (or does it)?
</span><br>
<p>MPI does not have a user-level concept of a connection.  You send a message, a miracle occurs, and the message is received on the other side.  MPI doesn't say anything about how it got there (e.g., it may have even been routed through some other process).
<br>
<p><span class="quotelev1">&gt; Reading Open MPI FAQ, I thought adding &quot;--mca btl self,sm,tcp --mca btl_base_verbose 30 -display-map&quot; to mpirun would help. But I am not getting what I need. Basically, I want to know how many ports each process is accessing (reading as well as writing). 
</span><br>
<p>For Open MPI's TCP implementation, it's basically one TCP socket per peer (plus a few other utility fd's).  But TCP sockets are only opened lazily, meaning that we won't open the socket until you actually send to a peer.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18286.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18284.php">Josh Hursey: "Re: [OMPI users] Strange recursive &quot;no&quot; error message when compiling 1.5 series with fault tolerance enabled"</a>
<li><strong>In reply to:</strong> <a href="18261.php">devendra rai: "[OMPI users] OpenMPI: How many connections?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18299.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Reply:</strong> <a href="18299.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI: How many connections?"</a>
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
