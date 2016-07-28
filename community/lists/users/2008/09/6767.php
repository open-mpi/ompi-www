<?
$subject_val = "[OMPI users] OpenMPI portability problems: debug info isn't helpful";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 13:28:59 2008" -->
<!-- isoreceived="20080929172859" -->
<!-- sent="Mon, 29 Sep 2008 21:28:50 +0400" -->
<!-- isosent="20080929172850" -->
<!-- name="Aleksej Saushev" -->
<!-- email="asau_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI portability problems: debug info isn't helpful" -->
<!-- id="87wsgu50a5.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI portability problems: debug info isn't helpful<br>
<strong>From:</strong> Aleksej Saushev (<em>asau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 13:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6768.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hello!
<br>
<p>I'm trying to build OpenMPI on NetBSD 4.99.72,
<br>
I'm getting next message either when I'm building in debug mode
<br>
or without it:
<br>
<p>[asau.local:27880] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init_stage1 failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[asau.local:27880] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
<p><p>I tried to ktrace test application (I use benchmarks/skampi as found in pkgsrc
<br>
as test, first because of its availability, second, because it is assumed
<br>
to work, and it does work with MPICH2). I haven't diagnosed any obvious reason
<br>
for failure.
<br>
<p>I built same OpenMPI with debug information (CLFLAGS+=-g) and tried to step
<br>
over &quot;orte_rml_base_select&quot;, &quot;orte_init_stage1&quot; and around.
<br>
This didn't enlighten me either. Is there any design documentation?
<br>
<p>I tried building the same OpenMPI 1.2.7 on test FreeBSD 6.3-STABLE
<br>
(snapshot date unknown) system. Except for passing explicit value
<br>
of NM=/usr/bin/nm (configure doesn't detect it, why? It should
<br>
find _BSD_ nm there), nothing has changed. Test application starts
<br>
fine there.
<br>
<p>I tried to change various verbosity parameters in ~/.openmpi/mca-params.conf,
<br>
but in vain, I haven't succeded any additional messages, that could clarify.
<br>
Have I overlooked anything?
<br>
<p>What have I missed in my diagnostic researches?
<br>
<p>What can I do to make it work on NetBSD 4.99?
<br>
<p>Given the fact that it words on FreeBSD 6, it should work,
<br>
but some subtle difference is depended upon.
<br>
I'd be very grateful for further directions.
<br>
<p><p><pre>
-- 
HE CE3OH...
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6768.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
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
