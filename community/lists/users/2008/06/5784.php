<?
$subject_val = "Re: [OMPI users] Proper way to throw an error to all nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 22:08:31 2008" -->
<!-- isoreceived="20080604020831" -->
<!-- sent="Wed, 04 Jun 2008 12:08:18 +1000" -->
<!-- isosent="20080604020818" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Proper way to throw an error to all nodes?" -->
<!-- id="1212545298.5461.111.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="28396-35254_at_sneakemail.com" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 22:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5785.php">David Singleton: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Previous message:</strong> <a href="5783.php">Jeff Squyres: "Re: [OMPI users] File download sizes"</a>
<li><strong>In reply to:</strong> <a href="5780.php">8mj6tc902_at_[hidden]: "[OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5785.php">David Singleton: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Calling MPI_Finalize in a single process won't ever do what you want.
<br>
You need to get all the processes to call MPI_Finalize for the end to be
<br>
graceful.
<br>
<p>What you need to do is have some sort of special message to tell
<br>
everyone to die.  In my codes I have a rather dynamic master-slave model
<br>
with flags being broadcast by the master process to tell the slaves what
<br>
to expect next, so it's easy for me to send out an &quot;it's all over,
<br>
please kill yourself&quot; message.  For a more rigid communication pattern
<br>
you could embed the die message in the data: something like if the first
<br>
element of the received data is negative, then that's the sign things
<br>
have gone south and everyone should stop what they're doing and
<br>
MPI_Finalize.  The details depend on the details of your code.
<br>
<p>Presumably you could also set something up using tags and message
<br>
polling.
<br>
<p>Hope this helps.
<br>
<p><p>On Tue, 2008-06-03 at 19:57 +0900, 8mj6tc902_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; So I'm working on this program which has many ways it might possibly die
</span><br>
<span class="quotelev1">&gt; at runtime, but one of them that happens frequently is the user types a
</span><br>
<span class="quotelev1">&gt; wrong (non-existant) filename on the command prompt. As it is now, the
</span><br>
<span class="quotelev1">&gt; node looking for the file notices the file doesn't exist and tries to
</span><br>
<span class="quotelev1">&gt; terminate the program. It tries to call MPI_Finalize(), but the other
</span><br>
<span class="quotelev1">&gt; nodes are all waiting for a message from the node doing the file
</span><br>
<span class="quotelev1">&gt; reading, so MPI_Finalize waits forever until the user realizes the job
</span><br>
<span class="quotelev1">&gt; isn't doing anything and terminates it manually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, my question is: what's the &quot;correct&quot; graceful way to handle
</span><br>
<span class="quotelev1">&gt; situations like this? Is there some MPI function which can basically
</span><br>
<span class="quotelev1">&gt; throw an exception to all other nodes telling them bail out now? Or is
</span><br>
<span class="quotelev1">&gt; correct behaviour just to have the node that spotted the error die
</span><br>
<span class="quotelev1">&gt; quietly and wait for the others to notice?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any suggestions!
</span><br>
<pre>
-- 
Dr. Terry Frankcombe
Research School of Chemistry, Australian National University
Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5785.php">David Singleton: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Previous message:</strong> <a href="5783.php">Jeff Squyres: "Re: [OMPI users] File download sizes"</a>
<li><strong>In reply to:</strong> <a href="5780.php">8mj6tc902_at_[hidden]: "[OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5785.php">David Singleton: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
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
