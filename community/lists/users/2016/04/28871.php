<?
$subject_val = "[OMPI users] Question on MPI_Comm_spawn timing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 01:50:46 2016" -->
<!-- isoreceived="20160403055046" -->
<!-- sent="Sun, 3 Apr 2016 05:50:43 +0000" -->
<!-- isosent="20160403055043" -->
<!-- name="Emani, Murali" -->
<!-- email="emani1_at_[hidden]" -->
<!-- subject="[OMPI users] Question on MPI_Comm_spawn timing" -->
<!-- id="D325FD43.1E9D%emani1_at_llnl.gov" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Question on MPI_Comm_spawn timing<br>
<strong>From:</strong> Emani, Murali (<em>emani1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-03 01:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Previous message:</strong> <a href="28870.php">dpchoudh .: "[OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Reply:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am trying to evaluate the time taken for MPI_Comm_spawn operation in the
<br>
latest version of OpenMPI. Here a parent communicator (all processes, not
<br>
just the root) spawns one new child process (separate executable). The
<br>
code I&#185;m executing is
<br>
<p>main(){
<br>
{
<br>
&#138;..
<br>
// MPI initialization
<br>
&#138;..
<br>
start1 = MPI_Wtime();
<br>
MPI_Comm_spawn(&#179;./child&quot;, MPI_ARGV_NULL,1, MPI_INFO_NULL, 0,
<br>
MPI_COMM_WORLD, &amp;inter_communicator, MPI_ERRCODES_IGNORE );
<br>
End = MPI_Wtime();
<br>
<p>printf(&#179; spawn time: %f&#178;, (end-start));
<br>
MPI_Barrier(inter_communicator); // spawn is collective, but still want to
<br>
ensure it using a barrier
<br>
..
<br>
..
<br>
// MPI finalize
<br>
}
<br>
<p><p>In child.c
<br>
main(){
<br>
{
<br>
&#138;..
<br>
// MPI initialization
<br>
&#138;..
<br>
<p>MPI_Comm_get_parent(&amp;parentcomm); // gets the inter-communicator
<br>
MPI_Barrier(parentcomm);
<br>
..
<br>
..
<br>
// MPI finalize
<br>
}
<br>
<p>My observation is that the spawn time is very high (almost 80% of the
<br>
total program execution time). It increases exponentially with the number
<br>
of processes in the parent communicator. Is this method correct, and is
<br>
the MPI_Comm_spawn operation expensive.
<br>
I have also tried MPI_Comm_spawn_multiple but it still measures the same
<br>
time.
<br>
<p>Could kindly someone guide me in this issue.
<br>
<p>Thanks,
<br>
Murali
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Previous message:</strong> <a href="28870.php">dpchoudh .: "[OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Reply:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
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
