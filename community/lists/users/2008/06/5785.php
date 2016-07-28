<?
$subject_val = "Re: [OMPI users] Proper way to throw an error to all nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 22:58:17 2008" -->
<!-- isoreceived="20080604025817" -->
<!-- sent="Wed, 04 Jun 2008 13:00:01 +1000" -->
<!-- isosent="20080604030001" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Proper way to throw an error to all nodes?" -->
<!-- id="48460531.1070109_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200806040210.m542A3D9005718_at_sf.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Proper way to throw an error to all nodes?<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 23:00:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5786.php">Mukesh K Srivastava: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Previous message:</strong> <a href="5784.php">Terry Frankcombe: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Maybe in reply to:</strong> <a href="5780.php">8mj6tc902_at_[hidden]: "[OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Reply:</strong> <a href="5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is exactly what MPI_Abort is for.
<br>
<p>David
<br>
<p>Terry Frankcombe wrote:
<br>
<span class="quotelev1">&gt; Calling MPI_Finalize in a single process won't ever do what you want.
</span><br>
<span class="quotelev1">&gt; You need to get all the processes to call MPI_Finalize for the end to be
</span><br>
<span class="quotelev1">&gt; graceful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you need to do is have some sort of special message to tell
</span><br>
<span class="quotelev1">&gt; everyone to die.  In my codes I have a rather dynamic master-slave model
</span><br>
<span class="quotelev1">&gt; with flags being broadcast by the master process to tell the slaves what
</span><br>
<span class="quotelev1">&gt; to expect next, so it's easy for me to send out an &quot;it's all over,
</span><br>
<span class="quotelev1">&gt; please kill yourself&quot; message.  For a more rigid communication pattern
</span><br>
<span class="quotelev1">&gt; you could embed the die message in the data: something like if the first
</span><br>
<span class="quotelev1">&gt; element of the received data is negative, then that's the sign things
</span><br>
<span class="quotelev1">&gt; have gone south and everyone should stop what they're doing and
</span><br>
<span class="quotelev1">&gt; MPI_Finalize.  The details depend on the details of your code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Presumably you could also set something up using tags and message
</span><br>
<span class="quotelev1">&gt; polling.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2008-06-03 at 19:57 +0900, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So I'm working on this program which has many ways it might possibly die
</span><br>
<span class="quotelev2">&gt;&gt; at runtime, but one of them that happens frequently is the user types a
</span><br>
<span class="quotelev2">&gt;&gt; wrong (non-existant) filename on the command prompt. As it is now, the
</span><br>
<span class="quotelev2">&gt;&gt; node looking for the file notices the file doesn't exist and tries to
</span><br>
<span class="quotelev2">&gt;&gt; terminate the program. It tries to call MPI_Finalize(), but the other
</span><br>
<span class="quotelev2">&gt;&gt; nodes are all waiting for a message from the node doing the file
</span><br>
<span class="quotelev2">&gt;&gt; reading, so MPI_Finalize waits forever until the user realizes the job
</span><br>
<span class="quotelev2">&gt;&gt; isn't doing anything and terminates it manually.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, my question is: what's the &quot;correct&quot; graceful way to handle
</span><br>
<span class="quotelev2">&gt;&gt; situations like this? Is there some MPI function which can basically
</span><br>
<span class="quotelev2">&gt;&gt; throw an exception to all other nodes telling them bail out now? Or is
</span><br>
<span class="quotelev2">&gt;&gt; correct behaviour just to have the node that spotted the error die
</span><br>
<span class="quotelev2">&gt;&gt; quietly and wait for the others to notice?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any suggestions!
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5786.php">Mukesh K Srivastava: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Previous message:</strong> <a href="5784.php">Terry Frankcombe: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Maybe in reply to:</strong> <a href="5780.php">8mj6tc902_at_[hidden]: "[OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Reply:</strong> <a href="5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
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
