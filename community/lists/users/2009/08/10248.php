<?
$subject_val = "[OMPI users] Failure trying to use tuned collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 10:42:32 2009" -->
<!-- isoreceived="20090807144232" -->
<!-- sent="Fri, 07 Aug 2009 08:41:56 -0600" -->
<!-- isosent="20090807144156" -->
<!-- name="Craig Tierney" -->
<!-- email="craig.tierney_at_[hidden]" -->
<!-- subject="[OMPI users] Failure trying to use tuned collectives" -->
<!-- id="4A7C3D34.3040607_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A7C2FC2.7080402_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI users] Failure trying to use tuned collectives<br>
<strong>From:</strong> Craig Tierney (<em>craig.tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 10:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10249.php">Yann JOBIC: "[OMPI users] pipes system limit"</a>
<li><strong>Previous message:</strong> <a href="10247.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10267.php">Lenny Verkhovsky: "Re: [OMPI users] Failure trying to use tuned collectives"</a>
<li><strong>Reply:</strong> <a href="10267.php">Lenny Verkhovsky: "Re: [OMPI users] Failure trying to use tuned collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To use tuned collectives, do all I have to do is add --mca coll tuned?
<br>
<p>I am trying to run with:
<br>
<p># mpirun -np 8 --mca coll tuned --mca orte_base_help_aggregate 0 ./wrf.exe
<br>
<p>But all the processes fail with the folling message:
<br>
<p>--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;&nbsp;mca_coll_base_comm_select(MPI_COMM_WORLD) failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
<p>Thanks,
<br>
Craig
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10249.php">Yann JOBIC: "[OMPI users] pipes system limit"</a>
<li><strong>Previous message:</strong> <a href="10247.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10267.php">Lenny Verkhovsky: "Re: [OMPI users] Failure trying to use tuned collectives"</a>
<li><strong>Reply:</strong> <a href="10267.php">Lenny Verkhovsky: "Re: [OMPI users] Failure trying to use tuned collectives"</a>
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
