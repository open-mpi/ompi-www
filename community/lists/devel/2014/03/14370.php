<?
$subject_val = "[OMPI devel] Open MPI and CRIU stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 09:13:06 2014" -->
<!-- isoreceived="20140319131306" -->
<!-- sent="Wed, 19 Mar 2014 14:13:05 +0100" -->
<!-- isosent="20140319131305" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI and CRIU stdout/stderr" -->
<!-- id="20140319131305.GH13207_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI and CRIU stdout/stderr<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-19 09:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="14369.php">Ralph Castain: "[OMPI devel] 1.7.5 and trunk failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="14371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cross-posting to criu and openmpi devel mailinglists.
<br>
<p>To get fault tolerance back into Open MPI I added code to use criu as
<br>
a checkpoint/restart tool. I can checkpoint a process successfully
<br>
but I have troubles restarting it. CRIU has currently problems restoring
<br>
the process which is probably related stdout/stderr handling.
<br>
<p>(00.026198)  15852: Error (tty.c:541): tty: Can't dup SELF_STDIN_OFF: Bad file descriptor
<br>
<p>What does Open MPI do with the file descriptors for stdout/stderr?
<br>
<p>Would it make sense to close stdout/stderr of each checkpointed process
<br>
before checkpointing it?
<br>
<p>Is there something concerning stdout/stderr which I forgot to handle?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="14369.php">Ralph Castain: "[OMPI devel] 1.7.5 and trunk failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="14371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and CRIU stdout/stderr"</a>
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
