<?
$subject_val = "Re: [OMPI users] Failure trying to use tuned collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 08:04:32 2009" -->
<!-- isoreceived="20090810120432" -->
<!-- sent="Mon, 10 Aug 2009 15:04:27 +0300" -->
<!-- isosent="20090810120427" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Failure trying to use tuned collectives" -->
<!-- id="453d39990908100504r5f3301e6qe32fa8497eb1c42e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A7C3D34.3040607_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Failure trying to use tuned collectives<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 08:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10268.php">Dave Love: "Re: [OMPI users] x4100 with IB"</a>
<li><strong>Previous message:</strong> <a href="10266.php">Lenny Verkhovsky: "Re: [OMPI users] compile mpi program on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10207.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By default coll framework scans all avaliable modules and sets the avaliable
<br>
functions with the highest priorities.
<br>
So, to use tuned collectives explicetly you can higher it's priority.
<br>
-mca coll_tuned_priority 100
<br>
p.s. Collective modules can have only partial set of avaliable functions,
<br>
for example module &quot;sm&quot; not necesseraly  has implementation of MPI_Barrier.
<br>
In this case MPI_Barrier will be taken from the module where it is avaliable
<br>
and has highest priority. Which means, that if you run MPI_scatter and the
<br>
MPI_Barrier, then MPI_Scatter will be taken from sm collective and
<br>
MPI_barrier will be taken from tuned collective ( This is an example only ).
<br>
Lenny.
<br>
<p>On Fri, Aug 7, 2009 at 5:41 PM, Craig Tierney &lt;craig.tierney_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; To use tuned collectives, do all I have to do is add --mca coll tuned?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun -np 8 --mca coll tuned --mca orte_base_help_aggregate 0 ./wrf.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But all the processes fail with the folling message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mca_coll_base_comm_select(MPI_COMM_WORLD) failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10268.php">Dave Love: "Re: [OMPI users] x4100 with IB"</a>
<li><strong>Previous message:</strong> <a href="10266.php">Lenny Verkhovsky: "Re: [OMPI users] compile mpi program on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10207.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
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
