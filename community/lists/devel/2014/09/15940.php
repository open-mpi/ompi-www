<?
$subject_val = "[OMPI devel] [patch] libnbc intercommunicator iallgather bug";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 00:22:07 2014" -->
<!-- isoreceived="20140930042207" -->
<!-- sent="Tue, 30 Sep 2014 04:22:01 +0000" -->
<!-- isosent="20140930042201" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] libnbc intercommunicator iallgather bug" -->
<!-- id="20140930132202.ba73a63cc8d6425930374e48_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] libnbc intercommunicator iallgather bug<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 00:22:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15941.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15939.php">Kawashima, Takahiro: "[OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15946.php">Pritchard Jr., Howard: "Re: [OMPI devel] [patch] libnbc intercommunicator iallgather bug"</a>
<li><strong>Reply:</strong> <a href="15946.php">Pritchard Jr., Howard: "Re: [OMPI devel] [patch] libnbc intercommunicator iallgather bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The attached program intercommunicator-iallgather.c outputs
<br>
message &quot;MPI Error in MPI_Testall() (18)&quot; forever and doesn't
<br>
finish. This is because libnbc has typos of send/recv.
<br>
<p>See attached intercommunicator-iallgather.patch for the fix.
<br>
The patch modifies iallgather_inter and iallgather_intra.
<br>
The modification of iallgather_intra is just for symmetry with
<br>
iallgather_inter. Users guarantee the consistency of send/recv.
<br>
<p>Both trunk and v1.8 branch have this issue.
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15940/intercommunicator-iallgather.c">intercommunicator-iallgather.c</a>
</ul>
<!-- attachment="intercommunicator-iallgather.c" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15940/intercommunicator-iallgather.patch">intercommunicator-iallgather.patch</a>
</ul>
<!-- attachment="intercommunicator-iallgather.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15941.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15939.php">Kawashima, Takahiro: "[OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15946.php">Pritchard Jr., Howard: "Re: [OMPI devel] [patch] libnbc intercommunicator iallgather bug"</a>
<li><strong>Reply:</strong> <a href="15946.php">Pritchard Jr., Howard: "Re: [OMPI devel] [patch] libnbc intercommunicator iallgather bug"</a>
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
