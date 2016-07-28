<?
$subject_val = "[OMPI users] PML failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 06:05:02 2007" -->
<!-- isoreceived="20071109110502" -->
<!-- sent="Fri, 09 Nov 2007 21:59:39 +1100" -->
<!-- isosent="20071109105939" -->
<!-- name="Clement Kam Man Chu" -->
<!-- email="clement.chu_at_[hidden]" -->
<!-- subject="[OMPI users] PML failed" -->
<!-- id="47343D9B.8040909_at_infotech.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] PML failed<br>
<strong>From:</strong> Clement Kam Man Chu (<em>clement.chu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-09 05:59:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4454.php">Brian Budge: "Re: [OMPI users] multi-threaded MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;When I try to run 1024 processes on 256 cpus, I got the following error:
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
<p>&nbsp;PML add procs failed
<br>
&nbsp;--&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
--------------------------------------------------------------------------
<br>
<p>Regards,
<br>
Clement
<br>
<p><pre>
-- 
Clement Kam Man Chu
Research Assistant
Faculty of Information Technology
Monash University, Caulfield Campus
Ph: 61 3 9903 2355
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4454.php">Brian Budge: "Re: [OMPI users] multi-threaded MPI"</a>
<!-- nextthread="start" -->
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
