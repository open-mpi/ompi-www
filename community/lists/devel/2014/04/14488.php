<?
$subject_val = "[OMPI devel] Restarting and Pipes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 11:03:38 2014" -->
<!-- isoreceived="20140410150338" -->
<!-- sent="Thu, 10 Apr 2014 17:03:37 +0200" -->
<!-- isosent="20140410150337" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] Restarting and Pipes" -->
<!-- id="20140410150337.GC18762_at_lisas.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Restarting and Pipes<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 11:03:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14489.php">Ralph Castain: "Re: [OMPI devel] Restarting and Pipes"</a>
<li><strong>Previous message:</strong> <a href="14487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14489.php">Ralph Castain: "Re: [OMPI devel] Restarting and Pipes"</a>
<li><strong>Reply:</strong> <a href="14489.php">Ralph Castain: "Re: [OMPI devel] Restarting and Pipes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trying to restart a process I see that orterun has three pipes connected
<br>
to the processes running under its control (-np 1).
<br>
<p>orterun:
<br>
<p><p>orterun 11562 adrian   15w     FIFO                0,8      0t0 5304173 pipe
<br>
orterun 11562 adrian   16r     FIFO                0,8      0t0 5304174 pipe
<br>
orterun 11562 adrian   18r     FIFO                0,8      0t0 5304175 pipe
<br>
<p><p>test-case (orte-test):
<br>
<p>orte-test 11565 adrian    0r     FIFO                0,8      0t0 5304173 pipe
<br>
orte-test 11565 adrian    1u      CHR             136,15      0t0      18 /dev/pts/15
<br>
orte-test 11565 adrian    2w     FIFO                0,8      0t0 5304174 pipe
<br>
[...]
<br>
orte-test 11565 adrian   19w     FIFO                0,8      0t0 5304175 pipe
<br>
<p>So fd 0 and fd 2 is clear why they are connected from orterun to the test-case
<br>
but what is fd 19?
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14488/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14489.php">Ralph Castain: "Re: [OMPI devel] Restarting and Pipes"</a>
<li><strong>Previous message:</strong> <a href="14487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14489.php">Ralph Castain: "Re: [OMPI devel] Restarting and Pipes"</a>
<li><strong>Reply:</strong> <a href="14489.php">Ralph Castain: "Re: [OMPI devel] Restarting and Pipes"</a>
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
