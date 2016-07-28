<?
$subject_val = "[OMPI devel] Singletons";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 29 13:35:23 2016" -->
<!-- isoreceived="20160229183523" -->
<!-- sent="Mon, 29 Feb 2016 13:35:22 -0500" -->
<!-- isosent="20160229183522" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Singletons" -->
<!-- id="CAMJJpkUOx5=Cbpw1r8DVKMJVm3f6=_Ugrwjz3YB71Zn3waiPEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Singletons<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-29 13:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI devel] Singletons"</a>
<li><strong>Previous message:</strong> <a href="18641.php">Jeff Squyres (jsquyres): "[OMPI devel] Enabled threading tests in Cisco MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI devel] Singletons"</a>
<li><strong>Reply:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI devel] Singletons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Singletons are broken with version (e5d6b97db4fa1) compiled in both debug
<br>
and optimized builds. I got this on my OS X laptop, I can try on a linux
<br>
machine if necessary.
<br>
<p>The error message is attached below. My application is calling
<br>
MPI_Init_thread, but this is not the root of the problem as a simple
<br>
MPI_Init/MPI_Finalize fails with a similar message.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p><p>--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;init pmix failed
<br>
&nbsp;&nbsp;--&gt; Returned value Bad parameter (-5) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_init failed
<br>
&nbsp;&nbsp;--&gt; Returned value Bad parameter (-5) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: ompi_rte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Bad parameter&quot; (-5) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init_thread
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[Babuska:42464] Local abort before MPI_INIT completed completed
<br>
successfully, but am not able to aggregate error messages, and not able to
<br>
guarantee that all other processes were killed!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI devel] Singletons"</a>
<li><strong>Previous message:</strong> <a href="18641.php">Jeff Squyres (jsquyres): "[OMPI devel] Enabled threading tests in Cisco MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI devel] Singletons"</a>
<li><strong>Reply:</strong> <a href="18643.php">Ralph Castain: "Re: [OMPI devel] Singletons"</a>
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
