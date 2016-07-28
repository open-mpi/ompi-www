<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 14:55:14 2008" -->
<!-- isoreceived="20080228195514" -->
<!-- sent="Thu, 28 Feb 2008 11:55:08 -0800" -->
<!-- isosent="20080228195508" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather" -->
<!-- id="20080228195508.GG19742_at_mv.qlogic.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20080228163141.GA1027_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather<br>
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 14:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5094.php">John Markus Bj&#248;rndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 28 Feb 2008, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; The trick is to call progress only from functions that are called
</span><br>
<span class="quotelev1">&gt; directly by a user process. Never call progress from a callback functions.
</span><br>
<span class="quotelev1">&gt; The main offenders of this rule are calls to OMPI_FREE_LIST_WAIT(). They
</span><br>
<span class="quotelev1">&gt; should be changed to OMPI_FREE_LIST_GET() and dial with NULL return value.
</span><br>
<p>Right -- and it should be easy to find more offenders by having an
<br>
assert statement soak in the builds for a while (or by default in
<br>
debug mode).
<br>
<p>Was if it was ever part of the (or a) design to allow re-entrant
<br>
calls to progress from the same calling thread ?  It can be done but
<br>
callers have to have a holistic view of how other components require
<br>
and make the progress happen -- this isn't compatible with the Open
<br>
MPI model of independent dynamically loadable components.
<br>
<p><pre>
-- 
christian.bell_at_[hidden]
(QLogic Host Solutions Group, formerly Pathscale)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5094.php">John Markus Bj&#248;rndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
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
