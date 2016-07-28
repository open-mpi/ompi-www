<?
$subject_val = "[OMPI users] Error with MPI_Register_datarep";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 14:47:44 2016" -->
<!-- isoreceived="20160310194744" -->
<!-- sent="Thu, 10 Mar 2016 14:47:42 -0500" -->
<!-- isosent="20160310194742" -->
<!-- name="&#195;&#137;ric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] Error with MPI_Register_datarep" -->
<!-- id="56E1CF5E.5060107_at_giref.ulaval.ca" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Error with MPI_Register_datarep<br>
<strong>From:</strong> &#195;&#137;ric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 14:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28678.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28676.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a segfault while trying to use MPI_Register_datarep with 
<br>
openmpi-1.10.2:
<br>
<p>mpic++ -g -o int64 int64.cc
<br>
./int64
<br>
[melkor:24426] *** Process received signal ***
<br>
[melkor:24426] Signal: Segmentation fault (11)
<br>
[melkor:24426] Signal code: Address not mapped (1)
<br>
[melkor:24426] Failing at address: (nil)
<br>
[melkor:24426] [ 0] /lib64/libpthread.so.0(+0xf1f0)[0x7f66cfb731f0]
<br>
[melkor:24426] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p>I have attached the beginning of a test program that use this function.
<br>
<p>(and btw a totally different error occur with mpich: 
<br>
<a href="http://lists.mpich.org/pipermail/discuss/2016-March/004586.html">http://lists.mpich.org/pipermail/discuss/2016-March/004586.html</a>)
<br>
<p>Can someone help me?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28677/int64.cc">int64.cc</a>
</ul>
<!-- attachment="int64.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28678.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28676.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
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
