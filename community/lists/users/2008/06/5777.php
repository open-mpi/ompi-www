<?
$subject_val = "[OMPI users] Proper way to throw an error to all nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 06:57:42 2008" -->
<!-- isoreceived="20080603105742" -->
<!-- sent="Tue, 03 Jun 2008 19:57:30 +0900" -->
<!-- isosent="20080603105730" -->
<!-- name="8mj6tc902_at_[hidden]" -->
<!-- email="8mj6tc902_at_[hidden]" -->
<!-- subject="[OMPI users] Proper way to throw an error to all nodes?" -->
<!-- id="28396-35254_at_sneakemail.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>From:</strong> <a href="mailto:8mj6tc902_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Proper%20way%20to%20throw%20an%20error%20to%20all%20nodes?"><em>8mj6tc902_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-06-03 06:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5778.php">Scott Shaw: "[OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5776.php">Ayer, Timothy  C.: "[OMPI users] HPMPI versus OpenMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5781.php">Terry Frankcombe: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Reply:</strong> <a href="5781.php">Terry Frankcombe: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Maybe reply:</strong> <a href="5782.php">David Singleton: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I'm working on this program which has many ways it might possibly die
<br>
at runtime, but one of them that happens frequently is the user types a
<br>
wrong (non-existant) filename on the command prompt. As it is now, the
<br>
node looking for the file notices the file doesn't exist and tries to
<br>
terminate the program. It tries to call MPI_Finalize(), but the other
<br>
nodes are all waiting for a message from the node doing the file
<br>
reading, so MPI_Finalize waits forever until the user realizes the job
<br>
isn't doing anything and terminates it manually.
<br>
<p>So, my question is: what's the &quot;correct&quot; graceful way to handle
<br>
situations like this? Is there some MPI function which can basically
<br>
throw an exception to all other nodes telling them bail out now? Or is
<br>
correct behaviour just to have the node that spotted the error die
<br>
quietly and wait for the others to notice?
<br>
<p>Thanks for any suggestions!
<br>
<pre>
-- 
--Kris
叶ってしまう瘢雹夢は本当の夢と言えん。
[A dream that comes true can't really be called a dream.]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5778.php">Scott Shaw: "[OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5776.php">Ayer, Timothy  C.: "[OMPI users] HPMPI versus OpenMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5781.php">Terry Frankcombe: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Reply:</strong> <a href="5781.php">Terry Frankcombe: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Maybe reply:</strong> <a href="5782.php">David Singleton: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
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
