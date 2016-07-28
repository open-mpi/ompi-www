<?
$subject_val = "Re: [OMPI users] launching the mpi runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 16:19:12 2010" -->
<!-- isoreceived="20101129211912" -->
<!-- sent="Mon, 29 Nov 2010 16:19:06 -0500" -->
<!-- isosent="20101129211906" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] launching the mpi runtime" -->
<!-- id="65F2422C-D48D-493A-B679-E9AF14CA63B6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101123083451.11036_at_web001.roc2.bluetie.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] launching the mpi runtime<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 16:19:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14924.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14922.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>In reply to:</strong> <a href="14875.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14924.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 23, 2010, at 8:34 AM, Hicham Mouline wrote:
<br>
<p><span class="quotelev2">&gt;&gt; MPI doesn't necessarily mean SPMD -- you can certainly have the GUI call MPI_INIT and then call MPI_COMM_SPAWN to launch a different &gt;executable to do the compute working stuff. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is confusing to me.
</span><br>
<span class="quotelev1">&gt; If the GUI does that, will the GUI process (running on windows) be able to spawn mpi processes on separate linux boxes and &quot;MPI talk&quot; to them using the intercommunicator returned?
</span><br>
<p>Sorry for the delayed reply -- SC10 and the US holiday got in the way.
<br>
<p>All I mean here is that your MPI job doesn't have to consist of a single executable.  You can have a GUI front-end application that MPI_COMM_SPAWN's non-GUI worker processes on the back-end nodes.
<br>
<p>The point of MPI_COMM_SPAWN is that you can spawn some other MPI processes and get an intercommuicator back that you can use for normal MPI communications.  To be clear, if your GUI calls MPI_COMM_SPAWN to launch non-GUI &quot;worker&quot; executable on the compute nodes, then you can use the intercommunicator that is returned via MPI_COMM_SPAWN to MPI_SEND / MPI_RECV / etc. with the new processes.  The new processes will need to call MPI_COMM_GET_PARENT to get the intercommunicator that is shared with the parent process(es).
<br>
<p>Make sense?  Read through the MPI spec section on &quot;dynamic processes&quot; for more details.
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
<li><strong>Next message:</strong> <a href="14924.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14922.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>In reply to:</strong> <a href="14875.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14924.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
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
