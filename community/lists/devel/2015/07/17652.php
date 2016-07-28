<?
$subject_val = "[OMPI devel] race condition in finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 06:11:55 2015" -->
<!-- isoreceived="20150717101155" -->
<!-- sent="Fri, 17 Jul 2015 19:11:45 +0900" -->
<!-- isosent="20150717101145" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] race condition in finalize" -->
<!-- id="CAAkFZ5vTZNEjfGw=WSPq5cFd8OW7O8YbEDoyBkVEQLAK+AY98g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] race condition in finalize<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-17 06:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17653.php">Kawashima, Takahiro: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<li><strong>Previous message:</strong> <a href="17651.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17655.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Reply:</strong> <a href="17655.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I noticed several errors such as
<br>
<a href="http://mtt.open-mpi.org/index.php?do_redir=2244">http://mtt.open-mpi.org/index.php?do_redir=2244</a>
<br>
that did not make any sense to me (at first glance)
<br>
<p>I was able to attach one process when the issue occurs.
<br>
the sigsegv occurs in thread 2, while thread 1 is invoking
<br>
ompi_rte_finalize.
<br>
<p>All I can think is a scenario in which the progress thread (aka thread 2)
<br>
is still dealing with some memory that was just freed/unmapped/corrupted by
<br>
the main thread.
<br>
<p>I empirically noticed the error is more likely to occur when there are many
<br>
tasks on one node
<br>
e.g. mpirun --oversubscribe -np 32 a.out
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17653.php">Kawashima, Takahiro: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<li><strong>Previous message:</strong> <a href="17651.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17655.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Reply:</strong> <a href="17655.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
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
