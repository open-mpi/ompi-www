<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 21:19:06 2007" -->
<!-- isoreceived="20071011011906" -->
<!-- sent="Wed, 10 Oct 2007 21:19:02 -0400" -->
<!-- isosent="20071011011902" -->
<!-- name="Stephen Guzik" -->
<!-- email="sguzik_at_[hidden]" -->
<!-- subject="[OMPI users] MPI::BOTTOM vs MPI_BOTTOM" -->
<!-- id="470D7A06.4070108_at_utias.utoronto.ca" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Stephen Guzik (<em>sguzik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-10 21:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4196.php">Neeraj Chourasia: "[OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<li><strong>Reply:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>To the Devs. I just noticed that MPI::BOTTOM requires a cast. Not sure 
<br>
if that was intended.
<br>
<p>Compiling 'MPI::COMM_WORLD.Bcast(MPI::BOTTOM, 1, someDataType, 0);' 
<br>
results in:
<br>
error: invalid conversion from &#145;const void*&#146; to &#145;void*&#146;
<br>
error: initializing argument 1 of &#145;virtual void MPI::Comm::Bcast(void*, 
<br>
int, const MPI::Datatype&amp;, int) const&#146;
<br>
<p>MPI_BOTTOM, on the other hand, works without a cast.
<br>
<p>Stephen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4196.php">Neeraj Chourasia: "[OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<li><strong>Reply:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
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
