<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  2 08:37:06 2010" -->
<!-- isoreceived="20100502123706" -->
<!-- sent="Sun, 02 May 2010 22:36:40 +1000" -->
<!-- isosent="20100502123640" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing" -->
<!-- id="D45958078CD65C429557B4C5F492B6A60770E4BB_at_IS-EX-BEV3.unimelb.edu.au" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="29334.128.165.0.81.1272769426.squirrel_at_webmail.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-02 08:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7865.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/05/10 23:03, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; I call shmctl IPC_RMID immediately after one process has
</span><br>
<span class="quotelev1">&gt; attached to the segment because, at least on Linux, this
</span><br>
<span class="quotelev1">&gt; only marks the segment for destruction.
</span><br>
<p>That's correct, looking at the kernel code (at least in the
<br>
current git master) the function that handles this - do_shm_rmid()
<br>
in ipc/shm.c - only destroys the segment if nobody is attached
<br>
to it, otherwise it marks the segment as IPC_PRIVATE to stop
<br>
others finding it and with SHM_DEST so that it is automatically
<br>
destroyed on the last detach.
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
  Christopher Samuel - Senior Systems Administrator
  VLSCI - Victorian Life Sciences Computational Initiative
  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7865.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
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
