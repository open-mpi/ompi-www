<?
$subject_val = "[OMPI users] FRQ: Warn if components specified but missing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 09:23:43 2008" -->
<!-- isoreceived="20080804132343" -->
<!-- sent="Mon, 04 Aug 2008 15:23:36 +0200" -->
<!-- isosent="20080804132336" -->
<!-- name="Bernhard Hermann" -->
<!-- email="hermann_at_[hidden]" -->
<!-- subject="[OMPI users] FRQ: Warn if components specified but missing" -->
<!-- id="489702D8.7090701_at_init.at" -->
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
<strong>Subject:</strong> [OMPI users] FRQ: Warn if components specified but missing<br>
<strong>From:</strong> Bernhard Hermann (<em>hermann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 09:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Previous message:</strong> <a href="6258.php">Ralph Castain: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Reply:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We would like to request a warning/error message to be printed whenever
<br>
a component (like &quot;openib&quot;) is specified, but not actually loaded.
<br>
<p>Our case: Running a job via &quot;tcp&quot; over IB went OK, trying to use
<br>
&quot;openib&quot; failed. It turned out that while compiling the &quot;openib&quot; module
<br>
wasn't made (missing path), so OpenMPI croaked when trying to access it.
<br>
<p>This was the error that was of little help to us in tracing the problem:
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.7 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
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
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p><p><p>Unfortunately we can't provide a patch and would be glad if someone
<br>
could implement and include this.
<br>
<p>Thanks for your attention,
<br>
best regards,
<br>
Bernhard HERMANN
<br>
<p>init.at informationstechnologie GmbH.
<br>
<p>Mariahilfer Str. 61/1/10
<br>
1060 Wien/Vienna
<br>
Austria - EU
<br>
<p>Tel: +43 1 522 53 77 - 35
<br>
<p><a href="http://www.init.at">http://www.init.at</a>
<br>
hermann_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Previous message:</strong> <a href="6258.php">Ralph Castain: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Reply:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
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
