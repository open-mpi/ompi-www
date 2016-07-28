<?
$subject_val = "Re: [OMPI users] orte has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 07:30:46 2016" -->
<!-- isoreceived="20160412113046" -->
<!-- sent="Tue, 12 Apr 2016 13:30:37 +0200" -->
<!-- isosent="20160412113037" -->
<!-- name="Stefan Friedel" -->
<!-- email="stefan.friedel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte has lost communication" -->
<!-- id="20160412113037.GC1487_at_woyzeck" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5sRqURqYEvq4sa=rs8XBTw=SEYn-HRaTeexdoMq5=UqkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte has lost communication<br>
<strong>From:</strong> Stefan Friedel (<em>stefan.friedel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 07:30:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28925.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>In reply to:</strong> <a href="28925.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Reply:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 12, 2016 at 07:51:48PM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt;what if you
</span><br>
<span class="quotelev1">&gt;ulimit -c unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;do orted generate some core dump ?
</span><br>
Hi Gilles,
<br>
-thanks for you support!- nope, no core, just the &quot;orte has lost&quot;...
<br>
<p>I now tested with a simple hello-world mpi program- printf(&quot;rank, processor&quot;) in
<br>
the middle and a printf(&quot;before mpi_init&quot;)/printf(&quot;after mpi_init&quot;).
<br>
<p>Starting in the batch script with
<br>
<p>mpirun -verbose --mca mtl psm --mca btl vader,self --mca orte_base_help_aggregate 0 ~/mpihw/mpi_hello_world
<br>
<p>Results:
<br>
<p>Starting at Tue Apr 12 13:06:38 CEST 2016
<br>
Running on hosts: stek[090-189]
<br>
Running on 100 nodes.
<br>
Current working directory is /export/homelocal/sfriedel/mpihw
<br>
Hello world before mpi_init
<br>
[...]
<br>
Hello world from processor stek150, rank 971 out of 1600 processors
<br>
Program finished with exit code 0 at: Tue Apr 12 13:06:42 CEST 2016
<br>
<p>Even with just 100 nodes: some jobs are failing (50/50), failing jobs: _no
<br>
output_, _no core dumped_...only orte has lost...
<br>
<p>Running on &gt;=350 nodes: almost all jobs are failing, but some jobs succeeded
<br>
(similar output: only &quot;orte has lost...&quot; for failing jobs and the expected
<br>
output for the other jobs).
<br>
<p>Weird.
<br>
<p>MfG/Sincerely
<br>
Stefan Friedel
<br>
<pre>
--
IWR * 4.317 * INF205 * 69120 Heidelberg
T +49 6221 5414404 * F +49 6221 5414427
stefan.friedel_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28926/signature.asc">signature.asc</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28925.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>In reply to:</strong> <a href="28925.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Reply:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
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
