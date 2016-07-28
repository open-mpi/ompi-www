<?
$subject_val = "[OMPI devel] Low mem provokes infinite loop";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 10:21:36 2016" -->
<!-- isoreceived="20160107152136" -->
<!-- sent="Thu, 7 Jan 2016 15:21:32 +0000 (GMT)" -->
<!-- isosent="20160107152132" -->
<!-- name="Michael Rutter" -->
<!-- email="mjr19_at_[hidden]" -->
<!-- subject="[OMPI devel] Low mem provokes infinite loop" -->
<!-- id="alpine.LSU.2.11.1601071455590.13683_at_m1.tcm.phy.cam.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Low mem provokes infinite loop<br>
<strong>From:</strong> Michael Rutter (<em>mjr19_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-07 10:21:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18481.php">Ralph Castain: "Re: [OMPI devel] Contributing to mpi"</a>
<li><strong>Previous message:</strong> <a href="18479.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am finding that OpenMPI 1.10.1 will readily enter an infinite loop 
<br>
continuously printing
<br>
<p>[warn] realloc: Cannot allocate memory
<br>
<p>if its virtual address space is severely restricted. The exact point at 
<br>
which this occurs will be dependent on the code and compiler, but, as an 
<br>
example, a simple &quot;hello world&quot; MPI program compiled with gfortran and run 
<br>
with
<br>
<p>ulimit -S -v 150000
<br>
mpirun ./a.out
<br>
<p>triggered this issue on both a dual and a quad core machine. The failure 
<br>
with slightly larger amounts of VAS (e.g. 200000) is not very elegant (it 
<br>
hangs), but at least it does not then produce an infinite amount of I/O.
<br>
<p>The configure options when building OpenMPI were --enable-static 
<br>
--disable-shared --disable-ipv6 --disable-heterogeneous 
<br>
--enable-mca-no-build=btl-tcp,pls-gridengine,ras-gridengine -without-slurm 
<br>
--disable-io-romio --without-loadleveler --without-memory-manager and the 
<br>
architecture is x86_64 Linux (OpenSuSE 13.1, own build of OpenMPI). The 
<br>
same issue occurs with the Intel compiler suite. The failure does not 
<br>
occur when launching non-MPI codes (such as /bin/echo) with mpirun.
<br>
<p>Regards,
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18481.php">Ralph Castain: "Re: [OMPI devel] Contributing to mpi"</a>
<li><strong>Previous message:</strong> <a href="18479.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<!-- nextthread="start" -->
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
